<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function ViewAuction()
    {

        // Pass data to the view
        return view('auction');



    }
}
