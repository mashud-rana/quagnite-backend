<?php

namespace App\Http\Controllers\Admin\Wiki;

use App\DataTables\Admin\WikiDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\WikiRequest;
use App\Models\Tag;
use App\Models\Wiki;
use App\Models\WikiCategory;
use App\Models\WikiTag;
use App\Services\Utils\FileService;
use App\Tools\Repositories\Crud;
use Illuminate\Support\Str;

class WikiController extends Controller
{
    protected $model;

    public function __construct(Wiki $wiki, protected FileService $fileService)
    {
        $this->model = new Crud($wiki);

        $this->middleware('permission:All Wikis|Edit Wiki|Create Wiki|Delete Wiki', ['only' => ['index']]);
        $this->middleware('permission:Create Wiki', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Wiki', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Wiki', ['only' => ['delete']]);
    }

    public function index(WikiDataTable $dataTable)
    {
        set_page_meta('Wikis');

        return $dataTable->render('admin.wiki.index');
    }

    public function create()
    {
        set_page_meta('Wiki');
        $data['wikiCategories'] = WikiCategory::all();
        $data['tags'] = Tag::all();

        return view('admin.wiki.create', $data);
    }

    public function store(WikiRequest $request)
    {

        $slug = Str::slug($request->title);

        if (Wiki::where('slug', $slug)->count() > 0) {
            $slug = $slug.'-'.rand(100000, 999999);
        }

        $data = [
            'user_id' => auth()->id(),
            'title' => $request->title,
            'slug' => $slug,
            'details' => $request->details,
            'wiki_category_id' => $request->wiki_category_id,
            'status' => $request->status,
            'image' => $request->hasFile('image') ? $this->fileService->upload($request->file('image'), 'wiki/images') : null,
            'published_at' => $request->status == PUBLISHED ? now() : null,
        ];

        $wiki = $this->model->create($data); // create new wiki

        if ($request->tag_ids) {
            foreach ($request->tag_ids as $tag_id) {
                $wikiTag = new WikiTag();
                $wikiTag->wiki_id = $wiki->id;
                $wikiTag->tag_id = $tag_id;
                $wikiTag->save();
            }
        }

        record_created_flash();

        return back();
    }

    public function edit($id)
    {
        set_page_meta('Edit Wiki');
        $data['wiki'] = $this->model->getRecordById($id);
        $data['wikiTags'] = $data['wiki']->tags->pluck('tag_id')->toArray();
        $data['wikiCategories'] = WikiCategory::all();
        $data['tags'] = Tag::all();

        return view('admin.wiki.edit', $data);
    }

    public function update(WikiRequest $request, $id)
    {

        $wiki = $this->model->getRecordById($id);

        if ($request->hasFile('image')) {
            //delete file from located storage

            $this->fileService->delete($wiki->image);

            $image = $this->fileService->upload($request->file('image'), 'wiki/images'); // new file upload into server

        } else {
            $image = $wiki->image;
        }

        $data = [
            'title' => $request->title,
            'details' => $request->details,
            'wiki_category_id' => $request->wiki_category_id,
            'image' => $image,
            'status' => $request->status,
            'published_at' => $request->status == PUBLISHED ? now() : null,
        ];

        $wiki = $this->model->update($data, $id);
        //$wiki = $this->model->getRecordById($data, $id); // update category

        if ($request->tag_ids) {
            WikiTag::where('wiki_id', $wiki->id)->delete();
            foreach ($request->tag_ids as $tag_id) {
                $wikiTag = new WikiTag();
                $wikiTag->wiki_id = $wiki->id;
                $wikiTag->tag_id = $tag_id;
                $wikiTag->save();
            }
        }
        record_updated_flash();

        return back();
    }

    public function delete($id)
    {
        $wiki = $this->model->getRecordById($id);
        WikiTag::where('wiki_id', $wiki->id)->delete();

        $this->fileService->delete($wiki->image); // delete file from server

        $this->model->delete($id); // delete record

        record_deleted_flash();

        return redirect()->back();
    }
}
