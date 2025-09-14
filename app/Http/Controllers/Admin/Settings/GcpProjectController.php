<?php

namespace App\Http\Controllers\Admin\Settings;

use App\DataTables\Admin\GcpProjectDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\GcpProjectRequest;
use App\Models\GcpProject;

class GcpProjectController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:All Playgrounds|Edit Playground|Create Playground|Delete Playground', ['only' => ['index']]);
        $this->middleware('permission:Create Playground', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Playground', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Playground', ['only' => ['delete']]);
    }

    public function index(GcpProjectDataTable $dataTable)
    {
        set_page_meta('Gcp Project');

        return $dataTable->render('admin.settings.gcp_project.index');
    }

    public function create()
    {
        set_page_meta('Add Gcp Project');

        return view('admin.settings.gcp_project.create');
    }

    public function edit(string $id)
    {
        $gcp = GcpProject::find($id);

        return view('admin.settings.gcp_project.edit', [
            'gcp' => $gcp,
        ]);
    }

    public function store(GcpProjectRequest $request)
    {
        $gcp = new GcpProject;
        $gcp->project_name = $request->project_name;
        $gcp->project_no = $request->project_no;
        $gcp->project_id = $request->project_id;
        $gcp->project_url = $request->project_url;
        $gcp->user_role = $request->user_role;
        $gcp->status = $request->status;
        $gcp->save();

        record_created_flash();

        return back();
    }

    public function update(GcpProjectRequest $request, string $id)
    {
        $gcp = GcpProject::find($id);
        $gcp->project_name = $request->project_name;
        $gcp->project_no = $request->project_no;
        $gcp->project_id = $request->project_id;
        $gcp->project_url = $request->project_url;
        $gcp->user_role = $request->user_role;
        $gcp->status = $request->status;
        $gcp->save();

        record_updated_flash();

        return back();
    }

    public function delete(string $id)
    {
        GcpProject::find($id)->delete($id); // delete record

        record_deleted_flash();

        return redirect()->back();
    }
}
