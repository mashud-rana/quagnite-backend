<!--Main Start-->
<!-- ==== js Dependencies Start ==== -->
<script src="{{ asset('/new-frontendv1/vendors/vendor-min.js') }}"></script>
<!-- ==== js Dependencies End ==== -->
<script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
{{-- <script src="https://unpkg.com/feather-icons"></script> --}}
{{-- <script src="https://unpkg.com/boxicons@2.1.4/dist/boxicons.js"></script> --}}
<script src="{{ asset('new-frontendv1/js/card.js') }}"></script>
<script src="{{ asset('new-frontendv1/js/jquery.simple-calendar.min.js') }}"></script>
<!-- Main js -->
<script src="{{ asset('/new-frontendv1/js/main.js') }}"></script>
<script src="{{ asset('admin/toastr/toastr.min.js') }}"></script>
<script src="{{ asset('admin/sweetalert/sweetalert.min.js') }}"></script>
<script src="https://cdn.plyr.io/3.7.3/plyr.js"></script>

<!--Custom js use development purpose-->
<script src="{{ asset('/new-frontendv1/js/custom.js') }}"></script>
{{-- chatbot --}}
{{-- <script>
    var botmanWidget = {
        aboutText: 'Start The conversation with Hi',
        introMessage: "Welcome to MCDNS Chatbot",
        title: 'MCDNS Chatbot',
    };
</script>
<script src='https://cdn.jsdelivr.net/npm/botman-web-widget@0/build/js/widget.js'></script> --}}
<!-- Axios -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js"
    integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Jquery validation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

<script>
    $(function() {
        if ($(window).width() <= 1199) {
            $(document).on("click", ".ic-navbar-menu-link", function() {
                $(this).parent().find(".ic-dropdwon").toggleSlide();
                console.log("clicked");
            });
        }
        $(".ic-select").selectpicker();
        $(".ic-upcoming-event-slider").slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: true,
            dots: false,
            speed: 500,
            // prevArrow: '<button class="coming-event-arrow-left prev-arrow"></button>',
            // nextArrow: '<button class="coming-event-arrow-right next-arrow"></button>',
            nextArrow: ".coming-event-arrow-left",
            prevArrow: ".coming-event-arrow-right",

        });
        // $('#menu1').metisMenu();
        $('.ic-enterprise-mainslider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 9000,
            speed: 2000,
            centerMode: true,
            centerPadding: '0',
            arrows: false,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        centerMode: false,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        centerMode: false,
                    }
                },
            ]
        });
        $(".ic-enterprise-1").click(function() {
            $(".ic-enterprise-mainslider").slick("slickNext");
        });
        $(".ic-enterprise-2").click(function() {
            $(".ic-enterprise-mainslider").slick("slickPrev");
        });

        $('.ic-userTestiminial-slier').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 9000,
            speed: 2000,
            centerPadding: '0',
            arrows: false,
            responsive: [{
                    breakpoint: 991,
                    settings: {
                        slidesToShow: 2,
                        centerMode: false,
                    }
                },
                {
                    breakpoint: 767,
                    settings: {
                        slidesToShow: 1,
                        centerMode: false,
                    }
                },
            ]
        });
        $(".ic-enterprise-one").click(function() {
            $(".ic-userTestiminial-slier").slick("slickNext");
        });
        $(".ic-enterprise-two").click(function() {
            $(".ic-userTestiminial-slier").slick("slickPrev");
        });
        // Accessibility Resources slider
        $('.ic-accessibility-slider').slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 9000,
            speed: 2000,
            arrows: false,
        });
        $(".accessibility-arrow-left").click(function() {
            $(".ic-accessibility-slider").slick("slickNext");
        });
        $(".accessibility-arrow-right").click(function() {
            $(".ic-accessibility-slider").slick("slickPrev");
        });
        // feather icons
        feather.replace();
        // video code
        const player = new Plyr(document.getElementById('player'));

        // calender
        $(document).ready(function() {
            $(document).on("click", ".ic-discription-links", function(e) {
                e.preventDefault();
                $(".ic-discription-links").removeClass("active");
                $(this).addClass("active");
                let disLink = $(this).data("tabs");
                $(".ic-tabs-content-items").hide();
                $("#" + disLink).fadeIn();
                if (disLink === "course-rating-tabs") {
                    $(".ic-course-rating-slider").slick({
                        slidesToShow: 3,
                        slidesToScroll: 1,
                        autoplay: true,
                        arrows: false,
                        autoplaySpeed: 3000,
                        responsive: [{
                                breakpoint: 991,
                                settings: {
                                    slidesToShow: 2,
                                },
                            },
                            {
                                breakpoint: 767,
                                settings: {
                                    slidesToShow: 2,
                                },
                            },
                            {
                                breakpoint: 500,
                                settings: {
                                    slidesToShow: 1,
                                },
                            },
                        ],
                    });
                    $(".ic-course-1").click(function() {
                        $(".ic-course-rating-slider").slick("slickNext");
                    });
                    $(".ic-course-2").click(function() {
                        $(".ic-course-rating-slider").slick("slickPrev");
                    });
                } else {
                    $(".ic-course-rating-slider").slick("unslick");
                }
            });
            /*========================================
                  Select
              ========================================*/
            $(".ic-select").selectpicker();

            let container = $("#calender").simpleCalendar({
                fixedStartDay: 0, // begin weeks by sunday
                disableEmptyDetails: true,
                events: [
                    // generate new event after tomorrow for one hour
                    {
                        startDate: new Date(new Date().setHours(new Date().getHours() + 24))
                            .toDateString(),
                        endDate: new Date(new Date().setHours(new Date().getHours() + 25))
                            .toISOString(),
                        summary: 'Visit of the Eiffel Tower'
                    },
                    // generate new event for yesterday at noon
                    {
                        startDate: new Date(new Date().setHours(new Date().getHours() -
                            new Date()
                            .getHours() - 12, 0)).toISOString(),
                        endDate: new Date(new Date().setHours(new Date().getHours() -
                            new Date()
                            .getHours() - 11)).getTime(),
                        summary: 'Restaurant'
                    },
                    // generate new event for the last two days
                    {
                        startDate: new Date(new Date().setHours(new Date().getHours() - 48))
                            .toISOString(),
                        endDate: new Date(new Date().setHours(new Date().getHours() - 24))
                            .getTime(),
                        summary: 'Visit of the Louvre'
                    }
                ],

            });
            $calendar = container.data('plugin_simpleCalendar')
        })
        // tagify
        var input = document.querySelector('.tags');
        console.log(input);
        new Tagify(input);
    });

    toastr.options = {
        "closeButton": true,
        "progressBar": true,
        "timeOut": 2000
    }

    @if (Session::has('success'))
        toastr.success("{{ session('success') }}");
    @endif
    @if (Session::has('error'))
        toastr.error("{{ session('error') }}");
    @endif
    @if (Session::has('update'))
        toastr.info("{{ session('update') }}");
    @endif
    @if (Session::has('delete'))
        toastr.success("{{ session('delete') }}");
    @endif
    @if (Session::has('info'))
        toastr.info("{{ session('info') }}");
    @endif
    @if (Session::has('warning'))
        toastr.warning("{{ session('warning') }}");
    @endif

    @if ($errors->any())
        @foreach ($errors->all() as $error)
            toastr.error("{{ $error }}");
        @endforeach
    @endif

    // Toaster notify
    const notify = (type, msg) => {
        if (type == 'success') {
            toastr.success(msg);
        } else {
            toastr.warning(msg);
        }
    }
</script>

@stack('scripts')
