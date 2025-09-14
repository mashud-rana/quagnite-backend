@extends('layouts.master-user')

@section('content')
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            <div class="section-headers">
                <div>
                    <h3 class="fs-30 fw-700 pb-lg-3 pb-2">My Playgrounds</h3>
                    <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
                </div>
            </div>
            <div class="row g-3 position-relative z-3 mt-lg-4 mt-3">
               
                @forelse ($playground as $item)
                <div class="col-lg-4 col-xxl-3 col-xl-3 col-sm-6 col-12">
                    <a href="">
                        <div class="ic__cloud--items">
                            <div class="ic__cloud--img">
                                <img src="{{ getStoreFile($item->playground->image, $item->playground->storage_type) }}" alt="images"
                                    class="img-fluid">
                            </div>
                            <p>{{ $item->playground->title }}</p>
                            @if ($item->playground->status == ACTIVE)
                                <a href="{{ $item->playground->lab_url }}" class="ic-btn-simple  mt-lg-4 mt-3">Start Lab
                                    <i class="ri-arrow-right-line"></i></a>
                            @else
                                <button class="ic-btn-simple mt-lg-4 mt-3"
                                    onclick="showInactivePlaygroundMessage()">Start Lab <i
                                        class="ri-arrow-right-line"></i></button>
                            @endif
                        </div>
                    </a>
                </div>
                @empty
                <x-frontend.data-notfound></x-frontend.data-notfound>
                @endforelse
            </div>
        </div>
    </section>
    {{-- student dashboard --}}
@endsection

@push('scripts')
@endpush

@push('styles')
    <script>
        function showInactivePlaygroundMessage() {
            event.preventDefault();
            toastr.error('This playground is not currently active.');
        }
    </script>
@endpush
