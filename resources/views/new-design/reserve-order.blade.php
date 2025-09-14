@extends('layouts.master')

@push('styles')
@endpush

@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part inner-banner"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)),  url({{ asset('/new-frontend/images/business.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="ic-heading-title mb-15">E-Book</span>
                        <h1 class="black pb-15 ic-inner-heading">Reserve Your E-Book
                        </h1>
                        <div class="row">
                            <div class="col-xxl-11 col-lg-12">
                                <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of printing and typesetting.</p>
                                <div class="ic-video-programs">
                                    <a href="#" class="ic-btn">Find More E-Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="ic-right-side-img">
                        <img src="{{ asset('new-frontend/images/reserve-e-book-banner.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- banner part end --}}

    {{-- ebbok page --}}
    <section class="ic-reserve-main ic-section-space">
        <div class="container">
            <div class="ic-reserve-orders">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <div class="ic-reserve-order">
                            <img src="{{ asset('new-frontend/images/reserve-order.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form action="#" class="reserve-order-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Full Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Email adress">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="#">Book Name</label>
                                        <input type="text" name="book_name" class="form-control" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Phone Number</label>
                                        <input type="number" name="number" class="form-control" placeholder="Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Order</label>
                                        <input type="text" name="order_number" class="form-control"
                                            placeholder="Order Number">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="#">Message</label>
                                        <textarea name="massage" placeholder="Tell us about your books..." class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="ic-btn">Reserve Book</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ebbok page --}}
@endsection

@push('scripts')
@endpush
