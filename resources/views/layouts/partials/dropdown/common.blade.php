<li>
    <a class="dropdown-item" href="{{ route('ticket.index') }}"><i class="ri-ticket-line"></i>My Ticket</a>
</li>
<li>
    <a class="dropdown-item" href="{{ route('api.dashboard') }}"><i class="ri-global-line"></i> Api</a>
</li>

@if (session()->has('admin_login_id'))
    <li>
        <a class="dropdown-item" href="{{ route('backToAdmin', session()->get('admin_login_id')) }}"><i
                class="ri-arrow-go-back-line"></i> Back To
            Admin</a>
    </li>
@endif
