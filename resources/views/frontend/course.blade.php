@extends('layouts.master-v1')

@section('content')
    <!-- banner part start -->
    <section class="ic-banner-part ic-section-space ic_v1_inner-part"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)), url({{ asset('/frontend') }}/images/course-new-version.png);">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-lg-6">
                    <div class="ic-banner-content">
                        <span class="ic-heading-title mb-15">All Courses List</span>
                        <h1 class="pb-3">All Coach Courses</h1>
                        <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        <div class="ic__buttons-wrapper">
                            <a href="#" class="ic-play-button">
                                <div class="circle">
                                    <i class="ri-play-fill"></i>
                                </div> Watch INTRO VIDEO
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-right-side-img">
                        <img src="{{ asset('new-frontend/images/course-module-right.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
            </div>
    </section>
    <!-- banner part end -->

    <div class="ic__blog--background ic__coaching--background ic-section-space-bottom-80 ic-section-space-top-80">
        <div class="container">
            {{-- <div class="toggleFilterDiv">
                <div class="sort-filter">
                    <div class="filter-items">
                        <div class="form-group">
                            <label for="#">Short By </label>
                            <select name="" class="selectpicker" id="">
                                <option value="0">Price: low to high</option>
                                <option value="0">Price: high to low</option>
                            </select>
                        </div>
                    </div>
                    <div class="filter-items">
                        <div class="form-group">
                            <label for="#">Short By Coach </label>
                            <select name="" class="selectpicker" id="">
                                <option value="0">Select Coach</option>
                                <option value="0">Select Coach</option>
                            </select>
                        </div>
                    </div>
                    <div class="filter-items">
                        <div class="form-group">
                            <label for="#">Short By Category</label>
                            <select name="" class="selectpicker" id="">
                                <option value="0">Select Coach</option>
                                <option value="0">Select Coach</option>
                            </select>
                        </div>
                    </div>
                    <div class="ic-searchfilter">
                        <div class="position-relative">
                            <input type="text" placeholder="Search your Coaches">
                            <i class="ri-search-line"></i>
                        </div>
                        <button class="ic-btn" id="topFilterBtn"><i class="ri-filter-line"></i>Filter</button>
                    </div>
                    <div class="filter-items">
                        <div class="form-group">
                            <label for="#">Short By Category</label>
                            <div class="range">
                                <div class="range-slider">
                                    <span class="range-selected"></span>
                                </div>
                                <div class="range-input">
                                    <div class="slider" data-value-0="#first" data-value-1="#second" data-range="#third">
                                    </div>
                                </div>
                                <div class="range-price">
                                    <div class="ic-price-styled">
                                        <div>$<span id="first"></span></div> - <div>$<span id="second"></span></div>
                                    </div>
                                    <div>
                                        <button class="ic-btn">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div
                class="ic-items-list-main ic-items-grid-main row g-2 g-lg-4 row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1">
                @forelse ($courses as $course)
                    <div class="col">
                        <div class="mb-0 flex-column h-100">
                            <div class="ic-coach-item">
                                <div class="position-relative overflow-hidden">
                                    <img src="{{asset('new-frontendv1/images/course-image/course-images-1.png')}}" class="img-fluid ic-coach-image w-100" alt="">
                                    <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                                    <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                                </div>
                                <div class="ic-coach-content">
                                    {{-- <a href="{{ route('front.coachDetails', $course->coach->uuid) }}"> --}}
                                    <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                                    {{-- </a> --}}
                                    <div class="coach-names">
                                        <p><img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
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
                    {{-- <div class="col">
                        <div class="ic-items-list mb-0 flex-column">
                            <div class="ic-list-image">
                                <div class="position-relative">
                                    <img src="{{ $course->thumb_url }}" class="img-fluid w-100" alt="{{ $course->title }}">
                                    <div class="coach-names">
                                        <p>Cameron</p>
                                    </div>
                                    <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                                    <ul class="ic-rating-info">
                                        <li>
                                            <p>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                                </svg>
                                                <span>0.0</span>
                                                <i class="ri-star-s-fill yellow"></i>
                                                <span>(0)</span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="ic-list-conetnt">
                                <a href="{{ route('course.details', $course->slug) }}">
                                    <p class="sub-title">{{ $course->title }}</p>
                                </a>
                                <div class="list-conetnt-info">
                                    <div class="list-info-items">
                                        <p class="fw-300"><i class="ri-file-list-2-line"></i> multiple sessions
                                        </p>
                                    </div>
                                    <div class="list-info-items">
                                        <p class="fw-300"><i class="ri-vidicon-line"></i>Enrolled -
                                            {{ $course->course_modules_count }} Students</p>
                                    </div>
                                </div>
                            </div>
                            <div class="card-btn">
                                <button class="ic-btn bookSchedule">Book</button>
                                <h5 class="black">$ 165.00</h5>
                            </div>
                        </div>
                    </div> --}}
                @empty
                @endforelse
            </div>
            <div class="ic-load-more text-center">
                <a href="#" class="ic-btn">Load more</a>
            </div>
        </div>
        `
    </div>

    <!-- course new version -->
    {{-- <section class="ic__courseNewVersion--part"
        style="background-image: url({{ asset('/frontend') }}/images/course-new-version-bg.png);">
        <div class="course-container">
            <div class="ic__courseNewVersion--top">
                <div class="row g-4">
                    @forelse ($courses as $course)
                        <div class="col-lg-6 col-md-6">
                            <div class="ic__courseNewVersion--items">
                                <div class="ic__courseNew--img position-relative">
                                    <div class="responsive-video-poster responsive-video-poster--16by9">
                                        <button class="video-overlay" aria-label="Play video">
                                            <div class="poster-btn"><i class="ri-play-mini-fill"></i></div>
                                            <img src="{{ $course->thumb_url }}" alt="{{ $course->title }}" class="poster">
                                        </button>
                                        <iframe src="https://www.youtube-nocookie.com/embed/FjPvaGt6Pw4?rel=0"
                                            srcdoc="" class="video"
                                            title="Drone Grand Tour footage of the Tustan Karpaty mountains"></iframe>
                                    </div>
                                </div>
                                <div class="ic__courseNew--content">
                                    <h5 class="ic__courseNew--heading">{{ $course->title }}</h5>
                                    <span class="ic__courseNew--subHeading">SELF PACED</span>
                                    <p class="ic__courseNew--paragraph">
                                        {{ str_limit($course->descriptions, $limit = 200, $end = '...') }} <a
                                            href="{{ route('course.details', $course->slug) }}" class="primary">Read
                                            More...</a></p>
                                    <ul class="ic__courseNew--modules">
                                        <li>
                                            <ul>
                                                <li>
                                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="4.5" cy="5" r="4.5"
                                                            fill="#2AA6C0" />
                                                    </svg>
                                                    <p>{{ $course->course_modules_count }} Modules</p>
                                                </li>
                                                <li>
                                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="4.5" cy="5" r="4.5"
                                                            fill="#2AA6C0" />
                                                    </svg>
                                                    <p>Course Certificate</p>
                                                </li>
                                                <li>
                                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="4.5" cy="5" r="4.5"
                                                            fill="#2AA6C0" />
                                                    </svg>
                                                    <p>Demo</p>
                                                </li>
                                            </ul>
                                        </li>

                                        <li>
                                            <ul>
                                                <li>
                                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="4.5" cy="5" r="4.5"
                                                            fill="#2AA6C0" />
                                                    </svg>
                                                    <p>Up to 5 hours videos</p>
                                                </li>
                                                <li>
                                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="4.5" cy="5" r="4.5"
                                                            fill="#2AA6C0" />
                                                    </svg>
                                                    <p>Labs</p>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <ul>
                                                <li>
                                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="4.5" cy="5" r="4.5"
                                                            fill="#2AA6C0" />
                                                    </svg>
                                                    <p>Community support</p>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul>
                                    <a href="{{ route('course.details', $course->slug) }}" class="ic-btn w-100">Course
                                        Content <i class="ri-arrow-right-line"></i></a>
                                </div>
                            </div>
                        </div>
                    @empty
                    @endforelse
                </div>
            </div>
        </div>
    </section> --}}
@endsection

@push('scripts')
    <script src='https://code.jquery.com/ui/1.12.0/jquery-ui.min.js'></script>
    <script src="{{ asset('new-frontend/js/rangeSlider.js') }}"></script>
    <script>
        $(function() {
            $('#topFilterBtn').on('click', function() {
                $('.toggleFilterDiv').toggle();
                $('.toggleFilterDiv').toggleClass('open');
            });
        });
    </script>
@endpush
