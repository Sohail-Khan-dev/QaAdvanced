<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('qa.index');
});
Route::get('/app-ads.txt', function () {
    return view('qa.index');
});

Route::get('/{routename}', function ($routename) {
    $filePath = base_path($routename . '.txt'); // Look for the .txt file in the root folder

    if (File::exists($filePath)) {
        return response()->file($filePath, [
            'Content-Type' => 'text/plain'
        ]);
    }
     $viewPath = 'qa.' . $routename;

    if (View::exists($viewPath)) {
        return view($viewPath);
    }

    abort(404, 'View not found');
    return view('qa.' . $routename);
});
