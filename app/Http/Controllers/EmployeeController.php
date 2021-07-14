<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmployeeController extends Controller
{
    // all employee card view
    public function cardAllEmployee()
    {
        $users = DB::table('users')->get();
        return view('form.allemployeecard',compact('users'));
    }
    // all employee list
    public function listAllEmployee()
    {
        $users = DB::table('users')->get();
        return view('form.employeelist');
    }
}
