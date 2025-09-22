<?php

namespace App\Http\Controllers\Student\Bootcamp;

use App\Http\Controllers\Controller;
use App\Models\Beneficiary;
use App\Models\Bootcamp;
use App\Models\BootcampLecture;
use App\Models\BootcampLesson;
use App\Models\DiscussionComment;
use App\Models\EnrollBootcamp;
use App\Services\Utils\ZoomService;
use Illuminate\Http\Request;

class BootcampController extends Controller
{
    public function __construct(protected ZoomService $zoomService) {}

    public function index()
    {
        set_page_meta('My Bootcamps');

        $data['progressBootcamps'] = EnrollBootcamp::where('user_id', auth()->id())->with('student', 'bootcamp')->get();
        $data['beneficiaries'] = Beneficiary::whereUserId(auth()->user()->id)->get();

        return view('student.bootcamp.index', $data);
    }

    public function show($slug, $uuid = null)
    {
        set_page_meta('Bootcamp');

        // Bootcamp Data
        $data['bootcamp'] = Bootcamp::where('slug', $slug)->with('user')->first();
        $data['bootcampLessons'] = BootcampLesson::whereBootcampId($data['bootcamp']->id)->with('lecture')->withCount('lecture')->get();

        // Reviews
        $data['is_reviewed'] = $data['bootcamp']->reviews()->where('user_id', auth()->id())->exists();

        $data['reviews'] = $data['bootcamp']->reviews()->with('user')->get();

        $data['reviewsCount'] = $data['reviews']->count();

        $data['averageRating'] = round($data['reviews']->avg('rating'), 2);

        // Count 1 - 5 reviews
        $data['ratingsCount'] = $data['reviews']->groupBy('rating')
            ->map(function ($group) {
                return $group->count();
            });

        // Calculate 1 -5 reviews percentage
        $data['percentageRatings'] = [];
        for ($i = 1; $i <= 5; $i++) {
            $percentage = $data['ratingsCount']->has($i) ? ($data['ratingsCount'][$i] / $data['reviewsCount']) * 100 : 0;
            $data['percentageRatings'][$i] = (int) $percentage;
        }

        $data['discussions'] = $data['bootcamp']->discussions()->with(['comments', 'user'])->get();

        return view('student.bootcamp.show', $data);
    }

    public function reviewSubmit(Request $request)
    {
        $request->validate([
            'bootcamp_id' => 'required',
            'rating' => 'required',
            'comment' => 'nullable|string',
        ]);

        $bootcamp = Bootcamp::findOrFail($request->bootcamp_id);

        $bootcamp->reviews()->create([
            'user_id' => auth()->id(),
            'rating' => $request->rating,
            'comment' => $request->comment,
        ]);

        record_created_flash('Review Added Successfully');

        return back();
    }

    public function discussionSubmit(Request $request)
    {
        $request->validate([
            'bootcamp_id' => 'required',
            'description' => 'required',
        ]);

        $bootcamp = Bootcamp::findOrFail($request->bootcamp_id);

        $bootcamp->discussions()->create([
            'user_id' => auth()->id(),
            'description' => $request->description,
        ]);

        record_created_flash('Discussion Added Successfully');

        return back();
    }

    public function discussionCommentSubmit(Request $request)
    {
        $request->validate([
            'discussion_id' => 'required',
            'comment' => 'required',
        ]);

        DiscussionComment::create([
            'discussion_id' => $request->discussion_id,
            'user_id' => auth()->id(),
            'comment' => $request->comment,
        ]);

        record_created_flash('Comment Added Successfully');

        return back();
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

        return view('common.zoom.guest', [
            'meeting' => $meeting,
        ]);
    }
}
