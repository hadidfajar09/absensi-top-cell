<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\performanceIndicator;
use App\Models\performance_appraisal;
use Session;
use Auth;

class TrainingController extends Controller
{
    // index page
    public function index()
    {
        return view('training.traininglist');
    }
}
