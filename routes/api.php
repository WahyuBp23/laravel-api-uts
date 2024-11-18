<?php

use App\Http\Controllers\Api\StudentController;
use App\Http\Controllers\Api\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    Route::resource('student', StudentController::class);

    Route::get('/test', function () {
        return view('welcome');
    });
});
Route::prefix('v1')->group(function () {

    Route::resource('user', UserController::class);

    Route::get('/test', function () {
        return view('welcome');
    });
});
