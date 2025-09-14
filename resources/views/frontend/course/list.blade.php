@extends('layouts.master')

@section('content')
    <!-- banner part start -->
    <section class="ic-banner-part ic-section-space ic_v1_inner-part"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)), url({{ asset('/frontend') }}/images/course-new-version.png);">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-6">
                    <div class="ic-banner-content">
                        <span class="ic-heading-title black mb-15">All Courses List</span>
                        <h1 class="pb-3">All Courses</h1>
                        <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                            Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        <div class="ic__buttons-wrapper">
                            <a href="#" class="ic-play-button">
                                <div class="circle">
                                    <i class="ri-play-fill"></i>
                                </div> Watch INTRO VIDEO
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-right-side-img">
                        <img src="{{ asset('new-frontend/images/course-module-right.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
            </div>
    </section>
    <!-- banner part end -->

    <div class="ic__blog--background ic__coaching--background ic-section-space-bottom-80 ic-section-space-top-80">
        <div class="container">
            
            <div class="ic-items-list-main ic-items-grid-main row g-2 g-lg-4 row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1"
                id="loadDataContainer">
                @forelse ($courses as $course)
                    <div class="col">
                        <div class="mb-0 flex-column h-100">
                            <div class="ic-coach-item">
                                <div class="position-relative overflow-hidden">
                                    <img src="{{ getStoreFile($course->image, $course->storage_type) }}" class="img-fluid ic-coach-image w-100"
                                        alt="">
                                    <p class="coach-bage ff-exend fs-14 color-white">{{ $course->category->name }}</p>
                                    {{-- <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a> --}}
                                </div>
                                <div class="ic-coach-content pb-0">
                                    <a href="{{ route('course.details', $course->slug) }}">
                                        <h5 class="fw-500 coach-title ff-lexend">{!! str_limit($course->title, $words = 30, $end = '...') !!}</h5>
                                    </a>
                                    <div class="coach-names">
                                        <p><img src="{{ getStoreFile($course->user->avatar, $course->user->storage_type) }}" alt="">
                                            {{ $course->user->full_name }} </p>
                                        <p>{{ $course->reviews->count() ? number_format($course->reviews->avg('rating'), 1) : 0.0 }}<span><i
                                                    class="ri-star-s-fill"></i></span>
                                        </p>
                                    </div>
                                </div>
                                <div class="coach-price course-price d-flex align-items-center justify-content-between">
                                    <div class="d-flex align-items-center gap-2">
                                        <h4>${{ $course->price }}</h4>
                                        <p class="text-decoration-line-through">${{ $course->old_price }}</p>
                                    </div>

                                    <span class="course-addCart addToCart" data-course_id="{{ $course->id }}"
                                        data-route="{{ route('addToCart') }}" title="Add to Cart">
                                        <i class="ri-shopping-cart-2-line"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                @endforelse
            </div>
            @if ($courses->hasMorePages())
                <div class="ic-load-more text-center">
                    <button id="BtnLoadMore" class="ic-btn" data-next-page="{{ $courses->nextPageUrl() }}">Load
                        More</button>
                </div>
            @endif
        </div>
    </div>
@endsection

@push('scripts')
    {{-- <script src='https://code.jquery.com/ui/1.12.0/jquery-ui.min.js'></script>
    <script src="{{ asset('new-frontend/js/rangeSlider.js') }}"></script> --}}
    <script src="{{ asset('frontend/js/loadMore.js') }}"></script>
    <script src="{{ asset('frontend/js/addToCart.js') }}"></script>
    <script>
        $(function() {
            triggerLoadMoreEvent('BtnLoadMore', 'loadDataContainer');
            // $('#topFilterBtn').on('click', function() {
            //     $('.toggleFilterDiv').toggle();
            //     $('.toggleFilterDiv').toggleClass('open');
            // });
        });
    </script>
@endpush
