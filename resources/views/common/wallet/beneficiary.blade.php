@extends('layouts.master-user')


@section('content')
    <section class="ic-wallet">
        <div class="container">
            <div class="section-headers mb-30">
                <div>
                    <h3 class="fs-30 fw-700 pb-lg-3 pb-2">My Beneficiary</h3>
                    <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
                </div>
            </div>
            <div class="ic-wallet-main bg-white">
                <div class="ic-wallet-btn justify-content-between">
                    <div>
                        <a class="ic-btn-simple rounded" data-bs-toggle="modal" href="#exampleModalToggle">Add Beneficiary</a>
                        <a href="{{ route('wallet') }}" class="ic-btn-outline rounded">
                            {{ $user->user_type != USER_TYPE_STUDENT ? 'GoTo Wallet' : 'GoTo Refund' }}
                        </a>
                    </div>
                </div>

                <div class="ic-wallet-history ic-wallet-table pt-0">
                    <table class="cell-border table table-bordered" id="datatable">
                        <thead>
                            <tr>
                                <th width="25%">{{ __('Name') }}</th>
                                <th width="25%">{{ __('Type') }}</th>
                                <th width="40%">{{ __('Data') }}</th>
                                <th width="10%">{{ __('Action') }}</th>
                            </tr>
                        </thead>
                        <tbody class="text-center">

                            @if (count($beneficiries) > 0)
                                @foreach ($beneficiries as $item)
                                    <tr>
                                        <td>{{ $item->beneficiary_name }}</td>
                                        <td>
                                            @if ($item->type == 1)
                                                {{ 'Card' }}
                                            @elseif($item->type == 2)
                                                {{ 'Bank' }}
                                            @else
                                                {{ 'Paypal' }}
                                            @endif
                                        </td>
                                        <td>
                                            @if ($item->type == 2)
                                                <table>
                                                    <tr>
                                                        <td><strong>Bank Name : </strong></td>
                                                        <td>{{ $item->bank_name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Bank Account Number :</strong></td>
                                                        <td>{{ $item->bank_account_number }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td><strong>Routing Number : </strong></td>
                                                        <td> {{ $item->bank_routing_number }}</td>
                                                    </tr>
                                                </table>
                                            @elseif ($item->type == 1)
                                                <table>
                                                    <tr>
                                                        <td>Card Holder Name : </td>
                                                        <td> {{ $item->card_holder_name }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Card Number :</td>
                                                        <td>{{ $item->card_number }}</td>
                                                    </tr>
                                                    <tr>
                                                        <td>Expired Date : </td>
                                                        <td>{{ $item->expire_month . '/' . $item->expire_year }}</td>
                                                    </tr>
                                                </table>
                                            @elseif ($item->type == 3)
                                                <span><strong>Paypal Email : </strong>
                                                    {{ $item->paypal_email }} </span>
                                            @endif
                                        </td>
                                        <td> <a href="{{ route('beneficiary.delete', $item->uuid) }}"
                                                class="btn btn-danger">Delete</a></td>
                                    </tr>
                                @endforeach
                            @endif
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
                        <form action="{{ route('beneficiary.store') }}" method="POST">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="#">Beneficiary Name *</label>
                                <input type="text" name="beneficiary_name" class="form-control"
                                    placeholder="Beneficiary Name">
                            </div>
                            <div class="form-group">
                                <label for="btype">Type*</label>
                                <select name="type" class="selectpicker" id="btype">
                                    <option value="1">Card</option>
                                    <option value="2">Bank</option>
                                    <option value="3">Paypal</option>
                                </select>
                            </div>

                            <div class="benificary-type-block" id="beneficiary-1">
                                <div class="row">
                                    <div class="col-md-12 mb-30">
                                        <label class="font-medium font-15 color-heading">{{ __('Card number') }}<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="card_number" class="form-control"
                                            placeholder="{{ __('1215 2112 2112 212') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-30">
                                        <label class="font-medium font-15 color-heading">{{ __('Card Holder Name') }}<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="card_holder_name"
                                            placeholder="{{ __('Your name') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 mb-30">
                                        <label class="font-medium font-15 color-heading">{{ __('Month') }}<span
                                                class="text-danger">*</span></label>
                                        <select name="expire_month" class="form-select">
                                            <option value="">{{ __('Select Month') }}</option>
                                            <option value="1">{{ __('January') }}</option>
                                            <option value="2">{{ __('February') }}</option>
                                            <option value="3">{{ __('March') }}</option>
                                            <option value="4">{{ __('April') }}</option>
                                            <option value="5">{{ __('May') }}</option>
                                            <option value="6">{{ __('June') }}</option>
                                            <option value="7">{{ __('July') }}</option>
                                            <option value="8">{{ __('August') }}</option>
                                            <option value="9">{{ __('September') }}</option>
                                            <option value="10">{{ __('October') }}</option>
                                            <option value="11">{{ __('November') }}</option>
                                            <option value="12">{{ __('December') }}</option>
                                        </select>
                                    </div>
                                    <div class="col-md-6 mb-30">
                                        <label class="font-medium font-15 color-heading">{{ __('Year') }}<span
                                                class="text-danger">*</span></label>
                                        <select name="expire_year" class="form-select">
                                            <option value="">{{ __('Select Year') }}</option>

                                            @for ($year = \Carbon\Carbon::now()->format('Y');
        $year <
        \Carbon\Carbon::now()->addYear(20)->format('Y');
        $year++)
                                                <option value="{{ $year }}">{{ $year }}</option>
                                            @endfor

                                        </select>
                                    </div>
                                </div>
                            </div>


                            <div class="benificary-type-block d-none" id="beneficiary-2">
                                <div class="row">
                                    <div class="col-md-12 mb-30">
                                        <label class="font-medium font-15 color-heading">{{ __('Bank Name') }}<span
                                                class="text-danger">*</span></label>
                                        <input type="text" name="bank_name" class="form-control"
                                            placeholder="{{ __('EX. State Bank') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-30">
                                        <label class="font-medium font-15 color-heading">{{ __('Account Name') }}<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="bank_account_name"
                                            placeholder="{{ __('Mr. Jone Doe') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-30">
                                        <label class="font-medium font-15 color-heading">{{ __('Account Number') }}<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="bank_account_number"
                                            placeholder="{{ __('12121212112112') }}">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 mb-30">
                                        <label class="font-medium font-15 color-heading">{{ __('Routing Number') }}<span
                                                class="text-danger">*</span></label>
                                        <input type="text" class="form-control" name="bank_routing_number"
                                            placeholder="{{ __('Ex. 12345678') }}">
                                    </div>
                                </div>
                            </div>

                            <div class="benificary-type-block d-none" id="beneficiary-3">
                                <div class="row">
                                    <div class="col-md-12 mb-30">
                                        <label class="font-medium font-15 color-heading">{{ __('Paypal Email') }}<span
                                                class="text-danger">*</span></label>
                                        <input type="email" class="form-control" name="paypal_email"
                                            placeholder="EX. example@mail.com">
                                    </div>
                                </div>
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

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/dataTables.bootstrap5.min.css">
@endpush

@push('scripts')
    <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.4/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#datatable').DataTable({
                "lengthChange": false,
                "searching": false,
                "ordering": false,
                "pageLength": 5,
            });

            $(document).on('change', ':input[name=type]', function() {
                let val = $(this).val();
                $(document).find('.benificary-type-block').addClass('d-none');
                $(document).find('#beneficiary-' + val).removeClass('d-none');
            });
        });
    </script>
@endpush
