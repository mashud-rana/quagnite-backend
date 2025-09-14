@extends('layouts.master')

@push('styles')
@endpush

@section('content')
<section class="ic-banner-part ic-section-space" style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95))">
    <!-- content -->
    <div class="container">
        <div class="row">
            <!-- <div class="col-lg-6">
                                        <div class="ic-banner-content ps-0">
                                            <span class="ic-heading-title mb-15">Chaeckout</span>
                                            <h1 class="black pb-15">Course Add To Cart</h1>
                                            <p class="color-deep-gray pb-30">Read Our documentation first. Before asking questions within the support,
                                                please be sure that you have read the file documentation which came packaged with your download.
                                                The documentation covers installation, usage, and often answers the vast majority of questions.
                                            </p>
                                        </div>
                                    </div> -->


                <div class="col-lg-6 order-2">
                    <div class="ic-banner-content ">
                        <span class="ic-heading-title mb-15">Checkout</span>
                        <h1 class="black pb-15 ic-inner-heading">Course Add To Cart</h1>
                        <div class="row">
                            <div class="col-xxl-11 col-lg-12">
                                <p class="color-deep-gray pb-30">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of printing and typesetting.
                                </p>
                                <div class="ic-video-programs">
                                    <a href="#" class="ic-btn">Find More Courese</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 order-1">
                <div class="ic-right-side-img">
                    <img src="{{ asset('new-frontendv1/images/cart-img.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- cart --}}
<section class="ic-cart-pages ic-section-space bg-white">
    <div class="container">
        <div class="row g-3">
            <div class="col-xxl-8 col-lg-8">
                <div class="table-responsive">
                    <table class="table car-table">
                        <thead>
                            <tr class="bg-gradient-new">
                                <th class="text-white fs-14 ff-lexend fw-400">
                                    MCdns Ebook
                                </th>
                                <th class="text-white fs-14 ff-lexend fw-400">
                                    PRICE
                                </th>
                                <th class="text-white fs-14 ff-lexend fw-400">
                                    REMOVE
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <div class="d-flex ic-cart-pages">
                                        <div>
                                            <img src="{{ asset('new-frontend/images/cart-img.png') }}" alt="">
                                        </div>
                                        <div class="product-left">
                                            <p class="black pb-2">Python Programming and SQL: 5 books in 1</p>
                                            <p class="fs-14">Publisher : MCdns Learning</p>
                                            <p class="fs-14">ISBN : 9789849155904</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p>$3.399</p>
                                </td>
                                <td>
                                    <a href="#" class="closed"><i class="ri-close-fill"></i></a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <div class="d-flex ic-cart-pages">
                                        <div>
                                            <img src="{{ asset('new-frontend/images/cart-img.png') }}" alt="">
                                        </div>
                                        <div class="product-left">
                                            <p class="black pb-2">Python Programming and SQL: 5 books in 1</p>
                                            <p class="fs-14">Publisher : MCdns Learning</p>
                                            <p class="fs-14">ISBN : 9789849155904</p>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <p>$3.399</p>
                                </td>
                                <td>
                                    <a href="#" class="closed"><i class="ri-close-fill"></i></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="ic-cart-selects">
                    <div class="cart-display">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <form action="#" class="ic-coupon">
                                    <input type="text" placeholder="Type Coupon code">
                                    <button>Apply Coupon</button>
                                </form>
                            </div>
                            <div class="col-lg-6 text-end">
                                <a href="#" class="ic-btn rounded">Continue Shopping</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xxl-4 col-lg-4">
                <div class="ic-order-summery">
                    <div class="summary-header bg-gradient-new">
                        <p class="fs-18 fw-400 ff-lexend">Cart Order Summary</p>
                    </div>
                    <div class="summer-body">
                        <ul>
                            <li>
                                <p class="fw-300">Items Subtotal</p>
                                <p>$200.99</p>
                            </li>
                            <li>
                                <p class="fw-300">Discounts</p>
                                <p>$30</p>
                            </li>
                            <li>
                                <p class="fw-300">Platform Charge</p>
                                <p>Free</p>
                            </li>
                            <li>
                                <p class="fw-300">Estimated Taxes</p>
                                <p>$25.66</p>
                            </li>
                            <li>
                                <p class="fw-300">Total</p>
                                <p>$225.98</p>
                            </li>
                        </ul>
                        <button class="ic-btn rounded w-100 ">Proceed to checkout</button>
                        <button class="ic-btn-close rounded w-100 mt-3">Proceed to checkout</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- cart --}}
@endsection

@push('scripts')
{{-- <script>
        $('.increment').on('click', function() {
            let increment = $(this).prev('.display').val();
            increment++;
            $(this).prev('.display').val(increment);
        });
        $('.decrement').on('click', function() {
            let decrement = $(this).next('.display').val();
            decrement--;
            if (decrement < 0) {
                return 1;
            }
            $(this).next('.display').val(decrement);
        });
    </script> --}}
@endpush