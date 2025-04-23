<?php

namespace App\Models;

use App\Models\Quiz;
use App\Models\option;
use Illuminate\Database\Eloquent\Model;

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
                    // Parse the URL to get the path
                    $parsedUrl = parse_url($imageUrl);
                    if (isset($parsedUrl['path'])) {
                        $path = $parsedUrl['path'];

                        // Convert URL path to filesystem path
                        $relativePath = str_replace('/images/', 'images/', $path);
                        $fullPath = public_path($relativePath);

                        // Delete the file if it exists
                        if (file_exists($fullPath)) {
                            unlink($fullPath);
                        }
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

