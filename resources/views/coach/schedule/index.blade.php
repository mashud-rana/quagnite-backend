@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    <section class="mb-40">
        <div class="container">
            <div class="card mt-30">
                <div class="card-body">
                    {{-- Form Start here --}}
                    <form action="{{ route('coach.schedule.info.store') }}" method="post">
                        @csrf
                        <div class="row">
                            {{-- Available --}}
                            <div class="col-lg-6 col-6">
                                <div class="ic-schedule-coaching-check">
                                    <div class="schedule-head text-center">
                                        <p class="fs-20 fw-500 ff-lexend">Are you available For Coaching? *</p>
                                    </div>
                                    <div class="d-flex ic-schedule-body">
                                        <div class="form-check">
                                            <label class="form-check-label fw-400 ff-lexend" for="flexCheckDefault">
                                                Yes <input class="form-check-input" type="radio" name="coaching_available"
                                                    value="1" id="flexCheckDefault"
                                                    {{ $coach->coaching_available == 1 ? 'checked' : '' }}>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label fw-400 ff-lexend" for="flexCheckChecked">
                                                No <input class="form-check-input" type="radio" name="coaching_available"
                                                    value="0" id="flexCheckChecked"
                                                    {{ $coach->coaching_available == 0 ? 'checked' : '' }}>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- Subscription --}}
                            <div class="col-lg-6 col-6">
                                <div class="ic-schedule-coaching-check">
                                    <div class="schedule-head text-center">
                                        <p class="fs-20 fw-500 ff-lexend">Is Subscription Enable? *</p>
                                    </div>
                                    <div class="d-flex ic-schedule-body">
                                        <div class="form-check">
                                            <label class="form-check-label fw-400 ff-lexend" for="flexCheckDefault1">
                                                Yes <input class="form-check-input" type="radio"
                                                    name="is_subscription_enable" value="1" id="flexCheckDefault1"
                                                    {{ $coach->is_subscription_enable == 1 ? 'checked' : '' }}>
                                            </label>
                                        </div>
                                        <div class="form-check">
                                            <label class="form-check-label fw-400 ff-lexend" for="flexCheckChecked1">
                                                No <input class="form-check-input" type="radio"
                                                    name="is_subscription_enable" value="0" id="flexCheckChecked1"
                                                    {{ $coach->is_subscription_enable == 0 ? 'checked' : '' }}>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bg-g-shade ic-coach-header">
                            <p class="fw-400 fs-20 ff-lexend">Select Hourly Rate*</p>
                        </div>
                        <div class="row">
                            {{-- Hourly rate --}}
                            <div class="col-lg-10 col-9">
                                <div class="form-group mb-0">
                                    <input type="number" name="hourly_rate" placeholder="Hourly Rate" class="form-control"
                                        value="{{ $coach->hourly_rate }}" required>
                                </div>
                                @error('hourly_rate')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                            {{-- Submit --}}
                            <div class="col-lg-2 col-3">
                                <button class="w-100 ic-btn rounded h-100">
                                    Submit
                                </button>
                            </div>
                        </div>
                    </form>
                    {{-- Form End here --}}
                    <div class="bg-g-shade ic-coach-header">
                        <p class="fw-400 fs-20 ff-lexend">Recurring Schedule*</p>
                    </div>

                    <div class="time-schedule-head">
                        {{-- Saturday --}}
                        <div class="time-schedule-item">
                            <div class="day-name">
                                <p>Saturday</p>
                            </div>
                            <div class="day-buttons p-2 pe-0">
                                {{-- add Time Slot --}}
                                <button class="btn-time saturdayAddSlot" data-bs-toggle="modal"
                                    data-bs-target="#addSlotModal">
                                    Add Time Slot <i class="ri-add-line"></i>
                                </button>
                                {{-- Day on off --}}
                                <div class="day-off">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" {{-- Change day status --}}
                                            onchange="location.href = '{{ route('coach.schedule.dayAvailableStatusChange', 6) }}'"
                                            {{ getDayAvailableStatus(6) == 1 ? 'checked' : '' }}>
                                        {{-- label --}}
                                        <label class="form-check-label mb-0 pb-0"
                                            for="flexSwitchCheckDefault">{{ getDayAvailableStatus(6) == 1 ? 'On Day' : 'Off Day' }}
                                        </label>
                                    </div>
                                </div>
                                {{-- view time Slot --}}
                                <button class="btn-eyes saturdayViewSlot viewSlot" data-bs-toggle="modal"
                                    data-route="{{ route('coach.schedule.slot.view', 6) }}"
                                    data-bs-target="#viewSlotModal">View Date
                                    <i class="ri-eye-fill"></i></button>
                            </div>
                        </div>

                        {{-- Sunday --}}
                        <div class="time-schedule-item">
                            <div class="day-name">
                                <p>Sunday</p>
                            </div>
                            <div class="day-buttons p-2 pe-0">
                                {{-- add Time Slot --}}
                                <button class="btn-time sundayAddSlot" data-bs-toggle="modal"
                                    data-bs-target="#addSlotModal">
                                    Add Time Slot <i class="ri-add-line"></i>
                                </button>
                                {{-- Day on off --}}
                                <div class="day-off">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" {{-- Change day status --}}
                                            onchange="location.href = '{{ route('coach.schedule.dayAvailableStatusChange', 0) }}'"
                                            {{ getDayAvailableStatus(0) == 1 ? 'checked' : '' }}>
                                        {{-- label --}}
                                        <label class="form-check-label mb-0 pb-0"
                                            for="flexSwitchCheckDefault">{{ getDayAvailableStatus(0) == 1 ? 'On Day' : 'Off Day' }}
                                        </label>
                                    </div>
                                </div>
                                {{-- view time Slot --}}
                                <button class="btn-eyes sundayViewSlot viewSlot" data-bs-toggle="modal"
                                    data-route="{{ route('coach.schedule.slot.view', 0) }}"
                                    data-bs-target="#viewSlotModal">View Date
                                    <i class="ri-eye-fill"></i></button>
                            </div>
                        </div>

                        {{-- Monday --}}
                        <div class="time-schedule-item">
                            <div class="day-name">
                                <p>Monday</p>
                            </div>
                            <div class="day-buttons p-2 pe-0">
                                {{-- add Time Slot --}}
                                <button class="btn-time mondayAddSlot" data-bs-toggle="modal"
                                    data-bs-target="#addSlotModal">
                                    Add Time Slot <i class="ri-add-line"></i>
                                </button>
                                {{-- Day on off --}}
                                <div class="day-off">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" {{-- Change day status --}}
                                            onchange="location.href = '{{ route('coach.schedule.dayAvailableStatusChange', 1) }}'"
                                            {{ getDayAvailableStatus(1) == 1 ? 'checked' : '' }}>
                                        {{-- label --}}
                                        <label class="form-check-label mb-0 pb-0"
                                            for="flexSwitchCheckDefault">{{ getDayAvailableStatus(1) == 1 ? 'On Day' : 'Off Day' }}
                                        </label>
                                    </div>
                                </div>
                                {{-- view time Slot --}}
                                <button class="btn-eyes mondayViewSlot viewSlot" data-bs-toggle="modal"
                                    data-route="{{ route('coach.schedule.slot.view', 1) }}"
                                    data-bs-target="#viewSlotModal">View Date
                                    <i class="ri-eye-fill"></i></button>
                            </div>
                        </div>


                        {{-- Tuesday --}}
                        <div class="time-schedule-item">
                            <div class="day-name">
                                <p>Tuesday</p>
                            </div>
                            <div class="day-buttons p-2 pe-0">
                                {{-- add Time Slot --}}
                                <button class="btn-time tuesdayAddSlot" data-bs-toggle="modal"
                                    data-bs-target="#addSlotModal">
                                    Add Time Slot <i class="ri-add-line"></i>
                                </button>
                                {{-- Day on off --}}
                                <div class="day-off">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" {{-- Change day status --}}
                                            onchange="location.href = '{{ route('coach.schedule.dayAvailableStatusChange', 2) }}'"
                                            {{ getDayAvailableStatus(2) == 1 ? 'checked' : '' }}>
                                        {{-- label --}}
                                        <label class="form-check-label mb-0 pb-0"
                                            for="flexSwitchCheckDefault">{{ getDayAvailableStatus(2) == 1 ? 'On Day' : 'Off Day' }}
                                        </label>
                                    </div>
                                </div>
                                {{-- view time Slot --}}
                                <button class="btn-eyes tuesdayViewSlot viewSlot" data-bs-toggle="modal"
                                    data-route="{{ route('coach.schedule.slot.view', 2) }}"
                                    data-bs-target="#viewSlotModal">View Date
                                    <i class="ri-eye-fill"></i></button>
                            </div>
                        </div>


                        {{-- Wednesday --}}
                        <div class="time-schedule-item">
                            <div class="day-name">
                                <p>Wednesday</p>
                            </div>
                            <div class="day-buttons p-2 pe-0">
                                {{-- add Time Slot --}}
                                <button class="btn-time wednesdayAddSlot" data-bs-toggle="modal"
                                    data-bs-target="#addSlotModal">
                                    Add Time Slot <i class="ri-add-line"></i>
                                </button>
                                {{-- Day on off --}}
                                <div class="day-off">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" {{-- Change day status --}}
                                            onchange="location.href = '{{ route('coach.schedule.dayAvailableStatusChange', 3) }}'"
                                            {{ getDayAvailableStatus(3) == 1 ? 'checked' : '' }}>
                                        {{-- label --}}
                                        <label class="form-check-label mb-0 pb-0"
                                            for="flexSwitchCheckDefault">{{ getDayAvailableStatus(3) == 1 ? 'On Day' : 'Off Day' }}
                                        </label>
                                    </div>
                                </div>
                                {{-- view time Slot --}}
                                <button class="btn-eyes wednesdayViewSlot viewSlot" data-bs-toggle="modal"
                                    data-route="{{ route('coach.schedule.slot.view', 3) }}"
                                    data-bs-target="#viewSlotModal">View Date
                                    <i class="ri-eye-fill"></i></button>
                            </div>
                        </div>

                        {{-- Thursday --}}
                        <div class="time-schedule-item">
                            <div class="day-name">
                                <p>Thursday</p>
                            </div>
                            <div class="day-buttons p-2 pe-0">
                                {{-- add Time Slot --}}
                                <button class="btn-time thursdayAddSlot" data-bs-toggle="modal"
                                    data-bs-target="#addSlotModal">
                                    Add Time Slot <i class="ri-add-line"></i>
                                </button>
                                {{-- Day on off --}}
                                <div class="day-off">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" {{-- Change day status --}}
                                            onchange="location.href = '{{ route('coach.schedule.dayAvailableStatusChange', 4) }}'"
                                            {{ getDayAvailableStatus(4) == 1 ? 'checked' : '' }}>
                                        {{-- label --}}
                                        <label class="form-check-label mb-0 pb-0"
                                            for="flexSwitchCheckDefault">{{ getDayAvailableStatus(4) == 1 ? 'On Day' : 'Off Day' }}
                                        </label>
                                    </div>
                                </div>
                                {{-- view time Slot --}}
                                <button class="btn-eyes thursdayViewSlot viewSlot" data-bs-toggle="modal"
                                    data-route="{{ route('coach.schedule.slot.view', 4) }}"
                                    data-bs-target="#viewSlotModal">View Date
                                    <i class="ri-eye-fill"></i></button>
                            </div>
                        </div>

                        {{-- Friday --}}
                        <div class="time-schedule-item">
                            <div class="day-name">
                                <p>Friday</p>
                            </div>
                            <div class="day-buttons p-2 pe-0">
                                {{-- add Time Slot --}}
                                <button class="btn-time fridayAddSlot" data-bs-toggle="modal"
                                    data-bs-target="#addSlotModal">
                                    Add Time Slot <i class="ri-add-line"></i>
                                </button>
                                {{-- Day on off --}}
                                <div class="day-off">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault" {{-- Change day status --}}
                                            onchange="location.href = '{{ route('coach.schedule.dayAvailableStatusChange', 5) }}'"
                                            {{ getDayAvailableStatus(5) == 1 ? 'checked' : '' }}>
                                        {{-- label --}}
                                        <label class="form-check-label mb-0 pb-0"
                                            for="flexSwitchCheckDefault">{{ getDayAvailableStatus(5) == 1 ? 'On Day' : 'Off Day' }}
                                        </label>
                                    </div>
                                </div>
                                {{-- view time Slot --}}
                                <button class="btn-eyes fridayViewSlot viewSlot" data-bs-toggle="modal"
                                    data-route="{{ route('coach.schedule.slot.view', 5) }}"
                                    data-bs-target="#viewSlotModal">View Date
                                    <i class="ri-eye-fill"></i></button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Button trigger modal -->

    {{-- Add Slot modal Start here --}}
    <div class="modal fade" id="addSlotModal" tabindex="-1" aria-labelledby="addSlotModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5 white dayName" id="addSlotModalLabel">Saturday</h1>
                    <button type="button" class="bg-transparent" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-circle-fill white fs-20"></i>
                    </button>
                </div>
                {{-- Form start here --}}
                <form action="{{ route('coach.schedule.slot.store') }}" method="post" class="repeater">
                    @csrf
                    {{-- hidden --}}
                    <input type="hidden" name="day" class="day" value="">
                    {{-- Modal body --}}
                    <div class="modal-body">
                        {{-- Label --}}
                        <div class="time-adds">
                            <div class="times-plan position-relative">
                                <label for="">Start Time</label>
                            </div>
                            <div class="times-plan position-relative">
                                <label for="">End Time</label>
                            </div>
                        </div>

                        {{-- Fields --}}
                        <div data-repeater-list="slots">
                            <div data-repeater-item class="time-adds">
                                <div class="times-plan position-relative">
                                    <input type="time" name="start_time" class="form-control"
                                        placeholder="Ex. 9:00 AM">
                                </div>
                                <div class="times-plan position-relative">
                                    <input type="time" name="end_time" class="form-control"
                                        placeholder="Ex. 10:00 AM">
                                </div>
                                <button data-repeater-delete type="button" class="deleted-time"><i
                                        class="ri-delete-bin-line"></i></button>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer d-flex align-items-center justify-content-between">
                        <button data-repeater-create type="button" class="btn-time">
                            Add Time Slot <i class="ri-add-line"></i>
                        </button>
                        <button type="submit" class="btn-eyes" data-bs-dismiss="modal">
                            Save <i class="ri-save-line"></i>
                        </button>
                    </div>


                </form>
            </div>
        </div>
    </div>

    {{-- View Slot modal Start here --}}
    <div class="modal fade" id="viewSlotModal" tabindex="-1" aria-labelledby="viewSlotModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5 white" id="viewSlotModalLabel">Saturday</h1>
                    <button type="button" class="bg-transparent" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-circle-fill white fs-20"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="time-adds">
                        <div class="times-plan position-relative">
                            <label for="">View Time</label>
                        </div>
                    </div>
                    <div class="row appendSlotList">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@push('scripts')
    <script src="{{ asset('admin/js/pages/form-repeater.int.js') }}"></script>
    <script src="{{ asset('admin/js/pages/jquery.repeater.min.js') }}"></script>
    <script>
        (function($) {
            "use strict";
            $(document).on('click', '.viewSlot', function() {
                let slotViewRoute = $(this).data('route')
                $.ajax({
                    type: "GET",
                    url: slotViewRoute,
                    datatype: "json",
                    success: function(response) {
                        $('.appendSlotList').html(response);
                    }
                });

            });

            $('.btn-close').click(function() {
                $('.appendSlotList').html('');
            })

            //Start:: Remove slot
            $(document).on("click", ".deleteTimeSlot", function(e) {
                let route = $(this).data('route');
                Swal.fire({
                    title: 'Sure! You want to delete?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, Delete It!'
                }).then((result) => {
                    if (result.value) {
                        e.preventDefault();
                        var div = $(this).parent('div'); //Remove field html
                        $.ajax({
                            type: "DELETE",
                            url: route,
                            data: {
                                '_token': $('meta[name="csrf-token"]').attr('content')
                            },
                            datatype: "json",
                            success: function(response) {
                                toastr.options.positionClass = 'toast-bottom-right';
                                if (response.status == 404) {
                                    toastr.error(response.msg);
                                } else {
                                    div.remove();
                                    toastr.success(response.msg);
                                }
                            }
                        });
                    } else if (result.dismiss === "cancel") {
                        Swal.fire(
                            "Cancelled",
                            "Your imaginary Data is safe",
                            "error"
                        )
                    }
                })
            });
            //End:: Remove slot


            //Start:: Onclick Day Name Change
            $('.saturdayAddSlot, .saturdayViewSlot').click(function() {
                slotdetails("Saturday", 6);
            })

            $('.sundayAddSlot, .sundayViewSlot').click(function() {
                slotdetails("Sunday", 0);
            })

            $('.mondayAddSlot, .mondayViewSlot').click(function() {
                slotdetails("Monday", 1);
            })

            $('.tuesdayAddSlot, .tuesdayViewSlot').click(function() {
                slotdetails("Tuesday", 2);
            })

            $('.wednesdayAddSlot, .wednesdayViewSlot').click(function() {
                slotdetails("Wednesday", 3);
            })

            $('.thursdayAddSlot, .thursdayViewSlot').click(function() {
                slotdetails("Thursday", 4);
            })

            $('.fridayAddSlot, .fridayViewSlot').click(function() {
                slotdetails("Friday", 5);
            })

            function slotdetails(day_name, dayCount) {
                $('.dayName').html(day_name)
                $('.day').val(dayCount)
            }

            //End:: Onclick Day Name Change
        })(jQuery)
    </script>
@endpush
