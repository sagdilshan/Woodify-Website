<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SellerController extends Controller
{
    public function SellerDashboard(){
        return view('website-pages.seller.seller_dashboard');
    }
}
