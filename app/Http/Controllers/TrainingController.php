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
        $training = DB::table('trainings')
                ->join('users', 'users.rec_id', '=', 'trainings.trainer_id')
                ->select('trainings.*', 'users.avatar','users.rec_id')
                ->get();
        $user = DB::table('users')->get();
        return view('training.traininglist',compact('user','training'));
    }
    // save record training
    public function addNewTraining(Request $request)
    {
        $request->validate([
            'training_type'   => 'required|string|max:255',
            'trainer'         => 'required|string|max:255',
            'employees'       => 'required|string|max:255',
            'training_cost'   => 'required|string|max:255',
            'start_date'      => 'required|string|max:255',
            'end_date'        => 'required|string|max:255',
            'description'     => 'required|string|max:255',
            'status'          => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try {

            $training = new Training;
            $training->trainer_id    = $request->trainer_id;
            $training->employees_id  = $request->employees_id;
            $training->training_type = $request->training_type;
            $training->trainer       = $request->trainer;
            $training->employees     = $request->employees;
            $training->training_cost = $request->training_cost;
            $training->start_date    = $request->start_date;
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

    // delete record
    public function deleteTraining(Request $request)
    {
        try {

            Training::destroy($request->id);
            Toastr::success('Training deleted successfully :)','Success');
            return redirect()->back();
        
        } catch(\Exception $e) {

            DB::rollback();
            Toastr::error('Training delete fail :)','Error');
            return redirect()->back();
        }
    }
}
