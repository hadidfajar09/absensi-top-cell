<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PerformanceController extends Controller
{
    // view page
    public function index()
    {
        return view('performance.performanceindicator');
    }
}
