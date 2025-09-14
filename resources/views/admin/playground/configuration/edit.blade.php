@extends('admin.layouts.master')
@push('styles')
@endpush
@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <form action="{{ route('admin.playground.configuration.update', $item->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('put')

                        <div class="mb-3">
                            <label class="form-label">Playground <span class="error">*</span></label>
                            <select name="playground_id" class="form-control">
                                <option selected disabled>Select Playground</option>
                                @foreach ($playgrounds as $playground)
                                    <option value="{{ $playground->id }}"
                                        {{ $playground->id == old('playground_id', $item->playground_id) ? 'selected' : '' }}>
                                        {{ $playground->title }}
                                    </option>
                                @endforeach
                            </select>
                            @error('playground_id')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">AMI <span class="error">*</span></label>
                            <input name="ami" type="text" class="form-control" required="" placeholder="Enter Ami"
                                value="{{ old('ami', $item->ami) }}">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Instance Type <span class="error">*</span></label>
                            <input name="instance_type" type="text" class="form-control" required=""
                                placeholder="Enter Instance Type" value="{{ old('instance_type', $item->instance_type) }}">

                        </div>
                        <div class="mb-3">
                            <label class="form-label">Security Group <span class="error">*</span></label>
                            <input name="security_group" type="text" class="form-control" required=""
                                placeholder="Enter Security Group"
                                value="{{ old('security_group', $item->security_group) }}">
                        </div>
                        {{-- <div class="mb-3">
                            <label class="form-label">SSH Key Name</label>
                            <input name="ssh_key_name" type="text" class="form-control" placeholder="Enter SSH Key Name"
                                value="{{ old('ssh_key_name', $item->ssh_key_name) }}">
                        </div> --}}

                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Save
                                </button>
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
