<x-guest-layout>
    
    <div class="text-center">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ $article->title }}
        </h2>
    </div>

    <div class="text-gray-500 text-sm">
        Publié le {{ $article->created_at->format('d/m/Y') }} par <a href="{{ route('public.index', $article->user->id) }}">{{ $article->user->name }}</a>
    </div>

    <div>
        <div class="p-6 text-gray-900 dark:text-gray-100">
            <p class="text-gray-700 dark:text-gray-300">{{ $article->content }}</p>
        </div>
    </div>

    <!-- Ajout d'un commentaire -->
<form action="{{ route('comments.store') }}" method="post" class="mt-6">
    @csrf
    <input type="hidden" name="articleId" value="{{ $article->id }}">

    <!-- Ajouter le reste de votre formulaire -->
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 ">
                   <!-- Input de titre de l'article -->
                   <input type="text" name="title" id="title" placeholder="Aucun commentaire" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                </div>

                <div class="p-6 pt-0 text-gray-900 ">
                   <!-- Contenu de l'article -->
                   <textarea rows="15" name="content" id="content" placeholder="Votre commentaire" class="w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                </div>

                <div class="p-6 text-gray-900 flex items-center">
                    <!-- Action sur le formulaire -->
                    <div>
                        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                            Publier
                        </button>
                    </div>
                </div>
            </div>
        </div>
</form>
</x-guest-layout>