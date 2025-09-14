@extends('layouts.master-v1')

@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part ic-section-space ic_v1_inner-part"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)), url({{ asset('/new-frontend/images/course-details-bg.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-xl-8">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="ic-heading-title mb-15">Course Details</span>
                        <h1 class="black pb-15">Data Science with Python Course
                        </h1>
                        <div class="row">
                            <div class="col-xxl-10 col-lg-12">
                                <p class="color-deep-gray pb-30">This Data Science with Python course gives you a complete overview of
                                    Python’s data analytics tools and techniques. Learning python is a crucial skill for
                                    many data science roles, and you can develop it with this Python data science course.
                                </p>
                                <ul class="ic-course-details-banner-list">
                                    <li>
                                        <span><i class="ri-star-s-fill"></i></span>
                                        <span>4.82 94 reviews</span>
                                    </li>
                                    <li>
                                        <span>
                                            <img src="{{ asset('new-frontend/images/maps.png') }}" alt="">
                                        </span>
                                        <span>1.5k Student Enrolled</span>
                                    </li>
                                    <li>
                                        <span>
                                            <img src="{{ asset('new-frontend/images/calander.png') }}" alt="">
                                        </span>
                                        <span>Member since April 1, 2022</span>
                                    </li>
                                </ul>
                                <div class="ic-video-programs">
                                    <a href="#" class="ic-btn">Enrolled Course </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="ic-right-side-img">
                        <img src="{{ asset('new-frontend/images/course-details-right-img.png') }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- banner part end --}}

    <section class="ic-course-details ic-section-space">
        <div class="container">
            <div class="ic-course-tabs">
                <div class="ic-tabs-links">
                    <ul>
                        <li>
                            <a href="#" class="ic-discription-links active" data-tabs="course-overview">Course
                                Overview</a>
                        </li>
                        <li>
                            <a href="#" class="ic-discription-links" data-tabs="announcements">Requirements</a>
                        </li>
                        <li>
                            <a href="#" class="ic-discription-links" data-tabs="reviews">Course Content</a>
                        </li>
                        <li>
                            <a href="#" class="ic-discription-links" data-tabs="discussions">Instructor</a>
                        </li>
                        <li>
                            <a href="#" class="ic-discription-links" data-tabs="course-rating-tabs">Course Rating</a>
                        </li>
                        <li>
                            <a href="#" class="ic-discription-links" data-tabs="Playground">Benefits</a>
                        </li>
                    </ul>
                </div>
                <div class="tabs-content">
                    <div class="ic-tabs-content-items active" id="course-overview">
                        <h4 class="fs-28 fw-500 pb-3 black">Fundamentals of Data Science</h4>
                        <p class="black-600">Best-selling Udemy course on AZ-900, with over 270,000 students. Thank you! New
                            course,
                            completely re-recorded in April 2022. Up to date with the latest published exam requirements as
                            of October 2022. The Data Science with Python course teaches you to master the concepts of
                            Python programming. Through this Python for Data Science training, you will learn Data Analysis,
                            Machine Learning, Data Visualization, Web Scraping, & NLP. Upon course completion, you will
                            master the essential Data Science tools using Python.</p>
                        <div class="course-includes-list">
                            <p class="fs-20 fw-500 pb-3">The course includes the following free bonuses:</p>
                            <ul>
                                <li>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.5" cy="5" r="4.5" fill="#00ACB6" />
                                    </svg>
                                    All lectures manually closed-captioned in English
                                </li>
                                <li>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.5" cy="5" r="4.5" fill="#00ACB6" />
                                    </svg>
                                    Quiz questions to reinforce learning throughout the course
                                </li>
                                <li>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.5" cy="5" r="4.5" fill="#00ACB6" />
                                    </svg>
                                    All lectures manually closed-captioned in English
                                </li>
                                <li>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.5" cy="5" r="4.5" fill="#00ACB6" />
                                    </svg>
                                    Quiz questions to reinforce learning throughout the course
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="ic-tabs-content-items " id="announcements">
                        <div class="ic-requirment-info">
                            <ul>
                                <li>
                                    <img src="{{ asset('new-frontend/images/CheckCircle.png') }}" alt="">
                                    <p class="fw-600 black">Macintosh (OSX)/ Windows(Vista and higher) Machine</p>
                                </li>
                                <li>
                                    <img src="{{ asset('new-frontend/images/CheckCircle.png') }}" alt="">
                                    <p class="fw-600 black">Internet Connection</p>
                                </li>
                                <li>
                                    <img src="{{ asset('new-frontend/images/CheckCircle.png') }}" alt="">
                                    <p class="fw-600 black">experience of HTML, CSS or JavaScript.</p>
                                </li>
                            </ul>
                            <div class="ic-learn-this-course">
                                <h4 class="fw-500 black pb-3">What you'll learn This Course</h4>
                                <ul>
                                    <li>
                                        <img src="{{ asset('new-frontend/images/CheckCircle.png') }}" alt="">
                                        <div>
                                            <p class="fs-18 fw-500 black">Macintosh (OSX)/ Windows(Vista and higher)
                                                Machine</p>
                                            <span class="color-deep-gray fw-300">Gain hands-on experience and practice using Python to
                                                solve real data science challenges</span>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('new-frontend/images/CheckCircle.png') }}" alt="">
                                        <div>
                                            <p class="fs-18 fw-500 black">Become an experienced Python Programmer</p>
                                            <span class="color-deep-gray fw-300">GEtiam sed vulputate nisl, eu elementum arcu. Vivamus
                                                dignsim tortor in tellus dictum pellentesque. </span>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('new-frontend/images/CheckCircle.png') }}" alt="">
                                        <div>
                                            <p class="fs-18 fw-500 black">Parse the Web and Create their own Games</p>
                                            <span class="color-deep-gray fw-300">Etiam sed vulputate nisl, eu elementum arcu. Vivamus
                                                dignsim tortor in tellus dictum pellentesque. </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ic-tabs-content-items " id="reviews">
                        <div class="accordion ic-course-video-all" id="accordionExample">
                            <div class="accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                        <div class="ic-video-milestone">
                                            <span class="p-circle finish-module"></span>
                                            <div class="ic-course-video">
                                                <h6><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                        alt="">
                                                    Milestone 0
                                                    : Orientation</h6>
                                                <span class="video-times">(3:36)</span>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <div class="ic-video-milestone">
                                                        <span class="p-circle"></span>
                                                        <div class="ic-course-video">
                                                            <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                                    alt="">
                                                                Milestone 0
                                                                : Orientation</p>
                                                            <span class="video-times">(3:36)</span>
                                                        </div>
                                                        <div class="ic-preview-lock">
                                                            <span>Preview</span>
                                                            <i class="ri-lock-line"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="ic-video-milestone">
                                                        <span class="p-circle"></span>
                                                        <div class="ic-course-video">
                                                            <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                                    alt="">
                                                                Learn and Explore HTML as a Beginner</p>
                                                            <span class="video-times">(3:36)</span>
                                                        </div>
                                                        <div class="ic-preview-lock">
                                                            <span>Preview</span>
                                                            <i class="ri-lock-line"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        <div class="ic-video-milestone">
                                            <span class="p-circle"></span>
                                            <div class="ic-course-video">
                                                <h6><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                        alt="">
                                                    01 - Milestone : Personal Portfolio?</h6>
                                                <span class="video-times">(3:36)</span>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <div class="ic-video-milestone">
                                                        <span class="p-circle"></span>
                                                        <div class="ic-course-video">
                                                            <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                                    alt="">
                                                                Milestone 0
                                                                : Orientation</p>
                                                            <span class="video-times">(3:36)</span>
                                                        </div>
                                                        <div class="ic-preview-lock">
                                                            <span>Preview</span>
                                                            <i class="ri-lock-line"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="ic-video-milestone">
                                                        <span class="p-circle"></span>
                                                        <div class="ic-course-video">
                                                            <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                                    alt="">
                                                                Learn and Explore HTML as a Beginner</p>
                                                            <span class="video-times">(3:36)</span>
                                                        </div>
                                                        <div class="ic-preview-lock">
                                                            <span>Preview</span>
                                                            <i class="ri-lock-line"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        <div class="ic-video-milestone">
                                            <span class="p-circle"></span>
                                            <div class="ic-course-video">
                                                <h6><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                        alt="">
                                                    01 - Milestone : Personal Portfolio?</h6>
                                                <span class="video-times">(3:36)</span>
                                            </div>
                                        </div>
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <ul>
                                            <li>
                                                <a href="#">
                                                    <div class="ic-video-milestone">
                                                        <span class="p-circle"></span>
                                                        <div class="ic-course-video">
                                                            <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                                    alt="">
                                                                Milestone 0
                                                                : Orientation</p>
                                                            <span class="video-times">(3:36)</span>
                                                        </div>
                                                        <div class="ic-preview-lock">
                                                            <span>Preview</span>
                                                            <i class="ri-lock-line"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                            <li>
                                                <a href="#">
                                                    <div class="ic-video-milestone">
                                                        <span class="p-circle"></span>
                                                        <div class="ic-course-video">
                                                            <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                                    alt="">
                                                                Learn and Explore HTML as a Beginner</p>
                                                            <span class="video-times">(3:36)</span>
                                                        </div>
                                                        <div class="ic-preview-lock">
                                                            <span>Preview</span>
                                                            <i class="ri-lock-line"></i>
                                                        </div>
                                                    </div>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic-tabs-content-items " id="discussions">
                        <div class="ic-instructor-details">
                            <div class="ic-instructor-left">
                                <img src="{{ asset('new-frontend/images/instructor-img.png') }}" alt="">
                            </div>
                            <div class="ic-instructor-right">
                                <h4 class="fs-28 fw-600 black pb-2">Cameron Williamson</h4>
                                <p class="fw-300 fs-20 gray pb-2"> Analyst Intelligent World, AI-Data-Influencer</p>
                                <ul class="ic-instructor-view">
                                    <li>
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4.5" cy="4.5" r="4.5" fill="#2AA6C0" />
                                        </svg>
                                        330 Enrolled
                                    </li>
                                    <li>
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4.5" cy="4.5" r="4.5" fill="#2AA6C0" />
                                        </svg>
                                        51 Courses
                                    </li>
                                    <li>
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4.5" cy="4.5" r="4.5" fill="#2AA6C0" />
                                        </svg>
                                        <span>5.0</span>
                                        <span class="star">
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                        </span>
                                        <span>(2k Reviews)</span>
                                    </li>
                                </ul>
                                <div>
                                    <p class="fs-18 pb-2">Hi there, i’m Williamson,</p>
                                    <p class="fw-300 black-600">Lorem Ipsum is simply dummy text of the printing and
                                        typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                        since the 1500s, when an unknown printer took a galley of type and scrambled it to
                                        make a type specimen book. It has survived not only five centuries, but also the
                                        leap into electronic typesetting.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic-tabs-content-items" id="course-rating-tabs">
                        <div class="ic-course-rating-slider">
                            <div class="ic-course-rating-items">
                                <div class="ic-course-rating-avatar">
                                    <img src="{{ asset('new-frontend/images/client-img.png') }}" alt="">
                                    <div class="course-rating">
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill bg-gray-1"></i>
                                    </div>
                                </div>
                                <p class="fw-300 gray pt-2"><span class="fs-18 fw-500 black">Anthoni Jordan</span>
                                    reviewed <span class="fs-18 fw-500 primary">MCDns</span></p>
                                <p class="color-deep-gray fw-300 pt-2">Contrary to popular belief, Lorem Ipsum is not simply random
                                    text. It has roots in a piece of classical Latin literature from Contrary to popular
                                    belief, Lorem Ipsum</p>
                            </div>
                            <div class="ic-course-rating-items">
                                <div class="ic-course-rating-avatar">
                                    <img src="{{ asset('new-frontend/images/client-img.png') }}" alt="">
                                    <div class="course-rating">
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill bg-gray-1"></i>
                                    </div>
                                </div>
                                <p class="fw-300 gray pt-2"><span class="fs-18 fw-500 black">Anthoni Jordan</span>
                                    reviewed <span class="fs-18 fw-500 primary">MCDns</span></p>
                                <p class="color-deep-gray fw-300 pt-2">Contrary to popular belief, Lorem Ipsum is not simply random
                                    text. It has roots in a piece of classical Latin literature from Contrary to popular
                                    belief, Lorem Ipsum</p>
                            </div>
                            <div class="ic-course-rating-items">
                                <div class="ic-course-rating-avatar">
                                    <img src="{{ asset('new-frontend/images/client-img.png') }}" alt="">
                                    <div class="course-rating">
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill bg-gray-1"></i>
                                    </div>
                                </div>
                                <p class="fw-300 gray pt-2"><span class="fs-18 fw-500 black">Anthoni Jordan</span>
                                    reviewed <span class="fs-18 fw-500 primary">MCDns</span></p>
                                <p class="color-deep-gray fw-300 pt-2">Contrary to popular belief, Lorem Ipsum is not simply random
                                    text. It has roots in a piece of classical Latin literature from Contrary to popular
                                    belief, Lorem Ipsum</p>
                            </div>
                            <div class="ic-course-rating-items">
                                <div class="ic-course-rating-avatar">
                                    <img src="{{ asset('new-frontend/images/client-img.png') }}" alt="">
                                    <div class="course-rating">
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill bg-gray-1"></i>
                                    </div>
                                </div>
                                <p class="fw-300 gray pt-2"><span class="fs-18 fw-500 black">Anthoni Jordan</span>
                                    reviewed <span class="fs-18 fw-500 primary">MCDns</span></p>
                                <p class="color-deep-gray fw-300 pt-2">Contrary to popular belief, Lorem Ipsum is not simply random
                                    text. It has roots in a piece of classical Latin literature from Contrary to popular
                                    belief, Lorem Ipsum</p>
                            </div>
                        </div>
                        <div class="ic-slider-arrows d-flex pt-30 justify-content-center">
                            <button class="ic-course-1"><i class="ri-arrow-left-line"></i></button>
                            <button class="ic-course-2"><i class="ri-arrow-right-line"></i></button>
                        </div>
                    </div>
                    <div class="ic-tabs-content-items" id="Playground">
                        <div class="ic-benefits-new-divs">
                            <div class="title-benefits">
                                <h3 class="black fs-30 fw-500 pb-2">Benefits</h3>
                                <p class="color-deep-gray">The globally recognized PMP® certification can help you land lucrative
                                    roles in IT, manufacturing, finance, healthcare, and other exciting industries.
                                    Certified PMP®'s drive better project performance and are often rewarded with
                                    substantial pay raises as shown below.</p>
                            </div>
                            <div class="ic-benefets-sall-statagies">
                                <div class="ic-benefetis-left">
                                    <p class=" fw-500 fs-20 heading-benefetis">Designation</p>
                                    <div class="inner-div">
                                        <ul class="ic-benefits-inner-tabs nav">
                                            <li>
                                                <a href="#" class="nav-link active" id="v-pills-home-tab"
                                                    data-bs-toggle="pill" data-bs-target="#v-pills-home" type="button"
                                                    role="tab" aria-controls="v-pills-home"
                                                    aria-selected="true">Project Director</a>
                                            </li>
                                            <li>
                                                <a href="#" class="nav-link" id="v-pills-profile-tab"
                                                    data-bs-toggle="pill" data-bs-target="#v-pills-profile"
                                                    type="button" role="tab" aria-controls="v-pills-profile"
                                                    aria-selected="false">Senior Project Manager</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ic-benefetis-right tab-content" id="v-pills-tabContent">
                                    <div class="tab-pane fade show active statagies-tabs" id="v-pills-home"
                                        role="tabpanel" aria-labelledby="v-pills-home-tab" tabindex="0">
                                        <div class="benefits-new-divs-flex">
                                            <div class="benefits-new-divs-itms">
                                                <p class="fw-500 fs-20 heading-benefetis">Annual Salary</p>
                                                <div class="inner-div annual-salary">
                                                    <div class="annual-salary-bars">
                                                        <div class="bars">
                                                            <span class="bars-price">$75K</span>
                                                            <span class="bars-price percent">Min</span>
                                                        </div>
                                                        <div class="bars">
                                                            <span class="bars-price"></span>
                                                            <span class="bars-price percent"></span>
                                                        </div>
                                                        <div class="bars">
                                                            <span class="bars-price">$75K</span>
                                                            <span class="bars-price percent">Average</span>
                                                        </div>
                                                        <div class="bars">
                                                            <span class="bars-price"></span>
                                                            <span class="bars-price percent"></span>
                                                        </div>
                                                        <div class="bars">
                                                            <span class="bars-price">$75K</span>
                                                            <span class="bars-price percent">Max</span>
                                                        </div>
                                                    </div>
                                                    <p>Source : Linkedin</p>
                                                </div>
                                            </div>
                                            <div class="benefits-new-divs-itms">
                                                <p class="fw-500 fs-20 heading-benefetis">Hiring Companies</p>
                                                <div class="inner-div hiring-companies-divs">
                                                    <div class="hiring-companies-logos">
                                                        <img src="{{ asset('new-frontend/images/benefets-1.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="hiring-companies-logos">
                                                        <img src="{{ asset('new-frontend/images/benefets-2.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="hiring-companies-logos">
                                                        <img src="{{ asset('new-frontend/images/benefets-3.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="hiring-companies-logos">
                                                        <img src="{{ asset('new-frontend/images/benefets-4.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="hiring-companies-logos">
                                                        <img src="{{ asset('new-frontend/images/benefets-5.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="hiring-companies-logos">
                                                        <img src="{{ asset('new-frontend/images/benefets-1.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade statagies-tabs hiring-companies" id="v-pills-profile"
                                        role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
                                        <div class="benefits-new-divs-flex">
                                            <div class="benefits-new-divs-itms">
                                                <p class="fw-500 fs-20 heading-benefetis">Annual Salary</p>
                                                <div class="inner-div annual-salary">
                                                    <div class="annual-salary-bars">
                                                        <div class="bars">
                                                            <span class="bars-price">$75K</span>
                                                            <span class="bars-price percent">Min</span>
                                                        </div>
                                                        <div class="bars">
                                                            <span class="bars-price"></span>
                                                            <span class="bars-price percent"></span>
                                                        </div>
                                                        <div class="bars">
                                                            <span class="bars-price">$75K</span>
                                                            <span class="bars-price percent">Average</span>
                                                        </div>
                                                        <div class="bars">
                                                            <span class="bars-price"></span>
                                                            <span class="bars-price percent"></span>
                                                        </div>
                                                        <div class="bars">
                                                            <span class="bars-price">$75K</span>
                                                            <span class="bars-price percent">Max</span>
                                                        </div>
                                                    </div>
                                                    <p>Source : Linkedin</p>
                                                </div>
                                            </div>
                                            <div class="benefits-new-divs-itms">
                                                <p class="fw-500 fs-20 heading-benefetis">Hiring Companies</p>
                                                <div class="inner-div hiring-companies-divs">
                                                    <div class="hiring-companies-logos">
                                                        <img src="{{ asset('new-frontend/images/benefets-1.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="hiring-companies-logos">
                                                        <img src="{{ asset('new-frontend/images/benefets-2.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="hiring-companies-logos">
                                                        <img src="{{ asset('new-frontend/images/benefets-3.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="hiring-companies-logos">
                                                        <img src="{{ asset('new-frontend/images/benefets-4.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="hiring-companies-logos">
                                                        <img src="{{ asset('new-frontend/images/benefets-5.png') }}"
                                                            alt="">
                                                    </div>
                                                    <div class="hiring-companies-logos">
                                                        <img src="{{ asset('new-frontend/images/benefets-1.png') }}"
                                                            alt="">
                                                    </div>
                                                </div>
                                            </div>
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

    {{-- related course --}}
    <section class="ic-enroll-course ic-section-space" style="background: linear-gradient(180deg, #FFF 0%, #D3EDF3 100%), #F3F3F3;">
        <div class="container">
            <h2 class="ic-title text-center mb-50"><span>Related Courses</span>  This Coach!</h2>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ic-coach-item">
                        <div class="position-relative overflow-hidden">
                            <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                            <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                            <img src="{{asset('/new-frontendv1/images/course-single/card2.png')}}" class="img-fluid ic-coach-image w-100"
                            alt="">
                        </div>
                        <div class="ic-coach-content">
                            <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                            <div class="coach-names">
                                <p>
                                    <img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
                                    asdasdasdasd</p>
                                <p>5.0 <span><i class="ri-star-s-fill"></i></span></p>
                            </div>
                        </div>
                        <div class="coach-price course-price d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <h4>$165.00</h4>
                                <p class="text-decoration-line-through">$100</p>
                           </div>
                           <a href="#" class="course-addCart"><i class="ri-shopping-cart-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ic-coach-item">
                        <div class="position-relative overflow-hidden">
                            <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                            <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                            <img src="{{asset('/new-frontendv1/images/course-single/card2.png')}}" class="img-fluid ic-coach-image w-100"
                            alt="">
                        </div>
                        <div class="ic-coach-content">
                            <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                            <div class="coach-names">
                                <p>
                                    <img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
                                    asdasdasdasd</p>
                                <p>5.0 <span><i class="ri-star-s-fill"></i></span></p>
                            </div>
                        </div>
                        <div class="coach-price course-price d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <h4>$165.00</h4>
                                <p class="text-decoration-line-through">$100</p>
                           </div>
                           <a href="#" class="course-addCart"><i class="ri-shopping-cart-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ic-coach-item">
                        <div class="position-relative overflow-hidden">
                            <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                            <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                            <img src="{{asset('/new-frontendv1/images/course-single/card2.png')}}" class="img-fluid ic-coach-image w-100"
                            alt="">
                        </div>
                        <div class="ic-coach-content">
                            <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                            <div class="coach-names">
                                <p>
                                    <img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
                                    asdasdasdasd</p>
                                <p>5.0 <span><i class="ri-star-s-fill"></i></span></p>
                            </div>
                        </div>
                        <div class="coach-price course-price d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <h4>$165.00</h4>
                                <p class="text-decoration-line-through">$100</p>
                           </div>
                           <a href="#" class="course-addCart"><i class="ri-shopping-cart-2-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ic-coach-item">
                        <div class="position-relative overflow-hidden">
                            <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                            <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                            <img src="{{asset('/new-frontendv1/images/course-single/card2.png')}}" class="img-fluid ic-coach-image w-100"
                            alt="">
                        </div>
                        <div class="ic-coach-content">
                            <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                            <div class="coach-names">
                                <p>
                                    <img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
                                    asdasdasdasd</p>
                                <p>5.0 <span><i class="ri-star-s-fill"></i></span></p>
                            </div>
                        </div>
                        <div class="coach-price course-price d-flex align-items-center justify-content-between">
                            <div class="d-flex align-items-center gap-2">
                                <h4>$165.00</h4>
                                <p class="text-decoration-line-through">$100</p>
                           </div>
                           <a href="#" class="course-addCart"><i class="ri-shopping-cart-2-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-30 text-center">
                <a href="#" class="ic-btn-simple">Explore All Course</a>
            </div>
        </div>
    </section>
    <!-- {{-- achieve goals start --}} -->
    <section class="ic-achieve-goals ic-section-space">
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
<!-- {{-- achieve goals end --}} -->
@endsection

@push('scripts')
    <script></script>
@endpush
