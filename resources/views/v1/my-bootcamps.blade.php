@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- my bootcamps --}}
    <section class="my-bootcamps-main">
        <div class="container">
            <div class="section-headers">
                <div>
                    <h3 class="fs-30 fw-700 pb-lg-3 pb-2">My Bootcamps</h3>
                    <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
                </div>
            </div>
            <div class="ic-my-courses__tabs">
                <div class="ic-my-course__navlinks">
                    <ul class="ic-profile__navsTab">
                        <li>
                            <a href="#" class="ic-profile__links active" data-link="progress">In Progress </a>
                        </li>
                        <li>
                            <a href="#" class="ic-profile__links" data-link="wishlist">Wishlist</a>
                        </li>
                        <li>
                            <a href="#" class="ic-profile__links" data-link="archives"> Archives</a>
                        </li>
                    </ul>
                    {{-- <ul>
                        <li class="ic-myCourse-select">
                            <select name="" class="selectpicker" id="">
                                <option value="0">Category</option>
                                <option value="1"> Category 20</option>
                            </select>
                        </li>
                    </ul> --}}
                </div>
                <div class="ic-profile__tabsContent">
                    <div class="ic-profile__tabsItems active" id="progress">
                        <div
                            class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-3 g-2 mb-50">
                            <div class="col">
                                <div class="ic-v1-bootcams-items">
                                    <div class="ic-list-image position-relative"><img
                                            src="https://mc-dns.test/new-frontendv1/images/bootcamp--data-science.png"
                                            alt="" class="img-fluid w-100">
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
                                        </div>
                                    </div>
                                    <div class="card-btn pt-3">
                                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i
                                                class="ri-arrow-right-line"></i></a>
                                        </div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="ic-v1-bootcams-items">
                                    <div class="ic-list-image position-relative"><img
                                            src="https://mc-dns.test/new-frontendv1/images/bootcamp--data-science.png"
                                            alt="" class="img-fluid w-100">
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
                                        </div>
                                    </div>
                                    <div class="card-btn pt-3">
                                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i
                                                class="ri-arrow-right-line"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic-profile__tabsItems" id="wishlist">
                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
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
                    <div class="ic-profile__tabsItems" id="archives">
                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
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
                            <div class="col-lg-12 col-xl-6">
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
                            <div class="col-lg-12 col-xl-6">
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
                            <div class="col-lg-12 col-xl-6">
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
                </div>
            </div>
        </div>
    </section>
    {{-- my bootcamps --}}
@endsection

@push('scripts')
@endpush
