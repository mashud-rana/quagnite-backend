@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- create e-book start --}}
    <div class="ic-student-exam ic-student-result ic-student-space">
        <div class="container">
            <div class="ic-student-exam-area">
                <div class="ic-student-exam-heading">
                    <div class="ic-student-img">
                        <img src="{{ asset('new-frontendv1/images/student.png') }}" alt="">
                    </div>
                    <div class="ic-student-title">
                        <h2> Hi Josh, Python Test A6: Exam</h2>
                        <p>Only 20 questions, Each question has its own time limit.</p>
                    </div>
                </div>
                <div class="ic-student-exam-content-area">
                    <div class="ic-content-heading">
                        <h4 class="">Exam Test Result</h4>
                    </div>
                    <div class="ic-student-exam-main-content ic-student-result-main-content">
                        {{-- tab area --}}
                        <ul class="ic-nav" id="myTab" role="tablist">
                            <li class="nav-item" role="presentation">
                                <button class="ic-nav-link active" id="home-tab" data-bs-toggle="tab"
                                    data-bs-target="#home-tab-pane" aria-selected="true">All (20)</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="ic-nav-link" id="profile-tab" data-bs-toggle="tab"
                                    data-bs-target="#profile-tab-pane" aria-selected="false">Wrong answered (9)</button>
                            </li>
                            <li class="nav-item" role="presentation">
                                <button class="ic-nav-link" id="contact-tab" data-bs-toggle="tab"
                                    data-bs-target="#contact-tab-pane" aria-selected="false">Right Answered (1)</button>
                            </li>

                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="home-tab-pane">
                                <div class="ic-tab-pane-item">
                                    <span class="ic-number bg-primary">1</span>
                                    <div class="ic-tab-item-right">
                                        <p class="primary">What is the output of `print(2 + 3 * 4)`?</p>
                                        <span>66% got this correct</span>
                                    </div>
                                </div>
                                <div class="ic-tab-pane-item">
                                    <span class="ic-number bg-red">2</span>
                                    <div class="ic-tab-item-right">
                                        <p class="text-red">What is the output of `print(2 + 3 * 4)`?</p>
                                        <span>66% got this correct</span>
                                    </div>
                                </div>
                                <div class="ic-tab-pane-item">
                                    <span class="ic-number bg-green">3</span>
                                    <div class="ic-tab-item-right">
                                        <p class="success">What is the output of `print(2 + 3 * 4)`?</p>
                                        <span>66% got this correct</span>
                                    </div>
                                </div>
                                <div class="ic-tab-pane-item">
                                    <span class="ic-number bg-primary">4</span>
                                    <div class="ic-tab-item-right">
                                        <p class="primary">What is the output of `print(2 + 3 * 4)`?</p>
                                        <span>66% got this correct</span>
                                    </div>
                                </div>
                                <div class="ic-tab-pane-item">
                                    <span class="ic-number bg-red">5</span>
                                    <div class="ic-tab-item-right">
                                        <p class="text-red">What is the output of `print(2 + 3 * 4)`?</p>
                                        <span>66% got this correct</span>
                                    </div>
                                </div>
                                <div class="ic-tab-pane-item">
                                    <span class="ic-number bg-green">6</span>
                                    <div class="ic-tab-item-right">
                                        <p class="success">What is the output of `print(2 + 3 * 4)`?</p>
                                        <span>66% got this correct</span>
                                    </div>
                                </div>
                                <div class="ic-tab-pane-item">
                                    <span class="ic-number bg-primary">1</span>
                                    <div class="ic-tab-item-right">
                                        <p class="primary">What is the output of `print(2 + 3 * 4)`?</p>
                                        <span>66% got this correct</span>
                                    </div>
                                </div>
                                <div class="ic-tab-pane-item">
                                    <span class="ic-number bg-red">7</span>
                                    <div class="ic-tab-item-right">
                                        <p class="text-red">What is the output of `print(2 + 3 * 4)`?</p>
                                        <span>66% got this correct</span>
                                    </div>
                                </div>
                                <div class="ic-tab-pane-item">
                                    <span class="ic-number bg-green">8</span>
                                    <div class="ic-tab-item-right">
                                        <p class="success">What is the output of `print(2 + 3 * 4)`?</p>
                                        <span>66% got this correct</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="profile-tab-pane">
                                <div class="ic-tab-pane-item">
                                    <span class="ic-number bg-red">1</span>
                                    <div class="ic-tab-item-right">
                                        <p class="text-red">What is the output of `print(2 + 3 * 4)`?</p>
                                        <span>66% got this correct</span>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-pane fade" id="contact-tab-pane">
                                <div class="ic-tab-pane-item">
                                    <span class="ic-number bg-green">1</span>
                                    <div class="ic-tab-item-right">
                                        <p class="success">What is the output of `print(2 + 3 * 4)`?</p>
                                        <span>66% got this correct</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ic-student-result-footer">
                            <h1 class="text-center">Well Done, <span>Josh</span></h1>
                            <div class="ic-student-result-footer-content">
                                <div class="ic-footer-top">
                                    <img src="{{ asset('new-frontendv1/images/flower.png') }}" alt="">
                                    <p>Your Score level : Intermediate</p>
                                </div>
                                <div class="ic-footer-middle">
                                    <ul>
                                        <li>
                                            <p><i class="ri-check-double-line"></i>
                                                4 of 20 Questions answered correctly
                                            </p>
                                        </li>
                                        <li>
                                            <p><i class="ri-check-double-line"></i>
                                                You got 10 on this question.
                                            </p>
                                        </li>
                                        <li>
                                            <p><i class="ri-check-double-line"></i>
                                                Question Difficulty: <span>Easy
                                                67%</span>
                                            </p>
                                        </li>
                                    </ul>
                                </div>
                                <div class="ic-student-result-footer-bottom">
                                    Return to IQ Home
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
    {{-- create e-book end --}}
@endsection

@push('scripts')
@endpush
