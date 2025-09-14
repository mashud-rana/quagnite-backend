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
                                    <td>{{ \Carbon\Carbon::parse($withdraw->created_at)->format('j F, Y') }}</td>
                                </tr>
                                <tr>
                                    <td>Name</td>
                                    <td>{{ $withdraw->user->first_name }}</td>
                                </tr>
                                <tr>
                                    <td>Email</td>
                                    <td>{{ $withdraw->user->email }}</td>
                                </tr>
                                <tr>
                                    <td>Amount</td>
                                    <td>{{ $withdraw->amount }}</td>
                                </tr>
                                <tr>
                                    <td>Withdraw Type</td>
                                    <td>
                                        @if ($withdraw->beneficiary->type == 1)
                                            {{ 'Card' }}
                                        @elseif($withdraw->beneficiary->type == 2)
                                            {{ 'Bank' }}
                                        @else
                                            {{ 'Paypal' }}
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Withdraw Details</td>
                                    <td>
                                        @if ($withdraw->beneficiary->type == 2)
                                            <table>
                                                <tr>
                                                    <td><strong>Bank Name : </strong></td>
                                                    <td>{{ $withdraw->beneficiary->bank_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Bank Account Number :</strong></td>
                                                    <td>{{ $withdraw->beneficiary->bank_account_number }}</td>
                                                </tr>
                                                <tr>
                                                    <td><strong>Routing Number : </strong></td>
                                                    <td> {{ $withdraw->beneficiary->bank_routing_number }}</td>
                                                </tr>
                                            </table>
                                        @elseif ($withdraw->beneficiary->type == 1)
                                            <table>
                                                <tr>
                                                    <td>Card Holder Name : </td>
                                                    <td> {{ $withdraw->beneficiary->card_holder_name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Card Number :</td>
                                                    <td>{{ $withdraw->beneficiary->card_number }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Expired Date : </td>
                                                    <td>{{ $withdraw->beneficiary->expire_month . '/' . $withdraw->beneficiary->expire_year }}
                                                    </td>
                                                </tr>
                                            </table>
                                        @elseif ($withdraw->beneficiary->type == 3)
                                            <span><strong>Paypal Email : </strong>
                                                {{ $withdraw->beneficiary->paypal_email }} </span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td>Payout Details</td>
                                    <td>{{ $withdraw->note }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
