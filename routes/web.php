<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\siteController;



Route::get('/', [siteController::class, 'showHome']) ;
Route::get('/about', [siteController::class, 'showAbout']) ;
Route::get('/service', [siteController::class, 'showService']) ;
Route::get('/portfolio', [siteController::class, 'showPortfolio']) ;


