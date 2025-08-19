<?php

use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

Route::group(['namespace' => 'App\Http\Controllers\Auth'], function () {
    // ------------------ LOGIN ----------------------------------- //


    Route::controller(LoginController::class)->group(function () {
        Route::post('/login', 'authenticate')->name('authenticate');
        Route::get('/', function () {
            return view('auth.login');
        })->name('login');
    });


    // ------------------------SIGN UP ------------------------------//

    Route::controller(SignUpController::class)->group(function () {
        Route::get('/signup', 'signup')->name('signup');
        Route::post('/signin', 'signin')->name('signin');
    });
});

Route::group(['namespace' => 'App\Http\Controllers'], function () {
      Route::controller(DashboardController::class)->group(function (){
        Route::get('/dashboard', 'index')->name('dashboard');
      });
});
