@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
<section class="ic-notification">
    <div class="container">
        <div class="notification-main">
            <div class="notification-header">
                <h4>Notifications List</h4>
                <p class="d-flex align-items-center gap-2"><i class="ri-check-line"></i> Mark all notifications as read</p>
            </div>
            <div class="notification-body">
                <ul>
                    <li>
                        <div class="left-content">
                            <div class="icon bg-primary">
                                <i class="ri-mail-open-fill"></i>
                            </div>
                            <div class="notification-subject">
                                <h6><span class="primary">Selena</span> comments on your posts about.</h6>
                                <p>3 Jun 2023 | 05:04</p>
                            </div>
                        </div>
                        <div class="right-content ">
                            <p class="text-truncate">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure nisi quia voluptate rem id cum exercitationem iste minima dolores porro.</p>
                            <a href="#" class="notification-delete-btn">Delete <i class="ri-delete-bin-6-fill"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="left-content">
                            <div class="icon bg-success-1">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="notification-subject">
                                <h6><span class="success">Selena</span> comments on your posts about.</h6>
                                <p>3 Jun 2023 | 05:04</p>
                            </div>
                        </div>
                        <div class="right-content">
                            <p class="text-truncate">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure nisi quia voluptate rem id cum exercitationem iste minima dolores porro.</p>
                            <a href="#" class="notification-delete-btn">Delete <i class="ri-delete-bin-6-fill"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="left-content">
                            <div class="icon bg-red">
                                <i class="ri-flag-fill"></i>
                            </div>
                            <div class="notification-subject">
                                <h6><span class="text-red">Selena</span> comments on your posts about.</h6>
                                <p>3 Jun 2023 | 05:04</p>
                            </div>
                        </div>
                        <div class="right-content">
                            <p class="text-truncate">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure nisi quia voluptate rem id cum exercitationem iste minima dolores porro.</p>
                            <a href="#" class="notification-delete-btn">Delete <i class="ri-delete-bin-6-fill"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="left-content">
                            <div class="icon bg-success-1">
                                <i class="ri-check-line"></i>
                            </div>
                            <div class="notification-subject">
                                <h6><span class="success">Selena</span> comments on your posts about.</h6>
                                <p>3 Jun 2023 | 05:04</p>
                            </div>
                        </div>
                        <div class="right-content">
                            <p class="text-truncate">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure nisi quia voluptate rem id cum exercitationem iste minima dolores porro.</p>
                            <a href="#" class="notification-delete-btn">Delete <i class="ri-delete-bin-6-fill"></i></a>
                        </div>
                    </li>
                    <li>
                        <div class="left-content">
                            <div class="icon bg-warning-1">
                                <i class="ri-add-line"></i>
                            </div>
                            <div class="notification-subject">
                                <h6><span class="orange">Selena</span> comments on your posts about.</h6>
                                <p>3 Jun 2023 | 05:04</p>
                            </div>
                        </div>
                        <div class="right-content">
                            <p class="text-truncate">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Iure nisi quia voluptate rem id cum exercitationem iste minima dolores porro.</p>
                            <a href="#" class="notification-delete-btn">Delete <i class="ri-delete-bin-6-fill"></i></a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>
@endsection