<?php

namespace App\DataTables\Admin;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CommentDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  QueryBuilder  $query  Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'comment.action')
            ->addColumn('action', function ($item) {
                $buttons = '';
                if (true || auth()->user()->can('Delete Comment')) {
                    $buttons .= '<form action="'.route('admin.comment.destroy', $item->id).'"  id="delete-form-'.$item->id.'" method="post" style="">
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

            })->addColumn('commentable_type', function ($item) {
                return class_basename($item->commentable_type);
            })->editColumn('status', function ($item) {
                $isPendingSelected = $item->status == PENDING ? 'selected' : '';
                $isActiveSelected = $item->status == ACTIVE ? 'selected' : '';
                $isDeactiveSelected = $item->status == INACTIVE ? 'selected' : '';

                return '
                <form action="'.route('admin.comment.update', $item->id).'"   id="status-form-'.$item->id.'" method="post" style="">
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                    <input type="hidden" name="_method" value="PUT">
                    <select name="status" onchange="makeChangeStatus(event, '.$item->id.')">
                        <option value="'.PENDING.'"'.$isPendingSelected.'>Pending</option>
                        <option value="'.ACTIVE.'"'.$isActiveSelected.'>Active</option>
                        <option value="'.INACTIVE.'"'.$isDeactiveSelected.'>Inactive</option>
                    </select>
                    </form>';
            })
            ->rawColumns(['action', 'status', 'commentable_type'])->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     */
    public function query(Comment $model): QueryBuilder
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
            ->addAction(['width' => '55px', 'class' => 'text-center', 'printable' => false, 'exportable' => false, 'title' => 'Action'])
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
            Column::make('name', 'name')->title('Comment By'),
            Column::make('commentable_type', 'Commented Entity')->title('Commented Entity'),
            Column::make('comment', 'comment')->title('Comment'),
            Column::make('status', 'status')->title('Status'),
        ];
    }

    /**
     * Get filename for export.
     */
    protected function filename(): string
    {
        return 'Comment_'.date('YmdHis');
    }
}
