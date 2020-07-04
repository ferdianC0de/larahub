<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use DB;
use Illuminate\Support\Carbon;

class Answer extends Model
{
    //
    private static $title,
    $content,
    $question_id;

    public function createAnswer()
    {
        $data = DB::table('answers')
        ->insert(
            [
                'title' => $this->title,
                'content' =>  $this->content,
                'question_id' => $this->question_id,
                'created_at' => Carbon::now()
            ]
        );
    }
}
