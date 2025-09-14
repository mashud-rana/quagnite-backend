@extends('layouts.master-user')

@section('content')
    <section class="ic-become-treacher">
        <div class="container">
            <div class="ic-member-become-main mt-30">
                <div class="ic-become-banner-post"
                    style="background-image: linear-gradient(0deg, rgba(0, 172, 182, 0.90) 0%, rgba(0, 172, 182, 0.90) 100%), url({{ asset('new-frontendv1/images/member-dashboard/member-intro.png') }})">
                    <div class="row align-items-center">
                        <div class="col-lg-9">
                            <h3 class="white">Create Event</h3>
                            <p class="white pb-0">Freelancers and entrepreneurs Freelancers and entrepreneurs use about me to
                                grow their audience and get more clients. Create a page to present who you are and what
                                you
                                do in one link. Use about.</p>
                            {{-- <a href="#">Submit your application</a> --}}
                        </div>
                        <div class="col-lg-3 d-none d-lg-block">
                            <img src="{{ asset('new-frontendv1/images/member-dashboard/member-post.png') }}"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
                <div class="become-form">
                    <form action="{{ route('member.event.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <input type="hidden" name="status" value="0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="#">Event Title</label>
                                    <input name="title" type="text" class="form-control" placeholder="Event Title"
                                        value="{{ old('title') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="#">Event Start</label>
                                    <input name="event_start" type="datetime-local" class="form-control" autocomplete="off"
                                        value="{{ old('event_start') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="#">Event End</label>
                                    <input name="event_end" type="datetime-local" class="form-control" autocomplete="off"
                                        value="{{ old('event_end') }}">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label for="#">Event Location</label>
                                    <input name="location" type="text" class="form-control"
                                        placeholder="eg. California, Us" value="{{ old('location') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label mb-2 w-100">Event Type <span class="error">*</span></label>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="status_yes" value="1" name="event_type"
                                            class="form-check-input" checked="">
                                        <label class="custom-control-label" for="status_yes">Online</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="status_no" value="0" name="event_type"
                                            class="form-check-input">
                                        <label class="custom-control-label" for="status_no">Offline</label>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="#">Description</label>
                                    <input id="inputTrix" type="hidden" name="description"
                                        value="{{ old('description') }}">
                                    <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="#">Upload Image</label>
                                    <input type="file" name="image" class="form-control" required>
                                </div>
                            </div>

                            <div class="col-lg-12">
                                <div class="ic-buttons-become">
                                    <a class="ic-btn rounded danger" href="{{ route('member.dashboard') }}">Cancel</a>
                                    <button type="submit" class="rounded ic-btn-simple">Submit</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

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
