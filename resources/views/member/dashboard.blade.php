@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    @php
        $auth_user = auth()->user();
    @endphp
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            {{-- header start --}}
            <div class="ic-dashboard__header">
                <div class="header-left">
                    <div class="ic-dashboard__avatar">
                        <img src="{{ $auth_user->avatar_url }}" alt="">
                    </div>
                    <div>
                        <h3 class="black">Hi {{ $auth_user->full_name }}!</h3>
                        <span class="primary">Welcome to your <span class="color-deep-gray">Dashboard</span></span>

                        {{-- <p class="color-deep-gray fs-14">{{ \Carbon\Carbon::now()->format('jS F Y, l') }}</p> --}}
                    </div>
                </div>
                <a href="{{ route('member.profile') }}" class="ic-btn-outline">Edit Profile <i
                        class="ri-arrow-right-s-line"></i></a>
            </div>
            {{-- header end --}}
            {{-- banner start --}}
            <div class="ic-member-become-main mb-30">
                <div class="ic-become-banner-post rounded"
                    style="background-image: linear-gradient(0deg, rgba(0, 172, 182, 0.90) 0%, rgba(0, 172, 182, 0.90) 100%), url({{ asset('new-frontendv1/images/member-dashboard/member-intro.png') }})">
                    <div class="row">
                        <div class="col-lg-9">
                            <h3 class="white">Member Dashboard Overview</h3>
                            <p class="white">Freelancers and entrepreneurs Freelancers and entrepreneurs use about me to
                                grow their audience and get more clients. Create a page to present who you are and what you
                                do in one link. Use about.</p>
                        </div>
                        <div class="col-lg-3">
                            <img src="{{ asset('new-frontendv1/images/member-dashboard/member-post.png') }}"
                                class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            {{-- banner end --}}

            {{-- dashboard inside --}}
            <div class="mb-30">
                <div class="row g-3">
                    <div class="col-lg-6">
                        <div class="ic-member-become-card text-center"
                            style="background-image: linear-gradient(0deg, rgba(244, 120, 32, 0.90) 0%, rgba(244, 120, 32, 0.90) 100%), url({{ asset('/new-frontendv1') }}/images/member-dashboard/member-dashboard-become.png);">
                            <h3 class="white mb-3">Do you want to be a Teacher?</h3>
                            <a href="{{ route('member.becomeATeacher') }}" class="ic-btn-white">Click Here <i
                                    class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="ic-member-become-card text-center"
                            style="background-image: linear-gradient(0deg, rgba(47, 189, 119, 0.90) 0%, rgba(47, 189, 119, 0.90) 100%), url({{ asset('/new-frontendv1') }}/images/member-dashboard/member-dashboard-become.png);">
                            <h3 class="white mb-3">Do you want to be a Coach?</h3>
                            <a href="{{ route('member.becomeACoach') }}" class="ic-btn-white">Click Here <i
                                    class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- recently bootcamp start --}}
            <div class="member-recently-bootcamp-area mb-30">
                <div class="header">
                    <h3>Recently Added Our Bootcamps</h3>
                    <a href="{{ route('all.bootcamps') }}" class="ic-btn primary white">View All</a>
                </div>
                <div class="recently-item-area">
                    <div class="row">
                        @forelse ($recent_bootcamps as $bootcamp)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="ic-coach-item">
                                    <div class="position-relative overflow-hidden">
                                        <p class="coach-bage ff-exend fs-14 color-white">{{ $bootcamp->category->name }}
                                        </p>
                                        {{-- <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a> --}}
                                        <img src="{{ getStoreFile($bootcamp->image, $bootcamp->storage_type) }}"
                                            class="img-fluid ic-coach-image w-100" alt="">
                                    </div>
                                    <div class="ic-coach-content">
                                        <a class="black" href="{{ route('bootcamp.details', $bootcamp->slug) }}">
                                            <p class="sub-title"> {!! str_limit($bootcamp->title, $words = 30, $end = '...') !!} </p>
                                        </a>
                                        <div class="coach-names">
                                            @php
                                                $avgRating = $bootcamp->average_rating;
                                                $starClass = $avgRating >= 0.5 ? 'yellow' : 'gray-400';
                                            @endphp
                                            <p>
                                                <img src="{{ getStoreFile($bootcamp->user->avatar, $bootcamp->storage_type) }}"
                                                    alt="">
                                                {{ $bootcamp->user->full_name }}
                                            </p>
                                            <p>{{ number_format($avgRating, 1) }} <span><i
                                                        class="ri-star-s-fill"></i></span></p>
                                        </div>
                                        <div class="coach-price d-flex align-items-center">
                                            <h4>{{ $bootcamp->price }}</h4>
                                            <p class="text-decoration-line-through">${{ $bootcamp->old_price }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <x-frontend.data-notfound></x-frontend.data-notfound>
                        @endforelse

                    </div>
                </div>
            </div>
            <div class="member-recently-bootcamp-area">
                <div class="header">
                    <h3>Recently Added Our Courses</h3>
                    <a href="{{ route('all.bootcamps') }}" class="ic-btn primary white">View All</a>
                </div>
                <div class="recently-item-area">
                    <div class="row">
                        @forelse ($recent_courses as $course)
                            <div class="col-lg-3 col-md-4 col-sm-6">
                                <div class="ic-coach-item">
                                    <div class="position-relative overflow-hidden">
                                        <p class="coach-bage ff-exend fs-14 color-white">{{ $course->category->name }}
                                        </p>
                                        {{-- <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a> --}}
                                        <img src="{{ getStoreFile($course->image, $course->storage_type) }}"
                                            class="img-fluid ic-coach-image w-100" alt="">
                                    </div>
                                    <div class="ic-coach-content">
                                        <a class="black" href="{{ route('course.details', $course->slug) }}">
                                            <p class="sub-title"> {!! str_limit($course->title, $words = 25, $end = '...') !!} </p>
                                        </a>
                                        <div class="coach-names">
                                            @php
                                                $avgRating = $course->average_rating;
                                                $starClass = $avgRating >= 0.5 ? 'yellow' : 'gray-400';
                                            @endphp
                                            <p>
                                                <img src="{{ getStoreFile($course->user->avatar, $course->storage_type) }}"
                                                    alt="">
                                                {{ $course->user->full_name }}
                                            </p>
                                            <p>{{ number_format($avgRating, 1) }} <span><i
                                                        class="ri-star-s-fill"></i></span></p>
                                        </div>
                                        <div class="coach-price d-flex align-items-center">
                                            <h4>{{ $course->price }}</h4>
                                            <p class="text-decoration-line-through">${{ $course->old_price }}</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                            <x-frontend.data-notfound></x-frontend.data-notfound>
                        @endforelse

                    </div>
                </div>
            </div>

            {{-- recently bootcamp end --}}
            {{-- dashboard inside --}}
        </div>
    </section>
    {{-- Member dashboard --}}
@endsection

@push('scripts')
@endpush
