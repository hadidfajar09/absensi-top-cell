<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrainingTypeController extends Controller
{
    // index page training type
    public function index() 
    {
        return view('trainingtype.trainingtype');
    }

}
