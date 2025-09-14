@extends('layouts.master')
@push('styles')
    <style>
        #social-links ul {
            display: flex;

        }

        #social-links ul li {
            padding: 0px 10px;
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
                        <span class="ic-heading-title mb-15">Wiki List</span>
                        <h1 class="black pb-15">Wiki Details Page</h1>
                        <div class="row">
                            <div class="col-xxl-10 col-lg-12">
                                <p class="color-deep-gray pb-30">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of printing and typesetting.
                                </p>
                                <div class="ic-video-programs">
                                    <a href="{{ route('forum.askQuestion') }}" class="ic-btn bg-effect">
                                        Ask The Community.
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

    <!-- ebook start -->
    {{-- <section class="ic__forumsDetails--part z-3 ic-section-space bg-white">
        <div class="container">
            <div class="ic__wiki--detailsHeader">
                    <p class="ic-wiki-title">{{$wiki->category->name}}</p>
                    @if ($wiki->tags->count() > 0)
                    @foreach ($wiki->tags as $tag)
                    <p class="ic-wiki-subTitle">{{$tag->tag->name}}</p>
                    @endforeach
                    @endif
                    <h3>{{$wiki->title}}</h3>
                </div>
            <div class="ic__blog--detailsPart position-relative z-1">
                <div class="ic__blog--detailsImg">
                    <img src="{{ $wiki->image_path }}" class="img-fluid w-100" alt="image">
                    <div class="ic-blog-text-overly">
                        <div class="ic-blog-heading">
                            <span class="program">{{ $wiki->category->name }}</span>
                            <p class="blog-title">{{ $wiki->title }}</p>
                            <span class="dates">{{ \Carbon\Carbon::parse($wiki->created_at)->format('d F, Y') }}</span>
                        </div>
                    </div>
                </div>
                <div class="blog-discription trix-editor">
                    {!! $wiki->details !!}
                </div>

                <div class="ic-share-object">
                    <div class="share-links">
                        <p class="fw-500">Share</p>
                        <ul>
                            <li>
                                <a href="#"><i class="ri-facebook-fill"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ri-twitter-fill"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ri-instagram-line"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="ri-linkedin-fill"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="blog-tags">
                        <ul>
                            <li>
                                <a href="#">DevOps</a>
                            </li>
                            <li>
                                <a href="#">Stock</a>
                            </li>
                            <li>
                                <a href="#">Linux</a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="ic__helpFull--content">
                    <div class="ic__helpFull-first">
                        <h6>Was this helpful? <a href="#"><i class="ri-thumb-down-line"></i></a> <a href="#"><i
                                    class="ri-thumb-up-line"></i></a></h6>
                    </div>
                    <h6 class="titles">Why didn't it help?</h6>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                        industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type
                        and scrambled it to make a type specimen book. It has survived not only five centuries, but also the
                        leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s
                        with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop
                        publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                </div>

            </div>
        </div>
    </section> --}}
    <!-- ebook end -->

    {{-- content start --}}
    <section class="ic-wiki-details-content ic-section-space bg-img-center-property">
        <div class="ic-top-feature">
            <div class="container">
                <div class="top-content ic-section-space-bottom-m-60  ic-section-space-bottom-60 bb">
                    <div class="big-card-content-wrapper mb-40">
                        <div class="position-relative overlay big-card wiki details">
                            <img src="{{ $wiki->image_path }}" class="" alt="">
                            <div class="content">
                                <div class="bottom-content d-block mt-auto">
                                    <div class="intro-info mb-0">
                                        <div class="ic-intro-badge">
                                            {{ $wiki->category->name }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="heading text-center mb-20">
                        <h3>{{ $wiki->title }}</h3>
                    </div>

                    <div class="ic-social-profile-wrapper mb-40">
                        <div class="ic-profile-wrapper">
                            <img src="{{ getStoreFile($wiki->user->avatar, $wiki->user->storage_type) }}" alt="Writer">
                            <div class="ic-content">
                                <h6>{{ $wiki->user->full_name }}</h6>
                                <p>{{ custom_date($wiki->created_at) }}</p>
                            </div>
                        </div>
                        <ul class="ic-social-wrapper">
                            {{-- <li><a href=""><i class="ri-facebook-fill"></i></a></li>
                        <li><a href=""><i class="ri-twitter-fill"></i></a></li>
                        <li><a href=""><i class="ri-instagram-line"></i></a></li>
                        <li><a href=""><i class="ri-linkedin-fill"></i></a></li> --}}
                            {!! $buttons !!}
                        </ul>
                    </div>


                    <div class="blog-content ">
                        {!! $wiki->details !!}
                        {{-- 
                        <div class="ic-quote">
                            <div class="ic-quote-abs">
                                <img src="{{ asset('/new-frontendv1/images/wiki/quotation.svg') }}" class=""
                                    alt="">
                            </div>
                            <div class="quote-content">
                                “Sed viverra ipsum nunc aliquet bibendum enim facilisis gravida. Diam phasellus vestibulum
                                lorem sed risus ultricies viverra ipsum nunc aliquet bibendum. Magna sit amet purus gravida
                                quis blandit. Arcu cursus vitae congue mauris.“
                            </div>
                        </div>
                        <br>
                        <h4>Economical and practical remote learning</h4>
                        <br>
                        <p>
                            Okay so you can make more money but if that’s your only goal, the extra zeroes on your bank
                            balance will get really boring real quick. If an uneducated guy from the home of the Kangaroo
                            can double their salary, there is definitely hope for you. Popular career websites like “Seek”
                            suggest the typical advice about doing better in your performance review or getting more
                            education from a university. This advice is out of date and I have watched many colleagues fall
                            for this trap and only end up disappointed. Doubling your salary,
                            very least increasing it significantly, is about breaking the norm and trying a few things that
                            are a bit more radical as you’re about to see with these simple tips below.
                        </p>
                        <br>
                        <p>
                            When you open a website on your browser, it sends an HTTP request to the server where the
                            website is hosted. The server then sends back an HTTP response with the website content, such as
                            text, images, and videos. HTTP is responsible for structuring these requests and responses in a
                            way that both the client and the server can understand.
                        </p>
                        --}}
                     </div> 
                    {{-- 
                <div class="ic-share-wrapper">
                    <ul class="ic-social-wrapper">
                        <ul class="ic-social-wrapper">
                            <li><p>Share</p></li>
                            <li><a href=""><i class="ri-facebook-fill"></i></a></li>
                            <li><a href=""><i class="ri-twitter-fill"></i></a></li>
                            <li><a href=""><i class="ri-instagram-line"></i></a></li>
                            <li><a href=""><i class="ri-linkedin-fill"></i></a></li>
                        </ul>
                    </ul>

                    <div class="ic-blog-badge-wrapper">
                        <div class="ic-blog-badge active">DevOps</div>
                        <div class="ic-blog-badge">Stock</div>
                        <div class="ic-blog-badge">Linux</div>
                    </div>
                </div> --}}
                </div>

                <div class="bottom-content">
                    <div class="heading text-center mb-50">
                        <h3>Explore similar resources</h3>
                    </div>
                    <div
                        class="row row-cols-lg-3 row-cols-md-2 gx-xxl-4 gx-xl-3 gx-sm-2 justify-content-center common-card-row">

                        @foreach ($random as $wiki)
                            <div class="common-card-content-wrapper">
                                <div class="position-relative overlay common-card">
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
    </section>
    {{-- content end --}}
@endsection
@push('styles')
    <style>

    </style>
@endpush
@push('scripts')
    <script src="{{ asset('common/custom/js/load-more.js') }}"></script>
    <script src="{{ asset('js/share.js') }}"></script>
@endpush
