@extends('layouts.master-user')

@section('content')
    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            <div class="section-headers">
                <h3 class="fs-30 fw-700 pb-lg-3 pb-2">Purchase history</h3>
                <p class="color-deep-gray">Update your payment information or change your plans acording to your needs</p>
            </div>
            <div class="ic-purchase-history">
                <div class="ic-pruchase-plan-method">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ic-purchase-history-plan">
                                <h4 class="fs-28 fw-500 pb-3">My Plan</h4>
                                <p class="color-deep-gray">Change your Plan Based on your needs</p>
                                <div class="ic-plan-items-p">
                                    <div class="ic-chooes-plan-names pb-2">
                                        <img src="{{ asset('new-frontend/images/circle.png') }}" alt="">
                                        <h4 class="fs-20 fw-500">Pro Plan</h4>
                                        <span>Billed yearly</span>
                                    </div>
                                    <p class="color-deep-gray">$299.99 USD (next renew 24 September 2023)</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="ic-purchase-history-plan">
                                <h4 class="fs-28 fw-500 pb-3">Payment Method</h4>
                                <p class="color-deep-gray">Change how to pay your plan</p>
                                <div class="ic-plan-items-p">
                                    <div class="ic-chooes-plan-names pb-2">
                                        <div class="payment-method-img">
                                            <img src="{{ asset('new-frontend/images/paypal.png') }}" alt="">
                                        </div>
                                        <div>
                                            <h4 class="fs-20 fw-500">Customername@gmail.com</h4>
                                            <p class="color-deep-gray">Expired Date : 23-05-2023</p>
                                        </div>
                                        <div class="ms-auto">
                                            <a href="#" class="ic-change-btn">Change</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="table-responsive">
                    <table class="ic-tables">
                        <thead>
                            <th>SI No.</th>
                            <th>Date</th>
                            <th>Course Name</th>
                            <th>Certificate No</th>
                            <th>Action</th>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    01
                                </td>
                                <td>
                                    1st Feb, 2023
                                </td>
                                <td>
                                    Programming and App Development
                                </td>
                                <td>
                                    3190523
                                </td>
                                <td>
                                    <a href="#" class="ic-my-buttons">Download</a>
                                    <a href="#" class="ic-my-buttons">View</a>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    01
                                </td>
                                <td>
                                    1st Feb, 2023
                                </td>
                                <td>
                                    Programming and App Development
                                </td>
                                <td>
                                    3190523
                                </td>
                                <td>
                                    <a href="#" class="ic-my-buttons">Download</a>
                                    <a href="#" class="ic-my-buttons">View</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="ic-pagination">
                    <ul>
                        <li>
                            <a href="#" class="page-link"><i class="ri-arrow-left-line"></i></a>
                        </li>
                        <li>
                            <a href="#" class="page-link active">1</a>
                        </li>
                        <li>
                            <a href="#" class="page-link">2</a>
                        </li>
                        <li>
                            <a href="#" class="page-link">3</a>
                        </li>
                        <li>
                            <a href="#" class="page-link">4</a>
                        </li>
                        <li>
                            <a href="#" class="page-link"><i class="ri-arrow-right-line"></i></a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    {{-- student dashboard --}}
@endsection

@push('scripts')
@endpush

@push('styles')
@endpush
