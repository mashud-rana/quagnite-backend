@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <form action="{{ route('admin.faq.faqs.update', $item->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Select Topic <span class="error">*</span></label>
                            <select name="topic_id" class="form-control ic-select">
                                @foreach($topics as $topic)
                                    <option value="{{ $topic->id }}" {{ $topic->id == $item->topic_id ? 'selected' : '' }}>
                                        {{ $topic->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('topic_id')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                    
                        <div class="mb-3">
                            <label class="form-label">Question <span class="error">*</span></label>
                            <input name="question" type="text" class="form-control" required=""
                                placeholder="Question" value="{{ old('question', $item->question) }}">
                            @error('question')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                    
                        <div class="mb-3">
                            <label class="form-label">Answer <span class="error">*</span></label> <br>
                            <input id="inputTrix" type="hidden" name="answer" value="{{ old('answer', $item->answer) }}">
                            <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                        </div>
                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Status <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_yes" name="status" class="form-check-input"
                                    value="{{ ACTIVE }}" name="status" class="custom-control-input"
                                    @if (ACTIVE == $item->status) checked @endif>
                                <label class="custom-control-label" for="status_yes">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_no" name="status" class="form-check-input"
                                    value="{{ INACTIVE }}" name="status" class="custom-control-input"
                                    @if (INACTIVE == $item->status) checked @endif>
                                <label class="custom-control-label" for="status_no">Inactive</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Submit
                                </button>
                                <a class="btn btn-secondary waves-effect" href="{{ route('admin.faq.faqs.index') }}">
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
