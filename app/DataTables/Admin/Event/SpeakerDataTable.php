<?php

namespace App\DataTables\Admin\Event;

use App\Models\Speaker;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class SpeakerDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param  QueryBuilder  $query  Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', 'speaker.action')
            ->addColumn('action', function ($item) {
                $buttons = '';
                if (auth()->user()->can('Edit Speaker')) {
                    $buttons .= '<a class="dropdown-item" href="'.route('admin.event.speaker.edit', $item->id).'" title="Edit"><i class="mdi mdi-square-edit-outline"></i> Edit </a>';
                }

                if (auth()->user()->can('Delete Speaker')) {
                    $buttons .= '<form action="'.route('admin.event.speaker.destroy', $item->id).'"  id="delete-form-'.$item->id.'" method="post" style="">
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
            })->editColumn('avatar', function ($item) {
                $avatar_url = getStoreFile($item->avatar, $item->storage_type);

                return '<img class="ic-img-32" src="'.$avatar_url.'" alt="'.$item->title.'" />';
            })
            ->editColumn('full_name', function ($item) {
                return '<a href="'.route('admin.event.speaker.events', $item->id).'">'.$item->full_name.'</a>';
            })
            ->rawColumns(['action', 'avatar', 'full_name', 'status'])->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     */
    public function query(Speaker $model): QueryBuilder
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
            ->parameters($this->getBuilderParameters());
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
            Column::make('avatar', 'avatar')->title('Avatar'),
            Column::make('full_name', 'full_name')->title('Full Name'),
            Column::make('designation', 'designation')->title('Designation'),
            Column::make('status', 'status')->title('Status'),
        ];
    }

    /**
     * Get filename for export.
     */
    protected function filename(): string
    {
        return 'Speaker_'.date('YmdHis');
    }
}
