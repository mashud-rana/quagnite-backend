@extends('admin.layouts.master')

@push('styles')
    @if ($subscription->is_discount === 0)
        <style>
            .input_discount_box1 {
                display: none;
            }
        </style>
    @endif
@endpush

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <form action="{{ route('admin.subscriptions.update', $subscription->id) }}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label class="form-label">Subscription Title <span class="error">*</span></label>
                            <input name="title" type="text" class="form-control" required="" placeholder="Title"
                                value="{{ $subscription->title ?? old('title') }}">
                            @error('title')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Subscription Type <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="monthly" value="{{ MONTHLY }}" name="type"
                                    class="form-check-input" @if (MONTHLY == $subscription->type) checked @endif>
                                <label class="custom-control-label" for="monthly">Monthly</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="yearly" value="{{ YEARLY }}" name="type"
                                    class="form-check-input" @if (YEARLY == $subscription->type) checked @endif>
                                <label class="custom-control-label" for="yearly">Yearly</label>
                            </div>
                        </div>

                        {{-- <div class="mb-3">
                            <label class="form-label">Course Limit <span class="error">*</span></label>
                            <input name="course_limit" type="number" class="form-control" required=""
                                placeholder="Course Limit" value="{{ $subscription->course_limit ?? old('course_limit') }}">
                            @error('course_limit')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div> --}}

                        {{-- <div class="mb-3">
                            <label class="form-label">Bootcamp Limit <span class="error">*</span></label>
                            <input name="bootcamp_limit" type="number" class="form-control" required="" placeholder=""
                                value="{{ $subscription->bootcamp_limit ?? old('bootcamp_limit') }}">
                            @error('bootcamp_limit')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div> --}}
                        <div class="mb-3">
                            <label class="form-label">Ebook Limit <span class="error">*</span></label>
                            <div class="form-check">
                                <input type="checkbox" id="unlimitedEbook" name="unlimited_ebook" class="form-check-input"
                                    {{ $subscription->unlimited_ebook == 0 ? '' : 'checked' }}>
                                <label class="form-check-label" for="unlimitedEbook">Unlimited Ebook</label>
                            </div>
                            <input name="ebook_limit" type="number"
                                class="form-control {{ $subscription->unlimited_ebook ? 'd-none' : '' }}" required=""
                                placeholder="" value="{{ $subscription->ebook_limit ?? old('ebook_limit') }}"
                                id="ebookLimitInput">
                            @error('ebook_limit')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Exam Limit <span class="error">*</span></label>
                            <div class="form-check">
                                <input type="checkbox" id="unlimitedExam" name="unlimited_exam" class="form-check-input"
                                    {{ $subscription->unlimited_exam == 0 ? '' : 'checked' }}>
                                <label class="form-check-label" for="unlimitedExam">Unlimited Exam</label>
                            </div>
                            <input name="exam_limit" type="number"
                                class="form-control {{ $subscription->unlimited_exam ? 'd-none' : '' }}" required=""
                                placeholder="Exam Limit" value="{{ $subscription->exam_limit ?? old('exam_limit') }}"
                                id="examLimitInput">
                            @error('exam_limit')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Playground Limit <span class="error">*</span></label>
                            <div class="form-check">
                                <input type="checkbox" id="unlimitedPlayground" name="unlimited_playground"
                                    class="form-check-input"
                                    {{ $subscription->unlimited_playground == 0 ? '' : 'checked' }}>
                                <label class="form-check-label" for="unlimitedPlayground">Unlimited Playground</label>
                            </div>
                            <input name="playground_limit" type="number"
                                class="form-control {{ $subscription->unlimited_playground ? 'd-none' : '' }}"
                                required="" placeholder="Playground Limit"
                                value="{{ $subscription->playground_limit ?? old('playground_limit') }}"
                                id="playgroundLimitInput">
                            @error('playground_limit')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="mb-3">
                            <label class="form-label">Price</label>
                            <input name="price" type="number" class="form-control" required="" placeholder="Price"
                                value="{{ $subscription->price ?? old('price') }}">
                            @error('price')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Old Price</label>
                            <input name="old_price" type="number" class="form-control" required=""
                                placeholder="Old Price" value="{{ $subscription->old_price ?? old('old_price') }}">
                            @error('old_price')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- <div class="mb-3">
                            <label class="form-label">Price Per Month</label>
                            <input name="per_month" type="number" class="form-control" required=""
                                placeholder="Per Month" value="{{ $subscription->per_month ?? old('per_month') }}">
                            @error('per_month')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div> --}}

                        {{-- <div class="mb-3">
                        <label class="form-label">Price Per Year </label>
                        <input name="per_year" type="text" class="form-control" required="" placeholder="Per Year"
                            value="{{ $subscription->per_year ?? old('per_year') }}">
                        @error('per_year')
                        <p class="error">{{ $message }}</p>
                        @enderror
                    </div> --}}

                        <div class="mb-3">
                            <label class="form-label">Footer Text</label>
                            <input name="footer_text" type="text" class="form-control" required="" placeholder=""
                                value="{{ $subscription->footer_text ?? old('footer_text') }}">
                            @error('footer_text')
                                <p class="error">{{ $message }}</p>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Description <span class="error">*</span></label> <br>
                            <input id="inputTrix" type="hidden" name="desc"
                                value="{{ $subscription->desc ?? old('desc') }}">
                            <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                        </div>

                        {{-- <div class="mb-3">
                            <label class="form-label mb-2 w-100">Discount <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_no" value="0" name="is_discount"
                                    class="form-check-input" @if ($subscription->is_discount === 0) checked @endif>
                                <label class="custom-control-label" for="status_no">No</label>
                                <div class="form-check form-check-inline">
                                    <input type="radio" id="status_yes" value="1" name="is_discount"
                                        class="form-check-input" @if ($subscription->is_discount === 1) checked @endif>
                                    <label class="custom-control-label" for="status_yes">Yes</label>
                                </div>
                            </div>
                        </div>

                        @php
                            $fixed_text = GC::DISCOUNT_FIXED;
                            $percentage_text = GC::DISCOUNT_PERCENTAGE;
                        @endphp --}}
                        {{--
                        <div class="input_discount_box1">
                            <div class="mb-3">
                                <label class="form-label">Discount Type</label>
                                <select class="form-control select2" name="discount_type">
                                    <option disabled>Select Discount Type</option>
                                    <option value="{{ $fixed_text }}" @if ($subscription->discount_type === $fixed_text) selected @endif>
                                        Fixed</option>
                                    <option value="{{ $percentage_text }}"
                                        @if ($subscription->discount_type === $percentage_text) selected @endif>Percentage</option>
                                </select>
                                @error('discount_type')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Discount</label>
                                <input name="discount" type="number" class="form-control" placeholder="Discount"
                                    value="{{ $subscription->discount ?? old('discount') }}">
                                @error('discount')
                                    <p class="error">{{ $message }}</p>
                                @enderror
                            </div>
                        </div> --}}

                        <div class="mb-3">
                            <label class="form-label mb-2 w-100">Status <span class="error">*</span></label>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_yes" name="status" class="form-check-input"
                                    value="{{ ACTIVE }}" name="status" class="custom-control-input"
                                    @if (ACTIVE == $subscription->status) checked @endif>
                                <label class="custom-control-label" for="status_yes">Active</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input type="radio" id="status_no" name="status" class="form-check-input"
                                    value="{{ INACTIVE }}" name="status" class="custom-control-input"
                                    @if (INACTIVE == $subscription->status) checked @endif>
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
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>

    <script src="{{ asset('common/custom/js/trix-editor-controls.js') }}"></script>

    <script>
        // CKEDITOR.replace('desc');

        $(document).ready(function() {
            $('input[name="is_discount"]').click(function() {
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

                if (isChecked) {
                    $input.addClass('d-none');
                } else {
                    $input.removeClass('d-none');
                }
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
