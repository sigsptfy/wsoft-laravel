<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/', [HomeController::class, 'show']);
Route::get('/services', [ServiceController::class, 'index'])->name('services.services');
Route::get('/portfolio', [PortfolioController::class, 'index'])->name('portfolio.portfolio');
Route::prefix('about')->group(function () {
    Route::get('/', [AboutController::class, 'about'])->name('about.aboutUs');
    Route::get('/team', [AboutController::class, 'team'])->name('about.ourTeam');
});
