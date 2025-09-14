<?php

namespace App\Http\Controllers\Admin\PreRequisition\Grade;

use App\DataTables\GradeDataTable;
use App\Http\Controllers\Controller;

class GradeController extends Controller
{
    public function index(GradeDataTable $dataTable)
    {
        set_page_meta('Grade');
        return $dataTable->render('admin.pre_requisitions.grade.index');
    }
}
