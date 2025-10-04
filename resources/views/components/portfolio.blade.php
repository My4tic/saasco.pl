<section id="portfolio" class="py-20 lg:py-32 bg-white dark:bg-gray-950">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="max-w-3xl mx-auto text-center mb-16">
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-bold text-gray-900 dark:text-white mb-6">
                {{ __('portfolio.title') }}
            </h2>
            <p class="text-lg text-gray-600 dark:text-gray-400">
                {{ __('portfolio.subtitle') }}
            </p>
        </div>

        <!-- Portfolio Grid -->
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8 mb-12">
            @foreach([
                ['name' => 'CloudInvoice', 'key' => 'cloud_invoice', 'gradient' => 'from-blue-500 to-cyan-500'],
                ['name' => 'MediCRM', 'key' => 'medi_crm', 'gradient' => 'from-purple-500 to-pink-500'],
                ['name' => 'SmartSupport', 'key' => 'smart_support', 'gradient' => 'from-green-500 to-emerald-500'],
                ['name' => 'B2B Portal', 'key' => 'b2b_portal', 'gradient' => 'from-orange-500 to-red-500']
            ] as $project)
                <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-br {{ $project['gradient'] }} p-1">
                    <div class="relative h-full bg-white dark:bg-gray-900 rounded-xl p-8 transition-all duration-300">
                        <div class="mb-6">
                            <h3 class="text-2xl font-bold text-gray-900 dark:text-white mb-2">
                                {{ __('portfolio.' . $project['key'] . '_title') }}
                            </h3>
                            <p class="text-sm text-gray-600 dark:text-gray-400">
                                {{ __('portfolio.' . $project['key'] . '_category') }}
                            </p>
                        </div>

                        <div class="space-y-4 mb-6">
                            <div>
                                <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-2">{{ __('portfolio.challenge') }}</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('portfolio.' . $project['key'] . '_challenge') }}</p>
                            </div>
                            <div>
                                <h4 class="text-sm font-semibold text-gray-900 dark:text-white mb-2">{{ __('portfolio.result') }}</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-400">{{ __('portfolio.' . $project['key'] . '_result') }}</p>
                            </div>
                        </div>

                        <div class="flex flex-wrap gap-2 mb-6">
                            @php $techStack = trans('portfolio.' . $project['key'] . '_tech'); @endphp
                            @if(is_array($techStack))
                                @foreach($techStack as $tech)
                                    <span class="px-3 py-1 bg-gray-100 dark:bg-gray-800 text-xs font-medium text-gray-700 dark:text-gray-300 rounded-full">
                                        {{ $tech }}
                                    </span>
                                @endforeach
                            @endif
                        </div>

                        <div class="flex items-center justify-between">
                            <span class="text-sm font-medium text-gray-600 dark:text-gray-400">
                                {{ __('portfolio.' . $project['key'] . '_duration') }}
                            </span>
                            <a href="#contact" class="inline-flex items-center text-sm font-semibold bg-gradient-to-r {{ $project['gradient'] }} bg-clip-text text-transparent group-hover:underline">
                                {{ __('portfolio.view_case') }}
                                <svg class="w-4 h-4 ml-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10.293 5.293a1 1 0 011.414 0l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414-1.414L12.586 11H5a1 1 0 110-2h7.586l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

        <!-- CTA -->
        <div class="text-center">
            <a href="#contact" class="inline-flex items-center px-8 py-4 bg-gradient-hero text-white text-base font-semibold rounded-lg hover:shadow-xl hover:scale-105 transition-all duration-200">
                {{ __('portfolio.cta') }}
                <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                </svg>
            </a>
        </div>
    </div>
</section>
