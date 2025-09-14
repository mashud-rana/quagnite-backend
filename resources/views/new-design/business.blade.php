@extends('layouts.master')

@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part"
        style="background-image:  linear-gradient(96.65deg, rgba(231, 237, 238, 0.99) 15.92%, rgba(231, 237, 238, 0.92) 40.21%, rgba(231, 237, 238, 0.56) 52.6%, rgba(231, 237, 238, 0) 63.52%),  url({{ asset('/new-frontend/images/business.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="d-block fs-20 black">Business</span>
                        <h1 class="black pb-15">MCdns For Business
                        </h1>
                        <div class="row">
                            <div class="col-xxl-10 col-lg-12">
                                <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of printing and typesetting.</p>
                                <div class="ic-video-programs">
                                    <a href="#" class="ic-btn">Ask The Community </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- banner part end --}}


    {{-- Our partner --}}
    <section class="ic-partner-section ic-section-space">
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
                        <img src="{{ asset('new-frontend/images/youtube.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/slack.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/amazon.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/microsoft.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/lenovo.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/dribbble.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/google1.png') }}" alt="">
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
                                <span class="color-deep-gray">Capstone projects involving real world data sets with virtual labs for
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
    <section class="ic-unloack-potential bg-shade ic-section-space">
        <div class="container">
            <div class="ic-headers text-center">
                <p class="ic-borderWith-whiteBg mb-15">Unlock Potential</p>
                <h2 class="black pb-10"><span class="primary">Unlock</span> Your Team's Potential</h2>
                <p class="color-deep-gray">Role-aligned learning paths that map digital skills to desired learner outcomes.</p>
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
                        <img src="{{ asset('new-frontend/images/youtube.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/slack.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/amazon.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/microsoft.png') }}" alt="">
                    </div>
                </a>
                <a href="#">
                    <div class="ic-gaient">
                        <img src="{{ asset('new-frontend/images/lenovo.png') }}" alt="">
                    </div>
                </a>
            </div>
        </div>
    </section>
    {{-- unlock potential --}}

    {{-- maps --}}
    <section class="maps ic-section-space bg-white">
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
        style="background-image: linear-gradient(68.6deg, rgba(6, 115, 138, 0.95) -11.83%, rgba(42, 166, 192, 0.95) 96.57%), url({{ asset('/new-frontend/images/tailored-solutions-banner.png') }})">
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
    <section class="ic-advantages ic-section-space">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-7 m-auto">
                    <div class="ic-headers text-center">
                        <p class="ic-borderWith-whiteBg mb-15">Advantages</p>
                        <h2 class="black"><span class="primary">MCdns</span> Learning an Advantages</h2>
                        <p class="color-deep-gray">Our implementation consultants will design a training program for your business’s
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
                            <p class="color-deep-gray">Live virtual classrooms, mentoring sessions, han-on projects, and interactive
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
                            <p class="color-deep-gray">Live virtual classrooms, mentoring sessions, han-on projects, and interactive
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
                            <p class="color-deep-gray">Live virtual classrooms, mentoring sessions, han-on projects, and interactive
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
        style="background-image: linear-gradient(0deg, rgba(243, 243, 243, 0.98), rgba(243, 243, 243, 0.98)),  url('{{ asset('new-frontend/images/enterprise-featurees-bg.png') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-auto">
                    <div class="ic-headers text-center">
                        <p class="ic-borderWith-whiteBg mb-15">Features</p>
                        <h2 class="black pb-3"><span class="primary">MCdns</span> Enterprise Featuress</h2>
                        <p class="color-deep-gray">Our Enterprise upskilling solution combines immersive hands-on learning, high
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
    <section class="ic-enroll-employee bg-white ic-section-space">
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
                        <form action="#" class="ic-enroll-employes-forms">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" class="form-control" placeholder="Full Name">
                                            <i class="ri-user-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="email" class="form-control" placeholder="Business Email">
                                            <i class="ri-mail-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="number" class="form-control" placeholder="Phone Number">
                                            <i class="ri-mail-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="number" class="form-control" placeholder="Company Name">
                                            <i class="ri-briefcase-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" class="form-control"
                                                placeholder="Company activity Or type">
                                            <i class="ri-briefcase-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" class="form-control"placeholder="Company Website">
                                            <i class="ri-global-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" class="form-control"
                                                placeholder="Course Desired to Study">
                                            <i class="ri-git-repository-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <select name="" class="selectpicker" id="">
                                                <option value="0">How did you find us</option>
                                            </select>
                                            <i class="ri-file-search-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <select name="" class="selectpicker" id="">
                                                <option value="0">Number of seats desired</option>
                                                <option value="0">Number 1</option>
                                            </select>
                                            <i class="ri-bar-chart-fill"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" class="form-control"
                                                placeholder="Desired starting date of training">
                                            <i class="ri-calendar-check-line"></i>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <div class="position-relative">
                                            <input type="text" class="form-control"
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
    <section class="ic-api-pricing-divs ic-section-space"
        style="background-image: linear-gradient(68.6deg, rgba(6, 115, 138, 0.95) -11.83%, rgba(42, 166, 192, 0.95) 96.57%), url({{ asset('new-frontend/images/pricing-bg.png') }});">
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
                                <input type="radio" name="subscription" id="monthly">
                                <label for="monthly" class="active">
                                    Monthly Plan
                                </label>
                            </li>
                            <li>
                                <input type="radio" class="" name="subscription" id="yearly">
                                <label for="yearly">
                                    Annual Plan
                                </label>
                            </li>
                        </ul>
                    </div>
                    <div class="ic-api-pricing-tables">
                        <div class="ic-api-pricing-items">
                            <ul>
                                <li>
                                    <p class="basic-name">Basic API</p>
                                </li>
                                <li>
                                    <p class="price">$27 <span>/Month</span></p>
                                </li>
                                <li>
                                    <span class="call-month">2,000calls /month</span>
                                </li>
                                <li>
                                    <span class="call">= 1.35p/call</span>
                                </li>
                                <li>
                                    <a href="#" class="ic-btn">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ic-api-pricing-items">
                            <ul>
                                <li>
                                    <p class="basic-name">Basic API</p>
                                </li>
                                <li>
                                    <p class="price">$27 <span>/Month</span></p>
                                </li>
                                <li>
                                    <span class="call-month">2,000calls /month</span>
                                </li>
                                <li>
                                    <span class="call">= 1.35p/call</span>
                                </li>
                                <li>
                                    <a href="#" class="ic-btn">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ic-api-pricing-items">
                            <ul>
                                <li>
                                    <p class="basic-name">Basic API</p>
                                </li>
                                <li>
                                    <p class="price">$27 <span>/Month</span></p>
                                </li>
                                <li>
                                    <span class="call-month">2,000calls /month</span>
                                </li>
                                <li>
                                    <span class="call">= 1.35p/call</span>
                                </li>
                                <li>
                                    <a href="#" class="ic-btn">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ic-api-pricing-items">
                            <ul>
                                <li>
                                    <p class="basic-name">Basic API</p>
                                </li>
                                <li>
                                    <p class="price">$27 <span>/Month</span></p>
                                </li>
                                <li>
                                    <span class="call-month">2,000calls /month</span>
                                </li>
                                <li>
                                    <span class="call">= 1.35p/call</span>
                                </li>
                                <li>
                                    <a href="#" class="ic-btn">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                        <div class="ic-api-pricing-items">
                            <ul>
                                <li>
                                    <p class="basic-name">Basic API</p>
                                </li>
                                <li>
                                    <p class="price">$27 <span>/Month</span></p>
                                </li>
                                <li>
                                    <span class="call-month">2,000calls /month</span>
                                </li>
                                <li>
                                    <span class="call">= 1.35p/call</span>
                                </li>
                                <li>
                                    <a href="#" class="ic-btn">Sign Up</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- api pricing --}}

    {{-- mcdns resourse --}}
    <section class="ic-mcdns-resourse bg-white ic-section-space">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-3 col-md-6">
                    <div class="ic-mcdns-resource-items">
                        <div class="ic-resourse-icon">
                            <img src="{{ asset('new-frontend/images/mc-course.png') }}" alt="">
                        </div>
                        <p class="fs-20 fw-500 title pb-2 primary">MCdns Course API</p>
                        <p class="fw-300 gray para-text">Donec mi lorem, consequat a quam nec, pellentesque pulvinar sem.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-mcdns-resource-items">
                        <div class="ic-resourse-icon">
                            <img src="{{ asset('new-frontend/images/mc-course.png') }}" alt="">
                        </div>
                        <p class="fs-20 fw-500 title pb-2 primary">Bootcamps API</p>
                        <p class="fw-300 gray para-text">Donec mi lorem, consequat a quam nec, pellentesque pulvinar sem.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-mcdns-resource-items">
                        <div class="ic-resourse-icon">
                            <img src="{{ asset('new-frontend/images/playground-img.png') }}" alt="">
                        </div>
                        <p class="fs-20 fw-500 title pb-2 primary">MCdns Playground API</p>
                        <p class="fw-300 gray para-text">Donec mi lorem, consequat a quam nec, pellentesque pulvinar sem.
                        </p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-mcdns-resource-items">
                        <div class="ic-resourse-icon">
                            <img src="{{ asset('new-frontend/images/exams.png') }}" alt="">
                        </div>
                        <p class="fs-20 fw-500 title pb-2 primary">MCdns Exams API</p>
                        <p class="fw-300 gray para-text">Donec mi lorem, consequat a quam nec, pellentesque pulvinar sem.
                        </p>
                    </div>
                </div>
            </div>
            <div class="ic-tech-companies-logos">
                <h2><span class="primary">Used by hundreds</span> of tech companies including</h2>
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="ic-tech-logos">
                            <ul>
                                <li>
                                    <img src="{{ asset('new-frontend/images/company-1.png') }}" alt="">
                                </li>
                                <li>
                                    <img src="{{ asset('new-frontend/images/company-2.png') }}" alt="">
                                </li>
                                <li>
                                    <img src="{{ asset('new-frontend/images/company-3.png') }}" alt="">
                                </li>
                                <li>
                                    <img src="{{ asset('new-frontend/images/company-4.png') }}" alt="">
                                </li>
                                <li>
                                    <img src="{{ asset('new-frontend/images/company-5.png') }}" alt="">
                                </li>
                                <li>
                                    <img src="{{ asset('new-frontend/images/company-5.png') }}" alt="">
                                </li>
                                <li>
                                    <img src="{{ asset('new-frontend/images/company-7.png') }}" alt="">
                                </li>
                                <li>
                                    <img src="{{ asset('new-frontend/images/company-6.png') }}" alt="">
                                </li>
                            </ul>
                        </div>
                        <div class="ic-video-programs justify-content-center pt-40">
                            <a href="#" class="ic-btn">Explore Programs <i class="ri-arrow-right-line"></i></a>
                            <a href="#" class="ic-btn-outline">For Businesses</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- mcdns resourse --}}

    {{-- user testimonial --}}
    <section class="ic-user-testimonial ic-section-space"
        style="background-image: linear-gradient(0deg, rgba(243, 243, 243, 0.98), rgba(243, 243, 243, 0.98)),  url('{{ asset('new-frontend/images/enterprise-featurees-bg.png') }}')">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 m-auto">
                    <div class="ic-headers text-center">
                        <p class="ic-borderWith-whiteBg mb-15">Testimonials </p>
                        <h2 class="black"><span class="primary">Clients</span> Testimonials For API Service</h2>
                    </div>
                </div>
            </div>
            <div class="ic-userTestiminial-slier">
                <div class="ic-userTestiminial-items">
                    <div class="ic-img-with-name">
                        <img src="{{ asset('new-frontend/images/client-img.png') }}" alt="">
                        <div>
                            <p class="names">Annette Black</p>
                            <p class="desi">Chief Chairman of <span>Netflix</span></p>
                        </div>
                    </div>
                    <p class="dis">A startup or start-up is started by individual founders or entrepreneurs to search
                        for a repet atable and scalable business model. A startup or start-up is started by entrepreneurs to
                        search for individual founders...</p>
                    <img src="{{ asset('new-frontend/images/company-6.png') }}" class="client-logos" alt="">
                </div>
                <div class="ic-userTestiminial-items">
                    <div class="ic-img-with-name">
                        <img src="{{ asset('new-frontend/images/client-img.png') }}" alt="">
                        <div>
                            <p class="names">Annette Black</p>
                            <p class="desi">Chief Chairman of <span>Netflix</span></p>
                        </div>
                    </div>
                    <p class="dis">A startup or start-up is started by individual founders or entrepreneurs to search
                        for a repet atable and scalable business model. A startup or start-up is started by entrepreneurs to
                        search for individual founders...</p>
                    <img src="{{ asset('new-frontend/images/company-6.png') }}" class="client-logos" alt="">
                </div>
                <div class="ic-userTestiminial-items">
                    <div class="ic-img-with-name">
                        <img src="{{ asset('new-frontend/images/client-img.png') }}" alt="">
                        <div>
                            <p class="names">Annette Black</p>
                            <p class="desi">Chief Chairman of <span>Netflix</span></p>
                        </div>
                    </div>
                    <p class="dis">A startup or start-up is started by individual founders or entrepreneurs to search
                        for a repet atable and scalable business model. A startup or start-up is started by entrepreneurs to
                        search for individual founders...</p>
                    <img src="{{ asset('new-frontend/images/company-6.png') }}" class="client-logos" alt="">
                </div>
            </div>
        </div>
    </section>
    {{-- user testimonial --}}

    {{-- faq --}}
    <section class="ic__business-faq  ic-section-space">
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
@endsection

@push('scripts')
    <script>
        $('.ic-enterprise-mainslider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 9000,
            speed: 2000,
            centerMode: true,
            centerPadding: '0',
            arrows: false,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        centerMode: false,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        centerMode: false,
                    }
                },
            ]
        });
        $(".ic-enterprise-1").click(function() {
            $(".ic-enterprise-mainslider").slick("slickNext");
        });
        $(".ic-enterprise-2").click(function() {
            $(".ic-enterprise-mainslider").slick("slickPrev");
        });

        $('.ic-userTestiminial-slier').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 9000,
            speed: 2000,
            centerPadding: '0',
            arrows: false,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        centerMode: false,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        centerMode: false,
                    }
                },
            ]
        });
        // $(".ic-enterprise-1").click(function() {
        //     $(".ic-enterprise-mainslider").slick("slickNext");
        // });
        // $(".ic-enterprise-2").click(function() {
        //     $(".ic-enterprise-mainslider").slick("slickPrev");
        // });

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
    </script>
@endpush
