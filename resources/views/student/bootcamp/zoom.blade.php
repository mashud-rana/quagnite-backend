<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $meeting->meeting_name }}</title>
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.9.5/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/2.9.5/css/react-select.css" />
</head>
<style type="text/css">
    .navbar {
        background-color: #4894ff;
    }

    .navbar-header {
        padding: 7px 15px;
    }

    .navbar-form h4 {
        color: #ffffff;
    }

    .app-logo {
        max-height: 40px;
    }
</style>

<body>
    <nav id="nav-tool" class="navbar navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <img src="{{ asset('admin/images/logo.png') }}" alt="" height="17">
            </div>
            <div class="navbar-form navbar-right">
                <h4>{{ $meeting->meeting_name }}</h4>
            </div>
        </div>
    </nav>
    <script src="{{ asset('admin/libs/jquery/jquery.min.js') }}"></script>

    <!-- import ZoomMtg dependencies -->
    <script src="https://source.zoom.us/2.9.5/lib/vendor/react.min.js"></script>
    <script src="https://source.zoom.us/2.9.5/lib/vendor/react-dom.min.js"></script>
    <script src="https://source.zoom.us/2.9.5/lib/vendor/redux.min.js"></script>
    <script src="https://source.zoom.us/2.9.5/lib/vendor/redux-thunk.min.js"></script>
    <script src="https://source.zoom.us/2.9.5/lib/vendor/lodash.min.js"></script>

    <!-- import ZoomMtg -->
    <script src="https://source.zoom.us/zoom-meeting-2.9.5.min.js"></script>

    @php
        $user = auth()->user();
        $leaveUrl = route($user->user_type . '.dashboard');
    @endphp

    <script type="text/javascript">
        ZoomMtg.setZoomJSLib('https://source.zoom.us/2.9.5/lib', '/av');

        ZoomMtg.preLoadWasm();
        ZoomMtg.prepareJssdk();

        // loads language files, also passes any error messages to the ui
        ZoomMtg.i18n.load('en-US');
        ZoomMtg.i18n.reload('en-US');

        var meetConfig = {
            sdkKey: "{{ $zoomSetting->sdk_key }}",
            sdkSecret: "{{ $zoomSetting->sdk_secret }}",
            meetingNumber: "{{ $meeting->meeting_id }}",
            userName: "{{ $user->full_name }}",
            passWord: "{{ $zoomMeeting->password }}",
            leaveUrl: "{{ $leaveUrl }}",
            role: 0 // 1 is host 0 is student or others

        };
        var signature = ZoomMtg.generateSDKSignature({
            meetingNumber: meetConfig.meetingNumber,
            sdkKey: meetConfig.sdkKey,
            sdkSecret: meetConfig.sdkSecret,
            role: meetConfig.role,
            success: (res) => {
                console.log(res.result);
            }
        });
        ZoomMtg.init({
            leaveUrl: meetConfig.leaveUrl,
            success: () => {
                ZoomMtg.join({
                    meetingNumber: meetConfig.meetingNumber,
                    userName: meetConfig.userName,
                    signature: signature,
                    sdkKey: meetConfig.sdkKey,
                    passWord: meetConfig.passWord,
                    success: (res) => {
                        $('#nav-tool').hide();
                    },
                    error: (res) => {
                        console.log(res);
                    }
                });
            },
            error: (res) => {
                console.log(res);
            }
        });
    </script>
</body>

</html>
