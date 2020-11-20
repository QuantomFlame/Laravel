<?php

use Illuminate\Support\Facades\Route;

// Default Routes
Route::get('/', 'PagesController@home');

// Authentication Routes
Route::group(['namespace' => 'Auth'], function() {
    Route::group(['middleware' => 'guest'], function () {
        Route::get('/sign-in', 'LoginController@login')->name('login');
        Route::post('/sign-in', 'LoginController@authenticate');

        Route::get('/sign-up', 'RegisterController@register');
        Route::post('/sign-up', 'RegisterController@store');
    });

    Route::get('/sign-out', 'LoginController@logout');

    // Email Verification Routes
    Route::get('/verify-email', 'EmailVerificationPromptController@__invoke')
        ->middleware(['auth'])
        ->name('verification.notice');

    Route::get('/verify-email/{id}/{hash}', 'VerifyEmailController@__invoke')
        ->middleware(['auth', 'signed', 'throttle:6,1'])
        ->name('verification.verify');

    Route::post('/email/verification-notification', 'EmailVerificationNotificationController@store')
        ->middleware(['auth', 'throttle:6,1'])
        ->name('verification.send');

    // Forgot Password Routes
    Route::get('/password/reset', 'ForgotPasswordController@showLinkRequestForm');
});

Route::group(['middleware' => 'auth', 'namespace' => 'User'], function () {
    Route::get('/home', 'UserController@home');
});
