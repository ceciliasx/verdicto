<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\LawyerController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProfilePictureController;
use App\Http\Middleware\CheckLawyer;   
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LawyerAccessController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TestimonialController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth', CheckLawyer::class])->group(function () {
    Route::get('/lawyer/profile', [LawyerAccessController::class, 'edit'])->name('lawyer.edit');
    Route::put('/lawyer/profile', [LawyerAccessController::class, 'update'])->name('lawyer.update');
});

Route::put('/lawyer/update', [LawyerAccessController::class, 'update'])->name('lawyer.update');

Route::get('/articles', [ArticleController::class, 'index'])->name('article.index');
Route::get('/articles/{id}', [ArticleController::class, 'show'])->name('article.show');
Route::get('/lawyers', [LawyerController::class, 'index'])->name('lawyers.index');
Route::get('/aboutus', function () {
    return view('aboutus.aboutus');
});
Route::get('/faq', function () {
    return view('aboutus.faq');
});

Route::patch('/profile/picture', [ProfilePictureController::class, 'update'])->name('profile.picture.update');
Route::delete('/profile/picture', [ProfilePictureController::class, 'destroyProfilePicture'])->name('profile.picture.delete');

Route::get('/dashboard', [HomeController::class, 'index'])->middleware(['auth'])->name('dashboard');

Route::get('/testimonials/create', [TestimonialController::class, 'create'])->name('testimonials.create');
Route::post('/testimonials', [TestimonialController::class, 'store'])->name('testimonials.store');


require __DIR__.'/auth.php';