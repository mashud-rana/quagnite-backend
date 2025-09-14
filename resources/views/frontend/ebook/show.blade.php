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
                        <h1 class="black pb-15 ic-inner-heading">E-book Details Page
                        </h1>
                        <div class="row">
                            <div class="col-xxl-11 col-lg-12">
                                <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s, when an unknown printer took a galley of printing and typesetting.</p>
                                <div class="ic-video-programs">
                                    <a href="{{ route('ebooks') }}" class="ic-btn">Find More E-Book <i
                                            class="ri-arrow-right-line"></i></a>
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

    {{-- e book details --}}
    <section class="ic-ebook-details ic-section-space">
        <div class="container">
            <div class="row g-3">
                <div class="col-lg-6">
                    <div class="ic-ebook-images">
                        <img src="{{ getStoreFile($ebook->image, $ebook->storage_type) }}" class="img-fluid w-100" alt="">
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-ebook-content-silip">
                        <ul>
                            <li>
                                <div class="ebook-title">
                                    <span class="ebook-text">E-Book</span>
                                    {{-- <div class="d-flex ic-star-area gap-2 align-items-center">
                                        <span class="star">
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                        </span>
                                        <span class="reviews-text">
                                            3,014 reviews
                                        </span>
                                    </div> --}}
                                </div>
                                <h5 class="headline pt-1 pt-sm-3">{{ $ebook->title }}</h5>
                            </li>
                            <li>
                                <div class="ebook-price">
                                    <span>${{ $ebook->price }}</span>
                                    {{-- <del>$1,419.92</del> --}}
                                </div>
                            </li>
                            {{-- <li>
                                <div class="book-switch">
                                    <div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label pb-0" for="flexRadioDefault1">
                                                Soft copy
                                            </label>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2" checked>
                                            <label class="form-check-label pb-0" for="flexRadioDefault2">
                                                Hard Copy
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </li> --}}
                            <li>
                                <div class="book-switch">
                                    <span data-ebook_id="{{ $ebook->id }}" data-route="{{ route('addToCart') }}"
                                        class="ic-btn-simple addToCart"><i class="ri-shopping-cart-2-line"></i> Add to
                                        cart</span>
                                    {{-- <a href="#" class="ic-btn-simple orange"><i class="ri-shopping-cart-2-line"></i>
                                        Buy Now</a> --}}
                                </div>
                            </li>
                            <li>
                                <div>
                                    <p class="catagories-text"><span>Category : </span> {{ $ebook->category->name }}
                                    </p>
                                    {{-- <p class="catagories-tag"><span>Tags : </span>ebook, technologies, learning</p> --}}
                                </div>
                            </li>
                            <li>
                                {{-- <div class="in-stock-exchange">
                                    <div>
                                        <img src="{{ asset('new-frontendv1/images/ebook/truck.png') }}" alt="">
                                    </div>
                                    <div>
                                        <p class="in-stock">In Stock <span class="primary">(only 10 copies left)</span></p>
                                        <p class="in-stock-add">Want it Hardcover faster? <a href="#">Add an
                                                address</a></p>
                                    </div>
                                </div> --}}
                                <div class="in-stock-exchange">
                                    <div>
                                        <img src="{{ asset('new-frontendv1/images/ebook/shop.png') }}" alt="">
                                    </div>
                                    <p><span class="primary">{{ $ebook->author_name }}</span> (Author),
                                        {{-- <span
                                            class="primary">Rebecca
                                            Lowman</span> (Narrator),
                                            <span class="primary">Simon & Schuster Audio</span>
                                        (Publisher) --}}
                                    </p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- e book details --}}

    {{-- book discription --}}
    <section class="ic-book-discription ic-section-space-bottom-80">
        <div class="container">
            <div class="book-discription data-science-navs ic-all-popular-navs">
                <ul class="justify-content-start">
                    <li>
                        <a href="#" class="business-link active" data-link="business-1">Description</a>
                    </li>
                    {{-- <li>
                        <a href="#" class="business-link" data-link="business-2">Author</a>
                    </li>
                    <li>
                        <a href="#" class="business-link" data-link="business-3">Customer Reviews</a>
                    </li> --}}
                </ul>
            </div>
            <div class="business-tabs">
                <div class="business-items active" id="business-1">
                    {!! $ebook->details !!}
                </div>
            </div>
        </div>
    </section>
    {{-- book discription --}}
@endsection

@push('scripts')
    <script src="{{ asset('frontend/js/addToCart.js') }}"></script>
@endpush
