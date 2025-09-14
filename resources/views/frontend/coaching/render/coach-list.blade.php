<div class="ic-items-list-main ic-items-grid-main row g-4 row-cols-xxl-4 row-cols-xl-4 row-cols-lg-3 row-cols-sm-2 row-cols-1"
    id="loadDataContainer">
    @foreach ($users as $user)
        <div class="col">
            <div class="ic-items-list mb-0 flex-column">
                {{-- <a href="{{ route('front.coachDetails', $user->coach->uuid) }}"> --}}
                <div class="ic-list-image">
                    <div class="position-relative">
                        <img src="{{ $user->avatar_url }}" class="img-fluid w-100" alt="">
                        <div class="coach-names">
                            <p>{{ $user->full_name }}</p>
                        </div>
                        <a href="#" class="wishlist"><i class="ri-heart-3-line"></i></a>
                        <ul class="ic-rating-info">
                            <li>
                                <p>
                                    <svg width="9" height="10" viewBox="0 0 9 10" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="4.5" cy="5" r="4.5" fill="#2AA6C0" />
                                    </svg>
                                    <span>{{ number_format($user->average_rating, 2) }}</span>
                                    <i class="ri-star-s-fill yellow"></i>
                                    <span>({{ $user->total_review }})</span>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                {{-- </a> --}}
                <div class="ic-list-conetnt">
                    <a href="{{ route('front.coachDetails', $user->coach->uuid) }}">
                        <p class="sub-title">{{ $user->coach->professional_title }}</p>
                    </a>
                    <div class="list-conetnt-info">
                        <div class="list-info-items">
                            <p class="fw-300"><i class="ri-file-list-2-line"></i>
                                {{ $user->coach->coach_enrollments_count }} Students
                                Enroll
                            </p>
                        </div>
                        <div class="list-info-items">
                            <p class="fw-300">
                                <i class="ri-vidicon-line"></i>
                                @if ($user->coach->coach_total_duration > 0)
                                    Taken a total of {{ $user->coach->coach_total_duration }}
                                    session{{ $user->coach->coach_total_duration !== 1 ? 's' : '' }}.
                                @else
                                    No sessions have been taken yet.
                                @endif
                            </p>
                        </div>
                    </div>
                    <div class="card-btn">
                        <button data-bs-toggle="modal" data-bs-target="#consultationBookingModal"
                            data-booking_coach_user_id="{{ $user->id }}"
                            data-hourly_rate="{{ $user->coach->hourly_rate }}"
                            data-get_off_days_route="{{ route('getOffDays', $user->id) }}"
                            class="ic-btn bookSchedule">Book</button>
                        <h5 class="black">$ {{ $user->coach->hourly_rate }}</h5>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
@if ($users->hasMorePages())
    <div class="ic-load-more">
        <button id="BtnLoadMore" class="ic-btn" data-next-page="{{ $users->nextPageUrl() }}"> Load
            more </button>
    </div>
@endif
