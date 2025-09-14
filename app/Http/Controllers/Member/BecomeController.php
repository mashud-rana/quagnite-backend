<?php

namespace App\Http\Controllers\Member;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Models\TeacherCategory;
use App\Services\Utils\FileService;
use App\Http\Controllers\Controller;
use App\Models\Coach;
use App\Models\CoachCategory;

class BecomeController extends Controller
{
    public function __construct(
        protected FileService $fileService,
    ) {
    }

    public function becomeATeacher()
    {
        set_page_meta('Become A Teacher');

        if (Teacher::where('user_id', auth()->id())->exists() || Coach::where('user_id', auth()->id())->exists()) {
            $is_applied = true;
        } else {
            $is_applied = false;
        }

        $categories = TeacherCategory::select('id', 'name')->get();
        return view('member.become.teacher', ['categories' => $categories, 'is_applied' => $is_applied]);
    }

    public function submitBecomeATeacher(Request $request)
    {
        $request->validate([
            'teacher_category_id' => 'required',
            'professional_title' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'about_me' => 'required',
            'cv' => 'required',
        ]);

        Teacher::create([
            'user_id' => auth()->id(),
            'teacher_category_id' => $request->teacher_category_id,
            'professional_title' => $request->professional_title,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'about_me' => $request->about_me,
            'cv' => $request->hasFile('cv') ? $this->fileService->upload($request->file('cv'), 'teacher/cv') :   null,
            'status' => 1,
        ]);

        record_created_flash('Application submitted successfully');

        return back();
    }

    public function becomeACoach()
    {
        set_page_meta('Become A Coach');

        if (Coach::where('user_id', auth()->id())->exists() || Teacher::where('user_id', auth()->id())->exists()) {
            $is_applied = true;
        } else {
            $is_applied = false;
        }

        $categories = CoachCategory::select('id', 'name')->get();
        return view('member.become.coach', ['categories' => $categories, 'is_applied' => $is_applied]);
    }

    public function submitBecomeACoach(Request $request)
    {
        $request->validate([
            'coach_category_id' => 'required',
            'professional_title' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'about_me' => 'required',
            'cv' => 'required',
        ]);

        Coach::create([
            'user_id' => auth()->id(),
            'coach_category_id' => $request->coach_category_id,
            'professional_title' => $request->professional_title,
            'phone_number' => $request->phone_number,
            'address' => $request->address,
            'about_me' => $request->about_me,
            'cv' => $request->hasFile('cv') ? $this->fileService->upload($request->file('cv'), 'coach/cv') :   null,
            'status' => 1,
        ]);

        record_created_flash('Application submitted successfully');

        return back();
    }
}
