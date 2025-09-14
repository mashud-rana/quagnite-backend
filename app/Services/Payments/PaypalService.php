<?php

namespace App\Services\Payments;

use Illuminate\Http\Request;
use App\Traits\ConsumesExternalServices;

/**
 * PaypalService
 */
class PaypalService
{
    use ConsumesExternalServices;

    protected $baseUri;
    protected $clientId;
    protected $clientSecret;
    // protected $currencyCode;

    /**
     * __construct
     *
     * @return void
     */
    public function __construct()
    {
        // $this->baseUri = config()->get('services.paypal.base_uri');
        // $this->clientId = config()->get('services.paypal.client_id');
        // $this->clientSecret = config()->get('services.paypal.client_secret');
        // $this->currencyCode = config()->get('paypal.currency_code');

        if (config('settings.paypal_mode') == 'sandbox') {

            $this->baseUri = config('settings.paypal_sandbox_base_uri');
            $this->clientId = config('settings.paypal_sandbox_client_id');
            $this->clientSecret = config('settings.paypal_sandbox_client_secret');
        } elseif (config('settings.paypal_mode') == 'live') {

            $this->baseUri = config('settings.paypal_live_base_uri');
            $this->clientId = config('settings.paypal_live_client_id');
            $this->clientSecret = config('settings.paypal_live_client_secret');
        }
    }


    public function resolveAuthorization(&$queryParams, &$formParams, &$headers)
    {
        $headers['Authorization'] = $this->resolveAccessToken();
    }
    public function decodeResponse($response)
    {
        return json_decode($response);
    }

    public function resolveAccessToken()
    {
        $credentials = base64_encode("{$this->clientId}:{$this->clientSecret}");

        return "Basic {$credentials}";
    }

    public function handlePayment(Request $request)
    {
        $order = $this->createOrder($request->value, $request->currency);

        $orderLinks = collect($order->links);

        $approve = $orderLinks->where('rel', 'approve')->first();

        session()->put('approvalId', $order->id);

        return redirect($approve->href);
    }

    public function handleApproval()
    {
        if (session()->has('approvalId')) {
            $approvalId = session()->get('approvalId');

            $payment = $this->capturePayment($approvalId);

            $name = $payment->payer->name->given_name;
            $payment = $payment->purchase_units[0]->payments->captures[0]->amount;
            $amount = $payment->value;
            $currency = $payment->currency_code;

            // return redirect()
            //     ->route('member.dashboard')
            //     ->withSuccess(['payment' => "Thanks, {$name}. We received your {$amount}{$currency} payment."]);

            return true;
        }

        // return redirect()
        //     ->route('front.cart.index')
        //     ->withErrors('We cannot capture the payment. Try again, please');

        return false;
    }

    public function createOrder($value, $currency)
    {
        return $this->makeRequest(
            'POST',
            '/v2/checkout/orders',
            [],
            [
                'intent' => 'CAPTURE',
                'purchase_units' => [
                    0 => [
                        'amount' => [
                            'currency_code' => strtoupper($currency),
                            'value' => $value,
                        ]
                    ]
                ],
                'application_context' => [
                    'brand_name' => config('app.name'),
                    'shipping_preference' => 'NO_SHIPPING',
                    'user_action' => 'PAY_NOW',
                    'return_url' => route(session()->get('pay_approve_route')),
                    'cancel_url' => route(session()->get('pay_cancel_route')),
                ]
            ],
            [],
            $isJsonRequest = true,
        );
    }

    public function capturePayment($approvalId)
    {
        return $this->makeRequest(
            'POST',
            "/v2/checkout/orders/{$approvalId}/capture",
            [],
            [],
            [
                'Content-Type' => 'application/json'
            ],
        );
    }
}
