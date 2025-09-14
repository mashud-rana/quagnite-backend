<?php

namespace App\Http\Controllers\Admin\Exam;

use App\DataTables\Admin\ExamResultDataTable;
use App\Http\Controllers\Controller;
use App\Models\ExamResult;
use Illuminate\Http\Request;

class ExamResultController extends Controller
{
    public function __construct(

        protected ExamResult $exam_result
    ) {
    }


    public function index(ExamResultDataTable $dataTable)
    {
        set_page_meta('Exams Result');
        return $dataTable->render('admin.exam.result-list');
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {

        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {

        //
    }

    public function destroy($id)
    {
        $item = $this->exam_result->findOrFail($id);

        $item->delete(); // delete record

        record_deleted_flash();

        return back();
    }
}
