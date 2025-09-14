@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- my bootcamps --}}
    <section class="my-bootcamps-main">
        <div class="container">
            <div class="section-headers">
                <div>
                    <h3 class="fs-30 fw-700 pb-lg-3 pb-2">My Exams</h3>
                    <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
                </div>
            </div>
            <div class="ic-my-courses__tabs">
                <div class="ic-my-course__navlinks">
                    <ul class="ic-profile__navsTab">
                        <li>
                            <a href="#" class="ic-profile__links active" data-link="progress">Pending </a>
                        </li>
                        <li>
                            <a href="#" class="ic-profile__links" data-link="wishlist">Complete</a>
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
                            @forelse ($pendingExams as $item)
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="ic-exam-test-iq">
                                        <span class="ic-timer-set"><i class="ri-timer-line"></i>
                                            {{ $item->exam->formatted_time }}</span>
                                        <img src="{{ getStoreFile($item->exam->image, $item->exam->storage_type) }}"
                                            class="img-fluid" alt="">
                                        <h6>{{ $item->exam->title }}</h6>
                                        <p class="mb-1">{{ $item->exam->questions->count() }} Question</p>
                                        <a href="{{ route('student.exam.instruction', [$item->exam->uuid, $item->uuid]) }}"
                                            class="ic-btn-simple">Enter Exam <i class="ri-arrow-right-line"></i></a>
                                    </div>
                                </div>
                            @empty
                                <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                            @endforelse
                        </div>
                    </div>
                    <div class="ic-profile__tabsItems" id="wishlist">
                        <div class="row g-3">
                            {{-- <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="ic-exam-test-iq">
                                <span class="ic-timer-set"><i class="ri-timer-line"></i>
                                    {{ $item->exam->formatted_time }}</span>
                                <img src="{{ getStoreFile($item->exam->image, $item->exam->storage_type) }}"
                                    class="img-fluid" alt="">
                                <h6>{{ $item->exam->title }}</h6>
                                <p class="mb-2">{{ $item->exam->questions->count() }} Question</p>
                                <div class="ic-exam-complete-button-wrapper">
                                    <a href=""
                                        class="ic-btn-simple">Download Result
                                    </a>
                                    <button class="ic-btn-simple ic-green" data-bs-toggle="modal"
                                        data-bs-target="#exampleModal">View Result</button>
                                </div>
                            </div>
                        </div> --}}
                            @forelse ($completedExams as $item)
                                <div class="col-lg-3 col-md-6 col-sm-6">
                                    <div class="ic-exam-test-iq">
                                        <span class="ic-timer-set"><i class="ri-timer-line"></i>
                                            {{ $item->exam->formatted_time }}</span>
                                        <img src="{{ getStoreFile($item->exam->image, $item->exam->storage_type) }}"
                                            class="img-fluid" alt="">
                                        <h6>{{ $item->exam->title }}</h6>
                                        <div class="ic-exam-complete-button-wrapper">
                                            @if ($item->attempt < 3)
                                                <a href="{{ route('student.exam.instruction', [$item->exam->uuid, $item->uuid]) }}"
                                                    class="ic-btn-simple">Retake</a>
                                            @endif

                                            <button class="ic-btn-simple ic-green view-result-btn"
                                                data-enroll-id="{{ $item->id }}">
                                                View Result
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
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
            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="ic-protected-exam-body position-relative">
                <div class="position-absolute top-0 end-0" data-bs-dismiss="modal" aria-label="Close">
                    <i class="ri-close-circle-line" style="font-size: 30px;color: #f47820;"></i>
                </div>
                <div class="ic-exam-score text-center">
                    <h4 class="success text-center" id="greet_title">
                        Your Exam Reports
                    </h4>
                    <div class="all-score-info mb-0" id="showResultDiv">

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- my bootcamps --}}
@endsection

@push('scripts')
    {{-- Vue Script --}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- Vue Script --}}
    <script>
        $(document).ready(function() {
            $('.view-result-btn').click(function() {
                var modal = new bootstrap.Modal($('#exampleModal')[0]);
                modal.show();

                const URL = "{{ route('student.exam.results') }}";
                const enrollId = $(this).data('enroll-id');

                axios.post(URL, {
                        enroll_id: enrollId,
                    })
                    .then(function(response) {
                        $("#showResultDiv").html(response.data);
                    })
                    .catch(function(error) {
                        // handle error
                    });
            });
        });
    </script>
@endpush
