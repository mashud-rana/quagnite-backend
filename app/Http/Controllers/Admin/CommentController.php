<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\CommentDataTable;
use App\Http\Controllers\Controller;
use App\Models\Comment;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:All Comments|Edit Comment|Delete Comment', ['only' => ['index']]);
        $this->middleware('permission:Edit Comment', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Comment', ['only' => ['destroy']]);
    }

    public function index(CommentDataTable $dataTable)
    {
        set_page_meta('All Comments');

        return $dataTable->render('admin.comment.index');
    }

    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'status' => 'required',
            ]);

            $item = Comment::findOrFail($id);

            $item->update([
                'status' => $request->status,
            ]);

            record_updated_flash('Status Change Successfully');

            return redirect()->back();
        } catch (ModelNotFoundException $e) {
            log_error($e);
            something_wrong_flash('Comment not found');

            return redirect()->back();
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();

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
            $item = Comment::find($id);

            if ($item) {
                // Delete the item
                $item->delete();
                record_deleted_flash('Comment deleted successfully');
            } else {
                something_wrong_flash('Comment not found');
            }

            return redirect()->back();
        } catch (\Exception $e) {
            something_wrong_flash('An error occurred');
            log_error($e);

            return redirect()->back();
        }
    }
}
