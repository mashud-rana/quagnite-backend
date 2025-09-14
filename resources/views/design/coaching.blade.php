@extends('layouts.master')

@section('content')
    <section class="ic__banner--part"
        style="background-image: linear-gradient(0deg, rgba(19, 19, 51, 0.45), rgba(19, 19, 51, 0.45)), url({{ asset('/frontend') }}/images/banner-images.png);">
        <div class="reserve-container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ic__banner--content">
                        <h1>Coaching</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        <div class="ic__buttons-wrapper">
                            <a href="#" class="ic__banner-btn">Enroll Now</a>
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

    <div class="ic__blog--background ic__coaching--background"
        style="background-image: url({{ asset('/frontend') }}/images/coching-review-bg.png);">
        <div class="reserve-container">
            <!-- playground text -->
            <div class="playground-text">
                <h2>Brief introduction</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and
                    scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap
                    into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the
                    release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing
                    software like Aldus PageMaker including versions of Lorem Ipsum</p>
            </div>
            <!-- playground text -->

            <div class="ic__coaching--part ic__course--check position-relative">
                <img src="{{ asset('/frontend/images/helpdesk/help-colud-images.png') }}" class="coaching-cloud-shape"
                    alt="">
                <form action="#" class="ic__bootcamp-forms">
                    <div class="row">
                        <div class="col-lg-6 m-auto">
                            <h2 class="text-center pb-3">Request To <span class="primary">Get A Coach</span></h2>
                            <p class="text-center">It is a long established fact that a reader will be distracted by the
                                readable content. </p>
                        </div>
                    </div>
                    <div class="row gx-3 ic__coaching--forms">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" placeholder="First and Last Name">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" placeholder="Email">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <input type="text" placeholder="Phone Number">
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <select name="" id="" class="selectpicker">
                                    <option value="0" selected>Course desired</option>
                                    <option value="1">coaching</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="position-relative">
                                    <input type="text" placeholder="Start date" class="datepicker">
                                    <img src="{{ asset('/frontend/images/calendar.png') }}" class="img-calender"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <div class="ic__selects-session d-flex align-items-center">
                                    <p class="flex-grow-1">Are you one of our students? </p>

                                    <div class="position-relative">
                                        <ul class="d-flex align-items-center ic__yesNo">
                                            <li>
                                                <input type="radio" id="yes" name="student" class="d-none">
                                                <label for="yes">
                                                    Yes
                                                </label>
                                            </li>
                                            <li>
                                                <input type="radio" id="no" name="student" class="d-none">
                                                <label for="no">
                                                    No
                                                </label>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <textarea name="" id="" class="form-control"
                                    placeholder="Reason for your request ( Why do you need our help? )"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="ic__course-btn text-center">
                        <button class="ic-btn-yellow">Request Now <i class="ri-arrow-right-line"></i></button>
                    </div>
                </form>
            </div>
        </div>
        <section class="ic__coaching-review position-relative">
            <img src="{{ asset('/frontend/images/waves-coaching-bg.svg') }}" class="ic__coaching-bottomShape"
                alt="">
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
                    </div>
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
                    </div>
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
                    </div>
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
                    </div>
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
                        <button class="prev-btn2 review-prev-btn2">
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
    </div>
    <!-- Case Studies -->
    <section class="ic__case-studies--part">
        <div class="reserve-container">
            <div class="ic__heading text-center pt-4">
                <h2 class="black">Case <span class="primary">Studies</span></h2>
                <div class="row">
                    <div class="col-lg-7 text-center m-auto">
                        <p class="color-deep-gray">It is a long established fact that a reader will be distracted by the readable
                            content. </p>
                    </div>
                </div>
            </div>
            <!-- Case Studies -->
            <div class="ic__case--Studies">
                <ul>
                    <li>
                        <a href="#" class="ic-case-link active" data-link="ic-case-1">Engineerie</a>
                    </li>
                    <li>
                        <a href="#" class="ic-case-link" data-link="ic-case-2">Security</a>
                    </li>
                    <li>
                        <a href="#" class="ic-case-link" data-link="ic-case-3">Agile</a>
                    </li>
                    <li>
                        <a href="#" class="ic-case-link" data-link="ic-case-4">DevOps/SRE</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="ic__caseBase--container">
            <div class="ic__caseBase--tabs active" id="ic-case-1">
                <div class="ic__caseBase--slider">
                    <div class="ic__caseBase--items">
                        <div>
                            <img src="{{ asset('/frontend/images/case-studies-2.png') }}" class="img-fluid"
                                alt="case images">
                        </div>
                        <div class="ic__caseBase--content">
                            <h6>Login Mobile Interface illustrations</h6>
                            <p class="ic__caseBase--subTitle">Graphic Templates , UX and UI Kits</p>
                            <p>There are many variations of passages of Lorem Ipsum available. There are many variations of
                                passages of Lorem Ipsum available.</p>
                        </div>
                    </div>
                    <div class="ic__caseBase--items">
                        <div>
                            <img src="{{ asset('/frontend/images/case-studies-2.png') }}" class="img-fluid"
                                alt="case images">
                        </div>
                        <div class="ic__caseBase--content">
                            <h6>Login Mobile Interface illustrations</h6>
                            <p class="ic__caseBase--subTitle">Graphic Templates , UX and UI Kits</p>
                            <p>There are many variations of passages of Lorem Ipsum available. There are many variations of
                                passages of Lorem Ipsum available.</p>
                        </div>
                    </div>
                    <div class="ic__caseBase--items">
                        <div>
                            <img src="{{ asset('/frontend/images/case-studies-2.png') }}" class="img-fluid"
                                alt="case images">
                        </div>
                        <div class="ic__caseBase--content">
                            <h6>Login Mobile Interface illustrations</h6>
                            <p class="ic__caseBase--subTitle">Graphic Templates , UX and UI Kits</p>
                            <p>There are many variations of passages of Lorem Ipsum available. There are many variations of
                                passages of Lorem Ipsum available.</p>
                        </div>
                    </div>
                    <div class="ic__caseBase--items">
                        <div>
                            <img src="{{ asset('/frontend/images/case-studies-2.png') }}" class="img-fluid"
                                alt="case images">
                        </div>
                        <div class="ic__caseBase--content">
                            <h6>Login Mobile Interface illustrations</h6>
                            <p class="ic__caseBase--subTitle">Graphic Templates , UX and UI Kits</p>
                            <p>There are many variations of passages of Lorem Ipsum available. There are many variations of
                                passages of Lorem Ipsum available.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ic__caseBase--tabs" id="ic-case-2">
                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Fugit, accusamus.</p>
            </div>
        </div>
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
