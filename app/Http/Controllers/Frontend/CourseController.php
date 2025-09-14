<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Course;

class CourseController extends Controller
{
    public function index()
    {
        set_page_meta('Courses');

        $data['courses'] = Course::approved()->inRandomOrder()->limit(4)->with(['user', 'category', 'reviews'])->get();

        return view('frontend.course.index', $data);
    }

    public function allCourses()
    {
        set_page_meta('Courses');

        $data['courses'] = Course::approved()->with(['user', 'category', 'reviews'])->paginate(8);

        return view('frontend.course.list', $data);
    }

    public function details($slug)
    {
        $course = Course::approved()
            ->with(['user', 'lessons.lecture', 'category', 'reviews.user'])
            ->where('slug', $slug)
            ->firstOrFail();

        set_page_meta('Course Details: '.$course->title);

        $relatedCourses = Course::approved()
            ->where('user_id', $course->user_id)
            ->whereNotIn('id', [$course->id])
            ->take(4)
            ->get();

        // load the relationship
        $relatedCourses->load('user', 'category', 'reviews');

        $data['course'] = $course;
        $data['relatedCourses'] = $relatedCourses;

        return view('frontend.course.details', $data);
    }
}
