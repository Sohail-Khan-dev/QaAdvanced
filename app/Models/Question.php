<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Question extends Model
{
    protected $fillable = ['question', 'quiz_id', 'explanation'];

    protected static function boot()
    {
        parent::boot();

        // Clean up images when question is deleted
        static::deleting(function($question) {
            // Extract image URLs from content
            preg_match_all('/<img[^>]+src="([^">]+)"/', $question->question, $matches);
            
            if (!empty($matches[1])) {
                foreach ($matches[1] as $imageUrl) {
                    // Get path relative to storage
                    $path = parse_url($imageUrl, PHP_URL_PATH);
                    $path = str_replace('/storage/', '', $path);
                    
                    if (Storage::disk('public')->exists($path)) {
                        Storage::disk('public')->delete($path);
                    }
                }
            }
        });
    }
    public function quiz()
    {
        return $this->belongsTo(Quiz::class);
    }
    public function options()
    {
        return $this->hasMany(Option::class);
    }

}

