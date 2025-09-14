<?php

namespace App\DataTables\Admin\Ebook;

use App\Models\EnrollEbook;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use PDF;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class EnrollEbookDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  QueryBuilder  $query  Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            // ->addColumn('action', function ($item) {
            //     $buttons = '';
            //     if (true || auth()->user()->can('Delete ebook')) {
            //         $buttons .= '<form action="' . route('admin.ebook.delete', $item->id) . '"  id="delete-form-' . $item->id . '" method="post" style="">
            //         <input type="hidden" name="_token" value="' . csrf_token() . '">
            //         <input type="hidden" name="_method" value="DELETE">
            //         <button class="dropdown-item text-danger" onclick="return makeDeleteRequest(event, ' . $item->id . ')"  type="submit" title="Delete"><i class="mdi mdi-trash-can-outline"></i> Delete</button></form>
            //         ';
            //     }

            //     return '<div class="btn-group dropdown">
            //         <a href="#" onclick="return false;" class="btn btn-sm btn-dark text-white dropdown-toggle dropdown" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
            //         <div class="dropdown-menu">
            //         ' . $buttons . '
            //         </div>
            //     </div>';
            // })
            ->editColumn('image', function ($item) {
                return '<img class="ic-img-32" src="'.getStoreFile($item->ebook->image, $item->ebook->storage_type).'" alt="'.$item->ebook->title.'" />';
            })->editColumn('date', function ($item) {
                return Carbon::parse($item->created_at)->format('j F, Y');
            })->editColumn('title', function ($item) {
                return $item->ebook->title;
            })
            ->editColumn('user_id', function ($item) {
                return $item->student->full_name;
            })
            ->editColumn('price', function ($item) {
                return $item->ebook->price;
            })->addColumn('receipt', function ($item) {
                // Generate route for the download receipt
                $invoiceRoute = route('admin.ebook.invoice.download', [
                    'user_id' => $item->user_id,
                    'ebook_id' => $item->ebook_id,
                ]);

                return '<a href="'.$invoiceRoute.'" class="btn btn-primary btn-sm">Download Receipt</a>';
            })
            ->rawColumns(['status', 'image', 'receipt'])->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param  Ebook  $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(EnrollEbook $model)
    {
        return $model->newQuery()->with(['student', 'ebook'])->orderBy('id', 'DESC');
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
            Column::make('date', 'date')->title('Date'),
            Column::make('image', 'image')->title('Image'),
            Column::make('title', 'title')->title('title'),
            Column::make('user_id', 'user_id')->title('Purchased By'),
            Column::make('price', 'price')->title('Price'),
            Column::make('receipt', 'receipt')->title('Receipt'),
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
        return 'Admin\Ebook_'.date('YmdHis');
    }
}
