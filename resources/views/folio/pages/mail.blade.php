<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ __('folio.meta.mail') }}</title>
</head>
<body style="margin:0;padding:0;background:#f4f6f8;font-family:Arial,Helvetica,sans-serif;color:#1f2937;">
    <table role="presentation" cellpadding="0" cellspacing="0" width="100%">
        <tr>
            <td align="center" style="padding:32px 16px;">
                <table role="presentation" cellpadding="0" cellspacing="0" width="100%"
                    style="max-width:600px;background:#ffffff;border-radius:12px;overflow:hidden;box-shadow:0 6px 24px rgba(15,23,42,0.08);">
                    <tr>
                        <td style="background:linear-gradient(135deg,#0ea5e9,#6366f1);padding:24px 28px;color:#ffffff;">
                            <div style="font-size:12px;letter-spacing:0.12em;text-transform:uppercase;opacity:0.9;">
                                {{ __('folio.mail.kicker') }}
                            </div>
                            <div style="font-size:24px;font-weight:700;margin-top:6px;">
                                {{ __('folio.mail.title') }}
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:24px 28px;">
                            <div style="font-size:16px;font-weight:600;margin-bottom:6px;">
                                {{ $mailData['name'] }}
                            </div>
                            <div style="font-size:14px;color:#475569;margin-bottom:16px;">
                                {{ $mailData['email'] }}
                            </div>
                            <div style="padding:12px 14px;background:#f8fafc;border:1px solid #e2e8f0;border-radius:10px;">
                                <div style="font-size:12px;text-transform:uppercase;letter-spacing:0.08em;color:#64748b;">
                                    {{ __('folio.mail.subject_label') }}
                                </div>
                                <div style="font-size:15px;color:#0f172a;margin-top:6px;">
                                    {{ $mailData['subject'] }}
                                </div>
                            </div>
                            <div style="margin-top:18px;">
                                <div style="font-size:12px;text-transform:uppercase;letter-spacing:0.08em;color:#64748b;margin-bottom:6px;">
                                    {{ __('folio.mail.message_label') }}
                                </div>
                                <div style="font-size:15px;line-height:1.6;color:#0f172a;white-space:pre-line;">
                                    {{ $mailData['message'] }}
                                </div>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td style="padding:18px 28px;background:#f8fafc;border-top:1px solid #e2e8f0;font-size:12px;color:#64748b;">
                            {{ __('folio.mail.footer_note') }}
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</body>
</html>
