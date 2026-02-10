<?php

use App\Http\Controllers\MailController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\FolioController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/fr');

Route::get('/download-cv', function () {
    $locale = app()->getLocale();
    $filename = $locale === 'fr' ? 'CV_Said_HAMMANE.pdf' : 'Resume_Said_HAMMANE.pdf';
    $candidates = [
        public_path('files/' . $filename),
        base_path('public_html/files/' . $filename),
    ];

    $file = null;
    foreach ($candidates as $candidate) {
        if (is_string($candidate) && file_exists($candidate)) {
            $file = $candidate;
            break;
        }
    }

    abort_unless($file && file_exists($file), 404);

    return response()->download($file);
})->name('download.cv');

Route::prefix('{locale}')
    ->where(['locale' => 'en|fr'])
    ->middleware('setLocale')
    ->group(function () {
        Route::get('/', [FolioController::class, 'app'])->name('app');
        Route::get('/portfolio', [FolioController::class, 'portfolio'])->name('portfolio');
        Route::get('/contact', [FolioController::class, 'contact'])->name('contact');
        Route::get('/history', [FolioController::class, 'history'])->name('history');

        Route::post('/send-mail', [MailController::class, 'submitForm'])->name('send-mail');
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
