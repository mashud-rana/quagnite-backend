@extends('layouts.master-v1')

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
                                <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                                    when an unknown printer took a galley of printing and typesetting.</p>
                                <div class="ic-video-programs">
                                    <a href="#" class="ic-btn">Reserve Your E-Book</a>
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

    {{-- ebbok page --}}
    {{-- <section class="ic-ebook-main ic-section-space">
        <div class="container">
            <div class="row g-2 g-lg-4">
                <div class="col-lg-4 col-xxl-3 col-xl-3 col-md-6 col-sm-6 col-6 ic-cols">
                    <div class="ic-wiki-items e-books-items">
                        <div class="ic-wiki-img">
                            <img src="{{ asset('new-frontend/images/wiki-items.png') }}" class="img-fluid w-100"
                                alt="mcdns">
                            <p class="e-book-star">5.0 <span class="ic-star-icons"><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i></span></p>
                            <p class="sales">Sale</p>
                        </div>
                        <div class="ic-wiki-content">
                            <span class="wiki-names">Design</span>
                            <div class="author">
                                <img src="{{ asset('new-frontend/images/client-img.png') }}" alt="mcdns">
                                <span>By: Author Name</span>
                            </div>
                            <p class="fs-18 black fw-500 pb-2 ic-wikis-names">E-book growth hacking value</p>
                            <p class="fs-15 fw-300 pb-3 gray ic-para-text">Whether you’re improving your personal or
                                business credit, we’ll take you step by step dispute...</p>
                            <div class="ic-wiki-btn ">
                                <a href="#" class="ic-btn">Buy Now <i class="ri-arrow-right-line"></i></a>
                                <p class="e-book-price">$65.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 col-xl-3 col-md-6 col-sm-6 col-6 ic-cols">
                    <div class="ic-wiki-items e-books-items">
                        <div class="ic-wiki-img">
                            <img src="{{ asset('new-frontend/images/wiki-items.png') }}" class="img-fluid w-100"
                                alt="mcdns">
                            <p class="e-book-star">5.0 <span class="ic-star-icons"><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i></span></p>
                            <p class="sales">Sale</p>
                        </div>
                        <div class="ic-wiki-content">
                            <span class="wiki-names">Design</span>
                            <div class="author">
                                <img src="{{ asset('new-frontend/images/client-img.png') }}" alt="mcdns">
                                <span>By: Author Name</span>
                            </div>
                            <p class="fs-18 black fw-500 pb-2 ic-wikis-names">E-book growth hacking value</p>
                            <p class="fs-15 fw-300 pb-3 gray ic-para-text">Whether you’re improving your personal or
                                business credit, we’ll take you step by step dispute...</p>
                            <div class="ic-wiki-btn ">
                                <a href="#" class="ic-btn">Buy Now <i class="ri-arrow-right-line"></i></a>
                                <p class="e-book-price">$65.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 col-xl-3 col-md-6 col-sm-6 col-6 ic-cols">
                    <div class="ic-wiki-items e-books-items">
                        <div class="ic-wiki-img">
                            <img src="{{ asset('new-frontend/images/wiki-items.png') }}" class="img-fluid w-100"
                                alt="mcdns">
                            <p class="e-book-star">5.0 <span class="ic-star-icons"><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i></span></p>
                            <p class="sales">Sale</p>
                        </div>
                        <div class="ic-wiki-content">
                            <span class="wiki-names">Design</span>
                            <div class="author">
                                <img src="{{ asset('new-frontend/images/client-img.png') }}" alt="mcdns">
                                <span>By: Author Name</span>
                            </div>
                            <p class="fs-18 black fw-500 pb-2 ic-wikis-names">E-book growth hacking value</p>
                            <p class="fs-15 fw-300 pb-3 gray ic-para-text">Whether you’re improving your personal or
                                business credit, we’ll take you step by step dispute...</p>
                            <div class="ic-wiki-btn ">
                                <a href="#" class="ic-btn">Buy Now <i class="ri-arrow-right-line"></i></a>
                                <p class="e-book-price">$65.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 col-xl-3 col-md-6 col-sm-6 col-6 ic-cols">
                    <div class="ic-wiki-items e-books-items">
                        <div class="ic-wiki-img">
                            <img src="{{ asset('new-frontend/images/wiki-items.png') }}" class="img-fluid w-100"
                                alt="mcdns">
                            <p class="e-book-star">5.0 <span class="ic-star-icons"><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i></span></p>
                            <p class="sales">Sale</p>
                        </div>
                        <div class="ic-wiki-content">
                            <span class="wiki-names">Design</span>
                            <div class="author">
                                <img src="{{ asset('new-frontend/images/client-img.png') }}" alt="mcdns">
                                <span>By: Author Name</span>
                            </div>
                            <p class="fs-18 black fw-500 pb-2 ic-wikis-names">E-book growth hacking value</p>
                            <p class="fs-15 fw-300 pb-3 gray ic-para-text">Whether you’re improving your personal or
                                business credit, we’ll take you step by step dispute...</p>
                            <div class="ic-wiki-btn ">
                                <a href="#" class="ic-btn">Buy Now <i class="ri-arrow-right-line"></i></a>
                                <p class="e-book-price">$65.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 col-xl-3 col-md-6 col-sm-6 col-6 ic-cols">
                    <div class="ic-wiki-items e-books-items">
                        <div class="ic-wiki-img">
                            <img src="{{ asset('new-frontend/images/wiki-items.png') }}" class="img-fluid w-100"
                                alt="mcdns">
                            <p class="e-book-star">5.0 <span class="ic-star-icons"><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i></span></p>
                            <p class="sales">Sale</p>
                        </div>
                        <div class="ic-wiki-content">
                            <span class="wiki-names">Design</span>
                            <div class="author">
                                <img src="{{ asset('new-frontend/images/client-img.png') }}" alt="mcdns">
                                <span>By: Author Name</span>
                            </div>
                            <p class="fs-18 black fw-500 pb-2 ic-wikis-names">E-book growth hacking value</p>
                            <p class="fs-15 fw-300 pb-3 gray ic-para-text">Whether you’re improving your personal or
                                business credit, we’ll take you step by step dispute...</p>
                            <div class="ic-wiki-btn ">
                                <a href="#" class="ic-btn">Buy Now <i class="ri-arrow-right-line"></i></a>
                                <p class="e-book-price">$65.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 col-xl-3 col-md-6 col-sm-6 col-6 ic-cols">
                    <div class="ic-wiki-items e-books-items">
                        <div class="ic-wiki-img">
                            <img src="{{ asset('new-frontend/images/wiki-items.png') }}" class="img-fluid w-100"
                                alt="mcdns">
                            <p class="e-book-star">5.0 <span class="ic-star-icons"><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i></span></p>
                            <p class="sales">Sale</p>
                        </div>
                        <div class="ic-wiki-content">
                            <span class="wiki-names">Design</span>
                            <div class="author">
                                <img src="{{ asset('new-frontend/images/client-img.png') }}" alt="mcdns">
                                <span>By: Author Name</span>
                            </div>
                            <p class="fs-18 black fw-500 pb-2 ic-wikis-names">E-book growth hacking value</p>
                            <p class="fs-15 fw-300 pb-3 gray ic-para-text">Whether you’re improving your personal or
                                business credit, we’ll take you step by step dispute...</p>
                            <div class="ic-wiki-btn ">
                                <a href="#" class="ic-btn">Buy Now <i class="ri-arrow-right-line"></i></a>
                                <p class="e-book-price">$65.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 col-xl-3 col-md-6 col-sm-6 col-6 ic-cols">
                    <div class="ic-wiki-items e-books-items">
                        <div class="ic-wiki-img">
                            <img src="{{ asset('new-frontend/images/wiki-items.png') }}" class="img-fluid w-100"
                                alt="mcdns">
                            <p class="e-book-star">5.0 <span class="ic-star-icons"><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i></span></p>
                            <p class="sales">Sale</p>
                        </div>
                        <div class="ic-wiki-content">
                            <span class="wiki-names">Design</span>
                            <div class="author">
                                <img src="{{ asset('new-frontend/images/client-img.png') }}" alt="mcdns">
                                <span>By: Author Name</span>
                            </div>
                            <p class="fs-18 black fw-500 pb-2 ic-wikis-names">E-book growth hacking value</p>
                            <p class="fs-15 fw-300 pb-3 gray ic-para-text">Whether you’re improving your personal or
                                business credit, we’ll take you step by step dispute...</p>
                            <div class="ic-wiki-btn ">
                                <a href="#" class="ic-btn">Buy Now <i class="ri-arrow-right-line"></i></a>
                                <p class="e-book-price">$65.00</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-xxl-3 col-xl-3 col-md-6 col-sm-6 col-6 ic-cols">
                    <div class="ic-wiki-items e-books-items">
                        <div class="ic-wiki-img">
                            <img src="{{ asset('new-frontend/images/wiki-items.png') }}" class="img-fluid w-100"
                                alt="mcdns">
                            <p class="e-book-star">5.0 <span class="ic-star-icons"><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i><i class="ri-star-s-fill"></i><i
                                        class="ri-star-s-fill"></i></span></p>
                            <p class="sales">Sale</p>
                        </div>
                        <div class="ic-wiki-content">
                            <span class="wiki-names">Design</span>
                            <div class="author">
                                <img src="{{ asset('new-frontend/images/client-img.png') }}" alt="mcdns">
                                <span>By: Author Name</span>
                            </div>
                            <p class="fs-18 black fw-500 pb-2 ic-wikis-names">E-book growth hacking value</p>
                            <p class="fs-15 fw-300 pb-3 gray ic-para-text">Whether you’re improving your personal or
                                business credit, we’ll take you step by step dispute...</p>
                            <div class="ic-wiki-btn ">
                                <a href="#" class="ic-btn">Buy Now <i class="ri-arrow-right-line"></i></a>
                                <p class="e-book-price">$65.00</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ic-load-more">
                <a href="#" class="ic-btn">Load more</a>
            </div>
        </div>
    </section> --}}
    {{-- ebbok page --}}

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
                <div class="ic-accessibility-card">
                    <div class="ic-accessibility-card-left">
                        <img src="{{asset('new-frontendv1/images/ebook/accessibility-img.png')}}" class="img-fluid" alt="image accessibility">
                    </div>
                    <div class="ic-accessibility-card-right">
                        <span class="whats-book">Ebook</span>
                        <div class="tag-books">
                            <span>Training methods</span>
                            <span>Learning</span>
                            <span>Data Since Stacture</span>
                        </div>
                        <h4>Your Life, Your Way: A Guide to Creating a Flexible Work Culture</h4>
                        <p>Aenean interdum arcu sit amet nulla lacinia suscipit. Vivamus at laoreet mi. Fusce pulvinar commodo ligula, et egestas dolor. Ut hendrerit blandit neque in tempor.</p>
                        <div class="download-button">
                            <a href="#" class="ic-btn-ebook">Download ebook <i class="ri-arrow-right-line"></i></a>
                            <div class="ebook-authar">
                                <img src="{{asset('new-frontendv1/images/ebook/avatar.png')}}" class="img-fluid" alt="">
                                <div>
                                    <p>Kevin Gilbert</p>
                                    <span>Book Authors</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ic-accessibility-card">
                    <div class="ic-accessibility-card-left">
                        <img src="{{asset('new-frontendv1/images/ebook/accessibility-img.png')}}" class="img-fluid" alt="image accessibility">
                    </div>
                    <div class="ic-accessibility-card-right">
                        <span class="whats-book">Ebook</span>
                        <div class="tag-books">
                            <span>Training methods</span>
                            <span>Learning</span>
                            <span>Data Since Stacture</span>
                        </div>
                        <h4>Your Life, Your Way: A Guide to Creating a Flexible Work Culture</h4>
                        <p>Aenean interdum arcu sit amet nulla lacinia suscipit. Vivamus at laoreet mi. Fusce pulvinar commodo ligula, et egestas dolor. Ut hendrerit blandit neque in tempor.</p>
                        <div class="download-button">
                            <a href="#" class="ic-btn-ebook">Download ebook <i class="ri-arrow-right-line"></i></a>
                            <div class="ebook-authar">
                                <img src="{{asset('new-frontendv1/images/ebook/avatar.png')}}" class="img-fluid" alt="">
                                <div>
                                    <p>Kevin Gilbert</p>
                                    <span>Book Authors</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
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
    <section class="ic-search-ebook ic-section-space">
        <div class="container">
            <form action="#" class="search-group">
                <input type="text" placeholder="Search E-book">
                <button>Search</button>
            </form>
            <div class="ic-ebook-list">
                <div class="row g-3">
                    <div class="col-lg-4 col-md-6">
                        <div class="ic-ebookShow-items">
                            <div class="overflow-hidden ebookShow-img">
                                <img src="{{asset('new-frontendv1/images/ebook/ebook-item-1.png')}}" class="img-fluid w-100" alt="ebook items">
                            </div>
                            <div class="ic-content-ebookItems">
                                <span class="ebookNames">Ebook</span>
                                <div class="ebookItems-tags">
                                    <span>Training</span>
                                    <span>Learning</span>
                                    <span>Data Since</span>
                                </div>
                                <p class="ebook-title">The Ultimate Staffing Guide : Leaders to Creating a Flexible Work Culture</p>
                            </div>
                            <div class="ebook-buttons">
                                <button class="ic-btn-simple">Details </button>
                                <span>$12.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ic-ebookShow-items">
                            <div class="overflow-hidden ebookShow-img">
                                <img src="{{asset('new-frontendv1/images/ebook/ebook-item-1.png')}}" class="img-fluid w-100" alt="ebook items">
                            </div>
                            <div class="ic-content-ebookItems">
                                <span class="ebookNames">Ebook</span>
                                <div class="ebookItems-tags">
                                    <span>Training</span>
                                    <span>Learning</span>
                                    <span>Data Since</span>
                                </div>
                                <p class="ebook-title">The Ultimate Staffing Guide : Leaders to Creating a Flexible Work Culture</p>
                            </div>
                            <div class="ebook-buttons">
                                <button class="ic-btn-simple">Details </button>
                                <span>$12.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ic-ebookShow-items">
                            <div class="overflow-hidden ebookShow-img">
                                <img src="{{asset('new-frontendv1/images/ebook/ebook-item-1.png')}}" class="img-fluid w-100" alt="ebook items">
                            </div>
                            <div class="ic-content-ebookItems">
                                <span class="ebookNames">Ebook</span>
                                <div class="ebookItems-tags">
                                    <span>Training</span>
                                    <span>Learning</span>
                                    <span>Data Since</span>
                                </div>
                                <p class="ebook-title">The Ultimate Staffing Guide : Leaders to Creating a Flexible Work Culture</p>
                            </div>
                            <div class="ebook-buttons">
                                <button class="ic-btn-simple">Details </button>
                                <span>$12.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ic-ebookShow-items">
                            <div class="overflow-hidden ebookShow-img">
                                <img src="{{asset('new-frontendv1/images/ebook/ebook-item-1.png')}}" class="img-fluid w-100" alt="ebook items">
                            </div>
                            <div class="ic-content-ebookItems">
                                <span class="ebookNames">Ebook</span>
                                <div class="ebookItems-tags">
                                    <span>Training</span>
                                    <span>Learning</span>
                                    <span>Data Since</span>
                                </div>
                                <p class="ebook-title">The Ultimate Staffing Guide : Leaders to Creating a Flexible Work Culture</p>
                            </div>
                            <div class="ebook-buttons">
                                <button class="ic-btn-simple">Details </button>
                                <span>$12.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ic-ebookShow-items">
                            <div class="overflow-hidden ebookShow-img">
                                <img src="{{asset('new-frontendv1/images/ebook/ebook-item-1.png')}}" class="img-fluid w-100" alt="ebook items">
                            </div>
                            <div class="ic-content-ebookItems">
                                <span class="ebookNames">Ebook</span>
                                <div class="ebookItems-tags">
                                    <span>Training</span>
                                    <span>Learning</span>
                                    <span>Data Since</span>
                                </div>
                                <p class="ebook-title">The Ultimate Staffing Guide : Leaders to Creating a Flexible Work Culture</p>
                            </div>
                            <div class="ebook-buttons">
                                <button class="ic-btn-simple">Details </button>
                                <span>$12.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ic-ebookShow-items">
                            <div class="overflow-hidden ebookShow-img">
                                <img src="{{asset('new-frontendv1/images/ebook/ebook-item-1.png')}}" class="img-fluid w-100" alt="ebook items">
                            </div>
                            <div class="ic-content-ebookItems">
                                <span class="ebookNames">Ebook</span>
                                <div class="ebookItems-tags">
                                    <span>Training</span>
                                    <span>Learning</span>
                                    <span>Data Since</span>
                                </div>
                                <p class="ebook-title">The Ultimate Staffing Guide : Leaders to Creating a Flexible Work Culture</p>
                            </div>
                            <div class="ebook-buttons">
                                <button class="ic-btn-simple">Details </button>
                                <span>$12.99</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <a href="#" class="ic-btn-simple">Load More E-book</a>
                </div>
            </div>
        </div>
    </section>
    {{-- search ebook --}}

    {{-- Reserve Your Book  --}}
    <section class="ic-reserve-ebook ic-section-space">
        <div class="container">
            <div class="header-bootcamp text-center pb-0">
                <h2 class="black">Reserve Your Book </h2>
            </div>
            <div class="ic-ebook-list">
                <div class="row g-3">
                    <div class="col-lg-4 col-md-6">
                        <div class="ic-ebookShow-items">
                            <div class="overflow-hidden ebookShow-img">
                                <img src="{{asset('new-frontendv1/images/ebook/ebook-item-1.png')}}" class="img-fluid w-100" alt="ebook items">
                            </div>
                            <div class="ic-content-ebookItems">
                                <span class="ebookNames">Ebook</span>
                                <div class="ebookItems-tags">
                                    <span>Training</span>
                                    <span>Learning</span>
                                    <span>Data Since</span>
                                </div>
                                <p class="ebook-title">The Ultimate Staffing Guide : Leaders to Creating a Flexible Work Culture</p>
                            </div>
                            <div class="ebook-buttons">
                                <button class="ic-btn-simple">Details </button>
                                <span>$12.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ic-ebookShow-items">
                            <div class="overflow-hidden ebookShow-img">
                                <img src="{{asset('new-frontendv1/images/ebook/ebook-item-1.png')}}" class="img-fluid w-100" alt="ebook items">
                            </div>
                            <div class="ic-content-ebookItems">
                                <span class="ebookNames">Ebook</span>
                                <div class="ebookItems-tags">
                                    <span>Training</span>
                                    <span>Learning</span>
                                    <span>Data Since</span>
                                </div>
                                <p class="ebook-title">The Ultimate Staffing Guide : Leaders to Creating a Flexible Work Culture</p>
                            </div>
                            <div class="ebook-buttons">
                                <button class="ic-btn-simple">Details </button>
                                <span>$12.99</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ic-ebookShow-items">
                            <div class="overflow-hidden ebookShow-img">
                                <img src="{{asset('new-frontendv1/images/ebook/ebook-item-1.png')}}" class="img-fluid w-100" alt="ebook items">
                            </div>
                            <div class="ic-content-ebookItems">
                                <span class="ebookNames">Ebook</span>
                                <div class="ebookItems-tags">
                                    <span>Training</span>
                                    <span>Learning</span>
                                    <span>Data Since</span>
                                </div>
                                <p class="ebook-title">The Ultimate Staffing Guide : Leaders to Creating a Flexible Work Culture</p>
                            </div>
                            <div class="ebook-buttons">
                                <button class="ic-btn-simple">Details </button>
                                <span>$12.99</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-5 text-center">
                    <a href="#" class="ic-btn-simple">Load More E-book</a>
                </div>
            </div>
        </div>
    </section>
    {{-- Reserve Your Book  --}}
@endsection

@push('scripts')
@endpush
