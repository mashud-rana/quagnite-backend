<?php

namespace App\Http\Controllers\Api\V1\Plan;

use App\Http\Controllers\Controller;
use App\Models\ApiPlan;
use App\Models\EnrollApi;
use App\Models\Organization;
use Carbon\Carbon;

class PurchaseController extends Controller
{
    public function purchaseAPlan()
    {
        $plan = ApiPlan::first();
        // Enroll to the Api
        EnrollApi::updateOrCreate(
            [
                'user_id' => auth()->id(),
                'api_plan_id' => $plan->id,
                'plan_type' => $plan->type,
            ],
            [
                'started_at' => Carbon::now(),
                'valid_till' => $plan->type == API_MONTHLY ? Carbon::now()->addMonth() : Carbon::now()->addMonths(12),
                'amount' => $plan->price,
            ]
        );

        $this->createOrganization();

        return response()->json(['success' => true], 200);
    }

    public function createOrganization()
    {
        if (Organization::whereUserId(auth()->id())->doesntExist()) {
            Organization::create([
                'user_id' => auth()->id(),
            ]);
        }
    }
}
