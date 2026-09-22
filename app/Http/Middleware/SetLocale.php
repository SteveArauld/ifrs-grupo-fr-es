<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
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

        return $next($request);
    }
}
