@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')

    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            <div class="section-headers mb-30">
                <h3 class="fs-30 fw-700 pb-lg-3 pb-2">Create New Ticket</h3>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="ic-ticket-card">
                        <form action="#">
                            <div class="form-group">
                                <label for="#">Ticket Subject</label>
                                <input type="text" class="form-control" placeholder="In general, what is this ticket about?">
                            </div>
                            <div class="form-group">
                                <label for="#">Ticket Description</label>
                                <textarea name="" id="" class="form-control" placeholder="What are your thoughts? (Type ' / ' to add images, files, or links)"></textarea>
                            </div>
                            <div class="form-group">
                                <label for="#">Select What is your question about?</label>
                               <select name="" class="ic-select" id="">
                                <option value="0">1</option>
                                <option value="1">2</option>
                               </select>
                            </div>
                            <button style="submit" class="ic-btn-simple">Submit Your Ticket</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ic-ticket-category">
                        <div class="category-text">
                            <p>Your Ticket Category</p>
                        </div>
                        <div class="ic-labs-playground">
                            <input type="text" placeholder="Labs Playground">
                            <p>Related Support  Ticket For you </p>
                        <ul>
                            <li>
                                <a href="#">
                                    Udemy students access labs on MCdns?
                                </a>
                            </li>
                            <li>
                               <a href="#">
                                How to update/change email address/password?
                               </a>
                            </li>
                            <li>
                                <a href="#">
                                    GCP Playground : Support Services
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    Troubleshooting Playground Issues
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    How to update/change email address/username/password?
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    How to students access labs on MCdns?
                                </a>
                            </li>
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- student dashboard --}}

@endsection

@push('scripts')
@endpush
