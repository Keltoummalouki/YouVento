@extends('layout')

@section('content') 
<!-- Hero Section -->
 <div class="bg-blue-500 text-white py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-5xl font-bold">Bienvenue sur YouCode</h1>
            <p class="mt-4 text-xl">Rejoignez des clubs, participez à des événements et collaborez avec d'autres étudiants.</p>
        </div>
    </div>

    <!-- Clubs Section -->
    <div class="container mx-auto my-8">
        <h2 class="text-3xl font-bold text-center mb-8">Clubs</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Club Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <img src="https://via.placeholder.com/150" alt="Club Logo" class="mx-auto">
                <h3 class="text-xl font-bold mt-4">Club de Robotique</h3>
                <p class="mt-2 text-gray-700">Découvrez le monde de la robotique et participez à des compétitions.</p>
                <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">Rejoindre</button>
            </div>
            <!-- Repeat Club Cards as needed -->
        </div>
    </div>

    <!-- Events Section -->
    <div class="container mx-auto my-8">
        <h2 class="text-3xl font-bold text-center mb-8">Événements à Venir</h2>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
            <!-- Event Card -->
            <div class="bg-white p-6 rounded-lg shadow-lg">
                <h3 class="text-xl font-bold">Atelier IA</h3>
                <p class="mt-2 text-gray-700">15 Octobre 2023 - 14h00</p>
                <p class="mt-2 text-gray-700">Salle 101</p>
                <button class="mt-4 bg-blue-600 text-white px-4 py-2 rounded">S'inscrire</button>
            </div>
            <!-- Repeat Event Cards as needed -->
        </div>
    </div>

    <!-- Calendar Section -->
    <div class="container mx-auto my-8">
        <h2 class="text-3xl font-bold text-center mb-8">Calendrier des Événements</h2>
        <div id="calendar" class="bg-white p-6 rounded-lg shadow-lg"></div>
    </div>
@endsection

