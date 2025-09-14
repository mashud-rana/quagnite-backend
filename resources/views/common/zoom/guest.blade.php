<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <title>Mcdns Live</title>

    <!-- For Client View -->
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/3.1.0/css/bootstrap.css" />
    <link type="text/css" rel="stylesheet" href="https://source.zoom.us/3.1.0/css/react-select.css" />

    <style>
        html,
        body {
            min-width: 0 !important;
        }

        #zmmtg-root {
            display: none;
        }

        main {
            width: 70%;
            margin: auto;
            text-align: center;
        }

        main button {
            margin-top: 20px;
            background-color: #2D8CFF;
            color: #ffffff;
            text-decoration: none;
            padding-top: 10px;
            padding-bottom: 10px;
            padding-left: 40px;
            padding-right: 40px;
            display: inline-block;
            border-radius: 10px;
            cursor: pointer;
            border: none;
            outline: none;
        }

        main button:hover {
            background-color: #2681F2;
        }
    </style>

    <!-- Origin Trials to enable Gallery View in Chrome/Edge -->
    <!-- More Info: https://developers.zoom.us/docs/meeting-sdk/web/gallery-view/ -->
    <!-- SharedArrayBuffers in non-isolated pages on Desktop platforms -->
    <meta http-equiv="origin-trial" content="">
</head>

<body>

    {{-- <main>
        <h1>Mcdns Coaching Live Session</h1>

        <!-- For Component View -->
        <div id="meetingSDKElement">
            <!-- Zoom Meeting SDK Rendered Here -->
        </div>

        <button onClick="startMeeting()">Join Meeting</button>
    </main> --}}

    <!-- For Component and Client View -->
    <script src="https://source.zoom.us/3.1.0/lib/vendor/react.min.js"></script>
    <script src="https://source.zoom.us/3.1.0/lib/vendor/react-dom.min.js"></script>
    <script src="https://source.zoom.us/3.1.0/lib/vendor/redux.min.js"></script>
    <script src="https://source.zoom.us/3.1.0/lib/vendor/redux-thunk.min.js"></script>
    <script src="https://source.zoom.us/3.1.0/lib/vendor/lodash.min.js"></script>

    <!-- For Client View -->
    <script src="https://source.zoom.us/zoom-meeting-3.1.0.min.js"></script>
    <script type="text/javascript">
        ZoomMtg.setZoomJSLib('https://source.zoom.us/3.1.0/lib', '/av')

        ZoomMtg.preLoadWasm()
        ZoomMtg.prepareWebSDK()
        // loads language files, also passes any error messages to the ui
        ZoomMtg.i18n.load('en-US')
        ZoomMtg.i18n.reload('en-US')

        function startMeeting() {

            document.getElementById('zmmtg-root').style.display = 'block'

            ZoomMtg.init({

                leaveUrl: "{{ $meeting['leaveUrl'] }}",

                success: (success) => {

                    console.log(success)

                    ZoomMtg.join({
                        sdkKey: "{{ $meeting['key'] }}",
                        signature: "{{ $meeting['signature'] }}",
                        meetingNumber: "{{ $meeting['meetingNumber'] }}",
                        passWord: "{{ $meeting['password'] }}",
                        userName: "{{ $meeting['userName'] }}",
                        userEmail: "{{ $meeting['userEmail'] }}",
                        // tk: registrantToken,
                        success: (success) => {
                            console.log(success)
                        },
                        error: (error) => {
                            console.log(error)
                        },
                    })
                },
                error: (error) => {
                    console.log(error)
                }
            })
        }

        startMeeting();
    </script>
</body>

</html>
