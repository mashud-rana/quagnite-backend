<!-- Set character encoding for the document -->
<meta charset="UTF-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<!-- Viewport for responsive web design -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no,viewport-fit=cover" />
<!-- Document Title -->
<title>MC DNS</title>
<!-- Meta Description -->
<meta name="description" content="A simple HTML5 Template for new projects." />
<!--Keyword-->
<meta name="keywords"
    content="cryptocurrency, financial, financial company, HYIP, hyip business, HYIP,hyip website, illustration hyip" />
<!--Author-->
<meta name="author" content="ITClan BD- Mainuddin sani" />
<!--Favicon-->
<link rel="icon" href="{{ getStoreFile(config('settings.favicon_logo')) }}" />
<!--Favicon-->
<!-- ==== CSS Dependencies Start ==== -->
{{-- <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/assets/css/chat.min.css"> --}}
{{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" /> --}}
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css'>
<link rel="stylesheet" href="{{ asset('new-frontendv1/css/card.css') }}" />
<link rel="stylesheet" href="{{ asset('new-frontendv1/css/simple-calendar.css') }}" />
{{-- <link rel="stylesheet" href="{{ asset('/new-frontend/vendors/vendor-min.css') }}" /> --}}
<link rel="stylesheet" href="{{ asset('/new-frontendv1/vendors/vendor-min.css') }}" />
<link rel="stylesheet" href="https://cdn.plyr.io/3.7.3/plyr.css" />
<link rel="stylesheet" href="https://code.jquery.com/ui/1.13.2/themes/base/jquery-ui.css">
<!-- ==== CSS Dependencies End ==== -->
<link href="{{ asset('admin/toastr/toastr.min.css') }}" rel="stylesheet" type="text/css">

<link href="{{ asset('admin/sweetalert/sweetalert.min.css') }}" rel="stylesheet" type="text/css">

<!-- Main css -->
<link rel="stylesheet" href="{{ asset('/new-frontendv1/css/style.css') }}" />
<!--Custom css use development purpose-->
<link rel="stylesheet" href="{{ asset('/new-frontendv1/css/custom.css') }}" />

@stack('styles')
