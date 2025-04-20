<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\QuizCategory;
use App\Traits\CrudOperations;
use App\Traits\ApiResponseTrait;
use App\Traits\QuizOperationsTrait;
use Illuminate\Http\Request;

class QuizController extends Controller
{
    use CrudOperations, ApiResponseTrait, QuizOperationsTrait;

    public function index(Request $request)
    {
        return "this is Quiz Controller";
    }

    public function storeQuiz(Request $request)
    {
        return $this->createQuiz($request);
    }

    public function getQuiz()
    {
        return $this->getAllQuizzes();
    }
    public function deleteQuiz($id)
    {
        return $this->deleteRecord(Quiz::class, $id, 'quiz');
    }

    public function storeQuestion(Request $request)
    {
        return $this->createQuestion($request);
    }

    public function getQuestions()
    {
        return $this->getAllQuestions();
    }

    public function deleteQuestion($id)
    {
        return $this->removeQuestion($id);
    }
    public function storeQuizCategory(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $data = [
            'name' => $request->name,
            'description' => $request->description
        ];

        return $this->storeRecord($request, QuizCategory::class, $data, 'quizCategory');
    }

    public function getQuizCategories()
    {
        return $this->getAllRecords(QuizCategory::class);
    }

    public function deleteQuizCategory($id)
    {
        return $this->deleteRecord(QuizCategory::class, $id, 'quizCategory');
    }

    public function showQuizDetail($id = 5)
    {
        return $this->getQuizDetails($id);
    }
}
