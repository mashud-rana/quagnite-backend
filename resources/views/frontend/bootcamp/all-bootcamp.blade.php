@extends('layouts.master')

@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part ic-section-space ic_v1_inner-part bg-img-center-property"
        style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-md-6 ">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="ic-heading-title mb-15">Bootcamp Details</span>
                        <h1 class="black pb-15">All Bootcamp List</h1>
                        <div class="row">
                            <div class="col-xxl-10 col-lg-12">
                                <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s, when an
                                    unknown printer took a galley of
                                </p>
                                {{-- <div class="ic-video-programs">
                                    <a href="#" class="ic-btn">Explore Programs</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-md-block d-none ">
                    <div class="ic-right-side-img text-end">
                        <img src="{{ asset('new-frontendv1/images/bootcamp.png') }}" class="img-fluid" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- banner part end --}}

    {{-- Recommended for you --}}
    <div class="ic-section-space bg-img-center-property"
        style="background-image: linear-gradient(180deg, rgba(0, 56, 91, 0.97) 1.2%, rgba(21, 141, 167, 0.97) 100%)">
        <div class="container">
            <div class="header-bootcamp text-center">
                <h2 class="white">Recommended for you</h2>
            </div>
            <div class="business-tabs">
                <div class="business-items active" id="business-1">
                    <div class="justify-content-center row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-3 g-2 mb-50"
                        id="loadDataContainer">
                        @forelse ($recommendBootcamps as $item)
                            <div class="col">
                                <div class="ic-v1-bootcams-items">
                                    <div class="ic-list-image position-relative">
                                        <img src="{{ getStoreFile($item->image, $item->storage_type) }}"
                                            class="img-fluid w-100" alt="">
                                        <div class="coach-names">
                                            <p>{{ $item->user->full_name }}</p>
                                        </div>
                                    </div>
                                    <div class="ic-list-conetnt">
                                        <a class="black" href="{{ route('bootcamp.details', $item->slug) }}">
                                            <p class="sub-title"> {!! str_limit($item->title, $words = 30, $end = '...') !!} </p>
                                        </a>

                                        <div class="list-conetnt-info">
                                            <div class="bootcams-course-details">
                                                <p><i class="ri-calendar-check-fill"></i> Bootcamp start
                                                    {{ \Carbon\Carbon::parse($item->start_date)->format('d M, Y') }}</p>
                                                <p><i class="ri-time-line"></i> Program Duration-{{ $item->duration_month }}
                                                    Months</p>
                                            </div>

                                            <div class="bootcams-course-review border-0">
                                                <p class="review-course">
                                                    @php
                                                        $avgRating = $item->average_rating;
                                                        $starClass = $avgRating >= 0.5 ? 'yellow' : 'gray-400';
                                                    @endphp

                                                    @for ($i = 1; $i <= 5; $i++)
                                                        @if ($i <= round($avgRating))
                                                            <i class="ri-star-s-fill {{ $starClass }}"></i>
                                                        @else
                                                            <i class="ri-star-s-line {{ $starClass }}"></i>
                                                        @endif
                                                    @endfor
                                                </p>
                                                <p class="ratting-count">{{ number_format($avgRating, 2) }}</p>
                                                <p class="counts">({{ $item->total_review }})</p>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="coach-price d-flex align-items-center justify-content-between">
                                        <div class="d-flex align-items-center gap-2">
                                            <h4 class="primary">${{ $item->price }}</h4>
                                            <p class="text-decoration-line-through primary">${{ $item->old_price }}</p>
                                        </div>
                                        <span class="course-addCart addToCart" data-bootcamp_id="{{ $item->id }}"
                                            data-route="{{ route('addToCart') }}" title="Add to Cart">
                                            <i class="ri-shopping-cart-2-line"></i>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <x-frontend.data-notfound></x-frontend.data-notfound>
                        @endforelse
                    </div>
                    @if ($recommendBootcamps->hasMorePages())
                        <div class="mt-xxl-5 mt-xl-4 mt-3 text-center">
                            <button id="BtnLoadMore" class="ic-btn-white"
                                data-next-page="{{ $recommendBootcamps->nextPageUrl() }}">Load
                                More </button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
    {{-- Recommended for you --}}

    {{-- Top Bootcamps --}}
    <section class="ic-section-space ic-machine-learning bg-img-center-property"
        style="background-image: url({{ asset('new-frontendv1/images/machine-learning-bootcamps.png') }})">
        <div class="container">
            <div class="header-bootcamp text-center">
                <h2 class="black">Top Bootcamps</h2>
            </div>
            <div class="justify-content-center row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-3 g-2 mb-50"
                id="toploadDataContainer">
                @forelse ($topBootcamps as $item)
                    <div class="col ">
                        <div class="ic-v1-bootcams-items">
                            <div class="ic-list-image position-relative">
                                <img src="{{ getStoreFile($item->image, $item->storage_type) }}" class="img-fluid w-100"
                                    alt="">
                                <div class="coach-names">
                                    <p>{{ $item->user->full_name }}</p>
                                </div>
                            </div>
                            <div class="ic-list-conetnt">
                                <a class="black" href="{{ route('bootcamp.details', $item->slug) }}">
                                    <p class="sub-title"> {!! str_limit($item->title, $words = 30, $end = '...') !!} </p>
                                </a>
                                <div class="list-conetnt-info">
                                    <div class="bootcams-course-details">
                                        <p><i class="ri-calendar-check-fill"></i> Bootcamp start
                                            {{ \Carbon\Carbon::parse($item->start_date)->format('d M, Y') }}</p>
                                        <p><i class="ri-time-line"></i> Program Duration-{{ $item->duration_month }}
                                            Months</p>
                                    </div>

                                    <div class="bootcams-course-review border-0">
                                        <p class="review-course">
                                            @php
                                                $avgRating = $item->average_rating;
                                                $starClass = $avgRating >= 0.5 ? 'yellow' : 'gray-400';
                                            @endphp

                                            @for ($i = 1; $i <= 5; $i++)
                                                @if ($i <= round($avgRating))
                                                    <i class="ri-star-s-fill {{ $starClass }}"></i>
                                                @else
                                                    <i class="ri-star-s-line {{ $starClass }}"></i>
                                                @endif
                                            @endfor
                                        </p>
                                        <p class="ratting-count">{{ number_format($avgRating, 2) }}</p>
                                        <p class="counts">({{ $item->total_review }})</p>
                                    </div>
                                </div>
                            </div>
                            <div class="coach-price d-flex align-items-center justify-content-between">
                                <div class="d-flex align-items-center gap-2">
                                    <h4 class="primary">${{ $item->price }}</h4>
                                    <p class="text-decoration-line-through primary">${{ $item->old_price }}</p>
                                </div>
                                <span class="course-addCart addToCart" data-bootcamp_id="{{ $item->id }}"
                                    data-route="{{ route('addToCart') }}" title="Add to Cart">
                                    <i class="ri-shopping-cart-2-line"></i>
                                </span>
                            </div>
                        </div>
                    </div>
                @empty
                    <x-frontend.data-notfound></x-frontend.data-notfound>
                @endforelse
            </div>
            @if ($topBootcamps->hasMorePages())
                <div class="mt-xxl-5 mt-xl-4 mt-3 text-center">
                    <button id="topBtnLoadMore" class="ic-btn-outline"
                        data-next-page="{{ $topBootcamps->nextPageUrl() }}">Load
                        More </button>
                </div>
            @endif
        </div>
    </section>
    {{-- active goal --}}
    <x-frontend.achieve-goals></x-frontend.achieve-goals>
    {{-- active goal --}}
@endsection

@push('scripts')
    <script src="{{ asset('frontend/js/loadMore.js') }}"></script>
    <script src="{{ asset('frontend/js/addToCart.js') }}"></script>
    <script>
        $(document).ready(function() {

            triggerLoadMoreEvent('BtnLoadMore', 'loadDataContainer');
            triggerLoadMoreEvent('topBtnLoadMore', 'toploadDataContainer');
        });
    </script>
@endpush
