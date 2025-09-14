{{-- @extends('admin.layouts.master') --}}
@extends('layouts.master-user')
@section('content')
    <section>
        <div class="container">
            <div class="section-headers mb-30">
                <h3 class="fs-30 fw-700 pb-lg-3 pb-2">Resumes</h3>
                <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center">
                                <h4 class="card-title mb-0">{{ get_page_meta('title', true) }}</h4>
                                <button class="ic-btn" data-bs-toggle="modal" data-bs-target="#uploadResumeModal"><i
                                        class="ri-add-line"></i>Add Resume</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>
            <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-3 g-2 mt-5">
                @forelse ($resumes as $resume)
                    <div class="col">
                        <div class="ic-ebookShow-items">
                            <div class="overflow-hidden ebookShow-img">
                                <img src="{{ asset('new-frontend/images/resume_thumb.png.jpg') }}" class="img-fluid w-100"
                                    alt="ebook items">
                            </div>
                            <div class="ic-content-ebookItems">
                                <p class="ebook-title pt-0">{{ $resume->title }}</p>
                            </div>
                            <div class="ebook-buttons">
                                <a href="{{ route('student.resume.download', $resume->uuid) }}"
                                    class="ic-btn-simple">Download </a>
                                <form action="{{ route('student.resume.delete', $resume->id) }}" method="POST"
                                    style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="ic-btn-simple btn-warning"
                                    >Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                @empty
                    <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                @endforelse
            </div>
        </div>
    </section>

    <div class="modal fade" tabindex="-1" id="uploadResumeModal" aria-labelledby="uploadResumeModalLabel"
        style="display: none;" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title dayName" id="uploadResumeModalLabel">Upload Resume</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('student.resume.upload') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row justify-content-between">
                            <div class="col-lg-12 mb-3">
                                <input name="title" type="text" class="form-control form-control-lg h-auto"
                                    placeholder="Title" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <input name="file" type="file" accept="application/pdf,application/msword,"
                                    class="form-control form-control-lg h-auto resume-file-up" required>
                            </div>
                            <div class="col-lg-12 mb-3">
                                <button type="submit" class="btn btn-info ms-2">Upload</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
@endsection
