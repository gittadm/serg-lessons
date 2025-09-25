<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;

class QuestionController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        $questions = Question::get();
        $questions = Question::query()->orderBy('id', 'desc')->get();
        // where('count', '<', 100) // <,>, !=, <=
        $questions = Question::where('email', 'email@email.ru')
            ->where('is_quick', 1)
            ->orderBy('id', 'desc')->get();

        $questions = Question::where('email', 'email@email.ru')
            ->where('is_quick', 1)
            ->orderBy('id', 'desc')->offset(2)->limit(3)->get();

        $question = Question::where('email', 'email555@email.ru')
            ->where('is_quick', 1)
            ->orderBy('id', 'desc')->first();

        $questions = Question::query()->orderBy('id')->get();

        return view('questions.index', compact('questions', 'question'));
    }

    public function show(int $id)
    {
//        $question = Question::where('id', $id)->first();
//
//        if ($question) {
//            return view('questions.show', compact('question'));
//        }
//
//        abort(404);

        //$question = Question::find($id);

        $question = Question::findOrFail($id);
        return view('questions.show', compact('question'));
    }

    public function create()
    {
        return view('questions.create');
    }

    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|min:2|max:40',
            'description' => ['required', 'min:5'],
        ]);

        if ($validator->fails()) {
            return redirect()->route('questions.create')
                ->withErrors($validator)
                ->withInput();
        }

        //dd($request->all());

        // 1 способ
//        $question = new Question();
//
//        // нет $question->id
//
//        $question->name = $request->name;
//        $question->description = $request->description;
//        $question->is_quick = 1;
//
//        $question->save();
//
//        // уже есть $question->id

        // 2 способ

//        $question = Question::create([
//            'name' => $request->name,
//            'description' => $request->description,
//        ]);

        // или

        // $question = Question::create($request->all());

        // $question = Question::create($request->except('_token'));
        $question = Question::create($validator->validated());
        return redirect()->route('questions.show', [$question->id])
            ->with('message', 'Данные сохранены');
    }
}
