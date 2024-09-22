<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/', [BlogController::class, 'dashboard'])->name('dashboard');
Route::get('/categories', [CategoryController::class, 'index'])->name('dashboard.categories');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::get('profile/addBlog', [BlogController::class, 'create'])->name('blog.create');
    Route::post('profile/addBlog', [BlogController::class, 'store'])->name('blog.store');
});

require __DIR__ . '/auth.php';
