<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\QuizCategory;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    public function index(Request $request)
    {
        return "this is Quiz Controller";
    }
    public function storeQuiz(Request $request)
    {
        $quiz = Quiz::firstOrCreate([
                'title' => $request->title,
                'description' =>  $request->description,
            ]);
        $quizzes = Quiz::all();
        return response()->json(['message' => 'Quiz saved successfully!', 'quiz'=> $quiz , "quizzes"=>$quizzes]);
    }
    public function getQuiz()
    {
        $quiz = Quiz::with(['questions.options'])->get();
        return response()->json($quiz);
    }
    public function deleteQuiz($id)
    {
        $quiz = Quiz::find($id);
        if (!$quiz) {
            return response()->json(['error' => 'Quiz not found'], 404);
        }
        $quiz->delete();
        return $this->getQuiz();
        // return response()->json(['message' => 'Quiz deleted successfully!'], 200);
    }
    public function storeQuestion(Request $request){       
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
            $question->options()->createMany($options);

        }

        return response()->json(['message' => 'Question and options saved successfully!', $options,$question]);
    }
    public function getQuestions()
    {
        $questions = Question::with(['options'])->get();
        return response()->json($questions);
    }
    public function deleteQuestion($id)
    {
        $question = Question::find($id);
        if (!$question) {
            return response()->json(['error' => 'Question not found'], 404);
        }
        $question->delete();
        return $this->getQuestions();
        // return response()->json(['message' => 'Question deleted successfully!'], 200);
    }
    public function storeQuizCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);
        $quiz_Category = new QuizCategory();
        $quiz_Category->name = $request->name;
        $quiz_Category->description = $request->description;
        $quiz_Category->save();
        $quiz_Categories = QuizCategory::all();
        return response()->json(['message' => 'Quiz category saved successfully!', "quizCategory"=>$quiz_Category , "quizCategories"=>$quiz_Categories]);
    }
    public function getQuizCategories()  {
        $quiz_Categories = QuizCategory::all();
        return response()->json($quiz_Categories);
    }
    public function deleteQuizCategory($id)
    {
        $quiz_Category = QuizCategory::find($id);
        if (!$quiz_Category) {
            return response()->json(['error' => 'Quiz Category not found'], 404);
        }
        $quiz_Category->delete();
        return $this->getQuizCategories();
    }
    public function showQuizDetail($id = 5)
    {
        $quizDetail = Quiz::where('id', $id)
            ->with(['questions' => function ($query) {
                $query->select('id', 'quiz_id', 'question') // Only fetch the question text
                    ->with(['options' => function ($optionQuery) {
                        $optionQuery->select('id', 'question_id', 'option','is_correct'); // Only fetch option text
                    }]);
            }])
            ->first();
            // Apply strip_tags() on each question
        if ($quizDetail) {
            foreach ($quizDetail->questions as $question) {
                $question->question = strip_tags($question->question);
            }
        }
        return view('qa.quiz.quiz-detail', compact('quizDetail'));
    }


}
