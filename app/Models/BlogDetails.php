<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogDetails extends Model
{
   
    use HasFactory;
    protected $table = 'blogs_detail';
    protected $fillable = ['title','content','slug','learning_category_id'];
    
    
    // Slug is the topic_id used in the showdetail of topic. this id is used in UL of that topic 
    public static function storeTopic($data)
    {
        return self::create($data); // Use create() instead of manually instantiating and saving
    }
}
