@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <section class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 bg-gradient-to-br from-gray-50 via-white to-gray-50 dark:from-gray-900 dark:via-gray-950 dark:to-gray-900 overflow-hidden">
        <!-- Animated background blobs -->
        <div class="absolute inset-0 overflow-hidden pointer-events-none">
            <div class="absolute -top-40 -right-40 w-80 h-80 bg-primary-500/20 rounded-full blur-3xl animate-blob"></div>
            <div class="absolute -bottom-40 -left-40 w-80 h-80 bg-accent-500/20 rounded-full blur-3xl animate-blob animation-delay-2000"></div>
        </div>

        <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative">
            <div class="max-w-4xl mx-auto text-center">
                <!-- Breadcrumb -->
                <nav class="flex justify-center mb-8" aria-label="Breadcrumb">
                    <ol class="inline-flex items-center space-x-1 md:space-x-3">
                        <li class="inline-flex items-center">
                            <a href="{{ url("/{$locale}") }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-primary-600 dark:text-gray-400 dark:hover:text-white">
                                <svg class="w-4 h-4 mr-2" fill="currentColor" viewBox="0 0 20 20">
                                    <path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path>
                                </svg>
                                {{ __('nav.services') }}
                            </a>
                        </li>
                        <li>
                            <div class="flex items-center">
                                <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                                </svg>
                                <span class="ml-1 text-sm font-medium text-gray-500 md:ml-2 dark:text-gray-400">@yield('breadcrumb')</span>
                            </div>
                        </li>
                    </ol>
                </nav>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold text-gray-900 dark:text-white mb-6">
                    @yield('hero_title')
                </h1>
                <p class="text-xl text-gray-600 dark:text-gray-400 mb-8 max-w-3xl mx-auto">
                    @yield('hero_description')
                </p>
                <div class="flex flex-col sm:flex-row gap-4 justify-center">
                    <a href="#contact" class="inline-flex items-center justify-center px-8 py-4 bg-gradient-hero text-white text-base font-semibold rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-200">
                        {{ __('services.cta_start_project') }}
                        <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                        </svg>
                    </a>
                    <a href="#features" class="inline-flex items-center justify-center px-8 py-4 bg-white dark:bg-gray-800 text-gray-900 dark:text-white text-base font-semibold rounded-lg border-2 border-gray-200 dark:border-gray-700 hover:border-primary-500 dark:hover:border-primary-500 transition-all duration-200">
                        {{ __('services.learn_details') }}
                    </a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    @yield('content')

    <!-- Contact CTA Section -->
    <section id="contact-section" class="py-20 bg-gradient-to-br from-primary-600 to-accent-600 dark:from-primary-700 dark:to-accent-700">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center text-white">
                <h2 class="text-3xl sm:text-4xl font-bold mb-6">
                    {{ __('services.cta_title') }}
                </h2>
                <p class="text-xl mb-8 text-white/90">
                    {{ __('services.cta_description') }}
                </p>
                <a href="#contact" class="inline-flex items-center px-8 py-4 bg-white text-primary-600 text-base font-semibold rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-200">
                    {{ __('services.cta_contact') }}
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                    </svg>
                </a>
            </div>
        </div>
    </section>
@endsection
