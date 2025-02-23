@extends('layout')

@section('content')
<div class="max-w-3xl mx-auto mt-10">
    <div class="flex justify-end mb-4">
        <a href="{{ route('events.create') }}" 
           class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
            ➕ Créer un event
        </a>
    </div>

    <div class="mt-6 space-y-4">
        @foreach ($events as $event)
            <div class="bg-white shadow-md rounded-lg p-4 border border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800">{{ $event->title }}</h2>  
                <p class="text-gray-600">{{ $event->category }}</p>

                <div class="mt-3 flex space-x-2">
                    <a href="{{ route('events.edit', $event) }}" 
                       class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600">
                        ✏️ Modifier
                    </a>

                    <form action="{{ route('events.destroy', $event) }}" method="POST" 
                          onsubmit="return confirm('Voulez-vous vraiment supprimer ce evenement ?');">
                        @csrf @method('DELETE')
                        <button type="submit" 
                                class="bg-red-500 text-white px-3 py-1 rounded-lg hover:bg-red-600">
                            🗑️ Supprimer
                        </button>
                    </form>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
