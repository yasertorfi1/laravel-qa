<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['title', 'body'];
    
    public function user(){
        return $this->belongsTo(User::class);
    }

    //$userEmail = Question::find(1)->user->email;
}
