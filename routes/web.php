<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;

Route::get('/', [PagesController::class, 'index'])
         ->name('index');

Route::get('/index', [PagesController::class, 'index'])
         ->name('index');

Route::get('/website-packages', [PagesController::class, 'websitePackage'])
->name('website.packages');


Route::get('/webhosting', [PagesController::class, 'webhosting'])
->name('webhosting');


Route::get('/support', [PagesController::class, 'support'])
->name('support');


Route::get('/contactus', [PagesController::class, 'contactus'])
->name('contactus');



Route::get('/portfolio', [PagesController::class, 'portfolio'])
->name('portfolio');