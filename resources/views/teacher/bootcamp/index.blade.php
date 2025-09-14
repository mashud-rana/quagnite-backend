@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- teacher course --}}
    <section class="teacher-course">
        <div class="container">
            <div class="section-headers">
                <div>
                    <h3 class="fs-30 fw-700 pb-lg-3 pb-2">My Bootcamps</h3>
                    <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
                </div>
                <div>
                    <a href="{{ route('teacher.bootcamp.create') }}" class="ic-btn-simple">Create Bootcamp</a>
                </div>
            </div>
            <div class="ic-teacher-course-main">
                <div
                    class="row g-4 row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1 g-xxl-4 g-xl-3 g-2 mb-50">
                    @forelse ($bootcamps as $item)
                        <div class="col">
                            <div class="ic-v1-bootcams-items">
                                <div class="ic-list-image position-relative"><img src="{{ getStoreFile($item->image, $item->storage_type) }}"
                                        alt="" class="img-fluid w-100">
                                </div>
                                <div class="ic-list-conetnt">
                                    <p class="sub-title">{{ $item->title }}</p>
                                    <div class="list-conetnt-info">
                                        <div class="bootcams-course-details">
                                            <p><i class="ri-calendar-check-fill"></i> Bootcamp start
                                                {{ \Carbon\Carbon::parse($item->start_date)->format('d M, Y') }}</p>
                                            <p><i class="ri-time-line"></i> Program Duration-{{ $item->duration_month }}
                                                Months</p>
                                        </div>
                                        <div class="ic-eidit-buttons">
                                            <a href="{{ route('teacher.bootcamp.edit', $item->uuid) }}" class="primary">
                                                <i class="ri-edit-line"></i> Edit</a>
                                            <a href="{{ route('teacher.bootcamp.show', [$item->slug, $item->uuid]) }}"
                                                class="info">
                                                <i class="ri-eye-fill"></i>Show</a>
                                            <a href="{{ route('teacher.bootcamp.delete', $item->uuid) }}"
                                                class="text-red deleteBootcamp"><i class="ri-delete-bin-line"></i>
                                                Delete</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                     @empty
                </div>
                <x-frontend.data-notfound></x-frontend.data-notfound>
                @endforelse
            </div>
        </div>
    </section>
    {{-- teacher course --}}
@endsection

@push('scripts')
    <script>
        $(function() {
            $('.deleteBootcamp').each(function() {

                $(this).on('click', function(event) {

                    event.preventDefault();
                    event.stopPropagation();

                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#02a499",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!",
                    }).then((result) => {

                        if (result.isConfirmed) {

                            const Url = $(event.target).attr(
                                'href');
                            window.location = Url;
                        }
                    });
                });
            });
        });
    </script>
@endpush
