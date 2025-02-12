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

Route::get('getTopic',[ArticalDetailsController::class,'getTopic']);
Route::post('storeTopic', [ArticalDetailsController::class, 'storeTopic'])->name('storeTopic');


Route::get('qa/{routename}/{route2name?}', [CommonController::class,"showView"]);
