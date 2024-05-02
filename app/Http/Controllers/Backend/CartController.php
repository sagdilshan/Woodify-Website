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

        $cartitems = CartModel::where('customer_id', Auth::user()->id)->get();

        // Pass data to the view
        return view('cart', compact('cartitems'));
    }



}

