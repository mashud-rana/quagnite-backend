<?php

namespace App\DataTables\Admin\Event;

use App\Models\Event;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class MemberEventDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  QueryBuilder  $query  Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'memberevent.action')
            ->addColumn('action', function ($item) {
                $buttons = '';
                if (auth()->user()->can('Edit Event')) {
                    $buttons .= '<a class="dropdown-item" href="'.route('admin.event.events.edit', $item->id).'" title="Edit"><i class="mdi mdi-square-edit-outline"></i> Edit </a>';
                }

                if (auth()->user()->can('Delete Event')) {
                    $buttons .= '<form action="'.route('admin.event.events.destroy', $item->id).'"  id="delete-form-'.$item->id.'" method="post" style="">
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
            })->editColumn('status', function ($item) {
                return '<span class="badge '.getGlobalStatusBg($item->status).'">'.getGlobalStatusName($item->status).'</span>';
            })->editColumn('event_start', function ($item) {
                return custom_datetime($item->event_start);
            })->addColumn('user_name', function ($item) {
                $userName = $item->user->full_name;

                return $userName;
            })
            ->rawColumns(['action', 'user_name', 'status'])->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param  \App\Models\MemberEvent  $model
     */
    public function query(Event $model): QueryBuilder
    {
        return $model->newQuery()
            ->whereHas('user', function ($query) {
                $query->where('user_type', 'member');
            });
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
            ->parameters($this->getBuilderParameters())
            ->buttons([
                [
                    'text' => 'Bulk Actions',
                    'className' => 'btn btn-primary',
                    'action' => 'function (e, dt, node, config) {
                    $("#bulk-action-container").toggle();
                }',
                ],
                Button::make('csv'),
                Button::make('excel'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reload'),
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
            Column::make('title', 'title')->title('Event Name'),
            Column::make('user_name', 'user_name')->title('Created By'),
            Column::make('event_start', 'event_start')->title('Event Start'),
            Column::make('status', 'status')->title('Status'),
        ];
    }

    /**
     * Get filename for export.
     */
    protected function filename(): string
    {
        return 'MemberEvent_'.date('YmdHis');
    }
}
