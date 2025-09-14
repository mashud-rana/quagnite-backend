{{-- ic-bootcamp-training --}}
<section class="ic-bootcamp-training bg ic-section-space-bottom-60">
    <div class="container">
        <div class="ic-row">
            <div class="ic-col w-45">

                <div class="ic-bootcamp-training-content">
                    <h3 class="ic-title">Our Recent <span class="primary">Bootcamp</span> Traning</h3>
                    <p class="ic-sub-title">You can purchase our API and use our Bootcamps, Course, Playground & Wiki in
                        your own website for a small payment.</p>
                    <div class="ic-des-wrapper mb-20">
                        <p class="ic-des">
                            Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece
                            of
                            classical Latin literature from 45 BC, making it over 2000 years old.
                        </p>
                    </div>

                    <div class="ic-bootcamp-card-wrapper">


                        <div class="bootcamp-card">
                            <div class="ic-logo">
                                <img class="img-fluid"
                                    src="{{asset('/new-frontendv1/images/bootcamp/data-analytics.png')}}"
                                    alt="bootcamp">
                            </div>
                            <div class="bootcamp-card-content">
                                <h6 class="bootcamp-card-title">Digital Business</h6>
                                <p class="bootcamp-card-des">
                                    06 Course
                                </p>
                            </div>
                        </div>


                        <div class="bootcamp-card">
                            <div class="ic-logo">
                                <img class="img-fluid" src="{{asset('/new-frontendv1/images/bootcamp/technology.png')}}"
                                    alt="bootcamp">
                            </div>
                            <div class="bootcamp-card-content">
                                <h6 class="bootcamp-card-title">Technology</h6>
                                <p class="bootcamp-card-des">
                                    04 Course
                                </p>
                            </div>
                        </div>

                        <div class="bootcamp-card">
                            <div class="ic-logo">
                                <img class="img-fluid" src="{{asset('/new-frontendv1/images/bootcamp/report.png')}}"
                                    alt="bootcamp">
                            </div>
                            <div class="bootcamp-card-content">
                                <h6 class="bootcamp-card-title">Data And AI</h6>
                                <p class="bootcamp-card-des">
                                    05 Course
                                </p>
                            </div>
                        </div>

                        <div class="bootcamp-card">
                            <div class="ic-logo">
                                <img class="img-fluid"
                                    src="{{asset('/new-frontendv1/images/bootcamp/project-management.png')}}"
                                    alt="bootcamp">
                            </div>
                            <div class="bootcamp-card-content">
                                <h6 class="bootcamp-card-title">Digital Operations</h6>
                                <p class="bootcamp-card-des">
                                    07 Course
                                </p>
                            </div>
                        </div>

                    </div>
                </div>

            </div>

            <div class="ic-col w-55 right-content">
                <div class="bootcamp-training-img-content">
                    <img class="img-fluid main-image" src="{{asset('/new-frontendv1/images/bootcamp-training.svg')}}"
                        alt="Bootcamp">

                    <div class="abs">
                        <img class="img-fluid top-dot-abs" src="{{asset('/new-frontendv1/images/abs/dot.svg')}}"
                            alt="Bootcamp">

                        <!-- <div class="top-right-card-abs">
                            <div class="top-profile mb-2">
                                <img class="ic-logo" src="{{asset('/new-frontendv1/images/profile.png')}}" alt="">
                                <div class="content">
                                    <h6 class="card-title">Cody Forman</h6>
                                    <p class="card-des">Product Director</p>
                                </div>
                            </div>
                            <p class="card-des">Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit,
                                sed do eiusmod tempor </p>

                        </div>

                        <div class="bottom-left-card-abs"
                            style="background-image:linear-gradient(180deg, rgba(0, 56, 91, 0.80) -16.2%, rgba(21, 141, 167, 0.80) 113.04%), url({{ asset('/new-frontendv1/images/abs/abs-bg.png') }})">

                          
                                <div class="more-info position-absolute ">
                                    <i class="ri-more-line"></i>
                                </div>
                      

                            <ul class="abs-card-list">
                                <li>
                                    <div class="ic-icon"><i class="ri-time-line"></i></div>
                                    2 Hours
                                </li>
                                <li>
                                    <div class="ic-icon"><i class="ri-calendar-event-line"></i></div>
                                    Tuesday Sept 14 - 11 am CET
                                </li>
                                <li>
                                    <div class="ic-icon"><i class="ri-map-pin-line"></i></div>
                                    HQ Breakout area 1st floor
                                </li>
                                <li>
                                    <div class="ic-icon"><i class="ri-user-3-fill"></i></div>
                                    Ronda Williams
                                </li>
                                <li>
                                    <div class="ic-icon"><i class="ri-flag-line"></i></div>
                                    English
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
            </div>

        </div>


    </div>
    </div>
    </div>
</section>
{{-- ic-bootcamp-training --}}

{{-- ic-bootcamp --}}
<section class="ic-bootcamp bg ic-section-space-bottom ">

    <div class="container">
        <h4 class="bootcamp-title mb-20">Our Recent Bootcamp</h4>
        <div class="bootcamp-card-wrapper mb-50">
            @forelse ($data['recent_bootcamps'] as $item)
            <div class="bootcamp-card">
                <div class="top-content">
                    <div class="ic-card-image">
                        <img class="img-fluid" src="{{ getStoreFile($item->image, $item->storage_type) }}" alt="Bootcamp">
                    </div>

                    <div class="ic-card-body">
                        <h5 class="card-title">
                            {!! str_limit($item->title, $words = 30, $end = '...') !!}
                        </h5>
                        <div class="card-des-wrapper">
                            <p class="card-des">Bootcamp start {{ custom_date($item->start_date) }}</p>
                            <p class="card-des">Program Duration-{{ $item->duration_month }} Months</p>
                        </div>
                    </div>
                </div>

                <div class="bottom-content">
                    <a href="{{ route('bootcamp.details', $item->slug) }}" class="ic-btn">View Details</a>
                </div>

            </div>
            @empty
            <x-frontend.data-notfound></x-frontend.data-notfound>
            @endforelse
            
        </div>
        <a href="{{ route('all.bootcamps') }}">
            <button class="ic-btn ic-btn-login shadow-none d-block mx-auto">View All Bootcamp</button>
        </a>
        
    </div>
</section>
{{-- ic-bootcamp --}}