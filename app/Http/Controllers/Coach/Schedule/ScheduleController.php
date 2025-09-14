<?php

namespace App\Http\Controllers\Coach\Schedule;

use DateTime;
use App\Models\Coach;
use App\Models\CoachingSlot;
use Illuminate\Http\Request;
use App\Models\CoachingDayStatus;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ScheduleController extends Controller
{
    public function index()
    {
        $coach = Coach::whereUserId(Auth::id())->firstOrFail();
        return view('coach.schedule.index', ['coach' => $coach]);
    }
    public function dashboard()
    {
        $coach = Coach::whereUserId(Auth::id())->first();
        return view('coach.schedule.dashboard', ['coach' => $coach]);
    }

    public function infoStore(Request $request)
    {
        $request->validate([
            'coaching_available' => 'required',
            'is_subscription_enable' => 'required',
            'hourly_rate' => 'required_if:coaching_available,==,1|min:0'
        ], [
            'hourly_rate.required_if' => 'Hourly rate field is required.'
        ]);

        $coach = Coach::whereUserId(Auth::id())->first();
        $coach->coaching_available = $request->coaching_available;
        $coach->hourly_rate = $request->hourly_rate;
        $coach->is_subscription_enable = $request->is_subscription_enable ?? 0;
        $coach->save();
        record_updated_flash();
        return redirect()->route('coach.schedule.index');
    }

    public function slotStore(Request $request)
    {
        $request->validate([
            "slots"               => "required|array",
            "slots.*"             => "required|array",
            "slots.*.start_time"  => "required",
            "slots.*.end_time"    => "required|after_or_equal:slots.*.start_time",
        ], [
            "slots.*.end_time.after" => "End time must be after start time for each slot.",
        ]);

        foreach ($request->slots as $value) {

            if (!empty($value['start_time'])) {
                $startTimes[] = $value['start_time'];
            }

            if (!empty($value['end_time'])) {
                $endTimes[] = $value['end_time'];
            }
        }

        $timeAddCheck = false;

        if (count($startTimes) == count($endTimes)) {
            /*
                * You can run any array of $startTime and $endTimes
                */

            foreach ($startTimes as $key => $value) {
                $datetime1 = new DateTime(date('h:i A', strtotime($startTimes[$key])));
                $datetime2 = new DateTime(date('h:i A', strtotime($endTimes[$key])));
                $interval = $datetime1->diff($datetime2);
                $hours = $interval->format('%h');
                $minutes = $interval->format('%i');

                $startTime =  date('h:i A', strtotime($startTimes[$key]));
                $endTime =  date('h:i A', strtotime($endTimes[$key]));
                $timeAddCheck = true;

                $slot = new CoachingSlot();
                $slot->user_id = Auth::id();
                $slot->start_time = $startTimes[$key];
                $slot->end_time = $endTimes[$key];
                $slot->time = $startTime . ' - ' . $endTime;
                $slot->day = $request->day;
                $slot->duration = $hours . ($hours > 1 ? " Hours " : " Hour ") . $minutes . ($minutes > 1 ? " Minutes" : " Minute");
                $slot->hour_duration = $hours;
                $slot->minute_duration = $minutes;
                $slot->save();
            }
        } else {
            return redirect()->back();
        }

        if ($timeAddCheck) {
            record_created_flash();
            return redirect()->back();
        } else {
            $this->showToastrMessage('error', __('Something is wrong! Try again.'));
            return redirect()->back();
        }
    }

    public function dayAvailableStatusChange($day)
    {
        $item = CoachingDayStatus::whereUserId(Auth::id())->where('day', $day)->first();
        if (!$item) {
            $item = new CoachingDayStatus();
            $item->user_id = Auth::id();
            $item->day = $day;
            $item->save();
        } else {
            $item->delete();
        }
        record_updated_flash();
        return redirect()->back();
    }

    public function slotView($day)
    {
        $data['slots'] = CoachingSlot::whereUserId(Auth::id())->where('day', $day)->get();
        return view('coach.schedule.partial.render-slot-list', $data);
    }

    public function slotDelete($id)
    {
        $slot = CoachingSlot::whereUserId(Auth::id())->where('id', $id)->first();
        if (!$slot) {
            return response()->json([
                'status' => 404,
                'msg' => 'Slot Not Found!'
            ]);
        }

        $slot->delete();
        return response()->json([
            'msg' => 'Deleted Successfully'
        ]);
    }
}
