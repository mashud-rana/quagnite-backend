{{-- lecture form  --}}
<form action="{{ route('teacher.bootcamp.updateLecture') }}" method="post" enctype="multipart/form-data"
    id="updateLectureForm">
    @csrf
    @method('POST')
    {{-- hidden input fields --}}
    <input name="lecture_id" type="hidden" value="{{ $lecture->id }}">
    <input name="bootcamp_id" type="hidden" value="{{ $lecture->bootcamp_id }}">
    {{-- hidden input fields --}}
    <div class="modal-content ic-form-tabs p-0">
        <div class="modal-header">
            <h5 class="modal-title" id="editModalLabel">Update Class</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="ic-video-content-up">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="#">Class Title</label>
                            <input name="title" type="text" placeholder="Class Title" class="form-control"
                                value="{{ $lecture->title }}" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="#">Start Time</label>
                            <input name="start_time" type="datetime-local" class="form-control"
                                value="{{ $lecture->start_time }}" required>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-group">
                            <label for="#">Duration (mintue)</label>
                            <input name="duration" type="number" class="form-control" value="{{ $lecture->duration }}"
                                required>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="#">Class Description</label>
                            <textarea name="description" class="form-control" id="" cols="30" rows="10">{{ $lecture->description }}</textarea>
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
