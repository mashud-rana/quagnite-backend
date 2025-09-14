@extends('admin.layouts.master')


@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">{{ get_page_meta('title', true) }}</h4>

{{--                    CMS Page Edit Component--}}
                    <cms-page-edit
                        :page="{{ $page }}"
                    />

                </div>
            </div>
        </div>
    </div>
@endsection
