@extends('layouts.master')

@section('content')
    <section class="ic__banner--part ic__reserve--bannerPart"
        style="background-image: linear-gradient(0deg, rgba(19, 19, 51, 0.45), rgba(19, 19, 51, 0.45)), url({{ asset('/frontend') }}/images/reserve-bg.png);">
        <!-- content -->
        <div class="reserve-container">
            <div class="row">
                <div class="col-lg-7 m-auto">
                    <div class="ic__banner--content ps-0 text-center">
                        <h1>Cloud computing</h1>
                        <p class="primary">SELF PACED</p>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('/frontend') }}/images/banner-wave.svg" class="ic-bottoms-waves" alt="wave">
    </section>

    <!-- reserve form -->
    <div class="ic-cloud-computing-bg"
        style="background-image: url({{ asset('/frontend') }}/images/cloud-computing-bg.png)">
        <section class="ic__reserve--part">
            <div class="reserve-container">
                <div class="ic__helpFull--content ic-coud-computing">
                    <div class="ic__helpFull-first">
                        <h3 class="mb-3">Fundamentals of <span class="primary">Cloud Computing Curriculum</span></h3>
                        <p class="color-deep-gray">This course will be covering the following topics :</p>
                    </div>
                    <h3 class="black ic__what-text">What you'll learn</h3>
                    <ul class="ic__computingul">
                        <li>
                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                            </svg>
                            <p>What is Cloud Computing?</p>
                        </li>
                        <li>
                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                            </svg>
                            <p>What is Cloud Computing?</p>
                        </li>
                        <li>
                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                            </svg>
                            <p>Characteristics of Cloud Computing</p>
                        </li>
                        <li>
                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                            </svg>
                            <p>Earn the Microsoft Certified Azure Fundamentals badge</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
        <section class="ic__companies-offers">
            <div class="reserve-container">
                <div class="ic__heading text-center">
                    <h3 class="black">Top companies offer this course to their employees</h3>
                </div>
                <div class="ic__companies-logos">
                    <div class="ic-online-covered">
                        <div class="ic-online-covered-grid">
                            <div class="covered-grid-items">
                                <img src="http://mc-dns.test/frontend/images/covered-1.png" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="covered-grid-items">
                                <img src="http://mc-dns.test/frontend/images/covered-2.png" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="covered-grid-items">
                                <img src="http://mc-dns.test/frontend/images/covered-3.png" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="covered-grid-items">
                                <img src="http://mc-dns.test/frontend/images/covered-4.png" class="img-fluid"
                                    alt="">
                            </div>
                            <div class="covered-grid-items">
                                <img src="http://mc-dns.test/frontend/images/covered-5.png" class="img-fluid"
                                    alt="">
                            </div>
                        </div>
                    </div>
                </div>
                {{-- Requirements --}}
                <div class="ic__requirements cloud-card">
                    <h3 class="black">Requirements</h3>
                    <p>If you are in the market for a computer, there are a number of factors to consider. Will it be used
                        for your home, your office or perhaps even your home office combo? <span class="primary">Read
                            More...</span></p>
                </div>
                <div class="ic__requirements cloud-card">
                    <h3 class="black">Description</h3>
                    <p class="primary ic-semibold">LEARN THE FUNDAMENTALS OF AZURE IN ONE DAY!</p>
                    <p>Best-selling Udemy course on AZ-900, with over 270,000 students. Thank you!</p>
                    <p>New course, completely re-recorded in April 2022. Up to date with the latest published exam
                        requirements as of October 2022.</p>
                    <h6>The course includes the following free bonuses:</h6>
                    <ul>
                        <li>
                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                            </svg>
                            <p>All lectures manually closed-captioned in English</p>
                        </li>
                        <li>
                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                            </svg>
                            <p>Quiz questions to reinforce learning throughout the course</p>
                        </li>
                    </ul>
                </div>
                <div class="ic__requirements cloud-card">
                    <h3 class="black">Description</h3>
                    <ul>
                        <li>
                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                            </svg>
                            <p>All lectures manually closed-captioned in English</p>
                        </li>
                        <li>
                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                            </svg>
                            <p>Quiz questions to reinforce learning throughout the course</p>
                        </li>
                    </ul>
                </div>
            </div>
        </section>
    </div>
    <section class="ic__bootcamp-live-training mt-0"
        style="background-image:  linear-gradient(68.6deg, #06738A -11.83%, rgb(42, 166, 192, 0.69) 96.57%), url({{ asset('/frontend') }}/images/bootcamp-live-bg.png);">
        <img src="{{ asset('/frontend') }}/images/strategies--bottom-shape.png" class="bootcamp-bottom-shape"
            alt="">
        <img src="{{ asset('/frontend') }}/images/bootcamp-vector.png" class="bootcamp-vector-img" alt="">
        <div class="course-container">
            <div class="ic__heading text-center">
                <h2 class="white">Course content</h2>
            </div>
            <div class="ic__bootcamp-live-container">
                <div class="ic__according">
                    <div class="accordion" id="accordionExample">
                        <div class="ic-accordion-item">
                            <div class="accordion-header" id="headingOne">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    Course for 2022
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
                                    Course for 2022
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
                                    Course for 2022
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
    <section class="">
        <div class="reserve-container ic-instruction-divs">
            <div class="ic__heading text-center">
                <h2 class="white">Instructors</h2>
            </div>
            <div class="ic__instructor-div">
                <div class="d-flex mb-4">
                    <div class="flex-shrink-0">
                        <img src="http://mc-dns.test/frontend/images/instructor-img.png" class="img-fluid img-avatar"
                            alt="...">
                    </div>
                    <div class="flex-grow-1 ms-3 instructor-content">
                        <h6>Henry Itondo 800.000+ Students</h6>
                        <p class="ic__instructor-designation">CEO, Principal Analyst Intelligent World,Top10
                            AI-Data-IoT-Influencer</p>
                        <ul class="instructor-list">
                            <li>
                                <div>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.5" cy="5.17188" r="4.5" fill="#2AA6C0">
                                        </circle>
                                    </svg>
                                    <p>4.5 Instructor Rating</p>
                                </div>
                                <div>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.5" cy="5.17188" r="4.5" fill="#2AA6C0">
                                        </circle>
                                    </svg>
                                    <p>230,644 Reviews</p>
                                </div>
                            </li>
                            <li>
                                <div>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.5" cy="5.17188" r="4.5" fill="#2AA6C0">
                                        </circle>
                                    </svg>
                                    <p>841,330 Students</p>
                                </div>
                                <div>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.5" cy="5.17188" r="4.5" fill="#2AA6C0">
                                        </circle>
                                    </svg>
                                    <p>51 Courses</p>
                                </div>
                            </li>
                        </ul>
                        <ul class="testimonial--social">
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
                <p class="ins-text">Hi there, my name is Henry Itondo.</p>
                <p class="ins-text">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                    and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                    leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                    with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                    publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
            </div>
        </div>
    </section>
    <section class="ic-course-details-rating">
        <div class="reserve-container">
            <div class="ic__course-review--content">
                <div class="d-sm-flex align-items-center justify-content-between ic-top-header-rating">
                    <h3 class="d-flex align-items-center pb-0"><i class="ri-star-s-fill yellow"></i> 4.5 course rating70K
                        ratings</h3>
                    <div class="ic__coaching-button pt-md-0 pt-sm-3">
                        <div class="ic__arrows">
                            <button class="next-btnR">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M17.3374 11H4.65625" stroke="#2DB6D2" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M10.9968 17.3374L4.65625 10.9968L10.9968 4.65625" stroke="#2DB6D2"
                                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                            <button class="prev-btnR">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4.65625 11H17.3374" stroke="#2DB6D2" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                    <path d="M11 4.65625L17.3406 10.9968L11 17.3374" stroke="#2DB6D2" stroke-width="1.5"
                                        stroke-linecap="round" stroke-linejoin="round"></path>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>

                <div class="ic__course-reviewSlider owl-carousel owl-theme">
                    <div class="ic__coaching-sliderItems">
                        <div class="ic__coaching--content">
                            <p>This app literally changed my life. It provides a great experience. I absolutely love it!
                            </p>
                            <span class="d-inline-block"><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                    class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                    class="ri-star-s-fill"></i></span>
                            <img src="{{ asset('/frontend/images/tail.png') }}" class="bottom-shape-arrow"
                                alt="">
                        </div>
                        <div class="ic__review-user">
                            <img src="{{ asset('/frontend/images/coaching-review-1.png') }}" class="img-fluid"
                                alt="">
                            <div>
                                <h6>Gibby Radki</h6>
                            </div>
                        </div>
                    </div>
                    <div class="ic__coaching-sliderItems">
                        <div class="ic__coaching--content">
                            <p>This app literally changed my life. It provides a great experience. I absolutely love it!
                            </p>
                            <span class="d-inline-block"><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                    class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                    class="ri-star-s-fill"></i></span>
                            <img src="{{ asset('/frontend/images/tail.png') }}" class="bottom-shape-arrow"
                                alt="">
                        </div>
                        <div class="ic__review-user">
                            <img src="{{ asset('/frontend/images/coaching-review-1.png') }}" class="img-fluid"
                                alt="">
                            <div>
                                <h6>Gibby Radki</h6>
                            </div>
                        </div>
                    </div>
                    <div class="ic__coaching-sliderItems">
                        <div class="ic__coaching--content">
                            <p>This app literally changed my life. It provides a great experience. I absolutely love it!
                            </p>
                            <span class="d-inline-block"><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                    class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                    class="ri-star-s-fill"></i></span>
                            <img src="{{ asset('/frontend/images/tail.png') }}" class="bottom-shape-arrow"
                                alt="">
                        </div>
                        <div class="ic__review-user">
                            <img src="{{ asset('/frontend/images/coaching-review-1.png') }}" class="img-fluid"
                                alt="">
                            <div>
                                <h6>Gibby Radki</h6>
                            </div>
                        </div>
                    </div>
                    <div class="ic__coaching-sliderItems">
                        <div class="ic__coaching--content">
                            <p>This app literally changed my life. It provides a great experience. I absolutely love it!
                            </p>
                            <span class="d-inline-block"><i class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                    class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                    class="ri-star-s-fill"></i></span>
                            <img src="{{ asset('/frontend/images/tail.png') }}" class="bottom-shape-arrow"
                                alt="">
                        </div>
                        <div class="ic__review-user">
                            <img src="{{ asset('/frontend/images/coaching-review-1.png') }}" class="img-fluid"
                                alt="">
                            <div>
                                <h6>Gibby Radki</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ic-buttons-rating">
                <button class="ic-btn">Enroll Now <i class="ri-arrow-right-line"></i></button>
            </div>
            <!-- newsletter part start -->
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
            <!-- newsletter part end -->
        </div>
    </section>
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var options = {
            series: [{
                data: [21, 22, 10, 28, 16]
            }],
            chart: {
                height: 200,
                type: 'bar',
                events: {
                    click: function(chart, w, e) {
                        // console.log(chart, w, e)
                    }
                },
                toolbar: {
                    show: false,
                },
            },
            // colors: colors,
            plotOptions: {
                bar: {
                    columnWidth: '45%',
                    distributed: true,
                }
            },

            dataLabels: {
                enabled: false
            },
            legend: {
                show: false
            },
            yaxis: {
                labels: {
                    style: {
                        // colors: colors,
                        fontSize: '7px'
                    }
                }
            },
            xaxis: {
                categories: [
                    ['Min'],
                    ['Average'],
                    [''],
                    '',
                    ['Max'],
                ],
                labels: {
                    style: {
                        // colors: colors,
                        fontSize: '7px'
                    }
                }
            }
        };

        var chart = new ApexCharts(document.querySelector("#chart"), options);
        chart.render();
    </script>
@endpush
