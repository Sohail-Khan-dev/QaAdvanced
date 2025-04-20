<?php

namespace App\Models;

use Illuminate\Support\Str;
use App\Traits\ModelOperationsTrait;
use Illuminate\Database\Eloquent\Model;

class QuizCategory extends Model
{
    use ModelOperationsTrait;

    protected $fillable = ['id','name','description'];

    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }

    public function getQuizes($category_id)
    {
        return Quiz::getRecordsByField('quiz_category_id', $category_id);
    }

    public function getSlugAttribute()
    {
        return Str::slug($this->name);
    }
}
