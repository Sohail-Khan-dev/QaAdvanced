<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Quiz;
use App\Models\QuizCategory;
use Illuminate\Http\Request;

class QuizApiController extends Controller
{
    /**
     * Test API endpoint
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function test()
    {
        return response()->json([
            'status' => 'success',
            'message' => 'API is working!',
            'data' => [
                'timestamp' => now(),
                'version' => '1.0'
            ]
        ]);
    }

    /**
     * Get all quiz categories
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCategories()
    {
        $categories = QuizCategory::all()->select('name', 'description');
        
        return response()->json([
            'status' => 'success',
            'data' => $categories
        ]);
    }

    /**
     * Get a specific quiz category by ID
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getCategoryById($id)
    {
        $category = QuizCategory::find($id);
        $category->select('name', 'description');
        
        if (!$category) {
            return response()->json([
                'status' => 'error',
                'message' => 'Category not found'
            ], 404);
        }
        
        return response()->json([
            'status' => 'success',
            'data' => $category
        ]);
    }

    /**
     * Get quizzes by category ID
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getQuizzesByCategory($id)
    {
        $category = QuizCategory::find($id);
        $category->select('name', 'description');
        
        if (!$category) {
            return response()->json([
                'status' => 'error',
                'message' => 'Category not found'
            ], 404);
        }
        
        $quizzes = Quiz::where('quiz_category_id', $id)->get()->select('title', 'description');
        
        return response()->json([
            'status' => 'success',
            'data' => [
                'category' => $category,
                'quizzes' => $quizzes
            ]
        ]);
    }

    /**
     * Get quiz details with questions and options
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getQuizDetail($id)
    {
        $quiz = Quiz::with(['questions.options'])->find($id);
        $quiz->select('title', 'description');
        if (!$quiz) {
            return response()->json([
                'status' => 'error',
                'message' => 'Quiz not found'
            ], 404);
        }
        
        // // Clean up question text (remove HTML tags)
        // foreach ($quiz->questions as $question) {
        //     $question->question = strip_tags($question->question);
        //     $question->select('question');
        // }
        
        return response()->json([
            'status' => 'success',
            'data' => $quiz,
            'Questions' => $quiz->questions,
        ]);
    }
}
