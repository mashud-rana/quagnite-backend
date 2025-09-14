@extends('layouts.master-v1')

@section('content')
{{-- banner part start --}}
<section class="ic-banner-part ic-section-space ic_v1_inner-part bg-img-center-property"
    style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-md-6">
                <div class="ic-banner-content ic-business-banner">
                    <span class="ic-heading-title mb-15">Wiki List</span>
                    <h1 class="black pb-15">Wiki List Page</h1>
                    <div class="row">
                        <div class="col-xxl-10 col-lg-12">
                            <p class="color-deep-gray pb-30">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of printing and typesetting.
                            </p>
                            <div class="ic-video-programs">
                                <a href="#" class="ic-btn bg-effect">
                                    Enrolled Bootcamp
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-md-block d-none ">
                <div class="ic-right-side-img text-end">
                    <img src="{{ asset('new-frontendv1/images/wiki-banner-bg.png') }}" class="img-fluid" alt="images">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- banner part end --}}


{{-- content start --}}
<section class="ic-wiki-details-content ic-section-space bg-img-center-property">
    <div class="ic-top-feature  ">
        <div class="container">
            <div class="top-content ic-section-space-bottom ">
                <div class="row gx-xxl-4  gx-lg-3 ">
                    <div class="col-lg-6 big-card-content-wrapper">
                        <div class="position-relative overlay big-card">
                            <img src="{{asset('/new-frontendv1/images/wiki/wiki-product-big.png')}}" class="" alt="">
                            <div class="content">
                                <a class="user-info" href="">
                                    <div class="icon">
                                        <i class="ri-user-line"></i>
                                    </div>
                                    Luke Lappala
                                </a>


                                <div class="bottom-content">
                                    <div class="intro-info">
                                        <div class="ic-intro-badge">
                                            DEVOPS
                                        </div>
                                        <div class="ic-date">
                                            <i class="ri-calendar-todo-line"></i>
                                            15 Sep, 2021
                                        </div>
                                    </div>

                                    <h4>
                                        Mauris ullamcorper tortor sed purus interdum, fermentum efficitur dictu.
                                    </h4>

                                    <a class="read-more" href="">
                                        Read More
                                        <i class="ri-arrow-right-line"></i>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6  small-card-content-wrapper">
                        <div class="row">
                            <div class="col-lg-12 common-col">
                                <div class="position-relative overlay small-card">
                                    <img src="{{asset('/new-frontendv1/images/wiki/wiki-product-small1.png')}}" class=""
                                        alt="">
                                    <div class="content">
                                        <a class="user-info" href="">
                                            <div class="icon">
                                                <i class="ri-user-line"></i>
                                            </div>
                                            Luke Lappala
                                        </a>


                                        <div class="bottom-content">
                                            <div class="intro-info">
                                                <div class="ic-intro-badge">
                                                    DEVOPS
                                                </div>
                                                <div class="ic-date">
                                                    <i class="ri-calendar-todo-line"></i>
                                                    15 Sep, 2021
                                                </div>
                                            </div>

                                            <h4>
                                                Mauris ullamcorper tortor sed purus interdum, fermentum efficitur dictu.
                                            </h4>

                                            <a class="read-more" href="">
                                                Read More
                                                <i class="ri-arrow-right-line"></i>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="col-lg-12 common-col">
                                <div class="position-relative overlay small-card">
                                    <img src="{{asset('/new-frontendv1/images/wiki/wiki-product-small2.png')}}" class=""
                                        alt="">
                                    <div class="content">
                                        <a class="user-info" href="">
                                            <div class="icon">
                                                <i class="ri-user-line"></i>
                                            </div>
                                            Luke Lappala
                                        </a>


                                        <div class="bottom-content">
                                            <div class="intro-info">
                                                <div class="ic-intro-badge">
                                                    DEVOPS
                                                </div>
                                                <div class="ic-date">
                                                    <i class="ri-calendar-todo-line"></i>
                                                    15 Sep, 2021
                                                </div>
                                            </div>

                                            <h4>
                                                Mauris ullamcorper tortor sed purus interdum, fermentum efficitur dictu.
                                            </h4>

                                            <a class="read-more" href="">
                                                Read More
                                                <i class="ri-arrow-right-line"></i>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>



            <div class="bottom-content">
                <div class="heading text-center mb-50">
                    <h1>Spotlight</h1>
                </div>
                <div
                    class="row row-cols-lg-3 row-cols-md-2 gx-xxl-4 gx-xl-3 gx-sm-2 justify-content-center common-card-row">
                    <div class="common-card-content-wrapper">
                        <div class="position-relative overlay common-card">
                            <img src="{{asset('/new-frontendv1/images/wiki/wiki-product-big.png')}}" class="" alt="">
                            <div class="content">
                                <a class="user-info" href="">
                                    <div class="icon">
                                        <i class="ri-user-line"></i>
                                    </div>
                                    Luke Lappala
                                </a>


                                <div class="bottom-content">
                                    <div class="intro-info">
                                        <div class="ic-intro-badge">
                                            DEVOPS
                                        </div>
                                        <div class="ic-date">
                                            <i class="ri-calendar-todo-line"></i>
                                            15 Sep, 2021
                                        </div>
                                    </div>

                                    <h4>
                                        Mauris ullamcorper tortor sed purus interdum, fermentum efficitur dictu.
                                    </h4>

                                    <a class="read-more" href="">
                                        Read More
                                        <i class="ri-arrow-right-line"></i>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common-card-content-wrapper">
                        <div class="position-relative overlay common-card">
                            <img src="{{asset('/new-frontendv1/images/wiki/wiki-product-big.png')}}" class="" alt="">
                            <div class="content">
                                <a class="user-info" href="">
                                    <div class="icon">
                                        <i class="ri-user-line"></i>
                                    </div>
                                    Luke Lappala
                                </a>


                                <div class="bottom-content">
                                    <div class="intro-info">
                                        <div class="ic-intro-badge">
                                            DEVOPS
                                        </div>
                                        <div class="ic-date">
                                            <i class="ri-calendar-todo-line"></i>
                                            15 Sep, 2021
                                        </div>
                                    </div>

                                    <h4>
                                        Mauris ullamcorper tortor sed purus interdum, fermentum efficitur dictu.
                                    </h4>

                                    <a class="read-more" href="">
                                        Read More
                                        <i class="ri-arrow-right-line"></i>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common-card-content-wrapper">
                        <div class="position-relative overlay common-card">
                            <img src="{{asset('/new-frontendv1/images/wiki/wiki-product-big.png')}}" class="" alt="">
                            <div class="content">
                                <a class="user-info" href="">
                                    <div class="icon">
                                        <i class="ri-user-line"></i>
                                    </div>
                                    Luke Lappala
                                </a>


                                <div class="bottom-content">
                                    <div class="intro-info">
                                        <div class="ic-intro-badge">
                                            DEVOPS
                                        </div>
                                        <div class="ic-date">
                                            <i class="ri-calendar-todo-line"></i>
                                            15 Sep, 2021
                                        </div>
                                    </div>

                                    <h4>
                                        Mauris ullamcorper tortor sed purus interdum, fermentum efficitur dictu.
                                    </h4>

                                    <a class="read-more" href="">
                                        Read More
                                        <i class="ri-arrow-right-line"></i>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common-card-content-wrapper">
                        <div class="position-relative overlay common-card">
                            <img src="{{asset('/new-frontendv1/images/wiki/wiki-product-big.png')}}" class="" alt="">
                            <div class="content">
                                <a class="user-info" href="">
                                    <div class="icon">
                                        <i class="ri-user-line"></i>
                                    </div>
                                    Luke Lappala
                                </a>


                                <div class="bottom-content">
                                    <div class="intro-info">
                                        <div class="ic-intro-badge">
                                            DEVOPS
                                        </div>
                                        <div class="ic-date">
                                            <i class="ri-calendar-todo-line"></i>
                                            15 Sep, 2021
                                        </div>
                                    </div>

                                    <h4>
                                        Mauris ullamcorper tortor sed purus interdum, fermentum efficitur dictu.
                                    </h4>

                                    <a class="read-more" href="">
                                        Read More
                                        <i class="ri-arrow-right-line"></i>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="common-card-content-wrapper">
                        <div class="position-relative overlay common-card">
                            <img src="{{asset('/new-frontendv1/images/wiki/wiki-product-big.png')}}" class="" alt="">
                            <div class="content">
                                <a class="user-info" href="">
                                    <div class="icon">
                                        <i class="ri-user-line"></i>
                                    </div>
                                    Luke Lappala
                                </a>


                                <div class="bottom-content">
                                    <div class="intro-info">
                                        <div class="ic-intro-badge">
                                            DEVOPS
                                        </div>
                                        <div class="ic-date">
                                            <i class="ri-calendar-todo-line"></i>
                                            15 Sep, 2021
                                        </div>
                                    </div>

                                    <h4>
                                        Mauris ullamcorper tortor sed purus interdum, fermentum efficitur dictu.
                                    </h4>

                                    <a class="read-more" href="">
                                        Read More
                                        <i class="ri-arrow-right-line"></i>

                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- content end --}}

<!-- {{-- achieve goals start --}} -->
<section class="ic-achieve-goals ic-section-space ">
    <div class="container">
        <div class=" text-center mb-50 ">
            <h2 class="ic-title">Achieve Your Goals</h2>
        </div>
        {{-- achieve your goals --}}
        <div class="ic-achieve-rows">
            <div class="row g-3">
                <div class="col-lg-6">
                    <div class="ic-achieve-items">
                        <div class="left">
                            <div>
                                <h5>Start Coaching Today</h5>
                                <p>Seamlessly engage technically sound Seamlessly engage technically sound cooperative
                                    reinterned goal oriented content rather than.</p>
                            </div>
                            <div>
                                <div>

                                    <a href="#" class="ic-btn">Become A Coach</a>
                                </div>
                            </div>
                        </div>
                        <div class="achieve-img">
                            <img src="{{asset('new-frontendv1/images/achieve-1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-achieve-items">
                        <div class="left">
                            <div>
                                <h5>If You Join Our Course</h5>
                                <p>Seamlessly engage technically sound Seamlessly engage technically sound cooperative
                                    reinterned goal oriented content rather than.</p>
                            </div>
                            <div>
                                <a href="#" class="ic-btn">Registration Here</a>
                            </div>
                        </div>
                        <div class="achieve-img radius-shape">
                            <img src="{{asset('new-frontendv1/images/achieve-2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- {{-- achieve goals end --}} -->
@endsection

@push('scripts')
{{-- <script src="{{ asset('frontend/js/price_range_script.js') }}"></script> --}}
@endpush