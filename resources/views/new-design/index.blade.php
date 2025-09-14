@extends('layouts.master')

@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part"
        style="background-image:  linear-gradient(0deg, rgba(242, 242, 242, 0.96), rgba(242, 242, 242, 0.96)),  url({{ asset('/new-frontend/images/banner.png') }})">
        <div class="container">
            <div class="row">   
                <div class="col-lg-7">
                    <div class="ic-banner-content">
                        <span class="ic-heading-title mb-15">Welcome To MCdns</span>
                        <h1 class="white pb-15 banner-heading"><span>MCdns</span> Learning Your Online Training Provider.
                        </h1>
                        <div class="row">
                            <div class="col-xxl-10 col-lg-12">
                                <p class="color-deep-gray pb-30">MCdns is the world’s #1 online bootcamp and one of the world’s
                                    leading certification training providers. We partner with companies and individuals to
                                    address their unique needs, providing training and coaching that helps working
                                    professionaeir career goals.</p>
                                <div class="ic-video-programs">
                                    <a href="#" class="ic-btn">Explore Programs <i
                                            class="ri-arrow-right-line"></i></a>
                                    <a href="#" class="ic-btn-outline">For Businesses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ic-banner-images">
                        <img src="{{ asset('/new-frontend/images/banner-right.png') }}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- banner part end --}}

    {{-- earn certificate card start --}}
    <section class="ic-certification-part ic-section-space">
        <div class="container">
            <div class="row g-2 g-lg-4">
                <div class="col-lg-3 col-md-6">
                    <div class="ic-certification-items">
                        <div class="ic-card-icons">
                            <img src="{{ asset('new-frontend/images/experts.png') }}" alt="">
                        </div>
                        <h3>Learn From Experts</h3>
                        <p>Mornings of spring which I enjoy with my whole heart about the gen</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-certification-items">
                        <div class="ic-card-icons">
                            <img src="{{ asset('new-frontend/images/certificate-1.png') }}" alt="">
                        </div>
                        <h3>Earn a Certificate</h3>
                        <p>Mornings of spring which I enjoy with my whole heart about the gen</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-certification-items">
                        <div class="ic-card-icons">
                            <img src="{{ asset('new-frontend/images/certificate-1.png') }}" alt="">
                        </div>
                        <h3>Earn a Certificate</h3>
                        <p>Mornings of spring which I enjoy with my whole heart about the gen</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-certification-items">
                        <div class="ic-card-icons">
                            <img src="{{ asset('new-frontend/images/certificate-1.png') }}" alt="">
                        </div>
                        <h3>B2B for your
                            online education</h3>
                        <a href="#" class="ic-read-more">Read More <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- earn certificate card end --}}

    {{-- thousands of students --}}
    <section class="ic-thounds-students ic-section-space bg-white">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="ic-thousands-maps">
                        <div class="ic-man-images">
                            <img src="{{ asset('new-frontend/images/thousand-man.png') }}" class="ic-statagis"
                                alt="">
                            <img src="{{ asset('new-frontend/images/about-cart-design.png') }}" class="ic-images-doted"
                                alt="">
                            <div class="ic-statistic">
                                <p class="body-font">Weekly Study</p>
                                <span class="extra-small gray">48 H 35 min</span>
                                <img src="{{ asset('new-frontend/images/statistic.png') }}" alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-thousands-text">
                        <h2 class="mb-10"><span class="primary">Reach out</span> for <br> business inquires</h2>
                        <p class="color-deep-gray pb-20 fw-300">CYou can purchase our API and use our Bootcamps, Course, Playground &
                            Wiki in your own website for a small payment.</p>
                        {{-- <div class="ic-mission-vission">
                            <div class="row g-4">
                                <div class="col-lg-6 col-md-6">
                                    <div class="ic-mission-items">
                                        <img src="{{ asset('new-frontend/images/ic-stack.png') }}" alt="">
                                        <h3>Our Mission & Vision</h3>
                                        <p>Etiam sed vulputate nisl, eu elementum arcu. Vivamus dignissim tortor in tellus
                                            dictum pellentesque. <a href="#">ReadMore</a></p>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="ic-mission-items">
                                        <img src="{{ asset('new-frontend/images/ic-bug.png') }}" alt="">
                                        <h3>Our Simple culture</h3>
                                        <p>Etiam sed vulputate nisl, eu elementum arcu. Vivamus dignissim tortor in tellus
                                            dictum pellentesque. <a href="#">ReadMore</a></p>
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <ul class="ic-reachout">
                            <li>
                                <i class="ri-check-line"></i>
                                <div>
                                    <h4>Unlock Your Team's Potential</h4>
                                    <p class="fw-300 ">Vivamus dignissim tortor in tellus dictum pellentesque.</p>
                                </div>
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                <div>
                                    <h4>MCdns Learning an Advantages.</h4>
                                    <p class="fw-300 ">Vivamus dignissim tortor in tellus dictum.</p>
                                </div>
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                <div>
                                    <h4>Tailored Solutions</h4>
                                    <p class="fw-300 ">Etiam sed vulputate nisl, eu elementum arcu.</p>
                                </div>
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                <div>
                                    <h4>Business type of company to enroll their students</h4>
                                    <p class="fw-300 ">Etiam sed vulputate nisl, eu elementum arcu.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="ic-thousand-buttons">
                            <a href="#" class="ic-btn">API Documentation
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.75 12.5H20.25" stroke="white" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                    <path d="M13.5 5.75L20.25 12.5L13.5 19.25" stroke="white" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                            <a href="#" class="ic-btn-outline fw-400">Get API Keys
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M3.75 12.5H20.25" stroke="#158DA7" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                    <path d="M13.5 5.75L20.25 12.5L13.5 19.25" stroke="#158DA7" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- thousands of students --}}

    {{-- benefits of learning --}}
    <section class="ic-benefits-learning ic-section-space"
        style="background-image: linear-gradient(180deg, rgba(46, 183, 211, 0.95) 0.01%, rgba(6, 115, 138, 0.95) 100%), url({{ asset('/new-frontend/images/banner.png') }})">
        <div class="container">
            <div class="row align-items-end">
                <div class="col-lg-7 m-auto">
                    <div class="ic-headers text-center">
                        <p class="ic-borderWith-whiteBg mb-15">Why Choose Us</p>
                        <h2 class="white">Benefits of online Education Service At <span class="black">MCdns</span></h2>
                    </div>
                </div>
                {{-- <div class="col-lg-4">
                    <div class="ic-slider-arrows pb-60">
                        <button class="ic-benefets-1"><i class="ri-arrow-left-line"></i></button>
                        <button class="ic-benefets-2"><i class="ri-arrow-right-line"></i></button>
                    </div>
                </div> --}}
            </div>
            <div class="ic-slider-arrows">
                <button class="ic-benefets-1 mobile-device-1"><i class="ri-arrow-left-line"></i></button>
                <div class="ic-benefitsOf-learning">
                    <div class="ic-benefefits-items">
                        <div class="benefefits-icons">
                            <img src="{{ asset('new-frontend/images/clock.png') }}" alt="">
                        </div>
                        <h3 class="black">Certified Instructors</h3>
                        <p class="color-deep-gray">We are team and we are Great. And Simple With shored.</p>
                    </div>
                    <div class="ic-benefefits-items">
                        <div class="benefefits-icons">
                            <img src="{{ asset('new-frontend/images/fire-step.png') }}" alt="">
                        </div>
                        <h3 class="black">Hybrid Training</h3>
                        <p class="color-deep-gray">We are team and we are Great. And Simple With shored.</p>
                    </div>
                    <div class="ic-benefefits-items">
                        <div class="benefefits-icons">
                            <img src="{{ asset('new-frontend/images/fire-step.png') }}" alt="">
                        </div>
                        <h3 class="black">24/7 Live Support</h3>
                        <p class="color-deep-gray">We are team and we are Great. And Simple With shored.</p>
                    </div>
                    <div class="ic-benefefits-items">
                        <div class="benefefits-icons">
                            <img src="{{ asset('new-frontend/images/security.png') }}" alt="">
                        </div>
                        <h3 class="black">Secure Connection</h3>
                        <p class="color-deep-gray">We are team and we are Great. And Simple With shored.</p>
                    </div>
                    <div class="ic-benefefits-items">
                        <div class="benefefits-icons">
                            <img src="{{ asset('new-frontend/images/security.png') }}" alt="">
                        </div>
                        <h3 class="black">Secure Connection</h3>
                        <p class="color-deep-gray">We are team and we are Great. And Simple With shored.</p>
                    </div>
                </div>
                <div class="mobile-device">
                    <button class="ic-benefets-1 "><i class="ri-arrow-left-line"></i></button>
                    <button class="ic-benefets-2 "><i class="ri-arrow-right-line"></i></button>
                </div>
                <button class="ic-benefets-2 mobile-device-2"><i class="ri-arrow-right-line"></i></button>
            </div>
        </div>
    </section>
    {{-- benefits of learning --}}

    {{-- bootcamp --}}
    <section class="ic-bootcamp-part ic-section-space bg-white">
        <div class="container">
            <div class="ic-headers">
                <p class="ic-borderWith-whiteBg mb-15">Bootcamps</p>
                <h2>Our Recent Bootcamp Traning</h2>
            </div>
            <div class="row g-2 g-xl-4">
                <div class="col-lg-3 col-md-6">
                    <div class="ic-courses-items ic-bootCamp-items">
                        <div class="ic-courses-img">
                            <img src="{{ asset('new-frontend/images/courses-1.png') }}" alt="">
                            <span class="course-name tag-text">Jane Cooper</span>
                            <p class="ic-bc-price">$40.00</p>
                        </div>
                        <a href="#" class="black">
                            <h5 class="pt-10 pb-10 black">Make Business Strategies and Applications</h5>
                        </a>
                        <ul class="ic-bc-details">
                            <li>
                                <p class="color-deep-gray bc-discript"><i class="ri-calendar-check-fill"></i> Cohort starts-21 Feb,
                                    2023</p>
                            </li>
                            <li>
                                <p class="color-deep-gray bc-discript"><i class="ri-calendar-check-fill"></i> Cohort starts-21 Feb,
                                    2023</p>
                            </li>
                            <li>
                                <div class="ic-review-head">
                                    <span class="review-star">
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                    </span>
                                    <p class="review-count">4 <span>(320)</span></p>
                                </div>
                            </li>
                        </ul>
                        <div class="ic-course-btn">
                            <a href="#" class="ic-bc-btn">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-courses-items ic-bootCamp-items">
                        <div class="ic-courses-img">
                            <img src="{{ asset('new-frontend/images/courses-1.png') }}" alt="">
                            <span class="course-name tag-text">Jane Cooper</span>
                            <p class="ic-bc-price">$40.00</p>
                        </div>
                        <a href="#" class="black">
                            <h5 class="pt-10 pb-10 black">Make Business Strategies and Applications</h5>
                        </a>
                        <ul class="ic-bc-details">
                            <li>
                                <p class="color-deep-gray bc-discript"><i class="ri-calendar-check-fill"></i> Cohort starts-21 Feb,
                                    2023</p>
                            </li>
                            <li>
                                <p class="color-deep-gray bc-discript"><i class="ri-calendar-check-fill"></i> Cohort starts-21 Feb,
                                    2023</p>
                            </li>
                            <li>
                                <div class="ic-review-head">
                                    <span class="review-star">
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                    </span>
                                    <p class="review-count">4 <span>(320)</span></p>
                                </div>
                            </li>
                        </ul>
                        <div class="ic-course-btn">
                            <a href="#" class="ic-bc-btn">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-courses-items ic-bootCamp-items">
                        <div class="ic-courses-img">
                            <img src="{{ asset('new-frontend/images/courses-1.png') }}" alt="">
                            <span class="course-name tag-text">Jane Cooper</span>
                            <p class="ic-bc-price">$40.00</p>
                        </div>
                        <a href="#" class="black">
                            <h5 class="pt-10 pb-10 black">Make Business Strategies and Applications</h5>
                        </a>
                        <ul class="ic-bc-details">
                            <li>
                                <p class="color-deep-gray bc-discript"><i class="ri-calendar-check-fill"></i> Cohort starts-21 Feb,
                                    2023</p>
                            </li>
                            <li>
                                <p class="color-deep-gray bc-discript"><i class="ri-calendar-check-fill"></i> Cohort starts-21 Feb,
                                    2023</p>
                            </li>
                            <li>
                                <div class="ic-review-head">
                                    <span class="review-star">
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                    </span>
                                    <p class="review-count">4 <span>(320)</span></p>
                                </div>
                            </li>
                        </ul>
                        <div class="ic-course-btn">
                            <a href="#" class="ic-bc-btn">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-courses-items ic-bootCamp-items">
                        <div class="ic-courses-img">
                            <img src="{{ asset('new-frontend/images/courses-1.png') }}" alt="">
                            <span class="course-name tag-text">Jane Cooper</span>
                            <p class="ic-bc-price">$40.00</p>
                        </div>
                        <a href="#" class="black">
                            <h5 class="pt-10 pb-10 black">Make Business Strategies and Applications</h5>
                        </a>
                        <ul class="ic-bc-details">
                            <li>
                                <p class="color-deep-gray bc-discript"><i class="ri-calendar-check-fill"></i> Cohort starts-21 Feb,
                                    2023</p>
                            </li>
                            <li>
                                <p class="color-deep-gray bc-discript"><i class="ri-calendar-check-fill"></i> Cohort starts-21 Feb,
                                    2023</p>
                            </li>
                            <li>
                                <div class="ic-review-head">
                                    <span class="review-star">
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                    </span>
                                    <p class="review-count">4 <span>(320)</span></p>
                                </div>
                            </li>
                        </ul>
                        <div class="ic-course-btn">
                            <a href="#" class="ic-bc-btn">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ic-more-course">
                <a href="#" class="btn-black">View All Bootcamps <i class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </section>
    {{-- bootcamp --}}

    {{-- enroll latest courses --}}
    <section class="ic-enroll-lateset-courses ic-section-space bg-shade">
        <div class="container">
            <div class="ic-headers">
                <p class="ic-borderWith-whiteBg mb-15">Latest Courses</p>
                <h2>Enroll To Our Latest Courses</h2>
            </div>
            <div class="row  g-2 g-xl-4">
                <div class="col-lg-3 col-md-6">
                    <div class="ic-courses-items">
                        <div class="ic-courses-img">
                            <img src="{{ asset('new-frontend/images/courses-1.png') }}" alt="">
                            <span class="course-name tag-text">Cameron</span>
                            <a href="#" class="heart"><i class="ri-heart-line"></i></a>
                            <ul class="ic-star-hour">
                                <li>
                                    <p class="ic-stars">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4.63989" cy="5" r="4.5" fill="#00ACB6" />
                                        </svg>

                                        5.0 <span><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                                class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                                class="ri-star-s-fill"></i></span>
                                    </p>
                                </li>
                                <li class="bg-primary white">
                                    <svg width="10" height="9" viewBox="0 0 10 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.69995" cy="4.5" r="4.5" fill="white" />
                                    </svg>

                                    Per Hour
                                </li>
                            </ul>
                        </div>
                        <h5 class="pt-10 pb-10">Data Science Real-Life Data Science Exercises Included</h5>
                        <ul class="ic-list-arrows">
                            <li>
                                <i class="ri-calendar-check-line"></i>
                                <span>multiple sessions</span>
                            </li>
                            <li>
                                <i class="ri-file-list-line"></i>
                                <span>Enrolled - 100 Students Enroll</span>
                            </li>
                        </ul>
                        <div class="ic-course-btn">
                            <a href="#" class="ic-booking">Book <i class="ri-arrow-right-line"></i></a>
                            <p>$ 165.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-courses-items">
                        <div class="ic-courses-img">
                            <img src="{{ asset('new-frontend/images/courses-1.png') }}" alt="">
                            <span class="course-name tag-text">Cameron</span>
                            <a href="#" class="heart"><i class="ri-heart-line"></i></a>
                            <ul class="ic-star-hour">
                                <li>
                                    <p class="ic-stars">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4.63989" cy="5" r="4.5" fill="#00ACB6" />
                                        </svg>

                                        5.0 <span><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                                class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                                class="ri-star-s-fill"></i></span>
                                    </p>
                                </li>
                                <li class="bg-primary white">
                                    <svg width="10" height="9" viewBox="0 0 10 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.69995" cy="4.5" r="4.5" fill="white" />
                                    </svg>

                                    Per Hour
                                </li>
                            </ul>
                        </div>
                        <h5 class="pt-10 pb-10">Data Science Real-Life Data Science Exercises Included</h5>
                        <ul class="ic-list-arrows">
                            <li>
                                <i class="ri-calendar-check-line"></i>
                                <span>multiple sessions</span>
                            </li>
                            <li>
                                <i class="ri-file-list-line"></i>
                                <span>Enrolled - 100 Students Enroll</span>
                            </li>
                        </ul>
                        <div class="ic-course-btn">
                            <a href="#" class="ic-booking">Book <i class="ri-arrow-right-line"></i></a>
                            <p>$ 165.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-courses-items">
                        <div class="ic-courses-img">
                            <img src="{{ asset('new-frontend/images/courses-1.png') }}" alt="">
                            <span class="course-name tag-text">Cameron</span>
                            <a href="#" class="heart"><i class="ri-heart-line"></i></a>
                            <ul class="ic-star-hour">
                                <li>
                                    <p class="ic-stars">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4.63989" cy="5" r="4.5" fill="#00ACB6" />
                                        </svg>

                                        5.0 <span><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                                class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                                class="ri-star-s-fill"></i></span>
                                    </p>
                                </li>
                                <li class="bg-primary white">
                                    <svg width="10" height="9" viewBox="0 0 10 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.69995" cy="4.5" r="4.5" fill="white" />
                                    </svg>

                                    Per Hour
                                </li>
                            </ul>
                        </div>
                        <h5 class="pt-10 pb-10">Data Science Real-Life Data Science Exercises Included</h5>
                        <ul class="ic-list-arrows">
                            <li>
                                <i class="ri-calendar-check-line"></i>
                                <span>multiple sessions</span>
                            </li>
                            <li>
                                <i class="ri-file-list-line"></i>
                                <span>Enrolled - 100 Students Enroll</span>
                            </li>
                        </ul>
                        <div class="ic-course-btn">
                            <a href="#" class="ic-booking">Book <i class="ri-arrow-right-line"></i></a>
                            <p>$ 165.00</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="ic-courses-items">
                        <div class="ic-courses-img">
                            <img src="{{ asset('new-frontend/images/courses-1.png') }}" alt="">
                            <span class="course-name tag-text">Cameron</span>
                            <a href="#" class="heart"><i class="ri-heart-line"></i></a>
                            <ul class="ic-star-hour">
                                <li>
                                    <p class="ic-stars">
                                        <svg width="10" height="10" viewBox="0 0 10 10" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4.63989" cy="5" r="4.5" fill="#00ACB6" />
                                        </svg>

                                        5.0 <span><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                                class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                                class="ri-star-s-fill"></i></span>
                                    </p>
                                </li>
                                <li class="bg-primary white">
                                    <svg width="10" height="9" viewBox="0 0 10 9" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.69995" cy="4.5" r="4.5" fill="white" />
                                    </svg>

                                    Per Hour
                                </li>
                            </ul>
                        </div>
                        <h5 class="pt-10 pb-10">Data Science Real-Life Data Science Exercises Included</h5>
                        <ul class="ic-list-arrows">
                            <li>
                                <i class="ri-calendar-check-line"></i>
                                <span>multiple sessions</span>
                            </li>
                            <li>
                                <i class="ri-file-list-line"></i>
                                <span>Enrolled - 100 Students Enroll</span>
                            </li>
                        </ul>
                        <div class="ic-course-btn">
                            <a href="#" class="ic-booking">Book <i class="ri-arrow-right-line"></i></a>
                            <p>$ 165.00</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ic-more-course">
                <a href="#" class="ic-btn">View All Courses <i class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </section>
    {{-- enroll latest courses --}}

    <section class="ic-profeesionals-career-goals ic-section-space">
        <div class="container">
            <div class="ic-headers">
                <p class="ic-borderWith-whiteBg mb-15">About us</p>
                <h2>Professionals In Their Career Goals</h2>
            </div>
        </div>
        <div class="ic__testimonial--slider"
            style="background-image: url({{ asset('/new-frontend') }}/images/testimonial.png);">
            <div class="container">
                <ul class="ic__testimonial--nav">
                    <li>
                        <a href="#" class="ic-tab-link active" data-link="avatar-1">
                            <div class="ic__testimonial--avatar avatar-1">
                                <img id="bigImage" src="{{ asset('/new-frontend') }}/images/avatar-1.png"
                                    alt="avatar">

                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="ic-tab-link" data-link="avatar-2">
                            <div class="ic__testimonial--avatar avatar-2">
                                <img src="{{ asset('/frontend') }}/images/avatar-5.png" alt="avatar">
                                <span class="ic-tooltips-test">Our Visions</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="ic-tab-link" data-link="avatar-3">
                            <div class="ic__testimonial--avatar avatar-3">
                                <img src="{{ asset('/frontend') }}/images/avatar-4.png" alt="avatar">
                                <span class="ic-tooltips-test">Our Cultures</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="ic-tab-link" data-link="avatar-4">
                            <div class="ic__testimonial--avatar avatar-4">
                                <img src="{{ asset('/frontend') }}/images/avatar-3.png" alt="avatar">
                                <span class="ic-tooltips-test">Our Values</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="ic-tab-link" data-link="avatar-5">
                            <div class="ic__testimonial--avatar avatar-5">
                                <img src="{{ asset('/frontend') }}/images/avatar-2.png" alt="avatar">
                                <span class="ic-tooltips-test">High Quality Services</span>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="ic-tab-link" data-link="avatar-6">
                            <div class="ic__testimonial--avatar avatar-6">
                                <img src="{{ asset('/frontend') }}/images/avatar-2.png" alt="avatar">
                                <span class="ic-tooltips-test">Our Missions</span>
                            </div>
                        </a>
                    </li>
                </ul>
                <div class="ic__testimonial--tabs--container">
                    <div class="ic__testimonial--tabs active" id="avatar-1">
                        <h5>Jony Scotty sani</h5>
                        <p>Build your financial literacy within a transparent community. Follow other investors, share
                            insights with people from different professional backgrounds, and never be alone.</p>

                        {{-- <span>UI Designer</span> --}}
                        {{-- <ul class="testimonial--social">
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
                        </ul> --}}
                    </div>
                    <div class="ic__testimonial--tabs" id="avatar-2">
                        <h5>Our Visions</h5>
                        <p>Build your financial literacy within a transparent community. Follow other investors, share
                            insights with people from different professional backgrounds, and never be alone.</p>

                        {{-- <span>UI Designer</span> --}}
                        {{-- <ul class="testimonial--social">
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
                        </ul> --}}
                    </div>
                    <div class="ic__testimonial--tabs" id="avatar-3">
                        <h5>Our Cultures</h5>
                        <p>Build your financial literacy within a transparent community. Follow other investors, share
                            insights with people from different professional backgrounds, and never be alone.</p>

                        {{-- <span>UI Designer</span> --}}
                        {{-- <ul class="testimonial--social">
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
                        </ul> --}}
                    </div>
                    <div class="ic__testimonial--tabs" id="avatar-4">
                        <h5>Jony Scotty razon</h5>
                        <p>Build your financial literacy within a transparent community. Follow other investors, share
                            insights with people from different professional backgrounds, and never be alone.</p>

                        {{-- <span>UI Designer</span> --}}
                        {{-- <ul class="testimonial--social">
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
                        </ul> --}}
                    </div>
                    <div class="ic__testimonial--tabs" id="avatar-5">
                        <h5>High Quality Services</h5>
                        <p>Build your financial literacy within a transparent community. Follow other investors, share
                            insights with people from different professional backgrounds, and never be alone.</p>

                        {{-- <span>UI Designer</span> --}}
                        {{-- <ul class="testimonial--social">
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
                        </ul> --}}
                    </div>
                    <div class="ic__testimonial--tabs" id="avatar-6">
                        <h5>Our Missions</h5>
                        <p>Build your financial literacy within a transparent community. Follow other investors, share
                            insights with people from different professional backgrounds, and never be alone.</p>

                        {{-- <span>UI Designer</span> --}}
                        {{-- <ul class="testimonial--social">
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
                        </ul> --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- student dashboard --}}
    <section class="ic-student-dashboard ic-section-space"
        style="background-image: linear-gradient(68.6deg, rgba(6, 115, 138, 0.95) -11.83%, rgba(42, 166, 192, 0.95) 96.57%), url({{ asset('new-frontend/images/student-bg.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="ic-headers text-center">
                        <p class="ic-borderWith-whiteBg mb-15">Dashboard</p>
                        <h2 class="white">Students Project Dashboard</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-10 m-auto position-relative">
                    <div class="ic-student-video-process">
                        <div class="ic-student-vedio">
                            <div class="plyr__video-embed player">
                                <iframe src="https://www.youtube.com/watch?v=HIMk-JlOPAA" allowfullscreen allowtransparency
                                    allow="autoplay">
                                </iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- student dashboard --}}



    {{-- enroll their students --}}
    {{-- <section class="ic-enroll-students ic-section-space-bottom-80">
        <div class="container">
            <div class="ic-enroll-company-business">
                <div class="ic-enroll-company-left">
                    <h2 class="black pb-24">Business type of company to enroll their students</h2>
                    <p class="color-deep-gray pb-30">Cras at pellentesque eros. Nullam vitae sapien et felis eleifend luctus. Nam ac
                        dui cursus, efficitur ante sed, tempor sapien. Praesent nec mattis enim. Mauris a laoreet purus.</p>
                    <ul class="ic-enroll-nav-list">
                        <li>
                            <img src="{{ asset('new-frontend/images/CheckCircle.png') }}" alt="">
                            <div>
                                <h4 class="black fw-500">API to onboard their organization Or Partnership</h4>
                                <p class="color-deep-gray">Etiam sed vulputate nisl, eu elementum arcu. Vivamus dignsim tortor in
                                    tellus dictum pellentesque. </p>
                            </div>
                        </li>
                        <li>
                            <img src="{{ asset('new-frontend/images/CheckCircle.png') }}" alt="">
                            <div>
                                <h4 class="black fw-500">Digital Skills, Industry-aligned, API Integrations</h4>
                                <p class="color-deep-gray">Vivamus dignissim tortor in tellus dictum pellentesque. Praesent mauris
                                    metus, dictum quis velit non.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="ic-btn-wrap">
                        <a href="#" class="ic-btn">Let’s Work Together <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                <div class="ic-enroll-company-right">
                    <img src="{{ asset('new-frontend/images/students-company.png') }}" alt="">
                </div>
            </div>
        </div>
    </section> --}}
    {{-- enroll their students --}}



    {{-- our strategies process --}}
    <section class="ic-strategies-part ic-section-space bg-white">
        <div class="container">
            <div class="ic-headers text-center">
                <p class="ic-borderWith-whiteBg mb-15">Unique Process</p>
                <h2 class="black">Our Strategies Process</h2>
            </div>
            <div class="ic-strategies--grid">
                <img src="{{ asset('new-frontend/images/line-arrows.png') }}" class="ic-line-arrows" alt="">
                <div class="ic-strategies--items position-relative">
                    <img src="{{ asset('new-frontend/images/vertical-arrows.png') }}" class="ic-vertical-arrows"
                        alt="">
                    <div class="ic--strategies-count sky-blue">
                        1
                    </div>
                    <img src="{{ asset('new-frontend/images/strategies-1.png') }}" alt="images">
                    <div class="ic--strategies--text">
                        <h5 class="sub-title">Students Counseling</h5>
                    </div>
                </div>
                <div class="ic-strategies--items position-relative">
                    <img src="{{ asset('new-frontend/images/vertical-arrows.png') }}" class="ic-vertical-arrows"
                        alt="">
                    <div class="ic--strategies-count sky-blue">
                        2
                    </div>
                    <img src="{{ asset('new-frontend/images/strategies-1.png') }}" alt="images">
                    <div class="ic--strategies--text">
                        <h5 class="sub-title">Success Coach Assignment</h5>
                    </div>
                </div>
                <div class="ic-strategies--items position-relative">
                    <img src="{{ asset('new-frontend/images/vertical-arrows.png') }}" class="ic-vertical-arrows"
                        alt="">
                    <div class="ic--strategies-count sky-blue">
                        3
                    </div>
                    <img src="{{ asset('new-frontend/images/strategies-1.png') }}" alt="images">
                    <div class="ic--strategies--text">
                        <h5 class="sub-title">Monthly 101</h5>
                    </div>
                </div>
                <div class="ic-strategies--items position-relative">
                    <img src="{{ asset('new-frontend/images/vertical-arrows.png') }}" class="ic-vertical-arrows"
                        alt="">
                    <div class="ic--strategies-count sky-blue">
                        4
                    </div>
                    <img src="{{ asset('new-frontend/images/strategies-1.png') }}" alt="images">
                    <div class="ic--strategies--text">
                        <h5 class="sub-title">Company-Based Projects</h5>
                    </div>
                </div>
                <div class="ic-strategies--items position-relative">
                    <div class="ic--strategies-count sky-blue">
                        5
                    </div>
                    <img src="{{ asset('new-frontend/images/strategies-1.png') }}" alt="images">
                    <div class="ic--strategies--text">
                        <h5 class="sub-title">Weekly Tests</h5>
                    </div>
                </div>
                <div class="ic-strategies--items position-relative">
                    <div class="ic--strategies-count sky-blue">
                        6
                    </div>
                    <img src="{{ asset('new-frontend/images/strategies-1.png') }}" alt="images">
                    <div class="ic--strategies--text">
                        <h5 class="sub-title">Monthly Proctored Exams</h5>
                    </div>
                </div>
                <div class="ic-strategies--items position-relative">
                    <div class="ic--strategies-count sky-blue">
                        7
                    </div>
                    <img src="{{ asset('new-frontend/images/strategies-1.png') }}" alt="images">
                    <div class="ic--strategies--text">
                        <h5 class="sub-title">Certifications</h5>
                    </div>
                </div>
                <div class="ic-strategies--items position-relative">
                    <div class="ic--strategies-count sky-blue">
                        8
                    </div>
                    <img src="{{ asset('new-frontend/images/strategies-1.png') }}" alt="images">
                    <div class="ic--strategies--text">
                        <h5 class="sub-title">Interview Preparation</h5>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- our strategies process --}}

    {{-- playground status --}}
    <section class="ic-playground-part ic-section-space">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-12">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ic-playground-content">
                                <p class="ic-borderWith-whiteBg mb-15">Playground</p>
                                <h3 class="black pb-15 black">MCdns Learning Playground Plus includes everything you’d get
                                    in the
                                    Standard Plan (all 20+ DevOps
                                    online training courses and 100+ labs).</h3>
                                {{-- <div class="ic-playground-state">
                                    <div class="ic-playground-program">
                                        <div class="ic-play-p">
                                            <img src="{{ asset('new-frontend/images/azure.png') }}" alt="">
                                        </div>
                                        <div class="ic-play-p">
                                            <img src="{{ asset('new-frontend/images/azure.png') }}" alt="">
                                        </div>
                                        <div class="ic-play-p">
                                            <img src="{{ asset('new-frontend/images/azure.png') }}" alt="">
                                        </div>
                                        <div class="ic-play-p">
                                            <img src="{{ asset('new-frontend/images/azure.png') }}" alt="">
                                        </div>
                                    </div>
                                    <div class="ic-mBtn-arrows">
                                        <button class="ic-play-arrow-1"><i class="ri-arrow-left-line"></i></button>
                                        more
                                        <button class="ic-play-arrow-2"><i class="ri-arrow-right-line"></i></button>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ic-playground-content">
                                <h4 class="pb-15 gray fw-500 fs-20">Cloud environments like AWS, Azure, or GCP A Docker
                                    server A
                                    Kubernetes
                                    cluster</h4>
                                <p class="color-deep-gray pb-30 ">Our hands-on labs are limited by both time and the topic.
                                    Playgrounds in
                                    MCdns Learning Plus are blank, clean environments intended for you to tinker with. Each
                                    playground can be extended, giving you all the time you need to test solutions.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-12">
                    <div class="ic-playground-video">
                        <video controls autoplay muted>
                            <source src="https://treehouse-code-samples.s3.amazonaws.com/html-video-and-audio/bridge.mp4"
                                type="video/mp4">
                        </video>
                    </div>
                    <div class="ic-playground-state">
                        <div class="ic-playground-program">
                            <a href="#" class="ic-play-p">
                                <img src="{{ asset('new-frontend/images/azure.png') }}" alt="">
                            </a>
                            <a href="#" class="ic-play-p">
                                <img src="{{ asset('new-frontend/images/aws.png') }}" alt="">
                            </a>
                            <a href="#" class="ic-play-p">
                                <img src="{{ asset('new-frontend/images/googlecloud.png') }}" alt="">
                            </a>
                            <a href="#" class="ic-play-p">
                                <img src="{{ asset('new-frontend/images/kubaret.png') }}" alt="">
                            </a>
                            <a href="#" class="ic-play-p">
                                <img src="{{ asset('new-frontend/images/doker.png') }}" alt="">
                            </a>
                            <a href="#" class="ic-play-p">
                                <p class="primary fw-500 d-flex align-items-center">More <i
                                        class="ri-arrow-right-line ms-2"></i></p>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- playground status --}}

    {{-- What Our Student Say --}}
    <section class="ic-testimonial-main ic-section-space bg-white">
        <div class="container">
            <div class="ic-headers text-center">
                <p class="ic-borderWith-whiteBg mb-15">Testimonial</p>
                <h2 class="black"><span class="primary">MCDns</span> User Recent reviews</h2>
            </div>
            {{-- What Our Student Say --}}

            <div class="ic-testimonial-slider">
                {{-- <div class="ic-testimonial-items">
                    <div class="reviews">
                        <span><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                class="ri-star-s-fill"></i></span><span>5.0</span>
                    </div>
                    <p class="text-testimonial">Contrary to popular belief, Lorem Ipsum is not simply random text. It has
                        roots in a piece of classical Latin literature from Contrary to popular belief, Lorem Ipsum</p>
                    <div class="ic-uses-avatar">
                        <img src="{{ asset('new-frontend/images/users-avatar.png') }}" alt="">
                        <div class="names">
                            <h6>Anthoni Jordan</h6>
                            <p class="color-deep-gray">MCDns, Student</p>
                        </div>
                    </div>
                </div> --}}
                <div class="">
                    <div class="ic-testi-items">
                        <div class="ic-testimonial-slider-items">
                            <div class="ic-testimonial-content-left">
                                <p class="fw-300">
                                    <span class="fw-500 black">Leslie Alexander </span>
                                    reviewed
                                    <span class="fw-500 primary">MCDns</span>
                                </p>
                                <ul class="ic-test-content">
                                    <li>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                    </li>
                                    <li>
                                        <p>UX/UI Designer</p>
                                    </li>
                                </ul>
                                <p class="fw-300 content-text-test">Contrary to popular belief, Lorem Ipsum is not simply
                                    random
                                    text. It has roots in a piece of classical Latin literature from Contrary to popular
                                    belief.
                                </p>
                            </div>
                            <div class="ic-testimonial-content-right">
                                <div class="ic-testimonial-img">
                                    <img src="{{ asset('new-frontend/images/test-mon-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ic-testimonial-slider-items">
                            <div class="ic-testimonial-content-left">
                                <p class="fw-300">
                                    <span class="fw-500 black">Leslie Alexander </span>
                                    reviewed
                                    <span class="fw-500 primary">MCDns</span>
                                </p>
                                <ul class="ic-test-content">
                                    <li>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                    </li>
                                    <li>
                                        <p>UX/UI Designer</p>
                                    </li>
                                </ul>
                                <p class="fw-300 content-text-test">Contrary to popular belief, Lorem Ipsum is not simply
                                    random
                                    text. It has roots in a piece of classical Latin literature from Contrary to popular
                                    belief.
                                </p>
                            </div>
                            <div class="ic-testimonial-content-right">
                                <div class="ic-testimonial-img">
                                    <img src="{{ asset('new-frontend/images/test-mon-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ic-testimonial-slider-items">
                            <div class="ic-testimonial-content-left">
                                <p class="fw-300">
                                    <span class="fw-500 black">Leslie Alexander </span>
                                    reviewed
                                    <span class="fw-500 primary">MCDns</span>
                                </p>
                                <ul class="ic-test-content">
                                    <li>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                    </li>
                                    <li>
                                        <p>UX/UI Designer</p>
                                    </li>
                                </ul>
                                <p class="fw-300 content-text-test">Contrary to popular belief, Lorem Ipsum is not simply
                                    random
                                    text. It has roots in a piece of classical Latin literature from Contrary to popular
                                    belief.
                                </p>
                            </div>
                            <div class="ic-testimonial-content-right">
                                <div class="ic-testimonial-img">
                                    <img src="{{ asset('new-frontend/images/test-mon-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ic-testimonial-slider-items">
                            <div class="ic-testimonial-content-left">
                                <p class="fw-300">
                                    <span class="fw-500 black">Leslie Alexander </span>
                                    reviewed
                                    <span class="fw-500 primary">MCDns</span>
                                </p>
                                <ul class="ic-test-content">
                                    <li>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                    </li>
                                    <li>
                                        <p>UX/UI Designer</p>
                                    </li>
                                </ul>
                                <p class="fw-300 content-text-test">Contrary to popular belief, Lorem Ipsum is not simply
                                    random
                                    text. It has roots in a piece of classical Latin literature from Contrary to popular
                                    belief.
                                </p>
                            </div>
                            <div class="ic-testimonial-content-right">
                                <div class="ic-testimonial-img">
                                    <img src="{{ asset('new-frontend/images/test-mon-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="">
                    <div class="ic-testi-items">
                        <div class="ic-testimonial-slider-items">
                            <div class="ic-testimonial-content-left">
                                <p class="fw-300">
                                    <span class="fw-500 black">Leslie Alexander </span>
                                    reviewed
                                    <span class="fw-500 primary">MCDns</span>
                                </p>
                                <ul class="ic-test-content">
                                    <li>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                    </li>
                                    <li>
                                        <p>UX/UI Designer</p>
                                    </li>
                                </ul>
                                <p class="fw-300 content-text-test">Contrary to popular belief, Lorem Ipsum is not simply
                                    random
                                    text. It has roots in a piece of classical Latin literature from Contrary to popular
                                    belief.
                                </p>
                            </div>
                            <div class="ic-testimonial-content-right">
                                <div class="ic-testimonial-img">
                                    <img src="{{ asset('new-frontend/images/test-mon-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ic-testimonial-slider-items">
                            <div class="ic-testimonial-content-left">
                                <p class="fw-300">
                                    <span class="fw-500 black">Leslie Alexander </span>
                                    reviewed
                                    <span class="fw-500 primary">MCDns</span>
                                </p>
                                <ul class="ic-test-content">
                                    <li>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                    </li>
                                    <li>
                                        <p>UX/UI Designer</p>
                                    </li>
                                </ul>
                                <p class="fw-300 content-text-test">Contrary to popular belief, Lorem Ipsum is not simply
                                    random
                                    text. It has roots in a piece of classical Latin literature from Contrary to popular
                                    belief.
                                </p>
                            </div>
                            <div class="ic-testimonial-content-right">
                                <div class="ic-testimonial-img">
                                    <img src="{{ asset('new-frontend/images/test-mon-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ic-testimonial-slider-items">
                            <div class="ic-testimonial-content-left">
                                <p class="fw-300">
                                    <span class="fw-500 black">Leslie Alexander </span>
                                    reviewed
                                    <span class="fw-500 primary">MCDns</span>
                                </p>
                                <ul class="ic-test-content">
                                    <li>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                    </li>
                                    <li>
                                        <p>UX/UI Designer</p>
                                    </li>
                                </ul>
                                <p class="fw-300 content-text-test">Contrary to popular belief, Lorem Ipsum is not simply
                                    random
                                    text. It has roots in a piece of classical Latin literature from Contrary to popular
                                    belief.
                                </p>
                            </div>
                            <div class="ic-testimonial-content-right">
                                <div class="ic-testimonial-img">
                                    <img src="{{ asset('new-frontend/images/test-mon-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="ic-testimonial-slider-items">
                            <div class="ic-testimonial-content-left">
                                <p class="fw-300">
                                    <span class="fw-500 black">Leslie Alexander </span>
                                    reviewed
                                    <span class="fw-500 primary">MCDns</span>
                                </p>
                                <ul class="ic-test-content">
                                    <li>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                        <i class="ri-star-s-fill"></i>
                                    </li>
                                    <li>
                                        <p>UX/UI Designer</p>
                                    </li>
                                </ul>
                                <p class="fw-300 content-text-test">Contrary to popular belief, Lorem Ipsum is not simply
                                    random
                                    text. It has roots in a piece of classical Latin literature from Contrary to popular
                                    belief.
                                </p>
                            </div>
                            <div class="ic-testimonial-content-right">
                                <div class="ic-testimonial-img">
                                    <img src="{{ asset('new-frontend/images/test-mon-1.png') }}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ic-slider-arrows d-flex pt-60 justify-content-center">
                <button class="ic-testi-1"><i class="ri-arrow-left-line"></i></button>
                <button class="ic-testi-2"><i class="ri-arrow-right-line"></i></button>
            </div>
        </div>
    </section>
    {{-- What Our Student Say --}}

    <!-- verified partners -->
    <div class="ic__verified--part ic-section-space ">
        <div class="container position-relative">
            <div class="ic__verified--imageHeading">
                <img src="{{ asset('/new-frontend') }}/images/verified-image.png" class="img-fluid ic--verified-shape"
                    alt="images">
                <div class="ic__verified--innerImages">
                    <img src="{{ asset('/new-frontend') }}/images/verified-partners-images.png" class="img-fluid"
                        alt="images">
                </div>
            </div>
            <div class="ic__verified--content">
                <div class="ic__verified--innerContainer">
                    <h2>Verified Partners</h2>
                    <div class="ic__arrows">
                        <div class="ic-slider-arrows justify-content-end">
                            <button class="ic__verified-1"><i class="ri-arrow-left-line"></i></button>
                            <button class="ic__verified-2"><i class="ri-arrow-right-line"></i></button>
                        </div>
                    </div>
                </div>
                <div class="ic__verified--slider owl-carousel owl-theme">
                    <div class="ic__verified--items active">
                        <div class="ic__verified--images">
                            <img src="{{ asset('/new-frontend') }}/images/cisco.png" alt="images">
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                    <div class="ic__verified--items">
                        <div class="ic__verified--images">
                            <img src="{{ asset('/new-frontend') }}/images/partner-2.png" alt="images">
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                    <div class="ic__verified--items">
                        <div class="ic__verified--images">
                            <img src="{{ asset('/new-frontend') }}/images/partner-3.png" alt="images">
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                    <div class="ic__verified--items ">
                        <div class="ic__verified--images">
                            <img src="{{ asset('/new-frontend') }}/images/partner-4.png" alt="images">
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- verified partners -->
    {{-- Team And Employee Training --}}
    <section class="ic-team-employee--main ic-section-space bg-white">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ic-comming-soon-page">
                        <div class="ic-headers text-start">
                            <p class="ic-borderWith-whiteBg mb-15">Download app</p>
                            <h2 class="black"><span class="primary">MCDns</span> Apps Coming Soon </h2>
                        </div>
                        <div class="ic-comming-soon-content">
                            <div class="ic-comming-soon-left">
                                <ul>
                                    <li>
                                        <div class="ic-comming-soon-icons">
                                            <img src="{{ asset('new-frontend/images/speed.png') }}" alt="">
                                        </div>
                                        <div>
                                            <h5 class="fs-18 fw-500 black">Fast</h5>
                                            <p class="fw-300 gray">Contrary to popular belief, Lorem Ipsum is not simply
                                                random text. It has roots in a piece of</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ic-comming-soon-icons">
                                            <img src="{{ asset('new-frontend/images/power.png') }}" alt="">
                                        </div>
                                        <div>
                                            <h5 class="fs-18 fw-500 black">Powerfull</h5>
                                            <p class="fw-300 gray">Contrary to popular belief, Lorem Ipsum is not simply
                                                random text. It has roots in a piece of</p>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ic-comming-soon-icons">
                                            <img src="{{ asset('new-frontend/images/accessible.png') }}" alt="">
                                        </div>
                                        <div>
                                            <h5 class="fs-18 fw-500 black">Accessible</h5>
                                            <p class="fw-300 gray">Contrary to popular belief, Lorem Ipsum is not simply
                                                random text. It has roots in a piece of</p>
                                        </div>
                                    </li>
                                </ul>
                                <div class="ic-apps-store">
                                    <a href="#">
                                        <img src="{{ asset('/new-frontend/images/apple.png') }}" alt="">
                                    </a>
                                    <a href="#">
                                        <img src="{{ asset('/new-frontend/images/google.png') }}" alt="">
                                    </a>
                                </div>
                            </div>
                            <div class="ic-comming-soon-right">
                                <img src="{{ asset('new-frontend/images/qr-code.png') }}" class="laptop-device-barqoute"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <img src="{{ asset('/new-frontend/images/apps-images.png') }}" class="img-fluid ic-mobile-app-photo"
                        alt="">
                    <p class="fs-18 fw-500 pt-4 text-center">Scan this QR code on your camera app to download the app</p>
                    <img src="{{ asset('new-frontend/images/qr-code.png') }}" class="d-block text-center m-auto"
                        alt="">
                </div>
            </div>
            {{-- <div class="row">
                <div class="col-lg-6">
                    <div class="ic-team-employee--left">
                        <h4 class="fw-500 mb-30">Curriculum tailored to your organization, delivered with white-glove
                            service and support</h4>
                        <ul class="ic-enroll-nav-list ic-team-employee--service">
                            <li>
                                <img src="{{ asset('new-frontend/images/CheckCircle.png') }}" alt="">
                                <div>
                                    <p class="color-deep-gray">The Power of MCdns Bootcamp</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('new-frontend/images/CheckCircle.png') }}" alt="">
                                <div>
                                    <p class="color-deep-gray">Unlock Your Team's Potential</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('new-frontend/images/CheckCircle.png') }}" alt="">
                                <div>
                                    <p class="color-deep-gray">Tailored Solutions</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('new-frontend/images/CheckCircle.png') }}" alt="">
                                <div>
                                    <p class="color-deep-gray">The Power of MCdns Bootcamp</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('new-frontend/images/CheckCircle.png') }}" alt="">
                                <div>
                                    <p class="color-deep-gray">MCdns Advantage</p>
                                </div>
                            </li>
                            <li>
                                <img src="{{ asset('new-frontend/images/CheckCircle.png') }}" alt="">
                                <div>
                                    <p class="color-deep-gray">The Power of MCdns Bootcamp</p>
                                </div>
                            </li>
                        </ul>
                        <div class="ic-team-employee--button mt-30">
                            <a href="#" class="ic-btn">Contact Request <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-team-employee--right">
                        <div class="ic-team-employee__training">
                            <div class="ic-team-employee__trainingItems">
                                <img src="{{ asset('new-frontend/images/employe-training/employee-t-1.png') }}"
                                    alt="">
                            </div>
                            <div class="ic-team-employee__trainingItems">
                                <img src="{{ asset('new-frontend/images/employe-training/employee-t-2.png') }}"
                                    alt="">
                            </div>
                            <div class="ic-team-employee__trainingItems">
                                <img src="{{ asset('new-frontend/images/employe-training/employee-t-3.png') }}"
                                    alt="">
                            </div>
                            <div class="ic-team-employee__trainingItems">
                                <img src="{{ asset('new-frontend/images/employe-training/employee-t-4.png') }}"
                                    alt="">
                            </div>
                            <div class="ic-team-employee__trainingItems">
                                <img src="{{ asset('new-frontend/images/employe-training/employee-t-5.png') }}"
                                    alt="">
                            </div>
                            <div class="ic-team-employee__trainingItems">
                                <img src="{{ asset('new-frontend/images/employe-training/employee-t-6.png') }}"
                                    alt="">
                            </div>
                            <div class="ic-team-employee__trainingItems">
                                <img src="{{ asset('new-frontend/images/employe-training/employee-t-7.png') }}"
                                    alt="">
                            </div>
                            <div class="ic-team-employee__trainingItems">
                                <img src="{{ asset('new-frontend/images/employe-training/employee-t-8.png') }}"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
    {{-- Team And Employee Training --}}
@endsection

@push('scripts')
    <script>
        // video player js
        const player = new Plyr('.player', {
            controls: [
                'play-large',
                'restart',
                // 'rewind',
                'play',
                'progress',
                'current-time',
                'duration',
                'mute',
                'volume',
                // 'download',
                'fullscreen',
                'settings',
            ],
            settings: ['captions', 'quality', 'speed'],
        });
        setTimeout(() => {
            player.poster = '/new-frontend/images/process-vide.png';
        }, 500);

        $(function() {
            /*========================================
            services details slider
            ========================================*/
            let browseService = $(".ic__verified--slider");
            browseService.owlCarousel({
                loop: true,
                margin: 24,
                nav: false,
                autoplay: false,
                autoplaySpeed: 3000,
                dots: false,
                responsive: {
                    0: {
                        items: 1
                    },
                    480: {
                        items: 1
                    },
                    575: {
                        items: 2,
                        margin: 10,
                    },
                    767: {
                        items: 2,
                        margin: 10,
                    },
                    992: {
                        items: 3,
                        margin: 10,
                    },
                    1200: {
                        items: 4,
                        margin: 10,
                    },
                    1399: {
                        items: 4,
                    },
                },
            });

            $(".ic__verified-1").click(function() {
                browseService.trigger("next.owl.carousel");
            });
            $(".ic__verified-2").click(function() {
                browseService.trigger("prev.owl.carousel");
            });
            // benefitsOf slider
            $('.ic-benefitsOf-learning').slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                arrows: false,
                autoplaySpeed: 3000,
                responsive: [{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 3,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 420,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                ]
            });
            $(".ic-benefets-1").click(function() {
                $(".ic-benefitsOf-learning").slick("slickNext");
            });
            $(".ic-benefets-2").click(function() {
                $(".ic-benefitsOf-learning").slick("slickPrev");
            });
            // testimonial slider
            $('.ic-testimonial-slider').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 9000,
                speed: 2000,
                centerPadding: '0',
                arrows: false,
                responsive: [{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 1,
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
            $(".ic-testi-1").click(function() {
                $(".ic-testimonial-slider").slick("slickNext");
            });
            $(".ic-testi-2").click(function() {
                $(".ic-testimonial-slider").slick("slickPrev");
            });

            // playground slider
            // $('.ic-playground-program').slick({
            //     slidesToShow: 3,
            //     slidesToScroll: 1,
            //     centerMode: true,
            //     autoplay: false,
            //     autoplaySpeed: 3000,
            //     centerPadding: '0',
            //     arrows: false,
            //     responsive: [{
            //         breakpoint: 480,
            //         settings: {
            //             slidesToShow: 2,
            //         }
            //     }, ]
            // });
            // $(".ic-play-arrow-1").click(function() {
            //     $(".ic-playground-program").slick("slickNext");
            // });
            // $(".ic-play-arrow-2").click(function() {
            //     $(".ic-playground-program").slick("slickPrev");
            // });
        });
    </script>
@endpush
