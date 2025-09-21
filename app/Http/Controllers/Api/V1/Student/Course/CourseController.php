<?php

namespace App\Http\Controllers\Api\V1\Student\Course;

use App\Models\User;
use App\Models\Course;
use App\Models\Student;
use App\Models\CourseNote;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Models\DiscussionComment;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Traits\PaginatedResourceTrait;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rules\Password;
use App\Services\Api\V1\Student\CourseService;
use App\Services\Api\V1\Student\ProfileService;
use App\Http\Resources\Api\V1\Student\UserResource;
use App\Http\Requests\Api\V1\Student\ProfileRequest;
use App\Http\Resources\Api\V1\Student\EnrollCourseResource;
use App\Http\Resources\Api\V1\Student\Course\CourseResource;
use App\Http\Resources\Api\V1\Student\CourseSubjectResource;
use App\Http\Resources\Api\V1\Student\DifficultyLevelResource;
use App\Http\Resources\Api\V1\Student\Lecture\LectureResource;
use App\Http\Resources\Api\V1\Student\Course\CourseNoteResource;
use App\Http\Resources\Api\V1\Student\CourseCategory\CourseCategoryResource;

class CourseController extends Controller
{
    use ApiResponse, PaginatedResourceTrait;
    protected $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    public function myCourses(Request $request)
    {

        $enrolledCourses = $this->courseService->getMyCourses();

        try {
            if (!$enrolledCourses) {
                return $this->error('No enrolled courses found', 404);
            }
            $this->courseService->calculateCoursesCompletion($enrolledCourses);
            // return $this->success($enrolledCourses);
            $resource =  $this->paginatedResponse($enrolledCourses, EnrollCourseResource::class);
            return $this->success($resource);
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }
    public function myCoursesSubjects(Request $request)
    {

        $enrolledCourses = $this->courseService->getEnrolledCoursesSubjects(withRelations:['course']);

        $is_paginate = $request->get('is_paginate', false);
        try {
            if (!$enrolledCourses) {
                return $this->error('No enrolled courses found', 404);
            }
            // return $enrolledCourses;

            if($is_paginate){
                $resource =  $this->paginatedResponse($enrolledCourses, CourseSubjectResource::class);
            } else {
                $resource = CourseSubjectResource::collection($enrolledCourses);
            }
            return $this->success($resource);

        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }

    public function courseDetails(Request $request, $slug)
    {
        try {
            $courseDetails = $this->courseService->getCourseDetailsBySlug($slug);
            if (!$courseDetails) {
                return $this->error('Course not found', 404);
            }
            $load_data_type = $request->get('load_data_type', 'course_content');
            switch($load_data_type){
                case 'course_content':
                    $courseDetails->load(['lessons.lecture.users','lessons.questions','lessons'=> function($query){
                        $query->withCount('lecture')
                        ->withCount('questions')
                        ->withSum('lecture', 'file_duration_second');
                    }]);
                    break;
                case 'course_overview':
                    $courseDetails->load(['difficulty', 'language', 'category','lessons.lecture.users','course_tags','lessons'=> function($query){
                        $query->withCount('lecture')
                        ->withCount('questions')
                        ->withSum('lecture', 'file_duration_second');
                    }]);
                    break;
                case 'course_announcements':
                    $courseDetails->load(['difficulty', 'language', 'category','lessons.lecture.users','course_tags','lessons'=> function($query){
                        $query->withCount('lecture')
                        ->withCount('questions')
                        ->withSum('lecture', 'file_duration_second');
                    }]);
                    break;
                case 'course_reviews':
                    $courseDetails->load(['reviews'=> function($query){
                        $query->with('user')->orderBy('id','desc');
                    }]);
                    break;
                case 'course_discussions':
                    $courseDetails->load([
                        'discussions' => function ($query) {
                            $query->orderBy('id', 'desc');
                        },
                        'discussions.comments' => function ($query) {
                            $query->orderBy('id', 'desc');
                        },
                        'discussions.comments.user',
                        'discussions.user'
                    ]);

                    break;
                case 'course_notes':
                    $courseDetails->load(['course_notes']);
                    break;
                default:
                    $courseDetails->load(['difficulty', 'language', 'category', 'lessons.lecture.users', 'reviews.user','lessons.questions','course_tags','discussions.comments','course_notes']);
            }

            // return $this->success($courseDetails);

            return $this->success(new CourseResource($courseDetails));
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }

    public function reviewSubmit(Request $request)
    {
        $request->validate([
            'course_id' => 'required|exists:courses,id',
            'rating' => 'required|numeric|min:1|max:5',
            'comment' => 'nullable|string',
        ]);

        try {
            $course = Course::findOrFail($request->course_id);

            $existingReview = $course->reviews()
                ->where('user_id', auth()->id())
                ->exists();

            if ($existingReview) {
                return $this->error('You have already submitted a review for this course.', 400);
            }

            $course->reviews()->create([
                'user_id' => auth()->id(),
                'rating' => $request->rating,
                'comment' => $request->comment,
            ]);

            return $this->success('Review Added Successfully');
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }

    public function discussionSubmit(Request $request)
    {
        $validated = $request->validate([
            'course_id' => 'required|exists:courses,id',
            'description' => 'required|string',
        ]);

        try {
            $course = Course::findOrFail($validated['course_id']);

            $course->discussions()->create([
                'user_id' => auth()->id(),
                'description' => $validated['description'],
            ]);

            return $this->success('Discussion Added Successfully');
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }

    public function discussionCommentSubmit(Request $request)
    {
        $request->validate([
            'discussion_id' => 'required',
            'comment' => 'required',
        ]);

        try {
            $discussionComment = DiscussionComment::create([
                'discussion_id' => $request->discussion_id,
                'user_id' => auth()->id(),
                'comment' => $request->comment,
            ]);

            return $this->success($discussionComment,'Discussion Comment Added Successfully');
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }

    }

    public function storeCourseNote(Request $request)
    {
        $request->validate([
            'course_id' => 'required',
            'note' => 'required',
            'title' => 'required',
        ]);

        try {
            $note = CourseNote::create([
                'user_id' => auth()->id(),
                'course_id' => $request->course_id,
                'note' => $request->note,
                'title' => $request->title,
            ]);

            if ($note) {
                $noteResource = new CourseNoteResource($note);
                return $this->success($noteResource, 'Course Note Added Successfully');
            } else {
                return $this->error('Failed to add course note.', 500);
            }
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }

    public function lecturePreview(Request $request)
    {
        $request->validate([
            'lecture_uuid' => 'required|exists:course_lectures,uuid',
        ]);

        try {
            $lecture = $this->courseService->getCourseLectureByUuid($request->lecture_uuid);

            if (!$lecture) {
                return $this->error('Lecture not found or not accessible', 404);
            }

            $user = Auth::user();
            if (!$user) {
                return $this->error('Unauthorized', 401);
            }

            // Mark lecture as completed for the user
            $user->lectures()->syncWithoutDetaching([
                $lecture->id => [
                    'completed' => true,
                    'course_id' => $lecture->course_id,
                    'lesson_id' => $lecture->course_lesson_id,
                ],
            ]);

            // Optionally, you may want to return a resource instead of the raw model
            return $this->success(new LectureResource($lecture), 'Lecture marked as completed successfully');
        } catch (\Exception $e) {
            logger()->error($e);
            return $this->error('An error occurred while marking the lecture as completed.', 500);
        }
    }

    public function quizPreview(Request $request)
    {

        $request->validate([
            'lesson_uuid' => 'required|exists:course_lessons,uuid',
        ]);

        try {
            $quizzes = $this->courseService->getQuizByLessonByUuid($request->lesson_uuid);

            if (!$quizzes) {
                return $this->error('Lesson not found or not accessible', 404);
            }


            return $this->success($quizzes, 'Quizzes retrieved successfully');
        } catch (\Exception $e) {
            logger()->error($e);
            return $this->error('An error occurred while retrieving quizzes.', 500);
        }
    }

    public function getFiltersData(){
        $categories = $this->courseService->getCourseCategories();
        $difficulties = $this->courseService->getDifficultyLevels();
        $enrolledCourses = $this->courseService->getEnrolledCoursesSubjects(withRelations:['course']);

        return $this->success([
            'categories' => CourseCategoryResource::collection($categories),
            'difficulties' =>DifficultyLevelResource::collection($difficulties),
            'course_subjects_ids' =>  CourseSubjectResource::collection($enrolledCourses),
        ], 'Course filters retrieved successfully');
    }


}
