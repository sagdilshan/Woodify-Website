<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\CategoryModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use App\Models\Post;

class AllCategoryController extends Controller
{



    public function MainAllCategory()
    {
        $categorys = CategoryModel::get();
        return view('website-pages.admin.main_category.all_category', compact('categorys'));
    }
    public function MainAddCategory()
    {

        return view('website-pages.admin.main_category.add_category');
    }
    public function MainStoreCategory(Request $request)
    {
        // Attempt validation
        $validator = Validator::make($request->all(), [
            'slug' => 'required|unique:all_category,slug',
        ]);

        // Check if validation fails
        if ($validator->fails()) {
            $errors = $validator->errors();

            $errorMessage = '';
            foreach ($errors->all() as $message) {
                $errorMessage .= $message . ' '; // Concatenate all error messages
            }

            // Prepare error notification
            $notification = [
                'message' => $errorMessage,
                'alert-type' => 'error' // Use an 'error' alert type or any other type you have defined for errors
            ];

            // Redirect back with error notification
            return redirect()->back()->with($notification)->withInput();
        }

        $category = new CategoryModel;
        $category->name = trim($request->name);
        $category->slug = trim($request->slug);
        $category->status = trim($request->status);
        $category->created_by = Auth::user()->id;

        if ($request->file('photo')) {
            $file = $request->file('photo');

            $filename = date('Ymd') . $file->getClientOriginalName(); // 0215.a.gayathr.png
            $file->move(public_path('upload/category_images'), $filename);
            $category['photo'] = $filename;
        }




        $category->save();

        $notification = array(
            'message' => 'Category Created Succssfully',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category.list')->with($notification);

    }

    public function index1()
    {
        $categories = CategoryModel::where('status', 'active')->get();
        return view('welcome', compact('categories'));
    }



    public function MainDeleteCategory($id)
    {
        $category = CategoryModel::findOrFail($id);

        // Delete the category's image if it exists
        if ($category->photo) {
            // Determine the file path
            $imagePath = public_path('upload/category_images/' . $category->photo);

            // Check if the file exists before attempting to delete it
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }

        // Delete the category from the database
        $category->delete();

        // Redirect back with a success message
        $notification = [
            'message' => 'Category Deleted',
            'alert-type' => 'success'
        ];

        return redirect()->back()->with($notification);
    }

    public function MainEditCategory($id)
    { {
            $category = CategoryModel::findOrFail($id);
            $CategoryData = CategoryModel::find($id);
            $statuses = CategoryModel::distinct()->pluck('status'); // Fetch unique status values from the users table
            return view('website-pages.admin.main_category.edit_category', compact('category', 'statuses', 'CategoryData'));
        }
    }

    public function MainUpdateCategory(Request $request)
    {
        $pid = $request->id;
        $category = CategoryModel::findOrFail($pid);



        // Update other fields
        $category->name = $request->name;
        $category->status = $request->status;



        // Save the changes to the database
        $category->save();

        //Redirect back with a success message
        $notification = array(
            'message' => 'Category Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category.list')->with($notification);
    }


}
