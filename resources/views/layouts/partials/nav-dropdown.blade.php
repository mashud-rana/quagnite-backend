@php
    $user = auth()->user();
@endphp
<div class="ic-student-avatar">
    <div class="ic-account-avatar dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
        <img src="{{ getStoreFile($user->avatar, $user->storage_type)  }}" alt="">
    </div>
    <ul class="dropdown-menu">
        <li>
            <div class="avatar-account-infos">
                <img src="{{ getStoreFile($user->avatar, $user->storage_type)  }}" alt="">
                <div>
                    <p>{{ $user->full_name }}</p>
                    <span>{{ $user->email }}</span>
                </div>
            </div>
        </li>
        {{-- Admin dropdown --}}
        @if ($user->user_type === 'admin')
            @include('layouts.partials.dropdown.admin')
        @endif

        {{-- Student dropdown --}}
        @if ($user->user_type === 'student')
            @include('layouts.partials.dropdown.student')
        @endif

        {{-- Teacher dropdown --}}
        @if ($user->user_type === 'teacher')
            @include('layouts.partials.dropdown.teacher')
        @endif

        {{-- Coach dropdown --}}
        @if ($user->user_type === 'coach')
            @include('layouts.partials.dropdown.coach')
        @endif

        {{-- Member dropdown --}}
        @if ($user->user_type === 'member')
            @include('layouts.partials.dropdown.member')
        @endif

        @if ($user->user_type !== 'admin')
            @include('layouts.partials.dropdown.common')
        @endif
        <li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <a onclick="event.preventDefault(); this.closest('form').submit();" class="dropdown-item text-danger"
                    href="javascript:void(0)">
                    <i class="ri-shut-down-line"></i>
                    Logout
                </a>
            </form>
        </li>
    </ul>
</div>
