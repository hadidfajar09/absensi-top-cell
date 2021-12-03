<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Training;
use Session;
use Auth;

class TrainingController extends Controller
{
    // index page
    public function index()
    {
        $user = DB::table('users')->get();
        return view('training.traininglist',compact('user'));
    }
    // save record training
    public function addNewTraining(Request $request)
    {
        // $request->validate([
        //     'leave_type'   => 'required|string|max:255',
        // ]);

        DB::beginTransaction();
        try {

            $training = new Training;
            $training->rec_id        = $request->rec_id;
            $training->training_type = $request->training_type;
            $training->employees     = $request->employees;
            $training->training_cost = $request->training_cost;
            $training->end_date      = $request->end_date;
            $training->description   = $request->description;
            $training->status        = $request->status;
            $training->save();
            
            DB::commit();
            Toastr::success('Create new Training successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Add Training fail :)','Error');
            return redirect()->back();
        }
    }
}
