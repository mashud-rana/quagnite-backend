@extends('layouts.master-blank')

@section('content')
<!-- ic_login -->
<section class="ic__member_login ic-section-space ic-section-space bg-img-center-property">
    <div class="banner-left-abs">
        <img src="{{ asset('/') }}new-frontendv1/images/banner-left-abs.png" alt="">
    </div>
    <div class="banner-right-abs">
        <img src="{{ asset('/') }}new-frontendv1/images/banner-right-abs.png" alt="">
    </div>
    <div class="container">
        <div class="main_content">
            <div class="logo">
                <a href="{{ route('front.home') }}">
                    <img class="d-block mx-auto" src="{{ getStoreFile(config('settings.site_logo')) }}" alt="">
                </a>
            </div>

            <div class="content ">
                <div class="text-center">
                    <div class="ic-icon-locks">
                        <i class="ri-lock-line"></i>
                    </div>
                </div>
                <h2 class="title mb-2 text-center">Forgot Your password</h2>
                <p class="pb-2 text-center">Enter your email address associated with your account, and we'll send
                    you a
                    link to reset your password.</p>
                @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form method="POST" action="{{ route('send.reset.password') }}">
                    @csrf
                    <!-- ic_input_group -->
                    <div class="ic_input_group mb-30">
                        <!-- email -->
                        <div class="mb-3">
                            <label for="" class="form-label">Email Address</label>
                            <div class="input-group">

                                <input type="email" class="form-control @error('email') is-invalid @enderror"
                                    placeholder="Enter Email Address" name="email" value="{{ old('email') }}" required
                                    autocomplete="email" autofocus>
                            </div>
                            @error('email')
                            <span class="ic-invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>

                        <!-- login_btn -->
                        <div class="w-100 text-center mb-30 login_btn">
                            <a href="" class="">
                                <button class="submit-btn" type="submit">Send Password Reset Link</button>
                            </a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
</section>
@endsection