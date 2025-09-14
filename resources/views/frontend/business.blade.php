@extends('layouts.master')

@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part ic_v1_inner-part ic-section-space"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)),  url({{ asset('/new-frontend/images/business.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="ic-heading-title mb-15">Business</span>
                        <h1 class="black pb-15 ic-inner-heading">MCdns For Business
                        </h1>
                        <div class="row">
                            <div class="col-xxl-11 col-lg-12">
                                <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of printing and typesetting.</p>
                                <div class="ic-video-programs">
                                    <a href="{{ route('frontend.contact') }}" class="ic-btn-simple">Contact Us <i
                                            class="ri-arrow-right-line"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-right-side-img">
                        <img src="{{ asset('new-frontendv1/images/for-business.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- banner part end --}}

    {{-- Our partner --}}
    <section class="ic-partner-section ic-section-space"
        style="background-image: url({{ asset('new-frontendv1/images/business-trusted.png') }})">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-lg-4">
                    <div class="our-p-text">
                        <h3 class="white">Our Partner Trusted by Enterprises Across The Globe</h3>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="our-mini-text">
                        <p class="fs-18 white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard...</p>
                    </div>
                </div>
            </div>
            <div class="ic-gaient-company">
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/trusted-1.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/trusted-2.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/amazon.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/trusted-4.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/trusted-5.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/trusted-6.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/trusted-8.png') }}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>
    {{-- Our partner --}}

    {{-- learning bootcamp --}}
    <section class="ic-power-learning ic-section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="ic-learning-bootcam-content">
                        <h2 class="black pb-4">The Power of MCdns Learning Bootcamp</h2>
                        <p class="color-deep-gray pb-15 paragraph-text">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry. Lorem Ipsum has been
                            the industry's standard...</p>
                        <p class="black fs-20 fw-500 pb-15">That’s why MCdns Learning Bootcamp provides:</p>
                        <ul>
                            <li>
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 5.5C11 8.53757 8.53757 11 5.5 11C2.46243 11 0 8.53757 0 5.5C0 2.46243 2.46243 0 5.5 0C8.53757 0 11 2.46243 11 5.5Z"
                                        fill="url(#paint0_linear_3627_7882)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_3627_7882" x1="5.5" y1="0"
                                            x2="5.5" y2="11" gradientUnits="userSpaceOnUse">
                                            <stop offset="0.0001" stop-color="#2EB7D3" />
                                            <stop offset="1" stop-color="#06738A" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <span class="color-deep-gray">Live virtual classes taught by industry experts</span>
                            </li>
                            <li>
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 5.5C11 8.53757 8.53757 11 5.5 11C2.46243 11 0 8.53757 0 5.5C0 2.46243 2.46243 0 5.5 0C8.53757 0 11 2.46243 11 5.5Z"
                                        fill="url(#paint0_linear_3627_7882)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_3627_7882" x1="5.5" y1="0"
                                            x2="5.5" y2="11" gradientUnits="userSpaceOnUse">
                                            <stop offset="0.0001" stop-color="#2EB7D3" />
                                            <stop offset="1" stop-color="#06738A" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <span class="color-deep-gray">Cohort based learning with peer-to-peer interaction</span>
                            </li>
                            <li>
                                <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M11 5.5C11 8.53757 8.53757 11 5.5 11C2.46243 11 0 8.53757 0 5.5C0 2.46243 2.46243 0 5.5 0C8.53757 0 11 2.46243 11 5.5Z"
                                        fill="url(#paint0_linear_3627_7882)" />
                                    <defs>
                                        <linearGradient id="paint0_linear_3627_7882" x1="5.5" y1="0"
                                            x2="5.5" y2="11" gradientUnits="userSpaceOnUse">
                                            <stop offset="0.0001" stop-color="#2EB7D3" />
                                            <stop offset="1" stop-color="#06738A" />
                                        </linearGradient>
                                    </defs>
                                </svg>
                                <span class="color-deep-gray">Capstone projects involving real world data sets with virtual
                                    labs for
                                    hands-on learning</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ic-learning-bootcam-img">
                        <img src="{{ asset('new-frontend/images/learn-imgage.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- learning bootcamp --}}

    {{-- unlock potential --}}
    <section class="ic-unloack-potential ic-section-space"
        style="background-image: url({{ asset('new-frontendv1/images/unlock.png') }})">
        <div class="container">
            <div class="ic-headers text-center">
                <p class="ic-borderWith-whiteBg mb-15">Unlock Potential</p>
                <h2 class="black pb-10"><span class="primary">Unlock</span> Your Team's Potential</h2>
                <p class="color-deep-gray">Role-aligned learning paths that map digital skills to desired learner outcomes.
                </p>
            </div>
            <div class="table-responsive">
                <div class="ic-technology-part">
                    <div class="ic-technology-items">
                        <p>Technology</p>
                        <ul>
                            <li>
                                <a href="#">
                                    Cloud Computing
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Cyber Security
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Software Development
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Devops
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="ic-technology-items">
                        <p>Data and AI</p>
                        <ul>
                            <li>
                                <a href="#">
                                    Business Intelligence
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    AI & Machine Learning
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Big Data
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Cloud Solution Architect
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="ic-technology-items">
                        <p>Digital Business</p>
                        <ul>
                            <li>
                                <a href="#">
                                    Digital Marketing
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Cloud Solution Architect
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Cloud Solution Architect
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Cloud Solution Architect
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="ic-technology-items">
                        <p>Digital Operations</p>
                        <ul>
                            <li>
                                <a href="#">
                                    Cloud Solution Architect
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Cloud Solution Architect
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Cloud Solution Architect
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Cloud Solution Architect
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <h3 class="potential-text fw-500 black text-center fs-30 pt-30">Comprehensive programs aligned with
                        leading certification bodies universities, and corporate partners.</h3>
                </div>
            </div>
            <div class="ic-gaient-company">
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/universities-1.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/universities-2.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/universities-3.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/universities-4.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/universities-5.png') }}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>
    {{-- unlock potential --}}

    {{--  --}}
    <section class="ic-healthcare-ceares ic-section-space"
        style="background-image: linear-gradient(180deg, rgba(0, 56, 91, 0.97) 1.2%, rgba(21, 141, 167, 0.97) 100%), url('{{ asset('new-frontend/images/features-names-heads.png') }}')">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6">
                    <div class="ic-healthcare-ceares-items">
                        <img src="{{ asset('new-frontendv1/images/health-1.png') }}" class="img-fluid" alt="">
                        <h4>healthcare</h4>
                        <p>We are team and we are Great. And Simple With shored.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-healthcare-ceares-items">
                        <img src="{{ asset('new-frontendv1/images/health-2.png') }}" class="img-fluid" alt="">
                        <h4>Public Sector</h4>
                        <p>We are team and we are Great. And Simple With shored.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-healthcare-ceares-items">
                        <img src="{{ asset('new-frontendv1/images/health-3.png') }}" class="img-fluid" alt="">
                        <h4>Insurance & Financial</h4>
                        <p>We are team and we are Great. And Simple With shored.</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-healthcare-ceares-items">
                        <img src="{{ asset('new-frontendv1/images/health-4.png') }}" class="img-fluid" alt="">
                        <h4>higher education</h4>
                        <p>We are team and we are Great. And Simple With shored.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- maps --}}
    <section class="maps ic-section-space">
        <div class="container">
            <div class="ic-headers text-center">
                <p class="ic-borderWith-whiteBg mb-15">Around the Globe</p>
                <h2 class="black pb-10"><span class="primary">we Are doing</span> business across the world.</h2>
            </div>
            <div class="ic-maps-main position-relative">
                <img src="{{ asset('new-frontend/images/maps-bg.png') }}" class="img-fluid" alt="">
                {{-- <div class="maps-locate">
                    <img src="{{ asset('new-frontend/images/maps-point.png') }}" alt="">
                    <img src="{{ asset('new-frontend/images/flag-circle-1.png') }}" class="ic-maps-flag" alt="">
                    <div class="ic-location-info">
                        <img src="{{asset('new-frontend/images/flag-show-1.png')}}" alt="">
                        <div>
                            <p class="fs-14 fw-500 black">United States</p>
                            <span class="">The national flag of the United States of America </span>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </section>
    {{-- maps --}}

    {{-- tailored-solutions --}}
    <section class="ic-tailored-solutions ic-section-space"
        style="background-image: linear-gradient(180deg, rgba(0, 56, 91, 0.97) 1.2%, rgba(21, 141, 167, 0.97) 100%), url({{ asset('/new-frontend/images/tailored-solutions-banner.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto">
                    <div class="ic-headers text-center">
                        <p class="ic-borderWith-whiteBg mb-15">Solutions</p>
                        <h2 class="white pb-3">Tailored Solutions</h2>
                        <p class="white">Our implementation consultants will design a training program for your business’s
                            unique digital transformation journey to address your team’s skills gaps.</p>
                    </div>
                </div>
            </div>
            <div class="ic-tailored-main">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="ic-tailored-items">
                            <div class="ic-t-icons">
                                <img src="{{ asset('/new-frontend/images/setting.png') }}" alt="">
                            </div>
                            <h4>Upskilling And Level-Setting</h4>
                            <ul>
                                <li>
                                    <i class="ri-check-line"></i>
                                    Build latest language capabilities & skill sets
                                </li>
                                <li>
                                    <i class="ri-check-line"></i>
                                    Align skilling to your development plans
                                </li>
                                <li>
                                    <i class="ri-check-line"></i>
                                    Upskill is a peer to peer skill sharing platform
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ic-tailored-items">
                            <div class="ic-t-icons">
                                <img src="{{ asset('/new-frontend/images/hires.png') }}" alt="">
                            </div>
                            <h4>Onboarding New Hires</h4>
                            <ul>
                                <li>
                                    <i class="ri-check-line"></i>
                                    Build latest language capabilities & skill sets
                                </li>
                                <li>
                                    <i class="ri-check-line"></i>
                                    Align skilling to your development plans
                                </li>
                                <li>
                                    <i class="ri-check-line"></i>
                                    Upskill is a peer to peer skill sharing platform
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ic-tailored-items">
                            <div class="ic-t-icons">
                                <img src="{{ asset('/new-frontend/images/learn.png') }}" alt="">
                            </div>
                            <h4>Onboarding New Hires</h4>
                            <ul>
                                <li>
                                    <i class="ri-check-line"></i>
                                    Build latest language capabilities & skill sets
                                </li>
                                <li>
                                    <i class="ri-check-line"></i>
                                    Align skilling to your development plans
                                </li>
                                <li>
                                    <i class="ri-check-line"></i>
                                    Upskill is a peer to peer skill sharing platform
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- tailored-solutions --}}

    {{-- Advantages --}}
    <section class="ic-advantages ic-section-space"
        style="background-image: url({{ asset('new-frontendv1/images/advantages-bg.png') }})">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-7 m-auto">
                    <div class="ic-headers text-center">
                        <p class="ic-borderWith-whiteBg mb-15">Advantages</p>
                        <h2 class="black"><span class="primary">MCdns</span> Learning an Advantages</h2>
                        <p class="color-deep-gray">Our implementation consultants will design a training program for your
                            business’s
                            unique digital transformation journey to address your team’s skills gaps.</p>
                    </div>
                </div>
            </div>
            <div class="ic-advantages-main">
                <div class="row g-4">
                    <div class="col-lg-4">
                        <div class="ic-advantages-items">
                            <div class="ic-a-icons">
                                <img src="{{ asset('/new-frontend/images/profit.png') }}" alt="">
                            </div>
                            <h4 class="baclk">High-engagement, outcome-centric learning</h4>
                            <p class="color-deep-gray">Live virtual classrooms, mentoring sessions, han-on projects, and
                                interactive
                                labs drive learner outcomes Lorem Ipsum has been the industry's standard dummy text ever
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ic-advantages-items">
                            <div class="ic-a-icons">
                                <img src="{{ asset('/new-frontend/images/profit.png') }}" alt="">
                            </div>
                            <h4 class="baclk">High-engagement, outcome-centric learning</h4>
                            <p class="color-deep-gray">Live virtual classrooms, mentoring sessions, han-on projects, and
                                interactive
                                labs drive learner outcomes Lorem Ipsum has been the industry's standard dummy text ever
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ic-advantages-items">
                            <div class="ic-a-icons">
                                <img src="{{ asset('/new-frontend/images/profit.png') }}" alt="">
                            </div>
                            <h4 class="baclk">High-engagement, outcome-centric learning</h4>
                            <p class="color-deep-gray">Live virtual classrooms, mentoring sessions, han-on projects, and
                                interactive
                                labs drive learner outcomes Lorem Ipsum has been the industry's standard dummy text ever
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Advantages --}}

    {{-- feature --}}
    <section class="ic-enterprise-feature ic-section-space"
        style="background-image: url('{{ asset('new-frontendv1/images/enterprise-features-v1.png') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto">
                    <div class="ic-headers text-center">
                        <p class="ic-borderWith-whiteBg mb-15">Features</p>
                        <h2 class="black pb-3"><span class="primary">MCdns</span> Enterprise Featuress</h2>
                        <p class="color-deep-gray">Our Enterprise upskilling solution combines immersive hands-on learning,
                            high
                            quality content, 24x7 support, robust reporting, and technical integrations.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 m-auto position-relative">
                    <div class="ic-enterprise-mainslider">
                        <div class="ic-enterprise-items">
                            <div class="ic-icon-names">
                                <div class="icons">
                                    <img src="{{ asset('new-frontend/images/features-1.png') }}" alt="">
                                </div>
                                <p class="fs-22 fw-500 black">Immersive Learning Experience</p>
                            </div>
                            <ul>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Integrated labs and assessments
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Online digital bootcamp
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Access from anywhere, using any device
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Mentoring sessions
                                </li>
                            </ul>
                        </div>
                        <div class="ic-enterprise-items">
                            <div class="ic-icon-names">
                                <div class="icons">
                                    <img src="{{ asset('new-frontend/images/features-1.png') }}" alt="">
                                </div>
                                <p class="fs-22 fw-500 black">Immersive Learning Experience</p>
                            </div>
                            <ul>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Integrated labs and assessments
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Online digital bootcamp
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Access from anywhere, using any device
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Mentoring sessions
                                </li>
                            </ul>
                        </div>
                        <div class="ic-enterprise-items">
                            <div class="ic-icon-names">
                                <div class="icons">
                                    <img src="{{ asset('new-frontend/images/features-1.png') }}" alt="">
                                </div>
                                <p class="fs-22 fw-500 black">Immersive Learning Experience</p>
                            </div>
                            <ul>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Integrated labs and assessments
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Online digital bootcamp
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Access from anywhere, using any device
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Mentoring sessions
                                </li>
                            </ul>
                        </div>
                        <div class="ic-enterprise-items">
                            <div class="ic-icon-names">
                                <div class="icons">
                                    <img src="{{ asset('new-frontend/images/features-1.png') }}" alt="">
                                </div>
                                <p class="fs-22 fw-500 black">Immersive Learning Experience</p>
                            </div>
                            <ul>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Integrated labs and assessments
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Online digital bootcamp
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Access from anywhere, using any device
                                </li>
                                <li>
                                    <i class="ri-check-double-line"></i>
                                    Mentoring sessions
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ic-slider-arrows ic-enterprise-features-btn">
                        <button class="ic-enterprise-1"><i class="ri-arrow-left-line"></i></button>
                        <button class="ic-enterprise-2"><i class="ri-arrow-right-line"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- feature --}}
    <section class="ic-enroll-employee ic-section-space"
        style="background-image: url({{ asset('new-frontendv1/images/employees-bg.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="ic-enroll-employee-img">
                        <img src="{{ asset('new-frontend/images/enroll-images-img.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="ic-enroll-employee-text">
                        <h2><span class="primary">Enroll your</span> employees today to upskill their knowledges.</h2>
                        <form method="POST" id="bookDemoForm" class="ic-enroll-employes-forms">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" name="first_name" class="form-control"
                                                placeholder="First Name">
                                            <i class="ri-user-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" name="last_name" class="form-control"
                                                placeholder="Last Name">
                                            <i class="ri-user-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Business Email">
                                            <i class="ri-mail-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="number" name="phone" class="form-control"
                                                placeholder="Phone Number">
                                            <i class="ri-mail-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" name="company_name" class="form-control"
                                                placeholder="Company Name">
                                            <i class="ri-briefcase-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="number" name="company_size" class="form-control"
                                                placeholder="Company Size">
                                            <i class="ri-briefcase-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" name="about_us" class="form-control"
                                                placeholder="How did you find us">
                                            <i class="ri-file-search-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" name="comment" class="form-control"
                                                placeholder="Would you like to schedule a meeting with us, and if yes">
                                            <i class="ri-calendar-todo-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <button class="ic-btn w-100 rounded">Request Send For Discuss</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- api pricing --}}
    <section class="ic-api-pricing-divs ic-section-space" id="pricing-section"
        style="background-image: linear-gradient(180deg, rgba(0, 56, 91, 0.97) 1.2%, rgba(21, 141, 167, 0.97) 100%), url({{ asset('new-frontend/images/pricing-bg.png') }});">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 m-auto">
                    <div class="ic-headers text-center">
                        <h2 class="white pb-3">MCdns API Pricing</h2>
                        <p class="white">To use the PropertyData API you simply need to sign up for an API account instead
                            of a regular account. Our API plans are very competitively priced and the price per call falls
                            as the volume increases. API accounts include 40 credits per month to use on the web app for
                            data discovery</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 m-auto">
                    <div class="ic-subscription-plan">
                        <ul class="subscription-tabs">
                            <li>
                                <input type="radio" name="subscription" id="monthly" checked>
                                <label for="monthly" data-link="busbiess-link-1" class="api-link">
                                    Monthly Plan
                                </label>
                            </li>
                            <li>
                                <input type="radio" class="" name="subscription" id="yearly">
                                <label for="yearly" data-link="busbiess-link-2" class="api-link">
                                    Annual Plan
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="ic-business-api-tabs business-tabs">
                        <div class="ic-api-pricing-tables business-items active" id="busbiess-link-1">
                            @forelse ($monthlyApiPlans as $item)
                                <div class="ic-api-pricing-items">
                                    <ul>
                                        <li>
                                            <p class="basic-name"> {{ $item->title }} </p>
                                        </li>
                                        <li>
                                            <p class="price">${{ $item->price }} <span>/Month</span></p>
                                        </li>
                                        <li>
                                            <span class="call-month">{{ $item->call_limit }} Api Call</span>
                                        </li>
                                        {{-- <li>
                                        <span class="call">= 1.35p/call</span>
                                    </li> --}}
                                        <li>
                                            <span data-api_plan_id="{{ $item->id }}"
                                                data-api_plan_type="{{ API_MONTHLY }}"
                                                data-route="{{ route('addToCart') }}" class="ic-btn addToCart"><i
                                                    class="ri-shopping-cart-2-line"></i> Add
                                                To Cart</span>
                                        </li>
                                    </ul>
                                </div>
                            @empty
                                <x-frontend.data-notfound></x-frontend.data-notfound>
                            @endforelse
                        </div>
                        <div class="ic-api-pricing-tables business-items" id="busbiess-link-2">
                            @forelse ($yearlyApiPlans as $item)
                                <div class="ic-api-pricing-items">
                                    <ul>
                                        <li>
                                            <p class="basic-name"> {{ $item->title }} </p>
                                        </li>
                                        <li>
                                            <p class="price">${{ $item->price }} <span>/Year</span></p>
                                        </li>
                                        <li>
                                            <span class="call-month">{{ $item->call_limit }} Api Call</span>
                                        </li>
                                        {{-- <li>
                                        <span class="call">= 1.35p/call</span>
                                    </li> --}}
                                        <li>
                                            <span data-api_plan_id="{{ $item->id }}"
                                                data-api_plan_type="{{ API_YEARLY }}"
                                                data-route="{{ route('addToCart') }}" class="ic-btn addToCart"><i
                                                    class="ri-shopping-cart-2-line"></i> Add
                                                To Cart</span>
                                        </li>
                                    </ul>
                                </div>
                            @empty
                                <x-frontend.data-notfound></x-frontend.data-notfound>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- api pricing --}}

    {{-- mcdns resourse --}}
    <section class="ic-mcdns-resourse ic-section-space"
        style="background-image: url({{ asset('new-frontendv1/images/tech-bg.png') }})">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-3 col-md-6">
                    <div class="ic-mcdns-resource-items">
                        <div class="ic-resourse-icon">
                            <img src="{{ asset('new-frontendv1/images/mc-course.png') }}" alt="">
                        </div>
                        <p class="fs-20 fw-500 title pb-2 primary">MCdns Course API</p>
                        <p class="fw-300 gray para-text">Donec mi lorem, consequat a quam nec, pellentesque pulvinar sem.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-mcdns-resource-items">
                        <div class="ic-resourse-icon">
                            <img src="{{ asset('new-frontendv1/images/mc-course.png') }}" alt="">
                        </div>
                        <p class="fs-20 fw-500 title pb-2 primary">Bootcamps API</p>
                        <p class="fw-300 gray para-text">Donec mi lorem, consequat a quam nec, pellentesque pulvinar sem.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-mcdns-resource-items">
                        <div class="ic-resourse-icon">
                            <img src="{{ asset('new-frontendv1/images/playground-img.png') }}" alt="">
                        </div>
                        <p class="fs-20 fw-500 title pb-2 primary">MCdns Playground API</p>
                        <p class="fw-300 gray para-text">Donec mi lorem, consequat a quam nec, pellentesque pulvinar sem.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-mcdns-resource-items">
                        <div class="ic-resourse-icon">
                            <img src="{{ asset('new-frontendv1/images/exams.png') }}" alt="">
                        </div>
                        <p class="fs-20 fw-500 title pb-2 primary">MCdns Exams API</p>
                        <p class="fw-300 gray para-text">Donec mi lorem, consequat a quam nec, pellentesque pulvinar sem.
                        </p>
                    </div>
                </div>
            </div>
            <div class="ic-used-companies">
                <div class="row g-4">
                    <div class="col-lg-5">
                        <div class="ic-tech-companies-logos">
                            <h3><span class="primary">Used by hundreds</span> of tech companies including</h3>
                            <p>A startup or start-up is started by individual founders or entrepreneurs</p>
                            <div class="ic-video-programs pt-30">
                                <a href="{{ route('api.docs') }}" class="ic-btn">API Documentation <i
                                        class="ri-arrow-right-line"></i></a>
                                <a href="{{ route('api.dashboard') }}" class="ic-btn-outline">Get API Keys <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 offset-lg-1">
                        <div class="ic-logos-hundres">
                            <div class="ic-hundres-items">
                                <img src="{{ asset('new-frontend/images/hundreds-1.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="ic-hundres-items">
                                <img src="{{ asset('new-frontend/images/hundreds-2.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="ic-hundres-items">
                                <img src="{{ asset('new-frontend/images/hundreds-3.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="ic-hundres-items">
                                <img src="{{ asset('new-frontend/images/hundreds-4.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="ic-hundres-items">
                                <img src="{{ asset('new-frontend/images/hundreds-5.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="ic-hundres-items">
                                <img src="{{ asset('new-frontend/images/hundreds-6.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="ic-hundres-items">
                                <img src="{{ asset('new-frontend/images/hundreds-7.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="ic-hundres-items">
                                <img src="{{ asset('new-frontend/images/hundreds-8.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- mcdns resourse --}}

    {{-- user testimonial --}}
    <section class="ic-user-testimonial ic-section-space"
        style="background-image: linear-gradient(180deg, rgba(0, 56, 91, 0.97) 1.2%, rgba(21, 141, 167, 0.97) 100%),  url('{{ asset('new-frontend/images/enterprise-featurees-bg.png') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 m-auto">
                    <div class="ic-headers text-center">
                        <p class="ic-borderWith-whiteBg mb-15"> Testimonials </p>
                        <h2 class="white">Clients Testimonials For API Service</h2>
                    </div>
                </div>
            </div>
            <div class="position-relative userTestiminial">
                <div class="ic-userTestiminial-slier">
                    @forelse ($reviews as $review)
                    <div class="ic-userTestiminial-items">
                        <div class="ic-img-with-name">
                            <img src="{{ asset('new-frontend/images/client-img.png') }}" alt="">
                            <div>
                                <p class="names">{{ $review->user->full_name }}</p>
                                {{-- <p class="desi">Chief Chairman of <span>Netflix</span></p> --}}
                            </div>
                        </div>
                        <p class="dis">
                            {{ $review->comment }}
                        </p>
                        {{-- <img src="{{ asset('new-frontend/images/company-6.png') }}" class="client-logos" alt=""> --}}
                    </div>
                    @empty
                        
                    @endforelse
                   
                </div>
                <div class="ic-slider-arrows ic-enterprise-features-btn">
                    <button class="ic-enterprise-one"><i class="ri-arrow-left-line"></i></button>
                    <button class="ic-enterprise-two"><i class="ri-arrow-right-line"></i></button>
                </div>
            </div>

        </div>
    </section>
    {{-- user testimonial --}}

    {{-- faq --}}
    <section class="ic__business-faq ic-section-space"
        style="background-image: url({{ asset('new-frontendv1/images/faq-bg.png') }})">
        <div class="container">
            <div class="ic__faq--part">
                <div class="ic-headers text-center">
                    <p class="ic-borderWith-whiteBg mb-15">FAQ</p>
                    <h2 class="black">Frequently Asked<span class="primary"> Questions</span></h2>
                </div>
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="ic__according">
                            <div class="accordion" id="accordionExample">
                                <div class="ic-accordion-item">
                                    <div class="accordion-header" id="headingOne">
                                        <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapseOne" aria-expanded="true"
                                            aria-controls="collapseOne">
                                            How do I pay for the Essentials or Premium plan?
                                        </button>
                                    </div>
                                    <div id="collapseOne" class="accordion-collapse collapse show"
                                        aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                                Lorem
                                                Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                                an
                                                unknown printer took a galley of type and scrambled it to make a type
                                                specimen book.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="ic-accordion-item">
                                    <div class="accordion-header" id="headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                            aria-controls="collapseTwo">
                                            Can I cancel my Essentials or Premium plan subscription at any time?
                                        </button>
                                    </div>
                                    <div id="collapseTwo" class="accordion-collapse collapse"
                                        aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the second item's accordion body.</strong> It is hidden by
                                            default,
                                            until the collapse plugin adds the appropriate classes that we use to style each
                                            element. These classes control the overall appearance, as well as the showing
                                            and hiding
                                            via CSS transitions. You can modify any of this with custom CSS or overriding
                                            our
                                            default variables. It's also worth noting that just about any HTML can go within
                                            the
                                            <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                                <div class="ic-accordion-item">
                                    <div class="accordion-header" id="headingThree">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                            aria-expanded="false" aria-controls="collapseThree">
                                            We need to add new users to our team. How will that be billed?
                                        </button>
                                    </div>
                                    <div id="collapseThree" class="accordion-collapse collapse"
                                        aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <strong>This is the third item's accordion body.</strong> It is hidden by
                                            default, until
                                            the collapse plugin adds the appropriate classes that we use to style each
                                            element.
                                            These classes control the overall appearance, as well as the showing and hiding
                                            via CSS
                                            transitions. You can modify any of this with custom CSS or overriding our
                                            default
                                            variables. It's also worth noting that just about any HTML can go within the
                                            <code>.accordion-body</code>, though the transition does limit overflow.
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- faq --}}

    {{-- active goal --}}
    <x-frontend.achieve-goals></x-frontend.achieve-goals>
    {{-- active goal --}}
@endsection

@push('scripts')
    <script src="{{ asset('frontend/js/addToCart.js') }}"></script>
    <script>
        // The following example creates five accessible and
        // focusable markers.
        // function initialize(){
        //     var map = new google.maps.Map(document.getElementById('map'), {
        //     zoom: 16,
        //     center: {
        //         lat: 45.4215296,
        //         lng: -75.6971931
        //     },
        //     mapTypeId: google.maps.MapTypeId.ROADMAP
        // });
        // }

        var directionsDisplay,
            directionsService,
            map;

        function initialize() {
            var directionsService = new google.maps.DirectionsService();
            directionsDisplay = new google.maps.DirectionsRenderer();
            var chicago = new google.maps.LatLng(41.850033, -87.6500523);
            var mapOptions = {
                zoom: 7,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                center: chicago
            }
            map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);
            directionsDisplay.setMap(map);
        }
        // Book your demo
        const BookYourDemoURL = '{{ route('bookYourDemo') }}';

        $('#bookDemoForm').on('submit', function(event) {
            event.preventDefault();

            let formData = new FormData(this);
            let csrfToken = $('meta[name="csrf-token"]').attr('content');

            axios.post(BookYourDemoURL, formData, {
                    headers: {
                        'Content-Type': 'multipart/form-data',
                        'X-CSRF-TOKEN': csrfToken
                    }
                })
                .then(function(response) {
                    toastr.success(response.data.msg);
                    $('#bookDemoForm')[0].reset();
                }).catch(function(error) {
                    toastr.error(error);
                    console.log(error);
                });
        });
    </script>
@endpush
