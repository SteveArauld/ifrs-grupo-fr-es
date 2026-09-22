@extends('emails.layout', ['locale' => $submission->locale, 'footerNote' => __('pages.mail.confirmation.footer_note', [], $submission->locale)])

@section('title', __('pages.mail.confirmation.subject', [], $submission->locale))

@section('content')
    <p style="margin:0 0 18px; font-size:16px; color:#05062b; font-weight:bold;">
        {{ __('pages.mail.confirmation.greeting', ['name' => $submission->first_name.' '.$submission->name], $submission->locale) }}
    </p>

    <p style="margin:0 0 26px; font-size:14px; line-height:24px; color:#4a4d5e;">
        {{ __('pages.mail.confirmation.intro', [], $submission->locale) }}
    </p>

    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="background-color:#f7f8fb; border-radius:4px; margin-bottom:26px;">
        <tr>
            <td style="padding:20px 24px;">
                <p style="margin:0 0 14px; font-size:13px; font-weight:bold; letter-spacing:.5px; text-transform:uppercase; color:#f71735;">
                    {{ __('pages.mail.confirmation.summary_title', [], $submission->locale) }}
                </p>
                <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="font-size:14px; color:#05062b;">
                    <tr>
                        <td style="padding:6px 0; color:#8a8d9e;">{{ __('pages.mail.confirmation.field_reference', [], $submission->locale) }}</td>
                        <td style="padding:6px 0; text-align:right; font-weight:bold;">#{{ str_pad($submission->id, 6, '0', STR_PAD_LEFT) }}</td>
                    </tr>
                    <tr>
                        <td style="padding:6px 0; color:#8a8d9e; border-top:1px solid #e8ecef;">{{ __('pages.mail.confirmation.field_amount', [], $submission->locale) }}</td>
                        <td style="padding:6px 0; text-align:right; font-weight:bold; border-top:1px solid #e8ecef;">{{ $submission->loan_amount }} €</td>
                    </tr>
                    <tr>
                        <td style="padding:6px 0; color:#8a8d9e; border-top:1px solid #e8ecef;">{{ __('pages.mail.confirmation.field_duration', [], $submission->locale) }}</td>
                        <td style="padding:6px 0; text-align:right; font-weight:bold; border-top:1px solid #e8ecef;">{{ $submission->loan_duration }}</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <p style="margin:0 0 8px; font-size:14px; font-weight:bold; color:#05062b;">
        {{ __('pages.mail.confirmation.next_title', [], $submission->locale) }}
    </p>
    <p style="margin:0 0 30px; font-size:14px; line-height:24px; color:#4a4d5e;">
        {{ __('pages.mail.confirmation.next_text', [], $submission->locale) }}
    </p>

    <p style="margin:0; font-size:14px; color:#4a4d5e;">
        {{ __('pages.mail.confirmation.closing', [], $submission->locale) }}<br>
        <strong style="color:#05062b;">{{ __('pages.mail.confirmation.signature', [], $submission->locale) }}</strong>
    </p>
@endsection
