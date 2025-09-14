@extends('layouts.exam-master')

@section('content')
    <section class="ic-protected-exam ic-section-space-bottom-80">
        <div class="container">
            <div class="ic-CourseBack-btn">
                <a href="{{ route('student.exams') }}" class="ic-backPage-button"><i class="ri-arrow-left-s-line"></i>
                    Back to
                    Exam</a>
            </div>
            <div class="ic-protected-exam-header">
                <div class="protected-img">
                    <img src="{{ asset('new-frontendv1/images/exam-single.png') }}" alt="exam logo">
                </div>
                <div class="protected-exam-text">
                    <h4>Welcome {{ auth()->user()->full_name }}, Protected {{ $exam->title }} Exam</h4>
                    <p>Thank you for scheduling an exam with us. We hope this experience brings You success
                        in the near future.</p>
                </div>
            </div>
            <div class="ic-protected-exam-body">
                <div class="ic-exam-protected-content-items">
                    {!! $exam->description !!}
                </div>
                {{-- <div class="ic-exam-protected-content-items">
                    <h4>Exam Summary :</h4>
                    <ul>
                        <li>
                            <p>AZ-900 : Microsoft fundamentals You are about to begin your exam Make sure you are in a quiet
                                place and that your device is plugged.</p>
                        </li>
                        <li>
                            <p>This is your attempt <span>number 1</span></p>
                        </li>
                        <li>
                            <p>The scheduled time is <span>120 minutes</span></p>
                        </li>
                        <li>
                            <p>Number of questions <span>60 questions</span></p>
                        </li>
                        <li>
                            <p>Type : <span>Proctored</span></p>
                        </li>
                        <li>
                            <p>Your exam Code is <span>49854</span></p>
                        </li>
                    </ul>
                </div>
                <div class="ic-exam-protected-content-items">
                    <h4>Disclaimer :</h4>
                    <ul>
                        <li>
                            <p>You Cannot stop this exam once started.</p>
                        </li>
                        <li>
                            <p>It for any reason you close your browser, the ongoing exam will be confer
                                dared as complete.</p>
                        </li>
                        <li>
                            <p>You have a chance to take this exam 3 times, and each attempt is different</p>
                        </li>
                    </ul>
                </div>
                <div class="ic-exam-protected-content-items">
                    <h4>Protected Introduction :</h4>
                    <ul>
                        <li>
                            <p>What is JavaScript?</p>
                        </li>
                        <li>
                            <p>Evolution of JavaScript</p>
                        </li>
                        <li>
                            <p>Features of JavaScript</p>
                        </li>
                        <li>
                            <p>Advantages and Disadvantages of JavaScript</p>
                        </li>
                        <li>
                            <p>How does JavaScript works?</p>
                        </li>
                        <li>
                            <p>Structure of a JavaScript program</p>
                        </li>
                        <li>
                            <p>How to write JavaScript in Notepad++, Visual Studio Code, and Eclipse IDE?</p>
                        </li>
                        <li>
                            <p>How to add JavaScript in HTML?</p>
                        </li>
                        <li>
                            <p>How to include External JavaScript in HTML?</p>
                        </li>
                        <li>
                            <p>JavaScript Comments</p>
                        </li>
                        <li>
                            <p>JavaScript Function</p>
                        </li>
                        <li>
                            <p>Document Object Model (DOM)</p>
                        </li>
                    </ul>
                </div> --}}
                <div class="exam-protected-btn">
                    {{-- <div class="exam-submit-btn">
                        <p>Not sure yet?</p>
                        <a href="#" class="ic-btn-simple rounded">Take Practice Test</a>
                    </div> --}}
                    <div class="exam-submit-btn">
                        <p>Redy to go?</p>
                        <a href="{{ route('student.exam.start', [$exam->uuid, $enrollExam->uuid]) }}"
                            class="ic-btn-simple rounded">Start your
                            exam</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
