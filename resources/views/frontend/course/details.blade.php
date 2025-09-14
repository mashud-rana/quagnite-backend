@extends('layouts.master')

@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part ic-section-space ic_v1_inner-part"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)), url({{ asset('/new-frontend/images/course-details-bg.png') }})">
        <div class="container">
            <div class="row align-items-center  g-xl-4 g-3">
                <div class="col-lg-7 col-xl-8">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="ic-heading-title mb-15">Course Details</span>
                        <h1 class="black pb-15">{{ $course->title }}
                        </h1>
                        <div class="row">
                            <div class="col-xxl-10 col-lg-12">
                                <p class="color-deep-gray pb-30">
                                    {{ $course->subtitle }}
                                </p>
                                <ul class="ic-course-details-banner-list">
                                    <li>
                                        <span><i class="ri-star-s-fill"></i></span>
                                        <span>{{ number_format($course->average_rating, 2) }} {{ $course->total_review }}
                                            reviews</span>
                                    </li>
                                    <li>
                                        <span>
                                            <img src="{{ asset('new-frontend/images/maps.png') }}" alt="">
                                        </span>
                                        <span>{{ $course->total_enrolled_students }} Student Enrolled</span>
                                    </li>
                                    <li>
                                        <span>
                                            <img src="{{ asset('new-frontend/images/calander.png') }}" alt="">
                                        </span>
                                        <span>Member since {{ custom_date($course->user->created_at) }}</span>
                                    </li>
                                </ul>
                                <div class="ic-video-programs">
                                    <span data-course_id="{{ $course->id }}" data-route="{{ route('addToCart') }}"
                                        class="ic-btn course-addCart addToCart">
                                        Enroll Courses
                                        <i class="ri-arrow-right-line"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 col-xl-4">
                    <div class="ic-right-side-img">
                        <img src="{{ getStoreFile($course->image, $course->storage_type) }}" alt=""
                            class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- banner part end --}}

    <section class="ic-course-details ic-section-space">
        <div class="container">
            <div class="ic-course-tabs pb-0">
                <div class="ic-tabs-links">
                    <ul>
                        <li>
                            <a href="#" class="ic-discription-links active" data-tabs="course-overview">Course
                                Overview</a>
                        </li>
                        {{-- <li>
                            <a href="#" class="ic-discription-links" data-tabs="announcements">Requirements</a>
                        </li> --}}
                        <li>
                            <a href="#" class="ic-discription-links" data-tabs="course-content">Course Content</a>
                        </li>
                        <li>
                            <a href="#" class="ic-discription-links" data-tabs="instructor">Instructor</a>
                        </li>
                        <li>
                            <a href="#" class="ic-discription-links" data-tabs="course-rating-tabs">Course Rating</a>
                        </li>
                        {{-- <li>
                            <a href="#" class="ic-discription-links" data-tabs="Playground">Benefits</a>
                        </li> --}}
                    </ul>
                </div>
                <div class="tabs-content">
                    <div class="ic-tabs-content-items active" id="course-overview">
                        {!! $course->description !!}
                    </div>
                    {{-- <div class="ic-tabs-content-items " id="announcements">
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
                                            <span class="color-deep-gray fw-300">Gain hands-on experience and practice using
                                                Python to
                                                solve real data science challenges</span>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('new-frontend/images/CheckCircle.png') }}" alt="">
                                        <div>
                                            <p class="fs-18 fw-500 black">Become an experienced Python Programmer</p>
                                            <span class="color-deep-gray fw-300">GEtiam sed vulputate nisl, eu elementum
                                                arcu. Vivamus
                                                dignsim tortor in tellus dictum pellentesque. </span>
                                        </div>
                                    </li>
                                    <li>
                                        <img src="{{ asset('new-frontend/images/CheckCircle.png') }}" alt="">
                                        <div>
                                            <p class="fs-18 fw-500 black">Parse the Web and Create their own Games</p>
                                            <span class="color-deep-gray fw-300">Etiam sed vulputate nisl, eu elementum
                                                arcu. Vivamus
                                                dignsim tortor in tellus dictum pellentesque. </span>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                    <div class="ic-tabs-content-items " id="course-content">
                        <div class="accordion ic-course-video-all" id="accordionExample">
                            @foreach ($course->lessons as $lesson)
                                <div class="accordion-item">
                                    <div class="accordion-header" id="heading{{ $lesson->id }}">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse{{ $lesson->id }}" aria-expanded="false"
                                            aria-controls="collapse{{ $lesson->id }}">
                                            <div class="ic-video-milestone">
                                                <span class="p-circle finish-module"></span>
                                                <div class="ic-course-video">
                                                    <h6><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                            alt="">
                                                        {{ $lesson->title }}
                                                    </h6>
                                                    <span class="video-times">({{ $lesson->total_duration }})</span>
                                                </div>
                                            </div>
                                        </button>
                                    </div>
                                    <div id="collapse{{ $lesson->id }}" class="accordion-collapse collapse"
                                        aria-labelledby="heading{{ $lesson->id }}" data-bs-parent="#accordionExample">
                                        <div class="accordion-body">
                                            <ul>
                                                @foreach ($lesson->lecture as $item)
                                                    <li>
                                                        <a href="#">
                                                            <div class="ic-video-milestone">
                                                                <span class="p-circle"></span>
                                                                <div class="ic-course-video">
                                                                    <p>
                                                                        @if ($item->lecture_format === LECTURE_FORMAT_VIDEO)
                                                                            <i class="ri-video-fill pe-2"></i>
                                                                        @elseif($item->lecture_format === LECTURE_FORMAT_VIMEO)
                                                                            <i class="ri-movie-line pe-2"></i>
                                                                        @elseif($item->lecture_format === LECTURE_FORMAT_PDF)
                                                                            <i class="ri-article-fill pe-2"></i>
                                                                        @elseif($item->lecture_format === LECTURE_FORMAT_SLIDE)
                                                                            <i class="ri-file-ppt-2-fill pe-2"></i>
                                                                        @elseif($item->lecture_format === LECTURE_FORMAT_IMAGE)
                                                                            <i class="ri-image-2-fill pe-2"></i>
                                                                        @elseif($item->lecture_format === LECTURE_FORMAT_AUDIO)
                                                                            <i class="ri-mv-line pe-2"></i>
                                                                        @endif
                                                                        {{ $item->title }}
                                                                    </p>
                                                                    <span
                                                                        class="video-times">({{ $item->formatted_duration }})</span>
                                                                </div>
                                                                <div class="ic-preview-lock lessonPreview"
                                                                    @if ($item->lecture_type == 1) data-bs-toggle="modal"
                                                                    data-bs-target="#previewModal" data-lecture-id="{{ $item->id }}" @endif>
                                                                    @if ($item->lecture_type == 1)
                                                                        <span>Preview</span>
                                                                    @endif
                                                                    <i
                                                                        class="{{ $item->lecture_type == 1 ? 'ri-lock-unlock-line' : 'ri-lock-line' }}"></i>
                                                                </div>


                                                            </div>
                                                        </a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="ic-tabs-content-items " id="instructor">
                        <div class="ic-instructor-details">
                            <div class="ic-instructor-left">
                                <img src="{{ getStoreFile($course->user->avatar, $course->user->storage_type) }}"
                                    alt="">
                            </div>
                            <div class="ic-instructor-right">
                                <h4 class="fs-28 fw-600 black pb-2">{{ $course->user->full_name }}</h4>
                                <p class="fw-300 fs-20 gray pb-2">{{ $course->user->teacher->professional_title }}</p>
                                <ul class="ic-instructor-view">
                                    <li>
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4.5" cy="4.5" r="4.5" fill="#2AA6C0" />
                                        </svg>
                                        {{ $course->user->teacher->enrollmentsCount() }} Enrolled
                                    </li>
                                    <li>
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4.5" cy="4.5" r="4.5" fill="#2AA6C0" />
                                        </svg>
                                        {{ $course->user->teacher->coursesCount() }} Courses
                                    </li>
                                    <li>
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4.5" cy="4.5" r="4.5" fill="#2AA6C0" />
                                        </svg>
                                        <span>{{ number_format($course->user->average_rating, 2) }}</span>
                                        <span class="star">
                                            @php
                                                $avgRating = $course->user->average_rating;
                                                $fullStars = floor($avgRating);
                                                $halfStar = ceil($avgRating - $fullStars) == 1;
                                                $starClass = $avgRating >= 0.5 ? 'ri-star-s-fill' : 'ri-star-s-line';
                                            @endphp

                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $fullStars)
                                                    <i class="{{ $starClass }}"></i>
                                                @elseif ($i == $fullStars + 1 && $halfStar)
                                                    <i class="ri-star-s-half"></i>
                                                @else
                                                    <i class="ri-star-s-line"></i>
                                                @endif
                                            @endfor
                                        </span>

                                        <span>({{ $course->user->total_review }} Reviews)</span>
                                    </li>

                                </ul>
                                <div>
                                    {!! $course->user->teacher->about_me !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic-tabs-content-items" id="course-rating-tabs">
                        <div class="ic-course-rating-slider">
                            @forelse ($course->reviews as $review)
                                <div class="ic-course-rating-items">
                                    <div class="ic-course-rating-avatar">
                                        <img src="{{ getStoreFile($review->user->avatar, $review->user->storage_type) }}"
                                            alt="">
                                        <div class="course-rating">
                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= $review->rating)
                                                    <i class="ri-star-s-fill"></i>
                                                @else
                                                    <i class="ri-star-s-fill bg-gray-1"></i>
                                                @endif
                                            @endfor
                                        </div>
                                    </div>
                                    <p class="fw-300 gray pt-2"><span
                                            class="fs-18 fw-500 black">{{ $review->user->full_name }}</span>
                                        reviewed <span class="fs-18 fw-500 primary">MCDns</span></p>
                                    <p class="color-deep-gray fw-300 pt-2">{!! $review->comment !!}</p>
                                </div>
                            @empty
                                <p class="color-deep-gray fw-300 pt-2">
                                    No Reviews Found!
                                </p>
                            @endforelse

                        </div>
                        @if ($course->reviews->isNotEmpty())
                            <div class="ic-slider-arrows d-flex pt-30 justify-content-center">
                                <button class="ic-course-1"><i class="ri-arrow-left-line"></i></button>
                                <button class="ic-course-2"><i class="ri-arrow-right-line"></i></button>
                            </div>
                        @endif
                    </div>
                    {{-- <div class="ic-tabs-content-items" id="Playground">
                        <div class="ic-benefits-new-divs">
                            <div class="title-benefits">
                                <h3 class="black fs-30 fw-500 pb-2">Benefits</h3>
                                <p class="color-deep-gray">The globally recognized PMP® certification can help you land
                                    lucrative
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
                    </div> --}}
                </div>
            </div>
        </div>
    </section>

    {{-- related course --}}
    <section class="ic-enroll-course ic-section-space"
        style="background: linear-gradient(180deg, #FFF 0%, #D3EDF3 100%), #F3F3F3;">
        <div class="container">
            <h2 class="ic-title text-center mb-50"><span>Related Courses</span> This Coach!</h2>
            <div class="row g-xl-4 g-md-3 g-2">
                @foreach ($relatedCourses as $item)
                    <div class="col-xl-3 col-md-6 col-sm-6">
                        <div class="ic-coach-item">
                            <div class="position-relative overflow-hidden">
                                <p class="coach-bage ff-exend fs-14 color-white">in {{ $item->category->name }}</p>
                                <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                                <img src="{{ getStoreFile($item->image, $item->storage_type) }}"
                                    class="img-fluid ic-coach-image w-100" alt="">
                            </div>
                            <div class="ic-coach-content">
                                <a href="{{ route('course.details', $item->slug) }}">
                                    <h5 class="fw-500 coach-title ff-lexend">
                                        {!! str_limit($item->title, $words = 30, $end = '...') !!}
                                    </h5>
                                </a>

                                <div class="coach-names">
                                    <p>
                                        <img src="{{ getStoreFile($item->user->avatar, $item->user->storage_type) }}"
                                            alt="">
                                        {{ $item->user->first_name }}
                                    </p>
                                    <p>{{ number_format($item->reviews->avg('rating'), 1) }} <span>
                                            @php
                                                $avgRating = $item->average_rating;
                                                $starClass = $avgRating >= 0.5 ? 'yellow' : 'gray-400';
                                            @endphp

                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= round($avgRating))
                                                    <i class="ri-star-s-fill {{ $starClass }}"></i>
                                                @else
                                                    <i class="ri-star-s-line {{ $starClass }}"></i>
                                                @endif
                                            @endfor
                                        </span>
                                    </p>
                                </div>
                            </div>
                            <div class="coach-price course-price d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <h4>${{ $item->price }}</h4>
                                    <p class="text-decoration-line-through">${{ $item->old_price }}</p>
                                </div>
                                <span class="course-addCart addToCart" data-course_id="{{ $item->id }}"
                                    data-route="{{ route('addToCart') }}" title="Add to Cart">
                                    <i class="ri-shopping-cart-2-line"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                @endforeach

            </div>
            <div class="mt-30 text-center">
                <a href="{{ route('all.courses') }}" class="ic-btn-simple">Explore All Course <i
                        class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </section>
    <!-- {{-- achieve goals start --}} -->
    <x-frontend.achieve-goals-light></x-frontend.achieve-goals-light>
    <!-- {{-- achieve goals end --}} -->

    {{-- Lesson Preview Modal --}}
    <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content ic-form-tabs p-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="previewModalLabel">Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ic-video-content-up" id="lecturePreviewDiv">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="ic-btn-close rounded" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        // Lecture preview =======================

        $('.lessonPreview').each(function() {
            $(this).on('click', function(event) {
                event.preventDefault();
                event.stopPropagation();

                // Use `$(this)` to get the `data-lecture-id` attribute
                const lectureId = $(this).attr('data-lecture-id');
                if (lectureId) {
                    const URL = '/frontend/preview-lecture/' + lectureId;

                    axios.get(URL)
                        .then(function(response) {
                            $('#previewModal').modal('show');
                            $('#lecturePreviewDiv').html(response.data);
                            console.log(response.data);
                        })
                        .catch(function(error) {
                            // Handle error
                            console.log(error);
                        });
                } else {
                    console.log('Lecture ID is undefined');
                }
            });
        });
        // clear preview when modal close
        $('#previewModal').on('hidden.bs.modal', function() {
            $('#lecturePreviewDiv').empty();
        });
    </script>
    <script src="{{ asset('frontend/js/addToCart.js') }}"></script>
@endpush
