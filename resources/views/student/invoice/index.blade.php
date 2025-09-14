@extends('layouts.master-user')

@section('content')
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            <div class="section-headers">
                <h3 class="fs-30 fw-700 pb-lg-3 pb-2">Invoice List</h3>
                <p class="color-deep-gray">Your All Invoice List</p>
            </div>
            <div class="ic-certificate-list">
                <div class="table-responsive">
                    <table class="ic-tables">
                        <thead>
                            <th>SI No.</th>
                            <th>Date</th>
                            <th>Invoice No</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            @forelse ($invoices as $item)
                                <tr>
                                    <td>
                                        {{ $loop->iteration }}
                                    </td>
                                    <td>
                                        {{ custom_date($item->updated_at) }}
                                    </td>
                                    <td>
                                        {{ $item->invoice_id }}
                                    </td>
                                    <td>
                                        <a href="{{ route('student.invoice.generate', ['id' => $item->id]) }}"
                                            class="ic-my-buttons">Download</a>
                                        <a href="{{ route('student.invoice.view', ['id' => $item->id]) }}"
                                            class="ic-my-buttons">View</a>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="4">
                                        <x-frontend.data-notfound extraClasses="m-auto"></x-frontend.data-notfound>
                                    </td>
                                </tr>
                            @endforelse

                        </tbody>
                    </table>
                </div>
                <x-frontend.custome-pagination :paginator="$invoices" />
            </div>
        </div>
    </section>
    {{-- student dashboard --}}
@endsection

@push('scripts')
@endpush

@push('styles')
@endpush
