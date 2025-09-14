@extends('layouts.master')

@section('content')
{{-- banner part start --}}
<section class="ic-banner-part ic-section-space ic_v1_inner-part bg-img-center-property"
style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
<div class="container">
    <div class="row align-items-center ">
        <div class="col-md-7">
            <div class="ic-banner-content ic-playground-banner">
                <span class="ic-heading-title mb-15">Terms & Condition</span>
                <h1 class="black pb-15">Terms & Condition</h1>
                <div class="row">
                    <div class="col-xxl-10 col-lg-12">
                        <p class="color-deep-gray pb-30">
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                            has been the industry's standard dummy text ever since the 1500s, when an unknown
                            printer took a galley of printing and typesetting.
                        </p>
                        <div class="ic-video-programs">
                            <a href="#" class="ic-btn bg-effect">
                                Launch now
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-5 d-md-block d-none ">
            <div class="playground-images-right text-center">
                <img src="{{ asset('new-frontendv1/images/ebook/ebook.png') }}" class="img-fluid"
                    alt="images">
            </div>
        </div>
    </div>
</div>
</section>
{{-- banner part end --}}
<section class="ic-privacy-policy ic-section-space">
    <div class="container">
        {!! $content->description !!}
    </div>
</section>
@endsection
