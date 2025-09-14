@extends('layouts.master-v1')

@push('styles')
@endpush

@section('content')
    {{-- <section class="ic-banner-part ic-section-space"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95))">
        <!-- content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ic-banner-content ">
                        <span class="ic-heading-title mb-15">coaches schedule</span>
                        <h1 class="black pb-15 ic-inner-heading">Coaches Overview</h1>
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
                <div class="col-lg-6">
                    <div class="ic-right-side-img">
                        <img src="{{ asset('new-frontendv1/images/coaches-single/banner-img.png') }}" class="img-fluid"
alt="">
</div>
</div>
</div>
</div>
</section> --}}

    {{-- ic section banner start --}}
    <section class="ic-banner-part ic-section-space ic_v1_inner-part"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)), url(&quot;http://mc-dns.test/frontend/images/course-new-version.png&quot;);">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-6">
                    <div class="ic-banner-content"><span class="ic-heading-title mb-15">coaches schedule</span>
                        <h1 class="pb-3">Coaches Overview</h1>
                        <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                            Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        <div class="ic__buttons-wrapper"><a href="#" class="ic-play-button">
                                <div class="circle"><i class="ri-play-fill"></i></div> Watch INTRO VIDEO
                            </a></div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-right-side-img"><img
                            src="{{ asset('new-frontendv1/images/coaches-single/banner-img.png') }}" alt=""
                            class="img-fluid"></div>
                </div>
            </div>
        </div>
    </section>
    {{-- ic section banner end --}}

    <!-- Coaches single discover sectin start -->
    <section class="ic-discover-section ic-section-space-top ic-section-space-bottom-104">
        <div class="ic-coaches-section-title">
            <h1>Discover Your Potential. Make A Global Impact.</h1>
        </div>
        <div class="container">
            <div class="ic-caoches-single-card-area">
                <div class="row g-4">
                    <div class="col-md-4 col-sm-6">
                        <div class="ic-discover-card">
                            <div class="ic-disc-card-img">
                                <img src="{{ asset('new-frontendv1/images/coaches-single/mic-icon.png') }}" alt="">
                            </div>
                            <div class="ic-card-title">
                                <h2>Build Your Brand</h2>
                            </div>
                            <div class="ic-card-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="ic-discover-card">
                            <div class="ic-disc-card-img">
                                <img src="{{ asset('new-frontendv1/images/coaches-single/cap-icon.png') }}" alt="">
                            </div>
                            <div class="ic-card-title">
                                <h2>Build Your Brand</h2>
                            </div>
                            <div class="ic-card-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="ic-discover-card">
                            <div class="ic-disc-card-img">
                                <img src="{{ asset('new-frontendv1/images/coaches-single/home-icon.png') }}" alt="">
                            </div>
                            <div class="ic-card-title">
                                <h2>Build Your Brand</h2>
                            </div>
                            <div class="ic-card-text">
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Coaches single discover sectin end -->

    <!-- Freelance coach section start -->
    <section class="ic-freelance-coach-section">
        <img class="ic-freelance-bg-img" src="{{ asset('new-frontendv1/images/coaches-single/bg-shape-left.png') }}"
            alt="" class="ic-bg-freelance-coach-left">
        <img class="ic-freelance-bg-right" src="{{ asset('new-frontendv1/images/coaches-single/bg-shape-right.png') }}"
            alt="" class="ic-bg-freelance-coach-right">
        <div class="container">
            <div class="ic-freelance-coach-content-wrapper">
                <div class="ic-coaches-section-title">
                    <h1>Become A Freelance Coach
                        <br>
                        <span>For MCdns Learning!</span>
                    </h1>
                    <p class="ic-tagline">Join a skilled group of independent contractors to investigate possibilities from
                        Fortune 100 businesses</p>
                </div>
                <div class="ic-freelance-coach-content">
                    <div class="ic-freelance-coach-card-wrapper">
                        <div class="ic-coach-img">
                            <img class="img-fluid"
                                src="{{ asset('new-frontendv1/images/coaches-single/freelance-coach-1.png') }}"
                                alt="">
                        </div>
                        <div class="ic-coach-img">
                            <img class="img-fluid"
                                src="{{ asset('new-frontendv1/images/coaches-single/freelance-coach-2.png') }}"
                                alt="">
                        </div>
                        <div class="ic-coach-img">
                            <img class="img-fluid"
                                src="{{ asset('new-frontendv1/images/coaches-single/freelance-coach-3.png') }}"
                                alt="">
                        </div>
                        <div class="ic-coach-img">
                            <img class="img-fluid"
                                src="{{ asset('new-frontendv1/images/coaches-single/freelance-coach-4.png') }}"
                                alt="">
                        </div>
                        <div class="ic-freelance-desc">
                            <p>
                                MCdns Learning offers clients in many industries the best learning and development services
                                available. Adopt a work-life balance and maintain your flexible schedule! We offer the
                                possibility that precisely fits your interests in addition to a clientele that is always
                                expanding.
                            </p>
                            <div class="btn-div">
                                <button class="ic-btn">Explore All Course <i class="ri-arrow-right-fill"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- Freelance coach section end -->

    {{-- <!-- cummunity review section start --> --}}
    <section class="ic-profeesionals-career-goals ic-section-space bg-img-center-property"
        style="background-image: url({{ asset('new-frontendv1/images/coaches-single/bg-community.png') }})">
        <div class="container">
            <div class="ic-coaches-section-title">
                <h1 class="white">The community review of Love With
                    More Than 20,000 People</h1>
            </div>
            <div class="ic__testimonial--slider">
                <div class="container">
                    <ul class="ic__testimonial--nav">
                        <li>
                            <a href="#" class="ic-tab-link active" data-link="avatar-1">
                                <div class="ic__testimonial--avatar avatar-1">

                                    <div class="ic-user-img">

                                        <img id="bigImage" src="{{ asset('/new-frontend') }}/images/avatar-1.png"
                                            alt="avatar">

                                        <div class="ic-user-badge">
                                            <i class="ri-double-quotes-l"></i>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="ic-tab-link" data-link="avatar-2">
                                <div class="ic__testimonial--avatar avatar-2">
                                    <img src="{{ asset('new-frontendv1/images/coaches-single/client_1.png') }}"
                                        alt="avatar">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="ic-tab-link" data-link="avatar-3">
                                <div class="ic__testimonial--avatar avatar-3">
                                    <img src="{{ asset('new-frontendv1/images/coaches-single/client_2.png') }}"
                                        alt="avatar">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="ic-tab-link" data-link="avatar-4">
                                <div class="ic__testimonial--avatar avatar-4">
                                    <img src="{{ asset('new-frontendv1/images/coaches-single/client_3.png') }}"
                                        alt="avatar">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="ic-tab-link" data-link="avatar-5">
                                <div class="ic__testimonial--avatar avatar-5">
                                    <img src="{{ asset('new-frontendv1/images/coaches-single/client_4.png') }}"
                                        alt="avatar">
                                </div>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="ic-tab-link" data-link="avatar-6">
                                <div class="ic__testimonial--avatar avatar-6">
                                    <img src="{{ asset('/frontend') }}/images/avatar-2.png" alt="avatar">
                                </div>
                            </a>
                        </li>

                        <li>
                            <a href="#" class="ic-tab-link" data-link="avatar-7">
                                <div class="ic__testimonial--avatar avatar-7">
                                    <img src="{{ asset('/new-frontend') }}/images/avatar-1.png" alt="avatar">
                                </div>
                            </a>
                        </li>
                    </ul>
                    <div class="ic__testimonial--tabs--container">
                        <div class="ic__testimonial--tabs active" id="avatar-1">
                            <div class="ic-review-title">
                                <h2>Great quality!1</h2>
                            </div>

                            <div class="ic-review-text">
                                <p>The tours in this website are great. I had been really enjoy with my family! The team is
                                    very
                                    professional and taking care of the customers. Will surely recommend to my freind to
                                    join this
                                    company!</p>
                            </div>
                            <div class="ic-user-info">
                                <p>Qari Shuraim</p>
                                <p>Web Developer</p>
                            </div>


                        </div>
                        <div class="ic__testimonial--tabs" id="avatar-2">
                            <div class="ic-review-title">
                                <h2>Great quality!2</h2>
                            </div>

                            <div class="ic-review-text">
                                <p>The tours in this website are great. I had been really enjoy with my family! The team is
                                    very
                                    professional and taking care of the customers. Will surely recommend to my freind to
                                    join this
                                    company!</p>
                            </div>
                            <div class="ic-user-info">
                                <p>Qari Shuraim</p>
                                <p>Web Developer</p>
                            </div>
                        </div>
                        <div class="ic__testimonial--tabs" id="avatar-3">
                            <div class="ic-review-title">
                                <h2>Great quality!3</h2>
                            </div>

                            <div class="ic-review-text">
                                <p>The tours in this website are great. I had been really enjoy with my family! The team is
                                    very
                                    professional and taking care of the customers. Will surely recommend to my freind to
                                    join this
                                    company!</p>
                            </div>
                            <div class="ic-user-info">
                                <p>Qari Shuraim</p>
                                <p>Web Developer</p>
                            </div>
                        </div>
                        <div class="ic__testimonial--tabs" id="avatar-4">
                            <div class="ic-review-title">
                                <h2>Great quality!4</h2>
                            </div>

                            <div class="ic-review-text">
                                <p>The tours in this website are great. I had been really enjoy with my family! The team is
                                    very
                                    professional and taking care of the customers. Will surely recommend to my freind to
                                    join this
                                    company!</p>
                            </div>
                            <div class="ic-user-info">
                                <p>Qari Shuraim</p>
                                <p>Web Developer</p>
                            </div>
                        </div>
                        <div class="ic__testimonial--tabs" id="avatar-5">
                            <div class="ic-review-title">
                                <h2>Great quality!5</h2>
                            </div>

                            <div class="ic-review-text">
                                <p>The tours in this website are great. I had been really enjoy with my family! The team is
                                    very
                                    professional and taking care of the customers. Will surely recommend to my freind to
                                    join this
                                    company!</p>
                            </div>
                            <div class="ic-user-info">
                                <p>Qari Shuraim</p>
                                <p>Web Developer</p>
                            </div>
                        </div>
                        <div class="ic__testimonial--tabs" id="avatar-6">
                            <div class="ic-review-title">
                                <h2>Great quality!6</h2>
                            </div>

                            <div class="ic-review-text">
                                <p>The tours in this website are great. I had been really enjoy with my family! The team is
                                    very
                                    professional and taking care of the customers. Will surely recommend to my freind to
                                    join this
                                    company!</p>
                            </div>
                            <div class="ic-user-info">
                                <p>Qari Shuraim</p>
                                <p>Web Developer</p>
                            </div>
                        </div>
                        <div class="ic__testimonial--tabs" id="avatar-7">
                            <div class="ic-review-title">
                                <h2>Great quality7</h2>
                            </div>

                            <div class="ic-review-text">
                                <p>The tours in this website are great. I had been really enjoy with my family! The team is
                                    very
                                    professional and taking care of the customers. Will surely recommend to my freind to
                                    join this
                                    company!</p>
                            </div>
                            <div class="ic-user-info">
                                <p>Qari Shuraim</p>
                                <p>Web Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- <!-- cummunity review section end --> --}}

    {{-- coaches single count section start --}}
    <section class="ic-coaches-single-count-section ">
        <div class="container">
            <div class="ic-conter-content">
                <div class="ic-coaches-section-title">

                    <h1>
                        Achieve Your Goals With
                    </h1>
                </div>
                <div class="ic-counter-wrapper">
                    <div class="ic-counter-item">
                        <div class="ic-counter-box">
                            <div class="ic-conter-number">
                                <span class="ic-conter-number">834</span>
                                <span>M</span>
                            </div>
                            <p class="ic-counter-text">Total Live Coaches</p>
                        </div>
                    </div>
                    <div class="ic-counter-item">
                        <div class="ic-counter-box">
                            <div class="ic-conter-number">
                                <span data-from="0" data-to="732" data-refresh-interval="50"
                                    data-speed="500">732</span>
                                <span>M</span>
                            </div>
                            <p class="ic-counter-text">Positive Course Review</p>
                        </div>
                    </div>
                    <div class="ic-counter-item">
                        <div class="ic-counter-box">
                            <div class="ic-conter-number">
                                <span data-from="0" data-to="90" data-refresh-interval="50"
                                    data-speed="500">90</span>
                                <span>M</span>
                            </div>
                            <p class="ic-counter-text">Enrolled in Courses</p>
                        </div>
                    </div>
                    <div class="ic-counter-item">
                        <div class="ic-counter-box">
                            <div class="ic-conter-number">
                                <span data-from="0" data-to="236" data-refresh-interval="50"
                                    data-speed="500">236</span>
                                <span>M</span>
                            </div>
                            <p class="ic-counter-text">Certificate Completed</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
    {{-- coaches single count section end --}}

    {{-- Train section start --}}
    <div class="ic-coaches-train-section">
        <div class="container">
            <div class="ic-train-wrapper">
                <div class="ic-train-left">
                    <div class="ic-train-img">
                        <img class="img-fluid" src="{{ asset('new-frontendv1/images/coaches-single/trainer.png') }}"
                            alt="">
                    </div>
                </div>
                <div class="ic-train-right">
                    <p class="ic-train-tag">
                        Get access to learning courses from high quality coaches!
                    </p>
                    <div class="ic-coaches-section-title">
                        <h1>
                            Train Your <span>Brain Today!</span>
                        </h1>
                    </div>
                    <p class="ic-train-des">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of Lorem
                        Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                        has been the industry's standard dummy text ever since the 1500s.
                    </p>
                    <button class="ic-btn">Explore All Course <i class="ri-arrow-right-fill"></i></button>
                </div>

            </div>
        </div>
    </div>
    {{-- Train section end --}}

    {{-- Learning section start --}}
    <section class="ic-online-learning-section"
        style="background-image: linear-gradient(180deg, rgba(0, 56, 91, 0.97) 1.2%, rgba(21, 141, 167, 0.97) 100%),url({{ asset('new-frontendv1/images/coaches-single/bg-community.png') }})">
        <div class="container">
            <div class="ic-coaches-section-title">
                <h1>Innovations <span>in Online Learning</span></h1>
            </div>
        </div>
    </section>
    {{-- Learning section end --}}

    {{-- coaches section start --}}
    <section class="ic-caoches-section">
        <div class="container">
            <div class="ic-online-learning-content-wrapper">
                <div class="row g-0">
                    <div class="col-lg-6">
                        <div class="ic-img-wrapper">
                            <div class="row g-0 d-lg-block d-none">
                                <div class="ic-img-box">
                                    <img class="img-fluid learner-img-1"
                                        src="{{ asset('new-frontendv1/images/coaches-single/learner_1.png') }}"
                                        alt="">
                                </div>
                            </div>
                            <div class="row g-0 ic-classroom-box">

                                <div class="col-sm-6">
                                    <div class="ic-img-box">
                                        <img class="img-fluid learner-img-2"
                                            src="{{ asset('new-frontendv1/images/coaches-single/learner_3.png') }}"
                                            alt="">

                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="ic-text-box">
                                        <h2>Virtual <span>Classroom</span></h2>
                                        <p>Sample text. Click to select
                                            the text box. Click again or
                                            double click to start editing
                                            the text.</p>
                                        <a href="#">All Bootcamp</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ic-img-wrapper">
                            <div class="row g-0 ic-bootcamp-box">
                                <div class="col-sm-6">
                                    <div class="ic-text-box">
                                        <h2>Live <span>Bootcamps</span></h2>
                                        <p>Sample text. Click to select
                                            the text box. Click again or
                                            double click to start editing
                                            the text.</p>
                                        <a href="#">All Bootcamp</a>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="ic-img-box">
                                        <img class="img-fluid learner-img-3"
                                            src="{{ asset('new-frontendv1/images/coaches-single/learner_2.png') }}"
                                            alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="row g-0">
                                <div class="ic-img-box d-lg-block d-none">
                                    <img class="img-fluid learner-img-4"
                                        src="{{ asset('new-frontendv1/images/coaches-single/learner_4.png') }}"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="ic-achive-wrapper ic-section-space">
                <div class="ic-headers text-center">
                    <h2 class="">Achieve Your Goals</h2>
                </div>
                <div class="ic-achieve-rows">
                    <div class="row g-3">
                        <div class="col-lg-6">
                            <div class="ic-achieve-items">
                                <div class="left">
                                    <div>
                                        <h5>Start Coaching Today</h5>
                                        <p>Seamlessly engage technically sound Seamlessly engage technically sound
                                            cooperative
                                            reinterned goal oriented content rather than.</p>
                                    </div>
                                    <div>

                                        <a href="#" class="ic-btn">Become A Coach</a>
                                    </div>
                                </div>
                                <div class="achieve-img">
                                    <img src="{{ asset('new-frontendv1/images/achieve-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ic-achieve-items">
                                <div class="left">
                                    <div>
                                        <h5>If You Join Our Course</h5>
                                        <p>Seamlessly engage technically sound Seamlessly engage technically sound
                                            cooperative
                                            reinterned goal oriented content rather than.</p>
                                    </div>
                                    <div>
                                        <a href="#" class="ic-btn">Registration Here</a>
                                    </div>
                                </div>
                                <div class="achieve-img radius-shape">
                                    <img src="{{ asset('new-frontendv1/images/achieve-2.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- coaches section end --}}

    {{-- Achieve section start --}}
@endsection

@push('scripts')
    <script>
        $(function() {
            $('.ic-conter-number').counterUp({
                delay: 10,
                time: 2000
            });
        });
    </script>
    {{-- counter --}}
    <script src="http://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.3/waypoints.min.js"></script>
    <script src="jquery.counterup.min.js"></script>
@endpush
