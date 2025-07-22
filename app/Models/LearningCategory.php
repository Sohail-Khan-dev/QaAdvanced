<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LearningCategory extends Model
{
    protected $fillable = ['name', 'slug'];

    public function topicName()
    {
        return $this->hasMany(TopicName::class);
    }   
    
}
