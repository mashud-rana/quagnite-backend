<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    @include('admin.layouts.partials._head')
</head>

<body data-sidebar="dark">

    <div id="app">
        <!-- Begin page -->
        <div id="layout-wrapper">

            @include('admin.layouts.partials._topbar')

            <!-- ========== Left Sidebar Start ========== -->
            @php
                $user_type = auth()->user()->user_type;
            @endphp

            @if ($user_type == USER_TYPE_ADMIN)
                @include('admin.layouts.partials._sidebar')
            @elseif ($user_type == USER_TYPE_STUDENT)
                @include('student.layouts.partials._sidebar')
            @elseif ($user_type == USER_TYPE_COACH)
                @include('coach.layouts.partials._sidebar')
            @elseif ($user_type == USER_TYPE_TEACHER)
                @include('teacher.layouts.partials._sidebar')
            @elseif ($user_type == USER_TYPE_MEMBER)
                @include('member.layouts.partials._sidebar')
            @endif

            <!-- Left Sidebar End -->

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                        <!-- start page title -->
                        @include('admin.layouts.partials._breadcrumb')
                        <!-- end page title -->


                        <!-- Start Your Main Content Here-->
                        @yield('content')

                    </div> <!-- container-fluid -->
                </div>
                <!-- End page-content -->

                @include('admin.layouts.partials._footer')

            </div>
            <!-- end main content-->

        </div>
        <!-- END layout-wrapper -->
    </div>

    <!-- JAVASCRIPT -->
    @include('admin.layouts.partials._footer-script')
</body>

</html>
