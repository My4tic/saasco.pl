@extends('services.layout')

@section('title'){{ __('services.saas_meta_title') }}@endsection
@section('description'){{ __('services.saas_meta_description') }}@endsection
@section('breadcrumb'){{ __('services.saas_title') }}@endsection

@section('hero_title'){{ __('services.saas_hero_title') }}@endsection
@section('hero_description'){{ __('services.saas_hero_description') }}@endsection

@section('content')
    @include('services.partials.problem-solution', ['service' => 'saas'])
    @include('services.partials.features', ['service' => 'saas'])
    @include('services.partials.tech-stack', ['service' => 'saas'])
    @include('services.partials.process', ['service' => 'saas'])
    @include('services.partials.faq', ['service' => 'saas'])
    @include('services.partials.contact-form')
@endsection
