<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\AboutusController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\HeroSectionController;
use App\Http\Controllers\Admin\HomePageController;
use App\Http\Controllers\Admin\SolutionController as AdminSolutionController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\SolIndInController;
use App\Http\Controllers\Admin\TopicController;

use App\Http\Controllers\frontend\SolutionController as FrontendSolutionController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\frontend\ContactController;
use App\Http\Controllers\frontend\InsightController;
use App\Http\Controllers\frontend\IndustriesController;
use App\Http\Controllers\frontend\AboutController;
use App\Http\Controllers\frontend\ServicesController;
use App\Http\Controllers\frontend\AgribusinessController;

use Illuminate\Support\Facades\Route;

// ---------- Frontend Routes ----------
Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/insights', [InsightController::class, 'index']);
Route::get('/about', [AboutController::class, 'index']);
Route::get('/services', [ServicesController::class, 'index']);
Route::get('/industries', [IndustriesController::class, 'index']);
Route::get('/industries/{slug}', [AgribusinessController::class, 'index'])->name('industries.show');
Route::get('/solutions', [FrontendSolutionController::class, 'index'])->name('frontend.solutions.index');
Route::get('/solutions/{slug}', [FrontendSolutionController::class, 'show'])->name('frontend.solutions.show');
Route::get('/insights/{slug}', [InsightController::class, 'show'])->name('frontend.blog.show');

// ---------- Admin Routes ----------

Route::get('login', function () {
    return redirect()->route('admin.login'); // redirect to admin login or frontend login accordingly
})->name('login');
Route::prefix('admin')->name('admin.')->group(function () {
    // Public admin routes
    // Admin login page (GET)
    Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.submit');

    // All protected admin routes under auth & admin middleware
    Route::middleware(['auth'])->group(function () {
        // Dashboard
        Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

        // Logout
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');

        // Contact Us Resource
        Route::resource('contact-us', ContactUsController::class);

        // About Us Routes
        Route::prefix('about')->group(function () {
            Route::get('/', [AboutusController::class, 'index'])->name('about.index');
            Route::get('valuepoints', [AboutusController::class, 'valuePointsIndex'])->name('about.valuepoints.index');
            Route::get('{section}/create', [AboutusController::class, 'create'])->name('about.create');
            Route::post('{section}', [AboutusController::class, 'store'])->name('about.store');
            Route::get('{section}/{id}/edit', [AboutusController::class, 'edit'])->name('about.edit');
            Route::put('{section}/{id}', [AboutusController::class, 'update'])->name('about.update');
            Route::delete('{section}/{id}', [AboutusController::class, 'destroy'])->name('about.destroy');
        });

        // Home Page Sub-routes (industry slides, counters, blog sections, etc)
        Route::prefix('home')->name('home.')->group(function () {
            // Industry Slides
            Route::get('industry-slides', [HomePageController::class, 'industrySlidesIndex'])->name('industrySlides.index');
            Route::get('industry-slides/create', [HomePageController::class, 'industrySlidesCreate'])->name('industrySlides.create');
            Route::post('industry-slides', [HomePageController::class, 'industrySlidesStore'])->name('industrySlides.store');
            Route::get('industry-slides/{industrySlide}/edit', [HomePageController::class, 'industrySlidesEdit'])->name('industrySlides.edit');
            Route::put('industry-slides/{industrySlide}', [HomePageController::class, 'industrySlidesUpdate'])->name('industrySlides.update');
            Route::delete('industry-slides/{industrySlide}', [HomePageController::class, 'industrySlidesDestroy'])->name('industrySlides.destroy');

            // Counters
            Route::get('counters', [HomePageController::class, 'countersIndex'])->name('counters.index');
            Route::get('counters/create', [HomePageController::class, 'countersCreate'])->name('counters.create');
            Route::post('counters', [HomePageController::class, 'countersStore'])->name('counters.store');
            Route::get('counters/{counter}/edit', [HomePageController::class, 'countersEdit'])->name('counters.edit');
            Route::put('counters/{counter}', [HomePageController::class, 'countersUpdate'])->name('counters.update');
            Route::delete('counters/{counter}', [HomePageController::class, 'countersDestroy'])->name('counters.destroy');

            // Single Edit Sections
            Route::get('blog-section/edit', [HomePageController::class, 'blogSectionEdit'])->name('blogSection.edit');
            Route::put('blog-section/edit', [HomePageController::class, 'blogSectionUpdate'])->name('blogSection.update');

            Route::get('cta/edit', [HomePageController::class, 'ctaEdit'])->name('cta.edit');
            Route::put('cta/edit', [HomePageController::class, 'ctaUpdate'])->name('cta.update');

            Route::get('insights/edit', [HomePageController::class, 'insightsEdit'])->name('insights.edit');
            Route::put('insights/edit', [HomePageController::class, 'insightsUpdate'])->name('insights.update');
        });

        // Solutions
        Route::prefix('solutions')->name('solutions.')->group(function () {
            Route::get('/', [AdminSolutionController::class, 'index'])->name('index');
            Route::get('/create', [AdminSolutionController::class, 'create'])->name('create');
            Route::post('/', [AdminSolutionController::class, 'store'])->name('store');
            Route::get('/{solution}/edit', [AdminSolutionController::class, 'edit'])->name('edit');
            Route::put('/{solution}', [AdminSolutionController::class, 'update'])->name('update');
            Route::delete('/{solution}', [AdminSolutionController::class, 'destroy'])->name('destroy');
        });

        // Industries
        Route::prefix('industries')->name('industries.')->group(function () {
            Route::get('/', [IndustryController::class, 'index'])->name('index');
            Route::get('/create', [IndustryController::class, 'create'])->name('create');
            Route::post('/', [IndustryController::class, 'store'])->name('store');
            Route::get('/{industry}/edit', [IndustryController::class, 'edit'])->name('edit');
            Route::put('/{industry}', [IndustryController::class, 'update'])->name('update');
            Route::delete('/{industry}', [IndustryController::class, 'destroy'])->name('destroy');
        });

        // Blog
        Route::prefix('blog')->name('blog.')->group(function () {
            Route::get('/', [BlogController::class, 'index'])->name('index');
            Route::get('/create', [BlogController::class, 'create'])->name('create');
            Route::post('/', [BlogController::class, 'store'])->name('store');
            Route::get('/{blog}', [BlogController::class, 'show'])->name('show');
            Route::get('/{blog}/edit', [BlogController::class, 'edit'])->name('edit');
            Route::put('/{blog}', [BlogController::class, 'update'])->name('update');
            Route::delete('/{blog}', [BlogController::class, 'destroy'])->name('destroy');
        });

        // Topics
        Route::prefix('topics')->name('topics.')->group(function () {
            Route::get('/', [TopicController::class, 'index'])->name('index');
            Route::get('/create', [TopicController::class, 'create'])->name('create');
            Route::post('/', [TopicController::class, 'store'])->name('store');
            Route::get('/{topic}', [TopicController::class, 'show'])->name('show');
            Route::get('/{topic}/edit', [TopicController::class, 'edit'])->name('edit');
            Route::put('/{topic}', [TopicController::class, 'update'])->name('update');
            Route::delete('/{topic}', [TopicController::class, 'destroy'])->name('destroy');
        });

        // Hero Sections
        Route::prefix('hero')->name('hero.')->group(function () {
            Route::get('/', [HeroSectionController::class, 'index'])->name('index');
            Route::get('/create', [HeroSectionController::class, 'create'])->name('create');
            Route::post('/', [HeroSectionController::class, 'store'])->name('store');
            Route::get('/{hero}', [HeroSectionController::class, 'show'])->name('show');
            Route::get('/{hero}/edit', [HeroSectionController::class, 'edit'])->name('edit');
            Route::put('/{hero}', [HeroSectionController::class, 'update'])->name('update');
            Route::delete('/{hero}', [HeroSectionController::class, 'destroy'])->name('destroy');
        });

        // SolIndIns Content Management
        Route::prefix('sol-ind-ins')->name('sol_ind_ins.')->group(function () {
            Route::get('solutions', [SolIndInController::class, 'solutions'])->name('solutions');
            Route::get('industries', [SolIndInController::class, 'industries'])->name('industries');
            Route::get('insights', [SolIndInController::class, 'insights'])->name('insights');

            Route::get('{section}/create', [SolIndInController::class, 'create'])->name('create');
            Route::post('{section}/store', [SolIndInController::class, 'store'])->name('store');

            Route::get('edit/{id}', [SolIndInController::class, 'edit'])->name('edit');
            Route::put('update/{id}', [SolIndInController::class, 'update'])->name('update');
            Route::delete('delete/{id}', [SolIndInController::class, 'destroy'])->name('destroy');
        });
    });
});
