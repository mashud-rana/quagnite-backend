<?php

namespace App\DataTables\Admin;

use App\Models\Invoice;
use Carbon\Carbon;
use PDF;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class InvoiceDataTable extends DataTable
{
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function ($item) {
                $buttons = '';

                $buttons .= '<a href="'.route('admin.invoice.view', $item->id).'" class="dropdown-item text-primary" title="View Invoice"><i class="mdi mdi-eye-outline"></i> View</a>';

                $buttons .= '<a href="'.route('admin.invoice.download', $item->id).'" class="dropdown-item text-success" title="Download Invoice"><i class="mdi mdi-download"></i> Download</a>';
                if (auth()->user()->can('Delete Invoice')) {
                    $buttons .= '<form action="'.route('admin.invoice.delete', $item->id).'"  id="delete-form-'.$item->id.'" method="post" style="">
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
            })
            ->editColumn('date', function ($item) {
                return Carbon::parse($item->created_at)->format('j F, Y');
            })
            ->editColumn('user_id', function ($item) {
                return $item->user->full_name;
            })
            ->rawColumns(['action', 'status'])->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param  CourseCategory  $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Invoice $model)
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
            Column::make('invoice_id', 'invoice_id')->title('Invoice'),
            Column::make('date', 'date')->title('Date'),
            Column::make('user_id', 'user_id')->title('User'),
            Column::make('payment_type', 'payment_type')->title('Type'),
            Column::make('total', 'total')->title('Total Amount'),
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
        return 'Admin\Invoice_'.date('YmdHis');
    }
}
