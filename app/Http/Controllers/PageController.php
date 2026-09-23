<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApplyNowRequest;
use App\Http\Requests\ContactRequest;
use App\Mail\ApplicationAdminNotificationMail;
use App\Mail\ApplicationConfirmationMail;
use App\Mail\ContactAdminNotificationMail;
use App\Mail\ContactConfirmationMail;
use App\Models\ApplicationSubmission;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Mail;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Redirect '/' to a locale, guessed from the visitor's IP on their first
     * visit (remembered afterwards via cookie so we don't call the API again).
     */
    public function redirectToDetectedLocale(Request $request): RedirectResponse
    {
        $locale = $request->cookie('preferred_locale');

        if (! in_array($locale, ['fr', 'es'], true)) {
            $locale = $this->detectLocaleFromIp($request->ip());
        }

        return redirect("/{$locale}")
            ->cookie(Cookie::make('preferred_locale', $locale, 60 * 24 * 30));
    }

    private function detectLocaleFromIp(?string $ip): string
    {
        try {
            $response = Http::timeout(2)->get("https://ipwho.is/{$ip}");

            if ($response->successful() && $response->json('success') !== false) {
                return $response->json('country_code') === 'ES' ? 'es' : 'fr';
            }
        } catch (\Throwable $e) {
            // network/API failure - fall through to the default below.
        }

        return 'fr';
    }

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

    public function contact(): View
    {
        return view('pages.contact');
    }

    public function storeContact(ContactRequest $request, string $locale): RedirectResponse
    {
        $data = $request->validated();
        $data['locale'] = $locale;

        Mail::to($data['email'])->send(new ContactConfirmationMail($data));
        Mail::to(config('mail.admin_address'))->send(new ContactAdminNotificationMail($data));

        return back()->with('success', __('pages.contact.success'));
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
