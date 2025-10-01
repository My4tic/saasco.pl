<!-- FAQ -->
<section class="py-20 bg-white dark:bg-gray-950">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-12 text-center">
                {{ __('services.faq_title') }}
            </h2>

            <div class="grid md:grid-cols-2 gap-6 lg:gap-8">
                @foreach(__("services.{$service}_faq") as $faq)
                    <div class="bg-gray-50 dark:bg-gray-900 rounded-xl p-6 hover:shadow-lg transition-shadow duration-300">
                        <h3 class="text-lg font-bold text-gray-900 dark:text-white mb-3">
                            {{ $faq['question'] }}
                        </h3>
                        <p class="text-gray-600 dark:text-gray-400 leading-relaxed">
                            {{ $faq['answer'] }}
                        </p>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
