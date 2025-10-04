<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth dark">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="robots" content="index, follow">

    <!-- Primary Meta Tags -->
    <title>@yield('title', __('meta.default_title')) - Saasco</title>
    <meta name="title" content="@yield('title', __('meta.default_title')) - Saasco">
    <meta name="description" content="@yield('description', __('meta.default_description'))">
    <meta name="keywords" content="@yield('keywords', __('meta.keywords'))">

    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('title', __('meta.default_title')) - Saasco">
    <meta property="og:description" content="@yield('description', __('meta.default_description'))">
    <meta property="og:image" content="{{ asset('images/og-image.jpg') }}">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:locale" content="{{ app()->getLocale() === 'pl' ? 'pl_PL' : 'en_US' }}">
    <meta property="og:site_name" content="Saasco">

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', __('meta.default_title')) - Saasco">
    <meta property="twitter:description" content="@yield('description', __('meta.default_description'))">
    <meta property="twitter:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- Language Alternates -->
    @php
        $currentPath = request()->path();
        $pathWithoutLocale = preg_replace('/^(pl|en)\//', '', $currentPath);
        $pathWithoutLocale = $pathWithoutLocale === 'pl' || $pathWithoutLocale === 'en' ? '' : $pathWithoutLocale;
    @endphp
    <link rel="alternate" hreflang="pl" href="{{ url('/pl' . ($pathWithoutLocale ? '/' . $pathWithoutLocale : '')) }}">
    <link rel="alternate" hreflang="en" href="{{ url('/en' . ($pathWithoutLocale ? '/' . $pathWithoutLocale : '')) }}">
    <link rel="alternate" hreflang="x-default" href="{{ url('/pl' . ($pathWithoutLocale ? '/' . $pathWithoutLocale : '')) }}">

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- DNS Prefetch & Preconnect -->
    <link rel="dns-prefetch" href="https://fonts.bunny.net">
    <link rel="preconnect" href="https://fonts.bunny.net" crossorigin>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|instrument-sans:400,500,600&display=swap" rel="stylesheet" />

    <!-- Preload Critical Resources -->
    <link rel="preload" href="{{ asset('images/logo.png') }}" as="image" type="image/png">

    <!-- Schema.org - Organization & LocalBusiness -->
    <script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => ['Organization', 'LocalBusiness', 'SoftwareCompany'],
    'name' => 'Nutrigen Sp. z o.o.',
    'alternateName' => 'Saasco',
    'url' => 'https://saasco.pl',
    'logo' => 'https://saasco.pl/images/logo.png',
    'image' => 'https://saasco.pl/images/og-image.jpg',
    'description' => __('meta.default_description'),
    'email' => 'kontakt@saasco.pl',
    'telephone' => '+48-713-123-456',
    'address' => [
        '@type' => 'PostalAddress',
        'streetAddress' => 'Św. Mikołaja 8-11',
        'addressLocality' => 'Wrocław',
        'postalCode' => '50-125',
        'addressCountry' => 'PL',
    ],
    'geo' => [
        '@type' => 'GeoCoordinates',
        'latitude' => '51.1079',
        'longitude' => '17.0385',
    ],
    'openingHoursSpecification' => [
        '@type' => 'OpeningHoursSpecification',
        'dayOfWeek' => ['Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday'],
        'opens' => '08:00',
        'closes' => '16:00',
    ],
    'contactPoint' => [
        '@type' => 'ContactPoint',
        'telephone' => '+48-713-123-456',
        'contactType' => 'sales',
        'email' => 'kontakt@saasco.pl',
        'availableLanguage' => ['Polish', 'English'],
        'areaServed' => ['PL', 'EU'],
    ],
    'sameAs' => [
        'https://www.linkedin.com/company/saasco',
        'https://github.com/saasco',
    ],
    'legalName' => 'Nutrigen Spółka z ograniczoną odpowiedzialnością',
    'taxID' => '8971881125',
    'vatID' => 'PL8971881125',
    'identifier' => [
        [
            '@type' => 'PropertyValue',
            'propertyID' => 'KRS',
            'value' => '0000851334',
        ],
        [
            '@type' => 'PropertyValue',
            'propertyID' => 'NIP',
            'value' => '8971881125',
        ],
    ],
    'foundingDate' => '2020',
    'numberOfEmployees' => [
        '@type' => 'QuantitativeValue',
        'value' => 10,
    ],
    'priceRange' => '$$',
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    <!-- Dark mode script - must run before page render -->
    <script>
        // Apply dark mode immediately to prevent flash
        if (localStorage.getItem('darkMode') !== 'false') {
            document.documentElement.classList.add('dark');
        }
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-white dark:bg-gray-950 text-gray-900 dark:text-gray-100 font-sans antialiased"
    x-data="{ darkMode: localStorage.getItem('darkMode') === 'false' ? false : true }"
    x-init="$watch('darkMode', val => { localStorage.setItem('darkMode', val); document.documentElement.classList.toggle('dark', val) })"
    :class="{ 'dark': darkMode }">

    @auth
        <!-- Breeze Navigation for authenticated users -->
        @include('layouts.navigation')

        <!-- Page Heading -->
        @isset($header)
            <header class="bg-white dark:bg-gray-800 shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset
    @else
        <!-- Public Navigation for guests -->
        @include('components.navigation')
    @endauth

    <!-- Page Content -->
    <main>
        {{ $slot ?? '' }}
        @yield('content')
    </main>

    @guest
        <!-- Footer only for guests -->
        @include('components.footer')
    @endguest

    @stack('scripts')
</body>
</html>
