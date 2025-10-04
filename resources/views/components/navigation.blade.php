<nav class="fixed top-0 left-0 right-0 z-50 glass border-b border-gray-200/20 dark:border-gray-800/20" x-data="{ mobileMenuOpen: false }">
    <div class="max-w-6xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-between h-16 lg:h-20">
            <!-- Logo -->
            <a href="{{ url('/') }}" class="flex items-center space-x-2 group">
                <div class="w-10 h-10 bg-gradient-hero rounded-lg flex items-center justify-center">
                    <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                    </svg>
                </div>
                <span class="text-xl font-bold text-gradient">Saasco</span>
            </a>

            <!-- Desktop Navigation -->
            <div class="hidden lg:flex items-center space-x-8">
                <a href="{{ url('/' . app()->getLocale()) }}#services" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                    {{ __('nav.services') }}
                </a>
                <a href="{{ url('/' . app()->getLocale()) }}#portfolio" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                    {{ __('nav.portfolio') }}
                </a>
                <a href="{{ url('/' . app()->getLocale()) }}#process" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                    {{ __('nav.process') }}
                </a>
                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="text-sm font-medium text-gray-700 dark:text-gray-300 hover:text-primary-600 dark:hover:text-primary-400 transition-colors">
                    {{ __('nav.contact') }}
                </a>
            </div>

            <!-- Right Side: Language Switcher, Dark Mode, CTA -->
            <div class="flex items-center space-x-4">
                <!-- Language Switcher -->
                <div class="hidden sm:flex items-center space-x-2">
                    <a href="{{ url('/pl') }}" class="px-3 py-1.5 text-sm font-medium rounded-md transition-colors {{ app()->getLocale() === 'pl' ? 'bg-primary-100 dark:bg-primary-900 text-primary-700 dark:text-primary-300' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                        PL
                    </a>
                    <a href="{{ url('/en') }}" class="px-3 py-1.5 text-sm font-medium rounded-md transition-colors {{ app()->getLocale() === 'en' ? 'bg-primary-100 dark:bg-primary-900 text-primary-700 dark:text-primary-300' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                        EN
                    </a>
                </div>

                <!-- CTA Button -->
                <a href="{{ route('contact', ['locale' => app()->getLocale()]) }}" class="hidden lg:inline-flex items-center px-6 py-2.5 bg-gradient-hero text-white text-sm font-semibold rounded-lg hover:shadow-lg hover:scale-105 transition-all duration-200">
                    {{ __('nav.cta') }}
                    <svg class="w-4 h-4 ml-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6"/>
                    </svg>
                </a>

                <!-- Mobile Menu Button -->
                <button @click="mobileMenuOpen = !mobileMenuOpen" class="lg:hidden p-2 rounded-lg hover:bg-gray-100 dark:hover:bg-gray-800 transition-colors">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/>
                    </svg>
                    <svg x-show="mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </button>
            </div>
        </div>

        <!-- Mobile Menu -->
        <div x-show="mobileMenuOpen"
             x-transition:enter="transition ease-out duration-200"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-150"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             class="lg:hidden py-4 border-t border-gray-200/20 dark:border-gray-800/20">
            <div class="flex flex-col space-y-2">
                <a href="#services" @click="mobileMenuOpen = false" class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg transition-colors">
                    {{ __('nav.services') }}
                </a>
                <a href="#portfolio" @click="mobileMenuOpen = false" class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg transition-colors">
                    {{ __('nav.portfolio') }}
                </a>
                <a href="#process" @click="mobileMenuOpen = false" class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg transition-colors">
                    {{ __('nav.process') }}
                </a>
                <a href="#about" @click="mobileMenuOpen = false" class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg transition-colors">
                    {{ __('nav.about') }}
                </a>
                <a href="#contact" @click="mobileMenuOpen = false" class="px-4 py-2 text-sm font-medium text-gray-700 dark:text-gray-300 hover:bg-gray-100 dark:hover:bg-gray-800 rounded-lg transition-colors">
                    {{ __('nav.contact') }}
                </a>
                <div class="flex items-center space-x-2 px-4 pt-2">
                    <a href="{{ url('/pl') }}" class="flex-1 px-3 py-2 text-sm font-medium text-center rounded-md transition-colors {{ app()->getLocale() === 'pl' ? 'bg-primary-100 dark:bg-primary-900 text-primary-700 dark:text-primary-300' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                        Polski
                    </a>
                    <a href="{{ url('/en') }}" class="flex-1 px-3 py-2 text-sm font-medium text-center rounded-md transition-colors {{ app()->getLocale() === 'en' ? 'bg-primary-100 dark:bg-primary-900 text-primary-700 dark:text-primary-300' : 'text-gray-600 dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800' }}">
                        English
                    </a>
                </div>
                <a href="#contact" @click="mobileMenuOpen = false" class="mx-4 mt-2 px-6 py-3 bg-gradient-hero text-white text-sm font-semibold text-center rounded-lg">
                    {{ __('nav.cta') }}
                </a>
            </div>
        </div>
    </div>
</nav>
