<?php

namespace App\Http\Controllers\Teacher\Dashboard;

use App\Models\User;
use App\Models\EnrollCourse;
use Illuminate\Http\Request;
use App\Models\EnrollBootcamp;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class EnrollStudentController extends Controller
{
    public function index()
    {
        set_page_meta('My Students');

        $enrolledCourseStudents  = EnrollCourse::whereHas('course', function ($query) {
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
            ->values();

        $data['is_reviewed'] = $data['enrolledStudents']->map(function ($enrolledStudent) {
            return $enrolledStudent->student->reviews()->where('user_id', auth()->id())->exists();
        });

        return view('teacher.student.index', $data);
    }


    public function community()
    {
        set_page_meta('Community');

        $users = User::whereIn('user_type', ['coach', 'admin'])
            ->get();

        return view('teacher.student.community', compact('users'));
    }

    public function reviewSubmit(Request $request)
    {
        $request->validate([
            'student_id' => 'required',
            'rating' => 'required',
        ]);

        $student = User::findOrFail($request->student_id);

        $student->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        record_created_flash('Review Added Successfully');

        return back();
    }
}
