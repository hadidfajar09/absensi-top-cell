<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SettingController extends Controller
{
    // company/settings/page
    public function companySettings()
    {
        return view('settings.companysettings');
    }
}
