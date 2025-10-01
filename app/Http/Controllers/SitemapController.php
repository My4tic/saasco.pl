<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;

class SitemapController extends Controller
{
    public function index()
    {
        $baseUrl = config('app.url', 'https://saasco.pl');

        $urls = [
            // Homepage
            ['loc' => "{$baseUrl}/pl", 'priority' => '1.0', 'changefreq' => 'weekly'],
            ['loc' => "{$baseUrl}/en", 'priority' => '1.0', 'changefreq' => 'weekly'],

            // Services pages
            ['loc' => "{$baseUrl}/pl/services/saas", 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => "{$baseUrl}/en/services/saas", 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => "{$baseUrl}/pl/services/business", 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => "{$baseUrl}/en/services/business", 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => "{$baseUrl}/pl/services/mvp", 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => "{$baseUrl}/en/services/mvp", 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => "{$baseUrl}/pl/services/ai", 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => "{$baseUrl}/en/services/ai", 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => "{$baseUrl}/pl/services/integrations", 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => "{$baseUrl}/en/services/integrations", 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => "{$baseUrl}/pl/services/support", 'priority' => '0.9', 'changefreq' => 'weekly'],
            ['loc' => "{$baseUrl}/en/services/support", 'priority' => '0.9', 'changefreq' => 'weekly'],

            // Contact page
            ['loc' => "{$baseUrl}/pl/contact", 'priority' => '0.8', 'changefreq' => 'monthly'],
            ['loc' => "{$baseUrl}/en/contact", 'priority' => '0.8', 'changefreq' => 'monthly'],
        ];

        $lastmod = now()->toW3cString();

        return response()
            ->view('sitemap.index', compact('urls', 'lastmod'))
            ->header('Content-Type', 'application/xml');
    }
}
