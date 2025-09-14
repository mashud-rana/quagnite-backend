<?php

namespace App\Http\Controllers\Admin\PreRequisition;

use App\DataTables\Admin\ForumCategoryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ForumCategoryRequest;
use App\Services\PreRequisition\ForumCategoryService;

class ForumCategoryController extends Controller
{
    public function __construct(protected ForumCategoryService $forumCategoryService)
    {
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
    public function index(ForumCategoryDataTable $dataTable)
    {
        set_page_meta('Forum Category');

        return $dataTable->render('admin.pre_requisitions.forum_category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Forum Category');

        return view('admin.pre_requisitions.forum_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ForumCategoryRequest $request)
    {
        $data = $request->validated();

        try {
            $this->forumCategoryService->storeOrUpdate($data);
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
            $item = $this->forumCategoryService->get($id);

            set_page_meta('Edit Forum Category');

            return view('admin.pre_requisitions.forum_category.edit', compact('item'));
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
    public function update(ForumCategoryRequest $request, $id)
    {
        $data = $request->validated();

        try {
            $this->forumCategoryService->storeOrUpdate($data, $id);
            record_updated_flash();

            return redirect()->route('admin.forum-categories.index');
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
            $this->forumCategoryService->delete($id);
            record_deleted_flash();

            return back();
        } catch (\Exception $e) {
            log_error($e);
        }
    }
}
