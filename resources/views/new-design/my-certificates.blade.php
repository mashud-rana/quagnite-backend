@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            <div class="section-headers">
                <h3 class="fs-30 fw-700 pb-lg-3 pb-2">My Certificates</h3>
                <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
            </div>
            <div class="ic-certificate-list">
                <div class="table-responsive">
                    <table class="ic-tables">
                        <thead>
                            <th>SI No.</th>
                            <th>Date</th>
                            <th>Course Name</th>
                            <th>Certificate No</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    01
                                </td>
                                <td>
                                    1st Feb, 2023
                                </td>
                                <td>
                                    Programming and App Development
                                </td>
                                <td>
                                    3190523
                                </td>
                                <td>
                                    <a href="#" class="ic-my-buttons">Download</a>
                                    <a href="#" class="ic-my-buttons">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    01
                                </td>
                                <td>
                                    1st Feb, 2023
                                </td>
                                <td>
                                    Programming and App Development
                                </td>
                                <td>
                                    3190523
                                </td>
                                <td>
                                    <a href="#" class="ic-my-buttons">Download</a>
                                    <a href="#" class="ic-my-buttons">View</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="ic-pagination">
                    <ul>
                        <li>
                            <a href="#" class="page-link"><i class="ri-arrow-left-line"></i></a>
                        </li>
                        <li>
                            <a href="#" class="page-link active">1</a>
                        </li>
                        <li>
                            <a href="#" class="page-link">2</a>
                        </li>
                        <li>
                            <a href="#" class="page-link">3</a>
                        </li>
                        <li>
                            <a href="#" class="page-link">4</a>
                        </li>
                        <li>
                            <a href="#" class="page-link"><i class="ri-arrow-right-line"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- student dashboard --}}
@endsection

@push('scripts')
@endpush
