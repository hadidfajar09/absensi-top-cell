<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExpenseReportsController extends Controller
{
    // view page
    public function index()
    {
        return view('reports.expensereport');
    }
}
