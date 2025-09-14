@extends('admin.layouts.master')


@section('content')
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('coach.schedule.info.store') }}" method="post">
                        @csrf
                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Are you available For Coaching? <span
                                    class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_yes" value="1" name="coaching_available"
                                    class="form-check-input" {{ $coach->coaching_available == 1 ? 'checked' : '' }}>
                                <label class="custom-control-label" for="status_yes">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_no" value="0" name="coaching_available"
                                    class="form-check-input" {{ $coach->coaching_available == 0 ? 'checked' : '' }}>
                                <label class="custom-control-label" for="status_no">No</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Is Subscription Enable? <span
                                    class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_yes_two" value="1" name="is_subscription_enable"
                                    class="form-check-input" {{ $coach->is_subscription_enable == 1 ? 'checked' : '' }}>
                                <label class="custom-control-label" for="status_yes_two">Yes</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_no_two" value="0" name="is_subscription_enable"
                                    class="form-check-input" {{ $coach->is_subscription_enable == 0 ? 'checked' : '' }}>
                                <label class="custom-control-label" for="status_no_two">No</label>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Hourly Rate<span class="error">*</span></label>
                            <input type="number" name="hourly_rate" class="form-control" required=""
                                placeholder="Hourly Rate" value="{{ $coach->hourly_rate }}">
                            @error('hourly_rate')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                        <label class="form-label">Old Hourly Rate<span class="error">*</span></label>
                        <input type="number" name="hourly_old_rate" class="form-control" required=""
                            placeholder="Hourly Rate" value="{{ old('hourly_old_rate') }}">
                        @error('hourly_old_rate')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div> --}}
                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Submit
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="card">
            <div class="card-body">

                {{-- <h4 class="card-title text-center">Your Time Slot List</h4> --}}
                {{-- <p class="card-title-desc">Example of custom tabs</p> --}}

                <!-- Nav tabs -->
                <ul class="nav nav-tabs nav-tabs-custom nav-justified" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" data-bs-toggle="tab" href="#home2" role="tab" aria-selected="true">
                            <span class="d-none d-md-block">Recurring Schedule</span><span class="d-block d-md-none"><i
                                    class="mdi mdi-home-variant h5"></i></span>
                        </a>
                    </li>
                    {{-- <li class="nav-item" role="presentation">
                        <a class="nav-link" data-bs-toggle="tab" href="#profile2" role="tab" aria-selected="false"
                            tabindex="-1">
                            <span class="d-none d-md-block">Single Time Schedule</span><span class="d-block d-md-none"><i
                                    class="mdi mdi-account h5"></i></span>
                        </a>
                    </li> --}}
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane p-3 active show" id="home2" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Days</th>
                                        <th scope="col">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Saturday</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-primary waves-effect waves-light saturdayAddSlot"
                                                data-bs-toggle="modal" data-bs-target="#addSlotModal">Add
                                                Slot</button>

                                            <a href="{{ route('coach.schedule.dayAvailableStatusChange', 6) }}"
                                                class="btn waves-effect waves-light {{ getDayAvailableStatus(6) == 1 ? 'btn-success' : 'btn-danger' }}">{{ getDayAvailableStatus(6) == 1 ? 'On Day' : 'Off Day' }}</a>
                                            <button type="button"
                                                class="btn btn-info waves-effect waves-light saturdayViewSlot viewSlot"
                                                data-route="{{ route('coach.schedule.slot.view', 6) }}"
                                                data-bs-toggle="modal" data-bs-target="#viewSlotModal">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Sunday</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-primary waves-effect waves-light sundayAddSlot"
                                                data-bs-toggle="modal" data-bs-target="#addSlotModal">Add
                                                Slot</button>
                                            <a href="{{ route('coach.schedule.dayAvailableStatusChange', 0) }}"
                                                class="btn waves-effect waves-light {{ getDayAvailableStatus(0) == 1 ? 'btn-success' : 'btn-danger' }}">{{ getDayAvailableStatus(0) == 1 ? 'On Day' : 'Off Day' }}</a>
                                            <button type="button"
                                                class="btn btn-info waves-effect waves-light sundayViewSlot viewSlot"
                                                data-route="{{ route('coach.schedule.slot.view', 0) }}"
                                                data-bs-toggle="modal" data-bs-target="#viewSlotModal">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Monday</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-primary waves-effect waves-light mondayAddSlot"
                                                data-bs-toggle="modal" data-bs-target="#addSlotModal">Add
                                                Slot</button>
                                            <a href="{{ route('coach.schedule.dayAvailableStatusChange', 1) }}"
                                                class="btn waves-effect waves-light {{ getDayAvailableStatus(1) == 1 ? 'btn-success' : 'btn-danger' }}">{{ getDayAvailableStatus(1) == 1 ? 'On Day' : 'Off Day' }}</a>
                                            <button type="button"
                                                class="btn btn-info waves-effect waves-light mondayViewSlot viewSlot"
                                                data-route="{{ route('coach.schedule.slot.view', 1) }}"
                                                data-bs-toggle="modal" data-bs-target="#viewSlotModal">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tuesday</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-primary waves-effect waves-light tuesdayAddSlot"
                                                data-bs-toggle="modal" data-bs-target="#addSlotModal">Add
                                                Slot</button>
                                            <a href="{{ route('coach.schedule.dayAvailableStatusChange', 2) }}"
                                                class="btn waves-effect waves-light {{ getDayAvailableStatus(2) == 1 ? 'btn-success' : 'btn-danger' }}">{{ getDayAvailableStatus(2) == 1 ? 'On Day' : 'Off Day' }}</a>
                                            <button type="button"
                                                class="btn btn-info waves-effect waves-light tuesdayViewSlot viewSlot"
                                                data-route="{{ route('coach.schedule.slot.view', 2) }}"
                                                data-bs-toggle="modal" data-bs-target="#viewSlotModal">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Wednesday</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-primary waves-effect waves-light wednesdayAddSlot"
                                                data-bs-toggle="modal" data-bs-target="#addSlotModal">Add
                                                Slot</button>
                                            <a href="{{ route('coach.schedule.dayAvailableStatusChange', 3) }}"
                                                class="btn waves-effect waves-light {{ getDayAvailableStatus(3) == 1 ? 'btn-success' : 'btn-danger' }}">{{ getDayAvailableStatus(3) == 1 ? 'On Day' : 'Off Day' }}</a>
                                            <button type="button"
                                                class="btn btn-info waves-effect waves-light wednesdayViewSlot viewSlot"
                                                data-route="{{ route('coach.schedule.slot.view', 3) }}"
                                                data-bs-toggle="modal" data-bs-target="#viewSlotModal">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Thursday</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-primary waves-effect waves-light thursdayAddSlot"
                                                data-bs-toggle="modal" data-bs-target="#addSlotModal">Add
                                                Slot</button>
                                            <a href="{{ route('coach.schedule.dayAvailableStatusChange', 4) }}"
                                                class="btn waves-effect waves-light {{ getDayAvailableStatus(4) == 1 ? 'btn-success' : 'btn-danger' }}">{{ getDayAvailableStatus(4) == 1 ? 'On Day' : 'Off Day' }}</a>
                                            <button type="button"
                                                class="btn btn-info waves-effect waves-light thursdayViewSlot viewSlot"
                                                data-route="{{ route('coach.schedule.slot.view', 4) }}"
                                                data-bs-toggle="modal" data-bs-target="#viewSlotModal">View</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Friday</td>
                                        <td>
                                            <button type="button"
                                                class="btn btn-primary waves-effect waves-light fridayAddSlot"
                                                data-bs-toggle="modal" data-bs-target="#addSlotModal">Add
                                                Slot</button>
                                            <a href="{{ route('coach.schedule.dayAvailableStatusChange', 5) }}"
                                                class="btn waves-effect waves-light {{ getDayAvailableStatus(5) == 1 ? 'btn-success' : 'btn-danger' }}">{{ getDayAvailableStatus(5) == 1 ? 'On Day' : 'Off Day' }}</a>
                                            <button type="button"
                                                class="btn btn-info waves-effect waves-light fridayViewSlot viewSlot"
                                                data-route="{{ route('coach.schedule.slot.view', 5) }}"
                                                data-bs-toggle="modal" data-bs-target="#viewSlotModal">View</button>
                                        </td>
                                    </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    {{-- <div class="tab-pane p-3" id="profile2" role="tabpanel">
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Date</th>
                                        <th scope="col">Time Slot</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                    <tr>
                                </tbody>
                            </table>
                        </div>
                    </div> --}}
                </div>

            </div>
        </div>
    </div>

    <div class="modal fade" tabindex="-1" id="addSlotModal" aria-labelledby="addSlotModalLabel" style="display: none;"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title dayName" id="addSlotModalLabel">Saturday</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('coach.schedule.slot.store') }}" method="post" class="repeater">
                        @csrf
                        <input type="hidden" name="day" class="day" value="">
                        <div class="add-slot-daywise-wrap">
                            <label class="label-text-title color-heading font-medium font-20 mb-2">Time</label>

                            <div class="row slot_field_wrap">
                                <!-------Note---------
                                                        after add time slot input field color and border color will change. To do that please add class="time_added_field" into input class name
                                                        -------Note--------->
                                <div class="d-flex">
                                    <div class="col-sm-5 col-md-5">
                                        <div class="input-group add-slot-day-item">
                                            <label for="" class="color-heading">Start Time</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-5 col-md-5 ms-2">
                                        <div class="input-group add-slot-day-item ">
                                            <label for="" class="color-heading">End Time</label>
                                        </div>
                                    </div>
                                </div>

                                <div data-repeater-list="slots">
                                    <div data-repeater-item class="mb-2">
                                        <div class="d-flex">
                                            <div class="col-sm-5">
                                                <input type="time" class="form-control" name="start_time"
                                                    placeholder="Ex. 9:00 AM" required>
                                            </div>
                                            <div class="col-sm-5">
                                                <input type="time" class="form-control" name="end_time"
                                                    placeholder="Ex. 10:00 AM" required>
                                            </div>
                                            <div class="col-sm-2">
                                                <button data-repeater-delete type="button"
                                                    class="btn btn-danger waves-effect waves-light remove_button">
                                                    <i class="ri-delete-bin-line"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col d-flex justify-content-between">
                                    <button data-repeater-create type="button"
                                        class="btn btn-primary waves-effect waves-light">
                                        <i class="ri-add-line"> Add Slot</i>
                                    </button>
                                    <button type="submit" class="btn btn-success waves-effect waves-light">Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>


    <div class="modal fade" tabindex="-1" id="viewSlotModal" aria-labelledby="viewSlotModalLabel"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title dayName" id="viewSlotModalLabel">Saturday</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="add-slot-daywise-wrap">
                            <label class="font-medium font-20 mb-2">Time</label>

                            <div class="row appendSlotList">

                            </div>

                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection

@push('scripts')
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
