@extends('layouts.master')

@section('content')
    <section class="ic__banner--part"
        style="background-image: linear-gradient(0deg, rgba(19, 19, 51, 0.45), rgba(19, 19, 51, 0.45)), url({{ asset('/frontend') }}/images/online-bootcamp-banner.png);">
        <div class="reserve-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ic__banner--content ps-0">
                        <h1>World’s #1 Online Bootcamp</h1>
                        <ul class="ic-online-bootcamp">
                            <li>
                                <p>Master's Program</p>
                                <span>
                                    <div>
                                        <i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                            class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                            class="ri-star-s-fill"></i>
                                    </div> 69545 Ratings
                                </span>
                            </li>
                        </ul>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        <div class="ic__buttons-wrapper">
                            <a href="#" class="ic__banner-btn">Enroll Now</a>
                            <a href="https://www.youtube-nocookie.com/embed/Ga6RYejo6Hk" class="btn-watch ic-play-button">
                                <div class="circle">
                                    <i class="ri-play-fill"></i>
                                </div> Watch INTRO VIDEO
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('/frontend/images/banner-wave.svg') }}" class="ic-bottoms-waves" alt="wave">
    </section>

    <div style="background-image: url({{ asset('/frontend') }}/images/outline-bootcam-bg.png);">
        <section class="ic__outline--card">
            <div class="reserve-container">
                <div class="ic__outline--courseReview">
                    <div class="row g-4 justify-content-center">
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="courseReview--card">
                                <img src="{{ asset('/frontend') }}/images/course-review-3.png" class="img-fluid"
                                    alt="">
                                <p>4.5 <i class="ri-star-s-fill"></i></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="courseReview--card">
                                <img src="{{ asset('/frontend') }}/images/course-review-2.png" class="img-fluid"
                                    alt="">
                                <p>4.5 <i class="ri-star-s-fill"></i></p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6">
                            <div class="courseReview--card">
                                <img src="{{ asset('/frontend') }}/images/course-review-1.png" class="img-fluid"
                                    alt="">
                                <p>4.5 <i class="ri-star-s-fill"></i></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        {{-- Cloud Computing --}}
        <section class="ic__outline--card mb-5">
            <div class="reserve-container">
                <div class="ic__outline--Computing">
                    <div class="Computing-flex">
                        <div>
                            <h2>Cloud Computing</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley
                                of type and scrambled it to make a type specimen book. It has survived not only five
                                centuries,
                                but also the leap into electronic typesetting, remaining essentially unchanged. It was
                                popularised in the 1960s with the release of Letraset sheets containing.</p>
                        </div>
                        <div class="Computing-right">
                            <div class="Computing-video">
                                <div class="Computing--play">
                                    <a href="#"><i class="ri-play-mini-fill"></i></a>
                                </div>
                                <h6>Watch <br>
                                    INTRO VIDEO</h6>
                            </div>
                        </div>
                    </div>
                    <ul class="Computing--list">
                        <li>
                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4.5" cy="5.32812" r="4.5" fill="#2AA6C0" />
                            </svg>
                            <p>8X higher interaction in live online classes conducted by industry experts</p>
                        </li>
                        <li>
                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4.5" cy="5.32812" r="4.5" fill="#2AA6C0" />
                            </svg>
                            <p>16 live demos of AWS services</p>
                        </li>
                        <li>
                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4.5" cy="5.32812" r="4.5" fill="#2AA6C0" />
                            </svg>
                            <p>3 real-time industry projects with integrated labs</p>
                        </li>
                        <li>
                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4.5" cy="5.32812" r="4.5" fill="#2AA6C0" />
                            </svg>
                            <p>3 simulation exams (60 questions each)</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        {{-- Request more information --}}

        <section class="ic__requesting--part mb-5">
            <div class="reserve-container">
                <div class="ic__req--div">
                    <div class="ic__req-heading text-center">
                        <h2 class="white">Request more information</h2>
                        <p class="white">It is a long established fact that a reader will be distracted by the readable
                            content. </p>
                    </div>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" placeholder="First and Last Name" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <input type="text" placeholder="Email" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea name="" id="" class="form-control"
                                        placeholder="Reason for your request ( Why do you need our help? )"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                            <label class="form-check-label" for="flexCheckDefault">
                                By providing your contact details, you agree to our Privacy Policy
                            </label>
                        </div>
                        <div class="ic__checkButtons">
                            <button class="ic-btn-yellow">Submit <i class="ri-arrow-right-line"></i></button>
                        </div>
                    </form>
                </div>
            </div>
        </section>

        {{-- Cloud Computing --}}
        <section class="ic__outline--card ic__Benefits--middleCard">
            <div class="reserve-container">
                <div class="ic__outline--Computing">
                    <div class="Computing-flex">
                        <div>
                            <h2>Benefits</h2>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been
                                the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                                galley
                                of type and scrambled it to make a type specimen book.</p>
                        </div>
                    </div>
                    <div class="ic__benefites--annual">
                        <ul>
                            <li>
                                <p>Designation</p>
                            </li>
                            <li>
                                <p>Annual Salary</p>
                            </li>
                            <li>
                                <p>Hiring Companies</p>
                            </li>
                        </ul>
                        <div class="ic__cloud-show">
                            <div class="ic__left-link">
                                <p class="inner-title">Designation</p>
                                <ul>
                                    <li>
                                        <a href="#" class="ic-benefits-link active" data-link="benefits-1">Cloud
                                            Solution Architect</a>
                                    </li>
                                    <li>
                                        <a href="#" class="ic-benefits-link" data-link="benefits-2">Cloud
                                            Administrator</a>
                                    </li>
                                    <li>
                                        <a href="#" class="ic-benefits-link" data-link="benefits-3">Cloud
                                            Developer</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="ic__benefits-containers">
                                <div class="benefits-containers--items active" id="benefits-1">
                                    <div class="ic__benefits--items">
                                        <div class="annual-salary">
                                            <p class="inner-title">Annual Salary</p>
                                            <div>
                                                <div id="chart"></div>
                                            </div>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="inner-title">Hiring Companies</p>
                                            <div class="ic__grid-companies">
                                                <div class="ic__companies--items">
                                                    <img src="{{ asset('/frontend/images/company-1.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="ic__companies--items">
                                                    <img src="{{ asset('/frontend/images/company-2.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="ic__companies--items">
                                                    <img src="{{ asset('/frontend/images/company-3.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="ic__companies--items">
                                                    <img src="{{ asset('/frontend/images/company-4.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="ic__companies--items">
                                                    <img src="{{ asset('/frontend/images/company-5.png') }}"
                                                        alt="">
                                                </div>
                                                <div class="ic__companies--items">
                                                    <img src="{{ asset('/frontend/images/company-1.png') }}"
                                                        alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="benefits-containers--items " id="benefits-2">
                                    <div class="ic__benefits--items">
                                        <div class="annual-salary">
                                            <div>
                                                <div id="chart"></div>
                                            </div>
                                        </div>
                                        <div class="ic__grid-companies">
                                            <div class="ic__companies--items">
                                                <img src="{{ asset('/frontend/images/company-1.png') }}" alt="">
                                            </div>
                                            <div class="ic__companies--items">
                                                <img src="{{ asset('/frontend/images/company-2.png') }}" alt="">
                                            </div>
                                            <div class="ic__companies--items">
                                                <img src="{{ asset('/frontend/images/company-3.png') }}" alt="">
                                            </div>
                                            <div class="ic__companies--items">
                                                <img src="{{ asset('/frontend/images/company-4.png') }}" alt="">
                                            </div>
                                            <div class="ic__companies--items">
                                                <img src="{{ asset('/frontend/images/company-5.png') }}" alt="">
                                            </div>
                                            <div class="ic__companies--items">
                                                <img src="{{ asset('/frontend/images/company-1.png') }}" alt="">
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
    </div>

    <!-- project dashboard part start -->
    <section class="ic__project--dashboard ic__master--dashboard"
        style="background-image:  url({{ asset('/frontend') }}/images/project-dashboard.png);">
        <img src="{{ asset('/frontend/images/banner-wave.svg') }}" class="ic-bottoms-waves" alt="wave">
        <img src=" {{ asset('/frontend/images/project-dashboard-shape.png') }}" class="ic-project-shape" alt="wave">
        <div class="reserve-container">
            <div class="ic__heading text-center">
                <h2 class="white">Get Ahead with MCdns Learning Master Certificate</h2>
                <p class="white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="ic__project--content position-relative mb-5">
                <div class="row g-4">
                    <div class="col-lg-8">
                        {{-- ahead with mcdns --}}
                        <div class="ic__master--certificate">
                            <h5>Earn your Data Scientist course certificate</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s...</p>
                            <h5>Differentiate yourself with a Masters Certificate</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s...</p>
                            <h5>Share your achievement</h5>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard dummy text ever since the 1500s...</p>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ic__certificate">
                            <img src="{{ asset('/frontend/images/certificate.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- project dashboard part end -->

    {{-- Cloud Computing --}}
    <section class="ic__cloud--computing position-relative"
        style="background-image:  url({{ asset('/frontend') }}/images/event-bg-img.png);">
        <img src="{{ asset('/frontend/images/shape-bottom.png') }}" class="ic-bootcamBottom-shape" alt="">
        <div class="reserve-container">
            <div class="playground-text mt-0">
                <h2>Brief introduction</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum</p>
                <div class="ic__playground--middleContent">
                    <h3 class="primary">Eligibility</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                    <h3 class="primary">Pre-requisites</h3>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer.</p>
                </div>
                <div class="ic__course-content">
                    <h3>Course content</h3>
                    <div class="ic__according">
                        <div class="accordion" id="accordionExample">
                            <div class="ic-accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        Course for 2022
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>If you are in the market for a computer, there are a number of factors to
                                            consider. Will it be used for your home, your office or perhaps even your home
                                            office combo? </p>
                                    </div>
                                </div>
                            </div>
                            <div class="ic-accordion-item">
                                <div class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Course for 2022
                                    </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>If you are in the market for a computer, there are a number of factors to
                                            consider. Will it be used for your home, your office or perhaps even your home
                                            office combo? </p>
                                    </div>
                                </div>
                            </div>
                            <div class="ic-accordion-item">
                                <div class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Course for 2022
                                    </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>If you are in the market for a computer, there are a number of factors to
                                            consider. Will it be used for your home, your office or perhaps even your home
                                            office combo? </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ic__course-review--content">
                    <h3 class="d-flex align-items-center"><i class="ri-star-s-fill yellow"></i> Cloud Computing Course
                        Reviews</h3>
                    <div class="ic__course-reviewSlider owl-carousel owl-theme">
                        <div class="ic__coaching-sliderItems">
                            <div class="ic__coaching--content">
                                <p>This app literally changed my life. It provides a great experience. I absolutely love it!
                                </p>
                                <span><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i></span>
                                <img src="{{ asset('/frontend/images/tail.png') }}" class="bottom-shape-arrow"
                                    alt="">
                            </div>
                            <div class="ic__review-user">
                                <img src="{{ asset('/frontend/images/coaching-review-1.png') }}" class="img-fluid"
                                    alt="">
                                <div>
                                    <h6>Gibby Radki</h6>
                                </div>
                            </div>
                        </div>
                        <div class="ic__coaching-sliderItems">
                            <div class="ic__coaching--content">
                                <p>This app literally changed my life. It provides a great experience. I absolutely love it!
                                </p>
                                <span><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i></span>
                                <img src="{{ asset('/frontend/images/tail.png') }}" class="bottom-shape-arrow"
                                    alt="">
                            </div>
                            <div class="ic__review-user">
                                <img src="{{ asset('/frontend/images/coaching-review-1.png') }}" class="img-fluid"
                                    alt="">
                                <div>
                                    <h6>Gibby Radki</h6>
                                </div>
                            </div>
                        </div>
                        <div class="ic__coaching-sliderItems">
                            <div class="ic__coaching--content">
                                <p>This app literally changed my life. It provides a great experience. I absolutely love it!
                                </p>
                                <span><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i></span>
                                <img src="{{ asset('/frontend/images/tail.png') }}" class="bottom-shape-arrow"
                                    alt="">
                            </div>
                            <div class="ic__review-user">
                                <img src="{{ asset('/frontend/images/coaching-review-1.png') }}" class="img-fluid"
                                    alt="">
                                <div>
                                    <h6>Gibby Radki</h6>
                                </div>
                            </div>
                        </div>
                        <div class="ic__coaching-sliderItems">
                            <div class="ic__coaching--content">
                                <p>This app literally changed my life. It provides a great experience. I absolutely love it!
                                </p>
                                <span><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i></span>
                                <img src="{{ asset('/frontend/images/tail.png') }}" class="bottom-shape-arrow"
                                    alt="">
                            </div>
                            <div class="ic__review-user">
                                <img src="{{ asset('/frontend/images/coaching-review-1.png') }}" class="img-fluid"
                                    alt="">
                                <div>
                                    <h6>Gibby Radki</h6>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic__coaching-button">
                        <div class="ic__arrows">
                            <button class="next-btnR">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.3374 11H4.65625" stroke="#2DB6D2" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M10.9968 17.3374L4.65625 10.9968L10.9968 4.65625" stroke="#2DB6D2"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                            <button class="prev-btnR">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.65625 11H17.3374" stroke="#2DB6D2" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M11 4.65625L17.3406 10.9968L11 17.3374" stroke="#2DB6D2" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- project dashboard part start -->
    <section class="ic__project--dashboard ic__master--dashboard"
        style="background-image:  url({{ asset('/frontend') }}/images/project-dashboard.png);">
        <img src="{{ asset('/frontend/images/banner-wave.svg') }}" class="ic-bottoms-waves" alt="wave">
        <img src=" {{ asset('/frontend/images/project-dashboard-shape.png') }}" class="ic-project-shape" alt="wave">
        <div class="reserve-container">
            <div class="ic__heading text-center">
                <h2 class="white">About Your Instructor</h2>
                <p class="white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="ic__project--content position-relative">
                <div class="ic__instructor-div">
                    <div class="d-flex mb-4">
                        <div class="flex-shrink-0">
                            <img src="{{ asset('/frontend/images/instructor-img.png') }}" class="img-fluid img-avatar"
                                alt="...">
                        </div>
                        <div class="flex-grow-1 ms-3 instructor-content">
                            <h6>Henry Itondo 800.000+ Students</h6>
                            <p class="ic__instructor-designation">CEO, Principal Analyst Intelligent World,Top10
                                AI-Data-IoT-Influencer</p>
                            <ul class="instructor-list">
                                <li>
                                    <div>
                                        <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4.5" cy="5.17188" r="4.5" fill="#2AA6C0" />
                                        </svg>
                                        <p>4.5 Instructor Rating</p>
                                    </div>
                                    <div>
                                        <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4.5" cy="5.17188" r="4.5" fill="#2AA6C0" />
                                        </svg>
                                        <p>230,644 Reviews</p>
                                    </div>
                                </li>
                                <li>
                                    <div>
                                        <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4.5" cy="5.17188" r="4.5" fill="#2AA6C0" />
                                        </svg>
                                        <p>841,330 Students</p>
                                    </div>
                                    <div>
                                        <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4.5" cy="5.17188" r="4.5" fill="#2AA6C0" />
                                        </svg>
                                        <p>51 Courses</p>
                                    </div>
                                </li>
                            </ul>
                            <ul class="testimonial--social">
                                <li>
                                    <a href="#"><i class="ri-facebook-fill"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ri-instagram-line"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ri-twitter-fill"></i></a>
                                </li>
                                <li>
                                    <a href="#"><i class="ri-linkedin-box-line"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p class="ins-text">Hi there, my name is Henry Itondo.</p>
                    <p class="ins-text">
                        Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- project dashboard part end -->

    {{-- Why Online Bootcamp --}}
    <section class="why-online-bootcamp">
        <div class="reserve-container">
            <div class="ic__heading text-center">
                <h2 class="black">Why Online <span class="secondary">Bootcamp</span></h2>
                <div class="row">
                    <div class="col-lg-5 m-auto">
                        <p class="black">It is a long established fact that a reader will be distracted by the readable
                            content. </p>
                    </div>
                </div>
            </div>
            <div class="ic__macbook--laptop">
                <div class="row">
                    <div class="col-lg-7 m-auto ">
                        <div class="ic-mackbooks position-relative">
                            <img src="{{ asset('/frontend/images/macbook.png') }}" class="img-fluid" alt="">
                            <div class="ic-mackbook-video-play">
                                <img src="{{ asset('/frontend') }}/images/mackbook.png" class="img-fluid"
                                    alt="">
                                <a href="#"><i class="ri-play-fill"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="ic-online-history">
                <div class="row g-2">
                    <div class="col-lg-6">
                        <div class="ic-online-history--items">
                            <h6>Develop skills for real career growth</h6>
                            <p>Cutting-edge curriculum designed in guidance with industry and academia to develop job-ready
                                skills</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ic-online-history--items">
                            <h6>Learn from experts active in their field, not out-of-touch trainers</h6>
                            <p>Cutting-edge curriculum designed in guidance with industry and academia to develop job-ready
                                skills</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ic-online-history--items">
                            <h6>Learn by working on real-world problems</h6>
                            <p>Cutting-edge curriculum designed in guidance with industry and academia to develop job-ready
                                skills</p>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ic-online-history--items">
                            <h6>Structured guidance ensuring learning never stops</h6>
                            <p>Cutting-edge curriculum designed in guidance with industry and academia to develop job-ready
                                skills</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ic-online-covered-main">
                <div class="ic__heading text-center">
                    <h2 class="black">Tools <span class="secondary">Covered</span></h2>
                </div>
                <div class="ic-online-covered">
                    <div class="ic-online-covered-grid">
                        <div class="covered-grid-items">
                            <img src="{{ asset('/frontend/images/covered-1.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="covered-grid-items">
                            <img src="{{ asset('/frontend/images/covered-2.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="covered-grid-items">
                            <img src="{{ asset('/frontend/images/covered-3.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="covered-grid-items">
                            <img src="{{ asset('/frontend/images/covered-4.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="covered-grid-items">
                            <img src="{{ asset('/frontend/images/covered-5.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="covered-grid-items">
                            <img src="{{ asset('/frontend/images/covered-6.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="covered-grid-items">
                            <img src="{{ asset('/frontend/images/covered-7.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="covered-grid-items">
                            <img src="{{ asset('/frontend/images/covered-8.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="covered-grid-items">
                            <img src="{{ asset('/frontend/images/covered-9.png') }}" class="img-fluid" alt="">
                        </div>
                        <div class="covered-grid-items">
                            <img src="{{ asset('/frontend/images/covered-10.png') }}" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="ic__faq--part">
                <div class="ic_heading--sections">
                    <h2>Only Bootcamp <span class="primary">FAQs</span>.</h2>
                </div>
                <div class="ic__according">
                    <div class="accordion" id="accordionExample">
                        <div class="ic-accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How do I pay for the Essentials or Premium plan?
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="ic-accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Can I cancel my Essentials or Premium plan subscription at any time?
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and hiding
                                    via CSS transitions. You can modify any of this with custom CSS or overriding our
                                    default variables. It's also worth noting that just about any HTML can go within the
                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="ic-accordion-item">
                            <div class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    We need to add new users to our team. How will that be billed?
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until
                                    the collapse plugin adds the appropriate classes that we use to style each element.
                                    These classes control the overall appearance, as well as the showing and hiding via CSS
                                    transitions. You can modify any of this with custom CSS or overriding our default
                                    variables. It's also worth noting that just about any HTML can go within the
                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ic__bootcamp-live-training  ic-students-reviews"
        style="background-image:  linear-gradient(68.6deg, #06738A -11.83%, rgb(42, 166, 192, 0.69) 96.57%), url({{ asset('/frontend') }}/images/bootcamp-live-bg.png);">
        <img src="{{ asset('/frontend') }}/images/strategies--bottom-shape.png" class="bootcamp-bottom-shape"
            alt="">
        <img src="{{ asset('/frontend') }}/images/bootcamp-vector.png" class="bootcamp-vector-img" alt="">
        <div class="course-container">
            <div class="ic__heading text-center">
                <p class="sub-title text-white">testimonials</p>
                <h2 class="white">Cloud Computing Students Reviews</h2>
            </div>
            <div class="ic__bootcamp-live-container">
                <div class="ic__online-bootcampSlider owl-carousel owl-theme">
                    <div class="ic__coaching-sliderItems">
                        <div class="ic__coaching--content">
                            <img src="{{ asset('/frontend/images/quote.png') }}" class="ic-quote" alt="">
                            <p>"Reached the first hills of the Italic Mountains, she had a last view back on the skyline of
                                her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own
                                road"</p>
                        </div>
                        <div class="ic__review-user">
                            <img src="{{ asset('/frontend/images/coaching-review-1.png') }}" class="img-fluid"
                                alt="">
                            <div>
                                <h6>Gibby Radki</h6>
                                <p>Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="ic__coaching-sliderItems">
                        <div class="ic__coaching--content">
                            <img src="{{ asset('/frontend/images/quote.png') }}" class="ic-quote" alt="">
                            <p>"Reached the first hills of the Italic Mountains, she had a last view back on the skyline of
                                her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own
                                road"</p>
                        </div>
                        <div class="ic__review-user">
                            <img src="{{ asset('/frontend/images/coaching-review-1.png') }}" class="img-fluid"
                                alt="">
                            <div>
                                <h6>Gibby Radki</h6>
                                <p>Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="ic__coaching-sliderItems">
                        <div class="ic__coaching--content">
                            <img src="{{ asset('/frontend/images/quote.png') }}" class="ic-quote" alt="">
                            <p>"Reached the first hills of the Italic Mountains, she had a last view back on the skyline of
                                her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own
                                road"</p>
                        </div>
                        <div class="ic__review-user">
                            <img src="{{ asset('/frontend/images/coaching-review-1.png') }}" class="img-fluid"
                                alt="">
                            <div>
                                <h6>Gibby Radki</h6>
                                <p>Developer</p>
                            </div>
                        </div>
                    </div>
                    <div class="ic__coaching-sliderItems">
                        <div class="ic__coaching--content">
                            <img src="{{ asset('/frontend/images/quote.png') }}" class="ic-quote" alt="">
                            <p>"Reached the first hills of the Italic Mountains, she had a last view back on the skyline of
                                her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own
                                road"</p>
                        </div>
                        <div class="ic__review-user">
                            <img src="{{ asset('/frontend/images/coaching-review-1.png') }}" class="img-fluid"
                                alt="">
                            <div>
                                <h6>Gibby Radki</h6>
                                <p>Developer</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ic__coaching-button">
                    <div class="ic__arrows">
                        <button class="next-btno">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.3374 11H4.65625" stroke="#2DB6D2" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M10.9968 17.3374L4.65625 10.9968L10.9968 4.65625" stroke="#2DB6D2"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                        <button class="prev-btno">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.65625 11H17.3374" stroke="#2DB6D2" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round"></path>
                                <path d="M11 4.65625L17.3406 10.9968L11 17.3374" stroke="#2DB6D2" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="course-container">
            <div class="ic__course--check ic__bootcamp-live-forms"
                style="background-image: url({{ asset('/frontend') }}/images/enroll-bootcamp.png);">
                <form action="#" class="ic__bootcamp-forms">
                    <h2>Enroll to Our Bootcamp</h2>
                    <div class="row gx-3 ">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" placeholder="First and Last Name">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <input type="text" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="dropdown bootstrap-select"><select name="" id=""
                                        class="selectpicker">
                                        <option value="0" selected="">Course desired</option>
                                        <option value="1">coaching</option>
                                    </select>
                                    <div class="dropdown-menu ">
                                        <div class="inner show" role="listbox" id="bs-select-1" tabindex="-1">
                                            <ul class="dropdown-menu inner show" role="presentation"></ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="position-relative">
                                    <input type="text" placeholder="Start date" class="datepicker flatpickr-input"
                                        readonly="readonly">
                                    <img src="assets/images/calendar.png" class="img-calender" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic__course-btn text-center">
                        <button class="ic-btn">Submit <i class="ri-arrow-right-line"></i></button>
                    </div>
                </form>
            </div>
            <div class="ic__news-letter">
                <div class="ic__news--background"
                    style="background-image: url({{ asset('/frontend') }}/images/news-letter.png);">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <h2 class="yellow">Newsletter</h2>
                            <p class="white">Subscribe to our newsletter by submitting your Email address below:</p>
                        </div>
                        <div class="col-lg-6">
                            <form action="#" class="ic__forms">
                                <input type="text" placeholder="Your email">
                                <button>Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            series: [{
                data: [21, 22, 10, 28, 16]
            }],
            chart: {
                height: 200,
                type: 'bar',
                events: {
                    click: function(chart, w, e) {
                        // console.log(chart, w, e)
                    }
                },
                toolbar: {
                    show: false,
                },
            },
            // colors: colors,
            plotOptions: {
                bar: {
                    columnWidth: '45%',
                    distributed: true,
                }
            },

            dataLabels: {
                enabled: false
            },
            legend: {
                show: false
            },
            yaxis: {
                labels: {
                    style: {
                        // colors: colors,
                        fontSize: '7px'
                    }
                }
            },
            xaxis: {
                categories: [
                    ['Min'],
                    ['Average'],
                    [''],
                    '',
                    ['Max'],
                ],
                labels: {
                    style: {
                        // colors: colors,
                        fontSize: '7px'
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
@endpush
