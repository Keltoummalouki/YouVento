@extends('layout')

@section('content')
    <div class="max-w-3xl mx-auto mt-10 bg-white p-6 shadow-md rounded-lg">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4">Créer un Club</h1>

        {{-- Affichage des erreurs de validation --}}
        @if ($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-600 rounded-lg">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>⚠️ {{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- Formulaire de création --}}
        <form action="{{ route('clubs.store') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-medium">Nom du Club</label>
                <input type="text" id="title" name="title" 
                       class="w-full border-gray-300 rounded-lg shadow-sm px-4 py-2 focus:ring focus:ring-blue-300"
                       value="{{ old('title') }}" required>
            </div>

            <div class="mb-4">
                <label for="category" class="block text-gray-700 font-medium">Catégorie</label>
                <input type="text" id="category" name="category" 
                       class="w-full border-gray-300 rounded-lg shadow-sm px-4 py-2 focus:ring focus:ring-blue-300"
                       value="{{ old('category') }}" required>
            </div>

            <div class="flex justify-between items-center">
                <a href="{{ route('clubs.index') }}" class="text-blue-500 hover:underline">← Retour</a>

                <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">
                    ✅ Ajouter
                </button>
            </div>
        </form>
    </div>
@endsection
