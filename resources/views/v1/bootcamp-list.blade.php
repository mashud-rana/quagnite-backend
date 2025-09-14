@extends('layouts.master-v1')

@section('content')
{{-- banner part start --}}
<section class="ic-banner-part ic-section-space ic_v1_inner-part bg-img-center-property"
    style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-md-6 ">
                <div class="ic-banner-content ic-business-banner">
                    <span class="ic-heading-title mb-15">Course Details</span>
                    <h1 class="black pb-15">All Bootcamp List</h1>
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
{{-- banner part end --}}

{{-- data science bootcamps --}}
<div class="ic-section-space bg-img-center-property"
    style="background-image: url({{ asset('new-frontendv1/images/data-science.png') }})">
    <div class="container">
        <div class="header-bootcamp text-center">
            <h2 class="white">Data Science Bootcamps</h2>
        </div>
        <div class="data-science-navs">
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
                <div
                    class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-3 g-2 mb-50">
                    <div class="col">
                        <div class="ic-v1-bootcams-items">
                            <div class="ic-list-image position-relative">
                                <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                                    class="img-fluid w-100" alt="">
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

                                    <div class="bootcams-course-review border-0">
                                        <p class="review-course">
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill gray-400"></i>
                                        </p>
                                        <p class="ratting-count">4</p>
                                        <p class="counts">(320)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="coach-price d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <h4 class="primary">$165.00</h4>
                                    <p class="text-decoration-line-through primary">$100</p>
                                </div>
                                <a href="#" class="course-addCart">
                                    <i class="ri-shopping-cart-2-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-v1-bootcams-items">
                            <div class="ic-list-image position-relative">
                                <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                                    class="img-fluid w-100" alt="">
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

                                    <div class="bootcams-course-review border-0">
                                        <p class="review-course">
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill gray-400"></i>
                                        </p>
                                        <p class="ratting-count">4</p>
                                        <p class="counts">(320)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-btn">
                                <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-v1-bootcams-items">
                            <div class="ic-list-image position-relative">
                                <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                                    class="img-fluid w-100" alt="">
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

                                    <div class="bootcams-course-review border-0">
                                        <p class="review-course">
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill gray-400"></i>
                                        </p>
                                        <p class="ratting-count">4</p>
                                        <p class="counts">(320)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-btn">
                                <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-v1-bootcams-items">
                            <div class="ic-list-image position-relative">
                                <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                                    class="img-fluid w-100" alt="">
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

                                    <div class="bootcams-course-review border-0">
                                        <p class="review-course">
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill gray-400"></i>
                                        </p>
                                        <p class="ratting-count">4</p>
                                        <p class="counts">(320)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-btn">
                                <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class=" text-center">
                    <a href="#" class="ic-btn-outline">Explore Bootcamp <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            <div class="business-items" id="business-2">
                <div
                    class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-3 g-2 mb-50">
                    <div class="col">
                        <div class="ic-v1-bootcams-items">
                            <div class="ic-list-image position-relative">
                                <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                                    class="img-fluid w-100" alt="">
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

                                    <div class="bootcams-course-review border-0">
                                        <p class="review-course">
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill gray-400"></i>
                                        </p>
                                        <p class="ratting-count">4</p>
                                        <p class="counts">(320)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-btn">
                                <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-v1-bootcams-items">
                            <div class="ic-list-image position-relative">
                                <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                                    class="img-fluid w-100" alt="">
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

                                    <div class="bootcams-course-review border-0">
                                        <p class="review-course">
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <i class="ri-star-s-fill gray-400"></i>
                                        </p>
                                        <p class="ratting-count">4</p>
                                        <p class="counts">(320)</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-btn">
                                <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- data science bootcamps --}}

{{-- machine learning bootcamps --}}
<section class="ic-section-space ic-machine-learning bg-img-center-property"
    style="background-image: url({{ asset('new-frontendv1/images/machine-learning-bootcamps.png') }})">
    <div class="container">
        <div class="header-bootcamp text-center">
            <h2 class="black">Machine Learning Bootcamps</h2>
        </div>
        <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-3 g-2 mb-50">
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
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

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn">
                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
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

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn">
                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
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

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn">
                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
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

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn">
                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" text-center">
            <a href="#" class="ic-btn-outline">Load More <i class="ri-loader-fill"></i></a>
        </div>
    </div>
</section>
{{-- machine learning bootcamps --}}

{{-- Python Learning Bootcamps --}}
<section class="ic-section-space ic-machine-learning bg-img-center-property"
    style="background-image: url({{ asset('new-frontendv1/images/data-science.png') }})">
    <div class="container">
        <div class="header-bootcamp text-center">
            <h2 class="white">Python Learning Bootcamps</h2>
        </div>
        <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-3 g-2 mb-50">
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
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

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn">
                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
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

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn">
                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
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

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn">
                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
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

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn">
                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <a href="#" class="ic-btn-outline">Load More <i class="ri-loader-fill"></i></a>
        </div>
    </div>
</section>
{{-- Python Learning Bootcamps --}}

{{-- Development Learning Bootcamps --}}
<section class="ic-section-space ic-machine-learning bg-img-center-property"
    style="background-image: url({{ asset('new-frontendv1/images/machine-learning-bootcamps.png') }})">
    <div class="container">
        <div class="header-bootcamp text-center">
            <h2 class="black">Development Learning Bootcamps</h2>
        </div>
        <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-3 g-2 mb-50">
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
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

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn">
                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
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

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn">
                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
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

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn">
                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
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

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn">
                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
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

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn">
                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
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

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn">
                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
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

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn">
                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="ic-v1-bootcams-items">
                    <div class="ic-list-image position-relative">
                        <img src="{{ asset('new-frontendv1/images/bootcamp--data-science.png') }}"
                            class="img-fluid w-100" alt="">
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

                            <div class="bootcams-course-review border-0">
                                <p class="review-course">
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <i class="ri-star-s-fill gray-400"></i>
                                </p>
                                <p class="ratting-count">4</p>
                                <p class="counts">(320)</p>
                            </div>
                        </div>
                    </div>
                    <div class="card-btn">
                        <a href="#" class="ic-btn-outline-md">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class=" text-center">
            <a href="#" class="ic-btn-outline">Load More <i class="ri-loader-fill"></i></a>
        </div>
    </div>
</section>
{{-- Development Learning Bootcamps --}}

{{-- active goal --}}
<section class="ic-ahieve-section ic-section-space"
    style="background-image: linear-gradient(180deg, #00385B -16.2%, #158DA7 113.04%);">
    <div class="container">
        <div class="ic-headers text-center">
            <h2 class="white">Achieve Your Goals</h2>
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
                            <img class="img-fluid" src="{{ asset('new-frontendv1/images/achieve-1.png') }}" alt="">
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
                            <img class="img-fluid" src="{{ asset('new-frontendv1/images/achieve-2.png') }}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- active goal --}}
@endsection

@push('scripts')
{{-- <script src="{{ asset('frontend/js/price_range_script.js') }}"></script> --}}
@endpush