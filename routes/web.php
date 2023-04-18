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
    Route::get('/categories','categories')->name('categories');
    Route::get('/detail','detail')->name('detail');
    Route::get('/cart','cart')->name('cart');
    Route::get('/checkout','checkout')->name('checkout');
    Route::get('/login','login')->name('loging');
    Route::get('/contact','contact')->name('contact');
    Route::get('/blog','blog')->name('blog');
    Route::get('/404','NotFound')->name('404');
    Route::get('/about','About')->name('about');
    Route::get('/pages','pages')->name('pages');
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
