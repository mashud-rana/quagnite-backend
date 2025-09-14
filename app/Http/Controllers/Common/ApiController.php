<?php

namespace App\Http\Controllers\Common;

use App\Http\Controllers\Controller;
use App\Models\ApiCall;
use App\Models\ApiKey;
use App\Models\ApiPlan;
use App\Models\EnrollApi;
use App\Models\Review;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function index()
    {
        $data['enroll'] = EnrollApi::whereUserId(auth()->id())->with('plan')->active()->first();

        if ($data['enroll']) {
            $data['totalCall'] = ApiCall::whereUserId(auth()->id())->whereApiPlanId($data['enroll']->api_plan_id)->count();
        }

        return view('common.api.index', $data);
    }

    public function docs()
    {
        return view('scribe.index');
    }

    public function credential()
    {
        $data['apiKeys'] = ApiKey::whereUserId(auth()->id())->get();
        $data['is_active_plan'] = $this->isPlanActive();
        $user = auth()->user();
        $firstEnrollment = $user->enrollApis->first();

        if ($firstEnrollment) {
            $data['api_plan_id'] = $firstEnrollment->api_plan_id;
        } else {
            $data['api_plan_id'] = null;
        }

        return view('common.api.credential', $data);
    }

    public function generateKey(Request $request)
    {
        if (! $this->isPlanActive()) {
            return back();
        }

        $organization = auth()->user()->organization;
        $organization->tokens()->delete();
        $token = $organization->createToken($organization->uuid)->plainTextToken;

        ApiKey::updateOrCreate(
            ['user_id' => auth()->id()],
            [
                'name' => 'API Key',
                'api_key' => $token,
            ]
        );

        record_created_flash('Key generated successfully');

        return back();
    }

    public function isPlanActive()
    {
        return EnrollApi::active()->whereUserId(auth()->id())->exists();
    }

    public function getReview($api_plan_id)
    {
        $user_id = auth()->id();
        $review = Review::where('reviewable_id', $api_plan_id)
            ->where('reviewable_type', ApiPlan::class)
            ->where('user_id', $user_id)
            ->first();

        return response()->json($review);
    }

    public function reviewSubmit(Request $request)
    {
        $request->validate([
            'api_plan_id' => 'required|exists:api_plans,id',
            'rating' => 'required|integer|between:1,5',
            'comment' => 'nullable|string|max:1000',
        ]);

        $user_id = auth()->id();
        $reviewData = [
            'user_id' => $user_id,
            'rating' => $request->rating,
            'comment' => $request->comment,
        ];

        $review = Review::updateOrCreate(
            [
                'reviewable_id' => $request->api_plan_id,
                'reviewable_type' => ApiPlan::class,
                'user_id' => $user_id,
            ],
            $reviewData
        );

        $message = $review->wasRecentlyCreated ? 'Review Submitted Successfully' : 'Review Updated Successfully';
        record_created_flash($message);

        return back();
    }
}
