<?php

use App\Http\Controllers\Admin\SolutionController;
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

Route::prefix('admin/solutions')->name('admin.solutions.')->group(function () {
    Route::get('/', [SolutionController::class, 'index'])->name('index');
    Route::get('/create', [SolutionController::class, 'create'])->name('create');
    Route::post('/', [SolutionController::class, 'store'])->name('store');
    Route::get('/{solution}/edit', [SolutionController::class, 'edit'])->name('edit');
    Route::put('/{solution}', [SolutionController::class, 'update'])->name('update');
    Route::delete('/{solution}', [SolutionController::class, 'destroy'])->name('destroy');
});
