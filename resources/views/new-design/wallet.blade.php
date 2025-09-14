@extends('layouts.master-user')

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endpush

@section('content')
    <section class="ic-wallet">
        <div class="container">
            <div class="section-headers mb-30">
                <h3 class="fs-30 fw-700 pb-lg-3 pb-2">My Wallet</h3>
                <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
            </div>
            <div class="ic-wallet-main bg-white">
                <div class="ic-wallet-btn">
                    <a class="ic-btn" data-bs-toggle="modal" href="#exampleModalToggle">Request a Withdrawal</a>
                    <a href="#" class="ic-btn-outline">Request a Withdrawal</a>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-4">
                        <div class="ic-wallet-wighet">
                            <h3>My Balance</h3>
                            <p>$ 0.00</p>
                        </div>
                    </div>
                </div>
                <div class="ic-wallet-history">
                    <div class="ic-course-tabs pb-0 bootcapms-tabs">
                        <div class="ic-tabs-links">
                            <ul class="p-0">
                                <li>
                                    <a href="#" class="ic-discription-links active"
                                        data-tabs="bootcamp-overview">Transaction history</a>
                                </li>
                                <li>
                                    <a href="#" class="ic-discription-links" data-tabs="announcements">Withdrawal
                                        history</a>
                                </li>
                            </ul>
                        </div>
                        <div class="tabs-content mt-0">
                            <div class="ic-tabs-content-items active" id="bootcamp-overview">
                                <div class="table-responsive">
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
                            <div class="ic-tabs-content-items" id="announcements">
                                asdfdasfdsfsdfdasfa dsf
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
                            <h3>$ 0.00</h3>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <label for="#">Amount *</label>
                                <input type="text" class="form-control" placeholder="Type amount">
                            </div>
                            <div class="form-group">
                                <label for="#">Beneficiary *</label>
                                <select name="" class="selectpicker" id="">
                                    <option value="0">Beneficiary 1</option>
                                    <option value="0">Beneficiary 2</option>
                                </select>
                            </div>
                            <div class="ic-mdoal-btn text-center">
                                <button class="ic-btn">Make Withdraw</button>
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
