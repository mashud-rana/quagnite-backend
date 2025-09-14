<?php

namespace App\DataTables\Admin;

use App\Models\Withdraw;
use Carbon\Carbon;
use PDF;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class WithdrawRequestDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function ($item) {
                $buttons = '';
                if (auth()->user()->can('Show Withdraw Request')) {
                    $buttons .= '<a class="dropdown-item" href="'.route('admin.withdraw.request.show', $item->id).'" title="View"><i class="ri-eye-fill"></i> View </a>';
                }
                if (auth()->user()->can('Payout Withdraw Request') && $item->status == PENDING) {
                    $buttons .= '<a class="dropdown-item text-success" href="'.route('admin.withdraw.request.payout', $item->id).'" title="Payout"><i class="ri-bank-card-fill"></i> Payout </a>';
                }

                if (auth()->user()->can('Reject Withdraw Request')) {
                    $buttons .= '<form action="'.route('admin.withdraw.request.reject', $item->id).'"  id="reject-form-'.$item->id.'" method="post" style="">
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
     *
     * @param  CourseCategory  $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Withdraw $model)
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
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            Column::computed('DT_RowIndex', 'SL#'),
            Column::make('date', 'date')->title('Date'),
            Column::make('name', 'name')->title('Name'),
            Column::make('email', 'email')->title('Email'),
            Column::make('amount', 'amount')->title('Amount'),
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
        return 'Admin\WithdrawRequest_'.date('YmdHis');
    }
}
