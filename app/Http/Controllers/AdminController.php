<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function AdminDashboard(){
        return view('website-pages.admin.index');
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }

    public function AdminProfile(){
        $id = Auth::user()->id;
        $profileData = user::find($id);
        return view('website-pages.admin.profile',compact('profileData'));
    }

    public function AdminProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = user::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/'. $data->photo)); //delete previous profile image
            $filename = date('YmdHi').$file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/admin_images'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' =>'Admin Profile Updated Succssfully',
            'alert-type'=> 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function AdminUpdatePassword(Request $request){
        //validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        //match the old password

        if (!Hash::check($request->old_password, auth::user()->password)) {

            $notification = array(
                'message' =>'Old Password Does not Match',
                'alert-type'=> 'error'
            );

            return back()->with($notification);

        }

        //update the new password
        User::whereId(auth()->user()->id)->update([
            'password'=> Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' =>'Password Change Successfully',
            'alert-type'=> 'success'
        );

        return back()->with($notification);
    }


}
