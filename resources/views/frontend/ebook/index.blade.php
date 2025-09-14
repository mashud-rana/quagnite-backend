@extends('layouts.master')

@push('styles')
@endpush

@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part ic-section-space ic_v1_inner-part"
        style="background-image: linear-gradient(0deg, rgba(236, 248, 251, 0.95) 0%, rgba(236, 248, 251, 0.95) 100%),  url({{ asset('/new-frontend/images/business.png') }})">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-6">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="ic-heading-title mb-15">E-Book</span>
                        <h1 class="black pb-15 ic-inner-heading">Our E-Book List
                        </h1>
                        <div class="row">
                            <div class="col-xxl-11 col-lg-12">
                                <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of printing and typesetting.</p>
                                <div class="ic-video-programs">
                                    <a href="{{ route('reserve.ebook') }}" class="ic-btn">Reserve Your E-Book
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-right-side-img">
                        <img src="{{ asset('new-frontendv1/images/ebook/ebook.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- banner part end --}}

    {{-- e-book upcomming page --}}
    <section class="ic-accessibility-resources ic-section-space">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 m-auto">
                    <div class="header-bootcamp text-center">
                        <h2 class="black mb-3">Accessibility Resources</h2>
                        <p class="gray">Learn the advice, tips, and tricks from people and companies using segment
                            to power their data driven decisions.</p>
                    </div>
                </div>
            </div>
            {{-- your life --}}
            <div class="ic-accessibility-slider">
                @forelse ($randomEbooks as $item)
                    <div class="ic-accessibility-card">
                        <div class="ic-accessibility-card-left">
                            <a href="{{ route('ebooks.show', $item->slug) }}">
                                <img src="{{ getStoreFile($item->image, $item->storage_type) }}" class="img-fluid"
                                    alt="image accessibility">
                            </a>
                        </div>
                        <div class="ic-accessibility-card-right">
                            <span class="whats-book">Ebook</span>
                            <a href="{{ route('ebooks.show', $item->slug) }}">
                                <div class="tag-books">
                                    <span>{{ $item->category->name }}</span>
                                    {{-- <span>Learning</span>
                            <span>Data Since Stacture</span> --}}
                                </div>
                                <h4>{{ $item->title }}</h4>
                                <p>{!! str_limit($item->details, $words = 200, $end = '...') !!}</p>
                            </a>
                            <div class="download-button">

                                @if ($has_activeSubscription)
                                    <span data-ebook_id="{{ $item->id }}" data-route="{{ route('addToSubscribe') }}"
                                        class="ic-btn-simple addToSubscribe mt-lg-2 mt-1">Subscribe Now <i
                                            class="ri-arrow-right-line"></i></span>
                                @else
                                    <span data-ebook_id="{{ $item->id }}" data-route="{{ route('addToCart') }}"
                                        class="ic-btn-ebook addToCart">Add to cart
                                        <i class="ri-arrow-right-line"></i>
                                    </span>
                                @endif
                                <div class="ebook-authar">
                                    {{-- <img src="{{ getStoreFile('test') }}" class="img-fluid" alt=""> --}}
                                    <div>
                                        <p>{{ $item->author_name }}</p>
                                        <span>Book Authors</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                @endforelse
            </div>
            <div class="ic-arrows-buttons">
                <button class="accessibility-arrow-left"><i class="ri-arrow-left-line"></i></button>
                <button class="accessibility-arrow-right"><i class="ri-arrow-right-line"></i></button>
            </div>
            {{-- your life --}}
        </div>
    </section>
    {{-- e-book upcomming page --}}

    {{-- search ebook --}}
    <section class="ic-search-ebook ic-section-space"
        style="background: linear-gradient(180deg, #00385B -16.2%, #158DA7 113.04%);">
        <div class="container">
            <form action="#" class="search-group">
                <input id="searchInput" type="text" placeholder="Search E-book">
                <button>Search</button>
            </form>
            <div class="ic-ebook-list" id="ebookWrapper">
                <div class="row g-3 justify-content-center" id="loadDataContainer">
                    @forelse ($ebooks as $ebook)
                        <div class="col-lg-4 col-md-6">
                            <div class="ic-ebookShow-items">
                                <a href="{{ route('ebooks.show', $ebook->slug) }}">
                                    <div class="overflow-hidden ebookShow-img">
                                        <img src="{{ getStoreFile($ebook->image, $ebook->storage_type) }}"
                                            class="img-fluid w-100" alt="ebook items">
                                    </div>
                                    <div class="ic-content-ebookItems">
                                        <span class="ebookNames">{{ $ebook->author_name }}</span>
                                        <div class="ebookItems-tags">
                                            <span>{{ $ebook->category->name }}</span>
                                            {{-- <span>Learning</span>
                                    <span>Data Since</span> --}}
                                        </div>
                                        <p class="ebook-title">{!! str_limit($ebook->title, $words = 60, $end = '...') !!}</p>
                                    </div>
                                </a>
                                <div class="ebook-buttons">
                                    @if ($has_activeSubscription)
                                        <button data-ebook_id="{{ $ebook->id }}"
                                            data-route="{{ route('addToSubscribe') }}"
                                            class="ic-btn-outline addToSubscribe">Subscribe Now</button>
                                    @else
                                        <button data-ebook_id="{{ $ebook->id }}" data-route="{{ route('addToCart') }}"
                                            class="ic-btn-outline addToCart"><i class="ri-shopping-cart-2-line"></i> Add to
                                            cart</button>
                                    @endif

                                    <span>${{ $ebook->price }}</span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                    @endforelse
                </div>
                @if ($ebooks->hasMorePages())
                    <div class="mt-5 text-center">
                        <button id="BtnLoadMore" class="ic-btn-white" data-next-page="{{ $ebooks->nextPageUrl() }}">Load
                            More</button>
                    </div>
                @endif

            </div>
        </div>
    </section>
    {{-- search ebook --}}

    {{-- Reserve Your Book  --}}
    <section class="ic-reserve-ebook ic-section-space">
        <div class="container">
            <div class="header-bootcamp text-center pb-0">
                <h2 class="black">Upcoming Ebooks </h2>
            </div>
            <div class="ic-ebook-list">
                <div class="row g-3 justify-content-center" id="loadUpcomingContainer">
                    @forelse ($upcomingEbooks as $ebook)
                        <div class="col-lg-4 col-md-6">
                            <div class="ic-ebookShow-items">
                                <a href="{{ route('ebooks.show', $ebook->slug) }}">
                                    <div class="overflow-hidden ebookShow-img">
                                        <img src="{{ getStoreFile($ebook->image, $ebook->storage_type) }}"
                                            class="img-fluid w-100" alt="ebook items">
                                    </div>
                                    <div class="ic-content-ebookItems">
                                        <span class="ebookNames">{{ $ebook->author_name }}</span>
                                        <div class="ebookItems-tags">
                                            <span>{{ $ebook->category->name }}</span>
                                            {{-- <span>Learning</span>
                                <span>Data Since</span> --}}
                                        </div>
                                        <p class="ebook-title">{!! str_limit($ebook->title, $words = 60, $end = '...') !!}</p>
                                    </div>
                                </a>
                                <div class="ebook-buttons">
                                    @if ($has_activeSubscription)
                                        <button data-ebook_id="{{ $ebook->id }}"
                                            data-route="{{ route('addToSubscribe') }}"
                                            class="ic-btn-outline addToSubscribe">Subscribe Now</button>
                                    @else
                                        <button data-ebook_id="{{ $ebook->id }}"
                                            data-route="{{ route('addToCart') }}" class="ic-btn-outline addToCart"><i
                                                class="ri-shopping-cart-2-line"></i> Add to
                                            cart</button>
                                    @endif
                                    <span>${{ $ebook->price }}</span>
                                </div>
                            </div>
                        </div>
                    @empty
                        <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                    @endforelse
                </div>
                @if ($upcomingEbooks->hasMorePages())
                    <div class="mt-5 text-center">
                        <button id="UpBtnLoadMore" class="ic-btn-simple"
                            data-next-page="{{ $upcomingEbooks->nextPageUrl() }}">Load More</button>
                    </div>
                @endif
            </div>
        </div>
    </section>
    {{-- Reserve Your Book  --}}
@endsection

@push('scripts')
    <script src="{{ asset('frontend/js/addToSubscribe.js') }}"></script>
    <script src="{{ asset('frontend/js/addToCart.js') }}"></script>
    <script src="{{ asset('frontend/js/loadMore.js') }}"></script>
    <script>
        $(document).ready(function() {

            triggerLoadMoreEvent('BtnLoadMore', 'loadDataContainer');
            triggerLoadMoreEvent('UpBtnLoadMore', 'loadUpcomingContainer');

            // Search functionality
            document.getElementById('searchInput').addEventListener('keyup', (event) => {
                const query = event.target.value ? event.target.value : 0;
                const URL = '/ebook/search/' + query;
                performRequest(URL);
            });

            // document.getElementById('selectCategory').addEventListener("change", event => {
            //     const selectedOption = event.target.value;

            //     const URL = '/ebook/sort-by-category/' + selectedOption;

            //     performRequest(URL);
            // });

            // server request
            const performRequest = (URL) => {
                axios.get(URL)
                    .then(response => {
                        document.getElementById('ebookWrapper').innerHTML = response.data;

                        addToSubscribeEvent();
                        addToCartEvent();


                    })
                    .catch(error => {
                        // handle request
                    });
            }
        });
    </script>
@endpush
