@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Wikis</h4>
                    <x-bulk-action-component model="Wiki" statusField="status" :actions="['delete', 'draft', 'published']" :statuses="['draft', 'published']">
                        {!! $dataTable->table(['class' => 'table-responsive']) !!}
                    </x-bulk-action-component>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    @include('includes.styles.datatable')
@endpush

@push('scripts')
    @include('includes.scripts.datatable')
@endpush
