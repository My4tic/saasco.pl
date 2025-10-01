@extends('services.layout')

@section('title'){{ __('services.integration_meta_title') }}@endsection
@section('description'){{ __('services.integration_meta_description') }}@endsection
@section('breadcrumb'){{ __('services.integration_title') }}@endsection

@section('hero_title'){{ __('services.integration_hero_title') }}@endsection
@section('hero_description'){{ __('services.integration_hero_description') }}@endsection

@section('content')
    @include('services.partials.problem-solution', ['service' => 'integration'])
    @include('services.partials.features', ['service' => 'integration'])
    @include('services.partials.tech-stack', ['service' => 'integration'])
    @include('services.partials.process', ['service' => 'integration'])
    @include('services.partials.faq', ['service' => 'integration'])
    @include('services.partials.contact-form')
@endsection
