@extends('layouts.exam-master')

@section('content')
    <section class="ic-protected-exam ic-section-space-bottom-80">
        <div class="container">
            <div class="ic-protected-exam-header">
                <div class="protected-img">
                    <img src="{{ asset('new-frontendv1/images/exam-single.png') }}" alt="exam logo">
                </div>
                <div class="protected-exam-text">
                    <p>Basic Protected JavaScript Skill Test : 49854</p>
                </div>
                <a href="#" class="ic-btn-simple danger rounded ms-auto">End Test</a>
            </div>
            <div class="ic-protected-exam-body">
                <div class="ic-test-remaining">
                    <p>Section : 1</p>
                    <p>Remaining Time For Test</p>
                    <p>00 : 39 : 59</p>
                </div>
                <div class="ic-test-start-body">
                    <div class="ic-exam-question-start">
                        <p>Question 1 out of 40</p>
                        <div class="d-flex gap-2">
                            <button><i class="ri-arrow-left-line"></i></button>
                            <button><i class="ri-arrow-right-line"></i></button>
                        </div>
                    </div>
                    <div class="ic-exam-pagination">
                        <ul>
                            <li>
                                <button class="finish">
                                    1
                                </button>
                            </li>
                            <li>
                                <button class="continue">
                                    2
                                </button>
                            </li>
                            <li>
                                <button>
                                    3
                                </button>
                            </li>
                            <li>
                                <button>
                                    4
                                </button>
                            </li>
                            <li>
                                <button>
                                    5
                                </button>
                            </li>
                            <li>
                                <button>
                                    6
                                </button>
                            </li>
                            <li>
                                <button>
                                    7
                                </button>
                            </li>
                            <li>
                                <button>
                                    8
                                </button>
                            </li>
                            <li>
                                <button>
                                    9
                                </button>
                            </li>
                            <li>
                                <button>
                                    10
                                </button>
                            </li>
                            <li>
                                <button>
                                    11
                                </button>
                            </li>
                            <li>
                                <button>
                                    12
                                </button>
                            </li>
                            <li>
                                <button>
                                    13
                                </button>
                            </li>
                            <li>
                                <button>
                                    14
                                </button>
                            </li>
                            <li>
                                <button>
                                    15
                                </button>
                            </li>
                        </ul>
                    </div>
                    <div class="ic-question-list-main">
                        <div class="ic-question-list">
                            <p class="ic-question-name">Fill in the blank with the correct word or phrase.</p>
                            <p class="exam-question-paragraph">We commonly use JavaScript language in web ______________ to
                                create interactive effects within the web browser.</p>

                            <div class="ic-question-show">
                                <ul>
                                    <li>    
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault1">
                                            <label class="form-check-label" for="flexRadioDefault1">
                                                (a) 123 variable
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault2">
                                            <label class="form-check-label" for="flexRadioDefault2">
                                                (b) My-variable
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault3">
                                            <label class="form-check-label" for="flexRadioDefault3">
                                                (c) _variable (Correct Answer)
                                            </label>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="form-check">
                                            <input class="form-check-input" type="radio" name="flexRadioDefault"
                                                id="flexRadioDefault4">
                                            <label class="form-check-label" for="flexRadioDefault4">
                                                (d) variable&
                                            </label>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="ic-question-nextArrow">
                        <button class="previsous ic-btn-simple rounded">Previous</button>
                        <button class="next ic-btn-simple rounded">Next</button>
                        <button class="next ic-btn-simple rounded" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Finish</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Modal -->
    <div class="modal fade ic-exam-finish-modal" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body finish-modal-body">
                    <button type="button" class="close" data-bs-dismiss="modal"><i class="ri-close-line"></i></button>
                    <div class="finish-modal-digit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40"
                            fill="none">
                            <path opacity="0.2"
                                d="M25.6954 5H14.3046C14.1404 5 13.9779 5.03233 13.8262 5.09515C13.6746 5.15797 13.5368 5.25004 13.4207 5.36612L5.36612 13.4207C5.25004 13.5368 5.15797 13.6746 5.09515 13.8262C5.03233 13.9779 5 14.1404 5 14.3046V25.6954C5 25.8596 5.03233 26.0221 5.09515 26.1738C5.15797 26.3254 5.25004 26.4632 5.36612 26.5793L13.4207 34.6339C13.5368 34.75 13.6746 34.842 13.8262 34.9049C13.9779 34.9677 14.1404 35 14.3046 35H25.6954C25.8596 35 26.0221 34.9677 26.1738 34.9049C26.3254 34.842 26.4632 34.75 26.5793 34.6339L34.6339 26.5793C34.75 26.4632 34.842 26.3254 34.9049 26.1738C34.9677 26.0221 35 25.8596 35 25.6954V14.3046C35 14.1404 34.9677 13.9779 34.9049 13.8262C34.842 13.6746 34.75 13.5368 34.6339 13.4207L26.5793 5.36612C26.4632 5.25004 26.3254 5.15797 26.1738 5.09515C26.0221 5.03233 25.8596 5 25.6954 5Z"
                                fill="#E64545" />
                            <path d="M20 12.5V21.25" stroke="#E64545" stroke-width="2.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                            <path
                                d="M25.6954 5H14.3046C14.1404 5 13.9779 5.03233 13.8262 5.09515C13.6746 5.15797 13.5368 5.25004 13.4207 5.36612L5.36612 13.4207C5.25004 13.5368 5.15797 13.6746 5.09515 13.8262C5.03233 13.9779 5 14.1404 5 14.3046V25.6954C5 25.8596 5.03233 26.0221 5.09515 26.1738C5.15797 26.3254 5.25004 26.4632 5.36612 26.5793L13.4207 34.6339C13.5368 34.75 13.6746 34.842 13.8262 34.9048C13.9779 34.9677 14.1404 35 14.3046 35H25.6954C25.8596 35 26.0221 34.9677 26.1738 34.9048C26.3254 34.842 26.4632 34.75 26.5793 34.6339L34.6339 26.5793C34.75 26.4632 34.842 26.3254 34.9048 26.1738C34.9677 26.0221 35 25.8596 35 25.6954V14.3046C35 14.1404 34.9677 13.9779 34.9048 13.8262C34.842 13.6746 34.75 13.5368 34.6339 13.4207L26.5793 5.36612C26.4632 5.25004 26.3254 5.15797 26.1738 5.09515C26.0221 5.03233 25.8596 5 25.6954 5Z"
                                stroke="#E64545" stroke-width="2.5" stroke-miterlimit="10" />
                            <path
                                d="M20 28.75C21.0355 28.75 21.875 27.9105 21.875 26.875C21.875 25.8395 21.0355 25 20 25C18.9645 25 18.125 25.8395 18.125 26.875C18.125 27.9105 18.9645 28.75 20 28.75Z"
                                fill="#E64545" />
                        </svg>
                        <h4 class="pb-2">End Javascript Test</h4>
                        <p>Are You sure you went to end the test!</p>
                    </div>
                    <div class="d-flex align-items-center justify-content-center gap-2 pt-3">
                        <button class="ic-btn-simple rounded">Yes</button>
                        <button class="ic-btn-simple danger rounded">No</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection

@push('scripts')
@endpush
