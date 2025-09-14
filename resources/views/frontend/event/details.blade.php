@extends('layouts.master')

@push('styles')
@endpush

@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part ic-section-space ic_v1_inner-part"
        style="background-image: linear-gradient(0deg, rgba(236, 248, 251, 0.95) 0%, rgba(236, 248, 251, 0.95) 100%),  url({{ asset('/new-frontend/images/business.png') }})">
        <div class="container">
            <div class="ic-upcoming-card ic-event-details-banner-content">
                <div class="ic-coming-event-card-left">
                    <img src="{{ getStoreFile($event->image, $event->storage_type) }}" class="img-fluid" alt="image coming-event">
                </div>
                <div class="ic-coming-event-card-right">
                    <div class="ic-live-event">

                        <span>Events</span>
                    </div>

                    <div class="ic-event-desc">
                        <h1>
                            {{ $event->title }}
                        </h1>
                        <p>
                            {!! str_limit($event->description, $words = 100, $end = '...') !!}
                        </p>
                    </div>
                    <div class="ic-date-time-location">
                        <div class="ic-date">
                            <span><i class="ri-calendar-line"></i></span>
                            <span>{{ \Carbon\Carbon::parse($event->event_start)->format('d M, Y') }}</span>
                        </div>
                        <div class="ic-time">
                            <span><i class="ri-time-line"></i></span>
                            <span>{{ \Carbon\Carbon::parse($event->event_start)->format('h:i A') }}</span>
                        </div>
                        <div class="ic-location">
                            <span><i class="ri-send-plane-2-line"></i></span>
                            <span>{{ $event->location }}</span>
                        </div>
                    </div>
                </div>
            </div>
    </section>
    {{-- banner part end --}}

    {{-- event details learning start --}}
    <section class="ic-event-details-learning-section">
        <div class="container">
            <div class="ic-learning-content">
                <p>
                    {!! $event->description !!}
                </p>
            </div>
        </div>
    </section>
    {{-- event details learning end --}}


    {{-- event  details card start --}}
    <section class="ic-event-details-card-section">
        <div class="container">
            <div class="ic-event-details-card-heading text-center">
                <h2>Prestigious Presenters</h2>
            </div>
            <div class="ic-event-details-card-wrapper">
                <div class="row g-4">
                    @foreach ($event->speakers as $key => $speaker)
                        @if ($key <= 2)
                            <div class="col-lg-4 col-md-6">
                                <div class="ic-event-details-card-item">
                                    <img src="{{ getStoreFile($speaker->avatar, $speaker->storage_type) }}" class="img-fluid"
                                        alt="image learning-event">
                                    <h4>{{ $speaker->full_name }}</h4>
                                    <span>{{ $speaker->designation }}</span>
                                    <p>
                                        {!! $speaker->about !!}
                                    </p>
                                </div>
                            </div>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    {{-- event  details card end --}}

    {{-- Event Register start --}}
    <div class="ic-event-details-register-form-area" id="eventregister">
        <div class="container">
            <div class="row gy-3 gy-lg-0 gx-0">
                <div class="col-lg-7">
                    <div class="ic-form-wrapper ic-event-details-form">
                        <div class="ic-form-heading">
                            <h5>Event Register Now</h5>
                        </div>
                        <form class="form" action="{{ route('event.attendee.store') }}" method="POST"
                            enctype="multipart/form-data">
                            @csrf
                            <input type="hidden" name="event_id" value="{{ old('event_id', $event->id) }}">

                            <div class="ic-event-details-register-form">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="ic-form-group">
                                            <label for="" class="form-label">First Name</label>
                                            <input type="text" name="first_name" value="{{ old('first_name') }}"
                                                class="form-control" id="" placeholder="Enter first name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ic-form-group">
                                            <label for="" class="form-label">Last Name</label>
                                            <input type="text" name="last_name" value="{{ old('last_name') }}"
                                                class="form-control" id="" placeholder="Enter last name">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ic-form-group">
                                            <label for="" class="form-label">Email Address</label>
                                            <input type="email" name="email" value="{{ old('email') }}"
                                                class="form-control" id="" placeholder="Email adress">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ic-form-group">
                                            <label for="phone" class="form-label">Phone Number</label>
                                            <input type="tel" name="phone" value="{{ old('phone') }}"
                                                class="form-control" id="phone" placeholder="Phone Number">
                                        </div>
                                    </div>
                                    {{-- <div class="col-md-6">
                                    <div class="ic-form-group">
                                        <label for="phone" class="form-label"> Career Interest</label>
                                        <input type="text" name="career" value=""  class="form-control" id="career" placeholder="Select">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ic-form-group">
                                        <label for="phone" class="form-label"> Desired start date</label>
                                        <input type="text" name="desired" value=""  class="form-control" id="desired" placeholder="Enter date">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ic-form-group">
                                        <label for="phone" class="form-label"> Desired Course</label>
                                        <input type="text" name="course" value=""  class="form-control" id="course" placeholder="Type">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ic-form-group">
                                        <label for="phone" class="form-label"> Desired start date</label>
                                        <input type="text" name="phone" value=""  class="form-control" id="phone" placeholder="Enter date">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ic-form-group">
                                        <label for="phone" class="form-label"> Country of Residence</label>
                                        <input type="text" name="residence" value=""  class="form-control" id="residence" placeholder="Enter date">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ic-form-group">
                                        <label for="phone" class="form-label"> Previous Experience</label>
                                        <input type="text" name="experience" value=""  class="form-control" id="experience" placeholder="Enter date">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ic-form-group">
                                        <label for="phone" class="form-label"> Desired Schedule</label>
                                        <select name="" class="form-select" id="">
                                            <option value="0">Schedule 1</option>
                                            <option value="0">Schedule 2</option>
                                            <option value="0">Schedule 3</option>
                                            <option value="0">Schedule 4</option>
                                        </select>
                                    </div>
                                </div> --}}
                                    <div class="col-md-6">
                                        <div class="ic-form-group">
                                            <label for="company" class="form-label">Company</label>
                                            <input type="text" name="company" value="{{ old('company') }}"
                                                class="form-control" id="company" placeholder="Company">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="ic-form-group">
                                            <label for="job_title" class="form-label">Job Title</label>
                                            <input type="text" name="job_title" value="{{ old('job_title') }}"
                                                class="form-control" id="" placeholder="Job Title">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="ic-form-group">
                                            <label for="" class="form-label">Message</label>
                                            <textarea name="notes" id="" cols="30" rows="10"
                                                placeholder="Reason for your request ( Why do you need our help? )...">{{ old('notes') }}</textarea>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <button type="submit" class="ic-btn rounded">Submit Now</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="ic-become-member"
                        style="background-image:  linear-gradient(0deg, rgba(21, 141, 167, 0.80) 0%, rgba(21, 141, 167, 0.80) 100%), url({{ asset('new-frontendv1/images/become-member-bg.png') }})">
                        <h4>Become a Member of The Cloud Computing Group</h4>
                        <p>Okay so you can make more money but if that’s your only goal, the extra zeroes on your bank
                            balance will get really boring real quick. If an uneducated guy from the home of the Kangar oo
                            can double their salary, there is definitely hope for you. Popular career websites like “Seek”
                            suggest the typical advice about doing better in your performance review or getting more
                            education from a university. This advice is out of date and I have watched many colleagues fall
                            for this trap and only end up disappointed. Doubling your salary, very least increasing it
                            significantly, is about breaking the norm and trying a few things that are a bit more radical as
                            you’re about to see with these simple tips below.</p>
                        <img src="{{ asset('new-frontendv1/images/become-member.png') }}" alt="">
                    </div>
                </div>
            </div>
            {{-- <div class="ic-event-details-footer">
            <ul class="ic-social-share">
                <li class="ic-social-item">
                    <a href="#" class="ic-social-link">
                        Share
                    </a>
                </li>
                <li class="ic-social-item">
                    <a href="#" class="ic-social-link">
                        <i class="ri-facebook-fill"></i>
                    </a>
                </li>
                <li class="ic-social-item">
                    <a href="#" class="ic-social-link">
                        <i class="ri-twitter-fill"></i>
                    </a>
                </li>
                <li class="ic-social-item">
                    <a href="#" class="ic-social-link">
                        <i class="ri-instagram-line"></i>
                    </a>
                </li>
                <li class="ic-social-item">
                    <a href="#" class="ic-social-link">
                        <i class="ri-linkedin-fill"></i>
                    </a>
                </li>
            </ul>
            <ul class="ic-event-details-footer-right">
                <li>
                    <a href="">DevOps</a>
                </li>
                <li>
                    <a href="">Stock</a>
                </li>
                <li>
                    <a href="">Linux</a>
                </li>
            </ul>
        </div> --}}

        </div>
    </div>
    {{-- Event Register end --}}
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
            <div class="row">
                @forelse ($latest_events as $data)
                    <div class="col-lg-4 col-sm-6">
                        <div class="ic-coach-item">
                            <div class="position-relative overflow-hidden">
                                <p class="ic-event-bage">Event</p>
                                <img src="{{ getStoreFile($data->image, $data->storage_type) }}" class="img-fluid ic-coach-image w-100"
                                    alt="">
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
                                <div class="ic-card-btn">
                                    <a class="ic-btn-outline" href="{{ route('event.details', $data->slug) }}"
                                        type="btn">Read More <span><i class="ri-arrow-right-line"></i></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                <x-frontend.data-notfound></x-frontend.data-notfound>
                @endforelse
            </div>

            {{-- <div class="mt-30 text-center">
            <a href="#" class="ic-btn">See More </a>
        </div> --}}
            <!-- ic slider button(arrow) design -->
            <div class="ic-slider-button-group mt-50 d-flex justify-content-center align-items-center ">
                {{-- <button class=" ic-button course-left-btn">
                <i class="ri-arrow-left-line icon"></i>
            </button> --}}
                <a href="{{ route('event.index') }}" class="ic-btn">
                    Explore More
                    <i class="ri-arrow-right-line icon"></i>
                </a>
            </div>


        </div>
    </section>
    {{-- event card section end --}}
@endsection

@push('scripts')
@endpush
