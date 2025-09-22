<?php

namespace App\Http\Controllers\Api\V1\Student\Bootcamp;

use App\Models\User;
use App\Models\Course;
use App\Models\Student;
use App\Models\Bootcamp;
use App\Models\CourseNote;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;
use App\Models\EnrollBootcamp;

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
use App\Http\Resources\Api\V1\Student\Bootcamp\BootcampsResource;
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

    public function bootcampDetails($slug)
    {
        $enrolledBootCamp = $this->getEnrolledBootcampBySlug($slug);
        if (!$enrolledBootCamp) {
            return $this->error('You are not enrolled in this bootcamp', 403);
        }
        $bootcampDetails = $this->bootcampService->getBootcampDetailsBySlug($slug, withRelations: ['user.teacher','lessons.lecture','difficulty','tags.tag','reviews.user','discussions.comments','discussions.user']);
        if (!$bootcampDetails) {
            return $this->error('Course not found', 404);
        }
        // return $bootcampDetails;
        return $this->success(new BootcampsResource($bootcampDetails));
    }

    /**
     * Get the enrolled bootcamp for the authenticated user by slug.
     *
     * @param string $slug
     * @return EnrollBootcamp|null
     */
    protected function getEnrolledBootcampBySlug($slug)
    {
        return EnrollBootcamp::where('user_id', auth()->id())
            ->whereHas('bootcamp', function ($q) use ($slug) {
                $q->where('slug', $slug);
            })
            ->first();
    }

    public function reviewSubmit(Request $request)
    {
        $request->validate([
            'bootcamp_id' => 'required',
            'rating' => 'required',
        ]);

        try {
            $bootcamp = Bootcamp::findOrFail($request->bootcamp_id);

            $bootcamp->reviews()->create([
                'user_id' => auth()->id(),
                'rating' => $request->rating,
                'comment' => $request->comment,
            ]);

            return $this->success('Review Added Successfully');
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }


}
