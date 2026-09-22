<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::redirect('/', '/fr');

Route::prefix('{locale}')
    ->where(['locale' => 'fr|es'])
    ->middleware('setlocale')
    ->group(function () {
        Route::get('/', [PageController::class, 'home'])->name('home');
        Route::get('/about-us', [PageController::class, 'aboutUs'])->name('about-us');
        Route::get('/apply-now', [PageController::class, 'applyNow'])->name('apply-now');
        Route::post('/apply-now', [PageController::class, 'storeApplication'])->name('apply-now.store');
        Route::get('/gestions', [PageController::class, 'gestions'])->name('gestions');
        Route::get('/legales', [PageController::class, 'legales'])->name('legales');
        Route::get('/condition', [PageController::class, 'condition'])->name('condition');
        Route::get('/nos-credits', [PageController::class, 'nosCredits'])->name('nos-credits');
    });
