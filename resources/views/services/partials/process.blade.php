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

        <div class="max-w-7xl mx-auto">
            <div class="grid md:grid-cols-2 gap-6 lg:gap-8">
                @php
                    $colors = [
                        ['from' => 'from-primary-500', 'to' => 'to-primary-600', 'bg' => 'bg-primary-100', 'dark_bg' => 'dark:bg-primary-900/20', 'text' => 'text-primary-700', 'dark_text' => 'dark:text-primary-300', 'border' => 'border-primary-100', 'dark_border' => 'dark:border-primary-800'],
                        ['from' => 'from-accent-500', 'to' => 'to-accent-600', 'bg' => 'bg-accent-100', 'dark_bg' => 'dark:bg-accent-900/20', 'text' => 'text-accent-700', 'dark_text' => 'dark:text-accent-300', 'border' => 'border-accent-100', 'dark_border' => 'dark:border-accent-800'],
                        ['from' => 'from-blue-500', 'to' => 'to-blue-600', 'bg' => 'bg-blue-100', 'dark_bg' => 'dark:bg-blue-900/20', 'text' => 'text-blue-700', 'dark_text' => 'dark:text-blue-300', 'border' => 'border-blue-100', 'dark_border' => 'dark:border-blue-800'],
                        ['from' => 'from-green-500', 'to' => 'to-green-600', 'bg' => 'bg-green-100', 'dark_bg' => 'dark:bg-green-900/20', 'text' => 'text-green-700', 'dark_text' => 'dark:text-green-300', 'border' => 'border-green-100', 'dark_border' => 'dark:border-green-800'],
                        ['from' => 'from-purple-500', 'to' => 'to-purple-600', 'bg' => 'bg-purple-100', 'dark_bg' => 'dark:bg-purple-900/20', 'text' => 'text-purple-700', 'dark_text' => 'dark:text-purple-300', 'border' => 'border-purple-100', 'dark_border' => 'dark:border-purple-800'],
                        ['from' => 'from-pink-500', 'to' => 'to-pink-600', 'bg' => 'bg-pink-100', 'dark_bg' => 'dark:bg-pink-900/20', 'text' => 'text-pink-700', 'dark_text' => 'dark:text-pink-300', 'border' => 'border-pink-100', 'dark_border' => 'dark:border-pink-800'],
                    ];
                @endphp
                @foreach(__("services.{$service}_process_steps") as $index => $step)
                    @php
                        $color = $colors[$index % count($colors)];
                    @endphp
                    <div class="group relative bg-white dark:bg-gray-800 rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 hover:-translate-y-1 border border-gray-100 dark:border-gray-700">
                        <!-- Step Number Badge -->
                        <div class="absolute -top-4 -left-4">
                            <div class="relative">
                                <div class="w-16 h-16 bg-gradient-to-br {{ $color['from'] }} {{ $color['to'] }} rounded-2xl flex items-center justify-center shadow-lg transform group-hover:scale-110 transition-transform duration-300">
                                    <span class="text-white font-bold text-2xl">{{ $index + 1 }}</span>
                                </div>
                                <!-- Decorative corner -->
                                <div class="absolute -bottom-1 -right-1 w-4 h-4 {{ $color['bg'] }}/50 rounded-full blur-sm"></div>
                            </div>
                        </div>

                        <!-- Content -->
                        <div class="mt-6">
                            <h3 class="text-xl font-bold text-gray-900 dark:text-white mb-3 transition-colors">
                                {{ $step['title'] }}
                            </h3>
                            <p class="text-gray-600 dark:text-gray-400 mb-4 leading-relaxed">
                                {{ $step['description'] }}
                            </p>

                            <!-- Duration Badge -->
                            <div class="inline-flex items-center gap-2 px-4 py-2 {{ $color['bg'] }} {{ $color['dark_bg'] }} rounded-lg {{ $color['border'] }} {{ $color['dark_border'] }} border">
                                <svg class="w-5 h-5 {{ $color['text'] }} {{ $color['dark_text'] }}" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/>
                                </svg>
                                <span class="text-sm font-semibold {{ $color['text'] }} {{ $color['dark_text'] }}">{{ $step['duration'] }}</span>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
