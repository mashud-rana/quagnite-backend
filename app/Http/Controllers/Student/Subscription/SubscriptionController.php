<?php

namespace App\Http\Controllers\Student\Subscription;

use App\Http\Controllers\Controller;
use App\Models\BillingAddress;
use App\Models\Coupon;
use App\Models\Subscription;
use App\Models\SubscriptionList;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SubscriptionController extends Controller
{
    public function index()
    {
        set_page_meta('Subscriptions');

        $data['subscribe'] = $this->currentPlan();

        if ($data['subscribe']) {

            // ebook
            $enrolledEbookCount = $data['subscribe']->enrollEbooks()
                ->where('user_id', Auth::id())
                ->where('subscription_list_id', $data['subscribe']->id)
                ->count();

            $data['remainingEbookCount'] = $data['subscribe']->subscription->ebook_limit - $enrolledEbookCount;

            if ($data['subscribe']->subscription->unlimited_ebook) {
                $data['remainingEbookCount'] = 'Unlimited';
            }

            // exam
            $enrolledExamCount = $data['subscribe']->enrollExams()
                ->where('user_id', Auth::id())
                ->where('subscription_list_id', $data['subscribe']->id)
                ->count();

            $data['remainingExamCount'] = $data['subscribe']->subscription->exam_limit - $enrolledExamCount;

            if ($data['subscribe']->subscription->unlimited_exam) {
                $data['remainingExamCount'] = 'Unlimited';
            }

            // playground
            $enrolledPlaygroundCount = $data['subscribe']->enrollPlaygrounds()
                ->where('user_id', Auth::id())
                ->where('subscription_list_id', $data['subscribe']->id)
                ->count();

            $data['remainingPlaygroundCount'] = $data['subscribe']->subscription->playground_limit - $enrolledPlaygroundCount;

            if ($data['subscribe']->subscription->unlimited_playground) {
                $data['remainingPlaygroundCount'] = 'Unlimited';
            }

            //Greater count
            $data['greater_count'] = Subscription::where('id', '!=', $data['subscribe']->subscription_id)
                ->where('price', '>', $data['subscribe']->subscription->price)
                ->whereStatus(ACTIVE)->count();
        } else {
            return redirect()->route('all.pricings');
        }

        return view('student.subscription.index', $data);
    }

    public function upgradeList()
    {
        set_page_meta('Subscriptions List');
        $subscribed = SubscriptionList::active()->where('user_id', auth()->id())->latest()->first();

        $data['yearlySubscriptions'] = [];
        $data['monthlySubscriptions'] = [];

        // checking already subscribed plan and if highest subscription amount
        if ($subscribed->subscription_id ?? false) {

            $subscriptions = Subscription::where('id', '!=', $subscribed->subscription_id)
                ->where('price', '>', $subscribed->subscription->price)
                ->whereStatus(ACTIVE)
                ->get();

            foreach ($subscriptions as $subscription) {
                if ($subscription->type == MONTHLY) {
                    $data['monthlySubscriptions'][] = $subscription;
                } elseif ($subscription->type == YEARLY) {
                    $data['yearlySubscriptions'][] = $subscription;
                }
            }
        } else {
            return redirect()->route('all.pricings');
        }

        return view('student.subscription.upgrade', $data);
    }

    public function checkout()
    {
        $billingAddress = $this->getBillingAddress();

        return view('student.subscription.checkout', [
            'billingAddress' => $billingAddress,
        ]);
    }

    public function cartStore(Request $request)
    {

        $rules = [
            'id' => ['required'],
        ];

        $request->validate($rules);

        $subscription = Subscription::findOrFail($request->id);

        session()->forget('subscriptionCart');

        $currentPlan = $this->currentPlan();
        $currentSubscription = $currentPlan->subscription;
        $remainBalance = $currentSubscription->price - $this->currentPlanUsage();

        $arrayData = [
            'id' => $subscription->id,
            'name' => $subscription->title,
            'qty' => 1,
            'price' => $subscription->price,
            'remain_balance' => $remainBalance,
            'subscription_type' => $subscription->type,
        ];

        session(['subscriptionCart' => $arrayData]);

        $billingAddress = $this->getBillingAddress();

        return view('student.subscription.checkout', [
            'billingAddress' => $billingAddress,
        ]);
    }

    public function getBillingAddress()
    {
        return BillingAddress::where('user_id', auth()->id())->first();
    }

    public function validateCoupon(Request $request)
    {
        $couponCode = $request->input('coupon_code');
        $totalPrice = $request->input('total_price');

        // Find the coupon with the given code
        $coupon = Coupon::where('coupon_code', $couponCode)
            ->where('status', 1)
            ->where('start_date', '<=', Carbon::now())
            ->where('end_date', '>=', Carbon::now())
            ->first();

        if (!$coupon) {
            return [
                'valid' => false,
                'message' => 'Coupon is not valid or has expired.',
            ];
        }

        if ($coupon->coupon_type === 'global') {
            if ($coupon->maximum_use_limit !== null && $coupon->maximum_use_limit <= $coupon->used_count) {
                return [
                    'valid' => false,
                    'message' => 'Coupon has been used the maximum number of times.',
                ];
            }

            // Calculate the discount
            $discount = ($coupon->percentage / 100) * $totalPrice;
            $newTotalPrice = $totalPrice - $discount;

            return [
                'valid' => true,
                'message' => 'Coupon applied successfully',
                'coupon_percentage' => $coupon->percentage,
                'coupon_id' => $coupon->id,
                'discount' => $discount,
                'new_total_price' => $newTotalPrice,
            ];
        } else {
            return [
                'valid' => false,
                'message' => 'Coupon type is not supported.',
            ];
        }
    }

    public function currentPlanUsage()
    {
        // Get the active subscription for the authenticated user
        $subscribed = $this->currentPlan();

        if (!$subscribed) {
            return 0; // No active subscription found
        }

        // Get the start and end date of the subscription
        $startDate = Carbon::parse($subscribed->started_at);
        $endDate = Carbon::parse($subscribed->valid_till);

        // Calculate the number of days used
        $today = Carbon::now();
        $endDate = $endDate ? $endDate->min($today) : $today; // Use today's date if no end date is set or end date is in the future
        $daysUsed = $startDate->diffInDays($endDate);

        // Get the subscription price and type
        $subscription = $subscribed->subscription;
        $price = $subscription ? $subscription->price : 0;
        $subscriptionType = $subscription ? $subscription->type : 'monthly';

        // Calculate the total usage price
        if ($subscriptionType === 'monthly') {
            $totalUsagePrice = $daysUsed * ($price / 30);
        } elseif ($subscriptionType === 'yearly') {
            $totalUsagePrice = $daysUsed * ($price / 365);
        } else {
            $totalUsagePrice = 0; // Handle other types or default case
        }

        return round($totalUsagePrice, 2);
    }

    public function currentPlan()
    {
        return SubscriptionList::active()->where('user_id', auth()->id())->with('subscription')->latest()->first();
    }
}
