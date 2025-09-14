<?php

namespace App\DataTables\Member;

use App\Models\SubscriptionList;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Illuminate\Support\Str;
use PDF;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class SubscriptionListDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  QueryBuilder  $query Results from query() method.
     * @return \Yajra\DataTables\EloquentDataTable
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->addColumn('action', function ($item) {
                $buttons = '';

                $buttons .= '<a class="dropdown-item" href="'.route('member.subscription.upgrade', $item->id).'" title="Upgrade"><i class="mdi mdi-square-edit-outline"></i> Upgrade </a>';

                $buttons .= '<form action="'.route('member.subscription.cancel', $item->id).'"  id="delete-form-'.$item->id.'" method="post" style="">
                <input type="hidden" name="_token" value="'.csrf_token().'">
                <input type="hidden" name="_method" value="DELETE">
                <button class="dropdown-item text-danger" onclick="return makeDeleteRequest(event, '.$item->id.')"  type="submit" title="Cancel"><i class="mdi mdi-trash-can-outline"></i> Cancel</button></form>
                ';

                return '<div class="btn-group dropdown">
                    <a href="#" onclick="return false;" class="btn btn-sm btn-dark text-white dropdown-toggle dropdown" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-ellipsis-v"></i></a>
                    <div class="dropdown-menu">
                    '.$buttons.'
                    </div>
                </div>';
            })->editColumn('status', function ($item) {
                $badge = $item->status == PENDING ? 'bg-warning' : (ACTIVE ? 'bg-success' : 'bg-danger');

                return '<span class="badge '.$badge.'">'.Str::upper($item->status).'</span>';
            })
            ->editColumn('subscription_id', function ($item) {
                return $item->subscription->title;
            })
            ->rawColumns(['action', 'status'])->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param  CourseCategory  $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(SubscriptionList $model)
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
            ->parameters($this->getBuilderParameters());
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
            Column::make('subscription_id', 'subscription_id')->title('Subscription Name'),
            Column::make('subscription_type', 'subscription_type')->title('Subscription Type'),
            Column::make('started_at', 'started_at')->title('Started At'),
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
        return 'Member\SubscriptionList_'.date('YmdHis');
    }
}
