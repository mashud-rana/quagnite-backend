@extends('layouts.master-user')

@section('content')
    <section class="ic-teacher-course-create mt-30 pb-50">
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <!-- SmartWizard html -->
                    <div id="smartwizard" class="ic-create-course-step">
                        <div class="ic-create-course-navs">
                            <ul class="nav nav-progress">
                                <li class="nav-item">
                                    <a class="nav-link" href="#step-1">
                                        <div class="num"></div>
                                        Bootcamp Overview
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#step-2">
                                        <span class="num"></span>
                                        Add Class
                                    </a>
                                </li>
                                {{-- <li class="nav-item">
                                    <a class="nav-link" href="#step-3">
                                        <span class="num"></span>
                                        Teacher
                                    </a>
                                </li> --}}
                                <li class="nav-item">
                                    <a class="nav-link " href="#step-3">
                                        <span class="num"></span>
                                        Submit Process
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="tab-content h-auto">
                            <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                            </div>
                            <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                                <div class="ic-tab-heder">
                                    <p>Upload Bootcamp Resources</p>
                                </div>

                                {{-- lesson wrong --}}
                                <div class="ic-course-upload-video ic-form-tabs">

                                    @if (isset($bootcampLessons) && count($bootcampLessons) > 0)
                                        <div class="ic-according-wrapper">
                                            <div class="accordion ic-acording-forms" id="accordionExample">
                                                {{-- accordion start --}}
                                                @foreach ($bootcampLessons as $lesson)
                                                    <div class="accordion-item">
                                                        <button class="accordion-button" type="button"
                                                            data-bs-toggle="collapse"
                                                            data-bs-target="#collapseOne-{{ $lesson->id }}"
                                                            aria-expanded="true" aria-controls="collapseOne">
                                                            <p>{{ $lesson->title }}</p>
                                                            <ul>
                                                                <li>
                                                                    <span><i class="ri-video-add-line"></i> Classes
                                                                        ({{ $lesson->lecture_count }})
                                                                    </span>
                                                                </li>
                                                            </ul>
                                                        </button>
                                                        <div id="collapseOne-{{ $lesson->id }}"
                                                            class="accordion-collapse collapse show"
                                                            data-bs-parent="#accordionExample">
                                                            <div class="accordion-body">
                                                                <div class="ic-video-upload-list">
                                                                    <ul>
                                                                        {{-- lectures LOOP --}}
                                                                        @foreach ($lesson->lecture as $lecture)
                                                                            <li>
                                                                                <div class="left">
                                                                                    {{-- Render lecture Icon and title --}}
                                                                                    <p class="d-flex align-item-center">
                                                                                        <i class="ri-live-fill"></i> &nbsp;
                                                                                        {{ $lecture->title }}
                                                                                    </p>
                                                                                </div>
                                                                                {{-- Lecture controls --}}
                                                                                <div class="right">
                                                                                    {{-- Preview --}}
                                                                                    <a href="#" data-bs-toggle="modal"
                                                                                        data-bs-target="#previewModal"
                                                                                        class="preview lessonPreview"
                                                                                        data-lecture-id="{{ $lecture->id }}"><i
                                                                                            class="ri-eye-line"></i>
                                                                                        Preview</a>
                                                                                    {{-- Edit --}}
                                                                                    <a href="#" data-bs-toggle="modal"
                                                                                        data-bs-target="#editModal"
                                                                                        class="edit lessonEdit"
                                                                                        data-lecture-id="{{ $lecture->id }}"><i
                                                                                            class="ri-edit-2-line"></i>
                                                                                        Edit</a>
                                                                                    {{-- Lecture Delete Form --}}
                                                                                    <form
                                                                                        action="{{ route('teacher.bootcamp.deleteLecture') }}"
                                                                                        id="lecture-delete-form-{{ $lecture->id }}"
                                                                                        method="post" style="">
                                                                                        @csrf @method('POST')
                                                                                        <input type="hidden"
                                                                                            name="lecture_id"
                                                                                            value="{{ $lecture->id }}">
                                                                                        <a class="delete lectureDelete"
                                                                                            data-lecture-id="{{ $lecture->id }}"
                                                                                            title="Delete"><i
                                                                                                class="ri-delete-bin-line"></i>
                                                                                            Delete</a>
                                                                                    </form>
                                                                                    {{-- Lecture Delete Form --}}
                                                                                </div>
                                                                            </li>
                                                                        @endforeach
                                                                    </ul>
                                                                </div>
                                                                <div class="ic-upload-lesson">
                                                                    <img src="{{ asset('new-frontend/images/video-icons.png') }}"
                                                                        alt="">
                                                                    <div class="upload-lesson">
                                                                        <a href="#" data-bs-toggle="modal"
                                                                            data-bs-target="#exampleModa4"
                                                                            data-lesson-id="{{ $lesson->id }}"
                                                                            class="ic-upload-btn moduleEdit"><i
                                                                                class="ri-edit-line"></i>Module Edit</a>
                                                                        <a href="#"
                                                                            data-lesson-id="{{ $lesson->id }}"
                                                                            data-bs-toggle="modal"
                                                                            data-bs-target="#exampleModal"
                                                                            class="ic-upload-btn UploadLessonBtn"><i
                                                                                class="ri-live-fill"></i>Add Class</a>
                                                                        {{-- Module Delete Form --}}
                                                                        <form
                                                                            action="{{ route('teacher.bootcamp.deleteLesson') }}"
                                                                            id="lesson-delete-form-{{ $lesson->id }}"
                                                                            method="post" style="">
                                                                            @csrf @method('POST')
                                                                            <input type="hidden" name="uuid"
                                                                                value="{{ $lesson->uuid }}">
                                                                            <a class="ic-upload-btn lessonDelete"
                                                                                data-lesson-id="{{ $lesson->id }}"
                                                                                title="Delete"><i
                                                                                    class="ri-delete-bin-line"></i>
                                                                                Delete module</a>
                                                                        </form>
                                                                        {{-- Module Delete Form --}}
                                                                    </div>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                                {{-- accordion end --}}
                                            </div>
                                        </div>
                                    @endif

                                    <div class="ic-step-addMore text-center">
                                        <button class="ic-btn" id="addSection"> + Add Module</button>
                                    </div>
                                    <div class="ic-input-append d-none" id="inputAddSection">
                                        <div class="row">
                                            <div class="col-lg-6 m-auto">
                                                {{-- module title form start --}}
                                                <form action="{{ route('teacher.bootcamp.storeLesson') }}"
                                                    method="post">
                                                    @csrf
                                                    @method('POST')
                                                    <input type="hidden" name="bootcamp_id"
                                                        value="{{ $bootcamp->id }}">
                                                    <div class="ic-section-add ">
                                                        <div class="form-group mb-0 flex-grow-1">
                                                            <label for="#">Module title</label>
                                                            <input name="title" type="text" class="form-control"
                                                                placeholder="bootcamp Module Name">
                                                        </div>
                                                        <button type="submit" class="ic-btn">save</button>
                                                    </div>
                                                </form>
                                                {{-- module title form End --}}
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <a href="{{ route('teacher.bootcamp.edit', $bootcamp->uuid) }}"
                                    class="ic-btn-black">Back</a>
                                <a href="{{ route('teacher.bootcamp.submit', $bootcamp->uuid) }}" type="submit"
                                    class="ic-btn">Save & Continue</a>
                            </div>
                            {{-- <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
                                <div class="ic-form-tabs">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Others Instructor</label>
                                                <select name="" class="selectpicker" id="">
                                                    <option value="0">--Search Teacher--</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                            <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
                                <div class="ic-finish">
                                    <h2 class="primary">Finish!</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Lesson Upload Modal --}}
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            {{-- lecture upload form  --}}
            <form action="{{ route('teacher.bootcamp.storeLecture') }}" method="post" enctype="multipart/form-data"
                id="storeLectureForm">
                @csrf
                @method('POST')
                {{-- hidden input fields --}}
                <input name="bootcamp_id" type="hidden" value="{{ $bootcamp->id }}">
                <input name="bootcamp_lesson_id" type="hidden" value="" id="hiddenLessonId">
                {{-- hidden input fields --}}
                <div class="modal-content ic-form-tabs p-0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Add Class</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">

                        <div class="ic-video-content-up">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="#">Class Title</label>
                                        <input name="title" type="text" placeholder="Class Title"
                                            class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Start Time</label>
                                        <input name="start_time" type="datetime-local" class="form-control" required>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <label for="#">Duration (mintue)</label>
                                        <input name="duration" type="number" value="40" class="form-control"
                                            required>
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="#">Class Description</label>
                                        <textarea name="description" class="form-control" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="ic-btn-close" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="ic-btn">Save changes</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    {{-- Lesson Preview Modal --}}
    <div class="modal fade" id="previewModal" tabindex="-1" aria-labelledby="previewModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ic-form-tabs p-0" id="lecturePreviewDiv">
            </div>
        </div>
    </div>

    {{-- Lesson Edit Modal --}}
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ic-form-tabs p-0" id="lectureEditDiv">

            </div>
        </div>
    </div>

    {{-- Edit module title --}}
    <div class="modal fade" id="exampleModa4" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" id="editLessonHtml">

        </div>
    </div>
@endsection


@push('styles')
    <!-- CSS -->
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
        type='text/css' />
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
    {{-- trix editor --}}
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('common/custom/css/trix.css') }}">
@endpush

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.6.5/axios.min.js"></script>
    {{-- vimeo --}}
    <script src="https://player.vimeo.com/api/player.js"></script>
    {{-- stepper --}}
    <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/froala-editor@latest/js/froala_editor.pkgd.min.js'>
    </script>
    <!-- JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/smartwizard@6/dist/js/jquery.smartWizard.min.js" type="text/javascript">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@yaireo/tagify"></script>
    <script>
        $(function() {
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
                selected: 1,
                theme: 'dots',
                toolbar: {
                    position: 'bottom', // none|top|bottom|both
                    showNextButton: false, // show/hide a Next button
                    showPreviousButton: false, // show/hide a Previous button
                    extraHtml: '' // Extra html to show on toolbar
                },
            });

            // page custom js===================================================

            // Add section title
            $('#addSection').on('click', function() {
                $('#inputAddSection').removeClass('d-none');
            });

            // Add event to upload button =====================
            const uploadLessonBtns = $('.UploadLessonBtn');
            // Iterate over each selected button
            uploadLessonBtns.each(function() {
                // Attach an event to the current button
                $(this).on('click', function() {
                    // Handle the button click event here
                    $('#hiddenLessonId').val($(this).attr('data-lesson-id'));
                });
            });
            //====================================

            // Lecture delete =======================
            $('.lectureDelete').each(function() {

                $(this).on('click', function(event) {

                    event.preventDefault();
                    event.stopPropagation();

                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#02a499",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!",
                    }).then((result) => {

                        if (result.isConfirmed) {

                            const formId = $("#lecture-delete-form-" + $(event.target).attr(
                                'data-lecture-id'));

                            $(formId).submit();
                        }
                    });
                });
            });
            // Lecture delete =======================


            // Lecture preview =======================

            $('.lessonPreview').each(function() {

                $(this).on('click', function(event) {

                    event.preventDefault();
                    event.stopPropagation();

                    const lectureId = $(event.target).attr('data-lecture-id');
                    const URL = '/teacher/bootcamp/preview-lecture/' + lectureId;

                    //show loader
                    Swal.fire({
                        title: 'Loading...',
                        text: 'Please wait while we fetch your data.',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    });

                    axios.get(URL)
                        .then(function(response) {
                            $('#lecturePreviewDiv').html(response.data);
                            Swal.close();
                        })
                        .catch(function(error) {
                            $('#lecturePreviewDiv').html(
                                '<p class="text-center">Somethings went wrong. please try again!</p>'
                            );
                            Swal.close();
                        });
                });
            });

            // Lecture preview =======================

            // Lecture Update =======================

            $('.lessonEdit').each(function() {

                $(this).on('click', function(event) {

                    event.preventDefault();
                    event.stopPropagation();

                    const lectureId = $(event.target).attr('data-lecture-id');
                    const URL = '/teacher/bootcamp/edit-lecture/' + lectureId;

                    //show loader
                    Swal.fire({
                        title: 'Loading...',
                        text: 'Please wait while we fetch your data.',
                        allowOutsideClick: false,
                        didOpen: () => {
                            Swal.showLoading()
                        }
                    });

                    axios.get(URL)
                        .then(function(response) {
                            $('#lectureEditDiv').html(response.data);
                            Swal.close();
                        })
                        .catch(function(error) {
                            $('#lectureEditDiv').html(
                                '<p class="text-center">Somethings went wrong. please try again!</p>'
                            );
                            Swal.close();
                        });
                });
            });

            // Lecture Update =======================

            // Module title edit  =======================

            $('.moduleEdit').each(function() {

                $(this).on('click', function(event) {

                    event.preventDefault();
                    event.stopPropagation();

                    const lessonId = $(event.target).attr('data-lesson-id');
                    const URL = '/teacher/bootcamp/edit-lesson/' + lessonId;

                    axios.get(URL)
                        .then(function(response) {
                            console.log(response.data);
                            $('#editLessonHtml').html(response.data);
                        })
                        .catch(function(error) {
                            // Handle error
                            console.log(error);
                        });
                });
            });

            // Module delete =======================
            $('.lessonDelete').each(function() {

                $(this).on('click', function(event) {

                    event.preventDefault();
                    event.stopPropagation();

                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#02a499",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!",
                    }).then((result) => {

                        if (result.isConfirmed) {

                            const formId = $("#lesson-delete-form-" + $(event.target).attr(
                                'data-lesson-id'));

                            $(formId).submit();
                        }
                    });
                });
            });
            // Module delete =======================

            // clear preview and edit when modal close
            $('#editModal').on('hidden.bs.modal', function() {
                $('#lectureEditDiv').empty();
            });
            $('#previewModal').on('hidden.bs.modal', function() {
                $('#lecturePreviewDiv').empty();
            });
        });
    </script>

    <!-- Trix Editor - CDN Link -->
    {{-- <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="{{ asset('common/custom/js/trix-editor-controls.js') }}"></script> --}}
@endpush
