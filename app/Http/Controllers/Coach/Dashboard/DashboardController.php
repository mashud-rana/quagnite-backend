<?php

namespace App\Http\Controllers\Coach\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Coach;
use App\Models\CoachingSlot;
use App\Models\EnrollCoach;
use App\Models\Transaction;
use DateInterval;
use DatePeriod;
use DateTimeImmutable;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        set_page_meta('Dashboard');

        $data['upcomeingCoachings'] = EnrollCoach::where('coach_id', auth()->id())
            ->where('status', '!=', COMPLETE)
            ->with('student', 'slot')
            ->get();

        // Earning Overview chart
        $lastTwelveMonthsEarnings = Transaction::selectRaw('DATE_FORMAT(created_at, "%Y-%m") as month_year, SUM(amount) as total_earning')
            ->where('user_id', auth()->id())
            ->whereBetween('created_at', [now()->subMonths(12), now()])
            ->groupBy('month_year')
            ->get()
            ->pluck('total_earning', 'month_year')
            ->toArray();

        ksort($lastTwelveMonthsEarnings);

        $lastTwelveYearsEarnings = Transaction::selectRaw('YEAR(created_at) as year, SUM(amount) as total_earning')
            ->where('user_id', auth()->id())
            ->whereBetween('created_at', [now()->subYears(12), now()])
            ->groupBy('year')
            ->get()
            ->pluck('total_earning', 'year')
            ->toArray();

        ksort($lastTwelveYearsEarnings);

        $data['lastTwelveMonthsEarning'] = $lastTwelveMonthsEarnings;
        $data['lastTwelveYearsEarning'] = $lastTwelveYearsEarnings;

        // Sessions Chart
        $lastTwelveMonthsSessions = EnrollCoach::where('coach_id', auth()->id())
            ->whereBetween('created_at', [now()->subMonths(12), now()])
            ->selectRaw('DATE_FORMAT(created_at, "%b") as month, COUNT(*) as total_sessions')
            ->groupBy('month')
            ->get()
            ->pluck('total_sessions', 'month')
            ->toArray();

        ksort($lastTwelveMonthsSessions);

        // Last 12 days sessions
        $lastTwelveDaysSessions = EnrollCoach::where('coach_id', auth()->id())
            ->whereBetween('created_at', [now()->subDays(12), now()])
            ->selectRaw('DATE_FORMAT(created_at, "%d %b") as day, COUNT(*) as total_sessions')
            ->groupBy('day')
            ->get()
            ->pluck('total_sessions', 'day')
            ->toArray();

        ksort($lastTwelveDaysSessions);

        $data['lastTwelveMonthsSessions'] = $lastTwelveMonthsSessions;
        $data['lastTwelveDaysSessions'] = $lastTwelveDaysSessions;

        // top students

        $data['topStudents'] = EnrollCoach::where('coach_id', auth()->id())
            ->with(['student'])
            ->select('student_id', DB::raw('count(*) as total_enrollments'), DB::raw('count(case when status != "complete" then 1 end) as active_sessions'))
            ->groupBy('student_id')
            ->orderByDesc('total_enrollments')
            ->take(6)
            ->get();

        // coach schedule
        $data['coach'] = Coach::where('user_id', auth()->id())->first();
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

        return view('coach.dashboard', $data);
    }

    public function dateRangeString($start_date, $end_date)
    {
        return $start_date->format('d M').'-'.$end_date->format('d M, Y');
    }
}
