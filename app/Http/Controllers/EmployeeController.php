<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Employee;

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

    // save data employee
    public function saveRecord(Request $request)
    {
        $request->validate([
            'name'      => 'required|string|max:255',
            'email'     => 'required|string|email|max:255|unique:employees',
        ]);

        DB::beginTransaction();
        try{
            $employee = new Employee;
            $employee->name         = $request->name;
            $employee->email        = $request->email;
            $employee->employee_id  = $request->employee_id;
            $employee->company      = $request->company;
            $employee->holidays     = $request->holidays;
            $employee->leaves       = $request->leaves;
            $employee->clients      = $request->clients;
            $employee->projects     = $request->projects;
            $employee->tasks        = $request->tasks;
            $employee->chats        = $request->chats;
            $employee->assets       = $request->assets;
            $employee->timing_sheets= $request->timing;

            return dd($employee);
            $employee->save();

            DB::commit();
            Toastr::success('Add new employee successfully :)','Success');
            return redirect()->route('all/employee/card');
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Add new employee fail :)','Error');
            return redirect()->back();
        }
    }
}
