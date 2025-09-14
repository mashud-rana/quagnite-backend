<?php

namespace App\DataTables\Admin\Ebook;

use App\Models\Ebook;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use PDF;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Services\DataTable;

class EbookDataTable extends DataTable
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
            ->addColumn('action', function ($item) {
                $buttons = '';
                if (auth()->user()->can('Edit Ebook')) {
                    $buttons .= '<a class="dropdown-item" href="'.route('admin.ebook.edit', $item->id).'" title="Edit"><i class="mdi mdi-square-edit-outline"></i> Edit </a>';
                }

                if (auth()->user()->can('Show Ebook')) {
                    $buttons .= '<a class="dropdown-item text-primary" href="'.route('admin.ebook.show', $item->slug).'" title="View"><i class="ri-eye-fill"></i> View </a>';
                }

                if (auth()->user()->can('Delete Ebook')) {
                    $buttons .= '<form action="'.route('admin.ebook.delete', $item->id).'"  id="delete-form-'.$item->id.'" method="post" style="">
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
            })->editColumn('image', function ($item) {
                return '<img class="ic-img-32" src="'.getStoreFile($item->image, $item->storage_type).'" alt="'.$item->title.'" />';
            })->editColumn('ebook_category_id', function ($item) {
                return $item->category->name;
            })->editColumn('reviewer', function ($item) {
                // Fetch all users with admin role
                $adminUsers = \App\Models\User::where('user_type', USER_TYPE_ADMIN)
                    ->get()
                    ->mapWithKeys(function ($user) {
                        return [$user->id => $user->full_name];
                    });

                // Build the dropdown options
                $dropdownOptions = '';
                foreach ($adminUsers as $id => $full_name) {
                    $selected = $item->reviewer_id == $id ? 'selected' : '';
                    $dropdownOptions .= '<option value="'.$id.'" '.$selected.'>'.$full_name.'</option>';
                }

                // Return the form with the dropdown menu
                return '
                <form action="'.route('admin.ebook.assignReviewer').'" method="post" id="reviewer-form-'.$item->id.'">
                    <input type="hidden" name="_token" value="'.csrf_token().'">
                    <input type="hidden" name="ebook_id" value="'.$item->id.'">
                    <select name="reviewer_id" onchange="submitReviewerForm(event, '.$item->id.')">
                        <option value="">Select Reviewer</option>
                        '.$dropdownOptions.'
                    </select>
                </form>';
            })->editColumn('status', function ($item) {

                return '<span class="badge '.getGlobalStatusBg($item->status).'">'.getGlobalStatusName($item->status).'</span>';
            })
            ->rawColumns(['action', 'status', 'image', 'reviewer'])->addIndexColumn();
    }

    /**
     * Get query source of dataTable.
     *
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Ebook $model)
    {
        return $model->newQuery()->with('category')->orderBy('id', 'DESC');
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
            Column::make('image', 'image')->title('Image'),
            Column::make('title', 'title')->title('title'),
            Column::make('author_name', 'author_name')->title('Author Name'),
            Column::make('reviewer', 'reviewer_id')->title('Reviewer'),
            Column::make('price', 'price')->title('Price'),
            Column::make('ebook_category_id', 'ebook_category_id')->title('Category'),
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
        return 'Admin\Ebook_'.date('YmdHis');
    }
}
