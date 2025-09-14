@extends('layouts.master-user')

@section('content')
    <aws-playground />
@endsection

@push('scripts')
    {{-- Vue Script --}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- Vue Script --}}
@endpush
