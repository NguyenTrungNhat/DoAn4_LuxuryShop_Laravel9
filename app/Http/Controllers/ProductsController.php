<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ProductsModels;
use App\Models\ProducttranslationModels;
use App\Models\AttributespricesModels;
use App\Models\ListImageProductModels;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = ProductsModels::all();
        return view('/admin/Product/product', ['Products' => $products]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('/admin/Product/create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $Path = $request->file('ImageFile')->store('public/Products');
        ProductsModels::create([
            'Active' => 1,
            'BestSellers' => 0,
            'CatID' => $request->CatID,
            'Discount' => 0,
            'HomeFlag' => 0,
            'SeoAlias' => $request->SeoAlias,
            'Title' => $request->Title,
            'UnitsInStock' => $request->UnitsInStock,
        ]);
        $ProductNewId = ProductsModels::latest()->first();
        ProducttranslationModels::create([
            'Description' => $request->Description,
            'Details' => $request->Details,
            'LanguageId' => $request->LanguageId,
            'Name' => $request->Name,
            'ProductId' => $ProductNewId->Id,
            'SeoAlias' => $request->SeoAlias,
            'SeoDescription' => $request->SeoDescription,
            'SeoTitle' => $request->SeoTitle
        ]);
        AttributespricesModels::create([
            'Active' => 1,
            'Price' => $request->Price,
            'ProductID' => $ProductNewId->Id
        ]);
        ListImageProductModels::create([
            'ProductID' => $ProductNewId->Id,
            'ImagePath' => substr($Path,7,strlen($Path)),
            'Caption' => 'Thumbnail Image',
            'IsDefault' => 1,
            'SortOrder' => 1
        ]);

        return redirect()->route('admin.Products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = ProductsModels::find($id);
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = DB::table('products')
            ->join('attributesprices', 'attributesprices.ProductID', '=', 'products.Id')
            ->join('producttranslation', 'producttranslation.ProductId', '=', 'products.Id')    
            ->select('products.*','producttranslation.Description','producttranslation.Details','producttranslation.LanguageId','producttranslation.Name',
            'producttranslation.SeoAlias','producttranslation.SeoDescription','producttranslation.SeoTitle','attributesprices.Price')
            ->where('products.Id','=',$id)
            ->get();
        return view('admin/Product/update', ['product' => $product]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $producttranslation = DB::table('producttranslation')
            ->where('ProductId', $id)
            ->where('LanguageId', 'vi-VN')->update([
                'Name' => $request->Name,
                'Details' => $request->Details,
                'Description' => $request->Description,
                'SeoDescription' => $request->SeoDescription,
                'SeoTitle' => $request->SeoTitle,
                'SeoAlias' => $request->SeoAlias,
                'LanguageId' => $request->LanguageId
            ]);
        

        $attributesprices = DB::table('attributesprices')->where('ProductID', $id)->update([
            'Price' => $request->Price
        ]);
        
        ProductsModels::find($id)->update([
            'CatID' => $request->CatID,
            'Discount' => $request->Discount,
            'UnitsInStock' => $request->UnitsInStock,
            'Title' => $request->Title
        ]);
        return redirect()->route('admin.Products.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $attributesprices = DB::table('listproductimage')->where('ProductID', $id)->delete();
        $producttranslation = DB::table('producttranslation')->where('ProductId', $id)
            ->where('LanguageId', 'vi-VN')->delete();
        $attributesprices = DB::table('attributesprices')->where('ProductID', $id)->delete();
        ProductsModels::find($id)->delete();
        return redirect()->route('admin.Products.index');
    }

    
}
