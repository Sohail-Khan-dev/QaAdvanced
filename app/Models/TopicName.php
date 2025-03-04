<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TopicName extends Model
{
    protected $table = 'topic_name';
    protected $fillable = ['name', 'description', 'topic_id'];

}
