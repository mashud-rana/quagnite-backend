@extends('layouts.master-user')

@push('styles')
@endpush

@section('content')
    <ansible-playground />
@endsection

@push('scripts')
    {{-- Vue Script --}}
    <script src="{{ asset('js/app.js') }}"></script>
    {{-- Vue Script --}}
    <script>
        function fullscreen() {
            let fullScreenBtn = document.querySelector('.btn-fullscreen');
            var isInFullScreen = (document.fullscreenElement && document.fullscreenElement !== null) ||
                (document.webkitFullscreenElement && document.webkitFullscreenElement !== null) ||
                (document.mozFullScreenElement && document.mozFullScreenElement !== null) ||
                (document.msFullscreenElement && document.msFullscreenElement !== null);

            var docElm = document.querySelector('.ic-codePlayground--right');
            if (!isInFullScreen) {
                if (docElm.requestFullscreen) {
                    docElm.requestFullscreen();
                    fullScreenBtn.classList.add('active');
                } else if (docElm.mozRequestFullScreen) {
                    docElm.mozRequestFullScreen();
                } else if (docElm.webkitRequestFullScreen) {
                    docElm.webkitRequestFullScreen();
                } else if (docElm.msRequestFullscreen) {
                    docElm.msRequestFullscreen();
                }

            } else {
                if (document.exitFullscreen) {
                    fullScreenBtn.classList.remove('active');
                    document.exitFullscreen();
                } else if (document.webkitExitFullscreen) {
                    document.webkitExitFullscreen();
                } else if (document.mozCancelFullScreen) {
                    document.mozCancelFullScreen();
                } else if (document.msExitFullscreen) {
                    document.msExitFullscreen();
                }
            }
        }
    </script>
@endpush
