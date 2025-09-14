@extends('layouts.master-v1')

@section('content')
<section class="ic-banner-part ic-section-space ic_v1_inner-part"
    style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)), url({{ asset('/new-frontend') }}/images/playground-banner.png);">
    <!-- content -->
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-7 order-2 order-lg-1">
                <div class="ic-banner-content ps-0 pe-0">
                    <span class="ic-heading-title mb-15">Exams Access</span>
                    <h1 class="black pb-15">Your All Online Exams</h1>
                    <p class="color-deep-gray pb-30 pe-0">Lorem Ipsum is simply dummy text of the printing and
                        typesetting industry.
                        Lorem Ipsum has
                        been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                        galley of type and scrambled it to make a type specimen book.</p>
                    <div class="">
                        <a href="#" class="ic-btn-simple">Request Your Exam </a>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="ic-right-side-img">
                    <img src="{{ asset('new-frontendv1/images/playground/online-exam.png') }}" alt="" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</section>

{{-- exam list --}}
<section class="ic-section-space ic-exam-all">
    <div class="container">
        <div class="row g-3 g-lg-4">
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ic-exam-list">
                    <span class="exam-doller">$ 50.00</span>
                    <div class="exam-logo">
                        <img src="{{ asset('new-frontendv1/images/playground/exam-list-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <h5>Applications With React</h5>
                    <a href="#">Take Test <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ic-exam-list">
                    <div class="exam-logo">
                        <img src="{{ asset('new-frontendv1/images/playground/exam-list-2.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <h5>Microsoft 365 Security</h5>
                    <a href="#">Take Test <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ic-exam-list">
                    <div class="exam-logo">
                        <img src="{{ asset('new-frontendv1/images/playground/exam-list-3.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <h5>Microsoft 365 Security</h5>
                    <a href="#">Take Test <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ic-exam-list">
                    <div class="exam-logo">
                        <img src="{{ asset('new-frontendv1/images/playground/exam-list-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <h5>Microsoft 365 Security</h5>
                    <a href="#">Take Test <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                <div class="ic-exam-list">
                    <div class="exam-logo">
                        <img src="{{ asset('new-frontendv1/images/playground/exam-list-1.png') }}" class="img-fluid"
                            alt="">
                    </div>
                    <h5>Microsoft 365 Security</h5>
                    <a href="#">Take Test <i class="ri-arrow-right-line"></i></a>
                </div>
            </div>
        </div>
        <div class="mt-4 text-center">
            <a href="#" class="ic-btn-simple">Load More <i class="ri-loader-2-line"></i></a>
        </div>
    </div>
</section>
{{-- exam list --}}

<!-- {{-- achieve goals start --}} -->
<section class="ic-achieve-goals ic-section-space ">
    <div class="container">
        <div class=" text-center mb-50 ">
            <h2 class="ic-title">Achieve Your Goals</h2>
        </div>
        {{-- achieve your goals --}}
        <div class="ic-achieve-rows">
            <div class="row g-3">
                <div class="col-lg-6">
                    <div class="ic-achieve-items">
                        <div class="left">
                            <div>
                                <h5>Start Coaching Today</h5>
                                <p>Seamlessly engage technically sound Seamlessly engage technically sound cooperative
                                    reinterned goal oriented content rather than.</p>
                            </div>
                            <div>
                                <a href="#" class="ic-btn">Become A Coach</a>
                            </div>
                        </div>
                        <div class="achieve-img">
                            <img src="{{asset('new-frontendv1/images/achieve-1.png')}}" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-achieve-items">
                        <div class="left">
                            <div>
                                <h5>If You Join Our Course</h5>
                                <p>Seamlessly engage technically sound Seamlessly engage technically sound cooperative
                                    reinterned goal oriented content rather than.</p>
                            </div>
                            <div>
                                <a href="#" class="ic-btn">Registration Here</a>
                            </div>
                        </div>
                        <div class="achieve-img radius-shape">
                            <img src="{{asset('new-frontendv1/images/achieve-2.png')}}" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- {{-- achieve goals end --}} -->
@endsection