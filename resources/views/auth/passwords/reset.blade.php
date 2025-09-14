@extends('layouts.master-blank')

@section('content')
    <!-- ic_login -->
    <section class="ic__member_reg ic-section-space bg-img-center-property">
        <div class="banner-left-abs">
            <img src="{{ asset('/') }}new-frontendv1/images/banner-left-abs.png" alt="">
        </div>
        <div class="banner-right-abs">
            <img src="{{ asset('/') }}new-frontendv1/images/banner-right-abs.png" alt="">
        </div>
        <div class="container">
            <!-- main_content -->
            <div class="main_content">
                <div class="logo">
                    <a href="{{ route('front.home') }}">
                        <img class="d-block mx-auto" src="{{ getStoreFile(config('settings.site_logo')) }}" alt="">
                    </a>
                </div>
                <div class="content">
                    <div class="text-center">
                        <div class="ic-icon-locks">
                            <i class="ri-mail-line"></i>
                        </div>
                    </div>
                    <h2 class="title mb-3 text-center">Reset Password</h2>

                    <form action="{{ route('reset.password') }}" method="POST">
                        @csrf
                        <input type="hidden" name="token" value="{{ $token }}">
                        <!-- ic_input_group -->
                        <div class="ic_input_group mb-30">

                            <!-- password -->
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <div class="input-group position-relative">
                                    <input name="password" type="password" class="form-control" placeholder="Enter Password"
                                        aria-label="Password" aria-describedby="basic-addon1" required>
                                    {{-- <i
                                    class="ri-eye-line toggle-password position-absolute top-50  translate-middle-y"></i> --}}
                                </div>
                                @error('password')
                                    <span class="ic-invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <!-- Confirm password -->
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Confirm Password</label>
                                <div class="input-group position-relative">
                                    <input name="password_confirmation" type="password" class="form-control"
                                        placeholder="Enter Confirm Password" aria-label="Password"
                                        aria-describedby="basic-addon1" required>
                                    {{-- <i
                                    class="ri-eye-line toggle-password position-absolute top-50  translate-middle-y"></i> --}}
                                </div>
                            </div>

                            <!-- login_btn -->
                            <div class="w-100 text-center mb-30 login_btn">
                                <a href="" class="">
                                    <button class="submit-btn" type="submit">Reset Password</button>
                                </a>
                            </div>
                    </form>
                </div>
            </div>
    </section>
@endsection
