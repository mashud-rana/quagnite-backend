@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- my bootcamps --}}
    <section class="my-bootcamps-main">
        <div class="container">
            <div class="section-headers">
                <div>
                    <h3 class="fs-30 fw-700 pb-lg-3 pb-2">Ebook Preview</h3>
                </div>
            </div>
            <div class="ic-CourseBack-btn">
                <a href="{{ route('admin.ebook.index') }}" class="ic-backPage-button">
                    <i class="ri-arrow-left-s-line"></i>
                    Back to panel
                </a>
            </div>
            <div class="row g-xxl-4 g-xl-3 g-2 mt-5">
                <div class="col-12">
                    @if ($mimeType === 'application/pdf')
                        <iframe src="data:application/pdf;base64,{{ base64_encode($fileContents) }}" width="100%"
                            height="600px">
                            This browser does not support PDFs. Please download the PDF to view it:
                            <a href="">Download PDF</a>.
                        </iframe>
                    @else
                        <p>This ebook format is not supported for inline viewing. Please
                            <a href="">download the file</a> to view it.
                        </p>
                    @endif
                </div>
            </div>
        </div>
    </section>
    {{-- my bootcamps --}}
@endsection
