@extends('layouts.master-user')

@push('styles')
  
@endpush

@section('content')
    <section class="ic-teacher-course-create mt-30 pb-50">
        <div class="container">
            <div class="section-headers mb-30">
               <div>
                <h3 class="fs-30 fw-700 pb-2">All Courses</h3>
                <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
               </div>
            </div>
            <div class="row g-2 g-lg-4 row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1">
                <div class="col">
                    <div class="mb-0 flex-column h-100">
                        <div class="ic-coach-item">
                            <div class="position-relative overflow-hidden">
                                <img src="{{asset('new-frontendv1/images/course-image/course-images-1.png')}}" class="img-fluid ic-coach-image w-100" alt="">
                                <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                                <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                            </div>
                            <div class="ic-coach-content">
                                {{-- <a href="{{ route('front.coachDetails', $course->coach->uuid) }}"> --}}
                                <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                                {{-- </a> --}}
                                <div class="coach-names">
                                    <p><img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
                                        asdasdasdasd</p>
                                    <p>5.0 <span><i class="ri-star-s-fill"></i></span></p>
                                </div>
                                <div class="t-all-course d-flex align-items-center">
                                    <a href="#" class="create-exam-btn">Create Exam</a>
                                    <a href="#" class="delete"><i class="ri-delete-bin-line"></i> Delete</a>
                                    <a href="#" class="edit"><i class="ri-edit-line"></i> Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-0 flex-column h-100">
                        <div class="ic-coach-item">
                            <div class="position-relative overflow-hidden">
                                <img src="{{asset('new-frontendv1/images/course-image/course-images-1.png')}}" class="img-fluid ic-coach-image w-100" alt="">
                                <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                                <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                            </div>
                            <div class="ic-coach-content">
                                {{-- <a href="{{ route('front.coachDetails', $course->coach->uuid) }}"> --}}
                                <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                                {{-- </a> --}}
                                <div class="coach-names">
                                    <p><img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
                                        asdasdasdasd</p>
                                    <p>5.0 <span><i class="ri-star-s-fill"></i></span></p>
                                </div>
                                <div class="t-all-course d-flex align-items-center">
                                    <a href="#" class="create-exam-btn">Create Exam</a>
                                    <a href="#" class="delete"><i class="ri-delete-bin-line"></i> Delete</a>
                                    <a href="#" class="edit"><i class="ri-edit-line"></i> Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-0 flex-column h-100">
                        <div class="ic-coach-item">
                            <div class="position-relative overflow-hidden">
                                <img src="{{asset('new-frontendv1/images/course-image/course-images-1.png')}}" class="img-fluid ic-coach-image w-100" alt="">
                                <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                                <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                            </div>
                            <div class="ic-coach-content">
                                {{-- <a href="{{ route('front.coachDetails', $course->coach->uuid) }}"> --}}
                                <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                                {{-- </a> --}}
                                <div class="coach-names">
                                    <p><img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
                                        asdasdasdasd</p>
                                    <p>5.0 <span><i class="ri-star-s-fill"></i></span></p>
                                </div>
                                <div class="t-all-course d-flex align-items-center">
                                    <a href="#" class="create-exam-btn">Create Exam</a>
                                    <a href="#" class="delete"><i class="ri-delete-bin-line"></i> Delete</a>
                                    <a href="#" class="edit"><i class="ri-edit-line"></i> Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-0 flex-column h-100">
                        <div class="ic-coach-item">
                            <div class="position-relative overflow-hidden">
                                <img src="{{asset('new-frontendv1/images/course-image/course-images-1.png')}}" class="img-fluid ic-coach-image w-100" alt="">
                                <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                                <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                            </div>
                            <div class="ic-coach-content">
                                {{-- <a href="{{ route('front.coachDetails', $course->coach->uuid) }}"> --}}
                                <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                                {{-- </a> --}}
                                <div class="coach-names">
                                    <p><img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
                                        asdasdasdasd</p>
                                    <p>5.0 <span><i class="ri-star-s-fill"></i></span></p>
                                </div>
                                <div class="t-all-course d-flex align-items-center">
                                    <a href="#" class="create-exam-btn">Create Exam</a>
                                    <a href="#" class="delete"><i class="ri-delete-bin-line"></i> Delete</a>
                                    <a href="#" class="edit"><i class="ri-edit-line"></i> Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-0 flex-column h-100">
                        <div class="ic-coach-item">
                            <div class="position-relative overflow-hidden">
                                <img src="{{asset('new-frontendv1/images/course-image/course-images-1.png')}}" class="img-fluid ic-coach-image w-100" alt="">
                                <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                                <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                            </div>
                            <div class="ic-coach-content">
                                {{-- <a href="{{ route('front.coachDetails', $course->coach->uuid) }}"> --}}
                                <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                                {{-- </a> --}}
                                <div class="coach-names">
                                    <p><img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
                                        asdasdasdasd</p>
                                    <p>5.0 <span><i class="ri-star-s-fill"></i></span></p>
                                </div>
                                <div class="t-all-course d-flex align-items-center">
                                    <a href="#" class="create-exam-btn">Create Exam</a>
                                    <a href="#" class="delete"><i class="ri-delete-bin-line"></i> Delete</a>
                                    <a href="#" class="edit"><i class="ri-edit-line"></i> Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-0 flex-column h-100">
                        <div class="ic-coach-item">
                            <div class="position-relative overflow-hidden">
                                <img src="{{asset('new-frontendv1/images/course-image/course-images-1.png')}}" class="img-fluid ic-coach-image w-100" alt="">
                                <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                                <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                            </div>
                            <div class="ic-coach-content">
                                {{-- <a href="{{ route('front.coachDetails', $course->coach->uuid) }}"> --}}
                                <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                                {{-- </a> --}}
                                <div class="coach-names">
                                    <p><img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
                                        asdasdasdasd</p>
                                    <p>5.0 <span><i class="ri-star-s-fill"></i></span></p>
                                </div>
                                <div class="t-all-course d-flex align-items-center">
                                    <a href="#" class="create-exam-btn">Create Exam</a>
                                    <a href="#" class="delete"><i class="ri-delete-bin-line"></i> Delete</a>
                                    <a href="#" class="edit"><i class="ri-edit-line"></i> Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-0 flex-column h-100">
                        <div class="ic-coach-item">
                            <div class="position-relative overflow-hidden">
                                <img src="{{asset('new-frontendv1/images/course-image/course-images-1.png')}}" class="img-fluid ic-coach-image w-100" alt="">
                                <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                                <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                            </div>
                            <div class="ic-coach-content">
                                {{-- <a href="{{ route('front.coachDetails', $course->coach->uuid) }}"> --}}
                                <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                                {{-- </a> --}}
                                <div class="coach-names">
                                    <p><img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
                                        asdasdasdasd</p>
                                    <p>5.0 <span><i class="ri-star-s-fill"></i></span></p>
                                </div>
                                <div class="t-all-course d-flex align-items-center">
                                    <a href="#" class="create-exam-btn">Create Exam</a>
                                    <a href="#" class="delete"><i class="ri-delete-bin-line"></i> Delete</a>
                                    <a href="#" class="edit"><i class="ri-edit-line"></i> Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="mb-0 flex-column h-100">
                        <div class="ic-coach-item">
                            <div class="position-relative overflow-hidden">
                                <img src="{{asset('new-frontendv1/images/course-image/course-images-1.png')}}" class="img-fluid ic-coach-image w-100" alt="">
                                <p class="coach-bage ff-exend fs-14 color-white">in Development</p>
                                <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                            </div>
                            <div class="ic-coach-content">
                                {{-- <a href="{{ route('front.coachDetails', $course->coach->uuid) }}"> --}}
                                <h5 class="fw-500 coach-title ff-lexend">asdasdasdasdasd</h5>
                                {{-- </a> --}}
                                <div class="coach-names">
                                    <p><img src="{{ asset('/new-frontend/images/client-img.png') }}" alt="">
                                        asdasdasdasd</p>
                                    <p>5.0 <span><i class="ri-star-s-fill"></i></span></p>
                                </div>
                                <div class="t-all-course d-flex align-items-center">
                                    <a href="#" class="create-exam-btn">Create Exam</a>
                                    <a href="#" class="delete"><i class="ri-delete-bin-line"></i> Delete</a>
                                    <a href="#" class="edit"><i class="ri-edit-line"></i> Edit</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
  
    </script>
@endpush
