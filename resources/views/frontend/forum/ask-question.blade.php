@extends('layouts.master')

@section('content')
    <section class="ic-banner-part ic-section-space"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)),  url({{ asset('/frontend') }}/images/forums-banner.png);">
        <!-- content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="ic-banner-content ps-0">
                        <span class="ic-heading-title mb-15">Our Forum</span>
                        <h1 class="pb-3">Forum</h1>
                        <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry.
                            Lorem Ipsum has
                            been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        {{-- <div class="ic__buttons-wrapper">
                        <a href="#" class="ic__banner-btn">Ask The Community.</a>
                    </div> --}}
                    </div>
                </div>
                <div class="col-lg-6 text-end">
                    <img src="{{ asset('new-frontendv1/images/forum/forum-ask.png') }}" class="img-fluid"
                        alt="forum images">
                </div>
            </div>
        </div>
    </section>

    <!-- ebook start -->
    <section class="ic-forum-ask-question ic-section-space"
        style="background-image: url({{ asset('new-frontendv1/images/forum/forums-section-bg.png') }})">
        <div class="container">
            <div class="new-ask">
                <h4>New Question</h4>
                <div class="forms-list-part p-0">
                    <div class="forms-list bg-white">
                        <form action="{{ route('forum.question.store') }}" method="POST">
                            @csrf
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Title</label>
                                        <input type="text" name="title" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label for="">Forum Category</label>
                                        <select name="forum_category_id" class="form-control selectpicker">
                                            <option value="" selected disabled>Select Forum Category</option>
                                            @foreach ($forumCategories as $forumCategory)
                                                <option value="{{ $forumCategory->id }}">{{ $forumCategory->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label for="">Description</label>
                                        <input id="inputTrix" type="hidden" name="description"
                                            value="{{ old('description') }}">
                                        <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                                    </div>
                                    <button type="submit" class="ic-btn">Publish Quesion</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!-- forum end -->
        </div>
    </section>
    <!-- ebook end -->
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
