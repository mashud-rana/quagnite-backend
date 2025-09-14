@extends('admin.layouts.master')


@section('content')
    <div class="row">
        <div class="col-xl-3 col-md-6">
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
        <div class="col-xl-3 col-md-6">
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
        <div class="col-xl-3 col-md-6">
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
        <div class="col-xl-3 col-md-6">
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
                        <h4 class="card-title font-size-20">Today’s Lesson</h4> <a href="#" class="font-size-16">All
                            Course</a>
                    </div>
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-xxl-9 col-xl-9">
                            <div class="ic-todays-lesson">
                                <div class="ic-todays-contents">
                                    <input class="knob" data-width="150" data-height="150" data-linecap=round
                                        data-fgColor="#11849E" value="80" data-skin="tron" data-angleOffset="180"
                                        data-readOnly=true data-thickness=".1" />
                                </div>
                                <ul>
                                    <li>
                                        <div class="lesson-icons">
                                            <i class="ri-computer-line"></i>
                                        </div>
                                        <div>
                                            <p class="font-size-14">Class</p>
                                            <h5 class="font-size-16">Cloud computing</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="lesson-icons">
                                            <i class="ri-briefcase-line"></i>
                                        </div>
                                        <div>
                                            <p class="font-size-14">Asignment</p>
                                            <h5 class="font-size-16">5 Asignment</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="lesson-icons">
                                            <i class="ri-book-open-line"></i>
                                        </div>
                                        <div>
                                            <p class="font-size-14">Lesson</p>
                                            <h5 class="font-size-16">5 Lesson</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="lesson-icons">
                                            <i class="ri-user-voice-line"></i>
                                        </div>
                                        <div>
                                            <p class="font-size-14">Staff</p>
                                            <h5 class="font-size-16">Michael David</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="lesson-icons">
                                            <i class="ri-time-line"></i>
                                        </div>
                                        <div>
                                            <p class="font-size-14">Time</p>
                                            <h5 class="font-size-16">09:00 - 10:00 am</h5>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="lesson-icons">
                                            <i class="ri-book-line"></i>
                                        </div>
                                        <div>
                                            <p class="font-size-14">Lesson Learned</p>
                                            <h5 class="font-size-16">10/50</h5>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-12 col-xxl-3 col-xl-3">
                            <div class="ic-lesson-btn">
                                <div>
                                    <a href="#" class="btn btn-secondary btn-lg font-size-14">Skip</a>
                                </div>
                                <div>
                                    <a href="#" class="btn btn-primary btn-lg font-size-14">Continue</a>
                                </div>
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
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Teaching History</h4>
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
                </div>
            </div>
        </div>
        <div class="col-xl-4">
            <div class="card">
                <div class="card-body">
                    <div class="d-flex align-items-center mb-4 justify-content-between">
                        <h4 class="card-title font-size-20">Event</h4>
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
                    <button class="btn btn-primary btn-lg w-100">View All</button>
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="{{ asset('/admin/libs/jquery-knob/jquery.knob.min.js') }}"></script>
    <!--Morris Chart-->
    <script src="{{ asset('/admin') }}/libs/morris.js/morris.min.js"></script>
    <script src="{{ asset('/admin') }}/libs/raphael/raphael.min.js"></script>
    <!-- Init js -->
    <script src="{{ asset('/admin') }}/js/pages/morris.init.js"></script>
    <script>
        $(function() {
            // $(".knob").knob()
            $('.knob').knob({
                'format': function(value) {
                    return value + '%';
                }
            });
        });
    </script>
@endpush
