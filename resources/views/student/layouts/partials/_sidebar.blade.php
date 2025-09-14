<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">
        <div class="navbar-brand-box">
            <a href="{{ route('front.home') }}" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="{{ asset('admin/images/logo.png') }}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('admin/images/logo.png') }}" alt="" height="17">
                </span>
            </a>

            <a href="{{ route('front.home') }}" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{ asset('admin/images/logo.png') }}" alt="" height="20">
                </span>
                <span class="logo-lg">
                    <img src="{{ asset('admin/images/logo.png') }}" alt="" height="60">
                </span>
            </a>
        </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="">
                    <a href="{{ route('student.dashboard') }}"
                        class="{{ request()->is('student/dashboard') ? 'active' : '' }}">
                        <i class="ri-home-smile-2-line"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('student.subscription') }}"
                        class="{{ request()->is('student/subscription') ? 'active' : '' }}">
                        <i class="ri-price-tag-3-line"></i>
                        <span>Subscription</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('student.courses') }}"
                        class="{{ request()->is('student/course/all-course') ? 'active' : '' }}">
                        <i class="ri-home-smile-2-line"></i>
                        <span>Courses</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('playground.index') }}">
                        <i class="ri-terminal-box-fill"></i>
                        <span>Playgrounds</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('student.resume.index') }}"
                        class="{{ request()->is('student/resume') ? 'active' : '' }}">
                        <i class="ri-file-text-fill"></i>
                        <span>My Resume</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('student.ticket.index') }}"
                        class="{{ request()->is('student/ticket.*') ? 'active' : '' }}">
                        <i class="ri-coupon-3-line"></i>
                        <span>Support Ticket</span>
                    </a>
                </li>
                <li class="">
                    <a href="{{ route('student.chat.index') }}"
                        class="{{ request()->is('student/chat.*') ? 'active' : '' }}">
                        <i class="ri-coupon-3-line"></i>
                        <span>Chat</span>
                    </a>
                </li>
            </ul>
            <ul class="list-unstyled">
                <li>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a onclick="event.preventDefault(); this.closest('form').submit();" class="waves-effect"
                            href="javascript:void(0)">
                            <i class="ri-logout-circle-r-line"></i>
                            <span>Logout</span>
                        </a>
                    </form>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
