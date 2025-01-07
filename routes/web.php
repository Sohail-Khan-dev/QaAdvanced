<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('qa.index');
});
Route::get('/{routename}', function ($routename) {
    return view('qa.' . $routename);
});


