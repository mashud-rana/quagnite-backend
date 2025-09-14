@extends('admin.layouts.master')
@push('styles')
@endpush
@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <form action="{{ route('admin.playground.category.update', $item->id) }}" method="post">
                        @csrf @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Category Name<span class="error">*</span></label>
                            <input name="title" type="text" class="form-control" required=""
                                placeholder="Type Category Name" value="{{ old('title', $item->title) }}">
                            @error('title')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Submit
                                </button>

                                {{-- @can('All Course Categories') --}}
                                <a class="btn btn-secondary waves-effect" href="{{ route('admin.playground.category.index') }}">
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

@push('scripts')
@endpush
