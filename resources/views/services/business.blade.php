@extends('services.layout')

@section('title'){{ __('services.business_meta_title') }}@endsection
@section('description'){{ __('services.business_meta_description') }}@endsection
@section('breadcrumb'){{ __('services.business_title') }}@endsection

@section('hero_title'){{ __('services.business_hero_title') }}@endsection
@section('hero_description'){{ __('services.business_hero_description') }}@endsection

@section('content')
    @include('services.partials.problem-solution', ['service' => 'business'])
    @include('services.partials.features', ['service' => 'business'])
    @include('services.partials.tech-stack', ['service' => 'business'])
    @include('services.partials.process', ['service' => 'business'])
    @include('services.partials.faq', ['service' => 'business'])
@endsection
