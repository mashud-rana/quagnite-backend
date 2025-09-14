@extends('layouts.master')

@push('styles')
@endpush

@section('content')
    {{-- <div class="all-playground-loader">
        <div class="loader-all">
            <p>Lab provisioned. Getting ready</p>
            <h2>Loading</h2>
        </div>
    </div> --}}
    <section class="all-playgournd bg-white pb-40 ic-section-space">
        <div class="container">
            {{-- <div class="ic-header-admin p-0">
                <div class="ic-CourseBack-btn">
                    <a href="https://mc-dns.test/playground" class="ic-backPage-button">
                        <i class="ri-arrow-left-s-line"></i> Back </a>
                </div>
            </div> --}}
            <div class="ic-codePlayground--liveCode p-0">
                <div class="ic-codePlayground--left">
                    <div class="ic-codePlayground-header">
                        <ul class="edit-tabs">
                            <li><a href="#">Task</a></li>
                        </ul>
                        <ul class="editor-times">
                            <li><span class="pro-names">MCdns</span></li>
                            <li><span class="ic-times-prime"><i class="ri-timer-line"></i></span></li>
                            <li><span class="ic-times-count"><span>00:59:31</span></span></li>
                        </ul>
                    </div>
                    <div class="ic-codePlayground-innerDiv pt-4">
                        <p class="fw-300 gray pb-3">The Python online test assesses knowledge of programming in the Python
                            language and commonly used parts of the Python Standard Library. This test requires solving live
                            coding problems in Python.</p>
                        <p class="fw-300 gray pb-3">The assessment includes work-sample tasks such as:</p>
                        <p class="fw-300 gray pb-3">A good Python developer needs a solid understanding of the Python
                            programming language and knowledge of its data structures and language constructs to write
                            robust
                            and maintainable code.</p>
                    </div>
                </div>
                <div class="ic-codePlayground--right">
                    <div class="ic-codePlayground--main-code d-block bg-white">
                        <div class="ic-terminal-header">
                            <ul class="ic-tabs-terminal">
                                <li><a href="#">index.py</a></li>
                            </ul>
                            <ul class="ic-resize">
                                <li>
                                    <a href="#" class="bg-red"><i class="ri-close-fill"></i></a>
                                </li>
                                <li>
                                    <a href="#" onclick="fullscreen(event.target)" class="btn-fullscreen">
                                        <i class="ri-fullscreen-line full"></i>
                                        <i class="ri-fullscreen-exit-line exitFull d-none"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="terminel-height">
                            <embed src="https://www.javascripttutorial.net/" height="100%" width="100%"></embed>
                            {{-- <iframe src="http://18.212.212.241:8080/" height="400px" width="100%"></iframe> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        function fullscreen() {
            let fullScreenBtn = document.querySelector('.btn-fullscreen');
            var isInFullScreen = (document.fullscreenElement && document.fullscreenElement !== null) ||
                (document.webkitFullscreenElement && document.webkitFullscreenElement !== null) ||
                (document.mozFullScreenElement && document.mozFullScreenElement !== null) ||
                (document.msFullscreenElement && document.msFullscreenElement !== null);

            var docElm = document.querySelector('.ic-codePlayground--right');
            if (!isInFullScreen) {
                if (docElm.requestFullscreen) {
                    docElm.requestFullscreen();
                    fullScreenBtn.classList.add('active');
                } else if (docElm.mozRequestFullScreen) {
                    docElm.mozRequestFullScreen();
                } else if (docElm.webkitRequestFullScreen) {
                    docElm.webkitRequestFullScreen();
                } else if (docElm.msRequestFullscreen) {
                    docElm.msRequestFullscreen();
                }

            } else {
                if (document.exitFullscreen) {
                    fullScreenBtn.classList.remove('active');
                    document.exitFullscreen();
                } else if (document.webkitExitFullscreen) {
                    document.webkitExitFullscreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                }
            }
        }
    </script>
@endpush
