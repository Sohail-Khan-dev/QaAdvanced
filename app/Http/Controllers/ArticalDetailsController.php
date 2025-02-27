<?php

namespace App\Http\Controllers;

use App\Models\ArticalDetails;
use Illuminate\Http\Request;

class ArticalDetailsController extends Controller
{
    public function getTopics(){
        $articals  = ArticalDetails::all();
        // dd($articals);
       return response()->json($articals);
    }
    public function storeTopic(Request $request)
    {
        // Call the model method statically if it is static; otherwise, instantiate the model
        $artical = ArticalDetails::storeTopic([
            'title' => $request->title,
            'content' => $request->content,
        ]);
        return response()->json($artical);
    }
}
