@extends('layouts.master-user')

@section('content')
    <section class="ic-become-treacher">
        <div class="container">
            <div class="ic-member-become-main mt-30">
                <div class="ic-become-banner-post"
                    style="background-image: linear-gradient(0deg, rgba(0, 172, 182, 0.90) 0%, rgba(0, 172, 182, 0.90) 100%), url({{ asset('new-frontendv1/images/member-dashboard/member-intro.png') }})">
                    <div class="row">
                        <div class="col-lg-9">
                            <h3 class="white">Do you want to be a teacher?</h3>
                            <p class="white">Freelancers and entrepreneurs Freelancers and entrepreneurs use about me to
                                grow their audience and get more clients. Create a page to present who you are and what
                                you
                                do in one link. Use about.</p>
                            <a href="#">Submit your application</a>
                        </div>
                        <div class="col-lg-3 d-none d-lg-block">
                            <img src="{{ asset('new-frontendv1/images/member-dashboard/member-post.png') }}"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                @if ($is_applied)
                    <div class="pt-60 pb-60 text-center">
                        <img src="{{ asset('/new-frontendv1/images/check.gif') }}" alt="check">
                        <p class="text-center fs-24">Application already submitted <br> Please Wait for approval</p>
                    </div>
                @else
                    <div class="become-form">
                        <form action="{{ route('member.SubmitBecomeATeacher') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            @method('POST')
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Teacher Category</label>
                                        <select name="teacher_category_id" class="form-select" id="">
                                            <option disabled>Select catagory</option>
                                            @foreach ($categories as $item)
                                                <option value="{{ $item->id }}"
                                                    @if (old('teacher_category_id') == $item->id) @selected(true) @endif>
                                                    {{ $item->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Professional Title</label>
                                        <input name="professional_title" type="text" class="form-control"
                                            placeholder="Professional Title" value="{{ old('professional_title') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Phone</label>
                                        <input name="phone_number" type="text" class="form-control"
                                            placeholder="Enter Phone number" value="{{ old('phone') }}">
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Your Address</label>
                                        <input name="address" type="text" class="form-control"
                                            placeholder="eg. California, Us" value="{{ old('address') }}">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="#">About Your Self</label>
                                        <input id="inputTrix" type="hidden" name="about_me" value="{{ old('about_me') }}">
                                        <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="#">Upload CV/Resume</label>
                                        <input type="file" name="cv" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="ic-buttons-become">
                                        <a class="ic-btn rounded danger" href="{{ route('member.dashboard') }}">Cancel</a>
                                        <button type="submit" class="rounded ic-btn-simple">Submit Application</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                @endif
            </div>
        </div>
    </section>
@endsection


@push('styles')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('common/custom/css/trix.css') }}">
@endpush

@push('scripts')
    <!-- Trix Editor - CDN Link -->
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="{{ asset('common/custom/js/trix-editor-controls.js') }}"></script>
@endpush
