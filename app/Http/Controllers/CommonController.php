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
            return view('qa/' . $routeName.'/'.$route2Name);
        }
        return view('qa/'. $routeName);
    }
}
