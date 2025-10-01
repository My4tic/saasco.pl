<section id="about" class="py-20 lg:py-32 bg-white dark:bg-gray-950">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Main Content -->
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-16">
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ __('about.section_title') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    {{ __('about.section_subtitle') }}
                </p>
            </div>

            <!-- Rich Text Content for SEO -->
            <div class="prose prose-lg dark:prose-invert max-w-none mb-16">
                <div class="grid md:grid-cols-2 gap-8">
                    <div>
                        <p class="text-gray-700 dark:text-gray-300 mb-4 leading-relaxed">
                            {{ __('about.intro_paragraph_1') }}
                        </p>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            {{ __('about.intro_paragraph_2') }}
                        </p>
                    </div>
                    <div>
                        <p class="text-gray-700 dark:text-gray-300 mb-4 leading-relaxed">
                            {{ __('about.intro_paragraph_3') }}
                        </p>
                        <p class="text-gray-700 dark:text-gray-300 leading-relaxed">
                            {{ __('about.intro_paragraph_4') }}
                        </p>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us Section -->
            <div class="mb-16">
                <div class="text-center mb-12">
                    <h3 class="text-2xl sm:text-3xl font-bold text-gray-900 dark:text-white mb-3">
                        {{ __('about.why_us_title') }}
                    </h3>
                    <p class="text-gray-600 dark:text-gray-400">
                        {{ __('about.why_us_subtitle') }}
                    </p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                    @foreach(['reason_1', 'reason_2', 'reason_3', 'reason_4', 'reason_5', 'reason_6'] as $reason)
                        <div class="bg-gray-50 dark:bg-gray-900 rounded-xl p-6 hover:shadow-lg transition-shadow">
                            <div class="flex items-start">
                                <div class="flex-shrink-0">
                                    <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-gradient-to-br from-primary-500 to-accent-500 text-white">
                                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"/>
                                        </svg>
                                    </div>
                                </div>
                                <div class="ml-4">
                                    <h4 class="text-lg font-semibold text-gray-900 dark:text-white mb-2">
                                        {{ __("about.{$reason}_title") }}
                                    </h4>
                                    <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                        {{ __("about.{$reason}_description") }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <!-- Stats Section -->
            <div class="bg-gradient-to-br from-primary-500/10 to-accent-500/10 dark:from-primary-900/20 dark:to-accent-900/20 rounded-2xl p-8 mb-12">
                <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-8 text-center">
                    {{ __('about.stats_title') }}
                </h3>
                <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                    <div class="text-center">
                        <div class="text-3xl lg:text-4xl font-bold text-primary-600 dark:text-primary-400 mb-2">
                            {{ __('hero.stat_1_number') }}
                        </div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">
                            {{ __('hero.stat_1_label') }}
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl lg:text-4xl font-bold text-primary-600 dark:text-primary-400 mb-2">
                            {{ __('hero.stat_2_number') }}
                        </div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">
                            {{ __('hero.stat_2_label') }}
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl lg:text-4xl font-bold text-primary-600 dark:text-primary-400 mb-2">
                            {{ __('about.location_value') }}
                        </div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">
                            {{ __('about.location_label') }}
                        </div>
                    </div>
                    <div class="text-center">
                        <div class="text-3xl lg:text-4xl font-bold text-primary-600 dark:text-primary-400 mb-2">
                            10+
                        </div>
                        <div class="text-sm text-gray-600 dark:text-gray-400">
                            {{ __('about.reason_1_title') }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- CTA Section -->
            <div class="text-center bg-gradient-hero rounded-2xl p-10">
                <h3 class="text-2xl sm:text-3xl font-bold text-white mb-4">
                    {{ __('about.cta_title') }}
                </h3>
                <p class="text-lg text-white/90 mb-8 max-w-2xl mx-auto">
                    {{ __('about.cta_description') }}
                </p>
                <a href="#contact" class="inline-flex items-center px-8 py-4 bg-white text-primary-600 text-base font-semibold rounded-lg hover:bg-gray-100 hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                    {{ __('about.cta_button') }}
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
