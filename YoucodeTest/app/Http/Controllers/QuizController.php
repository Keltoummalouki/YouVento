<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Quiz;

class QuizController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $quizzes = Quiz::all();
        return view('quizzes.index', compact('quizzes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('quizzes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'duree' => 'required|string|max:255',
            'questions' => 'required|array',
            'questions.*' => 'required|string|max:255',
        ]);

        $quiz = new Quiz();
        $quiz->title = $request->title;
        $quiz->duree = $request->duree;
        $quiz->questions = json_encode($request->questions);
        $quiz->save();

        return redirect()->route('quizzes.index')->with('success', 'Quiz created successfully.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function show(Quiz $quiz)
    {
        return view('quizzes.show', compact('quizzes'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function edit(Quiz $quiz)
    {
        return view('quizzes.edit', compact('quizzes'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Quiz $quiz)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'duree' => 'required|string|max:255',
            'questions' => 'required|array',
            'questions.*' => 'required|string|max:255',
        ]);

        $quiz->title = $request->title;
        $quiz->duree = $request->duree;
        $quiz->questions = json_encode($request->questions);
        $quiz->save();

        return redirect()->route('quizzes.index')->with('success', 'Quiz updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Quiz  $quiz
     * @return \Illuminate\Http\Response
     */
    public function destroy(Quiz $quiz)
    {
        $quiz->delete();
        return redirect()->route('quizzes.index')->with('success', 'Quiz deleted successfully.');
    }
}