<?php

namespace App\Http\Controllers\Api\V1\Student\Bootcamp;

use App\Models\User;
use App\Models\Course;
use App\Models\Student;
use App\Models\Bootcamp;
use App\Models\CourseNote;
use App\Traits\ApiResponse;
use App\Models\BootcampNote;
use Illuminate\Http\Request;

use App\Models\EnrollBootcamp;
use App\Models\BootcampLecture;
use App\Rules\MatchOldPassword;
use App\Models\DiscussionComment;
use App\Services\Utils\ZoomService;
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
use App\Http\Resources\Api\V1\Student\Review\ReviewResource;
use App\Http\Resources\Api\V1\Student\DifficultyLevelResource;
use App\Http\Resources\Api\V1\Student\Lecture\LectureResource;
use App\Http\Resources\Api\V1\Student\Course\CourseNoteResource;
use App\Http\Resources\Api\V1\Student\Bootcamp\BootcampsResource;
use App\Http\Resources\Api\V1\Student\Discussions\DiscussionsResource;
use App\Http\Resources\Api\V1\Student\Bootcamp\EnrolledBootcampsResource;
use App\Http\Resources\Api\V1\Student\CourseCategory\CourseCategoryResource;
use App\Http\Resources\Api\V1\Student\Discussions\DiscussionsCommentResource;

class BootcampController extends Controller
{
    use ApiResponse, PaginatedResourceTrait;
    protected $bootcampService;
    protected $zoomService;

    public function __construct(BootcampService $bootcampService, ZoomService $zoomService)
    {
        $this->bootcampService = $bootcampService;
        $this->zoomService = $zoomService;
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
        $bootcampDetails = $this->bootcampService->getBootcampDetailsBySlug($slug, withRelations: [
            'user.teacher',
            'lessons.lecture',
            'difficulty',
            'tags.tag',
            'reviews' => function($query) {
                $query->orderBy('id', 'desc')->with('user');
            },
            'notes',
            'discussions' => function($query) {
                $query->orderBy('created_at', 'desc')->with([
                    'user',
                    'comments' => function($query) {
                        $query->orderBy('created_at', 'desc')->with('user');
                    }
                ]);
            },
            'lessons' => function($query){
                $query->orderBy('id','desc')->withSum('lecture','duration');
            }
        ]);
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
        $validated = $request->validate([
            'bootcamp_id' => 'required|exists:bootcamps,id',
            'rating'      => 'required|integer|min:1|max:5',
            'comment'     => 'nullable|string|min:5',
        ]);

        try {
            $bootcamp = Bootcamp::findOrFail($validated['bootcamp_id'])->load('reviews');

            $existingReview = $bootcamp->reviews()
            ->where('user_id', auth()->id())
            ->exists();

             if ($existingReview) {
                return $this->error('You have already submitted a review for this course.', 400);
            }

            $review = $bootcamp->reviews()->create([
                'user_id' => auth()->id(),
                'rating'  => $validated['rating'],
                'comment' => $validated['comment'] ?? null,
            ]);

            // Refresh bootcamp with reviews relation
            $bootcamp->load('reviews');

            return $this->success([
                // 'review'   => $review->load('user'),
                'review'   => new ReviewResource($review->load('user')),
                'data' => new BootcampsResource($bootcamp),
            ], 'Review Added Successfully');
        } catch (\Throwable $e) {
            logger()->error("Review submission failed: " . $e->getMessage());

            return $this->error('Something went wrong. Please try again later.');
        }
    }


    public function discussionSubmit(Request $request)
    {
        $request->validate([
            'bootcamp_id' => 'required',
            'description' => 'required',
        ]);

        try {
            $bootcamp = Bootcamp::findOrFail($request->bootcamp_id);

            $discussion = $bootcamp->discussions()->create([
                'user_id' => auth()->id(),
                'description' => $request->description,
            ]);

            // return $this->success($discussion, 'Discussion Added Successfully');
             return $this->success(new DiscussionsResource($discussion->load('comments','comments.user','user')), 'Discussion Added Successfully');
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }

    public function discussionCommentSubmit(Request $request)
    {
        $request->validate([
            'discussion_id' => 'required',
            'comment' => 'required',
        ]);

        try {

            $discussionComment = DiscussionComment::create([
                'discussion_id' => $request->discussion_id,
                'user_id' => auth()->id(),
                'comment' => $request->comment,
            ]);


            // return $this->success($discussionComment,'Discussion Comment Added Successfully');
             return $this->success(new DiscussionsCommentResource($discussionComment->load(['user'])),'Discussion Comment Added Successfully');
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }

    }


    public function storeNote(Request $request)
    {
        $request->validate([
            'bootcamp_id' => 'required',
            'note' => 'required',
            'title' => 'required',
        ]);

        try {
            $note = BootcampNote::create([
                'user_id' => auth()->id(),
                'bootcamp_id' => $request->bootcamp_id,
                'note' => $request->note,
                'title' => $request->title,
            ]);

            if ($note) {
                $noteResource = new CourseNoteResource($note);
                return $this->success($noteResource, 'Course Note Added Successfully');
            } else {
                return $this->error('Failed to add course note.', 500);
            }
        } catch (\Exception $e) {
            logger($e->getMessage());
            return $this->error($e->getMessage());
        }
    }

    public function joinClass($uuid)
    {
        $lecture = BootcampLecture::whereUuid($uuid)->firstOrFail();

        $meeting['signature'] = $this->zoomService->generateSignature($lecture->meeting_id, 0);
        $meeting['leaveUrl'] = route('student.bootcamps');
        $meeting['userEmail'] = auth()->user()->email;
        $meeting['userName'] = auth()->user()->full_name;
        $meeting['password'] = $lecture->password;
        $meeting['meetingNumber'] = $lecture->meeting_id;
        $meeting['key'] = $this->zoomService->web_client_id;

        return $this->success($meeting, 'Meeting Details Retrieved Successfully');
    }


}
