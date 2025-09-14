<?php

namespace App\Http\Controllers\Teacher\Bootcamp;

use App\Models\Bootcamp;
use Illuminate\Http\Request;
use App\Models\BootcampLesson;
use App\Models\BootcampLecture;
use App\Models\DiscussionComment;
use App\Services\Utils\ZoomService;
use App\Http\Controllers\Controller;

class ManageController extends Controller
{
    public function __construct(protected ZoomService $zoomService)
    {
    }

    public function show($slug, $uuid)
    {
        set_page_meta('Bootcamp');

        // Bootcamp Data
        $data['bootcamp'] = Bootcamp::whereSlug($slug)->whereUuid($uuid)->with('user')->first();
        $data['bootcampLessons'] = BootcampLesson::whereBootcampId($data['bootcamp']->id)->with('lecture')->withCount('lecture')->get();

        // Reviews

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

        return view('teacher.bootcamp.show', $data);
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

        $response = $this->zoomService->getZak();

        if ($response['status']) {

            $meeting['zak'] = $response['data']['token'];

            $meeting['signature'] = $this->zoomService->generateSignature($lecture->meeting_id, 1);
            $meeting['leaveUrl'] = route('teacher.bootcamp.index');
            $meeting['userEmail'] = auth()->user()->email;
            $meeting['userName'] = auth()->user()->full_name;
            $meeting['password'] = $lecture->password;
            $meeting['meetingNumber'] = $lecture->meeting_id;
            $meeting['key'] = $this->zoomService->web_client_id;
        } else {
            record_deleted_flash('Somethings went wrong!');
            return back();
        }

        info($meeting);

        return view('common.zoom.host', [
            'meeting' => $meeting,
        ]);
    }
}
