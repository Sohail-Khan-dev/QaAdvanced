<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    //
    public function showView($routeName, $route2Name = null){
        // dd("here in the path " , $routeName , $route2Name);
        if($route2Name){
            return view('qa/' . $routeName.'/'.$route2Name);
        }
        return view('qa/'. $routeName);
    }
}
