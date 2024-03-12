<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RoleController extends Controller
{
    public function AllPermission()
    {
        $permissions = Permission::all();
        return view('website-pages.admin.permission.all_permission', compact('permissions'));
    }//end method

    public function AddPermission()
    {
        return view('website-pages.admin.permission.add_permission');
    }
    public function StorePermission(request $request)
    {
        $permission = Permission::create([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        $notification = array(
            'message' => 'Permission Saved Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.permission')->with($notification);
    }

    public function EditPermission($id)
    {
        $permissions = Permission::findOrFail($id);
        return view('website-pages.admin.permission.edit_permission', compact('permissions'));
    }

    public function UpdatePermission(request $request)
    {
        $p_id = $request->id;


        Permission::findOrFail($p_id)->update([
            'name' => $request->name,
            'group_name' => $request->group_name,
        ]);

        $notification = array(
            'message' => 'Permission Updates Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.permission')->with($notification);
    }

    public function DeletePermission($id){
        Permission::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Permission Deleted',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


}
