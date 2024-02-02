<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    public function CustomerDashboard(){
        return view('website-pages.customer.customer_dashboard');
    }
}
