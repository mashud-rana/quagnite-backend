@extends('admin.layouts.master')


@section('content')
    {{-- dashboard card start --}}
    <div class="row">
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body ic-card">
                    <div class="ic-dImg me-2 me-xxl-3">
                        <img src="{{ asset('/admin') }}/images/services-icon/total-student.png" alt="">
                    </div>
                    <div class="ic-content">
                        <p class="font-size-16 mb-0">Total Student</p>
                        <p class="font-size-22 mb-0">{{ $studentCount }}</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="font-size-14 mb-0">0% Increase in 15 days</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body ic-card">
                    <div class="ic-dImg me-2 me-xxl-3">
                        <img src="{{ asset('/admin') }}/images/services-icon/new-student.png" alt="">
                    </div>
                    <div class="ic-content">
                        <p class="font-size-16 mb-0">New Student</p>
                        <p class="font-size-22 mb-0">{{ $newStudentCount }}</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="font-size-14 mb-0">0% Increase in 15 days</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body ic-card">
                    <div class="ic-dImg me-2 me-xxl-3">
                        <img src="{{ asset('/admin') }}/images/services-icon/course-complete.png" alt="">
                    </div>
                    <div class="ic-content">
                        <p class="font-size-16 mb-0">Total Courses</p>
                        <p class="font-size-22 mb-0">{{ $coursesCount }}</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="font-size-14 mb-0">0% Increase in 15 days</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6">
            <div class="card">
                <div class="card-body ic-card">
                    <div class="ic-dImg me-2 me-xxl-3">
                        <img src="{{ asset('/admin') }}/images/services-icon/free-collection.png" alt="">
                    </div>
                    <div class="ic-content">
                        <p class="font-size-16 mb-0">Fees Collection</p>
                        <p class="font-size-22 mb-0"><i class="fas fa-dollar-sign"></i> 0</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="25"
                                aria-valuemin="0" aria-valuemax="100"></div>
                        </div>
                        <p class="font-size-14 mb-0">0% Increase in 15 days</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- dashboard card end --}}
    {{-- <div class="row">
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title font-size-20 mb-4">Line Chart</h4>
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
        </div> <!-- end col -->
        <div class="col-lg-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title font-size-20 mb-4">Bar Chart</h4>
                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <h5 class="mb-0 font-size-20">6,95,412</h5>
                                <p class="text-muted">Activated</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center">
                                <h5 class="mb-0 font-size-20">1,63,542</h5>
                                <p class="text-muted">Pending</p>
                            </div>
                        </div>
                    </div>
                    <div id="morris-bar-example" class="morris-charts morris-chart-height" dir="ltr"></div>
                </div>
            </div>
        </div> <!-- end col -->
    </div> --}}
    {{-- <div class="row">
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4 justify-content-between">
                        <h4 class="card-title font-size-20">Popular course</h4>
                        <a href="#" class="font-size-16">All Course</a>
                    </div>
                    <ul class="course-listed admin-courses-list">
                        <li>
                            <div class="course-items">
                                <div class="left">
                                    <div class="ic-names">
                                        <p>C</p>
                                    </div>
                                    <div class="course-names">
                                        <h5 class="font-size-18 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">10+ Modules</p>
                                    </div>
                                </div>
                                <div class="right">
                                    <a href="#" class="view-course">View Courses</a>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" type="button" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ion ion-md-more"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-items">
                                <div class="left">
                                    <div class="ic-names" style="background-color: #F2426D">
                                        <p>P</p>
                                    </div>
                                    <div class="course-names">
                                        <h5 class="font-size-18 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">10+ Modules</p>
                                    </div>
                                </div>
                                <div class="right">
                                    <a href="#" class="view-course">View Courses</a>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" type="button" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ion ion-md-more"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-items">
                                <div class="left">
                                    <div class="ic-names" style="background-color: #019FF8">
                                        <p>C</p>
                                    </div>
                                    <div class="course-names">
                                        <h5 class="font-size-18 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">10+ Modules</p>
                                    </div>
                                </div>
                                <div class="right">
                                    <a href="#" class="view-course">View Courses</a>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" type="button" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ion ion-md-more"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-items">
                                <div class="left">
                                    <div class="ic-names" style="background-color: #58BAAB">
                                        <p>C</p>
                                    </div>
                                    <div class="course-names">
                                        <h5 class="font-size-18 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">10+ Modules</p>
                                    </div>
                                </div>
                                <div class="right">
                                    <a href="#" class="view-course">View Courses</a>
                                    <div class="dropdown">
                                        <a href="#" class="dropdown-toggle" type="button" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            <i class="ion ion-md-more"></i>
                                        </a>
                                        <div class="dropdown-menu">
                                            <a class="dropdown-item" href="#">Action</a>
                                            <a class="dropdown-item" href="#">Another action</a>
                                            <a class="dropdown-item" href="#">Something else here</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="#">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title font-size-20 mb-4">Teachers List</h4>
                    <div class="table-responsive admin-courses-list">
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
                                    <th scope="row">#14256</th>
                                    <td>
                                        <div>
                                            <img src="{{ asset('/admin') }}/images/users/user-2.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Philip Smead
                                        </div>
                                    </td>
                                    <td>15/1/2018</td>
                                    <td>$94</td>
                                    <td><span class="badge bg-success">Delivered</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14257</th>
                                    <td>
                                        <div>
                                            <img src="{{ asset('/admin') }}/images/users/user-3.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Brent Shipley
                                        </div>
                                    </td>
                                    <td>16/1/2019</td>
                                    <td>$112</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14258</th>
                                    <td>
                                        <div>
                                            <img src="{{ asset('/admin') }}/images/users/user-4.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Robert Sitton
                                        </div>
                                    </td>
                                    <td>17/1/2019</td>
                                    <td>$116</td>
                                    <td><span class="badge bg-success">Delivered</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14259</th>
                                    <td>
                                        <div>
                                            <img src="{{ asset('/admin') }}/images/users/user-5.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Alberto Jackson
                                        </div>
                                    </td>
                                    <td>18/1/2019</td>
                                    <td>$109</td>
                                    <td><span class="badge bg-danger">Cancel</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14260</th>
                                    <td>
                                        <div>
                                            <img src="{{ asset('/admin') }}/images/users/user-6.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> David Sanchez
                                        </div>
                                    </td>
                                    <td>19/1/2019</td>
                                    <td>$120</td>
                                    <td><span class="badge bg-success">Delivered</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14261</th>
                                    <td>
                                        <div>
                                            <img src="{{ asset('/admin') }}/images/users/user-2.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Philip Smead
                                        </div>
                                    </td>
                                    <td>15/1/2018</td>
                                    <td>$94</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14261</th>
                                    <td>
                                        <div>
                                            <img src="{{ asset('/admin') }}/images/users/user-2.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Philip Smead
                                        </div>
                                    </td>
                                    <td>15/1/2018</td>
                                    <td>$94</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Coach Activity</h4>
                    <ol class="activity-feed admin-courses-list">
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <span class="date">Jan 22</span>
                                <span class="activity-text">Responded to need “Volunteer
                                    Activities”</span>
                            </div>
                        </li>
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <span class="date">Jan 20</span>
                                <span class="activity-text">At vero eos et accusamus et iusto odio
                                    dignissimos ducimus qui deleniti atque...<a href="#" class="text-success">Read
                                        more</a></span>
                            </div>
                        </li>
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <span class="date">Jan 20</span>
                                <span class="activity-text">At vero eos et accusamus et iusto odio
                                    dignissimos ducimus qui deleniti atque...<a href="#" class="text-success">Read
                                        more</a></span>
                            </div>
                        </li>
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <span class="date">Jan 20</span>
                                <span class="activity-text">At vero eos et accusamus et iusto odio
                                    dignissimos ducimus qui deleniti atque...<a href="#" class="text-success">Read
                                        more</a></span>
                            </div>
                        </li>
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <span class="date">Jan 19</span>
                                <span class="activity-text">Joined the group “Boardsmanship
                                    Forum”</span>
                            </div>
                        </li>
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <span class="date">Jan 17</span>
                                <span class="activity-text">Responded to need “In-Kind
                                    Opportunity”</span>
                            </div>
                        </li>
                        <li class="feed-item">
                            <div class="feed-item-list">
                                <span class="date">Jan 16</span>
                                <span class="activity-text">Sed ut perspiciatis unde omnis iste natus
                                    error sit rem.</span>
                            </div>
                        </li>
                    </ol>
                    <div class="text-center">
                        <a href="#" class="btn btn-primary">Load More</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-6">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4 justify-content-between">
                        <h4 class="card-title font-size-20">Event</h4>
                    </div>
                    <ul class="course-listed admin-courses-list">
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
                                    <div class="ic-names">
                                        <img src="{{ asset('/admin') }}/images/users/avatar-1.jpg" class="img-fluid"
                                            alt="">
                                    </div>
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
                                    <div class="ic-names">
                                        <img src="{{ asset('/admin') }}/images/users/avatar-2.jpg" class="img-fluid"
                                            alt="">
                                    </div>
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
                                    <div class="ic-names">
                                        <img src="{{ asset('/admin') }}/images/users/avatar-3.jpg" class="img-fluid"
                                            alt="">
                                    </div>
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
                    <button class="btn btn-primary btn-lg w-100 mt-4">View All</button>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-8">
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
                                        <div>
                                            <img src="{{ asset('/admin') }}/images/users/user-3.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Brent Shipley
                                        </div>
                                    </td>
                                    <td>16/1/2019</td>
                                    <td>$112</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14258</th>
                                    <td>
                                        <div>
                                            <img src="{{ asset('/admin') }}/images/users/user-4.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Robert Sitton
                                        </div>
                                    </td>
                                    <td>17/1/2019</td>
                                    <td>$116</td>
                                    <td><span class="badge bg-success">Delivered</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14259</th>
                                    <td>
                                        <div>
                                            <img src="{{ asset('/admin') }}/images/users/user-5.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Alberto Jackson
                                        </div>
                                    </td>
                                    <td>18/1/2019</td>
                                    <td>$109</td>
                                    <td><span class="badge bg-danger">Cancel</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14260</th>
                                    <td>
                                        <div>
                                            <img src="{{ asset('/admin') }}/images/users/user-6.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> David Sanchez
                                        </div>
                                    </td>
                                    <td>19/1/2019</td>
                                    <td>$120</td>
                                    <td><span class="badge bg-success">Delivered</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14261</th>
                                    <td>
                                        <div>
                                            <img src="{{ asset('/admin') }}/images/users/user-2.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Philip Smead
                                        </div>
                                    </td>
                                    <td>15/1/2018</td>
                                    <td>$94</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14261</th>
                                    <td>
                                        <div>
                                            <img src="{{ asset('/admin') }}/images/users/user-2.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Philip Smead
                                        </div>
                                    </td>
                                    <td>15/1/2018</td>
                                    <td>$94</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                        <div>
                                            <a href="#" class="btn btn-primary btn-sm">Edit</a>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Chat</h4>
                    <div class="chat-conversation">
                        <ul class="conversation-list" data-simplebar="init" style="max-height: 367px;">
                            <div class="simplebar-wrapper" style="margin: 0px -10px;">
                                <div class="simplebar-height-auto-observer-wrapper">
                                    <div class="simplebar-height-auto-observer"></div>
                                </div>
                                <div class="simplebar-mask">
                                    <div class="simplebar-offset" style="right: -17px; bottom: 0px;">
                                        <div class="simplebar-content-wrapper"
                                            style="height: auto; overflow: hidden scroll;">
                                            <div class="simplebar-content" style="padding: 0px 10px;">
                                                <li class="clearfix">
                                                    <div class="chat-avatar">
                                                        <img src="{{ asset('/admin') }}/images/users/user-2.jpg"
                                                            class="avatar-xs rounded-circle" alt="male">
                                                        <span class="time">10:00</span>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <span class="user-name">John Deo</span>
                                                            <p>
                                                                Hello!
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix odd">
                                                    <div class="chat-avatar">
                                                        <img src="{{ asset('/admin') }}/images/users/user-3.jpg"
                                                            class="avatar-xs rounded-circle" alt="Female">
                                                        <span class="time">10:01</span>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <span class="user-name">Smith</span>
                                                            <p>
                                                                Hi, How are you? What about our next meeting?
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix">
                                                    <div class="chat-avatar">
                                                        <img src="{{ asset('/admin') }}/images/users/user-2.jpg"
                                                            class="avatar-xs rounded-circle" alt="male">
                                                        <span class="time">10:04</span>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <span class="user-name">John Deo</span>
                                                            <p>
                                                                Yeah everything is fine
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix odd">
                                                    <div class="chat-avatar">
                                                        <img src="{{ asset('/admin') }}/images/users/user-3.jpg"
                                                            class="avatar-xs rounded-circle" alt="male">
                                                        <span class="time">10:05</span>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <span class="user-name">Smith</span>
                                                            <p>
                                                                Wow that's great
                                                            </p>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="clearfix odd">
                                                    <div class="chat-avatar">
                                                        <img src="{{ asset('/admin') }}/images/users/user-3.jpg"
                                                            class="avatar-xs rounded-circle" alt="male">
                                                        <span class="time">10:08</span>
                                                    </div>
                                                    <div class="conversation-text">
                                                        <div class="ctext-wrap">
                                                            <span class="user-name mb-2">Smith</span>

                                                            <img src="{{ asset('/admin') }}/images/small/img-1.jpg"
                                                                alt="" height="48" class="rounded me-2">
                                                            <img src="{{ asset('/admin') }}/images/small/img-2.jpg"
                                                                alt="" height="48" class="rounded">
                                                        </div>
                                                    </div>
                                                </li>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="simplebar-placeholder" style="width: auto; height: 460px;"></div>
                            </div>
                            <div class="simplebar-track simplebar-horizontal" style="visibility: hidden;">
                                <div class="simplebar-scrollbar"
                                    style="transform: translate3d(0px, 0px, 0px); display: none;"></div>
                            </div>
                            <div class="simplebar-track simplebar-vertical" style="visibility: visible;">
                                <div class="simplebar-scrollbar"
                                    style="height: 292px; transform: translate3d(0px, 0px, 0px); display: block;"></div>
                            </div>
                        </ul>
                        <div class="row">
                            <div class="col-sm-9 col-8 chat-inputbar">
                                <input type="text" class="form-control chat-input" placeholder="Enter your text">
                            </div>
                            <div class="col-sm-3 col-4 chat-send">
                                <div class="d-grid">
                                    <button type="submit" class="btn btn-success">Send</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
@endsection

@push('styles')
    @include('includes.styles.datatable')
@endpush



@push('scripts')
    <!-- Chart JS -->
    {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script> --}}
    <!--Morris Chart-->
    <script src="{{ asset('/admin') }}/libs/morris.js/morris.min.js"></script>
    <script src="{{ asset('/admin') }}/libs/raphael/raphael.min.js"></script>

    <!-- Init js -->
    <script src="{{ asset('/admin') }}/js/pages/morris.init.js"></script>
@endpush
