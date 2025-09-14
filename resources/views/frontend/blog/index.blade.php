@extends('layouts.master')

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
                                    <a href="{{ route('all.courses') }}" class="ic-btn">Explore Courses <i
                                            class="ri-arrow-right-line"></i></a>
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

    {{-- blog-list --}}
    <section class="ic-blog-list ic-section-space" style="background: linear-gradient(180deg, #FFF 0%, #D3EDF3 100%);">
        <div class="container">

            <div class="data-science-navs blog-list-navs">
                <ul>
                    <li> <a href="#" onclick="searchBycategory(event, 'all')">All</a></li>
                    @foreach ($blogCategories as $category)
                        <li>
                            <a href="#"
                                onclick="searchBycategory(event, {{ $category->id }})">{{ $category->name }}</a>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="business-tabs" id="blogWrapper">
                <div class="business-items active">
                    <div class="justify-content-center row  row-cols-xl-3 row-cols-md-2 row-cols-1 g-xl-4 g-sm-3 g-2 "
                        id="loadDataContainer">
                        @forelse($blogs as $blog)
                            <div class="col">
                                <a href="{{ route('blog.details', $blog->slug) }}">
                                    <div class="ic-latest-blog-item">
                                        <div class="ic-item-image position-relative">
                                            <p class="ic-event-bage">{{ $blog->category->name }}</p>
                                            <img src="{{ $blog->image_path }}" class="img-fluid w-100" alt="">
                                        </div>
                                        <div class="ic-item-conetnt-wrapper">
                                            {{-- <div class="ic-item-like-comment">
                                                <div><i class="ri-thumb-up-line"></i> <span>2,729</span> Like</div>
                                                <div><i class="ri-chat-3-line"></i> <span>273</span> Comments</div>
                                            </div> --}}
                                            <span class="ic-sub-title">{{ $blog->title }}
                                            </span>
                                            {{-- <p class="ic-item-des">

                                            </p> --}}
                                            {!! str_limit($blog->details, $words = 70, $end = '...') !!}
                                            <div class="ic-bloger-info">
                                                <div class="img-box">
                                                    <img src="{{ getStoreFile($blog->user->avatar, $blog->user->storage_type) }}"
                                                        alt="">
                                                </div>
                                                <div class="bloger-details">
                                                    <span class="name d-block">
                                                        {{ $blog->user->full_name }}
                                                    </span>
                                                    <span class="designation">
                                                        MCdns Learning
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <x-frontend.data-notfound></x-frontend.data-notfound>
                        @endforelse
                    </div>


                    @if ($blogs->hasMorePages())
                        <div class="ic-load-more">
                            <button id="BtnLoadMore" class="ic-btn" data-next-page="{{ $blogs->nextPageUrl() }}"> Load
                                more </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    {{-- blog-list --}}

    {{-- bootcamp training and Employee section start --}}
    <section class="ic-bootcamp-employee-section" style="background: linear-gradient(180deg, #FFF 0%, #D3EDF3 100%);">
        <div class="container">
            <div class="ic-bootcamp-traning-area ic-section-space">
                <div class="ic-blog-list-heading">
                    <h2>Top Views</h2>
                </div>
                <div class="ic-training-items ic-section-space-bottom">
                    <div class="justify-content-center row  row-cols-xl-3 row-cols-md-2 row-cols-1 g-xl-4 g-sm-3 g-2"
                        id="topViewloadDataContainer">
                        @forelse($bootcampBlogs as $bootcamps)
                            <div class="col">
                                <a href="{{ route('blog.details', $bootcamps->slug) }}">
                                    <div class="ic-latest-blog-item">
                                        <div class="ic-item-image position-relative">
                                            <p class="ic-event-bage">{{ $bootcamps->category->name }}</p>
                                            <img src="{{ $bootcamps->image_path }}" class="img-fluid w-100" alt="">
                                        </div>
                                        <div class="ic-item-conetnt-wrapper">
                                            {{-- <div class="ic-item-like-comment">
                                                <div><i class="ri-thumb-up-line"></i> <span>2,729</span> Like</div>
                                                <div><i class="ri-chat-3-line"></i> <span>273</span> Comments</div>
                                            </div> --}}
                                            <span class="ic-sub-title">{{ $bootcamps->title }}
                                            </span>
                                            {{-- <p class="ic-item-des">

                                            </p> --}}
                                            {!! str_limit($bootcamps->details, $words = 70, $end = '...') !!}
                                            <div class="ic-bloger-info">
                                                <div class="img-box">
                                                    <img src="{{ getStoreFile($bootcamps->user->avatar, $bootcamps->user->storage_type) }}"
                                                        alt="">
                                                </div>
                                                <div class="bloger-details">
                                                    <span class="name d-block">
                                                        {{ $bootcamps->user->full_name }}
                                                    </span>
                                                    <span class="designation">
                                                        MCdns Learning
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <x-frontend.data-notfound></x-frontend.data-notfound>
                        @endforelse
                    </div>

                    @if ($bootcampBlogs->hasMorePages())
                        <div class="ic-load-more">
                            <button id="topViewBtnLoadMore" class="ic-btn"
                                data-next-page="{{ $bootcampBlogs->nextPageUrl() }}">
                                Load
                                more </button>
                        </div>
                    @endif
                    {{-- <div class=" text-center">
                        <a href="#" class="ic-btn-simple">Explore Bootcamp <i class="ri-arrow-right-line"></i></a>
                    </div> --}}
                </div>
            </div>
            <div class="ic-employee-training-area">
                <div class="ic-blog-list-heading">
                    <h2>Recent Blog</h2>
                </div>
                <div class="ic-training-items">
                    <div class="justify-content-center row  row-cols-xl-3 row-cols-md-2 row-cols-1 g-xl-4 g-sm-3 g-2"
                        id="recentLoadDataContainer">
                        @forelse($employeeBlogs as $employee)
                            <div class="col">
                                <a href="{{ route('blog.details', $employee->slug) }}">
                                    <div class="ic-latest-blog-item">
                                        <div class="ic-item-image position-relative">
                                            <p class="ic-event-bage">{{ $employee->category->name }}</p>
                                            <img src="{{ $employee->image_path }}" class="img-fluid w-100" alt="">
                                        </div>
                                        <div class="ic-item-conetnt-wrapper">
                                            {{-- <div class="ic-item-like-comment">
                                                <div><i class="ri-thumb-up-line"></i> <span>2,729</span> Like</div>
                                                <div><i class="ri-chat-3-line"></i> <span>273</span> Comments</div>
                                            </div> --}}
                                            <span class="ic-sub-title">{{ $employee->title }}
                                            </span>
                                            {{-- <p class="ic-item-des">

                                            </p> --}}
                                            {!! str_limit($employee->details, $words = 70, $end = '...') !!}
                                            <div class="ic-bloger-info">
                                                <div class="img-box">
                                                    <img src="{{ getStoreFile($blog->user->avatar, $blog->user->storage_type) }}"
                                                        alt="">
                                                </div>
                                                <div class="bloger-details">
                                                    <span class="name d-block">
                                                        {{ $employee->user->full_name }}
                                                    </span>
                                                    <span class="designation">
                                                        MCdns Learning
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        @empty
                            <x-frontend.data-notfound></x-frontend.data-notfound>
                        @endforelse
                    </div>

                    @if ($employeeBlogs->hasMorePages())
                        <div class="ic-load-more pb-10">
                            <button id="recentBtnLoadMore" class="ic-btn"
                                data-next-page="{{ $employeeBlogs->nextPageUrl() }}">
                                Load
                                more </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    {{-- bootcamp training section start --}}
    <!-- {{-- achieve goals start --}} -->
    <x-frontend.achieve-goals></x-frontend.achieve-goals>
    <!-- {{-- achieve goals end --}} -->
@endsection

@push('scripts')
    <script src="{{ asset('common/custom/js/load-more.js') }}"></script>
    <script src="{{ asset('frontend/js/loadMore.js') }}"></script>
    <script>
        // Search functionality
        // document.getElementById('searchInput').addEventListener('keyup', (event) => {
        //     const query = event.target.value ? event.target.value : 0;
        //     const URL = '/blog/search/' + query;
        //     performRequest(URL);
        // });
        // Search by category
        const searchBycategory = (event, id) => {
            event.preventDefault();
            const URL = '/blog/search-by-category/' + id;
            performRequest(URL);
        }
        // Search by tag
        const searchByTag = (event, id) => {
            event.preventDefault();
            const URL = '/blog/search-by-tag/' + id;
            performRequest(URL);
        }
        // server request
        const performRequest = (URL) => {
            axios.get(URL)
                .then(function(response) {
                    $('#blogWrapper').html(response.data);

                    if ($("#BtnLoadMore").length) {
                        addLoadMoreBtnEvent();
                    }

                })
                .catch(function(error) {
                    console.log(error);
                    $('#blogWrapper').html('<p class="text-center">Somethings went wrong. Please try again!<p>');
                });
        }
        $(document).ready(function() {

            triggerLoadMoreEvent('topViewBtnLoadMore', 'topViewloadDataContainer');
            triggerLoadMoreEvent('recentBtnLoadMore', 'recentLoadDataContainer');
        });
    </script>
@endpush
