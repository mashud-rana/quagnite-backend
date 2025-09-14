<?php

namespace App\Http\Controllers\Student\Course;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\Course;
use App\Models\CourseLecture;
use App\Models\CourseLesson;
use App\Models\DiscussionComment;
use App\Models\EnrollCourse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CourseController extends Controller
{
    public function index()
    {
        set_page_meta('My Courses');

        $enrolledCourses = EnrollCourse::where('user_id', Auth::id())
            ->with('student', 'course.user', 'course.lectures', 'course.lectures.users')
            ->get();
        $data['beneficiaries'] = Beneficiary::whereUserId(auth()->user()->id)->get();

        // Separate enrolled and completed courses
        $data['enrolledCourses'] = [];
        $data['completedCourses'] = [];

        // Calculate completion percentage
        foreach ($enrolledCourses as $item) {

            $lectures = $item->course->lectures;

            // Calculate completed lectures count
            $completedLecturesCount = $lectures->flatMap(function ($lecture) use ($item) {
                return $lecture->users->map(function ($user) use ($item, $lecture) {
                    return [
                        'completed' => $user->id === $item->student->id && $user->pivot->completed,
                        'lecture_id' => $lecture->id,
                    ];
                });
            })->where('completed', true)->unique('lecture_id')->count();

            // Total lectures count
            $totalLecturesCount = $lectures->count();

            // Calculate completion percentage
            $completionPercentage = ($totalLecturesCount > 0) ? round(($completedLecturesCount / $totalLecturesCount) * 100) : 0;

            // Update status based on completion percentage
            if ($completionPercentage == 100) {
                $item->update(['status' => COMPLETE]);
                $data['completedCourses'][] = $item;
            } else {
                $item->update(['status' => INPROGRESS]);
                $data['enrolledCourses'][] = $item;
            }

            // Assign completion percentage to enrollment object
            $item->completionPercentage = (int) $completionPercentage;
        }

        return view('student.course.index', $data);
    }

    public function show($slug, $lessonUuid = null, $lectureUuid = null)
    {
        set_page_meta('Course Content');

        // Course Data
        $data['course'] = Course::where('slug', $slug)->firstOrFail();
        $data['courseLessons'] = CourseLesson::whereCourseId($data['course']->id)
            ->with(['lecture.users', 'questions'])
            ->withCount('lecture')
            ->withCount('questions')
            ->withSum('lecture', 'file_duration_second')
            ->get();

        // Active Lecture
        if ($lectureUuid) {

            if ($lectureUuid == 'quiz') {
                $data['quizes'] = json_encode($this->getQuizByLesson($lessonUuid));
                $data['activeQuiz'] = true;
                $data['activeLecture'] = true;
            } else {
                // $data['activeLecture'] = CourseLecture::where('uuid', $lectureUuid)->firstOrFail();
                // $data['activeQuiz'] = false;
                $lecture = CourseLecture::where('uuid', $lectureUuid)->firstOrFail();
                // dd($lecture);
                $data['activeLecture'] = $lecture;
                $data['activeQuiz'] = false;

                // Attach the lecture to the user, marking it as completed
                Auth::user()->lectures()->syncWithoutDetaching([
                    $lecture->id => [
                        'completed' => true,
                        'course_id' => $lecture->course_id,
                        'lesson_id' => $lecture->course_lesson_id,
                    ],
                ]);
            }
        } else {
            $data['activeLecture'] = false;
            $data['activeQuiz'] = false;
        }

        // dd($data);

        // Reviews
        $data['is_reviewed'] = $data['course']->reviews()->where('user_id', auth()->id())->exists();

        $data['reviews'] = $data['course']->reviews()->with('user')->get();

        $data['reviewsCount'] = $data['reviews']->count();

        $data['averageRating'] = round($data['reviews']->avg('rating'), 2);

        // Count 1 - 5 reviews
        $data['ratingsCount'] = $data['reviews']->groupBy('rating')
            ->map(function ($group) {
                return $group->count();
            });

        // Calculate 1 -5 reviews percentage
        $data['percentageRatings'] = [];
        for ($i = 1; $i <= 5; $i++) {
            $percentage = $data['ratingsCount']->has($i) ? ($data['ratingsCount'][$i] / $data['reviewsCount']) * 100 : 0;
            $data['percentageRatings'][$i] = (int) $percentage;
        }

        $data['discussions'] = $data['course']->discussions()->with(['comments', 'user'])->get();

        return view('student.course.show', $data);
    }

    public function reviewSubmit(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'rating' => 'required',
        ]);

        $course = Course::findOrFail($request->course_id);

        $course->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        record_created_flash('Review Added Successfully');

        return back();
    }

    public function discussionSubmit(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'description' => 'required',
        ]);

        $course = Course::findOrFail($request->course_id);

        $course->discussions()->create([
            'user_id' => auth()->id(),
            'description' => $request->description,
        ]);

        record_created_flash('Discussion Added Successfully');

        return back();
    }

    public function discussionCommentSubmit(Request $request)
    {
        $request->validate([
            'discussion_id' => 'required',
            'comment' => 'required',
        ]);

        DiscussionComment::create([
            'discussion_id' => $request->discussion_id,
            'user_id' => auth()->id(),
            'comment' => $request->comment,
        ]);

        record_created_flash('Comment Added Successfully');

        return back();
    }

    public function getQuizByLesson($lessonUuid)
    {
        $questions = CourseLesson::where('uuid', $lessonUuid)->firstOrFail()->questions()->get();

        $responses = [];

        if (count($questions) > 0) {

            foreach ($questions as $key => $qus) {
                $responses[$key]['question'] = $qus->title;
                $responses[$key]['correctAnswer'] = $qus->answer;
                $responses[$key]['hint'] = $qus->hint;
                $responses[$key]['explanation'] = $qus->explanation;

                foreach ($qus->options as $opt) {
                    if (is_null($opt->title)) {
                        continue;
                    }
                    $responses[$key]['answers'][$opt->option] = $opt->title;
                }
            }
        }

        return $responses;
    }
}
