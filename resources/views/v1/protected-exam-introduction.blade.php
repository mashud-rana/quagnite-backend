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
            <div class="ic-exam-protected-content-items pb-4">
                <h4>This Is a Protected Test Exam</h4>
                <p class="test-exam gray">
                    We commonly use JavaScript language in web development to create interactive effects within the web browser. Brendan Eich of Netscape originally developed JavaScript language. avaScript is an open source, script-based programming language where the source code is processed by the client’s web browser rather than on the web server web development to create interactive effects within the web browser.
                </p>
            </div>
            <div class="ic-test-exam-btn pt-4">
                <a href="#" class="ic-btn-simple rounded">Continue</a>
            </div>
        </div>
    </div>
</section>
@endsection

@push('scripts')

@endpush