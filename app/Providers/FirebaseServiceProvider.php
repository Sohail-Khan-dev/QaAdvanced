<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class FirebaseServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // Make Firebase config available to JavaScript
        view()->composer('*', function ($view) {
            $view->with('firebaseConfig', [
                'apiKey' => env('FIREBASE_API_KEY'),
                'authDomain' => env('FIREBASE_AUTH_DOMAIN'),
                'projectId' => env('FIREBASE_PROJECT_ID'),
                'storageBucket' => env('FIREBASE_STORAGE_BUCKET'),
                'messagingSenderId' => env('FIREBASE_MESSAGING_SENDER_ID'),
                'appId' => env('FIREBASE_APP_ID'),
                'measurementId' => env('FIREBASE_MEASUREMENT_ID'),
            ]);
        });
    }
}