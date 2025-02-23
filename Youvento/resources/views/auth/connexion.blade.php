@extends('layout')

@section('content')
<div class="flex items-center justify-center min-h-screen bg-gray-100">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-lg">
        <h2 class="text-2xl font-bold text-center">Se connecter</h2>
        <form method="POST" action="{{ route('login') }}" class="mt-4">
            @csrf
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" name="email" required
                    class="w-full p-2 border border-gray-300 rounded-lg mt-1 focus:ring focus:ring-indigo-300">
            </div>
            <div class="mt-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input id="password" type="password" name="password" required
                    class="w-full p-2 border border-gray-300 rounded-lg mt-1 focus:ring focus:ring-indigo-300">
            </div>
            <button type="submit"
                class="w-full bg-indigo-500 text-white p-2 rounded-lg mt-4 hover:bg-indigo-600 transition">
                Connexion
            </button>
        </form>
    </div>
</div>
@endsection
