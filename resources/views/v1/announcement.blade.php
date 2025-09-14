@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
<section class="ic-notification">
    <div class="container">
        <div class="notification-main">
            <div class="notification-header">
                <h4>Announcements List</h4>
                <p class="d-flex align-items-center gap-2"><i class="ri-check-line"></i> Mark all notifications as read</p>
            </div>
            <div class="ic-student-bootcamp">
                <div class="ic-tabs-content-items">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item ic-milstone">
                            <button class="accordion-button justify-content-between" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                <span>01 - Milestone : Personal Portfolio?</span>
                                <span class="announcee-date">30/06/2323</span>
                            </button>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Velit, optio deleniti illum quibusdam assumenda provident voluptate fugit necessitatibus ducimus nam et, perferendis voluptatibus maiores officiis ipsam sit nemo! Recusandae, odit!</p>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item ic-milstone">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    <span>01 - Milestone : Personal Portfolio?</span>
                                <span class="announcee-date">30/06/2323</span>
                                </button>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item ic-milstone">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#collapseThree" aria-expanded="false"
                                    aria-controls="collapseThree">
                                    <span>01 - Milestone : Personal Portfolio?</span>
                                <span class="announcee-date">30/06/2323</span>
                                </button>
                            <div id="collapseThree" class="accordion-collapse collapse"
                                aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 text-center">
                        <button class="ic-btn-simple">Load More</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection