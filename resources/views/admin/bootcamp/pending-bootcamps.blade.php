@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Pending Bootcamps</h4>
                    <x-bulk-action-component model="bootcamp" statusField="status" :actions="['delete', 'approve', 'hold']" :statuses="['approve', 'hold']">
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
