<?php
$seenIcon = (!!$seen ? 'check-double' : 'check');
$timeAndSeen = "<span data-time='$created_at' class='message-time'>
        ".($isSender ? "<span class='fas fa-$seenIcon' seen'></span>" : '' )." <span class='time'>$timeAgo</span>
    </span>";
?>

<div class="message-card @if($isSender) mc-sender outgoing-massage @endif" data-id="{{ $id }}">
    {{-- Delete Message Button --}}
    {{-- @if ($isSender)
        <div class="actions">
            <i class="fas fa-trash delete-btn" data-id="{{ $id }}"></i>
        </div>
    @endif --}}
    {{-- Card --}}
    <div class="message-card-content">
        <div class="ic-massage-item">
            @if (@$attachment->type != 'image' || $message)
            <div class="massage-avatar">
                <img src="{{$isSender ? getStoreFile(auth()->user()->avatar, auth()->user()->storage_type) : $from_user_avatar  }}" alt="user avatar">
                <div>
                    <p>{{$isSender ? auth()->user()->first_name : $from_user  }}</p>
                </div>
            </div>
            <div class="message-content">
                {!! ($message == null && $attachment != null && @$attachment->type != 'file') ? $attachment->title : nl2br($message) !!}
               
                {{-- If attachment is a file --}}
                @if(@$attachment->type == 'file')
                <a href="{{ route(config('chatify.attachments.download_route_name'), ['fileName'=>$attachment->file]) }}" class="file-download">
                    <span class="fas fa-file"></span> {{$attachment->title}}</a>
                @endif
            </div>
            {!! $timeAndSeen !!}
            @endif
            @if(@$attachment->type == 'image')
            <div class="image-wrapper" style="text-align: {{$isSender ? 'end' : 'start'}}">
                <div class="image-file chat-image" style="background-image: url('{{ Chat::getAttachmentUrl($attachment->file) }}')">
                    <div>{{ $attachment->title }}</div>
                </div>
                <div style="margin-bottom:5px">
                    {!! $timeAndSeen !!}
                </div>
            </div>
            @endif
        </div>
        
    </div>
</div>
