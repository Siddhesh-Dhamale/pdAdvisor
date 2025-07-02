<?php

use App\Http\Controllers\Admin\SolutionController as AdminSolutionController;
use App\Http\Controllers\Frontend\SolutionController as FrontendSolutionController;
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
    Route::get('/', [AdminSolutionController::class, 'index'])->name('index');
    Route::get('/create', [AdminSolutionController::class, 'create'])->name('create');
    Route::post('/', [AdminSolutionController::class, 'store'])->name('store');
    Route::get('/{solution}/edit', [AdminSolutionController::class, 'edit'])->name('edit');
    Route::put('/{solution}', [AdminSolutionController::class, 'update'])->name('update');
    Route::delete('/{solution}', [AdminSolutionController::class, 'destroy'])->name('destroy');
});
Route::get('/solutions', [FrontendSolutionController::class, 'index'])->name('frontend.solutions.index');
Route::get('/solutions/{slug}', [FrontendSolutionController::class, 'show'])->name('frontend.solutions.show');
