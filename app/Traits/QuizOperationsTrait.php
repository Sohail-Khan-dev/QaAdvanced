<?php

namespace App\Traits;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\QuizCategory;
use Illuminate\Http\Request;

trait QuizOperationsTrait
{
    /**
     * Get all quizzes with their questions and options
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllQuizzes()
    {
        $quizzes = Quiz::with(['questions.options'])->get();
        return response()->json($quizzes);
    }

    /**
     * Get a specific quiz with its questions and options
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function getQuizById($id)
    {
        $quiz = Quiz::with(['questions.options'])->find($id);

        if (!$quiz) {
            return response()->json(['error' => 'Quiz not found'], 404);
        }

        return response()->json($quiz);
    }

    /**
     * Store a new quiz
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createQuiz(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'quiz_category_id' => 'required|exists:quiz_categories,id',
        ]);

        $quiz = Quiz::firstOrCreate([
            'title' => $request->title,
            'description' => $request->description,
            'quiz_category_id' => $request->quiz_category_id,
        ]);

        $quizzes = Quiz::all();

        return response()->json([
            'message' => 'Quiz saved successfully!',
            'quiz' => $quiz,
            'quizzes' => $quizzes
        ]);
    }

    /**
     * Store a new question with options
     *
     * @param Request $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function createQuestion(Request $request)
    {
        $request->validate([
            'quiz_id' => 'required|exists:quizzes,id',
            'question' => 'required|string',
            'explanation' => 'nullable|string',
            'options' => 'required|array',
            'options.*.text' => 'nullable|string',
            'correct_option' => 'required|numeric|min:1|max:4', // Validate correct option is selected
        ], [
            'correct_option.required' => 'Please select a correct answer option'
        ]);

        $quiz = Quiz::find($request->quiz_id);

        $question = $quiz->questions()->create([
            'question' => $request->question,
            'explanation' => $request->explanation ?? " ",
            'time_limit' => $request->time_limit ?? 30,
            'difficulty_level' => $request->difficulty_level ?? 'easy',
        ]);

        $options = [];
        if ($request->has('options')) {
            $correctOption = $request->input('correct_option');

            foreach ($request->options as $key => $option) {
                $options[] = [
                    'option' => $option['text'],
                    'is_correct' => ($key == $correctOption) ? 1 : 0,
                ];
            }
            $question->options()->createMany($options);
        }else{
            return response()->json(['error' => 'Options are required'], 422);
        }

        return response()->json([
            'message' => 'Question and options saved successfully!',
            'options' => $options,
            'question' => $question
        ]);
    }

    /**
     * Get all questions with their options
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function getAllQuestions()
    {
        $questions = Question::with(['options'])->get();
        return response()->json($questions);
    }

    /**
     * Delete a question
     *
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function removeQuestion($id)
    {
        $question = Question::find($id);

        if (!$question) {
            return response()->json(['error' => 'Question not found'], 404);
        }

        $question->delete();

        return $this->getAllQuestions();
    }

    /**
     * Get quiz details for display
     *
     * @param int $id
     * @return \Illuminate\View\View
     */
    public function getQuizDetails($id, $view_questions = null)
    {
        $quizDetail = Quiz::where('id', $id)
            ->with(['questions' => function ($query) {
                $query->select('id', 'quiz_id', 'question', 'explanation')
                    ->with(['options' => function ($optionQuery) {
                        $optionQuery->select('id', 'question_id', 'option', 'is_correct');
                    }]);
            }])
            ->first();
        return view('qa.quiz.quiz-detail', compact('quizDetail', 'view_questions'));
    }
}

