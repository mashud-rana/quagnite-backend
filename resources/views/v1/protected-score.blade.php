@extends('layouts.exam-master')

@section('content')
<section class="ic-protected-exam ic-section-space-bottom-80">
    <div class="container">
        <div class="ic-protected-exam-header">
            <div class="protected-img">
                <img src="{{asset('new-frontendv1/images/exam-single.png')}}" alt="exam logo">
            </div>
            <div class="protected-exam-text">
                <h4>Welcome Franck, Protected JavaScript Exam Code : 49854</h4>
                <p>Thank you for scheduling an exam with us. We hope this experience brings You success 
                    in the near future.</p>
            </div>
        </div>
        <div class="ic-protected-exam-body">
           <div class="ic-exam-score text-center">
                <h4 class="success text-center">Congratulation! You Passed this test. You May re-make the test when eligible.</h4>
                <div class="ic-score-heads text-center">
                    <h1>9.2</h1>
                    <p>Out of 10</p>
                </div>
                <div class="all-score-info">
                    <ul>
                        <li>
                            <p>Correct</p>
                            <h4>37/40</h4>
                        </li>
                        <li>
                            <p>Exam Date</p>
                            <h4>December 25, 2023</h4>
                        </li>
                        <li>
                            <p>Passing Score</p>
                            <h4>6.2</h4>
                        </li>
                        <li>
                            <p>Transcript Id</p>
                            <h4>93457810</h4>
                        </li>
                    </ul>
                </div>
                <a href="#" class="ic-btn-simple rounded">Continue Dashboard</a>
           </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')

@endpush