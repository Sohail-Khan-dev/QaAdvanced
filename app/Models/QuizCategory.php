<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class QuizCategory extends Model
{
    protected $fillable = ['id','name','description'];
    
    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
}
