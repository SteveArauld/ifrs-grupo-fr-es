@extends('emails.layout', ['locale' => $data['locale'], 'footerNote' => __('pages.mail.contact_confirmation.footer_note', [], $data['locale'])])

@section('title', __('pages.mail.contact_confirmation.subject', [], $data['locale']))

@section('content')
    <p style="margin:0 0 18px; font-size:16px; color:#05062b; font-weight:bold;">
        {{ __('pages.mail.contact_confirmation.greeting', ['name' => $data['name']], $data['locale']) }}
    </p>

    <p style="margin:0 0 26px; font-size:14px; line-height:24px; color:#4a4d5e;">
        {{ __('pages.mail.contact_confirmation.intro', [], $data['locale']) }}
    </p>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f7f8fb; border-radius:4px; margin-bottom:26px;">
        <tr>
            <td style="padding:20px 24px;">
                <p style="margin:0 0 14px; font-size:13px; font-weight:bold; letter-spacing:.5px; text-transform:uppercase; color:#f71735;">
                    {{ __('pages.mail.contact_confirmation.summary_title', [], $data['locale']) }}
                </p>
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="font-size:14px; color:#05062b;">
                    <tr>
                        <td style="padding:6px 0; color:#8a8d9e;">{{ __('pages.mail.contact_confirmation.field_subject', [], $data['locale']) }}</td>
                        <td style="padding:6px 0; text-align:right; font-weight:bold;">{{ $data['subject'] }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <p style="margin:0 0 30px; font-size:14px; line-height:24px; color:#4a4d5e;">
        {{ __('pages.mail.contact_confirmation.next_text', [], $data['locale']) }}
    </p>

    <p style="margin:0; font-size:14px; color:#4a4d5e;">
        {{ __('pages.mail.contact_confirmation.closing', [], $data['locale']) }}<br>
        <strong style="color:#05062b;">{{ __('pages.mail.contact_confirmation.signature', [], $data['locale']) }}</strong>
    </p>
@endsection
