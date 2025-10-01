<!-- Related Services Section - Internal Linking -->
<section class="py-16 bg-gradient-to-br from-gray-50 to-gray-100 dark:from-gray-900 dark:to-gray-800">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-6xl mx-auto">
            <!-- Header -->
            <div class="text-center mb-12">
                <h2 class="text-3xl font-bold text-gray-900 dark:text-white mb-3">
                    {{ __('services.related_services_title') }}
                </h2>
                <p class="text-gray-600 dark:text-gray-400">
                    {{ __('services.related_services_subtitle') }}
                </p>
            </div>

            <!-- Related Services Grid -->
            <div class="grid md:grid-cols-3 gap-6">
                @foreach(__("services.related_services.{$service}") as $relatedService)
                    <a href="{{ route('services.show', ['locale' => app()->getLocale(), 'service' => $relatedService['slug']]) }}"
                       class="group bg-white dark:bg-gray-800 rounded-xl p-6 shadow-md hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                        <div class="flex items-start">
                            <div class="flex-shrink-0">
                                <div class="flex items-center justify-center h-12 w-12 rounded-lg bg-gradient-to-br from-primary-500 to-accent-500 text-white group-hover:scale-110 transition-transform">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                                    </svg>
                                </div>
                            </div>
                            <div class="ml-4 flex-1">
                                <h3 class="text-lg font-semibold text-gray-900 dark:text-white mb-2 group-hover:text-primary-600 dark:group-hover:text-primary-400 transition-colors">
                                    {{ $relatedService['title'] }}
                                </h3>
                                <p class="text-sm text-gray-600 dark:text-gray-400 leading-relaxed">
                                    {{ $relatedService['description'] }}
                                </p>
                                <div class="mt-3 inline-flex items-center text-sm font-medium text-primary-600 dark:text-primary-400">
                                    Dowiedz się więcej
                                    <svg class="w-4 h-4 ml-1 group-hover:translate-x-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach
            </div>
        </div>
    </div>
</section>
