<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class CustomerController extends Controller
{
    public function CustomerDashboard(){
        return view('website-pages.customer.index');
    }

    public function CustomerLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }


    public function CustomerProfile(){
        $id = Auth::user()->id;
        $profileData = user::find($id);
        return view('website-pages.customer.profile',compact('profileData'));
    }

    public function CustomerProfileStore(Request $request){
        $id = Auth::user()->id;
        $data = user::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if($request->file('photo')){
            $file = $request->file('photo');
            $filename = date('YmdHi').$file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/customer_images'),$filename);
            $data['photo'] = $filename;
        }

        $data->save();

        return redirect()->back();
    }
}
