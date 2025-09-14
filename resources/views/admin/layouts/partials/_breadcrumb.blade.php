<div class="page-title-box">
    <div class="row align-items-center">
        <div class="col-md-8">
            <h6 class="page-title">{{ get_page_meta('title', true) }}</h6>
            <ol class="breadcrumb m-0">
                <li class="breadcrumb-item"><a href="">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{ get_page_meta('title', true) }}</li>
            </ol>
        </div>
        @if(request()->routeIs('member.ticket.index') || request()->routeIs('student.ticket.index'))
        <div class="col-md-4 text-end">
            <a href="{{ request()->routeIs('member.ticket.index') ? route('member.ticket.create') : route('student.ticket.create') }}" class="btn btn-primary">Create Ticket</a>
        </div>
        @endif
    </div>
</div>
