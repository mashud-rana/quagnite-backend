<?php

namespace App\Http\Controllers\Student\Coaching;

use App\Http\Controllers\Controller;
use App\Models\EnrollCoach;
use App\Services\Utils\ZoomService;

class CoachingController extends Controller
{
    public function __construct(protected ZoomService $zoomService)
    {
    }

    public function index()
    {
        set_page_meta('My Coachings');

        $data['coachings'] = EnrollCoach::where('student_id', auth()->id())
            ->where('status', '!=', COMPLETE)
            ->with('student', 'slot')
            ->get();

        $data['completeCoachings'] = EnrollCoach::where('student_id', auth()->id())
            ->where('status', COMPLETE)
            ->with('student', 'slot')
            ->get();

        return view('student.coaching.index', $data);
    }

    public function joinCoaching($uuid)
    {
        $coaching = EnrollCoach::whereUuid($uuid)->firstOrFail();

        $meeting['signature'] = $this->zoomService->generateSignature($coaching->meeting_id, 0);
        $meeting['leaveUrl'] = route('student.coachings');
        $meeting['userEmail'] = auth()->user()->email;
        $meeting['userName'] = auth()->user()->full_name;
        $meeting['password'] = $coaching->password;
        $meeting['meetingNumber'] = $coaching->meeting_id;
        $meeting['key'] = $this->zoomService->web_client_id;

        return view('common.zoom.guest', [
            'meeting' => $meeting,
        ]);
    }
}
