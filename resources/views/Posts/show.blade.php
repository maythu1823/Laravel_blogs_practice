<x-app-layout>
    <x-slot name="header">
        <h2 class="font-bold text-2xl text-indigo-700 flex items-center gap-2">
            📘 {{ $post->title }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gradient-to-br from-indigo-50 via-purple-50 to-pink-50 min-h-screen">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white shadow-xl rounded-2xl overflow-hidden border border-indigo-100">

               
                <div class="px-6 py-5 bg-gradient-to-r from-indigo-500 to-purple-500 text-white">
                    <h1 class="text-3xl font-extrabold flex items-center gap-2">
                        {{ $post->title }}
                    </h1>
                    <p class="text-sm text-indigo-700 mt-2">
                        👤 by{{ $post->user?->name ?? 'Anonymous' }}
                        · 📅 {{ $post->created_at?->format('F j, Y') ?? 'Unknown date' }}
                    </p>
                </div>

                <div class="px-6 py-8 text-gray-800 leading-relaxed text-lg">
                 {{ $post->body}}
                </div>

                
                <div class="px-6 py-4 bg-gray-50 border-t flex items-center justify-between">
                    <span class="text-sm text-gray-600 flex items-center gap-1">
                        ❤️ {{ $post->likers->count() }} Likes
                    </span>

                </div>

            </div>
        </div>
    </div>
</x-app-layout>
