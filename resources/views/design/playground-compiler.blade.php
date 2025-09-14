@extends('layouts.master-user')

@push('styles')
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
        type='text/css' />
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <div class="ic-header-admin">
        <div class="ic-CourseBack-btn">
            <a href="#" class="ic-backPage-button"><i class="ri-arrow-left-s-line"></i> Back to Course</a>
        </div>
    </div>
    {{-- palyground --}}
    <div class="ic-codePlayground--liveCode">
        <div class="ic-codePlayground--left">
            <div class="ic-codePlayground-header">
                <ul class="edit-tabs">
                    <li>
                        <a href="#">Task</a>
                    </li>
                </ul>
                <ul class="editor-times">
                    <li>
                        <span class="pro-names">MCdns</span>
                    </li>
                    <li>
                        <span class="ic-times-prime"><i class="ri-timer-line"></i></span>
                    </li>
                    <li>
                        <span class="ic-times-count">59:58</span>
                    </li>
                </ul>
            </div>
            <div class="ic-codePlayground-innerDiv">
                <div class="ic-codePlayground-questionBackFroward-btn">
                    <button><i class="ri-arrow-left-line"></i> Prev</button>
                    <button> Next <i class="ri-arrow-right-line"></i></button>
                </div>
                <div class="ic-codePlayground-question">
                    <p class="ic-question-text">(1). What is the 16-bit compiler allowable range for integer constants?</p>
                    <ul class="ic-question">
                        <li>
                            <div class="form-check p-0 m-0">
                                <label class="form-check-label ic-ques-ans">
                                    <input class="form-check-input ic-question-checkInput me-2 ms-0" type="radio"
                                        name="question" value="" id="flexCheckDefault4"> Default checkbox
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check p-0 m-0">
                                <label class="form-check-label ic-ques-ans">
                                    <input class="form-check-input ic-question-checkInput me-2 ms-0" type="radio"
                                        name="question" value="" id="flexCheckDefault4"> Default checkbox
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check p-0 m-0">
                                <label class="form-check-label ic-ques-ans">
                                    <input class="form-check-input ic-question-checkInput me-2 ms-0" type="radio"
                                        name="question" value="" id="flexCheckDefault4"> Default checkbox
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check p-0 m-0">
                                <label class="form-check-label ic-ques-ans">
                                    <input class="form-check-input ic-question-checkInput me-2 ms-0" type="radio"
                                        name="question" value="" id="flexCheckDefault4"> Default checkbox
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <a href="#" class="ic-check-hint">Check Hint</a>
                <div class="ic-corrrct-answare">
                    <p class="ic-correct-ans"><span>Correct Answer : </span>-3.4e38 to 3.4e38</p>
                    <p class="ic-explanation"><span>Explanation : </span>In a 16-bit C compiler, we have 2 bytes to store
                        the value.</p>
                    <p class="ic-wrong-ans"><span>Explanation : </span>In a 16-bit C compiler, we have 2 bytes to store the
                        value.</p>
                </div>

                <div class="ic-answar-submit">
                    <a href="#">Reset Quiz <i class="ri-restart-line"></i></a>
                    <p>Question-1/12</p>
                    <button>Submit</button>
                </div>
            </div>
        </div>
        <div class="ic-codePlayground--right">
            <div class="ic-codeplay-live">
                <div class="ic-terminal-header">
                    <ul class="ic-tabs-terminal">
                        <li>
                            <a href="#">main.js</a>
                        </li>
                    </ul>
                    <ul class="ic-resize">
                        <li>
                            <a href="#">
                                <i class="ri-play-mini-fill"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" class="btn-fullscreen" onclick="fullscreen(event.target)">
                                <i class="ri-fullscreen-line full"></i>
                                <i class="ri-fullscreen-exit-line exitFull d-none"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    {{-- palyground --}}
@endsection

@push('scripts')
    <script>
        //full screen
        function fullscreen() {

            let fullScreenBtn = document.querySelector('.btn-fullscreen');
            var isInFullScreen = (document.fullscreenElement && document.fullscreenElement !== null) ||
                (document.webkitFullscreenElement && document.webkitFullscreenElement !== null) ||
                (document.mozFullScreenElement && document.mozFullScreenElement !== null) ||
                (document.msFullscreenElement && document.msFullscreenElement !== null);

            var docElm = document.querySelector('.ic-codeplay-live');
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
