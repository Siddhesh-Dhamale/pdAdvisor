<?php

namespace App\Providers;

use App\Models\ContactUs;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // Fetch footer/contact data once
        $footerData = ContactUs::first();

        // Share footer data with all views
        \Illuminate\Support\Facades\View::share('footerData', $footerData);

        // Do NOT print or dump here, that breaks the HTTP output
    }
}
