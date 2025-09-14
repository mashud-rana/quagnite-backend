<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <!-- Set character encoding for the document -->
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Viewport for responsive web design -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,viewport-fit=cover" />
    <!-- Document Title -->
    <title>{{ get_page_meta() }} {{ config('settings.site_title') ?? config('app.name') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @include('layouts.partials.head')
    @stack('styles')
</head>

<body>
    <div class="ic-preloader">
        <span class="loader"></span>
    </div>
    <div id="app">
        @include('layouts.partials.navbar')
        <!--Main Start-->
        <main>
            <!-- Start Your Main Content Here -->
            @yield('content')
        </main>
        <!--Main End-->

        @include('layouts.partials.footer')
    </div>

    <!-- JAVASCRIPT -->
    @include('layouts.partials.footer-script')
</body>

</html>
