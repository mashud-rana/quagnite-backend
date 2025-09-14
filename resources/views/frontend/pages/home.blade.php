@extends('frontend.layouts.new-master')

@section('content')

<!-- banner part start -->
<section class="ic__banner--part" style="background-image: linear-gradient(0deg, rgba(19, 19, 51, 0.45), rgba(19, 19, 51, 0.45)), url({{ asset('/frontend')}}/images/banner-images.png);">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="ic__banner--content">
                    <h1>Welcome To MCdns Learning, Your Online Training <br> Provider.</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                        of type and scrambled it to make a type specimen book.</p>
                    <div class="ic__buttons-wrapper">
                        <a href="#" class="ic__banner-btn">Enroll Now</a>
                        <a href="https://vimeo.com/115041822" class="btn-watch ic-play-button">
                            <div class="circle">
                                <i class="ri-play-fill"></i>
                            </div> Watch INTRO VIDEO
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="{{ asset('/frontend')}}/images/banner-wave.svg" class="ic-bottoms-waves" alt="wave">
    <img src="{{ asset('/frontend')}}/images/banner-shape.svg" class="ic-left-shape" alt="wave">
    <img src="{{ asset('/frontend')}}/images/shape-right.png" class="ic-right-shape" alt="wave">
</section>
<!-- banner part end -->

<!-- about part Start -->
<section class="ic__about--part" style="background-image: url({{ asset('/frontend')}}/images/about-culture-bg.png);">
    <div class="container position-relative ic-section-space-bottom-80">
        <div class="row align-items-center gx-xl-5">
            <div class="col-lg-6">
                <div class="ic__about--images">
                    <img src="{{ asset('/frontend')}}/images/about-images.png" class="img-fluid" alt="about images">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="ic__content--wrapper">
                    <p class="top-heading">About Us</p>
                    <h2 class="heading">High Quality <span>Services</span></h2>
                    <h6 class="sub-heading">It is a long established fact that a reader will be distracted by the
                        readable content. </h6>
                    <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                        Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                        printer took a galley of type and scrambled it to make a type specimen book.</p>
                    <div class="buttons--wrapper">
                        <a href="#" class="ic-btn">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('/frontend')}}/images/calender.png" class="calender" alt="images">
        <img src="{{ asset('/frontend')}}/images/calender-video.png" class="calender-video" alt="images">
    </div>
    <div class="ic__our--mission ic-section-space-bottom-80">
        <div class="container">
            <div class="ic__our--content"
                style="background-image: url({{ asset('/frontend')}}/images/our-mission-bg.png);">
                <div class="row">
                    <div class="col-xxl-6 col-xl-7 col-lg-12">
                        <div class="ic__our--leftPart">
                            <p class="top-heading">Our vision</p>
                            <h2 class="heading">Our Mission</h2>
                            <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting
                                industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                when an unknown printer took a galley of type and scrambled it to make a type specimen
                                book.</p>
                            <div class="planing-work">
                                <div class="planing--logo">
                                    <img src="{{ asset('/frontend')}}/images/wallet.png" alt="icon">
                                </div>
                                <div class="planing-content">
                                    <h5>Planing Work</h5>
                                    <p>There are many variations of passages of Lorem Ipsum available.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6 col-xl-5 position-relative">
                        <div class="ic__our--images">
                            <img src="{{ asset('/frontend')}}/images/our-mission.png" class="img-fluid" alt="images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="ic__culture--part ic-section-space-bottom">
        <div class="container">
            <div class="row gx-3">
                <div class="col-lg-6">
                    <div class="ic__culture--leftPart">
                        <img src="{{ asset('/frontend')}}/images/our-calture.png" class="img-fluid" alt="images">
                    </div>
                </div>
                <div class="col-lg-6 position-relative">
                    <div class="ic__culture--rightPart">
                        <p class="top-heading">culture</p>
                        <h2 class="heading">Our <span>culture</span></h2>
                        <p class="paragraph">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of type and scrambled it to make a type specimen book. Lorem
                            Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.Lorem Ipsum is simply dummy
                            text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard
                            dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                            it to make a type specimen book.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- about part end -->

<!-- project dashboard part start -->
<section class="ic__project--dashboard"
    style="background-image:  url({{ asset('/frontend')}}/images/project-dashboard.png);">
    <img src="{{ asset('/frontend')}}/images/banner-wave.svg" class="ic-bottoms-waves" alt="wave">
    <img src="{{ asset('/frontend')}}/images/project-dashboard-shape.png" class="ic-project-shape" alt="wave">
    <div class="container">
        <div class="ic__heading text-center">
            <h2 class="white">Students Project Dashboard</h2>
            <p class="white">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
        </div>
        <div class="ic__project--content position-relative">
            <img src="{{ asset('/frontend')}}/images/dashboard-images.png" class="img-fluid" alt="images">
            <img src="{{ asset('/frontend')}}/images/ic-cursor.png" class="cursor" alt="images">
        </div>
    </div>
</section>
<!-- project dashboard part end -->

<!-- feature part start -->
<section class="ic__feature--part position-relative"
    style="background-image: url({{ asset('/frontend')}}/images/feature-bg.png);">
    <img src="{{ asset('/frontend')}}/images/strategies--bottom-shape.png" class="img-fluid ic__feature--bottomShape"
        alt="shape">
    <img src="{{ asset('/frontend')}}/images/strategies-right-shape.png" class="img-fluid ic__feature--rightShape"
        alt="shape">
    <img src="{{ asset('/frontend')}}/images/strategies-left-shape.png" class="img-fluid ic__feature--leftShape"
        alt="shape">
    <div class="container">
        <div class="ic__feature-heading">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <p>Features</p>
                    <h2>Benefits of Learning <br>
                        with MCdns</h2>
                </div>
                <div class="col-lg-8">
                    <div class="ic__feature--sendMessage">
                        <a href="#" class="ic-btn-outline">Send Message</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="ic__feature--content owl-carousel owl-theme">
            <div class="ic__feature--items">
                <div class="ic__feature-text">
                    <h6>
                        Certified Instructors
                    </h6>
                    <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M0 24C0 37.254 10.75 48 24.008 48C26.17 48 28.256 47.688 30.248 47.152L28.918 43.364C27.344 43.764 25.704 44 24.008 44C12.976 44 4.002 35.028 4.002 24C4.002 12.972 12.976 4 24.008 4C28.478 4 32.594 5.488 35.926 7.978L31.826 12.076L45.856 14.784L43.146 0.758L38.778 5.124C34.706 1.928 29.588 0 24.008 0C10.75 0 0 10.746 0 24ZM22 28V12H26V24H36V28H22ZM47.704 27.684L43.708 27.366C43.506 28.548 43.2 29.692 42.8 30.794L46.4 32.604C47.002 31.036 47.44 29.392 47.704 27.684ZM38.612 43.018L35.786 40.132C34.814 40.844 33.774 41.468 32.676 41.998L34.014 45.796C35.656 45.042 37.196 44.108 38.612 43.018ZM38.766 37.456C39.626 36.514 40.394 35.492 41.064 34.4L44.652 36.206C43.772 37.69 42.74 39.068 41.574 40.322L38.766 37.456ZM43.394 19.282H47.546C47.83 20.71 47.98 22.188 48 23.698L43.97 23.376C43.916 21.97 43.72 20.604 43.394 19.282Z"
                            fill="#06738A" />
                    </svg>
                </div>
                <p>We are team and we are Great. And Simple. Yo! Wath the showreel.</p>
            </div>
            <div class="ic__feature--items">
                <div class="ic__feature-text">
                    <h6>
                        Hybrid Training
                    </h6>
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" clip-rule="evenodd"
                            d="M37.8901 0C38.5518 0 39.2251 0.0233333 39.9134 0.07C39.9718 0.836667 40.0001 1.58667 40.0001 2.32C40.0001 16.5 29.3518 24.36 20.3051 27.6L12.4268 19.7217C15.3951 10.9283 23.5568 0 37.8901 0ZM16.3135 18.8949L21.1185 23.6999C29.9101 19.9149 36.2268 12.9866 36.6451 3.36161C24.1318 3.98661 18.3485 14.1299 16.3135 18.8949ZM30.2369 26.2634C29.3252 26.8851 28.4202 27.4468 27.5235 27.9484C27.2119 29.4334 26.4202 31.0184 25.2719 32.3684C25.2685 31.4084 25.0019 30.4418 24.5335 29.4718C23.7085 29.8468 22.9235 30.1684 22.1769 30.4518C23.2769 33.3001 22.1569 35.4034 20.6519 37.3751C22.8119 37.2118 25.0785 36.1551 26.8652 34.3668C28.7902 32.4418 30.1435 29.6618 30.2369 26.2634ZM7.64986 14.7467C8.60652 14.7517 9.57152 15.015 10.5365 15.4817C10.1799 16.2717 9.85819 17.06 9.56986 17.845C6.72152 16.7417 4.61819 17.8617 2.64486 19.3683C2.80819 17.21 3.86652 14.94 5.65152 13.155C7.57819 11.2283 10.3599 9.87499 13.7582 9.78333C13.1382 10.6767 12.5499 11.585 12.0265 12.505C10.5565 12.825 8.98819 13.6117 7.64986 14.7467ZM23.4335 16.5867C22.7818 15.935 22.7818 14.8817 23.4335 14.23C24.0852 13.5783 25.1385 13.5783 25.7902 14.23C26.4418 14.8833 26.4418 15.9367 25.7902 16.5883C25.1385 17.24 24.0835 17.2383 23.4335 16.5867ZM26.9683 8.33503C28.2699 7.03503 30.3816 7.03503 31.6816 8.33503C32.9833 9.63836 32.9833 11.75 31.6833 13.05C30.3816 14.3517 28.2699 14.3517 26.9683 13.05C25.6666 11.75 25.6666 9.63669 26.9683 8.33503ZM28.5016 11.5201C28.0466 11.0651 28.0466 10.3234 28.5016 9.87006C28.9533 9.41506 29.6966 9.41506 30.1516 9.87006C30.605 10.3234 30.6033 11.0651 30.1516 11.5201C29.695 11.9734 28.955 11.9734 28.5016 11.5201ZM0 40.0001C7.585 39.6167 14.77 35.6201 17.2567 29.2701L15.93 27.9401C11.39 34.8067 6.74667 35.3551 4.63333 35.3801C4.65333 33.3317 5.19 29.0134 12.4083 24.4217L11.0667 23.0784C4.42833 25.5401 0.365 32.8517 0 40.0001Z"
                            fill="#06738A" />
                    </svg>
                </div>
                <p>We are team and we are Great. And Simple. Yo! Wath the showreel.</p>
            </div>
            <div class="ic__feature--items">
                <div class="ic__feature-text">
                    <h6>
                        24/7 Live Support
                    </h6>
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path
                            d="M37.1912 17.4394C37.0381 13.0763 35.2712 8.99627 32.1687 5.89377C28.9169 2.64127 24.595 0.850647 20 0.850647C10.7194 0.850647 3.13625 8.23752 2.80937 17.4394C1.39312 18.0688 0.401871 19.4863 0.401871 21.1338V25.6725C0.401871 27.9013 2.215 29.715 4.44437 29.715C5.88687 29.715 7.06 28.5419 7.06 27.0994V19.7063C7.06 18.3519 6.02125 17.2475 4.70062 17.1163C5.18812 9.0994 11.8619 2.72565 20 2.72565C24.095 2.72565 27.9456 4.3219 30.8437 7.22002C33.505 9.88127 35.0625 13.35 35.2969 17.1169C33.9775 17.2494 32.9406 18.3531 32.9406 19.7063V27.0988C32.9406 28.4644 33.9956 29.5756 35.3319 29.6913V31.5594C35.3319 33.6631 33.62 35.3744 31.5162 35.3744H28.6906C28.5519 34.9781 28.3344 34.6119 28.0294 34.3081C27.495 33.7713 26.7825 33.4756 26.0237 33.4756H23.1112C22.6931 33.4756 22.2919 33.5644 21.9244 33.7356C20.9219 34.1963 20.2744 35.2075 20.2744 36.3119C20.2744 37.0706 20.57 37.7831 21.1056 38.3163C21.6412 38.8531 22.3537 39.1488 23.1112 39.1488H26.0237C27.2312 39.1488 28.2956 38.3681 28.6925 37.2494H31.5162C34.6544 37.2494 37.2069 34.6969 37.2069 31.5594V29.3575C38.6144 28.7244 39.5981 27.3119 39.5981 25.6713V21.1325C39.5981 19.4863 38.6069 18.0688 37.1912 17.4394V17.4394ZM5.18437 19.7063V27.0988C5.18437 27.5069 4.8525 27.8394 4.44375 27.8394C3.24875 27.8394 2.27625 26.8669 2.27625 25.6719V21.1331C2.27625 19.9375 3.24875 18.9656 4.44375 18.9656C4.8525 18.9656 5.18437 19.2981 5.18437 19.7063V19.7063ZM26.9644 36.5131C26.8712 36.9544 26.475 37.275 26.0231 37.275H23.1106C22.8544 37.275 22.6137 37.175 22.43 36.9913C22.2487 36.8106 22.1487 36.5694 22.1487 36.3131C22.1487 35.9388 22.3681 35.5969 22.7119 35.4388C22.8344 35.3813 22.9687 35.3519 23.1106 35.3519H26.0231C26.2794 35.3519 26.52 35.4513 26.7031 35.635C26.8844 35.8156 26.9844 36.0569 26.9844 36.3131C26.985 36.3819 26.9775 36.4506 26.9644 36.5131V36.5131ZM37.7231 25.6719C37.7231 26.8669 36.7506 27.8394 35.5556 27.8394C35.1475 27.8394 34.815 27.5075 34.815 27.0988V19.7063C34.815 19.2981 35.1469 18.9656 35.5556 18.9656C36.7506 18.9656 37.7231 19.9381 37.7231 21.1331V25.6719Z"
                            fill="#06738A" />
                        <path
                            d="M26.0706 25.995C28.2613 25.995 30.0431 24.2125 30.0431 22.0225V13.9282C30.0431 12.8694 29.6294 11.8719 28.8781 11.1207C28.1269 10.3694 27.13 9.95566 26.0706 9.95566H13.9294C11.7388 9.95566 9.95688 11.7375 9.95688 13.9282V22.0225C9.95688 24.2132 11.7388 25.995 13.9294 25.995H14.0038V28.0925C14.0038 28.8925 14.4806 29.6025 15.2181 29.9019C15.4563 29.9975 15.7038 30.045 15.9488 30.045C16.4594 30.045 16.9569 29.8425 17.3213 29.4657L20.8106 25.995H26.0706ZM19.7638 24.3925L15.9875 28.1482C15.9706 28.1657 15.9581 28.1788 15.9225 28.1632C15.8794 28.1457 15.8794 28.1175 15.8794 28.0925V25.0575C15.8794 24.54 15.46 24.12 14.9419 24.12H13.93C12.7731 24.12 11.8325 23.1788 11.8325 22.0225V13.9282C11.8325 12.7713 12.7731 11.8307 13.93 11.8307H26.0713C26.63 11.8307 27.1556 12.0494 27.5531 12.4463C27.9506 12.8438 28.1688 13.37 28.1688 13.9282V22.0225C28.1688 23.1794 27.2275 24.12 26.0713 24.12H20.425C20.1769 24.12 19.9394 24.2182 19.7638 24.3925V24.3925Z"
                            fill="#06738A" />
                        <path
                            d="M15.4456 16.7419C14.6831 16.7419 14.0625 17.3631 14.0625 18.125C14.0625 18.8869 14.6837 19.5081 15.4456 19.5081C16.2087 19.5081 16.83 18.8869 16.83 18.125C16.83 17.3631 16.2094 16.7419 15.4456 16.7419Z"
                            fill="#06738A" />
                        <path
                            d="M19.9994 16.7419C19.2369 16.7419 18.6162 17.3631 18.6162 18.125C18.6162 18.8869 19.2375 19.5081 19.9994 19.5081C20.7631 19.5081 21.3837 18.8869 21.3837 18.125C21.3837 17.3631 20.7631 16.7419 19.9994 16.7419Z"
                            fill="#06738A" />
                        <path
                            d="M24.5531 16.7419C23.7906 16.7419 23.17 17.3631 23.17 18.125C23.17 18.8869 23.7912 19.5081 24.5531 19.5081C25.3162 19.5081 25.9375 18.8869 25.9375 18.125C25.9375 17.3631 25.3162 16.7419 24.5531 16.7419Z"
                            fill="#06738A" />
                    </svg>
                </div>
                <p>We are team and we are Great. And Simple. Yo! Wath the showreel.</p>
            </div>
            <div class="ic__feature--items">
                <div class="ic__feature-text">
                    <h6>
                        Secure Connection
                    </h6>
                    <svg width="40" height="40" viewBox="0 0 40 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <g clip-path="url(#clip0_860_4785)">
                            <path
                                d="M28.7031 12.0969C28.6936 11.9377 28.6235 11.7882 28.5073 11.679C28.3911 11.5698 28.2376 11.5091 28.0781 11.5094C28.0438 11.5094 24.6406 11.4875 22.8406 10.825C21.9215 10.4357 21.1162 9.81964 20.5 9.03438C20.4419 8.95556 20.3661 8.8915 20.2787 8.84734C20.1913 8.80319 20.0948 8.78018 19.9969 8.78018C19.899 8.78018 19.8024 8.80319 19.715 8.84734C19.6276 8.8915 19.5518 8.95556 19.4938 9.03438C18.88 9.82212 18.074 10.4387 17.1531 10.825C15.3594 11.4875 11.95 11.5094 11.9156 11.5094C11.7562 11.5091 11.6026 11.5698 11.4864 11.679C11.3702 11.7882 11.3002 11.9377 11.2906 12.0969C11.2219 13.1656 10.6656 22.6125 12.4906 25.0656C13.6313 26.6 15.4719 27.7375 16.95 28.65C18.0344 29.3156 19.375 30.1438 19.375 30.5969C19.375 30.7626 19.4409 30.9216 19.5581 31.0388C19.6753 31.156 19.8342 31.2219 20 31.2219C20.1658 31.2219 20.3247 31.156 20.4419 31.0388C20.5592 30.9216 20.625 30.7626 20.625 30.5969C20.625 30.1438 21.9656 29.3156 23.0438 28.65C24.5219 27.7375 26.3625 26.6 27.5 25.0656C29.3281 22.6125 28.7719 13.1656 28.7031 12.0969ZM26.5156 24.3188C25.5156 25.6625 23.8625 26.6844 22.4031 27.5875C21.4219 28.1906 20.5625 28.7219 20.0156 29.2875C19.4688 28.7219 18.6094 28.1906 17.6281 27.5875C16.1688 26.6844 14.5031 25.6625 13.5156 24.3188C12.2844 22.6625 12.3625 15.8813 12.5281 12.7563C13.6406 12.7188 16.0688 12.575 17.6063 12.0063C18.5156 11.6386 19.3329 11.0753 20 10.3563C20.6726 11.0738 21.4953 11.634 22.4094 11.9969C23.9469 12.5656 26.375 12.7094 27.4875 12.7469C27.6531 15.8781 27.7313 22.6625 26.5 24.3188H26.5156Z"
                                fill="#06738A" />
                            <path
                                d="M23.5344 5.21561C23.6585 5.21633 23.7801 5.18007 23.8835 5.11144C23.987 5.04282 24.0676 4.94494 24.1152 4.83029C24.1628 4.71563 24.1752 4.5894 24.1508 4.46769C24.1264 4.34597 24.0663 4.23428 23.9781 4.14686C23.4558 3.62434 22.8356 3.20984 22.153 2.92704C21.4704 2.64424 20.7388 2.49869 20 2.49869C19.2612 2.49869 18.5296 2.64424 17.847 2.92704C17.1644 3.20984 16.5442 3.62434 16.0219 4.14686C15.9638 4.20493 15.9177 4.27387 15.8863 4.34974C15.8549 4.42561 15.8387 4.50693 15.8387 4.58905C15.8387 4.67117 15.8549 4.75249 15.8863 4.82836C15.9177 4.90423 15.9638 4.97317 16.0219 5.03124C16.1392 5.14851 16.2982 5.2144 16.4641 5.2144C16.5462 5.2144 16.6275 5.19822 16.7034 5.16679C16.7792 5.13537 16.8482 5.08931 16.9062 5.03124C17.3125 4.62493 17.7948 4.30263 18.3257 4.08274C18.8565 3.86285 19.4254 3.74967 20 3.74967C20.5746 3.74967 21.1435 3.86285 21.6743 4.08274C22.2052 4.30263 22.6875 4.62493 23.0938 5.03124C23.2104 5.14861 23.3689 5.21491 23.5344 5.21561Z"
                                fill="#06738A" />
                            <path
                                d="M17.7906 5.91563C17.6734 6.0329 17.6075 6.19196 17.6075 6.35782C17.6075 6.52367 17.6734 6.68273 17.7906 6.8C17.9079 6.91728 18.067 6.98316 18.2328 6.98316C18.3987 6.98316 18.5577 6.91728 18.675 6.8C19.0266 6.44888 19.5031 6.25165 20 6.25165C20.4969 6.25165 20.9734 6.44888 21.325 6.8C21.3834 6.85793 21.4527 6.90376 21.5288 6.93486C21.605 6.96596 21.6865 6.98173 21.7688 6.98125C21.9338 6.98139 22.0922 6.91623 22.2094 6.8C22.2675 6.74196 22.3136 6.67303 22.345 6.59715C22.3765 6.52128 22.3927 6.43995 22.3927 6.35782C22.3927 6.27568 22.3765 6.19435 22.345 6.11848C22.3136 6.0426 22.2675 5.97367 22.2094 5.91563C21.6234 5.32978 20.8286 5.00067 20 5.00067C19.1714 5.00067 18.3767 5.32978 17.7906 5.91563Z"
                                fill="#06738A" />
                            <path
                                d="M15.1375 3.26251C15.776 2.62376 16.534 2.11706 17.3683 1.77136C18.2026 1.42566 19.0969 1.24772 20 1.24772C20.9031 1.24772 21.7974 1.42566 22.6317 1.77136C23.466 2.11706 24.2241 2.62376 24.8625 3.26251C24.9821 3.3649 25.1359 3.4184 25.2932 3.41233C25.4505 3.40625 25.5997 3.34104 25.711 3.22973C25.8223 3.11842 25.8875 2.96921 25.8936 2.81191C25.8997 2.65462 25.8461 2.50082 25.7438 2.38126C24.2201 0.858436 22.1542 0.00299072 20 0.00299072C17.8459 0.00299072 15.7799 0.858436 14.2563 2.38126C14.1539 2.50082 14.1004 2.65462 14.1064 2.81191C14.1125 2.96921 14.1777 3.11842 14.289 3.22973C14.4003 3.34104 14.5496 3.40625 14.7068 3.41233C14.8641 3.4184 15.0179 3.3649 15.1375 3.26251Z"
                                fill="#06738A" />
                            <path
                                d="M23.5219 17.1L19.0438 21.5625L16.4781 19C16.4212 18.9374 16.3521 18.8869 16.275 18.8518C16.198 18.8167 16.1146 18.7976 16.03 18.7956C15.9454 18.7937 15.8612 18.809 15.7826 18.8406C15.7041 18.8721 15.6328 18.9194 15.573 18.9793C15.5132 19.0393 15.4663 19.1108 15.435 19.1895C15.4037 19.2681 15.3887 19.3523 15.3909 19.437C15.3932 19.5216 15.4126 19.6049 15.448 19.6818C15.4834 19.7587 15.534 19.8276 15.5969 19.8844L18.6031 22.8875C18.7202 23.0039 18.8786 23.0692 19.0438 23.0692C19.2089 23.0692 19.3673 23.0039 19.4844 22.8875L24.4031 17.9812C24.4686 17.9252 24.5217 17.8563 24.5592 17.7787C24.5967 17.7012 24.6178 17.6167 24.6211 17.5307C24.6245 17.4446 24.61 17.3587 24.5785 17.2785C24.5471 17.1983 24.4994 17.1255 24.4385 17.0646C24.3776 17.0037 24.3048 16.956 24.2246 16.9246C24.1444 16.8932 24.0585 16.8787 23.9725 16.882C23.8864 16.8853 23.8019 16.9064 23.7244 16.9439C23.6469 16.9814 23.5779 17.0346 23.5219 17.1Z"
                                fill="#06738A" />
                            <path
                                d="M20.625 35.0813V33.125C20.625 32.9592 20.5592 32.8003 20.4419 32.6831C20.3247 32.5658 20.1658 32.5 20 32.5C19.8342 32.5 19.6753 32.5658 19.5581 32.6831C19.4409 32.8003 19.375 32.9592 19.375 33.125V35.0813C18.7858 35.2334 18.2724 35.5951 17.9309 36.0988C17.5894 36.6024 17.4433 37.2132 17.5199 37.8169C17.5966 38.4205 17.8908 38.9755 18.3474 39.3777C18.8039 39.7799 19.3915 40.0019 20 40.0019C20.6085 40.0019 21.1961 39.7799 21.6527 39.3777C22.1092 38.9755 22.4034 38.4205 22.4801 37.8169C22.5568 37.2132 22.4106 36.6024 22.0691 36.0988C21.7276 35.5951 21.2142 35.2334 20.625 35.0813ZM20 38.75C19.7528 38.75 19.5111 38.6767 19.3055 38.5393C19.1 38.402 18.9398 38.2068 18.8452 37.9784C18.7505 37.7499 18.7258 37.4986 18.774 37.2561C18.8223 37.0137 18.9413 36.7909 19.1161 36.6161C19.2909 36.4413 19.5137 36.3222 19.7561 36.274C19.9986 36.2258 20.25 36.2505 20.4784 36.3452C20.7068 36.4398 20.902 36.6 21.0393 36.8055C21.1767 37.0111 21.25 37.2528 21.25 37.5C21.25 37.8315 21.1183 38.1495 20.8839 38.3839C20.6495 38.6183 20.3315 38.75 20 38.75Z"
                                fill="#06738A" />
                            <path
                                d="M9.375 20.625C9.54076 20.625 9.69973 20.5592 9.81694 20.4419C9.93415 20.3247 10 20.1658 10 20C10 19.8342 9.93415 19.6753 9.81694 19.5581C9.69973 19.4409 9.54076 19.375 9.375 19.375H4.91875C4.76663 18.7858 4.40486 18.2724 3.90125 17.9309C3.39764 17.5894 2.78676 17.4433 2.18313 17.5199C1.57949 17.5966 1.02454 17.8908 0.622302 18.3474C0.220059 18.8039 -0.00186157 19.3915 -0.00186157 20C-0.00186157 20.6085 0.220059 21.1961 0.622302 21.6527C1.02454 22.1092 1.57949 22.4034 2.18313 22.4801C2.78676 22.5568 3.39764 22.4106 3.90125 22.0691C4.40486 21.7276 4.76663 21.2142 4.91875 20.625H9.375ZM2.5 21.25C2.25278 21.25 2.0111 21.1767 1.80554 21.0393C1.59998 20.902 1.43976 20.7068 1.34515 20.4784C1.25054 20.25 1.22579 19.9986 1.27402 19.7561C1.32225 19.5137 1.4413 19.2909 1.61612 19.1161C1.79094 18.9413 2.01366 18.8223 2.25614 18.774C2.49862 18.7258 2.74995 18.7505 2.97836 18.8452C3.20677 18.9398 3.40199 19.1 3.53934 19.3055C3.67669 19.5111 3.75 19.7528 3.75 20C3.75 20.3315 3.61831 20.6495 3.38389 20.8839C3.14947 21.1183 2.83152 21.25 2.5 21.25Z"
                                fill="#06738A" />
                            <path
                                d="M37.5 17.5C36.9461 17.5004 36.408 17.6848 35.9702 18.0241C35.5324 18.3635 35.2197 18.8387 35.0813 19.375H30.625C30.4592 19.375 30.3003 19.4408 30.1831 19.5581C30.0658 19.6753 30 19.8342 30 20C30 20.1658 30.0658 20.3247 30.1831 20.4419C30.3003 20.5592 30.4592 20.625 30.625 20.625H35.0813C35.1982 21.0778 35.4397 21.4888 35.7785 21.8111C36.1173 22.1335 36.5398 22.3544 36.9978 22.4487C37.4559 22.543 37.9312 22.5069 38.3698 22.3445C38.8084 22.1821 39.1926 21.9 39.4789 21.5302C39.7651 21.1604 39.9419 20.7177 39.9891 20.2524C40.0363 19.7871 39.9521 19.3179 39.7459 18.8981C39.5398 18.4783 39.2201 18.1248 38.8231 17.8776C38.426 17.6305 37.9677 17.4997 37.5 17.5ZM37.5 21.25C37.2528 21.25 37.0111 21.1767 36.8055 21.0393C36.6 20.902 36.4398 20.7068 36.3452 20.4784C36.2505 20.2499 36.2258 19.9986 36.274 19.7561C36.3222 19.5137 36.4413 19.2909 36.6161 19.1161C36.7909 18.9413 37.0137 18.8223 37.2561 18.774C37.4986 18.7258 37.7499 18.7505 37.9784 18.8452C38.2068 18.9398 38.402 19.1 38.5393 19.3055C38.6767 19.5111 38.75 19.7528 38.75 20C38.75 20.3315 38.6183 20.6495 38.3839 20.8839C38.1495 21.1183 37.8315 21.25 37.5 21.25Z"
                                fill="#06738A" />
                            <path
                                d="M5.85937 9.39374C6.25124 9.78469 6.76177 10.0345 7.31092 10.1041C7.86007 10.1737 8.41678 10.059 8.89375 9.77811L9.71875 10.6031C9.83593 10.7193 9.99433 10.7845 10.1594 10.7844C10.2829 10.7845 10.4036 10.748 10.5064 10.6795C10.6092 10.611 10.6894 10.5136 10.7368 10.3996C10.7843 10.2856 10.797 10.1601 10.7732 10.0389C10.7494 9.91774 10.6902 9.80632 10.6031 9.71874L9.77812 8.89374C10.0158 8.49085 10.1356 8.02938 10.124 7.56178C10.1125 7.09418 9.96994 6.6392 9.71266 6.24856C9.45539 5.85793 9.09369 5.5473 8.66867 5.35199C8.24365 5.15669 7.77236 5.08453 7.30838 5.14373C6.8444 5.20293 6.40633 5.39111 6.04396 5.68688C5.6816 5.98265 5.40949 6.37415 5.25854 6.81687C5.1076 7.25959 5.08389 7.73578 5.1901 8.19131C5.29631 8.64684 5.52819 9.06343 5.85937 9.39374ZM6.74062 6.74061C6.85671 6.62439 6.99457 6.53219 7.14632 6.46929C7.29807 6.40638 7.46073 6.374 7.625 6.374C7.78927 6.374 7.95193 6.40638 8.10367 6.46929C8.25542 6.53219 8.39328 6.62439 8.50937 6.74061C8.74392 6.97516 8.87569 7.29328 8.87569 7.62499C8.87569 7.95669 8.74392 8.27481 8.50937 8.50936C8.27482 8.74391 7.9567 8.87568 7.625 8.87568C7.29329 8.87568 6.97517 8.74391 6.74062 8.50936C6.6244 8.39327 6.5322 8.25541 6.4693 8.10366C6.40639 7.95192 6.37401 7.78926 6.37401 7.62499C6.37401 7.46072 6.40639 7.29806 6.4693 7.14631C6.5322 6.99456 6.6244 6.8567 6.74062 6.74061Z"
                                fill="#06738A" />
                            <path
                                d="M34.1406 30.6062C33.7488 30.2153 33.2382 29.9654 32.6891 29.8959C32.1399 29.8263 31.5832 29.941 31.1063 30.2219L28.0969 27.2125C27.9796 27.0952 27.8205 27.0293 27.6547 27.0293C27.4888 27.0293 27.3298 27.0952 27.2125 27.2125C27.0952 27.3298 27.0293 27.4888 27.0293 27.6547C27.0293 27.8205 27.0952 27.9796 27.2125 28.0969L30.2219 31.1062C29.9842 31.5091 29.8644 31.9706 29.876 32.4382C29.8875 32.9058 30.0301 33.3608 30.2873 33.7514C30.5446 34.142 30.9063 34.4527 31.3313 34.648C31.7563 34.8433 32.2276 34.9154 32.6916 34.8562C33.1556 34.797 33.5937 34.6089 33.956 34.3131C34.3184 34.0173 34.5905 33.6258 34.7415 33.1831C34.8924 32.7404 34.9161 32.2642 34.8099 31.8087C34.7037 31.3531 34.4718 30.9365 34.1406 30.6062ZM33.2594 33.2594C33.1433 33.3756 33.0054 33.4678 32.8537 33.5307C32.7019 33.5936 32.5393 33.626 32.375 33.626C32.2107 33.626 32.0481 33.5936 31.8963 33.5307C31.7446 33.4678 31.6067 33.3756 31.4906 33.2594C31.2561 33.0248 31.1243 32.7067 31.1243 32.375C31.1243 32.0433 31.2561 31.7252 31.4906 31.4906C31.7252 31.2561 32.0433 31.1243 32.375 31.1243C32.7067 31.1243 33.0248 31.2561 33.2594 31.4906C33.3756 31.6067 33.4678 31.7446 33.5307 31.8963C33.5936 32.0481 33.626 32.2107 33.626 32.375C33.626 32.5393 33.5936 32.7019 33.5307 32.8537C33.4678 33.0054 33.3756 33.1433 33.2594 33.2594Z"
                                fill="#06738A" />
                            <path
                                d="M11.8094 27.3094L8.89375 30.2219C8.36957 29.9129 7.75071 29.8058 7.15316 29.9204C6.55561 30.0351 6.0204 30.3638 5.64784 30.8448C5.27527 31.3259 5.09093 31.9263 5.12936 32.5335C5.16779 33.1408 5.42636 33.7132 5.8566 34.1434C6.28684 34.5736 6.85922 34.8322 7.46646 34.8706C8.0737 34.9091 8.67411 34.7247 9.15516 34.3522C9.63621 33.9796 9.96488 33.4444 10.0796 32.8468C10.1942 32.2493 10.0871 31.6304 9.77813 31.1063L12.6906 28.1906C12.7561 28.1346 12.8092 28.0656 12.8467 27.9881C12.8842 27.9106 12.9053 27.8261 12.9086 27.74C12.912 27.654 12.8974 27.5681 12.866 27.4879C12.8346 27.4077 12.7869 27.3349 12.726 27.274C12.6651 27.2131 12.5923 27.1654 12.5121 27.134C12.4319 27.1026 12.346 27.0881 12.26 27.0914C12.1739 27.0947 12.0894 27.1158 12.0119 27.1533C11.9344 27.1908 11.8654 27.2439 11.8094 27.3094ZM8.50938 33.2469C8.27483 33.4814 7.95671 33.6132 7.625 33.6132C7.2933 33.6132 6.97518 33.4814 6.74063 33.2469C6.50608 33.0123 6.37431 32.6942 6.37431 32.3625C6.37431 32.0308 6.50608 31.7127 6.74063 31.4781C6.85676 31.362 6.99464 31.2699 7.14638 31.207C7.29812 31.1442 7.46076 31.1118 7.625 31.1118C7.78925 31.1118 7.95188 31.1442 8.10362 31.207C8.25536 31.2699 8.39324 31.362 8.50938 31.4781C8.62551 31.5943 8.71764 31.7321 8.78049 31.8839C8.84335 32.0356 8.8757 32.1983 8.8757 32.3625C8.8757 32.5267 8.84335 32.6894 8.78049 32.8411C8.71764 32.9929 8.62551 33.1307 8.50938 33.2469Z"
                                fill="#06738A" />
                            <path
                                d="M29.8031 10.8219C29.9682 10.822 30.1266 10.7568 30.2437 10.6406L31.1062 9.77812C31.6304 10.0871 32.2493 10.1942 32.8468 10.0796C33.4444 9.96487 33.9796 9.6362 34.3522 9.15515C34.7247 8.6741 34.9091 8.07369 34.8706 7.46645C34.8322 6.85921 34.5736 6.28684 34.1434 5.8566C33.7132 5.42635 33.1408 5.16779 32.5335 5.12935C31.9263 5.09092 31.3259 5.27526 30.8448 5.64783C30.3638 6.02039 30.0351 6.55561 29.9204 7.15315C29.8058 7.7507 29.9129 8.36956 30.2219 8.89374L29.375 9.75624C29.2879 9.84383 29.2288 9.95525 29.205 10.0764C29.1812 10.1976 29.1938 10.3231 29.2413 10.4371C29.2888 10.5511 29.3689 10.6485 29.4717 10.717C29.5745 10.7855 29.6953 10.822 29.8187 10.8219H29.8031ZM31.4906 6.74062C31.7252 6.50607 32.0433 6.3743 32.375 6.3743C32.7067 6.3743 33.0248 6.50607 33.2594 6.74062C33.4939 6.97517 33.6257 7.29329 33.6257 7.62499C33.6257 7.9567 33.4939 8.27482 33.2594 8.50937C33.0211 8.7367 32.7044 8.86354 32.375 8.86354C32.0456 8.86354 31.7289 8.7367 31.4906 8.50937C31.3744 8.39328 31.2822 8.25542 31.2193 8.10367C31.1564 7.95192 31.124 7.78926 31.124 7.62499C31.124 7.46072 31.1564 7.29807 31.2193 7.14632C31.2822 6.99457 31.3744 6.85671 31.4906 6.74062Z"
                                fill="#06738A" />
                        </g>
                        <defs>
                            <clipPath id="clip0_860_4785">
                                <rect width="40" height="40" fill="white" />
                            </clipPath>
                        </defs>
                    </svg>
                </div>
                <p>We are team and we are Great. And Simple. Yo! Wath the showreel.</p>
            </div>
        </div>
        <div class="ic__arrows">
            <button class="next-btn1">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.3374 11H4.65625" stroke="#2DB6D2" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M10.9968 17.3374L4.65625 10.9968L10.9968 4.65625" stroke="#2DB6D2" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <button class="prev-btn1">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.65625 11H17.3374" stroke="#2DB6D2" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M11 4.65625L17.3406 10.9968L11 17.3374" stroke="#2DB6D2" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                </svg>
            </button>
        </div>

        <!-- Our Strategies -->
        <div class="ic__our--strategies--part">
            <div class="ic__heading text-center">
                <h2 class="primary"><span class="black">Our</span> Strategies</h2>
                <p class="color-deep-gray-800">Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
            </div>
            <div class="ic-strategies--grid">
                <div class="ic-strategies--items position-relative">
                    <div class="ic--strategies-count sky-blue">
                        1
                    </div>
                    <img src="{{ asset('/frontend')}}/images/strategies-1.png" alt="images">
                    <div class="ic--strategies--text">
                        <p class="sub-title">Students Counseling</p>
                    </div>
                </div>
                <div class="ic-strategies--items position-relative">
                    <div class="ic--strategies-count firoza">
                        2
                    </div>
                    <img src="{{ asset('/frontend')}}/images/strategies-2.png" alt="images">
                    <div class="ic--strategies--text">
                        <p class="sub-title">Success Coach Assignment</p>
                    </div>
                </div>
                <div class="ic-strategies--items position-relative">
                    <div class="ic--strategies-count strategies-color-3">
                        3
                    </div>
                    <img src="{{ asset('/frontend')}}/images/strategies-3.png" alt="images">
                    <div class="ic--strategies--text">
                        <p class="sub-title">Monthly 101</p>
                    </div>
                </div>
                <div class="ic-strategies--items position-relative">
                    <div class="ic--strategies-count strategies-color-4">
                        4
                    </div>
                    <img src="{{ asset('/frontend')}}/images/strategies-4.png" alt="images">
                    <div class="ic--strategies--text">
                        <p class="sub-title">Company-Based Projects</p>
                    </div>
                </div>
                <div class="ic-strategies--items position-relative">
                    <div class="ic--strategies-count strategies-color-5">
                        5
                    </div>
                    <img src="{{ asset('/frontend')}}/images/strategies-5.png" alt="images">
                    <div class="ic--strategies--text">
                        <p class="sub-title">Weekly Tests</p>
                    </div>
                </div>
                <div class="ic-strategies--items position-relative">
                    <div class="ic--strategies-count strategies-color-6">
                        6
                    </div>
                    <img src="{{ asset('/frontend')}}/images/strategies-6.png" alt="images">
                    <div class="ic--strategies--text">
                        <p class="sub-title">Monthly Proctored Exams</p>
                    </div>
                </div>
                <div class="ic-strategies--items position-relative">
                    <div class="ic--strategies-count strategies-color-7">
                        7
                    </div>
                    <img src="{{ asset('/frontend')}}/images/strategies-7.png" alt="images">
                    <div class="ic--strategies--text">
                        <p class="sub-title">Certifications</p>
                    </div>
                </div>
                <div class="ic-strategies--items position-relative">
                    <div class="ic--strategies-count strategies-color-8">
                        8
                    </div>
                    <img src="{{ asset('/frontend')}}/images/strategies-8.png" alt="images">
                    <div class="ic--strategies--text">
                        <p class="sub-title">Interview Preparation</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- feature part end -->

<!-- testimonial part Start -->
<section class="ic__testimonial--part ic-section-space-bottom">
    <img src="{{ asset('/frontend')}}/images/testimonial-wave.svg" class="img-fluid img-bottom-wave" alt="">
    <img src="{{ asset('/frontend')}}/images/test-right.svg" class="img-fluid img-bottom-shape-1" alt="">
    <img src="{{ asset('/frontend')}}/images/test-left.svg" class="img-fluid img-bottom-shape-2" alt="">
    <div class="container">
        <div class="ic__heading text-center">
            <h2 class="black">Students <span class="secondary">Testimonials</span></h2>
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <p class="color-deep-gray">Our unique process</p>
                </div>
            </div>
        </div>
        <div class="ic__testimonial--slider"
            style="background-image: url({{ asset('/frontend')}}/images/testimonial-bg.png);">
            <ul class="ic__testimonial--nav">
                <li>
                    <a href="#" class="ic-tab-link active" data-link="avatar-1">
                        <div class="ic__testimonial--avatar avatar-1">
                            <img id="bigImage" src="{{ asset('/frontend')}}/images/avatar-1.png" alt="avatar">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="ic-tab-link" data-link="avatar-2">
                        <div class="ic__testimonial--avatar avatar-2">
                            <img src="{{ asset('/frontend')}}/images/avatar-5.png" alt="avatar">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="ic-tab-link" data-link="avatar-3">
                        <div class="ic__testimonial--avatar avatar-3">
                            <img src="{{ asset('/frontend')}}/images/avatar-4.png" alt="avatar">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="ic-tab-link" data-link="avatar-4">
                        <div class="ic__testimonial--avatar avatar-4">
                            <img src="{{ asset('/frontend')}}/images/avatar-3.png" alt="avatar">
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#" class="ic-tab-link" data-link="avatar-5">
                        <div class="ic__testimonial--avatar avatar-5">
                            <img src="{{ asset('/frontend')}}/images/avatar-2.png" alt="avatar">
                        </div>
                    </a>
                </li>
            </ul>
            <div class="ic__testimonial--tabs--container">
                <div class="ic__testimonial--tabs active" id="avatar-1">
                    <p>Build your financial literacy within a transparent community. Follow other investors, share
                        insights with people from different professional backgrounds, and never be alone.</p>
                    <h5>Jony Scotty sani</h5>
                    <span>UI Designer</span>
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
                <div class="ic__testimonial--tabs" id="avatar-2">
                    <p>Build your financial literacy within a transparent community. Follow other investors, share
                        insights with people from different professional backgrounds, and never be alone.</p>
                    <h5>Jony Scotty mosahraf</h5>
                    <span>UI Designer</span>
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
                <div class="ic__testimonial--tabs" id="avatar-3">
                    <p>Build your financial literacy within a transparent community. Follow other investors, share
                        insights with people from different professional backgrounds, and never be alone.</p>
                    <h5>Jony Scotty sajidul</h5>
                    <span>UI Designer</span>
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
                <div class="ic__testimonial--tabs" id="avatar-4">
                    <p>Build your financial literacy within a transparent community. Follow other investors, share
                        insights with people from different professional backgrounds, and never be alone.</p>
                    <h5>Jony Scotty razon</h5>
                    <span>UI Designer</span>
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
                <div class="ic__testimonial--tabs" id="avatar-5">
                    <p>Build your financial literacy within a transparent community. Follow other investors, share
                        insights with people from different professional backgrounds, and never be alone.</p>
                    <h5>Jony Scotty mahabub</h5>
                    <span>UI Designer</span>
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
        </div>
        <!-- verified partners -->
        <div class="ic__verified--part ic-section-space-top">
            <div class="ic__verified--imageHeading">
                <img src="{{ asset('/frontend')}}/images/verified-image.png" class="img-fluid ic--verified-shape"
                    alt="images">
                <div class="ic__verified--innerImages">
                    <img src="{{ asset('/frontend')}}/images/verified-partners-images.png" class="img-fluid"
                        alt="images">
                </div>
            </div>
            <div class="ic__verified--content">
                <div class="ic__verified--innerContainer">
                    <h2>Verified Partners</h2>
                    <div class="ic__arrows">
                        <button class="next-btn2">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M17.3374 11H4.65625" stroke="#2DB6D2" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M10.9968 17.3374L4.65625 10.9968L10.9968 4.65625" stroke="#2DB6D2"
                                    stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>
                        <button class="prev-btn2">
                            <svg width="22" height="22" viewBox="0 0 22 22" fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.65625 11H17.3374" stroke="#2DB6D2" stroke-width="1.5" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M11 4.65625L17.3406 10.9968L11 17.3374" stroke="#2DB6D2" stroke-width="1.5"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>

                            </svg>
                        </button>
                    </div>
                </div>
                <div class="ic__verified--slider owl-carousel owl-theme">
                    <div class="ic__verified--items active">
                        <div class="ic__verified--images">
                            <img src="{{ asset('/frontend')}}/images/cisco.png" alt="images">
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                    <div class="ic__verified--items ">
                        <div class="ic__verified--images">
                            <img src="{{ asset('/frontend')}}/images/partner-2.png" alt="images">
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                    <div class="ic__verified--items ">
                        <div class="ic__verified--images">
                            <img src="{{ asset('/frontend')}}/images/partner-3.png" alt="images">
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                    <div class="ic__verified--items ">
                        <div class="ic__verified--images">
                            <img src="{{ asset('/frontend')}}/images/partner-4.png" alt="images">
                        </div>
                        <p>There are many variations of passages of Lorem Ipsum available.</p>
                    </div>
                </div>
            </div>

        </div>
        <!-- verified partners -->
    </div>
    <img src="{{ asset('/frontend')}}/images/education-stand.png" class="img-fluid education--stand" alt="image">
</section>
<!-- testimonial part end -->

<!-- latest courses start -->
<section class="ic__latest--courses">
    <div class="container">
        <div class="ic__heading text-center">
            <h2 class="black">Enroll To Our <span class="secondary">Latest Courses</span></h2>
            <div class="row">
                <div class="col-lg-5 m-auto">
                    <p class="black">It is a long established fact that a reader will be distracted by the readable
                        content. </p>
                </div>
            </div>
        </div>
        <div class="ic__latest--slider owl-carousel owl-theme">
            <div class="ic__latest--items">
                <img src="{{ asset('/frontend')}}/images/course-1.png" alt="avatar">
                <h5>Cloud computing</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy</p>
            </div>
            <div class="ic__latest--items">
                <img src="{{ asset('/frontend')}}/images/course-1.png" alt="avatar">
                <h5>Cloud computing</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy</p>
            </div>
            <div class="ic__latest--items">
                <img src="{{ asset('/frontend')}}/images/course-1.png" alt="avatar">
                <h5>Cloud computing</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy</p>
            </div>
            <div class="ic__latest--items">
                <img src="{{ asset('/frontend')}}/images/course-1.png" alt="avatar">
                <h5>Cloud computing</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy</p>
            </div>
            <div class="ic__latest--items">
                <img src="{{ asset('/frontend')}}/images/course-1.png" alt="avatar">
                <h5>Cloud computing</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy</p>
            </div>
            <div class="ic__latest--items">
                <img src="{{ asset('/frontend')}}/images/course-1.png" alt="avatar">
                <h5>Cloud computing</h5>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy</p>
            </div>
        </div>
        <div class="ic__latest--button">
            <a href="#" class="ic-btn">Enroll Now <i class="ri-arrow-right-line"></i></a>
        </div>
    </div>
</section>
<!-- latest courses end -->

<!-- playground part start -->
<section class="ic__playground--part ic-section-space position-relative">
    <img src="{{ asset('/frontend')}}/images/playground-images-circle.png" class="img-circle" alt="circle images">
    <div class="position-relative">
        <div class="container">
            <div class="">
                <div class="ic__playground--images">
                    <img src="{{ asset('/frontend')}}/images/playground-images.png" class="img-fluid" alt="images">
                    <div class="ic__playground-video">
                        <a href="https://vimeo.com/115041822" class="ic-play-button">
                            <div class="circle">
                                <i class="ri-play-fill"></i>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="row gx-xl-5">
                    <div class="col-xl-5 col-lg-6 offset-xl-7 offset-lg-6">
                        <div class="ic__playground--content">
                            <p class="top-heading">PLAYGROUND</p>
                            <h6 class="sub-heading pb-4">CLOUD & DEVOPS PLAYGROUNDS WITH MCdns Learning PLUS</h6>
                            <h6 class="sub-heading">MCdns Learning Playground Plus includes everything you’d get in the
                                Standard Plan (all 20+ DevOps online training courses and 100+ labs).</h6>
                            <p class="paragraph pb-4">Cloud environments like AWS, Azure, or GCP A Docker server A
                                Kubernetes cluster</p>
                            <p class="paragraph pb-4">Our hands-on labs are limited by both time and the topic.
                                Playgrounds in MCdns Learning Plus are blank, clean environments intended for you to
                                tinker with. Each playground can be extended, giving you all the time you need to test
                                solutions.</p>
                            <a href="#" class="ic-btn">Start Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>
<!-- playground part end -->

<!-- bootcamp part Start -->
<section class="ic__bootcamp--part ic-section-space-top">
    <div class="container position-relative">
        <div class="ic__heading text-center">
            <h2 class="black">Bootcamp Training</h2>
            <p class="black">Learn from global experts and get certified by the world's leading universities</p>
        </div>
        <img src="{{ asset('/frontend')}}/images/login-second.png" class="bootcamp-dots" alt="">
        <div class="ic__bootcamp--slider owl-carousel owl-theme">
            <div class="ic__bootcamp--items">
                <div class="ic__bootcamp--image">
                    <img src="{{ asset('/frontend')}}/images/bootcamp-1.png" class="img-fluid" alt="images">
                </div>
                <div class="ic__bootcamp--content">
                    <span> <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                            class="ri-star-fill"></i><i class="ri-star-fill"></i> </span>
                    <h6>Executive Leadership Principles Program</h6>
                    <p>There are many variations of passages of Lorem Ipsum available</p>
                    <ul>
                        <li>
                            <p><i class="ri-calendar-2-line"></i> 15 May 2023</p>
                        </li>
                        <li>
                            <p><i class="ri-time-line"></i> <span>Cohort Starts:</span> 29 Nov, 2022</p>
                        </li>
                    </ul>
                    <a href="#" class="ic-btn">Enroll Now</a>
                </div>
            </div>
            <div class="ic__bootcamp--items">
                <div class="ic__bootcamp--image">
                    <img src="{{ asset('/frontend')}}/images/bootcamp-1.png" class="img-fluid" alt="images">
                </div>
                <div class="ic__bootcamp--content">
                    <span> <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                            class="ri-star-fill"></i><i class="ri-star-fill"></i> </span>
                    <h6>Executive Leadership Principles Program</h6>
                    <p>There are many variations of passages of Lorem Ipsum available</p>
                    <ul>
                        <li>
                            <p><i class="ri-calendar-2-line"></i> 15 May 2023</p>
                        </li>
                        <li>
                            <p><i class="ri-time-line"></i> <span>Cohort Starts:</span> 29 Nov, 2022</p>
                        </li>
                    </ul>
                    <a href="#" class="ic-btn">Enroll Now</a>
                </div>
            </div>
            <div class="ic__bootcamp--items">
                <div class="ic__bootcamp--image">
                    <img src="{{ asset('/frontend')}}/images/bootcamp-1.png" class="img-fluid" alt="images">
                </div>
                <div class="ic__bootcamp--content">
                    <span> <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                            class="ri-star-fill"></i><i class="ri-star-fill"></i> </span>
                    <h6>Executive Leadership Principles Program</h6>
                    <p>There are many variations of passages of Lorem Ipsum available</p>
                    <ul>
                        <li>
                            <p><i class="ri-calendar-2-line"></i> 15 May 2023</p>
                        </li>
                        <li>
                            <p><i class="ri-time-line"></i> <span>Cohort Starts:</span> 29 Nov, 2022</p>
                        </li>
                    </ul>
                    <a href="#" class="ic-btn">Enroll Now</a>
                </div>
            </div>
            <div class="ic__bootcamp--items">
                <div class="ic__bootcamp--image">
                    <img src="{{ asset('/frontend')}}/images/bootcamp-1.png" class="img-fluid" alt="images">
                </div>
                <div class="ic__bootcamp--content">
                    <span> <i class="ri-star-fill"></i><i class="ri-star-fill"></i><i class="ri-star-fill"></i><i
                            class="ri-star-fill"></i><i class="ri-star-fill"></i> </span>
                    <h6>Executive Leadership Principles Program</h6>
                    <p>There are many variations of passages of Lorem Ipsum available</p>
                    <ul>
                        <li>
                            <p><i class="ri-calendar-2-line"></i> 15 May 2023</p>
                        </li>
                        <li>
                            <p><i class="ri-time-line"></i> <span>Cohort Starts:</span> 29 Nov, 2022</p>
                        </li>
                    </ul>
                    <a href="#" class="ic-btn">Enroll Now</a>
                </div>
            </div>
        </div>
        <div class="ic__arrows">
            <button class="next-btn2">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M17.3374 11H4.65625" stroke="#2DB6D2" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M10.9968 17.3374L4.65625 10.9968L10.9968 4.65625" stroke="#2DB6D2" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>
            </button>
            <button class="prev-btn2">
                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4.65625 11H17.3374" stroke="#2DB6D2" stroke-width="1.5" stroke-linecap="round"
                        stroke-linejoin="round" />
                    <path d="M11 4.65625L17.3406 10.9968L11 17.3374" stroke="#2DB6D2" stroke-width="1.5"
                        stroke-linecap="round" stroke-linejoin="round" />
                </svg>

                </svg>
            </button>
        </div>
    </div>
</section>
<!-- bootcamp part end -->



<!-- newsletter part start -->
<section class="ic__news-letter">
    <div class="container">
        <div class="ic__news--background"
            style="background-image: url({{ asset('/frontend')}}/images/news-letter.png);">
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
</section>
<!-- newsletter part end -->
@endsection
