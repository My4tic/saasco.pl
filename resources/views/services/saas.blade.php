@extends('services.layout')

@section('title'){{ __('services.saas_meta_title') }}@endsection
@section('description'){{ __('services.saas_meta_description') }}@endsection
@section('breadcrumb'){{ __('services.saas_title') }}@endsection

@section('hero_title'){{ __('services.saas_hero_title') }}@endsection
@section('hero_description'){{ __('services.saas_hero_description') }}@endsection

@push('styles')
<!-- BreadcrumbList Schema -->
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/'.app()->getLocale())],
        ['@type' => 'ListItem', 'position' => 2, 'name' => __('nav.services'), 'item' => url('/'.app()->getLocale().'#services')],
        ['@type' => 'ListItem', 'position' => 3, 'name' => __('services.saas_title'), 'item' => url()->current()],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>

<!-- Service Schema -->
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'serviceType' => 'SaaS Application Development',
    'provider' => [
        '@type' => 'Organization',
        'name' => 'Nutrigen Sp. z o.o.',
        'url' => 'https://saasco.pl',
    ],
    'name' => __('services.saas_meta_title'),
    'description' => __('services.saas_meta_description'),
    'areaServed' => ['PL', 'EU'],
    'hasOfferCatalog' => [
        '@type' => 'OfferCatalog',
        'name' => 'SaaS Development Services',
        'itemListElement' => collect(__('services.saas_features'))->map(function($feature) {
            return [
                '@type' => 'Offer',
                'itemOffered' => [
                    '@type' => 'Service',
                    'name' => $feature['title'],
                    'description' => $feature['description'],
                ],
            ];
        })->toArray(),
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endpush

@section('content')
    @include('services.partials.problem-solution', ['service' => 'saas'])
    @include('services.partials.features', ['service' => 'saas'])
    @include('services.partials.target-audience', ['service' => 'saas'])
    @include('services.partials.tech-stack', ['service' => 'saas'])
    @include('services.partials.process', ['service' => 'saas'])
    @include('services.partials.faq', ['service' => 'saas'])
    @include('services.partials.related-services', ['service' => 'saas'])
    @include('services.partials.contact-form')
@endsection
