<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>New website enquiry</title>
</head>
<body style="margin:0;padding:0;background-color:#edf4ff;font-family:Arial,Helvetica,sans-serif;color:#13233a;">
    <div style="display:none;max-height:0;overflow:hidden;opacity:0;color:transparent;">
        New website enquiry from {{ $enquiry['name'] }}
    </div>

    <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="width:100%;background-color:#edf4ff;">
        <tr>
            <td align="center" style="padding:36px 14px;">
                <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="width:100%;max-width:680px;background-color:#ffffff;border:1px solid #dbe7f7;border-radius:20px;">
                    <tr>
                        <td align="center" style="padding:30px 32px 25px;background-color:#ffffff;border-radius:20px 20px 0 0;border-bottom:1px solid #e4ecf7;">
                            <img
                                src="{{ $message->embed(public_path('assets/img/logo_aa.png')) }}"
                                width="190"
                                alt="Eirecon Energy Company"
                                style="display:block;width:190px;max-width:100%;height:auto;border:0;"
                            >
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:34px 36px 10px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                <tr>
                                    <td style="padding:0 0 10px;color:#3374df;font-size:12px;font-weight:700;letter-spacing:1.6px;text-transform:uppercase;">
                                        Website contact form
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0 0 10px;">
                                        <h1 style="margin:0;color:#092c59;font-size:28px;line-height:1.25;font-weight:800;">New project enquiry</h1>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="padding:0 0 22px;color:#5c6d83;font-size:15px;line-height:1.65;">
                                        A visitor submitted the contact form on the Eirecon Energy website. Their complete details are shown below.
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td style="padding:0 36px 36px;">
                            <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0" style="width:100%;background-color:#f7faff;border:1px solid #dce8f8;border-radius:16px;">
                                <tr>
                                    <td style="padding:24px 24px 8px;">
                                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tr>
                                                <td style="padding:0 0 8px;color:#40536d;font-size:13px;font-weight:700;">Full name</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:14px 16px;background-color:#ffffff;border:1px solid #cddcf0;border-radius:10px;color:#152b47;font-size:16px;line-height:1.4;">
                                                    {{ $enquiry['name'] }}
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:12px 24px 8px;">
                                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tr>
                                                <td style="padding:0 0 8px;color:#40536d;font-size:13px;font-weight:700;">Email address</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:14px 16px;background-color:#ffffff;border:1px solid #cddcf0;border-radius:10px;color:#152b47;font-size:16px;line-height:1.4;">
                                                    <a href="mailto:{{ $enquiry['email'] }}" style="color:#2567cc;text-decoration:none;">{{ $enquiry['email'] }}</a>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:12px 24px 8px;">
                                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tr>
                                                <td style="padding:0 0 8px;color:#40536d;font-size:13px;font-weight:700;">Phone number</td>
                                            </tr>
                                            <tr>
                                                <td style="padding:14px 16px;background-color:#ffffff;border:1px solid #cddcf0;border-radius:10px;color:#152b47;font-size:16px;line-height:1.4;">
                                                    @if (!empty($enquiry['phone']))
                                                        <a href="tel:{{ preg_replace('/[^0-9+]/', '', $enquiry['phone']) }}" style="color:#2567cc;text-decoration:none;">{{ $enquiry['phone'] }}</a>
                                                    @else
                                                        <span style="color:#74849a;">Not provided</span>
                                                    @endif
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                                <tr>
                                    <td style="padding:12px 24px 24px;">
                                        <table role="presentation" width="100%" cellspacing="0" cellpadding="0" border="0">
                                            <tr>
                                                <td style="padding:0 0 8px;color:#40536d;font-size:13px;font-weight:700;">Project details</td>
                                            </tr>
                                            <tr>
                                                <td style="min-height:130px;padding:16px;background-color:#ffffff;border:1px solid #cddcf0;border-radius:10px;color:#253a55;font-size:15px;line-height:1.7;white-space:pre-wrap;">{{ $enquiry['comments'] }}</td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="padding:0 36px 34px;">
                            <a href="mailto:{{ $enquiry['email'] }}" style="display:inline-block;padding:14px 28px;background-color:#2f70db;border-radius:999px;color:#ffffff;font-size:14px;font-weight:700;text-decoration:none;">Reply to {{ $enquiry['name'] }}</a>
                        </td>
                    </tr>

                    <tr>
                        <td align="center" style="padding:20px 30px;background-color:#082b59;border-radius:0 0 20px 20px;color:#c9d8ec;font-size:12px;line-height:1.6;">
                            This notification was sent from the contact form on the Eirecon Energy website.<br>
                            Please reply directly to this email to contact the sender.
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
