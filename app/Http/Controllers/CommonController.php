<?php

namespace App\Http\Controllers;

use App\Models\ArticalDetails;

class CommonController extends Controller
{
    //
    public function showView($routeName, $route2Name = null , $id = null){
        if($id){
            $artical = ArticalDetails::find($id);
            return view('qa/' . $routeName.'/'.$route2Name, compact('artical'));
        }
        if($route2Name){
            $topics = \App\Models\TopicName::all();
            // Here we will pass the Learning Category Along with the Topic Name
            return view('qa/' . $routeName.'/'.$route2Name, compact('topics'));
        }
        return view('qa/'. $routeName);
    }
}
