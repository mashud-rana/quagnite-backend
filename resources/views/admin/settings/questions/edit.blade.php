@extends('admin.layouts.master')
@push('styles')
@endpush
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <form action="{{ route('admin.playground.questions.update', $question->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Playground</label>
                            <select class="form-control select2" name="playground_id">
                                <option selected disabled>Select Playground</option>
                                @foreach ($playgrounds as $playground)
                                    <option value="{{ $playground->id }}"
                                        {{ $playground->id == $question->questionable->id ? 'selected' : '' }}>
                                        {{ $playground->title }}</option>
                                @endforeach
                            </select>
                            @error('playground_id')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Questions --}}
                        <div class="mb-3">
                            <label class="form-label">Question <span class="error">*</span></label> <br>
                            <input id="inputTrix" type="hidden" name="title"
                                value="{{ old('title') ?? $question->title }}">
                            <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                            @error('title')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Options --}}
                        <div class="row">

                            <label class="form-label pb-2 ">(Enter Options and choose the correct option
                                also)</label>
                            <div class="col-md-12 mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer" id="radio1"
                                        value="a" {{ 'a' == $question->answer ? 'checked' : '' }}>
                                    <label class="form-check-label" for="radio1">Option A <span
                                            class="error">*</span></label>
                                </div>
                                <input name="options[]" type="text" class="form-control"
                                    placeholder="Enter Option A Input" value="{{ $options[0] }}" required>
                            </div>


                            <div class="col-md-12 mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer" id="radio2"
                                        value="b" {{ 'b' == $question->answer ? 'checked' : '' }}>
                                    <label class="form-check-label" for="radio2">Option B <span
                                            class="error">*</span></label>
                                </div>
                                <input name="options[]" type="text" class="form-control"
                                    placeholder="Enter Option B Input" value="{{ $options[1] }}" required>
                            </div>


                            <div class="col-md-12 mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer" id="radio3"
                                        value="c" {{ 'c' == $question->answer ? 'checked' : '' }}>
                                    <label class="form-check-label" for="radio3">Option C</label>
                                </div>
                                <input name="options[]" type="text" class="form-control"
                                    placeholder="Enter Option C Input" value="{{ $options[2] }}">
                            </div>


                            <div class="col-md-12 mb-3">
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="answer" id="radio4"
                                        value="d" {{ 'd' == $question->answer ? 'checked' : '' }}>
                                    <label class="form-check-label" for="radio4">Option D</label>
                                </div>
                                <input name="options[]" type="text" class="form-control"
                                    placeholder="Enter Option D Input" value="{{ $options[3] }}">
                            </div>
                        </div>
                        {{-- Options --}}

                        <div class="mb-3">
                            <label class="form-label">Hint <span class="error">*</span></label>
                            <input name="hint" type="text" class="form-control" required="" placeholder=""
                                value="{{ old('hint') ?? $question->hint }}">
                            @error('hint')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Explanation </label>
                            <input name="explanation" type="text" class="form-control" required="" placeholder=""
                                value="{{ old('explanation') ?? $question->explanation }}">
                            @error('explanation')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Submit
                                </button>

                                {{-- @can('All Course Categories') --}}
                                <a class="btn btn-secondary waves-effect"
                                    href="{{ route('admin.subscriptions.index') }}">
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
@endpush
