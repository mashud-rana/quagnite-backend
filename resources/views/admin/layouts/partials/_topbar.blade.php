<header id="page-topbar">
    <div class="navbar-header change-topbar">
        <div class="d-flex">
            <!-- LOGO -->
            <!-- <div class="navbar-brand-box">
                <a href="index.html" class="logo logo-dark">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="" height="17">
                    </span>
                </a>

                <a href="index.html" class="logo logo-light">
                    <span class="logo-sm">
                        <img src="assets/images/logo-sm.png" alt="" height="22">
                    </span>
                    <span class="logo-lg">
                        <img src="assets/images/logo.png" alt="" height="40">
                    </span>
                </a>
            </div> -->

            <button type="button"
                class="btn d-flex align-items-center align-self-center btn-sm px-3 font-size-24 header-item waves-effect"
                id="vertical-menu-btn">
                <i class="mdi mdi-menu"></i>
            </button>
            <!-- App Search-->
            <form class="app-search d-none d-lg-block">
                <div class="position-relative">
                    <input type="text" id="live-search" name="q" placeholder="Search..."
                                    class="form-control" autocomplete="off">
                    <span class="ri-search-line"></span>
                </div>
                {{-- <div class="search-feild-drop-dwon">
                    <ul id="search-results-list"></ul>
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
                </div> --}}
            </form>

        </div>

        <div class="d-flex align-items-center ic-topbar-right">


            <div class="dropdown d-inline-block d-lg-none ms-2">
                <button type="button" class="btn header-item noti-icon waves-effect" id="page-header-search-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-search-dropdown">

                    <form class="p-3">
                        <div class="form-group m-0">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search ..."
                                    aria-label="Recipient's username">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="submit"><i
                                            class="mdi mdi-magnify"></i></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

            <!-- <div class="dropdown d-none d-md-block ms-2">
                <button type="button" class="btn header-item waves-effect" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="me-2" src="assets/images/flags/us_flag.jpg" alt="Header Language" height="16"> English <span class="mdi mdi-chevron-down"></span>
                </button>
                <div class="dropdown-menu dropdown-menu-end">

                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="assets/images/flags/germany_flag.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> German </span>
                    </a>

                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="assets/images/flags/italy_flag.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Italian </span>
                    </a>

                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="assets/images/flags/french_flag.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> French </span>
                    </a>

                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="assets/images/flags/spain_flag.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Spanish </span>
                    </a>

                    <a href="javascript:void(0);" class="dropdown-item notify-item">
                        <img src="assets/images/flags/russia_flag.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle"> Russian </span>
                    </a>
                </div>
            </div> -->


            <div class="dropdown d-inline-block">
                <a href="{{ route('chat') }}" class="btn noti-icon  header-item waves-effect"
                    id="page-header-notifications-dropdown">
                    <div class="ic-right-items position-relative">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <g clip-path="url(#clip0_1_53)">
                                <path
                                    d="M13.1919 0C13.6922 0.0818009 14.195 0.152751 14.6928 0.247907C19.5164 1.16608 23.549 5.3204 24.3942 10.1441C25.5544 16.7667 21.1944 22.6472 15.1313 24.1763C12.6431 24.8032 10.1975 24.6429 7.80706 23.7089C7.62748 23.6388 7.51389 23.6655 7.35937 23.769C5.21612 25.2022 2.98685 25.3474 0.685738 24.173C0.11777 23.8834 -0.0601378 23.3107 0.258927 22.779C1.3957 20.8859 1.56525 18.9043 0.919608 16.8059C0.59052 15.735 0.364168 14.6332 0.0960535 13.5439C0.0526206 13.3644 0.0317394 13.1791 0 12.9963V11.4346C0.105241 10.8002 0.158697 10.1525 0.323241 9.53398C1.62957 4.63677 4.74922 1.55422 9.66298 0.301328C10.2435 0.153585 10.8482 0.0976602 11.4412 0H13.1919ZM2.4431 22.8533C2.52746 22.8775 2.62518 22.9109 2.72458 22.9318C4.18793 23.2331 5.49676 22.9101 6.6185 21.9235C7.04865 21.5453 7.4596 21.4777 7.98413 21.719C9.87012 22.5871 11.8455 22.8441 13.896 22.5028C19.3627 21.5913 23.569 16.4203 22.5199 10.4655C21.5937 5.20521 16.6031 1.37142 11.2867 1.95821C7.50971 2.37556 4.7275 4.33545 2.9835 7.70514C2.04719 9.51394 1.68386 11.4613 2.01629 13.4846C2.1683 14.4128 2.45312 15.3235 2.72708 16.2275C3.2157 17.8409 3.39779 19.4661 2.99102 21.1188C2.84736 21.7006 2.63103 22.264 2.44226 22.8533H2.4431Z"
                                    fill="#5C6268" />
                                <path
                                    d="M29.5636 29.9107C29.3631 29.2605 29.141 28.6662 28.9981 28.0535C28.6173 26.4183 28.7543 24.8107 29.3373 23.2381C30.743 19.4444 30.2619 15.9278 27.7762 12.7108C27.392 12.2134 27.4095 11.6408 27.8305 11.291C28.2723 10.9237 28.8478 11.0064 29.2521 11.513C31.2951 14.0781 32.1921 16.9995 31.9675 20.2674C31.8823 21.5019 31.5891 22.6855 31.1481 23.8399C30.373 25.8716 30.6102 27.8206 31.6843 29.6854C31.8706 30.0092 32.0017 30.3439 31.8171 30.6853C31.7052 30.8923 31.5206 31.1035 31.3151 31.2095C29.0416 32.3798 26.8282 32.2454 24.6983 30.8372C24.5003 30.7062 24.3592 30.6937 24.137 30.7713C19.6283 32.338 15.4939 31.6528 11.7511 28.6804C11.2851 28.3098 11.2174 27.723 11.559 27.2998C11.9048 26.8707 12.4978 26.8382 12.9739 27.2313C15.0261 28.9258 17.3874 29.7313 20.0426 29.6762C21.4225 29.647 22.7488 29.3531 24 28.7689C24.5429 28.5151 24.9697 28.5886 25.4216 28.985C26.626 30.0401 28.0268 30.2888 29.5653 29.9116L29.5636 29.9107Z"
                                    fill="#5C6268" />
                                <path
                                    d="M6.743 13.821C5.90274 13.8177 5.24373 13.1499 5.25042 12.3102C5.2571 11.4938 5.92613 10.8261 6.743 10.8211C7.56906 10.8161 8.25313 11.4972 8.25313 12.3252C8.25313 13.1616 7.5841 13.8252 6.743 13.821Z"
                                    fill="#5C6268" />
                                <path
                                    d="M12.2781 13.8218C11.4395 13.816 10.7822 13.1424 10.7947 12.3027C10.8073 11.4822 11.4746 10.8211 12.2923 10.8211C13.1159 10.8211 13.805 11.5122 13.8 12.3327C13.7949 13.1616 13.1142 13.8285 12.2781 13.8218Z"
                                    fill="#5C6268" />
                                <path
                                    d="M19.3335 12.3361C19.3293 13.1758 18.6611 13.8294 17.8175 13.821C16.9973 13.8127 16.3325 13.1466 16.3291 12.3302C16.3258 11.5089 17.0157 10.8194 17.8384 10.8203C18.6678 10.8219 19.3377 11.5005 19.3335 12.3352V12.3361Z"
                                    fill="#5C6268" />
                            </g>
                            <defs>
                                <clipPath id="clip0_1_53">
                                    <rect width="32" height="32" fill="white" />
                                </clipPath>
                            </defs>
                        </svg>
                        <span class="badge rounded-pill">
                            {{ auth()->user()->unseenMessagesCount() }}
                        </span>
                    </div>
                </a>
            </div>
            <div class="dropdown d-inline-block">
                <button type="button" class="btn noti-icon header-item waves-effect"
                    id="page-header-notifications-dropdown" data-bs-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <div class="ic-right-items position-relative">
                        <svg width="32" height="32" viewBox="0 0 32 32" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M24 10.6667C24 8.54492 23.1571 6.51009 21.6569 5.0098C20.1566 3.50951 18.1217 2.66666 16 2.66666C13.8783 2.66666 11.8434 3.50951 10.3431 5.0098C8.84286 6.51009 8 8.54492 8 10.6667C8 20 4 22.6667 4 22.6667H28C28 22.6667 24 20 24 10.6667Z"
                                stroke="#5C6268" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                                d="M18.3067 28C18.0723 28.4041 17.7358 28.7395 17.331 28.9727C16.9262 29.2059 16.4672 29.3286 16 29.3286C15.5329 29.3286 15.0739 29.2059 14.6691 28.9727C14.2642 28.7395 13.9278 28.4041 13.6934 28"
                                stroke="#5C6268" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>

                        <span class="badge rounded-pill">
                            {{ auth()->user()->unreadNotifications->count() }}
                        </span>
                    </div>
                </button>
                <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end p-0"
                    aria-labelledby="page-header-notifications-dropdown">
                    <div class="p-3">
                        <div class="row align-items-center">
                            <div class="col">
                                <h5 class="m-0 font-size-16"> Notifications
                                    ({{ auth()->user()->unreadNotifications->count() }})
                                </h5>
                            </div>

                        </div>
                    </div>
                    <div data-simplebar style="max-height: 230px;">
                        @foreach (auth()->user()->unreadNotifications as $notification)
                            <a href="#" class="text-reset notification-item"
                                data-notification-id="{{ $notification->id }}"
                                data-url="{{ $notification->data['url'] }}">
                                <div class="d-flex">
                                    <div class="flex-shrink-0 me-3">
                                        <div class="avatar-xs">
                                            <span class="avatar-title bg-success rounded-circle font-size-16">
                                                <i class="mdi mdi-bell-outline"></i>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="flex-grow-1">
                                        <h6 class="mb-1">{{ $notification->data['title'] }}</h6>
                                        <div class="font-size-12 text-muted">
                                            <p class="mb-1">{{ $notification->data['msg'] }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endforeach
                    </div>
                    <div class="p-2 border-top">
                        <div class="d-grid">
                            <a class="btn btn-sm btn-link font-size-14 text-center" href="{{ route('admin.notification.index') }}">
                                View all
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="dropdown d-inline-block">
                <button type="button" class="btn header-item waves-effect" id="page-header-user-dropdown"
                    data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img class="rounded-circle header-profile-user" src="{{ auth()->user()->avatar_url }}"
                        alt="Avatar">
                </button>
                <div class="dropdown-menu dropdown-menu-end">
                    <!-- item-->
                    <a class="dropdown-item" href="{{ route('admin.profile.info') }}">
                        <i class="mdi mdi-account-circle font-size-17 align-middle me-1"></i>
                        Profile
                    </a>
                    <div class="dropdown-divider"></div>

                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a onclick="event.preventDefault(); this.closest('form').submit();"
                            class="dropdown-item  text-danger" href="javascript:void(0)">
                            <i class="bx bx-power-off font-size-17 align-middle me-1 text-danger"></i>
                            Logout
                        </a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</header>
@push('scripts')
<script src="{{ asset('/frontend/js/custom.js') }}"></script>
@endpush
{{-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js" type="application/javascript"></script> --}}
{{-- <script>
    $(document).ready(function() {
        $(".notification-item").on("click", function(event) {
            event.preventDefault();

            var notificationId = $(this).data("notification-id");
            var url = $(this).data("url");

            // Make an AJAX call to mark the notification as read
            $.ajax({
                url: '/markasread/' + notificationId,
                type: 'GET',
                success: function(response) {

                    window.location.href = url;
                },
                error: function(xhr) {
                    console.error(xhr);
                }
            });
        });
    });
</script> --}}
