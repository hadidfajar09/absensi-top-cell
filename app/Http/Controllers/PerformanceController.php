<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\performanceIndicator;
use Session;
use Auth;

class PerformanceController extends Controller
{
    // view page
    public function index()
    {
        $user = Auth::User();
        Session::put('user', $user);
        $user=Session::get('user');
        $name = $user->name;
        $department = $user->department;
        $avatar = $user->avatar;
        
        $indicator = DB::table('performance_indicator_lists')->get();
        $departments = DB::table('departments')->get();
        $performance_indicators = DB::table('performance_indicators')->get();
        return view('performance.performanceindicator',compact('indicator','departments','performance_indicators'));
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
            'designation'        => 'required|string|max:255',
            'customer_eperience' => 'required|string|max:255',
            'marketing'          => 'required|string|max:255',
            'management'         => 'required|string|max:255',
            'administration'     => 'required|string|max:255',
            'presentation_skill' => 'required|string|max:255',
            'quality_of_Work'    => 'required|string|max:255',
            'efficiency'         => 'required|string|max:255',
            'integrity'          => 'required|string|max:255',
            'professionalism'    => 'required|string|max:255',
            'team_work'          => 'required|string|max:255',
            'critical_thinking'  => 'required|string|max:255',
            'conflict_management'=> 'required|string|max:255',
            'attendance'         => 'required|string|max:255',
            'ability_to_meet_deadline'=> 'required|string|max:255',
            'status'             => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try {

            $indicator = new performanceIndicator;
            $indicator->designation        = $request->designation;
            $indicator->customer_eperience = $request->customer_eperience;
            $indicator->marketing          = $request->marketing;
            $indicator->management         = $request->management;
            $indicator->administration     = $request->administration;
            $indicator->presentation_skill = $request->presentation_skill;
            $indicator->quality_of_Work    = $request->quality_of_Work;
            $indicator->efficiency         = $request->efficiency;
            $indicator->integrity          = $request->integrity;
            $indicator->professionalism    = $request->professionalism;
            $indicator->team_work          = $request->team_work;
            $indicator->critical_thinking  = $request->critical_thinking;
            $indicator->conflict_management= $request->attendance;
            $indicator->attendance         = $request->attendance;
            $indicator->ability_to_meet_deadline = $request->ability_to_meet_deadline;
            $indicator->status             = $request->status;
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
