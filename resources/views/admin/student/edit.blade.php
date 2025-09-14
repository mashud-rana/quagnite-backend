@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>

                    <form action="{{ route('admin.students.update', $user->id) }}" method="POST"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <div class="mb-3">
                            <label class="form-label">First Name <span class="error">*</span></label>
                            <input type="text" name="first_name" class="form-control" required=""
                                placeholder="First Name" value="{{ $user->first_name }}">
                            @error('first_name')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Last Name <span class="error">*</span></label>
                            <input type="text" name="last_name" class="form-control" required=""
                                placeholder="Last Name" value="{{ $user->last_name }}">
                            @error('last_name')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Email <span class="error">*</span></label>
                            <input type="email" name="email" class="form-control" required="" placeholder="Email"
                                value="{{ $user->email }}">
                            @error('email')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Phone <span class="error">*</span></label>
                            <input type="tel" name="phone" class="form-control" required="" placeholder="Phone"
                                value="{{ $user->phone }}">
                            @error('phone')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Password <span class="error">*</span></label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Password" value="">
                            @error('password')
                                <p class="error">{{ $message }}</p>
                            @enderror
                            <span id="StrengthDisp" class="input_bellow_text">
                                Should contains Letters(uppercase & lowercase), Number and Special
                                Characters.
                            </span>
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Confirm Password <span class="error">*</span></label>
                            <input type="password" name="password_confirmation" class="form-control"
                                placeholder="Confirm Password" value="">
                            @error('password_confirmation')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Gender <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="male" value="male" name="gender" class="form-check-input"
                                    {{ $user->gender == 'male' ? 'checked' : '' }}>
                                <label class="custom-control-label" for="male">Male</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="female" value="female" name="gender" class="form-check-input"
                                    {{ $user->gender == 'female' ? 'checked' : '' }}>
                                <label class="custom-control-label" for="female">Female</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="other" value="other" name="gender" class="form-check-input"
                                    {{ $user->gender == 'other' ? 'checked' : '' }}>
                                <label class="custom-control-label" for="other">Other</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Status <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_yes" name="status" class="form-check-input"
                                    value="{{ APPROVED }}" name="status" class="custom-control-input"
                                    @if (APPROVED == $user->status) checked @endif>
                                <label class="custom-control-label" for="status_yes">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_no" name="status" class="form-check-input"
                                    value="{{ PENDING }}" name="status" class="custom-control-input"
                                    @if (PENDING == $user->status) checked @endif>
                                <label class="custom-control-label" for="status_no">Pending</label>
                            </div>
                        </div>

                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Submit
                                </button>

                                @can('All Admins')
                                    <a class="btn btn-secondary waves-effect" href="{{ route('admin.students.index') }}">
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

@push('scripts')
    <script src="{{ asset('/admin/js/passwordCheck.js') }}"></script>
@endpush
