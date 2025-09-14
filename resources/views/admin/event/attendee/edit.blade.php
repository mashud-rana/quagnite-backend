@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>

                    <form action="{{ route('admin.event.attendee.update', $item->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Event Name <span class="error">*</span></label>
                            <input type="text" name="event_id" class="form-control"
                                placeholder="Event Name" value="{{ $item->events->pluck('title')->implode(', ') }}" readonly>
                            @error('event_id')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">First Name <span class="error">*</span></label>
                            <input type="text" name="first_name" class="form-control" required=""
                                placeholder="Full Name" value="{{ old('first_name', $item->first_name) }}">
                            @error('first_name')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Last Name <span class="error">*</span></label>
                            <input type="text" name="last_name" class="form-control" required=""
                                placeholder="Last Name" value="{{ old('last_name', $item->last_name) }}">
                            @error('last_name')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Email <span class="error">*</span></label>
                            <input type="email" name="email" class="form-control" required=""
                                placeholder="email" value="{{ old('email', $item->email) }}">
                            @error('email')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone <span class="error">*</span></label>
                            <input type="tel" name="phone" class="form-control" required=""
                                placeholder="Phone" value="{{ old('phone', $item->phone) }}">
                            @error('phone')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Company <span class="error">*</span></label>
                            <input type="text" name="company" class="form-control" required=""
                                placeholder="Company" value="{{ old('company', $item->company) }}">
                            @error('company')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Job Title <span class="error">*</span></label>
                            <input type="text" name="job_title" class="form-control" required=""
                                placeholder="Job Title" value="{{ old('job_title', $item->job_title) }}">
                            @error('job_title')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Notes<span class="error">*</span></label> <br>
                            <input id="inputTrix" type="hidden" name="notes"
                                value="{{ old('notes', $item->notes) }}">
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
                                <button class="btn btn-primary waves-effect waves-light ml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Update
                                </button>

                                
                                    <a class="btn btn-secondary waves-effect"
                                        href="{{ route('admin.event.attendee.index') }}">
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
