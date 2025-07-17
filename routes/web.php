<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\SolutionController as AdminSolutionController;
use App\Http\Controllers\frontend\SolutionController as FrontendSolutionController;
use App\Http\Controllers\Admin\SolutionController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\TopicController;
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
    Route::get('/', [AdminSolutionController::class, 'index'])->name('index');
    Route::get('/create', [AdminSolutionController::class, 'create'])->name('create');
    Route::post('/', [AdminSolutionController::class, 'store'])->name('store');
    Route::get('/{solution}/edit', [AdminSolutionController::class, 'edit'])->name('edit');
    Route::put('/{solution}', [AdminSolutionController::class, 'update'])->name('update');
    Route::delete('/{solution}', [AdminSolutionController::class, 'destroy'])->name('destroy');
});
Route::get('/solutions', [FrontendSolutionController::class, 'index'])->name('frontend.solutions.index');
Route::get('/solutions/{slug}', [FrontendSolutionController::class, 'show'])->name('frontend.solutions.show');
Route::get('/industries/{slug}', [IndustriesController::class, 'show'])->name('industries.show');


Route::get('/industries', [IndustriesController::class, 'index'])->name('industries.index');

Route::prefix('admin/industries')->name('admin.industries.')->group(function () {
    Route::get('/', [IndustryController::class, 'index'])->name('index');
    Route::get('/create', [IndustryController::class, 'create'])->name('create');
    Route::post('/', [IndustryController::class, 'store'])->name('store');
    Route::get('/{industry}/edit', [IndustryController::class, 'edit'])->name('edit');
    Route::put('/{industry}', [IndustryController::class, 'update'])->name('update');
    Route::delete('/{industry}', [IndustryController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin/blog')->name('admin.blog.')->group(function () {
    Route::get('/', [BlogController::class, 'index'])->name('index');
    Route::get('/create', [BlogController::class, 'create'])->name('create');
    Route::post('/', [BlogController::class, 'store'])->name('store');
    Route::get('/{blog}', [BlogController::class, 'show'])->name('show');
    Route::get('/{blog}/edit', [BlogController::class, 'edit'])->name('edit');
    Route::put('/{blog}', [BlogController::class, 'update'])->name('update');
    Route::delete('/{blog}', [BlogController::class, 'destroy'])->name('destroy');
});

Route::prefix('admin/topics')->name('admin.topics.')->group(function () {
    Route::get('/', [TopicController::class, 'index'])->name('index');          // List all topics
    Route::get('/create', [TopicController::class, 'create'])->name('create');  // Show create form
    Route::post('/', [TopicController::class, 'store'])->name('store');         // Store new topic
    Route::get('/{topic}', [TopicController::class, 'show'])->name('show');     // (optionally) Show single topic
    Route::get('/{topic}/edit', [TopicController::class, 'edit'])->name('edit'); // Show edit form
    Route::put('/{topic}', [TopicController::class, 'update'])->name('update'); // Update topic
    Route::delete('/{topic}', [TopicController::class, 'destroy'])->name('destroy'); // Delete topic
});

Route::get('/insights/{slug}', [InsightController::class, 'show'])->name('frontend.blog.show');
Route::get('/insights', [InsightController::class, 'index'])->name('insights');

