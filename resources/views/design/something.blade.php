@extends('layouts.master')

@section('content')
    <!-- banner part start -->
    <section class="ic__banner--part ic__courseNew_version--banner"
        style="background-image: url({{ asset('/frontend') }}/images/course-new-version.png);">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="ic__banner--content">
                        <h1>Our Courses</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        <div class="ic__buttons-wrapper">
                            <a href="#" class="ic__banner-btn">Enroll Now</a>
                            <a href="#" class="btn-watch">
                                <div class="circle">
                                    <i class="ri-play-fill"></i>
                                </div> Watch INTRO VIDEO
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('/frontend') }}/images/banner-wave.svg" class="ic-bottoms-waves" alt="wave">
    </section>
    <!-- banner part end -->


    <!-- course new version -->
    <section class="ic__courseNewVersion--part"
        style="background-image: url({{ asset('/frontend') }}/images/course-new-version-bg.png);">
        <div class="course-container">
            <div class="ic__courseNewVersion--top">
                <div class="row g-4">
                    <div class="col-lg-6 col-md-6">
                        <div class="ic__courseNewVersion--items">
                            <div class="ic__courseNew--img position-relative">
                                <div class="responsive-video-poster responsive-video-poster--16by9">
                                    <button class="video-overlay" aria-label="Play video">
                                        <div class="poster-btn"><i class="ri-play-mini-fill"></i></div>
                                        <img srcset="{{ asset('/frontend') }}/images/coursenew-1.png 720w, {{ asset('/frontend') }}/images/coursenew-1.png 1080w"
                                            src="{{ asset('/frontend') }}/images/coursenew-1.png" class="poster">
                                    </button>
                                    <iframe src="https://www.youtube-nocookie.com/embed/FjPvaGt6Pw4?rel=0" srcdoc=""
                                        class="video"
                                        title="Drone Grand Tour footage of the Tustan Karpaty mountains"></iframe>
                                </div>
                            </div>
                            <div class="ic__courseNew--content">
                                <h5 class="ic__courseNew--heading">DevOps</h5>
                                <span class="ic__courseNew--subHeading">SELF PACED</span>
                                <p class="ic__courseNew--paragraph">If you are in the market for a computer, there are a
                                    number of factors to consider. Will it be used for your home, your office or perhaps
                                    even your home office combo? <a href="#" class="primary">Read More...</a></p>
                                <ul class="ic__courseNew--modules">
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                                </svg>
                                                <p>10 Modules</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                                </svg>
                                                <p>Course Certificate</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                                </svg>
                                                <p>Demo</p>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                                </svg>
                                                <p>Up to 5 hours videos</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                                </svg>
                                                <p>Labs</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                                </svg>
                                                <p>Community support</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <a href="#" class="ic-btn w-100">Course Content <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="ic__courseNewVersion--items">
                            <div class="ic__courseNew--img position-relative">
                                <div class="responsive-video-poster responsive-video-poster--16by9">
                                    <button class="video-overlay" aria-label="Play video">
                                        <div class="poster-btn"><i class="ri-play-mini-fill"></i></div>
                                        <img srcset="{{ asset('/frontend') }}/images/coursenew-2.png 720w, {{ asset('/frontend') }}/images/coursenew-2.png 1080w"
                                            src="{{ asset('/frontend') }}/images/coursenew-2.png" class="poster">
                                    </button>
                                    <iframe src="https://www.youtube-nocookie.com/embed/FjPvaGt6Pw4?rel=0" srcdoc=""
                                        class="video"
                                        title="Drone Grand Tour footage of the Tustan Karpaty mountains"></iframe>
                                </div>
                            </div>
                            <div class="ic__courseNew--content">
                                <h5 class="ic__courseNew--heading">Cloud computing</h5>
                                <span class="ic__courseNew--subHeading">SELF PACED</span>
                                <p class="ic__courseNew--paragraph">If you are in the market for a computer, there are a
                                    number of factors to consider. Will it be used for your home, your office or perhaps
                                    even your home office combo? <a href="#" class="primary">Read More...</a></p>
                                <ul class="ic__courseNew--modules">
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>10 Modules</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Course Certificate</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Demo</p>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Up to 5 hours videos</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Labs</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Community support</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <a href="#" class="ic-btn w-100">Course Content <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="ic__courseNewVersion--items">
                            <div class="ic__courseNew--img position-relative">
                                <div class="responsive-video-poster responsive-video-poster--16by9">
                                    <button class="video-overlay" aria-label="Play video">
                                        <div class="poster-btn"><i class="ri-play-mini-fill"></i></div>
                                        <img srcset="{{ asset('/frontend') }}/images/coursenew-3.png 720w, {{ asset('/frontend') }}/images/coursenew-3.png 1080w"
                                            src="{{ asset('/frontend') }}/images/coursenew-3.png" class="poster">
                                    </button>
                                    <iframe src="https://www.youtube-nocookie.com/embed/FjPvaGt6Pw4?rel=0" srcdoc=""
                                        class="video"
                                        title="Drone Grand Tour footage of the Tustan Karpaty mountains"></iframe>
                                </div>
                            </div>
                            <div class="ic__courseNew--content">
                                <h5 class="ic__courseNew--heading">Linux System Engineer</h5>
                                <span class="ic__courseNew--subHeading">SELF PACED</span>
                                <p class="ic__courseNew--paragraph">If you are in the market for a computer, there are a
                                    number of factors to consider. Will it be used for your home, your office or perhaps
                                    even your home office combo? <a href="#" class="primary">Read More...</a></p>
                                <ul class="ic__courseNew--modules">
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>10 Modules</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Course Certificate</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Demo</p>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Up to 5 hours videos</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Labs</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Community support</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <a href="#" class="ic-btn w-100">Course Content <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="ic__courseNewVersion--items">
                            <div class="ic__courseNew--img position-relative">
                                <div class="responsive-video-poster responsive-video-poster--16by9">
                                    <button class="video-overlay" aria-label="Play video">
                                        <div class="poster-btn"><i class="ri-play-mini-fill"></i></div>
                                        <img srcset="{{ asset('/frontend') }}/images/coursenew-4.png 720w, {{ asset('/frontend') }}/images/coursenew-4.png 1080w"
                                            src="{{ asset('/frontend') }}/images/coursenew-4.png" class="poster">
                                    </button>
                                    <iframe src="https://www.youtube-nocookie.com/embed/FjPvaGt6Pw4?rel=0" srcdoc=""
                                        class="video"
                                        title="Drone Grand Tour footage of the Tustan Karpaty mountains"></iframe>
                                </div>
                            </div>
                            <div class="ic__courseNew--content">
                                <h5 class="ic__courseNew--heading">Jira Project Administrator</h5>
                                <span class="ic__courseNew--subHeading">SELF PACED</span>
                                <p class="ic__courseNew--paragraph">If you are in the market for a computer, there are a
                                    number of factors to consider. Will it be used for your home, your office or perhaps
                                    even your home office combo? <a href="#" class="primary">Read More...</a></p>
                                <ul class="ic__courseNew--modules">
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>10 Modules</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Course Certificate</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Demo</p>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Up to 5 hours videos</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Labs</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Community support</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <a href="#" class="ic-btn w-100">Course Content <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="ic__courseNewVersion--items">
                            <div class="ic__courseNew--img position-relative">
                                <div class="responsive-video-poster responsive-video-poster--16by9">
                                    <button class="video-overlay" aria-label="Play video">
                                        <div class="poster-btn"><i class="ri-play-mini-fill"></i></div>
                                        <img srcset="{{ asset('/frontend') }}/images/coursenew-5.png 720w, {{ asset('/frontend') }}/images/coursenew-5.png 1080w"
                                            src="{{ asset('/frontend') }}/images/coursenew-5.png" class="poster">
                                    </button>
                                    <iframe src="https://www.youtube-nocookie.com/embed/FjPvaGt6Pw4?rel=0" srcdoc=""
                                        class="video"
                                        title="Drone Grand Tour footage of the Tustan Karpaty mountains"></iframe>
                                </div>
                            </div>
                            <div class="ic__courseNew--content">
                                <h5 class="ic__courseNew--heading">AWS Cloud Architect</h5>
                                <span class="ic__courseNew--subHeading">SELF PACED</span>
                                <p class="ic__courseNew--paragraph">If you are in the market for a computer, there are a
                                    number of factors to consider. Will it be used for your home, your office or perhaps
                                    even your home office combo? <a href="#" class="primary">Read More...</a></p>
                                <ul class="ic__courseNew--modules">
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>10 Modules</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Course Certificate</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Demo</p>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Up to 5 hours videos</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Labs</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Community support</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <a href="#" class="ic-btn w-100">Course Content <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="ic__courseNewVersion--items">
                            <div class="ic__courseNew--img position-relative">
                                <div class="responsive-video-poster responsive-video-poster--16by9">
                                    <button class="video-overlay" aria-label="Play video">
                                        <div class="poster-btn"><i class="ri-play-mini-fill"></i></div>
                                        <img srcset="{{ asset('/frontend') }}/images/coursenew-6.png 720w, {{ asset('/frontend') }}/images/coursenew-6.png 1080w"
                                            src="{{ asset('/frontend') }}/images/coursenew-6.png" class="poster">
                                    </button>
                                    <iframe src="https://www.youtube-nocookie.com/embed/FjPvaGt6Pw4?rel=0" srcdoc=""
                                        class="video"
                                        title="Drone Grand Tour footage of the Tustan Karpaty mountains"></iframe>
                                </div>
                            </div>
                            <div class="ic__courseNew--content">
                                <h5 class="ic__courseNew--heading">Azure Administrator ASsociate</h5>
                                <span class="ic__courseNew--subHeading">SELF PACED</span>
                                <p class="ic__courseNew--paragraph">If you are in the market for a computer, there are a
                                    number of factors to consider. Will it be used for your home, your office or perhaps
                                    even your home office combo? <a href="#" class="primary">Read More...</a></p>
                                <ul class="ic__courseNew--modules">
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>10 Modules</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Course Certificate</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Demo</p>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Up to 5 hours videos</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Labs</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Community support</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <a href="#" class="ic-btn w-100">Course Content <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="ic__courseNewVersion--items">
                            <div class="ic__courseNew--img position-relative">
                                <div class="responsive-video-poster responsive-video-poster--16by9">
                                    <button class="video-overlay" aria-label="Play video">
                                        <div class="poster-btn"><i class="ri-play-mini-fill"></i></div>
                                        <img srcset="{{ asset('/frontend') }}/images/coursenew-7.png 720w, {{ asset('/frontend') }}/images/coursenew-7.png 1080w"
                                            src="{{ asset('/frontend') }}/images/coursenew-7.png" class="poster">
                                    </button>
                                    <iframe src="https://www.youtube-nocookie.com/embed/FjPvaGt6Pw4?rel=0" srcdoc=""
                                        class="video"
                                        title="Drone Grand Tour footage of the Tustan Karpaty mountains"></iframe>
                                </div>
                            </div>
                            <div class="ic__courseNew--content">
                                <h5 class="ic__courseNew--heading">Google cloud architecture</h5>
                                <span class="ic__courseNew--subHeading">SELF PACED</span>
                                <p class="ic__courseNew--paragraph">If you are in the market for a computer, there are a
                                    number of factors to consider. Will it be used for your home, your office or perhaps
                                    even your home office combo? <a href="#" class="primary">Read More...</a></p>
                                <ul class="ic__courseNew--modules">
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>10 Modules</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Course Certificate</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Demo</p>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Up to 5 hours videos</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Labs</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Community support</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <a href="#" class="ic-btn w-100">Course Content <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="ic__courseNewVersion--items">
                            <div class="ic__courseNew--img position-relative">
                                <div class="responsive-video-poster responsive-video-poster--16by9">
                                    <button class="video-overlay" aria-label="Play video">
                                        <div class="poster-btn"><i class="ri-play-mini-fill"></i></div>
                                        <img srcset="{{ asset('/frontend') }}/images/coursenew-8.png 720w, {{ asset('/frontend') }}/images/coursenew-8.png 1080w"
                                            src="{{ asset('/frontend') }}/images/coursenew-8.png" class="poster">
                                    </button>
                                    <iframe src="https://www.youtube-nocookie.com/embed/FjPvaGt6Pw4?rel=0" srcdoc=""
                                        class="video"
                                        title="Drone Grand Tour footage of the Tustan Karpaty mountains"></iframe>
                                </div>
                            </div>
                            <div class="ic__courseNew--content">
                                <h5 class="ic__courseNew--heading">Kubernetes Administrator</h5>
                                <span class="ic__courseNew--subHeading">SELF PACED</span>
                                <p class="ic__courseNew--paragraph">If you are in the market for a computer, there are a
                                    number of factors to consider. Will it be used for your home, your office or perhaps
                                    even your home office combo? <a href="#" class="primary">Read More...</a></p>
                                <ul class="ic__courseNew--modules">
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>10 Modules</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Course Certificate</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Demo</p>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Up to 5 hours videos</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Labs</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Community support</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <a href="#" class="ic-btn w-100">Course Content <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="ic__courseNewVersion--items">
                            <div class="ic__courseNew--img position-relative">
                                <div class="responsive-video-poster responsive-video-poster--16by9">
                                    <button class="video-overlay" aria-label="Play video">
                                        <div class="poster-btn"><i class="ri-play-mini-fill"></i></div>
                                        <img srcset="{{ asset('/frontend') }}/images/coursenew-9.png 720w, {{ asset('/frontend') }}/images/coursenew-9.png 1080w"
                                            src="{{ asset('/frontend') }}/images/coursenew-9.png" class="poster">
                                    </button>
                                    <iframe src="https://www.youtube-nocookie.com/embed/FjPvaGt6Pw4?rel=0" srcdoc=""
                                        class="video"
                                        title="Drone Grand Tour footage of the Tustan Karpaty mountains"></iframe>
                                </div>
                            </div>
                            <div class="ic__courseNew--content">
                                <h5 class="ic__courseNew--heading">Cyber Security</h5>
                                <span class="ic__courseNew--subHeading">SELF PACED</span>
                                <p class="ic__courseNew--paragraph">If you are in the market for a computer, there are a
                                    number of factors to consider. Will it be used for your home, your office or perhaps
                                    even your home office combo? <a href="#" class="primary">Read More...</a></p>
                                <ul class="ic__courseNew--modules">
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>10 Modules</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Course Certificate</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Demo</p>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Up to 5 hours videos</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Labs</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Community support</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <a href="#" class="ic-btn w-100">Course Content <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="ic__courseNewVersion--items">
                            <div class="ic__courseNew--img position-relative">
                                <div class="responsive-video-poster responsive-video-poster--16by9">
                                    <button class="video-overlay" aria-label="Play video">
                                        <div class="poster-btn"><i class="ri-play-mini-fill"></i></div>
                                        <img srcset="{{ asset('/frontend') }}/images/coursenew-2.png 720w, {{ asset('/frontend') }}/images/coursenew-2.png 1080w"
                                            src="{{ asset('/frontend') }}/images/coursenew-2.png" class="poster">
                                    </button>
                                    <iframe src="https://www.youtube-nocookie.com/embed/FjPvaGt6Pw4?rel=0" srcdoc=""
                                        class="video"
                                        title="Drone Grand Tour footage of the Tustan Karpaty mountains"></iframe>
                                </div>
                            </div>
                            <div class="ic__courseNew--content">
                                <h5 class="ic__courseNew--heading">Cyber Security</h5>
                                <span class="ic__courseNew--subHeading">SELF PACED</span>
                                <p class="ic__courseNew--paragraph">If you are in the market for a computer, there are a
                                    number of factors to consider. Will it be used for your home, your office or perhaps
                                    even your home office combo? <a href="#" class="primary">Read More...</a></p>
                                <ul class="ic__courseNew--modules">
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>10 Modules</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Course Certificate</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Demo</p>
                                            </li>
                                        </ul>
                                    </li>

                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Up to 5 hours videos</p>
                                            </li>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Labs</p>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <ul>
                                            <li>
                                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="4.5" cy="5" r="4.5"
                                                        fill="#2AA6C0" />
                                                </svg>
                                                <p>Community support</p>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>

                                <a href="#" class="ic-btn w-100">Course Content <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
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
