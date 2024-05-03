<?php

namespace App\Http\Controllers;

use App\Models\CartModel;
use App\Models\CategoryModel;
use App\Models\ProductModel;

use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function SellerAllProduct()
    {
        // Retrieve the currently authenticated user's ID
        $userId = Auth::id();

        // Retrieve products created by the currently authenticated user
        $allProducts = ProductModel::where('created_by', $userId)
            ->orderBy('created_at', 'desc')->get();

        return view('website-pages.seller.product.all-product', compact('allProducts'));
    }
    public function SellerAddProduct()
    {
        $categories = CategoryModel::all();
        return view('website-pages.seller.product.add-product', compact('categories'));
    }
    public function SellerStoreProduct(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'price' => 'required|numeric|min:0',
            'sale_price' => 'required|numeric|min:0',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048'

        ]);

        $product = new ProductModel();
        $product->name = $validatedData['name'];
        $product->price = $validatedData['price'];
        $product->sale_price = $validatedData['sale_price'];
        // $product->category_id = $request->category_id;
        $product->category_id = $request->category_id;
        $product->sale_type = $request->sale_type;
        $product->description = $request->description;
        $product->created_by = Auth::user()->id;
        $product->status = 'disapprove';




        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $image) {
                $filename = date('Ymd') . '_' . $image->getClientOriginalName(); // Generate unique filename
                $image->move(public_path('upload/product_images'), $filename); // Move image to storage directory
                $imagePaths[] = 'upload/product_images/' . $filename; // Store image path in an array
            }
            $product['images'] = json_encode($imagePaths); // Save array of image paths as JSON string in database
        }

        if ($request->file('thumb1')) {
            $file = $request->file('thumb1');

            $filename = date('Ymd') . $file->getClientOriginalName();
            $file->move(public_path('upload/thumb_images'), $filename);
            $product['thumb1'] = $filename;
        }

        if ($request->file('thumb2')) {
            $file = $request->file('thumb2');

            $filename = date('Ymd') . $file->getClientOriginalName();
            $file->move(public_path('upload/thumb_images'), $filename);
            $product['thumb2'] = $filename;
        }


        $product->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Product Created',
            'alert-type' => 'success'
        );

        return redirect()->route('seller.all.products')->with($notification);
    }

    public function SellerEditProduct($id)
    {
        $products = ProductModel::findOrFail($id);
        // Check if the product belongs to the currently authenticated user
        if ($products->created_by != auth()->id()) {
            // Redirect or abort with an error message

            $notification = [
                'message' => 'You are not authorized to view this product.',
                'alert-type' => 'error'
            ];
            return redirect()->route('seller.all.products')->with($notification);
        }
        $categories = CategoryModel::all();
        $statuses = ProductModel::distinct()->pluck('status');
        $stocks = ['stock', 'out_of_stock'];
        return view('website-pages.seller.product.edit-product', compact('products', 'statuses', 'categories', 'stocks'));
    }

    public function SellerUpdateProduct(Request $request)
    {
        $pid = $request->id;
        $products = ProductModel::findOrFail($pid);

        // Check if the status is 'rejected'
        if ($products->status === 'rejected') {
            // Redirect back with an error message
            $notification = array(
                'message' => 'Product update failed: Product status is rejected',
                'alert-type' => 'error'
            );

            return redirect()->route('seller.all.products')->with($notification);
        }
        // Update other fields
        $products->name = $request->name;
        $products->price = $request->price;
        $products->sale_price = $request->sale_price;
        $products->category_id = $request->category_id;
        $products->stock_status = $request->stock_status;
        $products->description = $request->description;
        $products->status = 'disapprove';



        // Save the changes to the database
        $products->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Products Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('seller.all.products')->with($notification);
    }

    // public function SellerDeleteProduct($id)
    // {
    //     $products = ProductModel::findOrFail($id);

    //     // Delete the product's images if they exist
    //     if ($products->images) {
    //         // Loop through each image path
    //         foreach ($products->images as $image) {
    //             // Determine the file path
    //             $imagePath = public_path('upload/product_images/' . $image->filename);

    //             // Check if the file exists before attempting to delete it
    //             if (file_exists($imagePath)) {
    //                 unlink($imagePath); // Delete the image file
    //             }
    //         }
    //     }


    //     // Delete the category from the database
    //     $products->delete();

    //     // Redirect back with a success message
    //     $notification = [
    //         'message' => 'Products Deleted',
    //         'alert-type' => 'success'
    //     ];

    //     return redirect()->back()->with($notification);
    // }

    public function SellerDeleteProduct($id)
    {
        $product = ProductModel::findOrFail($id);
        // Check if the product belongs to the currently authenticated user
        if ($product->created_by != auth()->id()) {
            // Redirect or abort with an error message

            $notification = [
                'message' => 'You are not authorized to view this product.',
                'alert-type' => 'error'
            ];
            return redirect()->route('seller.all.products')->with($notification);
        }
        // Check if the product has images
        if ($product->images) {
            // Split the image filenames into an array
            $filenames = explode(',', $product->images);

            // Loop through each image filename
            foreach ($filenames as $filename) {
                // Determine the file path
                $imagePath = public_path('upload/product_images/' . $filename);

                // Check if the file exists before attempting to delete it
                if (file_exists($imagePath)) {
                    unlink($imagePath); // Delete the image file
                }
            }
        } else {
            // If the product has no images, delete other things here
            // For example, delete related records or other data
            // Example:
            // $product->relatedRecords()->delete();
        }

        // Delete the product from the database
        $product->delete();

        // Redirect back with a success message
        $notification = [
            'message' => 'Product Deleted',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }

    // public function SellerViewProduct()
    // {


    //     return view('website-pages.seller.product.view-product');
    // }
    public function SellerViewProduct($id)
    {
        $productt = ProductModel::findOrFail($id);

        // Check if the product belongs to the currently authenticated user
        if ($productt->created_by != auth()->id()) {
            // Redirect or abort with an error message

            $notification = [
                'message' => 'You are not authorized to view this product.',
                'alert-type' => 'error'
            ];
            return redirect()->route('seller.all.products')->with($notification);
        }

        return view('website-pages.seller.product.view-product', compact('productt'));
    }

    public function ManageAllProduct()
    {


        // Retrieve products created by the currently authenticated user
        $alldisapprove = ProductModel::where('status', 'disapprove')
            ->where('stock_status', 'stock')
            ->orderBy('created_at', 'desc')
            ->get();

        $allapprove = ProductModel::where('status', 'approve')
            ->where('stock_status', 'stock')
            ->orderBy('created_at', 'desc')
            ->get();
        $allrejected = ProductModel::where('status', 'rejected')
            ->where('stock_status', 'stock')
            ->orderBy('created_at', 'desc')
            ->get();
        $outofstocks = ProductModel::where('stock_status', 'out_of_stock')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('website-pages.admin.product.all_products', compact('alldisapprove', 'allapprove', 'allrejected', 'outofstocks'));
    }

    public function ManageEditProduct($id)
    {
        $products = ProductModel::findOrFail($id);

        $categories = CategoryModel::all();
        $statuses = ['approve', 'disapprove', 'rejected'];
        return view('website-pages.admin.product.edit_products', compact('products', 'statuses', 'categories'));
    }

    public function ManageUpdateProduct(Request $request)
    {
        $pid = $request->id;
        $products = ProductModel::findOrFail($pid);


        // Update other fields
        $products->category_id = $request->category_id;
        $products->status = $request->status;

        $products->approved_by = Auth::user()->id;



        // Save the changes to the database
        $products->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Product Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('manage.all.products')->with($notification);
    }

    public function ManageViewProduct($id)
    {
        $productt = ProductModel::findOrFail($id);
        return view('website-pages.admin.product.view_products', compact('productt'));
    }

    public function shopindex()
    {
        // Retrieve products with their regular price and sale price
        $productss = ProductModel::where('status', 'approve')
            ->where('stock_status', 'stock')
            ->orderBy('created_at', 'desc')
            ->take(12)
            ->get();



        // Calculate percentage decrease for $productss
        foreach ($productss as $product) {
            $regularPrice = $product->price;
            $salePrice = $product->sale_price;
            $percentageDecrease = ($regularPrice - $salePrice) / $regularPrice * 100;
            $product->percentage_decrease = intval($percentageDecrease); // Convert to integer
        }

        // Pass data to the view
        return view('shop', compact('productss'));
    }


    // public function ProductView()
    // {
    //     return view('productview');
    // }


    public function ProductView($id)
    {
        $productview = ProductModel::findOrFail($id);
        $productviews = ProductModel::all();
        $productss = ProductModel::where('status', 'approve')
            ->where('stock_status', 'stock')
            ->inRandomOrder()
            ->take(8)
            ->get();


        return view('productview', compact('productview', 'productviews', 'productss'));
    }


    public function CartAdd(Request $request)

    {
        $cart = new CartModel;
        $cart->product_name = trim($request->product_name);
        $cart->product_id = trim($request->product_id);
        $cart->product_name = trim($request->product_name);
        $cart->price = trim($request->price);
        $cart->quantity = trim($request->quantity);
        $cart->thumb = trim($request->thumb);
        $cart->seller_id = trim($request->seller_id);
        $cart->customer_id = Auth::user()->id;



        $cart->save();

        $notification = array(
            'message' => 'Product added to Cart',
            'alert-type' => 'success'
        );

        return redirect()->route('cart')->with($notification);
    }



    public function DeleteCart($id)
    {
        $carts = CartModel::findOrFail($id);



        // Delete the category from the database
        $carts->delete();

        // Redirect back with a success message
        $notification = [
            'message' => 'Cart Item Deleted',
            'alert-type' => 'warning'
        ];

        return redirect()->back()->with($notification);
    }
}
