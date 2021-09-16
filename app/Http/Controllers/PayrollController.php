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

    // salary view detail
    public function salaryView()
    {
        return view('payroll.salaryview');
    }

    // payroll Items
    public function payrollItems()
    {
        return view('payroll.payrollitems');
    }
}
