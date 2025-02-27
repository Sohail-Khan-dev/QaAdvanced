<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\option;
use App\Models\Question;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(Request $request)
    {
        return "this is Quiz Controller";
    }
    public function getQuiz()
    {
        
        $quiz = Quiz::with(['questions.options'])->get();
        return response()->json($quiz);
    }
    public function store(Request $request)
    {
        // dd($request->explanation);
        // Find an existing quiz or create a new one
        $quiz = Quiz::firstOrCreate(
            ['id' => $request->quiz],  // Check if quiz exists by ID
            [
                'title' => 'Quiz ' . $request->quiz,
                'description' => 'This is Quiz ' . $request->quiz,
            ]
        );

        // Create the question for this quiz
        $question = $quiz->questions()->create([
            'question' => $request->question,
            'explanation' => $request->explanation ?? " ",
        ]);

        // Prepare options data
        $options = [];
        foreach ($request->options as $option) {
            $options[] = [
                'option_text' => $option['text'],
                'is_correct' => isset($option['is_correct']) ? 1 : 0, // Ensure checkbox values are handled
            ];
        }

        // Insert options for the created question
        $question->options()->createMany($options);

        return response()->json(['message' => 'Quiz, question, and options saved successfully!']);
    }
}
