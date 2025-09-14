@extends('layouts.master')

@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)), url({{ asset('/new-new-frontend/images/bootcamps-banner-bg.png') }})">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-6">
                    <div class="ic-banner-content ic-business-banner">
                        <span class="ic-heading-title mb-15">Online Bootcamp</span>
                        <h1 class="black pb-15">All Bootcamp List</h1>
                        <p class="color-deep-gray">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem
                            Ipsum has been the industry's standard dummy text ever since the 1500s, when an
                            unknown printer took a galley of </p>
                        <div class="ic__buttons-wrapper">
                            <a href="#" class="ic-btn">Explore Programs</a>
                            <a href="https://www.youtube-nocookie.com/embed/Ga6RYejo6Hk" class="btn-watch ic-play-button">
                                <div class="circle">
                                    <i class="ri-play-fill"></i>
                                </div>Watch Intro Video
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                </div>
            </div>
        </div>
    </section>
    {{-- banner part end --}}

    <section class="online-bootcamp ic-section-space">
        <div class="container">
            <div
                class="ic-items-list-main ic-items-grid-main ic-bootcamp-grid-main row g-2 g-lg-4 row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1">
                <div class="col">
                    <div class="ic-items-list mb-0 flex-column">
                        <div class="ic-list-image">
                            <div class="position-relative">
                                <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                    class="img-fluid w-100" alt="">
                                <div class="coach-names">
                                    <p>James Bond</p>
                                </div>
                            </div>
                        </div>
                        <div class="ic-list-conetnt">
                            <a href="#">
                                <p class="sub-title">Make Business Strategies and Applications</p>
                            </a>
                            <div class="list-conetnt-info">
                                <div class="list-info-items border-0">
                                    <p><i class="ri-calendar-check-fill"></i> Course start 21 Feb, 2023</p>

                                </div>
                                <div class="list-info-items border-0">
                                    <p><i class="ri-file-list-2-line"></i> Program Duration-4 Months</p>
                                </div>
                                <div class="list-info-items border-0">
                                    <p class="review-course">
                                        <i class="ri-star-s-fill yellow"></i>
                                        <i class="ri-star-s-fill yellow"></i>
                                        <i class="ri-star-s-fill yellow"></i>
                                        <i class="ri-star-s-fill yellow"></i>
                                        <i class="ri-star-s-fill gray-400"></i>
                                    </p>
                                    <p class="ratting-count">4</p>
                                    <p class="counts">(320)</p>
                                </div>
                            </div>
                            <div class="card-btn">
                                <a href="#" class="ic-btn ">Bootcamp Enroll <i class="ri-arrow-right-line"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="ic-items-list mb-0 flex-column">
                        <div class="ic-list-image">
                            <div class="position-relative">
                                <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                    class="img-fluid w-100" alt="">
                                <div class="coach-names">
                                    <p>James Bond</p>
                                </div>
                            </div>
                        </div>
                        <div class="ic-list-conetnt">
                            <p class="sub-title">Make Business Strategies and Applications</p>
                            <div class="list-conetnt-info">
                                <div class="list-info-items border-0">
                                    <p><i class="ri-calendar-check-fill"></i> Course start 21 Feb, 2023</p>

                                </div>
                                <div class="list-info-items border-0">
                                    <p><i class="ri-file-list-2-line"></i> Program Duration-4 Months</p>
                                </div>
                                <div class="list-info-items border-0">
                                    <p class="review-course">
                                        <i class="ri-star-s-fill yellow"></i>
                                        <i class="ri-star-s-fill yellow"></i>
                                        <i class="ri-star-s-fill yellow"></i>
                                        <i class="ri-star-s-fill yellow"></i>
                                        <i class="ri-star-s-fill gray-400"></i>
                                    </p>
                                    <p class="ratting-count">4</p>
                                    <p class="counts">(320)</p>
                                </div>
                            </div>
                            <div class="card-btn">
                                <a href="#" class="ic-btn ">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="ic-items-list mb-0 flex-column">
                        <div class="ic-list-image">
                            <div class="position-relative">
                                <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                    class="img-fluid w-100" alt="">
                                <div class="coach-names">
                                    <p>James Bond</p>
                                </div>
                            </div>
                        </div>
                        <div class="ic-list-conetnt">
                            <p class="sub-title">Make Business Strategies and Applications</p>
                            <div class="list-conetnt-info">
                                <div class="list-info-items border-0">
                                    <p><i class="ri-calendar-check-fill"></i> Course start 21 Feb, 2023</p>

                                </div>
                                <div class="list-info-items border-0">
                                    <p><i class="ri-file-list-2-line"></i> Program Duration-4 Months</p>
                                </div>
                                <div class="list-info-items border-0">
                                    <p class="review-course">
                                        <i class="ri-star-s-fill yellow"></i>
                                        <i class="ri-star-s-fill yellow"></i>
                                        <i class="ri-star-s-fill yellow"></i>
                                        <i class="ri-star-s-fill yellow"></i>
                                        <i class="ri-star-s-fill gray-400"></i>
                                    </p>
                                    <p class="ratting-count">4</p>
                                    <p class="counts">(320)</p>
                                </div>
                            </div>
                            <div class="card-btn">
                                <a href="#" class="ic-btn ">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="ic-items-list mb-0 flex-column">
                        <div class="ic-list-image">
                            <div class="position-relative">
                                <img src="{{ asset('new-frontend/images/course-image/course-images-1.png') }}"
                                    class="img-fluid w-100" alt="">
                                <div class="coach-names">
                                    <p>James Bond</p>
                                </div>
                            </div>
                        </div>
                        <div class="ic-list-conetnt">
                            <p class="sub-title">Make Business Strategies and Applications</p>
                            <div class="list-conetnt-info">
                                <div class="list-info-items border-0">
                                    <p><i class="ri-calendar-check-fill"></i> Course start 21 Feb, 2023</p>

                                </div>
                                <div class="list-info-items border-0">
                                    <p><i class="ri-file-list-2-line"></i> Program Duration-4 Months</p>
                                </div>
                                <div class="list-info-items border-0">
                                    <p class="review-course">
                                        <i class="ri-star-s-fill yellow"></i>
                                        <i class="ri-star-s-fill yellow"></i>
                                        <i class="ri-star-s-fill yellow"></i>
                                        <i class="ri-star-s-fill yellow"></i>
                                        <i class="ri-star-s-fill gray-400"></i>
                                    </p>
                                    <p class="ratting-count">4</p>
                                    <p class="counts">(320)</p>
                                </div>
                            </div>
                            <div class="card-btn">
                                <a href="#" class="ic-btn ">Bootcamp Enroll <i class="ri-arrow-right-line"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        $(function() {
            $('.accordion-button').on('click', function() {
                if ($('.accordion-button').not('.collapsed').length > 0) {
                    $('.accordion-item').removeClass('active');
                    $(this).parent().parent().addClass('active');
                    $('.accordion-item').removeClass('border-0');
                    $(this).parent().parent().prev().toggleClass('border-0');
                    // $(this).parent().parent().next().toggleClass('border-0');
                } else {
                    $('.accordion-item').removeClass('active');
                    $(this).parent().parent().prev().removeClass('border-0');
                }
            });
        });

        // $('.ic-course-rating-slider').slick({
        //     slidesToShow: 3,
        //     slidesToScroll: 1,
        //     autoplay: true,
        //     arrows: false,
        //     autoplaySpeed: 3000,
        //     responsive: [{
        //             breakpoint: 991,
        //             settings: {
        //                 slidesToShow: 3,
        //             }
        //         },
        //         {
        //             breakpoint: 767,
        //             settings: {
        //                 slidesToShow: 2,
        //             }
        //         },
        //         {
        //             breakpoint: 420,
        //             settings: {
        //                 slidesToShow: 1,
        //             }
        //         },
        //     ]
        // });
        // $(".ic-course-1").click(function() {
        //     $(".ic-course-rating-slider").slick("slickNext");
        // });
        // $(".ic-course-2").click(function() {
        //     $(".ic-course-rating-slider").slick("slickPrev");
        // });
    </script>
@endpush
