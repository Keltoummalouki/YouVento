<!-- filepath: /c:/Users/Youcode/OneDrive/Bureau/YoucodeTest/resources/views/quizzes/index.blade.php -->
@extends('layouts.layout')

@section('content')
<div class="container">
    <h1>All Quizzes</h1>
    <a href="{{ route('quizzes.create') }}" class="btn btn-primary">Create New Quiz</a>
    <table class="table mt-4">
        <thead>
            <tr>
                <th>Title</th>
                <th>Duration</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($quizzes as $quiz)
            <tr>
                <td>{{ $quiz->title }}</td>
                <td>{{ $quiz->duree }}</td>
                <td>
                    <a href="{{ route('quizzes.show', $quiz->id) }}" class="btn btn-info">View</a>
                    <a href="{{ route('quizzes.edit', $quiz->id) }}" class="btn btn-warning">Edit</a>
                    <form action="{{ route('quizzes.destroy', $quiz->id) }}" method="POST" style="display:inline-block;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection