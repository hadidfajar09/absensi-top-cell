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
        return view('form.employeelist',compact('users'));
    }

    // save data employee
    public function saveRecord(Request $request)
    {
        $request->validate([
            'name'        => 'required|string|max:255',
            'email'       => 'required|string|email|max:255|unique:employees',
            'birthDate'   => 'required|string|max:255',
            'gender'      => 'required|string|max:255',
            'employee_id' => 'required|string|max:255',
            'company'     => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try{

            $employee = new Employee;
            $employee->name         = $request->name;
            $employee->email        = $request->email;
            $employee->birth_date   = $request->birthDate;
            $employee->gender       = $request->gender;
            $employee->employee_id  = $request->employee_id;
            $employee->company      = $request->company;
            $employee->save();

            $module_permissions = [
                'employee_id' => $request->employee_id,
                'module_permission' => $request->holidays,
                'read'   => $request->holidaysRead,
                'write'  => $request->holidaysWrite,
                'create' => $request->holidaysCreate,
                'delete' => $request->holidaysDelete,
                'import' => $request->holidaysImport,
                'export' => $request->holidaysExport,
            ];

            DB::table('module_permissions')->insert($module_permissions);
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
