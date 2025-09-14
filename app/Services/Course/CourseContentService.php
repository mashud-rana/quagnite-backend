<?php

namespace App\Services\Course;

use App\Models\CourseModule;
use \Illuminate\Support\Str;
use App\Services\BaseService;
use App\Models\CourseContent;
use Illuminate\Support\Facades\Auth;

class CourseContentService extends BaseService
{

    protected $model;

    public function __construct()
    {
        $this->model = CourseContent::class;
    }

    public function getByLessonId($lesson_id, array $with = [], bool $own_data = false)
    {
        try {
            $query = $this->model::query()->with($with);
            // Check data belongs to provided user
            if ($own_data) {
                $query->where('created_by', Auth::id());
            }
            return $query->where('lesson_id', $lesson_id)->first();
        }catch (\Exception $e){
            $this->logFlashThrow($e);
        }
    }
}
