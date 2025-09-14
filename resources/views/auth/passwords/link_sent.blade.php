@extends('layouts.master-blank')

@section('content')
    <!-- ic_login -->
    <section class="ic__member_login ic-section-space bg-img-center-property">
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
                            <i class="ri-mail-line"></i>
                        </div>
                    </div>
                    <h2 class="title mb-3 text-center">Please Check Your Email</h2>
                    <p class="pb-3 text-info text-center">Check your inbox and follow the sent link.</p>
                    <p class="pb-3 text-muted text-center">Emails may take up to 10 minutes to send. If you do not receive
                        an
                        email, please
                        check your spam folder.</p>

                    <div class="w-100 text-center mb-30 login_btn">
                        <a href="{{ route('auth.login') }}" class="">
                            <button class="submit-btn">Return to Login</button>
                        </a>
                    </div>
                    <!-- bottom_abs
                    <div class="bottom_abs">
                        <img src="{{ asset('/frontend') }}/images/login/bottom_abs.svg" alt="">
                    </div> -->
                </div>
            </div>
        </div>
        </div>
    </section>
@endsection
