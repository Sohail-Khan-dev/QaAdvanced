<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BlogDetails extends Model
{
    use HasFactory;

    protected $table = 'blogs_detail';
    protected $fillable = ['title', 'content', 'slug', 'learning_category_id', 'user_id', 'tags'];

    public function learningCategory()
    {
        return $this->belongsTo(LearningCategory::class, 'learning_category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Slug is the topic_id used in the showdetail of topic. this id is used in UL of that topic
    public static function storeTopic($data)
    {
        return self::create($data); // Use create() instead of manually instantiating and saving
    }

    /**
     * Get the tags attribute.
     *
     * @param  string|null  $value
     * @return array|null
     */
    public function getTagsAttribute($value)
    {
        if (empty($value)) {
            return null;
        }

        return is_string($value) ? explode(',', $value) : $value;
    }

    /**
     * Set the tags attribute.
     *
     * @param  array|string  $value
     * @return void
     */
    public function setTagsAttribute($value)
    {
        if (is_array($value)) {
            $this->attributes['tags'] = implode(',', $value);
        } else {
            $this->attributes['tags'] = $value;
        }
    }

    /**
     * Get the author name attribute.
     *
     * @return string
     */
    public function getAuthorNameAttribute()
    {
        return $this->user ? $this->user->name : 'Unknown Author';
    }
}

