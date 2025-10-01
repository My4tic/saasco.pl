<!-- Process Timeline -->
<section class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-6">
                {{ __('services.process_title') }}
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-400">
                {{ __("services.{$service}_process_subtitle") }}
            </p>
        </div>

        <div class="max-w-4xl mx-auto space-y-8">
            @foreach(__("services.{$service}_process_steps") as $index => $step)
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
