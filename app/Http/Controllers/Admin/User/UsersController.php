<?php

namespace App\Http\Controllers\Admin\User;

use App\Jobs\SendEmailQueueJob;
use Spatie\Permission\Models\Role;
use App\Http\Controllers\Controller;
use App\Services\Admin\AllUserService;
use App\DataTables\Admin\UserDataTable;
use App\Http\Requests\Admin\AdminStoreRequest;
use App\Mail\UserCreate;

class UsersController extends Controller
{
    protected $allUserService;

    public function __construct(AllUserService $allUserService)
    {
        $this->allUserService = $allUserService;

        $this->middleware('permission:All Admins|Edit Admin|Create Admin|Delete Admin', ['only' => ['index']]);
        $this->middleware('permission:Create Admin', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Admin', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Admin', ['only' => ['destroy']]);
    }

    public function index(UserDataTable $dataTable)
    {
        set_page_meta('Admins');

        return $dataTable->render('admin.users.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Admin');
        $roles = Role::select('id', 'name')->get();

        return view('admin.users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\AdminStoreRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(AdminStoreRequest $request)
    {
        $data = $request->validated();
        try {
            $data['agreed_terms'] = 1;
            $user = $this->allUserService->storeOrUpdate($data, null, USER_TYPE_ADMIN);

            // Send email
            try {
                SendEmailQueueJob::dispatch($user->email, new UserCreate($user->first_name));
            } catch (\Exception $e) {
                // Handle mail sending error
                logger($e->getMessage());
            }

            record_created_flash();
        } catch (\Exception $e) {
        }

        return back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        try {
            set_page_meta('Edit Admin');
            $user = $this->allUserService->get($id);
            $roles = Role::select('id', 'name')->get();

            return view('admin.users.edit', compact('user', 'roles'));
        } catch (\Exception $e) {
            log_error($e);
        }

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\AdminStoreRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(AdminStoreRequest $request, $id)
    {
        $data = $request->validated();
        try {
            $this->allUserService->storeOrUpdate($data, $id, USER_TYPE_ADMIN);
            record_updated_flash();

            return redirect()->route('admin.users.index');
        } catch (\Exception $e) {
            return back();
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
            $this->allUserService->delete($id);
            record_deleted_flash();

            return back();
        } catch (\Exception $e) {
            return back();
        }
    }
}
