<?php

namespace App\Http\Controllers;

use App\Models\ArticalDetails;
use Illuminate\Http\Request;

class ArticalDetailsController extends Controller
{
    
    // this function is for the Dashboard only not used in any other area. 
    public function getTopics(){
        $articals  = ArticalDetails::all();             // this is also called when the artical is opened 
        // dd($articals);                                  // We need id , slug and title only in the details page no content is required. 
       return response()->json($articals);
    }
    public function storeTopic(Request $request)
    {
        // Call the model method statically if it is static; otherwise, instantiate the model
        $artical = ArticalDetails::storeTopic([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => $request->slug
        ]);
        return response()->json($artical);
    }
}
