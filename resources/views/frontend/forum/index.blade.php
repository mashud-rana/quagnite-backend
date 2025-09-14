@extends('layouts.master')

@section('content')
    <section class="ic-banner-part ic-section-space"
        style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/frontend') }}/images/forums-banner.png);">
        <!-- content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="ic-heading-title mb-15">Our Forum</span>
                        <h1 class="black pb-15 ic-inner-heading">Forum Listed Page</h1>
                        <div class="row">
                            <div class="col-xxl-11 col-lg-12">
                                <p class="color-deep-gray pb-30">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of printing and typesetting.
                                </p>
                                <div class="ic-video-programs">
                                    <a href="{{ route('forum.askQuestion') }}" class="ic-btn">Ask The Community.</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-right-side-img">
                        <img src="{{ asset('new-frontendv1/images/forum/forums.png') }}" class="img-fluid" alt="forums">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- ebook start -->
    <section class="ic-forum-main-part ic-section-space"
        style="background-image: url({{ asset('new-frontendv1/images/forum/forums-section-bg.png') }})">
        <div class="container">
            <!-- forum start -->
            <div class="forums-headers mb-27">
                <div class="filter-catagories">
                    <select name="old_new" class="selectpicker" id="selectOldNew">
                        <option value="new" selected>Latest first</option>
                        <option value="old">Oldest first</option>
                    </select>
                    {{-- <select name="old_new" class="selectpicker" id="selectOldNew">
                        <option value="new" selected>Most Voted</option>
                        <option value="old">Oldest first</option>
                    </select> --}}
                    <select name="category" class="selectpicker" id="selectCategory">
                        <option value="all" selected>Select Category</option>
                        @foreach ($forumCategories as $forumCategory)
                            <option value="{{ $forumCategory->id }}">{{ $forumCategory->name }}</option>
                        @endforeach
                    </select>
                    {{-- <button class="ic-btn-simple"><i class="ri-filter-line"></i>Filter</button> --}}
                </div>
                <a href="{{ route('forum.askQuestion') }}" class="ic-btn-white">Start New Discussion <i
                        class="ri-add-line"></i></a>
            </div>
            <div id="forumWrapper">
                <div class="forms-list-part pb-0" id="loadDataContainer">
                    @forelse ($forumPosts as $post)
                        <div class="forms-list">
                            <div class="ic-form-body">
                                <div class="forms-list--right">
                                    <h4 class="fw-500">{{ $post->title }}</h4>
                                    <p class="comment-text"> {!! substr(strip_tags($post->description), 0, 120) . '...' !!}
                                        <a href="{{ route('forum.forumPostDetails', $post->uuid) }}">Read
                                            More</a>
                                    </p>
                                </div>
                                <div class="forums-comments">
                                    <ul>
                                        <li>
                                            <a href="{{ route('forum.forumPostDetails', $post->uuid) }}">
                                                <div class="icon-circle share">
                                                    <i class="ri-share-forward-line"></i>
                                                </div>
                                            </a>

                                            <p>Answer</p>
                                            {{-- <p class="message-conversation">
                                            {{ $post->comments_count }} Comments
                                        </p> --}}
                                        </li>
                                        <li>
                                            <div class="icon-circle">
                                                <i class="ri-eye-line"></i>
                                            </div>
                                            <p class="message-conversation">
                                                {{ $post->seen }} Views
                                            </p>
                                        </li>
                                        <li>
                                            <div class="icon-circle arrows">
                                                <i class="ri-arrow-drop-up-fill"></i>
                                                <i class="ri-arrow-drop-down-fill"></i>
                                            </div>
                                            <p class="message-conversation">
                                                {{ $post->votes_sum_vote ?? 0 }} Votes
                                            </p>
                                        </li>

                                    </ul>



                                </div>
                            </div>
                            <div class="bottom-info">
                                <div class="avatar">
                                    <img src="{{ getStoreFile($post->user->avatar, $post->user->storage_type) }}"
                                        class="img-fluid" alt="images">
                                </div>
                                <div class="list-paragraph">
                                    <p>Post from {{ $post->user->first_name }} Asked
                                        {{ $post->created_at->diffForHumans() }} in <a
                                            href="#">{{ $post->forumCategory->name }}</a></p>
                                </div>
                                {{-- <div class="tags">
                                <span class="warnnig">Important</span>
                                <span class="success">How To</span>
                                <span class="danger">General</span>
                            </div> --}}
                            </div>
                        </div>
                    @empty
                        <x-frontend.data-notfound></x-frontend.data-notfound>
                    @endforelse
                </div>
                @if ($forumPosts->hasMorePages())
                    <div class="ic-load-more pt-xl-4 pt-sm-3 pt-2">
                        <button id="BtnLoadMore" class="ic-btn" data-next-page="{{ $forumPosts->nextPageUrl() }}"> Load
                            more </button>
                    </div>
                @endif
            </div>
            <!-- forum end -->
        </div>
    </section>
    <!-- ebook end -->
@endsection

@push('scripts')
    <script src="{{ asset('common/custom/js/load-more.js') }}"></script>
    <script>
        // Search functionality
        // document.getElementById('searchInput').addEventListener('keyup', (event) => {
        //     const query = event.target.value ? event.target.value : 0;
        //     const URL = '/forum/search/' + query;
        //     performRequest(URL);
        // });

        document.getElementById('selectOldNew').addEventListener("change", event => {
            const selectedOption = event.target.value;

            const URL = '/forum/sort-by-old-new/' + selectedOption;
            performRequest(URL);
        });

        document.getElementById('selectCategory').addEventListener("change", event => {
            const selectedOption = event.target.value;

            const URL = '/forum/sort-by-category/' + selectedOption;

            performRequest(URL);
        });

        // server request
        const performRequest = (URL) => {
            axios.get(URL)
                .then(function(response) {
                    document.getElementById('forumWrapper').innerHTML = response.data;

                    addLoadMoreBtnEvent();
                    // Process the search results here
                })
                .catch(function(error) {
                    // handle request
                });
        }
    </script>
@endpush
