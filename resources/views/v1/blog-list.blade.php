@extends('layouts.master-v1')

@push('styles')
@endpush

@section('content')
{{-- banner part start --}}
<section class="ic-banner-part ic-section-space ic_v1_inner-part bg-img-center-property"
    style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-md-6 ">
                <div class="ic-banner-content ic-business-banner">
                    <span class="ic-heading-title mb-15">Blog List</span>
                    <h1 class="black pb-15">Blog List Page</h1>
                    <div class="row">
                        <div class="col-xxl-10 col-lg-12">
                            <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                the 1500s, when an
                                unknown printer took a galley of
                            </p>
                            <div class="ic-video-programs">
                                <a href="#" class="ic-btn">Explore Courses <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-md-block d-none ">
                <div class="ic-right-side-img text-end">
                    <img src="{{ asset('new-frontendv1/images/blog-list/banner-img.png') }}" class="img-fluid"
                        alt="images">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- banner part end --}}


{{-- latest blog start --}}
<section class="ic-latest-blog-section ic-section-space">
    <div class="container">
        <div class="ic-blog-list-heading">
            <h2>Search Your Latest Blog</h2>
            <p class="ic-heading-tag">Learn the advice, tips, and tricks from people and companies using segment
                to power their data driven decisions.
            </p>
        </div>
        <div class="data-science-navs blog-list-navs">
            <ul>
                <li>
                    <a href="#" class="business-link active" data-link="business-1">Most popular</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-2">Recent</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-3">Trending</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-4">Training & Learning</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-5">Digital Marketing</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-6">Programing</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-7">Management</a>
                </li>
                <li>
                    <a href="#" class="business-link" data-link="business-8">Mindset</a>
                </li>
            </ul>
        </div>
        <div class="business-tabs">
            <div class="business-items active" id="business-1">
                <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 gx-xxl-4 gx-xl-3 gx-2 mb-50">
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
                                        <img src="{{ asset('new-frontendv1/images/blog-list/bloger.png') }}" alt="">
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
                                        <img src="{{ asset('new-frontendv1/images/blog-list/bloger.png') }}" alt="">
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
                                        <img src="{{ asset('new-frontendv1/images/blog-list/bloger.png') }}" alt="">
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
            </div>
            <div class="business-items" id="business-2">
                <div class="row row-cols-xl-3 row-cols-md-2 row-cols-1 gx-xxl-4 gx-xl-3 gx-2 mb-50">
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
                                        <img src="{{ asset('new-frontendv1/images/blog-list/bloger.png') }}" alt="">
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
                                        <img src="{{ asset('new-frontendv1/images/blog-list/bloger.png') }}" alt="">
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
            </div>
        </div>
    </div>
</section>
{{-- latest blog start --}}

{{-- bootcamp training and Employee section start --}}
<section class="ic-bootcamp-employee-section">
    <div class="container">
        <div class="ic-bootcamp-traning-area ic-section-space">
            <div class="ic-blog-list-heading">
                <h2>Bootcamp Training</h2>
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
                                        <img src="{{ asset('new-frontendv1/images/blog-list/bloger.png') }}" alt="">
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
                                        <img src="{{ asset('new-frontendv1/images/blog-list/bloger.png') }}" alt="">
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
                                        <img src="{{ asset('new-frontendv1/images/blog-list/bloger.png') }}" alt="">
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
        <div class="ic-employee-training-area ic-section-space-bottom">
            <div class="ic-blog-list-heading">
                <h2>Employee Training</h2>
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
                                        <img src="{{ asset('new-frontendv1/images/blog-list/bloger.png') }}" alt="">
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
                                        <img src="{{ asset('new-frontendv1/images/blog-list/bloger.png') }}" alt="">
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
                                        <img src="{{ asset('new-frontendv1/images/blog-list/bloger.png') }}" alt="">
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

<!-- {{-- achieve goals start --}} -->
<section class="ic-achieve-goals ic-section-space">
    <div class="container">
        <div class=" text-center mb-50 ">
            <h2 class="ic-title">Achieve Your Goals</h2>
        </div>

        <div class="ic-achieve-rows">
            <div class="row g-3">
                <div class="col-lg-6">
                    <div class="ic-achieve-items">
                        <div class="left">
                            <div>
                                <h5>Start Coaching Today</h5>
                                <p>Seamlessly engage technically sound Seamlessly engage technically sound cooperative
                                    reinterned goal oriented content rather than.</p>
                                <div>
                                    <div>

                                        <a href="#" class="ic-btn">Become A Coach</a>
                                    </div>
                                </div>
                                <div class="achieve-img">
                                    <img src="{{asset('new-frontendv1/images/achieve-1.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ic-achieve-items">
                                <div class="left">
                                    <div>
                                        <h5>If You Join Our Course</h5>
                                        <p>Seamlessly engage technically sound Seamlessly engage technically sound
                                            cooperative
                                            reinterned goal oriented content rather than.</p>
                                    </div>
                                    <div>

                                        <a href="#" class="ic-btn">Registration Here</a>
                                    </div>
                                </div>
                                <div class="achieve-img radius-shape">
                                    <img src="{{asset('new-frontendv1/images/achieve-2.png')}}" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- {{-- achieve goals end --}} -->
@endsection

@push('scripts')
@endpush