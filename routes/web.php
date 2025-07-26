<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index'])
         ->name('index');

Route::get('/index', [PagesController::class, 'index'])
         ->name('index');

Route::get('/website-packages', [PagesController::class, 'websitePackage'])
->name('website.packages');


Route::get('/webhosting', [PagesController::class, 'webhosting'])->name('webhosting');


