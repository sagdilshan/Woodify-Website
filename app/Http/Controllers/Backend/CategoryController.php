<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Category;

class CategoryController extends Controller
{
    public function AllCategory()
    {

        $categorys = Category::latest()->get();
        return view('website-pages.admin.category.all_category', compact('categorys'));
    }
    public function AddCategory()
    {

        return view('website-pages.admin.category.add_category');
    }


    public function StoreCategory(Request $request)
    {

        //validation
        $request->validate([
            'category_name' => 'required|unique:categories',

        ]);

        Category::insert([
            'category_name' => $request->category_name,


        ]);

        $notification = array(
            'message' => 'Category Saved',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);

    }

    public function EditCategory($id)
    {
        $categorys = Category::findOrFail($id);
        return view('website-pages.admin.category.edit_category', compact('categorys'));
    }

    public function UpdateCategory(Request $request)
    {

      $pid = $request->id;

        Category::findOrFail($pid)->update([
            'category_name' => $request->category_name,
        ]);

        $notification = array(
            'message' => 'Category Updated',
            'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);

    }

    public function DeleteCategory($id){
        Category::findOrFail($id)->delete();

        $notification = array(
            'message' => 'Category Deleted',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }

}
