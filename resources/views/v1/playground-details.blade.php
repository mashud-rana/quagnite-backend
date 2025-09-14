@extends('layouts.master-v1')

@section('content')
    {{-- banner part start --}}
    {{-- <section class="ic-banner-part ic-section-space ic_v1_inner-part bg-img-center-property"
        style="background-image: linear-gradient(0deg, rgba(232, 248, 252, 0.95) 0%, rgba(232, 248, 252, 0.95) 100%), url({{ asset('/new-frontend/images/bootcamps-banner-bg.png') }})">
        <div class="container">
            <div class="row align-items-center ">
                <div class="col-md-7">
                    <div class="ic-banner-content ic-playground-banner">
                        <span class="ic-heading-title mb-15">Cloud Playground</span>
                        <h1 class="black pb-15">Google Cloud Playground</h1>
                        <div class="row">
                            <div class="col-xxl-10 col-lg-12">
                                <p class="color-deep-gray pb-30">
                                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum
                                    has been the industry's standard dummy text ever since the 1500s, when an unknown
                                    printer took a galley of printing and typesetting.
                                </p>
                                <div class="ic-video-programs">
                                    <a href="#" class="ic-btn bg-effect">
                                        Launch now
                                        <i class="ri-arrow-right-line"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 d-md-block d-none ">
                    <div class="playground-images-right text-center">
                        <img src="{{ asset('new-frontendv1/images/playground/playground-1.png') }}" class="img-fluid"
                            alt="images">
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- banner part end --}}

    {{-- playground content start --}}
    {{-- <section class="ic-playground-details-section ic-section-space">
        <div class="container">
            <div class="ic-playground-details-content-area">
                <div class="ic-section-shadow-left"></div>
                <div class="ic-section-shadow-right"></div>
                <div class="ic-playground-details-content">
                    <div class="ic-playground-details-heading">
                        <h2>What Is GCP (Google Cloud Platform)?</h2>
                    </div>
                    <p>Almost everything nowadays is powered by the Internet. There are millions of apps, websites, and
                        internet services available. And they all require computers to complete their tasks. That is why
                        cloud computing services cost billions of dollars. One of these cloud computing firms is Google
                        Cloud Platform.
                    </p>
                    <p>
                        But what exactly can you do using GCP? Assume you own an app development company. How can you
                        benefit from cloud computing? Your apps will need to include features such as:
                    </p>
                    <ul>
                        <li>
                            Databases
                        </li>
                        <li>
                            Servers
                        </li>
                        <li>
                            Storage space for files
                        </li>
                        <li>
                            Containers running on MCdns clusters
                        </li>
                        <li>
                            And so on
                        </li>
                        <li>
                            Databases
                        </li>
                        <li>
                            Servers
                        </li>
                        <li>
                            Storage space for files
                        </li>
                        <li>
                            Containers running on MCdns clusters
                        </li>
                        <li>
                            And so on
                        </li>
                    </ul>
                    <p>Such resources are available through Google Cloud. You can choose between computing hardware and
                        computing services. Here's an illustration of hardware vs. service. You might want an MCdns cluster,
                        for example. You have two choices:</p>
                    <p>You use Google Cloud to hire a few virtual servers. You get to choose how many CPU cores each server
                        has. You decide how much RAM you require. You can also choose how many GB of storage space you want.
                        The Kubernetes software is then installed on all servers. Finally, you join them together to form
                        that cluster.</p>
                    <p>Manually creating a cluster is a time-consuming task. So you might prefer a simpler method. Instead,
                        you can purchase Kubernetes as a service on GCP. In essence, you gain direct access to a Kubernetes
                        cluster. You are not need to rent and configure servers. Google handles the server technicalities
                        behind the scenes. You simply purchase the GKE service (Google Kubernetes Engine) and you will
                        receive a ready-made cluster.</p>
                    <div class="ic-playground-details-heading">
                        <h2>Quick Start Guide</h2>
                    </div>
                    <p>You use Google Cloud to hire a few virtual servers. You get to choose how many CPU cores each server
                        has. You decide how much RAM you require. You can also choose how many GB of storage space you want.
                        The Kubernetes software is then installed on all servers. Finally, you join them together to form
                        that cluster.</p>
                    <p>Manually creating a cluster is a time-consuming task. So you might prefer a simpler method. Instead,
                        you can purchase Kubernetes as a service on GCP. In essence, you gain direct access to a Kubernetes
                        cluster. You are not need to rent and configure servers. Google handles the server technicalities
                        behind the scenes. You simply purchase the GKE service (Google Kubernetes Engine) and you will
                        receive a ready-made cluster.</p>
                    <div class="ic-playground-details-heading">
                        <h2>List of Services</h2>
                    </div>
                    <p>You use Google Cloud to hire a few virtual servers. You get to choose how many CPU cores each server
                        has. You decide how much RAM you require. You can also choose how many GB of storage space you want.
                        The Kubernetes software is then installed on all servers. Finally, you join them together to form
                        that cluster.</p>
                    <ul>
                        <li>
                            Databases
                        </li>
                        <li>
                            Servers
                        </li>
                        <li>
                            Storage space for files
                        </li>
                        <li>
                            Containers running on MCdns clusters
                        </li>
                        <li>
                            And so on
                        </li>
                        <li>
                            Databases
                        </li>
                        <li>
                            Servers
                        </li>
                        <li>
                            Storage space for files
                        </li>
                        <li>
                            Containers running on MCdns clusters
                        </li>
                        <li>
                            And so on
                        </li>
                    </ul>
                    <p>To use a database, you would first need a server. Then you would need to install a database
                        application. Finally, you would need to configure that application. With SQL you can avoid all of
                        these steps. You simply get direct access to a database. No need to launch a server. No need to
                        install any programs. Google takes care of those details, behind the scenes.</p>
                    <div class="ic-playground-details-video">
                        <div class="ic-playground-details-heading">
                            <h2>Video to get started</h2>
                        </div>
                        <div class="ic-playground-video playground-video">
                            <a href="#">
                                <div class="circle">
                                    <i class="ri-play-fill"></i>
                                </div>
                            </a>
                            <img src="{{ asset('new-frontendv1/images/playground/playgraound-play.png') }}"
                                class="img-fluid" alt="images playground">
                        </div>
                        <div class="ic-launch-btn">
                            <button class="ic-btn">Launch Now</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- playground content end --}}
@endsection

@push('scripts')
    {{-- <script src="{{ asset('frontend/js/price_range_script.js') }}"></script> --}}
@endpush
