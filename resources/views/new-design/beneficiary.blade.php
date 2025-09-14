@extends('layouts.master-user')

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
    <section class="ic-wallet">
        <div class="container">
            <div class="section-headers mb-30">
                <h3 class="fs-30 fw-700 pb-lg-3 pb-2">My Beneficiary</h3>
                <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
            </div>
            <div class="ic-wallet-main bg-white">
                <div class="ic-wallet-btn justify-content-between">
                    <h3>Beneficiary For Withdraw</h3>
                    <div>
                        <a class="ic-btn" data-bs-toggle="modal" href="#exampleModalToggle">Add Beneficiary</a>
                        <a href="{{ route('wallet') }}" class="ic-btn-outline">GoTo
                            Wallet</a>
                    </div>
                </div>

                <div class="ic-wallet-history">
                    <table class="history-datatable table-striped w-100">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Position</th>
                                <th>Office</th>
                                <th>Age</th>
                                <th>Start date</th>
                                <th>Salary</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011-04-25</td>
                                <td>$320,800</td>
                            </tr>
                            <tr>
                                <td>Tiger Nixon</td>
                                <td>System Architect</td>
                                <td>Edinburgh</td>
                                <td>61</td>
                                <td>2011-04-25</td>
                                <td>$320,800</td>
                            </tr>
                        </tbody>
                    </table>
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
                        <div class="text-center pb-4">
                            <h3>Add Beneficiary</h3>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <label for="#">Beneficiary Name *</label>
                                <input type="text" class="form-control" placeholder="Beneficiary Name">
                            </div>
                            <div class="form-group">
                                <label for="#">Type*</label>
                                <select name="" class="selectpicker" id="">
                                    <option value="0">Paypal</option>
                                    <option value="0">Bank</option>
                                    <option value="0">Card</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="#">Beneficiary Name *</label>
                                <input type="text" class="form-control" placeholder="Beneficiary Name">
                            </div>
                            <div class="ic-mdoal-btn text-center">
                                <button class="ic-btn px-5">Add</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Available Balance --}}
@endsection

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.history-datatable').DataTable();
        });
    </script>
@endpush
