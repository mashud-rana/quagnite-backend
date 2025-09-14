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
                                    {{-- <th scope="col">Course Name</th> --}}
                                    <th scope="col">Status</th>
                                    <th scope="col">Chat</th>
                                    <th scope="col">Review</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($enrolledStudents as $key => $data)
                                    <tr>
                                        {{-- image --}}
                                        <td>
                                            <div class="ic-table-item">
                                                <img class="img-fluid"
                                                    src="{{ getStoreFile($data->student->avatar, $data->student->storage_type) }}"
                                                    alt="">
                                            </div>
                                        </td>
                                        {{-- Option No-1 --}}
                                        <td>
                                            <div class="ic-table-item">
                                                {{ $data->student->full_name }}
                                            </div>

                                        </td>
                                        {{-- Option No-2 --}}
                                        <td>
                                            <div class="ic-table-item">
                                                {{ $data->student->email }}
                                            </div>
                                        </td>

                                        {{-- date --}}
                                        <td>
                                            <div class="ic-table-item">
                                                {{ $data->status == INPROGRESS ? 'Enrolled' : ($data->status == COMPLETE ? 'Graduate' : $data->status) }}
                                            </div>

                                        </td>
                                        <td>
                                            <div class="ic-table-item">
                                                <a href="{{ route('chat.user', $data->student->uuid) }}" class="ic-btn"><i
                                                        class="ri-message-2-fill"></i>Chat</a>
                                            </div>
                                        </td>
                                        {{-- Action --}}
                                        <td>
                                            <div class="ic-eye-delete-btn">
                                                @if (!$is_reviewed[$key])
                                                    <div class="d-flex">
                                                        <a href="#" class="text-nowrap ic-btn-simple"
                                                            data-bs-toggle="modal" data-bs-target="#review"
                                                            data-student-id="{{ $data->student->id }}">Write Review</a>
                                                    </div>
                                                @else
                                                    {{-- Display rating for students who have been reviewed --}}
                                                    <div class="ic-table-item">
                                                        {{ $data->student->reviews->first()->rating }}
                                                        <i class="ri-star-s-fill yellow"></i>
                                                    </div>
                                                @endif
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6">
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
    <!--Review Modal -->
    <div class="modal fade" id="review" tabindex="-1" aria-labelledby="review" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('teacher.review.submit') }}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="student_id" id="student_id_input_in_modal" value="">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="review">Write a Review</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <div class="rating">
                                <input type="radio" id="star5" name="rating" value="5" />
                                <label class="star" for="star5" title="Awesome" aria-hidden="true"></label>
                                <input type="radio" id="star4" name="rating" value="4" />
                                <label class="star" for="star4" title="Great" aria-hidden="true"></label>
                                <input type="radio" id="star3" name="rating" value="3" />
                                <label class="star" for="star3" title="Very good" aria-hidden="true"></label>
                                <input type="radio" id="star2" name="rating" value="2" />
                                <label class="star" for="star2" title="Good" aria-hidden="true"></label>
                                <input type="radio" id="star1" name="rating" value="1" />
                                <label class="star" for="star1" title="Bad" aria-hidden="true"></label>
                            </div>
                        </div>
                        <div class="form-group ic-feedback-form">
                            <label for="#">Feedback</label>
                            <textarea name="comment" id="" class="form-control" placeholder="Please write your feedback here"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="ic-btn danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="ic-btn-simple">Submit Review</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script>
        $(document).ready(function() {
            $('#review').on('show.bs.modal', function(event) {
                var link = $(event.relatedTarget);
                var studentId = link.data('student-id');
                $('#student_id_input_in_modal').val(studentId);
            });
        });
    </script>
@endpush
