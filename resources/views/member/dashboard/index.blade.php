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
        <div class="col-xl-8">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4 justify-content-between">
                        <h4 class="card-title font-size-20">Yearly Progressed</h4>
                    </div>

                    <div class="row justify-content-center">
                        <div class="col-sm-4">
                            <div class="text-center">
                                <h5 class="mb-0 font-size-20">86541</h5>
                                <p class="text-muted">Activated</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center">
                                <h5 class="mb-0 font-size-20">2541</h5>
                                <p class="text-muted">Pending</p>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="text-center">
                                <h5 class="mb-0 font-size-20">102030</h5>
                                <p class="text-muted">Deactivated</p>
                            </div>
                        </div>
                    </div>
                    <div id="morris-line-example" class="morris-charts morris-chart-height" dir="ltr"></div>
                    {{-- <div id="morris-area-example" class="morris-charts morris-chart-height" dir="ltr"></div> --}}
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4 justify-content-between">
                        <h4 class="card-title font-size-20">Notifications</h4>
                    </div>
                    <ul class="course-listed member-notifications">
                        <li>
                            <div class="course-items p-0 shadow-none border-0">
                                <div class="left">
                                    <div class="ic-names rounded-circle"><img
                                            src="http://mc-dns.test/admin/images/users/avatar-3.jpg" alt=""
                                            class="img-fluid"></div>
                                    <div class="course-names">
                                        <h5 class="font-size-16 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">Invited: Andrea Smith, Jelena Denisova</p>
                                    </div>
                                </div>
                                <div class="right flex-column gap-0">
                                    <a href="#"><i class="ri-close-line"></i></a>
                                    <p class="font-size-14 mb-0">02:14</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-items p-0 shadow-none border-0">
                                <div class="left">
                                    <div class="ic-names rounded-circle"><img
                                            src="http://mc-dns.test/admin/images/users/avatar-3.jpg" alt=""
                                            class="img-fluid"></div>
                                    <div class="course-names">
                                        <h5 class="font-size-16 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">Invited: Andrea Smith, Jelena Denisova</p>
                                    </div>
                                </div>
                                <div class="right flex-column gap-0">
                                    <a href="#"><i class="ri-close-line"></i></a>
                                    <p class="font-size-14 mb-0">02:14</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-items p-0 shadow-none border-0">
                                <div class="left">
                                    <div class="ic-names rounded-circle"><img
                                            src="http://mc-dns.test/admin/images/users/avatar-3.jpg" alt=""
                                            class="img-fluid"></div>
                                    <div class="course-names">
                                        <h5 class="font-size-16 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">Invited: Andrea Smith, Jelena Denisova</p>
                                    </div>
                                </div>
                                <div class="right flex-column gap-0">
                                    <a href="#"><i class="ri-close-line"></i></a>
                                    <p class="font-size-14 mb-0">02:14</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-items p-0 shadow-none border-0">
                                <div class="left">
                                    <div class="ic-names rounded-circle"><img
                                            src="http://mc-dns.test/admin/images/users/avatar-3.jpg" alt=""
                                            class="img-fluid"></div>
                                    <div class="course-names">
                                        <h5 class="font-size-16 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">Invited: Andrea Smith, Jelena Denisova</p>
                                    </div>
                                </div>
                                <div class="right flex-column gap-0">
                                    <a href="#"><i class="ri-close-line"></i></a>
                                    <p class="font-size-14 mb-0">02:14</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-items p-0 shadow-none border-0">
                                <div class="left">
                                    <div class="ic-names rounded-circle"><img
                                            src="http://mc-dns.test/admin/images/users/avatar-3.jpg" alt=""
                                            class="img-fluid"></div>
                                    <div class="course-names">
                                        <h5 class="font-size-16 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">Invited: Andrea Smith, Jelena Denisova</p>
                                    </div>
                                </div>
                                <div class="right flex-column gap-0">
                                    <a href="#"><i class="ri-close-line"></i></a>
                                    <p class="font-size-14 mb-0">02:14</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-items p-0 shadow-none border-0">
                                <div class="left">
                                    <div class="ic-names rounded-circle"><img
                                            src="http://mc-dns.test/admin/images/users/avatar-3.jpg" alt=""
                                            class="img-fluid"></div>
                                    <div class="course-names">
                                        <h5 class="font-size-16 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">Invited: Andrea Smith, Jelena Denisova</p>
                                    </div>
                                </div>
                                <div class="right flex-column gap-0">
                                    <a href="#"><i class="ri-close-line"></i></a>
                                    <p class="font-size-14 mb-0">02:14</p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-5 col-xxl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4 justify-content-between">
                        <h4 class="card-title font-size-20">Popular course</h4> <a href="#"
                            class="font-size-16">All Course</a>
                    </div>
                    <ul class="course-listed member-popular-list">
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
                                <div class="right"><a href="#" class="view-course">View Courses</a>
                                    <div class="btn-group dropstart">
                                        <a href="#" type="button" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle"><i
                                                class="ion ion-md-more"></i>
                                        </a>
                                        <div class="dropdown-menu"><a href="#" class="dropdown-item">Action</a> <a
                                                href="#" class="dropdown-item">Another action</a> <a href="#"
                                                class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div> <a href="#"
                                                class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
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
                                <div class="right"><a href="#" class="view-course">View Courses</a>
                                    <div class="btn-group dropstart">
                                        <a href="#" type="button" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle"><i
                                                class="ion ion-md-more"></i>
                                        </a>
                                        <div class="dropdown-menu"><a href="#" class="dropdown-item">Action</a> <a
                                                href="#" class="dropdown-item">Another action</a> <a href="#"
                                                class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div> <a href="#"
                                                class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-items">
                                <div class="left">
                                    <div class="ic-names" style="background-color: rgb(242, 66, 109);">
                                        <p>P</p>
                                    </div>
                                    <div class="course-names">
                                        <h5 class="font-size-18 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">10+ Modules</p>
                                    </div>
                                </div>
                                <div class="right"><a href="#" class="view-course">View Courses</a>
                                    <div class="btn-group dropstart">
                                        <a href="#" type="button" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle"><i
                                                class="ion ion-md-more"></i>
                                        </a>
                                        <div class="dropdown-menu"><a href="#" class="dropdown-item">Action</a> <a
                                                href="#" class="dropdown-item">Another action</a> <a href="#"
                                                class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div> <a href="#"
                                                class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-items">
                                <div class="left">
                                    <div class="ic-names" style="background-color: rgb(1, 159, 248);">
                                        <p>C</p>
                                    </div>
                                    <div class="course-names">
                                        <h5 class="font-size-18 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">10+ Modules</p>
                                    </div>
                                </div>
                                <div class="right"><a href="#" class="view-course">View Courses</a>
                                    <div class="btn-group dropstart">
                                        <a href="#" type="button" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle"><i
                                                class="ion ion-md-more"></i>
                                        </a>
                                        <div class="dropdown-menu"><a href="#" class="dropdown-item">Action</a> <a
                                                href="#" class="dropdown-item">Another action</a> <a href="#"
                                                class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div> <a href="#"
                                                class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="course-items">
                                <div class="left">
                                    <div class="ic-names" style="background-color: rgb(88, 186, 171);">
                                        <p>C</p>
                                    </div>
                                    <div class="course-names">
                                        <h5 class="font-size-18 card-title">Cloud Computing</h5>
                                        <p class="font-size-14">10+ Modules</p>
                                    </div>
                                </div>
                                <div class="right"><a href="#" class="view-course">View Courses</a>
                                    <div class="btn-group dropstart">
                                        <a href="#" type="button" id="dropdownMenuButton"
                                            data-bs-toggle="dropdown" aria-expanded="false" class="dropdown-toggle"><i
                                                class="ion ion-md-more"></i>
                                        </a>
                                        <div class="dropdown-menu"><a href="#" class="dropdown-item">Action</a> <a
                                                href="#" class="dropdown-item">Another action</a> <a href="#"
                                                class="dropdown-item">Something else here</a>
                                            <div class="dropdown-divider"></div> <a href="#"
                                                class="dropdown-item">Separated link</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-xl-7 col-xxl-8">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title font-size-20 mb-4">Teachers List</h4>
                    <div class="table-responsive member-table-height">
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
                                        <div><img src="http://mc-dns.test/admin/images/users/user-2.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Philip Smead
                                        </div>
                                    </td>
                                    <td>15/1/2018</td>
                                    <td>$94</td>
                                    <td><span class="badge bg-success">Delivered</span></td>
                                    <td>
                                        <div><a href="#" class="btn btn-primary btn-sm">Edit</a></div>
                                    </td>
                                </tr>
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
                                        <div><a href="#" class="btn btn-primary btn-sm">Edit</a></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14261</th>
                                    <td>
                                        <div><img src="http://mc-dns.test/admin/images/users/user-2.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Philip Smead
                                        </div>
                                    </td>
                                    <td>15/1/2018</td>
                                    <td>$94</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                        <div><a href="#" class="btn btn-primary btn-sm">Edit</a></div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope="row">#14261</th>
                                    <td>
                                        <div><img src="http://mc-dns.test/admin/images/users/user-2.jpg" alt=""
                                                class="avatar-xs rounded-circle me-2"> Philip Smead
                                        </div>
                                    </td>
                                    <td>15/1/2018</td>
                                    <td>$94</td>
                                    <td><span class="badge bg-warning">Pending</span></td>
                                    <td>
                                        <div><a href="#" class="btn btn-primary btn-sm">Edit</a></div>
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
    <!--Morris Chart-->
    <script src="{{ asset('/admin') }}/libs/morris.js/morris.min.js"></script>
    <script src="{{ asset('/admin') }}/libs/raphael/raphael.min.js"></script>
    <!-- Init js -->
    <script src="{{ asset('/admin') }}/js/pages/morris.init.js"></script>
@endpush
