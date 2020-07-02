<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;
use App\Answer;

class AnswerController extends Controller
{
    //
    public function index($quest_id)
    {
        $answers = Question::find($quest_id)->answers;
        return view('answers')->with([ 'answers' => $answers, 'quest_id' => $quest_id]);
    }

    public function store(Request $request, $quest_id)
    {
        $answer = new Answer();
        $answer->title = $request->title;
        $answer->content = $request->content;
        $answer->question_id = Question::find($quest_id)->id;
        // return $answer;
        $answer->save();
        return redirect('jawaban/'.$quest_id);
    }
}
