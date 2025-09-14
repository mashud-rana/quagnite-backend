@extends('layouts.master')
@push('styles')
    <style>
        .hide {
            display: none;
        }

        .StripeElement {
            box-sizing: border-box;
            height: 40px;
            padding: 10px 12px;
            border: 1px solid transparent;
            border-radius: 4px;
            background-color: white;
            box-shadow: 0 1px 3px 0 #e6ebf1;
            -webkit-transition: box-shadow 150ms ease;
            transition: box-shadow 150ms ease;
        }

        .StripeElement--focus {
            box-shadow: 0 1px 3px 0 #cfd7df;
        }

        .StripeElement--invalid {
            border-color: #fa755a;
        }

        .StripeElement--webkit-autofill {
            background-color: #fefde5 !important;
        }
    </style>
@endpush

@section('content')
    <section class="ic-banner-part"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)),  url('{{ asset('/new-frontend/images/price-page.png') }}');">
        <!-- content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ic-banner-content ps-0">
                        <span class="ic-heading-title mb-15">Billing</span>
                        <h1 class="black pb-15">Subscription Checkout</h1>
                        <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of printing and typesetting.</p>
                        <a href="#" class="ic-btn">Find More Courese</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @if (Cart::count() === 1)
        @php
            $item = [];
        @endphp
        @foreach (Cart::content() as $cart)
            @php
                $item['id'] = $cart->id;
                $item['name'] = $cart->name;
                $item['price'] = $cart->price;
                $item['subscription_type'] = $cart->options['subscription_type'];
            @endphp
        @endforeach
        <section class="ic-billing-pages ic-section-space">
            <div class="container">
                <div class="ic-billing-wrapper">
                    <div class="ic-billing-body">
                        <div class="ic-billing-header">
                            <p class="fs-28 fw-500">MCdns Finalize Payment</p>
                            <p class="color-deep-gray">We protect your payment information using encryption to provide
                                bank-level
                                security</p>
                        </div>
                        {{-- BIlling Form Start Here --}}
                        <form action="{{ route('subscription.pay') }}" method="POST" id="paymentForm">
                            @csrf
                            <input id="payValue" name="value" type="hidden" min="5" step="0.01"
                                value="{{ $item['price'] }}" required>
                            <input name="currency" type="hidden" value="usd">
                            <input name="subscription_id" type="hidden" value="{{ $item['id'] }}">
                            <input id="subscriptionType" name="subscription_type" type="hidden"
                                value="{{ $item['subscription_type'] }}">
                            <div class="ic-billing-main">
                                <div class="ic-billing-left">
                                    <div class="left-billing">
                                        <p class="fw-500 black pb-2">Billing details</p>

                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="#">First Name*</label>
                                                    <input id="inputFirstName" type="text" class="form-control"
                                                        placeholder="Enter First Name" name="first_name"
                                                        value="{{ $billingAddress->first_name ?? Auth::user()->first_name }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="#">Last Name*</label>
                                                    <input id="inputLastName" name="last_name" type="text"
                                                        class="form-control" placeholder="Enter last Name"
                                                        value="{{ $billingAddress->last_name ?? Auth::user()->last_name }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="#">Address *</label>
                                                    <input id="inputAddress" type="text" class="form-control"
                                                        name="address" placeholder="Enter Address"
                                                        value="{{ $billingAddress->address ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="#">Country *</label>
                                                    <input id="inputCountry" type="text" class="form-control"
                                                        name="country" placeholder="Enter Country"
                                                        value="{{ $billingAddress->country ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="#">City *</label>
                                                    <input id="inputCity" type="text" class="form-control" name="city"
                                                        placeholder="Enter City" value="{{ $billingAddress->city ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="#">State *</label>
                                                    <input id="inputState" type="text" class="form-control"
                                                        name="state" placeholder="Enter State"
                                                        value="{{ $billingAddress->state ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="#">Postcode / ZIP (optional)</label>
                                                    <input name="post_code" type="text" class="form-control"
                                                        placeholder="Enter Postcode"
                                                        value="{{ $billingAddress->post_code ?? '' }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="#">Email Address *</label>
                                                    <input id="inputEmail" name="email" type="email"
                                                        class="form-control" placeholder="Enter Email Address"
                                                        value="{{ $billingAddress->email ?? Auth::user()->email }}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                {{-- Order Details --}}
                                <div class="ic-billing-right">
                                    <div>
                                        <p class="fw-500 black pb-2">Your order details</p>
                                        <ul class="billing-story">
                                            <li class="product-item">
                                                <p>{{ $item['name'] }} Plan </p>
                                                <p><span>${{ $item['price'] }}</p>
                                            </li>
                                            <li>
                                                <p>Subtotal</p>
                                                <p>${{ $item['price'] }}</p>
                                            </li>
                                            <li>
                                                <p>Platform Charge</p>
                                                <p>$0</p>
                                            </li>
                                            <li>
                                                <p>Grand Total</p>
                                                <p>${{ $item['price'] }}</p>
                                            </li>
                                        </ul>
                                        <div class="row mt-4">
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <input id="inputCouponCode" type="text" class="form-control"
                                                        placeholder="coupon code">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-end">
                                                <div class="form-group">
                                                    <button id="couponApplyBtn" class="ic-btn">Apply</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    {{-- Payment method --}}
                                    <div class="payment-form">
                                        <div class="ic-new-payment-method">
                                            <p class="fw-500">Payment Method</p>
                                            <div class="ic__payment-methodSelect">

                                                <div>
                                                    <input type="radio" id="visa" name="payment_method"
                                                        value="{{ PAYMENT_METHOD_STRIPE }}" required>
                                                    <label for="visa">
                                                        <img src="{{ asset('/frontend') }}/images/payment/visa.png"
                                                            class="img-fluid" alt="">
                                                    </label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="master" name="payment_method"
                                                        value="{{ PAYMENT_METHOD_STRIPE }}">
                                                    <label for="master">
                                                        <img src="{{ asset('/frontend') }}/images/payment/master.png"
                                                            class="img-fluid" alt="">
                                                    </label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="american" name="payment_method"
                                                        value="{{ PAYMENT_METHOD_STRIPE }}">
                                                    <label for="american">
                                                        <img src="{{ asset('/frontend') }}/images/payment/american.png"
                                                            class="img-fluid" alt="">
                                                    </label>
                                                </div>
                                                <div>
                                                    <input type="radio" id="stripe" name="payment_method"
                                                        value="{{ PAYMENT_METHOD_STRIPE }}">
                                                    <label for="stripe">
                                                        <img src="{{ asset('/frontend') }}/images/payment/stripe.png"
                                                            class="img-fluid" alt="">
                                                    </label>
                                                    </a>
                                                </div>
                                                <div>
                                                    <input type="radio" id="paypal" name="payment_method"
                                                        value="{{ PAYMENT_METHOD_PAYPAL }}">
                                                    <label for="paypal">
                                                        <img src="{{ asset('/frontend') }}/images/payment/paypal.png"
                                                            class="img-fluid" alt="">
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        {{-- Stripe and paypal input box --}}
                                        <div>
                                            <div id="nm_stripe_box">
                                                <div id="cardElement" class="mb-2"></div>

                                                <small class="form-text text-muted pb-2" id="cardErrors"
                                                    role="alert"></small>

                                                <input type="hidden" name="stripe_payment_method" value=""
                                                    id="stripePaymentMethod">
                                            </div>
                                            <div id="nm_paypal_box" style="display: none">
                                                <small>You will be redirected to the PayPal checkout page.</small>
                                            </div>
                                        </div>
                                        <button id="payButton" class="ic-btn w-100 rounded">pay</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    @endif
@endsection

@push('scripts')
    <script src="https://js.stripe.com/v3/"></script>
    <script>
        $(document).ready(function() {
            const SUBSCRIPTION_TYPE_MONTHLY = '{{ MONTHLY }}';
            const SUBSCRIPTION_TYPE_YEARLY = '{{ YEARLY }}';
            const PAYMENT_METHOD_STRIPE = '{{ PAYMENT_METHOD_STRIPE }}';
            const PAYMENT_METHOD_PAYPAL = '{{ PAYMENT_METHOD_PAYPAL }}';
            const inputFirstName = $('#inputFirstName');
            const inputLastName = $('#inputLastName');
            const inputAddress = $('#inputAddress');
            const inputCountry = $('#inputCountry');
            const inputCity = $('#inputCity');
            const inputEmail = $('#inputEmail');

            // Stripe elements
            const stripe = Stripe('{{ config('services.stripe.key') }}');
            const elements = stripe.elements({
                locale: 'en'
            });
            const cardElement = elements.create('card');
            const userName = '{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}';
            const userEmail = '{{ auth()->user()->email }}';

            // change payment method

            $('input[name="payment_method"]').click(function() {
                var payMethod = $(this).attr("value");

                if (payMethod == 'stripe') {
                    $('#nm_paypal_box').hide();
                    $('#nm_stripe_box').show();
                    cardElement.mount('#cardElement');
                }

                if (payMethod == 'paypal') {
                    $('#nm_stripe_box').hide();
                    $('#nm_paypal_box').show();
                }
            });

            // Payment script

            $('#payButton').on('click', async (e) => {

                e.preventDefault();

                var paymentMethod = $('input[name="payment_method"]:checked').val();

                // stripe

                if (paymentMethod == 'stripe') {

                    const {
                        paymentMethod,
                        error
                    } = await stripe.createPaymentMethod(
                        'card', cardElement, {
                            billing_details: {
                                "name": userName,
                                "email": userEmail
                            }
                        }
                    );
                    if (error) {
                        $('#cardErrors').text(error.message);
                    } else {
                        $('#stripePaymentMethod').val(paymentMethod.id);
                        $('#paymentForm').submit();
                    }
                }

                // paypal

                if (paymentMethod == 'paypal') {

                    $('#paymentForm').submit();
                }
            });

            $('#couponApplyBtn').on('click', function(e) {
                e.preventDefault();
                $('#inputCouponCode').val("** Coupon Not Found **");
            });




        });
    </script>
@endpush
