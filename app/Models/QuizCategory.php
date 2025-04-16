<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class QuizCategory extends Model
{
    protected $fillable = ['id','name','description'];
    
    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
    public function getQuizes($category_id){
        $quizes =   Quiz::where('quiz_category_id', $category_id)->get();
        return $quizes;
    }
    public function getSlugAttribute()
    {
        return Str::slug($this->name);
    }
}
