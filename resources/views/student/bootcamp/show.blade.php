@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container-fluid">
            <div class="ic-CourseBack-btn">
                <a href="{{ route('student.bootcamps') }}" class="ic-backPage-button">
                    <i class="ri-arrow-left-s-line"></i> Back to
                    Bootcamps</a>
            </div>
            <div class="ic-student-bootcamp-banner"
                style="background-image: linear-gradient(0deg, rgba(21, 141, 167, 0.30) 0%, rgba(21, 141, 167, 0.30) 100%), url({{ getStoreFile($bootcamp->image, $bootcamp->storage_type) }})">

            </div>
        </div>
        <div class="container">
            <div class="boot-title">
                <h2>{{ $bootcamp->title }}</h2>
                <p> <span class="boot-name">{{ $bootcamp->user->full_name }}</span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="5" height="5" viewBox="0 0 5 5" fill="none">
                        <circle cx="2.5" cy="2.5" r="2.5" fill="#00ACB6" />
                        <circle cx="2.5" cy="2.5" r="2.5" fill="#158DA7" />
                    </svg>
                    <span class="boot-sr">{{ $bootcamp->user->teacher->professional_title }}</span>
                </p>
            </div>
            <div class="ic-course-tabs pt-4">
                <div class="ic-tabs-links">
                    <ul>
                        <li>
                            <a href="#" class="ic-discription-links active" data-tabs="bootcamp-class">Bootcamp
                                Class</a>
                        </li>
                        {{-- <li>
                            <a href="#" class="ic-discription-links" data-tabs="announcements">Announcements</a>
                        </li> --}}
                        <li>
                            <a href="#" class="ic-discription-links" data-tabs="course-overview">Bootcamp Overview</a>
                        </li>
                        <li>
                            <a href="#" class="ic-discription-links" data-tabs="reviews">Reviews</a>
                        </li>
                        <li>
                            <a href="#" class="ic-discription-links" data-tabs="discussions">Discussions</a>
                        </li>
                        {{-- <li>
                            <a href="#" class="ic-discription-links" data-tabs="note">Notes</a>
                        </li> --}}
                    </ul>
                </div>
                <div class="tabs-content ic-student-bootcamp">
                    <div class="ic-tabs-content-items active" id="bootcamp-class">
                        <div class="accordion" id="accordionExample">
                            @if (count($bootcampLessons) > 0)
                                @foreach ($bootcampLessons as $key => $lesson)
                                    <div class="accordion-item ic-milstone">
                                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                            data-bs-target="#collapse-{{ $key }}" aria-expanded="true"
                                            aria-controls="collapse-{{ $key }}">
                                            {{ $lesson->title }}
                                        </button>
                                        <div id="collapse-{{ $key }}" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                            <div class="accordion-body">
                                                <div class="accordion ic-inner-according" id="accordionExample1">
                                                    @foreach ($lesson->lecture as $key => $lecture)
                                                        <div class="accordion-item">
                                                            <h2 class="accordion-header" id="headingOne">
                                                                <button class="accordion-button" type="button"
                                                                    data-bs-toggle="collapse"
                                                                    data-bs-target="#collapseLecture-{{ $key }}"
                                                                    aria-expanded="true" aria-controls="collapseOne">
                                                                    <div>
                                                                        <p
                                                                            class="d-flex align-items-center gap-2 inner-lession">
                                                                            <i class="ri-live-fill"></i>
                                                                            {{ $lecture->title }}
                                                                        </p>

                                                                        @php
                                                                            $startTime = \Carbon\Carbon::parse($lecture->start_time);
                                                                        @endphp
                                                                        <ul class="ic-lession-time">
                                                                            <li>
                                                                                {{ $startTime->format('d/m/Y') }}
                                                                            </li>
                                                                            <li>
                                                                                {{ $startTime->format('h:i A') }}
                                                                            </li>
                                                                            <li class="times">
                                                                                Left for
                                                                                {{ $startTime->diffForHumans(\Carbon\Carbon::now(), true) }}
                                                                            </li>
                                                                        </ul>
                                                                    </div>
                                                                </button>
                                                            </h2>
                                                            <div id="collapseLecture-{{ $key }}"
                                                                class="accordion-collapse collapse"
                                                                aria-labelledby="headingOne"
                                                                data-bs-parent="#accordionExample1">
                                                                <div class="accordion-body pt-0">
                                                                    <p class="ic-inner-text-lession">
                                                                        {{ $lecture->description }}
                                                                    </p>
                                                                    <ul class="lession-overview">
                                                                        <li>
                                                                            <i class="ri-checkbox-circle-fill"></i>
                                                                            <span>Room Password:
                                                                                {{ $lecture->password }}</span>
                                                                        </li>
                                                                    </ul>
                                                                    <a href="{{ route('student.bootcamp.join', $lecture->uuid) }}"
                                                                        class="joinClass" target="_blank">
                                                                        <i class="ri-live-fill"></i>
                                                                        Join Live Class
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            @else
                            @endif
                            {{-- <div class="accordion-item ic-milstone">
                                <h2 class="accordion-header" id="headingTwo">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                        Accordion Item #2
                                    </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                    data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                        until the collapse plugin adds the appropriate classes that we use to style each
                                        element. These classes control the overall appearance, as well as the showing and
                                        hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                        our default variables. It's also worth noting that just about any HTML can go within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item ic-milstone">
                                <h2 class="accordion-header" id="headingThree">
                                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                        data-bs-target="#collapseThree" aria-expanded="false"
                                        aria-controls="collapseThree">
                                        Accordion Item #3
                                    </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse"
                                    aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                        until the collapse plugin adds the appropriate classes that we use to style each
                                        element. These classes control the overall appearance, as well as the showing and
                                        hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                        our default variables. It's also worth noting that just about any HTML can go within
                                        the <code>.accordion-body</code>, though the transition does limit overflow.
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="ic-tabs-content-items p-0 bg-transparent shadow-none" id="course-overview">
                        <div class="ic-overview-content pt-0">
                            <div class="ic-overview-content-items">
                                <div>
                                    <p class="discription-labels">By the numbers :</p>
                                </div>
                                <div class="types-numbers">
                                    <p>Skill level: {{ $bootcamp->difficulty->title }}
                                    </p>
                                    <p>Students: 0
                                    </p>
                                    <p>Languages: {{ $bootcamp->language->title }}
                                    </p>
                                    <p>Classes: {{ $bootcamp->lectures->count() }}
                                    </p>
                                </div>
                            </div>
                            <div class="ic-overview-content-items">
                                <div>
                                    <p class="discription-labels">By Features :</p>
                                </div>
                                <div class="types-numbers">
                                    <p>Available on <span>iOS</span> and <span>Android</span></p>
                                </div>
                            </div>
                            <div class="ic-overview-content-items">
                                <div>
                                    <p class="discription-labels">By Description :</p>
                                </div>
                                <div class="types-numbers">
                                    <div class="discription">
                                        {!! $bootcamp->description !!}
                                    </div>
                                </div>
                                
                            </div>
                            <div class="ic-overview-content-items">
                                <div>
                                    <p class="discription-labels">Instructor :</p>
                                </div>
                                <div class="types-numbers">
                                    <div class="instructor-info"><img src="{{ getStoreFile($bootcamp->user->avatar, $bootcamp->user->storage_type) }}"
                                            alt="">
                                        <div>
                                            <h6>{{ $bootcamp->user->full_name }}</h6>
                                            <p>{{ $bootcamp->user->teacher->professional_title }}</p>
                                            <ul>
                                                <li><span><svg width="12" height="16" viewBox="0 0 12 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M9.28125 5.1875C9.28125 3.37347 7.80888 1.875 6 1.875C4.19347 1.875 2.71875 3.37137 2.71875 5.1875C2.71875 6.99678 4.19072 8.46875 6 8.46875C7.80928 8.46875 9.28125 6.99678 9.28125 5.1875ZM3.65625 5.1875C3.65625 3.87791 4.70766 2.8125 6 2.8125C7.29234 2.8125 8.34375 3.87791 8.34375 5.1875C8.34375 6.47984 7.29234 7.53125 6 7.53125C4.70766 7.53125 3.65625 6.47984 3.65625 5.1875Z"
                                                                fill="#00ACB6"></path>
                                                            <path
                                                                d="M11.1562 5.1875C11.1562 2.34337 8.84747 0 6 0C3.31203 0 0.84375 2.14744 0.84375 5.1875C0.84375 7.08294 2.69956 9.94722 3.80144 11.5211C2.57653 11.7673 0.84375 12.403 0.84375 13.6562C0.84375 15.4484 4.18191 16 6 16C7.81825 16 11.1562 15.4484 11.1562 13.6562C11.1562 12.4029 9.42331 11.7673 8.19856 11.5211C9.29478 9.95531 11.1562 7.08512 11.1562 5.1875ZM1.78125 5.1875C1.78125 2.56241 3.97109 0.9375 6 0.9375C8.32622 0.9375 10.2188 2.84403 10.2188 5.1875C10.2188 7.17263 7.44494 11.0857 5.99997 12.9108C4.55487 11.0861 1.78125 7.17384 1.78125 5.1875ZM10.2188 13.6562C10.2188 14.4394 7.92309 15.0625 6 15.0625C4.07947 15.0625 1.78125 14.4389 1.78125 13.6562C1.78125 13.2832 2.61863 12.6364 4.40875 12.3662C5.09244 13.2939 5.60703 13.9167 5.63909 13.9553C5.72813 14.0628 5.86044 14.125 6 14.125C6.13956 14.125 6.27188 14.0628 6.36091 13.9553C6.39297 13.9167 6.90756 13.2939 7.59125 12.3662C9.38138 12.6364 10.2188 13.2832 10.2188 13.6562Z"
                                                                fill="#00ACB6"></path>
                                                        </svg>
                                                        {{ $bootcamp->user->teacher->address }}</span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ic-tabs-content-items p-0 bg-transparent shadow-none" id="reviews">
                        <div class="ic-video-reviews">
                            <div class="ic-video-review-content">
                                <div class="student-feedback">
                                    <div class="review-count">
                                        <p class="review-star-point">Reviews <i class="ri-star-fill"></i>
                                            <span>{{ $averageRating }}</span>
                                        </p>
                                        <p>{{ $reviewsCount }} total</p>
                                    </div>

                                    <div class="review-count-shows">
                                        <div class="single-reviews">
                                            {{-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div> --}}
                                            <span class="ic-video-star">5 Star</span>
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar"
                                                    style="width: {{ $percentageRatings[5] ?? 0 }}%"></div>
                                            </div>
                                            <span class="ic-video-review-count">{{ $ratingsCount[5] ?? 0 }}</span>
                                        </div>
                                        <div class="single-reviews">
                                            {{-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div> --}}
                                            <span class="ic-video-star">4 Star</span>
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar"
                                                    style="width: {{ $percentageRatings[4] ?? 0 }}%"></div>
                                            </div>
                                            <span class="ic-video-review-count">{{ $ratingsCount[4] ?? 0 }}</span>
                                        </div>
                                        <div class="single-reviews">
                                            {{-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div> --}}
                                            <span class="ic-video-star">3 Star</span>
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar"
                                                    style="width: {{ $percentageRatings[3] ?? 0 }}%"></div>
                                            </div>
                                            <span class="ic-video-review-count">{{ $ratingsCount[3] ?? 0 }}</span>
                                        </div>
                                        <div class="single-reviews">
                                            {{-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div> --}}
                                            <span class="ic-video-star">2 Star</span>
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar"
                                                    style="width: {{ $percentageRatings[2] ?? 0 }}%"></div>
                                            </div>
                                            <span class="ic-video-review-count">{{ $ratingsCount[2] ?? 0 }}</span>
                                        </div>
                                        <div class="single-reviews">
                                            {{-- <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value=""
                                                    id="flexCheckDefault">
                                            </div> --}}
                                            <span class="ic-video-star">1 Star</span>
                                            <div class="progress" role="progressbar" aria-label="Basic example"
                                                aria-valuenow="0" aria-valuemin="0" aria-valuemax="100">
                                                <div class="progress-bar"
                                                    style="width: {{ $percentageRatings[1] ?? 0 }}%"></div>
                                            </div>
                                            <span class="ic-video-review-count">{{ $ratingsCount[1] ?? 0 }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ic-review-comment">
                                <div class="ic-review-headers">
                                    <h5>Reviews</h5>

                                    @if (!$is_reviewed)
                                        <div class="d-flex">
                                            <a href="#" class="text-nowrap ic-btn-simple" data-bs-toggle="modal"
                                                data-bs-target="#review">Write Reviews</a>
                                            {{-- <select name="" id="" class="selectpicker">
                                            <option value="0">Recent Reviews</option>
                                        </select> --}}
                                        </div>
                                    @endif
                                </div>
                                @foreach ($reviews as $review)
                                    <div class="ic-user-review-shows">
                                        <div class="ic-user-review-avatar">
                                            <img src="{{ getStoreFile($review->user->avatar, $review->user->storage_type) }}" alt="">
                                            <div class="">
                                                <p class="ic-user-avatar-text">{{ $review->user->full_name }}</p>
                                                <p class="user-review-sent">
                                                    <i class="ri-star-s-fill"></i>
                                                    {{ $review->rating }}
                                                    <svg width="5" height="5" viewBox="0 0 5 5" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <circle cx="2.5" cy="2.5" r="2.5" fill="#00ACB6" />
                                                    </svg>
                                                    <span class="publish-text">{{ $review->created_at }}</span>
                                                </p>
                                            </div>
                                        </div>
                                        <p class="ic-user-comment-show">{{ $review->comment }}</p>
                                        <ul class="comment-likes">
                                            <li>
                                                <a href="javascript::void"><i class="ri-thumb-up-fill"></i> Helpful
                                                </a>
                                            </li>
                                            <li>
                                                <a href="javascript::void"><i class="ri-thumb-down-fill"></i> Not
                                                    helpful
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="ic-tabs-content-items p-0 bg-transparent shadow-none" id="discussions">
                        <div class="ic-video-reviews">
                            <div class="ic-review-comment pt-0">
                                <div class="ic-textArea ic-discussions-heads">
                                    <img src="{{ getStoreFile(auth()->user()->avatar, auth()->user()->storage_type) }}" alt="">
                                    <form action="{{ route('student.bootcamp.discussion.submit') }}" method="POST"
                                        class="d-flex gap-2 flex-column flex-sm-row">
                                        @csrf
                                        @method('POST')
                                        <input type="hidden" name="bootcamp_id" value="{{ $bootcamp->id }}">
                                        <textarea name="description" id="" class="form-control" placeholder="What’s on your mind?"></textarea>
                                        <button type="submit" class="ic-btn-simple rounded"><i
                                                class="ri-send-plane-2-fill"></i></button>
                                    </form>
                                </div>
                                <div class="ic-review-headers justify-content-end ic-border-bottom">
                                    <div class="d-flex">
                                        <p>Sort by :</p>
                                        <select name="" id="" class="selectpicker">
                                            <option value="0"> latest</option>
                                        </select>
                                    </div>
                                </div>

                                @foreach ($discussions as $discussion)
                                    <div class="ic-user-review-shows">
                                        <div class="ic-discussions-commnent">
                                            <div class="row">
                                                <div class="col-lg-12 col-md-12">
                                                    <div class="me-text post">
                                                        <div class="ic-user-review-avatar">
                                                            <img src="{{ getStoreFile($discussion->user->avatar, $discussion->user->storage_type) }}"
                                                                alt="">
                                                            <div class="">
                                                                <p class="ic-user-avatar-text">
                                                                    {{ $discussion->user->full_name }} </p>
                                                                <p class="user-review-sent">
                                                                    {{-- <i class="ri-star-s-fill"></i>
                                                                4.98 --}}
                                                                    <svg width="5" height="5" viewBox="0 0 5 5"
                                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                                        <circle cx="2.5" cy="2.5" r="2.5"
                                                                            fill="#00ACB6" />
                                                                    </svg>
                                                                    <span class="publish-text">
                                                                        {{ $discussion->created_at }} </span>
                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="ic-user-comment-show">
                                                            <p>{{ $discussion->description }}</p>
                                                            <ul class="comment-likes">
                                                                {{-- <li>
                                                                    <a href="#"><i class="ri-thumb-up-fill"></i> Like </a>
                                                                </li> --}}
                                                                <li>
                                                                    <a href="#" class="ic-replay-btn"><i
                                                                            class="ri-reply-line"></i> Reply </a>
                                                                </li>
                                                            </ul>
                                                            <div class="ic-comment-massages">
                                                                <form
                                                                    action="{{ route('student.bootcamp.discussion.comment.submit') }}"
                                                                    method="POST">
                                                                    @csrf
                                                                    @method('POST')
                                                                    <input type="hidden" name="discussion_id"
                                                                        value="{{ $discussion->id }}">
                                                                    <textarea name="comment" id="" class="form-control" placeholder="Type comment"> </textarea>
                                                                    <button type="submit" class="ic-commnet-send"><i
                                                                            class="ri-send-plane-2-fill"></i></button>
                                                                </form>
                                                            </div>
                                                        </div>
                                                        @foreach ($discussion->comments as $item)
                                                            <div class="another-text">
                                                                <div class="ic-user-review-avatar">
                                                                    <img src="{{ getStoreFile($item->user->avatar, $item->user->storage_type) }}"
                                                                        alt="">
                                                                    <div class="">
                                                                        <p class="ic-user-avatar-text">
                                                                            {{ $item->user->full_name }}</p>
                                                                        <p class="user-review-sent">
                                                                            {{-- <i class="ri-star-s-fill"></i>
                                                                    4.98 --}}
                                                                            <svg width="5" height="5"
                                                                                viewBox="0 0 5 5" fill="none"
                                                                                xmlns="http://www.w3.org/2000/svg">
                                                                                <circle cx="2.5" cy="2.5"
                                                                                    r="2.5" fill="#00ACB6" />
                                                                            </svg>
                                                                            <span
                                                                                class="publish-text">{{ $item->created_at }}</span>
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                                <div class="ic-user-comment-show">
                                                                    <p>{{ $item->comment }}</p>
                                                                    <ul class="comment-likes">
                                                                        {{-- <li>
                                                                        <a href="#"><i class="ri-thumb-up-fill"></i> Like </a>
                                                                    </li> --}}
                                                                        {{-- <li>
                                                                    <a href="#" class="ic-replay-btn"><i
                                                                            class="ri-reply-line"></i> Reply </a>
                                                                </li> --}}
                                                                    </ul>
                                                                    {{-- <div class="ic-comment-massages">
                                                                <textarea name="" id="" class="form-control" placeholder="Type comment"> </textarea>
                                                                <button class="ic-commnet-send"><i
                                                                        class="ri-send-plane-2-fill"></i></button>
                                                            </div> --}}
                                                                </div>
                                                            </div>
                                                        @endforeach

                                                    </div>

                                                </div>
                                                {{-- <div class="col-lg-4 col-md-4">
                                                <div class="ic-votet-button">
                                                    <ul>
                                                        <li>
                                                            <button><i class="ri-arrow-up-s-line"></i> Upvote</button>
                                                        </li>
                                                        <li>
                                                            <button><i class="ri-notification-fill"></i>
                                                                Follow</button>
                                                        </li>
                                                        <li>
                                                            <button><i class="ri-share-fill"></i> Share</button>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div> --}}
                                            </div>
                                        </div>

                                        {{-- <div class="ic-user-help-post">
                                        <div class="ic-tags-replay">

                                            <span class="ic-users-tags">data science</span>
                                            <span class="ic-users-tags">programing</span>
                                            <span class="ic-users-tags">data visualisation</span>
                                        </div>
                                        <ul class="comment-likes">
                                            <li>
                                                <a href="#"><i class="ri-user-3-fill"></i> 20 Flowers </a>
                                            </li>
                                            <li>
                                                <a href="#"><i class="ri-reply-line"></i> 4 Replyer </a>
                                            </li>
                                        </ul>
                                    </div> --}}

                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                    {{-- <div class="ic-tabs-content-items shadow-none" id="note">
                        <form action="#">
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="#">Title *</label>
                                        <input type="text" class="form-control" placeholder="Title">
                                    </div>
                                </div>
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label for="#">Note *</label>
                                        <textarea name="" class="form-control" id="" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div>
                            <button class="ic-btn-simple rounded">Save</button>
                        </form>
                    </div> --}}
                </div>
            </div>
    </section>
    {{-- student dashboard --}}
    <!--Review Modal -->
    <div class="modal fade" id="review" tabindex="-1" aria-labelledby="review" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{ route('student.bootcamp.review.submit') }}" method="POST">
                    @csrf
                    @method('POST')
                    <input type="hidden" name="bootcamp_id" value="{{ $bootcamp->id }}">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="review">Write a Review</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <div class="rating">
                                <input type="radio" id="star5" name="rating" value="5" />
                                <label class="star" for="star5" title="Awesome" aria-hidden="true"></label>
                                <input type="radio" id="star4" name="rating" value="4" />
                                <label class="star" for="star4" title="Great" aria-hidden="true"></label>
                                <input type="radio" id="star3" name="rating" value="3" />
                                <label class="star" for="star3" title="Very good" aria-hidden="true"></label>
                                <input type="radio" id="star2" name="rating" value="2" />
                                <label class="star" for="star2" title="Good" aria-hidden="true"></label>
                                <input type="radio" id="star1" name="rating" value="1" />
                                <label class="star" for="star1" title="Bad" aria-hidden="true"></label>
                            </div>
                        </div>
                        <div class="form-group ic-feedback-form">
                            <label for="#">Feedback</label>
                            <textarea name="comment" id="" class="form-control" placeholder="Please write your feedback here"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="ic-btn danger" data-bs-dismiss="modal">Cancel</button>
                        <button type="submit" class="ic-btn-simple">Submit Review</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@push('scripts')
<script>
     // replay
     $('.ic-replay-btn').on('click', function(e) {
                e.preventDefault();
                console.log($(this).parent().parent().next().slideToggle());
            });
</script>
@endpush
