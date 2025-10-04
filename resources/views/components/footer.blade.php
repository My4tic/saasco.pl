<footer class="bg-gray-900 dark:bg-black text-gray-300">
    <div class="max-w-6xl mx-auto py-12 lg:py-16">
        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-12">
            <div>
                <div class="flex items-center space-x-2 mb-4">
                    <div class="w-10 h-10 bg-gradient-hero rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/>
                        </svg>
                    </div>
                    <span class="text-xl font-bold text-white">Saasco</span>
                </div>
                <p class="text-sm text-gray-400 mb-4">{{ __('footer.tagline') }}</p>
                <div class="flex space-x-4">
                    <a href="https://github.com/saasco" target="_blank" rel="noopener noreferrer" aria-label="GitHub" class="hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 0c-6.626 0-12 5.373-12 12 0 5.302 3.438 9.8 8.207 11.387.599.111.793-.261.793-.577v-2.234c-3.338.726-4.033-1.416-4.033-1.416-.546-1.387-1.333-1.756-1.333-1.756-1.089-.745.083-.729.083-.729 1.205.084 1.839 1.237 1.839 1.237 1.07 1.834 2.807 1.304 3.492.997.107-.775.418-1.305.762-1.604-2.665-.305-5.467-1.334-5.467-5.931 0-1.311.469-2.381 1.236-3.221-.124-.303-.535-1.524.117-3.176 0 0 1.008-.322 3.301 1.23.957-.266 1.983-.399 3.003-.404 1.02.005 2.047.138 3.006.404 2.291-1.552 3.297-1.23 3.297-1.23.653 1.653.242 2.874.118 3.176.77.84 1.235 1.911 1.235 3.221 0 4.609-2.807 5.624-5.479 5.921.43.372.823 1.102.823 2.222v3.293c0 .319.192.694.801.576 4.765-1.589 8.199-6.086 8.199-11.386 0-6.627-5.373-12-12-12z"/></svg>
                    </a>
                    <a href="https://linkedin.com/company/saasco" target="_blank" rel="noopener noreferrer" aria-label="LinkedIn" class="hover:text-white transition-colors">
                        <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true"><path d="M19 0h-14c-2.761 0-5 2.239-5 5v14c0 2.761 2.239 5 5 5h14c2.762 0 5-2.239 5-5v-14c0-2.761-2.238-5-5-5zm-11 19h-3v-11h3v11zm-1.5-12.268c-.966 0-1.75-.79-1.75-1.764s.784-1.764 1.75-1.764 1.75.79 1.75 1.764-.783 1.764-1.75 1.764zm13.5 12.268h-3v-5.604c0-3.368-4-3.113-4 0v5.604h-3v-11h3v1.765c1.396-2.586 7-2.777 7 2.476v6.759z"/></svg>
                    </a>
                </div>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4">{{ __('footer.services') }}</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('/'.app()->getLocale().'/services/saas') }}" class="hover:text-white transition-colors">{{ __('footer.saas') }}</a></li>
                    <li><a href="{{ url('/'.app()->getLocale().'/services/business') }}" class="hover:text-white transition-colors">{{ __('footer.business_apps') }}</a></li>
                    <li><a href="{{ url('/'.app()->getLocale().'/services/mvp') }}" class="hover:text-white transition-colors">{{ __('footer.mvp') }}</a></li>
                    <li><a href="{{ url('/'.app()->getLocale().'/services/ai') }}" class="hover:text-white transition-colors">{{ __('footer.ai') }}</a></li>
                    <li><a href="{{ url('/'.app()->getLocale().'/services/integrations') }}" class="hover:text-white transition-colors">{{ __('footer.integrations') }}</a></li>
                    <li><a href="{{ url('/'.app()->getLocale().'/services/support') }}" class="hover:text-white transition-colors">{{ __('footer.support') }}</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4">{{ __('footer.company') }}</h4>
                <ul class="space-y-2 text-sm">
                    <li><a href="{{ url('/'.app()->getLocale().'#about') }}" class="hover:text-white transition-colors">{{ __('footer.about') }}</a></li>
                    <li><a href="{{ url('/'.app()->getLocale().'#portfolio') }}" class="hover:text-white transition-colors">{{ __('footer.portfolio') }}</a></li>
                    <li><a href="{{ url('/'.app()->getLocale().'#process') }}" class="hover:text-white transition-colors">{{ __('footer.process') }}</a></li>
                    <li><a href="{{ url('/'.app()->getLocale().'/contact') }}" class="hover:text-white transition-colors">{{ __('footer.contact') }}</a></li>
                </ul>
            </div>

            <div>
                <h4 class="text-white font-semibold mb-4">{{ __('footer.contact_us') }}</h4>
                <ul class="space-y-2 text-sm">
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"/>
                        </svg>
                        <span>{{ __('footer.company_name') }}</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/>
                        </svg>
                        <a href="mailto:kontakt@saasco.pl" class="hover:text-white transition-colors">kontakt@saasco.pl</a>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/>
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/>
                        </svg>
                        <span>{{ __('footer.location') }}</span>
                    </li>
                    <li class="flex items-start">
                        <svg class="w-5 h-5 mr-2 mt-0.5 flex-shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"/>
                        </svg>
                        <span>{{ __('footer.krs') }}</span>
                    </li>
                </ul>
            </div>
        </div>

        <div class="border-t border-gray-800 pt-8">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <p class="text-sm text-gray-400 mb-4 md:mb-0">
                    &copy; {{ date('Y') }} Saasco. {{ __('footer.rights') }}
                </p>
                <div class="flex space-x-6 text-sm">
                    <a href="#" class="hover:text-white transition-colors">{{ __('footer.privacy') }}</a>
                    <a href="#" class="hover:text-white transition-colors">{{ __('footer.terms') }}</a>
                </div>
            </div>
        </div>
    </div>
</footer>
