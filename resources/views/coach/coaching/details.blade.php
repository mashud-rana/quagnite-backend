@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    @php
        $auth_user = auth()->user();
    @endphp
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            <div class="section-headers mb-30">
                <h3 class="fs-30 fw-700">Coaching Activities</h3>
                @if ($auth_user->user_type == 'student')
                    <div class="ic-support-ticket-buttons">
                        @if (!$is_reviewed)
                            <div class="d-flex">
                                <a href="#" class="text-nowrap ic-btn-simple" data-bs-toggle="modal"
                                    data-bs-target="#review">Write Reviews</a>
                                {{-- <select name="" id="" class="selectpicker">
                        <option value="0">Recent Reviews</option>
                    </select> --}}
                            </div>
                        @endif
                        <a href="{{ route('student.coachings') }}">
                            Back
                        </a>
                    </div>
                @else
                    <div class="ic-support-ticket-buttons">
                        <div class="d-flex">
                            <form method="POST" action="{{ route('coach.enroll_coach.status.update', $item->id) }}">
                                @csrf
                                @method('PATCH')

                                <select class="form-select" name="status" onchange="this.form.submit()">
                                    <option value="{{ PENDING }}" {{ $item->status == PENDING ? 'selected' : '' }}>
                                        Pending</option>
                                    <option value="{{ INPROGRESS }}" {{ $item->status == INPROGRESS ? 'selected' : '' }}>
                                        In Progress</option>
                                    <option value="{{ COMPLETE }}" {{ $item->status == COMPLETE ? 'selected' : '' }}>
                                        Complete</option>
                                </select>
                            </form>
                        </div>
                        <a href="{{ route('coach.coachings') }}">
                            Back
                        </a>
                    </div>
                @endif

            </div>
            <div class="ic-single-ticket">
                <div class="single-ticket-header">
                    <p><i class="ri-time-line"></i> Enroll at {{ custom_datetime($item->created_at) }}</p>
                    @if ($auth_user->user_type == 'student')
                        <p>Write to Your Coach, <strong>{{ $item->coach->full_name }}</strong></p>
                    @elseif($auth_user->user_type == 'coach')
                        <p>Write to Your Student, <strong>{{ $item->student->full_name }}</strong></p>
                    @endif
                </div>
                <div class="single-ticket-body">

                    <div class="ic-ticket-descussion">
                        @foreach ($item->conversation as $data)
                            <div class="ic-ticket {{ $data->user->user_type === 'coach' ? 'admin' : 'user' }}">
                                <div class="ic-ticket-avatar">
                                    <div>
                                        <img src="{{ getStoreFile($data->user->avatar, $data->user->storage_type) }}"
                                            alt="">
                                    </div>
                                    <div>
                                        <p>@ {{ $data->user->first_name }}</p>
                                        <span>{{ custom_datetime($data->created_at) }}</span>
                                    </div>
                                </div>
                                <p>{!! $data->message !!}</p>
                            </div>
                        @endforeach

                        {{-- discussion replay --}}
                        @if ($item->status !== COMPLETE)
                            <div class="ic-discussion-ticket">
                                <h6>Reply</h6>
                                <form action="{{ route('storeConversation') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <input type="hidden" name="enroll_coach_id" value="{{ $item->id }}">
                                    <input id="inputTrix" type="hidden" name="message" value="{{ old('message') }}">
                                    <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                                    <div class="pt-3 d-flex gap-3 justify-content-center">

                                        <button class="ic-btn-simple" type="submit">Submit</button>
                                    </div>
                                </form>
                            </div>
                        @endif

                        {{-- discussion replay --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- student dashboard --}}
    <!--Review Modal -->
    <div class="modal fade" id="review" tabindex="-1" aria-labelledby="review" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('student.coach.review.submit') }}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="coach_id" value="{{ $item->coach->id }}">
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

@push('styles')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('common/custom/css/trix.css') }}">
@endpush

@push('scripts')
    <!-- Trix Editor - CDN Link -->
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="{{ asset('common/custom/js/trix-editor-controls.js') }}"></script>

    <script src="{{ asset('common/custom/js/image-preview.js') }}"></script>
@endpush
