<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RolesPermissions;
use Brian2694\Toastr\Facades\Toastr;
use DB;
class SettingController extends Controller
{
    // company/settings/page
    public function companySettings()
    {
        return view('settings.companysettings');
    }
    
    // Roles & Permissions 
    public function rolesPermissions()
    {
        $rolesPermissions = RolesPermissions::All();
        return view('settings.rolespermissions',compact('rolesPermissions'));
    }
    // edit roles permissions
    public function editRolesPermissions( Request $request)
    {
        DB::beginTransaction();
        try{
            $id           = $request->id;
            $roleName  = $request->roleName;
            
            $update = [

                'id'               => $id,
                'permissions_name' => $roleName,
            ];

            RolesPermissions::where('id',$request->id)->update($update);
            DB::commit();
            Toastr::success('Role Name updated successfully :)','Success');
            return redirect()->back();

        }catch(\Exception $e){
            DB::rollback();
            Toastr::error('Role Name update fail :)','Error');
            return redirect()->back();
        }
    }
}
