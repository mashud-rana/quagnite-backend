@extends('layouts.master-user')

@push('styles')
    <style>
        .ic-ticket.assigned-user {
            border-left: 4px solid #289d0f;
        }
    </style>
@endpush

@section('content')
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            <div class="section-headers mb-30">
                <h3 class="fs-30 fw-700">Ticket Details</h3>
                <div class="ic-support-ticket-buttons">

                    @if ($item->assigned_by == auth()->user()->id)
                        <form method="POST" action="{{ route('teacher.ticket.status.update', $item->id) }}">
                            @csrf
                            @method('PATCH')

                            <select class="form-select" name="status" onchange="this.form.submit()">
                                <option value="{{ CLOSED }}" {{ $item->status == CLOSED ? 'selected' : '' }}>Closed</option>
                                <option value="{{ OPEN }}" {{ $item->status == OPEN ? 'selected' : '' }}>Open</option>
                                <option value="{{ ANSWERED }}" {{ $item->status == ANSWERED ? 'selected' : '' }}>Answered</option>
                                <option value="{{ REJECT }}" {{ $item->status == REJECT ? 'selected' : '' }}>Rejected</option>
                                <option value="{{ ASSIGNED }}" {{ $item->status == ASSIGNED ? 'selected' : '' }}>Assigned</option>
                                <option value="{{ INPROGRESS }}" {{ $item->status == INPROGRESS ? 'selected' : '' }}>Inprogress</option>
                            </select>
                        </form>
                    @else
                        @php
                            $statusMapping = [
                                CLOSED => ['class' => 'warning', 'text' => 'Closed'],
                                OPEN => ['class' => 'bg-primary', 'text' => 'Open'],
                                ANSWERED => ['class' => 'bg-info', 'text' => 'Answered'],
                                INPROGRESS => ['class' => 'bg-info', 'text' => 'Inprogress'],
                                REJECT => ['class' => 'bg-danger', 'text' => 'Rejected'],
                                ASSIGNED => ['class' => 'bg-secondary', 'text' => 'Assigned'],
                            ];

                            $status = $statusMapping[$item->status] ?? ['class' => 'bg-secondary', 'text' => 'Unknown Status'];
                        @endphp

                        <a href="#" class="text-white ic-badge-till {{ $status['class'] }}">
                            {{ $status['text'] }}
                        </a>
                    @endif

                </div>
            </div>
            <div class="ic-single-ticket">
                <div class="single-ticket-header">
                    <h5><i class="ri-checkbox-blank-circle-fill"></i> <span>Ticket# {{ $item->ticket_id }}</span></h5>
                    <p><i class="ri-time-line"></i> Posted at {{ custom_datetime($item->created_at) }}</p>
                </div>
                <div class="single-ticket-body">
                    <h5>{{ $item->subject }}</h5>
                    <p>{!! $item->message !!}</p>

                    <div class="ic-ticket-descussion">
                        @foreach ($item->replies as $reply)
                            <div
                                class="ic-ticket {{ $reply->user->user_type === 'admin' ? 'admin' : ($reply->user->id === $item->assigned_by ? 'assigned-user' : 'user') }}">
                                <div class="ic-ticket-avatar">
                                    <div>
                                        <img src="{{ getStoreFile($reply->user->avatar, $reply->user->storage_type) }}"
                                            alt="">
                                    </div>
                                    <div>
                                        <p>@ {{ $reply->user->first_name }}</p>
                                        <span>{{ custom_datetime($reply->created_at) }}</span>
                                    </div>
                                </div>
                                <p>{!! $reply->message !!}</p>
                            </div>
                        @endforeach


                        {{-- discussion replay --}}
                        @if ($item->status !== 0)
                            <div class="ic-discussion-ticket">
                                <h6>Reply</h6>
                                <form action="{{ route('ticket-reply.store') }}" method="POST">
                                    @csrf
                                    <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                                    <input type="hidden" name="ticket_id" value="{{ $item->id }}">
                                    <input type="hidden" name="ticket_slug" value="{{ $item->slug }}">
                                    <input id="inputTrix" type="hidden" name="message" value="{{ old('message') }}">
                                    <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                                    <div class="pt-3 d-flex gap-3 justify-content-center">
                                        <a href="{{ $item->assigned_by == auth()->user()->id ? route('teacher.assign.ticket') : route('ticket.index') }}"
                                            class="ic-btn danger">Cancel</a>

                                        <button class="ic-btn-simple" type="submit">Reply</button>
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
