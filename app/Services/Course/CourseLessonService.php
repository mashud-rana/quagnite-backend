<?php

namespace App\Services\Course;

use App\Models\User;
use \Illuminate\Support\Str;
use App\Models\CourseLesson;
use App\Services\BaseService;
use Illuminate\Support\Facades\Auth;

class CourseLessonService extends BaseService
{

    protected $model;

    public function __construct()
    {
        $this->model = CourseLesson::class;
    }

    public function get($id = null, array $with = [], bool $own_data = false)
    {
        try {
            $query = $this->model::query()->with($with);
            // Check data belongs to provided user
            if ($own_data) {
                $query->where('created_by', Auth::id());
            }
            // If contain id return single data or return collection
            if ($id) {
                return $query->findOrFail($id);
            } else {
                return $query->get();
            }
        } catch (\Exception $e) {
            $this->logFlashThrow($e);
        }
    }

    public function getForList($id)
    {
        try {
            if (auth()->user()->user_type == USER_TYPE_ADMIN) {
                return $this->model::where('module_id', $id)->select('id', 'title', 'status', 'serial')->get();
            } else {
                return $this->model::where('module_id', $id)->where('created_by', auth()->id())->select('id', 'title', 'status', 'serial')->get();
            }
        } catch (\Exception $e) {
            $this->logFlashThrow($e);
        }
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
}
