{{-- Reach out for business inquires --}}
<section class="ic-business-inquires ic-section-space">
    <div class="container">
        {{-- section header --}}
        <div class="section_header mb-50">
            <div class="row">
                <div class="col-xl-6 col-lg-8 m-auto">
                    <h3 class="white">Reach out for business inquires</h3>
                    <p class="white">You can purchase our API and use our Bootcamps, Course, Playground & Wiki in your
                        own website for a small payment.</p>
                </div>
            </div>
        </div>
        {{-- section header --}}

        {{-- business-inquires-main --}}
        <div class="ic-business-inquires-main">
            <div class="row align-items-center gy-3">
                <div class="col-xl-7 col-lg-6">
                    <div class="business-inquires">
                        <img class="img-fluid business-inquires-img"
                            src="{{ asset('new-frontendv1/images/reach-business.png') }}" alt="">
                    </div>
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="ic-business-inquires-content">
                        <ul>
                            <li>
                                <div>
                                    <img class="img-fluid" src="{{ asset('new-frontendv1/images/healthcare.png') }}"
                                        alt="">
                                </div>
                                <div>
                                    <h6>Healthcare</h6>
                                    <p>Vivamus dignissim tortor in tellus dictum pellentesque.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="{{ asset('new-frontendv1/images/public-sector.png') }}" alt="">
                                </div>
                                <div>
                                    <h6>Public Sector</h6>
                                    <p>Vivamus dignissim tortor in tellus dictum pellentesque.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="{{ asset('new-frontendv1/images/financial.png') }}" alt="">
                                </div>
                                <div>
                                    <h6>Insurance & Financial</h6>
                                    <p>Vivamus dignissim tortor in tellus dictum pellentesque.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="{{ asset('new-frontendv1/images/higher-education.png') }}" alt="">
                                </div>
                                <div>
                                    <h6>Higher Education.</h6>
                                    <p>Vivamus dignissim tortor in tellus dictum pellentesque.</p>
                                </div>
                            </li>
                        </ul>
                        <a href="{{ route('business.index') }}" class="ic-btn-white">For Businesses</a>
                    </div>
                </div>
            </div>
        </div>
        {{-- business-inquires-main --}}
    </div>
</section>
{{-- Reach out for business inquires --}}


{{-- ic-latest-course-coaching-test --}}
<section class="ic-latest-course-coaching-test ic-section-space "
    style="background-image: url({{ asset('/new-frontendv1/images/ic-latest-course-coaching-test.png') }})">

    <div class="ic-bootcamp-training  pb-30">
        <div class="container">
            <div class="ic-row">
                <div class="ic-col w-45">

                    <div class="ic-bootcamp-training-content">
                        <h3 class="ic-title">Enroll To Our <span class="primary">Latest Courses</span></h3>
                        <p class="ic-sub-title">
                            You can purchase our API and use our Bootcamps, Course,
                            & Wiki in your own website for a small payment.
                        </p>
                        <div class="ic-des-wrapper mb-20">
                            <p class="ic-des">
                                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots piece of
                                classical Latin literature from 45 BC, making it over 2000 years old.
                            </p>
                        </div>

                        <div class="ic-bootcamp-card-wrapper">


                            <div class="bootcamp-card">
                                <div class="ic-logo">
                                    <img class="img-fluid"
                                        src="{{ asset('/new-frontendv1/images/bootcamp/dev-ops.png') }}" alt="dev-ops">
                                </div>
                                <div class="bootcamp-card-content">
                                    <h6 class="bootcamp-card-title">DevOps</h6>
                                    <p class="bootcamp-card-des">
                                        06 Course
                                    </p>
                                </div>
                            </div>


                            <div class="bootcamp-card">
                                <div class="ic-logo">
                                    <img class="img-fluid"
                                        src="{{ asset('/new-frontendv1/images/bootcamp/cyber-security.png') }}"
                                        alt="cyber-security">
                                </div>
                                <div class="bootcamp-card-content">
                                    <h6 class="bootcamp-card-title">Cyber Security</h6>
                                    <p class="bootcamp-card-des">
                                        04 Course
                                    </p>
                                </div>
                            </div>

                            <div class="bootcamp-card">
                                <div class="ic-logo">
                                    <img class="img-fluid"
                                        src="{{ asset('/new-frontendv1/images/bootcamp/cloud-computing.png') }}"
                                        alt="cloud-computing">
                                </div>
                                <div class="bootcamp-card-content">
                                    <h6 class="bootcamp-card-title">Cloud Computing</h6>
                                    <p class="bootcamp-card-des">
                                        05 Course
                                    </p>
                                </div>
                            </div>

                            <div class="bootcamp-card">
                                <div class="ic-logo">
                                    <img class="img-fluid"
                                        src="{{ asset('/new-frontendv1/images/bootcamp/digital-marketing.png') }}"
                                        alt="digital-marketing">
                                </div>
                                <div class="bootcamp-card-content">
                                    <h6 class="bootcamp-card-title">Digital Marketing</h6>
                                    <p class="bootcamp-card-des">
                                        07 Course
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>

                <div class="ic-col w-55 right-content">
                    <div class="bootcamp-training-img-content">
                        <img class="img-fluid main-image" src="{{ asset('/new-frontendv1/images/latest-course.svg') }}"
                            alt="Bootcamp">

                        <div class="abs">
                            <img class="img-fluid top-dot-abs" src="{{ asset('/new-frontendv1/images/abs/dot.svg') }}"
                                alt="Bootcamp">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="ic-bootcamp ic-section-space-bottom">

        <div class="container">
            <h4 class="bootcamp-title mb-20">Our Recent Courses</h4>
            <div class="bootcamp-card-wrapper mb-50">
                @forelse ($data['recent_courses'] as $item)
                <div class="bootcamp-card">
                    <div class="top-content">
                        <div class="ic-card-image">
                            <img class="img-fluid" src="{{ getStoreFile($item->image, $item->storage_type) }}" alt="Bootcamp">
                        </div>

                        <div class="ic-card-body">
                            <h5 class="card-title">
                                {!! str_limit($item->title, $words = 30, $end = '...') !!}
                            </h5>
                            <div class="card-des-wrapper">
                                {{-- <p class="card-des">Cohort starts-21 Feb, 2023</p> --}}
                                <p class="card-des">{{ $item->user->full_name }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-content">
                        <a href="{{ route('course.details', $item->slug) }}" class="ic-btn">View Details</a>
                    </div>

                </div>
                @empty
                <x-frontend.data-notfound></x-frontend.data-notfound>
                @endforelse

            </div>
            <a href="{{ route('all.courses') }}">
                <button class="ic-btn ic-btn-login shadow-none d-block mx-auto">View All Courses</button>
            </a>
        </div>
    </div>

    <div class="ic-bootcamp-training  ic-section-space-bottom online-iq">
        <div class="container">
            <div class="ic-row">

                <div class="ic-col w-55 right-content">
                    <div class="bootcamp-training-img-content">
                        <img class="img-fluid main-coaching-image"
                            src="{{ asset('/new-frontendv1/images/coaching-session.svg') }}" alt="Bootcamp">
                    </div>
                </div>

                <div class="ic-col w-45">

                    <div class="ic-bootcamp-training-content">
                        <h3 class="ic-title">One-on-One <span class="primary">Coaching</span> Session</h3>
                        <div class="ic-des-wrapper mb-20">
                            <p class="ic-des ">
                                There are many variations of passages of Lorem Ipsum available, but the majority have
                                suffered alteration in some form, by injected humour,
                            </p>
                        </div>
                        <ul class="mb-30 grid-2">
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid " src="{{ asset('/new-frontendv1/images/correct.svg') }}"
                                        alt="Bootcamp">
                                </div>
                                Upskill your organization.
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{ asset('/new-frontendv1/images/correct.svg') }}" alt="Bootcamp">
                                </div>
                                Easy to follow curriculum
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{ asset('/new-frontendv1/images/correct.svg') }}" alt="Bootcamp">
                                </div>
                                Contrary to popular belief
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{ asset('/new-frontendv1/images/correct.svg') }}" alt="Bootcamp">
                                </div>
                                If you are going to use a passage
                            </li>

                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{ asset('/new-frontendv1/images/correct.svg') }}" alt="Bootcamp">
                                </div>
                                Access more then 100K online
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{ asset('/new-frontendv1/images/correct.svg') }}" alt="Bootcamp">
                                </div>
                                Money-back guarantee
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{ asset('/new-frontendv1/images/correct.svg') }}" alt="Bootcamp">
                                </div>
                                Easy to follow curriculum
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{ asset('/new-frontendv1/images/correct.svg') }}" alt="Bootcamp">
                                </div>
                                If you are going to use a passage
                            </li>
                        </ul>
                        <a href="{{ route('front.coaches') }}" class="ic-btn ic-btn-login shadow-none transparent">Request Now</a>
                    </div>

                </div>



            </div>
        </div>
    </div>

    <div class="ic-bootcamp-training   online-iq row-reverse">
        <div class="container">
            <div class="ic-row">
                <div class="ic-col w-45">

                    <div class="ic-bootcamp-training-content">
                        <h3 class="ic-title">Online IQ Test</h3>
                        <p class="ic-sub-title">
                            Accurate testing.Instant results for your IQ test.
                        </p>
                        <div class="ic-des-wrapper mb-20">
                            <p class="ic-des primary fw-500">
                                Test your cognitive skills and see where you rank:
                            </p>
                        </div>
                        <ul class="mb-30">
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{ asset('/new-frontendv1/images/correct.svg') }}" alt="Bootcamp">
                                </div>
                                20 Questions, Instant Results & Perfect Accuracy.
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{ asset('/new-frontendv1/images/correct.svg') }}" alt="Bootcamp">
                                </div>
                                Receive your score, a certified IQ certificate and 42 page report. Determine your
                                intelligence level instantly.
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{ asset('/new-frontendv1/images/correct.svg') }}" alt="Bootcamp">
                                </div>
                                Recognized and certified score and certification that immediately improves life
                                opportunities
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{ asset('/new-frontendv1/images/correct.svg') }}" alt="Bootcamp">
                                </div>
                                The official IQ certification from the ILL Institute.
                            </li>
                        </ul>
                        <a href="{{ route('exams.index') }}" class="ic-btn ic-btn-login shadow-none">Start Your Test</a>
                    </div>

                </div>

                <div class="ic-col w-55 right-content">
                    <div class="bootcamp-training-img-content">
                        <img class="img-fluid main-image" src="{{ asset('/new-frontendv1/images/iq-test.svg') }}"
                            alt="Bootcamp">
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
{{-- ic-latest-course-coaching-test --}}
