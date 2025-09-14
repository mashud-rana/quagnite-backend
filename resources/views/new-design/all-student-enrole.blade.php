@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- create exam start --}}
    <div class="ic-teacher-create-exam ic-all-student-enrolement ic-student-space">
        <div class="container">
            <div class="ic-exam-heading">
                <h3 class="mb-13">All Students</h3>
                <p class="gray">All The Classes that you are watching all over the time</p>
            </div>
            <div class="ic-teacher-create-exam-wrapper">
                <div class="ic-teacher-create-exam-content">

                    <div class="ic-create-exam-table table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Image</th>
                                    <th scope="col">Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">Course Name</th>
                                    <th scope="col">Enroll Date</th>
                                    <th scope="col">Chatting</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    {{-- image --}}
                                    <td>
                                        <div class="ic-table-item">
                                            <img class="img-fluid" src="{{ asset('new-frontendv1/images/student.png') }}"
                                                alt="">
                                        </div>
                                    </td>
                                    {{-- Option No-1 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Kathryn Murphy
                                        </div>

                                    </td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Student@gmail.com
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <div class="ic-table-item primary">
                                            Complete Python Developer
                                        </div>
                                    </td>
                                    {{-- date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            22 Oct, 2023, 10:23 PM
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ic-table-item">
                                            <button class="ic-btn"><i class="ri-message-2-fill"></i>Chat</button>
                                        </div>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="ic-eye-delete-btn">
                                            <a href="#" class="primary">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="#" class="text-red">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- image --}}
                                    <td>
                                        <div class="ic-table-item">
                                            <img class="img-fluid" src="{{ asset('new-frontendv1/images/student.png') }}"
                                                alt="">
                                        </div>
                                    </td>
                                    {{-- Option No-1 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Kathryn Murphy
                                        </div>

                                    </td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Student@gmail.com
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <div class="ic-table-item primary">
                                            Complete Python Developer
                                        </div>
                                    </td>
                                    {{-- date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            22 Oct, 2023, 10:23 PM
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ic-table-item">
                                            <button class="ic-btn"><i class="ri-message-2-fill"></i>Chat</button>
                                        </div>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="ic-eye-delete-btn">
                                            <a href="#" class="primary">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="#" class="text-red">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- image --}}
                                    <td>
                                        <div class="ic-table-item">
                                            <img class="img-fluid" src="{{ asset('new-frontendv1/images/student.png') }}"
                                                alt="">
                                        </div>
                                    </td>
                                    {{-- Option No-1 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Kathryn Murphy
                                        </div>

                                    </td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Student@gmail.com
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <div class="ic-table-item primary">
                                            Complete Python Developer
                                        </div>
                                    </td>
                                    {{-- date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            22 Oct, 2023, 10:23 PM
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ic-table-item">
                                            <button class="ic-btn"><i class="ri-message-2-fill"></i>Chat</button>
                                        </div>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="ic-eye-delete-btn">
                                            <a href="#" class="primary">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="#" class="text-red">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- image --}}
                                    <td>
                                        <div class="ic-table-item">
                                            <img class="img-fluid" src="{{ asset('new-frontendv1/images/student.png') }}"
                                                alt="">
                                        </div>
                                    </td>
                                    {{-- Option No-1 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Kathryn Murphy
                                        </div>

                                    </td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Student@gmail.com
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <div class="ic-table-item primary">
                                            Complete Python Developer
                                        </div>
                                    </td>
                                    {{-- date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            22 Oct, 2023, 10:23 PM
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ic-table-item">
                                            <button class="ic-btn"><i class="ri-message-2-fill"></i>Chat</button>
                                        </div>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="ic-eye-delete-btn">
                                            <a href="#" class="primary">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="#" class="text-red">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- image --}}
                                    <td>
                                        <div class="ic-table-item">
                                            <img class="img-fluid" src="{{ asset('new-frontendv1/images/student.png') }}"
                                                alt="">
                                        </div>
                                    </td>
                                    {{-- Option No-1 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Kathryn Murphy
                                        </div>

                                    </td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Student@gmail.com
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <div class="ic-table-item primary">
                                            Complete Python Developer
                                        </div>
                                    </td>
                                    {{-- date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            22 Oct, 2023, 10:23 PM
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ic-table-item">
                                            <button class="ic-btn"><i class="ri-message-2-fill"></i>Chat</button>
                                        </div>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="ic-eye-delete-btn">
                                            <a href="#" class="primary">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="#" class="text-red">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- image --}}
                                    <td>
                                        <div class="ic-table-item">
                                            <img class="img-fluid" src="{{ asset('new-frontendv1/images/student.png') }}"
                                                alt="">
                                        </div>
                                    </td>
                                    {{-- Option No-1 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Kathryn Murphy
                                        </div>

                                    </td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Student@gmail.com
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <div class="ic-table-item primary">
                                            Complete Python Developer
                                        </div>
                                    </td>
                                    {{-- date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            22 Oct, 2023, 10:23 PM
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ic-table-item">
                                            <button class="ic-btn"><i class="ri-message-2-fill"></i>Chat</button>
                                        </div>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="ic-eye-delete-btn">
                                            <a href="#" class="primary">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="#" class="text-red">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- image --}}
                                    <td>
                                        <div class="ic-table-item">
                                            <img class="img-fluid" src="{{ asset('new-frontendv1/images/student.png') }}"
                                                alt="">
                                        </div>
                                    </td>
                                    {{-- Option No-1 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Kathryn Murphy
                                        </div>

                                    </td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Student@gmail.com
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <div class="ic-table-item primary">
                                            Complete Python Developer
                                        </div>
                                    </td>
                                    {{-- date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            22 Oct, 2023, 10:23 PM
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ic-table-item">
                                            <button class="ic-btn"><i class="ri-message-2-fill"></i>Chat</button>
                                        </div>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="ic-eye-delete-btn">
                                            <a href="#" class="primary">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="#" class="text-red">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- image --}}
                                    <td>
                                        <div class="ic-table-item">
                                            <img class="img-fluid" src="{{ asset('new-frontendv1/images/student.png') }}"
                                                alt="">
                                        </div>
                                    </td>
                                    {{-- Option No-1 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Kathryn Murphy
                                        </div>

                                    </td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Student@gmail.com
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <div class="ic-table-item primary">
                                            Complete Python Developer
                                        </div>
                                    </td>
                                    {{-- date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            22 Oct, 2023, 10:23 PM
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ic-table-item">
                                            <button class="ic-btn"><i class="ri-message-2-fill"></i>Chat</button>
                                        </div>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="ic-eye-delete-btn">
                                            <a href="#" class="primary">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="#" class="text-red">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    {{-- image --}}
                                    <td>
                                        <div class="ic-table-item">
                                            <img class="img-fluid" src="{{ asset('new-frontendv1/images/student.png') }}"
                                                alt="">
                                        </div>
                                    </td>
                                    {{-- Option No-1 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Kathryn Murphy
                                        </div>

                                    </td>
                                    {{-- Option No-2 --}}
                                    <td>
                                        <div class="ic-table-item">
                                            Student@gmail.com
                                        </div>
                                    </td>
                                    {{-- Option No-3 --}}
                                    <td>
                                        <div class="ic-table-item primary">
                                            Complete Python Developer
                                        </div>
                                    </td>
                                    {{-- date --}}
                                    <td>
                                        <div class="ic-table-item">
                                            22 Oct, 2023, 10:23 PM
                                        </div>
                                    </td>
                                    <td>
                                        <div class="ic-table-item">
                                            <button class="ic-btn"><i class="ri-message-2-fill"></i>Chat</button>
                                        </div>
                                    </td>
                                    {{-- Action --}}
                                    <td>
                                        <div class="ic-eye-delete-btn">
                                            <a href="#" class="primary">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="#" class="text-red">
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
