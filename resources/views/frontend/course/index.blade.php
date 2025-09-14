@extends('layouts.master')

@section('content')
    <!-- {{-- banner part start --}} -->
    <section class="ic-banner-part ic-section-space ic_v1_inner-part "
        style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-md-6">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="ic-heading-title mb-15">Start course here</span>
                        <h1 class="black pb-15">Courses Overview</h1>
                        <div class="row">
                            <div class="col-xxl-10 col-lg-12">
                                <p class="color-deep-gray pb-30">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of
                                </p>
                                <div class="ic__buttons-wrapper">
                                    <a href="#" class="btn-watch">
                                        <div class="circle">
                                            <i class="ri-play-fill"></i>
                                        </div> Watch Intro Video
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-md-block d-none ">
                    <div class="ic-right-side-img text-end">
                        <img class="img-fluid" src="{{ asset('new-frontendv1/images/banner/course-single-page.png') }}"
                            alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- {{-- banner part end --}} -->

    <!-- {{-- online course start --}} -->
    <section class="ic-online-course ic-single-course-common ">
        <div class="ic-content ic-section-space "
            style="background-image:url('{{ asset('/new-frontendv1/images/course-single/course-div-bg.png') }}');">
            <div class="container">
                <div class="ic-row">
                    <div class="ic-col">
                        <div class="ic-course-main-img">
                            <img src="{{ asset('/new-frontendv1/images/course-single/course-main.png') }}"
                                class=" img-fluid" alt="">
                        </div>
                    </div>
                    <div class="ic-col">
                        <div class="ic-top-content pb-30">
                            <h4 class="ic-badge-title">Build Skills with us</h4>
                            <h2 class="ic-title"><span>MCdns</span> Online Courses</h2>

                            <p class="ic-des">
                                Learn for Free and improve your career skills online today. Choose from a wide range of Free
                                courses
                                offered from top universities and industry leaders. Discover over 4000 free online courses
                                across a
                                wide range of categories at Alison®. Enroll today and start earning valuable certificates
                                and
                                degrees. Starting learning for free with a
                                wide range of free online courses covering different subjects.
                            </p>
                        </div>
                        <div class="ic-bottom-content">

                            <div class="ic-abs-content-btn mb-30">
                                <a role="button" class="ic-btn" href="{{ route('all.courses') }}">
                                    Explore All Course
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                            <div class="bottom-abs-content">
                                <img src="{{ asset('/new-frontendv1/images/course-single/demo-course.png') }}"
                                    class="img-fluid" alt="">
                            </div>
                            <img src="{{ asset('/new-frontendv1/images/course-single/img-bottom.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- {{-- online course end --}} -->

    <!-- {{-- discover more start --}} -->
    {{-- <section class="ic-discover-more ic-section-space ic-single-course-common">
        <div class="container">
            <div class="text-center">
                <h2 class="ic-title"><span>Discover More</span> About MCdns</h2>
            </div>

            <div class="ic-about-row">
                <div class="ic-about-col">
                    <div class="ic-discover-card">
                        <div class="top-content">
                            <h5 class="discover-card-title">
                                How students have received higher education using mcdns?
                            </h5>
                            <p class="discover-card-des">
                                Learn for Free and improve your career skills online today.
                            </p>
                            <a href="">
                                Read All Blogs
                            </a>
                        </div>
                        <div class="bottom-content">
                            <img src="{{ asset('/new-frontendv1/images/course-single/card.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="ic-about-col">
                    <div class="ic-discover-card">
                        <div class="top-content">
                            <h5 class="discover-card-title">
                                How students have received higher education using mcdns?
                            </h5>
                            <p class="discover-card-des">
                                Learn for Free and improve your career skills online today.
                            </p>
                            <a href="">
                                Read All E-Books
                            </a>
                        </div>
                        <div class="bottom-content">
                            <img src="{{ asset('/new-frontendv1/images/course-single/card3.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="ic-about-col">
                    <div class="ic-discover-card">
                        <div class="top-content">
                            <h5 class="discover-card-title">
                                How students have received higher education using mcdns?
                            </h5>
                            <p class="discover-card-des">
                                Learn for Free and improve your career skills online today.
                            </p>
                            <a href="">
                                Read All Webinars
                            </a>
                        </div>
                        <div class="bottom-content">
                            <img src="{{ asset('/new-frontendv1/images/course-single/card4.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                </div>
                <div class="ic-about-col">
                    <div class="ic-discover-card">
                        <div class="top-content">
                            <h5 class="discover-card-title">
                                How students have received higher education using mcdns?
                            </h5>
                            <p class="discover-card-des">
                                Learn for Free and improve your career skills online today.
                            </p>
                            <a href="">
                                Read All Exams
                            </a>
                        </div>
                        <div class="bottom-content">
                            <img src="{{ asset('/new-frontendv1/images/course-single/card5.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    <!-- {{-- discover more end --}} -->

    <!-- {{-- learning course start --}} -->
    <section class="ic-learning-course ic-single-course-common ic-section-space ">
        <div class="container">
            <div class="ic-row">
                <div class="ic-col">
                    <div class="ic-top-content pb-30">
                        <h5 class="ic-bio-title">Get access to learning courses!</h5>
                        <h2 class="ic-title"><span>Teach Your</span> Self Today!</h2>

                        <p class="ic-des">
                            Learn for Free and improve your career skills online today. Choose from a wide range of Free
                            courses
                            offered from top universities and industry leaders. Discover over 4000 free online courses
                            across a
                            wide range of categories at Alison®. Enroll today and start earning valuable certificates
                            and
                            degrees. Starting learning for free with a
                            wide range of free online courses covering different subjects.
                        </p>
                    </div>
                    <a role="button" class="ic-btn" href="{{ route('all.courses') }}">
                        Explore All Course
                        <i class="ri-arrow-right-line"></i>
                    </a>
                </div>
                <div class="ic-col">
                    <div class="right-image-content">
                        <img src="{{ asset('/new-frontendv1/images/course-single/learning-course-bg.png') }}"
                            class="img-fluid" alt="">
                        <img src="{{ asset('/new-frontendv1/images/course-single/learning-course.png') }}"
                            class="abs-content img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- {{-- learning course end --}} -->

    <!-- {{-- enroll course start --}} -->

    <section class="ic-enroll-course ic-single-course-common ic-section-space-top ">
        <div class="container">
            <h2 class="ic-title text-center mb-50"><span>Enroll Our Online</span> Course Today!</h2>

            {{-- <div class="ic-course-slider-wrapper mb-40">
            <div class="item">

            </div>
            <div class="item">
                <div class="ic-coach-item">
                    <div class="position-relative overflow-hidden">
                        <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                        <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                        <img src="{{asset('/new-frontendv1/images/course-single/card3.png')}}" class="img-fluid ic-coach-image w-100"
                        alt="">
                    </div>
                    <div class="ic-coach-content">
                        <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                        <div class="coach-names">
                            <p><img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
                                asdasdasdasd</p>
                            <p>5.0 <span><i class="ri-star-s-fill"></i></span></p>
                        </div>
                        <div class="coach-price d-flex align-items-center">
                            <h4>$165.00</h4>
                            <p class="text-decoration-line-through">$100</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ic-coach-item">
                    <div class="position-relative overflow-hidden">
                        <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                        <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                        <img src="{{asset('/new-frontendv1/images/course-single/card4.png')}}" class="img-fluid ic-coach-image w-100"
                        alt="">
                    </div>
                    <div class="ic-coach-content">
                        <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                        <div class="coach-names">
                            <p><img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
                                asdasdasdasd</p>
                            <p>5.0 <span><i class="ri-star-s-fill"></i></span></p>
                        </div>
                        <div class="coach-price d-flex align-items-center">
                            <h4>$165.00</h4>
                            <p class="text-decoration-line-through">$100</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ic-coach-item">
                    <div class="position-relative overflow-hidden">
                        <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                        <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                        <img src="{{asset('/new-frontendv1/images/course-single/card5.png')}}" class="img-fluid ic-coach-image w-100"
                        alt="">
                    </div>
                    <div class="ic-coach-content">
                        <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                        <div class="coach-names">
                            <p><img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
                                asdasdasdasd</p>
                            <p>5.0 <span><i class="ri-star-s-fill"></i></span></p>
                        </div>
                        <div class="coach-price d-flex align-items-center">
                            <h4>$165.00</h4>
                            <p class="text-decoration-line-through">$100</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="item">
                <div class="ic-coach-item">
                    <div class="position-relative overflow-hidden">
                        <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                        <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                        <img src="{{asset('/new-frontendv1/images/course-single/card.png')}}" class="img-fluid ic-coach-image w-100"
                        alt="">
                    </div>
                    <div class="ic-coach-content">
                        <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                        <div class="coach-names">
                            <p><img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
                                asdasdasdasd</p>
                            <p>5.0 <span><i class="ri-star-s-fill"></i></span></p>
                        </div>
                        <div class="coach-price d-flex align-items-center">
                            <h4>$165.00</h4>
                            <p class="text-decoration-line-through">$100</p>
                        </div>
                    </div>
                </div>
            </div>
        </div> --}}

            <div class="row g-xxl-4 g-lg-3 g-2">
                @forelse($courses as $course)
                    <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
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
                                    <p>{{ $course->reviews->count() ? number_format($course->reviews->avg('rating'), 1) : 0.0 }}
                                        <span><i class="ri-star-s-fill"></i></span>
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
                @empty
            </div>
            <x-frontend.data-notfound></x-frontend.data-notfound>
            @endforelse
            <div class="mt-30 text-center">
                <a href="{{ route('all.courses') }}" class="ic-btn">Explore All Course <i
                        class="ri-arrow-right-line"></i></a>
            </div>
            <!-- ic slider button(arrow) design -->
            {{-- <div class="ic-slider-button-group d-flex justify-content-center align-items-center ">
            <button class=" ic-button course-left-btn">
                <i class="ri-arrow-left-line icon"></i>
            </button>
            <button class="ic-button course-right-btn">
                <i class="ri-arrow-right-line icon"></i>
            </button>
        </div> --}}


        </div>
    </section>

    <!-- {{-- enroll course end --}} -->


    <!-- {{-- better technology course start --}} -->
    <section class="ic-better-technology ic-single-course-common ic-section-space ">
        <div class="container">
            <div class="ic-better-technology-row">
                <div class="ic-better-technology-col">
                    <div class="heading mb-30 pb-30">
                        <h2 class="ic-title"><span>Build the future with</span> better technology skills</h2>
                        <p class="ic-des">
                            Seamlessly engage technically sound Seamlessly engage technically sound cooperative reinterned
                            goal
                            oriented content rather than.
                        </p>
                    </div>

                    <ul class="ic-feature">
                        <li>
                            <div class="icon">
                                <img src="{{ asset('/new-frontendv1/images/course-single/stack.svg') }}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="feature-content">
                                <h5 class="feature-title">Upskill & reskill</h5>
                                <p class="feature-des">Etiam sed vulputate nisl, eu elementum arcu. Vivamus dignissim
                                    tortor
                                </p>
                                <a class="feature-details" href="{{ route('all.courses') }}">Read All Course</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{ asset('/new-frontendv1/images/course-single/cpu.svg') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="feature-content">
                                <h5 class="feature-title">Learn by doing</h5>
                                <p class="feature-des">Vivamus dignissim tortor in tellus dictum pellentesque. Praesent
                                    mauris</p>
                                <a class="feature-details" href="{{ route('playground.index') }}">Explore Lab</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{ asset('/new-frontendv1/images/course-single/stack.svg') }}"
                                    class="img-fluid" alt="">
                            </div>
                            <div class="feature-content">
                                <h5 class="feature-title">Assess & evaluate</h5>
                                <p class="feature-des">Etiam sed vulputate nisl, eu elementum arcu. Vivamus dignissim
                                    tortor
                                </p>
                                <a class="feature-details" href="{{ route('exams.index') }}">See All Exams</a>
                            </div>
                        </li>
                        <li>
                            <div class="icon">
                                <img src="{{ asset('/new-frontendv1/images/course-single/cpu.svg') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="feature-content">
                                <h5 class="feature-title">Investigate the data.</h5>
                                <p class="feature-des">Vivamus dignissim tortor in tellus dictum pellentesque. Praesent
                                    mauris</p>
                                <a class="feature-details" href="{{ route('all.bootcamps') }}">See All Bootcamp</a>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="ic-better-technology-col">
                    <div class="image">
                        <img src="{{ asset('/new-frontendv1/images/course-single/better-technology.png') }}"
                            class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- {{-- better technology course end --}} -->

    {{-- Select an IQ Test and get started --}}
    {{-- <section class="ic-get-started ic-section-space" style="background:  linear-gradient(180deg, #FFF 0%, #D3EDF3 100%);">
        <div class="container">
            <div class="section-headers-playground text-center">
                <h2 class="black">Select an IQ Test and<span>get started</span></h2>
            </div>
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ic-exam-test-iq">
                        <span class="ic-timer-set"><i class="ri-timer-line"></i> 10:50</span>
                        <img src="{{ asset('new-frontendv1/images/blog/icon-1.png') }}" class="img-fluid"
                            alt="">
                        <h6>Python Operations</h6>
                        <p>Admission No : 49854</p>
                        <a href="#" class="ic-btn-simple">Take IQ Test <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ic-exam-test-iq">
                        <span class="ic-timer-set"><i class="ri-timer-line"></i> 10:50</span>
                        <img src="{{ asset('new-frontendv1/images/blog/icon-2.png') }}" class="img-fluid"
                            alt="">
                        <h6>Python Operations</h6>
                        <p>Admission No : 49854</p>
                        <a href="#" class="ic-btn-simple">Take IQ Test <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ic-exam-test-iq">
                        <span class="ic-timer-set"><i class="ri-timer-line"></i> 10:50</span>
                        <img src="{{ asset('new-frontendv1/images/blog/icon-3.png') }}" class="img-fluid"
                            alt="">
                        <h6>Python Operations</h6>
                        <p>Admission No : 49854</p>
                        <a href="#" class="ic-btn-simple">Take IQ Test <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ic-exam-test-iq">
                        <span class="ic-timer-set"><i class="ri-timer-line"></i> 10:50</span>
                        <img src="{{ asset('new-frontendv1/images/blog/icon-4.png') }}" class="img-fluid"
                            alt="">
                        <h6>Python Operations</h6>
                        <p>Admission No : 49854</p>
                        <a href="#" class="ic-btn-simple">Take IQ Test <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ic-exam-test-iq">
                        <span class="ic-timer-set"><i class="ri-timer-line"></i> 10:50</span>
                        <img src="{{ asset('new-frontendv1/images/blog/icon-3.png') }}" class="img-fluid"
                            alt="">
                        <h6>Python Operations</h6>
                        <p>Admission No : 49854</p>
                        <a href="#" class="ic-btn-simple">Take IQ Test <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-50 text-center">
                <a href="#" class="ic-btn-simple">Load More <i class="ri-loader-2-fill"></i></a>
            </div>
        </div>
    </section> --}}
    {{-- Select an IQ Test and get started --}}

    <!-- {{-- achieve goals start --}} -->
    <x-frontend.achieve-goals-light></x-frontend.achieve-goals-light>
    <!-- {{-- achieve goals end --}} -->
@endsection
@push('scripts')
    <script src="{{ asset('frontend/js/addToCart.js') }}"></script>
@endpush
