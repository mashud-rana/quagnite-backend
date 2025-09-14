@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    @php
        $auth_user = auth()->user();
    @endphp
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4" style="background: linear-gradient(180deg, #FFF 0%, #D3EDF3 100%);">
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

                        {{-- <p class="color-deep-gray fs-14">{{ \Carbon\Carbon::now()->format('jS F Y, l') }}</p> --}}
                    </div>
                </div>
                <a href="{{ route('coach.profile') }}" class="ic-btn-outline">Edit Profile <i
                        class="ri-arrow-right-s-line"></i></a>
            </div>
            {{-- header --}}
            <div class="ic-dashboard-cards">
                <div class="row row-cols-2 row-cols-sm-3 row-cols-md-3 row-cols-lg-5 g-2 g-xl-2 g-xxl-4">
                    <div class="col">
                        <div class="ic-dashboard-card"
                            style="background-image: linear-gradient(0deg, rgba(21, 141, 167, 0.90) 0%, rgba(21, 141, 167, 0.90) 100%), url({{ asset('new-frontendv1/images/coach-dashboard/dashboard-card-bg.png') }})">
                            <div class="ic-dash-icon">
                                <img src="{{ asset('new-frontendv1/images/coach-dashboard/student.png') }}"
                                    alt="student icon">
                            </div>
                            <div class="ic-dash-content">
                                <p>Total Students</p>
                                <h4>{{ optional($auth_user->coach)->coach_enrollments_count }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-dashboard-card"
                            style="background-image: linear-gradient(0deg, rgba(21, 36, 167, 0.80) 0%, rgba(21, 36, 167, 0.80) 100%), url({{ asset('new-frontendv1/images/coach-dashboard/dashboard-card-bg.png') }})">
                            <div class="ic-dash-icon">
                                <img src="{{ asset('new-frontendv1/images/coach-dashboard/coaching-hour.png') }}"
                                    alt="student icon">
                            </div>
                            <div class="ic-dash-content">
                                <p>Total Coaching Hours</p>
                                <h4>{{ optional($auth_user->coach)->coach_total_duration }}</h4>
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
                                <p>Sessions This Week</p>
                                <h4>{{ optional($auth_user->coach)->coach_this_week_enrollments_count }}</h4>
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
                                <p>Total Sessions</p>
                                <h4>{{ optional($auth_user->coach)->coach_enrollments_count }}</h4>
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
                                <p>Total Earning</p>
                                <h4>$ {{ $auth_user->total_earning }}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-3 mt-1 mt-lg-4">
                <div class="col-lg-8">
                    <div class="ic-coach-session-chart coach-card">
                        <div class="ic-coach-card-header">
                            <h5>My Sessions</h5>
                            <div>
                                <select name="" class="form-select" id="sessionTimeframe"
                                    onchange="updateSessionChart()">
                                    <option value="daily" selected>Daily</option>
                                    <option value="monthly">Monthly</option>
                                </select>
                            </div>
                        </div>
                        <div class="ic-chart" id="chart"></div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ic-coach-upcoming-session coach-card">
                        <div class="ic-coach-card-header">
                            <h5>Upcoming Sessions</h5>
                        </div>
                        <div class="ic-upcomming-sessions">
                            <ul>
                                @forelse ($upcomeingCoachings as $item)
                                    <li>
                                        <a href="#">
                                            <img src="{{ getStoreFile($item->student->avatar, $item->student->storage_type) }}"
                                                alt="">
                                            <div>
                                                <p class="upcoming-name">{{ $item->student->full_name }}</p>
                                                <p class="upcoming-date">{{ custom_datetime($item->start_time) }} /
                                                    {{ $item->formatted_duration }}</p>
                                                <span
                                                    class="primary">{{ $item->status == PENDING ? 'Pending' : 'In Progress' }}</span>

                                            </div>
                                            <i class="ri-play-circle-fill"></i>
                                        </a>
                                    </li>
                                @empty
                                    <li>
                                        <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                                    </li>
                                @endforelse


                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row g-3 mt-1 mt-lg-4">
                <div class="col-lg-5">
                    <div class="coach-card ic-coach-top-student">
                        <div class="ic-coach-card-header">
                            <h5>Top Students</h5>
                        </div>
                        @if ($topStudents->isNotEmpty())
                            <ul class="ic-coach-student-ul">
                                @foreach ($topStudents as $item)
                                    <li>
                                        <img src="{{ getStoreFile($item->student->avatar, $item->student->storage_type) }}"
                                            alt="">
                                        <div class="ic-coach-student-names">
                                            <p>{{ $item->student->full_name }}</p>
                                        </div>
                                        <div class="active-student">
                                            <p><i class="ri-checkbox-blank-circle-fill"></i> Active</p>
                                            <span>{{ $item->active_sessions }} Sessions</span>
                                        </div>
                                    </li>
                                @endforeach

                            </ul>
                            <a href="{{ route('coach.coachings') }}" class="ic-see-all ic-btn w-100">See All</a>
                        @else
                            <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                        @endif
                    </div>
                </div>
                <div class="col-lg-7">
                    <div class="coach-card ic-coach-top-student">
                        <div class="my-calender-card">
                            <img src="{{ asset('new-frontendv1/images/coach-dashboard/calender.png') }}" alt="">
                            <div>
                                <h5>My Schedule</h5>
                                <p>View & Edit available hours, Schedules</p>
                            </div>
                            <div class="ms-auto">
                                <a href="{{ route('coach.schedule.index') }}" class="ic-btn">View Schedule</a>
                            </div>
                        </div>
                    </div>
                    <div class="coach-card ic-coach-top-student mt-4">
                        <div class="my-calender-card community">
                            <img src="{{ asset('new-frontendv1/images/coach-dashboard/chat.png') }}" alt="">
                            <div>
                                <h5>My Community</h5>
                                <p>Latest questions, events and community updates</p>
                            </div>
                            <div class="ms-auto">
                                <a href="{{ route('coach.enrolled-students') }}" class="ic-btn"><i
                                        class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="coach-card ic-coach-top-student mt-4">
                        <div class="ic-coach-card-header">
                            <h5>Next Scheduled Availability</h5>
                        </div>
                        <div class="ic-scheduled">
                            <div class="ic-date-show">
                                <p class="date-shows"><i class="ri-calendar-check-fill"></i>{{ $date_range }}</p>
                                <div class="ic__arrows">
                                    <button class="ic-dates-arrows"><i class="ri-arrow-right-line"></i></button>
                                </div>
                            </div>

                            <div class="overflow-auto">
                                <div class="scroll-dates-slider">
                                    <div class="ic-date-slider ">
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
                        </div>
                    </div>
                </div>
            </div>
            <div class="row mt-4">
                <div class="col-lg-12">
                    <div class="coach-card">
                        <div class="ic-coach-card-header">
                            <h5>Earning Overview</h5>
                            <div>
                                <select name="" class="form-select" id="timeframe" onchange="updateChart()">
                                    <option value="monthly" selected>Monthly</option>
                                    <option value="yearly">Yearly</option>
                                </select>
                            </div>
                        </div>
                        <div class="ic-chart" id="earnChart"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- Member dashboard --}}
@endsection

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    <script>
        var sessionOptions = {
            series: [{
                name: 'Total Sessions',
                data: []
            }],
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
                        return val + ' Total Sessions';
                    }
                },
            },
        };

        var sessionChart = new ApexCharts(document.querySelector("#chart"), sessionOptions);
        sessionChart.render();

        function updateSessionChart(sessionTimeframe) {
            var data = [];
            var xLabels = [];

            @php
                $data['lastTwelveMonthsSessions'] = $lastTwelveMonthsSessions;
                $data['lastTwelveDaysSessions'] = $lastTwelveDaysSessions;
            @endphp

            if (sessionTimeframe === "monthly") {
                xLabels = @json(array_keys($data['lastTwelveMonthsSessions']));
                data = @json(array_values($data['lastTwelveMonthsSessions']));
            } else if (sessionTimeframe === "daily") {
                xLabels = @json(array_keys($data['lastTwelveDaysSessions']));
                data = @json(array_values($data['lastTwelveDaysSessions']));
            }


            var updatedOptions = JSON.parse(JSON.stringify(sessionOptions));
            updatedOptions.series[0].data = data;
            updatedOptions.xaxis.categories = xLabels;


            sessionChart.destroy();
            sessionChart = new ApexCharts(document.querySelector("#chart"), updatedOptions);
            sessionChart.render();
        }


        var timeframeSelect = document.getElementById("sessionTimeframe");
        timeframeSelect.value = "daily";
        updateSessionChart("daily");


        timeframeSelect.addEventListener("change", function() {
            updateSessionChart(this.value);
        });
    </script>
    <script>
        var earnOptions = {
            series: [{
                name: 'Earning Overview',
                data: []
            }],

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
                        return val + ' Total Earning';
                    }
                },
            },
        };

        var chart = new ApexCharts(document.querySelector("#earnChart"), earnOptions);
        chart.render();

        function updateChart() {
            var timeframeSelect = document.getElementById("timeframe");
            var timeframe = timeframeSelect.options[timeframeSelect.selectedIndex].value;


            var data = [];
            var xLabels = [];

            @php
                $data['lastTwelveMonthsEarning'] = $lastTwelveMonthsEarning;
                $data['lastTwelveYearsEarning'] = $lastTwelveYearsEarning;
            @endphp

            if (timeframe === "monthly") {
                xLabels = @json(array_keys($data['lastTwelveMonthsEarning']));
                data = @json(array_values($data['lastTwelveMonthsEarning']));
            } else if (timeframe === "yearly") {
                xLabels = @json(array_keys($data['lastTwelveYearsEarning']));
                data = @json(array_values($data['lastTwelveYearsEarning']));
            }


            var updatedOptions = JSON.parse(JSON.stringify(earnOptions));
            updatedOptions.series[0].data = data;
            updatedOptions.xaxis.categories = xLabels;

            // updated chart
            chart.destroy();
            chart = new ApexCharts(document.querySelector("#earnChart"), updatedOptions);
            chart.render();
        }

        // Set the default selection to "monthly"
        document.getElementById("timeframe").value = "monthly";

        // Call the updateChart function
        updateChart();
    </script>
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
