<?php

namespace App\Http\Controllers\Api\V1\Student\Category;

use App\Models\User;
use App\Models\Student;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use App\Traits\PaginatedResourceTrait;
use Illuminate\Validation\Rules\Password;
use App\Services\Api\V1\Student\CourseService;
use App\Services\Api\V1\Student\ProfileService;
use App\Http\Resources\Api\V1\Student\UserResource;
use App\Http\Requests\Api\V1\Student\ProfileRequest;
use App\Http\Resources\Api\V1\Student\EnrollCourseResource;
use App\Http\Resources\Api\V1\Student\CourseCategoryResource;

class CourseCategoryController extends Controller
{
    use ApiResponse, PaginatedResourceTrait;
    protected $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    public function getCategories(Request $request)
    {

        $categories = $this->courseService->getCourseCategories();
        $is_paginate = $request->get('is_paginate', false);
        try {
            if (!$categories) {
                return $this->error('No categories found', 404);
            }
            // return $this->success($categories);
            if($is_paginate){
                $resource =  $this->paginatedResponse($categories, CourseCategoryResource::class);
            } else {
                $resource = CourseCategoryResource::collection($categories);
            }
            return $this->success($resource);
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }


}
