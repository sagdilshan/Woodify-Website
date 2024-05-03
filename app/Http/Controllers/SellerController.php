<?php

namespace App\Http\Controllers;

use App\Models\CartModel;

use App\Models\ProductModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use App\Models\ContactModel;


class SellerController extends Controller
{
    public function SellerDashboard()
    {

        $user_id = auth()->id(); // Get the ID of the currently authenticated user

        $product_approved = ProductModel::where('created_by', $user_id)
            ->where('status', 'approve')
            ->count();
        $product_disapproved = ProductModel::where('created_by', $user_id)
            ->where('status', 'disapprove')
            ->count();
        $product_rejected = ProductModel::where('created_by', $user_id)
            ->where('status', 'rejected')
            ->count();

        $sellerId = Auth::id();
        $pending_orders = CartModel::where('status', 'buy')
            ->where('order_status', 'pending')
            ->where('seller_id', $sellerId)
            ->count();

        $allorders = CartModel::where('status', 'buy')
            ->where('order_status', 'pending')
            ->where('seller_id', $sellerId)
            ->orderBy('created_at', 'desc')
            ->get();

        $totalPrice = CartModel::whereIn('order_status', ['delivery', 'delivered'])
            ->where('status', 'buy')
            ->where('seller_id', $sellerId)
            ->sum('price');
        $formattedPrice = number_format($totalPrice, 0, '.', ',');

        return view('website-pages.seller.index', compact('product_approved', 'formattedPrice', 'allorders', 'product_disapproved', 'product_rejected', 'pending_orders'));


    }

    public function SellerLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function SellerProfile()
    {
        $id = Auth::user()->id;
        $profileData = user::find($id);

        $user_id = auth()->id(); // Get the ID of the currently authenticated user

        $product_approved = ProductModel::where('created_by', $user_id)
            ->where('status', 'approve')
            ->count();
        $allorders = CartModel::where('status', 'buy')
            ->whereIn('order_status', ['delivery', 'delivered'])
            ->where('seller_id', $user_id)
            ->count();

        $totalPrice = CartModel::whereIn('order_status', ['delivery', 'delivered'])
            ->where('status', 'buy')
            ->where('seller_id', $user_id)
            ->sum('price');
        $formattedPrice = number_format($totalPrice, 0, '.', ',');

        return view('website-pages.seller.profile', compact('profileData', 'formattedPrice', 'allorders', 'product_approved'));
    }

    public function SellerProfileStore(Request $request)
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
            @unlink(public_path('upload/seller_images/' . $data->photo)); //delete previous profile image
            $filename = date('YmdHi') . $file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/seller_images'), $filename);
            $data['photo'] = $filename;
        }

        $data->save();

        $notification = array(
            'message' => 'Seller Profile Updated Succssfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

    public function SellerUpdatePassword(Request $request)
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

    public function MyInquires()
    {
        $userId = Auth::id();
        $allcontact = ContactModel::where('status', 'responded')
            ->where('user_id', $userId)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('website-pages.seller.contact.my-contact', compact('allcontact'));
    }

    public function SellerOrders()
    {
        $sellerId = Auth::id();
        $deliveryorders = CartModel::where('status', 'buy')
            // ->whereIn('order_status', ['delivery', 'delivered'])
            ->where('order_status', 'delivery')
            ->where('seller_id', $sellerId)
            ->orderBy('created_at', 'desc')
            ->get();

        $deliveredorders = CartModel::where('status', 'buy')
            // ->whereIn('order_status', ['delivery', 'delivered'])
            ->where('order_status', 'delivered')
            ->where('seller_id', $sellerId)
            ->orderBy('created_at', 'desc')
            ->get();

        return view('website-pages.seller.orders.all-orders', compact('deliveryorders', 'deliveredorders'));
    }

    public function sellerOrderStatus($id)
    {
        $order = CartModel::find($id);

        if ($order) {
            $order->update(['order_status' => 'delivery']);
            $notification = array(
                'message' => 'Order Status Updated',
                'alert-type' => 'success'
            );
            return redirect()->back()->with($notification);
        }
        $notification = array(
            'message' => 'Order Status Updated',
            'alert-type' => 'success'
        );


        return redirect()->back()->with($notification);
    }
}
