<!-- Target Audience Section - "Dla kogo" -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ __("services.{$service}_target_title") }}
                </h2>
            </div>

            <!-- Audience Grid -->
            <div class="grid md:grid-cols-2 gap-8">
                @foreach(__("services.{$service}_target_audiences") as $audience)
                    <div class="bg-white dark:bg-gray-800 rounded-xl p-8 shadow-lg hover:shadow-xl transition-shadow">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-gradient-to-br from-primary-500 to-accent-500 text-white">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4">
                                <h3 class="text-xl font-semibold text-gray-900 dark:text-white mb-3">
                                    {{ $audience['title'] }}
                                </h3>
                                <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                                    {{ $audience['description'] }}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
