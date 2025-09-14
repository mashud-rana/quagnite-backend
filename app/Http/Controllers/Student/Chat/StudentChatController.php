<?php

namespace App\Http\Controllers\Student\Chat;

use App\Http\Controllers\Controller;
use App\Models\EnrollBootcamp;
use App\Models\EnrollCourse;
use Illuminate\Support\Facades\Auth;

class StudentChatController extends Controller
{
    public function index()
    {
        set_page_meta('My Teacher');

        $enrolledCourseTeachers = EnrollCourse::where('user_id', Auth::id())
            ->with('course.user')
            ->select('course_id')
            ->distinct()
            ->get();

        $enrolledBootcampTeachers = EnrollBootcamp::where('user_id', Auth::id())
            ->with('bootcamp.user')
            ->select('bootcamp_id')
            ->distinct()
            ->get();

        $enrolledTeachers = $enrolledCourseTeachers->concat($enrolledBootcampTeachers)
            ->map(function ($item) {
                return $item->course->user ?? $item->bootcamp->user;
            })
            ->filter()
            ->unique('id')
            ->values();

        return view('student.chat.index', compact('enrolledTeachers'));
    }

    public function myClassmates()
    {
        set_page_meta('My Classmates');

        $userId = Auth::id();

        $userCourseIds = EnrollCourse::where('user_id', $userId)
            ->pluck('course_id');
        $userBootcampIds = EnrollBootcamp::where('user_id', $userId)
            ->pluck('bootcamp_id');

        $courseClassmates = EnrollCourse::with('student')
            ->whereIn('course_id', $userCourseIds)
            ->where('user_id', '<>', $userId)
            ->distinct()
            ->get();

        $bootcampClassmates = EnrollBootcamp::with('student')
            ->whereIn('bootcamp_id', $userBootcampIds)
            ->where('user_id', '<>', $userId)
            ->distinct()
            ->get();

        // Concatenate and make the result unique
        $classmates = $courseClassmates->concat($bootcampClassmates)->unique('user_id');

        return view('student.chat.classmate', compact('classmates'));
    }
}
