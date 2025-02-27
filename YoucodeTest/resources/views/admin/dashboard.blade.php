@extends('layouts.admin')

@section('title', 'YouCode Admin - Tableau de bord')

@section('header', 'Tableau de bord')

@section('content')
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
    <!-- Statistiques -->
    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-blue-500 bg-opacity-75">
                <i class="fas fa-user-graduate text-white text-2xl"></i>
            </div>
            <div class="ml-4">
                <p class="text-gray-500">Candidats</p>
                <p class="text-2xl font-semibold text-gray-800">{{ $stats['candidates_count'] }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-green-500 bg-opacity-75">
                <i class="fas fa-check-circle text-white text-2xl"></i>
            </div>
            <div class="ml-4">
                <p class="text-gray-500">Quiz complétés</p>
                <p class="text-2xl font-semibold text-gray-800">{{ $stats['completed_quizzes'] }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-yellow-500 bg-opacity-75">
                <i class="fas fa-calendar-check text-white text-2xl"></i>
            </div>
            <div class="ml-4">
                <p class="text-gray-500">Tests planifiés</p>
                <p class="text-2xl font-semibold text-gray-800">{{ $stats['scheduled_tests'] }}</p>
            </div>
        </div>
    </div>

    <div class="bg-white rounded-lg shadow p-6">
        <div class="flex items-center">
            <div class="p-3 rounded-full bg-purple-500 bg-opacity-75">
                <i class="fas fa-user-tie text-white text-2xl"></i>
            </div>
            <div class="ml-4">
                <p class="text-gray-500">Staff actif</p>
                <p class="text-2xl font-semibold text-gray-800">{{ $stats['active_staff'] }}</p>
            </div>
        </div>
    </div>
</div>

<!-- Candidats récents -->
<div class="bg-white rounded-lg shadow mb-6">
    <div class="px-6 py-4 border-b border-gray-200">
        <h3 class="text-lg font-semibold text-gray-800">Candidats récents</h3>
    </div>
    <div class="overflow-x-auto">
        <table class="w-full">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nom</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Email</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Statut</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Date</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Actions</th>
                </tr>
            </thead>
            <tbody class="divide-y divide-gray-200">
                @foreach($recent_candidates as $candidate)
                <tr>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $candidate->name }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $candidate->email }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <span class="px-2 py-1 text-xs rounded-full {{ $candidate->status_color }}">
                            {{ $candidate->status }}
                        </span>
                    </td>
                    <td class="px-6 py-4 whitespace-nowrap">{{ $candidate->created_at->format('d/m/Y') }}</td>
                    <td class="px-6 py-4 whitespace-nowrap">
                        <a href="{{ route('admin.candidates.show', $candidate->id) }}" class="text-blue-600 hover:text-blue-900">
                            Voir
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<!-- Tests à venir -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-800">Tests à venir</h3>
        </div>
        <div class="p-6">
            @foreach($upcoming_tests as $test)
            <div class="flex items-center justify-between mb-4 last:mb-0">
                <div>
                    <p class="font-medium text-gray-800">{{ $test->candidate_name }}</p>
                    <p class="text-sm text-gray-500">{{ $test->formatted_date }}</p>
                </div>
                <span class="px-3 py-1 text-sm rounded-full bg-blue-100 text-blue-800">
                    {{ $test->examiner_name }}
                </span>
            </div>
            @endforeach
        </div>
    </div>

    <!-- Graphique des résultats -->
    <div class="bg-white rounded-lg shadow">
        <div class="px-6 py-4 border-b border-gray-200">
            <h3 class="text-lg font-semibold text-gray-800">Résultats des Quiz</h3>
        </div>
        <div class="p-6">
            <canvas id="quizResults" height="200"></canvas>
        </div>
    </div>
</div>
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    const ctx = document.getElementById('quizResults').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: @json($quiz_stats['labels']),
            datasets: [{
                label: 'Score moyen',
                data: @json($quiz_stats['scores']),
                borderColor: '#3B82F6',
                tension: 0.1
            }]
        },
        options: {
            responsive: true,
            scales: {
                y: {
                    beginAtZero: true,
                    max: 100
                }
            }
        }
    });
</script>
@endsection