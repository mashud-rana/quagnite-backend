<?php

namespace App\Http\Controllers\Admin\PreRequisition;

use App\Http\Controllers\Controller;
use App\DataTables\Admin\TeacherCategoryDataTable;
use App\Http\Requests\Admin\TeacherCategoryRequest;
use App\Services\PreRequisition\TeacherCategoryService;

class TeacherCategoryController extends Controller
{
    protected $teacherCategoryService;

    public function __construct(TeacherCategoryService $teacherCategoryService)
    {
        $this->teacherCategoryService = $teacherCategoryService;

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
    public function index(TeacherCategoryDataTable $dataTable)
    {
        set_page_meta('Teacher Category');
        return $dataTable->render('admin.pre_requisitions.teacher_category.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Teacher Category');
        return view('admin.pre_requisitions.teacher_category.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherCategoryRequest $request)
    {
        $data = $request->validated();

        try {
            $this->teacherCategoryService->storeOrUpdate($data);
            record_created_flash();
        } catch (\Exception $e) {
            log_error($e);
        }
        return back();
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            $item = $this->teacherCategoryService->get($id);

            set_page_meta('Edit Teacher Category');
            return view('admin.pre_requisitions.teacher_category.edit', compact('item'));
        } catch (\Exception $e) {
            log_error($e);
        }
        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherCategoryRequest $request, $id)
    {
        $data = $request->validated();

        try {
            $this->teacherCategoryService->storeOrUpdate($data, $id);
            record_updated_flash();
            return redirect()->route('admin.teacher-categories.index');
        } catch (\Exception $e) {
            log_error($e);
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $this->teacherCategoryService->delete($id);
            record_deleted_flash();
            return back();
        } catch (\Exception $e) {
            log_error($e);
        }
    }
}
