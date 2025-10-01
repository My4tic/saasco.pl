@extends('layouts.app')

@section('title', __('contact.meta_title'))
@section('description', __('contact.meta_description'))

@section('content')
<!-- Hero Section -->
<section class="relative py-20 bg-gradient-to-br from-primary-500 via-accent-500 to-primary-600 overflow-hidden">
    <div class="absolute inset-0 bg-grid-white/[0.05] bg-[size:30px_30px]"></div>
    <div class="container mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
        <div class="max-w-3xl mx-auto text-center text-white">
            <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold mb-6 animate-fade-in">
                {{ __('contact.title') }}
            </h1>
            <p class="text-xl text-white/90 mb-8">
                {{ __('contact.subtitle') }}
            </p>
        </div>
    </div>
</section>

<!-- Contact Form & Info Section -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="grid lg:grid-cols-3 gap-12">
                <!-- Contact Form -->
                <div class="lg:col-span-2">
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8">
                        <h2 class="text-2xl font-bold text-gray-900 dark:text-white mb-6">
                            {{ __('contact.form_title') }}
                        </h2>

                        @if(session('success'))
                            <div class="mb-6 p-4 bg-green-100 dark:bg-green-900/20 border border-green-500 text-green-700 dark:text-green-300 rounded-lg">
                                {{ session('success') }}
                            </div>
                        @endif

                        @if($errors->any())
                            <div class="mb-6 p-4 bg-red-100 dark:bg-red-900/20 border border-red-500 text-red-700 dark:text-red-300 rounded-lg">
                                <ul class="list-disc list-inside">
                                    @foreach($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <form action="{{ route('contact.submit', ['locale' => app()->getLocale()]) }}" method="POST" class="space-y-6">
                            @csrf

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        {{ __('contact.name') }} <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        value="{{ old('name') }}"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white"
                                    >
                                </div>

                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        {{ __('contact.email') }} <span class="text-red-500">*</span>
                                    </label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        value="{{ old('email') }}"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white"
                                    >
                                </div>
                            </div>

                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <label for="company" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        {{ __('contact.company') }}
                                    </label>
                                    <input
                                        type="text"
                                        id="company"
                                        name="company"
                                        value="{{ old('company') }}"
                                        class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white"
                                    >
                                </div>

                                <div>
                                    <label for="phone" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                        {{ __('contact.phone') }}
                                    </label>
                                    <input
                                        type="tel"
                                        id="phone"
                                        name="phone"
                                        value="{{ old('phone') }}"
                                        class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white"
                                    >
                                </div>
                            </div>

                            <div>
                                <label for="budget" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('contact.budget') }}
                                </label>
                                <select
                                    id="budget"
                                    name="budget"
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white"
                                >
                                    <option value="">{{ __('contact.select_budget') }}</option>
                                    <option value="< 30k PLN" {{ old('budget') == '< 30k PLN' ? 'selected' : '' }}>< 30k PLN</option>
                                    <option value="30k - 60k PLN" {{ old('budget') == '30k - 60k PLN' ? 'selected' : '' }}>30k - 60k PLN</option>
                                    <option value="60k - 100k PLN" {{ old('budget') == '60k - 100k PLN' ? 'selected' : '' }}>60k - 100k PLN</option>
                                    <option value="100k+ PLN" {{ old('budget') == '100k+ PLN' ? 'selected' : '' }}>100k+ PLN</option>
                                </select>
                            </div>

                            <div>
                                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                    {{ __('contact.message') }} <span class="text-red-500">*</span>
                                </label>
                                <textarea
                                    id="message"
                                    name="message"
                                    rows="6"
                                    required
                                    class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white"
                                >{{ old('message') }}</textarea>
                            </div>

                            <button
                                type="submit"
                                class="w-full px-8 py-4 bg-gradient-to-r from-primary-500 to-accent-500 text-white font-semibold rounded-lg hover:shadow-lg transition-all duration-300 transform hover:scale-105"
                            >
                                {{ __('contact.send') }}
                            </button>
                        </form>
                    </div>
                </div>

                <!-- Company Info Sidebar -->
                <div class="lg:col-span-1 space-y-6">
                    <!-- Company Details -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">
                            {{ __('contact.company_info') }}
                        </h3>
                        <div class="space-y-4">
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">{{ __('contact.company_name') }}</p>
                                <p class="font-semibold text-gray-900 dark:text-white">Nutrigen Sp. z o.o.</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">{{ __('contact.nip') }}</p>
                                <p class="font-semibold text-gray-900 dark:text-white">NIP: 123-456-78-90</p>
                            </div>
                            <div>
                                <p class="text-sm text-gray-600 dark:text-gray-400 mb-1">{{ __('contact.address') }}</p>
                                <p class="font-semibold text-gray-900 dark:text-white">
                                    ul. Przykładowa 123<br>
                                    00-000 Warszawa
                                </p>
                            </div>
                        </div>
                    </div>

                    <!-- Contact Methods -->
                    <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-6">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">
                            {{ __('contact.direct_contact') }}
                        </h3>
                        <div class="space-y-4">
                            <a href="mailto:kontakt@nutrigen.pl" class="flex items-center gap-3 text-gray-700 dark:text-gray-300 hover:text-primary-500 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                                </svg>
                                <span>kontakt@nutrigen.pl</span>
                            </a>
                            <a href="tel:+48123456789" class="flex items-center gap-3 text-gray-700 dark:text-gray-300 hover:text-primary-500 transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/>
                                </svg>
                                <span>+48 123 456 789</span>
                            </a>
                        </div>
                    </div>

                    <!-- Response Time -->
                    <div class="bg-gradient-to-br from-primary-500 to-accent-500 rounded-2xl shadow-xl p-6 text-white">
                        <div class="flex items-center gap-3 mb-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                            </svg>
                            <h3 class="text-lg font-bold">{{ __('contact.response_time_title') }}</h3>
                        </div>
                        <p class="text-white/90">{{ __('contact.response_time_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
