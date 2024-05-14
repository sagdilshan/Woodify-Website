<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CartModel;
use Illuminate\Support\Facades\Auth;


class CartController extends Controller
{
    public function CartIndex()
    {

        $cartitems = CartModel::where('customer_id', Auth::user()->id)
            ->where('status', 'cart')
            ->get();

        // Pass data to the view
        return view('cart', compact('cartitems'));



    }


    public function Checkout()
    {

        $buyitems = CartModel::where('customer_id', Auth::user()->id)
            ->where('status', 'cart')
            ->get();

        if ($buyitems->isNotEmpty()) {
            return view('checkout', compact('buyitems'));

        } else {
            // Handle the case where no items with the specified conditions are found
            $notification = array(
                'message' => 'Your cart is empty',
                'alert-type' => 'error'
            );

            return redirect()->route('shop')->with($notification);
        }
    }


    public function CheckoutAdd(Request $request)
    {
        $request->validate([
            'customer_name' => 'required|string|max:255',
            'customer_email' => 'required|email|max:255',
            'customer_phone' => 'required|digits_between:2,15',
            'customer_address' => 'required|string|max:255',
            'customer_city' => 'required|string|max:255',
            'customer_province' => 'required|string|max:255',
            'customer_postal_code' => 'required|string|max:10',
            'customer_country' => 'required|string',
            'note' => 'nullable|string',
            'name_on_card' => 'required|string|max:255',
            'card_type' => 'required|string',
            'card_number' => 'required|numeric',
        ]);

        // Retrieve all cart items for the authenticated user
        $cartItems = CartModel::where('customer_id', auth()->id())
            ->where('status', 'cart')
            ->get();

        // Update each cart item with the new data
        foreach ($cartItems as $item) {
            $item->update([
                'customer_name' => $request->customer_name,
                'customer_email' => $request->customer_email,
                'customer_phone' => $request->customer_phone,
                'customer_address' => $request->customer_address,
                'customer_city' => $request->customer_city,
                'customer_province' => $request->customer_province,
                'customer_postal_code' => $request->customer_postal_code,
                'customer_country' => $request->customer_country,
                'note' => $request->note,
                'name_on_card' => $request->name_on_card,
                'card_type' => $request->card_type,
                'card_number' => $request->card_number,
                'status' => 'buy',
            ]);
        }



        $notification = array(
            'message' => 'Your Order Placed',
            'alert-type' => 'success'
        );

        return redirect()->route('customer.dashboard')->with($notification);

    }


}

