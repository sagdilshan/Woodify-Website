<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\SellerController;
use App\Http\Controllers\CustomerController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';




//prevent unatherized access(illegale action.. seller log admin acc )
Route::middleware(['auth','role:admin'])->group(function(){

    Route::get('/admin/dashboard', [AdminController::class, 'AdminDashboard'])->name('admin.dashboard');
    Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');

}); // end group admin middlewere

Route::middleware(['auth','role:seller'])->group(function(){

    Route::get('/seller/dashboard', [SellerController::class, 'SellerDashboard'])->name('seller.dashboard');
    Route::get('/seller/logout', [SellerController::class, 'SellerLogout'])->name('seller.logout');
}); // end group seller middlewere

Route::middleware(['auth','role:customer'])->group(function(){

    Route::get('/customer/dashboard', [CustomerController::class, 'CustomerDashboard'])->name('customer.dashboard');
    Route::get('/customer/logout', [CustomerController::class, 'CustomerLogout'])->name('customer.logout');
}); // end group customer middlewere
