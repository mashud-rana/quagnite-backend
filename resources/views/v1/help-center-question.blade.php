@extends('layouts.master-v1')

@section('content')
<!-- {{-- banner part start --}} -->
<section class="ic-banner-part ic-section-space ic_v1_inner-part"
    style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
    <div class="container">
        <div class="row align-items-center ">
            <div class="col-md-7">
                <div class="ic-banner-content ic-business-banner">
                    <span class="ic-heading-title mb-15">Help Center</span>
                    <h1 class="black pb-15">Welcome To Help Center</h1>
                    <div class="row">
                        <div class="col-xxl-10 col-lg-12">
                            <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of printing and typesetting.
                            </p>
                            <div class="ic-video-programs">
                                <a href="#" class="ic-btn">Submit a request</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5 d-md-block d-none ">
                <div class="ic-right-side-img text-end">
                    <img src="{{ asset('new-frontendv1/images/help-center/help-center-banner.png') }}" class="img-fluid" alt="images">
                </div>
            </div>
        </div>
    </div>
</section>
<!-- {{-- banner part end --}} -->
{{-- help center catagories --}}
<section class="ic-section-space ic-help-center-part" style="background-image: url({{asset('new-frontendv1/images/help-center/help-center.png')}})">
    <div class="container">
        {{-- frequently asked --}}
        <div class="ic__faq--part">
            <div class="row">
                <div class="col-lg-10 m-auto ic-help-center-according">
                    <div class="ic__according">
                        <div class="accordion" id="accordionExample">
                            <div class="ic-accordion-item">
                                <div class="accordion-header" id="headingOne">
                                    <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseOne" aria-expanded="true"
                                        aria-controls="collapseOne">
                                        How do I pay for the Essentials or Premium plan?
                                    </button>
                                </div>
                                <div id="collapseOne" class="accordion-collapse collapse show"
                                    aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                                            Lorem
                                            Ipsum has been the industry's standard dummy text ever since the 1500s, when
                                            an
                                            unknown printer took a galley of type and scrambled it to make a type
                                            specimen book.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="ic-accordion-item">
                                <div class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false"
                                        aria-controls="collapseTwo">
                                        Can I cancel my Essentials or Premium plan subscription at any time?
                                    </button>
                                </div>
                                <div id="collapseTwo" class="accordion-collapse collapse"
                                    aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by
                                        default,
                                        until the collapse plugin adds the appropriate classes that we use to style each
                                        element. These classes control the overall appearance, as well as the showing
                                        and hiding
                                        via CSS transitions. You can modify any of this with custom CSS or overriding
                                        our
                                        default variables. It's also worth noting that just about any HTML can go within
                                        the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="ic-accordion-item">
                                <div class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                        aria-expanded="false" aria-controls="collapseThree">
                                        We need to add new users to our team. How will that be billed?
                                    </button>
                                </div>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by
                                        default, until
                                        the collapse plugin adds the appropriate classes that we use to style each
                                        element.
                                        These classes control the overall appearance, as well as the showing and hiding
                                        via CSS
                                        transitions. You can modify any of this with custom CSS or overriding our
                                        default
                                        variables. It's also worth noting that just about any HTML can go within the
                                        <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- frequently asked --}}
    </div>
</section>
{{-- help center catagories --}}




@endsection

@push('scripts')
{{-- <script src="{{ asset('frontend/js/price_range_script.js') }}">
</script> --}}
@endpush