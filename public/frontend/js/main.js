(function ($) {
    ("use strict");

    $(".ic-creditCard").card({
        container: ".card-wrapper",
    });

    // calender js
    $(window).on("load", function () {
        $(".has-event").each(function () {
            var hue =
                "rgb(" +
                (Math.floor((256 - 199) * Math.random()) + 200) +
                "," +
                (Math.floor((256 - 199) * Math.random()) + 200) +
                "," +
                (Math.floor((256 - 199) * Math.random()) + 200) +
                ")";
            $(this).css("background-color", hue);
        });
    });

    $(".search-btn").on("click", function () {
        $(".form-search").toggleClass("active");
    });
    // calender js

    $(".plus").on("click", function () {
        let findNumber = $(this).parent(".increment").find("input");
        findNumber.val(Number(findNumber.val()) + 1);
    });
    $(".minus").on("click", function () {
        let findNumber = $(this).parent(".increment").find("input");
        let minusValue = Number(findNumber.val());
        if (minusValue > 0) {
            findNumber.val(minusValue - 1);
        }
    });

    $(document).ready(function () {
        $(document).on("click", ".ic-ques-ans", function () {
            $('.ic-ques-ans').removeClass('active');
            $(this).addClass('active');
        });
    })
    /*========================================
      responsive video support
    ========================================*/
    const processVideoElement = document.querySelectorAll(
        ".responsive-video-poster"
    );
    for (const item of processVideoElement) {
        ResponsiveVideoPoster({
            selector: item,
            preConnections: ["https://www.youtube.com"],
        });
    }

    /*========================================
       Custom Tab
       ========================================*/

    $(document).on("click", ".ic-tab-link", function (e) {
        e.preventDefault();
        let bigImage = $("#bigImage");
        let prev_img = bigImage.attr("src");
        $(".ic-tab-link").removeClass("active");
        $(this).addClass("active");
        let src = $(this).find("img").attr("src");
        $(this).find("img").attr("src", prev_img);
        bigImage.attr("src", src);
        let itemClass = $(this).data("link");
        $(".ic__testimonial--tabs").hide();
        $("#" + itemClass).fadeIn();
    });

    $(".ic-case-link").on("click", function (e) {
        e.preventDefault();
        $(".ic-case-link").removeClass("active");
        $(this).addClass("active");
        let itemClass = $(this).data("link");
        $(".ic__caseBase--tabs").hide();
        $("#" + itemClass).fadeIn();
    });

    $(".ic-benefits-link").on("click", function (e) {
        e.preventDefault();
        $(".ic-benefits-link").removeClass("active");
        $(this).addClass("active");
        let itemClass = $(this).data("link");
        $(".benefits-containers--items").hide();
        $("#" + itemClass).fadeIn();
    });
    /*========================================
            Preloader
        ========================================*/

    $(window).on("load", function () {
        $(".ic-preloader").fadeOut(500);
    });

    // class
    if ($(".isNavbar").length > 0) {
        $("body").addClass("icBgNavbar");
    }
    /*========================================
      Ic Mobile menu activation
     ========================================*/

    $(".ic-mobile-menu-open,.ic-mobile-menu-overlay").on("click", function () {
        $(this).addClass("active");
        $(".ic-mobile-menu-warper,.ic-mobile-menu-overlay").addClass("active");
    });

    $(".ic-menu-close,.ic-mobile-menu-overlay").on("click", function () {
        $(".ic-mobile-menu-open").removeClass("active");
        $(".ic-mobile-menu-warper,.ic-mobile-menu-overlay").removeClass(
            "active"
        );
    });

    /*========================================
     Scroll  top
    ========================================*/

    // var scrollTop = $(".ic-scroll-top");
    // $(window).scroll(function () {
    //     if ($(this).scrollTop() > 300) {
    //         $(".ic-header-area").addClass("sticky");
    //         $(".ic__logoSlider--part").addClass("ic--logo-add");
    //         scrollTop.css({
    //             bottom: "4%",
    //             opacity: "1",
    //             transition: "all .5s ease-in-out",
    //         });
    //     } else {
    //         $(".ic-header-area").removeClass("sticky");
    //         $(".ic__logoSlider--part").removeClass("ic--logo-add");
    //         scrollTop.css({
    //             bottom: "-5%",
    //             opacity: "0",
    //             transition: "all .5s ease-in-out",
    //         });
    //     }
    // });
    // scrollTop.on("click", function () {
    //     $("html, body").animate(
    //         {
    //             scrollTop: 0,
    //         },
    //         0
    //     );
    //     return false;
    // });

    /*========================================
     slider
     ========================================*/
    $(".ic__events--ContentSlider").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        asNavFor: ".ic__events--imageSlider",
    });
    $(".prev-btn").click(function () {
        $(".ic__events--ContentSlider").slick("slickPrev");
    });

    $(".next-btn").click(function () {
        $(".ic__events--ContentSlider").slick("slickNext");
    });
    var $slider = $(".ic__events--imageSlider");

    if ($slider.length) {
        var currentSlide;
        var slidesCount;
        var sliderCounter = document.createElement("div");
        sliderCounter.classList.add("slider__counter");

        var updateSliderCounter = function (slick, currentIndex) {
            currentSlide = slick.slickCurrentSlide() + 1;
            slidesCount = slick.slideCount;
            $(sliderCounter).text(currentSlide + "/" + slidesCount);
        };

        $slider.on("init", function (event, slick) {
            $slider.append(sliderCounter);
            updateSliderCounter(slick);
        });

        $slider.on("afterChange", function (event, slick, currentSlide) {
            updateSliderCounter(slick, currentSlide);
        });

        $slider.slick({
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            asNavFor: ".ic__events--ContentSlider",
        });
    }

    /*========================================
     wiki part
     ========================================*/
    // $('.slider-2').slick({
    //     slidesToShow: 2,
    //     slidesToScroll: 1,
    //     arrows: false,
    //     responsive: [{
    //         breakpoint: 767,
    //         settings: {
    //             slidesToShow: 1,
    //         }
    //     }, ],
    // });
    // $(".wiki-next-btn2").click(function () {
    //     $(".slider-2").slick("slickPrev");
    // });
    //
    // $(".wiki-prev-btn2").click(function () {
    //     $(".slider-2").slick("slickNext");
    // });
    // $('.slider-3').slick({
    //     slidesToShow: 2,
    //     slidesToScroll: 1,
    //     arrows: false,
    //     responsive: [{
    //         breakpoint: 767,
    //         settings: {
    //             slidesToShow: 1,
    //         }
    //     }, ],
    // });
    // $(".wiki-next-btn3").click(function () {
    //     $(".slider-3").slick("slickPrev");
    // });
    //
    // $(".wiki-prev-btn3").click(function () {
    //     $(".slider-3").slick("slickNext");
    // });
    //
    // $('.slider-4').slick({
    //     slidesToShow: 2,
    //     slidesToScroll: 1,
    //     arrows: false,
    //     responsive: [{
    //         breakpoint: 767,
    //         settings: {
    //             slidesToShow: 1,
    //         }
    //     }, ],
    // });
    // $(".wiki-next-btn4").click(function () {
    //     $(".slider-4").slick("slickPrev");
    // });
    //
    // $(".wiki-prev-btn4").click(function () {
    //     $(".slider-4").slick("slickNext");
    // });
    //
    // $('.ic__caseBase--slider').slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     arrows: false,
    //     centerMode: true,
    //     centerPadding: '0',
    //     responsive: [{
    //         breakpoint: 767,
    //         settings: {
    //             slidesToShow: 1,
    //
    //         }
    //     }, ],
    // });
    // $(".wiki-next-btn4").click(function () {
    //     $(".slider-4").slick("slickPrev");
    // });
    //
    // $(".wiki-prev-btn4").click(function () {
    //     $(".slider-4").slick("slickNext");
    // });

    /*========================================
     services-slider
     ========================================*/
    let serviceSlider = $(".ic__feature--content");
    serviceSlider.owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        autoplay: false,
        autoplaySpeed: 3000,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 2,
            },
            767: {
                items: 2,
            },
            991: {
                items: 3,
            },
            1200: {
                items: 4,
            },
            1399: {
                items: 4,
            },
        },
    });

    $(".next-btn1").click(function () {
        serviceSlider.trigger("next.owl.carousel");
    });
    $(".prev-btn1").click(function () {
        serviceSlider.trigger("prev.owl.carousel");
    });

    /*========================================
    testimonial-slider
    ========================================*/
    let testimonial = $(".ic__bootcamp--slider");
    testimonial.owlCarousel({
        loop: true,
        margin: 11,
        nav: false,
        autoplay: false,
        autoplaySpeed: 3000,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            767: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 3,
            },
        },
    });

    $(".next-btn2").click(function () {
        testimonial.trigger("next.owl.carousel");
        console.log("test");
    });
    $(".prev-btn2").click(function () {
        testimonial.trigger("prev.owl.carousel");
    });
    /*========================================
    services-slider
    ========================================*/
    let teamSlider = $(".ic__latest--slider");
    teamSlider.owlCarousel({
        loop: true,
        margin: 24,
        nav: false,
        autoplay: true,
        center: true,
        autoplaySpeed: 3000,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            575: {
                items: 2,
                center: false,
            },
            767: {
                items: 2,
                center: false,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 3,
            },
        },
    });

    $(".next-btn3").click(function () {
        teamSlider.trigger("next.owl.carousel");
    });
    $(".prev-btn3").click(function () {
        teamSlider.trigger("prev.owl.carousel");
    });
    /*========================================
    services details slider
    ========================================*/
    let detailsSlider = $(".ic__details--slider");
    detailsSlider.owlCarousel({
        loop: true,
        margin: 24,
        nav: false,
        autoplay: false,
        autoplaySpeed: 3000,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            767: {
                items: 1,
            },
            992: {
                items: 1,
            },
            1200: {
                items: 1,
            },
        },
    });

    $(".next-btn4").click(function () {
        detailsSlider.trigger("next.owl.carousel");
    });
    $(".prev-btn4").click(function () {
        detailsSlider.trigger("prev.owl.carousel");
    });

    /*========================================
    services details slider
    ========================================*/
    let browseService = $(".ic__verified--slider");
    browseService.owlCarousel({
        loop: true,
        margin: 24,
        nav: false,
        autoplay: false,
        autoplaySpeed: 3000,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            575: {
                items: 2,
                margin: 10,
            },
            767: {
                items: 2,
                margin: 10,
            },
            992: {
                items: 3,
                margin: 10,
            },
            1200: {
                items: 4,
                margin: 10,
            },
            1399: {
                items: 4,
            },
        },
    });

    $(".next-btn2").click(function () {
        browseService.trigger("next.owl.carousel");
    });
    $(".prev-btn2").click(function () {
        browseService.trigger("prev.owl.carousel");
    });

    /*========================================
    services details slider
    ========================================*/
    let detailsBottom = $(".ic__coaching-reviewSlider");
    detailsBottom.owlCarousel({
        loop: true,
        margin: 36,
        nav: false,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            767: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 3,
            },
            1399: {
                items: 3,
            },
        },
    });

    $(".review-next-btn2").click(function () {
        detailsBottom.trigger("next.owl.carousel");
    });
    $(".review-prev-btn2").click(function () {
        detailsBottom.trigger("prev.owl.carousel");
    });

    let bootcampSlider = $(".ic__online-bootcampSlider");
    bootcampSlider.owlCarousel({
        loop: true,
        margin: 36,
        nav: false,
        autoplay: false,
        autoplaySpeed: 3000,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            767: {
                items: 2,
            },
            992: {
                items: 3,
            },
            1200: {
                items: 3,
            },
            1399: {
                items: 3,
            },
        },
    });
    $(".next-btno").click(function () {
        console.log("Next");
        bootcampSlider.trigger("next.owl.carousel");
    });
    $(".prev-btno").click(function () {
        bootcampSlider.trigger("prev.owl.carousel");
    });
    /*========================================
    ic__brands--logos
    ========================================*/
    let brandLogos = $(".ic__course-reviewSlider");
    brandLogos.owlCarousel({
        loop: true,
        margin: 30,
        nav: false,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1,
            },
            767: {
                items: 2,
            },
            992: {
                items: 2,
            },
            1200: {
                items: 2,
            },
            1399: {
                items: 2,
            },
        },
    });

    $(".next-btnR").click(function () {
        brandLogos.trigger("next.owl.carousel");
    });
    $(".prev-btnR").click(function () {
        brandLogos.trigger("prev.owl.carousel");
    });
    /*========================================
     logos
     ========================================*/
    let busienss = $(".ic-our-partner-slider");
    busienss.owlCarousel({
        loop: true,
        margin: 88,
        nav: false,
        autoplay: true,
        autoplaySpeed: 3000,
        dots: false,
        responsive: {
            0: {
                items: 4,
                margin: 30,
            },
            480: {
                items: 4,
                margin: 30,
            },
            767: {
                items: 5,
                margin: 30,
            },
            992: {
                items: 4,
                margin: 80,
            },
            1200: {
                items: 5,
            },
            1399: {
                items: 5,
            },
        },
    });
    /*========================================
     logos
     ========================================*/
    

    //  let dates = $(".ic-date-slider");
    //  dates.owlCarousel({
    //      loop: true,
    //      margin: 40,
    //      nav: false,
    //      autoplay: false,
    //      autoplaySpeed: 3000,
    //      dots: false,
    //      responsive: {
    //          0: {
    //              items: 4,
    //              margin: 30
    //          },
    //          480: {
    //              items: 4,
    //              margin: 30
    //          },
    //          767: {
    //              items: 5,
    //              margin: 30,
    //          },
    //          992: {
    //              items: 4,
    //              margin: 80,
    //          },
    //          1200: {
    //              items: 6,
    //          },
    //          1399: {
    //              items: 6,
    //          },
    //      },
    //  });
    //  $(".ic-dates-arrows").click(function () {
    //     dates.trigger("next.owl.carousel");
    // });
    /*========================================
     datepicker
     ========================================*/
    $(".datepicker").flatpickr({
        disableMobile: "true",
    });
    $(".display-datePicker").flatpickr({
        inline: true,
    });

    $(document).ready(function () {
        $(".selectpicker").selectpicker();
    });

    $(".service-select").on("click", function () {
        $(".choose-select--items").show();
    });
    $(".ic--chooseItems").on("click", function () {
        $(".ic__chooseTIme--mainPart").show();
    });

    /*========================================
     wow js
     ========================================*/
    new WOW().init();

    if ($(".ic__contact--content").length > 0) {
        $(".ic__product--part").addClass("news-letter");
    }

    $(".switch--inputs").on("click", function () {
        if ($(this).is(":checked")) {
            $(".yearly").removeClass("active");
            $(this)
                .closest(".ic__switch--buttons")
                .find(".monthly")
                .addClass("active");
        } else {
            $(".monthly").removeClass("active");
            $(this)
                .closest(".ic__switch--buttons")
                .find(".yearly")
                .addClass("active");
        }
    });

    $(".ic-de-nav-link").on("click", function () {
        $(".ic-de-nav-link").removeClass("active");
        $(this).addClass("active");
    });

    // counter up
    // DOM Element's
    const counters = document.querySelectorAll(".counter");
    for (let n of counters) {
        const updateCount = () => {
            const target = +n.getAttribute("data-target");
            const count = +n.innerText;
            const divider = 500;
            const speed = 10; // 1000 millisecond => 1 second;

            const inc = target / divider;

            if (count < target) {
                n.innerText = Math.ceil(count + inc);
                setTimeout(updateCount, speed);
            } else {
                n.innerText = target;
            }
        };

        updateCount();
    }

    var html_body = $("html, body");
    $(".ic__service--nav ul li a").on("click", function () {
        if (
            location.pathname.replace(/^\//, "") ==
            this.pathname.replace(/^\//, "") &&
            location.hostname == this.hostname
        ) {
            var target = $(this.hash);
            target = target.length
                ? target
                : $("[name=" + this.hash.slice(1) + "]");
            if (target.length) {
                html_body.animate(
                    {
                        scrollTop: target.offset().top - 100,
                    },
                    500
                );
                return false;
            }
        }
    });

    // progress bar
    $(".ic-chat-user").on("click", function () {
        $(".ic__chat--box--right").addClass("active");
    });
    $(".arrow-left").on("click", function () {
        $(".ic__chat--box--right").removeClass("active");
    });

    $(".ic__billing--card input").on("click", function () {
        $("input").parent().css({
            border: "1px solid #EAEFF3",
        });
        $(this).parent().css({
            border: "1px solid #019875",
        });
    });

    if ($(".ic__inner--page-search").length > 0) {
        $(".ic__innerPage--heading").addClass("isSearchBar");
    }

    // hide toggle
    $(".toggle-password").click(function () {
        $(this).toggleClass("ri-eye-off-line");
        input = $(this).parent().find("input");
        if (input.attr("type") == "password") {
            input.attr("type", "text");
        } else {
            input.attr("type", "password");
        }
    });

    $(document).on("click", ".ic-discription-links", function (e) {
        e.preventDefault();
        console.log('test');
        $(".ic-discription-links").removeClass("active");
        $(this).addClass("active");
        let disLink = $(this).data("tabs");
        $(".ic-tabs-content-items").hide();
        $("#" + disLink).fadeIn();
    });
})(jQuery);
