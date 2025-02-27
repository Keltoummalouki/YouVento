<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\Quiz;
use App\Models\Test;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $stats = [
            'candidates_count' => Candidate::count(),
            'completed_quizzes' => Quiz::where('status', 'completed')->count(),
            'scheduled_tests' => Test::where('date', '>=', now())->count(),
            'active_staff' => User::where('role', 'staff')->where('status', 'active')->count(),
        ];

        $recent_candidates = Candidate::latest()
            ->take(5)
            ->get()
            ->map(function ($candidate) {
                $candidate->status_color = $this->getStatusColor($candidate->status);
                return $candidate;
            });

        $upcoming_tests = Test::with(['candidate', 'examiner'])
            ->where('date', '>=', now())
            ->orderBy('date')
            ->take(5)
            ->get()
            ->map(function ($test) {
                return (object) [
                    'candidate_name' => $test->candidate->name,
                    'examiner_name' => $test->examiner->name,
                    'formatted_date' => $test->date->format('d/m/Y H:i'),
                ];
            });

        $quiz_stats = $this->getQuizStats();

        return view('admin.dashboard', compact(
            'stats',
            'recent_candidates',
            'upcoming_tests',
            'quiz_stats'
        ));
    }

    private function getStatusColor($status)
    {
        return [
            'pending' => 'bg-yellow-100 text-yellow-800',
            'approved' => 'bg-green-100 text-green-800',
            'rejected' => 'bg-red-100 text-red-800',
        ][$status] ?? 'bg-gray-100 text-gray-800';
    }

    private function getQuizStats()
    {
        // Simuler des données pour le graphique
        return [
            'labels' => ['Jan', 'Fév', 'Mar', 'Avr', 'Mai'],
            'scores' => [75, 68, 82, 74, 80],
        ];
    }
}