@extends('admin.layouts.master')

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-3">Blog Comments</h4>
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
        const changeCommentStatus = (event, id) => {
            event.preventDefault();

            const URL = '{{ route('admin.blog.changeBlogCommentStatus') }}';

            axios.post(URL, {
                    id: id,
                    status: event.target.value,
                })
                .then(function(response) {
                    //handle response
                })
                .catch(function(error) {
                    // handle error
                });
        }
    </script>
@endpush
