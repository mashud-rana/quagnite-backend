@extends('admin.layouts.master')

@section('content')
    <div class="notification-main ">
        <div class="notification-header">
            <h4 class="m-0">Notifications List</h4>
            <a href="{{ route('markasreadall') }}" class="gray d-flex align-items-center gap-2">
                <i class="ri-check-line"></i>
                Mark all as read
            </a>
        </div>
        <div class="notification-body">
            <ul>
                @forelse(auth()->user()->notifications as $notification)
                    <li class="{{ $notification->read_at ? '' : 'read' }}">
                        <div class="ic-notification-content">
                            <div class="intro-part">
                                @php
                                    $user = \App\Models\User::find($notification->data['user']);
                                @endphp
                                <img class="ic-user-image" src="{{ getStoreFile($user->avatar, $user->storage_type) }}" alt="ere">
                                <div class="ic-user-content">

                                    <h6 class="">{{ $user->full_name }}</h6>
                                    {{-- <p>#3433</p> --}}
                                </div>
                            </div>
                            <div class="main-part">
                                <a href="#" class="notification-item" data-notification-id="{{ $notification->id }}"
                                    data-url="{{ $notification->data['url'] }}">
                                    <h6>
                                        {{ $notification->data['title'] }}
                                    </h6>
                                    <p class="ic-notification-des">
                                        {{ $notification->data['msg'] }}
                                    </p>
                                </a>
                            </div>
                            <div class="ic-delete">
                                <a href="{{ route('notifications.destroy', ['notification' => $notification->id]) }}">
                                    <i class="ri-close-circle-fill"></i>
                                </a>
                            </div>
                        </div>
                    </li>
                @empty
                    <li>
                        <p>No notifications found.</p>
                    </li>
                @endforelse
            </ul>
        </div>
        <div class="notification-footer">

            {{-- <a href="" class="gray d-flex align-items-center justify-content-end gap-2">
            Delete all notification
            <i class="ri-delete-bin-5-line"></i>
        </a> --}}
        </div>
    </div>
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush
