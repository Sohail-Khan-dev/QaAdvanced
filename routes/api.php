<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\QuizApiController;
use App\Http\Controllers\Api\BlogApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Quiz API Routes
Route::prefix('quiz')->group(function () {
    Route::get('/categories', [QuizApiController::class, 'getCategories']);
    Route::get('/category/{id}', [QuizApiController::class, 'getCategoryById']);
    Route::get('/category/{id}/quizzes', [QuizApiController::class, 'getQuizzesByCategory']);
    Route::get('/detail/{id}', [QuizApiController::class, 'getQuizDetail']);
});

// Test API endpoint
Route::get('/test', [QuizApiController::class, 'test']);

// Blog API Routes
Route::prefix('blogs')->group(function () {
    Route::get('/', [BlogApiController::class, 'index']);
    Route::post('/', [BlogApiController::class, 'store']);
    Route::get('/{id}', [BlogApiController::class, 'show']);
});

