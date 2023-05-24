<?php

use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/wellcome', function(){
    return view('welcome');
})->name('wellcome');
Route::prefix('admin')->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    Route::resource('shop', ShopController::class);
    Route::get('shop/setStatus/{id}/{status?}', [ShopController::class, 'setStatus'])->name('shop.setStatus');
   
    Route::resource('product', ProductController::class);
    Route::get('product/setStatus/{id}/{status?}', [ProductController::class, 'setStatus'])->name('product.setStatus');
    
    Route::resource('order', OrderController::class);
    Route::get('order/setStatus/{id}/{status?}', [OrderController::class, 'setStatus'])->name('order.setStatus');
   
    Route::resource('blog', BlogController::class);
    Route::get('blog/setStatus/{id}/{status?}', [BlogController::class, 'setStatus'])->name('blog.setStatus');
    
    Route::resource('user', UserController::class);
    Route::get('user/setStatus/{id}/{status?}', [UserController::class, 'setStatus'])->name('user.setStatus');
});