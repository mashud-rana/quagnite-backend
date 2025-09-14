@extends('admin.layouts.master')
@push('styles')
@endpush
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <form action="{{ route('admin.policy.settings.cookie.update') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <input type="hidden" name="type" value="{{ $policy->type }}">
                        <div class="mb-3">
                            <label class="form-label">Description <span class="error">*</span></label>
                            <input id="inputTrix" type="hidden" name="description" value="{{ $policy->description }}">
                            <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                        </div>

                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Update
                                </button>
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
@endpush
