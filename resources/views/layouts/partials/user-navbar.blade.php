@php
    $auth_user = auth()->user();
@endphp
<div class="ic-overlay"></div>
<header class="ic-video-course-header">
    <a href="{{ route('front.home') }}">
        <div class="main-logo">
            <img src="{{ asset('frontend/images/logo-course.png') }}" alt="">
        </div>
    </a>

    <div class="position-relative">
        <div class="ic-search-btn">
            <input type="text" id="live-search" name="q" placeholder="Search..."
                class="form-control" autocomplete="off">
            <i class="ri-search-line"></i>
        </div>
        <div class="search-feild-drop-dwon">
            <ul id="search-results-list"></ul>
            {{-- no search result --}}
            <div id="no-results" class="py-4 text-center bg-white rounded"
                style="display: none;">
                <svg width="40" height="40" viewBox="0 0 20 20" fill="none"
                    fill-rule="evenodd" stroke="currentColor" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path
                        d="M15.5 4.8c2 3 1.7 7-1 9.7h0l4.3 4.3-4.3-4.3a7.8 7.8 0 01-9.8 1m-2.2-2.2A7.8 7.8 0 0113.2 2.4M2 18L18 2">
                    </path>
                </svg>
                <p>No results for "search"</p>
            </div>
        </div>
    </div>
    <div class="student-menu">
        <ul class="ic-student-nav">
            <li class="mobile-logos">
                <div class="main-logo">
                    <img src="{{ asset('frontend/images/logo-course.png') }}" alt="">
                </div>
                <div class="ic-sidebarClosed">
                    <i class="ri-close-circle-line"></i>
                </div>
            </li>
            <li class="ic-student-items">
                <a href="{{ route('courses') }}" class="ic-items-link">Courses</a>
            </li>
            <li class="ic-student-items">
                <a href="{{ route('bootcamps') }}" class="ic-items-link">Bootcamps</a>
            </li>
            <li class="ic-student-items">
                <a href="{{ route('front.allCoaches') }}" class="ic-items-link">Coaching</a>
            </li>
            <li class="ic-student-items">
                <a href="#" class="ic-items-link">More <i class="ri-arrow-down-s-line"></i></a>
                <ul class="ic-student-dropdown">
                    <li>
                        <a href="{{ route('business.index') }}">Business</a>
                    </li>
                    <li>
                        <a href="{{ route('playground.index') }}">Playgrounds</a>
                    </li>
                    <li>
                        <a href="{{ route('ebooks') }}">Ebook</a>
                    </li>
                    <li>
                        <a href="{{ route('forum.index') }}">Forum</a>
                    </li>
                    <li>
                        <a href="{{ route('exams.index') }}">Exam</a>
                    </li>
                    <li>
                        <a href="{{ route('blog.index') }}">Blog</a>
                    </li>
                    <li>
                        <a href="{{ route('event.index') }}">Event</a>
                    </li>
                    <li>
                        <a href="{{ route('all.wikis') }}">Wiki</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.help') }}">HelpDesk</a>
                    </li>
                    <li>
                        <a href="{{ route('all.pricings') }}">Plan and Pricings</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
    <div class="ic-student-panel">
        <div class="ic-panel-notification">
            <ul class="notification-ul">
                <li>
                    <a href="{{ route('chat') }}" type="button" class="ic-notification-link" class="ic-panel-links">
                        <i class="ri-chat-1-line gray" style="font-size: 30px"></i>
                        <span class="noti-count">
                            {{ $auth_user->unseenMessagesCount() }}
                        </span>
                    </a>
                </li>
            </ul>
        </div>
        <div class="ic-panel-notification">
            <ul class="notification-ul">
                <li>
                    <a type="button" class="ic-notification-link" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" class="ic-panel-links">
                        <svg width="26" height="23" viewBox="0 0 26 23" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M21 9.66675C21 7.54502 20.1571 5.51018 18.6569 4.00989C17.1566 2.5096 15.1217 1.66675 13 1.66675C10.8783 1.66675 8.84344 2.5096 7.34315 4.00989C5.84286 5.51018 5 7.54502 5 9.66675C5 19.0001 1 21.6667 1 21.6667H25C25 21.6667 21 19.0001 21 9.66675Z"
                                stroke="#6C757D" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                        <span class="noti-count">
                            {{ auth()->user()->unreadNotifications->count() }}
                        </span>
                    </a>
                    <div class="dropdown-menu ic-notification-menu" aria-labelledby="dropdownMenuButton1">
                        <div class="notification-scroll">
                            <div class="all-notification-count">
                                <div class="ic-alert-icon">
                                    <i class="ri-notification-2-line"></i>
                                </div>
                                <div>
                                    <p class="count-noti">{{ auth()->user()->unreadNotifications->count() }} Notifications</p>
                                    {{-- <p class="para-text">Mark all notifications as read</p> --}}
                                </div>
                            </div>
                            <div class="ic-notification-dropdown-list">
                                @foreach (auth()->user()->unreadNotifications as $notification)
                                <a class="notification-dropdown-item" href="{{ $notification->data['url'] }}">
                                    <div class="notification-icon bg-primary">
                                        <i class="ri-mail-fill"></i>
                                    </div>
                                    <div class="notification-wrap">
                                        <p class="notification-text">
                                            {{ $notification->data['title'] }}
                                        </p>
                                        {{-- <p class="notification-text"><span>Selena</span> comments on your posts about Algorithm tasks</p> --}}
                                        <p class="notification-time">{{ $notification->created_at->diffForhumans() }}</p>
                                    </div>
                                </a>
                                @endforeach
                            </div>
                        </div>
                        <a href="{{ route('notification.index') }}" class="notification-btn">All notifications</a>
                    </div>
                </li>
            </ul>
        </div>


        {{-- Dropdown --}}
        @include('layouts.partials.nav-dropdown')


        <div class="course-mobile">
            <button class="humbugger-menu"
                onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
                aria-label="Main Menu">
                <svg width="100" height="100" viewBox="0 0 100 100">
                    <path class="line line1"
                        d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                    <path class="line line2" d="M 20,50 H 80" />
                    <path class="line line3"
                        d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                </svg>
            </button>
        </div>
    </div>
</header>
@push('scripts')
<script src="{{ asset('/frontend/js/custom.js') }}"></script>
@endpush