@extends('admin.layouts.master')

@section('content')
    <section class="ic-teacher-course-create mt-30 pb-50">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <!-- SmartWizard html -->
                    <div id="smartwizardAdmin" class="ic-create-course-step">
                        {{-- Step Header --}}
                        <div class="ic-create-course-navs">
                            <ul class="nav nav-progress">
                                <li class="nav-item">
                                    <a class="nav-link" href="#step-1">
                                        <div class="num"></div>
                                        Course Overview
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#step-2">
                                        <span class="num"></span>
                                        Upload Lesson
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a class="nav-link " href="#step-4">
                                        <span class="num"></span>
                                        Submit Process
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content h-auto">
                            {{-- Course Store Form --}}
                            <form action="{{ route('admin.course.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                                <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                                    {{-- Course Details --}}
                                    <div class="ic-tab-heder">
                                        <h4>Course Details</h4>
                                    </div>
                                    <div class="ic-form-tabs">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="#">Course title</label>
                                                    <input name="title" type="text" class="form-control"
                                                        value="{{ old('title') ?? $course->title }}"
                                                        placeholder="Course Title">
                                                </div>
                                                @error('title')
                                                    <p class="error">{{ $message }}</p>
                                                @enderror
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="#">Course Subtitle</label>
                                                    <input name="subtitle" type="text" class="form-control"
                                                        value="{{ old('subtitle') ?? $course->subtitle }}"
                                                        placeholder="Course Subtitle">
                                                </div>
                                            </div>
                                            <div class="col-lg-12">
                                                <div class="form-group">
                                                    <label for="">Description</label>
                                                    <input id="inputTrix" type="hidden" name="description"
                                                        value="{{ old('description') ?? $course->description }}">
                                                    <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ic-tab-heder">
                                        <h4>Category & Tags</h4>
                                    </div>
                                    <div class="ic-form-tabs">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="#">Course Category</label>
                                                    <select name="course_category_id" class="selectpicker">
                                                        <option selected disabled>Select Category</option>
                                                        @foreach ($courseCategories as $item)
                                                            <option
                                                                {{ $item->id == $course->course_category_id ? 'selected' : '' }}
                                                                value="{{ $item->id }}"> {{ $item->name }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="#">Tags</label>
                                                    <select name="tag_id[]" class="selectpicker" multiple>
                                                        @foreach ($tags as $item)
                                                            <option {{ in_array($item->id, $courseTags) ? 'selected' : '' }}
                                                                value="{{ $item->id }}"> {{ $item->name }} </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ic-tab-heder">
                                        <h4>Learners Accessibility & others</h4>
                                    </div>
                                    <div class="ic-form-tabs">
                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="#">Course Access Period</label>
                                                    <input name="access_period"
                                                        value="{{ old('access_period') ?? $course->access_period }}"
                                                        type="text" class="form-control"
                                                        placeholder="Course Access Period">
                                                    <span class="color-deep-gray ff-lexend fs-12 fw-200">Enrollment will expire after
                                                        this
                                                        number of days. Set 0 for no expiration</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="#">Learners Accessibility</label>
                                                    <select name="learner_accessibility" class="selectpicker"
                                                        id="learner_accessibility">
                                                        <option selected disabled>Select Accessibility</option>
                                                        <option
                                                            {{ COURSE_ACCESS_FREE === $course->learner_accessibility ? 'selected' : '' }}
                                                            value="{{ COURSE_ACCESS_FREE }}">Free</option>
                                                        <option
                                                            {{ COURSE_ACCESS_PAID === $course->learner_accessibility ? 'selected' : '' }}
                                                            value="{{ COURSE_ACCESS_PAID }}">Paid</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="priceDiv d-none">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="#">Course Price</label>
                                                            <input name="price" type="text" class="form-control"
                                                                value="{{ old('price') ?? $course->price }}"
                                                                placeholder="Price">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-group">
                                                            <label for="#">Old Price</label>
                                                            <input name="old_price" type="text" class="form-control"
                                                                value="{{ old('old_price') ?? $course->old_price }}"
                                                                placeholder="Old Price">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="#">Language</label>
                                                    <select name="course_language_id" class="selectpicker">
                                                        <option disabled>Select Language</option>
                                                        @foreach ($courseLanguages as $item)
                                                            <option
                                                                {{ $item->id === $course->course_language_id ? 'selected' : '' }}
                                                                value="{{ $item->id }}"> {{ $item->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="#">Course Difficulty Level</label>
                                                    <select name="difficulty_level_id" class="selectpicker">
                                                        <option disabled>Select Language</option>
                                                        @foreach ($difficultyLevels as $item)
                                                            <option
                                                                {{ $item->id === $course->difficulty_level_id ? 'selected' : '' }}
                                                                value="{{ $item->id }}"> {{ $item->title }}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ic-tab-heder">
                                        <h4>Course Thumbnail Or Introduction Video</h4>
                                    </div>
                                    <div class="ic-form-tabs">
                                        <div class="row">
                                            <div class="col-lg-6">
                                                <div>
                                                    <label for="">Course Thumbnail Image</label>
                                                    <input name="image" class="form-control" type="file"
                                                        id="image">
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <div class="ic-video-upload-form">
                                                    <p class="fs-20 ff-lexend black pb-3">Course Introduction Video
                                                        (Optional)
                                                    </p>
                                                    <ul>
                                                        <li>
                                                            <div class="form-check">
                                                                <input name="thumb_type" value="upload"
                                                                    class="form-check-input" type="radio"
                                                                    id="flexRadioDefault1" />
                                                                <label class="form-check-label fw-300 ff-lexend gray"
                                                                    for="flexRadioDefault1">
                                                                    Video Upload
                                                                </label>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="form-check">
                                                                <input name="thumb_type" value="link"
                                                                    class="form-check-input" type="radio"
                                                                    id="flexRadioDefault2">
                                                                <label class="form-check-label fw-300 ff-lexend gray"
                                                                    for="flexRadioDefault2" />
                                                                Video URL
                                                                </label>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="form-group mt-3 d-none" id="thumbVideoLinkInput">
                                                        <input name="video_link" value="{{ old('video_link') }}"
                                                            type="text" class="form-control"
                                                            placeholder="Type your video URL">
                                                    </div>
                                                    <div class="form-group mt-3 d-none" id="thumbVideoInput">
                                                        <input name="video" type="file" class="form-control">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="ic-btn ic-btn-black">Cancel</button>
                                    <button class="ic-btn" type="submit">Save & Continue</button>
                                </div>
                            </form>
                            {{-- End Step 01 --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('common/custom/css/trix.css') }}">

    <!-- CSS -->
    <link href="{{ asset('admin/css/smartWizart.css') }}" rel='stylesheet' type='text/css' />
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
        type='text/css' />
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
@endpush

@push('scripts')
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'>
    </script>
    <script src="{{ asset('admin/js/selectPicker.js') }}"></script>
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-select@1.13.14/dist/css/bootstrap-select.min.css">
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script>
        $(function() {
            $('.selectpicker').selectpicker();
            // Thumbnail Type select
            $("input[name='thumb_type']").change(function() {
                const selectedValue = $(this).val();

                if (selectedValue === "upload") {
                    $('#thumbVideoLinkInput').addClass('d-none');
                    $('#thumbVideoInput').removeClass('d-none');
                } else {
                    $('#thumbVideoInput').addClass('d-none');
                    $('#thumbVideoLinkInput').removeClass('d-none');
                }
            });

            // Learner accesibility for free and paid course
            $('#learner_accessibility').on('change', function() {
                let learner_accessibility = $(this).val();
                if (learner_accessibility == 'paid') {
                    $('.priceDiv').removeClass('d-none')
                    $('.priceDiv').addClass('d-block')
                    $('.price').attr("required", true);
                    $('.old_price').attr("required", true);
                } else if (learner_accessibility == 'free') {
                    $('.priceDiv').removeClass('d-block')
                    $('.priceDiv').addClass('d-none')
                    $('.price').removeAttr('required')
                    $('.old_price').removeAttr('required')
                }
            })

            const learner_accessibility = $('#learner_accessibility').val()

            if (learner_accessibility == 'paid') {
                $('.priceDiv').removeClass('d-none')
                $('.priceDiv').addClass('d-block')
                $('.price').attr("required", true);
                $('.old_price').attr("required", true);
            } else if (learner_accessibility == 'free') {
                $('.priceDiv').removeClass('d-block')
                $('.priceDiv').addClass('d-none')
                $('.price').removeAttr('required')
                $('.old_price').removeAttr('required')
            }

            // tagify
            var input = document.querySelector('input[name=tags]')
            var tagify = new Tagify(input, {
                dropdown: {
                    maxItems: 0,
                    enabled: 0
                },
                whitelist: ["a", "aa", "aaa", "b", "bb", "ccc"]
            })
            // editor
            var editor = new FroalaEditor('.example', {
                attribution: false,
                toolbarBottom: true
            });
            // SmartWizard initialize
            $('#smartwizardAdmin').smartWizard({
                theme: 'dots',
                toolbar: {
                    position: 'bottom', // none|top|bottom|both
                    showNextButton: false, // show/hide a Next button
                    showPreviousButton: false, // show/hide a Previous button
                    extraHtml: '' // Extra html to show on toolbar
                },
            });
        });
    </script>

    <!-- Trix Editor - CDN Link -->
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="{{ asset('common/custom/js/trix-editor-controls.js') }}"></script>
@endpush
