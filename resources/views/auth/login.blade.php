@extends('layouts.master-blank')

@section('content')
    <section class="ic__member_login--part ic-section-space bg-img-center-property">
        <div class="container">
            <!-- main content -->
            <div class="main_content ic-register-main">
                <div class="ic-register-left">
                    <div class="logo">
                        <a href="{{ route('front.home') }}">
                            <img class="d-block mx-auto" src="{{ getStoreFile(config('settings.site_logo')) }}" alt="">
                        </a>
                    </div>
                    <div class="content">
                        <h4 class="title text-center">Login</h4>
                        <p class="text-center">you can login with your social site</p>
                        <!-- ic_google_signin -->
                        <div class="ic_google_signin">
                            <a href="{{ route('login.provider', AUTH_PROVIDER_GOOGLE) }}">
                                <svg width="25" height="26" viewBox="0 0 25 26" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path
                                        d="M24.9891 13.0332C24.9891 11.985 24.904 11.22 24.7199 10.4268H12.75V15.158H19.7761C19.6345 16.3338 18.8695 18.1045 17.1696 19.2943L17.1458 19.4527L20.9305 22.3847L21.1927 22.4108C23.6008 20.1868 24.9891 16.9146 24.9891 13.0332Z"
                                        fill="#4285F4" />
                                    <path
                                        d="M12.7485 25.498C16.1907 25.498 19.0805 24.3647 21.1912 22.41L17.1682 19.2935C16.0916 20.0442 14.6467 20.5684 12.7485 20.5684C9.37715 20.5684 6.51572 18.3444 5.4957 15.2705L5.34619 15.2832L1.41084 18.3288L1.35938 18.4719C3.45586 22.6365 7.76221 25.498 12.7485 25.498Z"
                                        fill="#34A853" />
                                    <path
                                        d="M5.49619 15.2723C5.22705 14.479 5.07129 13.629 5.07129 12.7508C5.07129 11.8725 5.22705 11.0226 5.48203 10.2293L5.4749 10.0604L1.49023 6.96582L1.35986 7.02783C0.495801 8.75605 0 10.6968 0 12.7508C0 14.8048 0.495801 16.7454 1.35986 18.4736L5.49619 15.2723Z"
                                        fill="#FBBC05" />
                                    <path
                                        d="M12.7485 4.93057C15.1425 4.93057 16.7573 5.96465 17.6781 6.82881L21.2762 3.31572C19.0664 1.26172 16.1907 0.000976562 12.7485 0.000976562C7.76221 0.000976562 3.45586 2.8624 1.35938 7.02705L5.48154 10.2285C6.51572 7.15459 9.37715 4.93057 12.7485 4.93057Z"
                                        fill="#EB4335" />
                                </svg>
                                Sign in with Google
                            </a>
                        </div>

                        <form method="POST" action="{{ route('auth.loginSubmit') }}">
                            <!-- ic_signin_with_email -->
                            <div class="ic_signin_with_email">
                                <span>or</span>
                            </div>
                            <form method="POST" action="{{ route('auth.loginSubmit') }}">
                                @csrf
                                <input type="hidden" name="previous_url" value="{{ url()->previous() }}">
                                <!-- ic_input_group -->
                                <div class="ic_input_group mb-2">
                                    <!-- email -->
                                    <div class="mb-2">
                                        <label for="exampleInputEmail1" class="form-label">Email address</label>
                                        <div class="input-group">
                                            <input type="email" class="form-control @error('email') is-invalid @enderror"
                                                placeholder="Enter Email Address" name="email" value="{{ old('email') }}"
                                                required autocomplete="email" autofocus>
                                        </div>
                                        @error('email')
                                            <span class="ic-invalid-feedback text-danger" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <!-- password -->
                                    <div>
                                        <label for="exampleInputPassword1" class="form-label">Password</label>
                                        <div class="input-group position-relative">

                                            <input type="password"
                                                class="form-control @error('password') is-invalid @enderror"
                                                placeholder="Enter Password" name="password" required>
                                        </div>
                                        @error('password')
                                            <span class="ic-invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <!-- checkbox -->
                                <div class="ic_remember_me mb-3">
                                    {{-- <div class="form-check me-1">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        Remember me
                                    </label>
                                </div> --}}
                                    <a href="{{ route('forget.password.email') }}">
                                        Forgot <span>password?</span>
                                    </a>
                                </div>

                                <!-- login_btn -->
                                <div class="w-100 text-center mb-30 login_btn">
                                    <a href="" class="">
                                        <button class="submit-btn" type="submit">Login</button>
                                    </a>
                                </div>
                                <!-- ic_create_acc -->
                                <div class="ic_create_acc text-start">
                                    New user?
                                    <a class="primary" href="{{ route('auth.register') }}">Create an Account</a>
                                </div>
                            </form>
                    </div>
                </div>
                <div class="ic-register-right">
                    <img src="{{ getStoreFile(config('settings.login_image')) }}" class="img-fluid w-100 h-100"
                        alt="regsiter-img.png">
                </div>
            </div>
        </div>
    </section>
@endsection
