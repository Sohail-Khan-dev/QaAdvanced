<?php

namespace App\Http\Controllers;

use App\Models\Quiz;
use App\Models\Question;
use App\Models\QuizCategory;
use App\Traits\CrudOperations;
use App\Traits\ApiResponseTrait;
use App\Traits\QuizOperationsTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class QuizController extends Controller
{
    use CrudOperations, ApiResponseTrait, QuizOperationsTrait;

    // public function index(Request $request)
    // {
    //     return view('qa.quiz');
    // }

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
        // $validatedData = $request->validate([
        //     'question' => 'required|string',
        //     'quiz_id' => 'required|exists:quizzes,id',
        //     'explanation' => 'nullable|string'
        // ]);

        // Create question - the HTML content will include image URLs
        $question = Question::create($request);

        return response()->json([
            'message' => 'Question created successfully',
            'question' => $question
        ]);
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

    public function showQuizDetail($id)
    {
        return $this->getQuizDetails($id);
    }

    public function updateQuestion(Request $request, Question $question)
    {
        $validatedData = $request->validate([
            'question' => 'required|string',
            'explanation' => 'nullable|string'
        ]);

        // Extract old image URLs
        preg_match_all('/<img[^>]+src="([^">]+)"/', $question->question, $oldMatches);
        $oldUrls = $oldMatches[1] ?? [];

        // Extract new image URLs
        preg_match_all('/<img[^>]+src="([^">]+)"/', $request->question, $newMatches);
        $newUrls = $newMatches[1] ?? [];

        // Delete images that are no longer used
        foreach ($oldUrls as $oldUrl) {
            if (!in_array($oldUrl, $newUrls)) {
                $path = parse_url($oldUrl, PHP_URL_PATH);
                $path = str_replace('/storage/', '', $path);
                
                if (Storage::disk('public')->exists($path)) {
                    Storage::disk('public')->delete($path);
                }
            }
        }

        $question->update($validatedData);

        return response()->json([
            'message' => 'Question updated successfully',
            'question' => $question
        ]);
    }
}

