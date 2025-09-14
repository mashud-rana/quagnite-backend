{{-- @extends('admin.layouts.master') --}}
@extends('layouts.master-user')
@section('content')
    <section class="">
        <div class="container">
            <div class="section-headers mb-30">
                <div>
                    <div>
                        <h3 class="fs-30 fw-700 pb-lg-3 pb-2">Subscription</h3>
                        <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
                    </div>
                </div>
            </div>
            @if ($subscribe)
                <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-3 mt-3">
                    <div class="col">
                        <div class="ic-budgetPLan">
                            <h5>Starting Date</h5>
                            <p>{{ \Carbon\Carbon::parse($subscribe->started_at)->format('j F, Y') }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-budgetPLan">
                            <h5>Expiration Date</h5>
                            <p>{{ \Carbon\Carbon::parse($subscribe->valid_till)->format('j F, Y') }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-budgetPLan">
                            <h5>Actions</h5>
                            <p>
                                @if ($greater_count > 0)
                                    <td>
                                        <a href="{{ route('student.subscription.upgrade.list') }}" class="ic-btn"
                                            type="button">Upgrade</a>
                                    </td>
                                @endif
                            </p>
                        </div>
                    </div>

                    <div class="col">
                        <div class="ic-budgetPLan">
                            <h5>Plan Name</h5>
                            <p>{{ $subscribe->subscription->title }}</p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="ic-budgetPLan">
                            <h5>Status</h5>
                            <p>Active</p>
                        </div>
                    </div>

                </div>
                <div class="row mt-5 mb-5">
                    <div class="col-sm-12">
                        <div class="table-responsive ic-create-exam-table">
                            <table class="table mb-0 bg-white">
                                <thead>
                                    <tr>
                                        <th>Remaining Playground</th>
                                        <th>Remaining Exam</th>
                                        <th>Remaining Ebook</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{ $remainingPlaygroundCount }}</td>
                                        <td>{{ $remainingExamCount }}</td>
                                        <td>{{ $remainingEbookCount }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            @else
                <div class="row g-3 row-cols-1 row-cols-sm-2 row-cols-md-3 mt-3">
                    <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                </div>
            @endif


        </div>
    </section>

@endsection
