@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container-fluid">
            <div class="ic-CourseBack-btn">
                <a href="#" class="ic-backPage-button">
                    <i class="ri-arrow-left-s-line"></i> Back to
                    Courses</a>
            </div>
            <div class="ic-student-bootcamp-banner"
                style="background-image: linear-gradient(0deg, rgba(21, 141, 167, 0.30) 0%, rgba(21, 141, 167, 0.30) 100%), url({{ asset('new-frontendv1/images/course-image/student-bg.png') }})">

            </div>
        </div>
        <div class="container">
            <div class="boot-title">
                <h2>Fullstack Academy Part-Time Software Engineering Bootcamp</h2>
                <p> <span class="boot-name">John Smith</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 5 5" fill="none">
                        <circle cx="2.5" cy="2.5" r="2.5" fill="#00ACB6" />
                        <circle cx="2.5" cy="2.5" r="2.5" fill="#158DA7" />
                    </svg>
                    <span class="boot-sr">

                        Sr. Programmer</span>
                </p>
            </div>
            <div class="ic-course-tabs pt-4">
                <div class="ic-tabs-links">
                    <ul>
                        <li>
                            <a href="#" class="ic-discription-links active" data-tabs="bootcamp-class">Bootcamp
                                Class</a>
                        </li>
                        {{-- <li>
                            <a href="#" class="ic-discription-links" data-tabs="announcements">Announcements</a>
                        </li> --}}
                        <li>
                            <a href="#" class="ic-discription-links" data-tabs="course-overview">Course Overview</a>
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
                    </ul>
                </div>
                <div class="tabs-content ic-student-bootcamp">
                    <div class="ic-tabs-content-items active" id="bootcamp-class">
                        <div class="accordion" id="accordionExample">
                            <div class="accordion-item ic-milstone">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    01 - Milestone : Personal Portfolio?
                                </button>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <div class="accordion ic-inner-according" id="accordionExample1">
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="headingOne">
                                                    <button class="accordion-button" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseOne1"
                                                        aria-expanded="true" aria-controls="collapseOne">
                                                        <div>
                                                            <p class="d-flex align-items-center gap-2 inner-lession"><i
                                                                    class="ri-live-fill"></i> Learn and Explore HTML as a
                                                                Beginner</p>
                                                            <ul class="ic-lession-time">
                                                                <li>
                                                                    30/06/2323
                                                                </li>
                                                                <li>
                                                                    13:09 PM
                                                                </li>
                                                                <li class="times">
                                                                    Left for 2 hours 20 minutes
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </button>
                                                </h2>
                                                <div id="collapseOne1" class="accordion-collapse collapse show"
                                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample1">
                                                    <div class="accordion-body pt-0">
                                                        <p class="ic-inner-text-lession">Throughout this course, you will be
                                                            learning various essential things that are mostly used by a
                                                            flutter developer when he/she is working at some firm.
                                                            This course will help you learn how to create fast and stunning
                                                            mobile applications with so much ease. The projects/apps which
                                                            you will be making throughout the course will be working on
                                                            android as well as ios. Some changes to the projects make them
                                                            compatible will web browsers as well.
                                                        </p>
                                                        <ul class="lession-overview">
                                                            <li>
                                                                <i class="ri-checkbox-circle-fill"></i> <span>Live,
                                                                    interactive class</span>
                                                            </li>
                                                            <li>
                                                                <i class="ri-checkbox-circle-fill"></i> <span>Experienced
                                                                    instructor teaching over Zoom</span>
                                                            </li>
                                                        </ul>
                                                        <a href="#" class="joinClass">
                                                            <i class="ri-live-fill"></i>
                                                            Join Live Class
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo1"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    <div>
                                                        <p class="d-flex align-items-center gap-2 inner-lession"><i
                                                                class="ri-live-fill"></i> Learn and Explore HTML as a
                                                            Beginner</p>
                                                        <ul class="ic-lession-time">
                                                            <li>
                                                                30/06/2323
                                                            </li>
                                                            <li>
                                                                13:09 PM
                                                            </li>
                                                            <li class="times">
                                                                Left for 2 hours 20 minutes
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </button>
                                                <div id="collapseTwo1" class="accordion-collapse collapse"
                                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample1">
                                                    <div class="accordion-body">
                                                        <strong>This is the second item's accordion body.</strong> It is
                                                        hidden by default, until the collapse plugin adds the appropriate
                                                        classes that we use to style each element. These classes control the
                                                        overall appearance, as well as the showing and hiding via CSS
                                                        transitions. You can modify any of this with custom CSS or
                                                        overriding our default variables. It's also worth noting that just
                                                        about any HTML can go within the <code>.accordion-body</code>,
                                                        though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree1"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    <div>
                                                        <p class="d-flex align-items-center gap-2 inner-lession"><i
                                                                class="ri-live-fill"></i> Learn and Explore HTML as a
                                                            Beginner</p>
                                                        <ul class="ic-lession-time">
                                                            <li>
                                                                30/06/2323
                                                            </li>
                                                            <li>
                                                                13:09 PM
                                                            </li>
                                                            <li class="times">
                                                                Left for 2 hours 20 minutes
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </button>
                                                <div id="collapseThree1" class="accordion-collapse collapse"
                                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample1">
                                                    <div class="accordion-body">
                                                        <strong>This is the third item's accordion body.</strong> It is
                                                        hidden by default, until the collapse plugin adds the appropriate
                                                        classes that we use to style each element. These classes control the
                                                        overall appearance, as well as the showing and hiding via CSS
                                                        transitions. You can modify any of this with custom CSS or
                                                        overriding our default variables. It's also worth noting that just
                                                        about any HTML can go within the <code>.accordion-body</code>,
                                                        though the transition does limit overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item ic-milstone">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Accordion Item #2
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                        until the collapse plugin adds the appropriate classes that we use to style each
                                        element. These classes control the overall appearance, as well as the showing and
                                        hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                        our default variables. It's also worth noting that just about any HTML can go within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item ic-milstone">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                        until the collapse plugin adds the appropriate classes that we use to style each
                                        element. These classes control the overall appearance, as well as the showing and
                                        hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                        our default variables. It's also worth noting that just about any HTML can go within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic-tabs-content-items p-0 bg-transparent shadow-none" id="course-overview">
                        <div class="ic-overview-content pt-0">
                            <div class="ic-overview-content-items">
                                <div>
                                    <p class="discription-labels">By the numbers :</p>
                                </div>
                                <div class="types-numbers">
                                    <p>Skill level: Advance
                                    </p>
                                    <p>Students: 0
                                    </p>
                                    <p>Languages: Hindi
                                    </p>
                                    <p>Lectures: 0
                                    </p>
                                    <p>Video: 00
                                        Hours</p>
                                </div>
                            </div>
                            <div class="ic-overview-content-items">
                                <div>
                                    <p class="discription-labels">By Features :</p>
                                </div>
                                <div class="types-numbers">
                                    <p>Available on <span>iOS</span> and <span>Android</span></p>
                                </div>
                            </div>
                            <div class="ic-overview-content-items">
                                <div>
                                    <p class="discription-labels">By Description :</p>
                                </div>
                                <div class="types-numbers">
                                    <div class="discription">
                                        Alice again, for this curious child was very nearly in the sea, though you mayn't
                                        believe it--' 'I never thought about it,' said Alice hastily; 'but I'm not myself,
                                        you see.' 'I don't know what a.
                                    </div>
                                </div>
                            </div>
                            <div class="ic-overview-content-items">
                                <div>
                                    <p class="discription-labels">Instructor :</p>
                                </div>
                                <div class="types-numbers">
                                    <div class="instructor-info"><img src="https://mc-dns.test/images/default.png"
                                            alt="">
                                        <div>
                                            <h6>Blake Ebert</h6>
                                            <p>Web Developer</p>
                                            <ul>
                                                <li><span><svg width="12" height="16" viewBox="0 0 12 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.28125 5.1875C9.28125 3.37347 7.80888 1.875 6 1.875C4.19347 1.875 2.71875 3.37137 2.71875 5.1875C2.71875 6.99678 4.19072 8.46875 6 8.46875C7.80928 8.46875 9.28125 6.99678 9.28125 5.1875ZM3.65625 5.1875C3.65625 3.87791 4.70766 2.8125 6 2.8125C7.29234 2.8125 8.34375 3.87791 8.34375 5.1875C8.34375 6.47984 7.29234 7.53125 6 7.53125C4.70766 7.53125 3.65625 6.47984 3.65625 5.1875Z"
                                                                fill="#00ACB6"></path>
                                                            <path
                                                                d="M11.1562 5.1875C11.1562 2.34337 8.84747 0 6 0C3.31203 0 0.84375 2.14744 0.84375 5.1875C0.84375 7.08294 2.69956 9.94722 3.80144 11.5211C2.57653 11.7673 0.84375 12.403 0.84375 13.6562C0.84375 15.4484 4.18191 16 6 16C7.81825 16 11.1562 15.4484 11.1562 13.6562C11.1562 12.4029 9.42331 11.7673 8.19856 11.5211C9.29478 9.95531 11.1562 7.08512 11.1562 5.1875ZM1.78125 5.1875C1.78125 2.56241 3.97109 0.9375 6 0.9375C8.32622 0.9375 10.2188 2.84403 10.2188 5.1875C10.2188 7.17263 7.44494 11.0857 5.99997 12.9108C4.55487 11.0861 1.78125 7.17384 1.78125 5.1875ZM10.2188 13.6562C10.2188 14.4394 7.92309 15.0625 6 15.0625C4.07947 15.0625 1.78125 14.4389 1.78125 13.6562C1.78125 13.2832 2.61863 12.6364 4.40875 12.3662C5.09244 13.2939 5.60703 13.9167 5.63909 13.9553C5.72813 14.0628 5.86044 14.125 6 14.125C6.13956 14.125 6.27188 14.0628 6.36091 13.9553C6.39297 13.9167 6.90756 13.2939 7.59125 12.3662C9.38138 12.6364 10.2188 13.2832 10.2188 13.6562Z"
                                                                fill="#00ACB6"></path>
                                                        </svg></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic-tabs-content-items p-0 bg-transparent shadow-none" id="reviews">
                        <div class="ic-video-reviews">
                            <div class="ic-video-review-content">
                                <div class="student-feedback">
                                    <div class="review-count">
                                        <p class="review-star-point">Reviews <i class="ri-star-fill"></i>
                                            <span>0</span>
                                        </p>
                                        <p>2 total</p>
                                    </div>

                                    <div class="review-count-shows">
                                        <div class="single-reviews">
                                            {{-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div> --}}
                                            <span class="ic-video-star">5 Star</span>
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar"
                                                    style="width: 80%"></div>
                                            </div>
                                            <span class="ic-video-review-count">0</span>
                                        </div>
                                        <div class="single-reviews">
                                            {{-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div> --}}
                                            <span class="ic-video-star">4 Star</span>
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar"
                                                    style="width: 40%"></div>
                                            </div>
                                            <span class="ic-video-review-count">50</span>
                                        </div>
                                        <div class="single-reviews">
                                            {{-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div> --}}
                                            <span class="ic-video-star">3 Star</span>
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar"
                                                    style="width: 20%"></div>
                                            </div>
                                            <span class="ic-video-review-count">0</span>
                                        </div>
                                        <div class="single-reviews">
                                            {{-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div> --}}
                                            <span class="ic-video-star">2 Star</span>
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar"
                                                    style="width: 10%"></div>
                                            </div>
                                            <span class="ic-video-review-count">0</span>
                                        </div>
                                        <div class="single-reviews">
                                            {{-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div> --}}
                                            <span class="ic-video-star">1 Star</span>
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar"
                                                    style="width: 90%"></div>
                                            </div>
                                            <span class="ic-video-review-count">0</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ic-review-comment">
                                <div class="ic-review-headers">
                                    <h5>Reviews</h5>

                                    <div class="d-flex">
                                        <a href="#" class="text-nowrap ic-btn-simple"
                                            data-bs-toggle="modal" data-bs-target="#review">Write Reviews</a>
                                        {{-- <select name="" id="" class="selectpicker">
                                        <option value="0">Recent Reviews</option>
                                    </select> --}}
                                    </div>
                                </div>
                                <div class="ic-user-review-shows">
                                    <div class="ic-user-review-avatar">
                                        <img src="#" alt="">
                                        <div class="">
                                            <p class="ic-user-avatar-text">asdasd</p>
                                            <p class="user-review-sent">
                                                <i class="ri-star-s-fill"></i>
                                                5
                                                <svg width="5" height="5" viewBox="0 0 5 5"
                                                    fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <circle cx="2.5" cy="2.5" r="2.5"
                                                        fill="#00ACB6" />
                                                </svg>
                                                <span class="publish-text">0</span>
                                            </p>
                                        </div>
                                    </div>
                                    <p class="ic-user-comment-show">20</p>
                                    <ul class="comment-likes">
                                        <li>
                                            <a href="javascript::void"><i class="ri-thumb-up-fill"></i> Helpful
                                            </a>
                                        </li>
                                        <li>
                                            <a href="javascript::void"><i class="ri-thumb-down-fill"></i> Not
                                                helpful
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic-tabs-content-items p-0 bg-transparent shadow-none" id="discussions">
                        <div class="ic-video-reviews">
                            <div class="ic-review-comment pt-0">
                                <div class="ic-textArea ic-discussions-heads">
                                    <img src="" alt="">
                                    <form action="{{ route('student.course.discussion.submit') }}" method="POST"
                                        class="d-flex gap-2 flex-column flex-sm-row">
                                        {{-- @csrf
                                        @method('POST')
                                        <input type="hidden" name="course_id" value="{{ $course->id }}"> --}}
                                        <textarea name="description" id="" class="form-control" placeholder="What’s on your mind?"></textarea>
                                        <button type="submit" class="ic-btn-simple rounded"><i
                                                class="ri-send-plane-2-fill"></i></button>
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
                                            <div class="col-lg-12 col-md-12">
                                                <div class="me-text post">
                                                    <div class="ic-user-review-avatar">
                                                        <img src=""
                                                            alt="">
                                                        <div class="">
                                                            <p class="ic-user-avatar-text">
                                                                adasdasd sdaf asdf sadfasdf </p>
                                                            <p class="user-review-sent">
                                                                <svg width="5" height="5"
                                                                    viewBox="0 0 5 5" fill="none"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <circle cx="2.5" cy="2.5" r="2.5"
                                                                        fill="#00ACB6" />
                                                                </svg>
                                                                <span class="publish-text">
                                                                    10/8/2023 </span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="ic-user-comment-show">
                                                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Ducimus ad eveniet nam mollitia facilis unde molestias aspernatur, hic libero suscipit? Mollitia, aliquam. Architecto sed velit molestiae illo, vel modi adipisci?</p>
                                                        <ul class="comment-likes">
                                                           
                                                            <li>
                                                                <a href="#" class="ic-replay-btn"><i
                                                                        class="ri-reply-line"></i> Reply </a>
                                                            </li>
                                                        </ul>
                                                        <div class="ic-comment-massages">
                                                            <form
                                                                action="{{ route('student.course.discussion.comment.submit') }}"
                                                                method="POST">
                                                                @csrf
                                                                @method('POST')
                                                                <input type="hidden" name="discussion_id"
                                                                    value="sdfsdfdsf">
                                                                <textarea name="comment" id="" class="form-control" placeholder="Type comment"> </textarea>
                                                                <button type="submit" class="ic-commnet-send"><i
                                                                        class="ri-send-plane-2-fill"></i></button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                    <div class="another-text">
                                                        <div class="ic-user-review-avatar">
                                                            <img src="#"
                                                                alt="">
                                                            <div class="">
                                                                <p class="ic-user-avatar-text">
                                                                    asdasdasd asd asd</p>
                                                                <p class="user-review-sent">
                                                                    <svg width="5" height="5"
                                                                        viewBox="0 0 5 5" fill="none"
                                                                        xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="2.5" cy="2.5"
                                                                            r="2.5" fill="#00ACB6" />
                                                                    </svg>
                                                                    <span
                                                                        class="publish-text">sada sdasdfas df</span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="ic-user-comment-show">
                                                            <p>sdfsadfasd asdg</p>
                                                            <ul class="comment-likes">
                                                           
                                                            </ul>
                                                        
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic-tabs-content-items shadow-none" id="note">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="#">Title *</label>
                                        <input type="text" class="form-control" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="#">Note *</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="ic-btn-simple rounded">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- student dashboard --}}
@endsection

@push('scripts')
@endpush
