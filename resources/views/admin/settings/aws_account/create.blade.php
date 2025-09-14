@extends('admin.layouts.master')
@push('styles')
@endpush
@section('content')
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                <form action="{{ route('admin.awsAccount.store') }}" method="post" enctype="multipart/form-data">
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Account Name <span class="error">*</span></label>
                        <input name="acc_name" type="text" class="form-control" required="" placeholder="Account Name" value="{{ old('acc_name') }}">
                        @error('acc_name')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Account ID <span class="error">*</span></label>
                        <input name="acc_id" type="text" class="form-control" required="" placeholder="Account ID" value="{{ old('acc_id') }}">
                        @error('acc_id')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Account Profile <span class="error">*</span></label>
                        <input name="acc_profile" type="text" class="form-control" required="" placeholder="Account Profile" value="{{ old('acc_profile') }}">
                        @error('acc_profile')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label">User Group <span class="error">*</span></label>
                        <input name="user_group" type="text" class="form-control" required="" placeholder="User Group" value="{{ old('user_group') }}">
                        @error('user_group')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                        <label class="form-label mb-2 w-100">Status <span class="error">*</span></label>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="status_yes" value="{{ ACTIVE }}" name="status" class="form-check-input" checked="">
                            <label class="custom-control-label" for="status_yes">Active</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input type="radio" id="status_no" value="{{ INACTIVE }}" name="status" class="form-check-input">
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


@push('scripts')
@endpush