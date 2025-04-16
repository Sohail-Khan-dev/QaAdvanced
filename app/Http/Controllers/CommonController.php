<?php

namespace App\Http\Controllers;

use App\Models\TopicName;
use App\Models\BlogDetails;
use App\Models\QuizCategory;

class CommonController extends Controller
{
    //
    public function showView($routeName, $route2Name = null , $id = null){
        if($routeName === 'quiz' && $route2Name){
            // The $route2Name is a slug, we need to find the category by converting the slug back to a name
            // Since we don't have a slug column, we need to find all categories and filter by slug
            $categories = QuizCategory::all();
            $category = null;

            foreach($categories as $cat) {
                if($cat->slug === $route2Name) {
                    $category = $cat;
                    break;
                }
            }

            if($category) {
                $quizzes = collect($category->getQuizes($category->id));
                return view('qa/' . $routeName, compact('category', 'quizzes'));
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
        return view('qa/'. $routeName);
    }

    public function showSyllabus($category_id){
        $topics = TopicName::where("learning_category_id", $category_id)->get();
        return view("qa/qatopics/softwareTesting", compact('topics', "category_id"));
    }
}
