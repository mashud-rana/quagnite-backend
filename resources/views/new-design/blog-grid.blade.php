@extends('layouts.master')

@push('styles')
@endpush

@section('content')
    <section class="ic-banner-part"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)), url('{{ asset('/new-frontend/images/blog-details.png') }}');">
        <!-- content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ic-banner-content ps-0">
                        <span class="ic-heading-title mb-15">Blog List</span>
                        <h1 class="black pb-15">Blog List Page</h1>
                        <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of printing and typesetting.</p>
                        <a href="#" class="ic-btn">Explore Courses</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-right-side-img">
                        <img src="{{ asset('new-frontend/images/blog-details-right.png') }}" class="img-fluid"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- blog-list --}}
    <section class="ic-blog-list ic-section-space">
        <div class="container">
            <div class="ic-switch-grid">
                <div class="switch-buttons">
                </div>
                <div class="ic-searchfilter">
                    <div class="position-relative">
                        <input type="text" placeholder="Search your Coaches">
                        <i class="ri-search-line"></i>
                    </div>
                    <button class="ic-btn" id="topFilterBtn"><i class="ri-filter-line"></i>Filter</button>
                </div>
            </div>
            <div class="toggleFilterDiv hide">
                <div class="sort-filter">
                    <div class="filter-items">
                        <div class="form-group">
                            <label for="#">Short By </label>
                            <select name="" class="selectpicker" id="">
                                <option value="0">Price: low to high</option>
                                <option value="0">Price: high to low</option>
                            </select>
                        </div>
                    </div>
                    <div class="filter-items">
                        <div class="form-group">
                            <label for="#">Short By Coach </label>
                            <select name="" class="selectpicker" id="">
                                <option value="0">Select Coach</option>
                                <option value="0">Select Coach</option>
                            </select>
                        </div>
                    </div>
                    <div class="filter-items">
                        <div class="form-group">
                            <label for="#">Short By Category</label>
                            <select name="" class="selectpicker" id="">
                                <option value="0">Select Coach</option>
                                <option value="0">Select Coach</option>
                            </select>
                        </div>
                    </div>
                    <div class="filter-items">
                        <div class="form-group">
                            <label for="#">Short By Category</label>
                            <div class="range">
                                <div class="range-slider">
                                    <span class="range-selected"></span>
                                </div>
                                <div class="range-input">
                                    <input type="range" class="min" min="0" max="1000" value="300"
                                        step="10">
                                    <input type="range" class="max" min="0" max="1000" value="700"
                                        step="10">
                                </div>
                                <div class="range-price">
                                    <div>
                                        <label for="min">$</label>
                                        <input type="number" name="min" value="300">
                                        <label for="max">$</label>
                                        <input type="number" name="max" value="700">
                                    </div>
                                    <div>
                                        <button class="ic-btn">Filter</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
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
    </section>
    {{-- blog-list --}}
@endsection

@push('scripts')
@endpush
