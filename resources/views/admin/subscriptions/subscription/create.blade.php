@extends('admin.layouts.master')

@push('styles')
    <style>
        .input_discount_box1 {
            display: none;
        }
    </style>
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <form action="{{ route('admin.subscriptions.store') }}" method="post" enctype="multipart/form-data">
                        @csrf

                        <div class="mb-3">
                            <label class="form-label">Subscription Title <span class="error">*</span></label>
                            <input name="title" type="text" class="form-control" required="" placeholder="Title"
                                value="{{ old('title') }}">
                            @error('title')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Subscription Type <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="monthly" value="{{ MONTHLY }}" name="type"
                                    class="form-check-input" checked="">
                                <label class="custom-control-label" for="monthly">Monthly</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="yearly" value="{{ YEARLY }}" name="type"
                                    class="form-check-input">
                                <label class="custom-control-label" for="yearly">Yearly</label>
                            </div>
                        </div>

                        {{-- <div class="mb-3">
                            <label class="form-label" id="courseLimitLabel">Course Limit <span
                                    class="error">*</span></label>
                            <div class="form-check">
                                <input type="checkbox" id="unlimitedCourse" name="unlimited_course"
                                    class="form-check-input">
                                <label class="form-check-label" for="unlimitedCourse">Unlimited Course</label>
                            </div>
                            <input name="course_limit" type="number" class="form-control" required="" placeholder=""
                                value="{{ old('course_limit') }}" id="courseLimitInput">
                            @error('course_limit')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div> --}}

                        {{-- <div class="mb-3">
                            <label class="form-label">Bootcamp Limit <span class="error">*</span></label>
                            <input name="bootcamp_limit" type="number" class="form-control" required="" placeholder=""
                                value="{{ old('bootcamp_limit') }}">
                            @error('bootcamp_limit')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div> --}}

                        <div class="mb-3">
                            <label class="form-label" id="ebookLimitLabel">Ebook Limit <span class="error">*</span></label>
                            <div class="form-check">
                                <input type="checkbox" id="unlimitedEbook" value="" name="unlimited_ebook"
                                    class="form-check-input">
                                <label class="form-check-label" for="unlimitedEbook">Unlimited Ebook</label>
                            </div>
                            <input name="ebook_limit" type="number" class="form-control" required placeholder=""
                                value="{{ old('ebook_limit') }}" id="ebookLimitInput">
                            @error('ebook_limit')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" id="examLimitLabel">Exam Limit <span class="error">*</span></label>
                            <div class="form-check">
                                <input type="checkbox" id="unlimitedExam" value="" name="unlimited_exam"
                                    class="form-check-input">
                                <label class="form-check-label" for="unlimitedExam">Unlimited Exam</label>
                            </div>
                            <input name="exam_limit" type="number" class="form-control" required placeholder=""
                                value="{{ old('exam_limit') }}" id="examLimitInput">
                            @error('exam_limit')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label" id="playgroundLimitLabel">Playground Limit <span
                                    class="error">*</span></label>
                            <div class="form-check">
                                <input type="checkbox" id="unlimitedPlayground" value="" name="unlimited_playground"
                                    class="form-check-input">
                                <label class="form-check-label" for="unlimitedPlayground">Unlimited Playground</label>
                            </div>
                            <input name="playground_limit" type="number" class="form-control" required placeholder=""
                                value="{{ old('playground_limit') }}" id="playgroundLimitInput">
                            @error('playground_limit')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input name="price" type="number" class="form-control" required="" placeholder="Price"
                                value="{{ old('price') }}">
                            @error('price')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Old Price</label>
                            <input name="old_price" type="number" class="form-control" required=""
                                placeholder="Old Price" value="{{ old('old_price') }}">
                            @error('old_price')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label class="form-label">Price Per Month</label>
                            <input name="per_month" type="number" class="form-control" required=""
                                placeholder="Per Month" value="{{ old('per_month') }}">
                            @error('per_month')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div> --}}

                        {{-- <div class="mb-3">
                        <label class="form-label">Price Per Year </label>
                        <input name="per_year" type="text" class="form-control" required="" placeholder="Per Year"
                            value="{{ old('per_year') }}">
                        @error('per_year')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div> --}}
                        <div class="mb-3">
                            <label class="form-label">Footer Text</label>
                            <input name="footer_text" type="text" class="form-control" required="" placeholder=""
                                value="{{ old('footer_text') }}">
                            @error('footer_text')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        {{-- <div class="mb-3">
                            <label class="form-label">Description <span class="error">*</span></label> <br>
                            <textarea name="desc">{{ old('desc') }}</textarea>
                        </div> --}}
                        <div class="mb-3">
                            <label class="form-label">Description <span class="error">*</span></label> <br>
                            <input id="inputTrix" type="hidden" name="desc" value="{{ old('desc') }}">
                            <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                        </div>
                        {{--
                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Discount <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_no" value="0" name="is_discount"
                                    class="form-check-input" checked>
                                <label class="custom-control-label" for="status_no">No</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="status_yes" value="1" name="is_discount"
                                        class="form-check-input">
                                    <label class="custom-control-label" for="status_yes">Yes</label>
                                </div>
                            </div>
                        </div>

                        <div class="input_discount_box1">
                            <div class="mb-3">
                                <label class="form-label">Discount Type</label>
                                <select class="form-control select2" name="discount_type">
                                    <option selected disabled>Select Discount Type</option>
                                    <option value="{{ GC::DISCOUNT_FIXED }}">Fixed
                                    </option>
                                    <option value="{{ GC::DISCOUNT_PERCENTAGE }}">Percentage</option>
                                </select>
                                @error('discount_type')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Discount</label>
                                <input name="discount" type="number" class="form-control" placeholder="Discount"
                                    value="{{ old('discount') }}">
                                @error('discount')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div> --}}

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

                        <div class="mb-3">
                            <div>
                                <button class="btn btn-primary waves-effect waves-lightml-2 me-2" type="submit">
                                    <i class="fa fa-save"></i> Submit
                                </button>

                                {{-- @can('All Course Categories') --}}
                                <a class="btn btn-secondary waves-effect"
                                    href="{{ route('admin.subscriptions.index') }}">
                                    <i class="fa fa-times"></i> Cancel
                                </a>
                                {{-- @endcan --}}
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('common/custom/css/trix.css') }}">
@endpush

@push('scripts')
    {{-- <script src="https://cdn.ckeditor.com/4.20.1/standard/ckeditor.js"></script> --}}

    <!-- Trix Editor - CDN Link -->
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="{{ asset('common/custom/js/trix-editor-controls.js') }}"></script>


    <script>
        // CKEDITOR.replace('desc');

        $(document).ready(function() {
            $('input[name="is_discount"]').click( 	No 	function() {
                var inputValue = $(this).attr("value");
                $(".input_discount_box1").hide();
                $(".input_discount_box" + inputValue).show();
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            function handleCheckboxToggle($checkbox, $input) {
                const isChecked = $checkbox.prop('checked');
                $input.prop('required', !isChecked).toggle(!isChecked);
                $checkbox.val(isChecked ? 1 : 0);
            }

            // Ebook
            const $unlimitedEbookCheckbox = $('#unlimitedEbook');
            const $ebookLimitInput = $('#ebookLimitInput');

            $unlimitedEbookCheckbox.on('change', function() {
                handleCheckboxToggle($unlimitedEbookCheckbox, $ebookLimitInput);
            });

            // Exam
            const $unlimitedExamCheckbox = $('#unlimitedExam');
            const $examLimitInput = $('#examLimitInput');

            $unlimitedExamCheckbox.on('change', function() {
                handleCheckboxToggle($unlimitedExamCheckbox, $examLimitInput);
            });

            // Playground
            const $unlimitedPlaygroundCheckbox = $('#unlimitedPlayground');
            const $playgroundLimitInput = $('#playgroundLimitInput');

            $unlimitedPlaygroundCheckbox.on('change', function() {
                handleCheckboxToggle($unlimitedPlaygroundCheckbox, $playgroundLimitInput);
            });
        });
    </script>
@endpush
