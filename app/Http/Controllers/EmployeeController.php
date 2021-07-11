<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    // all employee list
    public function listAllEmployee()
    {
        return view('form.allemployee');
    }
}
