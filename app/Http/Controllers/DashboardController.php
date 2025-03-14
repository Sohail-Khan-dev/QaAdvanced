<?php

namespace App\Http\Controllers;

class DashboardController extends Controller
{
    //
    function index(){
        $categories = \App\Models\LearningCategory::all();
        $topics = \App\Models\TopicName::all();
        return view('dashboard.index',compact('topics','categories'));
    }
    function showView($routeName){
        return view("dashboard.$routeName");
    }
   

}
