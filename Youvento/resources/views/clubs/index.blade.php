@extends('layout')

@section('content')
<div class="max-w-3xl mx-auto mt-10">
    <div class="flex justify-end mb-4">
        <a href="{{ route('clubs.create') }}" 
           class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">
            ➕ Créer un Club
        </a>
    </div>

    <div class="mt-6 space-y-4">
        @foreach ($clubs as $club)
            <div class="bg-white shadow-md rounded-lg p-4 border border-gray-200">
                <h2 class="text-xl font-semibold text-gray-800">{{ $club->title }}</h2>  
                <p class="text-gray-600">{{ $club->category }}</p>

                <div class="mt-3 flex space-x-2">
                    <a href="{{ route('clubs.edit', $club) }}" 
                       class="bg-green-500 text-white px-3 py-1 rounded-lg hover:bg-green-600">
                        ✏️ Modifier
                    </a>

                    <form action="{{ route('clubs.destroy', $club) }}" method="POST" 
                          onsubmit="return confirm('Voulez-vous vraiment supprimer ce club ?');">
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
