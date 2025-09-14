@extends('layouts.master-v1')

@section('content')
    <section class="ic-banner-part ic-section-space"
        style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/new-frontendv1') }}/images/coaches-single/coach-details-banner.png);">
        <!-- content -->
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-md-6">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="ic-heading-title mb-15">Single Coach</span>
                        <h1 class="black pb-15">Single Coach Details</h1>
                        <div class="row">
                            <div class="col-xxl-10 col-lg-12">
                                <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s, when an
                                    unknown printer took a galley of
                                </p>
                                <a href="#" class="btn-watch ic-play-button">
                                    <div class="circle">
                                        <i class="ri-play-fill"></i>
                                    </div> Watch Intro Video
                                </a>
                            </div>
                        </div>
                    </div>
    
                </div>
                <div class="col-md-6 d-md-block d-none ">
                    <div class="ic-right-side-img text-end">
                        <img src="{{ asset('new-frontendv1/images/coaches-single/banner-right.png') }}" class="img-fluid" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ic-section-space" style="background: linear-gradient(180deg, #FFF 0%, #D3EDF3 100%), #F3F3F3;">
        <div class="container">
            {{-- biography --}}
            <div class="ic-biography">
                <div class="row gx-xl-5 g-4">
                    <div class="col-lg-8">
                        <h3 class="mb-3">Biography</h3>
                        <p class="ic-biography-text mb-4">Freelancers and entrepreneurs Freelancers and entrepreneurs use
                            about me to grow their audience
                            and get
                            more clients. Create a page to present who you are and what you do in one link. Use about.me to
                            grow
                            their audience and get more clients. · Create a page to present who you are and what you do in
                            one link.
                        </p>
                        <p class="ic-biography-text">Freelancers and entrepreneurs Freelancers and entrepreneurs use about
                            me to grow their audience
                            and get
                            more clients Use about.me to grow their audience and get more clients Freelancers and
                            entrepreneurs
                            Freelancers and entrepreneurs use about.</p>

                        <ul class="ic-bio-info">
                            <li>
                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                </svg>
                                <p>15+ years of experience in Marketing</p>
                            </li>
                            <li>
                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                </svg>
                                <p>Teaches over 25K+ students</p>
                            </li>
                            <li>
                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                </svg>
                                <p>Lead teams of 100+ marketing experts</p>
                            </li>
                        </ul>

                        <div class="ic-coaching-reawad">
                            <div class="row g-4">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="ic-coach-experience">
                                        <img src="{{ asset('frontend/images/ic-trophy.png') }}" alt="">
                                        <div>
                                            <h4>17+</h4>
                                            <p>Awards Rewarded</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="ic-coach-experience green">
                                        <img src="{{ asset('frontend/images/ic-users.png') }}" alt="">
                                        <div>
                                            <h4>17+</h4>
                                            <p>Years of Experience</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="ic-coach-experience orange-light">
                                        <img src="{{ asset('frontend/images/ic-smiley.png') }}" alt="">
                                        <div>
                                            <h4>17+</h4>
                                            <p>Happy Student</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="ic-coach-experience alchol">
                                        <img src="{{ asset('frontend/images/ic-briefcase.png') }}" alt="">
                                        <div>
                                            <h4>17+</h4>
                                            <p>COMPLETED coaches</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ic-biography-avatar">
                            <img src="{{ asset('frontend/images/coach-avatar.png') }}" class="img-fluid w-100"
                                alt="">
                            <div class="ic-avatar-infos">
                                <div class="ic-avatar-accept">
                                    <img src="{{ asset('frontend/images/accept.png') }}" alt="">
                                    <div>
                                        <h4>James Bond</h4>
                                        <p>marketing experts</p>
                                    </div>
                                </div>
                                <ul>
                                    <li>
                                        <img src="{{ asset('frontend/images/graduate.png') }}" alt="">
                                        <p>200 Students Enroll</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend/images/cap.png') }}" alt="">
                                        <p>30 Courses</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend/images/reviews.png') }}" alt="">
                                        <p>50 Reviews (5.0 average)</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ic-section-space-top-80">
                <div class="ic__heading text-center mb-40">
                    <h2 class="primary"><span class="black">Why Your </span> Coach?</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="ic-choose-coach">
                            <img src="{{ asset('frontend/images/chart.png') }}" alt="">
                            <h6>FULFILLING POTENTIAL</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="ic-choose-coach">
                            <img src="{{ asset('frontend/images/life-circle.png') }}" alt="">
                            <h6>MAKING CHANCES</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="ic-choose-coach">
                            <img src="{{ asset('frontend/images/checked.png') }}" alt="">
                            <h6>FINDING BALANCE</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ic-section-space-top-80">
                <div class="ic__heading text-center mb-40">
                    <h2 class="primary"><span class="black">Next </span> Scheduled Availability</h2>
                </div>
                {{-- Next Scheduled Availability --}}
                <div class="ic-coahing-scheduled">
                    <div class="coahing-images">
                        <img src="{{ asset('frontend/images/coach-images.png') }}" class="img-fluid" alt="">
                    </div>
                    <div class="ic-right-side">
                        <div class="ic-date-show">
                            <p class="date-shows"><i class="ri-calendar-check-fill"></i> 19 Oct-24 Oct, 2023</p>
                            <div class="ic__arrows">
                                <button class="ic-dates-arrows"><i class="ri-arrow-right-s-line"></i></button>
                            </div>
                        </div>
                        {{-- owl-carousel owl-them --}}
                        <div class="overflow-auto">
                            <div class="scroll-dates-slider">
                                <div class="ic-date-slider ">
                                    <div class="ic-date-items">
                                        <p>Wednesday</p>
                                        <h5>19</h5>
                                        <span>08:05 - 09:20</span>
                                    </div>
                                    <div class="ic-date-items">
                                        <p>Thursday</p>
                                        <h5>20</h5>
                                    </div>
                                    <div class="ic-date-items">
                                        <p>Friday</p>
                                        <h5>21</h5>
                                        <span>08:05 - 09:20</span>
                                    </div>
                                    <div class="ic-date-items">
                                        <p>Friday</p>
                                        <h5>21</h5>
                                        <span>08:05 - 09:20</span>
                                    </div>
                                    <div class="ic-date-items">
                                        <p>Friday</p>
                                        <h5>21</h5>
                                        <span>08:05 - 09:20</span>
                                    </div>
                                    <div class="ic-date-items">
                                        <p>Saturday</p>
                                        <h5>22</h5>
                                    </div>
                                    <div class="ic-date-items">
                                        <p>Sunday</p>
                                        <h5>22</h5>
                                        <span>08:05 - 09:20</span>
                                    </div>
                                    <div class="ic-date-items">
                                        <p>Monday</p>
                                        <h5>22</h5>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <a href="#" class="ic-btn-outline mt-4">Book Schedule <i
                                class="ri-arrow-right-line ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- related course --}}
    <section class="ic-enroll-course ic-section-space" style="background: linear-gradient(180deg, #FFF 0%, #D3EDF3 100%), #F3F3F3;">
        <div class="container">
            <h2 class="ic-title text-center mb-50"><span>Related Courses</span>  This Coach!</h2>
            <div class="row">
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ic-coach-item">
                        <div class="position-relative overflow-hidden">
                            <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                            <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                            <img src="{{asset('/new-frontendv1/images/course-single/card2.png')}}" class="img-fluid ic-coach-image w-100"
                            alt="">
                        </div>
                        <div class="ic-coach-content">
                            <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                            <div class="coach-names">
                                <p>
                                    <img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
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
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ic-coach-item">
                        <div class="position-relative overflow-hidden">
                            <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                            <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                            <img src="{{asset('/new-frontendv1/images/course-single/card2.png')}}" class="img-fluid ic-coach-image w-100"
                            alt="">
                        </div>
                        <div class="ic-coach-content">
                            <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                            <div class="coach-names">
                                <p>
                                    <img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
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
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ic-coach-item">
                        <div class="position-relative overflow-hidden">
                            <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                            <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                            <img src="{{asset('/new-frontendv1/images/course-single/card2.png')}}" class="img-fluid ic-coach-image w-100"
                            alt="">
                        </div>
                        <div class="ic-coach-content">
                            <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                            <div class="coach-names">
                                <p>
                                    <img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
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
                <div class="col-lg-3 col-md-4 col-sm-6">
                    <div class="ic-coach-item">
                        <div class="position-relative overflow-hidden">
                            <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                            <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                            <img src="{{asset('/new-frontendv1/images/course-single/card2.png')}}" class="img-fluid ic-coach-image w-100"
                            alt="">
                        </div>
                        <div class="ic-coach-content">
                            <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                            <div class="coach-names">
                                <p>
                                    <img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
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
            <div class="mt-30 text-center">
                <a href="#" class="ic-btn-simple">Explore All Course</a>
            </div>
        </div>
    </section>
@endsection