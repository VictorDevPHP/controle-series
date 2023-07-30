<?php

use App\Http\Controllers\SeriesController;
use Illuminate\Support\Facades\Route;



Route::controller(SeriesController::class)->group(function () {
    Route::get('/', [SeriesController::class, 'index'])->name('index');
    Route::get('/series/criar', [SeriesController::class, 'create'])->name('series.create');
    Route::post('/series/salvar', [SeriesController::class, 'store'])->name('series.store');
});

Route::post('/series/destroy/{serie}', [SeriesController::class, 'destroy'])->name('series.destroy'); 