<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\BlogDetails;
use App\Models\LearningCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogApiController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $request->validate([
            'title' => 'required|string|max:255',
            'content' => 'required|string',
            'category_name' => 'nullable|string|max:255',
            'tags' => 'nullable|string',
            'user_id' => 'nullable|integer|exists:users,id',
        ]);

        // Find or create the default category if no category is specified
        $category = null;
        if ($request->has('category_name')) {
            $category = LearningCategory::where('name', $request->category_name)->first();
            if (!$category) {
                $category = LearningCategory::create([
                    'name' => $request->category_name,
                    'slug' => Str::slug($request->category_name)
                ]);
            }
        } else {
            // Get or create default category
            $category = LearningCategory::firstOrCreate(
                ['name' => 'Default Category'],
                ['slug' => 'default-category']
            );
        }

        // Create the blog
        $blog = BlogDetails::create([
            'title' => $request->title,
            'content' => $request->content,
            'slug' => Str::slug($request->title),
            'learning_category_id' => $category->id,
            'user_id' => $request->user_id ?? 1, // Default to 1 if not provided
            'tags' => $request->tags ?? ""
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Blog created successfully',
            'data' => [
                'blog' => $blog,
                'category' => $category
            ]
        ], 201);
    }

    public function index()
    {
        $blogs = BlogDetails::with(['learningCategory', 'user'])->get();
        return response()->json([
            'status' => 'success',
            'data' => $blogs
        ]);
    }

    public function show($id)
    {
        $blog = BlogDetails::with(['learningCategory', 'user'])->find($id);

        if (!$blog) {
            return response()->json([
                'status' => 'error',
                'message' => 'Blog not found'
            ], 404);
        }

        return response()->json([
            'status' => 'success',
            'data' => $blog
        ]);
    }
}