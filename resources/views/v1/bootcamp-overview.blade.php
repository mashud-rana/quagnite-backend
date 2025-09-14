@extends('layouts.master-v1')

@section('content')
{{-- banner part start --}}
<section class="ic-banner-part ic-section-space ic_v1_inner-part bg-img-center-property"
    style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-md-6">
                <div class="ic-banner-content ic-business-banner">
                    <span class="ic-heading-title mb-15">Bootcamps</span>
                    <h1 class="black pb-15">Bootcamp Overview</h1>
                    <div class="row">
                        <div class="col-xxl-10 col-lg-12">
                            <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                the 1500s, when standard
                                unknown printer took a galley of
                            </p>
                            <a href="#" class="btn-watch ic-play-button">
                                <div class="circle">
                                    <i class="ri-play-fill"></i>
                                </div> Watch Intro Video
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-md-block d-none ">
                <div class="ic-right-side-img text-end">
                    <img src="{{ asset('new-frontendv1/images/bootcamp.png') }}" class="img-fluid" alt="images">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- banner part end --}}
{{-- Get access to learning Bootcamps! --}}
<section class="ic-get-access-learning ic-section-space ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-6">
                <div class="ic-img-access">
                    <img src="{{asset('new-frontendv1/images/bootcamp-overview/join-our-online.png')}}"
                        class="ic-join-our img-fluid" alt="join online">
                    <img src="{{asset('new-frontendv1/images/bootcamp-overview/join-our-shape.png')}}"
                        class="ic-shape-overview img-fluid" alt="join online">
                </div>
            </div>
            <div class="col-lg-7 col-md-6">
                <div class="ic-img-access-content">
                    <p class="access-title">Get access to learning Bootcamps!</p>
                    <h2><span>Join Our Online</span> Bootcamp Right Now!</h2>
                    <p class="ic-access-paragraph">This Caltech Coding Bootcamp will help you master both front-end and
                        back-end Java technologies, starting with the basics and progressing to the advanced aspects of
                        Full Stack Web Development. In this Online Coding boot camp, you will learn Angular, Spring
                        Boot, web services, JSPs, and MongoDB to help you launch your career as a full-stack developer.
                        text of the printing and type setting industry. Lorem Ipsum has been the industry's standard
                        dummy text ever since the 1500s.</p>
                    <a href="#" class="ic-btn">Explore Bootcamp <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Get access to learning Bootcamps! --}}

{{-- why join this bootcamps --}}
<section class="ic-this-bootcamps ic-section-space bg-img-center-property"
    style="background-image: url({{asset('new-frontendv1/images/bootcamp-overview/why-join-bg.png')}})">
    <div class="container">
        <div class="header-bootcamp text-center">
            <h2 class="black">Why Join this Bootcamps</h2>
        </div>
        <div class="row position-relative">
            <div class="col-lg-8 m-auto">
                <div class="ic-img-join-this position-relative z-index-1">
                    <img class="img-fluid"
                        src="{{asset('new-frontendv1/images/bootcamp-overview/bootcamp-join-this.png')}}"
                        alt="bootcamp-overview">
                </div>
            </div>


            <div class="ic-academic-car-main ">
                <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-3 g-2">
                    <div class="">
                        <div class="ic-academic-car-items red">
                            <img src="{{asset('new-frontendv1/images/bootcamp-overview/academic-icon.png')}}" alt="">
                            <p class="academic-title">MCdns Academic Prowess</p>
                            <p class="academic-paragraph">By taking the course online, students can earn up to 17 CEU
                                credits and a certificate from Harvard CTME.</p>
                        </div>
                    </div>
                    <div class="">
                        <div class="ic-academic-car-items green">
                            <img src="{{asset('new-frontendv1/images/bootcamp-overview/celebreite.png')}}" alt="">
                            <p class="academic-title">MCdns Academic Prowess</p>
                            <p class="academic-paragraph">By taking the course online, students can earn up to 17 CEU
                                credits and a certificate from Harvard CTME.</p>
                        </div>
                    </div>
                    <div class="">
                        <div class="ic-academic-car-items blue">
                            <img src="{{asset('new-frontendv1/images/bootcamp-overview/celebreite.png')}}" alt="">
                            <p class="academic-title">MCdns Academic Prowess</p>
                            <p class="academic-paragraph">By taking the course online, students can earn up to 17 CEU
                                credits and a certificate from Harvard CTME.</p>
                        </div>
                    </div>
                    <div class="">
                        <div class="ic-academic-car-items orange">
                            <img src="{{asset('new-frontendv1/images/bootcamp-overview/celebreite.png')}}" alt="">
                            <p class="academic-title">MCdns Academic Prowess</p>
                            <p class="academic-paragraph">By taking the course online, students can earn up to 17 CEU
                                credits and a certificate from Harvard CTME.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- why join this bootcamps --}}

{{-- MCdns Bootcamp Advantage --}}
<section class="ic-bootcamps-advantage bg-img-center-property ic-section-space-bottom"
    style="background-image: linear-gradient(180deg, rgba(0, 56, 91, 0.97) 1.2%, rgba(21, 141, 167, 0.97) 100%), url({{asset('new-frontendv1/images/bootcamp-overview/addvantage-bg.png')}})">
    <div class="container position-relative">

        <div class="header-bootcamp text-center">
            <h2 class="white">MCdns Bootcamp Advantage</h2>
        </div>
        <div class="row gx-3 gx-lg-4">
            <div class="col-md-6">
                <div class="ic-advance-boot">
                    <img src="{{asset('new-frontendv1/images/bootcamp-overview/portfolio-git.png')}}" class="img-fluid"
                        alt="bootcamp-overview">
                    <h4>Bootcamp Certificate</h4>
                    <ul>
                        <li>
                            <i class="ri-checkbox-multiple-fill"></i>
                            <span>Certificate from the Caltech Coding Bootcamp</span>
                        </li>
                        <li>
                            <i class="ri-checkbox-multiple-fill"></i>
                            <span>Transcript of the complete learning route</span>
                        </li>
                        <li>
                            <i class="ri-checkbox-multiple-fill"></i>
                            <span>Caltech CTME provides up to 17 continuing education units</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ic-advance-boot">
                    <img src="{{asset('new-frontendv1/images/bootcamp-overview/bootcamp-certificate.png')}}"
                        class="img-fluid" alt="bootcamp-overview">
                    <h4>Portfolio on Git</h4>
                    <ul>
                        <li>
                            <i class="ri-checkbox-multiple-fill"></i>
                            <span>Certificate from the Caltech Coding Bootcamp</span>
                        </li>
                        <li>
                            <i class="ri-checkbox-multiple-fill"></i>
                            <span>Transcript of the complete learning route</span>
                        </li>
                        <li>
                            <i class="ri-checkbox-multiple-fill"></i>
                            <span>Caltech CTME provides up to 17 continuing education units</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- MCdns Bootcamp Advantage --}}

{{-- machine learning bootcamps --}}
<section class="ic-section-space ic-machine-learning bg-img-center-property"
    style="background-image: url({{asset('new-frontendv1/images/machine-learning-bootcamps.png')}})">
    <div class="container">
        <div class="header-bootcamp text-center">
            <h2 class="black">MCdns Popular Bootcamps</h2>
        </div>
        <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-3 g-2 mb-50">
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
                        <div class="coach-names">
                            <p>James Bond</p>
                        </div>
                    </div>
                    <div class="ic-list-conetnt">
                        <p class="sub-title">Make Business Strategies and Applications</p>
                        <div class="list-conetnt-info">
                            <div class="bootcams-course-details">
                                <p><i class="ri-calendar-check-fill"></i> Course start 21 Feb, 2023</p>
                                <p><i class="ri-time-line"></i> Program Duration-4 Months</p>
                            </div>

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn bootcams-course-btn">
                        <a href="#" class="ic-btn-md">Details <i class="ri-arrow-right-line"></i></a>
                        <p><del>$100</del> $165.00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
                        <div class="coach-names">
                            <p>James Bond</p>
                        </div>
                    </div>
                    <div class="ic-list-conetnt">
                        <p class="sub-title">Make Business Strategies and Applications</p>
                        <div class="list-conetnt-info">
                            <div class="bootcams-course-details">
                                <p><i class="ri-calendar-check-fill"></i> Course start 21 Feb, 2023</p>
                                <p><i class="ri-time-line"></i> Program Duration-4 Months</p>
                            </div>

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn bootcams-course-btn">
                        <a href="#" class="ic-btn-md">Details <i class="ri-arrow-right-line"></i></a>
                        <p><del>$100</del> $165.00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
                        <div class="coach-names">
                            <p>James Bond</p>
                        </div>
                    </div>
                    <div class="ic-list-conetnt">
                        <p class="sub-title">Make Business Strategies and Applications</p>
                        <div class="list-conetnt-info">
                            <div class="bootcams-course-details">
                                <p><i class="ri-calendar-check-fill"></i> Course start 21 Feb, 2023</p>
                                <p><i class="ri-time-line"></i> Program Duration-4 Months</p>
                            </div>

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn bootcams-course-btn">
                        <a href="#" class="ic-btn-md">Details <i class="ri-arrow-right-line"></i></a>
                        <p><del>$100</del> $165.00</p>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
                        <div class="coach-names">
                            <p>James Bond</p>
                        </div>
                    </div>
                    <div class="ic-list-conetnt">
                        <p class="sub-title">Make Business Strategies and Applications</p>
                        <div class="list-conetnt-info">
                            <div class="bootcams-course-details">
                                <p><i class="ri-calendar-check-fill"></i> Course start 21 Feb, 2023</p>
                                <p><i class="ri-time-line"></i> Program Duration-4 Months</p>
                            </div>

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn bootcams-course-btn">
                        <a href="#" class="ic-btn-md">Details <i class="ri-arrow-right-line"></i></a>
                        <p><del>$100</del> $165.00</p>

                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="ic-btn-outline">Load More <i class="ri-loader-fill"></i></a>
        </div>
    </div>
</section>
{{-- machine learning bootcamps --}}

{{-- talent to form --}}
<section class="talented-form ic-section-space"
    style="background-image: linear-gradient(180deg, rgba(0, 56, 91, 0.97) 1.2%, rgba(21, 141, 167, 0.97) 100%)">
    <div class="container">
        <div class="row align-items-center g-4">
            <div class="col-lg-6">
                <div class="ic-talent-content">
                    <h2>Utilize your talent to form <span>the teams you need.</span></h2>
                    <p>This goes beyond your upcoming project. Organize your staff to provide results consistently and
                        more quickly. Reach out to us to become the next prosperous tale.</p>
                    <img src="{{asset('new-frontendv1/images/bootcamp/talent-form.png')}}" class="img-fluid"
                        alt="talent png">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ic-talent-form">
                    <h3>companies enrollment</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="#">First Name</label>
                                    <input type="text" class="form-control" placeholder="Type name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="#">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Type last name">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="#">Work Email</label>
                                    <input type="email" class="form-control" placeholder="example@mcdns.com">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-6">
                                <div class="form-group">
                                    <label for="#">Phone Numbers</label>
                                    <input type="number" class="form-control" placeholder="Type number">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="#">About Your Project</label>
                                    <input type="text" class="form-control"
                                        placeholder="Tell us more about your project">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="#">About Us</label>
                                    <input type="text" class="form-control" placeholder="How did you hear about us?">
                                </div>
                            </div>
                        </div>
                        <p class="ic-confirming-text">By confirming your email, you agree to our <a href="#">Terms of
                                Service</a> and that you have read and understood our <a href="#">Privacy Policy.</a>
                        </p>
                        <button class="ic-btn-simple w-100 rounded">Submit Now</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- talent to form --}}

{{-- overeseas students --}}
<section class="ic-overeseas-students ic-section-space bg-img-center-property"
    style="background-image: url({{asset('new-frontendv1/images/bootcamp-overview/overseas-students.png')}})">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-8 col-lg-7 col-md-7">
                <div class="ic-overeseas-text ">
                    <h2 class="pb-40">
                        <span>Top ten most popular Bootcamps</span>
                        <br> for overseas students
                    </h2>
                    <img src="{{asset('new-frontendv1/images/bootcamp-overview/overease-image.png')}}"
                        class="img-fluid overseas-students-img mb-40" alt="overease-image">
                    <p>Unlock the Potential of Your Team's Role-aligned Learning Paths, which map digital skills to
                        targeted learner outcomes.</p>
                </div>
            </div>
            <div class="col-xl-4 col-lg-5 col-md-5">
                <div class="ic-overeseas-links">
                    <ul>
                        <li>
                            <a href="#">
                                Business Studies
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Software Development
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                General Business
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Management Studies
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Computer Science
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                AI & Machine Learning
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                Business Intelligence
                            </a>
                        </li>
                    </ul>
                    <a href="#" class="ic-explore-btn mt-40">Explore More <img
                            src="{{asset('new-frontendv1/images/bootcamp-overview/long-arrows.png')}}" class="img-fluid"
                            alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- overeseas students --}}

{{-- active goal --}}
<section class="ic-ahieve-section ic-section-space "
    style="background-image: linear-gradient(180deg, rgba(0, 56, 91, 0.97) 1.2%, rgba(21, 141, 167, 0.97) 100%)">
    <div class="container">
        <div class="ic-headers text-center">
            <h2 class="white">Achieve Your Goals</h2>
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
                                <a href="#" class="ic-btn">Become A Coach</a>
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
{{-- active goal --}}
@endsection

@push('scripts')
{{-- <script src="{{ asset('frontend/js/price_range_script.js') }}"></script> --}}
@endpush