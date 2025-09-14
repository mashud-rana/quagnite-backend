@extends('layouts.master')

@section('content')
    <div id="first-viewport">
        {{-- banner start --}}
        <section class="ic_v1_banner isNavbar">
            <div class="banner-left-abs">
                <img src="{{ asset('/new-frontendv1/images/banner-left-abs.png') }}" class="" alt="">
            </div>

            <div class="banner-right-abs">
                <img src="{{ asset('/new-frontendv1/images/banner-right-abs.png') }}" class="" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 m-auto">
                        <div class="ic_v1_banner_content">
                            <p class="ic_banner_title">Welcome To MCdns</p>
                            <h2>Empowering Your Career with the <br> Ultimate All-In-One IT Training Solution.</h2>
                            <p class="ic_banner_paragraph">Our all-in-one platform offers tailored training solutions that
                                are
                                specifically designed to meet the needs of individuals and businesses alike. With our
                                comprehensive courses and expert instructors, you can gain the skills and knowledge you need
                                to
                                succeed</p>
                            <div class="d-flex align-items-center justify-content-center gap-3 pt-4">
                                <a href="{{ route('all.courses') }}" class="ic-btn">Explore Programs</a>
                                <a href="{{ route('business.index') }}" class="ic-btn-white">For Businesses</a>
                            </div>
                            <div class="ic_banner_logos d-flex align-items-center justify-content-center mt-40">
                                <a href="#">
                                    <img src="{{ asset('/new-frontendv1/images/cms-logos-3.png') }}" alt="logos">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('/new-frontendv1/images/cms-logos-1.png') }}" alt="logos">
                                </a>
                                <a href="#">
                                    <img src="{{ asset('/new-frontendv1/images/cms-logos-2.png') }}" alt="logos">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        {{-- banner end --}}


        {{-- our product --}}
        <section class="our-product-main ic-section-space-bottom-m-80">

            <div class="our-product-shape-top-right">
                <img src="{{ asset('/new-frontendv1/images/our-product-shape-top-right-new.png') }}" class=""
                    alt="">
            </div>


            <div class="our-product-shape-top-left">
                <img src="{{ asset('/new-frontendv1/images/our-product-shape-top-left.png') }}" class=""
                    alt="">
            </div>

            <div class="container">
                <div class="ic_image_slider_area ic-section-space-bottom-m-80">
                    <div class="ic_image_slider">
                        <div>
                            <img src="{{ asset('/new-frontendv1/images/banner-image-slider.png') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('/new-frontendv1/images/banner-image-slider.png') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('/new-frontendv1/images/banner-image-slider.png') }}" alt="">
                        </div>
                        <div>
                            <img src="{{ asset('/new-frontendv1/images/banner-image-slider.png') }}" alt="">
                        </div>
                    </div>
                </div>
                {{-- section header --}}
                <div class="section_header mb-50">
                    <div class="row">
                        <div class="col-xl-6 col-lg-8 m-auto">
                            <h3><span>Our</span> Products</h3>
                            <p>You can purchase our API and use our Bootcamps, Course, Playground & Wiki in your own website
                                for
                                a small payment.</p>
                        </div>
                    </div>
                </div>
                {{-- section header --}}

                {{-- our product --}}
                <div class="our-product-image">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6">
                            <div class="ic_our_product_items">
                                <div class="p_img">
                                    <img src="{{ asset('/new-frontendv1/images/product-1.png') }}" class="img-fluid"
                                        alt="product image">
                                </div>
                                <div class="ic_our_product_content">
                                    <h4>SKILL<span>UP</span></h4>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                        piece of classical</p>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                Course Enrollment
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Exam Assessment
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Playgrounds
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Practice Labs
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Project Submission
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                View Plans
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-auto ic_bottom_product">
                                    <a href="{{ route('playground.index') }}#playground-list" class="btn-border">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="ic_our_product_items">
                                <div class="p_img">
                                    <img src="{{ asset('/new-frontendv1/images/product-2.png') }}" class="img-fluid"
                                        alt="product image">
                                </div>
                                <div class="ic_our_product_content">
                                    <h4>FUSE<span>WARE</span></h4>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                        piece of classical Latin literature from 45 BC, making it over 2000 years old.</p>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                API Integrations
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                API Documentation
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                API Pricings
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Business Partnerships
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Project Submission
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Contact Sales
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-auto ic_bottom_product">
                                    <a href="{{ route('business.index') }}#pricing-section" class="btn-border">Explore
                                        More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-6">
                            <div class="ic_our_product_items">
                                <div class="p_img">
                                    <img src="{{ asset('/new-frontendv1/images/product-3.png') }}" class="img-fluid"
                                        alt="product image">
                                </div>
                                <div class="ic_our_product_content">
                                    <h4>L<span>MS</span></h4>
                                    <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a
                                        piece of classical</p>
                                    <ul>
                                        <li>
                                            <a href="#">
                                                API Integrations
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                API Documentation
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                API Pricings
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Business Partnerships
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Project Submission
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                Contact Sales
                                                <i class="ri-arrow-right-s-line"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="mt-auto ic_bottom_product">
                                    <a href="{{ route('all.pricings') }}" class="btn-border">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- our product --}}
            </div>
        </section>
        {{-- our product --}}
    </div>
    <div id="infinite-scroll-container">

    </div>
    <div id="infinite-scroll-trigger"></div>
@endsection
@push('scripts')
    <script>
        const initializeSliderjs = () => {
            /* === enterprice-slider ===*/
            $(".enterprice-slider").slick({
                slidesToShow: 3,
                slidesToScroll: 1,
                autoplay: false,
                autoplaySpeed: 2000,
                arrows: false,
                dots: true,
                responsive: [{
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 2,
                            slidesToScroll: 1,
                        },
                    },

                    {
                        breakpoint: 576,
                        settings: {
                            slidesToShow: 1,
                            slidesToScroll: 1,
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
        }
        $(document).ready(function() {
            var currentSection = 1;
            var totalSections = 6;
            var isLoading = false;

            function loadSection(sectionNumber) {
                if (isLoading || sectionNumber > totalSections) {
                    return;
                }

                isLoading = true;

                $.ajax({
                    url: '/load-section/section' + sectionNumber,
                    method: 'GET',
                    success: function(data) {
                        if (data.trim() !== '') {
                            $('#infinite-scroll-container').append(data);
                            initializeSliderjs();
                        }

                        currentSection++;
                        isLoading = false;

                        // Load the next section in the background
                        if (sectionNumber === 1) {
                            // Start loading remaining sections in the background
                            loadRemainingSections();
                        }
                    },
                    error: function(error) {
                        console.error('Error loading section:', error);
                        isLoading = false;

                        // Skip to the next section
                        currentSection++;
                        if (sectionNumber === 1) {
                            // Start loading remaining sections in the background
                            loadRemainingSections();
                        }
                    }
                });
            }

            function loadRemainingSections() {
                for (let i = currentSection; i <= totalSections; i++) {
                    loadSection(i);
                }
            }

            // Load the first section immediately
            loadSection(currentSection);

            // Debounce function
            function debounce(func, wait) {
                var timeout;
                return function() {
                    var context = this,
                        args = arguments;
                    var later = function() {
                        timeout = null;
                        func.apply(context, args);
                    };
                    clearTimeout(timeout);
                    timeout = setTimeout(later, wait);
                };
            }

            // Debounced scroll event handling
            var debouncedLoadNextSection = debounce(function() {
                if (!isLoading && $(window).scrollTop() + $(window).height() >= $(
                        '#infinite-scroll-container').height() - 100) {
                    loadSection(currentSection);
                }
            }, 200); // Adjust the debounce time as needed

            $(window).scroll(debouncedLoadNextSection);
        });


        // $(document).ready(function() {
        //     var currentSection = 1;
        //     var totalSections = 6;
        //     var isLoading = false;

        //     // Function to load a section
        //     function loadSection(sectionNumber) {
        //         if (isLoading || currentSection > totalSections) {
        //             return;
        //         }

        //         isLoading = true;

        //         $.ajax({
        //             url: '/load-section/section' + sectionNumber,
        //             method: 'GET',
        //             success: function(data) {
        //                 if (data.trim() !== '') {
        //                     $('#infinite-scroll-container').append(data);
        //                     currentSection++;
        //                     initializeSliderjs();
        //                 }

        //                 isLoading = false;
        //             },
        //             error: function(error) {
        //                 console.error('Error loading section:', error);
        //                 isLoading = false;
        //             }
        //         });
        //     }

        //     // Intersection Observer setup
        //     var intersectionObserver = new IntersectionObserver(function(entries, observer) {
        //         entries.forEach(function(entry) {
        //             if (entry.isIntersecting && !isLoading) {
        //                 loadSection(currentSection);
        //             }
        //         });
        //     }, {
        //         threshold: 0.5
        //     }); // Adjust the threshold as needed

        //     // Trigger element for Intersection Observer
        //     var intersectionTrigger = document.getElementById('infinite-scroll-trigger');
        //     intersectionObserver.observe(intersectionTrigger);

        //     // Request Animation Frame for smooth scrolling
        //     var rafId;

        //     function debouncedLoadNextSection() {
        //         if (!isLoading && $(window).scrollTop() + $(window).height() >= $('#infinite-scroll-container')
        //             .height() - 100) {
        //             loadSection(currentSection);
        //         }

        //         rafId = null;
        //     }

        //     function onScroll() {
        //         if (!rafId) {
        //             rafId = requestAnimationFrame(debouncedLoadNextSection);
        //         }
        //     }

        //     $(window).on('scroll', onScroll);

        // });
    </script>
@endpush
