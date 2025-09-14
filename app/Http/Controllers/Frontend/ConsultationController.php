<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Coach;
use App\Models\CoachCategory;
use App\Models\CoachingDayStatus;
use App\Models\CoachingSlot;
use App\Models\EnrollCoach;
use App\Models\User;
use DateInterval;
use DatePeriod;
use DateTimeImmutable;
use Illuminate\Http\Request;

class ConsultationController extends Controller
{
    public function consultationCoachList()
    {
        $data['users'] = User::active()->where('user_type', USER_TYPE_COACH)->with('coach')->paginate(8);
        $data['categories'] = CoachCategory::active()->select('id', 'name')->get();

        return view('frontend.coaching.index', $data);
    }

    public function coachDetails($uuid)
    {
        set_page_meta('Coache Details');
        $data['coach'] = Coach::where('uuid', $uuid)->firstOrFail();
        // Get Calender Data Start here
        $start_date = new DateTimeImmutable();

        $end_date = $start_date->modify('+28 days');

        $interval = new DateInterval('P1D');

        $datePeriod = new DatePeriod($start_date, $interval, $end_date);

        $data['date_range'] = $this->dateRangeString($start_date, $end_date);

        foreach ($datePeriod as $index => $date) {

            // $yearMonthDay = $date->format('Y-m-d');
            $dayName = $date->format('l');
            $day = $date->format('d');
            $numDay = $date->format('w');

            $slots = CoachingSlot::where('user_id', $data['coach']->user_id)->where('day', $numDay)->pluck('time')->toArray();

            $data['schedule'][$index]['day_name'] = $dayName;
            $data['schedule'][$index]['day'] = $day;
            $data['schedule'][$index]['slots'] = $slots;
        }

        // Get Calender Data End here

        return view('frontend.coaching.details', $data);
    }

    public function getOffDays($user_id)
    {
        $data['days'] = CoachingDayStatus::whereUserId($user_id)->pluck('day')->toArray();

        return response()->json($data);
    }

    public function getCoachBookingTime(Request $request)
    {
        $date = $request->bookingDate;

        $data['bookingDate'] = date('Y-m-d', strtotime($date));
        $data['bookingDay'] = date('l', strtotime($date));

        $day = 7;

        if ($data['bookingDay'] == 'Sunday') {
            $day = 0;
        } elseif ($data['bookingDay'] == 'Monday') {
            $day = 1;
        } elseif ($data['bookingDay'] == 'Tuesday') {
            $day = 2;
        } elseif ($data['bookingDay'] == 'Wednesday') {
            $day = 3;
        } elseif ($data['bookingDay'] == 'Thursday') {
            $day = 4;
        } elseif ($data['bookingDay'] == 'Friday') {
            $day = 5;
        } elseif ($data['bookingDay'] == 'Saturday') {
            $day = 6;
        }

        // $orderIds =  Order::where('payment_status', 'paid')->orWhere('payment_status', 'free')->pluck('id')->toArray();

        $consultationSlotIds = EnrollCoach::where('coach_id', $request->user_id)->whereDate('start_time', $data['bookingDate'])->pluck('coaching_slot_id')->toArray();
        $data['slots'] = CoachingSlot::whereNotIn('id', $consultationSlotIds);
        $data['slots'] = $data['slots']->where('user_id', $request->user_id)->where('day', $day)->get();

        return view('frontend.coaching.render.consultation-booking-day-time', $data);
    }

    public function dateRangeString($start_date, $end_date)
    {
        return $start_date->format('d M').'-'.$end_date->format('d M, Y');
    }
}
