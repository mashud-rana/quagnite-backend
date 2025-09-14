<?php

namespace App\Http\Controllers\Admin\Blog;

use App\DataTables\Admin\BlogCommentDataTable;
use App\DataTables\Admin\BlogDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BlogRequest;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use App\Models\BlogTag;
use App\Models\Tag;
use App\Services\Utils\FileService;
use App\Tools\Repositories\Crud;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    protected $model;

    public function __construct(Blog $blog, protected FileService $fileService)
    {
        $this->model = new Crud($blog);

        $this->middleware('permission:All Blogs|Edit Blog|Create Blog|Delete Blog', ['only' => ['index', 'blogCommentList']]);
        $this->middleware('permission:Create Blog', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Blog', ['only' => ['edit', 'update', 'changeBlogCommentStatus']]);
        $this->middleware('permission:Delete Blog', ['only' => ['delete', 'blogCommentDelete']]);
    }

    public function index(BlogDataTable $dataTable)
    {
        set_page_meta('blogs');

        return $dataTable->render('admin.blog.index');
    }

    public function create()
    {
        set_page_meta('Blog');
        $data['blogCategories'] = BlogCategory::all();
        $data['tags'] = Tag::all();

        return view('admin.blog.create', $data);
    }

    public function store(BlogRequest $request)
    {
        try {
            $data = [
                'uuid' => Str::uuid()->toString(),
                'user_id' => auth()->id(),
                'title' => $request->title,
                'details' => $request->details,
                'blog_category_id' => $request->blog_category_id,
                'status' => $request->status,
                'image' => $request->hasFile('image')
                    ? $this->fileService->upload($request->file('image'), 'blog/images')
                    : null,
                'published_at' => $request->status == PUBLISHED ? now() : null,
            ];

            $blog = $this->model->create($data); // Create new blog

            if ($request->tag_ids) {
                foreach ($request->tag_ids as $tag_id) {
                    $blogTag = new BlogTag();
                    $blogTag->blog_id = $blog->id;
                    $blogTag->tag_id = $tag_id;
                    $blogTag->save();
                }
            }
            record_created_flash('Blog post created successfully.');

            return redirect()->route('admin.blog.index');
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash('An error occurred while storing the blog post!');

            return back()->withInput();
        }
    }

    public function edit($id)
    {
        set_page_meta('Edit Blog');
        $data['blog'] = $this->model->getRecordById($id);
        $data['blogTags'] = $data['blog']->tags->pluck('tag_id')->toArray();
        $data['blogCategories'] = BlogCategory::all();
        $data['tags'] = Tag::all();

        return view('admin.blog.edit', $data);
    }

    public function update(BlogRequest $request, $uuid)
    {
        try {
            $blog = $this->model->getRecordByUuid($uuid);

            // Handle image upload and deletion
            if ($request->hasFile('image')) {
                $this->fileService->delete($blog->image);
                $image = $this->fileService->upload($request->file('image'), 'blog/images');
            } else {
                $image = $blog->image;
            }

            // Prepare the data for update
            $data = [
                'title' => $request->title,
                'details' => $request->details,
                'blog_category_id' => $request->blog_category_id,
                'image' => $image,
                'status' => $request->status,
                'published_at' => $request->status == PUBLISHED ? now() : null,
            ];

            // Update the blog
            $this->model->updateByUuid($data, $uuid);

            // Handle tag updates
            if ($request->tag_ids) {
                BlogTag::where('blog_id', $blog->id)->delete();
                foreach ($request->tag_ids as $tag_id) {
                    $blogTag = new BlogTag();
                    $blogTag->blog_id = $blog->id;
                    $blogTag->tag_id = $tag_id;
                    $blogTag->save();
                }
            }

            record_updated_flash('Blog post updated successfully.');

            return back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash('An error occurred while updating the blog post!');

            return back()->withInput();
        }
    }

    public function delete($id)
    {
        $blog = $this->model->getRecordById($id);
        BlogTag::where('blog_id', $blog->id)->delete();

        $this->fileService->delete($blog->image); // delete file from server

        $this->model->delete($id); // delete record

        record_deleted_flash();

        return redirect()->back();
    }

    public function blogCommentList(BlogCommentDataTable $dataTable)
    {
        set_page_meta('blog Comments');

        return $dataTable->render('admin.blog.comments');
    }

    public function changeBlogCommentStatus(Request $request)
    {
        $comment = BlogComment::findOrFail($request->id);
        $comment->status = $request->status;
        $comment->save();

        return response()->json([
            'data' => 'success',
        ]);
    }

    public function blogCommentDelete($id)
    {

        $comment = BlogComment::findOrFail($id);
        // BlogComment::where('parent_id', $id)->delete();
        $comment->delete();

        return redirect()->back();
    }
}
