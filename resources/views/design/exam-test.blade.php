@extends('layouts.master-user')

@push('styles')
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
        type='text/css' />
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
@endpush

@section('content')
    <div class="ic-video-content-part">
        <div class="ic-CourseBack-btn">
            <a href="#" class="ic-backPage-button"><i class="ri-arrow-left-s-line"></i> Back to Course</a>
        </div>
        <div class="ic-video-content-left">
            <div class="ic-exam-test-flat">
                <h5 class="ic-exam-headers">Milestone Exam Test</h5>
                <div class="ic-exam-test-content">
                    <div class="exam-test-progress">
                        <span class="ic-question-count">Question 2 / 10</span>
                        <div class="progress" role="progressbar" aria-label="Basic example" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">
                            <div class="progress-bar" style="width: 25%"></div>
                        </div>
                        <span class="persange">20%</span>
                    </div>
                    <div class="ic-question-alls">
                        <div class="ic-question-items">
                            <h6>1.Which of the following are examples of Development?</h6>
                            <ul>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Key (for opening door) <input class="form-check-input" type="checkbox"
                                                name="flexRadioDefault" id="flexRadioDefault1">
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            TV Remote <input class="form-check-input" type="checkbox"
                                                name="flexRadioDefault" id="flexRadioDefault2">
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            Button (in an app) <input class="form-check-input" type="checkbox"
                                                name="flexRadioDefault" id="flexRadioDefault3">
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            All of the above <input class="form-check-input" type="checkbox"
                                                name="flexRadioDefault" id="flexRadioDefault4">
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="ic-question-items">
                            <h6>1.Which of the following are examples of Development?</h6>
                            <ul>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDefault1">
                                            Key (for opening door) <input class="form-check-input" type="checkbox"
                                                name="flexRadioDefault" id="flexRadioDefault1">
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDefault2">
                                            TV Remote <input class="form-check-input" type="checkbox"
                                                name="flexRadioDefault" id="flexRadioDefault2">
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDefault3">
                                            Button (in an app) <input class="form-check-input" type="checkbox"
                                                name="flexRadioDefault" id="flexRadioDefault3">
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <label class="form-check-label" for="flexRadioDefault4">
                                            All of the above <input class="form-check-input" type="checkbox"
                                                name="flexRadioDefault" id="flexRadioDefault4">
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="ic-question-submit">
                            <a href="#" class="question-next-btn">Previous Question <i
                                    class="ri-arrow-right-line"></i></a>
                            <button>Pause Exam <i class="ri-pause-circle-line"></i></button>
                            <a href="#" class="question-next-btn">Next Question <i
                                    class="ri-arrow-right-line"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="ic-video-content-right">
            <div class="ic-learning-platform">
                <h5>Self Learning</h5>
                <div class="accordion ic-video-according" id="accordionExample">
                    <div class="accordion-item">
                        <div class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <div class="ic-video-milestone">
                                    <span class="p-circle"></span>
                                    <div class="ic-course-video">
                                        <h6><img src="{{ asset('frontend/images/video-icons.svg') }}" alt="">
                                            Milestone 0
                                            : Orientation</h6>
                                        <span class="video-times">(3:36)</span>
                                    </div>
                                </div>
                            </button>
                        </div>
                        <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="ic-video-milestone">
                                                <span class="p-circle"></span>
                                                <div class="ic-course-video">
                                                    <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                            alt="">
                                                        Milestone 0
                                                        : Orientation</p>
                                                    <span class="video-times">(3:36)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="ic-video-milestone">
                                                <span class="p-circle"></span>
                                                <div class="ic-course-video">
                                                    <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                            alt="">
                                                        Learn and Explore HTML as a Beginner</p>
                                                    <span class="video-times">(3:36)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="ic-quize-btn"> <svg width="17" height="16"
                                                viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.65538 13.1282L0 16V0.820513C0 0.602899 0.0864466 0.394199 0.240323 0.240323C0.394199 0.0864466 0.602899 0 0.820513 0H15.5897C15.8074 0 16.0161 0.0864466 16.1699 0.240323C16.3238 0.394199 16.4103 0.602899 16.4103 0.820513V12.3077C16.4103 12.5253 16.3238 12.734 16.1699 12.8879C16.0161 13.0418 15.8074 13.1282 15.5897 13.1282H3.65538ZM7.38462 9.02564V10.6667H9.02564V9.02564H7.38462ZM5.38831 4.76964L6.99815 5.0921C7.04384 4.86353 7.15349 4.65264 7.31435 4.48395C7.47521 4.31527 7.68067 4.19573 7.90681 4.13925C8.13295 4.08276 8.37049 4.09166 8.59177 4.1649C8.81306 4.23814 9.00899 4.37271 9.15679 4.55295C9.30458 4.7332 9.39815 4.9517 9.42661 5.18305C9.45507 5.4144 9.41725 5.64907 9.31756 5.85976C9.21786 6.07045 9.06038 6.2485 8.86345 6.37319C8.66651 6.49788 8.43822 6.56409 8.20513 6.5641H7.38462V8.20513H8.20513C8.74894 8.20496 9.28152 8.05039 9.74093 7.7594C10.2003 7.4684 10.5677 7.05295 10.8002 6.56137C11.0328 6.06979 11.121 5.52228 11.0545 4.98254C10.9881 4.44281 10.7698 3.93302 10.425 3.51249C10.0802 3.09197 9.62308 2.77798 9.10683 2.60707C8.59057 2.43615 8.0364 2.41533 7.50878 2.54702C6.98116 2.67871 6.50177 2.95751 6.12638 3.35098C5.751 3.74445 5.49505 4.23641 5.38831 4.76964Z"
                                                    fill="white" />
                                            </svg>
                                            Knowledge Check </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                <div class="ic-video-milestone">
                                    <span class="p-circle"></span>
                                    <div class="ic-course-video">
                                        <h6><img src="{{ asset('frontend/images/video-icons.svg') }}" alt="">
                                            01 - Milestone : Personal Portfolio?</h6>
                                        <span class="video-times">(3:36)</span>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="ic-video-milestone">
                                                <span class="p-circle"></span>
                                                <div class="ic-course-video">
                                                    <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                            alt="">
                                                        Milestone 0
                                                        : Orientation</p>
                                                    <span class="video-times">(3:36)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="ic-video-milestone">
                                                <span class="p-circle"></span>
                                                <div class="ic-course-video">
                                                    <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                            alt="">
                                                        Learn and Explore HTML as a Beginner</p>
                                                    <span class="video-times">(3:36)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="ic-quize-btn"> <svg width="17" height="16"
                                                viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.65538 13.1282L0 16V0.820513C0 0.602899 0.0864466 0.394199 0.240323 0.240323C0.394199 0.0864466 0.602899 0 0.820513 0H15.5897C15.8074 0 16.0161 0.0864466 16.1699 0.240323C16.3238 0.394199 16.4103 0.602899 16.4103 0.820513V12.3077C16.4103 12.5253 16.3238 12.734 16.1699 12.8879C16.0161 13.0418 15.8074 13.1282 15.5897 13.1282H3.65538ZM7.38462 9.02564V10.6667H9.02564V9.02564H7.38462ZM5.38831 4.76964L6.99815 5.0921C7.04384 4.86353 7.15349 4.65264 7.31435 4.48395C7.47521 4.31527 7.68067 4.19573 7.90681 4.13925C8.13295 4.08276 8.37049 4.09166 8.59177 4.1649C8.81306 4.23814 9.00899 4.37271 9.15679 4.55295C9.30458 4.7332 9.39815 4.9517 9.42661 5.18305C9.45507 5.4144 9.41725 5.64907 9.31756 5.85976C9.21786 6.07045 9.06038 6.2485 8.86345 6.37319C8.66651 6.49788 8.43822 6.56409 8.20513 6.5641H7.38462V8.20513H8.20513C8.74894 8.20496 9.28152 8.05039 9.74093 7.7594C10.2003 7.4684 10.5677 7.05295 10.8002 6.56137C11.0328 6.06979 11.121 5.52228 11.0545 4.98254C10.9881 4.44281 10.7698 3.93302 10.425 3.51249C10.0802 3.09197 9.62308 2.77798 9.10683 2.60707C8.59057 2.43615 8.0364 2.41533 7.50878 2.54702C6.98116 2.67871 6.50177 2.95751 6.12638 3.35098C5.751 3.74445 5.49505 4.23641 5.38831 4.76964Z"
                                                    fill="white" />
                                            </svg>
                                            Knowledge Check </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                <div class="ic-video-milestone">
                                    <span class="p-circle"></span>
                                    <div class="ic-course-video">
                                        <h6><img src="{{ asset('frontend/images/video-icons.svg') }}" alt="">
                                            01 - Milestone : Personal Portfolio?</h6>
                                        <span class="video-times">(3:36)</span>
                                    </div>
                                </div>
                            </button>
                        </h2>
                        <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul>
                                    <li>
                                        <a href="#">
                                            <div class="ic-video-milestone">
                                                <span class="p-circle"></span>
                                                <div class="ic-course-video">
                                                    <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                            alt="">
                                                        Milestone 0
                                                        : Orientation</p>
                                                    <span class="video-times">(3:36)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <div class="ic-video-milestone">
                                                <span class="p-circle"></span>
                                                <div class="ic-course-video">
                                                    <p><img src="{{ asset('frontend/images/video-icons.svg') }}"
                                                            alt="">
                                                        Learn and Explore HTML as a Beginner</p>
                                                    <span class="video-times">(3:36)</span>
                                                </div>
                                            </div>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#" class="ic-quize-btn"> <svg width="17" height="16"
                                                viewBox="0 0 17 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path
                                                    d="M3.65538 13.1282L0 16V0.820513C0 0.602899 0.0864466 0.394199 0.240323 0.240323C0.394199 0.0864466 0.602899 0 0.820513 0H15.5897C15.8074 0 16.0161 0.0864466 16.1699 0.240323C16.3238 0.394199 16.4103 0.602899 16.4103 0.820513V12.3077C16.4103 12.5253 16.3238 12.734 16.1699 12.8879C16.0161 13.0418 15.8074 13.1282 15.5897 13.1282H3.65538ZM7.38462 9.02564V10.6667H9.02564V9.02564H7.38462ZM5.38831 4.76964L6.99815 5.0921C7.04384 4.86353 7.15349 4.65264 7.31435 4.48395C7.47521 4.31527 7.68067 4.19573 7.90681 4.13925C8.13295 4.08276 8.37049 4.09166 8.59177 4.1649C8.81306 4.23814 9.00899 4.37271 9.15679 4.55295C9.30458 4.7332 9.39815 4.9517 9.42661 5.18305C9.45507 5.4144 9.41725 5.64907 9.31756 5.85976C9.21786 6.07045 9.06038 6.2485 8.86345 6.37319C8.66651 6.49788 8.43822 6.56409 8.20513 6.5641H7.38462V8.20513H8.20513C8.74894 8.20496 9.28152 8.05039 9.74093 7.7594C10.2003 7.4684 10.5677 7.05295 10.8002 6.56137C11.0328 6.06979 11.121 5.52228 11.0545 4.98254C10.9881 4.44281 10.7698 3.93302 10.425 3.51249C10.0802 3.09197 9.62308 2.77798 9.10683 2.60707C8.59057 2.43615 8.0364 2.41533 7.50878 2.54702C6.98116 2.67871 6.50177 2.95751 6.12638 3.35098C5.751 3.74445 5.49505 4.23641 5.38831 4.76964Z"
                                                    fill="white" />
                                            </svg>
                                            Knowledge Check </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal ic-videoAddDiscussion fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header border-0 pb-0">
                    <h5 class="modal-title" id="exampleModalLabel">Create a new question</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="#" class="ic-posted-boby">
                        <div class="form-group">
                            <label for="#">Title</label>
                            <input type="text" class="form-control"
                                placeholder="What is web development or what is threads of operating system given details with example">
                        </div>
                        <div class="form-group">
                            <label for="#">Content</label>
                            <div class="editors example"></div>
                        </div>
                        <div class="form-group d-flex align-items-center justify-content-between">
                            <label for="#" class="pb-0">Resolve</label>
                            <div class="form-check form-switch">
                                <input class="form-check-input" type="checkbox" id="flexSwitchCheckDefault">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="#">Content</label>
                            <input name='tags' class="form-control h-auto" value='development'
                                placeholder="Add tags...">
                        </div>
                        <div class="form-buttons">
                            <button>Cancel</button>
                            <button>Publish</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'>
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script>
        // The DOM element you wish to replace with Tagify
        var input = document.querySelector('input[name=tags]')
        var tagify = new Tagify(input, {
            dropdown: {
                maxItems: 0,
                enabled: 0
            },
            whitelist: ["a", "aa", "aaa", "b", "bb", "ccc"]
        })

        // editor js
        var editor = new FroalaEditor('.example', {
            attribution: false,
            toolbarBottom: true
        });

        // video player js
        const player = new Plyr('#player', {
            controls: [
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
            player.poster = '/frontend/images/video.png';
        }, 500);

        // according cliking
        $(function() {
            $('.accordion-button').on('click', function() {
                if ($('.accordion-button').not('.collapsed').length > 0) {
                    $('.accordion-item').removeClass('active');
                    $(this).parent().parent().addClass('active');
                    console.log('clicked')
                } else {
                    $('.accordion-item').removeClass('active');
                    console.log('removed')
                }
            });

            // replay
            $('.ic-replay-btn').on('click', function(e) {
                e.preventDefault();
                console.log($(this).parent().parent().parent().parent().next().slideToggle());
            });
        });
    </script>
@endpush
