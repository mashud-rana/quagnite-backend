@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- student E-book start --}}
    <div class="ic-teacher-create-exam ic-student-all-exam ic-student-space">
        <div class="container">
            <div class="ic-exam-heading">
                <div class="ic-exam-heading-left">
                    <h2>My Exams</h2>
                    <p>All The Classes that you are watching all over the time</p>
                </div>
                <div class="ic-exam-heading-right">
                    <div class="dropdown">
                        <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Category <i class="ri-arrow-down-s-line"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="ic-teacher-create-exam-wrapper">
                <div class="ic-teacher-create-exam-content">
                    <div class="ic-create-exam-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">SL No.</th>
                                    <th scope="col">Exam Date</th>
                                    <th scope="col">Exam Name</th>
                                    <th scope="col">Session No</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    {{-- ISBN No. --}}
                                    <td>
                                        <div class="ic-table-item">
                                            01
                                        </div>
                                    </td>
                                    {{-- E-Book Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            1st Feb, 2023
                                        </div>

                                    </td>
                                    {{-- Publish Date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Python Programming IQ Test Exam
                                        </div>
                                    </td>
                                    {{-- Author Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            3190523
                                        </div>
                                    </td>

                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-action-btn">
                                            <button>Download</button>
                                            <button>Check Result</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- ISBN No. --}}
                                    <td>
                                        <div class="ic-table-item">
                                            01
                                        </div>
                                    </td>
                                    {{-- E-Book Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            1st Feb, 2023
                                        </div>

                                    </td>
                                    {{-- Publish Date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Python Programming IQ Test Exam
                                        </div>
                                    </td>
                                    {{-- Author Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            3190523
                                        </div>
                                    </td>

                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-action-btn">
                                            <button>Download</button>
                                            <button>Check Result</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- ISBN No. --}}
                                    <td>
                                        <div class="ic-table-item">
                                            01
                                        </div>
                                    </td>
                                    {{-- E-Book Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            1st Feb, 2023
                                        </div>

                                    </td>
                                    {{-- Publish Date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Python Programming IQ Test Exam
                                        </div>
                                    </td>
                                    {{-- Author Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            3190523
                                        </div>
                                    </td>

                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-action-btn">
                                            <button>Download</button>
                                            <button>Check Result</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- ISBN No. --}}
                                    <td>
                                        <div class="ic-table-item">
                                            01
                                        </div>
                                    </td>
                                    {{-- E-Book Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            1st Feb, 2023
                                        </div>

                                    </td>
                                    {{-- Publish Date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Python Programming IQ Test Exam
                                        </div>
                                    </td>
                                    {{-- Author Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            3190523
                                        </div>
                                    </td>

                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-action-btn">
                                            <button>Download</button>
                                            <button>Check Result</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- ISBN No. --}}
                                    <td>
                                        <div class="ic-table-item">
                                            01
                                        </div>
                                    </td>
                                    {{-- E-Book Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            1st Feb, 2023
                                        </div>

                                    </td>
                                    {{-- Publish Date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Python Programming IQ Test Exam
                                        </div>
                                    </td>
                                    {{-- Author Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            3190523
                                        </div>
                                    </td>

                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-action-btn">
                                            <button>Download</button>
                                            <button>Check Result</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- ISBN No. --}}
                                    <td>
                                        <div class="ic-table-item">
                                            01
                                        </div>
                                    </td>
                                    {{-- E-Book Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            1st Feb, 2023
                                        </div>

                                    </td>
                                    {{-- Publish Date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Python Programming IQ Test Exam
                                        </div>
                                    </td>
                                    {{-- Author Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            3190523
                                        </div>
                                    </td>

                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-action-btn">
                                            <button>Download</button>
                                            <button>Check Result</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- ISBN No. --}}
                                    <td>
                                        <div class="ic-table-item">
                                            01
                                        </div>
                                    </td>
                                    {{-- E-Book Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            1st Feb, 2023
                                        </div>

                                    </td>
                                    {{-- Publish Date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Python Programming IQ Test Exam
                                        </div>
                                    </td>
                                    {{-- Author Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            3190523
                                        </div>
                                    </td>

                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-action-btn">
                                            <button>Download</button>
                                            <button>Check Result</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- ISBN No. --}}
                                    <td>
                                        <div class="ic-table-item">
                                            01
                                        </div>
                                    </td>
                                    {{-- E-Book Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            1st Feb, 2023
                                        </div>

                                    </td>
                                    {{-- Publish Date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Python Programming IQ Test Exam
                                        </div>
                                    </td>
                                    {{-- Author Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            3190523
                                        </div>
                                    </td>

                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-action-btn">
                                            <button>Download</button>
                                            <button>Check Result</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- ISBN No. --}}
                                    <td>
                                        <div class="ic-table-item">
                                            01
                                        </div>
                                    </td>
                                    {{-- E-Book Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            1st Feb, 2023
                                        </div>

                                    </td>
                                    {{-- Publish Date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Python Programming IQ Test Exam
                                        </div>
                                    </td>
                                    {{-- Author Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            3190523
                                        </div>
                                    </td>

                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-action-btn">
                                            <button>Download</button>
                                            <button>Check Result</button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- ISBN No. --}}
                                    <td>
                                        <div class="ic-table-item">
                                            01
                                        </div>
                                    </td>
                                    {{-- E-Book Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            1st Feb, 2023
                                        </div>

                                    </td>
                                    {{-- Publish Date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Python Programming IQ Test Exam
                                        </div>
                                    </td>
                                    {{-- Author Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            3190523
                                        </div>
                                    </td>

                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-action-btn">
                                            <button>Download</button>
                                            <button>Check Result</button>
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
    {{-- student E-book end --}}
@endsection

@push('scripts')
@endpush
