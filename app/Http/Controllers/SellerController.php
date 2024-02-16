<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class SellerController extends Controller
{
    public function SellerDashboard(){
        return view('website-pages.seller.index');
    }

    public function SellerLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function SellerProfile(){
        $id = Auth::user()->id;
        $profileData = user::find($id);
        return view('website-pages.seller.profile',compact('profileData'));
    }

    public function SellerProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = user::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if($request->file('photo')){
            $file = $request->file('photo');
            @unlink(public_path('upload/seller_images/'. $data->photo)); //delete previous profile image
            $filename = date('YmdHi').$file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/seller_images'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' =>'Seller Profile Updated Succssfully',
            'alert-type'=> 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function SellerUpdatePassword(Request $request){
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
