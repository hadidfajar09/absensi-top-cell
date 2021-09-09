<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PayrollController extends Controller
{
    // view page salary
    public function salary()
    {
        return view('payroll.employeesalary');
    }
}
