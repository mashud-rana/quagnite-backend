@extends('layouts.master-v1')

@section('content')
{{-- banner start --}}
<section class="ic_v1_banner isNavbar">
    <div class="banner-left-abs">
        <img src="{{asset('/new-frontendv1/images/banner-left-abs.png')}}" class="" alt="">
    </div>

    <div class="banner-right-abs">
        <img src="{{asset('/new-frontendv1/images/banner-right-abs.png')}}" class="" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-10 m-auto">
                <div class="ic_v1_banner_content">
                    <p class="ic_banner_title">Welcome To MCdns</p>
                    <h2>Empowering Your Career with the <br> Ultimate All-In-One IT Training Solution.</h2>
                    <p class="ic_banner_paragraph">Our all-in-one platform offers tailored training solutions that are
                        specifically designed to meet the needs of individuals and businesses alike. With our
                        comprehensive courses and expert instructors, you can gain the skills and knowledge you need to
                        succeed</p>
                    <div class="d-flex align-items-center justify-content-center gap-3 pt-4">
                        <a href="" class="ic-btn">Explore Programs</a>
                        <a href="" class="ic-btn-white">For Businesses</a>
                    </div>
                    <div class="ic_banner_logos d-flex align-items-center justify-content-center mt-40">
                        <a href="#">
                            <img src="{{asset('/new-frontendv1/images/cms-logos-3.png')}}" alt="logos">
                        </a>
                        <a href="#">
                            <img src="{{asset('/new-frontendv1/images/cms-logos-1.png')}}" alt="logos">
                        </a>
                        <a href="#">
                            <img src="{{asset('/new-frontendv1/images/cms-logos-2.png')}}" alt="logos">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- banner end --}}


{{-- our product --}}
<section class="our-product-main ic-section-space-bottom-m-80">

    <div class="our-product-shape-top-right">
        <img src="{{asset('/new-frontendv1/images/our-product-shape-top-right-new.png')}}" class="" alt="">
    </div>


    <div class="our-product-shape-top-left">
        <img src="{{asset('/new-frontendv1/images/our-product-shape-top-left.png')}}" class="" alt="">
    </div>

    <div class="container">
        <div class="ic_image_slider_area ic-section-space-bottom-m-80">
            <div class="ic_image_slider">
                <div>
                    <img src="{{asset('/new-frontendv1/images/banner-image-slider.png')}}" alt="">
                </div>
                <div>
                    <img src="{{asset('/new-frontendv1/images/banner-image-slider.png')}}" alt="">
                </div>
                <div>
                    <img src="{{asset('/new-frontendv1/images/banner-image-slider.png')}}" alt="">
                </div>
                <div>
                    <img src="{{asset('/new-frontendv1/images/banner-image-slider.png')}}" alt="">
                </div>
            </div>
        </div>
        {{-- section header --}}
        <div class="section_header mb-50">
            <div class="row">
                <div class="col-xl-6 col-lg-8 m-auto">
                    <h3><span>Our</span> Products</h3>
                    <p>You can purchase our API and use our Bootcamps, Course, Playground & Wiki in your own website for
                        a small payment.</p>
                </div>
            </div>
        </div>
        {{-- section header --}}

        {{-- our product --}}
        <div class="our-product-image">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="ic_our_product_items">
                        <div class="p_img">
                            <img src="{{asset('/new-frontendv1/images/product-1.png')}}" class="img-fluid"
                                alt="product image">
                        </div>
                        <div class="ic_our_product_content">
                            <h4>SKILL<span>UP</span></h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical</p>
                            <ul>
                                <li>
                                    <a href="#">
                                        Course Enrollment
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Exam Assessment
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Playgrounds
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Practice Labs
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Project Submission
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        View Plans
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto ic_bottom_product">
                            <a href="#" class="btn-border">Explore More</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ic_our_product_items">
                        <div class="p_img">
                            <img src="{{asset('/new-frontendv1/images/product-2.png')}}" class="img-fluid"
                                alt="product image">
                        </div>
                        <div class="ic_our_product_content">
                            <h4>FUSE<span>WARE</span></h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                            <ul>
                                <li>
                                    <a href="#">
                                        API Integrations
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        API Documentation
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        API Pricings
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Business Partnerships
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Project Submission
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Contact Sales
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto ic_bottom_product">
                            <a href="#" class="btn-border">Explore More</a>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-lg-4 col-md-6">
                    <div class="ic_our_product_items">
                        <div class="p_img">
                            <img src="{{asset('/new-frontendv1/images/product-3.png')}}" class="img-fluid"
                                alt="product image">
                        </div>
                        <div class="ic_our_product_content">
                            <h4>L<span>MS</span></h4>
                            <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                piece of classical</p>
                            <ul>
                                <li>
                                    <a href="#">
                                        API Integrations
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        API Documentation
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        API Pricings
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Business Partnerships
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Project Submission
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Contact Sales
                                        <i class="ri-arrow-right-s-line"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="mt-auto ic_bottom_product">
                            <a href="#" class="btn-border">Explore More</a>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
        {{-- our product --}}
    </div>
</section>
{{-- our product --}}


{{-- ic-partner --}}
<section class="ic-partner ic-section-space-60 "
    style="background :  linear-gradient(180deg, #00385B -16.2%, #158DA7 113.04%)">
    <div class="container">
        <h3 class="ic-partner-title mb-40">Comprehensive programs aligned with leading certification bodies
            universities, and corporate partners.</h3>

        <div class="ic-image-wrapper">
            <a class="ic-image" href="">
                <img class="img-fluid" src="{{asset('/new-frontendv1/images/partner1.png')}}" alt="Partner">
            </a>
            <a class="ic-image" href="">
                <img class="img-fluid" src="{{asset('/new-frontendv1/images/partner2.png')}}" alt="Partner">
            </a>
            <a class="ic-image" href="">
                <img class="img-fluid" src="{{asset('/new-frontendv1/images/partner3.png')}}" alt="Partner">
            </a>
            <a class="ic-image" href="">
                <img class="img-fluid" src="{{asset('/new-frontendv1/images/partner4.png')}}" alt="Partner">
            </a>
            <a class="ic-image" href="">
                <img class="img-fluid" src="{{asset('/new-frontendv1/images/partner5.png')}}" alt="Partner">
            </a>
            <a class="ic-image" href="">
                <img class="img-fluid" src="{{asset('/new-frontendv1/images/partner1.png')}}" alt="Partner">
            </a>
        </div>

    </div>
</section>
{{-- ic-partner --}}

{{-- ic-about-us --}}
<section class="ic-about-us ic-section-space ">
    <div class="container">
        <div class="row row-cols-lg-2 gx-xxl-3 gx-xl-2 gx-sm-2 ic-about-us-content">
            <div class="left-content">
                <div class="ic-img-wrapper">
                    <img class="img-fluid" src="{{asset('/new-frontendv1/images/about-us.png')}}" alt="About Us">
                </div>
            </div>
            <div class="right-content">
                <div class="ic-img-wrapper">
                    <h3 class="ic-title"><span class="primary">About</span> Us</h3>
                    <div class="ic-des-wrapper mb-30 ">
                        <p class="ic-des">
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered
                            alteration in some form, by injected humour, or randomised
                        </p>
                        <p class="ic-des">
                            It is a long established fact that a reader will be distracted by the readable content of a
                            page
                            when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less
                            normal
                            distribution of letters, as opposed to using 'Content here, content here', making it look
                            like
                            readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum
                            as
                            their default model text, and a search for 'lorem ipsum' will uncover many web sites still
                            in
                            their infancy. Various versions have evolved over the years, sometimes by accident,
                            sometimes on
                            purpose (injected humour and the like).
                        </p>
                    </div>

                    <button class="ic-btn">Discover More</button>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- ic-about-us --}}

{{-- ic-bootcamp-training --}}
<section class="ic-bootcamp-training bg ic-section-space-bottom-60">
    <div class="container">
        <div class="ic-row">
            <div class="ic-col w-45">

                <div class="ic-bootcamp-training-content">
                    <h3 class="ic-title">Our Recent <span class="primary">Bootcamp</span> Traning</h3>
                    <p class="ic-sub-title">You can purchase our API and use our Bootcamps, Course, Playground & Wiki in
                        your own website for a small payment.</p>
                    <div class="ic-des-wrapper mb-20">
                        <p class="ic-des">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                            of
                            classical Latin literature from 45 BC, making it over 2000 years old.
                        </p>
                    </div>

                    <div class="ic-bootcamp-card-wrapper">


                        <div class="bootcamp-card">
                            <div class="ic-logo">
                                <img class="img-fluid"
                                    src="{{asset('/new-frontendv1/images/bootcamp/data-analytics.png')}}"
                                    alt="bootcamp">
                            </div>
                            <div class="bootcamp-card-content">
                                <h6 class="bootcamp-card-title">Digital Business</h6>
                                <p class="bootcamp-card-des">
                                    06 Course
                                </p>
                            </div>
                        </div>


                        <div class="bootcamp-card">
                            <div class="ic-logo">
                                <img class="img-fluid" src="{{asset('/new-frontendv1/images/bootcamp/technology.png')}}"
                                    alt="bootcamp">
                            </div>
                            <div class="bootcamp-card-content">
                                <h6 class="bootcamp-card-title">echnology</h6>
                                <p class="bootcamp-card-des">
                                    04 Course
                                </p>
                            </div>
                        </div>

                        <div class="bootcamp-card">
                            <div class="ic-logo">
                                <img class="img-fluid" src="{{asset('/new-frontendv1/images/bootcamp/report.png')}}"
                                    alt="bootcamp">
                            </div>
                            <div class="bootcamp-card-content">
                                <h6 class="bootcamp-card-title">Data And AI</h6>
                                <p class="bootcamp-card-des">
                                    05 Course
                                </p>
                            </div>
                        </div>

                        <div class="bootcamp-card">
                            <div class="ic-logo">
                                <img class="img-fluid"
                                    src="{{asset('/new-frontendv1/images/bootcamp/project-management.png')}}"
                                    alt="bootcamp">
                            </div>
                            <div class="bootcamp-card-content">
                                <h6 class="bootcamp-card-title">Digital Operations</h6>
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
                    <img class="img-fluid main-image" src="{{asset('/new-frontendv1/images/bootcamp-training.svg')}}"
                        alt="Bootcamp">

                    <div class="abs">
                        <img class="img-fluid top-dot-abs" src="{{asset('/new-frontendv1/images/abs/dot.svg')}}"
                            alt="Bootcamp">

                        <!-- <div class="top-right-card-abs">
                            <div class="top-profile mb-2">
                                <img class="ic-logo" src="{{asset('/new-frontendv1/images/profile.png')}}" alt="">
                                <div class="content">
                                    <h6 class="card-title">Cody Forman</h6>
                                    <p class="card-des">Product Director</p>
                                </div>
                            </div>
                            <p class="card-des">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit,
                                sed do eiusmod tempor </p>

                        </div>

                        <div class="bottom-left-card-abs"
                            style="background-image:linear-gradient(180deg, rgba(0, 56, 91, 0.80) -16.2%, rgba(21, 141, 167, 0.80) 113.04%), url({{ asset('/new-frontendv1/images/abs/abs-bg.png') }})">

                          
                                <div class="more-info position-absolute ">
                                    <i class="ri-more-line"></i>
                                </div>
                      

                            <ul class="abs-card-list">
                                <li>
                                    <div class="ic-icon"><i class="ri-time-line"></i></div>
                                    2 Hours
                                </li>
                                <li>
                                    <div class="ic-icon"><i class="ri-calendar-event-line"></i></div>
                                    Tuesday Sept 14 - 11 am CET
                                </li>
                                <li>
                                    <div class="ic-icon"><i class="ri-map-pin-line"></i></div>
                                    HQ Breakout area 1st floor
                                </li>
                                <li>
                                    <div class="ic-icon"><i class="ri-user-3-fill"></i></div>
                                    Ronda Williams
                                </li>
                                <li>
                                    <div class="ic-icon"><i class="ri-flag-line"></i></div>
                                    English
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>


    </div>
    </div>
    </div>
</section>
{{-- ic-bootcamp-training --}}

{{-- ic-bootcamp --}}
<section class="ic-bootcamp bg ic-section-space-bottom ">

    <div class="container">
        <h4 class="bootcamp-title mb-20">Our Recent Bootcamp</h4>
        <div class="bootcamp-card-wrapper mb-50">
            <div class="bootcamp-card">
                <div class="top-content">
                    <div class="ic-card-image">
                        <img class="img-fluid" src="{{asset('/new-frontendv1/images/card.png')}}" alt="Bootcamp">
                    </div>

                    <div class="ic-card-body">
                        <h5 class="card-title">
                            Make Business Strategies and Applications
                        </h5>
                        <div class="card-des-wrapper">
                            <p class="card-des">Cohort starts-21 Feb, 2023</p>
                            <p class="card-des">Program Duration-4 Months</p>
                        </div>
                    </div>
                </div>

                <div class="bottom-content">
                    <button class="ic-btn">View Details</button>
                </div>

            </div>

            <div class="bootcamp-card">
                <div class="top-content">
                    <div class="ic-card-image">
                        <img class="img-fluid" src="{{asset('/new-frontendv1/images/card.png')}}" alt="Bootcamp">
                    </div>

                    <div class="ic-card-body">
                        <h5 class="card-title">
                            Make Business Strategies and Applications
                        </h5>
                        <div class="card-des-wrapper">
                            <p class="card-des">Cohort starts-21 Feb, 2023</p>
                            <p class="card-des">Program Duration-4 Months</p>
                        </div>
                    </div>
                </div>

                <div class="bottom-content">
                    <button class="ic-btn">View Details</button>
                </div>

            </div>

            <div class="bootcamp-card">
                <div class="top-content">
                    <div class="ic-card-image">
                        <img class="img-fluid" src="{{asset('/new-frontendv1/images/card.png')}}" alt="Bootcamp">
                    </div>

                    <div class="ic-card-body">
                        <h5 class="card-title">
                            Make Business Strategies and Applications
                        </h5>
                        <div class="card-des-wrapper">
                            <p class="card-des">Cohort starts-21 Feb, 2023</p>
                            <p class="card-des">Program Duration-4 Months</p>
                        </div>
                    </div>
                </div>

                <div class="bottom-content">
                    <button class="ic-btn">View Details</button>
                </div>

            </div>

            <div class="bootcamp-card">
                <div class="top-content">
                    <div class="ic-card-image">
                        <img class="img-fluid" src="{{asset('/new-frontendv1/images/card.png')}}" alt="Bootcamp">
                    </div>

                    <div class="ic-card-body">
                        <h5 class="card-title">
                            Make Business Strategies and Applications
                        </h5>
                        <div class="card-des-wrapper">
                            <p class="card-des">Cohort starts-21 Feb, 2023</p>
                            <p class="card-des">Program Duration-4 Months</p>
                            <p class="card-des">Program Duration-4 Months</p>
                        </div>
                    </div>
                </div>

                <div class="bottom-content">
                    <button class="ic-btn">View Details</button>
                </div>

            </div>
        </div>

        <button class="ic-btn ic-btn-login shadow-none d-block mx-auto">View All Bootcamp</button>
    </div>
</section>
{{-- ic-bootcamp --}}

{{-- project dashbord  --}}
<section class="project-dashboard ic-section-space-top">
    <div class="container">
        {{-- section header --}}
        <div class="section_header">
            <div class="row">
                <div class="col-xl-6 col-lg-8 m-auto">
                    <h3 class="white">Students Project Dashboard</h3>
                    <p class="white">You can purchase our API and use our Bootcamps, Course, Playground & Wiki in your
                        own website for a small payment.</p>
                </div>
            </div>
        </div>
        {{-- section header --}}
    </div>
</section>
{{-- project dashbord  --}}

{{-- Business Integration Solutions --}}
<section class="business-integration position-relative ">
    <div class="project-dashboard-right-bottom">
        <img src="{{asset('/new-frontendv1/images/our-product-shape-top-left.png')}}" class="" alt="">
    </div>
    <div class="project-dashboard-right-top">
        <img src="{{asset('/new-frontendv1/images/project-dashboard-right-top-new.png')}}" class="" alt="">
    </div>

    <div class="container">
        {{-- video part --}}
        <div class="our-business-video ic-section-space-bottom-60">
            <div class="plyr__video-embed" id="player">
                <iframe
                    src="https://www.youtube.com/embed/bTqVqk7FSmY?origin=https://plyr.io&amp;iv_load_policy=3&amp;modestbranding=1&amp;playsinline=1&amp;showinfo=0&amp;rel=0&amp;enablejsapi=1"
                    allowfullscreen allowtransparency allow="autoplay"></iframe>
            </div>
        </div>
        {{-- video part --}}

        {{-- section header --}}
        <div class="section_header mb-40">
            <div class="row">
                <div class="col-xl-6 col-lg-8  m-auto">
                    <h3>Business <span>Integration</span> Solutions</h3>
                    <p>You can purchase our API and use our Bootcamps, Course, Playground & Wiki in your own website for
                        a small payment.</p>
                </div>
            </div>
        </div>
        {{-- section header --}}
        <div class="business-itegretion ic-section-space-bottom-60">
            <ul class=" mb-40">
                <li>
                    <a href="#" class="business-link active" data-link="business-1">Learning Management</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-2">Coaching</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-3">Student Management</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-4"> Email Support</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-5"> Proctored Exams</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-6">Payment Integration</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-7">SSO</a>
                </li>
            </ul>
            <div class="business-tabs">
                <div class="business-items active" id="business-1">
                    <div class="row row-cols-lg-2 gx-xxl-3 gx-xl-2 gx-sm-2 align-items-center">
                        <div class="">
                            <div class="ic-tabs-content">
                                <h4>Learning Management</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                    here, content here', making it look like readable English. Many desktop publishing
                                    packages and web page editors now.</p>
                                <a href="#" class="ic-btn">Learn More</a>
                            </div>
                        </div>
                        <div class="">
                            <div class="ic-business-integration-img">
                                <img src="{{asset('new-frontendv1/images/business-itegration-shape.png')}}"
                                    class="ic-shapes" alt="learning shape">
                                <img src="{{asset('new-frontendv1/images/learning-management.png')}}"
                                    class="img-fluid position-relative w-100" alt="Learning Management">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="business-items" id="business-2">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="ic-tabs-content">
                                <h4>Learning Management</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                    here, content here', making it look like readable English. Many desktop publishing
                                    packages and web page editors now.</p>
                                <a href="#" class="ic-btn">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="ic-business-integration-img">
                                <img src="{{asset('new-frontendv1/images/business-itegration-shape.png')}}"
                                    class="ic-shapes" alt="learning shape">
                                <img src="{{asset('new-frontendv1/images/learning-management.png')}}"
                                    class="img-fluid position-relative w-100" alt="Learning Management">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="business-items" id="business-3">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="ic-tabs-content">
                                <h4>Learning Management</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                    here, content here', making it look like readable English. Many desktop publishing
                                    packages and web page editors now.</p>
                                <a href="#" class="ic-btn">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="ic-business-integration-img">
                                <img src="{{asset('new-frontendv1/images/business-itegration-shape.png')}}"
                                    class="ic-shapes" alt="learning shape">
                                <img src="{{asset('new-frontendv1/images/learning-management.png')}}"
                                    class="img-fluid position-relative w-100" alt="Learning Management">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="business-items" id="business-4">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="ic-tabs-content">
                                <h4>Learning Management</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                    here, content here', making it look like readable English. Many desktop publishing
                                    packages and web page editors now.</p>
                                <a href="#" class="ic-btn">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="ic-business-integration-img">
                                <img src="{{asset('new-frontendv1/images/business-itegration-shape.png')}}"
                                    class="ic-shapes" alt="learning shape">
                                <img src="{{asset('new-frontendv1/images/learning-management.png')}}"
                                    class="img-fluid position-relative w-100" alt="Learning Management">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="business-items" id="business-5">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="ic-tabs-content">
                                <h4>Learning Management</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                    here, content here', making it look like readable English. Many desktop publishing
                                    packages and web page editors now.</p>
                                <a href="#" class="ic-btn">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="ic-business-integration-img">
                                <img src="{{asset('new-frontendv1/images/business-itegration-shape.png')}}"
                                    class="ic-shapes" alt="learning shape">
                                <img src="{{asset('new-frontendv1/images/learning-management.png')}}"
                                    class="img-fluid position-relative w-100" alt="Learning Management">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="business-items" id="business-6">
                    <div class="row align-items-center">
                        <div class="col-lg-5">
                            <div class="ic-tabs-content">
                                <h4>Learning Management</h4>
                                <p>It is a long established fact that a reader will be distracted by the readable
                                    content of a page when looking at its layout. The point of using Lorem Ipsum is that
                                    it has a more-or-less normal distribution of letters, as opposed to using 'Content
                                    here, content here', making it look like readable English. Many desktop publishing
                                    packages and web page editors now.</p>
                                <a href="#" class="ic-btn">Learn More</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="ic-business-integration-img">
                                <img src="{{asset('new-frontendv1/images/business-itegration-shape.png')}}"
                                    class="ic-shapes" alt="learning shape">
                                <img src="{{asset('new-frontendv1/images/learning-management.png')}}"
                                    class="img-fluid position-relative w-100" alt="Learning Management">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Business Integration Solutions --}}

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
            <div class="row align-items-center">
                <div class="col-xl-7 col-lg-6 banner-content">
                    <img class="img-fluid" src="{{asset('new-frontendv1/images/reach-business.png')}}" alt="">
                </div>
                <div class="col-xl-5 col-lg-6">
                    <div class="ic-business-inquires-content">
                        <ul>
                            <li>
                                <div>
                                    <img class="img-fluid" src="{{asset('new-frontendv1/images/healthcare.png')}}"
                                        alt="">
                                </div>
                                <div>
                                    <h6>Healthcare</h6>
                                    <p>Vivamus dignissim tortor in tellus dictum pellentesque.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="{{asset('new-frontendv1/images/public-sector.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Public Sector</h6>
                                    <p>Vivamus dignissim tortor in tellus dictum pellentesque.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="{{asset('new-frontendv1/images/financial.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Insurance & Financial</h6>
                                    <p>Vivamus dignissim tortor in tellus dictum pellentesque.</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <img src="{{asset('new-frontendv1/images/higher-education.png')}}" alt="">
                                </div>
                                <div>
                                    <h6>Higher Education.</h6>
                                    <p>Vivamus dignissim tortor in tellus dictum pellentesque.</p>
                                </div>
                            </li>
                        </ul>
                        <a href="#" class="ic-btn-white">For Businesses</a>
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
    style="background-image: url({{asset('/new-frontendv1/images/ic-latest-course-coaching-test.png')}})">

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
                                        src="{{asset('/new-frontendv1/images/bootcamp/dev-ops.png')}}" alt="dev-ops">
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
                                        src="{{asset('/new-frontendv1/images/bootcamp/cyber-security.png')}}"
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
                                        src="{{asset('/new-frontendv1/images/bootcamp/cloud-computing.png')}}"
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
                                        src="{{asset('/new-frontendv1/images/bootcamp/digital-marketing.png')}}"
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
                        <img class="img-fluid main-image" src="{{asset('/new-frontendv1/images/latest-course.svg')}}"
                            alt="Bootcamp">

                        <div class="abs">
                            <img class="img-fluid top-dot-abs" src="{{asset('/new-frontendv1/images/abs/dot.svg')}}"
                                alt="Bootcamp">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <div class="ic-bootcamp ic-section-space-bottom">

        <div class="container">
            <h4 class="bootcamp-title mb-20">Our Recent Bootcamp</h4>
            <div class="bootcamp-card-wrapper mb-50">
                <div class="bootcamp-card">
                    <div class="top-content">
                        <div class="ic-card-image">
                            <img class="img-fluid" src="{{asset('/new-frontendv1/images/card.png')}}" alt="Bootcamp">
                        </div>

                        <div class="ic-card-body">
                            <h5 class="card-title">
                                Make Business Strategies and Applications
                            </h5>
                            <div class="card-des-wrapper">
                                <p class="card-des">Cohort starts-21 Feb, 2023</p>
                                <p class="card-des">Program Duration-4 Months</p>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-content">
                        <button class="ic-btn">View Details</button>
                    </div>

                </div>

                <div class="bootcamp-card">
                    <div class="top-content">
                        <div class="ic-card-image">
                            <img class="img-fluid" src="{{asset('/new-frontendv1/images/card.png')}}" alt="Bootcamp">
                        </div>

                        <div class="ic-card-body">
                            <h5 class="card-title">
                                Make Business Strategies and Applications
                            </h5>
                            <div class="card-des-wrapper">
                                <p class="card-des">Cohort starts-21 Feb, 2023</p>
                                <p class="card-des">Program Duration-4 Months</p>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-content">
                        <button class="ic-btn">View Details</button>
                    </div>

                </div>

                <div class="bootcamp-card">
                    <div class="top-content">
                        <div class="ic-card-image">
                            <img class="img-fluid" src="{{asset('/new-frontendv1/images/card.png')}}" alt="Bootcamp">
                        </div>

                        <div class="ic-card-body">
                            <h5 class="card-title">
                                Make Business Strategies and Applications
                            </h5>
                            <div class="card-des-wrapper">
                                <p class="card-des">Cohort starts-21 Feb, 2023</p>
                                <p class="card-des">Program Duration-4 Months</p>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-content">
                        <button class="ic-btn">View Details</button>
                    </div>

                </div>

                <div class="bootcamp-card">
                    <div class="top-content">
                        <div class="ic-card-image">
                            <img class="img-fluid" src="{{asset('/new-frontendv1/images/card.png')}}" alt="Bootcamp">
                        </div>

                        <div class="ic-card-body">
                            <h5 class="card-title">
                                Make Business Strategies and Applications
                            </h5>
                            <div class="card-des-wrapper">
                                <p class="card-des">Cohort starts-21 Feb, 2023</p>
                                <p class="card-des">Program Duration-4 Months</p>
                                <p class="card-des">Program Duration-4 Months</p>
                            </div>
                        </div>
                    </div>

                    <div class="bottom-content">
                        <button class="ic-btn">View Details</button>
                    </div>

                </div>
            </div>

            <button class="ic-btn ic-btn-login shadow-none d-block mx-auto">View All Bootcamp</button>
        </div>
    </div>

    <div class="ic-bootcamp-training  ic-section-space-bottom online-iq">
        <div class="container">
            <div class="ic-row">

                <div class="ic-col w-55 right-content">
                    <div class="bootcamp-training-img-content">
                        <img class="img-fluid main-image" src="{{asset('/new-frontendv1/images/coaching-session.svg')}}"
                            alt="Bootcamp">
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
                                    <img class="img-fluid main-image"
                                        src="{{asset('/new-frontendv1/images/correct.svg')}}" alt="Bootcamp">
                                </div>
                                Upskill your organization.
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{asset('/new-frontendv1/images/correct.svg')}}" alt="Bootcamp">
                                </div>
                                Easy to follow curriculum
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{asset('/new-frontendv1/images/correct.svg')}}" alt="Bootcamp">
                                </div>
                                Contrary to popular belief
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{asset('/new-frontendv1/images/correct.svg')}}" alt="Bootcamp">
                                </div>
                                If you are going to use a passage
                            </li>

                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{asset('/new-frontendv1/images/correct.svg')}}" alt="Bootcamp">
                                </div>
                                Access more then 100K online
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{asset('/new-frontendv1/images/correct.svg')}}" alt="Bootcamp">
                                </div>
                                Money-back guarantee
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{asset('/new-frontendv1/images/correct.svg')}}" alt="Bootcamp">
                                </div>
                                Easy to follow curriculum
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{asset('/new-frontendv1/images/correct.svg')}}" alt="Bootcamp">
                                </div>
                                If you are going to use a passage
                            </li>
                        </ul>
                        <button class="ic-btn ic-btn-login shadow-none transparent">Request Now</button>
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
                                        src="{{asset('/new-frontendv1/images/correct.svg')}}" alt="Bootcamp">
                                </div>
                                20 Questions, Instant Results & Perfect Accuracy.
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{asset('/new-frontendv1/images/correct.svg')}}" alt="Bootcamp">
                                </div>
                                Receive your score, a certified IQ certificate and 42 page report. Determine your
                                intelligence level instantly.
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{asset('/new-frontendv1/images/correct.svg')}}" alt="Bootcamp">
                                </div>
                                Recognized and certified score and certification that immediately improves life
                                opportunities
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{asset('/new-frontendv1/images/correct.svg')}}" alt="Bootcamp">
                                </div>
                                The official IQ certification from the ILL Institute.
                            </li>
                        </ul>
                        <button class="ic-btn ic-btn-login shadow-none">Start Your Test</button>
                    </div>

                </div>

                <div class="ic-col w-55 right-content">
                    <div class="bootcamp-training-img-content">
                        <img class="img-fluid main-image" src="{{asset('/new-frontendv1/images/iq-test.svg')}}"
                            alt="Bootcamp">
                    </div>
                </div>

            </div>
        </div>
    </div>

</section>
{{-- ic-latest-course-coaching-test --}}

{{-- project dashbord  --}}
<section class="project-dashboard ic-section-space-top">
    <div class="container">
        {{-- section header --}}
        <div class="section_header">
            <div class="row">
                <div class="col-xl-6 col-lg-8 m-auto">
                    <h3 class="white">Students Project Dashboard</h3>
                    <p class="white">You can purchase our API and use our Bootcamps, Course, Playground & Wiki in your
                        own website for a small payment.</p>
                </div>
            </div>
        </div>
        {{-- section header --}}
    </div>
</section>
{{-- project dashbord  --}}


<section class="ic-cloud-devops-playground ic-bootcamp-training ic-section-space ">
    <div class="container">
        <div class="real-world-project ic-section-space-bottom-m-80">
            <!-- <img class="img-fluid main-image" src="{{asset('/new-frontendv1/images/real-world-project.png')}}" alt="Bootcamp"> -->

            <div class="row justify-content-between">
                <div class="col-lg-6 ">
                    <div class="real-world-project-left">
                        <img class="img-fluid " src="{{asset('/new-frontendv1/images/project-short.png')}}"
                            alt="Project">
                    </div>
                </div>
                <div class="col-lg-6 ">
                    <div class="real-world-project-right">
                        <div class="ic-bootcamp-training mb-30">
                            <h4 class="mb-1">Nail your next project</h4>
                            <p class="ic-des ">
                                You can purchase our API and use our Bootcamps, Course, Playground
                                & Wiki in your own website for a small payment.
                            </p>
                        </div>


                        <div class="project-cut-img ">
                            <img class="img-fluid " src="{{asset('/new-frontendv1/images/all-project-cut.png')}}"
                                alt="Project">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <h3 class="text-center mb-50">Cloud & DevOps <span class="primary">Playgrounds</span> with MCdns Pro</h3>
        <div class="ic-row-wrapper">
            <div class="ic-row">
                <div class="ic-col w-45 ">
                    <div class="bootcamp-training-img-content">
                        <img class="img-fluid main-image" src="{{asset('/new-frontendv1/images/devops.svg')}}"
                            alt="Bootcamp">
                    </div>
                </div>
                <div class="ic-col w-55 right-content">

                    <div class="ic-bootcamp-training-content">
                        <p class="ic-sub-title">
                            MCdns Learning Playground Plus includes everything you’d get in the Standard Plan (all 20+
                            DevOps online training courses and 100+ labs).
                        </p>
                        <ul class="">
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{asset('/new-frontendv1/images/correct.svg')}}" alt="Bootcamp">
                                </div>
                                Cloud environments like AWS, Azure or GCP
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{asset('/new-frontendv1/images/correct.svg')}}" alt="Bootcamp">
                                </div>
                                A Docker server
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{asset('/new-frontendv1/images/correct.svg')}}" alt="Bootcamp">
                                </div>
                                A Kubernetes cluster
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{asset('/new-frontendv1/images/correct.svg')}}" alt="Bootcamp">
                                </div>
                                An Istio setup
                            </li>
                            <li>
                                <div class="ic-icon">
                                    <img class="img-fluid main-image"
                                        src="{{asset('/new-frontendv1/images/correct.svg')}}" alt="Bootcamp">
                                </div>
                                A server with Ansible + multiple VMs you can
                                target for automation
                            </li>
                        </ul>
                    </div>

                </div>

            </div>
        </div>
    </div>
</section>

{{-- Verified Partners --}}
<section class="ic-proctored-exam  ic-section-space-bottom-80 ic-section-space-top-80 ">
    <div class="container">
        {{-- section header --}}
        <div class="section_header mb-50">
            <div class="row">
                <div class="col-xl-6 col-lg-8 m-auto">
                    <h3 class="white">Proctored exam</h3>
                    <p class="white">You can purchase our API and use our Bootcamps, Course, Playground & Wiki in your
                        own website for a small payment.</p>
                </div>
            </div>
        </div>
        {{-- section header --}}

        <div class="ic-row">

            <div class="ic-col w--50">
                <div class="ic-left-content">
                    <div class="ic-proctored-card-wrapper">
                        <div class="proctored-card">
                            <div class="ic-logo">
                                <img class="img-fluid main-image"
                                    src="{{asset('/new-frontendv1/images/proctored-card/information.svg')}}"
                                    alt="Proctored exam">
                            </div>
                            Information Technology
                        </div>
                        <div class="proctored-card">
                            <div class="ic-logo">
                                <img class="img-fluid main-image"
                                    src="{{asset('/new-frontendv1/images/proctored-card/natural.svg')}}"
                                    alt="Proctored exam">
                            </div>
                            Natural and Health Sciences
                        </div>
                        <div class="proctored-card">
                            <div class="ic-logo">
                                <img class="img-fluid main-image"
                                    src="{{asset('/new-frontendv1/images/proctored-card/business.svg')}}"
                                    alt="Proctored exam">
                            </div>
                            Business and Management
                        </div>
                        <div class="proctored-card">
                            <div class="ic-logo">
                                <img class="img-fluid main-image"
                                    src="{{asset('/new-frontendv1/images/proctored-card/accounting.svg')}}"
                                    alt="Proctored exam">
                            </div>
                            Accounting and Finances
                        </div>
                        <div class="proctored-card">
                            <div class="ic-logo">
                                <img class="img-fluid main-image"
                                    src="{{asset('/new-frontendv1/images/proctored-card/design.svg')}}"
                                    alt="Proctored exam">
                            </div>
                            Architecture and Design
                        </div>
                        <div class="proctored-card">
                            <div class="ic-logo">
                                <img class="img-fluid main-image"
                                    src="{{asset('/new-frontendv1/images/proctored-card/media.svg')}}"
                                    alt="Proctored exam">
                            </div>
                            Communications and Medias
                        </div>
                    </div>
                </div>
            </div>

            <div class="ic-col w-45">
                <div class="ic-right-content">
                    <div class="ic-des-wrapper mb-20">
                        <p class="ic-des ">
                            There are many variations of passages of Lorem Ipsum available, but the majority have
                            suffered alteration in some
                        </p>
                    </div>
                    <ul class="grid-2">
                        <li>
                            <div class="ic-icon">
                                <img class="img-fluid main-image"
                                    src="{{asset('/new-frontendv1/images/correct-white.svg')}}" alt="Bootcamp">
                            </div>
                            accredited certificates
                        </li>
                        <li>
                            <div class="ic-icon">
                                <img class="img-fluid main-image"
                                    src="{{asset('/new-frontendv1/images/correct-white.svg')}}" alt="Bootcamp">
                            </div>
                            Multi-Factor Authentication
                        </li>
                        <li>
                            <div class="ic-icon">
                                <img class="img-fluid main-image"
                                    src="{{asset('/new-frontendv1/images/correct-white.svg')}}" alt="Bootcamp">
                            </div>
                            Live Proctoring
                        </li>
                        <li>
                            <div class="ic-icon">
                                <img class="img-fluid main-image"
                                    src="{{asset('/new-frontendv1/images/correct-white.svg')}}" alt="Bootcamp">
                            </div>
                            Screen-Sharing and Recording.
                        </li>

                        <li>
                            <div class="ic-icon">
                                <img class="img-fluid main-image"
                                    src="{{asset('/new-frontendv1/images/correct-white.svg')}}" alt="Bootcamp">
                            </div>
                            AI-Powered Behavior Analysis
                        </li>
                        <li>
                            <div class="ic-icon">
                                <img class="img-fluid main-image"
                                    src="{{asset('/new-frontendv1/images/correct-white.svg')}}" alt="Bootcamp">
                            </div>
                            Multi-Factor Authentication
                        </li>

                    </ul>
                    <button class="ic-btn transparent ">Exam Details</button>
                </div>
            </div>
        </div>


    </div>
</section>
{{-- Verified Partners --}}

{{-- enterprise --}}
<div class="ic-enterprise-project ic-section-space">

    <div class="enterprise-project-right-bottom">
        <img src="{{asset('/new-frontendv1/images/our-product-shape-top-left.png')}}" class="" alt="">
    </div>
    <div class="enterprise-project-right-top">
        <img src="{{asset('/new-frontendv1/images/project-dashboard-right-top-new.png')}}" class="" alt="">
    </div>

    <div class="container position-relative z-1">
        {{-- section header --}}
        <div class="section_header mb-50">
            <div class="row">
                <div class="col-xl-6 col-lg-8 m-auto">
                    <h3><span>Enterprise</span> Projects</h3>
                    <p>A few of projects that will be done by students in order to complete their trainings.</p>
                </div>
            </div>
        </div>
        {{-- section header --}}
        <div class="ic-enterprice-project-main ">
            <div class="enterprice-slider">
                <div class=" enterprise-items">
                    <div class="ic-enterprice-project-items">
                        <div class="img-enterprise">
                            <img src="{{asset('new-frontendv1/images/enterprise-1.png')}}" class="img-fluid w-100"
                                alt="enterprise">
                            <span>Finance</span>
                        </div>
                        <div class="enterprise-body">
                            <p class="enterprise-title">There are many variations of passages</p>
                            <p class="enterprise-paragraph">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered</p>
                            <p class="enterprise-organizer"><span>Organizer: </span>Howard University</p>
                            <p class="what-text">What’s you will Learn</p>
                            <ul class="ic-course-list">
                                <li>
                                    Course Enrollment
                                </li>
                                <li>
                                    Exam Assessment
                                </li>
                                <li>
                                    Playgrounds
                                </li>
                            </ul>
                            <p class="tech-stack">Tech Stack:
                                <span>
                                    <img src="{{asset('new-frontendv1/images/figma.png')}}" alt="">
                                    <img src="{{asset('new-frontendv1/images/html.png')}}" alt="">
                                    <img src="{{asset('new-frontendv1/images/css.png')}}" alt="">
                                    <img src="{{asset('new-frontendv1/images/laravel.png')}}" alt="">
                                </span>
                            </p>
                            <div class="releses">
                                <p><span>Release:</span>25 , May , 2022</p>
                                <p><span>Due:</span>25 , May , 2022</p>
                            </div>
                        </div>
                        <div class="ic-enterprise-btn">
                            <a href="#" class="btn-border">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class=" enterprise-items">
                    <div class="ic-enterprice-project-items">
                        <div class="img-enterprise">
                            <img src="{{asset('new-frontendv1/images/enterprise-2.png')}}" class="img-fluid w-100"
                                alt="enterprise">
                            <span>Finance</span>
                        </div>
                        <div class="enterprise-body">
                            <p class="enterprise-title">There are many variations of passages</p>
                            <p class="enterprise-paragraph">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered</p>
                            <p class="enterprise-organizer"><span>Organizer: </span>Howard University</p>
                            <p class="what-text">What’s you will Learn</p>
                            <ul class="ic-course-list">
                                <li>
                                    Course Enrollment
                                </li>
                                <li>
                                    Exam Assessment
                                </li>
                                <li>
                                    Playgrounds
                                </li>
                            </ul>
                            <p class="tech-stack">Tech Stack:
                                <span>
                                    <img src="{{asset('new-frontendv1/images/figma.png')}}" alt="">
                                    <img src="{{asset('new-frontendv1/images/html.png')}}" alt="">
                                    <img src="{{asset('new-frontendv1/images/css.png')}}" alt="">
                                    <img src="{{asset('new-frontendv1/images/laravel.png')}}" alt="">
                                </span>
                            </p>
                            <div class="releses">
                                <p><span>Release:</span>25 , May , 2022</p>
                                <p><span>Due:</span>25 , May , 2022</p>
                            </div>
                        </div>
                        <div class="ic-enterprise-btn">
                            <a href="#" class="btn-border">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class=" enterprise-items">
                    <div class="ic-enterprice-project-items">
                        <div class="img-enterprise">
                            <img src="{{asset('new-frontendv1/images/enterprise-3.png')}}" class="img-fluid w-100"
                                alt="enterprise">
                            <span>Finance</span>
                        </div>
                        <div class="enterprise-body">
                            <p class="enterprise-title">There are many variations of passages</p>
                            <p class="enterprise-paragraph">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered</p>
                            <p class="enterprise-organizer"><span>Organizer: </span>Howard University</p>
                            <p class="what-text">What’s you will Learn</p>
                            <ul class="ic-course-list">
                                <li>
                                    Course Enrollment
                                </li>
                                <li>
                                    Exam Assessment
                                </li>
                                <li>
                                    Playgrounds
                                </li>
                            </ul>
                            <p class="tech-stack">Tech Stack:
                                <span>
                                    <img src="{{asset('new-frontendv1/images/figma.png')}}" alt="">
                                    <img src="{{asset('new-frontendv1/images/html.png')}}" alt="">
                                    <img src="{{asset('new-frontendv1/images/css.png')}}" alt="">
                                    <img src="{{asset('new-frontendv1/images/laravel.png')}}" alt="">
                                </span>
                            </p>
                            <div class="releses">
                                <p><span>Release:</span>25 , May , 2022</p>
                                <p><span>Due:</span>25 , May , 2022</p>
                            </div>
                        </div>
                        <div class="ic-enterprise-btn">
                            <a href="#" class="btn-border">Apply Now</a>
                        </div>
                    </div>
                </div>
                <div class=" enterprise-items">
                    <div class="ic-enterprice-project-items">
                        <div class="img-enterprise">
                            <img src="{{asset('new-frontendv1/images/enterprise-3.png')}}" class="img-fluid w-100"
                                alt="enterprise">
                            <span>Finance</span>
                        </div>
                        <div class="enterprise-body">
                            <p class="enterprise-title">There are many variations of passages</p>
                            <p class="enterprise-paragraph">There are many variations of passages of Lorem Ipsum
                                available, but the majority have suffered</p>
                            <p class="enterprise-organizer"><span>Organizer: </span>Howard University</p>
                            <p class="what-text">What’s you will Learn</p>
                            <ul class="ic-course-list">
                                <li>
                                    Course Enrollment
                                </li>
                                <li>
                                    Exam Assessment
                                </li>
                                <li>
                                    Playgrounds
                                </li>
                            </ul>
                            <p class="tech-stack">Tech Stack:
                                <span>
                                    <img src="{{asset('new-frontendv1/images/figma.png')}}" alt="">
                                    <img src="{{asset('new-frontendv1/images/html.png')}}" alt="">
                                    <img src="{{asset('new-frontendv1/images/css.png')}}" alt="">
                                    <img src="{{asset('new-frontendv1/images/laravel.png')}}" alt="">
                                </span>
                            </p>
                            <div class="releses">
                                <p><span>Release:</span>25 , May , 2022</p>
                                <p><span>Due:</span>25 , May , 2022</p>
                            </div>
                        </div>
                        <div class="ic-enterprise-btn">
                            <a href="#" class="btn-border">Apply Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ic-project-card ic-section-space-top-60">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ic-project-cards-items h-100">
                        <div>
                            <img src="{{asset('new-frontendv1/images/project-names-1.png')}}" class="" alt="">
                        </div>
                        <div>
                            <h4>Request coaching session</h4>
                            <p>There are many variations of passages
                                of Lorem Ipsum available,</p>
                            <a href="#" class="btn-border">Request Now</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-project-cards-items h-100">
                        <div>
                            <img src="{{asset('new-frontendv1/images/project-names-2.png')}}" class="" alt="">
                        </div>
                        <div>
                            <h4>Register for an exam</h4>
                            <p>There are many variations of passages
                                of Lorem Ipsum available,</p>
                            <a href="#" class="btn-border">Enroll Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- enterprise --}}

{{-- Verified Partners --}}
<section class="ic-verifiyed-partners ic-section-space-top-60 ic-section-space-bottom-60">
    <div class="container">
        {{-- section header --}}
        <div class="section_header  mb-50">
            <div class="row">
                <div class="col-xl-6 col-lg-8 m-auto">
                    <h3 class="white">Verified Partners</h3>
                    <p class="white">You can purchase our API and use our Bootcamps, Course, Playground & Wiki in your
                        own website for a small payment.</p>
                </div>
            </div>
        </div>
        {{-- section header --}}

        <div class="row ic-verified-slider-heads">
            <div class="col-lg-10 m-auto">
                <div class="ic-verified-slider">
                    <div class="ic-verified-items">
                        <img src="{{asset('new-frontendv1/images/verified-1.png')}}" alt="verified image">
                    </div>
                    <div class="ic-verified-items">
                        <img src="{{asset('new-frontendv1/images/verified-2.png')}}" alt="verified image">
                    </div>
                    <div class="ic-verified-items">
                        <img src="{{asset('new-frontendv1/images/verified-3.png')}}" alt="verified image">
                    </div>
                    <div class="ic-verified-items">
                        <img src="{{asset('new-frontendv1/images/verified-4.png')}}" alt="verified image">
                    </div>
                    <div class="ic-verified-items">
                        <img src="{{asset('new-frontendv1/images/verified-2.png')}}" alt="verified image">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Verified Partners --}}

{{-- MCDns User Recent reviews --}}
<section class="ic-recent-reviews ic-section-space">

    <div class="recent-reviews-right-bottom">
        <img src="{{asset('/new-frontendv1/images/our-product-shape-top-left.png')}}" class="" alt="">
    </div>
    <div class="recent-reviews-right-top">
        <img src="{{asset('/new-frontendv1/images/project-dashboard-right-top-new.png')}}" class="" alt="">
    </div>
    <div class="container">
        {{-- section header --}}
        <div class="section_header mb-50">
            <div class="row">
                <div class="col-xl-6 col-lg-8 m-auto">
                    <h3 class="">MCDns <span>User Recent</span> reviews</h3>
                    <p class="">You can purchase our API and use our Bootcamps, Course, Playground & Wiki in your own
                        website for a small payment.</p>
                </div>
            </div>
        </div>
        {{-- section header --}}

        {{-- testimonial --}}
        <div class="review-slider">
            <div class="reviews-sliders">
                <div class="ic-review-items">
                    <img src="{{asset('/new-frontendv1/images/review-1.png')}}" alt="">
                    <div class="reviews-star">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-line"></i>
                    </div>
                    <p class="review-paragraph">We’ve saved over hundreds of thousands in agency fees in the 7 months
                        we’ve been working with Placement Plus!</p>
                    <p class="author-name">Anthony Johnson</p>
                    <p class="desig">CEO at DataSoft</p>
                </div>
            </div>
            <div class="reviews-sliders">
                <div class="ic-review-items">
                    <img src="{{asset('/new-frontendv1/images/review-1.png')}}" alt="">
                    <div class="reviews-star">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-line"></i>
                    </div>
                    <p class="review-paragraph">We’ve saved over hundreds of thousands in agency fees in the 7 months
                        we’ve been working with Placement Plus!</p>
                    <p class="author-name">Anthony Johnson</p>
                    <p class="desig">CEO at DataSoft</p>
                </div>
            </div>
            <div class="reviews-sliders">
                <div class="ic-review-items">
                    <img src="{{asset('/new-frontendv1/images/review-1.png')}}" alt="">
                    <div class="reviews-star">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-line"></i>
                    </div>
                    <p class="review-paragraph">We’ve saved over hundreds of thousands in agency fees in the 7 months
                        we’ve been working with Placement Plus!</p>
                    <p class="author-name">Anthony Johnson</p>
                    <p class="desig">CEO at DataSoft</p>
                </div>
            </div>
            <div class="reviews-sliders">
                <div class="ic-review-items">
                    <img src="{{asset('/new-frontendv1/images/review-1.png')}}" alt="">
                    <div class="reviews-star">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-line"></i>
                    </div>
                    <p class="review-paragraph">We’ve saved over hundreds of thousands in agency fees in the 7 months
                        we’ve been working with Placement Plus!</p>
                    <p class="author-name">Anthony Johnson</p>
                    <p class="desig">CEO at DataSoft</p>
                </div>
            </div>
            <div class="reviews-sliders">
                <div class="ic-review-items">
                    <img src="{{asset('/new-frontendv1/images/review-1.png')}}" alt="">
                    <div class="reviews-star">
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-fill"></i>
                        <i class="ri-star-s-line"></i>
                    </div>
                    <p class="review-paragraph">We’ve saved over hundreds of thousands in agency fees in the 7 months
                        we’ve been working with Placement Plus!</p>
                    <p class="author-name">Anthony Johnson</p>
                    <p class="desig">CEO at DataSoft</p>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- MCDns User Recent reviews --}}

{{-- Book your MCdns Learning demo now --}}
<section class="ic-book-your-from ">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-5 col-lg-6">
                <div class="ic-book-form left-content">
                    <ul>
                        <li>
                            <div>
                                <i class="ri-checkbox-circle-fill"></i>
                            </div>
                            <div>
                                <h4>A 30-minute overview of the platform</h4>
                                <p>Enter your address to create an free account</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <i class="ri-checkbox-circle-fill"></i>
                            </div>
                            <div>
                                <h4>100% tailored to your needs - with ❤️</h4>
                                <p>A centralised repository providing a global library of resources.</p>
                            </div>
                        </li>
                        <li>
                            <div>
                                <i class="ri-checkbox-circle-fill"></i>
                            </div>
                            <div>
                                <h4>No commitment. Free as can be.</h4>
                                <p>Create assets according to your business
                                    and make it happen</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-7 col-lg-6">
                <div class="ic-forms-feild">
                    <h3>Book your MCdns Learning demo now</h3>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="#">First Name</label>
                                    <input type="text" class="form-control" placeholder="Type name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="#">Last Name</label>
                                    <input type="text" class="form-control" placeholder="Type last name">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="#">Work Email</label>
                                    <input type="text" class="form-control" placeholder="example@mcdns.com">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="#">Phone Numbers</label>
                                    <input type="text" class="form-control" placeholder="Type number">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="#">Time Frame</label>
                                    <input type="text" class="form-control" placeholder="Timeframe buy LMS">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="#">Platform User</label>
                                    <input type="text" class="form-control" placeholder="Number of users">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="#">About Your Project</label>
                                    <input type="text" class="form-control"
                                        placeholder="Tell us more about your project">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="#">About Us</label>
                                    <input type="text" class="form-control" placeholder="How did you hear about us?">
                                </div>
                            </div>
                        </div>
                        <p class="color-deep-gray">By confirming your email, you agree to our <a href="#"
                                class="black">Terms of Service</a> and that you have read and understood our <a href="#"
                                class="black">Privacy Policy.</a>
                        </p>
                        <button class="ic-book-form ic-btn mt-20">
                            Book Your Demo
                        </button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- Book your MCdns Learning demo now --}}

@endsection