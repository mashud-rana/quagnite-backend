@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    <section class="mb-40">
        <div class="container">
            <div class="card mt-30">
                <div class="card-body">
                    <div class="row">
                        <div class="col-lg-6 col-6">
                            <div class="ic-schedule-coaching-check">
                                <div class="schedule-head text-center">
                                    <p class="fs-20 fw-500 ff-lexend">Are you available For Coaching? *</p>
                                </div>
                                <div class="d-flex ic-schedule-body">
                                    <div class="form-check">
                                        <label class="form-check-label fw-400 ff-lexend" for="flexCheckDefault">
                                            Yes <input class="form-check-input" type="radio" name="name" value=""
                                                id="flexCheckDefault">
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label fw-400 ff-lexend" for="flexCheckChecked">
                                            No <input class="form-check-input" type="radio" name="name" value=""
                                                id="flexCheckChecked" checked>
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-6">
                            <div class="ic-schedule-coaching-check">
                                <div class="schedule-head text-center">
                                    <p class="fs-20 fw-500 ff-lexend">Is Subscription Enable? *</p>
                                </div>
                                <div class="d-flex ic-schedule-body">
                                    <div class="form-check">
                                        <label class="form-check-label fw-400 ff-lexend" for="flexCheckDefault1">
                                            Yes <input class="form-check-input" type="radio" name="name" value="name"
                                                id="flexCheckDefault1">
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <label class="form-check-label fw-400 ff-lexend" for="flexCheckChecked1">
                                            No <input class="form-check-input" type="radio" name="name" value="name"
                                                id="flexCheckChecked1" checked>
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
                        <div class="col-lg-10 col-9">
                            <div class="form-group mb-0">
                                <input type="text" placeholder="price" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-2 col-3">
                            <button class="w-100 ic-btn rounded h-100">
                                Submit
                            </button>
                        </div>
                    </div>
                    <div class="bg-g-shade ic-coach-header">
                        <p class="fw-400 fs-20 ff-lexend">Recurring Schedule*</p>
                    </div>
                    <div class="time-schedule-head">
                        <div class="time-schedule-item">
                            <div class="day-name">
                                <p>Saturday</p>
                            </div>
                            <div class="day-buttons p-2 pe-0">
                                <button class="btn-time" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Add Time Slot <i class="ri-add-line"></i>
                                </button>
                                <div class="day-off">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label mb-0 pb-0" for="flexSwitchCheckDefault">Day On
                                        </label>
                                    </div>
                                </div>
                                <button class="btn-eyes" data-bs-toggle="modal" data-bs-target="#time-views">View Date <i class="ri-eye-fill"></i></button>
                            </div>
                        </div>
                        <div class="time-schedule-item">
                            <div class="day-name">
                                <p>Sunday</p>
                            </div>
                            <div class="day-buttons p-2 pe-0">
                                <button class="btn-time" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Add Time Slot <i class="ri-add-line"></i>
                                </button>
                                <div class="day-off">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label mb-0 pb-0" for="flexSwitchCheckDefault">Day On
                                        </label>
                                    </div>
                                </div>
                                <button class="btn-eyes" data-bs-toggle="modal" data-bs-target="#time-views">View Date <i class="ri-eye-fill"></i></button>
                            </div>
                        </div>
                        <div class="time-schedule-item">
                            <div class="day-name">
                                <p>Monday</p>
                            </div>
                            <div class="day-buttons p-2 pe-0">
                                <button class="btn-time" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Add Time Slot <i class="ri-add-line"></i>
                                </button>
                                <div class="day-off">
                                    <div class="form-check form-switch">
                                        <input class="form-check-input" type="checkbox" role="switch"
                                            id="flexSwitchCheckDefault">
                                        <label class="form-check-label mb-0 pb-0" for="flexSwitchCheckDefault">Day On
                                        </label>
                                    </div>
                                </div>
                                <button class="btn-eyes" data-bs-toggle="modal" data-bs-target="#time-views">View Date <i class="ri-eye-fill"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Button trigger modal -->

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5 white" id="exampleModalLabel">Saturday</h1>
                    <button type="button" class="bg-transparent" data-bs-dismiss="modal" aria-label="Close">
                        <i class="ri-close-circle-fill white fs-20"></i>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="time-adds">
                        <div class="times-plan position-relative">
                            <label for="">Start Time</label>
                        </div>
                        <div class="times-plan position-relative">
                            <label for="">Start Time</label>
                        </div>
                    </div>
                    <div class="time-adds">
                        <div class="times-plan position-relative">
                            <input type="text" class="form-control" placeholder="Start time">
                        </div>
                        <div class="times-plan position-relative">
                            <input type="text" class="form-control" placeholder="Start time">
                        </div>
                        <button class="deleted-time"><i class="ri-delete-bin-line"></i></button>
                    </div>
                    <div class="time-adds">
                        <div class="times-plan position-relative">
                            <input type="text" class="form-control" placeholder="Start time">
                        </div>
                        <div class="times-plan position-relative">
                            <input type="text" class="form-control" placeholder="Start time">
                        </div>
                        <button class="deleted-time"><i class="ri-delete-bin-line"></i></button>
                    </div>
                    <div class="time-adds">
                        <div class="times-plan position-relative">
                            <input type="text" class="form-control" placeholder="Start time">
                        </div>
                        <div class="times-plan position-relative">
                            <input type="text" class="form-control" placeholder="Start time">
                        </div>
                        <button class="deleted-time"><i class="ri-delete-bin-line"></i></button>
                    </div>
                </div>
                <div class="modal-footer d-flex align-items-center justify-content-between">
                    <button type="button" class="btn-time" data-bs-dismiss="modal">
                        Add Time Slot <i class="ri-add-line"></i>
                    </button>
                    <button type="button" class="btn-eyes">
                        Save <i class="ri-save-line"></i>
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal -->
    <div class="modal fade" id="time-views" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5 white" id="exampleModalLabel">Saturday</h1>
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
                    <div class="time-adds">
                        <div class="times-plan position-relative">
                            <input type="text" class="form-control" placeholder="Start time">
                        </div>
                        <button class="deleted-time"><i class="ri-delete-bin-line"></i></button>
                    </div>
                    <div class="time-adds">
                        <div class="times-plan position-relative">
                            <input type="text" class="form-control" placeholder="Start time">
                        </div>
                        <button class="deleted-time"><i class="ri-delete-bin-line"></i></button>
                    </div>
                    <div class="time-adds">
                        <div class="times-plan position-relative">
                            <input type="text" class="form-control" placeholder="Start time">
                        </div>
                        <button class="deleted-time"><i class="ri-delete-bin-line"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
@endpush
