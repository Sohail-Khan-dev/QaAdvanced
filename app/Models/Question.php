<?php

namespace App\Models;
use App\Models\Quiz;
use App\Models\option;
use Illuminate\Database\Eloquent\Model;

class Question extends Model
{
    protected $fillable = ['question','quiz_id','explanation'];
    
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
    public function options()
    {
        return $this->hasMany(Option::class);
    }
}
