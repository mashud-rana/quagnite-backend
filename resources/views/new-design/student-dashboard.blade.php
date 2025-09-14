@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            {{-- header --}}
            <div class="ic-dashboard__header">
                <div class="ic-dashboard__avatar">
                    <img src="{{ asset('new-frontend/images/users-avatar.png') }}" alt="">
                </div>
                <div>
                    <h3 class="color-deep-gray fw-400"><span class="black fw-600">Hi Josh</span>, Welcome to your <span
                            class="fw-600 primary">Student Dashboard</span></h3>
                    <p class="color-deep-gray">27th February 2023 , Monday</p>
                </div>
            </div>
            {{-- header --}}

            {{-- widget --}}
            <div class="row g-3">
                <div class="col-lg-4 col-md-6">
                    <div class="ic-widget__card ic-gradient1">
                        <h3 class="fw-600 fs-28 white mb-2">Want to Test Yourself?</h3>
                        <p class="white">Take a hands-on Exam Test to find out where you stand today</p>
                        <a href="#" class="ic-widget__btn">Take An Exam <i class="ri-arrow-right-s-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ic-widget__card ic-gradient2">
                        <h3 class="fw-600 fs-28 white mb-2">Here Cloud Playgrounds?</h3>
                        <p class="white">Start with the DevOps Learning Path Cloud
                            Playgrounds</p>
                        <a href="#" class="ic-widget__btn">Check Playground Here <i
                                class="ri-arrow-right-s-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ic-widget__card ic-gradient3">
                        <h3 class="fw-600 fs-28 white mb-2">Know what you want?</h3>
                        <p class="white">Choose from our available list of courses online</p>
                        <a href="#" class="ic-widget__btn">Find a popular Course <i
                                class="ri-arrow-right-s-line"></i></a>
                    </div>
                </div>
            </div>
            {{-- widget --}}

            {{-- get button --}}
            <div class="getForBusiness mt-30">
                <h4 class="primary">Work In a MCDns? <span class="orange body-font">Business type of company to enroll their
                        students</span></h4>
                <button class="btn-book">Get For Business</button>
            </div>
            {{-- get button --}}

            {{-- pickup left --}}
            <div class="row">
                <div class="col-lg-8">
                    <div class="ic-pickUp mt-30 md-mt-0">
                        <div class="ic-pickUp__headers">
                            <h3 class="fs-28">Pick up where you left off</h3>
                            <div class="ic-pickUp__tabsEnrolled">
                                <a href="#" class="ic-pickUp__links active"
                                    data-link="enrollCourse"><span>Enrolled</span> Courses</a>
                                <a href="#" class="ic-pickUp__links" data-link="enrollBootcamps"><span>Enrolled</span>
                                    Bootcamps</a>
                            </div>
                        </div>
                        <div class="ic-pickUp__content">
                            <div class="ic-pickUp__enrollCourse active" id="enrollCourse">
                                <div class="ic-pickUp__courseItems">
                                    <div class="ic-pickUp__img">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="ic-pickUp__courseInfo">
                                        <h4 class="fw-600 black">Data Science with R Programming</h4>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 75%" role="progressbar"
                                                aria-valuenow="75%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="color-deep-gray fw-300">Win your next reward on completing 10%</p>
                                        <a href="#" class="ic-pickUp__btn">Continue <i
                                                class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                                <div class="ic-pickUp__courseItems position-relative">
                                    <div class="ic-pickUp__img">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="ic-pickUp__courseInfo">
                                        <h4 class="fw-600 black">Data Science with R Programming</h4>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 75%" role="progressbar"
                                                aria-valuenow="75%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="color-deep-gray fw-300">Win your next reward on completing 10%</p>
                                        <a href="#" class="ic-pickUp__btn">Continue <i
                                                class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                                <div class="ic-pickUp__courseItems">
                                    <div class="ic-pickUp__img">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                    </div>
                                    <div class="ic-pickUp__courseInfo">
                                        <h4 class="fw-600 black">Data Science with R Programming</h4>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 75%" role="progressbar"
                                                aria-valuenow="75%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <p class="color-deep-gray fw-300">Win your next reward on completing 10%</p>
                                        <a href="#" class="ic-pickUp__btn">Continue <i
                                                class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="ic-pickUp__enrollCourse" id="enrollBootcamps">
                                <div class="ic-pickUp__courseItems">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo">
                                        <h4 class="fw-600 black">Data Science with R Programming</h4>

                                        <ul class="enrolled-bootcamps">
                                            <li>
                                                <i class="ri-calendar-check-line"></i>
                                                <span>Class Start-21 March, 2023</span>
                                            </li>
                                            <li>
                                                <i class="ri-time-line"></i>
                                                <span>Start-Time : 06:00 PM</span>
                                            </li>
                                        </ul>
                                        <a href="#" class="ic-pickUp__btn">Join Class <i
                                                class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                                <div class="ic-pickUp__courseItems">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo">
                                        <h4 class="fw-600 black">Data Science with R Programming</h4>

                                        <ul class="enrolled-bootcamps">
                                            <li>
                                                <i class="ri-calendar-check-line"></i>
                                                <span>Class Start-21 March, 2023</span>
                                            </li>
                                            <li>
                                                <i class="ri-time-line"></i>
                                                <span>Start-Time : 06:00 PM</span>
                                            </li>
                                        </ul>
                                        <a href="#" class="ic-pickUp__btn">Join Class <i
                                                class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                                <div class="ic-pickUp__courseItems">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo">
                                        <h4 class="fw-600 black">Data Science with R Programming</h4>

                                        <ul class="enrolled-bootcamps">
                                            <li>
                                                <i class="ri-calendar-check-line"></i>
                                                <span>Class Start-21 March, 2023</span>
                                            </li>
                                            <li>
                                                <i class="ri-time-line"></i>
                                                <span>Start-Time : 06:00 PM</span>
                                            </li>
                                        </ul>
                                        <a href="#" class="ic-pickUp__btn">Join Class <i
                                                class="ri-arrow-right-s-line"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ic-pricePlan__card ic-gradient4 mt-30">
                        <p class="white fs-20">You currently have free, limited access to <span
                                class="fw-600">MCDns</span>.
                            Click the button below to see our plans and get full access to our premium courses and hands-on
                            labs.</p>
                        <a href="#" class="ic-pricePlan__btn">Go To Our Pricing Plans <i
                                class="ri-arrow-right-s-line"></i></a>
                    </div>
                    <div class="ic-pricePlan__card ic-gradient3 mt-30">
                        <h4 class="fw-600 white pb-25">The Power of MCdns Learning Bootcamps Classes</h4>
                        <p class="white fw-300 pb-0">Live virtual classes taught by industry experts</p>
                        <p class="white fw-300 pb-0">Cohort based learning with peer-to-peer</p>
                        <p class="white fw-300">Capstone projects involving real world data</p>
                        <a href="#" class="ic-pricePlan__btn primary">Find Our Bootcamp Training <i
                                class="ri-arrow-right-s-line"></i></a>
                    </div>
                </div>
            </div>
            {{-- pickup left --}}

            {{-- Explore Coaches --}}
            <div class="explore-coaches mt-30"
                style="background-image: linear-gradient(230.64deg, rgba(92, 201, 216, 0.9) 7.09%, rgba(0, 89, 162, 0.9) 92.91%), url('{{ asset('new-frontend/images/expolre-coaches-banner.png') }}')">
                <div class="explore-coaches-left">
                    <h3 class="fs-28 fw-700 white pb-10">Looking For a Live One-on-One Session With a coach?</h3>
                    <p class="white fw-300">Choose from a wide range of coaches available to provide you with one-on-one
                        sessions</p>
                </div>
                <div class="explore-coaches-right">
                    <button class="btn-new-btn">Explore Coaches <i class="ri-arrow-right-s-line"></i></button>
                </div>
            </div>
            {{-- Explore Coaches --}}

            {{-- saction heading --}}
            <div class="ic-dashboard-heading mt-30">
                <h3 class="fs-28 fw-600 black">Recently Uploaded Bootcamps</h3>
                <div class="ic-dashboard-heading-right">
                    <select name="" id="" class="selectpicker">
                        <option value="0">Bootcamps</option>
                        <option value="0">Bootcamps 1</option>
                        <option value="0">sani 2 jaksd fjasdf jasdhf jasdfh kjasfh asdfkj haskfhals</option>
                    </select>
                    <a href="#" class="ic-btn">View All <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            {{-- saction heading --}}
            <div class="ic-recent-bootcamps-section">
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
            </div>
            {{-- saction heading --}}
            <div class="ic-dashboard-heading mt-30">
                <h3 class="fs-28 fw-600 black">Recently Uploaded courses</h3>
                <div class="ic-dashboard-heading-right">
                    <select name="" id="" class="selectpicker">
                        <option value="0">Courses</option>
                        <option value="0">Courses 1</option>
                        <option value="0">sani 2 jaksd </option>
                    </select>
                    <a href="#" class="ic-btn">View All <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            {{-- saction heading --}}
            <div class="ic-recent-bootcamps-section">
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
            </div>

            {{-- forums --}}
            <div class="ic-forms-tabs">
                <ul>
                    <li>
                        <a href="#" class="forms-links active" data-link="forums">Forums</a>
                    </li>
                    <li>
                        <a href="#" class="forms-links" data-link="announcements">announcements</a>
                    </li>
                    <li>
                        <a href="#" class="forms-links" data-link="messages"> messages</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <a href="#">View All Forums <i class="ri-arrow-right-line"></i></a>
                    </li>
                </ul>
            </div>
            {{-- forums content --}}
            <div class="ic-student-forms-content">
                <div class="ic-student-forms-items active" id="forums">
                    <div class="ic-students-details">
                        <div class="forms-list">
                            <div class="forms-list--left">
                                <div class="forms-list--avatar">
                                    <img src="{{ asset('new-frontend/images/forums-avatar-1.png') }}" class="img-fluid"
                                        alt="images">
                                </div>
                                <div class="forms-list-content">
                                    <a href="#">
                                        <h3>Introduce Yourself!</h3>
                                    </a>
                                    <p class="ic-latest-text">
                                        <i class="ri-reply-all-fill"></i>
                                        Latest reply from <a href="#">Adalberto Kovach</a> 5 minutes ago
                                    </p>
                                    <p class="comment-text">If you are in the market for a computer, there are a number of
                                        factors to consider. Will it be used for your home, your office or perhaps even your
                                        home office combo? <a href="#">Read More...</a></p>
                                </div>
                            </div>
                            <div class="forms-list--right">
                                <div class="forms-list-waiting-images">
                                    <div class="waiting-images">
                                        <a href="#"><img
                                                src="{{ asset('new-frontend/images/waiting-comment-4.png') }}"
                                                class="img-fluid" alt="small images"></a>
                                    </div>
                                    <div class="waiting-images">
                                        <a href="#"><img
                                                src="{{ asset('new-frontend/images/waiting-comment-3.png') }}"
                                                class="img-fluid" alt="small images"></a>
                                    </div>
                                    <div class="waiting-images">
                                        <a href="#"><img
                                                src="{{ asset('new-frontend/images/waiting-comment-2.png') }}"
                                                class="img-fluid" alt="small images"></a>
                                    </div>
                                    <div class="waiting-images">
                                        <a href="#"><img
                                                src="{{ asset('new-frontend/images/waiting-comment-1.png') }}"
                                                class="img-fluid" alt="small images"></a>
                                    </div>

                                </div>
                                <p class="text-right message-conversation">
                                    <svg width="25" height="25" viewBox="0 0 25 25" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <g clip-path="url(#clip0_216_6680)">
                                            <path
                                                d="M24.91 19.6212L23.458 15.3955C24.1579 13.9647 24.5278 12.3735 24.5303 10.7725C24.5346 7.98864 23.4575 5.35645 21.4975 3.36085C19.537 1.36485 16.9246 0.241259 14.1414 0.197167C11.2554 0.151561 8.5427 1.24932 6.50329 3.28868C4.53678 5.25514 3.44606 7.84757 3.41154 10.6179C1.47335 12.0772 0.329353 14.3523 0.333112 16.7825C0.334919 17.9197 0.590877 19.0501 1.07589 20.0723L0.0757388 22.9829C-0.0961854 23.4832 0.0294008 24.0265 0.403523 24.4006C0.666804 24.6639 1.01392 24.8041 1.37091 24.8041C1.5211 24.8041 1.67306 24.7793 1.82125 24.7284L4.73185 23.7282C5.75407 24.2132 6.88449 24.4692 8.0217 24.471C8.0258 24.471 8.02971 24.471 8.03381 24.471C10.5001 24.4709 12.7926 23.2974 14.2466 21.3117C15.7596 21.2719 17.2566 20.9056 18.61 20.2435L22.8358 21.6956C23.0119 21.7561 23.1924 21.7856 23.3709 21.7856C23.7951 21.7856 24.2076 21.619 24.5206 21.306C24.9651 20.8614 25.1143 20.2159 24.91 19.6212ZM8.03371 22.9829C8.03054 22.9829 8.02717 22.9829 8.024 22.9829C7.01745 22.9814 6.01789 22.7332 5.13356 22.2654C4.95173 22.1692 4.73825 22.1526 4.54381 22.2194L1.55929 23.2449L2.58483 20.2604C2.65162 20.066 2.63502 19.8525 2.53883 19.6707C2.07096 18.7863 1.82281 17.7868 1.82125 16.7802C1.81876 15.1611 2.4486 13.6265 3.55001 12.4774C3.90978 14.6705 4.95504 16.6915 6.57526 18.2829C8.18352 19.8626 10.2051 20.8684 12.3864 21.1972C11.2346 22.3324 9.68206 22.9829 8.03371 22.9829ZM23.4682 20.2537C23.4259 20.2961 23.3757 20.3076 23.3192 20.2882L18.7954 18.7337C18.7168 18.7067 18.6351 18.6933 18.5537 18.6933C18.4336 18.6933 18.314 18.7224 18.2057 18.7797C16.9141 19.463 15.4545 19.8254 13.9847 19.8276C13.9798 19.8276 13.9754 19.8276 13.9706 19.8276C9.04563 19.8276 4.9776 15.8269 4.89958 10.9031C4.86027 8.4234 5.80353 6.09288 7.55554 4.34088C9.30754 2.58887 11.6385 1.64595 14.1179 1.68501C19.0464 1.76319 23.0498 5.83873 23.0422 10.7701C23.0399 12.24 22.6775 13.6996 21.9943 14.9911C21.8981 15.1729 21.8815 15.3864 21.9483 15.5809L23.5027 20.1047C23.5221 20.1614 23.5105 20.2115 23.4682 20.2537Z"
                                                fill="#06738A"></path>
                                            <path
                                                d="M18.4023 6.81201H9.53701C9.12608 6.81201 8.79297 7.14517 8.79297 7.55606C8.79297 7.96699 9.12612 8.3001 9.53701 8.3001H18.4023C18.8132 8.3001 19.1463 7.96695 19.1463 7.55606C19.1463 7.14517 18.8132 6.81201 18.4023 6.81201Z"
                                                fill="#06738A"></path>
                                            <path
                                                d="M18.4023 9.87207H9.53701C9.12608 9.87207 8.79297 10.2052 8.79297 10.6161C8.79297 11.027 9.12612 11.3602 9.53701 11.3602H18.4023C18.8132 11.3602 19.1463 11.027 19.1463 10.6161C19.1463 10.2052 18.8132 9.87207 18.4023 9.87207Z"
                                                fill="#06738A"></path>
                                            <path
                                                d="M14.9898 12.9321H9.53701C9.12607 12.9321 8.79297 13.2653 8.79297 13.6762C8.79297 14.0871 9.12612 14.4202 9.53701 14.4202H14.9898C15.4007 14.4202 15.7338 14.0871 15.7338 13.6762C15.7338 13.2653 15.4007 12.9321 14.9898 12.9321Z"
                                                fill="#06738A"></path>
                                        </g>
                                        <defs>
                                            <clipPath id="clip0_216_6680">
                                                <rect width="25" height="25" fill="white"></rect>
                                            </clipPath>
                                        </defs>
                                    </svg>

                                    30 Comments
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ic-student-forms-items" id="announcements">
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
            </div>
        </div>
    </section>
    {{-- student dashboard --}}
@endsection

@push('scripts')
@endpush
