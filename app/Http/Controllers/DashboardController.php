<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\TopicName;
use App\Models\QuizCategory;
use App\Models\LearningCategory;

class DashboardController extends Controller
{
    //
    function index(){
        $categories = LearningCategory::all();
        $topics = TopicName::all();
        $quiz_categories = QuizCategory::all();
        $quizzes = Quiz::all();
        return view('dashboard.index',compact('topics','categories','quiz_categories', 'quizzes'));
    }
    function showView($routeName){
        return view("dashboard.$routeName");
    }
   

}
