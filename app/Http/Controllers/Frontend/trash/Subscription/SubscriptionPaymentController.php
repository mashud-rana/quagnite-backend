<?php

namespace App\Http\Controllers\Frontend\Subscription;

use App\Http\Controllers\Controller;
use App\Models\BillingAddress;
use App\Models\Payment;
use App\Models\SubscriptionList;
use App\Services\Payments\PaypalService;
use App\Services\Payments\StripeNoCodeService;
use App\Services\Payments\StripeService;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class SubscriptionPaymentController extends Controller
{
    public function pay(Request $request)
    {
        // insert or update billing address
        $this->insertOrUpdateBillingAddress($request);

        // check and load specific payment service
        if ($request->payment_method == 'stripe') {
            $paymentPlatform = resolve(StripeNoCodeService::class);
            // $paymentPlatform = resolve(StripeService::class);
        }

        if ($request->payment_method == 'paypal') {
            $paymentPlatform = resolve(PaypalService::class);
        }

        session([
            'paymentMethod' => $request->payment_method,
            'subscription_id' => $request->subscription_id,
            'subscription_type' => $request->subscription_type,
            'pay_approve_route' => 'subscription.pay.approval',
            'pay_cancel_route' => 'subscription.pay.cancelled',
        ]);

        return $paymentPlatform->handlePayment($request);
    }

    public function approval()
    {
        if (session()->has('paymentMethod')) {

            $paymentMethod = session()->get('paymentMethod');

            if ($paymentMethod == 'stripe') {
                $paymentPlatform = resolve(StripeNoCodeService::class);
                // $paymentPlatform = resolve(StripeService::class);
            }

            if ($paymentMethod == 'paypal') {
                $paymentPlatform = resolve(PaypalService::class);
            }

            // return false means transaction failed & true means transaction successed
            $response = $paymentPlatform->handleApproval();

            if ($response && session()->has('subscription_id')) {

                DB::transaction(function () use ($paymentMethod, $response) {

                    $user_id = auth()->id();
                    $subscription_type = session()->get('subscription_type');
                    $paid_amount = $paymentMethod == 'stripe' ? $response / 100 : $response;
                    //insert subscriptions
                    $subscribe = new SubscriptionList;
                    $subscribe->user_id = $user_id;
                    $subscribe->started_at = Carbon::now();
                    $subscribe->valid_till = $subscription_type == MONTHLY ? Carbon::now()->addMonth() : Carbon::now()->addMonths(12);
                    $subscribe->subscription_id = session()->get('subscription_id');
                    $subscribe->subscription_type = $subscription_type;
                    $subscribe->status = ACTIVE;
                    $subscribe->amount = $paid_amount;
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
                }, $attempts = 5);

                return redirect()->route('student.dashboard');
            } else {

                return redirect()->route('subscription.checkout.index');
            }
        }

        return redirect()
            ->route('subscription.checkout.index')
            ->withErrors('We didn\'t receive your payment. Try again, please.');
    }

    public function cancelled()
    {
        return redirect()->route('subscription.checkout.index');
    }

    public function insertOrUpdateBillingAddress(Request $request)
    {
        $rules = [
            'first_name' => ['required'],
            'last_name' => ['required'],
            'address' => ['required'],
            'country' => ['required'],
            'city' => ['required'],
            'state' => ['required'],
            'email' => ['required'],
        ];

        $request->validate($rules);

        return BillingAddress::updateOrCreate(
            ['user_id' => Auth::id()],
            [
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'address' => $request->address,
                'country' => $request->country,
                'city' => $request->city,
                'state' => $request->state,
                'email' => $request->email,
                'post_code' => $request->post_code,
            ]
        );
    }

    public function paymentValidation(Request $request)
    {
        $rules = [
            'value' => ['required', 'numeric'],
            'currency' => ['required'],
            'payment_method' => ['required'],
            'subscription_id' => ['required'],
            'subscription_type' => ['required'],
        ];

        return $request->validate($rules);
    }
}
