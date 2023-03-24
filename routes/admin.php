<?php

use Illuminate\Support\Facades\Route;

Route::middleware('auth:admin')->group(function () {
    Route::get('logout', [\App\Http\Controllers\Admin\AuthController::class, 'logout'])->name('logout');
    Route::resource('posts', \App\Http\Controllers\Admin\PostController::class);
});

Route::get('login', [\App\Http\Controllers\Admin\AuthController::class, 'index'])->name('login');
Route::post('login', [\App\Http\Controllers\Admin\AuthController::class, 'login'])->name('login_process');
