@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    @php
        $auth_user = auth()->user();
    @endphp
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            {{-- header --}}
            <div class="ic-dashboard__header">
                <div class="header-left">
                    <div class="ic-dashboard__avatar">
                        <img src="{{ getStoreFile($auth_user->avatar, $auth_user->storage_type) }}" alt="">
                    </div>
                    <div>
                        <h3 class="black">Hi {{ $auth_user->full_name }}!</h3>
                        <span class="primary">Welcome to your <span class="color-deep-gray">Dashboard</span></span>

                        <p class="color-deep-gray fs-14">{{ \Carbon\Carbon::now()->format('jS F Y, l') }}</p>
                    </div>
                </div>
                <a href="{{ route('teacher.profile') }}" class="ic-btn-outline">Edit Profile <i
                        class="ri-arrow-right-s-line"></i></a>
            </div>
            {{-- header --}}
            {{-- <div class="ic-dashboard-cards">
                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-4 g-2 g-xl-2 g-xxl-4">
                    <div class="col">
                        <div class="ic-dashboard-card"
                            style="background-image: linear-gradient(0deg, rgba(21, 141, 167, 0.90) 0%, rgba(21, 141, 167, 0.90) 100%), url({{ asset('new-frontendv1/images/coach-dashboard/dashboard-card-bg.png') }})">
                            <div class="ic-dash-icon">
                                <img src="{{ asset('new-frontendv1/images/coach-dashboard/student.png') }}"
                                    alt="student icon">
                            </div>
                            <div class="ic-dash-content">
                                <p>Total Students</p>
                                <h4>{{ @$auth_user->teacher->total_students }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-dashboard-card"
                            style="background-image:linear-gradient(0deg, rgba(244, 120, 32, 0.90) 0%, rgba(244, 120, 32, 0.90) 100%), url({{ asset('new-frontendv1/images/coach-dashboard/dashboard-card-bg.png') }})">
                            <div class="ic-dash-icon">
                                <img src="{{ asset('new-frontendv1/images/coach-dashboard/sassion.png') }}"
                                    alt="student icon">
                            </div>
                            <div class="ic-dash-content">
                                <p>Total Enrolled</p>
                                <h4>{{ @$auth_user->teacher->total_enrolled_studentss }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-dashboard-card"
                            style="background-image: linear-gradient(0deg, rgba(47, 189, 119, 0.90) 0%, rgba(47, 189, 119, 0.90) 100%), url({{ asset('new-frontendv1/images/coach-dashboard/dashboard-card-bg.png') }})">
                            <div class="ic-dash-icon">
                                <img src="{{ asset('new-frontendv1/images/coach-dashboard/sassion.png') }}"
                                    alt="student icon">
                            </div>
                            <div class="ic-dash-content">
                                <p>Total Bootcamps</p>
                                <h4>
                                    {{ @$auth_user->teacher->bootcampsCount() }}
                                </h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-dashboard-card"
                            style="background-image: linear-gradient(0deg, rgba(232, 84, 62, 0.90) 0%, rgba(232, 84, 62, 0.90) 100%), url({{ asset('new-frontendv1/images/coach-dashboard/dashboard-card-bg.png') }})">
                            <div class="ic-dash-icon">
                                <img src="{{ asset('new-frontendv1/images/coach-dashboard/earning.png') }}"
                                    alt="student icon">
                            </div>
                            <div class="ic-dash-content">
                                <p>Total Courses</p>
                                <h4>{{ @$auth_user->teacher->coursesCount() }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
            <div class="ic-dashboard-cards">
                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-4 g-2 g-xl-2 g-xxl-4">
                    <div class="col">
                        <div class="ic-dashboard-card student-dashboard-card"
                            style="background-image: linear-gradient(0deg, rgba(21, 141, 167, 0.90) 0%, rgba(21, 141, 167, 0.90) 100%), url({{ asset('new-frontendv1/images/coach-dashboard/dashboard-card-bg.png') }})">

                            <div class="ic-dash-content">
                                <p class="card-title mb-13">Total Students</p>
                                <h4 class="mb-13">{{ @$auth_user->teacher->total_students }}</h4>
                                <a href="{{ route('teacher.enrolled-students') }}">All Student <i
                                        class="ri-arrow-right-s-line"></i></a>
                            </div>
                            <div class="ic-dash-icon">
                                <img src="{{ asset('new-frontendv1/images/coach-dashboard/student.png') }}"
                                    alt="student icon">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-dashboard-card student-dashboard-card"
                            style="background-image:linear-gradient(0deg, rgba(244, 120, 32, 0.90) 0%, rgba(244, 120, 32, 0.90) 100%), url({{ asset('new-frontendv1/images/coach-dashboard/dashboard-card-bg.png') }})">
                            <div class="ic-dash-content">
                                <p class="card-title mb-13">Total Enrolled</p>
                                <h4 class="mb-13">{{ @$auth_user->teacher->total_enrolled_studentss }}</h4>
                                <a href="{{ route('teacher.enrolled-students') }}">All Student <i
                                        class="ri-arrow-right-s-line"></i></a>
                            </div>
                            <div class="ic-dash-icon">
                                <img src="{{ asset('new-frontendv1/images/coach-dashboard/sassion.png') }}"
                                    alt="student icon">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-dashboard-card student-dashboard-card"
                            style="background-image: linear-gradient(0deg, rgba(47, 189, 119, 0.90) 0%, rgba(47, 189, 119, 0.90) 100%), url({{ asset('new-frontendv1/images/coach-dashboard/dashboard-card-bg.png') }})">
                            <div class="ic-dash-content">
                                <p class="card-title mb-13">Total Bootcamps</p>
                                <h4 class="mb-13">
                                    {{ @$auth_user->teacher->bootcampsCount() }}
                                </h4>
                                <a href="{{ route('teacher.bootcamp.index') }}">See Bootcamps<i
                                        class="ri-arrow-right-s-line"></i></a>
                            </div>
                            <div class="ic-dash-icon">
                                <img src="{{ asset('new-frontendv1/images/coach-dashboard/sassion.png') }}"
                                    alt="student icon">
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-dashboard-card student-dashboard-card"
                            style="background-image: linear-gradient(0deg, rgba(232, 84, 62, 0.90) 0%, rgba(232, 84, 62, 0.90) 100%), url({{ asset('new-frontendv1/images/coach-dashboard/dashboard-card-bg.png') }})">
                            <div class="ic-dash-content">
                                <p class="card-title mb-13">Total Courses</p>
                                <h4 class="mb-13">{{ @$auth_user->teacher->coursesCount() }}</h4>
                                <a href="{{ route('teacher.course.index') }}">See Courses<i
                                        class="ri-arrow-right-s-line"></i></a>
                            </div>
                            <div class="ic-dash-icon">
                                <img src="{{ asset('new-frontendv1/images/coach-dashboard/earning.png') }}"
                                    alt="student icon">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- widget --}}
            {{-- <div class="row g-3">
                <div class="col-lg-4 col-md-6">
                    <div class="ic-twidget__card"
                        style="background-image: linear-gradient(0deg, rgba(21, 141, 167, 0.9), rgba(21, 141, 167, 0.9)), url('{{ asset('new-frontend/images/teacher/teacher-dash-items.png') }}')">
                        <div class="ic-t-icons">
                            <img src="{{ asset('new-frontend/images/teacher/total-s.png') }}" alt="">
                        </div>
                        <div class="ic-twidget-content">
                            <h3 class="fw-700 fs-24 white mb-2">Total Enroll <span class="fs-16 fw-400 fs-18">(Students)</span>
                            </h3>
                            <p class="fw-400 fs-14 pb-3 white">
                                {{ @$auth_user->teacher->total_students }}
                            </p>
                            
                            <a href="{{ route('teacher.enrolled-students') }}" class="ic-twidget__btn">All Student <i
                                    class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ic-twidget__card"
                        style="background-image: linear-gradient(0deg, rgba(21, 141, 167, 0.9), rgba(21, 141, 167, 0.9)), url('{{ asset('new-frontend/images/teacher/teacher-dash-items.png') }}')">
                        <div class="ic-t-icons">
                            <img src="{{ asset('new-frontend/images/teacher/support-t.png') }}" alt="">
                        </div>
                        <div>
                            <h3 class="fw-700 fs-24 white mb-2">Support Ticket</h3>
                            <p class="fw-400 fs-14 pb-3 white">Data Science with Python Training...</p>
                            <a href="{{ route('ticket.index') }}" class="ic-twidget__btn">Get Ticket <i
                                    class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="ic-twidget__card"
                        style="background-image: linear-gradient(0deg, rgba(21, 141, 167, 0.9), rgba(21, 141, 167, 0.9)), url('{{ asset('new-frontend/images/teacher/teacher-dash-items.png') }}')">
                        <div class="ic-t-icons">
                            <img src="{{ asset('new-frontend/images/teacher/best-selling.png') }}" alt="">
                        </div>
                        <div>
                            <h3 class="fw-700 fs-24 white mb-2">Best Selling Course</h3>
                            <p class="fw-400 fs-14 pb-3 white">Data Science with Python Training...</p>
                            <a href="{{ route('all.courses') }}" class="ic-twidget__btn">See Course <i
                                    class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div>
                </div>
            </div> --}}
            {{-- widget --}}

            {{-- added course --}}
            <div class="ic-recently-added mt-30">
                <div class="ic-teacher-dash-heading">
                    <h3 class="fs-28 fw-600 black">Recently Added Courses</h3>
                    <div class="ic-dashboard-heading-right">
                        {{-- <select name="" id="" class="selectpicker">
                            <option value="0">Courses</option>
                            <option value="0">Courses 1</option>
                            <option value="0">sani 2 jaksd fjasdf jasdhf jasdfh kjasfh asdfkj haskfhals</option>
                        </select> --}}
                        <a href="{{ route('teacher.course.index') }}" class="ic-btn">View All <i
                                class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                {{-- courses --}}
                <div class="ic-teacher-course teacher-dashboard-course">

                    {{-- Courses LOOP --}}
                    <div class="row g-4">
                        @forelse ($courses as $course)
                            {{-- <div class="col-xxl-6 col-xl-6 col-lg-12">
                                <div class="ic-teacher-course-items">
                                    <div class="course-items-img position-relative">
                                        <img src="{{ getStoreFile($course->image, $course->storage_type) }}"
                                            class="img-fluid" alt="">
                                    </div>
                                    <div class="course-items-content">
                                        <ul>
                                            <li>
                                                <i class="ri-movie-line"></i>
                                                <span>Contents ({{ $course->lectures_count }})</span>
                                            </li>
                                            <li>
                                                <i class="ri-time-line"></i>
                                                @php
                                                    $seconds = $course->lectures_sum_file_duration_second;
                                                @endphp
                                                <span>Duration ({{ $seconds ? gmdate('i:s', $seconds) : 0 }})</span>
                                            </li>
                                            <li>
                                                <i class="ri-user-6-line"></i>
                                                <span>Enrolled ({{ $course->total_enrolled_students }})</span>
                                            </li>
                                        </ul>
                                        <p class="course-title fw-500 fs-18 black">{{ $course->title }}</p>
                                        <p class="review-scrore">0.00
                                            <span class="t-star ">
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                                <i class="ri-star-s-fill"></i>
                                            </span>
                                            <span class="review-count">(0 reviews)</span>
                                        </p>
                                        <div class="ic-eidit-buttons">
                                            <a href="{{ route('teacher.course.edit', $course->uuid) }}" class="primary"><i
                                                    class="ri-edit-line"></i> Edit</a>
                                            <a href="{{ route('teacher.course.delete', $course->uuid) }}"
                                                class="text-red deleteCourse"><i class="ri-delete-bin-line"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div class="col">
                                <div class="mb-0 flex-column h-100">
                                    <div class="ic-coach-item">
                                        <div class="position-relative overflow-hidden">
                                            <img src="{{ getStoreFile($course->image, $course->storage_type) }}"
                                                class="img-fluid ic-coach-image w-100" alt="">
                                            <p class="coach-bage ff-exend fs-14 color-white">{{ $course->category->name }}
                                            </p>
                                            {{-- <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a> --}}
                                        </div>
                                        <div class="ic-coach-content pb-0">
                                            <a href="{{ route('course.details', $course->slug) }}">
                                                <h5 class="fw-500 coach-title ff-lexend">{!! str_limit($course->title, $words = 30, $end = '...') !!}</h5>
                                            </a>
                                            <div class="coach-names">
                                                <p><img src="{{ getStoreFile($course->user->avatar, $course->user->storage_type) }}"
                                                        alt="">
                                                    {{ $course->user->first_name }} </p>
                                                <p>{{ $course->reviews->count() ? number_format($course->reviews->avg('rating'), 1) : 0.0 }}
                                                    <span>
                                                        @php
                                                            $avgRating = $course->average_rating;
                                                            $starClass = $avgRating >= 0.5 ? 'yellow' : 'gray-400';
                                                        @endphp

                                                        @for ($i = 1; $i <= 5; $i++)
                                                            @if ($i <= round($avgRating))
                                                                <i class="ri-star-s-fill {{ $starClass }}"></i>
                                                            @else
                                                                <i class="ri-star-s-line {{ $starClass }}"></i>
                                                            @endif
                                                        @endfor
                                                    </span>
                                                </p>
                                            </div>
                                        </div>
                                        <div
                                            class="coach-price course-price d-flex align-items-center justify-content-between">
                                            <div class="d-flex align-items-center gap-2">
                                                <a href="{{ route('teacher.course.create') }}"
                                                    class="bg-green white">Create</a>
                                                <a href="{{ route('teacher.course.delete', $course->uuid) }}"
                                                    class="text-red deleteCourse"><i class="ri-delete-bin-line"></i>
                                                    Delete</a>
                                                <a href="{{ route('teacher.course.edit', $course->uuid) }}"
                                                    class="primary"><i class="ri-edit-2-line"></i>Edit</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @empty
                    </div>
                    <x-frontend.data-notfound></x-frontend.data-notfound>
                    @endforelse

                </div>
            </div>
            {{-- added course --}}
        </div>
        {{-- sale chart start --}}
        <div class="row mb-30">
            <div class="col-lg-12">
                <div class="coach-card">
                    <div class="ic-coach-card-header">
                        <h5>Sale Analytics</h5>
                        <div class="d-flex align-items-center gap-2">
                            <div>
                                {{-- <span>Online View </span> --}}
                                <span class="">Enrolled</span>
                            </div>
                            <select name="" class="form-select" id="sessionTimeframe"
                                onchange="updateSaleChart()">
                                <option value="daily" selected>Daily</option>
                                <option value="monthly">Monthly</option>
                            </select>
                        </div>
                    </div>
                    <div class="ic-teacher-chart" id="saleChart"></div>
                </div>
            </div>
        </div>
        {{-- sale chart end --}}
        {{-- upload course start --}}
        <div class="ic-course-today"
            style="background-image: linear-gradient(0deg, rgba(21, 141, 167, 0.9), rgba(21, 141, 167, 0.9)), url({{ asset('new-frontend/images/upload-course.png') }})">
            <h2 class="white">Upload Your Course Today</h2>
            <a href="{{ route('teacher.course.create') }}" class="uploadbtn">Upload Now <i
                    class="ri-upload-cloud-line"></i></a>
        </div>
        {{-- upload course end --}}
        {{-- student course table start --}}
        <div class="ic-student-course-table ic-all-student-enrolement">
            <div class="ic-recently-added mt-30">
                <div class="ic-teacher-dash-heading">
                    <h3 class="fs-28 fw-600 black">Those Student Bought This Courses & Bootcamp</h3>
                    <div class="ic-dashboard-heading-right">
                        {{-- <select name="" id="" class="selectpicker">
                            <option value="0">Courses</option>
                            <option value="0">Courses 1</option>
                            <option value="0">sani 2 jaksd fjasdf jasdhf jasdfh kjasfh asdfkj haskfhals</option>
                        </select> --}}
                        <a href="{{ route('teacher.enrolled-students') }}" class="ic-btn">View All <i
                                class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                <div class="ic-teacher-create-exam-wrapper">
                    <div class="ic-teacher-create-exam-content">

                        <div class="ic-create-exam-table table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">Image</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        {{-- <th scope="col">Course Name</th> --}}
                                        <th scope="col">Status</th>
                                        <th scope="col">Chat</th>
                                        <th scope="col">Review</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($enrolledStudents as $key => $data)
                                        <tr>
                                            {{-- image --}}
                                            <td>
                                                <div class="ic-table-item">
                                                    <img class="img-fluid"
                                                        src="{{ getStoreFile($data->student->avatar, $data->student->storage_type) }}"
                                                        alt="">
                                                </div>
                                            </td>
                                            {{-- Option No-1 --}}
                                            <td>
                                                <div class="ic-table-item">
                                                    {{ $data->student->full_name }}
                                                </div>

                                            </td>
                                            {{-- Option No-2 --}}
                                            <td>
                                                <div class="ic-table-item">
                                                    {{ $data->student->email }}
                                                </div>
                                            </td>

                                            {{-- date --}}
                                            <td>
                                                <div class="ic-table-item">
                                                    {{ $data->status == INPROGRESS ? 'Enrolled' : ($data->status == COMPLETE ? 'Graduate' : $data->status) }}
                                                </div>

                                            </td>
                                            <td>
                                                <div class="ic-table-item">
                                                    <a href="{{ route('chat.user', $data->student->uuid) }}"
                                                        class="ic-btn"><i class="ri-message-2-fill"></i>Chat</a>
                                                </div>
                                            </td>
                                            {{-- Action --}}
                                            <td>
                                                <div class="ic-eye-delete-btn">
                                                    @if (!$is_reviewed[$key])
                                                        <div class="d-flex">
                                                            <a href="#" class="text-nowrap ic-btn-simple"
                                                                data-bs-toggle="modal" data-bs-target="#review"
                                                                data-student-id="{{ $data->student->id }}">Write
                                                                Review</a>
                                                        </div>
                                                    @else
                                                        {{-- Display rating for students who have been reviewed --}}
                                                        <div class="ic-table-item">
                                                            {{ $data->student->reviews->first()->rating }}
                                                            <i class="ri-star-s-fill yellow"></i>
                                                        </div>
                                                    @endif
                                                </div>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="6">
                                                <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                                            </td>
                                        </tr>
                                    @endforelse

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- student course table end --}}
    </section>
    {{-- student dashboard --}}
@endsection

@push('scripts')
    <script>
        $(function() {
            $('.deleteCourse').each(function() {

                $(this).on('click', function(event) {

                    event.preventDefault();
                    event.stopPropagation();

                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#02a499",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!",
                    }).then((result) => {

                        if (result.isConfirmed) {

                            const Url = $(event.target).attr(
                                'href');

                            window.location = Url;
                        }
                    });
                });
            });
        });
    </script>
    {{-- sale chart js start --}}
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var saleOptions = {
            series: [{
                name: 'Enrolled Student',
                data: []
            }, ],

            chart: {
                height: 280,
                type: 'line',
                toolbar: {
                    show: false,
                },
            },
            dataLabels: {
                enabled: false
            },
            stroke: {
                curve: 'smooth',
                width: 2
            },
            xaxis: {
                categories: [],
            },
            yaxis: {
                crosshairs: {
                    show: true,
                    stroke: {
                        color: '#e2e2ea4d',
                        width: 25,
                        dashArray: 0,
                    },
                },
            },
            tooltip: {
                x: {
                    formatter: function(val) {
                        return val + ' Students Enrolled';
                    }
                },
            },
        };

        var saleChart = new ApexCharts(document.querySelector("#saleChart"), saleOptions);
        saleChart.render();

        function updateSaleChart(sessionTimeframe) {
            var data = [];
            var xLabels = [];

            // Assume $lastTwelveMonthsCourses and $lastTwelveDaysCourses are already defined in your PHP code

            if (sessionTimeframe === "monthly") {
                xLabels = @json(array_keys($lastTwelveMonthsCourses));
                data = @json(array_values($lastTwelveMonthsCourses));
            } else if (sessionTimeframe === "daily") {
                xLabels = @json(array_keys($lastTwelveDaysCourses));
                data = @json(array_values($lastTwelveDaysCourses));
            }

            var updatedOptions = JSON.parse(JSON.stringify(saleOptions));
            updatedOptions.series[0].data = data;
            updatedOptions.xaxis.categories = xLabels;

            saleChart.destroy();
            saleChart = new ApexCharts(document.querySelector("#saleChart"), updatedOptions);
            saleChart.render();
        }

        var timeframeSelect = document.getElementById("sessionTimeframe");
        timeframeSelect.value = "daily";
        updateSaleChart("daily");

        timeframeSelect.addEventListener("change", function() {
            updateSaleChart(this.value);
        });
    </script>
    {{-- sale chart js end --}}
@endpush
