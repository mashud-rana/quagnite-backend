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
                        <span class="ic-heading-title mb-15">Blog Details</span>
                        <h1 class="black pb-15">Blog Details Page</h1>
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

    {{-- blog details section start --}}
    <section class="ic-blog-details-section">
        <div class="container">
            <div class="ic-blog-details-img">
                <img src="{{ asset('new-frontendv1/images/blog-list/blog-banner.png') }}" alt="">

                <div class="ic-img-content">
                    <h2>How to Stock growth hacking MVP value</h2>
                    <div class="ic-user">
                        <div class="ic-user-img">
                            <img src="{{ asset('new-frontendv1/images/blog-list/user.png') }}" alt="">
                        </div>
                        <div class="ic-name-designation">
                            <p>Abu Taiweeb</p>
                            <p>April 06,2023</p>
                        </div>
                        <div class="ic-user-social">
                            <ul class="ic-social-menu">
                                <li class="ic-social-item">
                                    <a href="#" class="ic-social-link">
                                        <i class="ri-facebook-fill"></i>
                                    </a>
                                </li>
                                <li class="ic-social-item">
                                    <a href="#" class="ic-social-link">
                                        <i class="ri-twitter-fill"></i>
                                    </a>
                                </li>
                                <li class="ic-social-item">
                                    <a href="#" class="ic-social-link">
                                        <i class="ri-instagram-line"></i>
                                    </a>
                                </li>
                                <li class="ic-social-item">
                                    <a href="#" class="ic-social-link">
                                        <i class="ri-linkedin-fill"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- blog details section end --}}
@endsection

@push('scripts')
@endpush
