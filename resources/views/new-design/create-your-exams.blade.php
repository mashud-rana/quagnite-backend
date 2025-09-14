@extends('layouts.master')

@push('styles')
@endpush

@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part inner-banner"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)),  url({{ asset('/new-frontend/images/business.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 order-2 order-lg-1">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="ic-heading-title mb-15">Exams Access</span>
                        <h1 class="black pb-15 ic-inner-heading">Create Your Exams</h1>
                        <div class="row">
                            <div class="col-xxl-11 col-lg-12">
                                <p class="color-deep-gray pb-30">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of printing and typesetting.
                                </p>
                                <div class="ic-video-programs">
                                    <a href="#" class="ic-btn">Find Your Courses</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 order-1 order-lg-2">
                    <div class="ic-right-side-img">
                        <img src="{{ asset('new-frontend/images/exam-banner.png') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- banner part end --}}

    {{-- ebbok page --}}
    <section class="ic-reserve-main ic-section-space">
        <div class="container">
            <div class="ic-reserve-orders">
                <div class="row g-0">
                    <div class="col-lg-5">
                        <div class="ic-reserve-order">
                            <img src="{{ asset('new-frontend/images/create-your-exam.png') }}" class="img-fluid"
                                alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <form action="#" class="reserve-order-form">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Full Name</label>
                                        <input type="text" name="name" class="form-control" placeholder="Full name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Email</label>
                                        <input type="email" name="email" class="form-control"
                                            placeholder="Email adress">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Phone Number</label>
                                        <input type="number" name="number" class="form-control" placeholder="Number">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Class Type</label>
                                        <select name="class_type" class="selectpicker" id="">
                                            <option value="0">Full Class</option>
                                            <option value="0">Half Class</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Exam Code</label>
                                        <input type="text" name="exam_code" class="form-control" placeholder="Code">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Session</label>
                                        <input type="text" name="coach_name" class="form-control"
                                            placeholder="Coahc Name">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group ic-2types-select">
                                        <label for="#">Class Type</label>
                                        <div class="row g-0">
                                            <div class="col-lg-6 col-6">
                                                <select name="class_type" class="selectpicker" id="">
                                                    <option value="0">2021</option>
                                                    <option value="0">2023</option>
                                                </select>
                                            </div>
                                            <div class="col-lg-6 col-6">
                                                <select name="class_type" class="selectpicker" id="">
                                                    <option value="0">2021</option>
                                                    <option value="0">2023</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Class Name</label>
                                        <input type="text" name="class_name" class="form-control"
                                            placeholder="Class Name">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="#">About Exam</label>
                                        <input type="text" name="about_name" class="form-control"
                                            placeholder="Tell us about your exams...">
                                    </div>
                                </div>
                            </div>
                            <button class="ic-btn">Start For Exams</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- ebbok page --}}
@endsection

@push('scripts')
@endpush
