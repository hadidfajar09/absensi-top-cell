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

    // view page
    public function invoiceReports()
    {
        return view('reports.invoicereports');
    }

    // invoice view detail
    public function invoiceView()
    {
        return view('reports.invoiceview');
    }

    // daily report page
    public function dailyReport()
    {
        return view('reports.dailyreports');
    }
}
