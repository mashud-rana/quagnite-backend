@extends('layouts.master')

@section('content')
    <section class="ic-banner-part ic-section-space"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)), url({{ asset('/frontend') }}/images/coach-banner-imags.png);">
        <!-- content -->
        <div class="container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="ic-banner-content">
                        <span class="black ic-heading-title mb-15 d-inline-block">Single Coach</span>
                        <h1 class="black pb-3">Single Coach Details</h1>
                        <p class="black pb-30 gray">Lorem Ipsum is simply dummy text of the printing and typesetting
                            industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        <div class="ic__buttons-wrapper">
                            <a href="https://www.youtube-nocookie.com/embed/Ga6RYejo6Hk" class="btn-watch ic-play-button">
                                <div class="circle">
                                    <i class="ri-play-fill"></i>
                                </div> Watch Intro Video
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ic-right-side-img">
                        <img src="{{ asset('new-frontend/images/coach-details-right.png') }}" class="img-fluid w-100"
                            alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="ic__blog--background ic__coaching--background ic-section-space">
        <div class="container">
            {{-- single verify --}}
            {{-- <div class="ic-coach-info">
            <div class="coach-info-items">
                <img src="{{ asset('frontend/images/massgae-1.png') }}" alt="">
                <div>
                    <h5>Your Email</h5>
                    <p>info@example.com</p>
                </div>
            </div>
            <div class="coach-info-items">
                <img src="{{ asset('frontend/images/map.png') }}" alt="">
                <div>
                    <h5>Your Email</h5>
                    <p>info@example.com</p>
                </div>
            </div>
            <div class="coach-info-items">
                <img src="{{ asset('frontend/images/phone.png') }}" alt="">
                <div>
                    <h5>Your Email</h5>
                    <p>info@example.com</p>
                </div>
            </div>
            <div class="coach-info-items">
                <img src="{{ asset('frontend/images/net.png') }}" alt="">
                <div>
                    <h5>Your Email</h5>
                    <p>info@example.com</p>
                </div>
            </div>
        </div> --}}
            {{-- single verify --}}

            {{-- biography --}}
            <div class="ic-biography">
                <div class="row gx-xl-5 g-4">
                    <div class="col-lg-8">
                        <h3 class="mb-3">About</h3>
                        <p class="ic-biography-text mb-4">
                            {{ $coach->about_me }}
                        </p>

                        <ul class="ic-bio-info">
                            <li>
                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                </svg>
                                <p>{{ \Carbon\Carbon::parse($coach->created_at)->diff(\Carbon\Carbon::now())->format('%y') }}
                                    years of experience in Marketing</p>

                            </li>
                            <li>
                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                </svg>
                                <p>Teaches over {{ formatNumberWithKM($coach->user->reviews->unique('user_id')->count()) }}
                                    students</p>

                            </li>
                            {{-- <li>
                                <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                </svg>
                                <p>Lead teams of 100+ marketing experts</p>
                            </li> --}}
                        </ul>

                        <div class="ic-coaching-reawad">
                            <div class="row g-4">
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="ic-coach-experience">
                                        <img src="{{ asset('frontend/images/ic-trophy.png') }}" alt="">
                                        <div>
                                            <h4>0+</h4>
                                            <p>Awards Rewarded</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="ic-coach-experience green">
                                        <img src="{{ asset('frontend/images/ic-users.png') }}" alt="">
                                        <div>
                                            <h4>{{ \Carbon\Carbon::parse($coach->created_at)->diff(\Carbon\Carbon::now())->format('%y') }}+
                                            </h4>
                                            <p>Years of Experience</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="ic-coach-experience orange-light">
                                        <img src="{{ asset('frontend/images/ic-smiley.png') }}" alt="">
                                        <div>
                                            <h4>{{ $coach->user->reviews->unique('user_id')->count() }}+</h4>
                                            <p>Happy Student</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-6">
                                    <div class="ic-coach-experience alchol">
                                        <img src="{{ asset('frontend/images/ic-briefcase.png') }}" alt="">
                                        <div>
                                            <h4>{{ $coach->coach_total_duration }}+</h4>
                                            <p>COMPLETED coaches</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="ic-biography-avatar">
                            <img src="{{ $coach->user->avatar_url }}" class="img-fluid w-100" alt="">
                            <div class="ic-avatar-infos">
                                <div class="ic-avatar-accept">
                                    {{-- <img src="{{asset('frontend/images/accept.png')}}" alt=""> --}}
                                    <h4>{{ $coach->user->full_name }}</h4>
                                    <p>{{ $coach->professional_title }}</p>
                                </div>
                                <ul>
                                    <li>
                                        <img src="{{ asset('frontend/images/graduate.png') }}" alt="">
                                        <p>{{ $coach->coach_enrollments_count }} Students Enroll</p>
                                    </li>
                                    <li>
                                        <img src="{{ asset('frontend/images/reviews.png') }}" alt="">
                                        <p>{{ $coach->user->total_review }} Reviews
                                            ({{ number_format($coach->user->average_rating, 2) }} average)</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ic-section-space-top-80">
                <div class="ic__heading text-center mb-40">
                    <h2 class="primary"><span class="black">Why Your </span> Coach?</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="ic-choose-coach">
                            <img src="{{ asset('frontend/images/chart.png') }}" alt="">
                            <h6>FULFILLING POTENTIAL</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="ic-choose-coach">
                            <img src="{{ asset('frontend/images/life-circle.png') }}" alt="">
                            <h6>MAKING CHANCES</h6>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-6">
                        <div class="ic-choose-coach">
                            <img src="{{ asset('frontend/images/checked.png') }}" alt="">
                            <h6>FINDING BALANCE</h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ic-section-space-top-80">
                <div class="ic__heading text-center mb-40">
                    <h2 class="primary"><span class="black">Next </span> Scheduled Availability</h2>
                </div>
                {{-- Next Scheduled Availability --}}
                <div class="ic-coahing-scheduled">
                    <div class="coahing-images">
                        <img src="{{ $coach->user->avatar_url }}" class="img-fluid w-100" alt="">
                    </div>
                    <div class="ic-right-side">
                        <div class="ic-date-show">
                            <p class="date-shows"><i class="ri-calendar-check-fill"></i>{{ $date_range }}</p>
                            <div class="ic__arrows">
                                <button class="ic-dates-arrows"><i class="ri-arrow-right-s-line"></i></button>
                            </div>
                        </div>
                        {{-- owl-carousel owl-them --}}
                        <div class="overflow-auto">
                            <div class="scroll-dates-slider">
                                <div class="ic-date-slider">
                                    @foreach ($schedule as $item)
                                        <div class="ic-date-items">
                                            <p>{{ $item['day_name'] }}</p>
                                            <h5>{{ $item['day'] }}</h5>

                                            @foreach ($item['slots'] as $time)
                                                <span>{{ $time }}</span> <br>
                                            @endforeach
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="card-btn">
                            <button data-bs-toggle="modal" data-bs-target="#consultationBookingModal"
                                data-booking_coach_user_id="{{ $coach->user->id }}"
                                data-hourly_rate="{{ $coach->hourly_rate }}"
                                data-get_off_days_route="{{ route('getOffDays', $coach->user->id) }}"
                                class="ic-btn-simple bookSchedule">Book Schedule <i
                                    class="ri-arrow-right-line"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
    {{-- <script src="{{ asset('frontend/js/price_range_script.js') }}"></script> --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script>
    <script src="{{ asset('common/js/booking.js') }}"></script>
    <script src="{{ asset('frontend/js/addToCart.js') }}"></script>

    <script>
        // coach details
        $(".ic-date-slider").slick({
            slidesToShow: 6,
            slidesToScroll: 6,
            arrows: false,
            swipe: false,
            responsive: [{
                breakpoint: 767,
                settings: {
                    slidesToShow: 6,
                },
            }, ],
        });
        $(".ic-dates-arrows").on("click", function() {
            console.log("clicked");
            $(".ic-date-slider").slick("slickNext");
        });
    </script>
@endpush
