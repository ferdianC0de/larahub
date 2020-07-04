<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Question;

class QuestionController extends Controller
{
    //
    public function index()
    {
        $questions = Question::getAllQuestions();
        return view('questions')->with('questions', $questions);
    }

    public function detail($id)
    {
        $question = Question::getQuestionById($id);
        $answers = Question::getAnswers($id);
        return view('question-detail')->with([ 'answers' => $answers, 'question' => $question]);
    }

    public function create()
    {
        return view('questions-create');
    }

    public function edit($id)
    {
        $question = Question::getQuestionById($id);
        // return $question;
        return view('questions-create')->with('question', $question);
    }

    public function delete($id)
    {
        $question = Question::deleteQuestionById($id);
        return redirect('pertanyaan');
        // return "delete".$id;
    }

    public function store(Request $request)
    {
        $questions = new Question();
        $questions->title = $request->title;
        $questions->content = $request->content;
        $questions->createQuestion();
        return redirect('pertanyaan');
    }
    public function update(Request $request, $id)
    {
        $questions = new Question();
        $questions->title = $request->title;
        $questions->content = $request->content;
        $questions->updateQuestion($id);

        $question = Question::getQuestionById($id);
        return view('questions-create')->with('question', $question);
    }
}
