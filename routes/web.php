<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogDetailsController;
///////////////////////////// Here we have to edit the Rout and set all the Routes .
Route::get('/', function () {
    return view('qa.index');
});

Route::get('/app-ads.txt', function () {
    return view('qa.index');
});

Route::get('/show-syllabus/{category_id}', [CommonController::class,"showSyllabus"])->name('show-syllabus');

Route::post('dashboard/{$viewName}',[DashboardController::class,"showView"]);
Route::get('dashboard',[DashboardController::class,"index"]);

Route::get('get-blog/{category_id?}',[BlogDetailsController::class,'getBlogDetail'])->name('get-blog');
Route::post('store-blog', [BlogDetailsController::class, 'storeBlog'])->name('store-blog');
Route::post('update-blog', [BlogDetailsController::class, 'updateBlog'])->name('update-blog');
Route::post('store-category', [BlogDetailsController::class, 'storeCategory'])->name('store-category');
Route::post('update-category', [BlogDetailsController::class, 'updateCategory'])->name('update-category');
Route::post('store-topic', [BlogDetailsController::class, 'storeTopic'])->name('store-topic');
Route::post('update-topic', [BlogDetailsController::class, 'updateTopic'])->name('update-topic');
Route::get('get-topic', [BlogDetailsController::class, 'getTopic'])->name('get-topic');
Route::get('get-category',[BlogDetailsController::class,'getCategories'])->name('get-category');

Route::delete('delete-category/{id}',[BlogDetailsController::class,'deleteCategory'])->name('delete-category');
Route::delete('delete-topic/{id}',[BlogDetailsController::class,'deleteTopic'])->name('delete-topic');
Route::delete('delete-blog/{id}',[BlogDetailsController::class,'deleteBlog'])->name('delete-blog');

////////////////////////// Here we have all routes related to Quiz 
Route::get('get-quizzes',[QuizController::class,'getQuiz'])->name('get-quizzes');
Route::get('get-questions',[QuizController::class,'getQuestions'])->name('get-questions');
Route::post('store-quiz',[QuizController::class,'storeQuiz'])->name('store-quiz');
Route::post('store-question',[QuizController::class,'storeQuestion'])->name('store-question');
Route::post('store-quiz-category', [QuizController::class,'storeQuizCategory']);
Route::get('get-quiz-category', [QuizController::class,'getQuizCategories']);

Route::delete('delete-quiz/{id}', [QuizController::class,'deleteQuiz']);
Route::delete('delete-question/{id}', [QuizController::class,'deleteQuestion']);
Route::delete('delete-quiz-category/{id}', [QuizController::class,'deleteQuizCategory']);


Route::get('quiz-detail',[QuizController::class,'showQuizDetail']);
// function(){    
//     return view('qa.quiz.quiz-detail');
// });
Route::get('qa/{routename}/{route2name?}/{id?}', [CommonController::class,"showView"]);