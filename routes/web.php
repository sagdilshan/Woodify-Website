<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ContactController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\RoleController;
use App\Http\Controllers\DatabaseExportController;
use App\Http\Controllers\Backend\AllCategoryController;
use App\Http\Controllers\Backend\PostController;
use App\Http\Controllers\ProductController;


use App\Http\Controllers;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});





// Route::get('/', [AllCategoryController::class, 'index1']);

Route::get('/', [PostController::class, 'indexx']);
Route::get('shop', [ProductController::class, 'shopindex'])->name('shop');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';

Route::controller(ContactController::class)->group(function () {

    Route::get('/contact-us', 'AllContact')->name('contactus');
    Route::post('contact-us/new', 'StoreContact')->name('store.contact');

});

Route::controller(PostController::class)->group(function () {

    Route::get('all/blog/{id}', 'ShowBlog')->name('blog.show');

});

// Route::view('/shop', 'shop')->name('shop');

// Route::view('/blog', 'blog')->name('blog');
// Route::get('/blog/{id}', [PostController::class, 'ShowBlog'])->name('blog.show');


// Route::get('/blog/{id}', [AllCategoryController::class, 'blog']);


//prevent unatherized access(illegale action.. seller log admin acc )
Route::middleware(['auth', 'role:admin'])->group(function () {

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');

    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
    Route::get('/admin/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
    Route::post('/admin/profile/store', [AdminController::class, 'AdminProfileStore'])->name('admin.profile.store');
    Route::post('/admin/update/password', [AdminController::class, 'AdminUpdatePassword'])->name('admin.update.password');

    Route::get('/admin/export-database', [DatabaseExportController::class, 'exportDatabase'])->name('database.export');

}); // end group admin middlewere

Route::middleware(['auth', 'role:seller'])->group(function () {

    Route::get('/seller/dashboard', [SellerController::class, 'SellerDashboard'])->name('seller.dashboard');
    Route::get('/seller/logout', [SellerController::class, 'SellerLogout'])->name('seller.logout');
    Route::get('/seller/profile', [SellerController::class, 'SellerProfile'])->name('seller.profile');
    Route::post('/seller/profile/store', [SellerController::class, 'SellerProfileStore'])->name('seller.profile.store');
    Route::post('/seller/update/password', [SellerController::class, 'SellerUpdatePassword'])->name('seller.update.password');
}); // end group seller middlewere

Route::middleware(['auth', 'role:customer'])->group(function () {

    Route::get('/customer/dashboard', [CustomerController::class, 'CustomerDashboard'])->name('customer.dashboard');
    Route::get('/customer/logout', [CustomerController::class, 'CustomerLogout'])->name('customer.logout');
    Route::get('/customer/profile', [CustomerController::class, 'CustomerProfile'])->name('customer.profile');
    Route::post('/customer/profile/store', [CustomerController::class, 'CustomerProfileStore'])->name('customer.profile.store');
    Route::post('/customer/update/password', [CustomerController::class, 'CustomerUpdatePassword'])->name('customer.update.password');
    Route::get('/cart', [CustomerController::class, 'Cart'])->name('cart');
    Route::get('/checkout', [CustomerController::class, 'Checkout'])->name('checkout');

}); // end group customer middlewere

Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::controller(CategoryController::class)->group(function () {

        Route::get('/admin/all/category', 'AllCategory')->name('all.category');
        Route::get('/admin/add/category', 'AddCategory')->name('add.category');
        Route::post('/admin/store/category', 'StoreCategory')->name('store.category');
        Route::get('/admin/edit/category/{id}', 'EditCategory')->name('edit.category');
        Route::post('/admin/update/category', 'UpdateCategory')->name('update.category');
        Route::get('/admin/delete/category/{id}', 'DeleteCategory')->name('delete.category');

    });

    // Role permission
    Route::controller(RoleController::class)->group(function () {

        Route::get('/admin/all/permission', 'AllPermission')->name('all.permission');
        Route::get('/admin/add/permission', 'AddPermission')->name('add.permission');
        Route::post('/admin/store/permission', 'StorePermission')->name('store.permission');
        Route::get('/admin/edit/permission/{id}', 'EditPermission')->name('edit.permission');
        Route::post('/admin/update/permission', 'UpdatePermission')->name('update.permission');
        Route::get('/admin/delete/permission/{id}', 'DeletePermission')->name('delete.permission');

    });

    Route::controller(RoleController::class)->group(function () {

        Route::get('/admin/all/roles', 'AllRoles')->name('all.roles');
        Route::get('/admin/add/roles', 'AddRoles')->name('add.roles');
        Route::post('/admin/store/roles', 'StoreRoles')->name('store.roles');
        Route::get('/admin/edit/roles/{id}', 'EditRoles')->name('edit.roles');
        Route::post('/admin/update/roles', 'UpdateRoles')->name('update.roles');
        Route::get('/admin/delete/roles/{id}', 'DeleteRoles')->name('delete.roles');

    });

    //admin user all route
    Route::controller(AdminController::class)->group(function () {

        Route::get('/admin/all/admin', 'AllAdmin')->name('all.admin');
        Route::get('/admin/add/users', 'AddUsers')->name('add.users');
        Route::post('/admin/store/users', 'StoreUsers')->name('store.users');
        Route::get('/admin/edit/admin/{id}', 'EditAdmin')->name('edit.admin');
        Route::post('/admin/update/admin/{id}', 'UpdateAdmin')->name('update.admin');
        Route::get('/admin/delete/admin/{id}', 'DeleteAdmin')->name('delete.admin');

    });

    //customer user all route
    Route::controller(AdminController::class)->group(function () {

        Route::get('/admin/all/customer', 'AllCustomer')->name('all.customer');
        Route::get('/admin/edit/customer/{id}', 'EditCustomer')->name('edit.customer');
        Route::post('/admin/update/customer/{id}', 'UpdateCustomer')->name('update.customer');
        Route::get('/admin/delete/customer/{id}', 'DeleteCustomer')->name('delete.customer');

    });

    //seller user all route
    Route::controller(AdminController::class)->group(function () {

        Route::get('/admin/all/seller', 'AllSeller')->name('all.seller');
        Route::get('/admin/edit/seller/{id}', 'EditSeller')->name('edit.seller');
        Route::post('/admin/update/seller/{id}', 'UpdateSeller')->name('update.seller');
        Route::get('/admin/delete/seller/{id}', 'DeleteSeller')->name('delete.seller');

    });

    //sub & main category
    Route::controller(AllCategoryController::class)->group(function () {

        Route::get('/all/category', 'MainAllCategory')->name('all.category.list');
        Route::get('/add/category', 'MainAddCategory')->name('add.category.list');
        Route::post('/store/category', 'MainStoreCategory')->name('store.category.list');
        Route::get('/edit/category/{id}', 'MainEditCategory')->name('edit.category.list');
        Route::post('/update/category/{id}', 'MainUpdateCategory')->name('update.category.list');
        // Route::post('/update-category/{id}', [AllCategoryController::class, 'MainUpdateCategory'])->name('update.category');
        Route::get('/delete/category/{id}', 'MainDeleteCategory')->name('delete.category.list');

    });

    //post
    Route::controller(PostController::class)->group(function () {

        Route::get('/all/post', 'AllPost')->name('all.post');
        Route::get('/add/post', 'AddPost')->name('add.post');
        Route::post('/store/post', 'StorePost')->name('store.post');
        Route::get('/edit/post/{id}', 'EditPost')->name('edit.post');
        Route::post('/update/post/{id}', 'UpdatePost')->name('update.post');
        Route::get('/delete/post/{id}', 'DeletePost')->name('delete.post');

    });

    Route::controller(ProductController::class)->group(function () {

        Route::get('manage/products', 'ManageAllProduct')->name('manage.all.products');
        Route::get('manage/view/products/{id}', 'ManageViewProduct')->name('manage.view.products');
        Route::get('manage/edit/products/{id}', 'ManageEditProduct')->name('manage.edit.products');
        Route::post('manage/update/products/{id}', 'ManageUpdateProduct')->name('manage.update.products');

    });

    Route::controller(AdminController::class)->group(function () {

        Route::get('/all/contact', 'AllContact')->name('all.contact');
        // Route::get('all/view/products/{id}', 'ManageViewProduct')->name('manage.view.products');
        Route::get('all/edit/contact/{id}', 'AllEditContact')->name('edit.contact');
        Route::post('all/update/contact/{id}', 'AllUpdateContact')->name('update.contact');

    });




}); // end group admin middlewere

Route::middleware(['auth', 'role:seller'])->group(function () {

    Route::controller(ProductController::class)->group(function () {

        Route::get('/seller/products', 'SellerAllProduct')->name('seller.all.products');
        Route::get('seller/add/products', 'SellerAddProduct')->name('seller.add.products');
        Route::get('seller/view/products/{id}', 'SellerViewProduct')->name('seller.view.products');
        Route::post('seller/store/products', 'SellerStoreProduct')->name('seller.store.products');
        Route::get('seller/edit/products/{id}', 'SellerEditProduct')->name('seller.edit.products');
        Route::post('seller/update/products/{id}', 'SellerUpdateProduct')->name('seller.update.products');
        Route::get('seller/delete/products/{id}', 'SellerDeleteProduct')->name('seller.delete.products');

    });

    Route::controller(SellerController::class)->group(function () {

        Route::get('/seller/inquires', 'MyInquires')->name('seller.inquires');

    });


});

Route::middleware(['auth', 'role:customer'])->group(function () {

    Route::controller(CustomerController::class)->group(function () {

        Route::get('/my/inquires', 'MyInquires')->name('my.inquires');

    });


});



