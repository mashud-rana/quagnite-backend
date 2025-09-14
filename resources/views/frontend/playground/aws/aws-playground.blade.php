@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    <aws-playground />
@endsection


@push('scripts')
    {{-- Vue Script --}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- Vue Script --}}
@endpush
