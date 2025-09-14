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
<script src="{{ asset('/new-frontend/js/custom.js') }}"></script>

<!--vue js script-->
<!-- <script src="{{ asset('js/app.js') }}"></script> -->
<!-- Axios -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.7.2/axios.min.js"
    integrity="sha512-JSCFHhKDilTRRXe9ak/FJ28dcpOJxzQaCd3Xg8MyF6XFjODhy/YMCM8HW0TFDckNHWUewW+kfvhin43hKtJxAw=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!-- Jquery validation -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>

<script>
    function initializePagejs() {
        $(function() {
            /*========================================
               mega link
               ========================================*/

            // let win = $(this);
            // if (1199 <= win.width()) {
            //     // console.log('test');
            //     $(document).on("mouseover", ".ic-mega-link", function (e) {
            //         $(".ic-mega-link").removeClass("active");
            //         $(this).addClass("active");
            //         let itemClass = $(this).data("link");
            //         $(".mega-content").hide();
            //         $("#" + itemClass).fadeIn();
            //     });

            //     $(document).on("mouseover", ".ic-catagories-menu", function () {
            //         if ($(this).children()[1]) {
            //             $(this)
            //                 .children(".ic-main-mega-menu")
            //                 .removeClass("ic-main-mega-menu");
            //         }
            //         $(this)
            //             .children(".ic-main-mega-menu")
            //             .addClass("ic-main-mega-menu");
            //     });

            //     $(document).on("mouseleave", ".ic-catagories-menu", function () {
            //         $(this).children().eq(1).addClass("ic-main-mega-menu");
            //     });
            // }
            $(".ic-select").selectpicker();
            $(".ic-upcoming-event-slider").slick({
                adaptiveHeight: true,
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
                        @foreach ($upcoming_events as $event)
                            {
                                startDate: "{{ custom_date($event->event_start) }}",
                                endDate: "{{ custom_date($event->event_end) }}",
                                summary: "{{ $event->title }}"
                            },
                        @endforeach


                    ],

                });
                $calendar = container.data('plugin_simpleCalendar')
            })
            /* === banner slider ===*/
            $(".ic_image_slider").slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                autoplay: true,
                speed: 1500,
                // autoplaySpeed: 2000,
                arrows: true,
                prevArrow: '<button class="slide-arrow prev-arrow"></button>',
                nextArrow: '<button class="slide-arrow next-arrow"></button>',
            });

            /* === review slider ===*/
            $(".review-slider").slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2000,
                arrows: false,
                dots: true,
                responsive: [{
                        breakpoint: 1200,
                        settings: {
                            slidesToShow: 3,
                        },
                    },

                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                        },
                    },
                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                        },
                    },
                ],
            });

            /* === verified slider ===*/
            $(".ic-verified-slider").slick({
                slidesToShow: 4,
                slidesToScroll: 1,
                autoplay: true,
                autoplaySpeed: 2000,
                arrows: true,
                dots: false,
                prevArrow: '<button class="slide-arrow prev-arrow"></button>',
                nextArrow: '<button class="slide-arrow next-arrow"></button>',
                responsive: [{
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 3,
                            slidesToScroll: 1,
                        },
                    },

                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                            arrows: false,
                        },
                    },
                ],
            });
            // coach details
            // $(".ic-date-slider").slick({
            //     slidesToShow: 6,
            //     slidesToScroll: 6,
            //     arrows: false,
            //     swipe: false,
            //     responsive: [{
            //         breakpoint: 767,
            //         settings: {
            //             slidesToShow: 6,
            //         },
            //     }, ],
            // });
            // $(".ic-dates-arrows").on("click", function() {
            //     $(".ic-date-slider").slick("slickNext");
            // });
        });
    }

    initializePagejs();


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

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API = Tawk_API || {},
        Tawk_LoadStart = new Date();
    (function() {
        var s1 = document.createElement("script"),
            s0 = document.getElementsByTagName("script")[0];
        s1.async = true;
        s1.src = 'https://embed.tawk.to/657592f370c9f2407f7e0043/1hh9kc2kn';
        s1.charset = 'UTF-8';
        s1.setAttribute('crossorigin', '*');
        s0.parentNode.insertBefore(s1, s0);
    })();
</script>
<!--End of Tawk.to Script-->
