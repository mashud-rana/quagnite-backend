<aside class="ic-organization-sidebar">
    <ul>
        <li>
            <a href="{{ route('api.dashboard') }}" class="{{ request()->is('api/dashboard') ? 'active' : '' }}"><i
                    class="ri-dashboard-2-line"></i> Dashboard</a>
        </li>
        <li>
            <a href="{{ route('api.credential') }}" class="{{ request()->is('api/credential') ? 'active' : '' }}"><i
                    class="ri-key-2-line"></i> Credentials</a>
        </li>
        <li>
            <a href="{{ route('api.docs') }}"><i class="ri-article-line"></i> Documentation</a>
        </li>
    </ul>
</aside>
