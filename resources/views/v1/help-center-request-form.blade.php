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
        <div class="ic-submit-request">
            <h3>Submit a request</h3>
            <form action="#">
                <div class="ic-request-form">
                    <div class="row g-lg-4">
                        <div class="col-lg-12">
                            <div class="form-group">
                                <p class="title-request">Product or Category</p>
                                <label for="#">With which product or category do you need help?</label>
                                <select name="" class="form-select" id="">
                                    <option value="0">Your Full Name</option>
                                    <option value="0">Jhon Doe</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <p class="title-request">Product or Category</p>
                                <label for="#">With which product or category do you need help?</label>
                                <div class="row g-2">
                                    <div class="col-lg-6">
                                        <input type="text" class="form-control" placeholder="Your Name">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="email" class="form-control" placeholder="Your Email">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" placeholder="Password">
                                    </div>
                                    <div class="col-lg-6">
                                        <input type="password" class="form-control" placeholder="Re-type Password">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <p class="title-request">Ticket Subject</p>
                                <label for="#">in general, what is this ticket about?</label>
                                <select name="" class="form-select" id="">
                                    <option value="0">Do you have an MCdns account?</option>
                                    <option value="1">Jhon Doe</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <p class="title-request">Releted URL</p>
                                <label for="#">Optional, but very helpful.</label>
                                <select name="" class="form-select" id="">
                                    <option value="0">Include a relevant URL (optional)</option>
                                    <option value="1">Jhon Doe</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group">
                                <p class="title-request">Ticket Description</p>
                                <label for="#">Please be as descriptive as possible regarding the details of this ticket.</label>
                                <textarea name="" id="" class="form-control" placeholder="Provide a detailed description"></textarea>
                                <div>
                                    <label class="addFile" for="addFile">
                                        <i class="ri-attachment-line"></i> Add file or drop files here
                                    </label>
                                    <input type="file" id="addFile" class="d-none">
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="form-group ic-help-request-public">
                                <p class="title-request">Ticket Visibility</p>
                                <label for="#">By default, only the support team can view and respond to your tickets. A Public ticket, however, would allow the entire community to view and reply. Note that they
                                    cannot view any information entered into the "Private" fields above.</label>
                                <div class="form-check form-switch">
                                    <div>
                                        <input class="form-check-input" type="checkbox" role="switch" id="flexSwitchCheckDefault">
                                    </div>
                                    <div>
                                        <label class="form-check-label" for="flexSwitchCheckDefault">Make this ticket public</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <button type="submit" class="ic-btn">Submit Ticket <i class="ri-send-plane-fill"></i></button>
                </div>
            </form>
        </div>
    </div>
</section>
{{-- help center catagories --}}


@endsection

@push('scripts')
{{-- <script src="{{ asset('frontend/js/price_range_script.js') }}">
</script> --}}
@endpush