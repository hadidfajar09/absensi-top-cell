<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PerformanceController extends Controller
{
    // view page
    public function index()
    {
        $indicator = DB::table('performance_indicator_lists')->get();
        $departments = DB::table('departments')->get();
        return view('performance.performanceindicator',compact('indicator','departments'));
    }

    //performance
    public function performance()
    {
        return view('performance.performance');
    }

    //performance appraisal view page
    public function performanceAppraisal()
    {
        return view('performance.performanceappraisal');
    }

    // save record
    public function saveRecordIndicator(Request $request)
    {
        $request->validate([
            'name'         => 'required|string|max:255',
            'salary'       => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try {
            $indicator = new performanceIndicator;
            $indicator->name              = $request->name;
            $indicator->rec_id            = $request->rec_id;
            $indicator->salary            = $request->salary;
            $indicator->basic             = $request->basic;

            $indicator->save();
    
            DB::commit();
            Toastr::success('Create new performance indicator successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Add performance indicator fail :)','Error');
            return redirect()->back();
        }
      }

  
}
