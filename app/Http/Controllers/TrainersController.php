<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Trainer;
use Session;
use Auth;


class TrainersController extends Controller
{
    // index page
    public function index()
    {
        $trainers = DB::table('trainers')
                    ->join('users', 'users.rec_id', '=', 'trainers.trainer_id')
                    ->select('trainers.*', 'users.avatar','users.rec_id')
                    ->get();
        $user = DB::table('users')->get();
        return view('trainers.trainers',compact('user','trainers'));
    }

    /** save record trainers */
    public function saveRecord(Request $request)
    {
        $request->validate([
            'full_name'   => 'required|string|max:255',
            'role'        => 'required|string|max:255',
            'phone'       => 'required|string|max:255',
            'status'      => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        DB::beginTransaction();
        try {

            $trainer = new Trainer;
            $trainer->full_name    = $request->full_name;
            $trainer->trainer_id   = $request->trainer_id;
            $trainer->role         = $request->role;
            $trainer->email        = $request->email;
            $trainer->phone        = $request->phone;
            $trainer->status       = $request->status;
            $trainer->description  = $request->description;
            // dd($trainer);
            $trainer->save();
            
            DB::commit();
            Toastr::success('Create new Trainers successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Add Trainers fail :)','Error');
            return redirect()->back();
        }
    }

    /** update record trainers */
    public function updateRecord(Request $request) 
    {
        DB::beginTransaction();
        try {
            if(!empty($request->trainer_id))
            {
                $update = [
                    'id'            => $request->id,
                    'full_name'     => $request->full_name,
                    'trainer_id'    => $request->trainer_id,
                    'role'          => $request->role,
                    'email'         => $request->email,
                    'phone'         => $request->phone,
                    'status'        => $request->status,
                    'description'   => $request->description,
                ];
            } else {
                $update = [
                    'id'            => $request->id,
                    'full_name'     => $request->full_name,
                    'role'          => $request->role,
                    'email'         => $request->email,
                    'phone'         => $request->phone,
                    'status'        => $request->status,
                    'description'   => $request->description,
                ];
            }
           
            Trainer::where('id',$request->id)->update($update);
            DB::commit();
            Toastr::success('Updated Trainer successfully :)','Success');
            return redirect()->back();
        } catch(\Exception $e) {
            DB::rollback();
            Toastr::error('Update Trainer fail :)','Error');
            return redirect()->back();
        }
    }
}
