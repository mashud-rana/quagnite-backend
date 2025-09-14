<?php

namespace App\Http\Controllers\Admin\PreRequisition;

use App\DataTables\Admin\TagCategoryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TagCategoryRequest;
use App\Services\PreRequisition\TagCategoryService;

class TagCategoryController extends Controller
{
    protected $tagCategoryService;

    public function __construct(TagCategoryService $tagCategoryService)
    {
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
    public function index(TagCategoryDataTable $dataTable)
    {
        set_page_meta('Tag Category');

        return $dataTable->render('admin.pre_requisitions.tag_category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Tag Category');

        return view('admin.pre_requisitions.tag_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TagCategoryRequest $request)
    {
        $data = $request->validated();

        try {
            $this->tagCategoryService->storeOrUpdate($data);
            record_created_flash();
        } catch (\Exception $e) {
            log_error($e);
        }

        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
            $item = $this->tagCategoryService->get($id);

            set_page_meta('Edit Tag Category');

            return view('admin.pre_requisitions.tag_category.edit', compact('item'));
        } catch (\Exception $e) {
            log_error($e);
        }

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TagCategoryRequest $request, $id)
    {
        $data = $request->validated();

        try {
            $this->tagCategoryService->storeOrUpdate($data, $id);
            record_updated_flash();

            return redirect()->route('admin.tag-categories.index');
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
            $this->tagCategoryService->delete($id);
            record_deleted_flash();

            return redirect()->route('admin.tag-categories.index');
        } catch (\Exception $e) {
            log_error($e);

            return back();
        }
    }
}
