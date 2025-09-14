<?php

namespace App\DataTables\Admin;

use App\Models\ForumPost;
use Carbon\Carbon;
use PDF;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class ForumDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function ($item) {
                $buttons = '';
                if (auth()->user()->can('Delete Forum')) {
                    $buttons .= '<form action="'.route('admin.forum.delete', $item->id).'"  id="delete-form-'.$item->id.'" method="post" style="">
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
                $isPendingSelected = $item->status == PENDING ? 'selected' : '';
                $isActiveSelected = $item->status == ACTIVE ? 'selected' : '';
                $isDeactiveSelected = $item->status == INACTIVE ? 'selected' : '';

                return '
                <form action="'.route('admin.forum.changeStatus', $item->id).'"   id="status-form-'.$item->id.'" method="post" style="">
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                    <input type="hidden" name="_method" value="PUT">
                    <select name="status" onchange="makeChangeStatus(event, '.$item->id.')">
                        <option value="'.PENDING.'"'.$isPendingSelected.'>Pending</option>
                        <option value="'.ACTIVE.'"'.$isActiveSelected.'>Active</option>
                        <option value="'.INACTIVE.'"'.$isDeactiveSelected.'>Inactive</option>
                    </select>
                    </form>';
            })
            ->editColumn('created_at', function ($item) {
                return Carbon::parse($item->created_at)->format('j F, Y');
            })
            ->editColumn('user_id', function ($item) {
                return $item->user->first_name.' '.$item->user->last_name;
            })
            ->rawColumns(['action', 'status'])->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param  CourseCategory  $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(ForumPost $model)
    {
        return $model->newQuery()->with('user')->orderBy('id', 'DESC');
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
            Column::make('user_id', 'user_id')->title('Posted By'),
            Column::make('created_at', 'created_at')->title('Created at'),
            Column::make('status', 'status')->title('Status'),
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
        return 'Admin\ForumPost_'.date('YmdHis');
    }
}
