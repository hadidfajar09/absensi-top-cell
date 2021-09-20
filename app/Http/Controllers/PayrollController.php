<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PayrollController extends Controller
{
    // view page salary
    public function salary()
    {

        $users = DB::table('users')
                    ->join('employees', 'users.rec_id', '=', 'employees.employee_id')
                    ->select('users.*', 'employees.birth_date', 'employees.gender', 'employees.company')
                    ->get(); 
        $userList = DB::table('users')->get();
        $permission_lists = DB::table('permission_lists')->get();
        return view('payroll.employeesalary',compact('users','userList','permission_lists'));
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
