<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\frontend\HomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/About', [AboutController::class, 'index']);
