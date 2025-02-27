@extends('layouts.admin')

@section('content')
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

    <div class="container mx-auto p-6 bg-white shadow-md rounded-lg">
        <h1 class="text-2xl font-bold mb-6">Create a New Quiz</h1>
        <form action="{{ route('quizzes.store') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="title" class="block text-gray-700 font-bold mb-2">Title</label>
                <input type="text" class="form-input w-full border border-gray-300 rounded-lg p-2" id="title" name="title" required>
            </div>
            <div class="mb-4">
                <label for="duree" class="block text-gray-700 font-bold mb-2">Duration</label>
                <input type="text" class="form-input w-full border border-gray-300 rounded-lg p-2" id="duree" name="duree" required>
            </div>
            <div class="mb-4">
                <label for="questions" class="block text-gray-700 font-bold mb-2">Questions</label>
                <div id="questions">
                    <div class="question mb-2">
                        <input type="text" class="form-input w-full border border-gray-300 rounded-lg p-2" name="questions[]" placeholder="Enter question" required>
                    </div>
                </div>
                <button type="button" class="bg-gray-500 text-white px-4 py-2 rounded-lg hover:bg-gray-600" id="add-question">Add Question</button>
            </div>
            <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600">Create Quiz</button>
        </form>
    </div>
</div>

<script>
    document.getElementById('add-question').addEventListener('click', function() {
        var questionDiv = document.createElement('div');
        questionDiv.classList.add('question', 'mb-2');
        questionDiv.innerHTML = '<input type="text" class="form-input w-full border border-gray-300 rounded-lg p-2" name="questions[]" placeholder="Enter question" required>';
        document.getElementById('questions').appendChild(questionDiv);
    });
</script>
@endsection