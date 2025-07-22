<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class option extends Model
{
    protected $fillable = ['question_id','option','is_correct'];
    
    public function question()
    {
        return $this->belongsTo(Question::class);
    }
}
