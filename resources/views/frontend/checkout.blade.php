@extends('layouts.master')

@section('content')
    <section class="ic-banner-part ic-section-space"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)),  url('{{ asset('/new-frontend/images/price-page.png') }}');">
        <!-- content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ic-banner-content ps-0">
                        <span class="ic-heading-title mb-15">Billing</span>
                        <h1 class="black pb-15">Checkout</h1>
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
                    <form action="{{ route('front.pay') }}" method="POST" id="paymentForm">
                        @csrf
                        <input id="payValue" name="value" type="hidden" min="5" step="0.01"
                            value="{{ $totalPrice }}" required>
                        <input name="currency" type="hidden" value="usd">
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
                                                <input id="inputAddress" type="text" class="form-control" name="address"
                                                    placeholder="Enter Address"
                                                    value="{{ $billingAddress->address ?? '' }}">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="#">Country *</label>
                                                <input id="inputCountry" type="text" class="form-control" name="country"
                                                    placeholder="Enter Country"
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
                                                <input id="inputState" type="text" class="form-control" name="state"
                                                    placeholder="Enter State" value="{{ $billingAddress->state ?? '' }}">
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
                                        <li>
                                            <p>Subtotal</p>
                                            <p>${{ Cart::priceTotal() }}</p>
                                        </li>
                                        <li>
                                            <p>Platform Charge</p>
                                            <p>${{ $platformCharge }}</p>
                                        </li>
                                        <li id="discountItem">
                                            <p>Discount</p>
                                            <p id="discountAmount">${{ Cart::discount() }}</p>
                                        </li>
                                        <li>
                                            <p>Grand Total</p>
                                            <p id="grandTotal">${{ $totalPrice }}</p>
                                        </li>
                                    </ul>
                                </div>
                                {{-- Payment method --}}

                                <div class="payment-form">
                                    <div class="ic-new-payment-method">
                                        <p class="fw-500">Select Payment Method</p>

                                        <div class="ic__payment-methodSelect">
                                            {{-- <div>
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
                                            </div> --}}
                                        </div>
                                    </div>
                                    <div class="ic_payment">
                                        <ul class="nav nav-pills flex-column flex-nowrap ic_left_menu" id="pills-tab"
                                            role="tablist">
                                            <!-- single tab -->
                                            <li class="nav-item mb_20">
                                                <div class="form-check" id="pills-stripe-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-stripe" type="button"
                                                    aria-controls="pills-stripe">
                                                    <input class="form-check-input pointer" type="radio"
                                                        name="payment_method" id="stripe"
                                                        value="{{ PAYMENT_METHOD_STRIPE }}">
                                                    <label
                                                        class=" pointer form-check-label d-flex justify-content-between align-items-center"
                                                        for="stripe">
                                                        Credit/Debit Card
                                                        <!-- payment_logo -->
                                                        <div class="d-flex align-items-center gap-1">
                                                            <div class="payment_logo">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('new-frontendv1/images/payment/mastercard.png') }}"
                                                                    alt="stripe">
                                                            </div>
                                                            <div class="payment_logo">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('new-frontendv1/images/payment/american_express.png') }}"
                                                                    alt="stripe">
                                                            </div>
                                                            <div class="payment_logo">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('new-frontendv1/images/payment/visa.png') }}"
                                                                    alt="stripe">
                                                            </div>
                                                            <div class="payment_logo">
                                                                <img class="img-fluid"
                                                                    src="{{ asset('new-frontendv1/images/payment/stripe.png') }}"
                                                                    alt="stripe">
                                                            </div>
                                                        </div>
                                                    </label>
                                                </div>
                                            </li>
                                            <!-- single tab -->
                                            <li class="nav-item mb_20">
                                                <div class="form-check" id="pills-paypal-tab" data-bs-toggle="pill"
                                                    data-bs-target="#pills-paypal" type="button"
                                                    aria-controls="pills-paypal">

                                                    <input class="form-check-input pointer" type="radio"
                                                        name="payment_method" id="paypal"
                                                        value="{{ PAYMENT_METHOD_PAYPAL }}">
                                                    <label
                                                        class="pointer form-check-label d-flex justify-content-between align-items-center"
                                                        for="paypal">
                                                        PayPal
                                                        <!-- payment_logo -->
                                                        <div class="payment_logo">
                                                            <img class="img-fluid"
                                                                src="{{ asset('new-frontendv1/images/payment/payPal.png') }}"
                                                                alt="PayPal">
                                                        </div>
                                                    </label>

                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                    {{-- Stripe and paypal input box --}}
                                    <div>
                                        <div id="nm_stripe_box" style="display: none" class="mb-4">
                                            <small>You will be redirected to the Stripe checkout page.</small>
                                        </div>
                                        <div id="nm_paypal_box" style="display: none" class="mb-4">
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
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            const PAYMENT_METHOD_STRIPE = '{{ PAYMENT_METHOD_STRIPE }}';
            const PAYMENT_METHOD_PAYPAL = '{{ PAYMENT_METHOD_PAYPAL }}';
            const inputFirstName = $('#inputFirstName');
            const inputLastName = $('#inputLastName');
            const inputAddress = $('#inputAddress');
            const inputCountry = $('#inputCountry');
            const inputCity = $('#inputCity');
            const inputEmail = $('#inputEmail');

            // change payment method

            $('input[name="payment_method"]').click(function() {
                var payMethod = $(this).attr("value");

                if (payMethod == 'stripe') {
                    $('#nm_paypal_box').hide();
                    $('#nm_stripe_box').show();
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

                    $('#paymentForm').submit();
                }

                // paypal

                if (paymentMethod == 'paypal') {

                    $('#paymentForm').submit();
                }
            });
        });
    </script>
@endpush
