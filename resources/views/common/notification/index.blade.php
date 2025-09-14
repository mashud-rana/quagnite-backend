@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    <section class="ic-notification mb-5">
        <div class="container">
            <div class="notification-main">
                <div class="notification-header">
                    <h4>Notifications List</h4>
                    <a href="{{ route('markasreadall') }}" class="gray d-flex align-items-center gap-2"><i class="ri-check-line"></i> Mark all notifications as read
                    </a>
                </div>
                <div class="notification-body">
                    <ul>
                        @forelse(auth()->user()->notifications as $notification)
                            <li>
                                <div class="left-content">
                                    <div class="icon bg-primary">
                                        <i class="ri-notification-3-line"></i>
                                    </div>
                                    <div class="notification-subject">
                                        <a href="{{ $notification->data['url'] }}">
                                            <h6>{{ $notification->data['title'] }}</h6>
                                        </a>
                                        
                                        <p>{{ custom_date($notification->created_at) }}</p>
                                    </div>
                                </div>
                                <div class="right-content">
                                    <p class="text-truncate">{{ $notification->data['msg'] }}</p>
                                    <a href="{{ route('notifications.destroy', ['notification' => $notification->id]) }}"
                                        class="notification-delete-btn">Delete <i class="ri-delete-bin-6-fill"></i></a>

                                </div>
                            </li>
                        @empty
                            <li>
                                <p>No notifications found.</p>
                            </li>
                        @endforelse
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
