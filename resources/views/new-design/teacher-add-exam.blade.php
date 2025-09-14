@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- create exam start --}}
    <div class="ic-teacher-create-exam ic-teacher-add-exam">
        <div class="container">
            <div class="ic-teacher-create-exam-wrapper">
                <div class="ic-teacher-create-exam-content">
                    <div class="ic-exam-heading">
                        <h5>Question Name</h5>
                        <p>Microservices with Node JS and React</p>
                    </div>
                    <div class="ic-create-exam-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Question Name</th>
                                    <th scope="col">Option No-1</th>
                                    <th scope="col">Option No-2</th>
                                    <th scope="col">Option No-3</th>
                                    <th scope="col">Option No-4</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    {{-- Question Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Which The Question
                                        </div>
                                    </td>
                                    {{-- Option No-1 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple choice
                                        </div>

                                    </td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            <div class="ic-tick">
                                                <span><i class="ri-check-line"></i></span>
                                                <span class="">Multiple</span>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <span class="ic-publish">Publish</span>
                                    </td>
                                    {{-- Option No-4 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple
                                        </div>
                                    </td>
                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-edit-delete-btn">
                                            <a href="#" class="ic-edit">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="#" class="ic-delete">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Question Name --}}
                                    <td>Data Science</td>
                                    {{-- Option No-1 --}}
                                    <td>Multiple choice</td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-tick">
                                            <span><i class="ri-check-line"></i></span>
                                            <span>Multiple</span>
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <span class="ic-publish bg-success success">
                                            Success
                                        </span>
                                    </td>
                                    {{-- Option No-4 --}}
                                    <td>
                                        <span>Multiple</span>
                                    </td>
                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-edit-delete-btn">
                                            <a href="#" class="ic-edit">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="#" class="ic-delete">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Question Name --}}
                                    <td>Data Science</td>
                                    {{-- Option No-1 --}}
                                    <td>Multiple choice</td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-tick">
                                            <span><i class="ri-check-line"></i></span>
                                            <span>Multiple</span>
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                         <span class="ic-publish bg-warning warning">
                                            Pending
                                        </span>
                                    </td>
                                    {{-- Option No-4 --}}
                                    <td>
                                        <span>Multiple</span>
                                    </td>
                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-edit-delete-btn">
                                            <a href="#" class="ic-edit">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="#" class="ic-delete">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Question Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Which The Question
                                        </div>
                                    </td>
                                    {{-- Option No-1 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple choice
                                        </div>

                                    </td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            <div class="ic-tick">
                                                <span><i class="ri-check-line"></i></span>
                                                <span class="">Multiple</span>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <span class="ic-publish">Publish</span>
                                    </td>
                                    {{-- Option No-4 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple
                                        </div>
                                    </td>
                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-edit-delete-btn">
                                            <a href="#" class="ic-edit">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="#" class="ic-delete">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Question Name --}}
                                    <td>Data Science</td>
                                    {{-- Option No-1 --}}
                                    <td>Multiple choice</td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-tick">
                                            <span><i class="ri-check-line"></i></span>
                                            <span>Multiple</span>
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <span class="ic-publish bg-success success">
                                            Success
                                        </span>
                                    </td>
                                    {{-- Option No-4 --}}
                                    <td>
                                        <span>Multiple</span>
                                    </td>
                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-edit-delete-btn">
                                            <a href="#" class="ic-edit">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="#" class="ic-delete">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Question Name --}}
                                    <td>Data Science</td>
                                    {{-- Option No-1 --}}
                                    <td>Multiple choice</td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-tick">
                                            <span><i class="ri-check-line"></i></span>
                                            <span>Multiple</span>
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                         <span class="ic-publish bg-warning warning">
                                            Pending
                                        </span>
                                    </td>
                                    {{-- Option No-4 --}}
                                    <td>
                                        <span>Multiple</span>
                                    </td>
                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-edit-delete-btn">
                                            <a href="#" class="ic-edit">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="#" class="ic-delete">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Question Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Which The Question
                                        </div>
                                    </td>
                                    {{-- Option No-1 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple choice
                                        </div>

                                    </td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            <div class="ic-tick">
                                                <span><i class="ri-check-line"></i></span>
                                                <span class="">Multiple</span>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <span class="ic-publish">Publish</span>
                                    </td>
                                    {{-- Option No-4 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple
                                        </div>
                                    </td>
                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-edit-delete-btn">
                                            <a href="#" class="ic-edit">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="#" class="ic-delete">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Question Name --}}
                                    <td>Data Science</td>
                                    {{-- Option No-1 --}}
                                    <td>Multiple choice</td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-tick">
                                            <span><i class="ri-check-line"></i></span>
                                            <span>Multiple</span>
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <span class="ic-publish bg-success success">
                                            Success
                                        </span>
                                    </td>
                                    {{-- Option No-4 --}}
                                    <td>
                                        <span>Multiple</span>
                                    </td>
                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-edit-delete-btn">
                                            <a href="#" class="ic-edit">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="#" class="ic-delete">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Question Name --}}
                                    <td>Data Science</td>
                                    {{-- Option No-1 --}}
                                    <td>Multiple choice</td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-tick">
                                            <span><i class="ri-check-line"></i></span>
                                            <span>Multiple</span>
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                         <span class="ic-publish bg-warning warning">
                                            Pending
                                        </span>
                                    </td>
                                    {{-- Option No-4 --}}
                                    <td>
                                        <span>Multiple</span>
                                    </td>
                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-edit-delete-btn">
                                            <a href="#" class="ic-edit">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="#" class="ic-delete">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Question Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Which The Question
                                        </div>
                                    </td>
                                    {{-- Option No-1 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple choice
                                        </div>

                                    </td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            <div class="ic-tick">
                                                <span><i class="ri-check-line"></i></span>
                                                <span class="">Multiple</span>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <span class="ic-publish">Publish</span>
                                    </td>
                                    {{-- Option No-4 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple
                                        </div>
                                    </td>
                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-edit-delete-btn">
                                            <a href="#" class="ic-edit">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="#" class="ic-delete">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Question Name --}}
                                    <td>Data Science</td>
                                    {{-- Option No-1 --}}
                                    <td>Multiple choice</td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-tick">
                                            <span><i class="ri-check-line"></i></span>
                                            <span>Multiple</span>
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <span class="ic-publish bg-success success">
                                            Success
                                        </span>
                                    </td>
                                    {{-- Option No-4 --}}
                                    <td>
                                        <span>Multiple</span>
                                    </td>
                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-edit-delete-btn">
                                            <a href="#" class="ic-edit">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="#" class="ic-delete">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Question Name --}}
                                    <td>Data Science</td>
                                    {{-- Option No-1 --}}
                                    <td>Multiple choice</td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-tick">
                                            <span><i class="ri-check-line"></i></span>
                                            <span>Multiple</span>
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                         <span class="ic-publish bg-warning warning">
                                            Pending
                                        </span>
                                    </td>
                                    {{-- Option No-4 --}}
                                    <td>
                                        <span>Multiple</span>
                                    </td>
                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-edit-delete-btn">
                                            <a href="#" class="ic-edit">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="#" class="ic-delete">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Question Name --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Which The Question
                                        </div>
                                    </td>
                                    {{-- Option No-1 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple choice
                                        </div>

                                    </td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            <div class="ic-tick">
                                                <span><i class="ri-check-line"></i></span>
                                                <span class="">Multiple</span>
                                            </div>
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <span class="ic-publish">Publish</span>
                                    </td>
                                    {{-- Option No-4 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Multiple
                                        </div>
                                    </td>
                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-edit-delete-btn">
                                            <a href="#" class="ic-edit">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="#" class="ic-delete">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Question Name --}}
                                    <td>Data Science</td>
                                    {{-- Option No-1 --}}
                                    <td>Multiple choice</td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-tick">
                                            <span><i class="ri-check-line"></i></span>
                                            <span>Multiple</span>
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <span class="ic-publish bg-success success">
                                            Success
                                        </span>
                                    </td>
                                    {{-- Option No-4 --}}
                                    <td>
                                        <span>Multiple</span>
                                    </td>
                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-edit-delete-btn">
                                            <a href="#" class="ic-edit">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="#" class="ic-delete">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- Question Name --}}
                                    <td>Data Science</td>
                                    {{-- Option No-1 --}}
                                    <td>Multiple choice</td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-tick">
                                            <span><i class="ri-check-line"></i></span>
                                            <span>Multiple</span>
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                         <span class="ic-publish bg-warning warning">
                                            Pending
                                        </span>
                                    </td>
                                    {{-- Option No-4 --}}
                                    <td>
                                        <span>Multiple</span>
                                    </td>
                                    {{-- Action --}}
                                    <td>

                                        <div class="ic-edit-delete-btn">
                                            <a href="#" class="ic-edit">
                                                <i class="ri-edit-2-fill"></i>
                                            </a>
                                            <a href="#" class="ic-delete">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
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
    {{-- create exam end --}}
@endsection

@push('scripts')
@endpush
