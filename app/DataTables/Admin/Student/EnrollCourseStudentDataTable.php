<?php

namespace App\DataTables\Admin\Student;

use App\Models\EnrollCourse;
use PDF;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class EnrollCourseStudentDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function ($item) {
                $buttons = '';
                if (auth()->user()->can('Login Student')) {
                    $buttons .= '<form action="'.route('admin.users.login').'"  id="login-form-'.$item->id.'" method="post" style="">
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                    <input type="hidden" name="_method" value="POST">
                    <input type="hidden" name="user_id" value="'.$item->user_id.'">
                    <button class="dropdown-item text-info" onclick="return makeLoginRequest(event, '.$item->id.')"  type="submit" title="Login"><i class="ri-shield-keyhole-fill"></i> Login</button></form>
                    ';
                }

                return '<div class="btn-group dropdown">
                    <a href="#" onclick="return false;" class="btn btn-sm btn-dark text-white dropdown-toggle dropdown" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu">
                    '.$buttons.'
                    </div>
                </div>';
            })
            ->editColumn('student.first_name', function ($item) {

                return $item->student->first_name;
            })
            ->editColumn('student.last_name', function ($item) {

                return $item->student->last_name;
            })
            ->editColumn('course', function ($item) {
                return $item->course->title;
            })
            ->filterColumn('course', function ($query, $keyword) {
                $query->orWhereHas('course', function ($subQuery) use ($keyword) {
                    $subQuery->where('title', 'like', "%{$keyword}%");
                });
            })
            ->rawColumns(['action', 'course', 'status'])
            ->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param  \App\Models\Admin\Student  $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(EnrollCourse $model)
    {
        return $model->newQuery()->with(['student', 'course'])->orderBy('id', 'DESC');
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            ->addAction(['width' => '55px', 'class' => 'text-center', 'printable' => false, 'exportable' => false, 'title' => 'Action'])
            ->parameters([
                'dom' => 'Bfrtilp',
                'order' => [[0, 'desc']],
                'lengthMenu' => [[15, 25, 50, 100, 500, -1], [15, 25, 50, 100, 500, 'All']],
                'buttons' => [
                    'csv',
                    'excel',
                    'pdf',
                    'print',
                    'reload',
                ],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('DT_RowIndex', 'SL#'),
            Column::make('student.first_name', 'student.first_name')->title('First Name'),
            Column::make('student.last_name', 'student.last_name')->title('Last Name'),
            Column::make('course', 'course')->title('Course'),
            // Column::make('status', 'status')->title('Status'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function getCustomFilename()
    {
        return 'Admin\Student_'.date('YmdHis');
    }

    public function pdf()
    {
        $data = $this->getDataForExport();

        $pdf = PDF::loadView('vendor.datatables.print', [
            'data' => $data,
        ]);

        return $pdf->download($this->getFilename().'.pdf');
    }
}
