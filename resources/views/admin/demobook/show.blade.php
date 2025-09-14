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
                                    <button type="button" class="btn btn-primary waves-light waves-effect">
                                        <a href="{{ route('admin.demo-books.index') }}" class="text-white">
                                            Back Demo List
                                        </a>
                                    </button>
                                </div>
                            </div>
                            <div class="d-flex mb-4">
                                <div class="flex-grow-1">
                                    <table class="table">
                                        <tr>
                                            <th>First Name</th>
                                            <td>:</td>
                                            <td>{{ $item->attributes['first_name'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Last Name</th>
                                            <td>:</td>
                                            <td>{{ $item->attributes['last_name'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Email</th>
                                            <td>:</td>
                                            <td>{{ $item->attributes['email'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Phone</th>
                                            <td>:</td>
                                            <td>{{ $item->attributes['phone'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Company Name</th>
                                            <td>:</td>
                                            <td>{{ $item->attributes['company_name'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Company Size</th>
                                            <td>:</td>
                                            <td>{{ $item->attributes['company_size'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>Comment</th>
                                            <td>:</td>
                                            <td>{{ $item->attributes['comment'] }}</td>
                                        </tr>
                                        <tr>
                                            <th>About Us</th>
                                            <td>:</td>
                                            <td>{{ $item->attributes['about_us'] }}</td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                            <div class="btn-toolbar mb-3" role="toolbar">
                                <div class="btn-group me-2 mb-2 mb-sm-0 mx-auto">
                                    <button type="button" class="btn btn-primary waves-light waves-effect">
                                        <a href="mailto:{{ $item->attributes['email'] }}" class="text-white">Reply</a>
                                    </button>
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
