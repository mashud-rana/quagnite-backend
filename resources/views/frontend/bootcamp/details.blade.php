@extends('layouts.master')

@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part ic-section-space"
        style="background-image:  linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%),  url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-8">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="ic-heading-title mb-15">Bootcamp Details</span>
                        <h1 class="black pb-15">{{ $bootcamp->title }}</h1>
                        <div class="row">
                            <div class="col-xxl-10 col-lg-12">
                                <p class="gray pb-30">
                                    {{ $bootcamp->subtitle }}
                                </p>
                                <ul class="ic-course-details-banner-list">
                                    <li>
                                        <span><i class="ri-user-fill primary"></i></span>
                                        <span class="primary">{{ $bootcamp->user->full_name }}</span>
                                    </li>
                                    <li>
                                        <span><i class="ri-star-s-fill"></i></span>
                                        <span>{{ number_format($bootcamp->average_rating, 2) }}
                                            {{ $bootcamp->total_review }}
                                            reviews</span>
                                    </li>
                                    <li>
                                        <span>
                                            <img src="{{ asset('new-frontend/images/maps.png') }}" alt="">
                                        </span>
                                        <span>{{ $bootcamp->total_enrolled_students }} Student Enrolled</span>
                                    </li>
                                    <li>
                                        <span>
                                            <img src="{{ asset('new-frontend/images/calander.png') }}" alt="">
                                        </span>
                                        <span>Member since {{ custom_date($bootcamp->user->created_at) }}</span>
                                    </li>
                                </ul>
                                <div class="ic-video-programs">
                                    <span data-bootcamp_id="{{ $bootcamp->id }}" data-route="{{ route('addToCart') }}"
                                        class="ic-btn  addToCart">
                                        Enroll Bootcamp
                                        <i class="ri-arrow-right-line"></i>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ic-enroll-div">
                        <h3 class="fw-700 fs-30 black">${{ $bootcamp->price }}</h3>
                        <div class="ic-bootcamp-links">
                            <ul>
                                <li>
                                    <span class="d-flex align-items-center"><i class="ri-translate"></i>Bootcamp
                                        Start</span>
                                    <span>{{ custom_date($bootcamp->start_date) }}</span>
                                </li>
                                <li>
                                    <span class="d-flex align-items-center"><i class="ri-anchor-line"></i> Format</span>
                                    <span> Online Live</span>
                                </li>
                                <li>
                                    <span class="d-flex align-items-center"><i class="ri-calendar-2-line"></i>
                                        Duration</span>
                                    <span> {{ $bootcamp->duration_month }} Months</span>
                                </li>
                                <li>
                                    <span class="d-flex align-items-center"><i class="ri-translate"></i> Language</span>
                                    <span> {{ $bootcamp->language->title }}</span>
                                </li>
                            </ul>
                            <span data-bootcamp_id="{{ $bootcamp->id }}" data-route="{{ route('addToCart') }}"
                                class="course-addCart addToCart enroll-btn ic-btn rounded w-100 mb-20">Enroll Now</span>
                            {{-- <a href="#" class="ic-btn-black rounded w-100">Get for business</a> --}}
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
                        {!! $bootcamp->description !!}
                        {{-- <h2 class="fs-30 fw-600">What is Programming</h2>
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

                        <a href="#" class="ic-btn rounded">Program syllabus <i class="ri-file-download-line"></i></a> --}}
                    </div>
                    {{-- <div class="bootcamps-content mb-30">
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
                    </div> --}}
                </div>
                <div class="col-lg-6 ic-curiculam-right">
                    <div class="accordion ic-course-video-all" id="accordionExample">
                        @foreach ($bootcamp->lessons as $lesson)
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
                                                                <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                                        alt="">
                                                                    {{ $item->title }}
                                                                </p>
                                                                <span
                                                                    class="video-times">({{ $item->formatted_duration }})</span>
                                                            </div>
                                                            {{-- <div class="ic-preview-lock">
                                                                <span>Preview</span>
                                                                <i
                                                                    class="{{ $item->lecture_type == 1 ? 'ri-lock-unlock-line' : 'ri-lock-line' }}"></i>
                                                            </div> --}}
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
            </div>
        </div>
    </section>
    <section class="ic-course-details pt-0">
        <div class="container">
            <div class="ic-course-tabs">
                <div class="ic-tabs-links">
                    <ul>
                        {{-- <li>
                            <a href="#" class="ic-discription-links active" data-tabs="bootcamp-overview">Bootcamp
                                Overview</a>
                        </li> --}}
                        {{-- <li>
                            <a href="#" class="ic-discription-links" data-tabs="announcements">Announcements</a>
                        </li> --}}
                        {{-- <li>
                            <a href="#" class="ic-discription-links" data-tabs="bootcamp-content">Bootcamp Content</a>
                        </li> --}}
                        <li>
                            <a href="#" class="ic-discription-links active" data-tabs="instructor">Instructor</a>
                        </li>
                        <li>
                            <a href="#" class="ic-discription-links" data-tabs="course-rating-tabs">Bootcamp
                                Rating</a>
                        </li>
                        {{-- <li>
                            <a href="#" class="ic-discription-links" data-tabs="Playground">Benefits</a>
                        </li> --}}
                    </ul>
                </div>
                <div class="tabs-content">
                    {{-- <div class="ic-tabs-content-items active" id="bootcamp-overview">
                        <div class="ic-overview-content pt-0">
                            <div class="ic-overview-content-items">
                                <div class="types-numbers">
                                    <div class="discription">
                                        {!! $bootcamp->description !!}
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
                    </div> --}}
                    {{-- <div class="ic-tabs-content-items " id="announcements">
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
                    </div> --}}
                    {{-- <div class="ic-tabs-content-items " id="bootcamp-content">
                        <div class="accordion ic-course-video-all" id="accordionExample">
                            @foreach ($bootcamp->lessons as $lesson)
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
                                                                    <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                                            alt="">
                                                                        {{ $item->title }}
                                                                    </p>
                                                                    <span
                                                                        class="video-times">({{ $item->formatted_duration }})</span>
                                                                </div>
                                                                <div class="ic-preview-lock">
                                                                    <span>Preview</span>
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
                    </div> --}}
                    <div class="ic-tabs-content-items active" id="instructor">
                        <div class="ic-instructor-details">
                            <div class="ic-instructor-left">
                                <img src="{{ getStoreFile($bootcamp->user->avatar, $bootcamp->user->storage_type) }}"
                                    alt="">
                            </div>
                            <div class="ic-instructor-right">
                                <h4 class="fs-28 fw-600 black pb-2">{{ $bootcamp->user->full_name }}</h4>
                                <p class="fw-300 fs-20 gray pb-2">{{ $bootcamp->user->teacher->professional_title }}</p>
                                <ul class="ic-instructor-view">
                                    <li>
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4.5" cy="4.5" r="4.5" fill="#2AA6C0" />
                                        </svg>
                                        {{ $bootcamp->user->teacher->bootcampEnrollmentsCount() }} Enrolled
                                    </li>
                                    <li>
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4.5" cy="4.5" r="4.5" fill="#2AA6C0" />
                                        </svg>
                                        {{ $bootcamp->user->teacher->bootcampsCount() }} Bootcamps
                                    </li>
                                    <li>
                                        <svg width="9" height="9" viewBox="0 0 9 9" fill="none"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <circle cx="4.5" cy="4.5" r="4.5" fill="#2AA6C0" />
                                        </svg>
                                        <span>{{ number_format($bootcamp->user->average_rating, 2) }}</span>
                                        <span class="star">
                                            @php
                                                $avgRating = $bootcamp->user->average_rating;
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

                                        <span>({{ $bootcamp->user->total_review }} Reviews)</span>
                                    </li>
                                </ul>
                                <div>
                                    {!! $bootcamp->user->teacher->about_me !!}
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic-tabs-content-items" id="course-rating-tabs">
                        <div class="ic-course-rating-slider">
                            @forelse ($bootcamp->reviews as $review)
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
                        @if ($bootcamp->reviews->isNotEmpty())
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
                                <p class="gray">The globally recognized PMP® certification can help you land lucrative
                                    roles in IT, manufacturing, finance, healthcare, and other exciting industries.
                                    Certified PMP®'s drive better project performance and are often rewarded with
                                    substantial pay raises as shown below.</p>
                            </div>
                            
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script></script>
    <script src="{{ asset('frontend/js/addToCart.js') }}"></script>
@endpush
