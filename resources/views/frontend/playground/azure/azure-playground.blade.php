@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    <azure-playground />
@endsection


@push('scripts')
    {{-- Vue Script --}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- Vue Script --}}
@endpush
