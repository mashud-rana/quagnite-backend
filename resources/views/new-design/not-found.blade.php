@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')

   <section>
        <div class="container">
            <div class="ic-not-found">
                <div class="row">
                    <div class="col-lg-6 m-auto">
                        <img src="{{asset('new-frontendv1/images/not-found.png')}}" class="img-fluid" alt="not found">
                        <h2>Oops! Page not found</h2>
                        <p>Something went wrong. It’s look that your requested could not be found. It's look like the link is broken or the page is removed.</p>
                        <div class="ic-not-found-btn">
                            <a href="#" class="ic-btn-simple rounded"><i class="ri-arrow-left-line"></i> Go back</a>
                            <a href="#" class="ic-btn-outline rounded">Dashboard</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>

@endsection

@push('scripts')
@endpush
