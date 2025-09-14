<!-- ========== Left Sidebar Start ========== -->
<div class="vertical-menu">

    <div data-simplebar class="h-100">
        <div class="navbar-brand-box">
            <a href="{{route('coach.dashboard')}}" class="logo logo-dark">
                <span class="logo-sm">
                    <img src="{{asset('admin/images/logo.png')}}" alt="" height="22">
                </span>
                <span class="logo-lg">
                    <img src="{{asset('admin/images/logo.png')}}" alt="" height="17">
                </span>
            </a>

            <a href="{{route('admin.dashboard')}}" class="logo logo-light">
                <span class="logo-sm">
                    <img src="{{asset('admin/images/logo.png')}}" alt="" height="20">
                </span>
                <span class="logo-lg">
                    <img src="{{asset('admin/images/logo.png')}}" alt="" height="60">
                </span>
            </a>
        </div>
        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="">
                    <a href="{{route('coach.dashboard')}}"
                        class="{{ request()->is('coach/dashboard') ? 'active' : '' }}">
                        <i class="ri-home-smile-2-line"></i>
                        <span>Home</span>
                    </a>
                </li>
                <li class="{{ request()->is('coach/coaching*') ? 'li-active' : '' }}">
                    <a href="javascript: void(0);" class="{{ request()->is('coach/coaching*') ? 'active' : '' }}">
                        <i class="ri-git-pull-request-line"></i>
                        <span>Coaching</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li class="{{ request()->is('coach/coaching*') ? 'li-active' : '' }}">
                            <a href="{{route('coach.coaching.dashboard')}}"
                                class="{{ request()->is('coach/coaching*') ? 'active' : '' }}">Dashboard</a>
                        </li>

                        {{-- <li class="{{ request()->is('admin/tag-categories*') ? 'li-active' : '' }}">
                            <a href="{{route('admin.tag-categories.index')}}"
                                class="{{ request()->is('admin/tag-categories*') ? 'active' : '' }}">Booked
                                Schedules</a>
                        </li> --}}
                    </ul>
                </li>
                <li class="">
                    <a href="{{route('coach.chat.index')}}"
                       class="{{ request()->is('coach/chat.*') ? 'active' : '' }}">
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
