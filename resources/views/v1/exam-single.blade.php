@extends('layouts.master-v1')

@section('content')
<section class="ic-banner-part ic-section-space ic_v1_inner-part"
    style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)), url({{ asset('/new-frontend') }}/images/blog-banner.png);">
    <!-- content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-7 order-2 order-lg-1">
                <div class="ic-banner-content ps-0 pe-0">
                    <span class="ic-heading-title mb-15">Exams Access</span>
                    <h1 class="black pb-15">MCdns Exam Overview</h1>
                    <p class="color-deep-gray pb-30 pe-0">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry.
                        Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book.</p>
                    <div class="">
                        <a href="#" class="ic-btn-simple">Enroll for an exam <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="ic-right-side-img">
                    <img src="{{ asset('new-frontendv1/images/blog/blog-banner-right.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- test assignment --}}
<section class="ic-test-assignment">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-6">
                <div class="ic-test-assessment">
                    <img src="{{ asset('new-frontendv1/images/blog/test-assestent.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ic-test-assessment-content">
                    <h2>How to do a test assessment <span>& determine your skill IQ</span></h2>
                    <ul>
                        <li>
                            <div class="experience-img">
                                <img src="{{ asset('new-frontendv1/images/blog/stack-2.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div>
                                <h6>Create a Registration account</h6>
                                <p>Test out skill tests without any restrictions. (We won't even bother you when you're
                                    in the backseat.) Your email address is all that is required.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="experience-img">
                                <img src="{{ asset('new-frontendv1/images/blog/stack-2.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div>
                                <h6>Make an evaluation</h6>
                                <p>Test out skill tests without any restrictions. (We won't even bother you when you're
                                    in the backseat.) Your email address is all that is required.</p>
                            </div>
                        </li>
                        <li>
                            <div class="experience-img">
                                <img src="{{ asset('new-frontendv1/images/blog/stack-2.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div>
                                <h6>Receive Exam IQ Test</h6>
                                <p>Test out skill tests without any restrictions. (We won't even bother you when you're
                                    in the backseat.) Your email address is all that is required.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="mt-30">
                        <a href="#" class="ic-btn-simple">Explore All Exams <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- test assignment --}}

{{-- Select an IQ Test and get started --}}
<section class="ic-get-started ic-section-space">
    <div class="container">
        <div class="section-headers-playground text-center">
            <h2 class="black">Select an IQ Test and<span>get started</span></h2>
        </div>
        <div class="row g-3">
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="ic-exam-test-iq">
                    <span class="ic-timer-set"><i class="ri-timer-line"></i> 10:50</span>
                    <img src="{{ asset('new-frontendv1/images/blog/icon-1.png') }}" class="img-fluid" alt="">
                    <h6>Python Operations</h6>
                    <p>Admission No : 49854</p>
                    <a href="#" class="ic-btn-simple">Take IQ Test <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="ic-exam-test-iq">
                    <span class="ic-timer-set"><i class="ri-timer-line"></i> 10:50</span>
                    <img src="{{ asset('new-frontendv1/images/blog/icon-2.png') }}" class="img-fluid" alt="">
                    <h6>Python Operations</h6>
                    <p>Admission No : 49854</p>
                    <a href="#" class="ic-btn-simple">Take IQ Test <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="ic-exam-test-iq">
                    <span class="ic-timer-set"><i class="ri-timer-line"></i> 10:50</span>
                    <img src="{{ asset('new-frontendv1/images/blog/icon-3.png') }}" class="img-fluid" alt="">
                    <h6>Python Operations</h6>
                    <p>Admission No : 49854</p>
                    <a href="#" class="ic-btn-simple">Take IQ Test <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="ic-exam-test-iq">
                    <span class="ic-timer-set"><i class="ri-timer-line"></i> 10:50</span>
                    <img src="{{ asset('new-frontendv1/images/blog/icon-4.png') }}" class="img-fluid" alt="">
                    <h6>Python Operations</h6>
                    <p>Admission No : 49854</p>
                    <a href="#" class="ic-btn-simple">Take IQ Test <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="ic-exam-test-iq">
                    <span class="ic-timer-set"><i class="ri-timer-line"></i> 10:50</span>
                    <img src="{{ asset('new-frontendv1/images/blog/icon-3.png') }}" class="img-fluid" alt="">
                    <h6>Python Operations</h6>
                    <p>Admission No : 49854</p>
                    <a href="#" class="ic-btn-simple">Take IQ Test <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
        </div>
        <div class="mt-50 text-center">
            <a href="#" class="ic-btn-simple">Load More <i class="ri-loader-2-fill"></i></a>
        </div>
    </div>
</section>
{{-- Select an IQ Test and get started --}}

{{-- Discover your ignorance Show off your skills. --}}
<section class="ic-discover-skill ic-section-space"
    style="background-image: linear-gradient(180deg, rgba(21, 141, 167, 0.97) 1.2%, rgba(21, 141, 167, 0.97) 100%), url({{ asset('new-frontendv1/images/coaches-single/bg-community.png') }})">
    <div class="container">
        <div class="section-headers-playground text-center">
            <h2 class="white">Discover your ignorance<span>Show off your skills.</span></h2>
        </div>
        <div class="ic-discover-main"
            style="background-image: url({{ asset('new-frontendv1/images/blog/blog-section-bg.png') }})">
            <div class="ic-discover-items-left">
                <div class="row g-3">
                    <div class="col-lg-6 col-md-6">
                        <div class="ic-dicover-post">
                            <img src="{{ asset('new-frontendv1/images/blog/discover-1.png') }}"
                                class="img-fluid top-image w-100" alt="">
                            <h4>Discover your knowledge gaps know</h4>
                            <p>The gold standard for demonstrating your technical skill proficiency is certification,
                                and we'll assist you make sure you're prepared. Schedule your certifications, manage
                                your learning toward a specific certification, and practice your skills through hands-on
                                learning. This is fine.</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="ic-dicover-post">
                            <h4>Discover your knowledge gaps know</h4>
                            <p>The gold standard for demonstrating your technical skill proficiency is certification,
                                and we'll assist you make sure you're prepared. Schedule your certifications, manage
                                your learning toward a specific certification, and practice your skills through hands-on
                                learning. This is fine.</p>
                            <img src="{{ asset('new-frontendv1/images/blog/discover-1.png') }}"
                                class="img-fluid bottom-image w-100" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="ic-discover-items-right">
                <img src="{{ asset('new-frontendv1/images/blog/discover-right.png') }}" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
{{-- Discover your ignorance Show off your skills. --}}

{{-- Popular Proctored Exams & Select an get started --}}
<section class="ic-popular-proctored ic-section-space position-relative">
    <img src="{{ asset('new-frontendv1/images/blog/popular-producted.png') }}" class="img-fluid image-left-protected"
        alt="">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="section-headers-playground text-center">
                    <h2 class="black">Popular Proctored Exams<span> & Select an get started</span></h2>
                </div>
            </div>
        </div>
        <div class="ic-proctored-exams">
            <div class="row g-3">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ic-exam-test-iq">
                        <span class="ic-timer-set"><i class="ri-timer-line"></i> 10:50</span>
                        <div class="ic-proteced-exam">
                            <img src="{{ asset('new-frontendv1/images/exam-single.png') }}" class="img-fluid" alt="">
                        </div>
                        <h6>Python Operations</h6>
                        <p class="gray fs-15">Admission No : 49854</p>
                        <a href="#" class="ic-btn-simple">begin exam <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ic-exam-test-iq">
                        <span class="ic-timer-set"><i class="ri-timer-line"></i> 10:50</span>
                        <div class="ic-proteced-exam">
                            <img src="{{ asset('new-frontendv1/images/exam-single.png') }}" class="img-fluid" alt="">
                        </div>
                        <h6>Python Operations</h6>
                        <p class="gray fs-15">Admission No : 49854</p>
                        <a href="#" class="ic-btn-simple">begin exam <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ic-exam-test-iq">
                        <span class="ic-timer-set"><i class="ri-timer-line"></i> 10:50</span>
                        <div class="ic-proteced-exam">
                            <img src="{{ asset('new-frontendv1/images/exam-single.png') }}" class="img-fluid" alt="">
                        </div>
                        <h6>Python Operations</h6>
                        <p class="gray fs-15">Admission No : 49854</p>
                        <a href="#" class="ic-btn-simple">begin exam <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ic-exam-test-iq">
                        <span class="ic-timer-set"><i class="ri-timer-line"></i> 10:50</span>
                        <div class="ic-proteced-exam">
                            <img src="{{ asset('new-frontendv1/images/exam-single.png') }}" class="img-fluid" alt="">
                        </div>
                        <h6>Python Operations</h6>
                        <p class="gray fs-15">Admission No : 49854</p>
                        <a href="#" class="ic-btn-simple">begin exam <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="ic-exam-test-iq">
                        <span class="ic-timer-set"><i class="ri-timer-line"></i> 10:50</span>
                        <div class="ic-proteced-exam">
                            <img src="{{ asset('new-frontendv1/images/exam-single.png') }}" class="img-fluid" alt="">
                        </div>
                        <h6>Python Operations</h6>
                        <p class="gray fs-15">Admission No : 49854</p>
                        <a href="#" class="ic-btn-simple">begin exam <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
            <div class="mt-50 text-center">
                <a href="#" class="ic-btn-simple">Load More <i class="ri-loader-2-fill"></i></a>
            </div>
        </div>
    </div>
</section>
{{-- Popular Proctored Exams & Select an get started --}}

{{-- ready for popular tech certifications --}}
<section class="ic-tech-certifications ic-section-space"
    style="background-image: url({{ asset('new-frontendv1/images/bootcamp-achive-your-goal.png') }})">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 m-auto">
                <div class="section-headers-playground text-center">
                    <h2 class="white">Popular Proctored Exams<span> & Select an get started</span></h2>
                    <p class="white">For learners, it’s a single destination for managing their entire certification
                        prep experience, from tracking their learning progress to scheduling their exam.</p>
                </div>
            </div>
        </div>
        <div class="row row-cols-5">
            <div class="col">
                <div class="ic-badge-img">
                    <img src="{{ asset('new-frontendv1/images/blog/badge-img.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col">
                <div class="ic-badge-img">
                    <img src="{{ asset('new-frontendv1/images/blog/badge-img.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col">
                <div class="ic-badge-img">
                    <img src="{{ asset('new-frontendv1/images/blog/badge-img.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col">
                <div class="ic-badge-img">
                    <img src="{{ asset('new-frontendv1/images/blog/badge-img.png') }}" class="img-fluid" alt="">
                </div>
            </div>
            <div class="col">
                <div class="ic-badge-img">
                    <img src="{{ asset('new-frontendv1/images/blog/badge-img.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
        <div class="mt-50 text-center">
            <a href="#" class="ic-btn-white">Request For Exams <i class="ri-arrow-right-line"></i></a>
        </div>
    </div>
</section>
{{-- ready for popular tech certifications --}}

{{-- route and get --}}
<section class="ic-routed-get ic-section-space">
    <div class="container">
        <div class="ic-routed-get-items ic-shadow-divs">
            <div class="row">
                <div class="col-lg-7 order-2 order-lg-1">
                    <div class="ic-routed-get-content">
                        <h2>Create a unique route and get ready <span>to become undeniably wonderful.</span></h2>
                        <p>The gold standard for demonstrating your technical skill proficiency is certification, and
                            we'll assist you make sure you're prepared. Schedule your certifications, manage your
                            learning toward a specific certification, and practice your skills through hands-on
                            learning. This is fine. Need to adapt the learning of your team to the organizational
                            strategy? We have a tool for that. Right here, you may design a unique learning route for
                            your students.</p>
                        <a href="#" class="ic-btn-simple">Explore All Exams <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                <div class="col-lg-4 offset-1 order-1 order-lg-2">
                    <div class="ic-routed-get-img">
                        <img src="{{ asset('new-frontendv1/images/blog/exam-monitor.png') }}"
                            class="img-fluid ic-monitor-big" alt="">
                        <img src="{{ asset('new-frontendv1/images/blog/exam-monitor-dots.png') }}"
                            class="img-fluid monitor-dots" alt="">
                        <img src="{{ asset('new-frontendv1/images/blog/exam-monitor-hides.png') }}"
                            class="img-fluid monitor-small-img" alt="">
                    </div>
                </div>
            </div>
        </div>
        <div class="ic-routed-get-items second">
            <div class="row">
                <div class="col-lg-4">
                    <div class="ic-routed-get-img">
                        <img src="{{ asset('new-frontendv1/images/blog/exam-monitor.png') }}"
                            class="img-fluid ic-monitor-big" alt="">
                        <img src="{{ asset('new-frontendv1/images/blog/exam-monitor-dots.png') }}"
                            class="img-fluid monitor-dots" alt="">
                        <img src="{{ asset('new-frontendv1/images/blog/exam-monitor-hides.png') }}"
                            class="img-fluid monitor-small-img" alt="">
                    </div>
                </div>
                <div class="col-lg-7 offset-1">
                    <div class="ic-routed-get-content">
                        <h2>Create a unique route and get ready <span>to become undeniably wonderful.</span></h2>
                        <p>The gold standard for demonstrating your technical skill proficiency is certification, and
                            we'll assist you make sure you're prepared. Schedule your certifications, manage your
                            learning toward a specific certification, and practice your skills through hands-on
                            learning. This is fine. Need to adapt the learning of your team to the organizational
                            strategy? We have a tool for that. Right here, you may design a unique learning route for
                            your students.</p>
                        <a href="#" class="ic-btn-simple">Explore All Exams <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- route and get --}}

{{-- active goal --}}
<section class="ic-ahieve-section ic-section-space"
    style="background-image: url({{ asset('/new-frontendv1/images/bootcamp-achive-your-goal.png') }})">
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