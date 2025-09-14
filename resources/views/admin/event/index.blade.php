@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">All Events</h4>
                    <x-bulk-action-component model="Event" statusField="status" :actions="['delete']" :statuses="[]">
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
    <script>
        function assignReviewer(selectElement, ebookId) {
            const reviewerId = selectElement.value;

            if (reviewerId) {
                axios.post(route('admin.ebook.assignReviewer'), {
                    ebook_id: ebookId,
                    reviewer_id: reviewerId,
                }).then(response => {
                    alert('Reviewer assigned successfully');
                }).catch(error => {
                    alert('Failed to assign reviewer');
                });
            }
        }
    </script>
@endpush
