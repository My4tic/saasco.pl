<!-- Technology Stack -->
<section class="py-20 bg-white dark:bg-gray-950">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ __('services.tech_stack_title') }}
                </h2>
                <p class="text-lg text-gray-600 dark:text-gray-400">
                    {{ __("services.{$service}_tech_subtitle") }}
                </p>
            </div>

            <div class="grid md:grid-cols-3 gap-8">
                @foreach(__("services.{$service}_tech_stack") as $category => $technologies)
                    <div class="bg-gray-50 dark:bg-gray-900 rounded-xl p-6">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-4">
                            {{ __("services.tech_category_{$category}") }}
                        </h3>
                        <div class="flex flex-wrap gap-2">
                            @foreach($technologies as $tech)
                                <span class="px-3 py-1 bg-white dark:bg-gray-800 text-sm font-medium text-gray-700 dark:text-gray-300 rounded-lg border border-gray-200 dark:border-gray-700">
                                    {{ $tech }}
                                </span>
                            @endforeach
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
