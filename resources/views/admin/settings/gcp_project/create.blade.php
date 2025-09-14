@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <form action="{{ route('admin.gcpProject.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Project Name <span class="error">*</span></label>
                            <input name="project_name" type="text" class="form-control" required=""
                                placeholder="Project Name" value="{{ old('project_name') }}">
                            @error('project_name')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Project Number <span class="error">*</span></label>
                            <input name="project_no" type="text" class="form-control" required=""
                                placeholder="Project Number" value="{{ old('project_no') }}">
                            @error('project_no')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Project ID <span class="error">*</span></label>
                            <input name="project_id" type="text" class="form-control" required=""
                                placeholder="Project ID" value="{{ old('project_id') }}">
                            @error('project_id')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Project Url <span class="error">*</span></label>
                            <input name="project_url" type="text" class="form-control" required=""
                                placeholder="Project Url" value="{{ old('project_url') }}">
                            @error('project_url')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">User Role <span class="error">*</span></label>
                            <input name="user_role" type="text" class="form-control" required=""
                                placeholder="User Role" value="{{ old('user_role') }}">
                            @error('user_role')
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

                                {{-- @can('All Course Categories') --}}
                                <a class="btn btn-secondary waves-effect" href="{{ route('admin.subscriptions.index') }}">
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
