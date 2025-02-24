<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticalDetails extends Model
{
   
    use HasFactory;
    protected $table = 'artical_details';
    protected $fillable = ['title','content'];

    public static function storeTopic($data)
    {
        return self::create($data); // Use create() instead of manually instantiating and saving
    }
}
