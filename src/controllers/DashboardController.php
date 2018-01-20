<?php

namespace MyPackage\Dashboard\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('dashboard::dashboard');
    }
}