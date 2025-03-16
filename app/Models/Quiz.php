<?php

namespace App\Models;

use App\Models\Question;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['title','description'];
    
    public function quizCategory()  {
        return $this->belongsTo(QuizCategory::class);
    }
    public function questions()
    {
        return $this->hasMany(Question::class);
    }
}
