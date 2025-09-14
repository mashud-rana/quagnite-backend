<?php

namespace App\DataTables\Admin;

use App\Models\Refund;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Carbon;
use PDF;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class RefundDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  QueryBuilder  $query  Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($item) {
                $buttons = '';
                if (auth()->user()->can('Show Refund Request')) {
                    $buttons .= '<a class="dropdown-item" href="'.route('admin.refund.request.show', $item->id).'" title="View"><i class="ri-eye-fill"></i> View </a>';
                }
                if (auth()->user()->can('Payout Refund Request') && $item->status == PENDING) {
                    $buttons .= '<a class="dropdown-item text-success" href="'.route('admin.refund.request.payout', $item->id).'" title="Payout"><i class="ri-bank-card-fill"></i> Payout </a>';
                }

                if (auth()->user()->can('Payout Refund Request') && $item->status == PENDING) {
                    $buttons .= '<a class="dropdown-item text-success" href="'.route('admin.refund.request.partialPayout', $item->id).'" title="Partial Payout"><i class="ri-bank-card-fill"></i>Partial Payout </a>';
                }

                if (auth()->user()->can('Reject Refund Request')) {
                    $buttons .= '<form action="'.route('admin.refund.request.reject', $item->id).'"  id="reject-form-'.$item->id.'" method="post" style="">
                <input type="hidden" name="_token" value="'.csrf_token().'">
                <input type="hidden" name="_method" value="POST">
                <button class="dropdown-item text-danger" onclick="return makeRejectRequest(event, '.$item->id.')"  type="submit" title="Reject"><i class="ri-delete-bin-2-line"></i> Reject</button></form>';
                }

                return '<div class="btn-group dropdown">
                <a href="#" onclick="return false;" class="btn btn-sm btn-dark text-white dropdown-toggle dropdown" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                <div class="dropdown-menu">
                '.$buttons.'
                </div>
            </div>';
            })->editColumn('status', function ($item) {

                return '<span class="badge '.getGlobalStatusBg($item->status).'">'.getGlobalStatusName($item->status).'</span>';
            })
            ->editColumn('date', function ($item) {
                return Carbon::parse($item->created_at)->format('j F, Y');
            })
            ->editColumn('name', function ($item) {
                return $item->user->first_name.' '.$item->user->last_name;
            })
            ->editColumn('email', function ($item) {
                return $item->user->email;
            })
            ->rawColumns(['action', 'status'])->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     */
    public function query(Refund $model): QueryBuilder
    {
        return $model->newQuery()->orderBy('id', 'DESC');
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
            Column::make('date', 'date')->title('Date'),
            Column::make('name', 'name')->title('Name'),
            Column::make('email', 'email')->title('Email'),
            Column::make('amount', 'amount')->title('Requested Amount'),
            Column::make('refund_amount', 'refund_amount')->title('Refunded Amount'),
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
     */
    protected function filename(): string
    {
        return 'Refund_'.date('YmdHis');
    }
}
