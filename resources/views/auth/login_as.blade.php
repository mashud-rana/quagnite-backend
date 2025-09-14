@extends('layouts.master')

@section('content')
    <!-- premium start -->
    <section class="ic__premium--part ic-section-space">
        <div class="container">
            <div class="ic__loginRegistration--users"
                style="background-image: url({{ asset('/new-frontend/images/login.png') }})">
                <div class="users-main">
                    <a href="{{ route('auth.login') }}">
                        <div class="ic__loginRegistration--items">
                            <div class="ic__loginRegistration--img">
                                <img src="{{ asset('new-frontend/images/member.png') }}" alt="user image">
                            </div>
                            <h6>Member</h6>
                        </div>
                    </a>
                    <a href="{{ route('auth.login') }}">
                        <div class="ic__loginRegistration--items">
                            <div class="ic__loginRegistration--img">
                                <img src="{{ asset('new-frontend/images/students.png') }}" alt="user image">
                            </div>
                            <h6>Students</h6>
                        </div>
                    </a>
                    <a href="{{ route('auth.login') }}">
                        <div class="ic__loginRegistration--items">
                            <div class="ic__loginRegistration--img">
                                <img src="{{ asset('new-frontend/images/teacher.png') }}" alt="user image">
                            </div>
                            <h6>Teachers</h6>
                        </div>
                    </a>
                    <a href="{{ route('auth.login') }}">
                        <div class="ic__loginRegistration--items">
                            <div class="ic__loginRegistration--img">
                                <img src="{{ asset('new-frontend/images/admin.png') }}" alt="user image">
                            </div>
                            <h6>Admin</h6>
                        </div>
                    </a>
                    <a href="{{ route('auth.login') }}">
                        <div class="ic__loginRegistration--items">
                            <div class="ic__loginRegistration--img">
                                <img src="{{ asset('new-frontend/images/super_admin.png') }}" alt="user image">
                            </div>
                            <h6>Super Admin</h6>
                        </div>
                    </a>
                    <a href="{{ route('auth.login') }}">
                        <div class="ic__loginRegistration--items">
                            <div class="ic__loginRegistration--img">
                                <img src="{{ asset('new-frontend/images/coach.png') }}" alt="user image">
                            </div>
                            <h6>Coach</h6>
                        </div>
                    </a>
                </div>
            </div>
            {{-- <div class="ic__loginRegistration--btn">
            <a href="{{ route('auth.register') }}" class="ic-btn">Registration <i class="ri-arrow-right-line"></i></a>
        </div> --}}
        </div>
    </section>
    <!-- premium end -->
@endsection
