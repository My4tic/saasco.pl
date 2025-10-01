<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

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

    <!-- Twitter -->
    <meta property="twitter:card" content="summary_large_image">
    <meta property="twitter:url" content="{{ url()->current() }}">
    <meta property="twitter:title" content="@yield('title', __('meta.default_title')) - Saasco">
    <meta property="twitter:description" content="@yield('description', __('meta.default_description'))">
    <meta property="twitter:image" content="{{ asset('images/og-image.jpg') }}">

    <!-- Language Alternates -->
    <link rel="alternate" hreflang="pl" href="{{ url('/pl') }}">
    <link rel="alternate" hreflang="en" href="{{ url('/en') }}">
    <link rel="alternate" hreflang="x-default" href="{{ url('/') }}">

    <!-- Canonical -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700|instrument-sans:400,500,600" rel="stylesheet" />

    <!-- Schema.org -->
    <script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Organization',
    'name' => 'Saasco',
    'url' => 'https://saasco.pl',
    'logo' => 'https://saasco.pl/images/logo.png',
    'description' => __('meta.default_description'),
    'contactPoint' => [
        '@type' => 'ContactPoint',
        'telephone' => '+48-XXX-XXX-XXX',
        'contactType' => 'sales',
        'availableLanguage' => ['Polish', 'English'],
    ],
    'sameAs' => [
        'https://www.linkedin.com/company/saasco',
        'https://github.com/saasco',
    ],
], JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT) !!}
    </script>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @stack('styles')
</head>
<body class="bg-white dark:bg-gray-950 text-gray-900 dark:text-gray-100 antialiased" x-data="{ darkMode: localStorage.getItem('darkMode') === 'true' || (!localStorage.getItem('darkMode') && window.matchMedia('(prefers-color-scheme: dark)').matches) }"
    x-init="$watch('darkMode', val => { localStorage.setItem('darkMode', val); document.documentElement.classList.toggle('dark', val) })"
    :class="{ 'dark': darkMode }">

    @include('components.navigation')

    <main>
        @yield('content')
    </main>

    @include('components.footer')

    @stack('scripts')
</body>
</html>
