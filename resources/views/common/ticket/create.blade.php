@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')

    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            <div class="section-headers mb-30">
                <h3 class="fs-30 fw-700">Create New Ticket</h3>
            </div>
            <div class="row gy-3">
                <div class="col-lg-8">
                    <div class="ic-ticket-card">
                        <form action="{{ route('ticket.store') }}" method="POST">
                            @csrf
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                            <div class="form-group">
                                <label for="#">Ticket Subject</label>
                                <input type="text" name="subject" value="{{ old('subject') }}" class="form-control" placeholder="In general, what is this ticket about?">
                            </div>
                            <div class="form-group">
                                <label for="">Ticket Category</label>
                                <select name="category_id" class="form-control selectpicker">
                                    <option value="" selected disabled>Select Category</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="#">Ticket Description</label>
                                <input id="inputTrix" type="hidden" name="message" value="{{ old('message') }}">
                                <trix-editor class="trix-editor" input="inputTrix"></trix-editor>
                            </div>
                            <button style="submit" class="ic-btn-simple">Submit Your Ticket</button>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="ic-ticket-category">
                        <div class="category-text">
                            <p>Your Recent Tickets</p>
                        </div>
                        <div class="ic-labs-playground">
                            {{-- <input type="text" placeholder="Labs Playground">
                            <p>Related Support  Ticket For you </p> --}}
                        <ul>
                            @foreach ($recent_tickets as $data)
                            <li>
                                <a href="{{ route('ticket.show', $data->slug) }}">
                                    {{ $data->subject }}
                                </a>
                            </li>
                            @endforeach
                        </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- student dashboard --}}

@endsection

@push('styles')
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.0/dist/trix.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('common/custom/css/trix.css') }}">
@endpush

@push('scripts')
    <!-- Trix Editor - CDN Link -->
    <script type="text/javascript" src="https://unpkg.com/trix@2.0.0/dist/trix.umd.min.js"></script>
    <script src="{{ asset('common/custom/js/trix-editor-controls.js') }}"></script>

    <script src="{{ asset('common/custom/js/image-preview.js') }}"></script>
@endpush
