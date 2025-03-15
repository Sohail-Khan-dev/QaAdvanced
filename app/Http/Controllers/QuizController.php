<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
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
    public function storeQuestion(Request $request){
        // dd($request->quiz);
        $request->validate([
            'quiz' => 'required|exists:quizzes,id',
            'question' => 'required|string',
            'explanation' => 'nullable|string',
            'options' => 'nullable|array',
            'options.*.is_correct' => 'nullable|boolean',
        ]);

        $quiz = Quiz::find($request->quiz);
        // dd($quiz);
        $question = $quiz->questions()->create([
            'question' => $request->question,
            'explanation' => $request->explanation ?? " ",
        ]);

        $options = [];
        if ($request->has('options')) {
            foreach ($request->options as $option) {
            $options[] = [
                'option' => $option['text'],
                'is_correct' => isset($option['is_correct']) ? 1 : 0,
            ];
            }
            // dd($options);
            $question->options()->createMany($options);

        }

        return response()->json(['message' => 'Question and options saved successfully!', $options,$question]);
    }
    public function getQuestions()
    {
        $questions = Question::with(['options'])->get();
        return response()->json($questions);
    }
}
