@extends('layouts.master')

@section('content')
    <section class="ic__banner--part ic__forum--part"
        style="background-image: linear-gradient(0deg, rgba(19, 19, 51, 0.6), rgba(19, 19, 51, 0.6)), url({{ asset('/frontend') }}/images/coaches-banner.png);">
        <!-- content -->
        <div class="reserve-container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="ic__banner--content ps-0">
                        <span class="white">Single Coach</span>
                        <h1>Single Coach Details</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        <div class="ic__buttons-wrapper">
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
        <img src="{{ asset('frontend') }}/images/banner-wave.svg" class="ic-bottoms-waves" alt="wave">
        <img src="{{ asset('frontend') }}/images/forum-cube.png" class="ic-left-cube" alt="wave">
        <img src="{{ asset('frontend') }}/images/forum-right.png" class="ic-forumRight-shape" alt="wave">
    </section>

    <div class="ic__blog--background ic__coaching--background"
        style="background-image: url({{ asset('/frontend') }}/images/coaches-bg.png);">
        <div class="reserve-container">
            {{-- single verify --}}
            <div class="ic-coach-info">
                <div class="coach-info-items">
                    <img src="{{ asset('frontend/images/massgae-1.png') }}" alt="">
                    <div>
                        <h5>Your Email</h5>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="coach-info-items">
                    <img src="{{ asset('frontend/images/map.png') }}" alt="">
                    <div>
                        <h5>Your Email</h5>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="coach-info-items">
                    <img src="{{ asset('frontend/images/phone.png') }}" alt="">
                    <div>
                        <h5>Your Email</h5>
                        <p>info@example.com</p>
                    </div>
                </div>
                <div class="coach-info-items">
                    <img src="{{ asset('frontend/images/net.png') }}" alt="">
                    <div>
                        <h5>Your Email</h5>
                        <p>info@example.com</p>
                    </div>
                </div>
            </div>
            {{-- single verify --}}

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
    </div>
@endsection

@push('scripts')
    {{-- <script src="{{ asset('frontend/js/price_range_script.js') }}"></script> --}}

    <script>
        let rangeMin = 100;
        const range = document.querySelector(".range-selected");
        const rangeInput = document.querySelectorAll(".range-input input");
        const rangePrice = document.querySelectorAll(".range-price input");
        console.log(rangeInput);
        rangeInput.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minRange = parseInt(rangeInput[0].value);
                let maxRange = parseInt(rangeInput[1].value);
                if (maxRange - minRange < rangeMin) {
                    if (e.target.className === "min") {
                        rangeInput[0].value = maxRange - rangeMin;

                    } else {
                        rangeInput[1].value = minRange + rangeMin;
                    }
                } else {
                    rangePrice[0].value = minRange;
                    rangePrice[1].value = maxRange;
                    range.style.left = (minRange / rangeInput[0].max) * 100 + "%";
                    range.style.right = 100 - (maxRange / rangeInput[1].max) * 100 + "%";
                }

            });

        });

        rangePrice.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minPrice = rangePrice[0].value;
                let maxPrice = rangePrice[1].value;
                if (maxPrice - minPrice >= rangeMin && maxPrice <= rangeInput[1].max) {
                    if (e.target.className === "min") {
                        rangeInput[0].value = minPrice;
                        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
                    } else {
                        rangeInput[1].value = maxPrice;
                        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                    }
                }

            });
        });
    </script>
@endpush
