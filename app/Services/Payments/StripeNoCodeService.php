<?php

namespace App\Services\Payments;


use Stripe\Stripe;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Stripe\Checkout\Session;
use Stripe\Exception\ApiErrorException;

/**
 * PaypalService
 */
class StripeNoCodeService
{
    private $secret;

    public function __construct()
    {
        // $this->secret = config('services.stripe.secret');
        $this->secret = config('settings.stripe_secret');
    }

    public function handlePayment(Request $request)
    {

        $request->validate([
            'value' => 'required',
        ]);

        // Set your Stripe API keys
        Stripe::setApiKey($this->secret);

        // generate unique transaction id
        $trxId = Str::uuid();

        try {
            // Create a new Checkout Session
            $session = Session::create([
                'payment_method_types' => ['card'],
                'line_items' => [[
                    'price_data' => [
                        'currency' => 'usd',
                        'unit_amount' => $request->value * 100, // Amount in cents
                        'product_data' => [
                            'name' => 'Amount', // Name of the course
                        ],
                    ],
                    'quantity' => 1,
                ]],
                'mode' => 'payment',
                'success_url' => route(session()->get('pay_approve_route')),
                'cancel_url' => route(session()->get('pay_cancel_route')),
                'client_reference_id' => $trxId,
            ]);

            return redirect()->to($session->url);
        } catch (ApiErrorException $e) {

            return back()->withErrors(['error' => $e->getMessage()]);;
        }
    }

    public function handleApproval()
    {
        return true;
    }
}
