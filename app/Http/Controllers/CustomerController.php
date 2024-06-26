<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\ContactModel;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function CustomerDashboard()
    {
        $userId = Auth::id();
        $orders = CartModel::where('order_status', 'pending')
            ->where('customer_id', $userId)
            ->where('status', 'buy')
            ->orderBy('created_at', 'desc')
            ->get();


        $total_orders = CartModel::where('status', 'buy')
            ->where('customer_id', $userId)
            ->count();
        $pending_orders = CartModel::where('status', 'buy')
            ->where('order_status', 'pending')
            ->where('customer_id', $userId)
            ->count();

        return view('website-pages.customer.index', compact('orders', 'total_orders', 'pending_orders'));
    }

    public function CustomerLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }


    public function CustomerProfile()
    {
        $userId = Auth::user()->id;
        $profileData = user::find($userId);

        $orders = CartModel::where('status', 'buy')
            ->whereIn('order_status', ['delivered', 'delivery'])
            ->where('customer_id', $userId)
            ->count();


        $total_orders = CartModel::where('status', 'buy')
            ->where('customer_id', $userId)
            ->count();
        $pending_orders = CartModel::where('status', 'buy')
            ->where('order_status', 'pending')
            ->where('customer_id', $userId)
            ->count();

        return view('website-pages.customer.profile', compact('profileData', 'orders', 'total_orders', 'pending_orders'));
    }

    public function CustomerProfileStore(Request $request)
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
            @unlink(public_path('upload/customer_images/' . $data->photo)); //delete previous profile image
            $filename = date('YmdHi') . $file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/customer_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Customer Profile Updated Succssfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function CustomerUpdatePassword(Request $request)
    {
        //validation
        $request->validate([
            'old_password' => 'required',
            'new_password' => 'required|confirmed'
        ]);

        //match the old password

        if (!Hash::check($request->old_password, auth::user()->password)) {

            $notification = array(
                'message' => 'Old Password Does not Match !!!',
                'alert-type' => 'error'
            );

            return back()->with($notification);

        }

        //update the new password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->new_password)
        ]);

        $notification = array(
            'message' => 'Password Change Successfully !!!',
            'alert-type' => 'success'
        );

        return back()->with($notification);
    }





    public function MyInquires()
    {
        $userId = Auth::id();
        $allcontact = ContactModel::where('status', 'responded')
            ->where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('website-pages.customer.contact.my-contact', compact('allcontact'));
    }


    public function PastOrders()
    {
        $userId = Auth::id();
        $pastorders = CartModel::where('order_status', 'delivery')
            ->where('customer_id', $userId)
            ->where('status', 'buy')
            ->orderBy('created_at', 'desc')
            ->get();
        $completeorders = CartModel::where('order_status', 'delivered')
            ->where('customer_id', $userId)
            ->where('status', 'buy')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('website-pages.customer.orders.past-orders', compact('pastorders', 'completeorders'));
    }

    public function updateOrderStatus($id)
    {
        $order = CartModel::find($id);

        if ($order) {
            $order->update(['order_status' => 'delivered']);
            return redirect()->back()->with('success', 'Order status updated to delivered');
        }

        return redirect()->back()->with('error', 'Failed to update order status');
    }

}
