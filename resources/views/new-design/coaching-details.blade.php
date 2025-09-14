@extends('layouts.master')
@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part ic-coach-details ic-bg-img"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)), url({{ asset('/frontend') }}/images/coaches-banner.png);">
        <!-- content -->
        <div class="container">
            <div class="row align-items-center ic-banner-content-wrapper">
                <div class="col-lg-6">
                    <div class="ic__banner--content ps-0">
                        <p class="ic-borderWith-whiteBg mb-15">Interview Coaching</p>
                        <h1 class="pb-3">Coaching introducing</h1>
                        <p class="color-deep-gray pb-30">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of
                        </p>
                        <div class="ic__buttons-wrapper">
                            <a href="#" class="ic-btn">Enroll Now</a>
                            <a href="https://www.youtube-nocookie.com/embed/Ga6RYejo6Hk" class="btn-watch ic-play-button">
                                <div class="circle">
                                    <i class="ri-play-fill"></i>
                                </div> Watch Intro Video
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-image">
                        <img class="img-fluid" src="{{ asset('new-frontend/images/coaching-details-banner.png') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- banner part end --}}

    {{-- ic-coaching-program --}}
    <section class="ic-coaching-program ic-coach-details ic-section-space">
        <div class="container">
            <div class="ic-headers text-center">

                <h2 class="black pb-3">our coaching <span class="primary"> program</span></h2>
                <p class="color-deep-gray">
                    It is a long established fact that a reader will be distracted by the fact that a reader readable
                    content.
                </p>

            </div>

            <!-- ic-coaching-info -->
            <div class="ic-coaching-info">
                <div class="left-content">
                    <div class="top-content mb-27">
                        <h3 class="ic-title mb-30">A coach will help you.</h3>
                        <p class="ic-des">
                            After sitting through dozens of instructional coach interviews, there is one common thing that
                            comes
                            up where once the candidate leaves it is a fairly quick “no” from leadership. Most of us
                            couldn’t
                            articulate exactly what it was in the moment, but more of a feeling that showed up time and time
                            again
                        </p>
                    </div>

                    <div class="ic-card-wrapper">
                        <div class="card-item text-center" style="background-color : #158DA7">
                            <div class="ic-icon mb-10">
                                <img class="img-fluid" src="{{ asset('new-frontend/images/coaching/icon5.png') }}"
                                    alt="">
                            </div>
                            <h5>Resume review</h5>
                            <p>Years of Experience</p>
                        </div>
                        <div class="card-item text-center" style="background-color : #2FBD77">
                            <div class="ic-icon mb-10">
                                <img class="img-fluid" src="{{ asset('new-frontend/images/coaching/icon5.png') }}"
                                    alt="">
                            </div>
                            <h5>Project assignment</h5>
                            <p>Years of Experience</p>
                        </div>
                        <div class="card-item text-center" style="background-color : #E8543E">
                            <div class="ic-icon mb-10">
                                <img class="img-fluid" src="{{ asset('new-frontend/images/coaching/icon1.png') }}"
                                    alt="">
                            </div>
                            <h5>Negotiation support</h5>
                            <p>Years of Experience</p>
                        </div>
                        <div class="card-item text-center" style="background-color : #F47820">
                            <div class="ic-icon mb-10">
                                <img class="img-fluid" src="{{ asset('new-frontend/images/coaching/icon2.png') }}"
                                    alt="">
                            </div>
                            <h5>Career Orientation</h5>
                            <p>Years of Experience</p>
                        </div>
                        <div class="card-item text-center" style="background-color : #00ACB6">
                            <div class="ic-icon mb-10">
                                <img class="img-fluid" src="{{ asset('new-frontend/images/coaching/icon3.png') }}"
                                    alt="">
                            </div>
                            <h5>expert Revamping</h5>
                            <p>Years of Experience</p>
                        </div>
                        <div class="card-item text-center" style="background-color : #00ACB6">
                            <div class="ic-icon mb-10">
                                <img class="img-fluid" src="{{ asset('new-frontend/images/coaching/icon4.png') }}"
                                    alt="">
                            </div>
                            <h5>Employer Networking</h5>
                            <p>Years of Experience</p>
                        </div>
                    </div>
                </div>
                <div class="right-content">
                    <div class="ic-image">
                        <img class="img-fluid" src="{{ asset('new-frontend/images/coaching/coaching-info-right.png') }}"
                            alt="">
                    </div>
                </div>
            </div>

        </div>
    </section>
    {{-- ic-coaching-program --}}

    {{-- ic-coach-request start --}}
    <section class="ic-coach-request ic-coach-details ic-bg-img"
        style="background-image: linear-gradient(180deg, rgba(46, 183, 211, 0.95) 0.01%, rgba(6, 115, 138, 0.95) 100%),  url({{ asset('/new-frontend') }}/images/coaching/coach-req-bg.png);">
        <!-- content -->
        <div class="container">
            <div class="coach-req-content-wrapper">
                <div class="coach-req-content">
                    <div class="left">
                        <img class="img-fluid" src="{{ asset('new-frontend/images/coaching/coach-req-demo.png') }}"
                            alt="">
                    </div>
                    <div class="right ic-section-space">
                        <div class="ic-contact-form">
                            <h5 class=" ic-title text-center mb-40">Request To Get A Coach</h5>

                            <div class="ic-form ">
                                <form action="">
                                    <div class="row mb-30">
                                        <!-- Full Name -->
                                        <div class="col-lg-6 col-md-12 mb-20">
                                            <label for="" class="form-label">Full Name</label>
                                            <input type="text" name="name" class="form-control"
                                                placeholder="Full Name">
                                        </div>
                                        <!-- Email -->
                                        <div class="col-lg-6 col-md-12 mb-20">
                                            <label for="" class="form-label">Email</label>
                                            <input type="email" name="email" class="form-control"
                                                placeholder="Email adress">
                                        </div>
                                        <!-- Phone Number -->
                                        <div class="col-lg-6 col-md-12 mb-20">
                                            <label for="" class="form-label">Phone Number</label>
                                            <input type="number" name="phone" class="form-control"
                                                placeholder="Phone Number">
                                        </div>
                                        <!-- Type of coaching -->
                                        <div class="col-lg-6 col-md-12 mb-20">
                                            <label for="" class="form-label">Type of coaching</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <!-- Date, and time desired -->
                                        <div class="col-lg-6 col-md-12 mb-20">
                                            <label for="" class="form-label">Date, and time desired</label>
                                            <input type="date" name="subject" class="form-control"
                                                placeholder="Enter your subject">
                                        </div>
                                        <!-- Are you one of our students? -->
                                        <div class="col-lg-6 col-md-12 mb-20">
                                            <label for="" class="form-label">Are you one of our students?</label>
                                            <select class="form-select" aria-label="Default select example">
                                                <option selected>Open this select menu</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <!-- message -->
                                        <div class="col-lg-12">
                                            <label for="inputEmail4" class="form-label">Message</label>
                                            <textarea name="message" class="form-control textarea"
                                                placeholder="Reason for your request ( Why do you need our help? )..."></textarea>
                                        </div>
                                    </div>

                                    <div class="ic-submit">
                                        <button class="ic-btn w-100">
                                            Submit Now <i class="ri-send-plane-2-line"></i>
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ic-coach-request end --}}

    {{-- service-testimonial start  --}}
    <section class="ic-service-testimonial ic-section-space ">
        <div class="container">
            <!-- ic-testimonial-wrapper -->
            <div class="ic-testimonial-wrapper">
                <div class="left-content">
                    <div class="top-content mb-40">
                        <h2 class="ic-title">Past Coaching Reviews about our services.</h2>
                    </div>


                    <div class="ic-testimonial-slider-content-wrapper">
                        <div class="ic-testimonial-slider-content">
                            <div class="item">
                                <div class="ic-slider-content">
                                    <div class="ic-quotation mb-40">
                                        <p class="ic-des mb-20">
                                            “This girl is true professional and very experienced in migration and server
                                            configuration.
                                            He
                                            was able to complete my order in time and as per agreed scope. Highly
                                            recommend!”
                                            true
                                            professional and very experienced in migration and server configuration. He was
                                            able
                                            to
                                        </p>

                                        <div class="ic-image">
                                            <img class="img-fluid"
                                                src="{{ asset('new-frontend/images/coaching/quotes.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="ic-profile">
                                        <div class="ic-image">
                                            <img class="img-fluid"
                                                src="{{ asset('new-frontend/images/coaching/testimonial.png') }}"
                                                alt="">
                                        </div>
                                        <div class="ic-content">
                                            <h4 class="mbb-4">Annette Black</h4>
                                            <p>UX/UI Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="ic-slider-content">
                                    <div class="ic-quotation mb-40">
                                        <p class="ic-des mb-20">
                                            “This girl is true professional and very experienced in migration and server
                                            configuration.
                                            He
                                            was able to complete my order in time and as per agreed scope. Highly
                                            recommend!”
                                            true
                                            professional and very experienced in migration and server configuration. He was
                                            able
                                            to
                                        </p>

                                        <div class="ic-image">
                                            <img class="img-fluid"
                                                src="{{ asset('new-frontend/images/coaching/quotes.png') }}"
                                                alt="">
                                        </div>
                                    </div>
                                    <div class="ic-profile">
                                        <div class="ic-image">
                                            <img class="img-fluid"
                                                src="{{ asset('new-frontend/images/coaching/testimonial.png') }}"
                                                alt="">
                                        </div>
                                        <div class="ic-content">
                                            <h4 class="mbb-4">Annette Black</h4>
                                            <p>UX/UI Designer</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ic-arrows">
                            <button class="ic-testimonial-button-left"><i class="ri-arrow-left-line"></i></button>
                            <button class="ic-testimonial-button-right"><i class="ri-arrow-right-line"></i></button>
                        </div>
                    </div>

                </div>
                <div class="right-content">
                    <div class="ic-image">
                        <img class="img-fluid" src="{{ asset('new-frontend/images/coaching/testimonial.png') }}"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- service-testimonial end  --}}

    {{-- enroll joined coaches  --}}
    <section class="ic-enroll-lateset-courses ic-coach-details ic-section-space bg-shade">
        <div class="container">
            <div class="ic-headers text-center">
                <!-- <p class="ic-borderWith-whiteBg mb-15">Latest Courses</p> -->
                <h2 class="black pb-3">Recently <span class="primary"> Joined Coaches</span></h2>
                <p class="color-deep-gray">
                    It is a long established fact that a reader will be distracted by the fact that a reader readable
                    content.
                </p>
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

                                        5.0 <span>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>

                                        </span>
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
                        <h5 class="pt-10 pb-10">Data Science Real-Life Data</h5>
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



    {{-- case studies start  --}}
    <section class="ic-case-studies ic-section-space ">
        <div class="container">
            <div class="ic-headers text-center">
                <!-- <p class="ic-borderWith-whiteBg mb-15">Latest Courses</p> -->
                <h2 class="black pb-3">Our <span class="primary">Case Studies</span></h2>
                <p class="color-deep-gray">
                    It is a long established fact that a reader will be distracted by the fact that a reader readable
                    content.
                </p>
            </div>

            <div class="ic-case-studies-wrapper">
                <div class="ic-case-studies-slider">
                    <div class="item">
                        <div class="ic-case-studies-item ic-bg-img"
                            style="background-image: url({{ asset('/new-frontend/images/banner.png') }})">
                            <div class="content">
                                <h3 class="ic-title mb-10">Login Mobile Interface illustrations</h3>
                                <p class="ic-tag mb-10">Graphic Templates , UX and UI Kits</p>
                                <p class="ic-des">
                                    There are many variations of passages of Lorem Ipsum available. There are many
                                    variations of
                                    passages of Lorem Ipsum available.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ic-case-studies-item ic-bg-img"
                            style="background-image: url({{ asset('/new-frontend/images/banner.png') }})">
                            <div class="content">
                                <h3 class="ic-title mb-10">Login Mobile Interface illustrations</h3>
                                <p class="ic-tag mb-10">Graphic Templates , UX and UI Kits</p>
                                <p class="ic-des">
                                    There are many variations of passages of Lorem Ipsum available. There are many
                                    variations of
                                    passages of Lorem Ipsum available.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="ic-case-studies-item ic-bg-img"
                            style="background-image: url({{ asset('/new-frontend/images/banner.png') }})">
                            <div class="content">
                                <h3 class="ic-title mb-10">Login Mobile Interface illustrations</h3>
                                <p class="ic-tag mb-10">Graphic Templates , UX and UI Kits</p>
                                <p class="ic-des">
                                    There are many variations of passages of Lorem Ipsum available. There are many
                                    variations of
                                    passages of Lorem Ipsum available.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="ic-arrows">
                    <button class="ic-case-studies-left"><i class="ri-arrow-left-line"></i></button>
                    <button class="ic-case-studies-right "><i class="ri-arrow-right-line"></i></button>
                </div>
            </div>

        </div>
    </section>
    {{-- case studies end  --}}
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
                autoplaySpeed: 30000000,
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

            $('.ic-testimonial-slider-content').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                arrows: true,
                autoplaySpeed: 300000,
                nextArrow: '.ic-testimonial-button-left',
                prevArrow: '.ic-testimonial-button-right',

            });
            $('.ic-case-studies-slider').slick({
                slidesToShow: 2,
                slidesToScroll: 1,
                autoplay: true,
                arrows: true,
                autoplaySpeed: 300000,
                nextArrow: '.ic-case-studies-left',
                prevArrow: '.ic-case-studies-right',
                responsive: [{
                        breakpoint: 991,
                        settings: {
                            slidesToShow: 2,
                        }
                    },
                    {
                        breakpoint: 767,
                        settings: {
                            slidesToShow: 1,
                        }
                    },
                ]
            });
        });
    </script>
@endpush
