<!DOCTYPE html>
<html lang="en">
{{-- @dd('sani') --}}

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="x-apple-disable-message-reformatting">
    <title>MCDNS Email</title>

    <link href="https://fonts.googleapis.com/css?family=Roboto:400,600" rel="stylesheet" type="text/css">



    <style>
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
            font-family: 'Roboto', sans-serif !important;
            font-size: 13px;
            margin-bottom: 10px;
            line-height: 24px;
            color: #8094ae;
            font-weight: 400;
        }

        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
            margin: 0;
            padding: 0;
        }

        a {
            text-decoration: none;
        }

        img {
            -ms-interpolation-mode: bicubic;
        }
    </style>
</head>

<body width="100%"
    style="margin: 0; padding: 0 !important; -mso-line-height-rule: exactly; background-color: #f9dce8; min-height: 100vh;">
    <center style="width: 100%; background-color: #f5f6fa;">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#f7e9d5" style="padding: 0 5px;">
            <tr>
                <td style="padding: 40px 0;" class="ic-table-simplebar-scrollbar">
                    <table style="width:100%;max-width:620px;margin:0 auto; background-color: #ecf0f1;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding: 30px 10px;">
                                    <a href="#" style="display: block; margin-bottom: 10px;">
                                        <img style="height: 40px" src="{{ asset('/admin') }}/images/login-logo.png"
                                            alt="logo"></a>
                                    <h3 style="color: #000;">Thanks For Joining MCDNS!</h3>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <table style="width:100%;max-width:620px;margin:0 auto; color:#9ea8bb;" cellpadding="0"
                        cellspacing="0" bgcolor="#ffffff">
                        <tbody>
                            <tr>
                                <td style="padding: 50px 30px 30px;">
                                    {{-- <p style="color: #000;">Hello {{ $first_name ? $first_name : 'User' }},</p> --}}
                                    <p style="color: #000;">Hello {{ $first_name }},</p>
                                    <p style="color: #000; margin-bottom: 8px">Please click the link below to confirm
                                        your account's email address:</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="margin: 30px 0; text-align: center;">
                                    <a href="{{ $url }}"
                                        style="color: #fff; text-align: center; background: linear-gradient(180deg, #2EB7D3 0.01%, #06738A 100%); border-radius: 5px; border: 0; padding: 14px 24px; display: inline-block; font-size: 16px;">Confirm
                                        Your Email</a>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 30px 30px 0;">
                                    <p style="color: #000; padding: 0 0 30px;">If you did not sign up for the MCDNS
                                        platform, please <strong>ignore this email.</strong></p>
                                </td>
                            </tr>

                            <tr>
                                <td style="padding: 30px 30px 0;">
                                    <p style="color: #000; padding: 0 0 30px; border-bottom: 2px solid #b8b8b8;">If the
                                        button doesn't work Copy and Paste the Link below
                                        the link
                                    </p>
                                    <p> {{ $url }}</p>
                                </td>
                            </tr>
                            <tr>
                                <td style="padding: 10px 30px 0;">
                                    <p style="color: #000; padding: 0 0 30px;">
                                        Sincerely, <br>
                                        The {{ config('settings.mail_from_name') }} Team
                                    </p>
                                </td>
                            </tr>
                            {{-- <tr>
                                <td style="padding: 30px 30px 50px;">
                                    <p style="color: #949494;">To avoid receiving any future emails, please manage your
                                        notification settings in your
                                        account or <a href="#" style="color: #5E28CD;">[Unsubscribe]!</a>
                                    </p>
                                </td>
                            </tr> --}}
                        </tbody>
                    </table>
                    <table style="width:100%;max-width:620px;margin:0 auto; background-color: #ecf0f1;">
                        <tbody>
                            <tr>
                                <td style="text-align: center; padding: 30px 10px;">
                                    <a href="#" style="display: block;">
                                        <img style="height: 40px" src="{{ asset('/admin') }}/images/login-logo.png"
                                            alt="logo">
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </td>
            </tr>
        </table>
    </center>
</body>

</html>
