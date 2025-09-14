@extends('layouts.master-v1')

@push('styles')
@endpush

@section('content')
    {{-- banner part start --}}
    <section class="ic-banner-part ic-section-space ic_v1_inner-part"
        style="background-image: linear-gradient(0deg, rgba(236, 248, 251, 0.95) 0%, rgba(236, 248, 251, 0.95) 100%),  url({{ asset('/new-frontend/images/business.png') }})">
        <div class="container">
            <div class="ic-upcoming-card ic-event-details-banner-content">
                <div class="ic-coming-event-card-left">
                    <img src="{{ asset('new-frontendv1/images/event-page/event_2.png') }}" class="img-fluid"
                        alt="image coming-event">
                </div>
                <div class="ic-coming-event-card-right">
                    <div class="ic-live-event">

                        <span>Events</span>
                    </div>

                    <div class="ic-event-desc">
                        <h1>Establishing A Culture Of Ongoing Improvement
                        </h1>
                        <p>Aenean interdum arcu sit amet nulla lacinia suscipit. Vivamus at laoreet mi. Fusce
                            pulvinar
                            commodo ligula, et egestas dolor. Ut hendrerit blandit neque in tempor.
                        </p>
                    </div>
                    <div class="ic-date-time-location">
                        <div class="ic-date">
                            <span><i class="ri-calendar-line"></i></span>
                            <span>15 Sep, 2021</span>
                        </div>
                        <div class="ic-time">
                            <span><i class="ri-time-line"></i></span>
                            <span>13:50:2023</span>
                        </div>
                        <div class="ic-location">
                            <span><i class="ri-send-plane-2-line"></i></span>
                            <span>Netherland</span>
                        </div>
                    </div>
                    <div class="ic-event-card-footer">
                        <a href="#" class="ic-btn">Register now</a>

                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- banner part end --}}

    {{-- event details learning start --}}
    <section class="ic-event-details-learning-section">
        <div class="container">
            <div class="ic-learning-content">
                <h2>What you'll learn</h2>
                <p>Leaders are finding it difficult to identify and create customer value from their cloud solutions as they
                    go
                    from a migration to an adoption attitude on cloud computing.
                    Even though 90% of firms are using the cloud, just 27% are able to improve customer outcomes, according
                    to
                    our latest State of Cloud research. Why? because their processes and abilities in the cloud are not
                    keeping
                    up with their technological adoption. But what exactly can you do using GCP? Assume you own an app
                    development company. How can you benefit from cloud computing? Your apps will need to include features
                    such
                    as:</p>
                <ul class="ic-event-learning-point">
                    <li>Databases</li>
                    <li>Servers</li>
                    <li>Storage space for files</li>
                    <li>Containers running on MCdns clusters</li>
                    <li>And so on</li>
                    <li>Databases</li>
                    <li>Servers</li>
                    <li>Storage space for files</li>
                    <li>Containers running on MCdns clusters</li>
                    <li>And so on</li>
                </ul>
                <p class="mb-50">Okay so you can make more money but if that’s your only goal, the extra zeroes on your
                    bank balance will
                    get really boring real quick. If an uneducated guy from the home of the Kangar oo can double their
                    salary, there is definitely hope for you. Popular career websites like “Seek” suggest the typical advice
                    about doing better in your performance review or getting more education from a university. This advice
                    is out of date and I have watched many colleagues fall for this trap and only end up disappointed.
                    Doubling your salary, very least increasing it significantly, is about breaking the norm and trying a
                    few things that are a bit more radical as you’re about to see with these simple tips below.</p>
                <p>When you open a website on your browser, it sends an HTTP request to the server where the website is
                    hosted. The server then sends back an HTTP response with the website content, such as text, images, and
                    videos. HTTP is responsible for structuring these requests and responses in a way that both the client
                    and the server can understand.</p>
                <img src="{{ asset('new-frontendv1/images/event-page/event-learning.png') }}" class="img-fluid"
                    alt="image learning-event">
                <p>Okay so you can make more money but if that’s your only goal, the extra zeroes on your bank balance will
                    get really boring real quick. If an uneducated guy from the home of the Kangar oo can double their
                    salary, there is definitely hope for you. Popular career websites like “Seek” suggest the typical advice
                    about doing better in your performance review or getting more education from a university. This advice
                    is out of date and I have watched many colleagues fall for this trap and only end up disappointed.
                    Doubling your salary, very least increasing it significantly, is about breaking the norm and trying a
                    few things that are a bit more radical as you’re about to see with these simple tips below.</p>

            </div>
        </div>
    </section>
    {{-- event details learning end --}}


    {{-- event  details card start --}}
    <section class="ic-event-details-card-section">
        <div class="container">
            <div class="ic-event-details-card-heading text-center">
                <h2>prestigious presenters</h2>
            </div>
            <div class="ic-event-details-card-wrapper">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="ic-event-details-card-item">
                            <img src="{{ asset('new-frontendv1/images/user_1.png') }}" class="img-fluid"
                                alt="image learning-event">
                            <h4>Leslie Alexander</h4>
                            <span>Director, Security Research</span>
                            <p>Come ready to gain valuable knowledge, network with peers from other government agencies, and
                                collaborate on tackling shared security concerns as this webinar will also offer an
                                opportunity for engaging</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ic-event-details-card-item">
                            <img src="{{ asset('new-frontendv1/images/user_1.png') }}" class="img-fluid"
                                alt="image learning-event">
                            <h4>Leslie Alexander</h4>
                            <span>Director, Security Research</span>
                            <p>Come ready to gain valuable knowledge, network with peers from other government agencies, and
                                collaborate on tackling shared security concerns as this webinar will also offer an
                                opportunity for engaging</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="ic-event-details-card-item">
                            <img src="{{ asset('new-frontendv1/images/user_1.png') }}" class="img-fluid"
                                alt="image learning-event">
                            <h4>Leslie Alexander</h4>
                            <span>Director, Security Research</span>
                            <p>Come ready to gain valuable knowledge, network with peers from other government agencies, and
                                collaborate on tackling shared security concerns as this webinar will also offer an
                                opportunity for engaging</p>
                        </div>
                    </div>
                </div>
            </div>
            <p>Okay so you can make more money but if that’s your only goal, the extra zeroes on your bank balance will get
                really boring real quick. If an uneducated guy from the home of the Kangar oo can double their salary, there
                is definitely hope for you. Popular career websites like “Seek” suggest the typical advice about doing
                better in your performance review or getting more education from a university. This advice is out of date
                and I have watched many colleagues fall for this trap and only end up disappointed. Doubling your salary,
                very least increasing it significantly, is about breaking the norm and trying a few things that are a bit
                more radical as you’re about to see with these simple tips below.</p>
        </div>
    </section>
    {{-- event  details card end --}}
    {{-- Event Register start --}}
    <div class="ic-event-details-register-form-area">
        <div class="container">
            <div class="ic-form-wrapper">
                <div class="ic-form-heading">
                    <h5>Event Register Now</h5>
                </div>
                <form class="form">
                    <div class="ic-event-details-register-form">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="ic-form-group">
                                    <label for="" class="form-label">First Name</label>
                                    <input type="text" class="form-control" id=""
                                        placeholder="Enter first name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ic-form-group">
                                    <label for="" class="form-label">Last Name</label>
                                    <input type="text" class="form-control" id="" placeholder="Enter last name">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ic-form-group">
                                    <label for="" class="form-label">Email Address</label>
                                    <input type="email" class="form-control" id="" placeholder="Email adress">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ic-form-group">
                                    <label for="" class="form-label">Phone Number</label>
                                    <input type="text" class="form-control" id="" placeholder="Phone Number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ic-form-group">
                                    <label for="" class="form-label">Country of Residence</label>
                                    <input type="text" class="form-control" id="" placeholder="Type">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="ic-form-group">
                                    <label for="" class="form-label">Desired Course</label>
                                    <input type="text" class="form-control" id="" placeholder="Type">
                                </div>
                            </div>

                            <div class="col-md-4">
                                <div class="ic-form-group">
                                    <label for="" class="form-label">Career Interest</label>
                                    <select id="" class="form-select">
                                        <option selected>Choose one</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="ic-form-group">
                                    <label for="inputState" class="form-label">Desired start date</label>
                                    <input type="text" class="form-control" id="inputAddress2"
                                        placeholder="Enter Date">
                                </div>

                            </div>
                            <div class="col-md-4">
                                <div class="ic-form-group">
                                    <label for="inputZip" class="form-label">Previous Experience</label>
                                    <select id="inputState" class="form-select">
                                        <option selected>Experience</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>

                            </div>
                            <div class="col-12">
                                <div class="ic-form-group">
                                    <label for="" class="form-label">Desired Schedule</label>
                                    <select id="" class="form-select">
                                        <option selected>Select schedule</option>
                                        <option>Option 1</option>
                                        <option>Option 2</option>
                                        <option>Option 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="ic-form-group">
                                    <label for="" class="form-label">Message</label>
                                    <textarea name="" id="" cols="30" rows="10"
                                        placeholder="Reason for your request ( Why do you need our help? )..."></textarea>
                                </div>

                            </div>
                            <div class="col-12">
                                <button type="submit" class="ic-btn">Submit Now</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="ic-event-details-footer">
                <ul class="ic-social-share">
                    <li class="ic-social-item">
                        <a href="#" class="ic-social-link">
                            Share
                        </a>
                    </li>
                    <li class="ic-social-item">
                        <a href="#" class="ic-social-link">
                            <i class="ri-facebook-fill"></i>
                        </a>
                    </li>
                    <li class="ic-social-item">
                        <a href="#" class="ic-social-link">
                            <i class="ri-twitter-fill"></i>
                        </a>
                    </li>
                    <li class="ic-social-item">
                        <a href="#" class="ic-social-link">
                            <i class="ri-instagram-line"></i>
                        </a>
                    </li>
                    <li class="ic-social-item">
                        <a href="#" class="ic-social-link">
                            <i class="ri-linkedin-fill"></i>
                        </a>
                    </li>
                </ul>
                <ul class="ic-event-details-footer-right">
                    <li>
                        <a href="">DevOps</a>
                    </li>
                    <li>
                        <a href="">Stock</a>
                    </li>
                    <li>
                        <a href="">Linux</a>
                    </li>
                </ul>
            </div>
            
        </div>
    </div>
    {{-- Event Register end --}}

    {{-- event card section start --}}
    <section class="ic-enroll-course ic-event-card-section ic-section-space ">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-5 m-auto">
                    <div class="header-bootcamp text-center">
                        <h2 class="black pb-2">Upcoming <span class="primary">Event</span></h2>
                        <p class="gray">It is a long established fact that a reader will be distracted by the fact that a
                            reader readable content. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="ic-coach-item">
                        <div class="position-relative overflow-hidden">
                            <p class="ic-event-bage">Event</p>
                            <img src="{{ asset('/new-frontendv1/images/event-page/event_1.png') }}"
                                class="img-fluid ic-coach-image w-100" alt="">
                        </div>
                        <div class="ic-card-content">
                            <div class="ic-date-time-location">
                                <div class="ic-date">
                                    <span><i class="ri-calendar-line"></i></span>
                                    <span>15 Sep, 2021</span>
                                </div>
                                <div class="ic-time">
                                    <span><i class="ri-time-line"></i></span>
                                    <span>13:50:2023</span>
                                </div>

                            </div>
                            <div class="ic-card-title">
                                <h5>Far far away, behind the word mount ains Behind the word mountains</h5>
                            </div>
                            <div class="ic-card-btn">
                                <a class="ic-btn-outline" href="#" type="btn">Read More <span><i
                                            class="ri-arrow-right-line"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ic-coach-item">
                        <div class="position-relative overflow-hidden">
                            <p class="ic-event-bage">Event</p>
                            <img src="{{ asset('/new-frontendv1/images/event-page/event_2.png') }}"
                                class="img-fluid ic-coach-image w-100" alt="">
                        </div>
                        <div class="ic-card-content">
                            <div class="ic-date-time-location">
                                <div class="ic-date">
                                    <span><i class="ri-calendar-line"></i></span>
                                    <span>15 Sep, 2021</span>
                                </div>
                                <div class="ic-time">
                                    <span><i class="ri-time-line"></i></span>
                                    <span>13:50:2023</span>
                                </div>

                            </div>
                            <div class="ic-card-title">
                                <h5>Far far away, behind the word mount ains Behind the word mountains</h5>
                            </div>
                            <div class="ic-card-btn">
                                <a class="ic-btn-outline" href="#" type="btn">Read More <span><i
                                            class="ri-arrow-right-line"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="ic-coach-item">
                        <div class="position-relative overflow-hidden">
                            <p class="ic-event-bage">Event</p>
                            <img src="{{ asset('/new-frontendv1/images/event-page/event_2.png') }}"
                                class="img-fluid ic-coach-image w-100" alt="">
                        </div>
                        <div class="ic-card-content">
                            <div class="ic-date-time-location">
                                <div class="ic-date">
                                    <span><i class="ri-calendar-line"></i></span>
                                    <span>15 Sep, 2021</span>
                                </div>
                                <div class="ic-time">
                                    <span><i class="ri-time-line"></i></span>
                                    <span>13:50:2023</span>
                                </div>

                            </div>
                            <div class="ic-card-title">
                                <h5>Far far away, behind the word mount ains Behind the word mountains</h5>
                            </div>
                            <div class="ic-card-btn">
                                <a class="ic-btn-outline" href="#" type="btn">Read More <span><i
                                            class="ri-arrow-right-line"></i></span></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            {{-- <div class="mt-30 text-center">
                <a href="#" class="ic-btn">See More </a>
            </div> --}}
            <!-- ic slider button(arrow) design -->
            <div class="ic-slider-button-group mt-50 d-flex justify-content-center align-items-center ">
                {{-- <button class=" ic-button course-left-btn">
                    <i class="ri-arrow-left-line icon"></i>
                </button> --}}
                <button class="ic-btn">
                    Explore More
                    <i class="ri-arrow-right-line icon"></i>
                </button>
            </div>


        </div>
    </section>
    {{-- event card section end --}}
@endsection

@push('scripts')
@endpush
