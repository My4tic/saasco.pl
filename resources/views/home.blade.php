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

            <div class="max-w-2xl mx-auto" x-data="contactForm('{{ route('contact.submit', ['locale' => app()->getLocale()]) }}', '{{ csrf_token() }}')">
                <!-- Success Message -->
                <div x-show="success" x-transition class="mb-6 p-4 bg-green-100 dark:bg-green-900/20 border border-green-500 text-green-700 dark:text-green-300 rounded-lg">
                    <span x-text="successMessage"></span>
                </div>

                <!-- Error Messages -->
                <div x-show="errors.length > 0" x-transition class="mb-6 p-4 bg-red-100 dark:bg-red-900/20 border border-red-500 text-red-700 dark:text-red-300 rounded-lg">
                    <ul class="list-disc list-inside">
                        <template x-for="error in errors" :key="error">
                            <li x-text="error"></li>
                        </template>
                    </ul>
                </div>

                <form @submit.prevent="submitForm" class="space-y-6">

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                {{ __('contact.name') }} <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="name" name="name" value="{{ old('name') }}" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all">
                        </div>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                {{ __('contact.email') }} <span class="text-red-500">*</span>
                            </label>
                            <input type="email" id="email" name="email" value="{{ old('email') }}" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all">
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="nip" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                {{ __('contact.nip_field') }} <span class="text-red-500">*</span>
                            </label>
                            <input type="text" id="nip" name="nip" value="{{ old('nip') }}" required minlength="10" maxlength="10" pattern="[0-9]{10}" class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all" placeholder="1234567890">
                        </div>

                        <div>
                            <label for="budget" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                {{ __('contact.budget') }} <span class="text-red-500">*</span>
                            </label>
                            <select id="budget" name="budget" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all">
                                <option value="">{{ __('contact.select_budget') }}</option>
                                <option value="< 30k PLN" {{ old('budget') == '< 30k PLN' ? 'selected' : '' }}>< 30k PLN</option>
                                <option value="30k - 60k PLN" {{ old('budget') == '30k - 60k PLN' ? 'selected' : '' }}>30k - 60k PLN</option>
                                <option value="60k - 100k PLN" {{ old('budget') == '60k - 100k PLN' ? 'selected' : '' }}>60k - 100k PLN</option>
                                <option value="100k+ PLN" {{ old('budget') == '100k+ PLN' ? 'selected' : '' }}>100k+ PLN</option>
                            </select>
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            {{ __('contact.message') }} <span class="text-red-500">*</span>
                        </label>
                        <textarea id="message" name="message" rows="6" required class="w-full px-4 py-3 rounded-lg border border-gray-300 dark:border-gray-700 bg-white dark:bg-gray-800 text-gray-900 dark:text-white focus:ring-2 focus:ring-primary-500 focus:border-transparent transition-all">{{ old('message') }}</textarea>
                    </div>

                    <div>
                        <button type="submit" :disabled="loading" class="w-full px-8 py-4 bg-gradient-hero text-white text-base font-semibold rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-200 disabled:opacity-50 disabled:cursor-not-allowed">
                            <span x-show="!loading">
                                {{ __('contact.send') }}
                                <svg class="inline-block w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/>
                                </svg>
                            </span>
                            <span x-show="loading">
                                {{ __('contact.sending') ?? 'Wysyłanie...' }}
                            </span>
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>

    <script>
        function contactForm(actionUrl, csrfToken) {
            return {
                loading: false,
                success: false,
                successMessage: '',
                errors: [],

                async submitForm(event) {
                    this.loading = true;
                    this.success = false;
                    this.errors = [];

                    const formData = new FormData(event.target);

                    try {
                        const response = await fetch(actionUrl, {
                            method: 'POST',
                            headers: {
                                'X-CSRF-TOKEN': csrfToken,
                                'Accept': 'application/json',
                            },
                            body: formData
                        });

                        const data = await response.json();

                        if (response.ok) {
                            this.success = true;
                            this.successMessage = data.message || '{{ __("contact.success_message") }}';
                            event.target.reset();
                        } else {
                            if (data.errors) {
                                this.errors = Object.values(data.errors).flat();
                            } else {
                                this.errors = [data.message || '{{ __("contact.error_message") ?? "Wystąpił błąd. Spróbuj ponownie." }}'];
                            }
                        }
                    } catch (error) {
                        this.errors = ['{{ __("contact.error_message") ?? "Wystąpił błąd. Spróbuj ponownie." }}'];
                    } finally {
                        this.loading = false;
                    }
                }
            }
        }
    </script>
@endsection
