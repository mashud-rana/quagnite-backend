<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\EnrollCourse;
use Illuminate\Support\Facades\Auth;

class ExtraDataController extends Controller
{
    public function getEnrolledCourses($ticket_for)
    {
        if ($ticket_for === 'course') {
            $items = EnrollCourse::where('user_id', Auth::id())->get();

            $data = [];
            if ($items->count() > 0) {
                foreach ($items as $item) {

                    $id = $item->course->id;
                    $title = $item->course->title;
                    $course = [
                        'id' => $id,
                        'title' => $title,
                    ];
                    $data[] = $course;
                }
            }

            return response()->json(['status' => 200, 'data_for' => 'course', 'courses' => $data]);
        }
        if ($ticket_for === 'bootcamp') {

            $data = [];

            return response()->json(['status' => 200, 'data_for' => 'bootcamp', 'bootcamps' => $data]);
        }
    }
}
