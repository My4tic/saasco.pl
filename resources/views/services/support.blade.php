@extends('services.layout')

@section('title'){{ __('services.support_meta_title') }}@endsection
@section('description'){{ __('services.support_meta_description') }}@endsection
@section('breadcrumb'){{ __('services.support_title') }}@endsection

@section('hero_title'){{ __('services.support_hero_title') }}@endsection
@section('hero_description'){{ __('services.support_hero_description') }}@endsection

@section('content')
    @include('services.partials.problem-solution', ['service' => 'support'])
    @include('services.partials.features', ['service' => 'support'])
    @include('services.partials.tech-stack', ['service' => 'support'])
    @include('services.partials.process', ['service' => 'support'])
    @include('services.partials.faq', ['service' => 'support'])
    @include('services.partials.contact-form')
@endsection
