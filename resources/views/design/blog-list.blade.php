@extends('layouts.master')

@section('content')
    <section class="ic__banner--part ic__forum--part"
        style="background-image: linear-gradient(0deg, rgba(19, 19, 51, 0.6), rgba(19, 19, 51, 0.6)), url({{ asset('/frontend') }}/images/coaches-banner.png);">
        <!-- content -->
        <div class="reserve-container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="ic__banner--content ps-0">
                        <span class="white">Blog List</span>
                        <h1>Blog List Page</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of </p>
                        <div class="ic__buttons-wrapper">
                            <a href="#" class="ic-btn">Explore Programs</a>
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
        <div class="sechedule-container">
            <div class="row g-4">
                <div class="col-lg-8">
                    <div class="row g-4">
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="ic-blog-grid-items">
                                <div class=" img">
                                    <img src="{{ asset('frontend/images/blog-list-1.png') }}" class="img-fluid w-100"
                                        alt="">
                                    <div class="posted-date">
                                        <p>Jul</p>
                                        <h5>28</h5>
                                    </div>
                                </div>
                                <ul class="user-posted">
                                    <li>
                                        <img src="{{ asset('frontend/images/comment-2.png') }}" alt="">
                                        <p>By: Administration</p>
                                    </li>
                                </ul>
                                <h6 class="sub-title">Java vs. Python : Which Is the Best Program
                                    ming Language for You?</h6>
                                <p class="paragraph">Whether you’re improving your personal or business credit, we’ll take
                                    you step by step dispute...</p>
                                <a href="#">Read More <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6">
                            <div class="ic-blog-grid-items">
                                <div class=" img">
                                    <img src="{{ asset('frontend/images/blog-list-1.png') }}" class="img-fluid w-100"
                                        alt="">
                                    <div class="posted-date">
                                        <p>Jul</p>
                                        <h5>28</h5>
                                    </div>
                                </div>
                                <ul class="user-posted">
                                    <li>
                                        <img src="{{ asset('frontend/images/comment-2.png') }}" alt="">
                                        <p>By: Administration</p>
                                    </li>
                                </ul>
                                <h6 class="sub-title">Java vs. Python : Which Is the Best Program
                                    ming Language for You?</h6>
                                <p class="paragraph">Whether you’re improving your personal or business credit, we’ll take
                                    you step by step dispute...</p>
                                <a href="#">Read More <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-card">
                        <form action="#">
                            <div class="position-relative">
                                <input type="text" class="form-control" placeholder="What are you looking for?">
                                <i class="ri-search-line"></i>
                            </div>
                        </form>
                        <div class="card-inner">
                            <h6>Categories</h6>
                            <ul class="Categories">
                                <li>
                                    <a href="#">Development (3)</a>
                                </li>
                                <li>
                                    <a href="#">IT & Software (1)</a>
                                </li>
                                <li>
                                    <a href="#">Data Science (0)</a>
                                </li>
                                <li>
                                    <a href="#">Soft Skills (0)</a>
                                </li>
                                <li>
                                    <a href="#">Marketing (0)</a>
                                </li>
                                <li>
                                    <a href="#">Design & Creative (1)</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="sidebar-card">
                        <div class="card-inner">
                            <h6>Latest Posts</h6>
                            <div class="ic-latest-bloger">
                                <div class="ic-latest-items">
                                    <img src="{{ asset('frontend/images/latest-post-1.png') }}" alt="">
                                    <a href="#">
                                        <div class="blog-content">
                                            <p>60 Common C# Interview Questions in 2022 : Ace Your Next Interview</p>
                                            <span>2 Jul 2022</span>
                                        </div>
                                    </a>
                                </div>
                                <div class="ic-latest-items">
                                    <img src="{{ asset('frontend/images/latest-post-1.png') }}" alt="">
                                    <a href="#">
                                        <div class="blog-content">
                                            <p>60 Common C# Interview Questions in 2022 : Ace Your Next Interview</p>
                                            <span>2 Jul 2022</span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-card">
                        <div class="card-inner">
                            <h6>Popular Tags</h6>
                            <div class="tags">
                                <span>Programming</span>
                                <span>IT</span>
                                <span>Science</span>
                                <span>Math</span>
                                <span>Technologies</span>
                                <span>Digital marketing</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
