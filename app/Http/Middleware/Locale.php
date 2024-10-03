<?php

namespace App\Http\Middleware;

use App;
use Config;
use Session;
use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class Locale
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Session::has('locale')) {
            dd(Session::all()); // Check what is in the session
        }
  if (Session::has('locale')) {
        $locale = Session::get('locale');
        App::setLocale($locale); // Set the locale in the application
        \Log::info("Locale retrieved from session: " . $locale); // Log for debugging
      dd($locale);
    } else {
        \Log::info("No locale found in session, defaulting to 'en'.");
    }

        return $next($request);
    }
}
