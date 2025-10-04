<!-- Contact Form Section -->
<section id="contact" class="py-20 bg-gray-50 dark:bg-gray-900">
    <div class="container mx-auto px-4 sm:px-6 lg:px-8">
        <div class="max-w-4xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl sm:text-4xl font-bold text-gray-900 dark:text-white mb-4">
                    {{ __('services.cta_title') }}
                </h2>
                <p class="text-xl text-gray-600 dark:text-gray-400">
                    {{ __('services.cta_description') }}
                </p>
            </div>

            <div class="bg-white dark:bg-gray-800 rounded-2xl shadow-xl p-8">
                @if(session('success'))
                    <div class="mb-6 p-4 bg-green-100 dark:bg-green-900/20 border border-green-500 text-green-700 dark:text-green-300 rounded-lg">
                        {{ session('success') }}
                    </div>
                @endif

                @if($errors->any())
                    <div class="mb-6 p-4 bg-red-100 dark:bg-red-900/20 border border-red-500 text-red-700 dark:text-red-300 rounded-lg">
                        <ul class="list-disc list-inside">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ route('contact.submit', ['locale' => app()->getLocale()]) }}" method="POST" class="space-y-6">
                    @csrf

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                {{ __('contact.name') }} <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="text"
                                id="name"
                                name="name"
                                value="{{ old('name') }}"
                                required
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white transition-all"
                            >
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                {{ __('contact.email') }} <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="email"
                                id="email"
                                name="email"
                                value="{{ old('email') }}"
                                required
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white transition-all"
                            >
                        </div>
                    </div>

                    <div class="grid md:grid-cols-2 gap-6">
                        <div>
                            <label for="nip" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                {{ __('contact.nip_field') }} <span class="text-red-500">*</span>
                            </label>
                            <input
                                type="text"
                                id="nip"
                                name="nip"
                                value="{{ old('nip') }}"
                                required
                                minlength="10"
                                maxlength="10"
                                pattern="[0-9]{10}"
                                placeholder="1234567890"
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white transition-all"
                            >
                        </div>

                        <div>
                            <label for="budget" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                                {{ __('contact.budget') }} <span class="text-red-500">*</span>
                            </label>
                            <select
                                id="budget"
                                name="budget"
                                required
                                class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white transition-all"
                            >
                            <option value="">{{ __('contact.select_budget') }}</option>
                            <option value="< 30k PLN" {{ old('budget') == '< 30k PLN' ? 'selected' : '' }}>< 30k PLN</option>
                            <option value="30k - 60k PLN" {{ old('budget') == '30k - 60k PLN' ? 'selected' : '' }}>30k - 60k PLN</option>
                            <option value="60k - 100k PLN" {{ old('budget') == '60k - 100k PLN' ? 'selected' : '' }}>60k - 100k PLN</option>
                            <option value="100k+ PLN" {{ old('budget') == '100k+ PLN' ? 'selected' : '' }}>100k+ PLN</option>
                        </select>
                        </div>
                    </div>

                    <div>
                        <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300 mb-2">
                            {{ __('contact.message') }} <span class="text-red-500">*</span>
                        </label>
                        <textarea
                            id="message"
                            name="message"
                            rows="5"
                            required
                            class="w-full px-4 py-3 border border-gray-300 dark:border-gray-600 rounded-lg focus:ring-2 focus:ring-primary-500 dark:bg-gray-700 dark:text-white transition-all"
                        >{{ old('message') }}</textarea>
                    </div>

                    <button
                        type="submit"
                        class="w-full px-8 py-4 bg-gradient-to-r from-primary-500 to-accent-500 text-white font-semibold rounded-lg hover:shadow-lg transition-all duration-300 transform hover:scale-105"
                    >
                        {{ __('contact.send') }}
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
