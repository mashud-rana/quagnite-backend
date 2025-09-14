@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Exam Update</h4>
                    <form action="{{ route('admin.exams.update', $exam->id) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="#">Exam Title</label>
                                    <input name="title" value="{{ old('title') ?? $exam->title }}" type="text"
                                        class="form-control" placeholder="Exam title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="#">Exam Price</label>
                                    <input name="price" value="{{ old('price') ?? $exam->price }}" type="text"
                                        class="form-control" placeholder="Exam Price" required>
                                </div>
                                <div class="mb-3">
                                    <label for="#">Exam Old Price</label>
                                    <input name="old_price" value="{{ old('old_price') ?? $exam->old_price }}"
                                        type="text" class="form-control" placeholder="Exam Old Price">
                                </div>
                                <div class="mb-3">
                                    <label for="#">Exam Image</label>
                                    <input name="image" type="file" class="form-control" placeholder="Exam Title">
                                </div>
                                <div class="mb-3">
                                    <label for="#">Exam Duration</label>
                                    <input name="duration" value="{{ old('duration') ?? $exam->duration }}" type="number"
                                        class="form-control" placeholder="Exam Duration" required>
                                </div>
                                <div class="mb-3">
                                    <label for="#">Pass Mark</label>
                                    <input name="pass_mark" value="{{ old('pass_mark') ?? $exam->pass_mark }}"
                                        type="number" class="form-control" placeholder="Exam Pass Mark" required>
                                </div>
                                <div class="mb-3">
                                    <label for="#">Description</label>
                                    <input id="inputTrix" type="hidden" name="description"
                                        value="{{ old('description') ?? $exam->description }}" required>
                                    <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mb-2 w-100">Status <span class="error">*</span></label>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="status_yes" name="status" class="form-check-input"
                                            value="{{ ACTIVE }}" name="status" class="custom-control-input"
                                            @if (ACTIVE == $exam->status) checked @endif>
                                        <label class="custom-control-label" for="status_yes">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="status_no" name="status" class="form-check-input"
                                            value="{{ INACTIVE }}" name="status" class="custom-control-input"
                                            @if (INACTIVE == $exam->status) checked @endif>
                                        <label class="custom-control-label" for="status_no">Inactive</label>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Update</button>
                                    <button type="button" class="btn btn-danger">cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    {{-- @include('includes.styles.datatable') --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('common/custom/css/trix.css') }}">
@endpush

@push('scripts')
    {{-- @include('includes.scripts.datatable') --}}
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="{{ asset('common/custom/js/trix-editor-controls.js') }}"></script>
@endpush
