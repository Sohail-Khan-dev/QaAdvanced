<?php

namespace App\Models;

use App\Models\Question;
use App\Traits\ModelOperationsTrait;
use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    use ModelOperationsTrait;

    protected $fillable = ['title','description','quiz_category_id'];

    public function quizCategory()
    {
        return $this->belongsTo(QuizCategory::class);
    }

    public function questions()
    {
        return $this->hasMany(Question::class);
    }

    public function getCategoryName()
    {
        return $this->quizCategory ? $this->quizCategory->name : null;
    }
}
