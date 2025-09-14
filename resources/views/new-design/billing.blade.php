@extends('layouts.master')

@push('styles')
@endpush

@section('content')
    <section class="ic-banner-part ic-section-space"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)),  url('{{ asset('/new-frontend/images/price-page.png') }}');">
        <!-- content -->
        <div class="container">
            <div class="row">
                <!-- <div class="col-lg-6">
                                <div class="ic-banner-content ps-0">
                                    <span class="ic-heading-title mb-15">Billing</span>
                                    <h1 class="black pb-15">Subscription Checkout</h1>
                                    <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                                        printer took a galley of printing and typesetting.</p>
                                    <a href="#" class="ic-btn">Find More Courese</a>
                                </div>
                            </div> -->


                <div class="col-lg-6">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="ic-heading-title mb-15">Chaeckout</span>
                        <h1 class="black pb-15 ic-inner-heading">Subscription Checkout</h1>
                        <div class="row">
                            <div class="col-xxl-11 col-lg-12">
                                <p class="color-deep-gray pb-30">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of printing and typesetting.
                                </p>
                                <div class="ic-video-programs">
                                    <a href="#" class="ic-btn">Find More Course</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-right-side-img">
                        <img src="{{ asset('new-frontend/images/checkout-banner-img.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- cart --}}
    <section class="ic-billing-pages ic-section-space">
        <div class="container">
            <div class="ic-billing-wrapper">
                <div class="ic-billing-body">
                    <div class="ic-billing-header">
                        <p class="fs-28 fw-500">MCdns Finalize Subcription Payment</p>
                        <p class="color-deep-gray">We protect your payment information using encryption to provide bank-level
                            security</p>
                    </div>
                    <div class="ic-billing-main">
                        <div class="ic-billing-left">
                            <div class="left-billing">
                                <p class="fw-500 black pb-2">Billing details</p>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="#">First Name*</label>
                                            <input type="text" class="form-control" placeholder="First Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="form-group">
                                            <label for="#">Last Name*</label>
                                            <input type="text" class="form-control" placeholder="last Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="#">Company name (optional) *</label>
                                            <input type="text" class="form-control" placeholder="Company Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="#">Country Name *</label>
                                            <select name="" class="selectpicker" id="">
                                                <option value="0">Bangladesh</option>
                                                <option value="0">India</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="#">Town / City Name *</label>
                                            <select name="" class="selectpicker" id="">
                                                <option value="0">Dhaka</option>
                                                <option value="0">Rajshahi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="#">District *</label>
                                            <select name="" class="selectpicker" id="">
                                                <option value="0">Dhaka</option>
                                                <option value="0">Rajshahi</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label for="#">Postcode / ZIP (optional) *</label>
                                            <input type="text" class="form-control" placeholder="Company Name">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ic-billing-right">
                            <div>
                                <p class="fw-500 black pb-2">Your order details</p>
                                <ul class="billing-story">
                                    <li class="product-item">
                                        <p>Standard Monthly Package </p>
                                        <p><span>$34.99</span>/per month</p>
                                    </li>
                                    <li>
                                        <p>Subtotal</p>
                                        <p>$234.00</p>
                                    </li>
                                    <li>
                                        <p>Platform Charge</p>
                                        <p>$24.00</p>
                                    </li>
                                    <li>
                                        <p>Grand Total</p>
                                        <p>$24.00</p>
                                    </li>
                                </ul>
                                <div class="row mt-4">
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="coupon code">
                                        </div>
                                    </div>
                                    <div class="col-lg-4 text-end">
                                        <div class="form-group">
                                            <button class="ic-btn">Apply</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="payment-form">
                                <div class="ic-new-payment-method">
                                    <p class="fw-500">Payment Methode</p>
                                    <div class="ic__payment-methodSelect">
                                        <div>
                                            <input type="radio" id="visa" name="payment_method" value="stripe"
                                                required="">
                                            <label for="visa">
                                                <img src="http://mc-dns.test/frontend/images/payment/visa.png"
                                                    class="img-fluid" alt="">
                                            </label>
                                        </div>
                                        <div>
                                            <input type="radio" id="master" name="payment_method" value="stripe">
                                            <label for="master">
                                                <img src="http://mc-dns.test/frontend/images/payment/master.png"
                                                    class="img-fluid" alt="">
                                            </label>
                                        </div>
                                        <div>
                                            <input type="radio" id="american" name="payment_method" value="stripe">
                                            <label for="american">
                                                <img src="http://mc-dns.test/frontend/images/payment/american.png"
                                                    class="img-fluid" alt="">
                                            </label>
                                        </div>
                                        <div>
                                            <input type="radio" id="stripe" name="payment_method" value="stripe">
                                            <label for="stripe">
                                                <img src="http://mc-dns.test/frontend/images/payment/stripe.png"
                                                    class="img-fluid" alt="">
                                            </label>

                                        </div>
                                        <div>
                                            <input type="radio" id="paypal" name="payment_method" value="paypal">
                                            <label for="paypal">
                                                <img src="http://mc-dns.test/frontend/images/payment/paypal.png"
                                                    class="img-fluid" alt="">
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    {{-- payment form --}}
                                </div>
                                <button class="ic-btn w-100 rounded">pay</button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    {{-- cart --}}
@endsection

@push('scripts')
@endpush
