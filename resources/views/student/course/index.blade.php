{{-- @extends('admin.layouts.master') --}}
@extends('layouts.master-user')

@section('content')
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            <div class="section-headers">
                <div>
                    <h3 class="fs-30 fw-700 pb-lg-3 pb-2">My Courses</h3>
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
                        <div class="row g-3">
                            @forelse ($enrolledCourses as $item)
                                <div class="col-lg-12 col-xl-6">
                                    <div class="ic-pickUp__courseItems bg-white position-relative h-100">
                                        <div class="ic-pickUp__img">
                                            <img src="{{ getStoreFile($item->course->image, $item->course->storage_type) }}"
                                                alt="">
                                            <p class="ic-pickUp__names bg-shade gray">
                                                {{ $item->course->user->full_name }} </p>
                                        </div>
                                        <div class="ic-pickUp__courseInfo d-flex flex-column justify-content-between">
                                            <div>
                                                <h4 class="fw-600 black"> {{ $item->course->title }} </h4>
                                                <ul class="in-progress">
                                                    <li>
                                                        <i class="ri-book-open-line"></i>
                                                        {{ $item->course->lectures->count() }} Lessons
                                                    </li>
                                                    {{-- <li>
                                                <i class="ri-file-list-line"></i>
                                                Assignment 11
                                            </li> --}}
                                                    <li>
                                                        <i class="ri-time-line"></i>
                                                        {{ gmdate('i:s', $item->course->lectures->sum('file_duration_second')) }}
                                                    </li>
                                                </ul>
                                                <div class="progress">
                                                    <div class="progress-bar"
                                                        style="width: {{ $item->completionPercentage }}%" role="progressbar"
                                                        aria-valuenow="{{ $item->completionPercentage }}%" aria-valuemin="0"
                                                        aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="button-withPrice mt-4">
                                                <a href="{{ route('student.show-course', $item->course->slug) }}"
                                                    class="ic-pickUp__btn">
                                                    Continue
                                                    <i class="ri-arrow-right-s-line"></i>
                                                </a>
                                                @if ($item->is_refund_valid)
                                                    <button type="button" class="ic-pickUp__btn" data-toggle="modal"
                                                        data-target="#refundModal" data-id="{{ $item->course->id }}"
                                                        data-type="{{ class_basename($item->course) }}">
                                                        Refund
                                                        <i class="ri-arrow-right-s-line"></i>
                                                    </button>
                                                @endif
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <x-frontend.data-notfound></x-frontend.data-notfound>
                            @endforelse
                        </div>
                    </div>
                    <div class="ic-profile__tabsItems" id="wishlist">
                        <div class="row g-3">
                            @forelse ($completedCourses as $item)
                                <div class="col-lg-12 col-xl-6">
                                    <div class="ic-pickUp__courseItems bg-white position-relative h-100">
                                        <div class="ic-pickUp__img">
                                            <img src="{{ getStoreFile($item->course->image, $item->course->storage_type) }}"
                                                alt="">
                                            <p class="ic-pickUp__names bg-shade gray">
                                                {{ $item->course->user->full_name }} </p>
                                        </div>
                                        <div class="ic-pickUp__courseInfo d-flex flex-column justify-content-between">
                                            <div>
                                                <h4 class="fw-600 black"> {{ $item->course->title }} </h4>
                                                <ul class="in-progress">
                                                    <li>
                                                        <i class="ri-book-open-line"></i>
                                                        {{ $item->course->lectures->count() }} Lessons
                                                    </li>
                                                    {{-- <li>
                                                        <i class="ri-file-list-line"></i>
                                                        Assignment 11
                                                    </li> --}}
                                                    <li>
                                                        <i class="ri-time-line"></i>
                                                        {{ gmdate('i:s', $item->course->lectures->sum('file_duration_second')) }}
                                                    </li>
                                                </ul>
                                                <div class="progress">
                                                    <div class="progress-bar"
                                                        style="width: {{ $item->completionPercentage }}%"
                                                        role="progressbar"
                                                        aria-valuenow="{{ $item->completionPercentage }}%"
                                                        aria-valuemin="0" aria-valuemax="100"></div>
                                                </div>
                                            </div>
                                            <div class="button-withPrice mt-4">
                                                <a href="{{ route('student.show-course', $item->course->slug) }}"
                                                    class="ic-pickUp__btn">View<i class="ri-arrow-right-s-line"></i></a>
                                                <a href="{{ route('student.certificate.index') }}"
                                                    class="ic-pickUp__btn">Get Certificate<i
                                                        class="ri-arrow-right-s-line"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <x-frontend.data-notfound></x-frontend.data-notfound>
                            @endforelse
                        </div>
                    </div>
                    <div class="ic-profile__tabsItems" id="archives">
                        <div class="row g-3">
                            {{-- <div class="col-lg-12 col-xl-6">
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
                <a href="#" class="ic-pickUp__btn">Join Class <i class="ri-arrow-right-s-line"></i></a>
                <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
            </div>
        </div>
    </div>
    </div>
    <div class="col-lg-12 col-xl-6">
        <div class="ic-pickUp__courseItems bg-white">
            <div class="ic-pickUp__img position-relative">
                <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}" alt="">
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
                    <a href="#" class="ic-pickUp__btn">Join Class <i class="ri-arrow-right-s-line"></i></a>
                    <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xl-6">
        <div class="ic-pickUp__courseItems bg-white">
            <div class="ic-pickUp__img position-relative">
                <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}" alt="">
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
                    <a href="#" class="ic-pickUp__btn">Join Class <i class="ri-arrow-right-s-line"></i></a>
                    <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-12 col-xl-6">
        <div class="ic-pickUp__courseItems bg-white">
            <div class="ic-pickUp__img position-relative">
                <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}" alt="">
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
                    <a href="#" class="ic-pickUp__btn">Join Class <i class="ri-arrow-right-s-line"></i></a>
                    <h4 class="fs-28 fw-500 pb-0 primary">$ 165.00</h4>
                </div>
            </div>
        </div>
    </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- student dashboard --}}
    <!-- Refund Request Modal -->
    <div class="modal fade" id="refundModal" tabindex="-1" aria-labelledby="refund" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="refundForm">
                    @csrf
                    <input type="hidden" name="refundable_id" id="refundableId">
                    <input type="hidden" name="refundable_type" id="refundableType">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="review">Request for Refund</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group ic-feedback-form">
                            <label for="beneficiary">Select Beneficiary</label>
                            <select name="beneficiary_id" id="beneficiary" class="form-control">
                                <option value="">Select Beneficiary</option>
                                @foreach ($beneficiaries as $beneficiary)
                                    <option value="{{ $beneficiary->id }}">{{ $beneficiary->beneficiary_name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group ic-feedback-form">
                            <label for="#">Reason of Refund</label>
                            <textarea name="reason" id="" class="form-control" placeholder="Please write reason"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="ic-btn danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="ic-btn-simple">Submit Request</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            // Trigger modal and set data attributes
            $('.ic-pickUp__btn[data-toggle="modal"]').on('click', function() {
                // alert('Please');
                var refundableId = $(this).data('id');
                var refundableType = $(this).data('type');

                $('#refundableId').val(refundableId);
                $('#refundableType').val(refundableType);
                $('#refundModal').modal('show');
            });

            // Submit refund form via AJAX
            $('#refundForm').on('submit', function(e) {
                e.preventDefault();

                var formData = $(this).serialize();

                $.ajax({
                    url: "{{ route('student.refund.request') }}",
                    method: "POST",
                    data: formData,
                    success: function(response) {
                        if (response.success) {
                            $('#refundModal').modal('hide');
                            notify('success', response.message);
                        } else {
                            notify('error', response.message);
                        }
                    },
                    error: function(response) {
                        if (response.status === 422) {
                            var errors = response.responseJSON.errors;
                            var firstError = Object.values(errors)[
                                0];
                            notify('error', firstError);
                        } else {
                            notify('error', 'An error occurred. Please try again.');
                        }
                    }
                });

            });
        });
    </script>
@endpush

@push('styles')
@endpush
