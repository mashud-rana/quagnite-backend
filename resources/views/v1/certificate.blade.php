<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Certificates | MCDNS</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@400;500;600;700&display=swap"
        rel="stylesheet">

    <style>
        *{
            font-family: "Dancing Script", cursive;
        }
         
        @media print {
            .main-table {
                /* background-image: url({{ asset('new-frontendv1/images/certificate.jpg')}}) !important; */
                background-repeat: no-repeat;
                /* background-size: cover; */
                -webkit-print-color-adjust: exact;
            }
        }
    </style>
</head>

<body>
    <div class="table-responsive">
        <div class="ic-certificate-pdf"
            style="max-width: 600px; display : block; margin-left : auto; margin-right : auto;">
            <table class="main-table"
                style="padding-bottom: 30px; background-image: url({{ asset('new-frontendv1/images/certificate.jpg') }}) !important; width: 100%;  background-repeat: no-repeat;">
                <tr>
                    <td>
                        <table style="width: 100%">
                            <tr>
                                <td>
                                    <div style="padding-top: 70px; text-align: center;">
                                        <p
                                            style="margin: 0; padding-bottom: 2px; line-height: 16px; font-size: 12px; color: #255882">
                                            MCdns, LLCc
                                        </p>
                                        <p
                                            style="margin: 0; padding-bottom: 2px; line-height: 16px; font-size: 12px; color: #255882">
                                            Website: <a href="#"
                                                style="font-size: 12px; color: #009CBD; font-weight: 600;">www.mcdns.tech</a>
                                        </p>
                                        <p
                                            style="margin: 0; padding-bottom: 2px; line-height: 16px; font-size: 12px; color: #255882">
                                            Tel: <a href="#" style="font-size: 12px; color: #009CBD; font-weight: 600;">
                                                +1(267)406-8357</a>
                                        </p>
                                    </div>
                                </td>
                            </tr>
                        </table>
                        <table style="width: 100%;">
                            {{-- name --}}
                            <tr>
                                <td>
                                    <h1
                                        style="font-size: 50px; line-height: 60px; color: #265780; font-family: 'Dancing Script', cursive; text-align: center; padding-top: 156px;">
                                        Jhon Doe
                                    </h1>
                                </td>
                            </tr>
                            {{-- body --}}
                            <tr>
                                <td>
                                    <p
                                        style="height: 102px;font-size: 13px; line-height: 17px; font-family: 'Dancing Script', cursive; padding: 0 70px; text-align: center;padding-top: 18px;">
                                        A certificate program is a specialized education designed to develop or
                                        strengthen specific career skills. A certificate program is considered
                                        continuing education in some cases because it builds on your knowledge of a
                                        particular career or industry. In other cases, it requires no prior education
                                        and can help you learn about a subject, career, or industry to pursue related
                                        jobs.
                                    </p>
                                </td>
                            </tr>
                            {{-- Founder --}}
                            <tr>
                                <td>
                                    <div style="text-align: center; padding-bottom: 10px;padding-top: 10px">
                                        <img src="{{ asset('new-frontendv1/images/logo-certificate.png') }}" style="    max-width: 240px;"
                                            alt="logos">
                                    </div>
                                    <p style="
                                                            padding: 0 81px; color: #265780;
                                                            font-size: 13px;
                                                            font-style: normal;
                                                            font-weight: 400;
                                                            text-align: center;
                                                            margin-top : 0;
                                                            ">
                                        Franck Kengne, Co-Founder and CEO
                                    </p>
                                </td>
                            </tr>
                            <tr>
                                <td style=" padding: 0px 80px 52px; height: 86px; vertical-align: bottom;">
                                    <table style="width: 100%;">
                                        <tr>
                                            {{-- Date --}}
                                            <td style="vertical-align: bottom;">
                                                <div style="width: 80px; text-align: center;">
                                                    <span
                                                        style="font-size: 13px; line-height: 17px; font-family: 'Dancing Script', cursive; text-align: center; color: #265780;">2023-12-14</span>
                                                    <div style="width: 80px; border-top: 1px solid #6F91AD;">
                                                    </div>
                                                    <span
                                                        style="font-size: 13px; line-height: 17px; font-family: 'Dancing Script', cursive; text-align: center; color: #265780;">Date</span>
                                                </div>
                                            </td>
                                            {{-- signature --}}
                                            <td style="vertical-align: bottom;">
                                                <div style="width: 100px; text-align: center; margin-left: auto">
                                                    <span
                                                        style="display :block;font-size: 13px; line-height: 1; font-family: 'Dancing Script', cursive; text-align: center; color: #265780;">
                                                        <img src="{{ asset('new-frontendv1/images/sakib_sign.png') }}" style="max-height: 40px;" alt="logos">
                                                    </span>
                                                    <div style="width: 80px; border-top: 1px solid #6F91AD;">
                                                    </div>
                                                    <span
                                                        style="font-size: 13px; line-height: 17px; font-family: 'Dancing Script', cursive; text-align: center; color: #265780;">
                                                        Signature</span>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </div>
    </div>
</body>

</html>