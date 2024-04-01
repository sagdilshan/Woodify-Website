<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;
use App\Models\CategoryModel;


class PostController extends Controller
{
    public function AllPost()
    {
        $posts = Post::with('user')->get();

        return view('website-pages.admin.post.all_post', compact('posts'));
    }

    public function indexx()
    {
        // Fetch the latest 2 posts
        // $posts = Post::latest()->take(2)->get();
        // $posts = Post::all();
        $recents= Post::orderBy('id', 'asc')->take(7)->get();
        $posts = Post::orderBy('id', 'asc')->take(2)->get();
        $categories = CategoryModel::where('status', 'active')->get();

        // Pass them to the view
        return view('welcome', compact('posts', 'categories','recents'));
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
        return view('blog', compact('post','postss'));
    }



}
