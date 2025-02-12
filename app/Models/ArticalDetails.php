<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ArticalDetails extends Model
{
   
    use HasFactory;

    public function getFristOne(){
        return $this->first();
    }
}
