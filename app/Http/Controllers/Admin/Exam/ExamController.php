<?php

namespace App\Http\Controllers\Admin\Exam;

use App\DataTables\Admin\ExamDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ExamRequest;
use App\Models\Exam;
use App\Services\Utils\FileService;

class ExamController extends Controller
{
    public function __construct(protected FileService $fileService, protected Exam $exam)
    {
        $this->middleware('permission:All Exams|Edit Exam|Create Exam|Delete Exam', ['only' => ['index']]);
        $this->middleware('permission:Create Exam', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Exam', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Exam', ['only' => ['destroy']]);
    }

    public function index(ExamDataTable $dataTable)
    {
        set_page_meta('Exams');

        return $dataTable->render('admin.exam.index');
    }

    public function create()
    {
        set_page_meta('Exam Create');

        return view('admin.exam.create');
    }

    public function store(ExamRequest $request)
    {
        try {
            $data = $request->validated();

            $data['image'] = $request->hasFile('image') ? $this->fileService->upload($request->file('image'), 'exam/images') : null;

            $this->exam->create($data);

            record_created_flash('Exam created successfully');

            return back();

        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();

            return back();
        }
    }

    public function edit($id)
    {
        set_page_meta('Edit Exam');
        $data['exam'] = $this->exam->findOrFail($id);

        return view('admin.exam.edit', $data);
    }

    public function update(ExamRequest $request, $id)
    {

        try {
            $exam = $this->exam->findOrFail($id);

            if ($request->hasFile('image')) {
                //delete file from located storage

                $this->fileService->delete($exam->image);

                $image = $this->fileService->upload($request->file('image'), 'exam/images'); // new file upload into server

            } else {
                $image = $exam->image;
            }

            $data = $request->validated();

            $data['image'] = $image;

            $exam->update($data);

            record_updated_flash();

            return back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();

            return back();
        }
    }

    public function destroy($id)
    {
        try {
            $exam = $this->exam->findOrFail($id);

            $this->fileService->delete($exam->image); // delete file from server

            $exam->delete(); // delete record

            record_deleted_flash();

            return back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();

            return back();
        }
    }
}
