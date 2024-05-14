<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\AuctionModel;
use App\Models\BidModel;
use App\Models\CartModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;

class AuctionController extends Controller
{
    public function ViewAuction()
    {

        // Retrieve products with their regular price and sale price
        $auctions = AuctionModel::where('end_date', '>', now())
            ->inRandomOrder()
            ->get();


        // Pass data to the view
        return view('auction', compact('auctions'));
    }



    public function SellerAllAuction()
    {
        // Retrieve the currently authenticated user's ID
        $userId = Auth::id();

        // Retrieve products created by the currently authenticated user
        $allauction = AuctionModel::where('created_by', $userId)
            ->orderBy('created_at', 'desc')->get();
        // Pass data to the view
        return view('website-pages.seller.auction.all-auction', compact('allauction'));
    }

    public function SellerAddAuction()
    {
        $auctions = AuctionModel::all();
        return view('website-pages.seller.auction.add-auction', compact('auctions'));
    }

    public function SellerStoreAuction(Request $request)
    {
        $validatedData = $request->validate([
            'p_name' => 'required|string|max:255',
            'start_price' => 'required|numeric|min:0',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'end_date' => 'required|date|after_or_equal:' . Carbon::today()->format('Y/m/d'),

        ]);

        $auctionp = new AuctionModel();
        $auctionp->p_name = $validatedData['p_name'];
        $auctionp->start_price = $validatedData['start_price'];
        $auctionp->description = $request->description;
        $auctionp->created_by = Auth::user()->id;
        $auctionp->end_date = $request->end_date;




        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = date('Ymd') . '_' . $image->getClientOriginalName(); // Generate unique filename
                $image->move(public_path('upload/auction_images'), $filename); // Move image to storage directory
                $imagePaths[] = 'upload/auction_images/' . $filename; // Store image path in an array
            }
            $auctionp['images'] = json_encode($imagePaths); // Save array of image paths as JSON string in database
        }

        if ($request->file('thumb_1')) {
            $file = $request->file('thumb_1');

            $filename = date('Ymd') . $file->getClientOriginalName();
            $file->move(public_path('upload/thumb_images'), $filename);
            $auctionp['thumb_1'] = $filename;
        }

        if ($request->file('thumb_2')) {
            $file = $request->file('thumb_2');

            $filename = date('Ymd') . $file->getClientOriginalName();
            $file->move(public_path('upload/thumb_images'), $filename);
            $auctionp['thumb_2'] = $filename;
        }


        $auctionp->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Auction Product Created',
            'alert-type' => 'success'
        );

        return redirect()->route('seller.all.auction')->with($notification);
    }

    public function AuctionProductView($id)
    {
        $auctionview = AuctionModel::findOrFail($id);

        // Get the maximum bid price for the auction
        $maxBidPrice = BidModel::where('auction_product_id', $id)->max('customer_price');

        // If no bids exist, set the maximum bid price to the start price
        if ($maxBidPrice === null) {
            $maxBidPrice = $auctionview->start_price;
        }

        $auctionviews = AuctionModel::all();
        $auctionviewss = AuctionModel::where('end_date', '>', now())
            ->inRandomOrder()
            ->take(8)
            ->get();


        return view('auctionview', compact('auctionview', 'auctionviews', 'auctionviewss', 'maxBidPrice'));
    }


    // public function AuctionAdd(Request $request)
    // {


    //     $auction = new BidModel;
    //     $auction->auction_product_id = trim($request->auction_product_id);
    //     $auction->auction_product_name = trim($request->auction_product_name);
    //     $auction->thumb_1 = trim($request->thumb_1);
    //     $auction->start_price = trim($request->start_price);
    //     $auction->seller_id = trim($request->seller_id);
    //     $auction->customer_price = trim($request->customer_price);
    //     $auction->quantity = trim($request->quantity);
    //     $auction->customer_id = Auth::user()->id;



    //     $auction->save();

    //     $notification = array(
    //         'message' => 'Your BID Saved',
    //         'alert-type' => 'success'
    //     );

    //     return redirect()->route('auction')->with($notification);
    // }

    public function AuctionAdd(Request $request)
    {
        // Check if the authenticated user has the "customer" role
        if (Auth::check() && Auth::user()->role === 'customer') {
            // Proceed with adding the bid if the user has the "customer" role
            $auction = new BidModel;
            $auction->auction_product_id = trim($request->auction_product_id);
            $auction->auction_product_name = trim($request->auction_product_name);
            $auction->thumb_1 = trim($request->thumb_1);
            $auction->start_price = trim($request->start_price);
            $auction->seller_id = trim($request->seller_id);
            $auction->customer_price = trim($request->customer_price);
            $auction->quantity = trim($request->quantity);
            $auction->customer_id = Auth::user()->id;

            $auction->save();

            $notification = array(
                'message' => 'Your BID Saved',
                'alert-type' => 'success'
            );

            return redirect()->route('auction')->with($notification);
        } else {
            // User does not have the "customer" role
            $notification = array(
                'message' => 'You do not have permission to add bids.',
                'alert-type' => 'error'
            );

            return redirect()->route('auction')->with($notification);
        }
    }

    // public function SellerCloseAuction()
    // {
    //     $userId = Auth::id();
    //     $maxbid = BidModel::get();

    //     return view('website-pages.seller.auction.close-auction', compact('allcontact'));
    // }

    public function SellerCloseAuction($id)
    {


        $auctionview = BidModel::findOrFail($id);

        // if ($auctionview->seller_id != auth()->id()) {
        //     // Redirect or abort with an error message

        //     $notification = [
        //         'message' => 'You are not authorized to view this product.',
        //         'alert-type' => 'error'
        //     ];
        //     return redirect()->route('seller.all.auction')->with($notification);
        // }

        // Retrieve the maximum customer price for each auction product
        $maxBids = BidModel::select('auction_product_id', DB::raw('MAX(customer_price) as max_price'))
        // ->where('seller_id', $userId)
        ->groupBy('auction_product_id')
            ->get();

        // Initialize an array to store bid table IDs
        $bidIds = [];

        // Retrieve the bid table IDs corresponding to the maximum customer prices
        foreach ($maxBids as $maxBid) {
            $bid = BidModel::where('auction_product_id', $id)
                ->where('auction_product_id', $maxBid->auction_product_id)
                ->where('customer_price', $maxBid->max_price)
                ->first();

            if ($bid) {
                $bidIds[] = $bid->id;
            }
        }

        // Retrieve full bid table data using the obtained IDs
        $bids = BidModel::whereIn('id', $bidIds)->get();

        return view('website-pages.seller.auction.close-auction', compact('bids'));
    }

    public function MyCloseAuction(Request $request)
    {
        // Retrieve data from the request
        $productId = $request->input('product_id');
        $productPrice = $request->input('price');

        // Check if the product with the same product_id already exists in the cart
        $existingProduct = CartModel::where('product_id', $productId)->first();

        // If the product exists in the cart, display a notification and redirect back
        if ($existingProduct) {
            $notification = array(
                'message' => 'Auction already closed.',
                'alert-type' => 'error'
            );

            // return redirect()->back()->with($notification);
            return redirect()->route('seller.all.auction')->with($notification);
        }

        // If the product doesn't exist in the cart, proceed with adding it
        $cart = new CartModel;
        $cart->product_id = $productId;
        $cart->product_name = trim($request->input('product_name'));
        $cart->price = $productPrice;
        $cart->quantity = trim($request->input('quantity'));
        $cart->thumb = trim($request->input('thumb'));
        $cart->seller_id = trim($request->input('seller_id'));
        $cart->customer_id = trim($request->input('customer_id'));
        $cart->status = 'cart';

        $cart->save();

        $notification = array(
            'message' => 'Product added to cart successfully.',
            'alert-type' => 'success'
        );

        return redirect()->route('seller.all.auction')->with($notification);
    }



}
