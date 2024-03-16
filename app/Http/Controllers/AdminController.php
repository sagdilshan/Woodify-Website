<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function AdminDashboard()
    {   $fakeTotalcustomers = 0;
        $realTotaladmins = User::where('role', 'admin')->where('status', 'active')->count();
        $totaladmins = $fakeTotalcustomers + $realTotaladmins;
        $formattedTotaladmins = number_format($totaladmins);


        $fakeTotalSellers = 0;// Fake number
        $realTotalSellers = User::where('role', 'seller')->where('status', 'active')->count();// Real count of sellers
        $totalsellers = $fakeTotalSellers + $realTotalSellers;// Combine fake number and real count
        $formattedTotalSellers = number_format($totalsellers); // Format the total sellers number with commas for thousands separators

        $fakeTotalcustomers = 0;
        $realTotalcustomers = User::where('role', 'customer')->where('status', 'active')->count();
        // User::where('role', 'customer')->count();
        $totalcustomers = $fakeTotalcustomers + $realTotalcustomers;
        $formattedTotalcustomers = number_format($totalcustomers);

        return view('website-pages.admin.index', compact('formattedTotalSellers', 'formattedTotaladmins', 'formattedTotalcustomers'));
    }

    public function AdminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function AdminProfile()
    {
        $id = Auth::user()->id;
        $profileData = user::find($id);
        return view('website-pages.admin.profile', compact('profileData'));
    }

    public function AdminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = user::find($id);
        $data->username = $request->username;
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;

        if ($request->file('photo')) {
            $file = $request->file('photo');
            @unlink(public_path('upload/admin_images/' . $data->photo)); //delete previous profile image
            $filename = date('YmdHi') . $file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/admin_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Admin Profile Updated Succssfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function AdminUpdatePassword(Request $request)
    {
        //validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        //match the old password

        if (!Hash::check($request->old_password, auth::user()->password)) {

            $notification = array(
                'message' => 'Old Password Does not Match',
                'alert-type' => 'error'
            );

            return back()->with($notification);

        }

        //update the new password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Password Change Successfully',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    //admin user all methods//

    public function AllAdmin()
    {
        $alladmin = User::where('role', 'admin')->get();
        return view('website-pages.admin.manage-users.all_admin', compact('alladmin'));
    }

    public function AddUsers()
    {
        $roles = User::distinct()->pluck('role');
        return view('website-pages.admin.manage-users.add_users', compact('roles'));
    }

    public function StoreUsers(Request $request)
    {



        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->password = Hash::make($request->password);
        $user->status = 'active';
        $user->save();



        $notification = array(
            'message' => 'New User Added Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('admin.dashboard')->with($notification);

    }

    public function EditAdmin($id)
    {
        $user = User::findOrFail($id);
        $roles = User::distinct()->pluck('role'); // Assuming Role is your model for roles
        $statuses = User::distinct()->pluck('status'); // Fetch unique status values from the users table
        return view('website-pages.admin.manage-users.edit_admin', compact('user', 'roles', 'statuses'));
    }

    public function UpdateAdmin(Request $request, $id)
    {


        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->status = $request->status;

        $user->save();



        $notification = array(
            'message' => 'Admin Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.admin')->with($notification);

    }
    public function DeleteAdmin($id)
    {

        $user = User::findOrFail($id);
        $user->delete();

        $notification = array(
            'message' => 'Admin Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    //customers all methods//

    public function AllCustomer()
    {
        // $allcustomer = User::where('role', 'customer')->get();
        $allcustomer = User::where('role', 'customer')
        ->orderBy('created_at', 'desc')
        ->get();

        return view('website-pages.admin.manage-users.all_customer', compact('allcustomer'));
    }

    public function EditCustomer($id)
    {
        $user = User::findOrFail($id);
        $roles = User::distinct()->pluck('role'); // Assuming Role is your model for roles
        $statuses = User::distinct()->pluck('status'); // Fetch unique status values from the users table
        return view('website-pages.admin.manage-users.edit_customer', compact('user', 'roles', 'statuses'));
    }

    public function UpdateCustomer(Request $request, $id)
    {


        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->status = $request->status;

        $user->save();



        $notification = array(
            'message' => 'Customer Details Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('all.customer')->with($notification);

    }

    public function DeleteCustomer($id)
    {

        $user = User::findOrFail($id);
        $user->delete();

        $notification = array(
            'message' => 'Customer Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }



    //customers all methods//

    public function AllSeller()
    {
        $allseller = User::where('role', 'seller')->get();
        // $allseller = User::where('role', 'seller')
        // ->orderBy('created_at', 'desc')
        // ->get();
        return view('website-pages.admin.manage-users.all_seller', compact('allseller'));
    }

    public function EditSeller($id)
    {
        $user = User::findOrFail($id);
        $roles = User::distinct()->pluck('role'); // Assuming Role is your model for roles
        $statuses = User::distinct()->pluck('status'); // Fetch unique status values from the users table
        return view('website-pages.admin.manage-users.edit_seller', compact('user', 'roles', 'statuses'));
    }

    public function UpdateSeller(Request $request, $id)
    {


        $user = User::findOrFail($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = $request->role;
        $user->status = $request->status;

        $user->save();



        $notification = array(
            'message' => 'Seller Details Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('all.seller')->with($notification);

    }

    public function DeleteSeller($id)
    {

        $user = User::findOrFail($id);
        $user->delete();

        $notification = array(
            'message' => 'Seller Deleted Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }






}
