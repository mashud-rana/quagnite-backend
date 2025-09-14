<?php

namespace App\DataTables\Admin;

use App\Models\ExamResult;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ExamResultDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  QueryBuilder  $query  Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'examresult.action')
            // ->addColumn('action', function ($item) {
            //     $buttons = '';
            //     if (true || auth()->user()->can('Delete Exam')) {
            //         $buttons .= '<form action="' . route('admin.enroll-exams.destroy', $item->id) . '"  id="delete-form-' . $item->id . '" method="post" style="">
            //         <input type="hidden" name="_token" value="' . csrf_token() . '">
            //         <input type="hidden" name="_method" value="DELETE">
            //         <button class="dropdown-item text-danger" onclick="return makeDeleteRequest(event, ' . $item->id . ')"  type="submit" title="Delete"><i class="mdi mdi-trash-can-outline"></i> Delete</button></form>
            //         ';
            //     }

            //     return '<div class="btn-group dropdown">
            //         <a href="#" onclick="return false;" class="btn btn-sm btn-dark text-white dropdown-toggle dropdown" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
            //         <div class="dropdown-menu">
            //         ' . $buttons . '
            //         </div>
            //     </div>';
            // })
            ->addColumn('student_name', function ($item) {
                $student_name = $item->user->full_name;

                return $student_name;
            })
            ->addColumn('exam_name', function ($item) {
                $exam_name = $item->exam->title;

                return $exam_name;
            })
            ->rawColumns(['student_name', 'exam_name'])->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     */
    public function query(ExamResult $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->minifiedAjax()
            // ->addAction(['width' => '55px', 'class' => 'text-center', 'printable' => false, 'exportable' => false, 'title' => 'Action'])
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
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('DT_RowIndex', 'SL#'),
            Column::make('student_name', 'student_name')->title('Student Name'),
            Column::make('exam_name', 'exam_name')->title('Exam Name'),
            Column::make('score', 'score')->title('Score'),
            Column::make('correct_ans', 'correct_ans')->title('Correct Answer'),
            Column::make('wrong_ans', 'wrong_ans')->title('Wrong Answer'),
        ];
    }

    /**
     * Get filename for export.
     */
    protected function filename(): string
    {
        return 'ExamResult_'.date('YmdHis');
    }
}
