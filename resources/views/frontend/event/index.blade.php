@extends('layouts.master')

@push('styles')
@endpush

@section('content')
{{-- banner part start --}}
<section class="ic-banner-part ic-section-space ic_v1_inner-part"
    style="background-image: linear-gradient(0deg, rgba(236, 248, 251, 0.95) 0%, rgba(236, 248, 251, 0.95) 100%),  url({{ asset('/new-frontend/images/business.png') }})">
    <div class="container">
        <div class="row g-3">
            <div class="col-lg-7 order-2 order-lg-1">
                <div class="ic-banner-content ic-business-banner">
                    <span class="ic-heading-title mb-15">Connects Events</span>
                    <h1 class="black pb-15 ic-inner-heading">Connect since the event
                    </h1>
                    <div class="row">
                        <div class="col-xxl-11 col-lg-12">
                            <p class="color-deep-gray pb-30">Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since
                                the 1500s, when an unknown printer took a galley of printing and typesetting.</p>
                            <div class="ic-video-programs">
                                <a href="javascript:void(0)" class="ic-btn">Register for Event <i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 order-1 order-lg-2">
                <div class="ic-right-side-img">
                    <img src="{{ asset('new-frontendv1/images/ebook/ebook.png') }}" class="img-fluid" alt="">
                </div>
            </div>
        </div>
    </div>
</section>
{{-- banner part end --}}

{{-- upcoming event section start --}}
<section class="ic-upcoming-events ic-section-space">
    <div class="ic-event-bg-shape">
        <img class="event-shape" src="{{ asset('new-frontendv1/images/event-page/event-shape.png') }}" alt="">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-5 m-auto">
                <div class="header-bootcamp text-center">
                    <h2 class="black pb-2">Upcoming <span class="primary">Event</span></h2>
                    <p class="gray">It is a long established fact that a reader will be distracted by the fact that a
                        reader readable content. </p>
                </div>
            </div>
        </div>
        {{-- your life --}}
        <div class="ic-upcoming-event-slider">
            @php $counter = 0; @endphp
            @forelse ($upcoming_events as $data)
            @if ($counter % 2 === 0)
            <div class="ic-upcoming-event-wrapper">
                @endif

                <div class="ic-upcoming-card @if ($counter % 2 === 0) mb-30 @endif">
                    <div class="ic-coming-event-card-left">
                        <img src="{{ getStoreFile($data->image, $data->storage_type) }}" class="img-fluid" alt="image coming-event">
                    </div>
                    <div class="ic-coming-event-card-right">
                        <div class="ic-live-event">
                            <span><svg xmlns="http://www.w3.org/2000/svg" width="9" height="8" viewBox="0 0 9 8"
                                    fill="none">
                                    <circle cx="4" cy="4" r="4" transform="matrix(-1 0 0 1 8.5 0)" fill="#E8543E" />
                                </svg></span>
                            <span>{{ $data->event_type == 1 ? 'Online' : 'Offline' }} Event</span>
                        </div>
                        <div class="ic-date-time-location">
                            <div class="ic-date">
                                <span><i class="ri-calendar-line"></i></span>
                                <span>{{ \Carbon\Carbon::parse($data->event_start)->format('d M, Y') }}</span>
                            </div>
                            <div class="ic-time">
                                <span><i class="ri-time-line"></i></span>
                                <span>{{ \Carbon\Carbon::parse($data->event_start)->format('h:i A') }}</span>
                            </div>
                            <div class="ic-location">
                                <span><i class="ri-send-plane-2-line"></i></span>
                                <span>{{ $data->location }}</span>
                            </div>
                        </div>
                        <div class="ic-event-desc">
                            <h4 class="title">
                                {{ $data->title }}
                            </h4>
                            <p>
                                {!! str_limit($data->description, $words = 70, $end = '...') !!}
                            </p>
                        </div>
                        <div class="ic-event-card-footer">
                            <a href="{{ route('event.details', $data->slug) }}" class="ic-btn">Read More <i
                                    class="ri-arrow-right-line"></i>
                            </a>
                            <div class="ic-event-author">
                                <img src="{{ getStoreFile(@$data->speakers->first()->avatar, @$data->speakers->first()->storage_type) }}" height="50" width="50"
                                    class="img-fluid rounded-circle" alt="">
                                <div class="ic-author-title">
                                    <p>{{ @$data->speakers->first()->full_name }}</p>
                                    <p>{{ @$data->speakers->first()->designation }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @if ($counter % 2 !== 0)
            </div>
            @endif

            @php $counter++; @endphp
            @empty
           
        </div>
        <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
        @endforelse
        {{-- Close the last wrapper if needed (if the number of items is not even) --}}
        @if ($counter % 2 !== 0)
        @endif
    </div>
    <div class="ic-arrows-buttons">
        <button class="coming-event-arrow-left"><i class="ri-arrow-left-line"></i></button>
        <button class="coming-event-arrow-right"><i class="ri-arrow-right-line"></i></button>
    </div>
    {{-- your life --}}
    </div>
</section>
{{-- upcoming event section end --}}

{{-- event card section start --}}
<section class="ic-enroll-course ic-event-card-section ic-section-space ">
    <div class="container">
        <div class="row g-4">
            <div class="col-lg-5 m-auto">
                <div class="header-bootcamp text-center">
                    <h2 class="black pb-2">Latest <span class="primary">Event</span></h2>
                    <p class="gray">It is a long established fact that a reader will be distracted by the fact that a
                        reader readable content. </p>
                </div>
            </div>
        </div>
        <div class="row g-xl-4 g-sm-3 g-2 justify-content-center">
            @forelse($latest_events as $data)
            <div class="col-lg-4 col-sm-6">
                <div class="ic-coach-item justify-content-between">
                    <div>
                        <div class="position-relative overflow-hidden">
                            <p class="ic-event-bage">Event</p>
                            <img src="{{ getStoreFile($data->image, $data->storage_type) }}" class="img-fluid ic-coach-image w-100" alt="">
                        </div>


                        <div class="ic-card-content">

                            <div class="ic-date-time-location">
                                <div class="ic-date">
                                    <span><i class="ri-calendar-line"></i></span>
                                    <span>{{ \Carbon\Carbon::parse($data->event_start)->format('d M, Y') }}</span>
                                </div>
                                <div class="ic-time">
                                    <span><i class="ri-time-line"></i></span>
                                    <span>{{ \Carbon\Carbon::parse($data->event_start)->format('h:i A') }}</span>
                                </div>

                            </div>
                            <div class="ic-card-title">
                                <h5>{{ $data->title }}</h5>
                            </div>
                        </div>

                    </div>

                    <div class="ic-card-content">
                        <div class="ic-card-btn">
                            <a class="ic-btn-outline" href="{{ route('event.details', $data->slug) }}" type="btn">Read
                                More <span><i class="ri-arrow-right-line"></i></span></a>
                        </div>
                    </div>

                </div>
            </div>
            @empty
        </div>
        <x-frontend.data-notfound></x-frontend.data-notfound>
        @endforelse
        {{-- <div class="mt-30 text-center">
                <a href="#" class="ic-btn">See More </a>
            </div> --}}
        <!-- ic slider button(arrow) design -->
        <div class="ic-slider-button-group mt-50 d-flex justify-content-center align-items-center ">
            {{-- <button class=" ic-button course-left-btn">
                    <i class="ri-arrow-left-line icon"></i>
                </button> --}}
            <button class="ic-btn">
                Explore More
                <i class="ri-arrow-right-line icon"></i>
            </button>
        </div>


    </div>
</section>
{{-- event card section end --}}

@endsection

@push('scripts')
@endpush