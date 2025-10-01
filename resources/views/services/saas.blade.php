@extends('services.layout')

@section('title'){{ __('services.saas_meta_title') }}@endsection
@section('description'){{ __('services.saas_meta_description') }}@endsection
@section('breadcrumb'){{ __('services.saas_title') }}@endsection

@section('hero_title'){{ __('services.saas_hero_title') }}@endsection
@section('hero_description'){{ __('services.saas_hero_description') }}@endsection

@section('content')
    <!-- Problem/Solution Section -->
    <section class="py-20 bg-white dark:bg-gray-950">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid md:grid-cols-2 gap-12 max-w-6xl mx-auto">
                <div>
                    <div class="inline-flex items-center px-4 py-2 bg-red-100 dark:bg-red-900/20 text-red-700 dark:text-red-300 rounded-lg text-sm font-medium mb-4">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"/>
                        </svg>
                        {{ __('services.challenge') }}
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                        {{ __('services.saas_problem_title') }}
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">
                        {{ __('services.saas_problem_description') }}
                    </p>
                    <ul class="space-y-3">
                        @foreach(__('services.saas_problems') as $problem)
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-red-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                                </svg>
                                <span class="text-gray-700 dark:text-gray-300">{{ $problem }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
                <div>
                    <div class="inline-flex items-center px-4 py-2 bg-green-100 dark:bg-green-900/20 text-green-700 dark:text-green-300 rounded-lg text-sm font-medium mb-4">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        {{ __('services.solution') }}
                    </div>
                    <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-4">
                        {{ __('services.saas_solution_title') }}
                    </h2>
                    <p class="text-gray-600 dark:text-gray-400 mb-6">
                        {{ __('services.saas_solution_description') }}
                    </p>
                    <ul class="space-y-3">
                        @foreach(__('services.saas_solutions') as $solution)
                            <li class="flex items-start">
                                <svg class="w-6 h-6 text-green-500 mr-3 flex-shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                </svg>
                                <span class="text-gray-700 dark:text-gray-300">{{ $solution }}</span>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Key Features -->
    <section id="features" class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-6">
                    {{ __('services.saas_features_title') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    {{ __('services.saas_features_subtitle') }}
                </p>
            </div>

            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8 max-w-7xl mx-auto">
                @foreach(__('services.saas_features') as $feature)
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-6 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-accent-500 rounded-lg flex items-center justify-center mb-4">
                            <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                            </svg>
                        </div>
                        <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                            {{ $feature['title'] }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400">
                            {{ $feature['description'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- Technology Stack -->
    <section class="py-20 bg-white dark:bg-gray-950">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-5xl mx-auto">
                <div class="text-center mb-12">
                    <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                        {{ __('services.tech_stack_title') }}
                    </h2>
                    <p class="text-lg text-gray-600 dark:text-gray-400">
                        {{ __('services.saas_tech_subtitle') }}
                    </p>
                </div>

                <div class="grid md:grid-cols-3 gap-8">
                    @foreach(__('services.saas_tech_stack') as $category => $technologies)
                        <div class="bg-gray-50 dark:bg-gray-900 rounded-xl p-6">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">
                                {{ __("services.tech_category_{$category}") }}
                            </h3>
                            <div class="flex flex-wrap gap-2">
                                @foreach($technologies as $tech)
                                    <span class="px-3 py-1 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-300 rounded-lg border border-gray-200 dark:border-gray-700">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <!-- Process Timeline -->
    <section class="py-20 bg-gray-50 dark:bg-gray-900">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-6">
                    {{ __('services.process_title') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    {{ __('services.saas_process_subtitle') }}
                </p>
            </div>

            <div class="max-w-4xl mx-auto space-y-8">
                @foreach(__('services.saas_process_steps') as $index => $step)
                    <div class="flex gap-6 items-start">
                        <div class="flex-shrink-0">
                            <div class="w-12 h-12 bg-gradient-to-br from-primary-500 to-accent-500 rounded-full flex items-center justify-center text-white font-bold text-lg">
                                {{ $index + 1 }}
                            </div>
                        </div>
                        <div class="flex-1">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-2">
                                {{ $step['title'] }}
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-2">
                                {{ $step['description'] }}
                            </p>
                            <div class="inline-flex items-center px-3 py-1 bg-primary-100 dark:bg-primary-900/20 text-primary-700 dark:text-primary-300 rounded-lg text-sm font-medium">
                                <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                {{ $step['duration'] }}
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>

    <!-- FAQ -->
    <section class="py-20 bg-white dark:bg-gray-950">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-12 text-center">
                    {{ __('services.faq_title') }}
                </h2>

                <div class="space-y-6">
                    @foreach(__('services.saas_faq') as $faq)
                        <div class="bg-gray-50 dark:bg-gray-900 rounded-xl p-6">
                            <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-3">
                                {{ $faq['question'] }}
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400">
                                {{ $faq['answer'] }}
                            </p>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
