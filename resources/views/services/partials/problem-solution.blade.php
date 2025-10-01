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
                    {{ __("services.{$service}_problem_title") }}
                </h2>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    {{ __("services.{$service}_problem_description") }}
                </p>
                <ul class="space-y-3">
                    @foreach(__("services.{$service}_problems") as $problem)
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
                    {{ __("services.{$service}_solution_title") }}
                </h2>
                <p class="text-gray-600 dark:text-gray-400 mb-6">
                    {{ __("services.{$service}_solution_description") }}
                </p>
                <ul class="space-y-3">
                    @foreach(__("services.{$service}_solutions") as $solution)
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
