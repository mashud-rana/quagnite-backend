@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <form action="{{ route('admin.faq.topics.store') }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label">Name <span class="error">*</span></label>
                            <input name="name" type="text" class="form-control" required=""
                                placeholder="Name" value="{{ old('name') }}">
                            @error('name')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description<span class="error">*</span></label> <br>
                            <input id="inputTrix" type="hidden" name="description" value="{{ old('description') }}">
                            <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label mb-2 w-100">Status <span class="error">*</span></label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="status_yes" value="{{ ACTIVE }}"
                                        name="status" class="form-check-input" checked="">
                                    <label class="custom-control-label" for="status_yes">Active</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="status_no" value="{{ INACTIVE }}" name="status"
                                        class="form-check-input">
                                    <label class="custom-control-label" for="status_no">Inactive</label>
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Submit
                                </button>
                                <a class="btn btn-secondary waves-effect" href="{{ route('admin.faq.topics.index') }}">
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
