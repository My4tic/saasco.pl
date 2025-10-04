<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Submission Details') }}
            </h2>
            <a href="{{ route('admin.submissions.index') }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300">
                &larr; Back to List
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            @if (session('success'))
                <div class="mb-4 bg-green-100 dark:bg-green-900/20 border border-green-500 text-green-700 dark:text-green-300 px-4 py-3 rounded">
                    {{ session('success') }}
                </div>
            @endif

            <!-- Actions Bar -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg mb-6">
                <div class="p-6 flex flex-wrap gap-3">
                    <!-- Toggle Read Status -->
                    <form method="POST" action="{{ route('admin.submissions.toggleRead', $submission) }}" class="inline">
                        @csrf
                        <button
                            type="submit"
                            class="px-4 py-2 {{ $submission->is_read ? 'bg-gray-600' : 'bg-green-600' }} text-white rounded-md hover:opacity-80 focus:outline-none focus:ring-2 focus:ring-offset-2 dark:focus:ring-offset-gray-800"
                        >
                            {{ $submission->is_read ? 'Mark as Unread' : 'Mark as Read' }}
                        </button>
                    </form>

                    <!-- Archive/Unarchive -->
                    @if($submission->archived_at)
                        <form method="POST" action="{{ route('admin.submissions.unarchive', $submission) }}" class="inline">
                            @csrf
                            <button
                                type="submit"
                                class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800"
                            >
                                Unarchive
                            </button>
                        </form>
                    @else
                        <form method="POST" action="{{ route('admin.submissions.archive', $submission) }}" class="inline">
                            @csrf
                            <button
                                type="submit"
                                class="px-4 py-2 bg-yellow-600 text-white rounded-md hover:bg-yellow-700 focus:outline-none focus:ring-2 focus:ring-yellow-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800"
                            >
                                Archive
                            </button>
                        </form>
                    @endif

                    <!-- Delete -->
                    <form method="POST" action="{{ route('admin.submissions.destroy', $submission) }}" class="inline" onsubmit="return confirm('Are you sure you want to delete this submission?');">
                        @csrf
                        @method('DELETE')
                        <button
                            type="submit"
                            class="px-4 py-2 bg-red-600 text-white rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800"
                        >
                            Delete
                        </button>
                    </form>
                </div>
            </div>

            <!-- Submission Details -->
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6">
                    <!-- Status Badge -->
                    <div class="mb-6">
                        @if($submission->archived_at)
                            <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-gray-100 text-gray-800 dark:bg-gray-700 dark:text-gray-300">
                                Archived on {{ $submission->archived_at->format('Y-m-d H:i') }}
                            </span>
                        @elseif($submission->is_read)
                            <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-green-100 text-green-800 dark:bg-green-900/40 dark:text-green-300">
                                Read
                            </span>
                        @else
                            <span class="px-3 py-1 inline-flex text-sm leading-5 font-semibold rounded-full bg-yellow-100 text-yellow-800 dark:bg-yellow-900/40 dark:text-yellow-300">
                                Unread
                            </span>
                        @endif
                    </div>

                    <!-- Contact Information -->
                    <div class="grid md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase mb-2">Name</h3>
                            <p class="text-lg text-gray-900 dark:text-white">{{ $submission->name }}</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase mb-2">Email</h3>
                            <p class="text-lg text-gray-900 dark:text-white">
                                <a href="mailto:{{ $submission->email }}" class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300">
                                    {{ $submission->email }}
                                </a>
                            </p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase mb-2">NIP</h3>
                            <p class="text-lg text-gray-900 dark:text-white">{{ $submission->nip }}</p>
                        </div>

                        <div>
                            <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase mb-2">Budget</h3>
                            <p class="text-lg text-gray-900 dark:text-white">
                                <span class="px-3 py-1 bg-indigo-100 dark:bg-indigo-900/40 text-indigo-800 dark:text-indigo-300 rounded-full text-sm font-medium">
                                    {{ $submission->budget }}
                                </span>
                            </p>
                        </div>
                    </div>

                    <!-- Message -->
                    <div class="mb-6">
                        <h3 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase mb-2">Message</h3>
                        <div class="bg-gray-50 dark:bg-gray-900 border-l-4 border-indigo-500 p-4 rounded">
                            <p class="text-gray-900 dark:text-white whitespace-pre-wrap">{{ $submission->message }}</p>
                        </div>
                    </div>

                    <!-- Meta Information -->
                    <div class="border-t border-gray-200 dark:border-gray-700 pt-6 mt-6">
                        <div class="grid md:grid-cols-3 gap-4 text-sm text-gray-600 dark:text-gray-400">
                            <div>
                                <strong class="text-gray-900 dark:text-white">Submitted:</strong><br>
                                {{ $submission->created_at->format('Y-m-d H:i:s') }}<br>
                                <span class="text-xs">({{ $submission->created_at->diffForHumans() }})</span>
                            </div>
                            <div>
                                <strong class="text-gray-900 dark:text-white">Language:</strong><br>
                                {{ strtoupper($submission->locale) }}
                            </div>
                            @if($submission->ip_address)
                            <div>
                                <strong class="text-gray-900 dark:text-white">IP Address:</strong><br>
                                {{ $submission->ip_address }}
                            </div>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
