@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ic-create-question-wrapper">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h3>Questions</h3>
                                        <button id="addbtn" class="btn btn-info"><i class="ri-add-circle-line"></i> Add
                                            Question</button>
                                    </div>
                                    {{-- add questions --}}
                                    <div id="addQuestion" class="ic-create-question-content d-none">
                                        <form action="{{ route('admin.exams.questions.store') }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <input type="hidden" name="exam_id" value="{{ $exam->id }}">
                                            <div class="ic-content-wrapper">
                                                <div class="ic-select-group">
                                                    <label for="" class="ic-lable">Question Title</label>
                                                    <input type="text" name="title" value="{{ old('title') }}"
                                                        placeholder="Question Title" class="form-control">
                                                </div>

                                                <div class="ic-form-wrapper">
                                                    <div class="row g-3">
                                                        <div class="col-md-8 mb-30">
                                                            <div class="ic-form-group">
                                                                <input name="options[]" type="text" class="form-control"
                                                                    id="" placeholder="Answer 01">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-30">
                                                            <div class="ic-form-check">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="answer" value="a" id="answerCheck1">
                                                                    <label class="form-check-label" for="answerCheck1">
                                                                        Correct Answer
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 mb-30">
                                                            <div class="ic-form-group">
                                                                <input name="options[]" type="text" class="form-control"
                                                                    id="" placeholder="Answer 02">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-30">
                                                            <div class="ic-form-check">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="answer" value="b" id="answerCheck2">
                                                                    <label class="form-check-label" for="answerCheck2">
                                                                        Correct Answer
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 mb-30">
                                                            <div class="ic-form-group">
                                                                <input name="options[]" type="text" class="form-control"
                                                                    id="" placeholder="Answer 03">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-30">
                                                            <div class="ic-form-check">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="answer" value="c" id="answerCheck3">
                                                                    <label class="form-check-label" for="answerCheck3">
                                                                        Correct Answer
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-8 mb-30">
                                                            <input name="options[]" type="text" class="form-control"
                                                                id="" placeholder="Answer 04">
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="ic-form-check">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="radio"
                                                                        name="answer" value="d" id="answerCheck4">
                                                                    <label class="form-check-label" for="answerCheck4">
                                                                        Correct Answer
                                                                    </label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="ic-content-footer">
                                                    <a href="{{ route('admin.exams.index') }}"
                                                        class="btn btn-danger">Cancel</a>
                                                    <button type="submit" class="btn btn-primary">Save Question</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                    {{-- show questions --}}
                                    <div class="accordion mt-4" id="accordionExample">
                                        @foreach ($questions as $key => $question)
                                            <div class="accordion-item">
                                                <h2 class="accordion-header" id="heading-{{ $key }}">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse"
                                                        data-bs-target="#collapse-{{ $key }}"
                                                        aria-expanded="false"
                                                        aria-controls="collapse-{{ $key }}">
                                                        Question #{{ $key + 1 }}
                                                    </button>
                                                </h2>
                                                <div id="collapse-{{ $key }}" class="accordion-collapse collapse"
                                                    aria-labelledby="heading-{{ $key }}"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <form
                                                            action="{{ route('admin.exams.questions.update', $question->id) }}"
                                                            method="POST">
                                                            @csrf @method('POST')
                                                            <input type="hidden" name="exam_id"
                                                                value="{{ $exam->id }}">
                                                            <div class="ic-content-wrapper">
                                                                <div class="ic-select-group">
                                                                    <label for="" class="ic-lable">Question
                                                                        Title</label>
                                                                    <input name="title" class="form-control"
                                                                        type="text" value="{{ $question->title }}">
                                                                </div>

                                                                <div class="ic-form-wrapper">
                                                                    <div class="row g-3">
                                                                        @foreach ($question->options as $index => $option)
                                                                            <div class="col-md-8 mb-30">
                                                                                <div class="ic-form-group">
                                                                                    <input name="options[]" type="text"
                                                                                        class="form-control"
                                                                                        id=""
                                                                                        value="{{ $option->title }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4 mb-30">
                                                                                <div class="ic-form-check">
                                                                                    <div class="form-check">
                                                                                        <input class="form-check-input"
                                                                                            type="radio" name="answer"
                                                                                            value="{{ $answers[$index] }}"
                                                                                            id="answerCheck1"
                                                                                            {{ $answers[$index] == $question->answer ? 'checked' : '' }}>
                                                                                        <label class="form-check-label"
                                                                                            for="answerCheck1">
                                                                                            Correct Answer
                                                                                        </label>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        @endforeach
                                                                    </div>
                                                                </div>
                                                                <div class="ic-content-footer">
                                                                    <button type="submit" class="btn btn-primary">update
                                                                        Question</button>
                                                        </form>
                                                        <form
                                                            action="{{ route('admin.exams.questions.destroy', $question->id) }}"
                                                            id="delete-form-{{ $question->id }}" method="post"
                                                            style="">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="btn btn-danger"
                                                                onclick="return makeDeleteRequest(event, {{ $question->id }})"
                                                                type="submit" title="Delete"><i
                                                                    class="mdi mdi-trash-can-outline"></i>
                                                                Delete
                                                            </button>
                                                        </form>

                                                    </div>

                                                </div>
                                            </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
@endsection

@push('styles')
    {{-- @include('includes.styles.datatable') --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('common/custom/css/trix.css') }}">
@endpush

@push('scripts')
    {{-- @include('includes.scripts.datatable') --}}
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="{{ asset('common/custom/js/trix-editor-controls.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Attach click event handler to the button
            $("#addbtn").click(function() {
                // Toggle the visibility of the div
                $("#addQuestion").removeClass('d-none');
            });
        });
    </script>
@endpush
