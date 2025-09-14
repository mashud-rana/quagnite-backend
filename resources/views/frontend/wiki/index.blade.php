@extends('layouts.master')

@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part ic-section-space ic_v1_inner-part bg-img-center-property"
        style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-md-6">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="ic-heading-title mb-15">Wiki List</span>
                        <h1 class="black pb-15">Wiki List Page</h1>
                        <div class="row">
                            <div class="col-xxl-10 col-lg-12">
                                <p class="color-deep-gray pb-30">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of printing and typesetting.
                                </p>
                                <div class="ic-video-programs">
                                    <a href="{{ route('all.bootcamps') }}" class="ic-btn bg-effect">
                                        Explore Bootcamp
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 d-md-block d-none ">
                    <div class="ic-right-side-img text-end">
                        <img src="{{ asset('new-frontendv1/images/wiki-banner-bg.png') }}" class="img-fluid" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- banner part end --}}
    {{-- content start --}}
    <section class="ic-wiki-details-content ic-section-space bg-img-center-property">
        <div class="ic-top-feature  ">
            <div class="container">
                <div class="top-content ic-section-space-bottom ">
                    <div class="row gx-xxl-4  gx-lg-3">
                        <div class="col-lg-6 big-card-content-wrapper">
                            @forelse($randomSingle as $wiki)
                                <div class="position-relative overlay big-card">
                                    <img src="{{ $wiki->image_path }}" class="" alt="wiki image">
                                    <div class="content">
                                        <a class="user-info" href="">
                                            <div class="icon">
                                                <i class="ri-user-line"></i>
                                            </div>
                                            {{ $wiki->user->full_name }}
                                        </a>

                                        <div class="bottom-content">
                                            <div class="intro-info">
                                                <div class="ic-intro-badge">
                                                    {{ $wiki->category->name }}
                                                </div>
                                                <div class="ic-date">
                                                    <i class="ri-calendar-todo-line"></i>
                                                    {{ custom_date($wiki->created_at) }}
                                                </div>
                                            </div>

                                            <h4>
                                                {{ $wiki->title }}
                                            </h4>

                                            <a class="read-more" href="{{ route('wiki.details', $wiki->slug) }}">
                                                Read More
                                                <i class="ri-arrow-right-line"></i>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="col-lg-6  small-card-content-wrapper">
                            <div class="row">
                                @foreach ($randomTwo as $wiki)
                                    <div class="col-lg-12 common-col">
                                        <div class="position-relative overlay small-card">
                                            <img src="{{ $wiki->image_path }}" class="" alt="wiki image">
                                            <div class="content">
                                                <a class="user-info" href="">
                                                    <div class="icon">
                                                        <i class="ri-user-line"></i>
                                                    </div>
                                                    {{ $wiki->user->full_name }}
                                                </a>

                                                <div class="bottom-content">
                                                    <div class="intro-info">
                                                        <div class="ic-intro-badge">
                                                            {{ $wiki->category->name }}
                                                        </div>
                                                        <div class="ic-date">
                                                            <i class="ri-calendar-todo-line"></i>
                                                            {{ custom_date($wiki->created_at) }}
                                                        </div>
                                                    </div>

                                                    <h4>
                                                        {{ $wiki->title }}
                                                    </h4>

                                                    <a class="read-more" href="{{ route('wiki.details', $wiki->slug) }}">
                                                        Read More
                                                        <i class="ri-arrow-right-line"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                               
                            </div>
                        </div>
                    </div>
                </div>



                <div class="bottom-content">
                    <div class="heading text-center mb-50">
                        <h1>Spotlight</h1>
                    </div>
                    <div class="row row-cols-lg-3 row-cols-md-2 gx-xxl-4 gx-xl-3 gx-sm-2 justify-content-center common-card-row"
                        id="loadDataContainer">
                        @forelse ($wikis as $wiki)
                            <div class="common-card-content-wrapper">
                                <div class="position-relative overlay common-card">
                                    <img src="{{ $wiki->image_path }}" class="" alt="">
                                    <div class="content">
                                        <a class="user-info" href="">
                                            <div class="icon">
                                                <i class="ri-user-line"></i>
                                            </div>
                                            {{ $wiki->user->full_name }}
                                        </a>

                                        <div class="bottom-content">
                                            <div class="intro-info">
                                                <div class="ic-intro-badge">
                                                    {{ $wiki->category->name }}
                                                </div>
                                                <div class="ic-date">
                                                    <i class="ri-calendar-todo-line"></i>
                                                    {{ custom_date($wiki->created_at) }}
                                                </div>
                                            </div>

                                            <h4>
                                                {{ $wiki->title }}
                                            </h4>

                                            <a class="read-more" href="{{ route('wiki.details', $wiki->slug) }}">
                                                Read More
                                                <i class="ri-arrow-right-line"></i>

                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <x-frontend.data-notfound></x-frontend.data-notfound>
                        @endforelse
                    </div>
                    @if ($wikis->hasMorePages())
                        <div class="ic-load-more">
                            <button id="BtnLoadMore" class="ic-btn" data-next-page="{{ $wikis->nextPageUrl() }}">
                                Load
                                more</button>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </section>
    {{-- content end --}}


    <!-- {{-- achieve goals start --}} -->
    <x-frontend.achieve-goals-light></x-frontend.achieve-goals-light>
    <!-- {{-- achieve goals end --}} -->
    {{-- wiki page --}}
@endsection
@push('scripts')
    <script src="{{ asset('common/custom/js/load-more.js') }}"></script>
    <script src="{{ asset('frontend/js/loadMore.js') }}"></script>
    <script>
        // Search functionality
        document.getElementById('searchInput').addEventListener('keyup', (event) => {
            const query = event.target.value ? event.target.value : 0;
            const URL = '/wiki/search/' + query;
            performRequest(URL);
        });

        document.getElementById('selectOldNew').addEventListener("change", event => {
            const selectedOption = event.target.value;

            const URL = '/wiki/sort-by-old-new/' + selectedOption;
            performRequest(URL);
        });

        document.getElementById('selectCategory').addEventListener("change", event => {
            const selectedOption = event.target.value;

            const URL = '/wiki/sort-by-category/' + selectedOption;

            performRequest(URL);
        });

        // server request
        const performRequest = (URL) => {
            axios.get(URL)
                .then(function(response) {
                    document.getElementById('wikiWrapper').innerHTML = response.data;

                    addLoadMoreBtnEvent();
                    // Process the search results here
                })
                .catch(function(error) {
                    // handle request
                });
        }
        $(document).ready(function() {

            triggerLoadMoreEvent('BtnLoadMore', 'loadDataContainer');
        });
    </script>
@endpush
