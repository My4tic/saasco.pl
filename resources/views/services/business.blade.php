@extends('services.layout')

@section('title'){{ __('services.business_meta_title') }}@endsection
@section('description'){{ __('services.business_meta_description') }}@endsection
@section('breadcrumb'){{ __('services.business_title') }}@endsection

@section('hero_title'){{ __('services.business_hero_title') }}@endsection
@section('hero_description'){{ __('services.business_hero_description') }}@endsection

@push('styles')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/'.app()->getLocale())],
        ['@type' => 'ListItem', 'position' => 2, 'name' => __('nav.services'), 'item' => url('/'.app()->getLocale().'#services')],
        ['@type' => 'ListItem', 'position' => 3, 'name' => __('services.business_title'), 'item' => url()->current()],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'serviceType' => 'Business Application Development',
    'provider' => ['@type' => 'Organization', 'name' => 'Nutrigen Sp. z o.o.', 'url' => 'https://saasco.pl'],
    'name' => __('services.business_meta_title'),
    'description' => __('services.business_meta_description'),
    'areaServed' => ['PL', 'EU'],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endpush

@section('content')
    @include('services.partials.problem-solution', ['service' => 'business'])
    @include('services.partials.features', ['service' => 'business'])
    @include('services.partials.target-audience', ['service' => 'business'])
    @include('services.partials.tech-stack', ['service' => 'business'])
    @include('services.partials.process', ['service' => 'business'])
    @include('services.partials.faq', ['service' => 'business'])
    @include('services.partials.related-services', ['service' => 'business'])
    @include('services.partials.contact-form')
@endsection
