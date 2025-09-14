@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    <section class="ic-notification">
        <div class="container">
            <div class="notification-main">
                <div class="notification-header">
                    <h4>Announcements List</h4>
                </div>
                <div class="ic-student-bootcamp">
                    <div class="ic-tabs-content-items">
                        <div class="accordion" id="loadDataContainer">
                            @forelse ($announcements as $item)
                            <div class="accordion-item ic-milstone">
                                <button class="accordion-button justify-content-between" type="button"
                                    data-bs-toggle="collapse" data-bs-target="#collapse{{ $item->id }}"
                                    aria-expanded="false"
                                    aria-controls="collapse{{ $item->id }}">
                                    <span>{{ $item->title }}</span>
                                    <span class="announcee-date">{{ custom_date($item->created_at) }}</span>
                                </button>
                                <div id="collapse{{ $item->id }}"
                                    class="accordion-collapse collapse "
                                    aria-labelledby="heading{{ $item->id }}" data-bs-parent="#accordionExample">
                                    <div class="accordion-body">
                                        <p>{!! $item->description !!}</p>
                                    </div>
                                </div>
                            </div>
                            @empty
                            <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                            @endforelse


                        </div>
                        @if ($announcements->hasMorePages())
                            <div class="ic-load-more">
                                <button id="BtnLoadMore" class="ic-btn"
                                    data-next-page="{{ $announcements->nextPageUrl() }}">
                                    Load
                                    more</button>
                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@push('scripts')
    <script src="{{ asset('frontend/js/loadMore.js') }}"></script>

    <script>
        $(document).ready(function() {

            triggerLoadMoreEvent('BtnLoadMore', 'loadDataContainer');
        });
    </script>
@endpush
