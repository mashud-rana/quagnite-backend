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

    @if ($cart = Session::get('subscriptionCart'))
        @php
            $item['id'] = $cart['id'];
            $item['name'] = $cart['name'];
            $item['price'] = $cart['price'];
            $item['remain_balance'] = $cart['remain_balance'];
            $item['subscription_type'] = $cart['subscription_type'];
            $item['platform_charge'] = number_format($cart['price'] * (config('settings.platform_charge') / 100), 2);
            $item['grandtotal'] = $item['price'] - $item['remain_balance'] + $item['platform_charge'];
        @endphp

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
                        <form action="{{ route('student.subscription.pay') }}" method="POST" id="paymentForm">
                            @csrf
                            @method('POST')
                            <input id="payValue" name="value" type="hidden" min="5" step="0.01"
                                value="{{ $item['grandtotal'] }}" required>
                            <input name="currency" type="hidden" value="usd">
                            <input name="subscription_id" type="hidden" value="{{ $item['id'] }}">
                            <input type="hidden" id="coupon_id" name="coupon_id" value="">
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
                                                <p>${{ $item['platform_charge'] }}</p>
                                            </li>
                                            <li>
                                                <p>Remaining Balance</p>
                                                <p>${{ $item['remain_balance'] }}</p>
                                            </li>
                                            {{-- <li id="discountItem" style="display: none">
                                                <p>Discount</p>
                                                <p id="discountAmount">- $0.00</p>
                                            </li> --}}
                                            <li>
                                                <p>Grand Total</p>
                                                <p id="grandTotal">${{ $item['grandtotal'] }}</p>
                                            </li>
                                        </ul>
                                        {{-- <div class="row mt-4">
                                            <div class="col-lg-8">
                                                <div class="form-group">
                                                    <input id="inputCouponCode" type="text" class="form-control"
                                                        placeholder="coupon code">
                                                    <input id="inputGrandTotal" type="hidden"
                                                        value="{{ $item['grandtotal'] }}">
                                                </div>
                                            </div>
                                            <div class="col-lg-4 text-end">
                                                <div class="form-group">
                                                    <button id="couponApplyBtn" class="ic-btn">Apply</button>
                                                </div>
                                            </div>
                                        </div> --}}
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
                                        <button type="submit" id="payButton" class="ic-btn w-100 rounded">pay</button>
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
    <script>
        $(document).ready(function() {
            // const SUBSCRIPTION_TYPE_MONTHLY = '{{ MONTHLY }}';
            // const SUBSCRIPTION_TYPE_YEARLY = '{{ YEARLY }}';
            // const PAYMENT_METHOD_STRIPE = '{{ PAYMENT_METHOD_STRIPE }}';
            // const PAYMENT_METHOD_PAYPAL = '{{ PAYMENT_METHOD_PAYPAL }}';
            // const inputFirstName = $('#inputFirstName');
            // const inputLastName = $('#inputLastName');
            // const inputAddress = $('#inputAddress');
            // const inputCountry = $('#inputCountry');
            // const inputCity = $('#inputCity');
            // const inputEmail = $('#inputEmail');

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

            // $('#couponApplyBtn').on('click', function(e) {
            //     e.preventDefault();
            //     var couponCode = $('#inputCouponCode').val();
            //     var totalPrice = $('#inputGrandTotal').val();
            //     $.ajax({
            //         type: 'POST',
            //         url: '/subscription/coupon/validate',
            //         data: {
            //             coupon_code: couponCode,
            //             total_price: totalPrice
            //         },
            //         headers: {
            //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //         },
            //         success: function(response) {
            //             if (response.valid) {
            //                 $('#coupon_id').val(response.coupon_id);
            //                 if (response.discount > 0) {
            //                     $('#discountAmount').text('- $' + response.discount.toFixed(2));
            //                     $('#discountItem').show();
            //                 }
            //                 $('#grandTotal').text('$' + response.new_total_price.toFixed(2));
            //                 notify('success', response.message)
            //             } else {
            //                 $('#inputCouponCode').val('** Coupon Not Found **');
            //                 notify('warning', response.message)
            //             }
            //         },
            //         error: function(error) {
            //             console.log('Error:', error);
            //         }
            //     });
            // });
        });
    </script>
@endpush
