<?php

namespace App\DataTables;

use PDF;
use App\Models\Grade;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class GradeDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            //            ->addColumn('action', function ($item) {
            //                $buttons = '';
            ////                $buttons .= '<a class="dropdown-item" href="' . route('admin.tags.edit', $item->id) . '" title="Change Status"> Change Status </a>';
            //
            //                $buttons .= '<form action="' . route('admin.ticket.destroy', $item->id) . '"  id="delete-form-' . $item->id . '" method="post" style="">
            //                    <input type="hidden" name="_token" value="' . csrf_token() . '">
            //                    <input type="hidden" name="_method" value="DELETE">
            //                    <button class="dropdown-item text-danger" onclick="return makeDeleteRequest(event, ' . $item->id . ')"  type="submit" title="Delete"><i class="mdi mdi-trash-can-outline"></i> Delete</button></form>
            //                    ';
            //
            //                return '<div class="btn-group dropdown">
            //                    <a href="#" onclick="return false;" class="btn btn-sm btn-dark text-white dropdown-toggle dropdown" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
            //                    <div class="dropdown-menu">
            //                    ' . $buttons . '
            //                    </div>
            //                </div>';
            //            })
            ->editColumn('percentage', function ($item) {
                return $percentage = $item->start_percentage . ' - ' . $item->end_percentage;
            })
            ->filterColumn('percentage', function ($query, $keyword) {
                $query->whereRaw("CONCAT(start_percentage, ' - ', end_percentage) like ?", ["%{$keyword}%"]);
            })
            // ->rawColumns(['action', 'percentage', 'status'])
            ->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Grade $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Grade $model)
    {
        return $model->newQuery()->orderBy('id', 'ASC');
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
            //            ->addAction(['width' => '55px', 'class' => 'text-center', 'printable' => false, 'exportable' => false, 'title' => 'Action'])
            ->parameters([
                'dom'        => 'Bfrtilp',
                'order'      => [[0, 'desc']],
                'lengthMenu' => [[15, 25, 50, 100, 500, -1], [15, 25, 50, 100, 500, "All"]],
                'buttons'    => [
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
            Column::make('letter_grade', 'letter_grade')->title('Letter Grade'),
            Column::make('GPA', 'GPA')->title('GPA'),
            Column::make('percentage', 'percentage')->title('Percentage'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename(): string
    {
        return 'Grade_' . date('YmdHis');
    }

    public function pdf()
    {
        $data = $this->getDataForExport();

        $pdf = PDF::loadView('vendor.datatables.print', [
            'data' => $data
        ]);
        return $pdf->download($this->getFilename() . '.pdf');
    }
}
