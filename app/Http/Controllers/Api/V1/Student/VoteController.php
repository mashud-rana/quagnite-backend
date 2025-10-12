<?php

namespace App\Http\Controllers\Api\V1\Student;

use App\Models\User;
use App\Models\Vote;
use App\Models\Course;
use App\Models\Review;
use App\Models\Student;
use App\Models\CourseNote;
use App\Models\Discussion;
use App\Models\ReviewVote;

use App\Traits\ApiResponse;
use App\Models\EnrollCourse;
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
use App\Http\Resources\Api\V1\Student\UserResource;
use App\Http\Requests\Api\V1\Student\ProfileRequest;
use App\Http\Resources\Api\V1\Student\EnrollCourseResource;
use App\Http\Resources\Api\V1\Student\Course\CourseResource;
use App\Http\Resources\Api\V1\Student\CourseSubjectResource;
use App\Http\Resources\Api\V1\Student\Review\ReviewResource;
use App\Http\Resources\Api\V1\Student\DifficultyLevelResource;
use App\Http\Resources\Api\V1\Student\Lecture\LectureResource;
use App\Http\Resources\Api\V1\Student\Course\CourseNoteResource;
use App\Http\Resources\Api\V1\Student\Discussions\DiscussionsResource;
use App\Http\Resources\Api\V1\Student\CourseCategory\CourseCategoryResource;
use App\Http\Resources\Api\V1\Student\Discussions\DiscussionsCommentResource;

class VoteController extends Controller
{
    use ApiResponse, PaginatedResourceTrait;
    protected $courseService;

    public function __construct(CourseService $courseService)
    {
        $this->courseService = $courseService;
    }


    public function vote(Request $request)
    {
        $request->validate([
            'votable_type' => 'required|string|in:review,discussion,discussion_comment',
            'votable_id' => 'required|integer',
            'type' => 'required|in:helpful,unhelpful',
        ]);

        // Dynamically determine the model
        $modelClass = match ($request->votable_type) {
            'review' => Review::class,
            'discussion' => Discussion::class,
            'discussion_comment' => DiscussionComment::class,
            default => null,
        };

        if (!$modelClass) {
            return response()->json(['message' => 'Invalid votable type'], 422);
        }

        // Create or update the vote
        $vote = Vote::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'votable_id' => $request->votable_id,
                'votable_type' => $modelClass,
            ],
            [
                'type' => $request->type,
            ]
        );
        if($request->votable_type == 'review'){
            // ✅ Now fetch the updated model properly
            $votable = $modelClass::with([
                'user',
                'my_vote',
            ])
            ->withCount([
                'helpful_votes as helpful_votes_count'
            ])
            ->findOrFail($request->votable_id);
            $votable = new ReviewResource($votable);
        }


        return response()->json([
            'message' => 'Vote recorded successfully',
            'vote' => $vote,
            'votable' =>  $votable,
        ]);
    }


}
