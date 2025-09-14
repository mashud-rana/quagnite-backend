<?php

namespace App\Http\Controllers\Coach\Coaching;

use App\Http\Controllers\Controller;
use App\Jobs\SendEmailQueueJob;
use App\Mail\CoachingJoinAlert;
use App\Models\EnrollCoach;
use App\Models\User;
use App\Notifications\Common\CommonNotification;
use App\Services\Utils\ZoomService;
use Illuminate\Http\Request;

class CoachingController extends Controller
{
    public function __construct(protected ZoomService $zoomService)
    {
    }

    public function index()
    {
        set_page_meta('My Coachings');

        $data['coachings'] = EnrollCoach::where('coach_id', auth()->id())
            ->where('status', '!=', COMPLETE)
            ->with('student', 'slot')
            ->get();

        $data['completeCoachings'] = EnrollCoach::where('coach_id', auth()->id())
            ->where('status', COMPLETE)
            ->with('student', 'slot')
            ->get();

        return view('coach.coaching.index', $data);
    }

    public function joinCoaching($uuid)
    {
        $coaching = EnrollCoach::whereUuid($uuid)->firstOrFail();

        $response = $this->zoomService->getZak();

        if ($response['status']) {

            $meeting['zak'] = $response['data']['token'];

            $meeting['signature'] = $this->zoomService->generateSignature($coaching->meeting_id, 1);
            $meeting['leaveUrl'] = route('coach.coachings');
            $meeting['userEmail'] = auth()->user()->email;
            $meeting['userName'] = auth()->user()->full_name;
            $meeting['password'] = $coaching->password;
            $meeting['meetingNumber'] = $coaching->meeting_id;
            $meeting['key'] = $this->zoomService->web_client_id;
        } else {
            record_deleted_flash('Somethings went wrong!');

            return back();
        }

        if (! $coaching->coach_join) {
            // alert notification
            $notificationData = [
                'type' => 'coaching',
                'title' => 'Alert: Coach Has Entered the Meeting!',
                'user' => auth()->id(),
                'msg' => 'Join Now: Your Coach is Waiting in the Meeting!',
                'url' => route('student.coachings.join', $uuid),
            ];
            $student = $coaching->student;

            // Dispatch the mail and notification
            try {
                $student->notify(new CommonNotification($notificationData));
                SendEmailQueueJob::dispatch($coaching->student->email, new CoachingJoinAlert($coaching));
                $coaching->coach_join = true;
                $coaching->save();
            } catch (\Exception $e) {
                logger($e->getMessage());
            }
        }

        return view('common.zoom.host', [
            'meeting' => $meeting,
        ]);
    }

    public function coachingActivities($uuid)
    {
        $data['item'] = EnrollCoach::with('coach')->where('uuid', $uuid)->first();
        $data['is_reviewed'] = $data['item']->coach->reviews()
            ->where('user_id', auth()->id())->exists();

        return view('coach.coaching.details', $data);
    }

    public function updateStatus(Request $request, EnrollCoach $enroll_coach)
    {
        $enroll_coach->update(['status' => $request->status]);
        record_updated_flash('Status updated successfully.');

        return back();
    }

    public function reviewSubmit(Request $request)
    {
        $request->validate([
            'coach_id' => 'required',
            'rating' => 'required',
        ]);

        $coach = User::findOrFail($request->coach_id);

        $coach->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        record_created_flash('Review Added Successfully');

        return back();
    }
}
