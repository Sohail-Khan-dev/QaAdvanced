<?php

namespace App\Traits;

use App\Models\BlogDetails;
use App\Models\LearningCategory;
use App\Models\TopicName;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

trait BlogOperationsTrait
{
    /**
     * Get blog details by category ID or get all blogs
     *
     * @param int|null $category_id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getBlogsByCategory($category_id = null)
    {
        if ($category_id) {
            $blogs = BlogDetails::select('id', 'title', 'slug')
                ->where('learning_category_id', $category_id)
                ->get();
            return response()->json($blogs);
        }
        
        $blogs = BlogDetails::orderBy('created_at', 'desc')->get();
        return response()->json($blogs);
    }

    /**
     * Store a new blog
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createBlog(Request $request)
    {
        $blog = BlogDetails::create([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => $request->topic_id,
            'learning_category_id' => $request->category_id,
            'user_id' => $request->user_id ?? 1,
            'tags' => $request->tags ?? '',
        ]);
        
        $blogs = BlogDetails::orderBy('created_at', 'desc')->get();
        
        return response()->json([
            'blog' => $blog, 
            'blogs' => $blogs
        ]);
    }

    /**
     * Update an existing blog
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function modifyBlog(Request $request)
    {
        $blog = BlogDetails::find($request->id);
        
        if (!$blog) {
            return response()->json(['error' => 'Blog not found'], 404);
        }
        
        $blog->title = $request->title;
        $blog->content = $request->content;
        $blog->slug = $request->topic_id;
        $blog->learning_category_id = $request->category_id;
        $blog->tags = $request->tags ?? $blog->tags;
        $blog->save();
        
        $blogs = BlogDetails::orderBy('created_at', 'desc')->get();
        
        return response()->json([
            'blog' => $blog, 
            'blogs' => $blogs
        ]);
    }

    /**
     * Delete a blog
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function removeBlog($id)
    {
        $blog = BlogDetails::find($id);
        
        if (!$blog) {
            return response()->json(['error' => 'Blog not found'], 404);
        }
        
        $blog->delete();
        
        $blogs = BlogDetails::orderBy('created_at', 'desc')->get();
        
        return response()->json([
            'blogs' => $blogs, 
            'message' => 'Blog deleted successfully'
        ], 200);
    }

    /**
     * Store a new category
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createCategory(Request $request)
    {
        $category = new LearningCategory();
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
        
        $categories = LearningCategory::orderBy('created_at', 'desc')->get();
        
        return response()->json([
            'categories' => $categories, 
            'message' => 'Category saved successfully', 
            'category' => $category
        ]);
    }

    /**
     * Update an existing category
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function modifyCategory(Request $request)
    {
        $category = LearningCategory::find($request->id);
        
        if (!$category) {
            return response()->json(['error' => 'Category not found'], 404);
        }
        
        $category->name = $request->name;
        $category->slug = $request->slug;
        $category->save();
        
        $categories = LearningCategory::orderBy('created_at', 'desc')->get();
        
        return response()->json([
            'categories' => $categories, 
            'message' => 'Category updated successfully', 
            'category' => $category
        ]);
    }

    /**
     * Get all categories
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllCategories()
    {
        $categories = LearningCategory::orderBy('created_at', 'desc')->get();
        return response()->json($categories);
    }

    /**
     * Store a new topic
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createTopic(Request $request)
    {
        $topic = new TopicName();
        $topic->name = $request->name;
        $topic->description = $request->slug;
        $topic->topic_id = Str::slug($request->name);
        $topic->learning_category_id = $request->category_id;
        $topic->save();
        
        $topics = TopicName::orderBy('created_at', 'desc')->get();
        
        return response()->json([
            'topics' => $topics, 
            'topic' => $topic
        ]);
    }

    /**
     * Get all topics
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllTopics()
    {
        $topics = TopicName::orderBy('created_at', 'desc')->get();
        return response()->json($topics);
    }
}
