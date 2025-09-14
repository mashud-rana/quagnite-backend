<?php

namespace App\Http\Controllers\Admin\Exam;

use App\Models\EnrollExam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataTables\Admin\EnrollExamDataTable;

class EnrollExamController extends Controller
{
    public function __construct(

        protected EnrollExam $enroll_exam
    ) {
    }


    public function index(EnrollExamDataTable $dataTable)
    {
        set_page_meta('Enroll Exams');
        return $dataTable->render('admin.exam.enroll-list');
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
        $item = $this->enroll_exam->findOrFail($id);

        $item->delete(); // delete record

        record_deleted_flash();

        return back();
    }
}
