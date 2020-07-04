<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Carbon;


class Question extends Model
{
    //
    private static $title,
    $content,
    $question_id;

    public static function getAllQuestions()
    {
        $datas = DB::table('questions')->get();
        return $datas;
    }

    public static function getQuestionById($id)
    {
        $datas = DB::table('questions')
                ->where('id',$id)
                ->get();
        return $datas;
    }

    public static function getAnswers($id)
    {
        $datas = DB::table('questions')
                ->select('answers.*')
                ->join('answers', 'questions.id','=','answers.question_id')
                ->where('questions.id', $id)
                ->get();

        return $datas;
    }

    public function createQuestion()
    {
        $data = DB::table('questions')
        ->insert(
            [
                'title' => $this->title,
                'content' =>  $this->content,
                'created_at' => Carbon::now()
            ]
        );
    }

    public function updateQuestion($id)
    {
        $data = DB::table('questions')
        ->where('id',$id)
        ->update(
            [
                'title' => $this->title,
                'content' =>  $this->content,
                'updated_at' => Carbon::now()
            ]
        );
    }

    public static function deleteQuestionById($id)
    {
        $data = DB::table('questions')
                ->where('id',$id)
                ->delete();
    }
}
