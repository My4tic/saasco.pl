<section class="relative pt-32 pb-20 lg:pt-40 lg:pb-32 overflow-hidden">
    <!-- Animated Gradient Background -->
    <div class="absolute inset-0 bg-gradient-hero animate-gradient -z-10"></div>

    <!-- Decorative Elements -->
    <div class="absolute inset-0 -z-10">
        <div class="absolute top-20 left-10 w-72 h-72 bg-purple-400/30 dark:bg-purple-600/20 rounded-full mix-blend-multiply dark:mix-blend-lighten filter blur-3xl animate-blob"></div>
        <div class="absolute top-40 right-10 w-72 h-72 bg-blue-400/30 dark:bg-blue-600/20 rounded-full mix-blend-multiply dark:mix-blend-lighten filter blur-3xl animate-blob animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-1/2 w-72 h-72 bg-pink-400/30 dark:bg-pink-600/20 rounded-full mix-blend-multiply dark:mix-blend-lighten filter blur-3xl animate-blob animation-delay-4000"></div>
    </div>

    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto text-center">
            <!-- Badge -->
            <div class="inline-flex items-center px-4 py-2 mb-8 bg-white/10 dark:bg-black/20 backdrop-blur-lg rounded-full border border-white/20 dark:border-white/10">
                <span class="w-2 h-2 bg-green-400 rounded-full animate-pulse mr-2"></span>
                <span class="text-sm font-medium text-white">{{ __('hero.badge') }}</span>
            </div>

            <!-- Main Heading -->
            <h1 class="text-4xl sm:text-5xl lg:text-6xl xl:text-7xl font-bold text-white mb-6 leading-tight">
                {{ __('hero.title') }}
            </h1>

            <!-- Subtitle -->
            <p class="text-lg sm:text-xl text-white/90 mb-10 max-w-2xl mx-auto">
                {{ __('hero.subtitle') }}
            </p>

            <!-- CTA Buttons -->
            <div class="flex flex-col sm:flex-row gap-4 justify-center mb-16">
                <a href="#contact" class="inline-flex items-center justify-center px-8 py-4 bg-white text-primary-600 text-base font-semibold rounded-lg hover:bg-gray-100 hover:shadow-xl transform hover:-translate-y-0.5 transition-all duration-200">
                    {{ __('hero.cta_primary') }}
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>
                <a href="#portfolio" class="inline-flex items-center justify-center px-8 py-4 bg-white/10 backdrop-blur-lg text-white text-base font-semibold rounded-lg border border-white/20 hover:bg-white/20 transition-all duration-200">
                    {{ __('hero.cta_secondary') }}
                    <svg class="w-5 h-5 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"/>
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"/>
                    </svg>
                </a>
            </div>

            <!-- Stats -->
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="text-3xl lg:text-4xl font-bold text-white mb-2">{{ __('hero.stat_1_number') }}</div>
                    <div class="text-sm text-white/80">{{ __('hero.stat_1_label') }}</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl lg:text-4xl font-bold text-white mb-2">{{ __('hero.stat_2_number') }}</div>
                    <div class="text-sm text-white/80">{{ __('hero.stat_2_label') }}</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl lg:text-4xl font-bold text-white mb-2">{{ __('hero.stat_3_number') }}</div>
                    <div class="text-sm text-white/80">{{ __('hero.stat_3_label') }}</div>
                </div>
                <div class="text-center">
                    <div class="text-3xl lg:text-4xl font-bold text-white mb-2">{{ __('hero.stat_4_number') }}</div>
                    <div class="text-sm text-white/80">{{ __('hero.stat_4_label') }}</div>
                </div>
            </div>
        </div>
    </div>
</section>

<style>
@keyframes blob {
    0%, 100% {
        transform: translate(0, 0) scale(1);
    }
    33% {
        transform: translate(30px, -50px) scale(1.1);
    }
    66% {
        transform: translate(-20px, 20px) scale(0.9);
    }
}

.animate-blob {
    animation: blob 7s infinite;
}

.animation-delay-2000 {
    animation-delay: 2s;
}

.animation-delay-4000 {
    animation-delay: 4s;
}
</style>
