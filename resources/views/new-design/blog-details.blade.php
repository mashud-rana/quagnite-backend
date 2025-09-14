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
                        <span class="ic-heading-title mb-15">Blog Details</span>
                        <h1 class="black pb-15">Blog Details Page</h1>
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

    {{-- blog-details --}}
    <section class="ic-blog-details ic-section-space bg-white">
        <div class="container">
            <div class="ic-blog-details-content">
                <h2 class="black fw-600">Java vs. Python Courses : Which Is the Best Programming Language for You?</h2>
                <div class="ic-blog-author">
                    <div class="ic-author-names">
                        <div class="author-word">
                            B
                        </div>
                        <div>
                            <p class="fs-20 fw-500 black">Brooklyn Simmons</p>
                            <p class="author-posted"><i class="ri-time-line"></i> 05 April, 2022 | 10:30 AM</p>
                        </div>
                    </div>
                    <ul class="blog-social-media">
                        <li>
                            <a href="#"><i class="ri-facebook-fill"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ri-twitter-fill"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ri-linkedin-fill"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ri-instagram-line"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="ri-share-line"></i></a>
                        </li>
                    </ul>
                </div>

                <p class="ic-blog-paragraph">Apple today named eight app and game developers receiving an Apple Design
                    Award, each one selected
                    for being thoughtful and creative. Apple Design Award winners bring distinc tive new ideas to life
                    and demonstrate deep mastery of Apple technology. The apps spring up from developers large and
                    small, in every part of the world, and provide users with new ways of working, creating, and
                    playing.
                </p>
                <p class="ic-blog-paragraph">“Every year, app and game developers demonstrate exceptional craftsmanship and
                    we’re honoring the
                    best of the best,” said Ron Okamoto, Apple’s vice president of Worldwide Developer Relations.
                    “Receiving an Apple Design Award is a special and laudable accomplishment. Past honorees have made
                    some of the most noteworthy apps and games of all time. Through their vision, determination, and
                    exacting standards, the winning developers inspire not only their peers in the Apple developer
                    community, but all of us at Apple, too.”</p>
                <p class="ic-blog-paragraph">Lorem ipsum dolor sit amet
                    Apple today named eight app and game developers receiving an Apple Design Award, each one selected
                    for being thoughtful and creative. Apple Design Award winners bring distinctive new ideas to life
                    and demonstrate deep mastery of Apple technology. The apps spring up from developers large and
                    small, in every part of the world, and provide users with new ways of working, creating, and
                    playing.
                </p>
                <p class="ic-blog-paragraph">
                    “Every year, app and game developers demonstrate exceptional craftsmanship and we’re honoring the
                    best of the best,” said Ron Okamoto, Apple’s vice president of Worldwide Developer Relations.
                    “Receiving an Apple Design Award is a special and laudable accomplishment. Past honorees have made
                    some of the most noteworthy apps and games of all time. Through their vision, determination, and
                    exacting standards, the winning developers inspire not only their peers in the Apple developer
                    community, but all of us at Apple, too.”
                </p>
                <div class="div mb-15 mt-15">
                    <img src="{{ asset('new-frontend/images/blog-details-posted.png') }}" class="img-fluid w-100"
                        alt="">
                </div>
                <p class="ic-blog-paragraph">Apple today named eight app and game developers receiving an Apple Design
                    Award, each one selected
                    for being thoughtful and creative. Apple Design Award winners bring distinc tive new ideas to life
                    and demonstrate deep mastery of Apple technology. The apps spring up from developers large and
                    small, in every part of the world, and provide users with new ways of working, creating, and
                    playing.
                </p>
                <p class="ic-blog-paragraph">“Every year, app and game developers demonstrate exceptional craftsmanship and
                    we’re honoring the
                    best of the best,” said Ron Okamoto, Apple’s vice president of Worldwide Developer Relations.
                    “Receiving an Apple Design Award is a special and laudable accomplishment. Past honorees have made
                    some of the most noteworthy apps and games of all time. Through their vision, determination, and
                    exacting standards, the winning developers inspire not only their peers in the Apple developer
                    community, but all of us at Apple, too.”</p>
                <h3 class="mb-15">Lorem ipsum dolor sit amet</h3>
                <p class="ic-blog-paragraph">Lorem ipsum dolor sit amet
                    Apple today named eight app and game developers receiving an Apple Design Award, each one selected
                    for being thoughtful and creative. Apple Design Award winners bring distinctive new ideas to life
                    and demonstrate deep mastery of Apple technology. The apps spring up from developers large and
                    small, in every part of the world, and provide users with new ways of working, creating, and
                    playing.
                </p>
                <p class="ic-blog-paragraph">
                    “Every year, app and game developers demonstrate exceptional craftsmanship and we’re honoring the
                    best of the best,” said Ron Okamoto, Apple’s vice president of Worldwide Developer Relations.
                    “Receiving an Apple Design Award is a special and laudable accomplishment. Past honorees have made
                    some of the most noteworthy apps and games of all time. Through their vision, determination, and
                    exacting standards, the winning developers inspire not only their peers in the Apple developer
                    community, but all of us at Apple, too.”
                </p>
            </div>
        </div>
    </section>
    {{-- blog-details --}}
    <section class="ic-leave-comment ic-section-space bg-shade">
        <div class="container">

            <div class="ic-heading">
                <div class="ic-heaing-content mb-50">
                    <h2 class="black fw-600 mb-20">Leave a Reply</h2>
                    <p class="ic-des">Your email address will not be published. Required fields are marked *</p>
                </div>
                <div class="ic-form ">
                    <form action="">
                        <div class="row mb-30">
                            <!-- Full Name -->
                            <div class="col-lg-6 col-md-12 mb-22">
                                <label for="" class="form-label">Full Name</label>
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <!-- Email -->
                            <div class="col-lg-6 col-md-12 mb-22">
                                <label for="" class="form-label">Your Email</label>
                                <input type="email" name="email" class="form-control" placeholder="Email address">
                            </div>
                            <!-- message -->
                            <div class="col-lg-12 mb-22">
                                <label for="inputEmail4" class="form-label">Write your comment here… *</label>
                                <textarea name="message" class="form-control textarea" placeholder="Write your comment here…"></textarea>
                            </div>
                            <!-- message -->
                            <div class="col-lg-12 mb-22">
                                <div class="form-check">
                                    <input type="checkbox" class="form-check-input pointer" id="exampleCheck1">
                                    <label class="form-check-label pointer" for="exampleCheck1">
                                        Save my name, email, and website in this browser for the next time I comment.
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="ic-submit">
                            <button class="ic-btn">
                                Post Comments <i class="ri-send-plane-2-line"></i>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
