@extends('layouts.master-v1')

@section('content')
<!-- {{-- banner part start --}} -->
<section class="ic-banner-part ic-section-space ic_v1_inner-part"
    style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-md-6">
                <div class="ic-banner-content ic-business-banner">
                    <span class="ic-heading-title mb-15">Course Details</span>
                    <h1 class="black pb-15">All Coaches Schedule</h1>
                    <div class="row">
                        <div class="col-xxl-10 col-lg-12">
                            <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                the 1500s, when an
                                unknown printer took a galley of
                            </p>
                            <div class="ic-video-programs">
                                <a href="#" class="ic-btn">Explore Programs</a>
                            </div>
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
<!-- {{-- banner part end --}} -->

{{-- All Most Popular Coaches --}}
<section class="ic-all-most-popular ic-section-space"
    style="background-image: url({{asset('new-frontendv1/images/coaches/all-coache.png')}})">
    <div class="container">
        <div class="header-bootcamp text-center">
            <h2 class="black">All Most Popular Coaches</h2>
        </div>
        <div class="data-science-navs ic-all-popular-navs">
            <ul>
                <li>
                    <a href="#" class="business-link active" data-link="business-1">Most popular</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-2">Recent</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-3">Trending</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-4">Training & Learning</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-5">Digital Marketing</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-6">Programing</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-7">Management</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-8">Mindset</a>
                </li>
            </ul>
        </div>
        <div class="business-tabs">
            <div class="business-items active" id="business-1">
                <div class="ic-items-list-main ic-items-grid-main row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-3 g-2 "
                    id="loadDataContainer">
                    <div class="">
                        <div class="ic-items-list mb-0 flex-column">
                            <div class="ic-list-image position-relative">
                                <img src="{{asset('new-frontendv1/images/coaches/all-course-images-1.png')}}"
                                    class="img-fluid w-100" alt="">
                                <div class="coach-names">
                                    <p>DCameron</p>
                                </div>
                                <a href="#" class="wishlist">
                                    <i class="ri-heart-3-line outline-heart"></i>
                                    <i class="ri-heart-fill fill-heart"></i>
                                </a>
                                <ul class="ic-rating-info">
                                    <li>
                                        <p>
                                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                            </svg>
                                            <span>0.0</span>
                                            <i class="ri-star-s-fill orange"></i>
                                            <span>(0)</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="ic-list-conetnt">
                                <a href="#">
                                    <p class="sub-title">Data Science Real-Life Data</p>
                                </a>
                                <div class="list-conetnt-info">
                                    <div class="list-info-items">
                                        <p class="fw-300"><i class="ri-file-list-2-line"></i>
                                            multiple sessions
                                        </p>
                                    </div>
                                    <div class="list-info-items">
                                        <p class="fw-300">
                                            <i class="ri-vidicon-line"></i>
                                            30 Courses - 100 Students
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-btn mt-auto">
                                <button class="ic-btn-simple bookSchedule">Book Schedule <i
                                        class="ri-arrow-right-line"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="ic-items-list mb-0 flex-column">
                            <div class="ic-list-image position-relative">
                                <img src="{{asset('new-frontendv1/images/coaches/all-course-images-1.png')}}"
                                    class="img-fluid w-100" alt="">
                                <div class="coach-names">
                                    <p>DCameron</p>
                                </div>
                                <a href="#" class="wishlist">
                                    <i class="ri-heart-3-line outline-heart"></i>
                                    <i class="ri-heart-fill fill-heart"></i>
                                </a>
                                <ul class="ic-rating-info">
                                    <li>
                                        <p>
                                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                            </svg>
                                            <span>0.0</span>
                                            <i class="ri-star-s-fill orange"></i>
                                            <span>(0)</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="ic-list-conetnt">
                                <a href="#">
                                    <p class="sub-title">Data Science Real-Life Data</p>
                                </a>
                                <div class="list-conetnt-info">
                                    <div class="list-info-items">
                                        <p class="fw-300"><i class="ri-file-list-2-line"></i>
                                            multiple sessions
                                        </p>
                                    </div>
                                    <div class="list-info-items">
                                        <p class="fw-300">
                                            <i class="ri-vidicon-line"></i>
                                            30 Courses - 100 Students
                                        </p>
                                    </div>
                                </div>

                            </div>
                            <div class="card-btn mt-auto">
                                <button class="ic-btn-simple bookSchedule">Book Schedule <i
                                        class="ri-arrow-right-line"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="ic-items-list mb-0 flex-column">
                            <div class="ic-list-image position-relative">
                                <img src="{{asset('new-frontendv1/images/coaches/all-course-images-1.png')}}"
                                    class="img-fluid w-100" alt="">
                                <div class="coach-names">
                                    <p>DCameron</p>
                                </div>
                                <a href="#" class="wishlist">
                                    <i class="ri-heart-3-line outline-heart"></i>
                                    <i class="ri-heart-fill fill-heart"></i>
                                </a>
                                <ul class="ic-rating-info">
                                    <li>
                                        <p>
                                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                            </svg>
                                            <span>0.0</span>
                                            <i class="ri-star-s-fill orange"></i>
                                            <span>(0)</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="ic-list-conetnt">
                                <a href="#">
                                    <p class="sub-title">Data Science Real-Life Data</p>
                                </a>
                                <div class="list-conetnt-info">
                                    <div class="list-info-items">
                                        <p class="fw-300"><i class="ri-file-list-2-line"></i>
                                            multiple sessions
                                        </p>
                                    </div>
                                    <div class="list-info-items">
                                        <p class="fw-300">
                                            <i class="ri-vidicon-line"></i>
                                            30 Courses - 100 Students
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-btn mt-auto">
                                <button class="ic-btn-simple bookSchedule">Book Schedule <i
                                        class="ri-arrow-right-line"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="ic-items-list mb-0 flex-column">
                            <div class="ic-list-image position-relative">
                                <img src="{{asset('new-frontendv1/images/coaches/all-course-images-1.png')}}"
                                    class="img-fluid w-100" alt="">
                                <div class="coach-names">
                                    <p>DCameron</p>
                                </div>
                                <a href="#" class="wishlist">
                                    <i class="ri-heart-3-line outline-heart"></i>
                                    <i class="ri-heart-fill fill-heart"></i>
                                </a>
                                <ul class="ic-rating-info">
                                    <li>
                                        <p>
                                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                            </svg>
                                            <span>0.0</span>
                                            <i class="ri-star-s-fill orange"></i>
                                            <span>(0)</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            <div class="ic-list-conetnt">
                                <a href="#">
                                    <p class="sub-title">Data Science Real-Life Data</p>
                                </a>
                                <div class="list-conetnt-info">
                                    <div class="list-info-items">
                                        <p class="fw-300"><i class="ri-file-list-2-line"></i>
                                            multiple sessions
                                        </p>
                                    </div>
                                    <div class="list-info-items">
                                        <p class="fw-300">
                                            <i class="ri-vidicon-line"></i>
                                            30 Courses - 100 Students
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-btn mt-auto">
                                <button class="ic-btn-simple bookSchedule">Book Schedule <i
                                        class="ri-arrow-right-line"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="business-items" id="business-2">

            </div>
        </div>
    </div>
</section>
{{-- All Most Popular Coaches --}}

{{-- Personal Development Coaches --}}
<section class="ic-all-most-popular ic-section-space"
    style="background-image: linear-gradient(180deg, rgba(0, 56, 91, 0.97) 1.2%, rgba(21, 141, 167, 0.97) 100%), url({{asset('new-frontendv1/images/coaches/images-personal-dev.png')}})">
    <div class="container">
        <div class="header-bootcamp text-center">
            <h2 class="white">Personal Development Coaches</h2>
        </div>
        <div
            class="mb-50 ic-items-list-main ic-items-grid-main row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-3 g-2">
            <div class="col">
                <div class="ic-items-list mb-0 flex-column">
                    <div class="ic-list-image position-relative">
                        <img src="{{asset('new-frontendv1/images/coaches/all-course-images-1.png')}}"
                            class="img-fluid w-100" alt="">
                        <div class="coach-names">
                            <p>DCameron</p>
                        </div>
                        <a href="#" class="wishlist">
                            <i class="ri-heart-3-line outline-heart"></i>
                            <i class="ri-heart-fill fill-heart"></i>
                        </a>
                        <ul class="ic-rating-info">
                            <li>
                                <p>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                    </svg>
                                    <span>0.0</span>
                                    <i class="ri-star-s-fill orange"></i>
                                    <span>(0)</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="ic-list-conetnt">
                        <a href="#">
                            <p class="sub-title">Data Science Real-Life Data</p>
                        </a>
                        <div class="list-conetnt-info">
                            <div class="list-info-items">
                                <p class="fw-300"><i class="ri-file-list-2-line"></i>
                                    multiple sessions
                                </p>
                            </div>
                            <div class="list-info-items">
                                <p class="fw-300">
                                    <i class="ri-vidicon-line"></i>
                                    30 Courses - 100 Students
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn mt-auto">
                        <button class="ic-btn-simple bookSchedule">Book Schedule <i
                                class="ri-arrow-right-line"></i></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-items-list mb-0 flex-column">
                    <div class="ic-list-image position-relative">
                        <img src="{{asset('new-frontendv1/images/coaches/all-course-images-1.png')}}"
                            class="img-fluid w-100" alt="">
                        <div class="coach-names">
                            <p>DCameron</p>
                        </div>
                        <a href="#" class="wishlist">
                            <i class="ri-heart-3-line outline-heart"></i>
                            <i class="ri-heart-fill fill-heart"></i>
                        </a>
                        <ul class="ic-rating-info">
                            <li>
                                <p>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                    </svg>
                                    <span>0.0</span>
                                    <i class="ri-star-s-fill orange"></i>
                                    <span>(0)</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="ic-list-conetnt">
                        <a href="#">
                            <p class="sub-title">Data Science Real-Life Data</p>
                        </a>
                        <div class="list-conetnt-info">
                            <div class="list-info-items">
                                <p class="fw-300"><i class="ri-file-list-2-line"></i>
                                    multiple sessions
                                </p>
                            </div>
                            <div class="list-info-items">
                                <p class="fw-300">
                                    <i class="ri-vidicon-line"></i>
                                    30 Courses - 100 Students
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="card-btn mt-auto">
                        <button class="ic-btn-simple bookSchedule">Book Schedule <i
                                class="ri-arrow-right-line"></i></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-items-list mb-0 flex-column">
                    <div class="ic-list-image position-relative">
                        <img src="{{asset('new-frontendv1/images/coaches/all-course-images-1.png')}}"
                            class="img-fluid w-100" alt="">
                        <div class="coach-names">
                            <p>DCameron</p>
                        </div>
                        <a href="#" class="wishlist">
                            <i class="ri-heart-3-line outline-heart"></i>
                            <i class="ri-heart-fill fill-heart"></i>
                        </a>
                        <ul class="ic-rating-info">
                            <li>
                                <p>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                    </svg>
                                    <span>0.0</span>
                                    <i class="ri-star-s-fill orange"></i>
                                    <span>(0)</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="ic-list-conetnt">
                        <a href="#">
                            <p class="sub-title">Data Science Real-Life Data</p>
                        </a>
                        <div class="list-conetnt-info">
                            <div class="list-info-items">
                                <p class="fw-300"><i class="ri-file-list-2-line"></i>
                                    multiple sessions
                                </p>
                            </div>
                            <div class="list-info-items">
                                <p class="fw-300">
                                    <i class="ri-vidicon-line"></i>
                                    30 Courses - 100 Students
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn mt-auto">
                        <button class="ic-btn-simple bookSchedule">Book Schedule <i
                                class="ri-arrow-right-line"></i></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-items-list mb-0 flex-column">
                    <div class="ic-list-image position-relative">
                        <img src="{{asset('new-frontendv1/images/coaches/all-course-images-1.png')}}"
                            class="img-fluid w-100" alt="">
                        <div class="coach-names">
                            <p>DCameron</p>
                        </div>
                        <a href="#" class="wishlist">
                            <i class="ri-heart-3-line outline-heart"></i>
                            <i class="ri-heart-fill fill-heart"></i>
                        </a>
                        <ul class="ic-rating-info">
                            <li>
                                <p>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                    </svg>
                                    <span>0.0</span>
                                    <i class="ri-star-s-fill orange"></i>
                                    <span>(0)</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="ic-list-conetnt">
                        <a href="#">
                            <p class="sub-title">Data Science Real-Life Data</p>
                        </a>
                        <div class="list-conetnt-info">
                            <div class="list-info-items">
                                <p class="fw-300"><i class="ri-file-list-2-line"></i>
                                    multiple sessions
                                </p>
                            </div>
                            <div class="list-info-items">
                                <p class="fw-300">
                                    <i class="ri-vidicon-line"></i>
                                    30 Courses - 100 Students
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn mt-auto">
                        <button class="ic-btn-simple bookSchedule">Book Schedule <i
                                class="ri-arrow-right-line"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="ic-btn-outline">Load More <i class="ri-loader-fill"></i></a>
        </div>
    </div>
</section>
{{-- Personal Development Coaches --}}

{{-- Personal Development Coaches --}}
<section class="ic-all-most-popular ic-section-space"
    style="background-image: url({{asset('new-frontendv1/images/coaches/all-coache.png')}})">
    <div class="container">
        <div class="header-bootcamp text-center">
            <h2 class="black">IT / Technical Support Coaches</h2>
        </div>
        <div
            class="mb-50 ic-items-list-main ic-items-grid-main row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-3 g-2">
            <div class="col">
                <div class="ic-items-list mb-0 flex-column">
                    <div class="ic-list-image position-relative">
                        <img src="{{asset('new-frontendv1/images/coaches/all-course-images-1.png')}}"
                            class="img-fluid w-100" alt="">
                        <div class="coach-names">
                            <p>DCameron</p>
                        </div>
                        <a href="#" class="wishlist">
                            <i class="ri-heart-3-line outline-heart"></i>
                            <i class="ri-heart-fill fill-heart"></i>
                        </a>
                        <ul class="ic-rating-info">
                            <li>
                                <p>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                    </svg>
                                    <span>0.0</span>
                                    <i class="ri-star-s-fill orange"></i>
                                    <span>(0)</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="ic-list-conetnt">
                        <a href="#">
                            <p class="sub-title">Data Science Real-Life Data</p>
                        </a>
                        <div class="list-conetnt-info">
                            <div class="list-info-items">
                                <p class="fw-300"><i class="ri-file-list-2-line"></i>
                                    multiple sessions
                                </p>
                            </div>
                            <div class="list-info-items">
                                <p class="fw-300">
                                    <i class="ri-vidicon-line"></i>
                                    30 Courses - 100 Students
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn mt-auto">
                        <button class="ic-btn-simple bookSchedule">Book Schedule <i
                                class="ri-arrow-right-line"></i></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-items-list mb-0 flex-column">
                    <div class="ic-list-image position-relative">
                        <img src="{{asset('new-frontendv1/images/coaches/all-course-images-1.png')}}"
                            class="img-fluid w-100" alt="">
                        <div class="coach-names">
                            <p>DCameron</p>
                        </div>
                        <a href="#" class="wishlist">
                            <i class="ri-heart-3-line outline-heart"></i>
                            <i class="ri-heart-fill fill-heart"></i>
                        </a>
                        <ul class="ic-rating-info">
                            <li>
                                <p>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                    </svg>
                                    <span>0.0</span>
                                    <i class="ri-star-s-fill orange"></i>
                                    <span>(0)</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="ic-list-conetnt">
                        <a href="#">
                            <p class="sub-title">Data Science Real-Life Data</p>
                        </a>
                        <div class="list-conetnt-info">
                            <div class="list-info-items">
                                <p class="fw-300"><i class="ri-file-list-2-line"></i>
                                    multiple sessions
                                </p>
                            </div>
                            <div class="list-info-items">
                                <p class="fw-300">
                                    <i class="ri-vidicon-line"></i>
                                    30 Courses - 100 Students
                                </p>
                            </div>
                        </div>

                    </div>
                    <div class="card-btn mt-auto">
                        <button class="ic-btn-simple bookSchedule">Book Schedule <i
                                class="ri-arrow-right-line"></i></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-items-list mb-0 flex-column">
                    <div class="ic-list-image position-relative">
                        <img src="{{asset('new-frontendv1/images/coaches/all-course-images-1.png')}}"
                            class="img-fluid w-100" alt="">
                        <div class="coach-names">
                            <p>DCameron</p>
                        </div>
                        <a href="#" class="wishlist">
                            <i class="ri-heart-3-line outline-heart"></i>
                            <i class="ri-heart-fill fill-heart"></i>
                        </a>
                        <ul class="ic-rating-info">
                            <li>
                                <p>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                    </svg>
                                    <span>0.0</span>
                                    <i class="ri-star-s-fill orange"></i>
                                    <span>(0)</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="ic-list-conetnt">
                        <a href="#">
                            <p class="sub-title">Data Science Real-Life Data</p>
                        </a>
                        <div class="list-conetnt-info">
                            <div class="list-info-items">
                                <p class="fw-300"><i class="ri-file-list-2-line"></i>
                                    multiple sessions
                                </p>
                            </div>
                            <div class="list-info-items">
                                <p class="fw-300">
                                    <i class="ri-vidicon-line"></i>
                                    30 Courses - 100 Students
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn mt-auto">
                        <button class="ic-btn-simple bookSchedule">Book Schedule <i
                                class="ri-arrow-right-line"></i></button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-items-list mb-0 flex-column">
                    <div class="ic-list-image position-relative">
                        <img src="{{asset('new-frontendv1/images/coaches/all-course-images-1.png')}}"
                            class="img-fluid w-100" alt="">
                        <div class="coach-names">
                            <p>DCameron</p>
                        </div>
                        <a href="#" class="wishlist">
                            <i class="ri-heart-3-line outline-heart"></i>
                            <i class="ri-heart-fill fill-heart"></i>
                        </a>
                        <ul class="ic-rating-info">
                            <li>
                                <p>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                    </svg>
                                    <span>0.0</span>
                                    <i class="ri-star-s-fill orange"></i>
                                    <span>(0)</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                    <div class="ic-list-conetnt">
                        <a href="#">
                            <p class="sub-title">Data Science Real-Life Data</p>
                        </a>
                        <div class="list-conetnt-info">
                            <div class="list-info-items">
                                <p class="fw-300"><i class="ri-file-list-2-line"></i>
                                    multiple sessions
                                </p>
                            </div>
                            <div class="list-info-items">
                                <p class="fw-300">
                                    <i class="ri-vidicon-line"></i>
                                    30 Courses - 100 Students
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn mt-auto">
                        <button class="ic-btn-simple bookSchedule">Book Schedule <i
                                class="ri-arrow-right-line"></i></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="ic-btn-outline">Load More <i class="ri-loader-fill"></i></a>
        </div>
    </div>
</section>
{{-- Personal Development Coaches --}}

@endsection

@push('scripts')
{{-- <script src="{{ asset('frontend/js/price_range_script.js') }}">
</script> --}}
@endpush