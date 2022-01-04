<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Brian2694\Toastr\Facades\Toastr;
use App\Models\Training;
use Session;
use Auth;


class TrainersController extends Controller
{
    // index page
    public function index()
    {
        return view('trainers.trainers');
    }
}
