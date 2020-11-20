<!DOCTYPE html>
<html>
<head>
    <title>Email Verification</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/spaces.css') }}">
</head>
<body>
    <table border="0" cellpadding="0" cellspacing="0" width="50%" align="center">
        <tr>
            <td bgcolor="#383F51" align="center">
                <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td align="center" height="50" align="top" style="padding: 40px 10px;">
                            <img src="https://i.ibb.co/qxhXBGW/shopporium.png" alt="{{ config('app.name') }}" width="100" height="100" align="center">
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#3C4F76" align="center" class="email-verification-account">
                <table border="0" cellpadding="0" cellspacing="0">
                    <tr>
                        <td align="center" valign="top" style="padding: 40px 20px 20px 20px; color: #DDDBF1; line-height: 48px;">
                            <h1 style="font-size: 30px; margin: 2px;">Welcome, {{ $user['first_name'] }} {{ $user['middle_name'] }} {{ $user['last_name'] }}!</h1>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <tr>
            <td bgcolor="#3C4F76" align="center" class="email-verification-account">
                <table border="0" cellpadding="0" cellspacing="0" width="100%">
                    <tr>
                        <td align="left" style="padding: 20px 30px 40px 30px; color: #DDDBF1; font-size: 18px; line-height: 25px;">
                            <p class="m-0">We're excited to have you get started. First, you need to confirm your account. Just press the button below.</p>
                        </td>
                    </tr>
                    <tr>
                        <td align="left">
                            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                <tr>
                                    <td align="center" style="padding: 20px 30px 60px 30px;">
                                        <table border="0" cellspacing="0" cellpadding="0">
                                            <tr>
                                                <td align="center" style="border-radius: 3px;">
                                                    <a href="{{ url('/verify', $user->token) }}" target="_blank" style="font-size: 20px; color: #383F51; text-decoration: none; padding: 15px 25px; border-radius: 2px; border: 1px solid #383F51; display: inline-block; background: #DDDBF1;">Confirm Account</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="padding: 0px 30px 0px 30px; color: #DDDBF1; font-size: 18px; font-weight: 400; line-height: 25px;">
                            <p class="m-0">If that doesn't work, copy and paste the following link in your browser:</p>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="padding: 20px 30px 20px 30px; color: #DDDBF1; font-size: 16px; line-height: 25px;">
                            <p class="m-0">
                                <a href="{{ url('/verify', $user->token) }}" target="_blank" style="color: #DDDBF1; text-decoration: none">{{ url('/verify', $user->token) }}</a>
                            </p>
                        </td>
                    </tr>
                    <tr>
                        <td align="left" style="padding: 0px 30px 40px 30px; color: #DDDBF1; font-size: 18px; line-height: 25px;">
                            <p class="m-0">Cheers, <br>{{ config('app.name') }}</p>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
