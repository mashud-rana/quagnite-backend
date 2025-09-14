<?php

namespace App\Http\Controllers\Admin\PreRequisition;

use App\DataTables\Admin\BootcampCategoryDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\BootcampCategoryRequest;
use App\Services\PreRequisition\BootcampCategoryService;

class BootcampCategoryController extends Controller
{
    protected $bootcampCategoryService;

    public function __construct(BootcampCategoryService $bootcampCategoryService)
    {
        $this->bootcampCategoryService = $bootcampCategoryService;

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
    public function index(BootcampCategoryDataTable $dataTable)
    {
        set_page_meta('Bootcamp Category');

        return $dataTable->render('admin.pre_requisitions.bootcamp_category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Bootcamp Category');

        return view('admin.pre_requisitions.bootcamp_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BootcampCategoryRequest $request)
    {
        $data = $request->validated();

        try {
            $this->bootcampCategoryService->storeOrUpdate($data);
            record_created_flash();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();
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
            $item = $this->bootcampCategoryService->get($id);

            set_page_meta('Edit Bootcamp Category');

            return view('admin.pre_requisitions.bootcamp_category.edit', compact('item'));
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();
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
    public function update(BootcampCategoryRequest $request, $id)
    {
        $data = $request->validated();

        try {
            $this->bootcampCategoryService->storeOrUpdate($data, $id);
            record_updated_flash();

            return redirect()->route('admin.bootcamp-categories.index');
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();
        }

        return back();
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
            $this->bootcampCategoryService->delete($id);
            record_deleted_flash();

            return back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();
        }
    }
}
