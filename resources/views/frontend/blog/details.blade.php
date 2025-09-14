@extends('layouts.master')

@push('styles')
<style>
    #social-links ul {
       display: flex;
    }
</style>
@endpush

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
                                    <a href="{{ route('blog.index') }}" class="ic-btn bg-effect">
                                        Explore Blog
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
                <div class="top-content pb-50">
                    <div class="big-card-content-wrapper mb-40">
                        <div class="position-relative overlay blog-big-card wiki blog-details">
                            <img class="blog-big-card-img" src="{{ $blog->image_path }}" class="" alt="">
                            <div class="content">
                                <div class="intro-info mb-0">
                                    <div class="ic-intro-badge">
                                        {{ $blog->category->name }}
                                    </div>
                                </div>
                                <div class="bottom-content d-block mt-auto">
                                    <div class="heading text-center mb-20">
                                        <h3 class="white">{{ $blog->title }}</h3>
                                    </div>

                                    <div class="ic-social-profile-wrapper">
                                        <div class="ic-profile-wrapper">
                                            <img src="{{ getStoreFile($blog->user->avatar, $blog->user->storage_type) }}"
                                                alt="Writer">
                                            <div class="ic-content">
                                                <h6>
                                                    @php
                                                        $author = $blog->user->full_name;
                                                    @endphp
                                                    {{ $author }}
                                                </h6>
                                                <p> {{ \Carbon\Carbon::parse($blog->created_at)->format('d F, Y | h:i A') }}
                                                </p>
                                            </div>
                                        </div>
                                        {{-- <ul class="ic-social-wrapper">
                                            <li><a href=""><i class="ri-facebook-fill"></i></a></li>
                                            <li><a href=""><i class="ri-twitter-fill"></i></a></li>
                                            <li><a href=""><i class="ri-instagram-line"></i></a></li>
                                            <li><a href=""><i class="ri-linkedin-fill"></i></a></li>
                                        </ul> --}}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="blog-content mb-50">
                        <p>
                            {!! $blog->details !!}
                        </p>

                        {{-- <div class="ic-quote">
                            <div class="ic-quote-abs">
                                <img src="{{ asset('/new-frontendv1/images/wiki/quotation.svg') }}" class=""
                                    alt="">
                            </div>
                            <div class="quote-content">
                                “Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum
                                lorem sed risus ultricies viverra ipsum nunc aliquet bibendum. Magna sit amet purus gravida
                                quis blandit. Arcu cursus vitae congue mauris.“
                            </div>
                        </div> --}}

                    </div>

                    <div class="ic-share-wrapper">
                        <ul class="ic-social-wrapper">
                            <ul class="ic-social-wrapper">
                                <li>
                                    <p>Share</p>
                                </li>
                                {!! $buttons !!}
                            </ul>
                        </ul>

                        <div class="ic-blog-badge-wrapper">
                            <a onclick="searchByTag(event, 'all')" href="#" class="ic-blog-badge">All</a>
                            @foreach ($blogTags as $tag)
                                <a class="ic-blog-badge" onclick="searchByTag(event, {{ $tag->id }})"
                                    href="#">{{ $tag->name }}</a>
                            @endforeach
                            {{-- <div class="ic-blog-badge active">DevOps</div>
                            <div class="ic-blog-badge">Stock</div>
                            <div class="ic-blog-badge">Linux</div> --}}
                        </div>
                    </div>


                </div>
                <div class="ic-reply-box border-top border-bottom ">
                    <div class="ic-heading ic-massage-blog ">
                        <div class="ic-heaing-content mb-2">
                            <h4 class="black fw-600 pb-2">Leave a Reply</h4>
                            <p class="ic-des gray fw-300">Your email address will not be published. Required fields are
                                marked *</p>
                        </div>
                        <div class="ic-form">
                            <form action="{{ route('blog.comment.store') }}" method="post">
                                @csrf
                                <input type="hidden" name="blog_id" value="{{ $blog->id }}">
                                <div class="row mb-30 g-3">
                                    <!-- Full Name -->
                                    <div class="col-lg-6 col-md-12 mb-22">
                                        <label for="" class="form-label">Full Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Name"
                                            value="{{ Auth::user()->first_name ?? '' }}">
                                    </div>
                                    <!-- Email -->
                                    <div class="col-lg-6 col-md-12 mb-22">
                                        <label for="" class="form-label">Your Email</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Email address" value="{{ Auth::user()->email ?? '' }}">
                                    </div>
                                    <!-- message -->
                                    <div class="col-lg-12 mb-22">
                                        <label for="inputEmail4" class="form-label">Write your comment here… *</label>
                                        <textarea name="comment" class="form-control textarea" style="height: 190px" placeholder="Write your comment here…"></textarea>
                                    </div>
                                    <!-- message -->
                                    {{-- <div class="col-lg-12 mb-22">
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input pointer" id="exampleCheck1">
                                            <label class="form-check-label pointer" for="exampleCheck1">
                                                Save my name, email, and website in this browser for the next time I comment.
                                            </label>
                                        </div>
                                    </div> --}}
                                </div>

                                <div class="ic-submit">
                                    <button class="ic-btn" type="submit">
                                        Blog Comment <i class="ri-send-plane-2-line"></i>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="ic-bootcamp-traning-area ic-section-space-top">
                    <div class="ic-blog-list-heading">
                        <h2>Explore Similar Category Blog</h2>
                    </div>
                    <div class="ic-training-items">
                        <div
                            class="row  row-cols-xl-3 row-cols-md-2 row-cols-1 gx-xxl-4 gx-xl-3 gx-2  gy-xxl-4 gy-xl-3 gy-2">
                            @foreach ($relatedBlogs as $blog)
                                <div class="col">
                                    <a href="{{ route('blog.details', $blog->slug) }}">
                                        <div class="ic-latest-blog-item">
                                            <div class="ic-item-image position-relative">
                                                <p class="ic-event-bage">{{ $blog->category->name }}</p>
                                                <img src="{{ $blog->image_path }}" class="img-fluid w-100"
                                                    alt="">
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
                            @endforeach
                        </div>

                        <div class="text-center mt-30">
                            <a href="{{ route('blog.index') }}" class="ic-btn-simple">Explore blog <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- content end --}}
    <!-- {{-- achieve goals start --}} -->
    {{-- <x-frontend.achieve-goals></x-frontend.achieve-goals> --}}
    <!-- {{-- achieve goals end --}} -->
@endsection

@push('scripts')
<script src="{{ asset('js/share.js') }}"></script>
@endpush
