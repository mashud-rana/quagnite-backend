<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use App\Models\Student;
use App\Mail\UserCreate;
use App\Jobs\SendEmailQueueJob;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Services\Admin\AllUserService;
use App\Http\Requests\Admin\StudentRequest;
use App\DataTables\Admin\Student\StudentDataTable;
use App\DataTables\Admin\Student\EnrollCourseStudentDataTable;
use App\DataTables\Admin\Student\EnrollBootcampStudentDataTable;

class StudentController extends Controller
{
    protected $allUserService;

    public function __construct(AllUserService $allUserService)
    {
        $this->allUserService = $allUserService;

        $this->middleware('permission:All Students|Edit Student|Create Student|Delete Student', ['only' => ['index', 'enrolledCourseStudents', 'enrolledBootcampStudents']]);
        $this->middleware('permission:Create Student', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Student', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Bootcamp', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(StudentDataTable $dataTable)
    {
        set_page_meta('Students');

        return $dataTable->render('admin.student.all');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Student');

        return view('admin.student.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\StudentRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StudentRequest $request)
    {
        $data = $request->validated();
        try {
            $user = $this->allUserService->storeOrUpdate($data, null, USER_TYPE_STUDENT);

            $student = new Student();
            $student->user_id = $user->id;
            $student->status = ACTIVE;
            $student->save();

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
            set_page_meta('Edit student');
            $user = $this->allUserService->get($id);

            return view('admin.student.edit', compact('user'));
        } catch (\Exception $e) {
            log_error($e);
        }

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\StudentRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(StudentRequest $request, $id)
    {
        $data = $request->validated();
        try {
            $this->allUserService->storeOrUpdate($data, $id, USER_TYPE_STUDENT);
            record_updated_flash();

            return redirect()->route('admin.student.index');
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
            $user->student()->delete();
            $user->student();
            record_deleted_flash();

            return back();
        } catch (\Exception $e) {
            return back();
        }
    }

    public function enrolledCourseStudents(EnrollCourseStudentDataTable $dataTable)
    {
        set_page_meta('Students');

        return $dataTable->render('admin.student.course');
    }

    public function enrolledBootcampStudents(EnrollBootcampStudentDataTable $dataTable)
    {
        set_page_meta('Students');

        return $dataTable->render('admin.student.bootcamp');
    }
}
