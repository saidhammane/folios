<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FolioController;
use Illuminate\Support\Facades\Route;

Route::group([], function () {
    Route::get('/', [FolioController::class, 'app'])->name('app');
    Route::get('/portfolio', [FolioController::class, 'portfolio'])->name('portfolio');
    Route::get('/contact', [FolioController::class, 'contact'])->name('contact');
    Route::get('/history', [FolioController::class, 'history'])->name('history');
    Route::get('/blog', [FolioController::class, 'blog'])->name('blog');

});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';