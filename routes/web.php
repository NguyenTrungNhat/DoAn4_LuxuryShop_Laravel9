<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/tmp', function () {
    return view('layout');
});

Route::controller(App\Http\Controllers\HomeController::class)->group(function(){
    Route::get('/{languageId?}','index')->name('home');
    Route::get('/categories/{languageId?}','categories')->name('categories');
    Route::get('/detail/{languageId?}','detail')->name('detail');
    Route::get('/login/{languageId?}','login')->name('loging');
    Route::get('/contact/{languageId?}','contact')->name('contact');
    Route::get('/blog/{languageId?}','blog')->name('blog');
    Route::get('/404/{languageId?}','NotFound')->name('404');
    Route::get('/about/{languageId?}','About')->name('about');
    Route::get('/pages/{languageId?}','pages')->name('pages');
});

Route::controller(App\Http\Controllers\adminController::class)->group(function(){
    Route::get('/admin/Index','indexAdmin')->name('homeAdmin');   
});

Route::controller(App\Http\Controllers\ProductsController::class)->group(function(){
    Route::get('/admin/Products/index','index')->name('admin.Products.index');   
    Route::get('/admin/Products/create','create')->name('admin.Products.create');   
    Route::post('/admin/Products/store','store')->name('admin.Products.store');   
    Route::get('/admin/Products/edit/{id?}','edit')->name('admin.Products.edit');   
    Route::post('/admin/Products/update/{id?}','update')->name('admin.Products.update'); 
    Route::get('/admin/Products/delete/{id?}','destroy')->name('admin.Products.delete'); 
});

Route::controller(App\Http\Controllers\ListImageProductController::class)->group(function(){
    Route::get('/admin/ListImageProduct/index','index')->name('admin.ListImageProduct.index'); 
    Route::get('/admin/ListImageProduct/create','create')->name('admin.ListImageProduct.create'); 
    Route::post('/admin/ListImageProduct/store','store')->name('admin.ListImageProduct.store');  
    Route::get('/admin/ListImageProduct/edit/{id?}','edit')->name('admin.ListImageProduct.edit'); 
    Route::get('/admin/ListImageProduct/delete/{id?}','destroy')->name('admin.ListImageProduct.delete');   
});

Route::controller(App\Http\Controllers\CartController::class)->group(function(){
    Route::get('/vi-VN/cartList', 'cartList')->name('cart.list');
    Route::post('cart', 'addToCart')->name('cart.store');
    Route::post('update-cart', 'updateCart')->name('cart.update');
    Route::post('remove', 'removeCart')->name('cart.remove');
    Route::post('clear', 'clearAllCart')->name('cart.clear'); 
    Route::get('/vi-VN/checkout','checkoutget')->name('cart.checkoutget');
    Route::post('/vi-VN/checkout','checkoutpost')->name('cart.checkoutpost');
});





