@extends('layouts.app')

@section('title'){{ __('meta.home_title') }}@endsection
@section('description'){{ __('meta.default_description') }}@endsection

@section('content')
    @include('components.hero')
    @include('components.about')
    @include('components.services')
    @include('components.portfolio')
    @include('components.process')

    <!-- Contact Section -->
    <section id="contact" class="py-20 lg:py-32 bg-white dark:bg-gray-950">
        <div class="container mx-auto px-4 sm:px-6 lg:px-8">
            <div class="max-w-3xl mx-auto text-center mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                    {{ __('contact.title') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    {{ __('contact.subtitle') }}
                </p>
            </div>

            <div class="max-w-2xl mx-auto">
                <form action="{{ route('contact.submit', ['locale' => app()->getLocale()]) }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('contact.name') }}</label>
                            <input type="text" id="name" name="name" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('contact.email') }}</label>
                            <input type="email" id="email" name="email" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="company" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('contact.company') }}</label>
                            <input type="text" id="company" name="company" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all">
                        </div>
                        <div>
                            <label for="budget" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('contact.budget') }}</label>
                            <select id="budget" name="budget" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all">
                                <option value="">{{ __('contact.select_budget') }}</option>
                                <option value="small">< 40k PLN</option>
                                <option value="medium">40-80k PLN</option>
                                <option value="large">80-150k PLN</option>
                                <option value="enterprise">> 150k PLN</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">{{ __('contact.message') }}</label>
                        <textarea id="message" name="message" rows="6" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all"></textarea>
                    </div>

                    <div>
                        <button type="submit" class="w-full px-8 py-4 bg-gradient-hero text-white text-base font-semibold rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-200">
                            {{ __('contact.send') }}
                            <svg class="inline-block w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                            </svg>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
