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

Route::post('dashboard/{$viewName}',[DashboardController::class,"showView"]);
Route::get('dashboard',[DashboardController::class,"index"]);

Route::get('get-blog',[BlogDetailsController::class,'getBlogDetail'])->name('get-blog');
Route::post('store-blog', [BlogDetailsController::class, 'storeBlog'])->name('store-blog');

Route::get('get-topic/{id}', [BlogDetailsController::class, 'getTopic'])->name('get-topic');
Route::get('get-categories',[BlogDetailsController::class,'getCategories'])->name('get-categories');
////////////////////////// Here we have all routes related to Quiz 
Route::get('get-quizzes',[QuizController::class,'getQuiz'])->name('get-quizzes');
Route::post('store-quizzes',[QuizController::class,'store'])->name('store-quizzes');

Route::get('qa/{routename}/{route2name?}/{id?}', [CommonController::class,"showView"]);
