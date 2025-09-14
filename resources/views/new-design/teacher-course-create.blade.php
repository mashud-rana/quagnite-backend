@extends('layouts.master-user')

@push('styles')
    <!-- CSS -->
    <link href='https://cdn.jsdelivr.net/npm/froala-editor@latest/css/froala_editor.pkgd.min.css' rel='stylesheet'
        type='text/css' />
    <link href="https://cdn.jsdelivr.net/npm/@yaireo/tagify/dist/tagify.css" rel="stylesheet" type="text/css" />
@endpush

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
                                        Course Overview
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#step-2">
                                        <span class="num"></span>
                                        Upload Video
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#step-3">
                                        <span class="num"></span>
                                        Teacher
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
                            <div id="step-1" class="tab-pane" role="tabpanel" aria-labelledby="step-1">
                                <div class="ic-tab-heder">
                                    <p>What you will get & rules to follow:</p>
                                </div>
                                <div class="ic-tab-fixed-content">
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
                                </div>
                                <div class="ic-tab-heder">
                                    <p>Course Details</p>
                                </div>
                                <div class="ic-form-tabs">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Course Type</label>
                                                <input type="text" class="form-control" placeholder="Course Type">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Course Subtitle *</label>
                                                <input type="text" class="form-control" placeholder="Course Subtitle">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="#">Course Title</label>
                                                <input type="text" class="form-control" placeholder="Course Title">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Course Description Key Points *</label>
                                                <input type="text" class="form-control" placeholder="Course Type">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Enable for subscription</label>
                                                <select name="" class="selectpicker" id="">
                                                    <option value="0">Enable</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="editors example"></div>
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
                                                <select name="" class="selectpicker" id="">
                                                    <option value="0">Select Category</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Course Subcategoryy</label>
                                                <select name="" class="selectpicker" id="">
                                                    <option value="0">Select Subcategory</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="#">Course Tags</label>
                                                <input name='tags' class="form-control h-auto" value='python'
                                                    placeholder="Add tags...">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="ic-tab-heder">
                                    <p>Learners Accessibility & others</p>
                                </div>
                                <div class="ic-form-tabs">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Request course as</label>
                                                <select name="" class="selectpicker" id="">
                                                    <option value="0">Upcoming</option>
                                                </select>
                                                <span class="color-deep-gray ff-lexend fs-12 fw-200">If you select as upcoming then it
                                                    will be show as upcoming in frontend after approval.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Drip Content</label>
                                                <select name="" class="selectpicker" id="">
                                                    <option value="0">Show all lessony</option>
                                                </select>
                                                <span class="color-deep-gray ff-lexend fs-12 fw-200">All lecture will open after
                                                    purchase.</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Course Access Period</label>
                                                <input type="text" class="form-control"
                                                    placeholder="Course Access Period">
                                                <span class="color-deep-gray ff-lexend fs-12 fw-200">Enrollment will expire after this
                                                    number of days. Set 0 for no expiration</span>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Learners Accessibility</label>
                                                <select name="" class="selectpicker" id="">
                                                    <option value="0">Select Option</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Course Price</label>
                                                <input type="text" class="form-control" placeholder="Course Price">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Old Price</label>
                                                <input type="text" class="form-control" placeholder="Course Price">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Language</label>
                                                <select name="" class="selectpicker" id="">
                                                    <option value="0">English</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label for="#">Course Difficulty Level</label>
                                                <select name="" class="selectpicker" id="">
                                                    <option value="0">Select Difficulty Level</option>
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
                                            <div class="ic-images-upload">
                                                <input type="file" class="d-none" id="image">
                                                <label for="image">
                                                    <i class="ri-upload-cloud-2-line"></i>
                                                    <p>Accepted image format & size: 575px X 450px (1MB)</p>
                                                    <p>Accepted image filetype: jpg, jpeg, png</p>
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="ic-video-upload-form">
                                                <p class="fs-20 ff-lexend black pb-3">Course Introduction Video (Optional)
                                                </p>
                                                <ul>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault1">
                                                            <label class="form-check-label fw-300 ff-lexend gray"
                                                                for="flexRadioDefault1">
                                                                Video Upload
                                                            </label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="form-check">
                                                            <input class="form-check-input" type="radio"
                                                                name="flexRadioDefault" id="flexRadioDefault2">
                                                            <label class="form-check-label fw-300 ff-lexend gray"
                                                                for="flexRadioDefault2">
                                                                Youtube Video (write only video Id)
                                                            </label>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="form-group mt-3">
                                                    <input type="text" class="form-control"
                                                        placeholder="Type your youtube video ID">
                                                </div>
                                                <div class="form-group mt-3">
                                                    <input type="file" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="step-2" class="tab-pane" role="tabpanel" aria-labelledby="step-2">
                                <div class="ic-tab-heder">
                                    <p>Upload Course Video</p>
                                </div>

                                {{-- lesson wrong --}}
                                <div class="ic-course-upload-video ic-form-tabs">
                                    <div class="ic-according-wrapper">
                                        <div class="accordion ic-acording-forms" id="accordionExample">
                                            <div class="accordion-item">
                                                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                    data-bs-target="#collapseOne" aria-expanded="true"
                                                    aria-controls="collapseOne">
                                                    <p>Accordion Item #1</p>
                                                    <ul>
                                                        <li>
                                                            <span><i class="ri-video-add-line"></i> Video Lectures
                                                                (45)</span>
                                                        </li>
                                                        <li>
                                                            <span><i class="ri-time-line"></i> Duration (0)</span>
                                                        </li>
                                                    </ul>
                                                </button>
                                                <div id="collapseOne" class="accordion-collapse collapse show"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="ic-upload-lesson">
                                                            <img src="{{ asset('new-frontend/images/video-icons.png') }}"
                                                                alt="">
                                                            <a href="#" data-bs-toggle="modal"
                                                                data-bs-target="#exampleModal" class="ic-upload-btn"><i
                                                                    class="ri-upload-2-line"></i> Upload Lesson</a>
                                                        </div>

                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">
                                                        <p>Accordion Item #1</p>
                                                        <ul>
                                                            <li>
                                                                <span><i class="ri-video-add-line"></i> Video Lectures
                                                                    (45)</span>
                                                            </li>
                                                            <li>
                                                                <span><i class="ri-time-line"></i> Duration (0)</span>
                                                            </li>
                                                        </ul>
                                                    </button>
                                                </h2>
                                                <div id="collapseTwo" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <div class="ic-video-upload-list">
                                                            <ul>
                                                                <li>
                                                                    <div class="left">
                                                                        <a href="#">
                                                                            <img src="{{ getStoreFile('images/icon/multimedia.png') }}"
                                                                                alt="icon">
                                                                            Video Course Titile
                                                                        </a>
                                                                    </div>
                                                                    <div class="right">
                                                                        <a href="#" data-bs-toggle="modal"
                                                                            data-bs-target="#exampleModal2"
                                                                            class="preview"><i class="ri-eye-line"></i>
                                                                            Preview</a>
                                                                        <a href="#" class="edit"><i
                                                                                class="ri-edit-2-line"></i> Edit</a>
                                                                        <a href="#" class="delete"><i
                                                                                class="ri-delete-bin-line"></i> Delete</a>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <div class="left">
                                                                        <a href="#">
                                                                            <img src="{{ getStoreFile('images/icon/multimedia.png') }}"
                                                                                alt="icon">
                                                                            Video Course Titile 1
                                                                        </a>
                                                                    </div>
                                                                    <div class="right">
                                                                        <a href="#" data-bs-toggle="modal"
                                                                            data-bs-target="#exampleModal2"
                                                                            class="preview"><i class="ri-eye-line"></i>
                                                                            Preview</a>
                                                                        <a href="#" class="edit"><i
                                                                                class="ri-edit-2-line"></i> Edit</a>
                                                                        <a href="#" class="delete"><i
                                                                                class="ri-delete-bin-line"></i> Delete</a>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="accordion-item">
                                                <h2 class="accordion-header">
                                                    <button class="accordion-button collapsed" type="button"
                                                        data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">
                                                        <p>Accordion Item #1</p>
                                                        <ul>
                                                            <li>
                                                                <span><i class="ri-video-add-line"></i> Video Lectures
                                                                    (45)</span>
                                                            </li>
                                                            <li>
                                                                <span><i class="ri-time-line"></i> Duration (0)</span>
                                                            </li>
                                                        </ul>
                                                    </button>
                                                </h2>
                                                <div id="collapseThree" class="accordion-collapse collapse"
                                                    data-bs-parent="#accordionExample">
                                                    <div class="accordion-body">
                                                        <strong>This is the third item's accordion body.</strong> It is
                                                        hidden
                                                        by default, until the collapse plugin adds the appropriate classes
                                                        that
                                                        we use to style each element. These classes control the overall
                                                        appearance, as well as the showing and hiding via CSS transitions.
                                                        You
                                                        can modify any of this with custom CSS or overriding our default
                                                        variables. It's also worth noting that just about any HTML can go
                                                        within
                                                        the <code>.accordion-body</code>, though the transition does limit
                                                        overflow.
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ic-input-append" id="Module-name">
                                        <div class="row">
                                            <div class="col-lg-6 m-auto">
                                                <div class="ic-section-add ">
                                                    <div class="form-group mb-0 flex-grow-1">
                                                        <label for="#">Section title of the course </label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Course Module Name">
                                                    </div>
                                                    <button class="ic-btn">save</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="ic-step-addMore text-center">
                                        <button class="ic-btn"> + Add More Section</button>
                                    </div>
                                </div>

                            </div>
                            <div id="step-3" class="tab-pane" role="tabpanel" aria-labelledby="step-3">
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
                            </div>
                            <div id="step-4" class="tab-pane" role="tabpanel" aria-labelledby="step-4">
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

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ic-form-tabs p-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Video Upload</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ic-video-content-up">
                        <div class="ic-vide-type">
                            <p>Type: </p>
                            <ul>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="Video">
                                        <label class="form-check-label fw-300 ff-lexend gray" for="Video">
                                            Upload Video
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="Youtube">
                                        <label class="form-check-label fw-300 ff-lexend gray" for="Youtube">
                                            Youtube
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="Vimeo">
                                        <label class="form-check-label fw-300 ff-lexend gray" for="Vimeo">
                                            Vimeo
                                        </label>
                                    </div>
                                </li>
                                <li>
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault"
                                            id="Audio">
                                        <label class="form-check-label fw-300 ff-lexend gray" for="Audio">
                                            Audio
                                        </label>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="ic-images-upload mb-4">
                            <input type="file" class="d-none" id="image">
                            <label for="image">
                                <i class="ri-movie-2-line"></i>
                                <p>No file selected (MP4 or WMV)</p>
                            </label>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="#">Lesson Title</label>
                                    <input type="text" placeholder="Lesson Title" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="#">Learner's Visibility *</label>
                                    <select name="" class="selectpicker" id="">
                                        <option value="0">--Select Option--</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="ic-btn-close" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="ic-btn">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content ic-form-tabs p-0">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="ic-video-content-up">
                        <video src="https://www.youtube.com/watch?v=HIMk-JlOPAA"></video>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="ic-btn-close" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
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
                theme: 'dots',
            });
        });
    </script>
@endpush
