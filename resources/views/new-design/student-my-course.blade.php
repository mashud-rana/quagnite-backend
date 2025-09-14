@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            <div class="section-headers">
                <h3 class="fs-30 fw-700 pb-lg-3 pb-2">My Courses</h3>
                <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
            </div>
            <div class="ic-my-courses__tabs">
                <div class="ic-my-course__navlinks">
                    <ul class="ic-profile__navsTab">
                        <li>
                            <a href="#" class="ic-profile__links active" data-link="enroll-course">Enrolled Course </a>
                        </li>
                        <li>
                            <a href="#" class="ic-profile__links" data-link="progress">In Progress </a>
                        </li>
                        <li>
                            <a href="#" class="ic-profile__links" data-link="wishlist">Wishlist</a>
                        </li>
                        <li>
                            <a href="#" class="ic-profile__links" data-link="bootcamps"> My Bootcamps</a>
                        </li>
                        <li>
                            <a href="#" class="ic-profile__links" data-link="coach-session">Coach Session</a>
                        </li>
                    </ul>
                    <ul>
                        <li class="ic-myCourse-select">
                            <select name="" class="selectpicker" id="">
                                <option value="0">Category</option>
                                <option value="1"> Category 20</option>
                            </select>
                        </li>
                    </ul>
                </div>
                <div class="ic-profile__tabsContent">
                    <div class="ic-profile__tabsItems active" id="enroll-course">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="ic-pickUp__courseItems bg-white">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo ">
                                        <h4 class="fw-600 black">Complete Python Developer in 2023 : Zero to Mastery</h4>

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
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Enrolled <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ic-pickUp__courseItems bg-white">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo ">
                                        <h4 class="fw-600 black">Complete Python Developer in 2023 : Zero to Mastery</h4>

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
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Enrolled <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ic-pickUp__courseItems bg-white">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo ">
                                        <h4 class="fw-600 black">Complete Python Developer in 2023 : Zero to Mastery</h4>

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
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Enrolled <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ic-pickUp__courseItems bg-white">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo ">
                                        <h4 class="fw-600 black">Complete Python Developer in 2023 : Zero to Mastery</h4>

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
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Enrolled <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic-profile__tabsItems" id="progress">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="ic-pickUp__courseItems bg-white position-relative">
                                    <div class="ic-pickUp__img">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo">
                                        <h4 class="fw-600 black">Science with Programming Bootcamps</h4>
                                        <ul class="in-progress">
                                            <li>
                                                <i class="ri-book-open-line"></i>
                                                25 Lessons
                                            </li>
                                            <li>
                                                <i class="ri-file-list-line"></i>
                                                Assignment 11
                                            </li>
                                            <li>
                                                <i class="ri-time-line"></i>
                                                2h 14m
                                            </li>
                                        </ul>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 75%" role="progressbar"
                                                aria-valuenow="75%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Continue <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ic-pickUp__courseItems bg-white position-relative">
                                    <div class="ic-pickUp__img">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo">
                                        <h4 class="fw-600 black">Science with Programming Bootcamps</h4>
                                        <ul class="in-progress">
                                            <li>
                                                <i class="ri-book-open-line"></i>
                                                25 Lessons
                                            </li>
                                            <li>
                                                <i class="ri-file-list-line"></i>
                                                Assignment 11
                                            </li>
                                            <li>
                                                <i class="ri-time-line"></i>
                                                2h 14m
                                            </li>
                                        </ul>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 75%" role="progressbar"
                                                aria-valuenow="75%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Continue <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ic-pickUp__courseItems bg-white position-relative">
                                    <div class="ic-pickUp__img">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo">
                                        <h4 class="fw-600 black">Science with Programming Bootcamps</h4>
                                        <ul class="in-progress">
                                            <li>
                                                <i class="ri-book-open-line"></i>
                                                25 Lessons
                                            </li>
                                            <li>
                                                <i class="ri-file-list-line"></i>
                                                Assignment 11
                                            </li>
                                            <li>
                                                <i class="ri-time-line"></i>
                                                2h 14m
                                            </li>
                                        </ul>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 75%" role="progressbar"
                                                aria-valuenow="75%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Continue <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ic-pickUp__courseItems bg-white position-relative">
                                    <div class="ic-pickUp__img">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo">
                                        <h4 class="fw-600 black">Science with Programming Bootcamps</h4>
                                        <ul class="in-progress">
                                            <li>
                                                <i class="ri-book-open-line"></i>
                                                25 Lessons
                                            </li>
                                            <li>
                                                <i class="ri-file-list-line"></i>
                                                Assignment 11
                                            </li>
                                            <li>
                                                <i class="ri-time-line"></i>
                                                2h 14m
                                            </li>
                                        </ul>
                                        <div class="progress">
                                            <div class="progress-bar" style="width: 75%" role="progressbar"
                                                aria-valuenow="75%" aria-valuemin="0" aria-valuemax="100"></div>
                                        </div>
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Continue <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic-profile__tabsItems" id="wishlist">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="ic-pickUp__courseItems ic-wishlist-cart bg-white position-relative">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                        <a href="#" class="wishlist-buttons"><i class="ri-heart-fill"></i></a>
                                    </div>
                                    <div class="ic-pickUp__courseInfo">
                                        <h4 class="fw-600 black">Science with Programming Bootcamps</h4>
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
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Enroll Now <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic-profile__tabsItems" id="bootcamps">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="ic-pickUp__courseItems bg-white">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo ">
                                        <h4 class="fw-600 black">Complete Python Developer in 2023 : Zero to Mastery</h4>

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
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Join Class <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ic-pickUp__courseItems bg-white">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo ">
                                        <h4 class="fw-600 black">Complete Python Developer in 2023 : Zero to Mastery</h4>

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
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Join Class <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ic-pickUp__courseItems bg-white">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo ">
                                        <h4 class="fw-600 black">Complete Python Developer in 2023 : Zero to Mastery</h4>

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
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Join Class <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ic-pickUp__courseItems bg-white">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo ">
                                        <h4 class="fw-600 black">Complete Python Developer in 2023 : Zero to Mastery</h4>

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
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Join Class <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic-profile__tabsItems" id="coach-session">
                        <div class="row g-3">
                            <div class="col-lg-6">
                                <div class="ic-pickUp__courseItems bg-white">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo ">
                                        <h4 class="fw-600 black">Complete Python Developer in 2023 : Zero to Mastery</h4>

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
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Join Session <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ic-pickUp__courseItems bg-white">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo ">
                                        <h4 class="fw-600 black">Complete Python Developer in 2023 : Zero to Mastery</h4>

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
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Join Session <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ic-pickUp__courseItems bg-white">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo ">
                                        <h4 class="fw-600 black">Complete Python Developer in 2023 : Zero to Mastery</h4>

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
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Join Session <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="ic-pickUp__courseItems bg-white">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo ">
                                        <h4 class="fw-600 black">Complete Python Developer in 2023 : Zero to Mastery</h4>

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
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Join Session <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
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
    {{-- student dashboard --}}
@endsection

@push('scripts')
@endpush
