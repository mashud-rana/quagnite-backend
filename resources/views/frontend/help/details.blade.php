@extends('layouts.master')

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
                                <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s, when an unknown printer took a galley of printing and typesetting.
                                </p>
                                <div class="ic-video-programs">
                                    <a href="{{ @Auth::user()->user_type === 'admin' ? route('admin.ticket.index') : route('ticket.create') }}" class="ic-btn">Submit a request</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-md-block d-none ">
                    <div class="ic-right-side-img text-end">
                        <img src="{{ asset('new-frontendv1/images/help-center/help-center-banner.png') }}" class="img-fluid"
                            alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- {{-- banner part end --}} -->
    {{-- help center catagories --}}
    <section class="ic-section-space ic-help-center-part"
        style="background-image: url({{ asset('new-frontendv1/images/help-center/help-center.png') }})">
        <div class="container">
            {{-- frequently asked --}}
            <div class="ic__faq--part">
                <div class="row">
                    <div class="col-lg-10 m-auto ic-help-center-according">
                        <div class="ic__according">
                            <div class="accordion" id="accordionExample">
                                @foreach ($faqs as $faq)
                                    <div class="ic-accordion-item">
                                        <div class="accordion-header" id="heading{{ $faq->id }}">
                                            <button class="accordion-button {{ $loop->index == 0 ? '' : 'collapsed' }}"
                                                type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapse{{ $faq->id }}"
                                                aria-expanded="{{ $loop->index == 0 ? 'true' : 'false' }}"
                                                aria-controls="collapse{{ $faq->id }}">
                                                {{ $faq->question }}
                                            </button>
                                        </div>
                                        <div id="collapse{{ $faq->id }}"
                                            class="accordion-collapse collapse {{ $loop->index == 0 ? 'show' : '' }}"
                                            aria-labelledby="heading{{ $faq->id }}"
                                            data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <p>
                                                    {!! $faq->answer !!}
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
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
