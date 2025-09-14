@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('admin.tags.update', $item->id) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">Tag Category <span class="error">*</span></label>
                            <select class="form-control select2" name="tag_category_id" required>
                                @forelse ($tag_categories as $cat)
                                    <option value="{{ $cat->id }}"
                                        {{ $item->tag_category_id == $cat->id ? ' selected' : '' }}>{{ $cat->name }}
                                    </option>
                                @empty
                                    <option value="">Nothing in the list</option>
                                @endforelse
                            </select>
                            @error('tag_category_id')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

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

                                @can('All Tags')
                                    <a class="btn btn-secondary waves-effect" href="{{ route('admin.tags.index') }}">
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
