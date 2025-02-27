<!-- filepath: /c:/Users/Youcode/OneDrive/Bureau/YoucodeTest/resources/views/quiz/edit.blade.php -->
@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>Edit Quiz</h1>
    <form action="{{ route('quizzes.update', $quiz->id) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $quiz->title }}" required>
        </div>
        <div class="form-group">
            <label for="duree">Duration</label>
            <input type="text" class="form-control" id="duree" name="duree" value="{{ $quiz->duree }}" required>
        </div>
        <div class="form-group">
            <label for="questions">Questions</label>
            <div id="questions">
                @foreach($quiz->questions as $question)
                    <div class="question">
                        <input type="text" class="form-control" name="questions[]" value="{{ $question }}" required>
                    </div>
                @endforeach
            </div>
            <button type="button" class="btn btn-secondary" id="add-question">Add Question</button>
        </div>
        <button type="submit" class="btn btn-primary">Update Quiz</button>
    </form>
</div>

<script>
    document.getElementById('add-question').addEventListener('click', function() {
        var questionDiv = document.createElement('div');
        questionDiv.classList.add('question');
        questionDiv.innerHTML = '<input type="text" class="form-control" name="questions[]" placeholder="Enter question" required>';
        document.getElementById('questions').appendChild(questionDiv);
    });
</script>
@endsection