<?php

namespace App\Http\Controllers\Coach\Student;

use App\Http\Controllers\Controller;
use App\Models\EnrollCoach;
use Illuminate\Support\Facades\Auth;

class EnrollCoachController extends Controller
{
    public function index()
    {
        set_page_meta('My Students');

        $enrolledStudents = EnrollCoach::where('coach_id', Auth::id())
            ->with('student')
            ->get()
            ->unique('student.id');

        return view('coach.student.index', compact('enrolledStudents'));
    }
}
