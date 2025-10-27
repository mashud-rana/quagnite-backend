@extends('layouts.master-user')

@section('content')
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            <div class="section-headers">
                <h3 class="fs-30 fw-700 pb-lg-3 pb-2">My Certificates</h3>
                <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
            </div>
            <div class="ic-certificate-list">
                <div class="table-responsive">
                    <table class="ic-tables">
                        <thead>
                            <th>SI No.</th>
                            <th>Date</th>
                            <th>Course Name</th>
                            {{-- <th>Certificate No</th> --}}
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @forelse ($certificates as $item)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ custom_date($item->created_at) }}
                                    </td>
                                    <td>
                                        @if ($item->certifiable_type === 'App\Models\EnrollCourse')
                                            {{ $item->certifiable->course->title }}
                                        @elseif ($item->certifiable_type === 'App\Models\ExamResult')
                                            {{ $item->certifiable->exam->title }}
                                        @endif
                                    </td>
                                    <td>
                                        <a href="{{ route('student.certificate.generate', ['courseId' => $item->uuid]) }}"
                                            class="ic-my-buttons">Download</a>
                                        <a href="{{ route('student.certificate.view', ['courseId' => $item->uuid]) }}"
                                            class="ic-my-buttons">View</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">
                                        <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <x-frontend.custome-pagination :paginator="$certificates" />
            </div>
        </div>
    </section>
    {{-- student dashboard --}}
@endsection

@push('scripts')
    <script>
        function openCertificateView(courseId) {
            var url = "{{ route('student.certificate.view', ['courseId' => ':courseId']) }}";
            url = url.replace(':courseId', courseId);
            window.open(url, '_blank', 'width=800,height=600');
        }
    </script>
@endpush

@push('styles')
@endpush
