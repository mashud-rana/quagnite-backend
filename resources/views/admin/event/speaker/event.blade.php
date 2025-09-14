@extends('admin.layouts.master')

@section('content')
    <div class="row">
        @foreach ($events as $event)
            <div class="col-md-4">
                <div class="card mb-3">
                    <div class="card-body">
                        @if ($event->image)
                            <div class="image-preview">
                                <img src="{{ getStoreFile($event->image, $event->storage_type) }}" alt="{{ $event->title }}"
                                    class="img-fluid">
                            </div>
                        @endif
                        <h5>{{ $event->title }}</h5>
                        <p><strong>Event Start:</strong> {{ $event->event_start }}</p>
                        <p><strong>Event End:</strong> {{ $event->event_end }}</p>
                        <p><strong>Location:</strong> {{ $event->location }}</p>
                        <div class="text-center">
                            <a href="{{ route('event.details', $event->slug) }}" class="btn btn-primary">View Event</a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
@endsection
