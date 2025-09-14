@extends('layouts.master')

@section('content')
    <section class="ic-banner-part ic-section-space ic_v1_inner-part"
        style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
        <div class="container">
            <div class="row align-items-center g-xl-4 g-3">
                <div class="col-lg-7 col-xl-8">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="ic-heading-title mb-15">coaches schedule</span>
                        <h1 class="black pb-15">All Coaches Schedule</h1>
                        <div class="row">
                            <div class="col-xxl-10 col-lg-12">
                                <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                    the 1500s, when an
                                    unknown printer took a galley of
                                </p>
                                <!-- <div class="ic-video-programs">
                                                                <a href="#" class="ic-btn">Explore Programs</a>
                                                            </div> -->
                                <div class="ic__buttons-wrapper">
                                    <a href="#" class="ic-play-button">
                                        <div class="circle"><i class="ri-play-fill"></i></div> Watch INTRO VIDEO
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="col-lg-5 col-xl-4 d-md-block d-none ">
                    <div class="ic-right-side-img text-end">
                        <img src="{{ asset('new-frontendv1/images/coaching-details.png') }}"
                            class="img-fluid mx-auto d-block" alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- {{-- banner part end --}} -->


    {{-- Personal Development Coaches --}}
    <section class="ic-all-most-popular ic-section-space"
        style="background-image: linear-gradient(180deg, rgba(0, 56, 91, 0.97) 1.2%, rgba(21, 141, 167, 0.97) 100%), url({{ asset('new-frontendv1/images/coaches/images-personal-dev.png') }})">
        <div class="container">
            <div class="header-bootcamp text-center">
                <h2 class="white">Recommended For You</h2>
            </div>
            <div class="ic-items-list-main ic-items-grid-main row g-4 row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 mt-4"
                id="loadDataContainer">
                @forelse ($coachesBusiness as $user)
                    <div class="col">
                        <div class="ic-items-list mb-0 flex-column">
                            <div class="ic-list-image position-relative">
                                <img src="{{ $user->avatar_url }}" class="img-fluid w-100" alt="">
                                <div class="coach-names">
                                    <p>{{ $user->full_name }}</p>
                                </div>
                                <ul class="ic-rating-info">
                                    <li>
                                        <p>
                                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                            </svg>
                                            <span>{{ number_format($user->average_rating, 2) }}</span>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <span>({{ $user->total_review }})</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            @if ($user->coach != null)
                                <div class="ic-list-conetnt">
                                    <a href="{{ route('front.coachDetails', $user->coach->uuid) }}">
                                        <p class="sub-title">{{ $user->coach->professional_title }}</p>
                                    </a>
                                    <div class="list-conetnt-info">
                                        <div class="list-info-items">
                                            <p class="fw-300"><i class="ri-file-list-2-line"></i>
                                                {{ $user->coach->coach_enrollments_count }} Students
                                                Enroll
                                            </p>
                                        </div>
                                        <div class="list-info-items">
                                            <p class="fw-300">
                                                <i class="ri-vidicon-line"></i>
                                                @if ($user->coach->coach_total_duration > 0)
                                                    Taken a total of {{ $user->coach->coach_total_duration }}
                                                    session{{ $user->coach->coach_total_duration !== 1 ? 's' : '' }}.
                                                @else
                                                    No sessions have been taken yet.
                                                @endif
                                            </p>
                                        </div>
                                    </div>

                                    <div class="card-btn">
                                        <button data-bs-toggle="modal" data-bs-target="#consultationBookingModal"
                                            data-booking_coach_user_id="{{ $user->id }}"
                                            data-hourly_rate="{{ $user->coach->hourly_rate }}"
                                            data-get_off_days_route="{{ route('getOffDays', $user->id) }}"
                                            class="ic-btn-simple bookSchedule">Book Schedule <i
                                                class="ri-arrow-right-line"></i></button>
                                    </div>

                                </div>
                            @endif
                        </div>
                    </div>
                @empty
                    <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                @endforelse
            </div>

            @if ($coachesBusiness->hasMorePages())
                <div class="ic-load-more text-center">
                    <button id="BtnLoadMore" class="ic-btn-outline" data-next-page="{{ $coachesBusiness->nextPageUrl() }}">
                        Load
                        more</button>
                </div>
            @endif
        </div>
    </section>
    {{-- Personal Development Coaches --}}

    {{-- All Most Popular Coaches --}}
    <section class="ic-all-most-popular ic-section-space"
        style="background-image: url({{ asset('new-frontendv1/images/coaches/all-coache.png') }})">
        <div class="container">
            <div class="header-bootcamp text-center">
                <h2 class="black">All Most Popular Coaches</h2>
            </div>

            {{-- <div class="business-tabs">
            <div class="business-items active" id="business-1"> --}}
            <div class="ic-items-list-main ic-items-grid-main row g-4 row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 mt-4"
                id="toploadDataContainer">
                @forelse ($popularCoaches as $user)
                    <div class="col">
                        <div class="ic-items-list mb-0 flex-column">
                            <div class="ic-list-image position-relative">
                                <img src="{{ $user->avatar_url }}" class="img-fluid w-100" alt="">
                                <div class="coach-names">
                                    <p>{{ $user->full_name }}</p>
                                </div>
                                {{-- <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a> --}}
                                <ul class="ic-rating-info">
                                    <li>
                                        <p>
                                            <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                            </svg>
                                            <span>{{ number_format($user->average_rating, 2) }}</span>
                                            <i class="ri-star-s-fill yellow"></i>
                                            <span>({{ $user->total_review }})</span>
                                        </p>
                                    </li>
                                </ul>
                            </div>
                            @if ($user->coach != null)
                                <div class="ic-list-conetnt">
                                    <a href="{{ route('front.coachDetails', $user->coach->uuid) }}">
                                        <p class="sub-title">{{ $user->coach->professional_title }}</p>
                                    </a>
                                    <div class="list-conetnt-info">
                                        <div class="list-info-items">
                                            <p class="fw-300"><i class="ri-file-list-2-line"></i>
                                                {{ $user->coach->coach_enrollments_count }} Students
                                                Enroll
                                            </p>
                                        </div>
                                        <div class="list-info-items">
                                            <p class="fw-300">
                                                <i class="ri-vidicon-line"></i>
                                                @if ($user->coach->coach_total_duration > 0)
                                                    Taken a total of {{ $user->coach->coach_total_duration }}
                                                    session{{ $user->coach->coach_total_duration !== 1 ? 's' : '' }}.
                                                @else
                                                    No sessions have been taken yet.
                                                @endif
                                            </p>

                                        </div>
                                    </div>
                                    <div class="card-btn">
                                        <button data-bs-toggle="modal" data-bs-target="#consultationBookingModal"
                                            data-booking_coach_user_id="{{ $user->id }}"
                                            data-hourly_rate="{{ $user->coach->hourly_rate }}"
                                            data-get_off_days_route="{{ route('getOffDays', $user->id) }}"
                                            class="ic-btn-simple bookSchedule">Book Schedule <i
                                                class="ri-arrow-right-line"></i></button>
                                    </div>
                                </div>
                            @endif
                        </div>
                    </div>
                @empty
                    <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                @endforelse
            </div>

            @if ($popularCoaches->hasMorePages())
                <div class="ic-load-more text-center">
                    <button id="topBtnLoadMore" class="ic-btn-outline"
                        data-next-page="{{ $popularCoaches->nextPageUrl() }}">
                        Load
                        more</button>
                </div>
            @endif
            {{-- </div> --}}
            {{-- <div class="business-items" id="business-2">

            </div>
        </div> --}}
        </div>
    </section>

    <div class="modal fade" tabindex="-1" id="consultationBookingModal" aria-labelledby="consultationBookingModalLabel"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header justify-content-center">
                    <h5 class="modal-title text-center" id="consultationBookingModalLabel">Booking Now</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="row gx-4">
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>Select Date</label>
                                <div class="appendDatePicker">
                                    <!-- Append from booking.js -->
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="form-group">
                                <label>Hours</label>
                                <input type="text" class="font-medium form-control hourly_rate" disabled readonly
                                    value="0">
                                <input type="hidden" class="hourly_fee" value="">
                            </div>
                        </div>
                        {{-- <div class="col-lg-4 col-sm-4">
                            <div class="form-group">
                                <label>Total Price</label>
                                <input type="text" class="font-medium form-control total_price" disabled value="0">
                            </div>
                        </div> --}}

                        <input type="hidden" class="booking_coach_user_id" value="">
                    </div>
                    <div class="appendDayAndTime">

                    </div>
                    <div class="modal-footer border-0 d-flex justify-content-between align-items-center">
                        <button type="button" class="ic-btn-block w-100 addToCart d-none" data-bs-dismiss="modal"
                            data-route="{{ route('addToCart') }}">Add to
                            cart</button>
                    </div>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <input type="hidden" class="getCoachBookingTimeRoute" value="{{ route('getCoachBookingTimeRoute') }}">
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/themes/base/jquery-ui.min.css"
        integrity="sha512-ELV+xyi8IhEApPS/pSj66+Jiw+sOT1Mqkzlh8ExXihe4zfqbWkxPRi8wptXIO9g73FSlhmquFlUOuMSoXz5IRw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .hide {
            display: none;
        }
    </style>
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    {{-- <script src="{{ asset('frontend/js/price_range_script.js') }}"></script> --}}
    <script src="{{ asset('common/js/booking.js') }}"></script>

    <script src="{{ asset('frontend/js/loadMore.js') }}"></script>
    <script src="{{ asset('frontend/js/addToCart.js') }}"></script>
    <script>
        $(document).ready(function() {

            triggerLoadMoreEvent('BtnLoadMore', 'loadDataContainer');
            triggerLoadMoreEvent('topBtnLoadMore', 'toploadDataContainer');
        });
    </script>
@endpush
