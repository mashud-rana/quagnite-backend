<?php

namespace App\DataTables\Admin;

use App\Constants\GlobalConstant;
use App\Models\Ticket;
use PDF;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class CourseTicketDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  mixed  $query  Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function ($item) {
                $buttons = '';
                //                $buttons .= '<a class="dropdown-item" href="' . route('admin.tags.edit', $item->id) . '" title="Change Status"> Change Status </a>';

                $buttons .= '<form action="'.route('admin.ticket.destroy', $item->id).'"  id="delete-form-'.$item->id.'" method="post" style="">
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
            })->editColumn('status', function ($item) {
                return '<span class="badge '.getGlobalStatusBg($item->status).'">'.getGlobalStatusName($item->status).'</span>';
            })
            ->rawColumns(['action', 'status'])->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Ticket $model)
    {
        return $model->where('ticket_for', GlobalConstant::TICKET_TYPE_COURSE)->newQuery()->orderBy('id', 'DESC');
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
            //->parameters($this->getBuilderParameters());
            ->parameters([
                'dom' => 'Bfrtilp',
                'order' => [[0, 'desc']],
                'lengthMenu' => [[10, 25, 50, 100, 500, -1], [10, 25, 50, 100, 500, 'All']],
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
            Column::make('message', 'message')->title('Message'),
            Column::make('status', 'status')->title('Status'),
        ];
    }

    /**
     * Get filename for export.
     */
    protected function filename(): string
    {
        return 'Course_ticket_'.date('YmdHis');
    }

    public function pdf()
    {
        $data = $this->getDataForExport();

        $pdf = PDF::loadView('vendor.datatables.print', [
            'data' => $data,
        ]);

        return $pdf->download($this->getFilename().'.pdf');
    }
}
