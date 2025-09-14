@extends('admin.layouts.master')

@section('content')
    <div class="card">
        <div class="card-body">
            <div class="row g-3 row-cols-xl-5 row-cols-lg-4">
                @foreach ($certificates as $item)
                    <div class="col">
                        <div class="ic-creatificate-card">
                            <div class="mb-3">
                                <img src="{{ asset('new-frontendv1/images/certificate.jpg') }}" class="img-fluid"
                                    alt="certificate">
                            </div>
                            <a href="{{ route('admin.certificate.edit', $item->uuid) }}" class="btn btn-primary w-100">Edit
                                Certificate <i class="ri-edit-fill ms-2"></i></a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap" rel="stylesheet">
@endpush

@push('scripts')
@endpush
