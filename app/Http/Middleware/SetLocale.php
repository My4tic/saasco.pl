<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;
use Symfony\Component\HttpFoundation\Response;

class SetLocale
{
    public function handle(Request $request, Closure $next): Response
    {
        $locale = $request->segment(1);

        if (!in_array($locale, ['pl', 'en'])) {
            $locale = Session::get('locale', config('app.locale', 'pl'));
        }

        App::setLocale($locale);
        Session::put('locale', $locale);

        return $next($request);
    }
}
