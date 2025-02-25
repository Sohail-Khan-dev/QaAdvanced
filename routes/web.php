<?php

use App\Http\Controllers\ArticalDetailsController;
use App\Http\Controllers\CommonController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
///////////////////////////// Here we have to edit the Rout and set all the Routes .
Route::get('/', function () {
    return view('qa.index');
});

Route::get('/app-ads.txt', function () {
    return view('qa.index');
});

Route::post('dashboard/{$viewName}',[DashboardController::class,"showView"]);
Route::get('dashboard',[DashboardController::class,"index"]);

Route::get('get-topics',[ArticalDetailsController::class,'getTopics'])->name('get-topics');
Route::post('store-topic', [ArticalDetailsController::class, 'storeTopic'])->name('store-topic');


Route::get('qa/{routename}/{route2name?}/{id?}', [CommonController::class,"showView"]);
