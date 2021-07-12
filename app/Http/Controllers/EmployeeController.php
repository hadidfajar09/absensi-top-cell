<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // all employee card view
    public function cardAllEmployee()
    {
        return view('form.allemployeecard');
    }
    // all employee list
    public function listAllEmployee()
    {
        return view('form.employeelist');
    }
}
