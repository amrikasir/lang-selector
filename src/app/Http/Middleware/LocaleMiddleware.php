<?php

namespace LanguageSelector\App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Symfony\Component\HttpFoundation\Response;

class LocaleMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
		// Check if the session has a 'locale' key
		if (session()->has('locale')) {
			// Set the application locale to the value stored in the session
			App::setLocale(session('locale'));
		}

        return $next($request);
    }
}
