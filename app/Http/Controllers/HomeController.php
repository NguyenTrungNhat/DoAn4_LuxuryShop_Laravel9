<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CategoriesModels;
use App\Models\CategoriestranslationModels;
use App\Models\ProductsModels;
use App\Models\ProducttranslationModels;
use Illuminate\Support\Facades\DB;
use Psy\Readline\Hoa\Console;

class HomeController extends Controller
{
    public function index($language = 'vi-VN')
    {
        $category = CategoriestranslationModels::where('LanguageId', '=', $language)->get();
        $data = ProductsModels::limit(8)->get();
        return view('index', ['categories' => $category, 'languageId' => $language, 'data' => $data]);
    }

    public function categories($language = 'vi-VN')
    {
        $category = CategoriestranslationModels::where('LanguageId', '=', $language)->get();
        $data = ProductsModels::limit(9)->get();
        return view('categories', ['categories' => $category, 'languageId' => $language, 'data' => $data]);
    }

    public function productWithCategories($catID, $language = 'vi-VN')
    {
        $category = CategoriestranslationModels::where('LanguageId', '=', $language)->get();
        $data = ProductsModels::where('CatID', '=', $catID)->limit(9)->get();
        return view('categories', ['categories' => $category, 'languageId' => $language, 'data' => $data]);
    }

    public function detail($id, $language = 'vi-VN')
    {
        $category = CategoriestranslationModels::where('LanguageId', '=', $language)->get();
        $data = ProductsModels::where('Id', '=', $id)->get();
        $dataWithCat = ProductsModels::where('CatID', '=', $data->first()->CatID)->limit(9)->get();
        return view('detail', ['categories' => $category, 'languageId' => $language, 'data' => $data, 'dataWithCat' => $dataWithCat]);
    }

    public function cart()
    {
        return view('cart');
    }

    public function checkout()
    {
        return view('checkout');
    }

    public function login($language = 'vi-VN')
    {
        $category = CategoriestranslationModels::where('LanguageId', '=', $language)->get();
        return view('login', ['categories' => $category, 'languageId' => $language]);
    }

    public function contact($language = 'vi-VN')
    {
        $category = CategoriestranslationModels::where('LanguageId', '=', $language)->get();
        return view('contact', ['categories' => $category, 'languageId' => $language]);
    }

    public function blog($language = 'vi-VN')
    {
        $category = CategoriestranslationModels::where('LanguageId', '=', $language)->get();
        return view('blog', ['categories' => $category, 'languageId' => $language]);
    }

    public function NotFound($language = 'vi-VN')
    {
        $category = CategoriestranslationModels::where('LanguageId', '=', $language)->get();
        return view('404', ['categories' => $category, 'languageId' => $language]);
    }

    public function About($language = 'vi-VN')
    {
        $category = CategoriestranslationModels::where('LanguageId', '=', $language)->get();
        return view('about', ['categories' => $category, 'languageId' => $language]);
    }
    public function pages($language = 'vi-VN')
    {
        $category = CategoriestranslationModels::where('LanguageId', '=', $language)->get();
        return view('pages', ['categories' => $category, 'languageId' => $language]);
    }

    public function search($language = 'vi-VN', Request $request)
    {
        $category = CategoriestranslationModels::where('LanguageId', '=', $language)->get();
        if ($request->category == 'all') {
            $listProductTran = DB::table('products')
                ->join('producttranslation', 'producttranslation.ProductId', '=', 'products.Id')
                ->join('listproductimage', 'listproductimage.ProductID', '=', 'products.Id')
                ->join('attributesprices', 'attributesprices.ProductID', '=', 'products.Id')
                ->select('products.Id', 'producttranslation.Name', 'listproductimage.ImagePath', 'attributesprices.Price')
                ->where('producttranslation.LanguageId', '=', $language)
                ->where('producttranslation.Name', 'like', "%$request->value%")
                ->groupBy('products.Id', 'producttranslation.Name', 'listproductimage.ImagePath', 'attributesprices.Price')
                ->get();
            $uniqueResults = $listProductTran->groupBy('Id')->map(function ($group) {
                return $group->first();
            })->values();
            return view('categoriesSearch', ['categories' => $category, 'languageId' => $language, 'data' => $uniqueResults]);
        }else{
            $listProductTran = DB::table('products')
                ->join('producttranslation', 'producttranslation.ProductId', '=', 'products.Id')
                ->join('listproductimage', 'listproductimage.ProductID', '=', 'products.Id')
                ->join('attributesprices', 'attributesprices.ProductID', '=', 'products.Id')
                ->select('products.Id', 'producttranslation.Name', 'listproductimage.ImagePath', 'attributesprices.Price')
                ->where('products.CatID','=',$request->category)
                ->where('producttranslation.LanguageId', '=', $language)
                ->where('producttranslation.Name', 'like', "%$request->value%")
                ->groupBy('products.Id', 'producttranslation.Name', 'listproductimage.ImagePath', 'attributesprices.Price')
                ->get();
            $uniqueResults = $listProductTran->groupBy('Id')->map(function ($group) {
                return $group->first();
            })->values();
            return view('categoriesSearch', ['categories' => $category, 'languageId' => $language, 'data' => $uniqueResults]);
        }




        
    }
}
