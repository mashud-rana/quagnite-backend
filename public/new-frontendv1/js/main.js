(function ($) {
    ("use strict");



    if ($(window).width() <= 1199) {

        // mobile nav
        $(document).on("click", ".all-catagories-link", function () {
            $(this).parent().find(".ic-mobile-mega-menu").slideToggle();
            $(this).parent().find(".ic-dropdwon").slideToggle();
            $(this).parent(".ic-navbar-menu-item").prevAll(".ic-navbar-menu-item").find(".ic-mobile-mega-menu").slideUp();
            $(this).parent(".ic-navbar-menu-item").nextAll(".ic-navbar-menu-item").find(".ic-dropdwon").slideUp();
            // $(this).parent().nextAll().find(".ic-mobile-mega-menu ").slideDown();
            $(this).next().find(".sub-menu-mega").slideUp();
        });
    }

    $(document).on("click", ".mobile-sub-mega-menu-link", function () {
        $(this).parent().find(".sub-menu-mega").slideDown();
        $(this).parent().nextAll().find(".sub-menu-mega").slideUp();
        $(this).parent().prevAll().find(".sub-menu-mega").slideUp();
    });



    /*========================================
     select js
    ========================================*/
    $(document).ready(function () {
        $(".selectpicker").selectpicker();
    });

    /*========================================
     Scroll  top
    ========================================*/

    $(window).on("scroll", function () {
        if ($(this).scrollTop() > 50) {
            $(".ic-main-header").addClass("sticky");
            $(".ic__logoSlider--part").addClass("ic--logo-add");
            $(".ic-scroll-top").css({
                bottom: "4%",
                opacity: "1",
                transition: "all .5s ease-in-out",
            });
        } else {
            $(".ic-main-header").removeClass("sticky");
            $(".ic__logoSlider--part").removeClass("ic--logo-add");
            $(".ic-scroll-top").css({
                bottom: "-5%",
                opacity: "0",
                transition: "all .5s ease-in-out",
            });
        }
    });
    $(".ic-scroll-top").on("click", function () {
        $("html, body").animate(
            {
                scrollTop: 0,
            },
            0
        );
        return false;
    });

    if ($(".isNavbar").length > 0) {
        $(".ic-bottom-navbar").addClass("isBanner");
    }
    /*========================================
        Preloader
    ========================================*/

    $(window).on("load", function () {
        $(".ic-preloader").fadeOut(500);
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

    /*========================================
       mega link
    ========================================*/

    let win = $(this);
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

    /*========================================
       responsive menu mobile version
    ========================================*/
    $(document).on("click", ".humbugger-menu", function () {
        $(this).parent().parent().prev().addClass("active");
        $(".ic-overlay").addClass("active");
        $(".ic-navbar-menu").toggleClass("active");
    });
    $(document).on("click", ".ic-overlay", function () {
        console.log("clicked");
        $(this).removeClass("active");
        $(".ic-navbar-menu").removeClass("active");
        $(".humbugger-menu").removeClass("opened");
        $(".student-menu").removeClass("active");
    });
    $(document).on("click", ".close-sidebar-menu", function () {
        console.log("clicked");
        $(".ic-navbar-menu").removeClass("active");
        $(".student-menu").removeClass("active");
        $(".humbugger-menu").removeClass("opened");
        $(".ic-overlay").removeClass("active");
    });

    $(".all-catagories-link").on("click", function () {
        $(this).parent().addClass("items-hide");
        $(this)
            .parent()
            .closest(".ic-navbar-middle")
            .find(".mega-menu-mobile")
            .addClass("active");
        $(this)
            .parent()
            .closest(".ic-navbar-middle")
            .find(".close-sideb-menu")
            .show();
    });
    $(".close-sideb-menu").on("click", function () {
        $(this)
            .parent()
            .next(".ic-navbar-middle")
            .find(".ic-navbar-menu-nav")
            .removeClass("items-hide");
        $(this)
            .parent()
            .next(".ic-navbar-middle")
            .find(".mega-menu-mobile")
            .removeClass("active");
    });

    if ($(window).width() < 1199) {
        $(document).on("click", ".ic-student-items", function () {
            $(this).find(".ic-student-dropdown").slideToggle();
        });
    }

    //profile setting
    $(document).on("click", ".ic-profile__links", function (e) {
        e.preventDefault();
        console.log("clicked");
        $(".ic-profile__links").removeClass("active");
        $(this).addClass("active");
        let getDataLink = $(this).data("link");
        $(".ic-profile__tabsItems").hide();
        $("#" + getDataLink).fadeIn();
    });

    //forums tabs
    $(document).on("click", ".forms-links", function (e) {
        e.preventDefault();
        $(".forms-links").removeClass("active");
        $(this).addClass("active");
        let getDataLink = $(this).data("link");
        $(".ic-student-forms-items").hide();
        $("#" + getDataLink).fadeIn();
    });

    //pickup tabs
    $(document).on("click", ".ic-pickUp__links", function (e) {
        e.preventDefault();
        $(".ic-pickUp__links").removeClass("active");
        $(this).addClass("active");
        let getDataLink = $(this).data("link");
        $(".ic-pickUp__enrollCourse").hide();
        $("#" + getDataLink).fadeIn();
    });
    // $(document).on("click", ".ic-discription-links", function (e) {
    //     e.preventDefault();
    //     $(".ic-discription-links").removeClass("active");
    //     $(this).addClass("active");
    //     let disLink = $(this).data("tabs");
    //     $(".ic-tabs-content-items").hide();
    //     $("#" + disLink).fadeIn();
    //     if (disLink === "course-rating-tabs") {
    //         $(".ic-course-rating-slider").slick({
    //             slidesToShow: 3,
    //             slidesToScroll: 1,
    //             autoplay: true,
    //             arrows: false,
    //             autoplaySpeed: 3000,
    //             responsive: [
    //                 {
    //                     breakpoint: 991,
    //                     settings: {
    //                         slidesToShow: 2,
    //                     },
    //                 },
    //                 {
    //                     breakpoint: 767,
    //                     settings: {
    //                         slidesToShow: 2,
    //                     },
    //                 },
    //                 {
    //                     breakpoint: 500,
    //                     settings: {
    //                         slidesToShow: 1,
    //                     },
    //                 },
    //             ],
    //         });
    //         $(".ic-course-1").click(function () {
    //             $(".ic-course-rating-slider").slick("slickNext");
    //         });
    //         $(".ic-course-2").click(function () {
    //             $(".ic-course-rating-slider").slick("slickPrev");
    //         });
    //     } else {
    //         $(".ic-course-rating-slider").slick("unslick");
    //     }
    // });

    // file upload
    $(document).on("change", "#resume-file", function () {
        let i = $(this).prev("label").clone();
        let file = $(this)[0].files[0].name;
        $(this).prev("label").find(".file-names").text(file);
    });

    /*========================================
       Custom Tab
       ========================================*/

    $(document).on("click", ".ic-tab-link", function (e) {
        console.log("Click");
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

    // coach details
    // $(".ic-date-slider").slick({
    //     slidesToShow: 6,
    //     slidesToScroll: 6,
    //     arrows: false,
    //     swipe: false,
    //     responsive: [
    //         {
    //             breakpoint: 767,
    //             settings: {
    //                 slidesToShow: 6,
    //             },
    //         },
    //     ],
    // });
    // $(".ic-dates-arrows").on("click", function () {
    //     $(".ic-date-slider").slick("slickNext");
    // });

    /* === banner slider ===*/
    // $(".ic_image_slider").slick({
    //     slidesToShow: 1,
    //     slidesToScroll: 1,
    //     autoplay: true,
    //     autoplaySpeed: 2000,
    //     arrows: true,
    //     prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    //     nextArrow: '<button class="slide-arrow next-arrow"></button>',
    // });

    /* === review slider ===*/
    // $(".review-slider").slick({
    //     slidesToShow: 4,
    //     slidesToScroll: 1,
    //     autoplay: false,
    //     autoplaySpeed: 2000,
    //     arrows: false,
    //     dots: true,
    //     responsive: [
    //         {
    //             breakpoint: 1200,
    //             settings: {
    //                 slidesToShow: 3,
    //             },
    //         },

    //         {
    //             breakpoint: 992,
    //             settings: {
    //                 slidesToShow: 2,
    //             },
    //         },
    //         {
    //             breakpoint: 576,
    //             settings: {
    //                 slidesToShow: 1,
    //             },
    //         },
    //     ],
    // });
    /* === enterprice-slider ===*/
    // $(".enterprice-slider").slick({
    //     slidesToShow: 3,
    //     slidesToScroll: 1,
    //     autoplay: false,
    //     autoplaySpeed: 2000,
    //     arrows: false,
    //     dots: true,
    //     responsive: [
    //         {
    //             breakpoint: 992,
    //             settings: {
    //                 slidesToShow: 2,
    //                 slidesToScroll: 1,
    //             },
    //         },

    //         {
    //             breakpoint: 576,
    //             settings: {
    //                 slidesToShow: 1,
    //                 slidesToScroll: 1,
    //             },
    //         },
    //     ],
    // });
    /* === verified slider ===*/
    // $(".ic-verified-slider").slick({
    //     slidesToShow: 4,
    //     slidesToScroll: 1,
    //     autoplay: true,
    //     autoplaySpeed: 2000,
    //     arrows: true,
    //     dots: false,
    //     prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    //     nextArrow: '<button class="slide-arrow next-arrow"></button>',
    //     responsive: [
    //         {
    //             breakpoint: 768,
    //             settings: {
    //                 slidesToShow: 3,
    //                 slidesToScroll: 1,
    //             },
    //         },

    //         {
    //             breakpoint: 576,
    //             settings: {
    //                 slidesToShow: 2,
    //                 slidesToScroll: 1,
    //                 arrows: false,
    //             },
    //         },
    //     ],
    // });

    /* === course slider ===*/
    $(".course-slider").slick({
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        dots: false,
        nextArrow: ".course-left-btn",
        prevArrow: ".course-right-btn",
        responsive: [
            {
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
                breakpoint: 550,
                settings: {
                    slidesToShow: 1,
                },
            },
        ],
    });

    /* === business integration ===*/
    $(document).on("click", ".business-link", function (e) {
        e.preventDefault();
        $(".business-link").removeClass("active");
        $(this).addClass("active");
        let getDataLink = $(this).data("link");
        $(".business-items").hide();
        $("#" + getDataLink).fadeIn();
    });

    $(document).on("click", ".api-link", function (e) {
        e.preventDefault();
        console.log($(".api-link").prev().removeAttr("checked"));
        $(this).prev().attr("checked", "checked");
        // console.log($(this).prev().val());
        let getDataLink = $(this).data("link");
        $(".business-items").hide();
        $("#" + getDataLink).fadeIn();
    });

    /* === all coach === */
    $(".wishlist").on("click", function () {
        $(".outline-heart").hide();
        $(".fill-heart").show();
    });
    /* ===== community review slider===== */
    $(".ic-community-slicer").slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        dots: true,
        speed: 1000,
    });

    /* ===== community review slider===== */

    $(document).on('click', '.chat-bar', function () {
        $('.ic-chat-conversation-left').addClass('active');
    });
    
    

})(jQuery);
