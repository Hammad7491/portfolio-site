<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index'])
         ->name('index');

Route::get('/index', [PagesController::class, 'index'])
         ->name('index');

Route::get('/about', [PagesController::class, 'about'])
         ->name('about');

