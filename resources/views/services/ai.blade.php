@extends('services.layout')

@section('title'){{ __('services.ai_meta_title') }}@endsection
@section('description'){{ __('services.ai_meta_description') }}@endsection
@section('breadcrumb'){{ __('services.ai_title') }}@endsection

@section('hero_title'){{ __('services.ai_hero_title') }}@endsection
@section('hero_description'){{ __('services.ai_hero_description') }}@endsection

@push('styles')
<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'BreadcrumbList',
    'itemListElement' => [
        ['@type' => 'ListItem', 'position' => 1, 'name' => 'Home', 'item' => url('/'.app()->getLocale())],
        ['@type' => 'ListItem', 'position' => 2, 'name' => __('nav.services'), 'item' => url('/'.app()->getLocale().'#services')],
        ['@type' => 'ListItem', 'position' => 3, 'name' => __('services.ai_title'), 'item' => url()->current()],
    ],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>

<script type="application/ld+json">
{!! json_encode([
    '@context' => 'https://schema.org',
    '@type' => 'Service',
    'serviceType' => 'AI Solutions Development',
    'provider' => ['@type' => 'Organization', 'name' => 'Nutrigen Sp. z o.o.', 'url' => 'https://saasco.pl'],
    'name' => __('services.ai_meta_title'),
    'description' => __('services.ai_meta_description'),
    'areaServed' => ['PL', 'EU'],
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>
@endpush

@section('content')
    @include('services.partials.problem-solution', ['service' => 'ai'])
    @include('services.partials.features', ['service' => 'ai'])
    @include('services.partials.target-audience', ['service' => 'ai'])
    @include('services.partials.tech-stack', ['service' => 'ai'])
    @include('services.partials.process', ['service' => 'ai'])
    @include('services.partials.faq', ['service' => 'ai'])
    @include('services.partials.related-services', ['service' => 'ai'])
    @include('services.partials.contact-form')
@endsection
