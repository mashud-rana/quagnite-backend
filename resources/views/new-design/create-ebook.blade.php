@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- create e-book start --}}
    <div class="ic-create-ebook">
        <div class="container">
            <div class="ic-create-ebook-content">
                <div class="ic-create-ebook-heading">
                    <h1>Create E-Book</h1>
                </div>
                <form class="form">
                    <div class="ic-event-details-register-form ic-create-ebook-form">
                        <div class="ic-create-ebook-content-top">
                            <div class="row">
                                <div class="col-md-6 mb-sm-2">
                                    <label for="formFile" class="form-label">Upload E-book File</label>
                                    <div class="ic-ebook-file">

                                        <label for="ebookFileDownload" class="ic-file-content">
                                            <img src="{{ asset('new-frontend/images/download-icon.png') }}" alt="">
                                            <p>Drag & Drop Zip File Here</p>
                                            <p>Maximum file size 50 MB.</p>
                                        </label>
                                        <input type="file" id="ebookFileDownload" type="text">

                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <label for="formFile" class="form-label">E-book Thbumbnail</label>
                                    <div class="ic-ebook-file">
                                        <label for="ebookFileUpload" class="ic-file-content">
                                            <img src="{{ asset('new-frontend/images/upload-icon.png') }}" alt="">
                                            <p>Upload Image</p>
                                            <p>filetype: jpg, jpeg, png</p>
                                        </label>
                                        <input type="file" id="ebookFileUpload" type="text">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="ic-create-ebook-content-bottom">
                            <div class="row">
                                {{-- first row --}}
                                <div class="col-md-6">
                                    <div class="ic-form-group">
                                        <label for="" class="form-label">E-Book Name</label>
                                        <input type="text" class="form-control" id=""
                                            placeholder="Where the Crawdads Sing e-book">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ic-form-group">

                                        <label for="" class="form-label">Author Name</label>
                                        <select id="" class="form-select">
                                            <option selected>Select Name</option>
                                            <option>Option 1</option>
                                            <option>Option 2</option>
                                            <option>Option 3</option>
                                        </select>
                                    </div>
                                </div>
                                {{-- second row --}}
                                <div class="col-md-6">
                                    <div class="ic-form-group">
                                        <label for="" class="form-label">Publisher</label>
                                        <input type="text" class="form-control" id=""
                                            placeholder="Type Publisher Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ic-form-group">
                                        <label for="" class="form-label">ISBN14</label>
                                        <input type="text" class="form-control" id=""
                                            placeholder="Type ISBN Number">
                                    </div>
                                </div>
                                {{-- third row --}}
                                <div class="col-md-6">
                                    <div class="ic-form-group">
                                        <label for="" class="form-label">Country</label>
                                        <input type="text" class="form-control" id=""
                                            placeholder="United State">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ic-form-group">
                                        <label for="" class="form-label">Language</label>
                                        <input type="text" class="form-control" id="" placeholder="English">
                                    </div>
                                </div>
                                {{-- fourth row --}}
                                <div class="col-md-6">
                                    <div class="ic-form-group">
                                        <label for="" class="form-label">E-book Tags</label>
                                        <input name='tags' class="form-control tags" autofocus
                                            value='Free Meal Plan, Free Workout Plan,ABS Training '>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="ic-form-group">
                                        <label for="" class="form-label">E-book Price</label>
                                        <input type="text" class="form-control" id="" placeholder="$ 100.00">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="ic-form-group">
                                        <label for="" class="form-label">E-Book Overview *</label>
                                        <textarea name="" id="" cols="30" rows="10"
                                            placeholder="Reason for your request ( Why do you need our help? )..."></textarea>
                                    </div>

                                </div>
                                <div class="col-12">
                                    <div class="ic-btn-group">
                                        <button>Cancel</button>
                                        <button>E-Book Publish</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    </div>
    {{-- create e-book end --}}
@endsection

@push('scripts')
@endpush
