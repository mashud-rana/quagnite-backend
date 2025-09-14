@extends('layouts.master')

@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part ic-section-space ic_v1_inner-part bg-img-center-property"
        style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-md-7">
                    <div class="ic-banner-content ic-playground-banner">
                        <span class="ic-heading-title mb-15">{{ $data->category->title }}</span>
                        <h1 class="black pb-15">{{ $data->title }} Playground</h1>
                        <div class="row">
                            <div class="col-xxl-10 col-lg-12">
                                <p class="color-deep-gray pb-30">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of printing and typesetting.
                                </p>
                                <div class="ic-video-programs">

                                    <button class="ic-btn addToSubscribe" data-playground_id="{{ $data->id }}"
                                        data-route="{{ route('addToSubscribe') }}">Subscribe Now
                                        <i class="ri-arrow-right-line"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-md-block d-none ">
                    <div class="playground-images-right text-center">
                        <img src="{{ getStoreFile($data->image, $data->storage_type) }}" class="img-fluid" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- banner part end --}}

    {{-- playground content start --}}
    <section class="ic-playground-details-section ic-section-space">
        <div class="container">
            <div class="ic-playground-details-content-area">
                <div class="ic-section-shadow-left"></div>
                <div class="ic-section-shadow-right"></div>
                <div class="ic-playground-details-content">
                    {!! $data->overview !!}
                </div>
                <div class="ic-playground-details-content">
                    <div class="ic-launch-btn m-auto">
                        <button class="ic-btn addToSubscribe" data-playground_id="{{ $data->id }}"
                            data-route="{{ route('addToSubscribe') }}">Subscribe Now
                            <i class="ri-arrow-right-line"></i>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>
    {{-- playground content end --}}
@endsection

@push('scripts')
    {{-- <script src="{{ asset('frontend/js/price_range_script.js') }}"></script> --}}
    <script src="{{ asset('frontend/js/addToSubscribe.js') }}"></script>
@endpush
