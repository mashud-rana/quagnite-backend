<?php

namespace App\Services\Api\V1\Student;

use App\Models\User;
use App\Models\Course;
use App\Models\CourseLesson;
use App\Models\EnrollCourse;
use App\Models\CourseLecture;
use App\Services\BaseService;
use App\Models\CourseCategory;
use App\Models\DifficultyLevel;
use App\Services\Utils\FileService;
use Illuminate\Support\Facades\Auth;

class CourseService extends BaseService
{
    protected $model;
    protected $fileService;

    public function __construct(FileService $fileService)
    {
        $this->model = EnrollCourse::class;
        $this->fileService = $fileService;
    }

    public function getMyCourses(
        array $selectedFields = ['*'],
        array $withRelations = ['course.user', 'course.difficulty','course.lectures','course.reviews']
    )
    {
        $request = request();

        $per_page = $request->get('per_page', 10);

        $course_subjects_ids = $request->get('course_subjects_ids') ? array_filter(explode(',', $request->get('course_subjects_ids'))) : null;
        $category_ids = $request->get('category_ids') ? array_filter(explode(',', $request->get('category_ids'))) : null;
        $difficulty_level_ids = $request->get('difficulty_level_ids') ? array_filter(explode(',', $request->get('difficulty_level_ids'))) : null;
        $type = $request->get('type', 'all'); // 'in_progress' , 'complete','all'
        // dd($category_ids);
        $relationships = [];
        $search = $request->get('search', null);

        foreach($withRelations as $relation){
            $relationships[] = $relation;

        }

        $enrolledCourses =  $this->model::where('user_id', Auth::id())
            ->with($relationships)
            ->select($selectedFields)
            ->when($type !== 'all', function ($query) use ($type) {
                if($type === 'in_progress'){
                    return $query->where('status', INPROGRESS);
                } elseif($type === 'complete'){
                    return $query->where('status', COMPLETE);
                }
                return $query;
            })
            ->orderBy('id','desc')
            ->when(!empty($course_subjects_ids), function ($query) use ($course_subjects_ids) {
                return $query->whereHas('course', function ($query) use ($course_subjects_ids) {
                    return $query->whereIn('id', $course_subjects_ids);
                });
            })
            ->when(!empty($category_ids), function ($query) use ($category_ids) {
                return $query->whereHas('course', function ($query) use ($category_ids) {
                    return $query->whereIn('course_category_id', $category_ids);
                });
            })
            ->when(!empty($difficulty_level_ids), function ($query) use ($difficulty_level_ids) {
                return $query->whereHas('course', function ($query) use ($difficulty_level_ids) {
                    return $query->whereIn('difficulty_level_id', $difficulty_level_ids);
                });
            })
            ->when(!empty($search), function ($query) use ($search) {
                return $query->whereHas('course', function ($query) use ($search) {
                    return $query->where('title', 'like', '%'.$search.'%');
                });
            })
            ->paginate($per_page);

        return $enrolledCourses;
    }

    public function getEnrolledCoursesSubjects(
        array $selectedFields = ['*'],
        array $withRelations = []
    )
    {
        $request = request();

        $per_page = $request->get('per_page', 10);
        $is_paginate = $request->get('is_paginate', false);
        $type = $request->get('type', 'all'); // 'in_progress' , 'complete','all'

        $relationships = [];

        foreach($withRelations as $relation){
            $relationships[] = $relation;
        }

        $enrolledCourses =  $this->model::where('user_id', Auth::id())
            ->with($relationships)
            ->select($selectedFields)
            ->when($type !== 'all', function ($query) use ($type) {
                if($type === 'in_progress'){
                    return $query->where('status', INPROGRESS);
                } elseif($type === 'complete'){
                    return $query->where('status', COMPLETE);
                }
                return $query;
            })
            ->orderBy('id','desc')
            ->when($is_paginate, function ($query) use ($per_page) {
                return $query->paginate($per_page);
            }, function ($query) {
                return $query->get();
            });

        return $enrolledCourses;
    }





    public function calculateCoursesCompletion($enrolledCourses){
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

            } else {
                $item->update(['status' => INPROGRESS]);

            }

            // Assign completion percentage to enrollment object
            $item->completionPercentage = (int) $completionPercentage;
        }
    }

    public function getCourseCategories(
        array $selectedFields = ['*'],
        array $withRelations = []
    )
    {
        $request = request();

        $per_page = $request->get('per_page', 10);
        $is_paginate = $request->get('is_paginate', false);

        $relationships = [];

        foreach($withRelations as $relation){
            $relationships[] = $relation;

        }

        $courseCategories =  CourseCategory::query()
            ->with($relationships)
            ->select($selectedFields)
            ->orderBy('id','desc')
            ->when($is_paginate, function ($query) use ($per_page) {
                return $query->paginate($per_page);
            }, function ($query) {
                return $query->get();
            });

        return $courseCategories;
    }

    public function getDifficultyLevels(
        array $selectedFields = ['*'],
        array $withRelations = []
    )
    {
        $request = request();

        $per_page = $request->get('per_page', 10);
        $is_paginate = $request->get('is_paginate', false);

        $relationships = [];

        foreach($withRelations as $relation){
            $relationships[] = $relation;

        }

        $difficulties =  DifficultyLevel::query()
            ->with($relationships)
            ->select($selectedFields)
            ->orderBy('id','desc')
            ->when($is_paginate, function ($query) use ($per_page) {
                return $query->paginate($per_page);
            }, function ($query) {
                return $query->get();
            });

        return $difficulties;
    }

    public function getCourseDetailsBySlug($slug,
        array $selectedFields = ['*'],
        array $withRelations = ['user.teacher.teacher_category']
    ){
        $course = Course::where('slug', $slug)

            ->with($withRelations)
            ->first();

        return $course;


    }

    public function getCourseLectureByUuid($lectureUuid){
        $lecture = CourseLecture::where('uuid', $lectureUuid)->firstOrFail();

        return $lecture;

    }

        public function getQuizByLessonByUuid($lessonUuid)
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
