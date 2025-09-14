<?php

namespace App\Http\Controllers\Frontend\Subscription;

use App\Constants\GlobalConstant;
use App\Http\Controllers\Controller;
use App\Models\BillingAddress;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionCheckoutController extends Controller
{
    // public function index()
    // {
    //     $billingAddress = $this->getBillingAddress();

    //     return view('frontend.subscription-checkout', [
    //         'billingAddress' => $billingAddress,
    //     ]);
    // }

    // public function store(Request $request)
    // {
    //     if (!Auth::check()) {
    //         return redirect()->route('auth.login');
    //     }

    //     // Only member can buy this subscription
    //     if (auth()->user()->user_type != GlobalConstant::USER_TYPE_MEMBER) {
    //         something_wrong_flash('You are not eligible for buy this subscription!');
    //         return back();
    //     }

    //     $rules = [
    //         'id' => ['required'],
    //         'subscription_type' => ['required'],
    //     ];

    //     $request->validate($rules);

    //     $subscription = Subscription::where('id', $request->id)->firstOrFail();

    //     if ($request->subscription_type === MONTHLY) {
    //         $price = $subscription->per_month;
    //     }

    //     if ($request->subscription_type === YEARLY) {
    //         $price = $subscription->per_year;
    //     }

    //     session()->forget('subscriptionCart');

    //     $arrayData = [
    //         'id' => $request->id,
    //         'name' => $subscription->title,
    //         'qty' => 1,
    //         'price' => $price,
    //         'subscription_type' => $request->subscription_type,
    //     ];

    //     session(['subscriptionCart' => $arrayData]);

    //     $billingAddress = $this->getBillingAddress();

    //     return view('frontend.subscription-checkout', [
    //         'billingAddress' => $billingAddress,
    //     ]);
    // }

    // public function getBillingAddress()
    // {
    //     return BillingAddress::where('user_id', Auth::id())->first();
    // }

}
