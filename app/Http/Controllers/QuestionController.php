<?php

namespace App\Http\Controllers;

use App\Models\Question;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        $questions = Question::get();
        $questions = Question::orderBy('id', 'desc')->get();
        // where('count', '<', 100) // <,>, !=, <=
        $questions = Question::where('email', 'email@email.ru')
            ->where('is_quick', 1)
            ->orderBy('id', 'desc')->get();

        $questions = Question::where('email', 'email@email.ru')
            ->where('is_quick', 1)
            ->orderBy('id', 'desc')->offset(2)->limit(3)->get();

        $question = Question::where('email', 'email@email.ru')
            ->where('is_quick', 1)
            ->orderBy('id', 'desc')->first();

        dd($question->id);

        return view('questions.index', compact('questions'));
    }
}
