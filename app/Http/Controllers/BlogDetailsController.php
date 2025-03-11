<?php

namespace App\Http\Controllers;

use App\Models\TopicName;
use App\Models\BlogDetails;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\LearningCategory;

class BlogDetailsController extends Controller
{
    public function getBlogDetail($category_id = null)
    {
        if ($category_id) {   // This is read from the software testing scripts and else is for the Dashboard 
            $blogs  = BlogDetails::select('id', 'title', 'slug')->where('learning_category_id', $category_id)->get();
        } else
            $blogs = BlogDetails::all();
        return response()->json($blogs);
    }
    public function storeBlog(Request $request)
    {
        // Call the model method statically if it is static; otherwise, instantiate the model
        $artical = BlogDetails::storeTopic([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => $request->topic_id,
            'learning_category_id' => $request->category_id,
        ]);
        return response()->json(['blog'=>$artical]);
    }

    public function storeCategory(Request $request)
    {
        $cat = new  LearningCategory();
        $cat->name = $request->name;
        $cat->slug = $request->slug;
        $cat->save();
        $categories = LearningCategory::all();
        return response()->json(['categories'=>$categories, "Message" => "Sub category Saved successfully", 'category'=>$cat]);
    }
    public function getCategories()
    {
        $categories = LearningCategory::all();
        return response()->json($categories);
    }
    public function storeTopic(Request $request)
    {
        // Here we will store the Category id along with topic 
        $topic = new TopicName();
        $topic->name = $request->name;
        $topic->description = $request->slug;
        $topic->topic_id = Str::slug($request->name);  // this is id used in the front of the topic syllabus .        
        $topic->learning_category_id = $request->category_id;
        $topic->save(); 
        $topics = TopicName::all();
        return response()->json(['topics' => $topics, 'topic'=>$topic]);
    }
    public function getTopic($id = null)
    {
        $topics = TopicName::all();
        return response()->json($topics);
    }
}
