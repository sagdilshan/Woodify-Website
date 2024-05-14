<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\CategoryModel;
use App\Models\ProductModel;

class PostController extends Controller
{
    public function AllPost()
    {
        $posts = Post::with('user')->get();

        return view('website-pages.admin.post.all_post', compact('posts'));
    }
    

    public function indexx()
    {
        $recents = Post::orderBy('id', 'asc')->take(7)->get();
        $posts = Post::inRandomOrder()->take(2)->get();
        $categories = CategoryModel::where('status', 'active')->inRandomOrder()->get();


        // Retrieve products with their regular price and sale price
        $productss = ProductModel::where('status', 'approve')
            ->where('stock_status', 'stock')
            ->inRandomOrder()
            ->get();

        $products1 = ProductModel::where('status', 'approve')
            ->where('sale_type', 'sale') // Add condition for sale_type
            ->where('stock_status', 'stock')
            ->inRandomOrder()
            ->take(6)
            ->get();

        // Calculate percentage decrease for $productss
        foreach ($productss as $product) {
            $regularPrice = $product->price;
            $salePrice = $product->sale_price;
            $percentageDecrease = ($regularPrice - $salePrice) / $regularPrice * 100;
            $product->percentage_decrease = intval($percentageDecrease); // Convert to integer
        }

        // Calculate percentage decrease for $products1
        foreach ($products1 as $product) {
            $regularPrice = $product->price;
            $salePrice = $product->sale_price;
            $percentageDecrease = ($regularPrice - $salePrice) / $regularPrice * 100;
            $product->percentage_decrease = intval($percentageDecrease); // Convert to integer
        }



        // Pass data to the view
        return view('welcome', compact('posts', 'categories', 'recents', 'productss', 'products1'));
    }



    public function AddPost()
    {

        return view('website-pages.admin.post.add_post');
    }

    public function StorePost(Request $request)
    {

        $posts = new Post;
        $posts->title = trim($request->title);
        $posts->content = trim($request->content);
        $posts->created_by = Auth::user()->id;

        if ($request->file('photo')) {
            $file = $request->file('photo');

            $filename = date('Ymd') . $file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/post_images'), $filename);
            $posts['photo'] = $filename;
        }

        $posts->save();

        $notification = array(
            'message' => 'Post Created Succssfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.post')->with($notification);

    }

    public function EditPost($id)
    { {
            $posts = Post::findOrFail($id);
            return view('website-pages.admin.post.edit_post', compact('posts'));
        }
    }

    public function UpdatePost(Request $request)
    {
        $pid = $request->id;
        $posts = Post::findOrFail($pid);



        // Update other fields
        $posts->title = $request->title;
        $posts->content = $request->content;



        // Save the changes to the database
        $posts->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Post Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('all.post')->with($notification);
    }

    public function DeletePost($id)
    {
        $posts = Post::findOrFail($id);

        // Delete the category's image if it exists
        if ($posts->photo) {
            // Determine the file path
            $imagePath = public_path('upload/post_images/' . $posts->photo);

            // Check if the file exists before attempting to delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the category from the database
        $posts->delete();

        // Redirect back with a success message
        $notification = [
            'message' => 'Post Deleted',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }

    public function ShowBlog($id)
    {
        $post = Post::findOrFail($id);
        $postss = Post::all();
        return view('blog', compact('post', 'postss'));
    }



}
