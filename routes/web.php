<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\CreateCourse;

Route::get('/',[dashboardController::class, 'index']) -> name('dashboard');

Route::middleware(['auth:sanctum',config('jetstream.auth_session'),'verified',])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});


Route::get('/courses', [CreateCourse::class, 'index'])->name('courses.index');