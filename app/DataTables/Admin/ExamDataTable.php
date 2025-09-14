<?php

namespace App\DataTables\Admin;

use App\Models\Exam;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use PDF;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ExamDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  QueryBuilder  $query  Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function ($item) {
                $buttons = '';
                if (auth()->user()->can('Edit Exam')) {
                    $buttons .= '<a class="dropdown-item" href="'.route('admin.exams.edit', $item->id).'" title="Edit"><i class="mdi mdi-square-edit-outline"></i> Edit </a>';
                }

                if (auth()->user()->can('Add Exam Question')) {
                    $buttons .= '<a class="dropdown-item" href="'.route('admin.exams.questions', $item->uuid).'" title="Questions"><i class="ri-question-mark"></i> Questions </a>';
                }

                if (auth()->user()->can('Delete Exam')) {
                    $buttons .= '<form action="'.route('admin.exams.destroy', $item->id).'"  id="delete-form-'.$item->id.'" method="post" style="">
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
            })->editColumn('image', function ($item) {
                return '<img class="ic-img-32" src="'.getStoreFile($item->image, $item->storage_type).'" alt="'.$item->title.'" />';
            })->editColumn('status', function ($item) {
                return '<span class="badge '.getGlobalStatusBg($item->status).'">'.getGlobalStatusName($item->status).'</span>';
            })
            ->rawColumns(['action', 'status', 'image'])->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Exam $model)
    {
        return $model->newQuery()->orderBy('id', 'DESC');
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
            ->parameters($this->getBuilderParameters());
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
            Column::make('image', 'image')->title('Image'),
            Column::make('title', 'title')->title('Name'),
            Column::make('price', 'price')->title('Price'),
            Column::make('duration', 'duration')->title('Duration'),
            Column::make('pass_mark', 'pass_mark')->title('Pass Mark'),
            Column::make('status', 'status')->title('Status'),
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
        return 'Exam_'.date('YmdHis');
    }
}
