@extends('admin.layouts.master')


@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Request Details</h4>
                    <div class="table-responsive">
                        <table class="table table-sm table-hover mb-0">
                            <tbody>
                                <tr>
                                    <td>Date</td>
                                    <td>{{ \Carbon\Carbon::parse($refund->created_at)->format('j F, Y') }}</td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ $refund->user->first_name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $refund->user->email }}</td>
                                </tr>
                                <tr>
                                    <td>Requested Amount</td>
                                    <td>{{ $refund->amount }}</td>
                                </tr>
                                <tr>
                                    <td>Refund Percentage (%)</td>
                                    <td>{{ $refund->refund_percentage }}</td>
                                </tr>
                                <tr>
                                    <td>Refunded Amount</td>
                                    <td>{{ $refund->refund_amount }}</td>
                                </tr>
                                <tr>
                                    <td>Refund Type</td>
                                    <td>
                                        @if ($refund->beneficiary->type == 1)
                                            {{ 'Card' }}
                                        @elseif($refund->beneficiary->type == 2)
                                            {{ 'Bank' }}
                                        @else
                                            {{ 'Paypal' }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Refund Details</td>
                                    <td>
                                        @if ($refund->beneficiary->type == 2)
                                            <table>
                                                <tr>
                                                    <td><strong>Bank Name : </strong></td>
                                                    <td>{{ $refund->beneficiary->bank_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Bank Account Number :</strong></td>
                                                    <td>{{ $refund->beneficiary->bank_account_number }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Routing Number : </strong></td>
                                                    <td> {{ $refund->beneficiary->bank_routing_number }}</td>
                                                </tr>
                                            </table>
                                        @elseif ($refund->beneficiary->type == 1)
                                            <table>
                                                <tr>
                                                    <td>Card Holder Name : </td>
                                                    <td> {{ $refund->beneficiary->card_holder_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Card Number :</td>
                                                    <td>{{ $refund->beneficiary->card_number }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Expired Date : </td>
                                                    <td>{{ $refund->beneficiary->expire_month . '/' . $refund->beneficiary->expire_year }}
                                                    </td>
                                                </tr>
                                            </table>
                                        @elseif ($refund->beneficiary->type == 3)
                                            <span><strong>Paypal Email : </strong>
                                                {{ $refund->beneficiary->paypal_email }} </span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Refund Reason</td>
                                    <td>{{ $refund->reason }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
