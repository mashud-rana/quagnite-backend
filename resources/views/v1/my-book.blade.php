@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- my bootcamps --}}
    <section class="my-bootcamps-main">
        <div class="container">
            <div class="section-headers">
                <div>
                    <h3 class="fs-30 fw-700 pb-lg-3 pb-2">My Book</h3>
                    <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="col-lg-3">
                    <div class="ic-ebookShow-items">
                        <div class="overflow-hidden ebookShow-img">
                            <img src="{{asset('new-frontendv1/images/ebook/ebook-item-1.png')}}" class="img-fluid w-100" alt="ebook items">
                        </div>
                        <div class="ic-content-ebookItems">
                            <p class="ebook-title pt-0">The Ultimate Staffing Guide : Leaders to Creating a Flexible Work Culture</p>
                        </div>
                        <div class="ebook-buttons">
                            <button class="ic-btn-simple">Download </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ic-ebookShow-items">
                        <div class="overflow-hidden ebookShow-img">
                            <img src="{{asset('new-frontendv1/images/ebook/ebook-item-1.png')}}" class="img-fluid w-100" alt="ebook items">
                        </div>
                        <div class="ic-content-ebookItems">
                            <p class="ebook-title pt-0">The Ultimate Staffing Guide : Leaders to Creating a Flexible Work Culture</p>
                        </div>
                        <div class="ebook-buttons">
                            <button class="ic-btn-simple">Download </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ic-ebookShow-items">
                        <div class="overflow-hidden ebookShow-img">
                            <img src="{{asset('new-frontendv1/images/ebook/ebook-item-1.png')}}" class="img-fluid w-100" alt="ebook items">
                        </div>
                        <div class="ic-content-ebookItems">
                            <p class="ebook-title pt-0">The Ultimate Staffing Guide : Leaders to Creating </p>
                        </div>
                        <div class="ebook-buttons">
                            <button class="ic-btn-simple">Download </button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="ic-ebookShow-items">
                        <div class="overflow-hidden ebookShow-img">
                            <img src="{{asset('new-frontendv1/images/ebook/ebook-item-1.png')}}" class="img-fluid w-100" alt="ebook items">
                        </div>
                        <div class="ic-content-ebookItems">
                            <p class="ebook-title pt-0">The Ultimate Staffing Guide : Leaders to Creating a Flexible Work Culture</p>
                        </div>
                        <div class="ebook-buttons">
                            <button class="ic-btn-simple">Download </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- my bootcamps --}}
@endsection

@push('scripts')
@endpush
