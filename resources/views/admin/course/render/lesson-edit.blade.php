<form action="{{ route('admin.course.updateLesson', $lesson->uuid) }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')
    {{-- hidden input fields --}}
    <div class="modal-content ic-form-tabs p-0">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Module</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">

            <div class="ic-video-content-up">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="form-group">
                            <label for="#">Module Title</label>
                            <input name="title" type="text" value="{{ $lesson->title }}" class="form-control"
                                required>
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
