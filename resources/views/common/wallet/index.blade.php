@extends('layouts.master-user')


@section('content')
    <section class="ic-wallet">
        <div class="container">
            <div class="section-headers mb-30">
                <div>
                    <h3 class="fs-30 fw-700 pb-lg-3 pb-2">My Wallet</h3>
                    <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
                </div>
            </div>
            <div class="ic-wallet-main bg-white">
                {{-- <div class="ic-wallet-btn">
                    <a class="ic-btn" data-bs-toggle="modal" href="#exampleModalToggle">Request a Withdrawal</a>
                    <a href="{{ route('beneficiary') }}" class="ic-btn-outline">My Beneficiary</a>
                </div> --}}
                <div class="ic-wallet-balance">
                    <div class="ic-wallet-wighet flex-grow-1">
                        <div class="wallet-icon">
                            <i class="ri-wallet-3-fill"></i>
                        </div>
                        <div class="flex-grow-1 balance-statement">
                            <div>
                                <p>Available Balance</p>
                                <h4>${{ $userBalance }}</h4>
                            </div>
                            <div>
                                <p>Pending Withdraw</p>
                                <h4>${{ $pendingWithrawBalance }}</h4>
                            </div>
                            <div>
                                <p>My Balance</p>
                                <h4>${{ $userBalance }}</h4>
                            </div>
                        </div>
                    </div>
                    <div class="ic-wallate-button">
                        <a class="ic-btn rounded wallet-withdraw" data-bs-toggle="modal" href="#exampleModalToggle">Request
                            a Withdrawal</a>
                        <a href="{{ route('beneficiary') }}" class="ic-btn-simple rounded wallet-beneficiary">My
                            Beneficiary</a>
                        <a href="{{ route('beneficiary') }}" class="ic-btn-simple rounded wallet-beneficiary-add">Add
                            Beneficiary</a>
                    </div>
                </div>
                <div class="ic-wallet-history">
                    <div class="ic-course-tabs pb-0 bootcapms-tabs">
                        <div class="ic-tabs-links">
                            <ul class="p-0">
                                <li>
                                    <a href="#" class="ic-discription-links active"
                                        data-tabs="bootcamp-overview">Transactions history</a>
                                </li>
                                <li>
                                    <a href="#" class="ic-discription-links" data-tabs="announcements">Withdrawal
                                        history</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tabs-content mt-0">
                            <div class="ic-tabs-content-items active" id="bootcamp-overview">
                                <div class="table-responsive ic-wallet-table">
                                    <table class="table-bordered table w-100" id="datatable1">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>DATE</th>
                                                <th>TRANSACTION ID</th>
                                                <th>Type</th>
                                                <th>AMOUNT</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            @if (count($transactions) > 0)
                                                @foreach ($transactions as $key => $item)
                                                    <tr>
                                                        <td>{{ ++$key }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('j F, Y') }}
                                                        </td>
                                                        <td>{{ $item->trx_id }}</td>
                                                        <td>{{ $item->type }}</td>
                                                        <td>{{ $item->amount }}</td>
                                                    </tr>
                                                @endforeach
                                            @endif

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="ic-tabs-content-items" id="announcements">
                                <div class="table-responsive ic-wallet-table">
                                    <table class="table-bordered table w-100" id="datatable2">
                                        <thead>
                                            <tr>
                                                <th>SL</th>
                                                <th>DATE</th>
                                                <th>Beneficiary Name</th>
                                                <th>AMOUNT</th>
                                                <th>STATUS</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @if (count($requests) > 0)
                                                @foreach ($requests as $key => $item)
                                                    <tr>
                                                        <td>{{ ++$key }}</td>
                                                        <td>{{ \Carbon\Carbon::parse($item->created_at)->format('j F, Y') }}
                                                        </td>
                                                        <td>{{ $item->beneficiary->beneficiary_name }}</td>
                                                        <td>{{ $item->amount }}</td>
                                                        <td>
                                                            <?php
                                                            if ($item->status == PENDING) {
                                                                $badge = 'bg-warning';
                                                                $status = 'Pending';
                                                            } elseif ($item->status == COMPLETE) {
                                                                $badge = 'bg-success';
                                                                $status = 'Completed';
                                                            } elseif ($item->status == REJECT) {
                                                                $badge = 'bg-danger';
                                                                $status = 'Rejected';
                                                            }
                                                            ?>
                                                            <span class="badge {{ $badge }}">
                                                                {{ $status }} </span>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            @endif
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Available Balance --}}
    <div class="modal ic-modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                <div class="modal-body">
                    <div class="ic-modalstyled">
                        <div class="text-center pb-3">
                            <p class="pb-2">Available Balance</p>
                            <h3>$ {{ $userBalance }}</h3>
                        </div>
                        <form action="{{ route('withraw.request.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="#">Amount *</label>
                                <input type="text" name="amount" class="form-control" placeholder="Type amount">
                            </div>
                            <div class="form-group">
                                <label for="#">Beneficiary *</label>
                                <select name="beneficiary_id" class="selectpicker" id="">
                                    <option selected disabled>Select Beneficiary</option>
                                    @foreach ($beneficiaries as $item)
                                        <option value="{{ $item->id }}">{{ $item->beneficiary_name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="ic-mdoal-btn text-center">
                                <button type="submit" class="ic-btn">Make Withdraw</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Available Balance --}}
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endpush

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {

            // First Datatable
            $('#datatable1').DataTable({
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "pageLength": 5,
            });

            // Second Datatable
            $('#datatable2').DataTable({
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "pageLength": 5,
            });
        });
    </script>
@endpush
