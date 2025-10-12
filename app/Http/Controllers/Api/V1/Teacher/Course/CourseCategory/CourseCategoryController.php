<?php

namespace App\Http\Controllers\Api\V1\Teacher\Course\CourseCategory;

use App\Http\Controllers\Controller;
use App\Http\Resources\Api\V1\Teacher\CourseCategory\CourseCategoryResource;
use App\Services\Course\CourseCreateService;
use App\Services\PreRequisition\CourseCategoryService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class CourseCategoryController extends Controller
{
    use ApiResponse;
    public $courseCreateService;

    public function __construct(CourseCategoryService $courseCategoryService)
    {
        $this->courseCreateService = $courseCategoryService;
    }

    public function categoryList()
    {
        return $this->success(
            CourseCategoryResource::collection($this->courseCreateService->get(with:['subcategories'])),
            'Course categories retrieved successfully'
        );

    }

    public function courseSubCategoryItem($id)
    {
        $courseSubCategory = $this->courseCreateService->get($id,['subcategories']);
        return $this->success(
            new CourseCategoryResource($courseSubCategory),
            'Course sub categories retrieved successfully'
        );
    }

}
