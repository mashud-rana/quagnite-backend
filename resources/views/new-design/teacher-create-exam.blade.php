@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- create exam start --}}
    <div class="ic-teacher-create-exam">
        <div class="container">
            <div class="ic-teacher-create-exam-wrapper">
                <div class="ic-teacher-create-exam-content">
                    <div class="ic-create-exam-banner"
                        style="background-image: linear-gradient(0deg, rgba(0, 172, 182, 0.95) 0%, rgba(0, 172, 182, 0.95) 100%), url({{ asset('new-frontendv1/images/dashboard/create-exam-bg.png') }})">
                        <div class="ic-banner-left">
                            <h2>Course Name: Data Science Python Course</h2>
                            <button>
                                <span>Create Exam</span>
                                <span><i class="ri-add-line"></i></span>
                            </button>
                        </div>
                        <div class="ic-banner-right">
                            <img class="img-fluid" src="{{ asset('new-frontendv1/images/dashboard/banner-img.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div class="ic-create-exam-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>
                                         <h6>Exam Name</h6>
                                    </th>
                                    <th>Exam Type</th>
                                    <th>Total Question</th>
                                    <th>Status</th>
                                    <th>Add Question</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    {{-- Exam name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Data Science
                                        </div>
                                    </td>
                                    {{-- Exam Type --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple choice
                                        </div>

                                    </td>
                                    {{-- Total Question --}}
                                    <td>
                                        <div class="ic-table-item">
                                            15
                                        </div>
                                    </td>
                                    {{-- Status --}}
                                    <td>
                                        <span class="ic-publish">Publish</span>
                                    </td>
                                    {{-- Add Question --}}
                                    <td>
                                        <button class="ic-btn">
                                            <span><i class="ri-add-line"></i></span>
                                            <span>Add</span>
                                        </button>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Exam name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Data Science
                                        </div>
                                    </td>
                                    {{-- Exam Type --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple choice
                                        </div>

                                    </td>
                                    {{-- Total Question --}}
                                    <td>
                                        <div class="ic-table-item">
                                            15
                                        </div>
                                    </td>
                                    {{-- Status --}}
                                    <td>
                                        <span class="ic-publish bg-success success">
                                            Success
                                        </span>
                                    </td>
                                    {{-- Add Question --}}
                                    <td>
                                        <button class="ic-btn">
                                            <span><i class="ri-add-line"></i></span>
                                            <span>Add</span>
                                        </button>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Exam name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Data Science
                                        </div>
                                    </td>
                                    {{-- Exam Type --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple choice
                                        </div>

                                    </td>
                                    {{-- Total Question --}}
                                    <td>
                                        <div class="ic-table-item">
                                            15
                                        </div>
                                    </td>
                                    {{-- Status --}}
                                    <td>
                                        <span class="ic-publish bg-warning warning">
                                            Pending
                                        </span>
                                    </td>
                                    {{-- Add Question --}}
                                    <td>
                                        <button class="ic-btn">
                                            <span><i class="ri-add-line"></i></span>
                                            <span>Add</span>
                                        </button>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Exam name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Data Science
                                        </div>
                                    </td>
                                    {{-- Exam Type --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple choice
                                        </div>

                                    </td>
                                    {{-- Total Question --}}
                                    <td>
                                        <div class="ic-table-item">
                                            15
                                        </div>
                                    </td>
                                    {{-- Status --}}
                                    <td>
                                        <span class="ic-publish">Publish</span>
                                    </td>
                                    {{-- Add Question --}}
                                    <td>
                                        <button class="ic-btn">
                                            <span><i class="ri-add-line"></i></span>
                                            <span>Add</span>
                                        </button>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Exam name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Data Science
                                        </div>
                                    </td>
                                    {{-- Exam Type --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple choice
                                        </div>

                                    </td>
                                    {{-- Total Question --}}
                                    <td>
                                        <div class="ic-table-item">
                                            15
                                        </div>
                                    </td>
                                    {{-- Status --}}
                                    <td>
                                        <span class="ic-publish bg-success success">
                                            Success
                                        </span>
                                    </td>
                                    {{-- Add Question --}}
                                    <td>
                                        <button class="ic-btn">
                                            <span><i class="ri-add-line"></i></span>
                                            <span>Add</span>
                                        </button>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Exam name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Data Science
                                        </div>
                                    </td>
                                    {{-- Exam Type --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple choice
                                        </div>

                                    </td>
                                    {{-- Total Question --}}
                                    <td>
                                        <div class="ic-table-item">
                                            15
                                        </div>
                                    </td>
                                    {{-- Status --}}
                                    <td>
                                        <span class="ic-publish bg-warning warning">
                                            Pending
                                        </span>
                                    </td>
                                    {{-- Add Question --}}
                                    <td>
                                        <button class="ic-btn">
                                            <span><i class="ri-add-line"></i></span>
                                            <span>Add</span>
                                        </button>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Exam name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Data Science
                                        </div>
                                    </td>
                                    {{-- Exam Type --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple choice
                                        </div>

                                    </td>
                                    {{-- Total Question --}}
                                    <td>
                                        <div class="ic-table-item">
                                            15
                                        </div>
                                    </td>
                                    {{-- Status --}}
                                    <td>
                                        <span class="ic-publish">Publish</span>
                                    </td>
                                    {{-- Add Question --}}
                                    <td>
                                        <button class="ic-btn">
                                            <span><i class="ri-add-line"></i></span>
                                            <span>Add</span>
                                        </button>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Exam name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Data Science
                                        </div>
                                    </td>
                                    {{-- Exam Type --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple choice
                                        </div>

                                    </td>
                                    {{-- Total Question --}}
                                    <td>
                                        <div class="ic-table-item">
                                            15
                                        </div>
                                    </td>
                                    {{-- Status --}}
                                    <td>
                                        <span class="ic-publish bg-success success">
                                            Success
                                        </span>
                                    </td>
                                    {{-- Add Question --}}
                                    <td>
                                        <button class="ic-btn">
                                            <span><i class="ri-add-line"></i></span>
                                            <span>Add</span>
                                        </button>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Exam name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Data Science
                                        </div>
                                    </td>
                                    {{-- Exam Type --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple choice
                                        </div>

                                    </td>
                                    {{-- Total Question --}}
                                    <td>
                                        <div class="ic-table-item">
                                            15
                                        </div>
                                    </td>
                                    {{-- Status --}}
                                    <td>
                                        <span class="ic-publish bg-warning warning">
                                            Pending
                                        </span>
                                    </td>
                                    {{-- Add Question --}}
                                    <td>
                                        <button class="ic-btn">
                                            <span><i class="ri-add-line"></i></span>
                                            <span>Add</span>
                                        </button>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="dropdown">
                                            <button class="dropdown-toggle" type="button" data-bs-toggle="dropdown"
                                                aria-expanded="false">
                                                <i class="ri-more-fill"></i>
                                            </button>
                                            <ul class="dropdown-menu">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </td>
                                </tr>
                                
                            </tbody>
                        </table>
                    </div>
                    <div class="ic-create-exam-pagination">
                        <nav>
                            <ul class="pagination">
                                <li class="page-item">
                                    <a class="page-link" href="#">Previous</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">1</a></li>
                                <li class="page-item active" aria-current="page">
                                    <a class="page-link" href="#">2</a>
                                </li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#">Next</a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- create exam end --}}
@endsection

@push('scripts')
@endpush
