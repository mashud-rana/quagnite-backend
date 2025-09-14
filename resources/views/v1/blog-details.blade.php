@extends('layouts.master-v1')

@section('content')
{{-- banner part start --}}
<section class="ic-banner-part ic-section-space ic_v1_inner-part bg-img-center-property"
    style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-md-6">
                <div class="ic-banner-content ic-business-banner">
                    <span class="ic-heading-title mb-15">Blog List</span>
                    <h1 class="black pb-15">Blog Details Page</h1>
                    <div class="row">
                        <div class="col-xxl-10 col-lg-12">
                            <p class="color-deep-gray pb-30">
                                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                has been the industry's standard dummy text ever since the 1500s, when an unknown
                                printer took a galley of printing and typesetting.
                            </p>
                            <div class="ic-video-programs">
                                <a href="#" class="ic-btn bg-effect">
                                    Explore Courses
                                    <i class="ri-arrow-right-line"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-md-block d-none ">
                <div class="ic-right-side-img text-end">
                    <img src="{{ asset('new-frontendv1/images/blog-details.png') }}" class="img-fluid" alt="images">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- banner part end --}}


{{-- content start --}}
<section class="ic-wiki-details-content ic-section-space bg-img-center-property">
    <div class="ic-top-feature  ic-blog-details">
        <div class="container">
            <div class="top-content">
                <div class="big-card-content-wrapper mb-40">
                    <div class="position-relative overlay blog-big-card wiki blog-details">
                        <img class="blog-big-card-img" src="{{asset('/new-frontendv1/images/blog-details-banner.png')}}"
                            class="" alt="">
                        <div class="content">
                            <div class="intro-info mb-0">
                                <div class="ic-intro-badge">
                                    Training methods
                                </div>
                            </div>
                            <div class="bottom-content d-block mt-auto">


                                <div class="heading text-center mb-20">
                                    <h3 class="white">How to Stock growth hacking MVP value</h3>
                                </div>

                                <div class="ic-social-profile-wrapper">
                                    <div class="ic-profile-wrapper">
                                        <img src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8dXNlcnxlbnwwfHwwfHx8MA%3D%3D&auto=format&fit=crop&w=500&q=60"
                                            alt="Writer">
                                        <div class="ic-content">
                                            <h6>Kevin Gilbert</h6>
                                            <p>April 06,2023</p>
                                        </div>
                                    </div>
                                    <ul class="ic-social-wrapper">
                                        <li><a href=""><i class="ri-facebook-fill"></i></a></li>
                                        <li><a href=""><i class="ri-twitter-fill"></i></a></li>
                                        <li><a href=""><i class="ri-instagram-line"></i></a></li>
                                        <li><a href=""><i class="ri-linkedin-fill"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="blog-content mb-50">
                    <p>
                        If an uneducated guy from the home of the Kangaroo can double their salary, there is definitely
                        hope for you. Popular career websites like “Seek” suggest the typical advice about doing better
                        in your performance review or getting more education from a university. This advice is out of
                        date and I have watched many colleagues fall for this trap and only disappointed. Doubling your
                        salary, or at the very least increasing it significantly, is about breaking the norm and trying
                        a few things that are a bit more radical as you’re about to see with these simple tips below.
                    </p>
                    <br>
                    <h4>The goal should be more than money</h4>
                    <br>
                    <p>
                        Okay so you can make more money but if that’s your only goal, the extra zeroes on your bank
                        balance will get really boring real quick. If an uneducated guy from the home of the Kangaroo
                        can double their salary, there is definitely hope for you. Popular career websites like “Seek”
                        suggest the typical advice about doing better in your performance review or getting more
                        education from a university. This advice is out of date and I have watched many colleagues fall
                        for this trap and only end up disappointed. Doubling your salary,
                        very least increasing it significantly, is about breaking the norm and trying a few things that
                        are a bit more radical as you’re about to see with these simple tips below.
                    </p>
                    <br>
                    <p>
                        When you open a website on your browser, it sends an HTTP request to the server where the
                        website is hosted. The server then sends back an HTTP response with the website content, such as
                        text, images, and videos. HTTP is responsible for structuring these requests and responses in a
                        way that both the client and the server can understand.
                    </p>
                    <br>
                    <div class="ic-quote">
                        <div class="ic-quote-abs">
                            <img src="{{asset('/new-frontendv1/images/wiki/quotation.svg')}}" class="" alt="">
                        </div>
                        <div class="quote-content">
                            “Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum
                            lorem sed risus ultricies viverra ipsum nunc aliquet bibendum. Magna sit amet purus gravida
                            quis blandit. Arcu cursus vitae congue mauris.“
                        </div>
                    </div>
                    <br>
                    <h4>Economical and practical remote learning</h4>
                    <br>
                    <p>
                        Okay so you can make more money but if that’s your only goal, the extra zeroes on your bank
                        balance will get really boring real quick. If an uneducated guy from the home of the Kangaroo
                        can double their salary, there is definitely hope for you. Popular career websites like “Seek”
                        suggest the typical advice about doing better in your performance review or getting more
                        education from a university. This advice is out of date and I have watched many colleagues fall
                        for this trap and only end up disappointed. Doubling your salary,
                        very least increasing it significantly, is about breaking the norm and trying a few things that
                        are a bit more radical as you’re about to see with these simple tips below.
                    </p>
                    <br>
                    <p>
                        When you open a website on your browser, it sends an HTTP request to the server where the
                        website is hosted. The server then sends back an HTTP response with the website content, such as
                        text, images, and videos. HTTP is responsible for structuring these requests and responses in a
                        way that both the client and the server can understand.
                    </p>
                </div>

                <div class="ic-share-wrapper">
                    <ul class="ic-social-wrapper">
                        <ul class="ic-social-wrapper">
                            <li>
                                <p>Share</p>
                            </li>
                            <li><a href=""><i class="ri-facebook-fill"></i></a></li>
                            <li><a href=""><i class="ri-twitter-fill"></i></a></li>
                            <li><a href=""><i class="ri-instagram-line"></i></a></li>
                            <li><a href=""><i class="ri-linkedin-fill"></i></a></li>
                        </ul>
                    </ul>

                    <div class="ic-blog-badge-wrapper">
                        <div class="ic-blog-badge active">DevOps</div>
                        <div class="ic-blog-badge">Stock</div>
                        <div class="ic-blog-badge">Linux</div>
                    </div>
                </div>


            </div>
        </div>
    </div>
</section>
{{-- content end --}}
 {{-- bootcamp training and Employee section start --}}
 <section class="ic-bootcamp-employee-section">
    <div class="container">
        <div class="ic-bootcamp-traning-area ic-section-space">
            <div class="ic-blog-list-heading">
                <h2>Explore similar resources</h2>
            </div>
            <div class="ic-training-items">
                <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 gx-xxl-4 gx-xl-3 gx-2 gy-4 mb-50">
                    <div class="col">
                        <div class="ic-latest-blog-item">
                            <div class="ic-item-image position-relative">
                                <p class="ic-event-bage">Training</p>
                                <img src="{{ asset('new-frontendv1/images/blog-list/latest-blog_1.png') }}"
                                    class="img-fluid w-100" alt="">
                            </div>
                            <div class="ic-item-conetnt-wrapper">
                                <div class="ic-item-like-comment">
                                    <p><i class="ri-thumb-up-line"></i> <span>2,729</span>Like</p>
                                    <p><i class="ri-chat-3-line"></i><span>273</span> Comments</p>
                                </div>
                                <p class="ic-sub-title">What is Skills Mapping and Why Does Your Organization Need
                                    It?
                                </p>
                                <p class="ic-item-des">
                                    Learn how to create a successful enterprise learning strategy with our 9-step
                                    guide
                                </p>
                                <div class="ic-bloger-info">
                                    <div class="img-box">
                                        <img src="{{ asset('new-frontendv1/images/blog-list/bloger.png') }}"
                                            alt="">
                                    </div>
                                    <div class="bloger-details">
                                        <p class="name">
                                            Ralph Edwards Ralph
                                        </p>
                                        <p class="designation">
                                            MCdns Learning
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-latest-blog-item">
                            <div class="ic-item-image position-relative">
                                <p class="ic-event-bage">Training</p>
                                <img src="{{ asset('new-frontendv1/images/blog-list/latest-blog_2.png') }}"
                                    class="img-fluid w-100" alt="">
                            </div>
                            <div class="ic-item-conetnt-wrapper">
                                <div class="ic-item-like-comment">
                                    <p><i class="ri-thumb-up-line"></i> <span>2,729</span>Like</p>
                                    <p><i class="ri-chat-3-line"></i><span>273</span> Comments</p>
                                </div>
                                <p class="ic-sub-title">What is Skills Mapping and Why Does Your Organization Need
                                    It?
                                </p>
                                <p class="ic-item-des">
                                    Learn how to create a successful enterprise learning strategy with our 9-step
                                    guide
                                </p>
                                <div class="ic-bloger-info">
                                    <div class="img-box">
                                        <img src="{{ asset('new-frontendv1/images/blog-list/bloger.png') }}"
                                            alt="">
                                    </div>
                                    <div class="bloger-details">
                                        <p class="name">
                                            Ralph Edwards Ralph
                                        </p>
                                        <p class="designation">
                                            MCdns Learning
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-latest-blog-item">
                            <div class="ic-item-image position-relative">
                                <p class="ic-event-bage">Training</p>
                                <img src="{{ asset('new-frontendv1/images/blog-list/latest-blog_3.png') }}"
                                    class="img-fluid w-100" alt="">
                            </div>
                            <div class="ic-item-conetnt-wrapper">
                                <div class="ic-item-like-comment">
                                    <p><i class="ri-thumb-up-line"></i> <span>2,729</span>Like</p>
                                    <p><i class="ri-chat-3-line"></i><span>273</span> Comments</p>
                                </div>
                                <p class="ic-sub-title">What is Skills Mapping and Why Does Your Organization Need
                                    It?
                                </p>
                                <p class="ic-item-des">
                                    Learn how to create a successful enterprise learning strategy with our 9-step
                                    guide
                                </p>
                                <div class="ic-bloger-info">
                                    <div class="img-box">
                                        <img src="{{ asset('new-frontendv1/images/blog-list/bloger.png') }}"
                                            alt="">
                                    </div>
                                    <div class="bloger-details">
                                        <p class="name">
                                            Ralph Edwards Ralph
                                        </p>
                                        <p class="designation">
                                            MCdns Learning
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class=" text-center">
                    <a href="#" class="ic-btn-simple">Explore Bootcamp <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- bootcamp training section start --}}
@endsection

@push('scripts')
{{-- <script src="{{ asset('frontend/js/price_range_script.js') }}"></script> --}}
@endpush