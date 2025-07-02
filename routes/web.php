<?php

use App\Http\Controllers\Admin\SolutionController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\InsightController;
use App\Http\Controllers\frontend\IndustriesController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\AgribusinessController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/insights', [InsightController::class, 'index']);
Route::get('/industries', [IndustriesController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
// Route::get('/agribusiness', [AgribusinessController::class, 'index']);
Route::get('/industries/{slug}', [AgribusinessController::class, 'index'])->name('industries.show');

Route::prefix('admin/solutions')->name('admin.solutions.')->group(function () {
    Route::get('/', [SolutionController::class, 'index'])->name('index');
    Route::get('/create', [SolutionController::class, 'create'])->name('create');
    Route::post('/', [SolutionController::class, 'store'])->name('store');
    Route::get('/{solution}/edit', [SolutionController::class, 'edit'])->name('edit');
    Route::put('/{solution}', [SolutionController::class, 'update'])->name('update');
    Route::delete('/{solution}', [SolutionController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin/industries')->name('admin.industries.')->group(function () {
    Route::get('/', [IndustryController::class, 'index'])->name('index');
    Route::get('/create', [IndustryController::class, 'create'])->name('create');
    Route::post('/', [IndustryController::class, 'store'])->name('store');
    Route::get('/{industry}/edit', [IndustryController::class, 'edit'])->name('edit');
    Route::put('/{industry}', [IndustryController::class, 'update'])->name('update');
    Route::delete('/{industry}', [IndustryController::class, 'destroy'])->name('destroy');
});
