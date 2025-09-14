<?php

namespace App\Http\Controllers\Admin\User;

use App\Models\User;
use App\Models\Coach;
use App\Mail\UserCreate;
use App\Models\CoachCategory;
use App\Jobs\SendEmailQueueJob;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Services\Admin\AllUserService;
use App\Http\Requests\Admin\CoachRequest;
use App\DataTables\Admin\Coach\CoachDataTable;
use App\DataTables\Admin\Coach\ApproveCoachDataTable;
use App\DataTables\Admin\Coach\BlockedCoachDataTable;
use App\DataTables\Admin\Coach\PendingCoachDataTable;

class CoachController extends Controller
{
    protected $allUserService;

    public function __construct(AllUserService $allUserService)
    {
        $this->allUserService = $allUserService;

        $this->middleware('permission:All Coachs|Approve Coach|Block Coach|Delete Coach', ['only' => ['index', 'pendingList', 'approveList', 'blockedList']]);
        $this->middleware('permission:Approve Coach', ['only' => ['approveCoach']]);
        $this->middleware('permission:Block Coach', ['only' => ['blockCoach']]);
        $this->middleware('permission:Create Coach', ['only' => ['create', 'store']]);
        $this->middleware('permission:Edit Coach', ['only' => ['edit', 'update']]);
        $this->middleware('permission:Delete Bootcamp', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CoachDataTable $dataTable)
    {
        set_page_meta('Coachs');

        return $dataTable->render('admin.coach.all');
    }

    public function pendingList(PendingCoachDataTable $dataTable)
    {
        set_page_meta('Pending Coaches');

        return $dataTable->render('admin.coach.pending');
    }

    public function approveCoach(string $id)
    {

        DB::transaction(function () use ($id) {

            $coach = Coach::findOrFail($id);
            $coach->update([
                'status' => APPROVED,
            ]);

            $user = User::findOrFail($coach->user_id);

            $user->update([
                'user_type' => USER_TYPE_COACH,
            ]);
        }, 5);

        record_updated_flash('Coach Approved Successfully');

        return back();
    }

    public function approveList(ApproveCoachDataTable $dataTable)
    {
        set_page_meta('Approve Coaches');

        return $dataTable->render('admin.coach.approve');
    }

    public function blockCoach(string $id)
    {
        $coach = Coach::findOrFail($id);
        $coach->update([
            'status' => BLOCK,
        ]);

        record_updated_flash('Coach Blocked Successfully');

        return back();
    }

    public function blockedList(BlockedCoachDataTable $dataTable)
    {
        set_page_meta('Blocked Coaches');

        return $dataTable->render('admin.coach.blocked');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        set_page_meta('Create Coach');
        $coachCategory = CoachCategory::active()->get();

        return view('admin.coach.create', ['coachCategory' => $coachCategory]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\CoachRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CoachRequest $request)
    {
        $data = $request->validated();
        try {
            $user = $this->allUserService->storeOrUpdate($data, null, USER_TYPE_COACH);

            $coach = new Coach;
            $coach->user_id = $user->id;
            $coach->coach_category_id = $request->coach_category_id;
            $coach->professional_title = $request->professional_title;
            $coach->save();

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
            set_page_meta('Edit Coach');
            $user = $this->allUserService->get($id);
            $coachCategory = CoachCategory::active()->get();

            return view('admin.coach.edit', compact('user', 'coachCategory'));
        } catch (\Exception $e) {
            log_error($e);
        }

        return back();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\CoachRequest  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CoachRequest $request, $id)
    {
        $data = $request->validated();
        try {
            $this->allUserService->storeOrUpdate($data, $id, USER_TYPE_COACH);
            //update course category
            Coach::where('user_id', $id)->update([
                'coach_category_id' => $request->coach_category_id,
                'professional_title' => $request->professional_title,
            ]);

            record_updated_flash();

            return redirect()->route('admin.Coachs.index');
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
            $user->coach()->delete();
            $user->delete();
            record_deleted_flash();

            return back();
        } catch (\Exception $e) {
            return back();
        }
    }
}
