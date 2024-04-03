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

    public function DeletePermission($id)
    {
        Permission::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Permission Deleted',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    //role methods//

    public function AllRoles()
    {
        $roles = Role::all();
        return view('website-pages.admin.roles.all_roles', compact('roles'));
    }//end method

    public function AddRoles()
    {
        return view('website-pages.admin.roles.add_roles');
    }

    public function StoreRoles(request $request)
    {
        Role::create([
            'name' => $request->name,
        ]);

        $notification = array(
            'message' => 'Role Saved Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.roles')->with($notification);
    }

    public function EditRoles($id)
    {
        $roles = Role::findOrFail($id);
        return view('website-pages.admin.roles.edit_roles', compact('roles'));
    }

    public function UpdateRoles(request $request)
    {
        $r_id = $request->id;


        Role::findOrFail($r_id)->update([
            'name' => $request->name,
        ]);

        $notification = array(
            'message' => 'Role Updates Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.roles')->with($notification);
    }

    public function DeleteRoles($id)
    {
        Role::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Role Deleted',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }


}
