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
        $blogs = BlogDetails::orderBy('created_at', 'desc')->get();
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
        $blogs = BlogDetails::orderBy('created_at', 'desc')->get();
        return response()->json(['blog'=>$artical, 'blogs'=>$blogs]);
    }
    // Now we will update the blog
    public function updateBlog(Request $request)
    {
        $blog = BlogDetails::find($request->id);
        if (!$blog) {
            return response()->json(['error' => 'Blog not found'], 404);
        }
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->slug = $request->topic_id;
        $blog->learning_category_id = $request->category_id;
        $blog->save();
        $blogs = BlogDetails::orderBy('created_at', 'desc')->get();
        return response()->json(['blogs'=>$blogs, "Message" => "Blog Updated successfully", 'blog'=>$blog]);
    }
    public function updateCategory(Request $request)
    {
        $category = LearningCategory::find($request->id);
        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
        $categories = LearningCategory::orderBy('created_at', 'desc')->get();
        return response()->json(['categories'=>$categories, "Message" => "Category Updated successfully", 'category'=>$category]);
    }
    public function updateTopic(Request $request)
    {
        $topic = TopicName::find($request->id);
        if (!$topic) {
            return response()->json(['error' => 'Topic not found'], 404);
        }
        $topic->name = $request->name;
        $topic->description = $request->slug;
        $topic->topic_id = Str::slug($request->name);  // this is id used in the front of the topic syllabus .        
        $topic->learning_category_id = $request->category_id;
        $topic->save();
        $topics = TopicName::orderBy('created_at', 'desc')->get();
        return response()->json(['topics'=>$topics, "Message" => "Topic Updated successfully", 'topic'=>$topic]);
    }

    public function storeCategory(Request $request)
    {
        $cat = new  LearningCategory();
        $cat->name = $request->name;
        $cat->slug = $request->slug;
        $cat->save();
        $categories = LearningCategory::orderBy('created_at', 'desc')->get();
        return response()->json(['categories'=>$categories, "Message" => "Sub category Saved successfully", 'category'=>$cat]);
    }
    public function getCategories()
    {
        $categories = LearningCategory::orderBy('created_at', 'desc')->get();
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
        $topics = TopicName::orderBy('created_at', 'desc')->get();
        return response()->json(['topics' => $topics, 'topic'=>$topic]);
    }
    public function getTopic($id = null)
    {
        $topics = TopicName::orderBy('created_at', 'desc')->get();
        return response()->json($topics);
    }
    public function deleteCategory($id)
    {
        $category = LearningCategory::find($id);
        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }
        $category->delete();
        $categories = LearningCategory::orderBy('created_at', 'desc')->get();
        return response()->json(['categories'=>$categories, "Message" => "category Deleted successfully"],200);
    }
    public function deleteTopic($id)
    {
        $topic = TopicName::find($id);
        if (!$topic) {
            return response()->json(['error' => 'Topic not found'], 404);
        }
        $topic->delete();
        $topics = TopicName::orderBy('created_at', 'desc')->get();
        return response()->json(['topics'=>$topics, "Message" => "Topic Deleted successfully"],200);
    }
    public function deleteBlog($id)
    {
        $blog = BlogDetails::find($id);
        if (!$blog) {
            return response()->json(['error' => 'Blog not found'], 404);
        }
        $blog->delete();
        $blogs = BlogDetails::orderBy('created_at', 'desc')->get();
        return response()->json(['blogs'=>$blogs, "Message" => "Blog Deleted successfully"],200);
    }
}
