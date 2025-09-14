@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            <div class="section-headers">
                <div>
                    <h3 class="fs-30 fw-700 pb-3">My Coachings</h3>
                    <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
                </div>
            </div>
            <div class="ic-my-courses__tabs">
                <div class="ic-my-course__navlinks">
                    <ul class="ic-profile__navsTab">
                        <li>
                            <a href="#" class="ic-profile__links active" data-link="progress">In Progress </a>
                        </li>
                        <li>
                            <a href="#" class="ic-profile__links" data-link="wishlist">Completed</a>
                        </li>
                        {{-- <li>
                            <a href="#" class="ic-profile__links" data-link="archives"> Archives</a>
                        </li> --}}
                    </ul>
                    {{-- <ul>
                            <li class="ic-myCourse-select">
                                <select name="" class="selectpicker" id="">
                                    <option value="0">Category</option>
                                    <option value="1"> Category 20</option>
                                </select>
                            </li>
                        </ul> --}}
                </div>
                <div class="ic-profile__tabsContent">
                    <div class="ic-profile__tabsItems active" id="progress">
                        <div
                            class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-3 g-2">
                            @forelse ($coachings as $item)
                            <div class="col">
                                <div class="ic-v1-bootcams-items">
                                    <div class="ic-list-image position-relative"><img
                                            src="{{ getStoreFile($item->student->avatar, $item->student->storage_type) }}" alt=""
                                            class="img-fluid w-100">
                                        @if ($item->status == UPCOMING)
                                            <div class="ic-active-status warning">
                                                Upcoming
                                            </div>
                                        @elseif($item->status == INPROGRESS)
                                            <div class="ic-active-status">
                                                Inprogress
                                            </div>
                                        @endif
                                    </div>
                                    <div class="ic-list-conetnt">
                                        <p class="sub-title">{{ $item->student->full_name }}</p>
                                        <div class="list-conetnt-info">
                                            <div class="bootcams-course-details">
                                                <p><i class="ri-calendar-check-fill"></i>
                                                    {{ \Carbon\Carbon::parse($item->start_time)->format('d M, Y') }}
                                                </p>
                                                <p><i class="ri-time-line"></i> {{ $item->slot->time }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-btn pt-3 d-flex align-items-center gap-2">
                                        <a href="{{ route('coach.coachings.join', $item->uuid) }}"
                                            class="ic-btn-outline-md">
                                            <i class="ri-live-fill"></i> Join
                                        </a>
                                        <a href="{{ route('coaching.activities', $item->uuid) }}"
                                            class="ic-btn-outline-md">
                                            Activities
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                            @endforelse
                        </div>
                    </div>
                    <div class="ic-profile__tabsItems" id="wishlist">
                        <div
                            class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 gx-xxl-4 gx-xl-3 gx-2">
                            @forelse ($completeCoachings as $item)
                            <div class="col">
                                <div class="ic-v1-bootcams-items">
                                    <div class="ic-list-image position-relative"><img
                                            src="{{ getStoreFile($item->student->avatar, $item->student->storage_type) }}" alt=""
                                            class="img-fluid w-100">
                                        @if ($item->status == COMPLETE)
                                            <div class="ic-active-status">
                                                Complete
                                            </div>
                                        @endif
                                    </div>
                                    <div class="ic-list-conetnt">
                                        <p class="sub-title">{{ $item->student->full_name }}</p>
                                        <div class="list-conetnt-info">
                                            <div class="bootcams-course-details">
                                                <p><i class="ri-calendar-check-fill"></i>
                                                    {{ \Carbon\Carbon::parse($item->start_time)->format('d M, Y') }}
                                                </p>
                                                <p><i class="ri-time-line"></i> {{ $item->slot->time }}</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="card-btn pt-3 d-flex align-items-center gap-2">
                                        <a href="{{ route('coach.coachings.join', $item->uuid) }}"
                                            class="ic-btn-outline-md">
                                            <i class="ri-live-fill"></i> Join
                                        </a>
                                        <a href="{{ route('coaching.activities', $item->uuid) }}"
                                            class="ic-btn-outline-md">
                                            Activities
                                        </a>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                            @endforelse
                        </div>
                    </div>
                    {{-- <div class="ic-profile__tabsItems" id="archives">
                        <div class="row g-3">
                            <div class="col-lg-12 col-xl-6">
                                <div class="ic-pickUp__courseItems bg-white">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo ">
                                        <h4 class="fw-600 black">Complete Python Developer in 2023 : Zero to Mastery</h4>

                                        <ul class="enrolled-bootcamps">
                                            <li>
                                                <i class="ri-calendar-check-line"></i>
                                                <span>Class Start-21 March, 2023</span>
                                            </li>
                                            <li>
                                                <i class="ri-time-line"></i>
                                                <span>Start-Time : 06:00 PM</span>
                                            </li>
                                        </ul>
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Join Class <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="ic-pickUp__courseItems bg-white">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo ">
                                        <h4 class="fw-600 black">Complete Python Developer in 2023 : Zero to Mastery</h4>

                                        <ul class="enrolled-bootcamps">
                                            <li>
                                                <i class="ri-calendar-check-line"></i>
                                                <span>Class Start-21 March, 2023</span>
                                            </li>
                                            <li>
                                                <i class="ri-time-line"></i>
                                                <span>Start-Time : 06:00 PM</span>
                                            </li>
                                        </ul>
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Join Class <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="ic-pickUp__courseItems bg-white">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo ">
                                        <h4 class="fw-600 black">Complete Python Developer in 2023 : Zero to Mastery</h4>

                                        <ul class="enrolled-bootcamps">
                                            <li>
                                                <i class="ri-calendar-check-line"></i>
                                                <span>Class Start-21 March, 2023</span>
                                            </li>
                                            <li>
                                                <i class="ri-time-line"></i>
                                                <span>Start-Time : 06:00 PM</span>
                                            </li>
                                        </ul>
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Join Class <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-12 col-xl-6">
                                <div class="ic-pickUp__courseItems bg-white">
                                    <div class="ic-pickUp__img position-relative">
                                        <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                            alt="">
                                        <p class="ic-pickUp__names bg-shade gray">Jane Cooper</p>
                                    </div>
                                    <div class="ic-pickUp__courseInfo ">
                                        <h4 class="fw-600 black">Complete Python Developer in 2023 : Zero to Mastery</h4>

                                        <ul class="enrolled-bootcamps">
                                            <li>
                                                <i class="ri-calendar-check-line"></i>
                                                <span>Class Start-21 March, 2023</span>
                                            </li>
                                            <li>
                                                <i class="ri-time-line"></i>
                                                <span>Start-Time : 06:00 PM</span>
                                            </li>
                                        </ul>
                                        <div class="button-withPrice">
                                            <a href="#" class="ic-pickUp__btn">Join Class <i
                                                    class="ri-arrow-right-s-line"></i></a>
                                            <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
