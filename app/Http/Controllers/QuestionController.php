<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    //
    public function index()
    {
        $questions = Question::all();
        // return $questions;
        return view('questions')->with('questions', $questions);
    }

    public function create()
    {
        return view('questions-create');
    }

    public function store(Request $request)
    {
        $questions = new Question();
        $questions->title = $request->title;
        $questions->content = $request->content;
        $questions->save();
        return redirect('pertanyaan');
    }
}
