{{-- @extends('admin.layouts.master-user') --}}
@extends('layouts.master-user')
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
    @section('content')
        <section class="mt-30">
            <div class="container">
                <div class="row g-4">
                    <div class="col-md-8">
                        @if (Cart::count() > 0)
                            @foreach (Cart::content() as $item)
                                @php
                                    $subscription_id = $item->id;
                                @endphp
                                <div class="ic__premium--cardItems">
                                    <div>
                                        <div class="ic__premium--paragraph">
                                            <p>{{ $item->name }}</p>
                                        </div>
                                        <div class="ic__premium--catagories">
                                            <div class="ic__payment--method">
                                                <div class="form-check form-switch">
                                                    Monthly
                                                    <input id="nm_check_month_year" class="form-check-input"
                                                        name="subscription_type" type="checkbox" role="switch"
                                                        id="flexSwitchCheckDefault">
                                                    <label class="form-check-label" for="flexSwitchCheckDefault"></label>
                                                    Yearly
                                                </div>
                                            </div>



                                            {{-- <div class="increment">
                                <button class="minus"><i class='bx bx-minus'></i></button>
                                <input type="text" class="value" value="0">
                                <button class="plus"><i class='bx bx-plus'></i></button>
                            </div> --}}
                                        </div>
                                        <div class="ic__premium--price">
                                            <p class="month input">
                                                <span>&dollar;</span>
                                                <span id="nm_price_month"
                                                    data-price="{{ $item->price }}">{{ $item->price }}</span>
                                                <span id="nm_price_year" data-price="{{ $item->options->per_year }}"
                                                    style="display:none;"><del>{{ round($item->price * 12) }} </del> &nbsp;
                                                    {{ $item->options->per_year }}
                                                </span>
                                            </p>
                                        </div>
                                        <div class="ic__premium--closed">
                                            <a href="{{ route('student.subscription.upgrade.cart.remove', $item->rowId) }}"><i
                                                    class="ri-close-line"></i></a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @else
                            <div class="ic__premium--cardItems">
                                <div>
                                    <div class="ic__premium--paragraph">
                                        <p>Cart is empty</p>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    <div class="col-md-4">
                        <div class="ic__premium--right">
                            <form action="{{ route('student.subscription.pay') }}" method="POST" id="payment-form">
                                @csrf
                                <input id="payValue" name="value" type="hidden" min="5" step="0.01" value=""
                                    required>
                                <input name="currency" type="hidden" value="usd">
                                <input name="subscription_id" type="hidden" value="<?= @$subscription_id ?>">
                                <input name="current_balance" type="hidden" value="<?= @$current_balance ?>">
                                <input id="subscriptionType" name="subscription_type" type="hidden" value="">

                                <div class="cart-total">
                                    <h3>Cart Total</h3>
                                    <ul>
                                        <li>
                                            <div class="ic--text">
                                                <p>Subtotal</p>
                                            </div>
                                            <div class="ic__subTotal">
                                                <p>&dollar; <span id="nm_cart_subtotal">0</span></p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ic--text">
                                                <p>Balance</p>
                                            </div>
                                            <div class="ic__subTotal">
                                                @if ($current_balance)
                                                    <p>&dollar; <span>{{ $current_balance }}</span></p>
                                                @endif
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ic--text">
                                                <p>Total</p>
                                            </div>
                                            <div class="ic__Total">
                                                <p>&dollar; <span id="nm_cart_total">0</span></p>
                                            </div>
                                        </li>
                                    </ul>
                                    {{-- <button class="ic-btn w-100">Shop now</button> --}}

                                </div>
                                <div class="cart-total payment-card">
                                    <h3>Payment Method</h3>
                                    <div class="ic__payment-methodSelect">

                                        <div>
                                            <input type="radio" id="visa" name="payment_method" value="stripe" required>
                                            <label for="visa">
                                                <img src="{{ asset('/frontend') }}/images/payment/visa.png" class="img-fluid"
                                                    alt="">
                                            </label>
                                        </div>
                                        <div>
                                            <input type="radio" id="master" name="payment_method" value="stripe">
                                            <label for="master">
                                                <img src="{{ asset('/frontend') }}/images/payment/master.png" class="img-fluid"
                                                    alt="">
                                            </label>
                                        </div>
                                        <div>
                                            <input type="radio" id="american" name="payment_method" value="stripe">
                                            <label for="american">
                                                <img src="{{ asset('/frontend') }}/images/payment/american.png"
                                                    class="img-fluid" alt="">
                                            </label>
                                        </div>
                                        <div>
                                            <input type="radio" id="stripe" name="payment_method" value="stripe">
                                            <label for="stripe">
                                                <img src="{{ asset('/frontend') }}/images/payment/stripe.png" class="img-fluid"
                                                    alt="">
                                            </label>
                                        </div>
                                        <div>
                                            <input type="radio" id="paypal" name="payment_method" value="paypal">
                                            <label for="paypal">
                                                <img src="{{ asset('/frontend') }}/images/payment/paypal.png"
                                                    class="img-fluid" alt="">
                                            </label>
                                        </div>
                                    </div>
                                    <div class="card-wrapper"></div>
                                    <div class="form-container active">
                                        <div id="nm_stripe_box">
                                            <div id="cardElement" class="mb-2"></div>

                                            <small class="form-text text-muted pb-2" id="cardErrors" role="alert"></small>

                                            <input type="hidden" name="stripe_payment_method" value=""
                                                id="stripePaymentMethod">
                                        </div>
                                        <div id="nm_paypal_box" style="display: none">
                                            <small>You will be redirected to the PayPal checkout page.</small>
                                        </div>
                                    </div>
                                    <button type="button" id="payButton" class="btn btn-primary btn-lg w-100">Pay</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    @endsection

    @push('scripts')
        <script src="https://js.stripe.com/v3/"></script>
        <script>
            $(document).ready(function() {

                const monthly_text = '{{ MONTHLY }}';
                const yearly_text = '{{ YEARLY }}';
                const current_balance = '{{ $current_balance }}';

                // default monthly value show
                if ($('#nm_price_month').length) {
                    var price = $('#nm_price_month').data("price");
                    var total = parseFloat(price - current_balance).toFixed(2);
                    $("#nm_cart_subtotal").text(price);
                    $("#nm_cart_total").text(total);
                    $("#payValue").val(total);
                    $("#subscriptionType").val(monthly_text);
                } else {
                    $(".payment-card").hide();
                }

                // Stripe elements
                const stripe = Stripe('{{ config('services.stripe.key') }}');
                const elements = stripe.elements({
                    locale: 'en'
                });
                const cardElement = elements.create('card');
                const userName = '{{ auth()->user()->first_name . ' ' . auth()->user()->last_name }}';
                const userEmail = '{{ auth()->user()->email }}';

                // Cart monthly and yearly price show/hide

                $("#nm_check_month_year").click(function() {
                    if ($(this).is(":checked")) {
                        $('#nm_price_month').toggle();
                        $('#nm_price_year').toggle();

                        var price = $('#nm_price_year').data("price");
                        var total = parseFloat(price - current_balance).toFixed(2);
                        $("#nm_cart_subtotal").text(price);
                        $("#nm_cart_total").text(total);
                        $("#payValue").val(total);
                        $("#subscriptionType").val(yearly_text);
                    } else {
                        $('#nm_price_month').toggle();
                        $('#nm_price_year').toggle();

                        var price = $('#nm_price_month').data("price");
                        var total = parseFloat(price - current_balance).toFixed(2);

                        $("#nm_cart_subtotal").text(price);
                        $("#nm_cart_total").text(total);
                        $("#payValue").val(total);
                        $("#subscriptionType").val(monthly_text);
                    }
                });

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
                            $('#payment-form').submit();
                        }
                    }

                    // paypal

                    if (paymentMethod == 'paypal') {

                        $('#payment-form').submit();
                    }
                });

            });
        </script>

    @endpush
