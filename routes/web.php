<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
