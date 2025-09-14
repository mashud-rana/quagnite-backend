<?php

namespace App\DataTables\Admin;

use App\Models\DemoBook;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use PDF;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class DemoBookDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  QueryBuilder  $query  Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function ($item) {
                $buttons = '';
                $buttons .= '<a class="dropdown-item" href="'.route('admin.demo-books.show', $item->id).'" title="Show"><i class="mdi mdi-eye-circle-outline"></i> Show </a>';

                $buttons .= '<form action="'.route('admin.demo-books.destroy', $item->id).'"  id="delete-form-'.$item->id.'" method="post" style="">
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                    <input type="hidden" name="_method" value="DELETE">
                    <button class="dropdown-item text-danger" onclick="return makeDeleteRequest(event, '.$item->id.')"  type="submit" title="Delete"><i class="mdi mdi-trash-can-outline"></i> Delete</button></form>
                    ';

                return '<div class="btn-group dropdown">
                    <a href="#" onclick="return false;" class="btn btn-sm btn-dark text-white dropdown-toggle dropdown" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu">
                    '.$buttons.'
                    </div>
                </div>';
            })
            ->addColumn('data', function ($row) {
                $data = '';
                foreach ($row->attributes as $key => $value) {
                    $formattedKey = $this->formatKey($key);
                    $data .= $formattedKey.': '.$value.'<br/>';
                }

                return $data;
            })
            ->rawColumns(['action', 'data'])->addIndexColumn();
    }

    /**
     * Format the key to a more readable format.
     */
    private function formatKey(string $key): string
    {
        // Replace underscores with spaces and capitalize each word
        return ucwords(str_replace('_', ' ', $key));
    }

    /**
     * Get query source of dataTable.
     */
    public function query(DemoBook $model): QueryBuilder
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
            ->addAction(['width' => '55px', 'class' => 'text-center', 'printable' => false, 'exportable' => false, 'title' => 'Action'])
            ->minifiedAjax()
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
     * Get the dataTable columns definition.
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
            Column::make('data')->title('Data'),
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
     */
    protected function filename(): string
    {
        return 'DemoBook_'.date('YmdHis');
    }
}
