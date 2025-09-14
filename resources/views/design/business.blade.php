@extends('layouts.master')

@section('content')
    <section class="ic__banner--part"
        style="background-image:  linear-gradient(0deg, rgba(19, 19, 51, 0.45), rgba(19, 19, 51, 0.45)), url({{ asset('/frontend') }}/images/business-banner.png);">
        <div class="reserve-container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ic__banner--content ps-0">
                        <h1>Business</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        <div class="ic__buttons-wrapper">
                            <a href="#" class="ic__banner-btn">Ask The Community.</a>
                            <a href="https://www.youtube-nocookie.com/embed/Ga6RYejo6Hk" class="btn-watch ic-play-button">
                                <div class="circle">
                                    <i class="ri-play-fill"></i>
                                </div> Watch INTRO VIDEO
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('/frontend/images/banner-wave.svg') }}" class="ic-bottoms-waves" alt="wave">
        <img src="{{ asset('/frontend/images/banner-shape.svg') }}" class="ic-left-shape" alt="wave">
        <img src="{{ asset('/frontend/images/shape-right.png') }}" class="ic-right-shape" alt="wave">
    </section>

    <div style="background-image: url({{ asset('/frontend/images/business-content-bg.png') }})">
        <section class="ic-busniess-our-partner">
            <div class="reserve-container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ic-business-items">
                            <p>OUR PARTNER</p>
                            <h2>Trusted by enterprises across the globe</h2>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ic-business-our-partner-text">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has
                                been the industry's standard...</p>
                        </div>
                    </div>
                </div>
                <div class="ic-our-partner-slider owl-carousel owl-theme">
                    <div>
                        <img src="{{ asset('/frontend/images/partner-logo-1.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('/frontend/images/partner-logo-2.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('/frontend/images/partner-logo-3.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('/frontend/images/partner-logo-4.png') }}" alt="">
                    </div>
                    <div>
                        <img src="{{ asset('/frontend/images/partner-logo-5.png') }}" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="ic-mcdns-about">
            <div class="reserve-container">
                <div class="row gx-lg-5">
                    <div class="col-lg-6">
                        <div class="ic-mcdns-about-Ofbusiness">
                            <h2>The Power of MCdns Learning Bootcamp</h2>
                            <p class="subtitile">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                Lorem Ipsum
                                has been the industry's standard...</p>
                            <h6 class="min-titile">That’s why MCdns Learning Bootcamp provides:</h6>
                            <ul class="ic-list-about">
                                <li>
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="5.5" cy="5.5" r="5.5" fill="#2AA6C0" />
                                    </svg>
                                    <p>Live virtual classes taught by industry experts</p>
                                </li>
                                <li>
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="5.5" cy="5.5" r="5.5" fill="#2AA6C0" />
                                    </svg>
                                    <p>Cohort based learning with peer-to-peer interaction</p>
                                </li>
                                <li>
                                    <svg width="11" height="11" viewBox="0 0 11 11" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="5.5" cy="5.5" r="5.5" fill="#2AA6C0" />
                                    </svg>
                                    <p>Capstone projects involving real world data sets with virtual labs for hands-on
                                        learning</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ic-mcdns-about-img position-relative">
                            <img src="{{ asset('/frontend/images/login-second.png') }}" class="business-about-img"
                                alt="">
                            <img src="{{ asset('/frontend/images/mcdns-about-images.png') }}" class="img-fluid w-100"
                                alt="">
                            <a href="#" class="ic-video-images">
                                <div class="circle">
                                    <i class="ri-play-fill"></i>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="ic--teams-potential">
            <div class="reserve-container">
                <div class="ic__heading text-center">
                    <h2 class="black">Unlock Your <span class="primary">Team's Potential</span></h2>
                    <p class="black">Role-aligned learning paths that map digital skills to desired learner outcomes.</p>
                </div>
                <div class="teams-potential-catagories">
                    <ul>
                        <li>
                            <h6 class="sub-title">Technology</h6>
                            <div class="ic-catagories-items">
                                <a href="#">
                                    Cloud Computing
                                </a>
                            </div>
                            <div class="ic-catagories-items">
                                <a href="#">
                                    Devops
                                </a>
                            </div>
                            <div class="ic-catagories-items">
                                <a href="#">
                                    Cyber Security
                                </a>
                            </div>
                            <div class="ic-catagories-items">
                                <a href="#">
                                    Software Development
                                </a>
                            </div>
                        </li>
                        <li>
                            <h6 class="sub-title">Data and AI</h6>
                            <div class="ic-catagories-items">
                                <a href="#">
                                    Data Science & Business Intelligence
                                </a>
                            </div>
                            <div class="ic-catagories-items">
                                <a href="#">
                                    AI & Machine Learning
                                </a>
                            </div>
                            <div class="ic-catagories-items">
                                <a href="#">
                                    Big Data
                                </a>
                            </div>
                        </li>
                        <li>
                            <h6 class="sub-title">Digital Business</h6>
                            <div class="ic-catagories-items">
                                <a href="#">
                                    Digital Marketing
                                </a>
                            </div>
                            <div class="ic-catagories-items">
                                <a href="#">
                                    Business And Leadership
                                </a>
                            </div>
                        </li>
                        <li>
                            <h6 class="sub-title">Digital Operations</h6>
                            <div class="ic-catagories-items">
                                <a href="#">
                                    Agile & Scrum
                                </a>
                            </div>
                            <div class="ic-catagories-items">
                                <a href="#">
                                    IT Service & Architecture
                                </a>
                            </div>
                            <div class="ic-catagories-items">
                                <a href="#">
                                    Project Management
                                </a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <section class="ic__companies-main-part">
        <div class="reserve-container">
            <div class="ic-corporate-parthers">
                <div class="ic__heading text-center">
                    <h3 class="black font-400">Comprehensive programs aligned with leading certification bodies,
                        universities, and corporate partners.</h3>
                </div>
                <div class="ic__companies-logos">
                    <div class="ic-online-covered">
                        <div class="ic-online-covered-grid">
                            <div class="covered-grid-items">
                                <img src="{{ asset('/frontend') }}/images/covered-1.png" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="covered-grid-items">
                                <img src="{{ asset('/frontend') }}/images/covered-2.png" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="covered-grid-items">
                                <img src="{{ asset('/frontend') }}/images/covered-3.png" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="covered-grid-items">
                                <img src="{{ asset('/frontend') }}/images/covered-4.png" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="covered-grid-items">
                                <img src="{{ asset('/frontend') }}/images/covered-5.png" class="img-fluid"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="tailored-solutions">
        <div class="reserve-container">
            <div class="ic__heading text-center">
                <h2 class="black">Tailored <span class="primary">Solutions</span></h2>
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <p class="black" style="color: #5A597E">Our implementation consultants will design a training
                            program for your business’s unique digital transformation journey to address your team’s skills
                            gaps.</p>
                    </div>
                </div>
            </div>
            <div class="ic-tailored-solutions-grid">
                <div class="solutions-grid--items">
                    <img src="{{ asset('frontend') }}/images/business/skill.png" alt="">
                    <p class="sub-title black">Upskilling And Level-Setting</p>
                    <ul>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Build latest language capabilities & skill sets</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Align skilling to your development plans</span>
                        </li>
                    </ul>
                </div>
                <div class="solutions-grid--items">
                    <img src="{{ asset('frontend') }}/images/business/helmet.png" alt="">
                    <p class="sub-title black">Onboarding New Hires</p>
                    <ul>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Train new hires with hands-on applied learning</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Reduce ramp-up time for new employees</span>
                        </li>
                    </ul>
                </div>
                <div class="solutions-grid--items">
                    <img src="{{ asset('frontend') }}/images/business/digitalization.png" alt="">
                    <p class="sub-title black">Digital Academy</p>
                    <ul>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Align learning paths to critical job roles</span>
                        </li>
                        <li>
                            <i class="ri-check-line"></i>
                            <span>Seamlessly integrate into your learning portal & curriculum</span>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="ic-tailored-solutions--button">
                <a href="#" class="ic-btn">Contact Us <i class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </section>

    <section class="tailored-solutions ic-section-space-top">
        <div class="reserve-container">
            <div class="ic__heading text-center">
                <h2 class="black">MCdns Learning an <span class="primary">Advantages</span></h2>
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <p class="black" style="color: #5A597E">Our implementation consultants will design a training
                            program for your business’s unique digital transformation journey to address your team’s skills
                            gaps.</p>
                    </div>
                </div>
            </div>
            <div class="ic-tailored-solutions-grid ic-learn-advantages">
                <div class="solutions-grid--items">
                    <img src="{{ asset('frontend') }}/images/business/learn-img.png" alt="">
                    <p class="sub-title black">High-engagement, outcome-centric learning</p>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took</p>
                </div>
                <div class="solutions-grid--items">
                    <img src="{{ asset('frontend') }}/images/business/learn-img.png" alt="">
                    <p class="sub-title black">Customizable solutions that match your requirements</p>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took</p>
                </div>
                <div class="solutions-grid--items">
                    <img src="{{ asset('frontend') }}/images/business/learn-img.png" alt="">
                    <p class="sub-title black">Latest curriculum from industry experts and universities</p>
                    <p>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer
                        took</p>
                </div>
            </div>
        </div>
    </section>

    <section class="tailored-solutions ic-section-space-top">
        <div class="reserve-container">
            <div class="ic__heading text-center">
                <h2 class="black">Enterprise <span class="primary">Features</span></h2>
                <div class="row">
                    <div class="col-lg-8 m-auto">
                        <p class="black" style="color: #5A597E">Our implementation consultants will design a training
                            program for your business’s unique digital transformation journey to address your team’s skills
                            gaps.</p>
                    </div>
                </div>
            </div>
            <div class="ic-enterprise-features row justify-content-center g-2">
                <div class="col-lg-4 col-md-6">
                    <div class="solutions-grid--items">
                        <img src="{{ asset('frontend') }}/images/business/online-learning1.png" alt="">
                        <p class="sub-title black">Upskilling And Level-Setting</p>
                        <ul>
                            <li>
                                <i class="ri-check-line"></i>
                                <span>Online digital bootcamp</span>
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                <span>Integrated labs and assessments</span>
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                <span>Mentoring sessions</span>
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                <span>Access from anywhere, using any device</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="solutions-grid--items">
                        <img src="{{ asset('frontend') }}/images/business/customer-support1.png" alt="">
                        <p class="sub-title black">Enterprise Support</p>
                        <ul>
                            <li>
                                <i class="ri-check-line"></i>
                                <span>4x7 support </span>
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                <span>Community access</span>
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                <span>Frequent account reviews</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="solutions-grid--items">
                        <img src="{{ asset('frontend') }}/images/business/analysis1.png" alt="">
                        <p class="sub-title black">Reporting And Analytics</p>
                        <ul>
                            <li>
                                <i class="ri-check-line"></i>
                                <span>Track learner activity and progress </span>
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                <span>License consumption metrics</span>
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                <span>Team and learner-level analytics</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="solutions-grid--items">
                        <img src="{{ asset('frontend') }}/images/business/technical-support1.png" alt="">
                        <p class="sub-title black">LMS Services</p>
                        <ul>
                            <li>
                                <i class="ri-check-line"></i>
                                <span>Co-branded LMS environment </span>
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                <span>Co-branded completion certificates</span>
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                <span>Learner onboarding communications</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="solutions-grid--items">
                        <img src="{{ asset('frontend') }}/images/business/jigsaw1.png" alt="">
                        <p class="sub-title black">Enterprise Integrations</p>
                        <ul>
                            <li>
                                <i class="ri-check-line"></i>
                                <span>SCORM </span>
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                <span>Single sign-on</span>
                            </li>
                            <li>
                                <i class="ri-check-line"></i>
                                <span>Course catalog API</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="ic-tailored-solutions--button">
                <a href="#" class="ic-btn">Contact Us <i class="ri-arrow-right-line"></i></a>
            </div>
        </div>
    </section>

    <section class="ic__business-review position-relative overflow-hidden">
        <div class="reserve-container">
            <div class="ic__heading text-center">
                <p class="sub-title">testimonials</p>
                <h2 class="black">Past Coaching <span class="primary">Reviews</span></h2>
            </div>
            <div class="ic__coaching-reviewSlider owl-carousel owl-theme">
                <div class="ic__coaching-sliderItems">
                    <div class="ic__coaching--content">
                        <img src="{{ asset('/frontend/images/quote.png') }}" class="ic-quote" alt="">
                        <p>"Reached the first hills of the Italic Mountains, she had a last view back on the skyline of
                            her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own
                            road"</p>
                    </div>
                    <div class="ic__review-user">
                        <img src="{{ asset('/frontend/images/coaching-review-1.png') }}" class="img-fluid"
                            alt="">
                        <div>
                            <h6>Gibby Radki</h6>
                            <p>Developer</p>
                        </div>
                    </div>
                    <ul class="review-users-social">
                        <li>
                            <a href="#"><i class="ri-facebook-fill"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ri-instagram-line"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ri-twitter-fill"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ri-linkedin-box-line"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="ic__coaching-button">
                <div class="ic__arrows">
                    <button class="review-next-btn2">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M17.3374 11H4.65625" stroke="#2DB6D2" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M10.9968 17.3374L4.65625 10.9968L10.9968 4.65625" stroke="#2DB6D2"
                                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                    <button class="review-prev-btn2">
                        <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.65625 11H17.3374" stroke="#2DB6D2" stroke-width="1.5" stroke-linecap="round"
                                stroke-linejoin="round"></path>
                            <path d="M11 4.65625L17.3406 10.9968L11 17.3374" stroke="#2DB6D2" stroke-width="1.5"
                                stroke-linecap="round" stroke-linejoin="round"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
    </section>
    <section class="business-types-main">
        <div class="reserve-container">
            <div class="ic__coaching--part ic__course--check position-relative">
                <form action="#" class="ic__bootcamp-forms">
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <h2 class="text-center pb-3">Business type of company to enroll their students</h2>
                        </div>
                    </div>
                    <div class="row gx-4 gy-3 ic__coaching--forms">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" placeholder="First and Last Name">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="enail" placeholder="Company Email">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="number" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="number" placeholder="Company Name">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" placeholder="Company activity/ type">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" placeholder="Company Website">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="email" placeholder="First person of contact email">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="email" placeholder="Second person of contact email">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" placeholder="Course desired to study">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <select name="" id="" class="selectpicker">
                                    <option value="0" selected>How did you find us</option>
                                    <option value="1">coaching</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <select name="" id="" class="selectpicker">
                                    <option value="0" selected>Number of seats desired</option>
                                    <option value="1">coaching</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="position-relative">
                                    <input type="text" placeholder="Desired starting date of training"
                                        class="datepicker">
                                    <img src="{{ asset('/frontend/images/calendar.png') }}" class="img-calender"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <div class="position-relative">
                                    <input type="text"
                                        placeholder="Would you like to schedule a meeting with us, and if yes"
                                        class="datepicker">
                                    <img src="{{ asset('/frontend/images/calendar.png') }}" class="img-calender"
                                        alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic__course-btn text-center">
                        <button class="ic-btn-yellow">Request Now <i class="ri-arrow-right-line"></i></button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="ic__business-faq">
        <div class="reserve-container">
            <div class="ic__faq--part">
                <div class="ic_heading--sections">
                    <h2>Frequently Asked <span class="primary">Questions</span>.</h2>
                </div>
                <div class="ic__according">
                    <div class="accordion" id="accordionExample">
                        <div class="ic-accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    How do I pay for the Essentials or Premium plan?
                                </button>
                            </div>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                                        Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="ic-accordion-item">
                            <div class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    Can I cancel my Essentials or Premium plan subscription at any time?
                                </button>
                            </div>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and hiding
                                    via CSS transitions. You can modify any of this with custom CSS or overriding our
                                    default variables. It's also worth noting that just about any HTML can go within the
                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="ic-accordion-item">
                            <div class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                    We need to add new users to our team. How will that be billed?
                                </button>
                            </div>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default, until
                                    the collapse plugin adds the appropriate classes that we use to style each element.
                                    These classes control the overall appearance, as well as the showing and hiding via CSS
                                    transitions. You can modify any of this with custom CSS or overriding our default
                                    variables. It's also worth noting that just about any HTML can go within the
                                    <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ic--">
        <div class="reserve-container">
            <div class="ic__news-letter">
                <div class="ic__news--background"
                    style="background-image: url({{ asset('/frontend') }}/images/news-letter.png);">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <h2 class="yellow">Newsletter</h2>
                            <p class="white">Subscribe to our newsletter by submitting your Email address below:</p>
                        </div>
                        <div class="col-lg-6">
                            <form action="#" class="ic__forms">
                                <input type="text" placeholder="Your email">
                                <button>Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
