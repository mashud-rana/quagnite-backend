@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')

    {{-- student dashboard --}}
    <section class="ic-student-dashboard pb-4">
        <div class="container">
            <div class="section-headers mb-30">
                <h3 class="fs-30 fw-700">Ticket Details</h3>
                <div class="ic-support-ticket-buttons">
                    <a href="#">Resolved</a>
                </div>
            </div>
            
            <div class="ic-single-ticket">
                <div class="single-ticket-header">
                    <h5><i class="ri-checkbox-blank-circle-fill"></i> <span>Ticket# 2023-MC123</span> - Consulting V3</h5>
                    <p><i class="ri-time-line"></i> Posted at 12:45 AM</p>
                </div>
                <div class="single-ticket-body">
                    <h5>Troubleshooting Playground Issues ?</h5>
                    <p>I tried installing the demo data in appilo theme but end up with an error >> An error occurred while fetching file from: http://dyd.staging.tempdev.in/wp-content/plugins /appilo-admin/admin/admin-pages/demo/main/theme-options.dat! Reason: 404 - Not Found An error occurred while fetching file from: http://dyd.staging.tempdev.in/wp-content/plugins /appilo-admin/admin/admin-pages/demo/main/theme-options..</p>
                   
                    <div class="ic-ticket-descussion">
                        <div class="ic-ticket admin">
                            <div class="ic-ticket-avatar">
                                <div>
                                    <img src="{{ asset('frontend/images/waiting-comment-4.png') }}"
                                alt="">
                                </div>
                                <div>
                                    <p>@unkind</p>
                                    <span>12 November 2020 19:35</span>
                                </div>
                            </div>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque totam natus quibusdam?</p>
                        </div>
                        <div class="ic-ticket user">
                            <p><span>@sani,</span> Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque totam natus quibusdam?</p>
                            <div class="ic-add-users">
                                <div class="ic-assign">by @lazyReplyer</div>
                            </div>
                        </div>

                        {{-- discussion replay --}}
                        <div class="ic-discussion-ticket">
                            <h6>Reply Suggestions</h6>
                            <form action="#">
                                <textarea name="" id="" class="form-control"  placeholder="Type here your wise suggestion"></textarea>
                                <div class="pt-3 d-flex gap-3 justify-content-center">
                                    <a href="#" class="ic-btn danger">Cancel</a>
                                    <button class="ic-btn-simple">Reply</button>
                                </div>
                            </form>
                        </div>
                        {{-- discussion replay --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    {{-- student dashboard --}}

@endsection

@push('scripts')
@endpush
