<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\ApiPlan;
use App\Models\Review;

class BusinessController extends Controller
{
    public function index()
    {
        set_page_meta('Business');

        $data['monthlyApiPlans'] = ApiPlan::active()->whereType(API_MONTHLY)->get();
        $data['yearlyApiPlans'] = ApiPlan::active()->whereType(API_YEARLY)->get();
        $data['reviews'] = Review::where('reviewable_type', ApiPlan::class)
            ->whereIn('rating', [4, 5])
            ->get();
        
        return view('frontend.business', $data);
    }
}
