@extends('layouts.master')

@section('content')
    <section class="ic-banner-part ic-section-space ic_v1_inner-part"
        style="background-image: linear-gradient(0deg, rgba(231, 237, 238, 0.95), rgba(231, 237, 238, 0.95)), url({{ asset('/new-frontend') }}/images/playground-banner.png);">
        <!-- content -->
        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-6">
                    <div class="ic-banner-content ps-0 pe-0">
                        <span class="ic-heading-title mb-15">Our Playground</span>
                        <h1 class="black pb-15">Playground Overview!</h1>
                        <p class="color-deep-gray pb-30 pe-0">Lorem Ipsum is simply dummy text of the printing and
                            typesetting industry.
                            Lorem Ipsum has
                            been the industry's standard dummy text ever since the 1500s, when an unknown printer took a
                            galley of type and scrambled it to make a type specimen book.</p>
                        <div class="">
                            <a href="#playground-list" class="ic-btn">
                                All Playgrounds
                                <i class="ri-arrow-right-line"></i>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-right-side-img">
                        <img src="{{ asset('new-frontendv1/images/playground/playground-banner-sectors.png') }}"
                            alt="" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="ic-playground-part ic-section-space bg-white">
        <div class="container">
            <div class="section-headers-playground">
                <h2 class="text-center">Practical experience is <span>completely worthwhile.</span></h2>
            </div>

            <div class="ic-practical-experience-div">
                <div class="ic-practical-experience-left">
                    <img src="{{ asset('new-frontendv1/images/playground/practical-experience-img.png') }}"
                        class="img-fluid h-100" alt="">
                </div>
                <div class="ic-practical-experience-right">
                    <ul>
                        <li>
                            <div class="experience-img">
                                <img src="{{ asset('new-frontendv1/images/playground/new-skill-1.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div>
                                <h6>Become confident in a new skill.</h6>
                                <p>By providing sets of practical assignments that are tailored for partic-ular roles and
                                    objectives, you may help learners advance with confidence as they learn new abilities.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="experience-img">
                                <img src="{{ asset('new-frontendv1/images/playground/new-skill-2.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div>
                                <h6>Practice in enclosed spaces</h6>
                                <p>To reduce danger to your organization's systems, offer a safe, practical environment
                                    where users can hone their skills—no download or installation needed.</p>
                            </div>
                        </li>
                        <li>
                            <div class="experience-img">
                                <img src="{{ asset('new-frontendv1/images/playground/new-skill-3.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div>
                                <h6>Prepare for projects with 500+ labs</h6>
                                <p>MCdns Learning Playground Plus includes everything you’d get in the Standard Plan (all
                                    20+ DevOps online training courses and 100+ labs). AWS, Azure, or GCP A Docker </p>
                            </div>
                        </li>
                        <li>
                            <div class="experience-img">
                                <img src="{{ asset('new-frontendv1/images/playground/new-skill-4.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div>
                                <h6>Visualize the development of skills in detail.</h6>
                                <p>Continual affirmation, feedback, and knowledge of your progress and areas for improvement
                                    will all help you feel more confident. </p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section class="ic-make-your-hands ic-section-space position-relative">
        <img src="{{ asset('new-frontendv1/images/playground/make-hands-shape.png') }}" class="img-fluid ic-make-hands"
            alt="">

        <div class="container position-relative ic-shadow-effect z-3">
            <div class="section-headers-playground text-center">
                <h2 class="black">Make your <span>hands hazy</span></h2>
            </div>
            <div class="row g-3">
                @forelse($playground as $index => $item)
                    @if ($index < 4)
                        <div class="col-lg-4 col-xxl-3 col-xl-3 col-sm-6 col-6">
                            <a href="{{ route('playground.details', $item->slug) }}">
                                <div class="ic__cloud--items">
                                    <div class="ic__cloud--img">
                                        <img src="{{ getStoreFile($item->image, $item->storage_type) }}" alt="images"
                                            class="img-fluid">
                                    </div>

                                    <span>
                                        <i class="ri-lock-line"></i>
                                    </span>
                                </div>
                            </a>
                        </div>
                    @endif
                @empty
                    <x-frontend.data-notfound></x-frontend.data-notfound>
                @endforelse
            </div>

            <div class="text-center mt-30 mb-40">
                <a href="#playground-list" class="ic-btn ">
                    All Playgrounds
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
            <div class="section-headers-playground text-center">
                <h2 class="black">Experience DevOps <span>With Playgrounds?</span></h2>
            </div>
        </div>
    </section>
    <section class="ic-challenge-section ic-section-space">
        <div class="container">
            <div class="ic-playground-video playground-video">
                <a href="#">
                    <div class="circle">
                        <i class="ri-play-fill"></i>
                    </div>
                </a>
                <img src="{{ asset('new-frontendv1/images/playground/playgraound-play.png') }}" class="img-fluid"
                    alt="images playground">
            </div>
            <div class="section-headers-playground text-center">
                <h2 class="black">Why use Challenge <span>Playground?</span></h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="ic-playground-challange-items">
                        <img src="{{ asset('new-frontendv1/images/playground/simple-1.png') }}" class="img-fluid"
                            alt="">
                        <h4>Simple Access</h4>
                        <p>Develop and assess skills across multiple technologies without ever needing to create your own
                            cloud account or trial subscriptions</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ic-playground-challange-items bg-2">
                        <img src="{{ asset('new-frontendv1/images/playground/simple-2.png') }}" class="img-fluid"
                            alt="">
                        <h4>study for an exam</h4>
                        <p>Develop and assess skills across multiple technologies without ever needing to create your own
                            cloud account or trial subscriptions</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ic-playground-challange-items bg-3">
                        <img src="{{ asset('new-frontendv1/images/playground/simple-3.png') }}" class="img-fluid"
                            alt="">
                        <h4>study for an exam</h4>
                        <p>Develop and assess skills across multiple technologies without ever needing to create your own
                            cloud account or trial subscriptions</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ic-playground-challange-items bg-3">
                        <img src="{{ asset('new-frontendv1/images/playground/simple-4.png') }}" class="img-fluid"
                            alt="">
                        <h4>study for an exam</h4>
                        <p>Develop and assess skills across multiple technologies without ever needing to create your own
                            cloud account or trial subscriptions</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ic-playground-challange-items bg-2">
                        <img src="{{ asset('new-frontendv1/images/playground/simple-5.png') }}" class="img-fluid"
                            alt="">
                        <h4>study for an exam</h4>
                        <p>Develop and assess skills across multiple technologies without ever needing to create your own
                            cloud account or trial subscriptions</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ic-playground-challange-items">
                        <img src="{{ asset('new-frontendv1/images/playground/simple-6.png') }}" class="img-fluid"
                            alt="">
                        <h4>study for an exam</h4>
                        <p>Develop and assess skills across multiple technologies without ever needing to create your own
                            cloud account or trial subscriptions</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ic-identify-address ic-section-space"
        style="background-image: linear-gradient(180deg, rgba(0, 56, 91, 0.97) 1.2%, rgba(21, 141, 167, 0.97) 100%), url({{ asset('/new-frontendv1') }}/images/playground/identify-address.png);">
        <div class="container">
            <div class="row gy-5">
                <div class="col-lg-6">
                    <div class="ic-identify-content">
                        <h2 class="white">Identify and address <span>any training requirement.</span></h2>
                        <p class="white pt-4">Labs offer supervised instruction that replicates the daily work that your
                            staff complete. You may extend employee development and equip your engineers to meet demanding
                            tech goals by having them learn by doing in real-world situations. A hosted cloud environment
                            (such an AWS/Azure account) that has been setup for the particular scenario-based challenge will
                            be presented to you when you open a Challenge Lab. You will be given prerequisites and
                            directions to finish the exercise based on the skill level of the lab. </p>
                        <div class="d-flex gap-3 pt-4">
                            <div class="identify-img">
                                <img src="{{ asset('new-frontendv1/images/playground/stack-1.png') }}" class="img-fluid"
                                    alt="">
                            </div>
                            <div>
                                <h5 class="white">Become confident in a new skill.</h5>
                                <p class="white">By providing sets of practical assignments that are tailored for
                                    partic-ular roles and
                                    objectives, you may help learners advance with confidence as they learn new abilities.
                                </p>
                            </div>
                        </div>
                        {{-- <a href="#" class="ic-btn-simple mt-4">Request new playground</a> --}}
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="ic-identify-content-img position-relative">
                        <img src="{{ asset('new-frontendv1/images/playground/identify-right-img.png') }}"
                            class="img-fluid big-image" alt="">
                        <img src="{{ asset('new-frontendv1/images/playground/full-dots.png') }}"
                            class="img-fluid dots-img" alt="">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="ic-why-use-challenge ic-section-space" id="playground-list">
        <div class="container">
            <div class="section-headers-playground text-center">
                <h2 class="black">500+ in the <span>DevOps Playgrounds</span></h2>
            </div>
            <div class="row g-3 position-relative ic-playground-shape-bluar z-3">
                @forelse($playground as $item)
                    <div class="col-lg-4 col-xxl-3 col-xl-3 col-sm-6 col-6">
                        <a href="{{ route('playground.details', $item->slug) }}">
                            <div class="ic__cloud--items">
                                <div class="ic__cloud--img">
                                    <img src="{{ getStoreFile($item->image, $item->storage_type) }}" alt="images"
                                        class="img-fluid">
                                </div>
                                <span>
                                    <i class="ri-lock-line"></i>
                                </span>
                                <p>{{ $item->title }}</p>
                            </div>
                        </a>
                    </div>
                @empty
                    <x-frontend.data-notfound></x-frontend.data-notfound>
                @endforelse
            </div>

            {{-- <div class="mt-4 text-center">
                <button class="ic-btn-simple">Request new playground</button>
            </div> --}}
        </div>
    </section>
    {{-- active goal --}}
    <x-frontend.achieve-goals></x-frontend.achieve-goals>
    {{-- active goal --}}
@endsection

@push('scripts')
    <script>
        // video player js
        const player = new Plyr('.player', {
            controls: [
                'play-large',
                'restart',
                // 'rewind',
                'play',
                'progress',
                'current-time',
                'duration',
                'mute',
                'volume',
                // 'download',
                'fullscreen',
                'settings',
            ],
            settings: ['captions', 'quality', 'speed'],
        });
        setTimeout(() => {
            player.poster = '/new-frontend/images/playground-video-img.png';
        }, 500);
    </script>
@endpush
