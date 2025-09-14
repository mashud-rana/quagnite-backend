<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use App\Models\Teacher;
use App\Mail\UserCreate;
use App\Jobs\SendEmailQueueJob;
use App\Models\TeacherCategory;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Services\Admin\AllUserService;
use App\Http\Requests\Admin\TeacherRequest;
use App\DataTables\Admin\Teacher\TeacherDataTable;
use App\DataTables\Admin\Teacher\ApproveTeacherDataTable;
use App\DataTables\Admin\Teacher\BlockedTeacherDataTable;
use App\DataTables\Admin\Teacher\PendingTeacherDataTable;

class TeacherController extends Controller
{
    protected $allUserService;

    public function __construct(AllUserService $allUserService)
    {
        $this->allUserService = $allUserService;

        $this->middleware('permission:All Teachers|Approve Teacher|Block Teacher|Delete Teacher', ['only' => ['index', 'pendingList', 'approveList', 'blockedList']]);
        $this->middleware('permission:Approve Teacher', ['only' => ['approveTeacher']]);
        $this->middleware('permission:Block Teacher', ['only' => ['blockTeacher']]);
        $this->middleware('permission:Create Teacher', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Teacher', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Bootcamp', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(TeacherDataTable $dataTable)
    {
        set_page_meta('Teachers');

        return $dataTable->render('admin.teacher.all');
    }

    public function pendingList(PendingTeacherDataTable $dataTable)
    {
        set_page_meta('Pending Teachers');

        return $dataTable->render('admin.teacher.pending');
    }

    public function approveTeacher(string $id)
    {
        DB::transaction(function () use ($id) {

            $teacher = Teacher::findOrFail($id);
            $teacher->update([
                'status' => APPROVED,
            ]);

            $user = User::findOrFail($teacher->user_id);

            $user->update([
                'user_type' => USER_TYPE_TEACHER,
            ]);
        }, 5);

        record_updated_flash('Teacher Approved Successfully');

        return back();
    }

    public function approveList(ApproveTeacherDataTable $dataTable)
    {
        set_page_meta('Approve Teachers');

        return $dataTable->render('admin.teacher.approve');
    }

    public function blockTeacher(string $id)
    {
        $coach = Teacher::findOrFail($id);
        $coach->update([
            'status' => BLOCK,
        ]);

        record_updated_flash('Teacher Blocked Successfully');

        return back();
    }

    public function blockedList(BlockedTeacherDataTable $dataTable)
    {
        set_page_meta('Blocked Teachers');

        return $dataTable->render('admin.teacher.blocked');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Teacher');
        $teacherCategory = TeacherCategory::active()->get();

        return view('admin.teacher.create', ['teacherCategory' => $teacherCategory]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\TeacherRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TeacherRequest $request)
    {
        $data = $request->validated();
        try {

            $user = $this->allUserService->storeOrUpdate($data, null, USER_TYPE_TEACHER);

            $teacher = new Teacher();
            $teacher->user_id = $user->id;
            $teacher->teacher_category_id = $request->teacher_category_id;
            $teacher->status = APPROVED;
            $teacher->save();

            // Send email
            try {
                SendEmailQueueJob::dispatch($user->email, new UserCreate($user->first_name));
            } catch (\Exception $e) {
                // Handle mail sending error
                logger($e->getMessage());
            }

            record_created_flash();
        } catch (\Exception $e) {
            something_wrong_flash();
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
            set_page_meta('Edit Teacher');
            $user = $this->allUserService->get($id);
            $teacherCategory = TeacherCategory::all();

            return view('admin.teacher.edit', compact('user', 'teacherCategory'));
        } catch (\Exception $e) {
            log_error($e);
        }

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\TeacherRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TeacherRequest $request, $id)
    {
        $data = $request->validated();
        try {
            $this->allUserService->storeOrUpdate($data, $id, USER_TYPE_TEACHER);
            record_updated_flash();

            return redirect()->route('admin.teacher.index');
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
            $user = User::findOrFail($id);
            $user->teacher()->delete();
            $user->delete();
            record_deleted_flash();

            return back();
        } catch (\Exception $e) {
            logger($e->getMessage());

            return back();
        }
    }
}
