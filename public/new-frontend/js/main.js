(function ($) {
    ("use strict");

    var tooltipTriggerList = [].slice.call(
        document.querySelectorAll('[data-bs-toggle="tooltip"]')
    );
    var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
        return new bootstrap.Tooltip(tooltipTriggerEl);
    });

    // mobile nav

    $(document).on("click", ".all-catagories-link", function () {
        $(this).parent().find(".ic-mobile-mega-menu").slideToggle();
        $(this).next().find(".sub-menu-mega").slideUp();
    });

    $(document).on("click", ".mobile-sub-mega-menu-link", function () {
        $(this).parent().find(".sub-menu-mega").slideDown();
        $(this).parent().nextAll().find(".sub-menu-mega").slideUp();
        $(this).parent().prevAll().find(".sub-menu-mega").slideUp();
    });

    if ($(window).width() <= 1199) {
        $(document).on("click", ".ic-navbar-menu-link", function () {
            $(this).parent().find(".ic-dropdwon").slideToggle();
        });
    }

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
        if ($(this).scrollTop() > 300) {
            $(".ic-bottom-navbar").addClass("sticky");
            $(".ic__logoSlider--part").addClass("ic--logo-add");
            $(".ic-scroll-top").css({
                bottom: "4%",
                opacity: "1",
                transition: "all .5s ease-in-out",
            });
        } else {
            $(".ic-bottom-navbar").removeClass("sticky");
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
    if (1199 <= win.width()) {
        // console.log('test');
        $(document).on("mouseover", ".ic-mega-link", function (e) {
            $(".ic-mega-link").removeClass("active");
            $(this).addClass("active");
            let itemClass = $(this).data("link");
            $(".mega-content").hide();
            $("#" + itemClass).fadeIn();
        });

        $(document).on("mouseover", ".ic-catagories-menu", function () {
            if ($(this).children()[1]) {
                $(this)
                    .children(".ic-main-mega-menu")
                    .removeClass("ic-main-mega-menu");
            }
            $(this)
                .children(".ic-main-mega-menu")
                .addClass("ic-main-mega-menu");
        });

        $(document).on("mouseleave", ".ic-catagories-menu", function () {
            $(this).children().eq(1).addClass("ic-main-mega-menu");
        });
    }

    /*========================================
       responsive menu mobile version
    ========================================*/
    $(document).on("click", ".humbugger-menu", function () {
        $(this).parent().parent().prev().addClass("active");
        $(".ic-overlay").addClass("active");
        $(".ic-navbar-middle").addClass("active");
    });
    $(document).on("click", ".ic-overlay", function () {
        $(this).removeClass("active");
        $(".ic-navbar-middle").removeClass("active");
        $(".humbugger-menu").removeClass("opened");
        $(".student-menu").removeClass("active");
    });
    $(document).on("click", ".ic-sidebarClosed", function () {
        console.log("clicked");
        $(".ic-navbar-middle").removeClass("active");
        $(".student-menu").removeClass("active");
        $(".humbugger-menu").removeClass("opened");
        $(".ic-overlay").removeClass("active");
    });

    $(document).on("click", ".close-sidebar-menu", function () {
        console.log("clicked");
        $(".ic-navbar-middle").removeClass("active");
        $(".student-menu").removeClass("active");
        $(".humbugger-menu").removeClass("opened");
        $(".ic-overlay").removeClass("active");
    });

    // close-sidebar-menu

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
            .closest(".ic-navbar-middle")
            .find(".ic-navbar-menu-nav")
            .removeClass("items-hide");
        $(this)
            .parent()
            .closest(".ic-navbar-middle")
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
    //     console.log("clicked");
    //     $(".ic-date-slider").slick("slickNext");
    // });
})(jQuery);
