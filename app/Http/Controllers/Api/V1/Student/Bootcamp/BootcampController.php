<?php

namespace App\Http\Controllers\Api\V1\Student\Bootcamp;

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
use App\Services\Api\V1\Student\BootcampService;
use App\Http\Resources\Api\V1\Student\UserResource;
use App\Http\Requests\Api\V1\Student\ProfileRequest;
use App\Http\Resources\Api\V1\Student\EnrollCourseResource;
use App\Http\Resources\Api\V1\Student\Course\CourseResource;
use App\Http\Resources\Api\V1\Student\CourseSubjectResource;
use App\Http\Resources\Api\V1\Student\DifficultyLevelResource;
use App\Http\Resources\Api\V1\Student\Lecture\LectureResource;
use App\Http\Resources\Api\V1\Student\Course\CourseNoteResource;
use App\Http\Resources\Api\V1\Student\Bootcamp\EnrolledBootcampsResource;
use App\Http\Resources\Api\V1\Student\CourseCategory\CourseCategoryResource;

class BootcampController extends Controller
{
    use ApiResponse, PaginatedResourceTrait;
    protected $bootcampService;

    public function __construct(BootcampService $bootcampService)
    {
        $this->bootcampService = $bootcampService;
    }

    public function myBootcamps(Request $request)
    {

        $bootcamps = $this->bootcampService->getMyBootcamps(withRelations: ['bootcamp','student']);
        // return $bootcamps;
        try {
            if (!$bootcamps) {
                return $this->error('No enrolled courses found', 404);
            }

            $resource =  $this->paginatedResponse($bootcamps, EnrolledBootcampsResource::class);
            return $this->success($resource);
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }

}
