<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Holiday;
use DB;
class HolidayController extends Controller
{
    // holidays
    public function holiday()
    {
        return view('form.holidays');
    }
    // save record
    public function saveRecord(Request $request)
    {
        $request->validate([
            'nameHoliday' => 'required|string|max:255',
            'holidayDate' => 'required|string|max:255',
        ]);
        DB::beginTransaction();
        try{
            $holiday = new Holiday;
            $holiday->name_holiday = $request->nameHoliday;
            $holiday->date_holiday  = $request->holidayDate;
            $holiday->save();
            
            DB::commit();
            Toastr::success('Create new account successfully :)','Success');
            return redirect()->route('userManagement');
        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('User add new account fail :)','Error');
            return redirect()->back();
        }
    }
}
