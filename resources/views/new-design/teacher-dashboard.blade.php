@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            {{-- header --}}
            <div class="ic-dashboard__header">
                <div class="ic-dashboard__avatar">
                    <img src="{{ asset('new-frontend/images/users-avatar.png') }}" alt="">
                </div>
                <div>
                    <h3 class="black">Hi Josh!</h3>
                    <span class="primary">Welcome to your <span class="color-deep-gray">Dashboard</span></span>

                    <p class="color-deep-gray fs-14">27th February 2023 , Monday</p>
                </div>
            </div>
            {{-- header --}}

            {{-- widget --}}
            <div class="row g-3">
                <div class="col-lg-4 col-md-6">
                    <div class="ic-twidget__card"
                        style="background-image: linear-gradient(0deg, rgba(21, 141, 167, 0.9), rgba(21, 141, 167, 0.9)), url('{{ asset('new-frontend/images/teacher/teacher-dash-items.png') }}')">
                        <div class="ic-t-icons">
                            <img src="{{ asset('new-frontend/images/teacher/total-s.png') }}" alt="">
                        </div>
                        <div class="ic-twidget-content">
                            <h3 class="fw-700 fs-24 white mb-2">Total Enroll <span class="fs-16 fw-400">(Students)</span>
                            </h3>
                            <h3 class="fs-20 white pb-3">2000</h3>
                            <a href="#" class="ic-twidget__btn">All Student <i class="ri-arrow-right-s-line"></i></a>
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
                            <a href="#" class="ic-twidget__btn">Get Ticket <i class="ri-arrow-right-s-line"></i></a>
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
                            <a href="#" class="ic-twidget__btn">See Course <i class="ri-arrow-right-s-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            {{-- widget --}}

            {{-- added course --}}
            <div class="ic-recently-added mt-30">
                <div class="ic-teacher-dash-heading">
                    <h3 class="fs-28 fw-600 black">Recently Added Courses</h3>
                    <div class="ic-dashboard-heading-right">
                        <select name="" id="" class="selectpicker">
                            <option value="0">Courses</option>
                            <option value="0">Courses 1</option>
                            <option value="0">sani 2 jaksd fjasdf jasdhf jasdfh kjasfh asdfkj haskfhals</option>
                        </select>
                        <a href="#" class="ic-btn">View All <i class="ri-arrow-right-line"></i></a>
                    </div>
                </div>
                {{-- coursees --}}
                <div class="ic-teacher-course">
                    <div class="row g-4">
                        <div class="col-xxl-6 col-xl-6 col-lg-12">
                            <div class="ic-teacher-course-items">
                                <div class="course-items-img position-relative">
                                    <img src="{{ asset('new-frontend/images/teacher/course-items-img.png') }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="course-items-content">
                                    <ul>
                                        <li>
                                            <i class="ri-movie-line"></i>
                                            <span>Video (0)</span>
                                        </li>
                                        <li>
                                            <i class="ri-time-line"></i>
                                            <span>Duration (0)</span>
                                        </li>
                                        <li>
                                            <i class="ri-user-6-line"></i>
                                            <span>Enrolled (0)</span>
                                        </li>
                                    </ul>
                                    <p class="course-title fw-500 fs-20 black">Complete Python Developer in 2023 : Zero to
                                        Mastery</p>
                                    <p class="review-scrore">4.82
                                        <span class="t-star ">
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                        </span>
                                        <span class="review-count">(94 reviews)</span>
                                    </p>
                                    <div class="teacher-tags">
                                        <span class="bg-green">Text Exam</span>
                                        <span>Resources</span>
                                    </div>
                                    <div class="ic-eidit-buttons">
                                        <a href="#" class="primary"><i class="ri-edit-line"></i> Edit</a>
                                        <a href="#" class="text-red"><i class="ri-delete-bin-line"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-12">
                            <div class="ic-teacher-course-items">
                                <div class="course-items-img position-relative">
                                    <img src="{{ asset('new-frontend/images/teacher/course-items-img.png') }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="course-items-content">
                                    <ul>
                                        <li>
                                            <i class="ri-movie-line"></i>
                                            <span>Video (0)</span>
                                        </li>
                                        <li>
                                            <i class="ri-time-line"></i>
                                            <span>Duration (0)</span>
                                        </li>
                                        <li>
                                            <i class="ri-user-6-line"></i>
                                            <span>Enrolled (0)</span>
                                        </li>
                                    </ul>
                                    <p class="fw-500 fs-20 black">Complete Python Developer in 2023 : Zero to Mastery</p>
                                    <p class="review-scrore">4.82
                                        <span class="t-star ">
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                        </span>
                                        <span class="review-count">(94 reviews)</span>
                                    </p>
                                    <div class="teacher-tags">
                                        <span class="bg-green">Text Exam</span>
                                        <span>Resources</span>
                                    </div>
                                    <div class="ic-eidit-buttons">
                                        <a href="#" class="primary"><i class="ri-edit-line"></i> Edit</a>
                                        <a href="#" class="text-red"><i class="ri-delete-bin-line"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-12">
                            <div class="ic-teacher-course-items">
                                <div class="course-items-img position-relative">
                                    <img src="{{ asset('new-frontend/images/teacher/course-items-img.png') }}"
                                        class="img-fluid" alt="">
                                </div>
                                <div class="course-items-content">
                                    <ul>
                                        <li>
                                            <i class="ri-movie-line"></i>
                                            <span>Video (0)</span>
                                        </li>
                                        <li>
                                            <i class="ri-time-line"></i>
                                            <span>Duration (0)</span>
                                        </li>
                                        <li>
                                            <i class="ri-user-6-line"></i>
                                            <span>Enrolled (0)</span>
                                        </li>
                                    </ul>
                                    <p class="fw-500 fs-20 black">Complete Python Developer in 2023 : Zero to Mastery</p>
                                    <p class="review-scrore">4.82
                                        <span class="t-star ">
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                            <i class="ri-star-s-fill"></i>
                                        </span>
                                        <span class="review-count">(94 reviews)</span>
                                    </p>
                                    <div class="teacher-tags">
                                        <span class="bg-green">Text Exam</span>
                                        <span>Resources</span>
                                    </div>
                                    <div class="ic-eidit-buttons">
                                        <a href="#" class="primary"><i class="ri-edit-line"></i> Edit</a>
                                        <a href="#" class="text-red"><i class="ri-delete-bin-line"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- added course --}}

            {{-- upload course --}}
            <div class="ic-course-today"
                style="background-image: linear-gradient(0deg, rgba(21, 141, 167, 0.9), rgba(21, 141, 167, 0.9)), url({{ asset('new-frontend/images/upload-course.png') }})">
                <h2 class="white">Upload Your Course Today</h2>
                <a href="#" class="uploadbtn">Upload Now <i class="ri-upload-cloud-line"></i></a>
            </div>
            {{-- upload course --}}

            {{-- student course table --}}
            <div class="ic-student-course-table">
                <div class="ic-recently-added mt-30">
                    <div class="ic-teacher-dash-heading">
                        <h3 class="fs-28 fw-600 black">Those Student Bought This Courses</h3>
                        <div class="ic-dashboard-heading-right">
                            <select name="" id="" class="selectpicker">
                                <option value="0">Courses</option>
                                <option value="0">Courses 1</option>
                                <option value="0">sani 2 jaksd fjasdf jasdhf jasdfh kjasfh asdfkj haskfhals</option>
                            </select>
                            <a href="#" class="ic-btn">View All <i class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                    <div class="student-course-table">
                        <div class="ic-certificate-list pt-0">
                            <div class="table-responsive">
                                <table class="ic-tables">
                                    <thead>
                                        <tr>
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Course Name</th>
                                            <th>Enroll Date</th>
                                            <th>Chatting</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="ic-student-images-box">
                                                    <img src="{{ asset('new-frontend/images/student-avatar.png') }}"
                                                        alt="">
                                                </div>
                                            </td>
                                            <td>
                                                Kathryn Murphy
                                            </td>
                                            <td>
                                                Student@gmail.com
                                            </td>
                                            <td>
                                                <p class="primary text-truncation">Complete Python Developer...</p>
                                            </td>
                                            <td>
                                                <p>22 Oct, 2023, 10:23 PM</p>
                                            </td>
                                            <td>
                                                <a href="#" class="ic-chat-btn"><i class="ri-message-2-line"></i>
                                                    Chat</a>
                                            </td>
                                            <td><a href="#" class="ic-my-buttons"><i class="ri-eye-line"></i></a>
                                                <a href="#" class="ic-my-buttons"><i
                                                        class="ri-delete-bin-line"></i></a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            <div class="ic-pagination">
                                <ul>
                                    <li><a href="#" class="page-link"><i class="ri-arrow-left-line"></i></a></li>
                                    <li><a href="#" class="page-link active">1</a></li>
                                    <li><a href="#" class="page-link">2</a></li>
                                    <li><a href="#" class="page-link">3</a></li>
                                    <li><a href="#" class="page-link">4</a></li>
                                    <li><a href="#" class="page-link"><i class="ri-arrow-right-line"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- student course table --}}
        </div>
    </section>
    {{-- student dashboard --}}
@endsection

@push('scripts')
@endpush
