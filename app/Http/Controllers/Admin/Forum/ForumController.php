<?php

namespace App\Http\Controllers\Admin\Forum;

use App\DataTables\Admin\ForumDataTable;
use App\Http\Controllers\Controller;
use App\Models\ForumPost;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:All Forums|Edit Forum|Create Forum|Delete Forum', ['only' => ['index']]);
        $this->middleware('permission:Create Forum', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Forum', ['only' => ['edit', 'update', 'changeStatus']]);
        $this->middleware('permission:Delete Forum', ['only' => ['delete']]);
    }

    public function index(ForumDataTable $dataTable)
    {
        set_page_meta('Manage Forums');
        return $dataTable->render('admin.forum.index');
    }

    public function delete(string $id)
    {
        try {
            $forum = ForumPost::findOrFail($id);

            // Delete associated comments
            $forum->comments()->delete();

            // Delete the forum post
            $forum->delete();

            record_deleted_flash();
        } catch (\Exception $e) {

            log_error($e);
            something_wrong_flash();
        }

        return redirect()->back();
    }

    public function changeStatus(Request $request, $id)
    {
        try {
            $request->validate([
                'status' => 'required',
            ]);

            $forum = ForumPost::findOrFail($id);

            $forum->update([
                'status' => $request->status,
            ]);

            record_updated_flash('Status Change Successfully');
        } catch (\Exception $e) {
            log_error($e);
            something_wrong_flash();
        }

        return redirect()->back();
    }
}
