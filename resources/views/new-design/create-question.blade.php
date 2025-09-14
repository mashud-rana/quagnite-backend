@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- create exam start --}}
    <div class="ic-create-question">
        <div class="container">
            <div class="ic-create-question-area">
                <div class="ic-create-question-wrapper">
                    <div class="ic-question-heading">
                        <h5>Question Name</h5>
                        <p>Microservices with Node JS and React</p>
                    </div>
                    <div class="ic-create-question-content">
                        <div class="ic-content-wrapper">
                            <div class="ic-select-group">
                                <label for="" class="ic-lable">Exam “Type”</label>
                                <select class="ic-select" aria-label="Default select example">
                                    <option selected>Question Type</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                                </select>
                            </div>
                            <div class="ic-select-group">
                                <label for="" class="ic-lable">Question Title</label>
                                <input class="form-control" type="text" placeholder="Question Title">
                            </div>
                            <form>
                                <div class="ic-form-wrapper">
                                    <div class="row">
                                        <div class="col-md-8 mb-30">
                                            <div class="ic-form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Answer 01">
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-30">
                                            <div class="ic-form-check">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="answerCheck1">
                                                    <label class="form-check-label" for="answerCheck1">
                                                        Correct Answer
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 mb-30">
                                            <div class="ic-form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Answer 02">
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-30">
                                            <div class="ic-form-check">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="answerCheck2">
                                                    <label class="form-check-label" for="answerCheck2">
                                                        Correct Answer
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 mb-30">
                                            <div class="ic-form-group">
                                                <input type="text" class="form-control" id=""
                                                    placeholder="Answer 03">
                                            </div>
                                        </div>
                                        <div class="col-md-4 mb-30">
                                            <div class="ic-form-check">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="answerCheck3">
                                                    <label class="form-check-label" for="answerCheck3">
                                                        Correct Answer
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-8 mb-30">
                                            <input type="text" class="form-control" id=""
                                                placeholder="Answer 01">
                                        </div>
                                        <div class="col-md-4">
                                            <div class="ic-form-check">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value=""
                                                        id="answerCheck4">
                                                    <label class="form-check-label" for="answerCheck4">
                                                        Correct Answer
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <div class="ic-content-footer">
                                <button>Cancel</button>
                                <button>Save Question</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- create exam end --}}
@endsection

@push('scripts')
@endpush
