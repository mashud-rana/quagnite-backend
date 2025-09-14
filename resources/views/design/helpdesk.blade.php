@extends('layouts.master')

@section('content')
    <section class="ic__banner--part ic__reserve--bannerPart ic__helpdesk--banner"
        style="background-image: linear-gradient(0deg, rgba(19, 19, 51, 0.36), rgba(19, 19, 51, 0.36)), url({{ asset('/frontend') }}/images/helpdesk-banner.png);">
        <!-- content -->
        <div class="reserve-container">
            <div class="row">
                <div class="col-lg-8 m-auto">
                    <div class="ic__banner--content ps-0 text-center">
                        <h1>How can we help? </h1>
                        <p>Welcome! You can raise a IT request from the options provided</p>
                        <div class="search-banner d-flex align-items-center">
                            <input type="text" placeholder="Search something…">
                            <button><i class="ri-search-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('/frontend') }}/images/banner-wave.svg" class="ic-bottoms-waves" alt="wave">
        <img src="{{ asset('/frontend') }}/images/helpdesk/help-colud-images.png" class="ic-left-shape" alt="wave">
        <img src="{{ asset('/frontend') }}/images/ebook-right-shape.png" class="ic-ebookRight-shape" alt="wave">
    </section>

    <!-- reserve form -->
    <section class="ic__reserve--part ic__helpdesk--part"
        style="background-image: url({{ asset('/frontend') }}/images/helpdesk-bg.png);">
        <div class="reserve-container">
            <div class="ic__howCan--service">
                <div class="row g-2">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="ic__howCan--items">
                            <img src="{{ asset('/frontend') }}/images/helpdesk/helpdesk-1.png" alt="icon">
                            <p class="sub-title">Account</p>
                            <p>Vivamus condimentum praesent duis himenaeos netus diam gravida tempor tristique</p>
                            <a href="#" class="ic-btn-outline">Find Answer</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="ic__howCan--items">
                            <img src="{{ asset('/frontend') }}/images/helpdesk/helpdesk-2.png" alt="icon">
                            <p class="sub-title">Billing & Payment</p>
                            <p>Vivamus condimentum praesent duis himenaeos netus diam gravida tempor tristique</p>
                            <a href="#" class="ic-btn-outline">Find Answer</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="ic__howCan--items">
                            <img src="{{ asset('/frontend') }}/images/helpdesk/helpdesk-2.png" alt="icon">
                            <p class="sub-title">Project Help</p>
                            <p>Vivamus condimentum praesent duis himenaeos netus diam gravida tempor tristique</p>
                            <a href="#" class="ic-btn-outline">Find Answer</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="ic__howCan--items">
                            <img src="{{ asset('/frontend') }}/images/helpdesk/helpdesk-4.png" alt="icon">
                            <p class="sub-title">Technical Support</p>
                            <p>Vivamus condimentum praesent duis himenaeos netus diam gravida tempor tristique</p>
                            <a href="#" class="ic-btn-outline">Find Answer</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="ic__howCan--items">
                            <img src="{{ asset('/frontend') }}/images/helpdesk/helpdesk-5.png" alt="icon">
                            <p class="sub-title">Certified & License</p>
                            <p>Vivamus condimentum praesent duis himenaeos netus diam gravida tempor tristique</p>
                            <a href="#" class="ic-btn-outline">Find Answer</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="ic__howCan--items">
                            <img src="{{ asset('/frontend') }}/images/helpdesk/helpdesk-6.png" alt="icon">
                            <p class="sub-title">Data & Privacy</p>
                            <p>Vivamus condimentum praesent duis himenaeos netus diam gravida tempor tristique</p>
                            <a href="#" class="ic-btn-outline">Find Answer</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- video section -->
            <div class="helpdesk">
                <img src="{{ asset('/frontend') }}/images/course-check.png" class="ic__helpdesk--doted" class="img-fluid"
                    alt="images">
                <div class="helpdesk--images">
                    <img src="{{ asset('/frontend') }}/images/helpdesk/helpdesk-vide--banner.png" alt="images"
                        class="img-fluid">
                </div>

                <div class="ic__helpdesk--video">
                    <a href="#"><i class="ri-play-fill"></i></a>
                    <h3>Artificial Intelligence is the new big thing in technology</h3>
                    <p>It is a long established fact that a reader will be distracted by the readable content. </p>
                </div>
            </div>
            <!-- video section -->

            <!-- Frequently Ask Questions. -->
            <div class="ic__faq--part">
                <div class="ic_heading--sections">
                    <h2>Frequently Ask <span class="primary">Questions</span>.</h2>
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
            <!-- Frequently Ask Questions. -->
            <!-- blog page -->
            <div class="ic__popular--cloud ic__newAndArticle">
                <div class="course-container">
                    <div class="ic__heading text-center pb-38">
                        <h2 class="black">News & <span class="primary">Article</span></h2>
                    </div>
                    <div class="ic__popular--blog">
                        <div class="row g-3 position-relative z-1">
                            <img src="{{ asset('/frontend') }}/images/course-check.png" class="img-doted"
                                alt="image dot">
                            <div class="col-lg-4 col-sm-6">
                                <a href="blog-details.php">
                                    <div class="ic__popular--items">
                                        <div class="ic__popular--img position-relative">
                                            <img src="{{ asset('/frontend') }}/images/popular-blog-1.png"
                                                class="img-fluid w-100" alt="images">
                                            <span>Work</span>
                                        </div>
                                        <ul class="ic__posted">
                                            <li>
                                                <p>2 years ago </p>
                                            </li>
                                            <li>
                                                <p>30,451 views</p>
                                            </li>
                                            <li>
                                                <p>20:45</p>
                                            </li>
                                        </ul>
                                        <h6 class="black">Review Of Healthy Breakfast
                                            Meals For Energy Boost</h6>
                                        <p class="color-deep-gray text">There are many variations of passages of Lorem Ipsum available
                                        </p>

                                        <a href="#" class="ic__popular-read">Read More...</a>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <a href="blog-details.php">
                                    <div class="ic__popular--items">
                                        <div class="ic__popular--img position-relative">
                                            <img src="{{ asset('/frontend') }}/images/popular-blog-1.png"
                                                class="img-fluid w-100" alt="images">
                                            <span>Work</span>
                                        </div>
                                        <ul class="ic__posted">
                                            <li>
                                                <p>2 years ago </p>
                                            </li>
                                            <li>
                                                <p>30,451 views</p>
                                            </li>
                                            <li>
                                                <p>20:45</p>
                                            </li>
                                        </ul>
                                        <h6 class="black">Review Of Healthy Breakfast
                                            Meals For Energy Boost</h6>
                                        <p class="color-deep-gray text">There are many variations of passages of Lorem Ipsum available
                                        </p>
                                        <a href="#" class="ic__popular-read">Read More...</a>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-sm-6">
                                <a href="blog-details.php">
                                    <div class="ic__popular--items">
                                        <div class="ic__popular--img position-relative">
                                            <img src="{{ asset('/frontend') }}/images/popular-blog-1.png"
                                                class="img-fluid w-100" alt="images">
                                            <span>Work</span>
                                        </div>
                                        <ul class="ic__posted">
                                            <li>
                                                <p>2 years ago </p>
                                            </li>
                                            <li>
                                                <p>30,451 views</p>
                                            </li>
                                            <li>
                                                <p>20:45</p>
                                            </li>
                                        </ul>
                                        <h6 class="black">Review Of Healthy Breakfast
                                            Meals For Energy Boost</h6>
                                        <p class="color-deep-gray text">There are many variations of passages of Lorem Ipsum available
                                        </p>

                                        <a href="#" class="ic__popular-read">Read More...</a>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- ic_paggination -->
                        <div class="ic_paggination">
                            <div class="">
                                <div class="d-flex justify-content-center">

                                    <ul class="p-0 d-flex flex-wrap">
                                        <li class="page_item ">
                                            <a class="page_link active" href="#">1</a>
                                        </li>
                                        <li class="page_item">
                                            <a class="page_link" href="#">2</a>
                                        </li>
                                        <li class="page_item">
                                            <a class="page_link" href="#">3</a>
                                        </li>
                                        <li class="page_item">
                                            <a class="page_link" href="#">
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
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
