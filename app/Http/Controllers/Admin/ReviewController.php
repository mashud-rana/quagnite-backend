<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ReviewDataTable;
use App\Http\Controllers\Controller;
use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:All Reviews|Edit Review|Delete Review', ['only' => ['index']]);
        $this->middleware('permission:Edit Review', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Review', ['only' => ['destroy']]);
    }

    public function index(ReviewDataTable $dataTable)
    {
        set_page_meta('All Reviews');

        return $dataTable->render('admin.review.index');
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'status' => 'required',
            ]);

            $item = Review::findOrFail($id);

            $item->update([
                'status' => $request->status,
            ]);

            record_updated_flash('Status Change Successfully');

            return redirect()->back();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $e) {
            log_error($e);
            something_wrong_flash('Review not found');

            return redirect()->back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash('An error occurred');

            return redirect()->back();
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        try {
            $item = Review::find($id);

            if ($item) {
                // Delete the item
                $item->delete();
                record_deleted_flash();
            } else {
                something_wrong_flash();
            }

            return redirect()->back();
        } catch (\Exception $e) {
            something_wrong_flash('An error occurred');
            log_error($e);

            return redirect()->back();
        }
    }
}
