<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Verification</title>
    <style>
        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Helvetica, Arial, sans-serif;
            background-color: #edf2f7;
            margin: 0;
            padding: 0;
        }
        .wrapper {
            width: 100%;
            background-color: #edf2f7;
        }
        .content {
            max-width: 570px;
            margin: 0 auto;
            background-color: #ffffff;
            border-radius: 2px;
            border: 1px solid #e8e5ef;
            box-shadow: 0 2px 0 rgba(0, 0, 150, 0.025), 2px 4px 0 rgba(0, 0, 150, 0.015);
        }
        .header {
            padding: 25px 0;
            text-align: center;
        }
        .logo {
            height: 75px;
            width: 75px;
        }
        .body {
            padding: 32px;
        }
        h1 {
            color: #3d4852;
            font-size: 18px;
            font-weight: bold;
            margin-top: 0;
        }
        p {
            font-size: 16px;
            line-height: 1.5em;
            margin-top: 0;
        }
        .btn-box {
            display: inline-block;
            background-color: #2d3748;
            color: #ffffff !important;
            padding: 12px 24px;
            border-radius: 6px;
            font-size: 16px;
            text-decoration: none;
            margin: 20px 0;
        }
        .footer {
            text-align: center;
            padding: 32px;
            color: #b0adc5;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <table class="wrapper" width="100%" cellpadding="0" cellspacing="0" role="presentation">
        <tr>
            <td align="center">
                <table class="content" width="100%" cellpadding="0" cellspacing="0" role="presentation">
                    <!-- Header -->
                    <tr>
                        <td class="header">
                            <a href="/" target="_blank" rel="noopener noreferrer">
                                <img src="{{ getStoreFile(config('settings.site_logo')) }}" class="logo" alt="Logo">
                            </a>
                        </td>
                    </tr>

                    <!-- Email Body -->
                    <tr>
                        <td class="body">
                            <h1>Hi {{ $user->first_name." ".$user->last_name }}</h1>

                            <p>Thank you for registering with <strong>{{ config('settings.site_title') ?? env('APP_NAME', 'Laravel') }}</strong>.</p>

                            <p>Please verify your email address by clicking the button below.</p>

                            <!-- Verification Button -->
                            <p style="text-align: center;">
                                <a href="{{ $url }}" class="btn-box" target="_blank">Verify Email</a>
                            </p>

                            <p>If you did not create an account, no further action is required.</p>

                            <p>Best regards,<br>
                            {{ config('settings.site_title') ?? env('APP_NAME', 'Laravel') }}</p>
                        </td>
                    </tr>

                    <!-- Footer -->
                    <tr>
                        <td>
                            <table class="footer" align="center" width="570" cellpadding="0" cellspacing="0" role="presentation">
                                <tr>
                                    <td class="content-cell" align="center">
                                        © {{ date('Y') }}
                                        {{ config('settings.site_title') }} — Design & Developed by
                                        <a href="https://itclanbd.com" target="_blank">ITclan BD</a>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
