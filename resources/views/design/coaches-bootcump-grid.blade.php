@extends('layouts.master')

@section('content')
    <section class="ic__banner--part ic__forum--part"
        style="background-image: linear-gradient(0deg, rgba(19, 19, 51, 0.6), rgba(19, 19, 51, 0.6)), url({{ asset('/frontend') }}/images/coaches-banner.png);">
        <!-- content -->
        <div class="reserve-container">
            <div class="row">
                <div class="col-lg-7">
                    <div class="ic__banner--content ps-0">
                        <span class="white">Online Bootcamp</span>
                        <h1>All Bootcamp List</h1>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                            the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley
                            of type and scrambled it to make a type specimen book.</p>
                        <div class="ic__buttons-wrapper">
                            <a href="#" class="ic-btn">Explore Programs</a>
                            <a href="https://www.youtube-nocookie.com/embed/Ga6RYejo6Hk" class="btn-watch ic-play-button">
                                <div class="circle">
                                    <i class="ri-play-fill"></i>
                                </div> Watch INTRO VIDEO
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <img src="{{ asset('frontend') }}/images/banner-wave.svg" class="ic-bottoms-waves" alt="wave">
        <img src="{{ asset('frontend') }}/images/forum-cube.png" class="ic-left-cube" alt="wave">
        <img src="{{ asset('frontend') }}/images/forum-right.png" class="ic-forumRight-shape" alt="wave">
    </section>

    <div class="ic__blog--background ic__coaching--background"
        style="background-image: url({{ asset('/frontend') }}/images/coaches-bg.png);">
        <div class="sechedule-container">
            {{-- grid --}}
            <div class="ic-switch-grid">
                <div class="switch-buttons">
                    <div class="switch-button">
                        <a href="#" class="active"><i class="ri-layout-grid-fill"></i> Grid</a>
                        <a href="#"><i class="ri-file-list-line"></i> List</a>
                    </div>
                    <p class="showresult">Showing 1-9 of 19 results</p>
                </div>
                <div class="ic-searchfilter">
                    <div class="position-relative">
                        <input type="text" placeholder="Search your Coaches">
                        <i class="ri-search-line"></i>
                    </div>
                    <button class="ic-btn"><i class="ri-filter-line"></i>Filter</button>
                </div>
            </div>
            <div class="sort-filter">
                <div class="filter-items">
                    <div class="form-group">
                        <label for="#">Short By </label>
                        <select name="" class="selectpicker" id="">
                            <option value="0">Price: low to high</option>
                            <option value="0">Price: high to low</option>
                        </select>
                    </div>
                </div>
                <div class="filter-items">
                    <div class="form-group">
                        <label for="#">Short By Coach </label>
                        <select name="" class="selectpicker" id="">
                            <option value="0">Select Coach</option>
                            <option value="0">Select Coach</option>
                        </select>
                    </div>
                </div>
                <div class="filter-items">
                    <div class="form-group">
                        <label for="#">Short By Category</label>
                        <select name="" class="selectpicker" id="">
                            <option value="0">Select Coach</option>
                            <option value="0">Select Coach</option>
                        </select>
                    </div>
                </div>
                <div class="filter-items">
                    <div class="form-group">
                        <label for="#">Short By Category</label>
                        <div class="range">
                            <div class="range-slider">
                                <span class="range-selected"></span>
                            </div>
                            <div class="range-input">
                                <input type="range" class="min" min="0" max="1000" value="300"
                                    step="10">
                                <input type="range" class="max" min="0" max="1000" value="700"
                                    step="10">
                            </div>
                            <div class="range-price">
                                <div>
                                    <label for="min">$</label>
                                    <input type="number" name="min" value="300">
                                    <label for="max">$</label>
                                    <input type="number" name="max" value="700">
                                </div>
                                <div>
                                    <button class="ic-btn">Filter</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- list --}}
            <div
                class="ic-items-list-main ic-items-grid-main ic-bootcamp-grid-main row g-4 row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1">
                <div class="col">
                    <div class="ic-items-list mb-0 flex-column">
                        <div class="ic-list-image">
                            <div class="position-relative">
                                <img src="{{ asset('frontend/images/list-pic-1.png') }}" class="img-fluid w-100"
                                    alt="">
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
                                <a href="#" class="ic-btn ">Bootcamp Enroll</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="ic-items-list mb-0 flex-column">
                        <div class="ic-list-image">
                            <div class="position-relative">
                                <img src="{{ asset('frontend/images/list-pic-1.png') }}" class="img-fluid w-100"
                                    alt="">
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
                                <a href="#" class="ic-btn ">Bootcamp Enroll</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="ic-items-list mb-0 flex-column">
                        <div class="ic-list-image">
                            <div class="position-relative">
                                <img src="{{ asset('frontend/images/list-pic-1.png') }}" class="img-fluid w-100"
                                    alt="">
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
                                <a href="#" class="ic-btn ">Bootcamp Enroll</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="ic-items-list mb-0 flex-column">
                        <div class="ic-list-image">
                            <div class="position-relative">
                                <img src="{{ asset('frontend/images/list-pic-1.png') }}" class="img-fluid w-100"
                                    alt="">
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
                                <a href="#" class="ic-btn ">Bootcamp Enroll</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- pagination --}}
            <div class="ic-pagination">
                <ul>
                    <li>
                        <a href="#" class="page-link"><i class="ri-arrow-left-line"></i></a>
                    </li>
                    <li>
                        <a href="#" class="page-link active">1</a>
                    </li>
                    <li>
                        <a href="#" class="page-link">2</a>
                    </li>
                    <li>
                        <a href="#" class="page-link">3</a>
                    </li>
                    <li>
                        <a href="#" class="page-link">4</a>
                    </li>
                    <li>
                        <a href="#" class="page-link"><i class="ri-arrow-right-line"></i></a>
                    </li>
                </ul>
            </div>
            {{-- pagination --}}
            <div class="ic__news-letter">
                <div class="ic__news--background"
                    style="background-image: url({{ asset('/frontend') }}/images/news-letter.png);">
                    <div class="row g-4 align-items-center">
                        <div class="col-lg-6">
                            <h2 class="yellow">Newsletter</h2>
                            <p class="white">Subscribe to our newsletter by submitting your Email address below:</p>
                        </div>
                        <div class="col-lg-6">
                            <form action="#" class="ic__forms">
                                <input type="text" placeholder="Your email">
                                <button>Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    {{-- <script src="{{ asset('frontend/js/price_range_script.js') }}"></script> --}}

    <script>
        let rangeMin = 100;
        const range = document.querySelector(".range-selected");
        const rangeInput = document.querySelectorAll(".range-input input");
        const rangePrice = document.querySelectorAll(".range-price input");
        console.log(rangeInput);
        rangeInput.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minRange = parseInt(rangeInput[0].value);
                let maxRange = parseInt(rangeInput[1].value);
                if (maxRange - minRange < rangeMin) {
                    if (e.target.className === "min") {
                        rangeInput[0].value = maxRange - rangeMin;

                    } else {
                        rangeInput[1].value = minRange + rangeMin;
                    }
                } else {
                    rangePrice[0].value = minRange;
                    rangePrice[1].value = maxRange;
                    range.style.left = (minRange / rangeInput[0].max) * 100 + "%";
                    range.style.right = 100 - (maxRange / rangeInput[1].max) * 100 + "%";
                }

            });

        });

        rangePrice.forEach((input) => {
            input.addEventListener("input", (e) => {
                let minPrice = rangePrice[0].value;
                let maxPrice = rangePrice[1].value;
                if (maxPrice - minPrice >= rangeMin && maxPrice <= rangeInput[1].max) {
                    if (e.target.className === "min") {
                        rangeInput[0].value = minPrice;
                        range.style.left = (minPrice / rangeInput[0].max) * 100 + "%";
                    } else {
                        rangeInput[1].value = maxPrice;
                        range.style.right = 100 - (maxPrice / rangeInput[1].max) * 100 + "%";
                    }
                }

            });
        });
    </script>
@endpush
