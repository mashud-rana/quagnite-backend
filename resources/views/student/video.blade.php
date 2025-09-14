@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">

        <div class="container">
            {{-- <video id="my-video" class="video-js vjs-default-skin hide-progress" controls preload="auto" width="640"
                height="264" poster="MY_VIDEO_POSTER.jpg" data-setup="{}">
                <source src="{{ getStoreFile('videos/sample-video.mp4') }}" type="video/mp4" />
                <p class="vjs-no-js">
                    To view this video please enable JavaScript, and consider upgrading to a
                    web browser that
                </p>
            </video> --}}


            <video id="player" playsinline controls data-poster="" width="50%">
                <source src="https://mcdns-website-storage.s3.amazonaws.com/videos/sample-video.mp4" type="video/mp4" />

                <!-- Captions are optional -->
                <track kind="captions" label="English captions" src="" srclang="en" default />
            </video>
        </div>

    </section>
    {{-- student dashboard --}}
@endsection

@push('styles')
    {{-- <link href="https://vjs.zencdn.net/8.3.0/video-js.css" rel="stylesheet" />
    <style>
        .hide-progress .vjs-progress-control,
        .hide-progress .vjs-time-control {
            display: none !important;
        }
    </style> --}}

    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />

    <style>
        /* .plyr__progress {
                                                                                        display: none;
                                                                                    } */
    </style>
@endpush
@push('scripts')
    {{-- <script src="https://vjs.zencdn.net/8.3.0/video.min.js"></script> --}}

    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>

    <script>
        // const player = new Plyr('#player');
        const player = new Plyr('#player', {
            controls: [
                'play',
                'rewind',
                'progress',
                'current-time',
                'duration',
                'mute',
                'volume',
                'captions',
                'settings',
                'fullscreen'
            ],
            seekTime: 10, // Set the desired backward seek time (adjust as needed)
            invertTime: false, // Display time in normal order (not inverted)
            listeners: {
                seek: event => {
                    const seekTime = event.detail.plyr.currentTime;
                    if (seekTime > player.currentTime) {
                        player.currentTime = seekTime; // Prevent seeking forward
                    }
                }
            }
        });

        /*
        play: Play/Pause button
        progress: Progress bar
        current-time: Current time display
        duration: Total duration display
        mute: Mute/Unmute button
        volume: Volume control
        captions: Captions/Subtitles button
        settings: Settings menu (for quality, speed, etc.)
        pip: Picture-in-Picture button
        airplay: Airplay button (for Apple devices)
        fullscreen: Fullscreen button
        rewind: Rewind button
        fast-forward: Fast-forward button
            */
    </script>
@endpush
