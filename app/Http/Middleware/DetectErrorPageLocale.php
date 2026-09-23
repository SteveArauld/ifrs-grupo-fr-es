<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DetectErrorPageLocale
{
    /**
     * Set the app locale from the URL's first segment (/fr/... or /es/...)
     * before routing happens, so an error page (404, 500, ...) - which never
     * reaches the {locale} route group's own "setlocale" middleware since no
     * route actually matched - still renders in the right language.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);

        if (in_array($locale, ['fr', 'es'], true)) {
            app()->setLocale($locale);
        }

        return $next($request);
    }
}
