@if ($lecture->lecture_format === LECTURE_FORMAT_VIDEO)
    <video controls>
        <source src="{{ getStoreFile($lecture->video_path, $lecture->storage_type) }}">
        Your browser does not support the audio tag.
    </video>
@elseif ($lecture->lecture_format === LECTURE_FORMAT_VIMEO)
    <div style="padding:56.25% 0 0 0;position:relative;">
        <iframe
            src="https://player.vimeo.com/video/{{ $lecture->vimeo_path }}?badge=0&amp;autopause=0&amp;player_id=0&amp;"
            frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
            style="position:absolute;top:0;left:0;width:100%;height:100%;">
        </iframe>
    </div>
@elseif ($lecture->lecture_format === LECTURE_FORMAT_PDF)
    <embed src="{{ getStoreFile($lecture->pdf_path, $lecture->storage_type) }}" type="" style="height: 100%;width: 100%;">
@elseif ($lecture->lecture_format === LECTURE_FORMAT_SLIDE)
    <iframe src='https://view.officeapps.live.com/op/embed.aspx?src={{ getStoreFile($lecture->slide_path, $lecture->storage_type) }}'
        width='100%' height='600px' frameborder='0'>
    @elseif ($lecture->lecture_format === LECTURE_FORMAT_IMAGE)
        <img src="{{ getStoreFile($lecture->image_path, $lecture->storage_type) }}" alt="">
    @elseif ($lecture->lecture_format === LECTURE_FORMAT_AUDIO)
        <audio controls>
            <source src="{{ getStoreFile($lecture->audio_path, $lecture->storage_type) }}" type="audio/ogg">
            <source src="{{ getStoreFile($lecture->audio_path, $lecture->storage_type) }}" type="audio/mpeg">
            Your browser does not support the audio tag.
        </audio>
@endif
