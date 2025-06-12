<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/lawyers', [LawyerController::class, 'index'])->name('lawyers.index');
Route::get('/aboutus', function () {
    return view('aboutus.aboutus');
});

require __DIR__.'/auth.php';