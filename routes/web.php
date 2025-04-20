<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Redirect;
use App\Http\Controllers\QuizController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogDetailsController;
use App\Http\Controllers\ProfileController;

// Authentication Routes (from Laravel Breeze)
require __DIR__.'/auth.php';

// Home Page - Using QA index as the homepage
Route::get('/', [CommonController::class, 'showView'])->defaults('routeName', 'index');

// Dashboard Routes - Only accessible to admin and manager roles
Route::get('/dashboard', [DashboardController::class, 'index'])
    ->middleware(['auth', 'verified', 'role:admin,manager'])
    ->name('dashboard');

// Profile Routes
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Dashboard Routes - Only accessible to admin and manager roles
Route::middleware(['auth', 'verified', 'role:admin,manager'])->group(function () {
    Route::get('/dashboard/{routeName}', [DashboardController::class, 'showView']);

    // Admin routes - Only accessible to admin
    Route::middleware(['role:admin'])->prefix('admin')->group(function () {
        Route::get('/users', [\App\Http\Controllers\Admin\UserManagementController::class, 'index'])->name('admin.users.index');
        Route::put('/users/{user}/role', [\App\Http\Controllers\Admin\UserManagementController::class, 'updateRole'])->name('admin.users.update-role');
        Route::put('/users/{user}/approve-manager', [\App\Http\Controllers\Admin\UserManagementController::class, 'approveManager'])->name('admin.users.approve-manager');
    });
});

// Blog Routes
Route::get('/get-blog', [BlogDetailsController::class, 'getBlogDetail']);
Route::post('/store-blog', [BlogDetailsController::class, 'storeBlog']);
Route::post('/update-blog', [BlogDetailsController::class, 'updateBlog']);
Route::delete('/delete-blog/{id}', [BlogDetailsController::class, 'deleteBlog']);

// Category Routes
Route::get('/get-category', [BlogDetailsController::class, 'getCategories']);
Route::post('/store-category', [BlogDetailsController::class, 'storeCategory']);
Route::post('/update-category', [BlogDetailsController::class, 'updateCategory']);
Route::delete('/delete-category/{id}', [BlogDetailsController::class, 'deleteCategory']);

// Topic Routes
Route::get('/get-topic', [BlogDetailsController::class, 'getTopic']);
Route::post('/store-topic', [BlogDetailsController::class, 'storeTopic']);
Route::post('/update-topic', [BlogDetailsController::class, 'updateTopic']);
Route::delete('/delete-topic/{id}', [BlogDetailsController::class, 'deleteTopic']);

// Quiz Routes
Route::get('/get-quizzes', [QuizController::class, 'getQuiz']);
Route::post('/store-quiz', [QuizController::class, 'storeQuiz']);
Route::delete('/delete-quiz/{id}', [QuizController::class, 'deleteQuiz']);

// Quiz Category Routes
Route::get('/get-quiz-category', [QuizController::class, 'getQuizCategories']);
Route::post('/store-quiz-category', [QuizController::class, 'storeQuizCategory']);
Route::delete('/delete-quiz-category/{id}', [QuizController::class, 'deleteQuizCategory']);

// Question Routes
Route::get('/get-questions', [QuizController::class, 'getQuestions']);
Route::post('/store-question', [QuizController::class, 'storeQuestion']);
Route::delete('/delete-question/{id}', [QuizController::class, 'deleteQuestion']);

// QA Routes
Route::get('/qa/quiz-detail/{id}', [QuizController::class, 'showQuizDetail'])->name('quiz-detail');
Route::get('/qa/{routeName}/{route2Name?}/{id?}', [CommonController::class, 'showView']);
Route::get('/qa/syllabus/{category_id}', [CommonController::class, 'showSyllabus']);

// Blog Agent Route
Route::get('/blog-agent', function() {
    return Redirect::away('http://localhost:5000');
})->name('blog-agent');

// Medium Blog Agent Route
Route::get('/medium-blog-agent', function() {
    return Redirect::away('http://localhost:5000');
})->name('medium-blog-agent');
