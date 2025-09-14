<?php

namespace App\DataTables\Admin\Course;

use App\Models\Course;
use PDF;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class HoldCoursesDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function ($item) {
                $buttons = '';
                if (auth()->user()->can('Approve Course')) {
                    $buttons .= '<a class="dropdown-item text-success" href="'.route('admin.course.status.change', [$item->id, APPROVED]).'" title="Approve"><i class="ri-shield-check-fill"></i> Approve </a>';
                }
                // if (auth()->user()->can('Edit Course')) {
                //     $buttons .= '<a class="dropdown-item" href="'.route('admin.course.preview.course', $item->uuid).'" title="Edit"><i class="mdi mdi-square-edit-outline"></i> Edit </a>';
                // }
                if (auth()->user()->can('View Course')) {
                    $buttons .= '<a class="dropdown-item text-primary" href="'.route('admin.course.show', $item->slug).'" title="View"><i class="ri-eye-fill"></i> View </a>';
                }
                if (auth()->user()->can('Delete Course')) {
                    $buttons .= '<form action="'.route('admin.course.delete', $item->uuid).'"  id="delete-form-'.$item->id.'" method="post" style="">
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="dropdown-item text-danger" onclick="return makeDeleteRequest(event, '.$item->id.')"  type="submit" title="Delete"><i class="mdi mdi-trash-can-outline"></i> Delete</button></form>
                    ';
                }

                return '<div class="btn-group dropdown">
                    <a href="#" onclick="return false;" class="btn btn-sm btn-dark text-white dropdown-toggle dropdown" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu">
                    '.$buttons.'
                    </div>
                </div>';
            })->editColumn('teacher', function ($item) {
                return $item->user->first_name.' '.$item->user->last_name;
            })
            ->editColumn('category', function ($item) {
                return $item->category->name;
            })
            ->editColumn('price', function ($item) {
                return $item->price ?? 'Free';
            })
            ->rawColumns(['action', 'status'])->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Course $model)
    {
        return $model->newQuery()->hold()->with('user', 'category')->orderBy('id', 'DESC');
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
            // ->addAction(['width' => '55px', 'class' => 'text-center', 'printable' => false, 'exportable' => false, 'title' => 'Action'])
            ->parameters([
                'dom' => 'Bfrtilp',
                'order' => [[0, 'desc']],
                'lengthMenu' => [[15, 25, 50, 100, 500, -1], [15, 25, 50, 100, 500, 'All']],
                'buttons' => [
                    [
                        'text' => 'Bulk Actions',
                        'className' => 'btn btn-primary',
                        'action' => 'function (e, dt, node, config) {
                        $("#bulk-action-container").toggle();
                    }',
                    ],
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
            Column::computed('checkbox')
                ->exportable(false)
                ->printable(false)
                ->width(30)
                ->addClass('text-center')
                ->title('<input type="checkbox" id="select-all">') // Master checkbox
                ->render('function() { return "<input type=\"checkbox\" class=\"select-row\" value=\""+this.id+"\">"; }'),
            Column::computed('DT_RowIndex', 'SL#'),
            Column::make('title', 'title')->title('Title'),
            Column::make('teacher', 'teacher')->title('Teacher'),
            Column::make('category', 'category')->title('Course Category'),
            Column::make('price', 'price')->title('Price'),
            Column::make('action', 'action')->title('Action'),
        ];
    }

    public function pdf()
    {
        $data = $this->getDataForExport();

        $pdf = PDF::loadView('vendor.datatables.print', [
            'data' => $data,
        ]);

        return $pdf->download($this->getFilename().'.pdf');
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function getCustomFilename()
    {
        return 'Admin\HoldCourses_'.date('YmdHis');
    }
}
