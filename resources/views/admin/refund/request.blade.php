@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Refund Requests</h4>
                    {!! $dataTable->table(['class' => 'table-responsive']) !!}
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
        function makeRejectRequest(event, id) {
            event.preventDefault();
            Swal.fire({
                title: "Are you sure?",
                text: "You won't be able to revert this!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonColor: "#02a499",
                cancelButtonColor: "#d33",
                confirmButtonText: "Yes, Reject it!",
            }).then((result) => {
                if (result.isConfirmed) {
                    if ($("#reject-form-" + id).length > 0) {
                        let form_id = $("#reject-form-" + id);
                        $(form_id).submit();
                    } else {
                        let form_id = $("#reject-form-" + id);
                        $(form_id).submit();
                    }
                }
            });
        }
    </script>
@endpush
