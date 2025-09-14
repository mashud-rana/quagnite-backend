<?php

namespace App\Http\Controllers\Admin\Member;

use App\DataTables\Admin\Member\MemberDataTable;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\AdminStoreRequest;
use App\Services\Admin\AllUserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\Password;

class MembersController extends Controller
{
    protected $allUserService;

    public function __construct(AllUserService $allUserService)
    {
        $this->allUserService = $allUserService;

        $this->middleware('permission:All Members|Edit Member|Create Member|Delete Member', ['only' => ['index']]);
        $this->middleware('permission:Create Member', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Member', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Member', ['only' => ['destroy']]);
    }

    public function index(MemberDataTable $dataTable)
    {
        set_page_meta('Members');

        return $dataTable->render('admin.members.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Member');

        return view('admin.members.create');
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
            $this->allUserService->storeOrUpdate($data, null, USER_TYPE_MEMBER);
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
            set_page_meta('Edit Member');
            $user = $this->allUserService->get($id);

            return view('admin.members.edit', compact('user'));
        } catch (\Exception $e) {
            log_error($e);
        }

        return back();
    }

    public function update(Request $request, $id)
    {
        $rules = [
            'first_name' => ['required', 'string', 'max:50'],
            'last_name' => ['required', 'string', 'max:50'],
            'email' => ['required', 'string', 'email', Rule::unique('users')->ignore($id)],
            'phone' => ['required', 'string', 'max:20'],
            'gender' => ['required', 'string', 'max:50'],
            'status' => ['required', 'string', 'max:10'],
            'password' => [
                'nullable', 'string', 'confirmed', Password::min(8),
                // ->mixedCase()
                // ->letters()
                // ->numbers()
                // ->symbols()
            ],
            'password_confirmation' => ['nullable', Password::min(8)],
        ];

        // Validate the request
        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }

        // Retrieve the validated data
        $data = $validator->validated();

        try {
            $this->allUserService->storeOrUpdate($data, $id, USER_TYPE_MEMBER);
            record_updated_flash();

            return redirect()->route('admin.members.index');
        } catch (\Exception $e) {
            logger($e->getMessage());

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
            logger($e);

            return back();
        }
    }
}
