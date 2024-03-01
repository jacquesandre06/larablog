<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Liste des articles publiés de {{ $user->name }}
                 </h2>
            </div>

         
        <!-- Articles -->
        @foreach ($articles as $article)
        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg mt-4">
                <div class="p-6 text-gray-900">
                <h2 class="text-2xl font-bold">{{ $article->title }}</h2>
                <p class="text-gray-700 dark:text-gray-300">{{ substr($article->content, 0, 30) }}...</p>
                
                <a href="{{ route('public.show', [$article->user_id, $article->id]) }}" class="text-red-500 hover:text-red-700">Lire la suite</a>
                </div>
        </div>
        <hr>
        @endforeach
        </div>
    </div>
    
</x-app-layout>