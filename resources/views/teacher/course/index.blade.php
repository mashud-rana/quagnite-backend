@extends('layouts.master-user')

@section('content')
    {{-- teacher course --}}
    <section class="teacher-course">
        <div class="container">
            <div class="section-headers">
                <div>
                    <h3 class="fs-30 fw-700 pb-lg-3 pb-2">My Courses</h3>
                    <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
                </div>
                <div>
                    <a href="{{ route('teacher.course.create') }}" class="ic-btn-simple">Create Course</a>
                </div>
            </div>
            <div class="ic-teacher-course-main teacher-course-cards mb-20">
                <div class="row g-4">
                    @forelse ($courses as $course)
                        <div class="col-xxl-6 col-xl-6 col-lg-12">
                            <div class="ic-teacher-course-items">
                                <div class="course-items-img position-relative"><img
                                        src="{{ getStoreFile($course->image, $course->storage_type) }}" alt=""
                                        class="img-fluid"></div>
                                <div class="course-items-content">
                                    <ul>
                                        <li><i class="ri-movie-line"></i> <span>Contents
                                                ({{ $course->lectures_count }})
                                            </span></li>
                                        @php
                                            $seconds = $course->lectures_sum_file_duration_second;
                                        @endphp
                                        <li><i class="ri-time-line"></i> <span>Duration
                                                ({{ $seconds ? gmdate('i:s', $seconds) : 0 }})</span></li>
                                        <li><i class="ri-user-6-line"></i>
                                            <span>
                                                Enrolled({{ $course->total_enrolled_students }})
                                            </span>
                                        </li>
                                    </ul>
                                    <p class="course-title fw-500 fs-18 black">{{ $course->title }}
                                    </p>

                                    <div class="ic-eidit-buttons"><a
                                            href="{{ route('teacher.course.edit', $course->uuid) }}" class="primary"><i
                                                class="ri-edit-line"></i> Edit</a>
                                        <a href="{{ route('teacher.course.show', $course->slug) }}" class="info">
                                            <i class="ri-eye-fill"></i>Show</a> <a
                                            href="{{ route('teacher.course.delete', $course->uuid) }}"
                                            class="text-red deleteCourse"><i class="ri-delete-bin-line"></i> Delete</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @empty
                        <x-frontend.data-notfound></x-frontend.data-notfound>
                    @endforelse

                </div>
            </div>
        </div>
    </section>
    {{-- teacher course --}}
@endsection

@push('scripts')
    <script>
        $(function() {
            $('.deleteCourse').each(function() {

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
