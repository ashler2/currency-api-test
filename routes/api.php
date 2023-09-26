<?php

use App\Http\Controllers\CurrencyController;
use Illuminate\Support\Facades\Route;


Route::name('currency.')->prefix('currency')->group(function () {
    Route::get('australian-dollars', CurrencyController::class)->name('australian-dollars');
});
