<?php

namespace App\DataTables\Admin\Teacher;

use App\Models\Teacher;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use PDF;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class PendingTeacherDataTable extends DataTable
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
                if (auth()->user()->can('Approve Teacher')) {
                    $buttons .= '<form action="'.route('admin.teacher.approve', $item->id).'"  id="accept-form-'.$item->id.'" method="post" style="">
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                    <input type="hidden" name="_method" value="POST">
                    <button class="dropdown-item text-success" onclick="return makeAcceptRequest(event, '.$item->id.')"  type="submit" title="Approve"><i class="ri-thumb-up-fill"></i> Approve</button></form>';
                }

                if (auth()->user()->can('Delete Teacher')) {
                    $buttons .= '<form action="'.route('admin.teachers.destroy', $item->user_id).'"  id="delete-form-'.$item->id.'" method="post" style="">
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
            // ->editColumn('status', function ($item) {
            //     $badge = $item->status == ACTIVE ? "bg-success" : "bg-danger";
            //     return '<span class="badge ' . $badge . '">' . Str::upper($item->status) . '</span>';
            // })
            ->editColumn('user.first_name', function ($item) {

                return $item->user->first_name;
            })
            ->editColumn('user.last_name', function ($item) {

                return $item->user->last_name;
            })
            ->editColumn('cv', function ($item) {

                return '<a href="'.getStoreFile($item->cv, $item->storage_type).'">Download</a>';
            })
            ->rawColumns(['action', 'cv'])->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @param  \App\Models\Admin\User  $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Teacher $model)
    {
        return $model->newQuery()->where('status', PENDING)->with('user')->orderBy('id', 'DESC');
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
            Column::computed('checkbox')
                ->exportable(false)
                ->printable(false)
                ->width(30)
                ->addClass('text-center')
                ->title('<input type="checkbox" id="select-all">') // Master checkbox
                ->render('function() { return "<input type=\"checkbox\" class=\"select-row\" value=\""+this.id+"\">"; }'),
            Column::computed('DT_RowIndex', 'SL#'),
            Column::make('user.first_name', 'user.first_name')->title('First Name'),
            Column::make('user.last_name', 'user.last_name')->title('Last Name'),
            Column::make('professional_title', 'professional_title')->title('Title'),
            Column::make('cv', 'cv')->title('CV/Resume'),
            // Column::make('status', 'status')->title('Status'),
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function getCustomFilename()
    {
        return 'Admin\Teacher_'.date('YmdHis');
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
