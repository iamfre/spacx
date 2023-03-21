<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\CatalogController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'index'])->middleware('auth')->name('profile');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware('guest')->group(function () {
    Route::get('/registration', [AuthController::class, 'showRegisterForm'])->name('registration');
    Route::post('/registration', [AuthController::class, 'register']);
    Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AuthController::class, 'login']);
    Route::get('/forgot-password', [AuthController::class, 'forgotPasswordForm'])->name('forgot-password');
    Route::post('/forgot-password', [AuthController::class, 'forgotPasswordProcess'])->name('password.email');
    Route::get('/reset-password/{token}', function ($token) {
        return view('auth.reset-password', ['token' => $token]);
    })->name('password.reset');
    Route::post('/reset-password', [AuthController::class, 'resetPasswordProcess'])->name('password.update');
});

Route::get('/', [IndexController::class, 'index'])->name('home');
Route::get('/contacts', [IndexController::class, 'contacts'])->name('contacts');
Route::get('/catalog', [CatalogController::class, 'index'])->name('catalog.index');
Route::get('/catalog{id}', [CatalogController::class, 'show'])->name('catalog.show');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');