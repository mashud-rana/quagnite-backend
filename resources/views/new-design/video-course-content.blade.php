@extends('layouts.master-user')

@push('styles')
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
        type='text/css' />
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <div class="ic-header-admin">
        <div class="ic-CourseBack-btn">
            <a href="#" class="ic-backPage-button"><i class="ri-arrow-left-s-line"></i> Back to Course</a>
        </div>
    </div>
    <div class="ic-video-content-part">
        <div class="ic-video-content-left">
            <div class="plyr__video-embed" id="player">
                <iframe
                    src="https://player.vimeo.com/video/76979871?loop=false&amp;byline=false&amp;portrait=false&amp;title=false&amp;speed=true&amp;transparent=0&amp;gesture=media"
                    allowfullscreen allowtransparency allow="autoplay">
                </iframe>
            </div>
            <div class="ic-course-video">
                <div class="next-previous-btn">
                    {{-- button --}}
                    <button class="videoPrev">Previous</button>
                    <button class="videoNext">Next</button>
                    {{-- button --}}
                </div>
                <div class="ic-video-title-mension">
                    <h3>Introduction to Product Development</h3>
                    <p>John Smith
                        <svg width="5" height="5" viewBox="0 0 5 5" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <circle cx="2.5" cy="2.5" r="2.5" fill="#E2E2EA" />
                        </svg>
                        <span>Sr. Web Designer</span>
                    </p>
                </div>
                <div class="ic-course-tabs">
                    <div class="ic-tabs-links">
                        <ul>
                            <li>
                                <a href="#" class="ic-discription-links active" data-tabs="course-overview">Course
                                    Overview</a>
                            </li>
                            <li>
                                <a href="#" class="ic-discription-links" data-tabs="announcements">Announcements</a>
                            </li>
                            <li>
                                <a href="#" class="ic-discription-links" data-tabs="reviews">Reviews</a>
                            </li>
                            <li>
                                <a href="#" class="ic-discription-links" data-tabs="discussions">Discussions</a>
                            </li>
                            <li>
                                <a href="#" class="ic-discription-links" data-tabs="note">Notes</a>
                            </li>
                            <li>
                                <a href="#" class="ic-discription-links" data-tabs="Playground">Playground</a>
                            </li>
                        </ul>
                    </div>
                    <div class="tabs-content">
                        <div class="ic-tabs-content-items active" id="course-overview">
                            <h4 class="mb-10">About this course</h4>
                            <p class="color-deep-gray">Learn Web Design from scratch by working on some awesome projects.</p>

                            <div class="ic-overview-content">
                                <div class="ic-overview-content-items">
                                    <div>
                                        <p class="discription-labels">By the numbers :</p>
                                    </div>
                                    <div class="types-numbers">
                                        <p>Skill level: All Levels
                                        </p>
                                        <p>Students: 10761
                                        </p>
                                        <p>Languages: English
                                        </p>
                                        <p>Captions: Yes</p>
                                        <p>Lectures: 16
                                        </p>
                                        <p>Video: 2 total hours</p>
                                    </div>
                                </div>
                                <div class="ic-overview-content-items">
                                    <div>
                                        <p class="discription-labels">By Features :</p>
                                    </div>
                                    <div class="types-numbers">
                                        <p>Available on <span>iOS</span> and <span>Android</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="ic-overview-content-items">
                                    <div>
                                        <p class="discription-labels">By Description :</p>
                                    </div>
                                    <div class="types-numbers">
                                        <div class="discription">
                                            <p class="welcome-text">Welcome to Development 101, your ultimate guide for
                                                learning
                                                Web development.
                                            </p>
                                            <p>Throughout this course, you will be learning various essential things that
                                                are
                                                mostly used by a flutter developer when he/she is working at some firm.

                                            </p>
                                            <p>This course will help you learn how to create fast and stunning mobile
                                                applications with so much ease. The projects/apps which you will be making
                                                throughout the course will be working on android as well as ios. Some
                                                changes to
                                                the projects make them compatible will web browsers as well.

                                            </p>
                                            <p>You will also be building a large number of apps with the difficulty level
                                                ranging from beginner to advanced and these projects/apps will help you get
                                                better with the concepts eventually.
                                                I will also be covering some of the most used flutter packages which are
                                                generally used while we are developing a flutter app.

                                            </p>
                                            <p>Flutter is Google’s UI toolkit for building beautiful, natively compiled
                                                applications for mobile, web, and desktop from a single codebase. Delight
                                                your
                                                users with Flutter's built-in beautiful Material Design. Flutter's hot
                                                reload
                                                helps you quickly and easily experiment, build UIs, add features, and fix
                                                bugs
                                                faster. Cross-platform development with Flutter.
                                                Flutter’s widgets incorporate all critical platform differences such as
                                                scrolling, navigation, icons, and fonts to provide full native performance
                                                on
                                                both iOS and Android.

                                            </p>
                                            <p>Happy Learning!!</p>
                                        </div>
                                    </div>
                                    <div class="tags-name">
                                        <div>
                                            <p class="ic-whatyou">What you’ll learn</p>
                                            <ul class="video-tags-name">
                                                <li>
                                                    <p><img src="{{ asset('frontend/images/check-video.png') }}"
                                                            alt="">
                                                        Developer</p>
                                                </li>
                                                <li>
                                                    <p><img src="{{ asset('frontend/images/check-video.png') }}"
                                                            alt="">
                                                        Web Development</p>
                                                </li>
                                                <li>
                                                    <p><img src="{{ asset('frontend/images/check-video.png') }}"
                                                            alt="">
                                                        Android Development</p>
                                                </li>
                                                <li>
                                                    <p><img src="{{ asset('frontend/images/check-video.png') }}"
                                                            alt="">
                                                        cross platform development</p>
                                                </li>
                                                <li>
                                                    <p><img src="{{ asset('frontend/images/check-video.png') }}"
                                                            alt="">
                                                        cross platform development</p>
                                                </li>
                                                <li>
                                                    <p><img src="{{ asset('frontend/images/check-video.png') }}"
                                                            alt="">
                                                        web app development</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tags-name">
                                        <div>
                                            <p class="ic-whatyou">Who this course is for</p>
                                            <ul class="video-tags-name">
                                                <li>
                                                    <p><img src="{{ asset('frontend/images/check-video.png') }}"
                                                            alt="">
                                                        Begineer</p>
                                                </li>
                                                <li>
                                                    <p><img src="{{ asset('frontend/images/check-video.png') }}"
                                                            alt="">
                                                        Web Developers</p>
                                                </li>
                                                <li>
                                                    <p><img src="{{ asset('frontend/images/check-video.png') }}"
                                                            alt="">
                                                        Android Development</p>
                                                </li>
                                                <li>
                                                    <p><img src="{{ asset('frontend/images/check-video.png') }}"
                                                            alt="">
                                                        cross platform development</p>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ic-overview-content-items">
                                    <div>
                                        <p class="discription-labels">Instructor :</p>
                                    </div>
                                    <div class="types-numbers">
                                        <div class="instructor-info">
                                            <img src="{{ asset('frontend/images/instructor-images1.png') }}"
                                                alt="">
                                            <div>
                                                <h6>Leslie Alexander</h6>
                                                <p>Web Developer | Founder, Hex hybrids</p>
                                                <ul>
                                                    <li>
                                                        <span>
                                                            <svg width="12" height="16" viewBox="0 0 12 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M9.28125 5.1875C9.28125 3.37347 7.80888 1.875 6 1.875C4.19347 1.875 2.71875 3.37137 2.71875 5.1875C2.71875 6.99678 4.19072 8.46875 6 8.46875C7.80928 8.46875 9.28125 6.99678 9.28125 5.1875ZM3.65625 5.1875C3.65625 3.87791 4.70766 2.8125 6 2.8125C7.29234 2.8125 8.34375 3.87791 8.34375 5.1875C8.34375 6.47984 7.29234 7.53125 6 7.53125C4.70766 7.53125 3.65625 6.47984 3.65625 5.1875Z"
                                                                    fill="#00ACB6" />
                                                                <path
                                                                    d="M11.1562 5.1875C11.1562 2.34337 8.84747 0 6 0C3.31203 0 0.84375 2.14744 0.84375 5.1875C0.84375 7.08294 2.69956 9.94722 3.80144 11.5211C2.57653 11.7673 0.84375 12.403 0.84375 13.6562C0.84375 15.4484 4.18191 16 6 16C7.81825 16 11.1562 15.4484 11.1562 13.6562C11.1562 12.4029 9.42331 11.7673 8.19856 11.5211C9.29478 9.95531 11.1562 7.08512 11.1562 5.1875ZM1.78125 5.1875C1.78125 2.56241 3.97109 0.9375 6 0.9375C8.32622 0.9375 10.2188 2.84403 10.2188 5.1875C10.2188 7.17263 7.44494 11.0857 5.99997 12.9108C4.55487 11.0861 1.78125 7.17384 1.78125 5.1875ZM10.2188 13.6562C10.2188 14.4394 7.92309 15.0625 6 15.0625C4.07947 15.0625 1.78125 14.4389 1.78125 13.6562C1.78125 13.2832 2.61863 12.6364 4.40875 12.3662C5.09244 13.2939 5.60703 13.9167 5.63909 13.9553C5.72813 14.0628 5.86044 14.125 6 14.125C6.13956 14.125 6.27188 14.0628 6.36091 13.9553C6.39297 13.9167 6.90756 13.2939 7.59125 12.3662C9.38138 12.6364 10.2188 13.2832 10.2188 13.6562Z"
                                                                    fill="#00ACB6" />
                                                            </svg>
                                                            London, UK</span>
                                                    </li>
                                                    <li>
                                                        <span>
                                                            <svg width="16" height="16" viewBox="0 0 16 16"
                                                                fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M14.5938 1.3125H14.0938V0.46875C14.0938 0.209875 13.8839 0 13.625 0C13.3661 0 13.1562 0.209875 13.1562 0.46875V1.3125H10.3438V0.46875C10.3438 0.209875 10.1339 0 9.875 0C9.61613 0 9.40625 0.209875 9.40625 0.46875V1.3125H6.59375V0.46875C6.59375 0.209875 6.38387 0 6.125 0C5.86613 0 5.65625 0.209875 5.65625 0.46875V1.3125H2.84375V0.46875C2.84375 0.209875 2.63387 0 2.375 0C2.11613 0 1.90625 0.209875 1.90625 0.46875V1.3125H1.40625C0.630844 1.3125 0 1.94334 0 2.71875V14.5938C0 15.3692 0.630844 16 1.40625 16H14.5938C15.3692 16 16 15.3692 16 14.5938V2.71875C16 1.94334 15.3692 1.3125 14.5938 1.3125ZM15.0625 14.5938C15.0625 14.8522 14.8522 15.0625 14.5938 15.0625H1.40625C1.14778 15.0625 0.9375 14.8522 0.9375 14.5938V6H15.0625V14.5938ZM15.0625 5.0625H0.9375V2.71875C0.9375 2.46028 1.14778 2.25 1.40625 2.25H1.90625V3.09375C1.90625 3.35262 2.11613 3.5625 2.375 3.5625C2.63387 3.5625 2.84375 3.35262 2.84375 3.09375V2.25H5.65625V3.09375C5.65625 3.35262 5.86613 3.5625 6.125 3.5625C6.38387 3.5625 6.59375 3.35262 6.59375 3.09375V2.25H9.40625V3.09375C9.40625 3.35262 9.61613 3.5625 9.875 3.5625C10.1339 3.5625 10.3438 3.35262 10.3438 3.09375V2.25H13.1562V3.09375C13.1562 3.35262 13.3661 3.5625 13.625 3.5625C13.8839 3.5625 14.0938 3.35262 14.0938 3.09375V2.25H14.5938C14.8522 2.25 15.0625 2.46028 15.0625 2.71875V5.0625Z"
                                                                    fill="#00ACB6" />
                                                                <path
                                                                    d="M6.00293 12.25C5.69284 12.25 5.42674 12.019 5.38399 11.7126C5.37996 11.6839 5.37793 11.6544 5.37793 11.625C5.37793 11.3661 5.16805 11.1562 4.90918 11.1562C4.6503 11.1562 4.44043 11.3661 4.44043 11.625C4.44043 11.6977 4.44552 11.7708 4.45549 11.8423C4.56249 12.6092 5.22774 13.1875 6.00293 13.1875C6.86449 13.1875 7.56543 12.4865 7.56543 11.625C7.56543 11.1994 7.39424 10.8133 7.11737 10.5312C7.39424 10.2492 7.56543 9.86303 7.56543 9.4375C7.56543 8.57594 6.86449 7.875 6.00293 7.875C5.25799 7.875 4.61318 8.40497 4.46974 9.13513C4.41984 9.38916 4.5853 9.63553 4.83934 9.68544C5.09337 9.73534 5.33974 9.56984 5.38965 9.31584C5.44693 9.02419 5.70487 8.8125 6.00293 8.8125C6.34755 8.8125 6.62793 9.09288 6.62793 9.4375C6.62793 9.78209 6.34755 10.0625 6.00293 10.0625C5.74405 10.0625 5.53418 10.2723 5.53418 10.5312C5.53418 10.7901 5.74405 11 6.00293 11C6.34755 11 6.62793 11.2803 6.62793 11.625C6.62793 11.9696 6.34755 12.25 6.00293 12.25Z"
                                                                    fill="#00ACB6" />
                                                                <path
                                                                    d="M9.87471 13.1875C10.8034 13.1875 11.559 12.4319 11.559 11.5032V9.55931C11.559 8.63056 10.8034 7.875 9.87471 7.875C8.94599 7.875 8.19043 8.63056 8.19043 9.55928V11.5032C8.19043 12.4319 8.94599 13.1875 9.87471 13.1875ZM9.12793 9.55928C9.12793 9.1475 9.46293 8.8125 9.87471 8.8125C10.2865 8.8125 10.6215 9.1475 10.6215 9.55928V11.5032C10.6215 11.915 10.2865 12.25 9.87471 12.25C9.46293 12.25 9.12793 11.915 9.12793 11.5032V9.55928Z"
                                                                    fill="#00ACB6" />
                                                            </svg>

                                                            Since April 1, 2022</span>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ic-tabs-content-items " id="announcements">
                            <div class="ic-announcements-items">
                                <div class="ic-announcements-avatars">
                                    <img src="{{ asset('frontend/images/waiting-comment-4.png') }}" alt="">
                                    <div>
                                        <h6>Leslie Alexander</h6>
                                        <ul>
                                            <li>
                                                <svg width="5" height="5" viewBox="0 0 5 5" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2.5" cy="2.5" r="2.5"
                                                        fill="#00ACB6" />
                                                </svg>
                                                <span>posted an announcement</span>
                                            </li>
                                            <li>
                                                <svg width="5" height="5" viewBox="0 0 5 5" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2.5" cy="2.5" r="2.5"
                                                        fill="#00ACB6" />
                                                </svg>
                                                <span>10 days ago</span>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="ic-announcements-content">
                                    <h5>My 2022 New Year Presents in Advance</h5>
                                    <p>Hey there, I hope you are doing well. :)</p>

                                    <p>Seven months back, I published my very first course on Udemy, since then I started
                                        this
                                        journey of creating and sharing with you, also listened and learned a lot from your
                                        feedback. Thank you so much for supporting the courses! To reward you for long-term
                                        support as an established student and get ready for the coming year, I hand-picked 3
                                        flutter development courses out of my 7 paid courses on Udemy and opened their 5
                                        days
                                        FREE coupons for you. You can find topics you like to enroll in and start learning
                                        now
                                        for FREE if you haven't done yet. Please note since Udemy's IPO it has a new coupon
                                        policy to allow FREE coupons open to the first 1000 enrollments and expires in 5
                                        days so
                                        make sure you start earlier before they expire.</p>

                                    <div class="pt-4 pb-4">
                                        <p>1. Carousel UI from Scratch with Flutter -> <a href="#">Enroll Here</a>
                                        </p>
                                        <p>2. Artistic UI from Scratch with Flutter -> <a href="#">Enroll Here</a>
                                        </p>
                                        <p>3. Flutter Music Player App with State Management from Scratch -> <a
                                                href="#">Enroll Here</a></p>
                                    </div>

                                    <p>As a bonus, I am also giving the "Flutter UI Certification-Your Complete UI
                                        Masterclass"
                                        course at a discounted price of 360 INR (4.84$).
                                        That is 2560INR (34.4$) -> 360 INR (4.84$).
                                        This course has 10 amazing UIs which you will be developing and enhancing your UI
                                        development skills in Flutter. This discounted price will be there for five days so
                                        make
                                        sure to enroll and enhance your UI development skills in flutter.
                                        Flutter UI Certification-Your Complete UI Masterclass -> <a href="#">Enroll
                                            here</a></p>

                                    <div class="pt-4">
                                        <p>See you in class:</p>
                                        <p>Yours Truly,</p>
                                        <p>Leslie Alexander</p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="ic-tabs-content-items " id="reviews">
                            <div class="ic-video-reviews">
                                <div class="ic-video-review-content">
                                    <div class="student-feedback">
                                        <div class="review-count">
                                            <p class="review-star-point">Reviews <i class="ri-star-fill"></i>
                                                <span>4.5</span>
                                            </p>
                                            <p>1,997 total</p>
                                        </div>

                                        <div class="review-count-shows">
                                            <div class="single-reviews">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                </div>
                                                <span class="ic-video-star">5 Star</span>
                                                <div class="progress" role="progressbar" aria-label="Basic example"
                                                    aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar" style="width: 25%"></div>
                                                </div>
                                                <span class="ic-video-review-count">58</span>
                                            </div>
                                            <div class="single-reviews">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                </div>
                                                <span class="ic-video-star">4 Star</span>
                                                <div class="progress" role="progressbar" aria-label="Basic example"
                                                    aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar" style="width: 60%"></div>
                                                </div>
                                                <span class="ic-video-review-count">20</span>
                                            </div>
                                            <div class="single-reviews">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                </div>
                                                <span class="ic-video-star">3 Star</span>
                                                <div class="progress" role="progressbar" aria-label="Basic example"
                                                    aria-valuenow="50" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar" style="width: 50%"></div>
                                                </div>
                                                <span class="ic-video-review-count">15</span>
                                            </div>
                                            <div class="single-reviews">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                </div>
                                                <span class="ic-video-star">2 Star</span>
                                                <div class="progress" role="progressbar" aria-label="Basic example"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar" style="width: 20%"></div>
                                                </div>
                                                <span class="ic-video-review-count">10</span>
                                            </div>
                                            <div class="single-reviews">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="flexCheckDefault">
                                                </div>
                                                <span class="ic-video-star">1 Star</span>
                                                <div class="progress" role="progressbar" aria-label="Basic example"
                                                    aria-valuenow="20" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar" style="width: 20%"></div>
                                                </div>
                                                <span class="ic-video-review-count">1</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ic-review-comment">
                                    <div class="ic-review-headers">
                                        <h5>Reviews</h5>
                                        <div class="d-flex">
                                            <p>Filter ratings</p>
                                            <select name="" id="" class="selectpicker">
                                                <option value="0">Recent Reviews</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="ic-textArea">
                                        <img src="{{ asset('frontend/images/waiting-comment-4.png') }}" alt="">
                                        <form action="#">
                                            <textarea name="" id="" class="form-control"></textarea>
                                        </form>
                                    </div>
                                    <div class="ic-user-review-shows">
                                        <div class="ic-user-review-avatar">
                                            <img src="{{ asset('frontend/images/waiting-comment-4.png') }}"
                                                alt="">
                                            <div class="">
                                                <p class="ic-user-avatar-text">Jane Cooper</p>
                                                <p class="user-review-sent">
                                                    <i class="ri-star-s-fill"></i>
                                                    4.98
                                                    <svg width="5" height="5" viewBox="0 0 5 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="2.5" cy="2.5" r="2.5"
                                                            fill="#00ACB6" />
                                                    </svg>
                                                    <span class="publish-text">Published 2 months ago</span>
                                                </p>
                                            </div>
                                        </div>
                                        <p class="ic-user-comment-show">There are many variations of passages of Lorem
                                            Ipsum
                                            available, but the majority have suffered alteration in some form, by injected
                                            humour, or randomised words which don't look even slightly believable. If you
                                            are
                                            going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                            embarrassing hidden in the middle of text.</p>
                                        <ul class="comment-likes">
                                            <li>
                                                <a href="#"><i class="ri-thumb-up-fill"></i> Helpful </a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ri-thumb-down-fill"></i> Not helpful </a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="ic-user-review-shows">
                                        <div class="ic-user-review-avatar">
                                            <img src="{{ asset('frontend/images/waiting-comment-4.png') }}"
                                                alt="">
                                            <div class="">
                                                <p class="ic-user-avatar-text">Jane Cooper</p>
                                                <p class="user-review-sent">
                                                    <i class="ri-star-s-fill"></i>
                                                    4.98
                                                    <svg width="5" height="5" viewBox="0 0 5 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="2.5" cy="2.5" r="2.5"
                                                            fill="#00ACB6" />
                                                    </svg>
                                                    <span class="publish-text">Published 2 months ago</span>
                                                </p>
                                            </div>
                                        </div>
                                        <p class="ic-user-comment-show">There are many variations of passages of Lorem
                                            Ipsum
                                            available, but the majority have suffered alteration in some form, by injected
                                            humour, or randomised words which don't look even slightly believable. If you
                                            are
                                            going to use a passage of Lorem Ipsum, you need to be sure there isn't anything
                                            embarrassing hidden in the middle of text.</p>
                                        <ul class="comment-likes">
                                            <li>
                                                <a href="#"><i class="ri-thumb-up-fill"></i> Helpful </a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ri-thumb-down-fill"></i> Not helpful </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ic-tabs-content-items " id="discussions">
                            <div class="ic-video-reviews">
                                <div class="ic-review-comment">
                                    <div class="ic-textArea ic-discussions-heads">
                                        <img src="{{ asset('frontend/images/waiting-comment-4.png') }}" alt="">
                                        <form action="#">
                                            <textarea name="" id="" class="form-control" data-bs-toggle="modal" data-bs-target="#exampleModal"
                                                placeholder="What’s on your mind?"></textarea>
                                        </form>
                                    </div>
                                    <div class="ic-review-headers justify-content-end ic-border-bottom">
                                        <div class="d-flex">
                                            <p>Sort by :</p>
                                            <select name="" id="" class="selectpicker">
                                                <option value="0"> latest</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="ic-user-review-shows">
                                        <div class="ic-discussions-commnent">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-8">
                                                    <div class="ic-user-review-avatar">
                                                        <img src="{{ asset('frontend/images/waiting-comment-4.png') }}"
                                                            alt="">
                                                        <div class="">
                                                            <p class="ic-user-avatar-text">Jane Cooper</p>
                                                            <p class="user-review-sent">
                                                                <i class="ri-star-s-fill"></i>
                                                                4.98
                                                                <svg width="5" height="5" viewBox="0 0 5 5"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="2.5" cy="2.5" r="2.5"
                                                                        fill="#00ACB6" />
                                                                </svg>
                                                                <span class="publish-text">Published 2 months ago</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="ic-user-comment-show">There are many variations of passages
                                                        of
                                                        Lorem
                                                        Ipsum
                                                        available, but the majority have suffered alteration in some form,
                                                        by
                                                        injected
                                                        humour,
                                                        or randomised words which don't look even slightly believable. If
                                                        you
                                                        are going
                                                        to
                                                        use a
                                                        passage of Lorem Ipsum, you need to be sure there isn't anything
                                                        embarrassing
                                                        hidden
                                                        in
                                                        the middle of text.</p>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="ic-votet-button">
                                                        <ul>
                                                            <li>
                                                                <button><i class="ri-arrow-up-s-line"></i> Upvote</button>
                                                            </li>
                                                            <li>
                                                                <button><i class="ri-notification-fill"></i>
                                                                    Follow</button>
                                                            </li>
                                                            <li>
                                                                <button><i class="ri-share-fill"></i> Share</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ic-user-help-post">
                                            <div class="ic-tags-replay">
                                                <ul class="comment-likes">
                                                    <li>
                                                        <a href="#"><i class="ri-thumb-up-fill"></i> Like </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="ic-replay-btn"><i
                                                                class="ri-reply-line"></i> Reply </a>
                                                    </li>
                                                </ul>
                                                <span class="ic-users-tags">data science</span>
                                                <span class="ic-users-tags">programing</span>
                                                <span class="ic-users-tags">data visualisation</span>
                                            </div>
                                            <ul class="comment-likes">
                                                <li>
                                                    <a href="#"><i class="ri-user-3-fill"></i> 20 Flowers </a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ri-reply-line"></i> 4 Replyer </a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="ic-comment-massages">
                                            <div class="editors example"></div>
                                            <button class="ic-commnet-send"><i class="ri-send-plane-2-fill"></i></button>
                                        </div>
                                    </div>
                                    <div class="ic-user-review-shows">
                                        <div class="ic-discussions-commnent">
                                            <div class="row">
                                                <div class="col-lg-8 col-md-8">
                                                    <div class="ic-user-review-avatar">
                                                        <img src="{{ asset('frontend/images/waiting-comment-4.png') }}"
                                                            alt="">
                                                        <div class="">
                                                            <p class="ic-user-avatar-text">Jane Cooper</p>
                                                            <p class="user-review-sent">
                                                                <i class="ri-star-s-fill"></i>
                                                                4.98
                                                                <svg width="5" height="5" viewBox="0 0 5 5"
                                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="2.5" cy="2.5" r="2.5"
                                                                        fill="#00ACB6" />
                                                                </svg>
                                                                <span class="publish-text">Published 2 months ago</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <p class="ic-user-comment-show">There are many variations of passages
                                                        of
                                                        Lorem
                                                        Ipsum
                                                        available, but the majority have suffered alteration in some form,
                                                        by
                                                        injected
                                                        humour,
                                                        or randomised words which don't look even slightly believable. If
                                                        you
                                                        are going
                                                        to
                                                        use a
                                                        passage of Lorem Ipsum, you need to be sure there isn't anything
                                                        embarrassing
                                                        hidden
                                                        in
                                                        the middle of text.</p>
                                                </div>
                                                <div class="col-lg-4 col-md-4">
                                                    <div class="ic-votet-button">
                                                        <ul>
                                                            <li>
                                                                <button><i class="ri-arrow-up-s-line"></i> Upvote</button>
                                                            </li>
                                                            <li>
                                                                <button><i class="ri-notification-fill"></i>
                                                                    Follow</button>
                                                            </li>
                                                            <li>
                                                                <button><i class="ri-share-fill"></i> Share</button>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ic-user-help-post">
                                            <div class="ic-tags-replay">
                                                <ul class="comment-likes">
                                                    <li>
                                                        <a href="#"><i class="ri-thumb-up-fill"></i> Like </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="ic-replay-btn"><i
                                                                class="ri-reply-line"></i> Reply </a>
                                                    </li>
                                                </ul>
                                                <span class="ic-users-tags">data science</span>
                                                <span class="ic-users-tags">programing</span>
                                                <span class="ic-users-tags">data visualisation</span>
                                            </div>
                                            <ul class="comment-likes">
                                                <li>
                                                    <a href="#"><i class="ri-user-3-fill"></i> 20 Flowers </a>
                                                </li>
                                                <li>
                                                    <a href="#"><i class="ri-reply-line"></i> 4 Replyer </a>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="ic-comment-massages">
                                            <div class="editors example"></div>
                                            <button class="ic-commnet-send"><i class="ri-send-plane-2-fill"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ic-tabs-content-items" id="note">
                            <div class="ic-student-note">
                                <div class="ic-students-notes">
                                    <div class="editors example"></div>
                                    <div class="ic-btns-notes">
                                        <button class="ic-note-btn ic-btn-bl">Cancel</button>
                                        <button class="ic-note-btn ic-btn">Save Note</button>
                                    </div>
                                </div>
                                <div class="ic-all-note-show">
                                    <div class="ic-all-note-select">
                                        <select class="selectpicker">
                                            <option value="0">All Notes</option>
                                            <option value="1">Notes 1</option>
                                        </select>
                                        <select class="selectpicker">
                                            <option value="0">Most Recent Note</option>
                                            <option value="1">Notes 1</option>
                                        </select>
                                    </div>
                                    <ul class="ic-note-select">
                                        <li>
                                            <div class="edit-deleted-text">
                                                <p class="note-title">1. Note Name</p>
                                                <div class="ic-edit-deleted">
                                                    <a href="#" class="date">10-Apr-2023, 05:30 PM</a>
                                                    <a href="#" class="pencil"><i class="ri-download-line"></i></a>
                                                    <a href="#" class="pencil"><i class="ri-pencil-fill"></i></a>
                                                    <a href="#" class="deleted"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </div>
                                            <div class="ic-notetext">
                                                <p>There are many variations of passages of Lorem Ipsum available,</p>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="edit-deleted-text">
                                                <p class="note-title">2. Note Name</p>
                                                <div class="ic-edit-deleted">
                                                    <a href="#" class="date">10-Apr-2023, 05:30 PM</a>
                                                    <a href="#" class="pencil"><i class="ri-download-line"></i></a>
                                                    <a href="#" class="pencil"><i class="ri-pencil-fill"></i></a>
                                                    <a href="#" class="deleted"><i
                                                            class="ri-delete-bin-line"></i></a>
                                                </div>
                                            </div>
                                            <div class="ic-notetext">
                                                <p>There are many variations of passages of Lorem Ipsum available,</p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="ic-tabs-content-items" id="Playground">
                            <div class="ic-playground-subscription">
                                <div>
                                    <span class="warning-text">
                                        Warning!
                                    </span>
                                </div>
                                <a href="#" class="btn-book">Subscription Here <i
                                        class="ri-arrow-right-line"></i></a>
                                <p class="text-center">You don’t have any subscription, Please Click the button above to
                                    buy one.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="ic-video-content-right">
            <div class="ic-learning-platform">
                <h5>Self Learning</h5>
                <div class="accordion ic-video-according" id="accordionExample">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="ic-video-milestone">
                                    <span class="p-circle finish-module"></span>
                                    <div class="ic-course-video">
                                        <h6><img src="{{ asset('frontend/images/video-icons.svg') }}" alt="">
                                            Milestone 0
                                            : Orientation</h6>
                                        <span class="video-times">(3:36)</span>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="ic-video-milestone">
                                                <span class="p-circle"></span>
                                                <div class="ic-course-video">
                                                    <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                            alt="">
                                                        Milestone 0
                                                        : Orientation</p>
                                                    <span class="video-times">(3:36)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="ic-video-milestone">
                                                <span class="p-circle"></span>
                                                <div class="ic-course-video">
                                                    <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                            alt="">
                                                        Learn and Explore HTML as a Beginner</p>
                                                    <span class="video-times">(3:36)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="ic-quize-btn"> <svg width="17" height="16"
                                                viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.65538 13.1282L0 16V0.820513C0 0.602899 0.0864466 0.394199 0.240323 0.240323C0.394199 0.0864466 0.602899 0 0.820513 0H15.5897C15.8074 0 16.0161 0.0864466 16.1699 0.240323C16.3238 0.394199 16.4103 0.602899 16.4103 0.820513V12.3077C16.4103 12.5253 16.3238 12.734 16.1699 12.8879C16.0161 13.0418 15.8074 13.1282 15.5897 13.1282H3.65538ZM7.38462 9.02564V10.6667H9.02564V9.02564H7.38462ZM5.38831 4.76964L6.99815 5.0921C7.04384 4.86353 7.15349 4.65264 7.31435 4.48395C7.47521 4.31527 7.68067 4.19573 7.90681 4.13925C8.13295 4.08276 8.37049 4.09166 8.59177 4.1649C8.81306 4.23814 9.00899 4.37271 9.15679 4.55295C9.30458 4.7332 9.39815 4.9517 9.42661 5.18305C9.45507 5.4144 9.41725 5.64907 9.31756 5.85976C9.21786 6.07045 9.06038 6.2485 8.86345 6.37319C8.66651 6.49788 8.43822 6.56409 8.20513 6.5641H7.38462V8.20513H8.20513C8.74894 8.20496 9.28152 8.05039 9.74093 7.7594C10.2003 7.4684 10.5677 7.05295 10.8002 6.56137C11.0328 6.06979 11.121 5.52228 11.0545 4.98254C10.9881 4.44281 10.7698 3.93302 10.425 3.51249C10.0802 3.09197 9.62308 2.77798 9.10683 2.60707C8.59057 2.43615 8.0364 2.41533 7.50878 2.54702C6.98116 2.67871 6.50177 2.95751 6.12638 3.35098C5.751 3.74445 5.49505 4.23641 5.38831 4.76964Z"
                                                    fill="white" />
                                            </svg>
                                            Knowledge Check </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="ic-video-milestone">
                                    <span class="p-circle"></span>
                                    <div class="ic-course-video">
                                        <h6><img src="{{ asset('frontend/images/video-icons.svg') }}" alt="">
                                            01 - Milestone : Personal Portfolio?</h6>
                                        <span class="video-times">(3:36)</span>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="ic-video-milestone">
                                                <span class="p-circle"></span>
                                                <div class="ic-course-video">
                                                    <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                            alt="">
                                                        Milestone 0
                                                        : Orientation</p>
                                                    <span class="video-times">(3:36)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="ic-video-milestone">
                                                <span class="p-circle"></span>
                                                <div class="ic-course-video">
                                                    <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                            alt="">
                                                        Learn and Explore HTML as a Beginner</p>
                                                    <span class="video-times">(3:36)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="ic-quize-btn"> <svg width="17" height="16"
                                                viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.65538 13.1282L0 16V0.820513C0 0.602899 0.0864466 0.394199 0.240323 0.240323C0.394199 0.0864466 0.602899 0 0.820513 0H15.5897C15.8074 0 16.0161 0.0864466 16.1699 0.240323C16.3238 0.394199 16.4103 0.602899 16.4103 0.820513V12.3077C16.4103 12.5253 16.3238 12.734 16.1699 12.8879C16.0161 13.0418 15.8074 13.1282 15.5897 13.1282H3.65538ZM7.38462 9.02564V10.6667H9.02564V9.02564H7.38462ZM5.38831 4.76964L6.99815 5.0921C7.04384 4.86353 7.15349 4.65264 7.31435 4.48395C7.47521 4.31527 7.68067 4.19573 7.90681 4.13925C8.13295 4.08276 8.37049 4.09166 8.59177 4.1649C8.81306 4.23814 9.00899 4.37271 9.15679 4.55295C9.30458 4.7332 9.39815 4.9517 9.42661 5.18305C9.45507 5.4144 9.41725 5.64907 9.31756 5.85976C9.21786 6.07045 9.06038 6.2485 8.86345 6.37319C8.66651 6.49788 8.43822 6.56409 8.20513 6.5641H7.38462V8.20513H8.20513C8.74894 8.20496 9.28152 8.05039 9.74093 7.7594C10.2003 7.4684 10.5677 7.05295 10.8002 6.56137C11.0328 6.06979 11.121 5.52228 11.0545 4.98254C10.9881 4.44281 10.7698 3.93302 10.425 3.51249C10.0802 3.09197 9.62308 2.77798 9.10683 2.60707C8.59057 2.43615 8.0364 2.41533 7.50878 2.54702C6.98116 2.67871 6.50177 2.95751 6.12638 3.35098C5.751 3.74445 5.49505 4.23641 5.38831 4.76964Z"
                                                    fill="white" />
                                            </svg>
                                            Knowledge Check </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="ic-video-milestone">
                                    <span class="p-circle"></span>
                                    <div class="ic-course-video">
                                        <h6><img src="{{ asset('frontend/images/video-icons.svg') }}" alt="">
                                            01 - Milestone : Personal Portfolio?</h6>
                                        <span class="video-times">(3:36)</span>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="ic-video-milestone">
                                                <span class="p-circle"></span>
                                                <div class="ic-course-video">
                                                    <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                            alt="">
                                                        Milestone 0
                                                        : Orientation</p>
                                                    <span class="video-times">(3:36)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="ic-video-milestone">
                                                <span class="p-circle"></span>
                                                <div class="ic-course-video">
                                                    <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                            alt="">
                                                        Learn and Explore HTML as a Beginner</p>
                                                    <span class="video-times">(3:36)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="ic-quize-btn"> <svg width="17" height="16"
                                                viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.65538 13.1282L0 16V0.820513C0 0.602899 0.0864466 0.394199 0.240323 0.240323C0.394199 0.0864466 0.602899 0 0.820513 0H15.5897C15.8074 0 16.0161 0.0864466 16.1699 0.240323C16.3238 0.394199 16.4103 0.602899 16.4103 0.820513V12.3077C16.4103 12.5253 16.3238 12.734 16.1699 12.8879C16.0161 13.0418 15.8074 13.1282 15.5897 13.1282H3.65538ZM7.38462 9.02564V10.6667H9.02564V9.02564H7.38462ZM5.38831 4.76964L6.99815 5.0921C7.04384 4.86353 7.15349 4.65264 7.31435 4.48395C7.47521 4.31527 7.68067 4.19573 7.90681 4.13925C8.13295 4.08276 8.37049 4.09166 8.59177 4.1649C8.81306 4.23814 9.00899 4.37271 9.15679 4.55295C9.30458 4.7332 9.39815 4.9517 9.42661 5.18305C9.45507 5.4144 9.41725 5.64907 9.31756 5.85976C9.21786 6.07045 9.06038 6.2485 8.86345 6.37319C8.66651 6.49788 8.43822 6.56409 8.20513 6.5641H7.38462V8.20513H8.20513C8.74894 8.20496 9.28152 8.05039 9.74093 7.7594C10.2003 7.4684 10.5677 7.05295 10.8002 6.56137C11.0328 6.06979 11.121 5.52228 11.0545 4.98254C10.9881 4.44281 10.7698 3.93302 10.425 3.51249C10.0802 3.09197 9.62308 2.77798 9.10683 2.60707C8.59057 2.43615 8.0364 2.41533 7.50878 2.54702C6.98116 2.67871 6.50177 2.95751 6.12638 3.35098C5.751 3.74445 5.49505 4.23641 5.38831 4.76964Z"
                                                    fill="white" />
                                            </svg>
                                            Knowledge Check </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal ic-videoAddDiscussion fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title" id="exampleModalLabel">Create a new question</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" class="ic-posted-boby">
                        <div class="form-group">
                            <label for="#">Title</label>
                            <input type="text" class="form-control"
                                placeholder="What is web development or what is threads of operating system given details with example">
                        </div>
                        <div class="form-group">
                            <label for="#">Content</label>
                            <div class="editors example"></div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between">
                            <label for="#" class="pb-0">Resolve</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="#">Content</label>
                            <input name='tags' class="form-control h-auto" value='development'
                                placeholder="Add tags...">
                        </div>
                        <div class="form-buttons">
                            <button>Cancel</button>
                            <button>Publish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script>
        // The DOM element you wish to replace with Tagify
        var input = document.querySelector('input[name=tags]')
        var tagify = new Tagify(input, {
            dropdown: {
                maxItems: 0,
                enabled: 0
            },
            whitelist: ["a", "aa", "aaa", "b", "bb", "ccc"]
        })

        // editor js
        var editor = new FroalaEditor('.example', {
            attribution: false,
            toolbarBottom: true
        });

        // video player js
        const player = new Plyr('#player', {
            controls: [
                'restart',
                'rewind',
                "play",
                "fast-forward",
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
            player.poster = '/frontend/images/video.png';
        }, 500);

        // according cliking
        $(function() {
            $('.accordion-button').on('click', function() {
                if ($('.accordion-button').not('.collapsed').length > 0) {
                    $('.accordion-item').removeClass('active');
                    $(this).parent().parent().addClass('active');
                    $('.accordion-item').removeClass('border-0');
                    $(this).parent().parent().prev().addClass('border-0');
                    console.log('clicked')
                } else {
                    $('.accordion-item').removeClass('active');

                }
            });

            // replay
            $('.ic-replay-btn').on('click', function(e) {
                e.preventDefault();
                console.log($(this).parent().parent().parent().parent().next().slideToggle());
            });
        });
    </script>
@endpush
