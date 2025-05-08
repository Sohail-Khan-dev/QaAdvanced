<?php

namespace App\Http\Controllers;

use App\Models\TopicName;
use App\Models\BlogDetails;
use App\Models\QuizCategory;
use App\Models\Quiz;

class CommonController extends Controller
{
    //
    public function showView($routeName, $route2Name = null , $id = null){
        if($routeName === 'quiz'){
            if($route2Name){
                // Find the category by slug using the new method
                $category = QuizCategory::findBySlug($route2Name);

                if($category) {
                    $quizzes = collect($category->getQuizes($category->id));
                    return view('qa/' . $routeName, compact('category', 'quizzes'));
                }
            } else {
                // If no category is specified, show all quizzes
                $quizzes = collect(Quiz::all());
                return view('qa/' . $routeName, compact('quizzes'));
            }
        }
        if($id){
            $artical = BlogDetails::find($id);
            return view('qa/' . $routeName.'/'.$route2Name, compact('artical'));
        }
        if($route2Name){
            $topics = TopicName::all();
            // Here we will pass the Learning Category Along with the Topic Name
            return view('qa/' . $routeName.'/'.$route2Name, compact('topics'));
        }
        if($routeName === 'blog'){
            // Get 5 latest blogs per page, ordered by creation date (newest first)
            $blogs = BlogDetails::with('user')->orderBy('created_at', 'desc')->paginate(6);
            return view('qa/' . $routeName , compact('blogs'));
        }
        return view('qa/'. $routeName);
    }

    public function showSyllabus($category_id){
        $topics = TopicName::where("learning_category_id", $category_id)->get();
        return view("qa/qatopics/softwareTesting", compact('topics', "category_id"));
    }
}
