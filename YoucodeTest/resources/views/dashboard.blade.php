@extends('layouts.admin')

    <!-- Sidebar -->
    <div class="flex">
        <nav class="w-64 bg-white shadow-lg h-screen">
            <div class="p-4">
                <h1 class="youcode-logo">
                    <span class="you">You</span><span class="code">Code</span>
                </h1>
            </div>
            <div class="mt-10">
                <ul class="space-y-4">
                    <li><a href="#" class="flex items-center text-gray-700 hover:text-blue-600 p-4"><i class="fas fa-tachometer-alt mr-3"></i> Tableau de Bord</a></li>
                    <li><a href="#" class="flex items-center text-gray-700 hover:text-blue-600 p-4"><i class="fas fa-user-graduate mr-3"></i> Étudiants</a></li>
                    <li><a href="#" class="flex items-center text-gray-700 hover:text-blue-600 p-4"><i class="fas fa-chalkboard-teacher mr-3"></i> Formateurs</a></li>
                    <li><a href="#" class="flex items-center text-gray-700 hover:text-blue-600 p-4"><i class="fas fa-book mr-3"></i> Formations</a></li>
                    <li><a href="#" class="flex items-center text-gray-700 hover:text-blue-600 p-4"><i class="fas fa-calendar-alt mr-3"></i> Événements</a></li>
                    <li><a href="#" class="flex items-center text-gray-700 hover:text-blue-600 p-4"><i class="fas fa-cogs mr-3"></i> Paramètres</a></li>
                </ul>
            </div>
        </nav>
        <!-- Main Content -->
        <div class="flex-1 p-6">
            <div class="flex justify-between items-center">
                <h2 class="text-3xl font-extrabold text-gray-900">Tableau de Bord</h2>
                <div class="flex items-center space-x-4">
                    <button class="bg-blue-600 text-white px-4 py-2 rounded-md hover:bg-blue-700">Ajouter</button>
                    <button class="text-gray-700 hover:text-blue-600"><i class="fas fa-bell text-xl"></i></button>
                    <button class="text-gray-700 hover:text-blue-600"><i class="fas fa-user-circle text-xl"></i></button>
                </div>
            </div>
            <div class="mt-6 grid grid-cols-1 gap-6 sm:grid-cols-2 lg:grid-cols-4">
                <!-- Card 1 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Étudiants</h3>
                            <p class="mt-2 text-3xl font-extrabold text-blue-600">120</p>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">
                            <i class="fas fa-user-graduate text-blue-600 text-2xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Formateurs</h3>
                            <p class="mt-2 text-3xl font-extrabold text-blue-600">25</p>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">
                            <i class="fas fa-chalkboard-teacher text-blue-600 text-2xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Formations</h3>
                            <p class="mt-2 text-3xl font-extrabold text-blue-600">8</p>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">
                            <i class="fas fa-book text-blue-600 text-2xl"></i>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-white p-6 rounded-lg shadow-lg">
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-medium text-gray-900">Événements</h3>
                            <p class="mt-2 text-3xl font-extrabold text-blue-600">5</p>
                        </div>
                        <div class="bg-blue-100 p-3 rounded-full">
                            <i class="fas fa-calendar-alt text-blue-600 text-2xl"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Latest Activities -->
            <div class="mt-10">
                <h3 class="text-2xl font-extrabold text-gray-900">Activités Récentes</h3>
                <div class="mt-6 bg-white p-6 rounded-lg shadow-lg">
                    <ul class="space-y-4">
                        <li class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-900"><strong>Nouvel étudiant inscrit :</strong> John Doe</p>
                                <p class="text-sm text-gray-500">Il y a 2 heures</p>
                            </div>
                            <button class="text-blue-600 hover:underline">Voir</button>
                        </li>
                        <li class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-900"><strong>Nouvelle formation ajoutée :</strong> Développement Mobile</p>
                                <p class="text-sm text-gray-500">Il y a 1 jour</p>
                            </div>
                            <button class="text-blue-600 hover:underline">Voir</button>
                        </li>
                        <li class="flex items-center justify-between">
                            <div>
                                <p class="text-gray-900"><strong>Événement à venir :</strong> Hackathon 2025</p>
                                <p class="text-sm text-gray-500">Il y a 3 jours</p>
                            </div>
                            <button class="text-blue-600 hover:underline">Voir</button>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>