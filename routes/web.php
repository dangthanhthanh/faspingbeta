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
    Route::resource('product', ProductController::class);
    Route::resource('user', UserController::class);
    Route::resource('order', OrderController::class);
    Route::resource('blog', BlogController::class);



});