@extends('emails.layout', ['locale' => $submission->locale, 'footerNote' => __('pages.mail.admin.footer_note', [], $submission->locale)])

@section('title', __('pages.mail.admin.subject', ['name' => $submission->first_name.' '.$submission->name], $submission->locale))

@php
    $rows = [
        ['field_civility', $submission->civility],
        ['field_name', $submission->name],
        ['field_first_name', $submission->first_name],
        ['field_email', $submission->email],
        ['field_phone', $submission->phone],
        ['field_country', $submission->country],
        ['field_postal_code', $submission->postal_code],
        ['field_city', $submission->city],
    ];
    $loanRows = [
        ['field_amount', $submission->loan_amount.' €'],
        ['field_duration', $submission->loan_duration],
    ];
@endphp

@section('content')
    <p style="margin:0 0 4px; font-size:18px; font-weight:bold; color:#05062b;">
        {{ __('pages.mail.admin.title', [], $submission->locale) }}
    </p>
    <p style="margin:0 0 26px; font-size:14px; line-height:22px; color:#4a4d5e;">
        {{ __('pages.mail.admin.intro', [], $submission->locale) }}
    </p>

    <p style="margin:0 0 10px; font-size:13px; font-weight:bold; letter-spacing:.5px; text-transform:uppercase; color:#f71735;">
        {{ __('pages.mail.admin.section_applicant', [], $submission->locale) }}
    </p>
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="font-size:14px; color:#05062b; margin-bottom:24px;">
        @foreach ($rows as [$label, $value])
            <tr>
                <td style="padding:8px 0; width:40%; color:#8a8d9e; border-top:1px solid #e8ecef;">{{ __('pages.mail.admin.'.$label, [], $submission->locale) }}</td>
                <td style="padding:8px 0; font-weight:bold; border-top:1px solid #e8ecef;">{{ $value }}</td>
            </tr>
        @endforeach
    </table>

    <p style="margin:0 0 10px; font-size:13px; font-weight:bold; letter-spacing:.5px; text-transform:uppercase; color:#f71735;">
        {{ __('pages.mail.admin.section_loan', [], $submission->locale) }}
    </p>
    <table role="presentation" width="100%" cellpadding="0" cellspacing="0" style="font-size:14px; color:#05062b; margin-bottom:24px;">
        @foreach ($loanRows as [$label, $value])
            <tr>
                <td style="padding:8px 0; width:40%; color:#8a8d9e; border-top:1px solid #e8ecef;">{{ __('pages.mail.admin.'.$label, [], $submission->locale) }}</td>
                <td style="padding:8px 0; font-weight:bold; border-top:1px solid #e8ecef;">{{ $value }}</td>
            </tr>
        @endforeach
        <tr>
            <td style="padding:8px 0; width:40%; color:#8a8d9e; border-top:1px solid #e8ecef;">{{ __('pages.mail.admin.field_locale', [], $submission->locale) }}</td>
            <td style="padding:8px 0; font-weight:bold; border-top:1px solid #e8ecef;">{{ strtoupper($submission->locale) }}</td>
        </tr>
        <tr>
            <td style="padding:8px 0; width:40%; color:#8a8d9e; border-top:1px solid #e8ecef;">{{ __('pages.mail.admin.field_submitted_at', [], $submission->locale) }}</td>
            <td style="padding:8px 0; font-weight:bold; border-top:1px solid #e8ecef;">{{ $submission->created_at->format('d/m/Y H:i') }}</td>
        </tr>
    </table>

    <a href="mailto:{{ $submission->email }}" style="display:inline-block; background-color:#f71735; color:#ffffff; text-decoration:none; font-size:13px; font-weight:bold; letter-spacing:.5px; text-transform:uppercase; padding:12px 26px; border-radius:2px;">
        {{ __('pages.mail.admin.field_email', [], $submission->locale) }}: {{ $submission->email }}
    </a>
@endsection
