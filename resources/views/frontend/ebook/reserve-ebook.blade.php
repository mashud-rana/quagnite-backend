@extends('layouts.master')

@push('styles')
@endpush

@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part ic-section-space"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)),  url({{ asset('/new-frontend/images/business.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 order-2 order-lg-1">
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
                                    <a href="{{ route('ebooks') }}" class="ic-btn">Find More E-Book</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 order-1 order-lg-2">
                    <div class="ic-right-side-img">
                        <img src="{{ asset('new-frontendv1/images/ebook/ebook.png') }}" class="img-fluid"
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
                        <form action="{{ route('reserve.ebook.store') }}" method="POST" class="reserve-order-form">
                            @csrf @method('POST')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Full Name</label>
                                        <input type="text" name="name" class="form-control"
                                            value="{{ auth()->user()->full_name }}" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Email</label>
                                        <input type="email" name="email" class="form-control" placeholder="Email adress"
                                            value="{{ auth()->user()->email }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="#">Book Name</label>
                                        <select name="ebook_id" class="form-control">
                                            <option disabled selected>Select Ebook</option>
                                            @foreach ($ebooks as $ebook)
                                                <option value="{{ $ebook->id }}">
                                                    {{ $ebook->title . ' (' . $ebook->author_name . ')' }} </option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="#">Phone Number</label>
                                        <input type="text" name="phone" class="form-control" placeholder="Phone"
                                            value="{{ auth()->user()->phone }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="#">Message</label>
                                        <textarea name="message" placeholder="Tell us about your books..." class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="ic-btn">Reserve Book</button>
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
