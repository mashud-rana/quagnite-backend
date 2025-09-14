@extends('admin.layouts.master')


@section('content')
    <div class="row">
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-sm-6 col-6">
                            <div class="ic-all-courses">
                                <p class="mb-1">All Course</p>
                                <h4 class="mb-0">56</h4>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6 col-6 text-end">
                            <div class="ic-dImg">
                                <img src="{{ asset('/admin') }}/images/services-icon/student-d-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-sm-6 col-6">
                            <div class="ic-all-courses">
                                <p class="mb-1">All Projects</p>
                                <h4 class="mb-0">12+</h4>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6 col-6 text-end">
                            <div class="ic-dImg">
                                <img src="{{ asset('/admin') }}/images/services-icon/student-d-2.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-sm-6 col-6">
                            <div class="ic-all-courses">
                                <p class="mb-1">Test Attended</p>
                                <h4 class="mb-0">26</h4>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6 col-6 text-end">
                            <div class="ic-dImg">
                                <img src="{{ asset('/admin') }}/images/services-icon/student-d-3.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6">
            <div class="card">
                <div class="card-body">
                    <div class="row align-items-center">
                        <div class="col-lg-7 col-sm-6 col-6">
                            <div class="ic-all-courses">
                                <p class="mb-1">Test Passed</p>
                                <h4 class="mb-0">56</h4>
                            </div>
                        </div>
                        <div class="col-lg-5 col-sm-6 col-6 text-end">
                            <div class="ic-dImg">
                                <img src="{{ asset('/admin') }}/images/services-icon/student-d-4.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8 col-lg-12">
            <div class="row">
                <div class="col-xxl-7">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 justify-content-between">
                                <h4 class="card-title font-size-20">Upcoming Lesson</h4>
                                <a href="#" class="font-size-16"> View All Course</a>
                            </div>
                            <ul class="ps-0 upcoming-lesson-list">
                                <li class="upcoming-lesson-items">
                                    <div>
                                        <h4 class="font-size-18">Lessons 30</h4>
                                        <p class="font-size-14 mb-0">10+ Modules</p>
                                        <ul class="ps-0 times-date-list">
                                            <li><i class="ri-calendar-2-line"></i> <span>Sep 5, 2022
                                                </span> </li>
                                            <li><i class="ri-time-line"></i> <span>09:00 - 10:00 am
                                                </span> </li>
                                        </ul>
                                    </div>
                                    <div class="text-end">
                                        <p class="d-block mb-0">Confirmed</p>
                                        <span class="badge bg-success">Reschedule</span>
                                    </div>
                                </li>
                                <li class="upcoming-lesson-items">
                                    <div>
                                        <h4 class="font-size-18">Lessons 30</h4>
                                        <p class="font-size-14 mb-0">10+ Modules</p>
                                        <ul class="ps-0 times-date-list">
                                            <li><i class="ri-calendar-2-line"></i> <span>Sep 5, 2022
                                                </span> </li>
                                            <li><i class="ri-time-line"></i> <span>09:00 - 10:00 am
                                                </span> </li>
                                        </ul>
                                    </div>
                                    <div class="text-end">
                                        <p class="d-block mb-0">Confirmed</p>
                                        <span class="badge bg-success">Reschedule</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center mb-4 justify-content-center">
                                <h4 class="card-title font-size-20">Overall Pass Percentage</h4>
                            </div>
                            <div class="text-center pb-4">
                                <canvas id="doughnut" height="190"></canvas>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title font-size-20 mb-4">Teaching Activity</h4>
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <h5 class="mb-0 font-size-20">25610</h5>
                                <p class="text-muted">Activated</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center">
                                <h5 class="mb-0 font-size-20">56210</h5>
                                <p class="text-muted">Pending</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center">
                                <h5 class="mb-0 font-size-20">12485</h5>
                                <p class="text-muted">Deactivated</p>
                            </div>
                        </div>
                    </div>
                    <div id="morris-line-example" class="morris-charts morris-chart-height" dir="ltr"></div>
                </div>
            </div>
        </div>
        <div class="col-xl-4 col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4 justify-content-between">
                        <h4 class="card-title font-size-20">Upcoming Events</h4>
                    </div>
                    <ul class="course-listed">
                        <li>
                            <div class="course-items">
                                <div class="left">
                                    <div class="ic-names">
                                        <p>C</p>
                                    </div>
                                    <div class="course-names">
                                        <h5 class="font-size-18 card-title">Justine Marshall</h5>
                                        <p class="font-size-14">Invited: Andrea Smith, Jelena Denisova</p>
                                    </div>
                                </div>
                                <div class="right">
                                    <p class="font-size-14 mb-0">20 Dec 2022</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-items">
                                <div class="left">
                                    <div class="ic-names"><img src="http://mc-dns.test/admin/images/users/avatar-1.jpg"
                                            alt="" class="img-fluid"></div>
                                    <div class="course-names">
                                        <h5 class="font-size-18 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">Invited: Andrea Smith, Jelena Denisova</p>
                                    </div>
                                </div>
                                <div class="right">
                                    <p class="font-size-14 mb-0">17 Dec 2022</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-items">
                                <div class="left">
                                    <div class="ic-names"><img src="http://mc-dns.test/admin/images/users/avatar-2.jpg"
                                            alt="" class="img-fluid"></div>
                                    <div class="course-names">
                                        <h5 class="font-size-18 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">Invited: Andrea Smith, Jelena Denisova</p>
                                    </div>
                                </div>
                                <div class="right">
                                    <p class="font-size-14 mb-0">17 Dec 2022</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-items">
                                <div class="left">
                                    <div class="ic-names"><img src="http://mc-dns.test/admin/images/users/avatar-3.jpg"
                                            alt="" class="img-fluid"></div>
                                    <div class="course-names">
                                        <h5 class="font-size-18 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">Invited: Andrea Smith, Jelena Denisova</p>
                                    </div>
                                </div>
                                <div class="right">
                                    <p class="font-size-14 mb-0">Today</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-items">
                                <div class="left">
                                    <div class="ic-names"><img src="http://mc-dns.test/admin/images/users/avatar-3.jpg"
                                            alt="" class="img-fluid"></div>
                                    <div class="course-names">
                                        <h5 class="font-size-18 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">Invited: Andrea Smith, Jelena Denisova</p>
                                    </div>
                                </div>
                                <div class="right">
                                    <p class="font-size-14 mb-0">Today</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-items">
                                <div class="left">
                                    <div class="ic-names"><img src="http://mc-dns.test/admin/images/users/avatar-3.jpg"
                                            alt="" class="img-fluid"></div>
                                    <div class="course-names">
                                        <h5 class="font-size-18 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">Invited: Andrea Smith, Jelena Denisova</p>
                                    </div>
                                </div>
                                <div class="right">
                                    <p class="font-size-14 mb-0">Today</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <button class="btn btn-primary btn-lg w-100 mt-3">View All</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-5">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4 justify-content-between">
                        <h4 class="card-title font-size-20">Teaching History</h4>
                    </div>
                    <ol class="activity-feed">
                        <li class="feed-item">
                            <div class="feed-item-list"><span class="date">Jan 22</span> <span
                                    class="activity-text">Responded to need “Volunteer
                                    Activities”</span></div>
                        </li>
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <span class="date">Jan 20</span>
                                <span class="activity-text">At
                                    vero eos et accusamus et iusto odio
                                    dignissimos ducimus qui deleniti atque...<a href="#" class="text-success">Read
                                        more</a>
                                </span>
                            </div>
                        </li>
                        <li class="feed-item">
                            <div class="feed-item-list"><span class="date">Jan 20</span> <span class="activity-text">At
                                    vero eos et accusamus et iusto odio
                                    dignissimos ducimus qui deleniti atque...<a href="#" class="text-success">Read
                                        more</a></span></div>
                        </li>
                    </ol>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary">Load More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-7">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title font-size-20 mb-4">Students List</h4>
                    <div class="table-responsive">
                        <table class="table table-hover table-centered table-nowrap mb-0">
                            <thead>
                                <tr>
                                    <th scope="col">(#) Id</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Date</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col" colspan="2">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <th scope="row">#14257</th>
                                    <td>
                                        <div><img src="http://mc-dns.test/admin/images/users/user-3.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Brent Shipley
                                        </div>
                                    </td>
                                    <td>16/1/2019</td>
                                    <td>$112</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                        <div><a href="#" class="btn btn-primary btn-sm">Edit</a></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14258</th>
                                    <td>
                                        <div><img src="http://mc-dns.test/admin/images/users/user-4.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Robert Sitton
                                        </div>
                                    </td>
                                    <td>17/1/2019</td>
                                    <td>$116</td>
                                    <td><span class="badge bg-success">Delivered</span></td>
                                    <td>
                                        <div><a href="#" class="btn btn-primary btn-sm">Edit</a></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14259</th>
                                    <td>
                                        <div><img src="http://mc-dns.test/admin/images/users/user-5.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Alberto Jackson
                                        </div>
                                    </td>
                                    <td>18/1/2019</td>
                                    <td>$109</td>
                                    <td><span class="badge bg-danger">Cancel</span></td>
                                    <td>
                                        <div><a href="#" class="btn btn-primary btn-sm">Edit</a></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14260</th>
                                    <td>
                                        <div><img src="http://mc-dns.test/admin/images/users/user-6.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> David Sanchez
                                        </div>
                                    </td>
                                    <td>19/1/2019</td>
                                    <td>$120</td>
                                    <td><span class="badge bg-success">Delivered</span></td>
                                    <td>
                                        <div><a href="#" class="btn btn-success btn-sm">Edit</a></div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    @include('includes.styles.datatable')
@endpush



@push('scripts')
    <!-- Chart JS -->
    <script src="{{ asset('admin/libs/chart.js/Chart.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/js/pages/chartjs.init.js') }}"></script>
    <!--Morris Chart-->
    <script src="{{ asset('/admin') }}/libs/morris.js/morris.min.js"></script>
    <script src="{{ asset('/admin') }}/libs/raphael/raphael.min.js"></script>
    <!-- Init js -->
    <script src="{{ asset('/admin') }}/js/pages/morris.init.js"></script>
@endpush
