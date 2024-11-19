<?php

use App\Http\Controllers\Api\SavingController;
use App\Http\Controllers\Api\StudentController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {

    Route::resource('student', StudentController::class);

    Route::get('/test', function () {
        return view('welcome');
    });
});
Route::prefix('v1')->group(function () {

    Route::resource('saving', SavingController::class);

    Route::get('/test', function () {
        return view('welcome');
    });
});
