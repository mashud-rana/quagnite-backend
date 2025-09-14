<?php

namespace App\Http\Controllers\Admin\PreRequisition;

use App\DataTables\Admin\TagDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagRequest;
use App\Services\PreRequisition\TagCategoryService;
use App\Services\PreRequisition\TagService;

class TagController extends Controller
{
    protected $tagSevice;

    protected $tagCategoryService;

    public function __construct(
        TagService $tagSevice,
        TagCategoryService $tagCategoryService
    ) {
        $this->tagSevice = $tagSevice;
        $this->tagCategoryService = $tagCategoryService;

        $this->middleware('permission:All Pre-Requisitions|Edit Pre-Requisition|Create Pre-Requisition|Delete Pre-Requisition', ['only' => ['index']]);
        $this->middleware('permission:Create Pre-Requisition', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Pre-Requisition', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Pre-Requisition', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TagDataTable $dataTable)
    {
        set_page_meta('Tag');

        return $dataTable->render('admin.pre_requisitions.tag.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create tag');

        $tag_categories = $this->tagCategoryService->getActiveData();

        return view('admin.pre_requisitions.tag.create', compact('tag_categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\TagRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagRequest $request)
    {
        $data = $request->validated();

        try {
            $this->tagSevice->storeOrUpdate($data);
            record_created_flash();
        } catch (\Exception $e) {
            log_error($e);
        }

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            set_page_meta('Edit tag category');

            $item = $this->tagSevice->get($id);
            $tag_categories = $this->tagCategoryService->getActiveData();

            return view('admin.pre_requisitions.tag.edit', compact('item', 'tag_categories'));
        } catch (\Exception $e) {
            log_error($e);
        }

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\TagRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagRequest $request, $id)
    {
        $data = $request->validated();

        try {
            $this->tagSevice->storeOrUpdate($data, $id);
            record_updated_flash();

            return redirect()->route('admin.tags.index');
        } catch (\Exception $e) {
            log_error($e);

            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->tagSevice->delete($id);
            record_deleted_flash();

            return back();
        } catch (\Exception $e) {
            log_error($e);

            return back();
        }
    }
}
