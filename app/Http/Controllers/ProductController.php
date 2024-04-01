<?php

namespace App\Http\Controllers;

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
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:2048' // Adjust max file size as needed
            // Add more validation rules for other fields
        ]);

        $product = new ProductModel();
        $product->name = $validatedData['name'];
        $product->price = $validatedData['price'];
        $product->sale_price = $validatedData['sale_price'];
        // $product->category_id = $request->category_id;
        $product->category_id = $request->category_id;
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
        return view('website-pages.seller.product.edit-product', compact('products', 'statuses', 'categories'));
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
        ->orderBy('created_at', 'desc')
        ->get();

        $allapprove = ProductModel::where('status', 'approve')
            ->orderBy('created_at', 'desc')
            ->get();
        $allrejected = ProductModel::where('status', 'rejected')
            ->orderBy('created_at', 'desc')
            ->get();

        return view('website-pages.admin.product.all_products', compact('alldisapprove','allapprove','allrejected'));
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

}