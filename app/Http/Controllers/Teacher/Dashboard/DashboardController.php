<?php

namespace App\Http\Controllers\Teacher\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Models\EnrollBootcamp;
use App\Models\EnrollCourse;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        set_page_meta('Dashboard');

        $data['courses'] = Course::whereUserId(auth()->user()->id)
            ->with('user', 'category', 'reviews')
            ->withCount('lectures')
            ->withSum('lectures', 'file_duration_second')
            ->limit(4)
            ->get();

        // student list
        $enrolledCourseStudents = EnrollCourse::whereHas('course', function ($query) {
            $query->where('user_id', Auth::id());
        })
            ->with('student')
            ->select('user_id', 'status')
            ->distinct()
            ->get();
        $enrolledBootcampStudents = EnrollBootcamp::whereHas('bootcamp', function ($query) {
            $query->where('user_id', Auth::id());
        })
            ->with('student')
            ->select('user_id', 'status')
            ->distinct()
            ->get();

        $data['enrolledStudents'] = $enrolledCourseStudents
            ->concat($enrolledBootcampStudents)
            ->unique('user_id')
            ->values()
            ->take(6);

        $data['is_reviewed'] = $data['enrolledStudents']->map(function ($enrolledStudent) {
            return $enrolledStudent->student->reviews()->where('user_id', auth()->id())->exists();
        });
        // Course Chart
        $lastTwelveMonthsCourses = EnrollCourse::whereHas('course', function ($query) {
            $query->where('user_id', auth()->id());
        })
            ->whereBetween('created_at', [now()->subMonths(12), now()])
            ->selectRaw('DATE_FORMAT(created_at, "%b") as month, COUNT(*) as total_courses')
            ->groupBy('month')
            ->get()
            ->pluck('total_courses', 'month')
            ->toArray();

        ksort($lastTwelveMonthsCourses);

        // Last 12 days sessions
        $lastTwelveDaysCourses = EnrollCourse::whereHas('course', function ($query) {
            $query->where('user_id', auth()->id());
        })
            ->whereBetween('created_at', [now()->subDays(12), now()])
            ->selectRaw('DATE_FORMAT(created_at, "%d %b") as day, COUNT(*) as total_courses')
            ->groupBy('day')
            ->get()
            ->pluck('total_courses', 'day')
            ->toArray();

        ksort($lastTwelveDaysCourses);

        $data['lastTwelveMonthsCourses'] = $lastTwelveMonthsCourses;
        $data['lastTwelveDaysCourses'] = $lastTwelveDaysCourses;

        return view('teacher.dashboard', $data);
    }
}
