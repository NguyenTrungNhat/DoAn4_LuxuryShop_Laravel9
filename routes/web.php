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
    Route::get('/{languageId?}/categories','categories')->name('categories');
    Route::get('/{languageId?}/detail','detail')->name('detail');
    Route::get('/{languageId?}/checkout','checkout')->name('checkout');
    Route::get('/{languageId?}/login','login')->name('loging');
    Route::get('/{languageId?}/contact','contact')->name('contact');
    Route::get('/{languageId?}/blog','blog')->name('blog');
    Route::get('/{languageId?}/404','NotFound')->name('404');
    Route::get('/{languageId?}/about','About')->name('about');
    Route::get('/{languageId?}/pages','pages')->name('pages');
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

Route::controller(App\Http\Controllers\CartController::class)->group(function(){
    Route::get('/vi-VN/cartList', 'cartList')->name('cart.list');
    Route::post('cart', 'addToCart')->name('cart.store');
    Route::post('update-cart', 'updateCart')->name('cart.update');
    Route::post('remove', 'removeCart')->name('cart.remove');
    Route::post('clear', 'clearAllCart')->name('cart.clear'); 
});



