<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JobController extends Controller
{
    // job List
    public function jobList()
    {
        return view('job.joblist');
    }
}
