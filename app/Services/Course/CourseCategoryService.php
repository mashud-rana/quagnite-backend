<?php

namespace App\Services\Course;


use App\Models\CourseCategory;
use \Illuminate\Support\Str;
use App\Services\BaseService;

class CourseCategoryService extends BaseService
{

    protected $model;

    public function __construct()
    {
        $this->model = CourseCategory::class;
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
