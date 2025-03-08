<?php

namespace App\Http\Controllers;

use App\Models\TopicName;
use App\Models\BlogDetails;

class CommonController extends Controller
{
    //
    public function showView($routeName, $route2Name = null , $id = null){
        // dd("ehre ", $routeName, $route2Name, $id);
        if($id){
            $artical = BlogDetails::find($id);
            return view('qa/' . $routeName.'/'.$route2Name, compact('artical'));
        }
        if($route2Name){
            $topics = TopicName::all();
            // Here we will pass the Learning Category Along with the Topic Name
            return view('qa/' . $routeName.'/'.$route2Name, compact('topics'));
        }
        return view('qa/'. $routeName);
    }

    public function showSyllabus($category_id){
        $topics = TopicName::where("learning_category_id", $category_id)->get();
        return view("qa/qatopics/softwareTesting", compact('topics', "category_id"));
    }
}
