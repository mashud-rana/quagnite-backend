@extends('layouts.master-v1')

@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part ic-section-space"
        style="background-image:  linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%),  url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="d-block fs-20 black">Course Details</span>
                        <h1 class="black pb-15">Java Programming Bootcamp</h1>
                        <div class="row">
                            <div class="col-xxl-10 col-lg-12">
                                <p class="gray pb-30">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever
                                </p>
                                <ul class="ic-course-details-banner-list">
                                    <li>
                                        <span><i class="ri-user-fill primary"></i></span>
                                        <span class="primary">John Smith</span>
                                    </li>
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
                                    <a href="#" class="ic-btn">Enrolled Bootcamp</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ic-enroll-div">
                        <h3 class="fw-700 fs-30 black">$29.00</h3>
                        <div class="ic-bootcamp-links">
                            <ul>
                                <li>
                                    <span class="d-flex align-items-center"><i class="ri-translate"></i> Cohort start</span>
                                    <span> 3 Apr, 2023</span>
                                </li>
                                <li>
                                    <span class="d-flex align-items-center"><i class="ri-anchor-line"></i> Format</span>
                                    <span> Online Live</span>
                                </li>
                                <li>
                                    <span class="d-flex align-items-center"><i class="ri-calendar-2-line"></i>
                                        Duration</span>
                                    <span> 11 Months</span>
                                </li>
                                <li>
                                    <span class="d-flex align-items-center"><i class="ri-translate"></i> Language</span>
                                    <span> English</span>
                                </li>
                            </ul>
                            <a href="#" class="enroll-btn ic-btn rounded w-100 mb-20">Enroll Now</a>
                            <a href="#" class="ic-btn-black rounded w-100">Get for business</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- banner part end --}}

    <section class="ic-course-curriulum pb-30 ic-section-space-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="bootcamps-content mb-30">
                        <h2 class="fs-30 fw-600">What is Programming</h2>
                        <p class="fw-300">Throughout this course, you will be learning various essential things that are
                            mostly used by a
                            flutter developer when he/she is working at some firm.
                            This course will help you learn how to create fast and stunning mobile applications with so much
                            ease. The projects/apps which you will be making throughout the course will be working on
                            android as well as ios. Some changes to the projects make them compatible will web browsers as
                            well.
                        </p>
                        <p class="fw-300">You will also be building a large number of apps with the difficulty level ranging
                            from beginner
                            to advanced and these projects/apps will help you get better with the concepts eventually.</p>

                        <a href="#" class="ic-btn rounded">Program syllabus <i class="ri-file-download-line"></i></a>
                    </div>
                    <div class="bootcamps-content mb-30">
                        <h2 class="fs-30 fw-600">What is Programming</h2>
                        <p class="fw-300">Throughout this course, you will be learning various essential things that are
                            mostly used by a
                            flutter developer when he/she is working at some firm.
                            This course will help you learn how to create fast and stunning mobile applications with so much
                            ease. The projects/apps which you will be making throughout the course will be working on
                            android as well as ios. Some changes to the projects make them compatible will web browsers as
                            well.
                        </p>
                        <p class="fw-300">You will also be building a large number of apps with the difficulty level ranging
                            from beginner
                            to advanced and these projects/apps will help you get better with the concepts eventually.</p>

                        <a href="#" class="ic-btn rounded">Program syllabus <i class="ri-file-download-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 ic-curiculam-right">
                    <div class="accordion ic-course-video-all" id="accordionExample">
                        <div class="accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    <div class="ic-video-milestone">
                                        <span class="p-circle finish-module"></span>
                                        <div class="ic-course-video">
                                            <h6><img src="{{ asset('frontend/images/video-icons.svg') }}" alt="">
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
                                            <h6><img src="{{ asset('frontend/images/video-icons.svg') }}" alt="">
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
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    <div class="ic-video-milestone">
                                        <span class="p-circle"></span>
                                        <div class="ic-course-video">
                                            <h6><img src="{{ asset('frontend/images/video-icons.svg') }}" alt="">
                                                01 - Milestone : Personal Portfolio?</h6>
                                            <span class="video-times">(3:36)</span>
                                        </div>
                                    </div>
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
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
                                                </div>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ic-course-details pt-0">
        <div class="container">
            <div class="ic-course-tabs">
                <div class="ic-tabs-links">
                    <ul>
                        <li>
                            <a href="#" class="ic-discription-links active" data-tabs="course-overview">Course
                                Overview</a>
                        </li>
                        <li>
                            <a href="#" class="ic-discription-links" data-tabs="announcements">Announcements</a>
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
                        <div class="ic-overview-content pt-0">
                            <div class="ic-overview-content-items">
                                <div class="types-numbers">
                                    <div class="discription">
                                        <p class="welcome-text">Welcome to Development 101, your ultimate guide for
                                            learning
                                            Web development.
                                        </p>
                                        <p>Throughout this course, you will be learning various essential things that
                                            are
                                            mostly used by a flutter developer when he/she is working at some firm.

                                        </p>
                                        <p>This course will help you learn how to create fast and stunning mobile
                                            applications with so much ease. The projects/apps which you will be making
                                            throughout the course will be working on android as well as ios. Some
                                            changes to
                                            the projects make them compatible will web browsers as well.

                                        </p>
                                        <p>You will also be building a large number of apps with the difficulty level
                                            ranging from beginner to advanced and these projects/apps will help you get
                                            better with the concepts eventually.
                                            I will also be covering some of the most used flutter packages which are
                                            generally used while we are developing a flutter app.

                                        </p>
                                        <p>Flutter is Google’s UI toolkit for building beautiful, natively compiled
                                            applications for mobile, web, and desktop from a single codebase. Delight
                                            your
                                            users with Flutter's built-in beautiful Material Design. Flutter's hot
                                            reload
                                            helps you quickly and easily experiment, build UIs, add features, and fix
                                            bugs
                                            faster. Cross-platform development with Flutter.
                                            Flutter’s widgets incorporate all critical platform differences such as
                                            scrolling, navigation, icons, and fonts to provide full native performance
                                            on
                                            both iOS and Android.

                                        </p>
                                        <p>Happy Learning!!</p>
                                    </div>
                                </div>
                                <div class="tags-name">
                                    <div class="w-100">
                                        <p class="ic-whatyou">What you’ll learn</p>
                                        <ul class="video-tags-name">
                                            <li>
                                                <p><img src="https://mc-dns.test/frontend/images/check-video.png"
                                                        alt="">
                                                    Developer</p>
                                            </li>
                                            <li>
                                                <p><img src="https://mc-dns.test/frontend/images/check-video.png"
                                                        alt="">
                                                    Web Development</p>
                                            </li>
                                            <li>
                                                <p><img src="https://mc-dns.test/frontend/images/check-video.png"
                                                        alt="">
                                                    Android Development</p>
                                            </li>
                                            <li>
                                                <p><img src="https://mc-dns.test/frontend/images/check-video.png"
                                                        alt="">
                                                    cross platform development</p>
                                            </li>
                                            <li>
                                                <p><img src="https://mc-dns.test/frontend/images/check-video.png"
                                                        alt="">
                                                    cross platform development</p>
                                            </li>
                                            <li>
                                                <p><img src="https://mc-dns.test/frontend/images/check-video.png"
                                                        alt="">
                                                    web app development</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="tags-name">
                                    <div class="w-100">
                                        <p class="ic-whatyou">Who this course is for</p>
                                        <ul class="video-tags-name">
                                            <li>
                                                <p><img src="https://mc-dns.test/frontend/images/check-video.png"
                                                        alt="">
                                                    Begineer</p>
                                            </li>
                                            <li>
                                                <p><img src="https://mc-dns.test/frontend/images/check-video.png"
                                                        alt="">
                                                    Web Developers</p>
                                            </li>
                                            <li>
                                                <p><img src="https://mc-dns.test/frontend/images/check-video.png"
                                                        alt="">
                                                    Android Development</p>
                                            </li>
                                            <li>
                                                <p><img src="https://mc-dns.test/frontend/images/check-video.png"
                                                        alt="">
                                                    cross platform development</p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic-tabs-content-items " id="announcements">
                        <div class="ic-announcements-items">
                            <div class="ic-announcements-avatars"><img
                                    src="https://mc-dns.test/frontend/images/waiting-comment-4.png" alt="">
                                <div>
                                    <h6>Leslie Alexander</h6>
                                    <ul>
                                        <li><svg width="5" height="5" viewBox="0 0 5 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="2.5" cy="2.5" r="2.5" fill="#00ACB6">
                                                </circle>
                                            </svg> <span>posted an announcement</span></li>
                                        <li><svg width="5" height="5" viewBox="0 0 5 5" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="2.5" cy="2.5" r="2.5" fill="#00ACB6">
                                                </circle>
                                            </svg> <span>10 days ago</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ic-announcements-content">
                                <h5>My 2022 New Year Presents in Advance</h5>
                                <p>Hey there, I hope you are doing well. :)</p>
                                <p>Seven months back, I published my very first course on Udemy, since then I started
                                    this
                                    journey of creating and sharing with you, also listened and learned a lot from your
                                    feedback. Thank you so much for supporting the courses! To reward you for long-term
                                    support as an established student and get ready for the coming year, I hand-picked 3
                                    flutter development courses out of my 7 paid courses on Udemy and opened their 5
                                    days
                                    FREE coupons for you. You can find topics you like to enroll in and start learning
                                    now
                                    for FREE if you haven't done yet. Please note since Udemy's IPO it has a new coupon
                                    policy to allow FREE coupons open to the first 1000 enrollments and expires in 5
                                    days so
                                    make sure you start earlier before they expire.</p>
                                <div class="pt-4 pb-4">
                                    <p>1. Carousel UI from Scratch with Flutter -&gt; <a href="#">Enroll Here</a></p>
                                    <p>2. Artistic UI from Scratch with Flutter -&gt; <a href="#">Enroll Here</a></p>
                                    <p>3. Flutter Music Player App with State Management from Scratch -&gt; <a
                                            href="#">Enroll Here</a></p>
                                </div>
                                <p>As a bonus, I am also giving the "Flutter UI Certification-Your Complete UI
                                    Masterclass"
                                    course at a discounted price of 360 INR (4.84$).
                                    That is 2560INR (34.4$) -&gt; 360 INR (4.84$).
                                    This course has 10 amazing UIs which you will be developing and enhancing your UI
                                    development skills in Flutter. This discounted price will be there for five days so
                                    make
                                    sure to enroll and enhance your UI development skills in flutter.
                                    Flutter UI Certification-Your Complete UI Masterclass -&gt; <a href="#">Enroll
                                        here</a></p>
                                <div class="pt-4">
                                    <p>See you in class:)</p>
                                    <p>Yours Truly,</p>
                                    <p>Leslie Alexander</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic-tabs-content-items " id="reviews">
                        <div class="ic-video-reviews">
                            <div class="ic-video-review-content">
                                <div class="student-feedback">
                                    <div class="review-count">
                                        <p class="review-star-point">Reviews <i class="ri-star-fill"></i>
                                            <span>4.5</span>
                                        </p>
                                        <p>1,997 total</p>
                                    </div>

                                    <div class="review-count-shows">
                                        <div class="single-reviews">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                            <span class="ic-video-star">5 Star</span>
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 25%"></div>
                                            </div>
                                            <span class="ic-video-review-count">58</span>
                                        </div>
                                        <div class="single-reviews">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                            <span class="ic-video-star">4 Star</span>
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 60%"></div>
                                            </div>
                                            <span class="ic-video-review-count">20</span>
                                        </div>
                                        <div class="single-reviews">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                            <span class="ic-video-star">3 Star</span>
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 50%"></div>
                                            </div>
                                            <span class="ic-video-review-count">15</span>
                                        </div>
                                        <div class="single-reviews">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                            <span class="ic-video-star">2 Star</span>
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 20%"></div>
                                            </div>
                                            <span class="ic-video-review-count">10</span>
                                        </div>
                                        <div class="single-reviews">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div>
                                            <span class="ic-video-star">1 Star</span>
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar" style="width: 20%"></div>
                                            </div>
                                            <span class="ic-video-review-count">1</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ic-review-comment">
                                <div class="ic-review-headers">
                                    <h5>Reviews</h5>
                                    <div class="d-flex">
                                        <p>Filter ratings</p>
                                        <select name="" id="" class="selectpicker">
                                            <option value="0">Recent Reviews</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="ic-textArea">
                                    <img src="{{ asset('frontend/images/waiting-comment-4.png') }}" alt="">
                                    <form action="#">
                                        <textarea name="" id="" class="form-control"></textarea>
                                    </form>
                                </div>
                                <div class="ic-user-review-shows">
                                    <div class="ic-user-review-avatar">
                                        <img src="{{ asset('frontend/images/waiting-comment-4.png') }}" alt="">
                                        <div class="">
                                            <p class="ic-user-avatar-text">Jane Cooper</p>
                                            <p class="user-review-sent">
                                                <i class="ri-star-s-fill"></i>
                                                4.98
                                                <svg width="5" height="5" viewBox="0 0 5 5" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2.5" cy="2.5" r="2.5"
                                                        fill="#00ACB6" />
                                                </svg>
                                                <span class="publish-text">Published 2 months ago</span>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="ic-user-comment-show">There are many variations of passages of Lorem
                                        Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour, or randomised words which don't look even slightly believable. If you
                                        are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.</p>
                                    <ul class="comment-likes">
                                        <li>
                                            <a href="#"><i class="ri-thumb-up-fill"></i> Helpful </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ri-thumb-down-fill"></i> Not helpful </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ic-user-review-shows">
                                    <div class="ic-user-review-avatar">
                                        <img src="{{ asset('frontend/images/waiting-comment-4.png') }}" alt="">
                                        <div class="">
                                            <p class="ic-user-avatar-text">Jane Cooper</p>
                                            <p class="user-review-sent">
                                                <i class="ri-star-s-fill"></i>
                                                4.98
                                                <svg width="5" height="5" viewBox="0 0 5 5" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2.5" cy="2.5" r="2.5"
                                                        fill="#00ACB6" />
                                                </svg>
                                                <span class="publish-text">Published 2 months ago</span>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="ic-user-comment-show">There are many variations of passages of Lorem
                                        Ipsum
                                        available, but the majority have suffered alteration in some form, by injected
                                        humour, or randomised words which don't look even slightly believable. If you
                                        are
                                        going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                        embarrassing hidden in the middle of text.</p>
                                    <ul class="comment-likes">
                                        <li>
                                            <a href="#"><i class="ri-thumb-up-fill"></i> Helpful </a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="ri-thumb-down-fill"></i> Not helpful </a>
                                        </li>
                                    </ul>
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
                                        <span>
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
                                <p class="gray fw-300 pt-2">Contrary to popular belief, Lorem Ipsum is not simply random
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
                                <p class="gray fw-300 pt-2">Contrary to popular belief, Lorem Ipsum is not simply random
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
                                <p class="gray fw-300 pt-2">Contrary to popular belief, Lorem Ipsum is not simply random
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
                                <p class="gray fw-300 pt-2">Contrary to popular belief, Lorem Ipsum is not simply random
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
                                <p class="gray">The globally recognized PMP® certification can help you land lucrative
                                    roles in IT, manufacturing, finance, healthcare, and other exciting industries.
                                    Certified PMP®'s drive better project performance and are often rewarded with
                                    substantial pay raises as shown below.</p>
                            </div>
                            {{-- <div class="ic-benefets-sall-statagies">
                                <div class="ic-benefetis-left">
                                    <p class=" fw-500 fs-20 heading-benefetis">Designation</p>
                                    <div class="inner-div">
                                        <ul class="ic-">
                                            <li>
                                                <a href="#" class="ic-discription-links active"
                                                    data-tabs="course-overview">Project Director</a>
                                            </li>
                                            <li>
                                                <a href="#" class="ic-discription-links active"
                                                    data-tabs="course-overview">Senior Project Manager</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ic-benefetis-right">
                                    <div class="ic-benefets-tabs-content active">
                                        <div class="benefits-new-divs-flex">
                                            <div class="benefits-new-divs-itms">
                                                <p class="fw-500 fs-20 heading-benefetis">Annual Salary</p>
                                                <div class="inner-div annual-salary">
                                                    <div class="annual-salary-bars">
                                                        <div class="bars">
                                                            <span>$75K</span>
                                                            <span>Min</span>
                                                        </div>
                                                        <div class="bars"></div>
                                                        <div class="bars">
                                                            <span>$75K</span>
                                                            <span>Min</span>
                                                        </div>
                                                        <div class="bars"></div>
                                                        <div class="bars">
                                                            <span>$75K</span>
                                                            <span>Min</span>
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
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('script')
@endpush
