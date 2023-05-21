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
        return view('index',['categories' => $category,'languageId'=> $language,'data' => $data]);
    }

    public function categories($language = 'vi-VN'){
        $category = CategoriesModels::where('LanguageId','=',$language)->get();
        return view('categories',['categories' => $category,'languageId'=> $language]);
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

    public function contact($language = 'vi-VN') {
        $category = CategoriesModels::where('LanguageId','=',$language)->get();
        return view('contact',['categories' => $category,'languageId'=> $language]);
    }

    public function blog($language = 'vi-VN'){
        $category = CategoriesModels::where('LanguageId','=',$language)->get();
        return view('blog',['categories' => $category,'languageId'=> $language]);
    }

    public function NotFound($language = 'vi-VN'){
        $category = CategoriesModels::where('LanguageId','=',$language)->get();
        return view('404',['categories' => $category,'languageId'=> $language]);
    }

    public function About($language = 'vi-VN'){
        $category = CategoriesModels::where('LanguageId','=',$language)->get();
        return view('about',['categories' => $category,'languageId'=> $language]);
    }
    public function pages($language = 'vi-VN'){
        $category = CategoriesModels::where('LanguageId','=',$language)->get();
        return view('pages',['categories' => $category,'languageId'=> $language]);
    }
}
