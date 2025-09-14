@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.course-subcategories.store') }}" method="post"
                        enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Course Category <span class="error">*</span></label>
                            <select class="form-control select2" name="course_category_id" required>
                                @forelse ($course_categories as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @empty
                                    <option value="">Nothing in the list</option>
                                @endforelse
                            </select>
                            @error('course_category_id')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Sub Category Name <span class="error">*</span></label>
                            <input name="name" type="text" class="form-control" required="" placeholder="Name"
                                value="{{ old('name') }}">
                            @error('name')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Status <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_yes" value="{{ ACTIVE }}" name="status"
                                    class="form-check-input" checked="">
                                <label class="custom-control-label" for="status_yes">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_no" value="{{ INACTIVE }}" name="status"
                                    class="form-check-input">
                                <label class="custom-control-label" for="status_no">Inactive</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Submit
                                </button>

                                {{-- @can('All courses') --}}
                                <a class="btn btn-secondary waves-effect" href="{{ route('admin.courses.index') }}">
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
    <script>
        $(document).ready(function() {
            $('.select2').select2({
                placeholder: 'Select a course Category'
            });
        });
    </script>
@endpush
