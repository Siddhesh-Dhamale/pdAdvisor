<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // You can pass any dashboard data here if needed
        return view('admin.dashboard');
    }
}
