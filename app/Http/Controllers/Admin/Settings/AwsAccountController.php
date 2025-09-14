<?php

namespace App\Http\Controllers\Admin\Settings;

use App\DataTables\Admin\AwsAccountDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AwsAccountRequest;
use App\Models\AwsAccount;

class AwsAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('permission:All AWS Accounts|Edit AWS Account|Create AWS Account|Delete AWS Account', ['only' => ['index']]);
        $this->middleware('permission:Create AWS Account', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit AWS Account', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete AWS Account', ['only' => ['delete']]);
    }

    public function index(AwsAccountDataTable $dataTable)
    {
        set_page_meta('Aws Account');

        return $dataTable->render('admin.settings.aws_account.index');
    }

    public function create()
    {
        set_page_meta('Add Aws Account');

        return view('admin.settings.aws_account.create');
    }

    public function edit(string $id)
    {
        $aws = AwsAccount::find($id);

        return view('admin.settings.aws_account.edit', [
            'aws' => $aws,
        ]);
    }

    public function store(AwsAccountRequest $request)
    {
        $aws = new AwsAccount;
        $aws->acc_name = $request->acc_name;
        $aws->acc_id = $request->acc_id;
        $aws->acc_profile = $request->acc_profile;
        $aws->user_group = $request->user_group;
        $aws->status = $request->status;
        $aws->save();

        record_created_flash();

        return back();
    }

    public function update(AwsAccountRequest $request, string $id)
    {
        $aws = AwsAccount::find($id);
        $aws->acc_name = $request->acc_name;
        $aws->acc_id = $request->acc_id;
        $aws->acc_profile = $request->acc_profile;
        $aws->user_group = $request->user_group;
        $aws->status = $request->status;
        $aws->save();

        record_updated_flash();

        return back();
    }

    public function delete(string $id)
    {
        AwsAccount::find($id)->delete($id); // delete record

        record_deleted_flash();

        return redirect()->back();
    }
}
