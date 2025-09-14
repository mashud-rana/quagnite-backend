{{-- lecture form  --}}
<form action="{{ route('teacher.course.updateLecture') }}" method="post" enctype="multipart/form-data"
    id="updateLectureForm">
    @csrf
    @method('POST')
    {{-- hidden input fields --}}
    <input name="lecture_id" type="hidden" value="{{ $lecture->id }}">
    <input name="course_id" type="hidden" value="{{ $lecture->course_id }}">
    {{-- hidden input fields --}}
    <div class="modal-content ic-form-tabs p-0">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Lesson Update</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="ic-video-content-up">
                <div class="ic-vide-type">
                    <p>Lesson Type: </p>
                    <ul>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="lecture_format"
                                    value="{{ LECTURE_FORMAT_VIDEO }}" id="updateVideo" />
                                <label class="form-check-label fw-300 ff-lexend gray" for="updateVideo">
                                    Video
                                </label>
                            </div>
                        </li>
                        {{-- <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="lecture_format"
                                    value="{{ LECTURE_FORMAT_VIMEO }}" id="updateVimeo">
                                <label class="form-check-label fw-300 ff-lexend gray" for="updateVimeo">
                                    Vimeo
                                </label>
                            </div>
                        </li> --}}
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="lecture_format"
                                    value="{{ LECTURE_FORMAT_PDF }}" id="updatePDF">
                                <label class="form-check-label fw-300 ff-lexend gray" for="updatePDF">
                                    PDF
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="lecture_format"
                                    value="{{ LECTURE_FORMAT_SLIDE }}" id="updateSlide">
                                <label class="form-check-label fw-300 ff-lexend gray" for="updateSlide">
                                    Slide
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="lecture_format"
                                    value="{{ LECTURE_FORMAT_IMAGE }}" id="updateImage">
                                <label class="form-check-label fw-300 ff-lexend gray" for="updateImage">
                                    Image
                                </label>
                            </div>
                        </li>
                        <li>
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="lecture_format"
                                    value="{{ LECTURE_FORMAT_AUDIO }}" id="updateAudio">
                                <label class="form-check-label fw-300 ff-lexend gray" for="updateAudio">
                                    Audio
                                </label>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="mb-4">
                    <input type="file" id="lectureUpdateFileInput" name="file">
                </div>
                <div class="row videoDuration {{ $lecture->lecture_format === LECTURE_FORMAT_VIDEO ? '' : 'd-none' }}">
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="#">Video Duration (mintues)</label>
                            <input name="video_mintues" type="number" class="form-control"
                                value="{{ $lecture->minutes }}" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="#">Video Duration (seconds)</label>
                            <input name="video_seconds" type="number" class="form-control"
                                value="{{ $lecture->seconds }}" required>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="#">Lesson Title</label>
                            <input name="title" type="text" placeholder="Lesson Title" class="form-control"
                                value="{{ $lecture->title }}" required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="#">Learner's Visibility *</label>
                            <select name="lecture_type" class="form-control">
                                <option value="2" {{ $lecture->lecture_type == 2 ? 'selected' : '' }}>Lock
                                </option>
                                <option value="1" {{ $lecture->lecture_type == 1 ? 'selected' : '' }}>Show
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        <div class="modal-footer">
            <button type="button" class="ic-btn-close" data-bs-dismiss="modal">Close</button>
            <button type="submit" class="ic-btn">Update</button>
        </div>
    </div>
</form>

<script>
    FilePond.create(document.getElementById('lectureUpdateFileInput')).setOptions({
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

    // hide show videoDuration
    $('input[name="lecture_format"]').change(function() {
        if ($(this).val() === '{{ LECTURE_FORMAT_VIDEO }}') {
            $('.videoDuration').removeClass('d-none');
        } else {
            $('.videoDuration').addClass('d-none');
        }
    });
</script>
