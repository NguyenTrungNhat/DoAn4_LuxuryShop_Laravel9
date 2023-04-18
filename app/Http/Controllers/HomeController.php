<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriesModels;
use App\Models\ProductsModels;
use App\Models\ProducttranslationModels;
use Illuminate\Support\Facades\DB;
use Psy\Readline\Hoa\Console;

class HomeController extends Controller
{
    public function index($language = 'vi-VN'){
        $category = CategoriesModels::where('LanguageId','=',$language)->get();
        //$products = ProducttranslationModels::where('LanguageId','=',$language)->get();
        $data = DB::table('products')
            ->join('attributesprices', 'attributesprices.ProductID', '=', 'products.Id')
            ->join('producttranslation', 'producttranslation.ProductId', '=', 'products.Id')    
            ->join('listproductimage', 'listproductimage.ProductID', '=', 'products.Id')
            ->select('products.*','producttranslation.*','attributesprices.Price','listproductimage.ImagePath')
            ->where('producttranslation.LanguageId','=',$language)
            ->limit(8)
            ->get();
        //dd($data);
        return view('index',['categories' => $category,'data' => $data]);
    }

    public function categories(){
        return view('categories');
    }

    public function detail() {
        return view('detail');
    }

    public function cart() {
        return view('cart');
    }

    public function checkout() {
        return view('checkout');
    }

    public function login() {
        return view('login');
    }

    public function contact() {
        return view('contact');
    }

    public function blog(){
        return view('blog');
    }

    public function NotFound(){
        return view('404');
    }

    public function About(){
        return view('about');
    }
    public function pages(){
        return view('pages');
    }
}
