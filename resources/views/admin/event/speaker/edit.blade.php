@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>

                    <form action="{{ route('admin.event.speaker.update', $speaker->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Full Name <span class="error">*</span></label>
                            <input type="text" name="full_name" class="form-control" required=""
                                placeholder="Full Name" value="{{ old('full_name', $speaker->full_name) }}">
                            @error('full_name')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Designation <span class="error">*</span></label>
                            <input type="text" name="designation" class="form-control" required=""
                                placeholder="Designation" value="{{ old('designation', $speaker->designation) }}">
                            @error('designation')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-md-4 mb-3">
                            <label class="form-label">Upload Image <span class="error">*</span></label>
                            <div id='img_contain'>
                                <img id="image-preview" align='middle'
                                    src="{{ $speaker->avatar ? asset($speaker->avatar) : get_default_image() }}"
                                    alt="your image" title='' class="img-fluid" />
                            </div>
                            <input type="file" class="filestyle" name="avatar" data-buttonname="btn-secondary"
                                id="file-input" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);">
                            <div class="bootstrap-filestyle input-group mt-2">
                                <div name="filedrag" style="position: absolute; width: 100%; height: 35px; z-index: -1;">
                                </div>
                                <input type="text" class="form-control" id="input_text" placeholder="" disabled=""
                                    style="border-top-left-radius: 0.25rem; border-bottom-left-radius: 0.25rem;">
                                <span class="group-span-filestyle input-group-btn" tabindex="0"><label for="file-input"
                                        style="margin-bottom: 0;" class="btn btn-secondary"><span class="buttonText">Choose
                                            file</span></label></span>
                            </div>
                            @error('avatar')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">About Speaker<span class="error">*</span></label> <br>
                            <input id="inputTrix" type="hidden" name="about"
                                value="{{ old('about', $speaker->about) }}">
                            <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                        </div>

                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Status <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_active" value="{{ ACTIVE }}" name="status"
                                    class="form-check-input" {{ old('status', $speaker->status) == ACTIVE ? 'checked' : '' }}>
                                <label class="custom-control-label" for="status_active">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_inactive" value="{{ INACTIVE }}" name="status"
                                    class="form-check-input" {{ old('status', $speaker->status) == INACTIVE ? 'checked' : '' }}>
                                <label class="custom-control-label" for="status_inactive">Inactive</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-light ml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Update
                                </button>

                                    <a class="btn btn-secondary waves-effect"
                                        href="{{ route('admin.event.speaker.index') }}">
                                        <i class="fa fa-times"></i> Cancel
                                    </a>
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
