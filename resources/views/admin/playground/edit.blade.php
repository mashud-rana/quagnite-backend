@extends('admin.layouts.master')
@push('styles')
@endpush
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <form action="{{ route('admin.playground.update', $item->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf @method('put')

                        <div class="mb-3">
                            <label class="form-label">Select Category <span class="error">*</span></label>
                            <select name="playground_category_id" class="form-control">
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}"
                                        {{ $category->id == old('playground_category_id', $item->playground_category_id) ? 'selected' : '' }}>
                                        {{ $category->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('playground_category_id')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Playground Name<span class="error">*</span></label>
                            <input name="title" type="text" class="form-control" required=""
                                placeholder="Type Playground Name" value="{{ old('title', $item->title) }}">
                            @error('title')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="col-md-4 mb-3">
                            <label class="form-label">Upload Image <span class="error">*</span></label>
                            <div id='img_contain'>
                                <img id="image-preview" align="middle"
                                    src="{{ getStoreFile($item->image, $item->storage_type) ? getStoreFile($item->image, $item->storage_type) : get_default_image() }}"
                                    alt="Your image" class="img-fluid" />

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
                        <div class="mb-3">
                            <label class="form-label">Instruction <span class="error">*</span></label> <br>
                            <input id="inputTrix" type="hidden" name="instruction"  value="{{ old('instruction', $item->instruction) }}">
                            <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                            @error('instruction')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Overview <span class="error">*</span></label> <br>
                            <input id="inputTrix1" type="hidden" name="overview" value="{{ old('overview', $item->overview) }}">
                            <trix-editor class="trix-editor" input="inputTrix1"></trix-editor>
                            @error('overview')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        
                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Status <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_yes" value="2" name="status"
                                    class="form-check-input" {{ old('status', $item->status) == ACTIVE ? 'checked' : '' }}>
                                <label class="custom-control-label" for="status_yes">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_no" value="3" name="status"
                                    class="form-check-input" {{ old('status', $item->status) == INACTIVE ? 'checked' : '' }}>
                                <label class="custom-control-label" for="status_no">Inactive</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Submit
                                </button>

                                {{-- @can('All Course Categories') --}}
                                <a class="btn btn-secondary waves-effect" href="{{ route('admin.playground.index') }}">
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
