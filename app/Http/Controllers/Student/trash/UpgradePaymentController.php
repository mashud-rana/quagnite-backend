<?php

namespace App\Http\Controllers\Student\Subscription;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\SubscriptionList;
use App\Services\Payments\PaypalService;
use App\Services\Payments\StripeService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class UpgradePaymentController extends Controller
{
    public function pay(Request $request)
    {
        $rules = [
            'value' => ['required', 'numeric'],
            'currency' => ['required'],
            'payment_method' => ['required'],
            'subscription_id' => ['required'],
            'subscription_type' => ['required'],
            'current_balance' => ['required'],
        ];

        $request->validate($rules);

        if ($request->payment_method == 'stripe') {
            $paymentPlatform = resolve(StripeService::class);
        }

        if ($request->payment_method == 'paypal') {
            $paymentPlatform = resolve(PaypalService::class);
        }

        session([
            'paymentMethod' => $request->payment_method,
            'subscription_id' => $request->subscription_id,
            'subscription_type' => $request->subscription_type,
            'current_balance' => $request->current_balance,
            'pay_approve_route' => 'student.subscription.pay.approval',
            'pay_cancel_route' => 'student.subscription.pay.cancelled',
        ]);

        return $paymentPlatform->handlePayment($request);
    }

    public function approval()
    {
        if (session()->has('paymentMethod')) {

            $paymentMethod = session()->get('paymentMethod');

            if ($paymentMethod == 'stripe') {
                $paymentPlatform = resolve(StripeService::class);
            }

            if ($paymentMethod == 'paypal') {
                $paymentPlatform = resolve(PaypalService::class);
            }

            // return 0 means transaction failed & grater than 0 means transaction successed
            $response = $paymentPlatform->handleApproval();

            if ($response > 0) {

                if (session()->has('subscription_id')) {

                    $user_id = auth()->id();
                    $subscription_type = session()->get('subscription_type');
                    $paid_amount = $paymentMethod == 'stripe' ? $response / 100 : $response;
                    $full_amount = round($paid_amount + session()->get('current_balance'), 2);
                    //insert subscriptions
                    $subscribe = SubscriptionList::where('user_id', auth()->id())->first();
                    $subscribe->user_id = $user_id;
                    $subscribe->started_at = Carbon::now();
                    $subscribe->valid_till = $subscription_type == MONTHLY ? Carbon::now()->addMonth() : Carbon::now()->addMonths(12);
                    $subscribe->subscription_id = session()->get('subscription_id');
                    $subscribe->subscription_type = $subscription_type;
                    $subscribe->status = ACTIVE;
                    $subscribe->amount = $full_amount;
                    $subscribe->save();

                    $subscribeId = $subscribe->id;

                    //insert payments
                    $payment = new Payment();
                    $payment->user_id = $user_id;
                    $payment->subscription_list_id = $subscribeId;
                    $payment->trx_no = Str::uuid();
                    $payment->pay_method = session()->get('paymentMethod');
                    $payment->amount = $paid_amount;

                    $payment->save();

                    return redirect()->route('student.subscription');
                } else {
                }
            } else {
                return redirect()->route('student.subscription.upgrade.cart');
            }
        }

        return redirect()
            ->route('student.subscription.upgrade.cart')
            ->withErrors('We cannot retrieve your payment platform. Try again, please.');
    }

    public function cancelled()
    {
        return redirect()->route('student.subscription.upgrade.cart');
    }
}
