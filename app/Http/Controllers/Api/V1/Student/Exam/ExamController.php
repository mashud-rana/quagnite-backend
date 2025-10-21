<?php

namespace App\Http\Controllers\Api\V1\Student\Exam;


use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Traits\PaginatedResourceTrait;
use App\Services\Api\V1\Student\ExamService;

use App\Http\Resources\Api\V1\Student\Exam\ExamResource;


use App\Http\Resources\Api\V1\Student\Exam\EnrollExamResource;
use App\Http\Resources\Api\V1\Student\Bootcamp\EnrolledBootcampsResource;

class ExamController extends Controller
{
    use ApiResponse, PaginatedResourceTrait;
    protected $examService;

    public function __construct(ExamService $examService)
    {
        $this->examService = $examService;
    }


    public function myExams(Request $request)
    {

        $examps = $this->examService->getMyExams(withRelations: ['exam.questions','result']);
        // return $examps;
        try {
            if (!$examps) {
                return $this->error('No enrolled exams found', 404);
            }

            $resource =  $this->paginatedResponse($examps, EnrollExamResource::class);
            return $this->success($resource);
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }



}
