<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class HomeController extends Controller
{
    public function index($locale = null)
    {
        if ($locale && in_array($locale, ['pl', 'en'])) {
            Session::put('locale', $locale);
            App::setLocale($locale);
        }

        return view('home');
    }
}
