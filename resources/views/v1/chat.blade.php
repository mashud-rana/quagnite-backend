@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')

{{-- chat box start --}}
<section class="my-bootcamps-main">
    <div class="container">
        <div class="section-headers">
            <div>
                <h3 class="fs-30 fw-700 pb-lg-3 pb-2">All Messages</h3>
                <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
            </div>
        </div>
        <div class="mt-4 mb-3">
            <div class="ic-chat-conversation">
                <div class="ic-chat-conversation-left">
                    <i class="ri-close-line close-bar"></i>
                    <div class="ic-chat-search">
                        <div class="position-relative">
                            <i class="ri-search-line"></i>
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </div>
                    <div class="ic-chat-users">
                        <ul>
                            <li>
                                <a href="#">
                                    <div class="user-left">
                                        <img src="{{asset('/new-frontendv1/images/user_3.png')}}" alt="user avatar">
                                        <div class="user-name">
                                            <p>Darlene Robertson</p>
                                            <span>Head of Development</span>
                                        </div>
                                    </div>
                                    <p class="mint">34min</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="user-left">
                                        <img src="{{asset('/new-frontendv1/images/user_3.png')}}" alt="user avatar">
                                        <div class="user-name">
                                            <p>Darlene Robertson</p>
                                            <span>Head of Development</span>
                                        </div>
                                    </div>
                                    <p class="mint">34min</p>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <div class="user-left">
                                        <img src="{{asset('/new-frontendv1/images/user_3.png')}}" alt="user avatar">
                                        <div class="user-name">
                                            <p>Darlene Robertson</p>
                                            <span>Head of Development</span>
                                        </div>
                                    </div>
                                    <p class="mint">34min</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ic-chat-conversation-right">
                    <div class="ic-active-user">
                        <div class="ic-user-show">
                            <img src="{{asset('/new-frontendv1/images/user_3.png')}}" alt="user avatar">
                            <div>
                                <p>Arlene McCoy</p>
                                <span>Active</span>
                            </div>
                        </div>
                        <div class="d-flex gap-3">
                            <a href="#">Delete Conversation</a>
                            <i class="ri-bar-chart-horizontal-line chat-bar"></i>
                        </div>
                    </div>
                    <div class="ic-chat-box">
                        <div class="ic-massage-item">
                            <div class="massage-avatar">
                                <img src="{{asset('/new-frontendv1/images/user_3.png')}}" alt="user avatar">
                                <div>
                                    <p>Albert Flores <span>35 mins</span></p>
                                </div>
                            </div>
                            <div class="message-content">
                                Thank you so much. These files are very important to me. I guess you didn't make any changes to these files. So I need the original versions of these files. Thank you very much again.
                            </div>
                        </div>
                        <div class="ic-massage-item outgoing-message">
                            <div class="massage-avatar">
                                <img src="{{asset('/new-frontendv1/images/user_3.png')}}" alt="user avatar">
                                <div>
                                    <p>Albert Flores <span>35 mins</span></p>
                                </div>
                            </div>
                            <div class="message-content">
                                Thank you so much. These files are very important to me. I guess you didn't make any changes to these files. So I need the original versions of these files. Thank you very much again.
                            </div>
                        </div>
                        <div class="ic-massage-item outgoing-message">
                            <div class="massage-avatar">
                                <img src="{{asset('/new-frontendv1/images/user_3.png')}}" alt="user avatar">
                                <div>
                                    <p>Albert Flores <span>35 mins</span></p>
                                </div>
                            </div>
                            <div class="message-content">
                                Thank you so much. These files are very important to me. I guess you didn't make any changes to these files. So I need the original versions of these files. Thank you very much again.
                            </div>
                        </div>
                    </div>
                    <div class="ic-chat-send-box">
                        <textarea class="form-control" placeholder="Type a Message"></textarea>
                        <button><span>Send Message</span> <i class="ri-arrow-right-line"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- chat box end --}}


@endsection

@push('scripts')
@endpush