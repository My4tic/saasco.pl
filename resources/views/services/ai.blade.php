@extends('services.layout')

@section('title'){{ __('services.ai_meta_title') }}@endsection
@section('description'){{ __('services.ai_meta_description') }}@endsection
@section('breadcrumb'){{ __('services.ai_title') }}@endsection

@section('hero_title'){{ __('services.ai_hero_title') }}@endsection
@section('hero_description'){{ __('services.ai_hero_description') }}@endsection

@section('content')
    @include('services.partials.problem-solution', ['service' => 'ai'])
    @include('services.partials.features', ['service' => 'ai'])
    @include('services.partials.tech-stack', ['service' => 'ai'])
    @include('services.partials.process', ['service' => 'ai'])
    @include('services.partials.faq', ['service' => 'ai'])
@endsection
