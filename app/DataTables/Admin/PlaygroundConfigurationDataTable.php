<?php

namespace App\DataTables\Admin;

use App\Models\PlaygroundConfiguration;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PlaygroundConfigurationDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  QueryBuilder  $query  Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'playgroundconfiguration.action')
            ->addColumn('action', function ($item) {
                $buttons = '';
                if (auth()->user()->can('Edit Playground')) {
                    $buttons .= '<a class="dropdown-item" href="'.route('admin.playground.configuration.edit', $item->id).'" title="Edit"><i class="mdi mdi-square-edit-outline"></i> Edit </a>';
                }

                return '<div class="btn-group dropdown">
                    <a href="#" onclick="return false;" class="btn btn-sm btn-dark text-white dropdown-toggle dropdown" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu">
                    '.$buttons.'
                    </div>
                </div>';

            })->editColumn('playground_id', function ($item) {
                return $item->playground->title;
            })
            ->rawColumns(['action'])->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     */
    public function query(PlaygroundConfiguration $model): QueryBuilder
    {
        return $model->newQuery()->with('playground');
    }

    /**
     * Optional method if you want to use html builder.
     */
    public function html(): HtmlBuilder
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
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::computed('DT_RowIndex', 'SL#'),
            Column::make('playground_id', 'playground_id')->title('Playground Name'),
        ];
    }

    /**
     * Get filename for export.
     */
    protected function filename(): string
    {
        return 'PlaygroundConfiguration_'.date('YmdHis');
    }
}
