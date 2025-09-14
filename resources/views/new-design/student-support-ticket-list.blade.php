@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')

    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            <div class="section-headers mb-30">
                <h3 class="fs-30 fw-700">Ticket List</h3>
                <div class="ic-support-ticket-buttons">
                    <a href="#">Recent Tickets</a>
                    <a href="#">Resolved</a>
                    <a href="#">Create a Ticket</a>
                </div>
            </div>
            <div class="ic-ticket-list">
                <ul class="ic-ticket-list-ul">
                    <li class="ic-ticket-list-li">
                        <div>
                            <h6><span>Ticket# 2023-MC123</span> - Consulting V3 Case Study on Home onepage cannot be edited</h6>
                            <ul>
                                <li>
                                    <i class="ri-user-line"></i> User Name
                                </li>
                                <li>
                                    <i class="ri-time-line"></i> Posted at 12:45 AM
                                </li>
                                <li>
                                    <i class="ri-reply-line"></i> 10 Replied
                                </li>
                            </ul>
                        </div>
                        <div>
                            <span class="ic-badge-till">Active</span>
                        </div>
                    </li>
                    <li class="ic-ticket-list-li">
                        <div>
                            <h6><span>Ticket# 2023-MC123</span> - Consulting V3 Case Study on Home onepage cannot be edited</h6>
                            <ul>
                                <li>
                                    <i class="ri-user-line"></i> User Name
                                </li>
                                <li>
                                    <i class="ri-time-line"></i> Posted at 12:45 AM
                                </li>
                                <li>
                                    <i class="ri-reply-line"></i> 10 Replied
                                </li>
                            </ul>
                        </div>
                        <div>
                            <span class="ic-badge-till success">Active</span>
                        </div>
                    </li>
                    <li class="ic-ticket-list-li">
                        <div>
                            <h6><span>Ticket# 2023-MC123</span> - Consulting V3 Case Study on Home onepage cannot be edited</h6>
                            <ul>
                                <li>
                                    <i class="ri-user-line"></i> User Name
                                </li>
                                <li>
                                    <i class="ri-time-line"></i> Posted at 12:45 AM
                                </li>
                                <li>
                                    <i class="ri-reply-line"></i> 10 Replied
                                </li>
                            </ul>
                        </div>
                        <div>
                            <span class="ic-badge-till warning">Resolved</span>
                        </div>
                    </li>
                    <li class="ic-ticket-list-li">
                        <div>
                            <h6><span>Ticket# 2023-MC123</span> - Consulting V3 Case Study on Home onepage cannot be edited</h6>
                            <ul>
                                <li>
                                    <i class="ri-user-line"></i> User Name
                                </li>
                                <li>
                                    <i class="ri-time-line"></i> Posted at 12:45 AM
                                </li>
                                <li>
                                    <i class="ri-reply-line"></i> 10 Replied
                                </li>
                            </ul>
                        </div>
                        <div>
                            <span class="ic-badge-till">Decline</span>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    {{-- student dashboard --}}

@endsection

@push('scripts')
@endpush
