@extends('layouts.master-user')

@section('content')
    <section class="ic-teacher-course-create mt-30 pb-50">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <!-- SmartWizard html -->
                    <div id="smartwizard" class="ic-create-course-step">
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
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="#step-3">
                                        <span class="num"></span>
                                        Teacher
                                    </a>
                                </li> --}}
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
                            <form action="{{ route('teacher.course.update') }}" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                @method('POST')
                                <input type="hidden" name="course_id" value="{{ $course->id }}">
                                <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                                    {{-- <div class="ic-tab-heder">
                                    <p>What you will get & rules to follow:</p>
                                </div> --}}
                                    {{-- <div class="ic-tab-fixed-content">
                                    <ul>
                                        <li>
                                            <i class="ri-arrow-right-circle-line"></i>
                                            <span>Teacher: 42.5% | Admin: 57.5%</span>
                                        </li>
                                        <li>
                                            <i class="ri-arrow-right-circle-line"></i>
                                            <span>Social media announcement or teaser</span>
                                        </li>
                                        <li>
                                            <i class="ri-arrow-right-circle-line"></i>
                                            <span>we will do paid marketing Or Boost, bulk SMS etc.</span>
                                        </li>
                                    </ul>
                                    <ul>
                                        <li>
                                            <i class="ri-arrow-right-circle-line"></i>
                                            <span>Teacher: 42.5% | Admin: 57.5%</span>
                                        </li>
                                        <li>
                                            <i class="ri-arrow-right-circle-line"></i>
                                            <span>Social media announcement or teaser</span>
                                        </li>
                                        <li>
                                            <i class="ri-arrow-right-circle-line"></i>
                                            <span>we will do paid marketing Or Boost, bulk SMS etc.</span>
                                        </li>
                                    </ul>
                                </div> --}}

                                    {{-- Course Details --}}
                                    <div class="ic-tab-heder">
                                        <p>Course Details</p>
                                    </div>
                                    <div class="ic-form-tabs">
                                        <div class="row">
                                            {{-- <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Course Type</label>
                                                <input type="text" class="form-control" placeholder="Course Type">
                                            </div>
                                        </div> --}}
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
                                            {{-- <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Course Description Key Points *</label>
                                                <input type="text" class="form-control" placeholder="Course Type">
                                            </div>
                                        </div> --}}
                                            {{-- <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Enable for subscription</label>
                                                <select name="" class="selectpicker" id="">
                                                    <option value="0">Enable</option>
                                                </select>
                                            </div>
                                        </div> --}}
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
                                        <p>Category & Tags</p>
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
                                            {{-- <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Course Subcategoryy</label>
                                                <select name="" class="selectpicker" id="">
                                                    <option value="0">Select Subcategory</option>
                                                </select>
                                            </div>
                                        </div> --}}
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
                                        <p>Learners Accessibility & others</p>
                                    </div>
                                    <div class="ic-form-tabs">
                                        <div class="row">
                                            {{-- <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Request course as</label>
                                                <select name="" class="selectpicker" id="">
                                                    <option value="0">Upcoming</option>
                                                </select>
                                                <span class="color-deep-gray ff-lexend fs-12 fw-200">If you select as upcoming then it
                                                    will be show as upcoming in frontend after approval.</span>
                                            </div>
                                        </div> --}}
                                            {{-- <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Drip Content</label>
                                                <select name="" class="selectpicker" id="">
                                                    <option value="0">Show all lessony</option>
                                                </select>
                                                <span class="color-deep-gray ff-lexend fs-12 fw-200">All lecture will open after
                                                    purchase.</span>
                                            </div>
                                        </div> --}}
                                            <div class="col-lg-6">
                                                <div class="form-group">
                                                    <label for="#">Course Access Period</label>
                                                    <input name="access_period"
                                                        value="{{ old('access_period') ?? $course->access_period }}"
                                                        type="number" class="form-control">
                                                    <span class="color-deep-gray ff-lexend fs-12 fw-200">Enrollment will
                                                        expire after
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
                                        <p>Course Thumbnail Or Introduction Video</p>
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
                                                        <input name="video_link"
                                                            value="{{ old('video_link') ?? ($course->video_link ?? '') }}"
                                                            type="text" class="form-control"
                                                            placeholder="Type your video URL">
                                                    </div>
                                                    <div class="form-group mt-3 d-none" id="thumbVideoInput">
                                                        <input name="video" type="file" id="courseIntroVideo">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="ic-btn-black">Cancel</button>
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
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
        type='text/css' />
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    {{-- File Pond --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.31.1/filepond.min.css"
        integrity="sha512-TtQdiqlFBF4xOf9GCawalT4FQ7qihYm+EMYxpor3WzndeGC+NflmNd/P5AN8vvRH4XqTjoNrIeJRbZcifEMbWA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <style>
        .filepond--credits {
            display: none;
        }

        .error {
            color: red;
        }
    </style>
@endpush

@push('scripts')
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'>
    </script>
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    {{-- File pond --}}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/filepond/4.31.1/filepond.min.js"
        integrity="sha512-UlakzTkpbSDfqJ7iKnPpXZ3HwcCnFtxYo1g95pxZxQXrcCLB0OP9+uUaFEj5vpX7WwexnUqYXIzplbxq9KSatw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        $(function() {

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
            $('#smartwizard').smartWizard({
                theme: 'dots',
                toolbar: {
                    position: 'bottom', // none|top|bottom|both
                    showNextButton: false, // show/hide a Next button
                    showPreviousButton: false, // show/hide a Previous button
                    extraHtml: '' // Extra html to show on toolbar
                },
            });

            // File Pond =========================
            FilePond.create(document.getElementById('courseIntroVideo')).setOptions({
                chunkUploads: true,
                chunkSize: {{ FILE_CHUNK_SIZE }},
                server: {
                    url: "/teacher/course/chunk-upload",
                    process: {
                        headers: {
                            'X-CSRF-TOKEN': '{{ csrf_token() }}'
                        },
                    }
                },
            });


        });
    </script>

    <!-- Trix Editor - CDN Link -->
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="{{ asset('common/custom/js/trix-editor-controls.js') }}"></script>
@endpush
