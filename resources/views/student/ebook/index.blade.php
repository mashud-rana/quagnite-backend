@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- my bootcamps --}}
    <section class="my-bootcamps-main">
        <div class="container">
            <div class="section-headers">
                <div>
                    <h3 class="fs-30 fw-700 pb-lg-3 pb-2">My Ebooks</h3>
                    <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
                </div>
            </div>
            <div class="row row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-3 g-2 mt-5">
                @forelse ($ebooks as $item)
                    <div class="col">
                        <div class="ic-ebookShow-items">
                            <div class="overflow-hidden ebookShow-img">
                                <img src="{{ getStoreFile($item->ebook->image, $item->ebook->storage_type) }}"
                                    class="img-fluid w-100" alt="ebook items">
                            </div>
                            <div class="ic-content-ebookItems">
                                <p class="ebook-title pt-0">{{ $item->ebook->title }}</p>
                            </div>
                            <div class="ebook-buttons">
                                <a href="{{ route('student.ebooks.download', $item->ebook->uuid) }}"
                                    class="ic-btn-simple">Download </a>
                                <a href="{{ route('student.ebooks.download', $item->ebook->uuid) }}"
                                    class="ic-btn-simple ic-green">View </a>
                            </div>
                        </div>
                    </div>
                @empty
                    <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                @endforelse
            </div>
        </div>
    </section>
    {{-- my bootcamps --}}
@endsection

@push('scripts')
@endpush
