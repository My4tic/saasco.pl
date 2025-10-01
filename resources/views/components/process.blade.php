<section id="process" class="py-20 lg:py-32 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                {{ __('process.title') }}
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-400">
                {{ __('process.subtitle') }}
            </p>
        </div>

        <div class="max-w-5xl mx-auto space-y-12">
            <!-- Step 1: Discovery -->
            <div class="relative flex flex-col md:flex-row gap-8">
                <div class="absolute left-8 md:left-16 top-24 bottom-0 w-0.5 bg-gradient-to-b from-primary-500 to-transparent hidden md:block"></div>
                <div class="flex-shrink-0">
                    <div class="relative w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-primary-500 to-primary-600 rounded-2xl flex items-center justify-center">
                        <span class="text-2xl md:text-3xl font-bold text-white">01</span>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">{{ __('process.discovery_title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">{{ __('process.discovery_description') }}</p>
                    <div class="inline-flex items-center px-4 py-2 bg-primary-100 dark:bg-primary-900/20 text-primary-700 dark:text-primary-300 rounded-lg text-sm font-medium">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        {{ __('process.discovery_duration') }}
                    </div>
                </div>
            </div>

            <!-- Step 2: Design -->
            <div class="relative flex flex-col md:flex-row gap-8">
                <div class="absolute left-8 md:left-16 top-24 bottom-0 w-0.5 bg-gradient-to-b from-accent-500 to-transparent hidden md:block"></div>
                <div class="flex-shrink-0">
                    <div class="relative w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-accent-500 to-accent-600 rounded-2xl flex items-center justify-center">
                        <span class="text-2xl md:text-3xl font-bold text-white">02</span>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">{{ __('process.design_title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">{{ __('process.design_description') }}</p>
                    <div class="inline-flex items-center px-4 py-2 bg-accent-100 dark:bg-accent-900/20 text-accent-700 dark:text-accent-300 rounded-lg text-sm font-medium">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        {{ __('process.design_duration') }}
                    </div>
                </div>
            </div>

            <!-- Step 3: Development -->
            <div class="relative flex flex-col md:flex-row gap-8">
                <div class="absolute left-8 md:left-16 top-24 bottom-0 w-0.5 bg-gradient-to-b from-blue-500 to-transparent hidden md:block"></div>
                <div class="flex-shrink-0">
                    <div class="relative w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-blue-500 to-blue-600 rounded-2xl flex items-center justify-center">
                        <span class="text-2xl md:text-3xl font-bold text-white">03</span>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">{{ __('process.development_title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">{{ __('process.development_description') }}</p>
                    <div class="inline-flex items-center px-4 py-2 bg-blue-100 dark:bg-blue-900/20 text-blue-700 dark:text-blue-300 rounded-lg text-sm font-medium">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        {{ __('process.development_duration') }}
                    </div>
                </div>
            </div>

            <!-- Step 4: Testing -->
            <div class="relative flex flex-col md:flex-row gap-8">
                <div class="absolute left-8 md:left-16 top-24 bottom-0 w-0.5 bg-gradient-to-b from-green-500 to-transparent hidden md:block"></div>
                <div class="flex-shrink-0">
                    <div class="relative w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-green-500 to-green-600 rounded-2xl flex items-center justify-center">
                        <span class="text-2xl md:text-3xl font-bold text-white">04</span>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">{{ __('process.testing_title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">{{ __('process.testing_description') }}</p>
                    <div class="inline-flex items-center px-4 py-2 bg-green-100 dark:bg-green-900/20 text-green-700 dark:text-green-300 rounded-lg text-sm font-medium">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        {{ __('process.testing_duration') }}
                    </div>
                </div>
            </div>

            <!-- Step 5: Deployment -->
            <div class="relative flex flex-col md:flex-row gap-8">
                <div class="flex-shrink-0">
                    <div class="relative w-16 h-16 md:w-20 md:h-20 bg-gradient-to-br from-purple-500 to-purple-600 rounded-2xl flex items-center justify-center">
                        <span class="text-2xl md:text-3xl font-bold text-white">05</span>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-3">{{ __('process.deployment_title') }}</h3>
                    <p class="text-gray-600 dark:text-gray-400 mb-4">{{ __('process.deployment_description') }}</p>
                    <div class="inline-flex items-center px-4 py-2 bg-purple-100 dark:bg-purple-900/20 text-purple-700 dark:text-purple-300 rounded-lg text-sm font-medium">
                        <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                        </svg>
                        {{ __('process.deployment_duration') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
