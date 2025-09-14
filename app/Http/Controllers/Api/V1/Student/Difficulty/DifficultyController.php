<?php

namespace App\Http\Controllers\Api\V1\Student\Difficulty;


use App\Traits\ApiResponse;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Traits\PaginatedResourceTrait;
use App\Services\Api\V1\Student\CourseService;
use App\Http\Resources\Api\V1\Student\CourseCategoryResource;
use App\Http\Resources\Api\V1\Student\DifficultyLevelResource;

class DifficultyController extends Controller
{
    use ApiResponse, PaginatedResourceTrait;
    protected $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }

    public function getDifficulties(Request $request)
    {

        $difficulties = $this->courseService->getDifficultyLevels();
        $is_paginate = $request->get('is_paginate', false);
        try {
            if (!$difficulties) {
                return $this->error('No difficulties found', 404);
            }
            // return $this->success($difficulties);
            if($is_paginate){
                $resource =  $this->paginatedResponse($difficulties, DifficultyLevelResource::class);
            } else {
                $resource = DifficultyLevelResource::collection($difficulties);
            }
            return $this->success($resource);
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }


}
