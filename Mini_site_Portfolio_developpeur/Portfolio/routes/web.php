<?php

use App\Http\Controllers\PortfolioController;

Route::get('/', [PortfolioController::class, 'index'])->name('home');
Route::get('/hhh',function(){
    return "hhhhhhhhh";
});
 