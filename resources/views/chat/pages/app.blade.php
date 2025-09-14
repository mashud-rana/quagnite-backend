@extends('layouts.chat-master')
<title>{{ config('chatify.name') }}</title>

{{-- Meta tags --}}
<meta name="id" content="{{ $id }}">
<meta name="messenger-color" content="{{ $messengerColor }}">
<meta name="messenger-theme" content="{{ $dark_mode }}">
<meta name="url" content="{{ url('') . '/' . config('chatify.routes.prefix') }}" data-user="{{ Auth::user()->uuid }}">
@push('styles')
    <link rel='stylesheet' href='https://unpkg.com/nprogress@0.2.0/nprogress.css' />
    <link href="{{ asset('css/chat/style.css') }}" rel="stylesheet" />
    <link href="{{ asset('css/chat/' . $dark_mode . '.mode.css') }}" rel="stylesheet" />

    {{-- Setting messenger primary color to css --}}
    <style>
        :root {
            --primary-color: {{ $messengerColor }};
        }
    </style>
@endpush
@section('content')
    <section class="my-bootcamps-main">
        <div class="container">
            <div class="section-headers">
                <div>
                    <h3 class="fs-30 fw-700 pb-lg-3 pb-2">All Messages</h3>
                    <p class="color-deep-gray">All The Classes that you are watching all over the time</p>
                </div>
            </div>
            <div class="mt-4 mb-3">
                <div class="messenger ic-chat-conversation">
                    {{-- ----------------------Users/Groups lists side---------------------- --}}
                    <div class="messenger-listView {{ !!$id ? 'conversation-active' : '' }}">
                        {{-- Header and search bar --}}
                        <div class="m-header ic-chat-search">
                            {{-- Search input --}}
                            <input type="text" class="messenger-search" placeholder="Search" />
                            {{-- Tabs --}}
                        </div>
                        {{-- tabs and lists --}}
                        <div class="m-body contacts-container ic-chat-users">
                            {{-- Lists [Users/Group] --}}
                            {{-- ---------------- [ User Tab ] ---------------- --}}
                            <div class="show messenger-tab users-tab app-scroll" data-view="users">
                                {{-- Favorites --}}
                                <div class="favorites-section">
                                    <p class="messenger-title"><span>Favorites</span></p>
                                    <div class="messenger-favorites app-scroll-hidden"></div>
                                </div>
                                <p class="messenger-title"><span>All Messages</span></p>
                                <div class="listOfContacts"
                                    style="width: 100%;height: calc(100% - 272px);position: relative;">
                                </div>
                            </div>
                            {{-- ---------------- [ Search Tab ] ---------------- --}}
                            <div class="messenger-tab search-tab app-scroll" data-view="search">
                                {{-- items --}}
                                <p class="messenger-title"><span>Search</span></p>
                                <div class="search-records">
                                    <p class="message-hint center-el"><span>Type to search..</span></p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- ----------------------Messaging side---------------------- --}}
                    <div class="messenger-messagingView">
                        {{-- header title [conversation name] amd buttons --}}
                        <div class="m-header m-header-messaging">
                            <nav class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                                {{-- header back button, avatar and user name --}}
                                <div class="chatify-d-flex chatify-justify-content-between chatify-align-items-center">
                                    <a href="#" class="show-listView"><i class="fas fa-arrow-left"></i></a>
                                    <div class="avatar av-s header-avatar"
                                        style="margin: 0px 10px; margin-top: -5px; margin-bottom: -5px;">
                                    </div>
                                    <a href="#" class="user-name">{{ config('chatify.name') }}</a>
                                </div>
                                {{-- header buttons --}}
                                <nav class="m-header-right">
                                    <a href="#" class="add-to-favorite"><i class="fas fa-star"></i></a>
                                    {{-- <a href="{{ route(auth()->user()->user_type . '.dashboard') }}"><i class="fas fa-home"></i></a> --}}

                                    <a href="#" class="show-infoSide"><i class="fas fa-info-circle"></i></a>
                                </nav>
                            </nav>
                        </div>

                        {{-- Messaging area --}}
                        <div class="m-body messages-container app-scroll">
                            <div class="messages ic-chat-box">
                                <p class="message-hint center-el"><span>Please select a chat to start messaging</span></p>
                            </div>
                            {{-- Typing indicator --}}
                            <div class="typing-indicator">
                                <div class="message-card typing">
                                    <div class="message">
                                        <span class="typing-dots">
                                            <span class="dot dot-1"></span>
                                            <span class="dot dot-2"></span>
                                            <span class="dot dot-3"></span>
                                        </span>
                                    </div>
                                </div>
                            </div>

                        </div>
                        {{-- Send Message Form --}}
                        @include('chat.layouts.sendForm')
                    </div>
                    {{-- ---------------------- Info side ---------------------- --}}
                    <div class="messenger-infoView app-scroll">
                        <nav>
                            <p>User Details</p>
                            <a href="#"><i class="fas fa-times"></i></a>
                        </nav>
                        {!! view('chat.layouts.info')->render() !!}
                    </div>
                </div>
            </div>
        </div>
    </section>
    @include('chat.layouts.modals')
@endsection

@push('scripts')
    <script src="{{ asset('js/chat/font.awesome.min.js') }}"></script>
    <script src="{{ asset('js/chat/autosize.js') }}"></script>
    <script src='https://unpkg.com/nprogress@0.2.0/nprogress.js'></script>
    <script src="https://js.pusher.com/7.2.0/pusher.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@joeattardi/emoji-button@3.0.3/dist/index.min.js"></script>
    <script>
        // Gloabl Chatify variables from PHP to JS
        window.chatify = {
            name: "{{ config('chatify.name') }}",
            sounds: {!! json_encode(config('chatify.sounds')) !!},
            allowedImages: {!! json_encode(config('chatify.attachments.allowed_images')) !!},
            allowedFiles: {!! json_encode(config('chatify.attachments.allowed_files')) !!},
            maxUploadSize: {{ Chatify::getMaxUploadSize() }},
            pusher: {!! json_encode(config('chatify.pusher')) !!},
            pusherAuthEndpoint: '{{ route('pusher.auth') }}'
        };
        window.chatify.allAllowedExtensions = chatify.allowedImages.concat(chatify.allowedFiles);
    </script>
    <script src="{{ asset('js/chat/utils.js') }}"></script>
    <script src="{{ asset('js/chat/code.js') }}"></script>
@endpush
