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
Route::post('store-category', [BlogDetailsController::class, 'storeCategory'])->name('store-category');
Route::post('store-topic', [BlogDetailsController::class, 'storeTopic'])->name('store-topic');
Route::get('get-topic', [BlogDetailsController::class, 'getTopic'])->name('get-topic');
Route::get('get-category',[BlogDetailsController::class,'getCategories'])->name('get-category');

Route::delete('delete-category/{id}',[BlogDetailsController::class,'deleteCategory'])->name('delete-category');
Route::delete('delete-topic/{id}',[BlogDetailsController::class,'deleteTopic'])->name('delete-topic');
Route::delete('delete-blog/{id}',[BlogDetailsController::class,'deleteBlog'])->name('delete-blog');

////////////////////////// Here we have all routes related to Quiz 
Route::get('get-quizzes',[QuizController::class,'getQuiz'])->name('get-quizzes');
Route::post('store-quizzes',[QuizController::class,'store'])->name('store-quizzes');

Route::get('qa/{routename}/{route2name?}/{id?}', [CommonController::class,"showView"]);