@extends('layouts.master-user')

@push('styles')
    <style>
        .ic-spinner-load {
            height: 200px !important;
        }
    </style>
@endpush

@section('content')
    <div class="ic-header-admin">
        <div class="ic-CourseBack-btn">
            <a href="{{ route('student.playground') }}" class="ic-backPage-button"><i class="ri-arrow-left-s-line"></i> Back
            </a>
        </div>
    </div>
    <section class="ic-aws-section">
        <div class="aws-info">
            <!-- spinner -->
            <div class="ic-spinner-load">
                <img src="/new-frontend/images/aws-loader.gif" alt="" />
                <p>Playgrounds not Available right Now. Please Try again after a while!</p>
            </div>
        </div>
    </section>
@endsection
