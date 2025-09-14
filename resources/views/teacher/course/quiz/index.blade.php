@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- create exam start --}}
    <div class="ic-teacher-create-exam">
        <div class="container">
            <div class="ic-teacher-create-exam-wrapper">
                <div class="ic-teacher-create-exam-content">
                    <div class="ic-create-exam-banner"
                        style="background-image: linear-gradient(0deg, rgba(0, 172, 182, 0.95) 0%, rgba(0, 172, 182, 0.95) 100%), url({{ asset('new-frontendv1/images/dashboard/create-exam-bg.png') }})">
                        <div class="ic-banner-left">
                            <h3 class="white pb-2">Course Name: {{ $course->title }}</h3>
                            <h4 class="white fw-500">Module Name: {{ $lesson->title }}</h4>
                            {{-- <a href="{{ route('teacher.course.quiz.create', $lesson->uuid) }}">
                                <button>
                                    <span>Add Quiz</span>
                                    <span><i class="ri-add-line"></i></span>
                                </button>
                            </a>

                            <a href="{{ route('teacher.course.edit.content', $course->uuid) }}"><button>Back</button></a> --}}

                        </div>
                        <div class="ic-banner-right">
                            <img class="img-fluid" src="{{ asset('new-frontendv1/images/dashboard/banner-img.png') }}"
                                alt="">
                        </div>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ic-create-question-wrapper">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <a href="{{ route('teacher.course.edit.content', $course->uuid) }}"
                                            class="ic-btn-outline rounded"> Back</a>
                                            <h3>Quizes</h3>
                                            <button id="addbtn" class="ic-btn rounded"><i class="ri-add-circle-line"></i> Add
                                                Quiz</button>
                                    </div>
                                    {{-- add questions --}}
                                    <div id="addQuestion" class="ic-create-question-content d-none p-0 border-0 shadow-none">
                                        <form action="{{ route('teacher.course.quizes.store') }}" method="POST">
                                            @csrf
                                            @method('POST')
                                            <input type="hidden" name="lesson_id" value="{{ $lesson->id }}">
                                            <div class="ic-content-wrapper">
                                                <div class="ic-select-group">
                                                    <label for="" class="ic-lable">Question Title</label>
                                                    <input type="text" name="title" value="{{ old('title') }}"
                                                        placeholder="Question Title" class="form-control">
                                                </div>

                                                <div class="ic-form-wrapper">
                                                    <div class="row g-3">
                                                        <div class="col-md-8 ">
                                                            <div class="ic-form-group">
                                                                <input name="options[]" type="text" class="form-control"
                                                                    id="" placeholder="Answer 01">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
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
                                                        <div class="col-md-8">
                                                            <div class="ic-form-group">
                                                                <input name="options[]" type="text" class="form-control"
                                                                    id="" placeholder="Answer 02">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
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
                                                        <div class="col-md-8">
                                                            <div class="ic-form-group">
                                                                <input name="options[]" type="text" class="form-control"
                                                                    id="" placeholder="Answer 03">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
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
                                                        <div class="col-md-8">
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
                                                    <a href="{{ route('teacher.course.index') }}"
                                                        class="ic-btn btn-danger rounded">Cancel</a>
                                                    <button type="submit" class="ic-btn btn-primary rounded">Save Question</button>
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
                                                <div id="collapse-{{ $key }}"
                                                    class="accordion-collapse collapse"
                                                    aria-labelledby="heading-{{ $key }}"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body ic-create-question-content p-0 mt-3 border-0 shadow-none">
                                                        <form
                                                            action="{{ route('teacher.course.quizes.update', $question->id) }}"
                                                            method="POST">
                                                            @csrf @method('POST')
                                                            <input type="hidden" name="lesson_id"
                                                                value="{{ $lesson->id }}">
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
                                                                            <div class="col-md-8">
                                                                                <div class="ic-form-group">
                                                                                    <input name="options[]" type="text"
                                                                                        class="form-control"
                                                                                        id=""
                                                                                        value="{{ $option->title }}">
                                                                                </div>
                                                                            </div>
                                                                            <div class="col-md-4">
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
                                                                    <button type="submit" class="ic-btn btn-primary rounded">update
                                                                        Question</button>
                                                        </form>
                                                        <form
                                                            action="{{ route('teacher.course.quizes.destroy', $question->id) }}"
                                                            id="delete-form-{{ $question->id }}" method="post"
                                                            style="">
                                                            @csrf
                                                            @method('DELETE')
                                                            <button class="ic-btn btn-danger rounded"
                                                                onclick="return makeDeleteRequest(event, {{ $question->id }})"
                                                                type="submit" title="Delete">
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
    {{-- create exam end --}}
@endsection

@push('scripts')
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
