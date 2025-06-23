<?php

use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\InsightController;
use App\Http\Controllers\frontend\IndustriesController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ServicesController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/insights', [InsightController::class, 'index']);
Route::get('/industries', [IndustriesController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
