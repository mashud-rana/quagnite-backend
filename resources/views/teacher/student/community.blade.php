@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- create exam start --}}
    <div class="ic-teacher-create-exam ic-all-student-enrolement ic-student-space">
        <div class="container">
            <div class="ic-exam-heading">
                <h3 class="mb-13">All Community Users</h3>
                {{-- <p class="gray">All The Classes that you are watching all over the time</p> --}}
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
                                    {{-- <th scope="col">Course Name</th> --}}
                                    <th scope="col">User Type</th>
                                    <th scope="col">Chat</th>
                                    {{-- <th scope="col">Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $data)
                                    <tr>
                                        {{-- image --}}
                                        <td>
                                            <div class="ic-table-item">
                                                <img class="img-fluid"
                                                    src="{{ getStoreFile($data->avatar, $data->storage_type) }}"
                                                    alt="">
                                            </div>
                                        </td>
                                        {{-- Option No-1 --}}
                                        <td>
                                            <div class="ic-table-item">
                                                {{ $data->full_name }}
                                            </div>

                                        </td>
                                        {{-- Option No-2 --}}
                                        <td>
                                            <div class="ic-table-item">
                                                {{ $data->email }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="ic-table-item text-uppercase">
                                                {{ $data->user_type }}
                                            </div>
                                        </td>
                                        <td>
                                            <div class="">
                                                <a href="{{ route('chat.user', $data->uuid) }}" class="ic-btn"><i
                                                        class="ri-message-2-fill"></i>Chat</a>
                                            </div>
                                        </td>
                                        {{-- Action --}}
                                        {{-- <td>
                                        <div class="ic-eye-delete-btn">
                                            <a href="#" class="primary">
                                                <i class="ri-eye-line"></i>
                                            </a>
                                            <a href="#" class="text-red">
                                                <i class="ri-delete-bin-5-fill"></i>
                                            </a>
                                        </div>
                                    </td> --}}
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="5">
                                            <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                                        </td>
                                    </tr>
                                @endforelse
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
