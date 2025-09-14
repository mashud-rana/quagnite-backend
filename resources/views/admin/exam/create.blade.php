@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Exam Create</h4>
                    <form action="{{ route('admin.exams.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('POST')
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="mb-3">
                                    <label for="#">Exam Title</label>
                                    <input name="title" value="{{ old('title') }}" type="text" class="form-control"
                                        placeholder="Exam title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="#">Exam Price</label>
                                    <input name="price" value="{{ old('price') }}" type="text" class="form-control"
                                        placeholder="Exam Price" required>
                                </div>
                                <div class="mb-3">
                                    <label for="#">Exam Old Price</label>
                                    <input name="old_price" value="{{ old('old_price') }}" type="text"
                                        class="form-control" placeholder="Exam Old Price">
                                </div>
                                <div class="mb-3">
                                    <label for="#">Exam Image</label>
                                    <input name="image" type="file" class="form-control" placeholder="Exam Title">
                                </div>
                                <div class="mb-3">
                                    <label for="#">Exam Duration</label>
                                    <input name="duration" value="{{ old('duration') }}" type="number" class="form-control"
                                        placeholder="Exam Duration" required>
                                </div>
                                <div class="mb-3">
                                    <label for="#">Pass Mark</label>
                                    <input name="pass_mark" value="{{ old('pass_mark') }}" type="number"
                                        class="form-control" placeholder="Exam Pass Mark" required>
                                </div>
                                <div class="mb-3">
                                    <label for="#">Description</label>
                                    <input id="inputTrix" type="hidden" name="description" value="{{ old('description') }}"
                                        required>
                                    <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                                </div>
                                <div class="mb-3">
                                    <label class="form-label mb-2 w-100">Status <span class="error">*</span></label>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="status_yes" value="{{ ACTIVE }}" name="status"
                                            class="form-check-input" checked="">
                                        <label class="custom-control-label" for="status_yes">Active</label>
                                    </div>
                                    <div class="form-check form-check-inline">
                                        <input type="radio" id="status_no" value="{{ INACTIVE }}" name="status"
                                            class="form-check-input">
                                        <label class="custom-control-label" for="status_no">Inactive</label>
                                    </div>
                                </div>
                                <div class="text-end">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                    <button type="button" class="btn btn-danger">cancel</button>
                                </div>
                            </div>
                        </div>
                    </form>
                    {{-- <div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="ic-create-question-wrapper">
                                    <div class="d-flex justify-content-between align-items-center mb-4">
                                        <h3>Question</h3>
                                        <button class="btn btn-info">Add Question</button>
                                    </div>
                                    <div class="accordion mb-4" id="accordionExample">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingOne">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                                    aria-expanded="false" aria-controls="collapseOne">
                                                    Accordion Item #1
                                                </button>
                                            </h2>
                                            <div id="collapseOne" class="accordion-collapse collapse"
                                                aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <div class="ic-content-wrapper">
                                                        <div class="ic-select-group">
                                                            <label for="" class="ic-lable">Question Title</label>
                                                            <input class="form-control" type="text"
                                                                placeholder="Question Title">
                                                        </div>
                                                        <form>
                                                            <div class="ic-form-wrapper">
                                                                <div class="row g-3">
                                                                    <div class="col-md-8 mb-30">
                                                                        <div class="ic-form-group">
                                                                            <input type="text" class="form-control"
                                                                                id="" placeholder="Answer 01">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-30">
                                                                        <div class="ic-form-check">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="answerCheck1">
                                                                                <label class="form-check-label"
                                                                                    for="answerCheck1">
                                                                                    Correct Answer
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 mb-30">
                                                                        <div class="ic-form-group">
                                                                            <input type="text" class="form-control"
                                                                                id="" placeholder="Answer 02">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-30">
                                                                        <div class="ic-form-check">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="answerCheck2">
                                                                                <label class="form-check-label"
                                                                                    for="answerCheck2">
                                                                                    Correct Answer
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 mb-30">
                                                                        <div class="ic-form-group">
                                                                            <input type="text" class="form-control"
                                                                                id="" placeholder="Answer 03">
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-4 mb-30">
                                                                        <div class="ic-form-check">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="answerCheck3">
                                                                                <label class="form-check-label"
                                                                                    for="answerCheck3">
                                                                                    Correct Answer
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-8 mb-30">
                                                                        <input type="text" class="form-control"
                                                                            id="" placeholder="Answer 01">
                                                                    </div>
                                                                    <div class="col-md-4">
                                                                        <div class="ic-form-check">
                                                                            <div class="form-check">
                                                                                <input class="form-check-input"
                                                                                    type="checkbox" value=""
                                                                                    id="answerCheck4">
                                                                                <label class="form-check-label"
                                                                                    for="answerCheck4">
                                                                                    Correct Answer
                                                                                </label>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </form>
                                                        <div class="ic-content-footer">
                                                            <button class="btn btn-danger">Cancel</button>
                                                            <button class="btn btn-primary">Save Question</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingTwo">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                    aria-expanded="false" aria-controls="collapseTwo">
                                                    Accordion Item #2
                                                </button>
                                            </h2>
                                            <div id="collapseTwo" class="accordion-collapse collapse"
                                                aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the second item's accordion body.</strong> It is hidden
                                                    by default, until the collapse plugin adds the appropriate classes that
                                                    we use to style each element. These classes control the overall
                                                    appearance, as well as the showing and hiding via CSS transitions. You
                                                    can modify any of this with custom CSS or overriding our default
                                                    variables. It's also worth noting that just about any HTML can go within
                                                    the <code>.accordion-body</code>, though the transition does limit
                                                    overflow.
                                                </div>
                                            </div>
                                        </div>
                                        <div class="accordion-item">
                                            <h2 class="accordion-header" id="headingThree">
                                                <button class="accordion-button collapsed" type="button"
                                                    data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                    aria-expanded="false" aria-controls="collapseThree">
                                                    Accordion Item #3
                                                </button>
                                            </h2>
                                            <div id="collapseThree" class="accordion-collapse collapse"
                                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                                <div class="accordion-body">
                                                    <strong>This is the third item's accordion body.</strong> It is hidden
                                                    by default, until the collapse plugin adds the appropriate classes that
                                                    we use to style each element. These classes control the overall
                                                    appearance, as well as the showing and hiding via CSS transitions. You
                                                    can modify any of this with custom CSS or overriding our default
                                                    variables. It's also worth noting that just about any HTML can go within
                                                    the <code>.accordion-body</code>, though the transition does limit
                                                    overflow.
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ic-create-question-content">
                                        <div class="ic-content-wrapper">
                                            <div class="ic-select-group">
                                                <label for="" class="ic-lable">Question Title</label>
                                                <input class="form-control" type="text" placeholder="Question Title">
                                            </div>
                                            <form>
                                                <div class="ic-form-wrapper">
                                                    <div class="row g-3">
                                                        <div class="col-md-8 mb-30">
                                                            <div class="ic-form-group">
                                                                <input type="text" class="form-control" id=""
                                                                    placeholder="Answer 01">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4 mb-30">
                                                            <div class="ic-form-check">
                                                                <div class="form-check">
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="answerCheck1">
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
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="answerCheck2">
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
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="answerCheck3">
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
                                                                    <input class="form-check-input" type="checkbox"
                                                                        value="" id="answerCheck4">
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
                                                <button class="btn btn-danger">Cancel</button>
                                                <button class="btn btn-primary">Save Question</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}
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
@endpush
