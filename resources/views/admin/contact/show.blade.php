@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="btn-toolbar mb-3" role="toolbar">
                                <div class="btn-group me-2 mb-2 mb-sm-0">
                                    <button type="button" class="btn btn-primary waves-light waves-effect"><a
                                            href="{{ route('admin.contact-us.index') }}" class="text-white">Back Contacts
                                            List</a></button>
                                </div>
                            </div>
                            <div class="d-flex mb-4">
                                <div class="flex-grow-1">
                                    <table>
                                        <tr>
                                            <th>Contact Name</th>
                                            <td> </td>
                                            <td>:</td>
                                            <td></td>
                                            <td>{{ $item->name }}</td>
                                        </tr>
                                        <tr>
                                            <th>Contact Email</th>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                            <td>{{ $item->email }}</td>

                                        </tr>
                                        <tr>
                                            <th>Contact Phone</th>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                            <td>{{ $item->phone }}</td>

                                        </tr>
                                        <tr>
                                            <th>Contact Subject</th>
                                            <td></td>
                                            <td>:</td>
                                            <td></td>
                                            <td>{{ $item->subject }}</td>

                                        </tr>
                                        <tr>
                                            <th>Contact Message</th>
                                            <td> </td>
                                            <td>:</td>
                                            <td></td>
                                            <td>{{ $item->message }}</td>
                                        </tr>

                                    </table>
                                </div>
                            </div>
                            <div class="btn-toolbar mb-3" role="toolbar">
                                <div class="btn-group me-2 mb-2 mb-sm-0 mx-auto">
                                    <button type="button" class="btn btn-primary waves-light waves-effect"><a
                                            href="mailto:{{ $item->email }}" class="text-white">Reply</a></button>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
@endpush

@push('scripts')
@endpush
