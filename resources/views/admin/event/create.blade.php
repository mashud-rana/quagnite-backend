@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <form action="{{ route('admin.event.events.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Event Name <span class="error">*</span></label>
                            <input name="title" type="text" class="form-control" required=""
                                placeholder="Event Name" value="{{ old('title') }}">
                            @error('title')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Event Start <span class="error">*</span></label>

                                    <input value="{{ old('event_start') }}" name="event_start" type="datetime-local"
                                        class="form-control" required autocomplete="off">
                                    @error('event_start')
                                        <p class="error">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">Event End <span class="error">*</span></label>

                                    <input value="{{ old('event_end') }}" name="event_end" type="datetime-local"
                                        class="form-control" required autocomplete="off">
                                    @error('event_end')
                                        <p class="error">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Event Location(Country)<span class="error">*</span></label>

                            <input value="{{ old('location') }}" name="location" type="text" class="form-control"
                                required autocomplete="off" placeholder="Canada">
                            @error('location')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Select Speaker <span class="error">*</span></label>
                            <select name="speakers[]" class="selectpicker" multiple>
                                @foreach($speakers as $speaker)
                                    <option value="{{ $speaker->id }}">{{ $speaker->full_name }}</option>
                                @endforeach
                            </select>
                            @error('speakers')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Upload Image <span class="error">*</span></label>
                            <div id='img_contain'>
                                <img id="image-preview" align='middle' src="{{ get_default_image() }}" alt="your image"
                                    title='' class="img-fluid" />
                            </div>
                            <input type="file" class="filestyle" name="image" data-buttonname="btn-secondary"
                                id="file-input" tabindex="-1" style="position: absolute; clip: rect(0px, 0px, 0px, 0px);"
                                required>
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
                        <div class="mb-3">
                            <label class="form-label">Description<span class="error">*</span></label> <br>
                            <input id="inputTrix" type="hidden" name="description" value="{{ old('description') }}">
                            <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                        </div>
                        <div class="row">
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
                        </div>
                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Submit
                                </button>

                                {{-- @can('All Course Categories') --}}
                                <a class="btn btn-secondary waves-effect" href="{{ route('admin.event.events.index') }}">
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
    <script src="{{ asset('admin/js/selectPicker.js') }}"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
@endpush

@push('scripts')
    <!-- Trix Editor - CDN Link -->
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="{{ asset('common/custom/js/trix-editor-controls.js') }}"></script>

    <script src="{{ asset('common/custom/js/image-preview.js') }}"></script>
    <script src="{{ asset('admin/js/selectPicker.js') }}"></script>
    <script>
        $(function() {
            $('.selectpicker').selectpicker();
        })
    </script>
@endpush
