<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookmarkController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ProfileController;
use App\Models\Bookmark;
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
    Route::get('profile/blog', [ProfileController::class, 'blog'])->name('profile.blog');
    Route::get('profile/addBlog', [BlogController::class, 'create'])->name('blog.create');
    Route::post('profile/addBlog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('blog/{slug}', [BlogController::class, 'show'])->name('blog.show');
    Route::get('/profile/bookmark', [BookmarkController::class, 'index'])->name('profile.bookmark');
    Route::post('/profile/bookmark', [BookmarkController::class, 'store'])->name('bookmark.store');
    Route::post('/comment', [CommentController::class, 'store'])->name('comment.store');
    Route::post('profile/bookmark', [BookmarkController::class, 'store'])->name('blog.bookmark');
});
Route::get('blog/{slug}', [BlogController::class, 'show'])->name('blog.show');

require __DIR__ . '/auth.php';
