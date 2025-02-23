@extends('layout')

@section('content')
    <div class="max-w-lg mx-auto mt-10 bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-gray-800 mb-4">Modifier le Event</h2>

        <form action="{{ route('events.update', $event) }}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')

            <div>
                <label for="title" class="block text-gray-700 font-semibold">Titre</label>
                <input type="text" id="title" name="title" value="{{ $event->title }}" 
                    class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <div>
                <label for="category" class="block text-gray-700 font-semibold">Catégorie</label>
                <input type="text" id="category" name="category" value="{{ $event->category }}" 
                    class="w-full p-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500">
            </div>

            <button type="submit" 
                class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">
                Mettre à jour
            </button>
        </form>
    </div>
@endsection
