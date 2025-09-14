<?php

namespace App\Http\Controllers\Student\Subscription;

use Carbon\Carbon;
use App\Models\Invoice;
use App\Models\Payment;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\BillingAddress;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Services\Payments\PaypalService;
use App\Services\Payments\StripeNoCodeService;

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
            'paid_amount' => $request->value,
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
                $paymentPlatform = resolve(StripeNoCodeService::class);
                // $paymentPlatform = resolve(StripeService::class);
            }

            if ($paymentMethod == 'paypal') {
                $paymentPlatform = resolve(PaypalService::class);
            }

            // return false means transaction failed & true means transaction successed
            $response = $paymentPlatform->handleApproval();

            if ($response && session()->has('subscription_id')) {

                DB::transaction(function () use ($paymentMethod) {

                    $user = auth()->user();

                    $subscription_type = session()->get('subscription_type');
                    // $paid_amount = $paymentMethod == 'stripe' ? $response / 100 : $response;
                    $paid_amount = session()->get('paid_amount');
                    $subscriptionId = session()->get('subscription_id');

                    //disable current subscription
                    $user->subscribes()->update([
                        'status' => EXPIRED,
                    ]);

                    // create invoice
                    $invoice = Invoice::create([
                        'user_id' => auth()->id(),
                        'total' => $paid_amount,
                        'payment_type' => $paymentMethod,
                    ]);

                    $invoice->items()->create([
                        'itemable_id' => $subscriptionId,
                        'itemable_type' => 'App\Models\Subscription',
                        'price' => $invoice->total,
                    ]);

                    Payment::create([
                        'user_id' => auth()->id(),
                        'invoice_id' => $invoice->id,
                        'payment_type' => $paymentMethod,
                        'amount' => $invoice->total,
                    ]);

                    //Add New subscribes
                    $subscribe = $user->subscribes()->create([
                        'subscription_id' => $subscriptionId,
                        'subscription_type' => $subscription_type,
                        'amount' => $invoice->total,
                        'started_at' => Carbon::now(),
                        'valid_till' => $subscription_type == MONTHLY ? Carbon::now()->addMonth() : Carbon::now()->addMonths(12),
                    ]);
                }, $attempts = 5);

                return redirect()->route('student.dashboard');
            } else {

                return redirect()->route('student.subscription.checkout');
            }
        }

        return redirect()
            ->route('student.subscription.checkout')
            ->withErrors('We didn\'t receive your payment. Try again, please.');
    }

    public function cancelled()
    {
        return redirect()->route('student.subscription.checkout');
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
