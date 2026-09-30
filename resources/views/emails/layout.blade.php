<!DOCTYPE html>
<html lang="{{ $locale ?? app()->getLocale() }}">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>@yield('title', 'Horizon Crédit')</title>
</head>
<body style="margin:0; padding:0; background-color:#f2f3f7; font-family: Arial, Helvetica, sans-serif;">
<table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f2f3f7; padding:30px 0;">
    <tr>
        <td align="center">
            <table role="presentation" width="600" cellpadding="0" cellspacing="0" style="background-color:#ffffff; border-radius:4px; overflow:hidden; box-shadow:0 2px 10px rgba(5,6,43,.08);">
                <!-- header / logo -->
                <tr>
                    <td style="background-color:#05062b; padding:28px 40px;" align="left">
                        <img src="{{ asset('assets/images/logooo.png') }}" alt="Horizon Crédit" height="36" style="display:block; height:36px; border:0;">
                    </td>
                </tr>

                <!-- accent bar -->
                <tr>
                    <td style="background-color:#f71735; height:4px; line-height:4px; font-size:0;">&nbsp;</td>
                </tr>

                <!-- content -->
                <tr>
                    <td style="padding:40px;">
                        @yield('content')
                    </td>
                </tr>

                <!-- footer -->
                <tr>
                    <td style="background-color:#05062b; padding:26px 40px; color:rgba(255,255,255,.65); font-size:12px; line-height:20px;">
                        <table role="presentation" width="100%" cellpadding="0" cellspacing="0">
                            <tr>
                                <td style="color:#ffffff; font-weight:bold; font-size:13px; padding-bottom:6px;">Horizon Crédit</td>
                            </tr>
                            <tr>
                                <td>Rua Castilho 39, 1250-096 Lisboa, Portugal</td>
                            </tr>
                            <tr>
                                <td>
                                    <a href="mailto:contact@horizoncredit.fr" style="color:rgba(255,255,255,.65); text-decoration:none;">contact@horizoncredit.fr</a>
                                    &nbsp;&middot;&nbsp;
                                    +35 191 223 8950
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
            <table role="presentation" width="600" cellpadding="0" cellspacing="0">
                <tr>
                    <td style="padding:16px 40px; color:#9a9dae; font-size:11px; text-align:center;">
                        &copy; {{ date('Y') }} Horizon Crédit. {{ $footerNote ?? '' }}
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
</body>
</html>
