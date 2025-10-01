<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class ServiceController extends Controller
{
    private array $services = ['saas', 'business', 'mvp', 'ai', 'integrations', 'support'];

    public function show(Request $request, string $locale, string $service)
    {
        // Validate service slug
        if (!in_array($service, $this->services)) {
            abort(404);
        }

        // Set locale
        if (in_array($locale, ['pl', 'en'])) {
            App::setLocale($locale);
            Session::put('locale', $locale);
        }

        return view("services.{$service}", [
            'service' => $service,
            'locale' => $locale
        ]);
    }
}
