<?php

namespace App\DataTables\Admin\Ticket;

use App\Models\Ticket;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class TicketDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  QueryBuilder  $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'ticket.action')
            ->addColumn('action', function ($item) {
                $buttons = '';
                if (auth()->user()->can('Show Ticket')) {
                    $buttons .= '<a class="dropdown-item" href="'.route('admin.ticket.show', $item->id).'" title="Show"><i class="mdi mdi-square-edit-outline"></i> Show </a>';
                }

                if (auth()->user()->can('Delete Ticket')) {
                    $buttons .= '<form action="'.route('admin.ticket.destroy', $item->id).'"  id="delete-form-'.$item->id.'" method="post" style="">
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
            })->addColumn('user_name', function ($item) {
                $userName = $item->user->full_name;

                return $userName;
            })->filterColumn('user_name', function ($query, $keyword) {
                $query->whereHas('user', function ($subQuery) use ($keyword) {
                    $subQuery->whereRaw("CONCAT(first_name, ' ', last_name) like ?", ["%{$keyword}%"]);
                });
            })->addColumn('category_name', function ($item) {
                $categoryName = @$item->category->name;

                return $categoryName;
            })->editColumn('ticket_id', function ($item) {
            })->addColumn('assignee_name', function ($item) {
                $assignee_name = @$item->assignedTo->full_name;

                return $assignee_name;
            })->editColumn('ticket_id', function ($item) {
                return '<a href="'.route('admin.ticket.show', $item->id).'" title="show"><i class="ri-ticket-fill"></i>Ticket# '.$item->ticket_id.'</a>';
            })->editColumn('status', function ($item) {
                return '<span class="badge '.getGlobalStatusBg($item->status).'">'.getGlobalStatusName($item->status).'</span>';
            })->rawColumns(['action', 'user_name', 'category_name', 'ticket_id', 'status'])->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     */
    public function query(Ticket $model): QueryBuilder
    {
        return $model->newQuery()->with('user', 'category');
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
    public function getColumns(): array
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
            Column::make('ticket_id', 'ticket_id')->title('Ticket ID'),
            Column::make('user_name', 'user_name')->title('User Name'),
            Column::make('assignee_name', 'assignee_name')->title('Assignee To'),
            Column::make('category_name', 'category_name')->title('Category'),
            Column::make('subject', 'subject')->title('Ticket Subject'),
            Column::make('status', 'status')->title('Status'),
            Column::make('action', 'action')->title('Action'),
        ];
    }

    /**
     * Get filename for export.
     */
    protected function filename(): string
    {
        return 'Ticket_'.date('YmdHis');
    }
}
