@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    {{-- organization --}}
    <div class="ic-organization-main">
        <div>
            @include('common.api.partials.aside')
        </div>
        <div class="content-right">
            @if ($enroll)
                <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-3 mt-3">
                    <div class="col">
                        <div class="ic-budgetPLan">
                            <h5>Plan Name</h5>
                            <p>{{ $enroll->plan->title }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-budgetPLan">
                            <h5>Starting Date</h5>
                            <p>{{ \Carbon\Carbon::parse($enroll->started_at)->format('j F, Y') }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-budgetPLan">
                            <h5>Expiration Date</h5>
                            <p>{{ \Carbon\Carbon::parse($enroll->valid_till)->format('j F, Y') }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-budgetPLan">
                            <h5>Call Limit</h5>
                            <p>{{ $enroll->plan->call_limit }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-budgetPLan">
                            <h5>Remaining Call</h5>
                            <p>{{ $enroll->plan->call_limit - $totalCall }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-budgetPLan">
                            <h5>Status</h5>
                            <p>Active</p>
                        </div>
                    </div>
                @else
                    <div class="col">
                        <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                    </div>
            @endif
        </div>
    </div>
    </div>
@endsection

@push('scripts')
@endpush
