<div class="modal-header">
    <h5 class="modal-title" id="previewModalLabel">Preview</h5>
    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
</div>
<div class="modal-body">
    <div class="ic-video-content-up">
        <div class="ic-video-content-up">
            <div class="row">
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="#">Class Title: </label>
                        <p>{{ $lecture->title }}</p>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="form-group">
                        <label for="#">Start Time</label>
                        <p>{{ \Carbon\Carbon::parse($lecture->start_time)->format('d M Y, g:i A') }}</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="#">Duration (mintue)</label>
                        <p>{{ $lecture->duration }}</p>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="form-group">
                        <label for="#">Class Description</label>
                        <p> {{ $lecture->description }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal-footer">
    <button type="button" class="ic-btn-close" data-bs-dismiss="modal">Close</button>
</div>
