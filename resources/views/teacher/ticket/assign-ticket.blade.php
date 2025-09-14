@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            <div class="section-headers mb-30">
                <h3 class="fs-30 fw-700">Assigned  Tickets</h3>
            </div>
            <div class="ic-ticket-list">
                <ul class="ic-ticket-list-ul">
                    @forelse ($userTickets as $data)
                        <li class="ic-ticket-list-li">
                            <div>
                                <a href="{{ route('ticket.show', $data->slug) }}">
                                    <h6><span>Ticket# {{ $data->ticket_id }}</span> - {{ $data->subject }}</h6>
                                </a>
                                <ul>
                                    <li>
                                        <i class="ri-user-line"></i> {{ $data->user->first_name }}
                                    </li>
                                    <li>
                                        <i class="ri-time-line"></i> Posted at
                                        {{ $data->created_at->format('M j, Y h:i A') }}
                                    </li>
                                    <li>
                                        <i class="ri-reply-line"></i> {{ $data->replies_count }} Reply
                                    </li>
                                </ul>
                            </div>
                            <div>
                                <span class="text-white ic-badge-till bg-primary">
                                    {{ $data->category->name }}
                                </span>
                                @php
                                    $statusMapping = [
                                        CLOSED => ['class' => 'warning', 'text' => 'Closed'],
                                        OPEN => ['class' => 'bg-primary', 'text' => 'Open'],
                                        ANSWERED => ['class' => 'bg-info', 'text' => 'Answered'],
                                        INPROGRESS => ['class' => 'bg-info', 'text' => 'Inprogress'],
                                        REJECT => ['class' => 'bg-danger', 'text' => 'Rejected'],
                                        ASSIGNED => ['class' => 'bg-secondary', 'text' => 'Assigned'],
                                    ];
                                @endphp

                                <span class="text-white ic-badge-till {{ $statusMapping[$data->status]['class'] }}">
                                    {{ $statusMapping[$data->status]['text'] }}
                                </span>
                            </div>
                        </li>
                    @empty
                    <x-frontend.data-notfound></x-frontend.data-notfound>
                    @endforelse
                </ul>
            </div>
        </div>
    </section>
    {{-- student dashboard --}}
@endsection

@push('scripts')
@endpush
