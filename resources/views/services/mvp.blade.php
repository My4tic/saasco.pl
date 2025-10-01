@extends('services.layout')

@section('title'){{ __('services.mvp_meta_title') }}@endsection
@section('description'){{ __('services.mvp_meta_description') }}@endsection
@section('breadcrumb'){{ __('services.mvp_title') }}@endsection

@section('hero_title'){{ __('services.mvp_hero_title') }}@endsection
@section('hero_description'){{ __('services.mvp_hero_description') }}@endsection

@section('content')
    @include('services.partials.problem-solution', ['service' => 'mvp'])
    @include('services.partials.features', ['service' => 'mvp'])
    @include('services.partials.tech-stack', ['service' => 'mvp'])
    @include('services.partials.process', ['service' => 'mvp'])
    @include('services.partials.faq', ['service' => 'mvp'])
    @include('services.partials.contact-form')
@endsection
