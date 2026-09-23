<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->route('locale');

        if (! in_array($locale, ['fr', 'es'], true)) {
            abort(404);
        }

        app()->setLocale($locale);

        // remember whatever locale the visitor ends up on (manual switch or
        // IP-detected default) so '/' skips the IP lookup on their next visit.
        Cookie::queue(Cookie::make('preferred_locale', $locale, 60 * 24 * 30));

        return $next($request);
    }
}
