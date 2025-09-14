@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <form action="{{ route('admin.wiki.update', $wiki->id) }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Title <span class="error">*</span></label>
                            <input name="title" type="text" class="form-control" required="" placeholder="Title"
                                value="{{ old('title') ?? $wiki->title }}">
                            @error('title')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Wiki Category</label>
                            <select class="form-control select2" name="wiki_category_id">
                                <option selected disabled>Select Wiki Category</option>
                                @foreach ($wikiCategories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == $wiki->wiki_category_id ? 'selected' : '' }}>
                                        {{ $category->name }}</option>
                                @endforeach
                            </select>
                            @error('wiki_category_id')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Tag</label>
                            <select class="form-control select2" name="tag_ids[]" multiple>
                                <option disabled>Select Tag</option>
                                @foreach ($tags as $tag)
                                    <option value="{{ $tag->id }}"
                                        {{ in_array($tag->id, $wikiTags) ? 'selected' : '' }}>
                                        {{ $tag->name }}</option>
                                @endforeach
                            </select>
                            @error('tag_ids')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Upload Image <span class="error">*</span></label>
                            <div id='img_contain'>
                                <img id="image-preview" align='middle' src="{{ $wiki->image_path }}" alt="your image"
                                    title='' class="img-fluid" />
                            </div>
                            <input type="file" class="filestyle" name="image" data-buttonname="btn-secondary"
                                id="file-input" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);">
                            <div class="bootstrap-filestyle input-group mt-2">
                                <div name="filedrag" style="position: absolute; width: 100%; height: 35px; z-index: -1;">
                                </div>
                                <input type="text" class="form-control" id="input_text" placeholder="" disabled=""
                                    style="border-top-left-radius: 0.25rem; border-bottom-left-radius: 0.25rem;">
                                <span class="group-span-filestyle input-group-btn" tabindex="0"><label for="file-input"
                                        style="margin-bottom: 0;" class="btn btn-secondary "><span class="buttonText">Choose
                                            file</span></label></span>
                                @error('image')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>
                        {{--
                    <div class="mb-3">
                        <label class="form-label">Blog Image <span class="error">*</span></label>
                        <input name="image" type="file" accept="image/*" class="form-control" required>
                        @error('image')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div> --}}
                        <div class="mb-3">
                            <label class="form-label">Details <span class="error">*</span></label> <br>
                            <input id="inputTrix" type="hidden" name="details" value="{{ $wiki->details }}">
                            <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                            {{-- <textarea name="details" id="summernote">{{ old('details') }}</textarea> --}}
                        </div>

                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Status <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_yes" name="status" class="form-check-input"
                                    value="{{ PUBLISHED }}" name="status" class="custom-control-input"
                                    @if (PUBLISHED == $wiki->status) checked @endif>
                                <label class="custom-control-label" for="status_yes">Published</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_no" name="status" class="form-check-input"
                                    value="{{ DRAFT }}" name="status" class="custom-control-input"
                                    @if (DRAFT == $wiki->status) checked @endif>
                                <label class="custom-control-label" for="status_no">Draft</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Submit
                                </button>

                                {{-- @can('All Course Categories') --}}
                                <a class="btn btn-secondary waves-effect" href="{{ route('admin.wiki.index') }}">
                                    <i class="fa fa-times"></i> Cancel
                                </a>
                                {{-- @endcan --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('styles')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('common/custom/css/trix.css') }}">
@endpush

@push('scripts')
    <!-- Trix Editor - CDN Link -->
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <script src="{{ asset('common/custom/js/trix-editor-controls.js') }}"></script>

    <script src="{{ asset('common/custom/js/image-preview.js') }}"></script>
@endpush
