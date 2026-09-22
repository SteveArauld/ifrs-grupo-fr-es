<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplyNowRequest;
use App\Mail\ApplicationAdminNotificationMail;
use App\Mail\ApplicationConfirmationMail;
use App\Models\ApplicationSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class PageController extends Controller
{
    public function home(): View
    {
        return view('pages.home');
    }

    public function aboutUs(): View
    {
        return view('pages.about-us');
    }

    public function applyNow(): View
    {
        return view('pages.apply-now');
    }

    public function gestions(): View
    {
        return view('pages.gestions');
    }

    public function legales(): View
    {
        return view('pages.legales');
    }

    public function condition(): View
    {
        return view('pages.condition');
    }

    public function nosCredits(): View
    {
        return view('pages.nos-credits');
    }

    public function storeApplication(ApplyNowRequest $request, string $locale): RedirectResponse
    {
        $validated = $request->validated();

        $submission = ApplicationSubmission::create([
            'locale' => $locale,
            'civility' => $validated['civ'],
            'name' => $validated['name'],
            'first_name' => $validated['first'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'country' => $validated['country'],
            'postal_code' => $validated['codpost'],
            'city' => $validated['city'],
            'loan_amount' => $validated['montantpret'],
            'loan_duration' => $validated['dureepret'],
        ]);

        Mail::to($submission->email)->send(new ApplicationConfirmationMail($submission));
        Mail::to(config('mail.admin_address'))->send(new ApplicationAdminNotificationMail($submission));

        return back()->with('success', __('pages.apply.success'));
    }
}
