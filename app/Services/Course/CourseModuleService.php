<?php

namespace App\Services\Course;

use \Illuminate\Support\Str;
use App\Models\CourseModule;
use App\Constants\GlobalConstant;
use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;

class CourseModuleService extends BaseService
{

    protected $model;

    public function __construct()
    {
        $this->model = CourseModule::class;
    }

    public function storeOrUpdate($data, $id = null)
    {
        try {
            // Load additional data
            $data['slug'] = Str::slug($data['title']);
            // Call parent method
            return parent::storeOrUpdate($data, $id);
        } catch (\Exception $e) {
            $this->logFlashThrow($e);
        }
    }

    public function getCousesPaginated(int $limit = GlobalConstant::DEFAULT_PER_PAGE, array $with = [], bool $own_data = false, string $sort = null, string $sort_by = 'DESC', $course_id = null)
    {
        try {
            $query = $this->model::query()->with($with);
            // Check data belongs to provided user
            if ($own_data) {
                $query->where('created_by', Auth::id());
            }
            // Sort data
            if ($sort) {
                $query->orderBy($sort, $sort_by);
            }
            if ($course_id) {
                $query->where('course_id', $course_id);
            }
            return $query->paginate($limit);
        } catch (\Exception $e) {
            $this->logFlashThrow($e);
        }
    }
}
