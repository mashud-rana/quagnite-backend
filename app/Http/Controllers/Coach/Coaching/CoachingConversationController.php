<?php

namespace App\Http\Controllers\Coach\Coaching;

use App\Http\Controllers\Controller;
use App\Http\Requests\Coach\CoachingConversationRequest;
use App\Models\EnrollCoach;
use App\Notifications\Common\CommonNotification;
use App\Services\Coach\CoachingConversationService;
use Illuminate\Support\Facades\Auth;

class CoachingConversationController extends Controller
{
    public $conversationService;

    public function __construct(CoachingConversationService $conversationService)
    {
        $this->conversationService = $conversationService;
    }

    public function storeConversation(CoachingConversationRequest $request)
    {
        $data = $request->all();

        try {
            $obj = $this->conversationService->storeOrUpdate($data);

            $enroll_coach = EnrollCoach::where('id', $obj->enroll_coach_id)->get()->first();
            $user = auth()->user();
            $notificationData = [
                'type' => 'coaching',
                'title' => 'Coaching Activities Updates',
                'user' => auth()->id(),
                'msg' => Auth::user()->full_name.' has update in your coachong!',
                'url' => route('coaching.activities', $enroll_coach->uuid),
            ];

            if ($user->user_type === USER_TYPE_COACH) {

                $student = $enroll_coach->student;
                $student->notify(new CommonNotification($notificationData));
            } else {
                $coach = $enroll_coach->coach;
                $coach->notify(new CommonNotification($notificationData));
            }

            record_created_flash();

            return back();
        } catch (\Exception $e) {
            return back();
        }
    }
}
