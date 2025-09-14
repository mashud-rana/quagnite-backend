@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>
                    <div class="row">
                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td>Clear View Cache</td>
                                        <td>

                                            <a href="{{ route('admin.settings.cache.update', 1) }}"
                                                class="btn btn-primary">Click
                                                Here</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Clear Route Cache</td>
                                        <td>

                                            <a href="{{ route('admin.settings.cache.update', 2) }}"
                                                class="btn btn-primary">Click
                                                Here</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Clear Config Cache </td>
                                        <td>

                                            <a href="{{ route('admin.settings.cache.update', 3) }}"
                                                class="btn btn-primary">Click
                                                Here</a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Application Clear Cache</td>
                                        <td>

                                            <a href="{{ route('admin.settings.cache.update', 4) }}"
                                                class="btn btn-primary">Click
                                                Here</a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
