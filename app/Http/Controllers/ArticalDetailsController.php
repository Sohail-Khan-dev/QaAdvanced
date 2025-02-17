<?php

namespace App\Http\Controllers;

use App\Models\ArticalDetails;
use Illuminate\http\Request;

class ArticalDetailsController extends Controller
{
    public function getTopic(){

        $articals  = ArticalDetails::all();
       return response()->json($articals);
    }
    public function storeTopic(Request $request)
    {
        dd($request->all());
        return $request;
    }
}
