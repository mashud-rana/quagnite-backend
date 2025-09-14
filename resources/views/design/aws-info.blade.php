@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    <div class="ic-header-admin">
        <div class="ic-CourseBack-btn">
            <a href="#" class="ic-backPage-button"><i class="ri-arrow-left-s-line"></i> Back to Course</a>
        </div>
    </div>

    <section class="ic-aws-section">
        <div class="aws-info">
            <h5>You can now open a console enter credentials:</h5>
            <ul>
                <li>
                    <span class="color-deep-gray">Console :</span>
                    <span>https://stackoverflow.com/questions/28714675/laravel-says-route-not-defined <i
                            class="ri-file-copy-line"></i></span>
                </li>
                <li>
                    <span class="color-deep-gray">Username : </span><span>McdnsAws <i class="ri-file-copy-line"></i></span>
                </li>
                <li>
                    <span class="color-deep-gray">Password : </span><span>Jks1asd+d<i class="ri-file-copy-line"></i></span>
                </li>
                <li>
                    <span class="color-deep-gray">Expire in : </span><span>59:59</span>
                </li>
            </ul>
            <div class="ic-btn-aws">
                <a href="#" class="btn-book">End</a>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
@endpush
