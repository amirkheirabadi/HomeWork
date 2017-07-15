<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Mail;

class Question extends Model
{
   protected $table = "questions";
   protected $parimaryKey = "id";

   public function save(array $options = [])
   {
        parent::save();
        $data = [
            'name' => $this->name,
            'email' => $this->email,
            'mobile' => $this->mobile,
            'text' => $this->text
        ];

        Mail::send('mails.question', $data, function ($message) {
        $message->subject('New Question')
                ->to(env('QUESTION_EMAIL'), env('QUESTION_NAME'));
        });
   }
}
