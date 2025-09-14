@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <form action="{{ route('admin.tag-categories.update', $item->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Name <span class="error">*</span></label>
                            <input name="name" type="text" class="form-control" required="" placeholder="Name"
                                value="{{ $item->name ?? old('name') }}">
                            @error('name')
                                <p class="error">{{ $message }}</p>
                            @enderror
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

                                @can('All Tag Categories')
                                    <a class="btn btn-secondary waves-effect" href="{{ route('admin.tag-categories.index') }}">
                                        <i class="fa fa-times"></i> Cancel
                                    </a>
                                @endcan
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
@endsection
