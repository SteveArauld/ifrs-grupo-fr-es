@extends('emails.layout', ['locale' => $data['locale'], 'footerNote' => __('pages.mail.contact_admin.footer_note', [], $data['locale'])])

@section('title', __('pages.mail.contact_admin.subject', ['name' => $data['name']], $data['locale']))

@section('content')
    <p style="margin:0 0 4px; font-size:18px; font-weight:bold; color:#05062b;">
        {{ __('pages.mail.contact_admin.title', [], $data['locale']) }}
    </p>
    <p style="margin:0 0 26px; font-size:14px; line-height:22px; color:#4a4d5e;">
        {{ __('pages.mail.contact_admin.intro', [], $data['locale']) }}
    </p>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="font-size:14px; color:#05062b; margin-bottom:24px;">
        <tr>
            <td style="padding:8px 0; width:30%; color:#8a8d9e; border-top:1px solid #e8ecef;">{{ __('pages.mail.contact_admin.field_name', [], $data['locale']) }}</td>
            <td style="padding:8px 0; font-weight:bold; border-top:1px solid #e8ecef;">{{ $data['name'] }}</td>
        </tr>
        <tr>
            <td style="padding:8px 0; width:30%; color:#8a8d9e; border-top:1px solid #e8ecef;">{{ __('pages.mail.contact_admin.field_email', [], $data['locale']) }}</td>
            <td style="padding:8px 0; font-weight:bold; border-top:1px solid #e8ecef;">{{ $data['email'] }}</td>
        </tr>
        @if (! empty($data['phone']))
            <tr>
                <td style="padding:8px 0; width:30%; color:#8a8d9e; border-top:1px solid #e8ecef;">{{ __('pages.mail.contact_admin.field_phone', [], $data['locale']) }}</td>
                <td style="padding:8px 0; font-weight:bold; border-top:1px solid #e8ecef;">{{ $data['phone'] }}</td>
            </tr>
        @endif
        <tr>
            <td style="padding:8px 0; width:30%; color:#8a8d9e; border-top:1px solid #e8ecef;">{{ __('pages.mail.contact_admin.field_subject', [], $data['locale']) }}</td>
            <td style="padding:8px 0; font-weight:bold; border-top:1px solid #e8ecef;">{{ $data['subject'] }}</td>
        </tr>
        <tr>
            <td style="padding:8px 0; width:30%; color:#8a8d9e; border-top:1px solid #e8ecef;">{{ __('pages.mail.contact_admin.field_submitted_at', [], $data['locale']) }}</td>
            <td style="padding:8px 0; font-weight:bold; border-top:1px solid #e8ecef;">{{ now()->format('d/m/Y H:i') }}</td>
        </tr>
    </table>

    <p style="margin:0 0 10px; font-size:13px; font-weight:bold; letter-spacing:.5px; text-transform:uppercase; color:#f71735;">
        {{ __('pages.mail.contact_admin.field_message', [], $data['locale']) }}
    </p>
    <p style="margin:0; font-size:14px; line-height:22px; color:#05062b; white-space:pre-line;">{{ $data['message'] }}</p>
@endsection
