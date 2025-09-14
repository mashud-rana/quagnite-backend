@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    <div class="ic-header-admin">
        <div class="ic-CourseBack-btn">
            <a href="{{ route('playground.index') }}" class="ic-backPage-button"><i class="ri-arrow-left-s-line"></i> Back</a>
        </div>
    </div>
    {{-- aws --}}
    <section class="ic-aws-section">
        <div class="aws-card">
            <a href="{{ route('playground.aws') }}" class="ic-btn mb-4">Start Lab</a>
            {{-- <p class="">Click here for trabuleshooting guide</p> --}}
        </div>
    </section>
    {{-- aws --}}
@endsection

@push('scripts')
@endpush
